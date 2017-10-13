<?php

namespace AppBundle\Action;

use Symfony\Component\DependencyInjection\ContainerInterface;
use AppBundle\Entity\Resource;
use AppBundle\Entity\Count;

class UpdateCategoriesStart{
    private $container;

    protected $twig;
    protected $mailer;
    
    public function __construct(ContainerInterface $container, \Twig_Environment $twig, \Swift_Mailer $mailer)
    {
        $this->container = $container;

        $this->twig = $twig;
        $this->mailer = $mailer;
    }

    public function updateCategories()
    {
        session_start();

        $em = $this->container
            ->get('doctrine')
            ->getEntityManager();


        $query = $em->createQueryBuilder()
            ->select('s')
            ->from('AppBundle:Search', 's')
            ->getQuery();


        // получение всех поисков из таблицы
        $searches = $query->getResult();

        $queryRes = $em->createQueryBuilder()
            ->select('r')
            ->from('AppBundle:Resource', 'r')
            ->getQuery();


        // получение всего содержимого таблицы в БД Resource
        $resources = $queryRes->getResult();

        $resourceGetJobId = [];
        foreach ($resources as $resource){
            // наполняем данный массив всеми job_id из таблицы resource
            $resourceGetJobId[] = $resource->getJobId();
        }

        $newResourceGetJobId = [];

        if($searches) {

            // вводим все необходимые данные для подключения к upwork api
            $_SESSION['access_token'] = $this->container->getParameter('access_token');
            $_SESSION['access_secret'] = $this->container->getParameter('access_secret');

            $config = new \Upwork\API\Config(
                array(
                    'consumerKey'       => $this->container->getParameter('consumer_key'),
                    'consumerSecret'    => $this->container->getParameter('consumer_secret'),
                    'accessToken'       => $_SESSION['access_token'],
                    'accessSecret'      => $_SESSION['access_secret'],
                    'debug'             => false,
                    'authType'          => 'OAuthPHPLib'
                )
            );

            $client = new \Upwork\API\Client($config);

            if (!empty($_SESSION['access_token']) && !empty($_SESSION['access_secret'])) {
                $client->getServer()
                    ->getInstance()
                    ->addServerToken(
                        $config::get('consumerKey'),
                        'access',
                        $_SESSION['access_token'],
                        $_SESSION['access_secret'],
                        0
                    );
            } else {
                $accessTokenInfo = $client->auth();
            }

            // объект из библиотеки upwork для получения Search for jobs
            $jobs = new \Upwork\API\Routers\Jobs\Search($client);

            // объект из библиотеки upwork для получения Get job profile
            $profile = new \Upwork\API\Routers\Jobs\Profile($client);

            // проходим циклом по всем поискам в БД
            foreach($searches as $search) {

                // если поле action в настройках поиска = start
                if($search->getAction() == 'start'){

                    $d=0;
                    // для получения и обработки 500 response обьектов upwork
                    for($x=0; $x<=400; $x+=100){

                        // делаем соответствующий запрос, в запросе указываем только категорию из настроек поиска
                        $params = array(
                            'paging' => $x.';100',
                            'category2' => $search->getCategory(),
                            'skills' => ''
                        );

                        // получаем все response объкты от upwork по запросу Search for jobs
                        $data = $jobs->find($params);

                        // проходим циклом по полученным объектам
                        for($i=0; $i<count($data->jobs); $i++){

                            // обрабатываем полученные данные только если данных этого response upwork объекта нет в нашей таблице Resource
                            if(in_array($data->jobs[$i]->id, $resourceGetJobId)){
                                continue;
                            }

                            print '
                            ';
                            print ++$d.' proehali '.$search->getName().' '.$data->jobs[$i]->id;

                            $rating = 0;

                            // делаем запрос в запросе для получения Get job profile (полные данные о клиенте)
                            $spec = $profile->getSpecific($data->jobs[$i]->id);

                            // скрипт для получения avg. rate
                            $totalHourse = [];
                            $totalCharge = [];

                            if(!empty($spec->profile->assignments->assignment)){

                                foreach($spec->profile->assignments->assignment as $avg){

                                    if(!empty($avg->as_job_type) && $avg->as_job_type == 'Hourly') {

                                        if(!empty($avg->as_total_hours))
                                            $totalHourse[] = $avg->as_total_hours;

                                        if(!empty($avg->as_total_charge))
                                            $totalCharge[] = $avg->as_total_charge;
                                    }
                                }
                            }

                            $tH = array_sum($totalHourse);
                            $tC= array_sum($totalCharge);

                            if(empty($tH)) {
                                $tH=-1;
                                $avgRate = round($tC/$tH, 2);
                            } else $avgRate = round($tC/$tH, 2);

                            // наполняем массив скиллами
                            $allSkills = [];
                            for ($k = 0; $k < count($data->jobs[$i]->skills); $k++) {
                                $allSkills[] = $data->jobs[$i]->skills[$k];
                            }

                            // пополняем нашу таблицу Resource свежими данными
                            if(!in_array($data->jobs[$i]->id, $newResourceGetJobId)){

                                $result = new Resource;

                                $result->setSkills(implode(', ', $allSkills));

                                $result->setAvgRate($avgRate);

                                $result->setCreatedAt(time());

                                if(!empty($data->jobs[$i]->id))
                                    $result->setJobId($data->jobs[$i]->id);

                                if(!empty($data->jobs[$i]->job_type))
                                    $result->setJobType($data->jobs[$i]->job_type);

                                if(!empty($spec->profile->buyer->op_timezone))
                                    $result->setTymezone($spec->profile->buyer->op_timezone);

                                if(!empty($data->jobs[$i]->budget))
                                    $result->setBudget($data->jobs[$i]->budget);

                                if(!empty($spec->profile->candidates))
                                    $result->setCandidates(count($spec->profile->candidates->candidate));

                                if(!empty($data->jobs[$i]->url))
                                    $result->setUrl($data->jobs[$i]->url);

                                if(!empty($data->jobs[$i]->client->past_hires))
                                    $result->setPastHires($data->jobs[$i]->client->past_hires);

                                if(!empty($data->jobs[$i]->client->payment_verification_status))
                                    $result->setVerifStatus($data->jobs[$i]->client->payment_verification_status);

                                if(!empty($spec->profile->buyer->op_tot_charge))
                                    $result->setTotalCharge($spec->profile->buyer->op_tot_charge);

                                if(!empty($data->jobs[$i]->workload))
                                    $result->setWorkload($data->jobs[$i]->workload);

                                if(!empty($spec->profile->op_pref_location))
                                    $result->setPrefLocation($spec->profile->op_pref_location);

                                if(!empty($spec->profile->op_pref_english_skill))
                                    $result->setEnglish($spec->profile->op_pref_english_skill);

                                if(!empty($data->jobs[$i]->client->feedback))
                                    $result->setFeedback(round($data->jobs[$i]->client->feedback, 2));

                                if(!empty($spec->profile->buyer->op_tot_hours))
                                    $result->setTotalHours(round($spec->profile->buyer->op_tot_hours, 2));

                                if(!empty($spec->profile->buyer->op_contract_date))
                                    $result->setMemberSince($spec->profile->buyer->op_contract_date);

                                if(!empty($spec->profile->op_contractor_tier))
                                    $result->setLevel($spec->profile->op_contractor_tier);

                                if(!empty($spec->profile->interviewees_total_active))
                                    $result->setInterviewees($spec->profile->interviewees_total_active);

                                if(!empty($data->jobs[$i]->client->country))
                                    $result->setCountry($data->jobs[$i]->client->country);

                                if(!empty($spec->profile->op_description))
                                    $result->setDescription($spec->profile->op_description);

                                if(!empty($data->jobs[$i]->title))
                                    $result->setTitle($data->jobs[$i]->title);

                                if(!empty($data->jobs[$i]->category2))
                                    $result->setCategory($data->jobs[$i]->category2);

                                if(!empty($data->jobs[$i]->subcategory2))
                                    $result->setSubcategory($data->jobs[$i]->subcategory2);

                                if(!empty($spec->profile->op_pref_odesk_hours))
                                    $result->setClientPreferredHoursOfExperience($spec->profile->op_pref_odesk_hours);

                                $em->persist($result);
                                $em->flush();
                            }

                            // для того чтобы не вводить данные с одного и того-же объекта в таблицу Resource
                            $newResourceGetJobId[] = $data->jobs[$i]->id;

                                                                    // Для отправления пользователям необходимых e-mail сообщений

                            // обработка настроек в поиске по категории
                            if(!empty($search->getCategory())){
                                if (empty($data->jobs[$i]->category2) || $search->getCategory() != $data->jobs[$i]->category2) {
                                    print '
                                    ';
                                    print 'category';
                                    continue;
                                }
                            }

                            // обработка настроек в поиске по субкатегории
                            if (!empty($search->getSubcategory())) {

                                if (empty($data->jobs[$i]->subcategory2) || !in_array($data->jobs[$i]->subcategory2, $search->getSubcategory())) {
                                    print '
                                    ';
                                    print 'subcategory';
                                    continue;
                                }
                            }

                            // обработка настроек в поиске по Client Feedback
                            if(!empty($search->getClientFeedbackScore())){
                                $feedback = str_replace(',', '.', $search->getClientFeedbackScore());

                                if(empty($data->jobs[$i]->client->feedback) || $data->jobs[$i]->client->feedback <= $feedback){

                                    print '
                                    ';
                                    print 'feedback';

                                    continue;
                                }
                            }

                            // обработка настроек в поиске по Experience Level
                            if(!empty($search->getExperienceLevel())){

                                $expLevel = str_replace(', ', ',', $search->getExperienceLevel());

                                $level = explode(',', $expLevel);
                                if(empty($spec->profile->op_contractor_tier) or !in_array($spec->profile->op_contractor_tier, $level)){

                                    print '
                                    ';
                                    print 'ExperienceLevel';

                                    continue;
                                }
                            }

                            // обработка настроек в поиске по Location
                            if (!empty($search->getLocation())) {

                                $loc = str_replace(', ', ',', $search->getLocation());
                                $countries = explode(',', $loc);

                                if (empty($data->jobs[$i]->client->country) or !in_array($data->jobs[$i]->client->country, $countries)) {
                                    print '
                                    ';
                                    print 'location';

                                    continue;
                                }
                            }

                            // обработка настроек в поиске по Client Timezone
                            if(!empty($search->getClientTimezone())){

                                $mainTimezone = explode(',', str_replace(', ', ',', $search->getClientTimezone()));
                                $zoneInResource = substr($spec->profile->buyer->op_timezone, 3, 6);
                                if(empty($spec->profile->buyer->op_timezone) or !in_array($zoneInResource, $mainTimezone)){

                                    print '
                                    ';
                                    print 'Timezone';

                                    continue;
                                }
                            }

                            // обработка настроек в поиске по Verified Payment
                            if(!empty($search->getVerifiedPayment())){

                                if(empty($data->jobs[$i]->client->payment_verification_status) || strtoupper($data->jobs[$i]->client->payment_verification_status) != strtoupper($search->getVerifiedPayment())){

                                    print '
                                    ';
                                    print 'verified';

                                    continue;
                                }
                            }

                            // обработка настроек в поиске по Money Spent
                            if (!empty($search->getMoneySpent())) {

                                if (empty($spec->profile->buyer->op_tot_charge) || $spec->profile->buyer->op_tot_charge < $search->getMoneySpent()) {

                                    print '
                                    ';
                                    print 'moneyspent';

                                    continue;
                                }
                            }

                            // обработка настроек в поиске по Budget
                            if(!empty($search->getBudget())){

                                if(empty($data->jobs[$i]->budget) || $search->getBudget() >= $data->jobs[$i]->budget) {

                                    print '
                                    ';
                                    print 'budget';

                                    continue;
                                }
                            }

                            // обработка настроек в поиске по Client History
                            if(!empty($search->getClientHistory())){
                                if(empty($data->jobs[$i]->client->past_hires) || $search->getClientHistory() > $data->jobs[$i]->client->past_hires){

                                    print '
                                    ';
                                    print 'clientHistory';

                                    continue;
                                }
                            }

                            // обработка настроек в поиске по Skills
                            if(!empty($search->getSkills())){
                                $mainSkills = explode(',', str_replace(', ', ',', $search->getSkills()));
                                $mainIntersect = array_intersect($mainSkills, $data->jobs[$i]->skills);

                                if(count($mainIntersect) < 1) {

                                    print '
                                    ';
                                    print 'skills';

                                    continue;
                                }
                            }

                            // обработка настроек в поиске по Client Preferred Freelancer Location
                            if (!empty($search->getClientPreferredFreelancerLocation())) {

                                $freelanceLoc = str_replace(', ', ',', $search->getClientPreferredFreelancerLocation());
                                $allFreelanceLoc = explode(',', $freelanceLoc);

                                if (!empty($spec->profile->op_pref_location) && in_array($spec->profile->op_pref_location, $allFreelanceLoc)) {

                                    print '
                                    ';
                                    print 'freelancer_location';

                                    continue;
                                }
                            }

                            // обработка настроек в поиске по Client English Level Preference
                            if (!empty($search->getClientEnglishLevelPreference()) && $search->getClientEnglishLevelPreference() != 'no') {

                                if ($spec->profile->op_pref_english_skill > $search->getClientEnglishLevelPreference()) {

                                    print '
                                    ';
                                    print 'freelancer_location';

                                    continue;
                                }
                            }

                            // обработка настроек в поиске по Client English Level Preference
                            if ($search->getClientEnglishLevelPreference() == 'no') {

                                if ($spec->profile->op_pref_english_skill != 0) {

                                    print '
                                    ';
                                    print 'english';

                                    continue;
                                }
                            }

                            // обработка настроек в поиске по Client Preferred Hours Of Experience
                            if (!empty($search->getClientPreferredHoursOfExperience()) && !empty($spec->profile->op_pref_odesk_hours)) {

                                if ($spec->profile->op_pref_odesk_hours > $search->getClientPreferredHoursOfExperience()) {

                                    print '
                                    ';
                                    print 'hours_experience';

                                    continue;
                                }
                            }

                            // обработка настроек в поиске по Chars In Description
                            if (!empty($search->getCharsInDescription())) {

                                if (empty($spec->profile->op_description) || $search->getCharsInDescription() > strlen($spec->profile->op_description)) {

                                    print '
                                    ';
                                    print 'chars';

                                    continue;
                                }
                            }

                            // обработка настроек в поиске по Keyword Search In Any
                            if(!empty($search->getKeywordSearchInAny())){
                                $key = explode(',', str_replace(', ', ',', $search->getKeywordSearchInAny()));

                                $replaceAny = str_replace(['.', ',', '!', '?', '\'', '"', '(', ')', ':', '*'], '', $spec->profile->op_description.' '.$data->jobs[$i]->title);
                                $wordInAny = explode(' ', $replaceAny);

                                $keywordSearchAny = [];

                                for ($w = 0; $w < count($key); $w++) {

                                    if(str_word_count($key[$w]) < 2){

                                        for($a=0; $a<count($wordInAny); $a++){

                                            $keywordSearchAny[] = preg_match('/^' . $key[$w] . '$/i', $wordInAny[$a]);

                                        }
                                    }

                                    elseif(str_word_count($key[$w]) > 1){
                                        if(strlen(stristr($spec->profile->op_description.' '.$data->jobs[$i]->title, $key[$w]))>0){
                                            $keywordSearchAny[] = 1;
                                        }
                                    }
                                }

                                if( !in_array(1, $keywordSearchAny) ){

                                    print '
                                    ';
                                    print 'key_any';

                                    continue;
                                }
                            }

                            // обработка настроек в поиске по Keyword Search In Title
                            if(!empty($search->getKeywordSearchInTitle())){
                                $key = explode(',', str_replace(', ', ',', $search->getKeywordSearchInTitle()));

                                $replaceTitle = str_replace(['.', ',', '!', '?', '\'', '"', '(', ')', ':', '*'], '', $data->jobs[$i]->title);
                                $wordInTitle = explode(' ', $replaceTitle);

                                $keywordSearchTitle = [];

                                for ($w = 0; $w < count($key); $w++) {

                                    if(str_word_count($key[$w]) < 2){

                                        for($t=0; $t<count($wordInTitle); $t++){
                                            $keywordSearchTitle[] = preg_match('/^' . $key[$w] . '$/i', $wordInTitle[$t]);
                                        }
                                    }

                                    elseif(str_word_count($key[$w]) > 1){
                                        if(strlen(stristr($data->jobs[$i]->title, $key[$w]))>0){

                                            $keywordSearchTitle[] = 1;
                                        }
                                    }
                                }

                                if( !in_array(1, $keywordSearchTitle) ){

                                    print '
                                    ';
                                    print 'key_title';

                                    continue;
                                }
                            }

                            // обработка настроек в поиске по Keyword Search In Description
                            if(!empty($search->getKeywordSearchInDescription())){
                                $key = explode(',', str_replace(', ', ',', $search->getKeywordSearchInDescription()));

                                $replaceDescription = str_replace(['.', ',', '!', '?', '\'', '"', '(', ')', ':', '*'], '', $spec->profile->op_description);
                                $wordInDescription = explode(' ', $replaceDescription);

                                $keywordSearchDescription = [];

                                for ($w = 0; $w < count($key); $w++) {

                                    if(str_word_count($key[$w]) < 2){

                                        for($d=0; $d<count($wordInDescription); $d++){
                                            $keywordSearchDescription[] = preg_match('/^' . $key[$w] . '$/i', $wordInDescription[$d]);
                                        }
                                    }

                                    elseif(str_word_count($key[$w]) > 1){
                                        if(strlen(stristr($spec->profile->op_description, $key[$w]))>0){
                                            $keywordSearchDescription[] = 1;
                                        }
                                    }
                                }

                                if( !in_array(1, $keywordSearchDescription) ){

                                    print '
                                    ';
                                    print 'key_des';

                                    continue;
                                }
                            }

                            // обработка настроек в поиске по Stop Words In Any
                            if(!empty($search->getStopWordsInAny())){
                                $stop = explode(',', str_replace(', ', ',', $search->getStopWordsInAny()));

                                $replaceAny = str_replace(['.', ',', '!', '?', '\'', '"', '(', ')', ':', '*'], '', $spec->profile->op_description.' '.$data->jobs[$i]->title);
                                $wordInAny = explode(' ', $replaceAny);

                                $stopWordsAny = [];

                                for ($w = 0; $w < count($stop); $w++) {

                                    if(str_word_count($stop[$w]) < 2){

                                        for($a=0; $a<count($wordInAny); $a++){
                                            $stopWordsAny[] = preg_match('/^' . $stop[$w] . '$/i', $wordInAny[$a]);
                                        }
                                    }

                                    elseif(str_word_count($stop[$w]) > 1){
                                        if(strlen(stristr($spec->profile->op_description.' '.$data->jobs[$i]->title, $stop[$w]))>0){
                                            $stopWordsAny[] = 1;
                                        }
                                    }
                                }

                                if( in_array(1, $stopWordsAny) ){

                                    print '
                                    ';
                                    print 'stop_any';

                                    continue;
                                }
                            }

                            // обработка настроек в поиске по Stop Words In Title
                            if(!empty($search->getStopWordsInTitle())){
                                $stop = explode(',', str_replace(', ', ',', $search->getStopWordsInTitle()));

                                $replaceTitle = str_replace(['.', ',', '!', '?', '\'', '"', '(', ')', ':', '*'], '', $data->jobs[$i]->title);
                                $wordInTitle = explode(' ', $replaceTitle);

                                $stopWordsTitle = [];

                                for ($w = 0; $w < count($stop); $w++) {

                                    if(str_word_count($stop[$w]) < 2){

                                        for($t=0; $t<count($wordInTitle); $t++){
                                            $stopWordsTitle[] = preg_match('/^' . $stop[$w] . '$/i', $wordInTitle[$t]);
                                        }
                                    }

                                    elseif(str_word_count($stop[$w]) > 1){
                                        if(strlen(stristr($data->jobs[$i]->title, $stop[$w]))>0){

                                            $stopWordsTitle[] = 1;
                                        }
                                    }
                                }

                                if( in_array(1, $stopWordsTitle) ){

                                    print '
                                    ';
                                    print 'stop_title';

                                    continue;
                                }
                            }

                            // обработка настроек в поиске по Stop Words In Description
                            if(!empty($search->getStopWordsInDescription())){
                                $stop = explode(',', str_replace(', ', ',', $search->getStopWordsInDescription()));

                                $replaceDescription = str_replace(['.', ',', '!', '?', '\'', '"', '(', ')', ':', '*'], '', $spec->profile->op_description);
                                $wordInDescription = explode(' ', $replaceDescription);

                                $stopWordsDescription = [];

                                for ($w = 0; $w < count($stop); $w++) {

                                    if(str_word_count($stop[$w]) < 2){

                                        for($d=0; $d<count($wordInDescription); $d++){

                                            $stopWordsDescription[] = preg_match('/^' . $stop[$w] . '$/i', $wordInDescription[$d]);

                                        }
                                    }

                                    elseif(str_word_count($stop[$w]) > 1){
                                        if(strlen(stristr($spec->profile->op_description, $stop[$w]))>0){
                                            $stopWordsDescription[] = 1;
                                        }
                                    }
                                }

                                if( in_array(1, $stopWordsDescription) ){

                                    print '
                                    ';
                                    print 'stop_des';

                                    continue;
                                }
                            }

                            print '
                            ';
                            print 'countRating->';

                                                                // Счётчик рейтинга

                            // счётчик рейтинга по avg. rate исходя из настроек поиска
                            if(!empty($search->getFilterAvgRate())){
                                if($search->getFilterAvgRate() <= $avgRate){
                                    ++$rating;
                                    print '
                                    ';
                                    print 'avgRat '.$rating;
                                }
                            }

                            // счётчик рейтинга по job type исходя из настроек поиска
                            if(!empty($search->getFilterJobType()) && !empty($data->jobs[$i]->job_type)){
                                if(strtolower($search->getFilterJobType()) == strtolower($data->jobs[$i]->job_type)) {

                                    ++$rating;
                                    print '
                                    ';
                                    print 'jobTypeRat '.$rating;
                                }
                            }

                            // счётчик рейтинга по budget исходя из настроек поиска
                            if(!empty($search->getFilterBudget()) && !empty($data->jobs[$i]->budget)){

                                if($search->getFilterBudget() < $data->jobs[$i]->budget) {
                                    ++$rating;
                                    print '
                                    ';
                                    print 'budgetRat'.$rating;
                                }
                            }

                            // счётчик рейтинга по client history исходя из настроек поиска
                            if(!empty($search->getFilterClientHistory()) && !empty($data->jobs[$i]->client->past_hires)){
                                if($search->getFilterClientHistory() <= $data->jobs[$i]->client->past_hires){
                                    ++$rating;

                                    print '
                                    ';
                                    print 'clientHistoryRat'.$rating;
                                }
                            }

                            // счётчик рейтинга по skills исходя из настроек поиска
                            if(!empty($search->getFilterSkills()) && !empty($data->jobs[$i]->skills)){

                                $mySkills = explode(',', str_replace(', ', ',', $search->getFilterSkills()));

                                $intersect = array_intersect($mySkills, $data->jobs[$i]->skills);

                                if(count($intersect)>0) {
                                    ++$rating;
                                    print '
                                    ';
                                    print 'skilRat '.$rating;
                                }
                            }

                            // счётчик рейтинга по money spent исходя из настроек поиска
                            if(!empty($search->getFilterMoneySpent()) && !empty($spec->profile->buyer->op_tot_charge)){
                                if($spec->profile->buyer->op_tot_charge > $search->getFilterMoneySpent()){
                                    ++$rating;
                                    print '
                                    ';
                                    print 'moneyspentRat '.$rating;
                                }
                            }

                            // счётчик рейтинга по verified payment исходя из настроек поиска
                            if(!empty($search->getFilterVerifiedPayment()) && !empty($data->jobs[$i]->client->payment_verification_status)){

                                if(strtoupper($search->getFilterVerifiedPayment()) == strtoupper($data->jobs[$i]->client->payment_verification_status)){
                                    ++$rating;
                                    print '
                                    ';
                                    print 'verifiedRat '.$rating;
                                }
                            }

                            // счётчик рейтинга по client feedback score исходя из настроек поиска
                            if(!empty($search->getFilterClientFeedbackScore()) && !empty($data->jobs[$i]->client->feedback)){

                                $feedbackFilter = str_replace(',', '.', $search->getFilterClientFeedbackScore());
                                if($data->jobs[$i]->client->feedback >= $feedbackFilter){
                                    ++$rating;
                                    print '
                                    ';
                                    print 'feedbackRat '.$rating;
                                }
                            }

                            // счётчик рейтинга по hours billed исходя из настроек поиска
                            if(!empty($search->getFilterHoursBilled()) && !empty($spec->profile->buyer->op_tot_hours)){
                                if($spec->profile->buyer->op_tot_hours > $search->getFilterHoursBilled()){
                                    ++$rating;
                                    print '
                                    ';
                                    print 'FilterHoursBilledRat '.$rating;
                                }
                            }

                            // счётчик рейтинга по client timezone исходя из настроек поиска
                            if(!empty($search->getFilterClientTimezone() && !empty($spec->profile->buyer->op_timezone))){

                                $arrayLoc = explode(',', str_replace(', ', ',', $search->getFilterClientTimezone()));

                                $zoneInResource = substr($spec->profile->buyer->op_timezone, 3, 6);

                                if(in_array($zoneInResource, $arrayLoc)){
                                    ++$rating;
                                    print '
                                    ';
                                    print 'TimezoneRat '.$rating;
                                }
                            }

                            // счётчик рейтинга по experience level исходя из настроек поиска
                            if(!empty($search->getFilterExperienceLevel()) && !empty($spec->profile->op_contractor_tier)){

                                if($spec->profile->op_contractor_tier == $search->getFilterExperienceLevel()){
                                    ++$rating;
                                    print '
                                    ';
                                    print 'ExperienceLevel '.$rating;
                                }
                            }

                            // счётчик рейтинга по location исходя из настроек поиска
                            if (!empty($search->getFilterLocation()) && !empty($data->jobs[$i]->client->country)) {
                                
                                $loc = str_replace(', ', ',', $search->getFilterLocation());
                                $countries = explode(',', $loc);

                                if (in_array($data->jobs[$i]->client->country, $countries)) {

                                    ++$rating;

                                    print '
                                    ';
                                    print 'locationRat '.$rating;
                                }
                            }

                            print '
                            ';
                            print $rating;
                            print '
                            ';

                            // если рейтинг больше или равен количеству звёзд введённых пользователем - отправка пользователю e-mail, обновление статистики относительно даного поиска
                            if( !empty($search->getFilterStars()) && $search->getFilterStars() <= $rating){

                                $name = $search->getName();
                                $url = $data->jobs[$i]->url;
                                $email = $search->getUser()->getEmail();
                                $title = $data->jobs[$i]->title;
                                $description = $spec->profile->op_description;
                                
                                $body = $this->renderTemplate($url, $title, $description, $rating);

                                $message = \Swift_Message::newInstance()
                                    ->setSubject($name)
                                    ->setContentType('text/html')
                                    ->setCharset('utf-8')
                                    ->setFrom('upboost@upboost.net')
                                    ->setTo($email)
                                    ->setBody($body)
                                ;
                                $this->mailer->send($message);

                                $count = new Count;

                                $count->setDate();
                                $count->setSearchId($search->getId());
                                $count->setResults(1);

                                $em->persist($count);
                                $em->flush();
                            }
                        }
                    }
                }
            }
        }
    
        print '
        ';
        print 'good';
        print '
        ';
    }

    public function renderTemplate($url, $title, $description, $rating)
    {
        return $this->twig->render(
            'Emails/newMessage.html.twig',
            array(
                'url' => $url,
                'title' => $title,
                'description' => $description,
                'rating' => $rating
            )
        );
    }
}

// cd /home/upboostn/public_html && /usr/bin/php-cli -q bin/console updating:search:results

// cd /home/upboostn/public_html && /usr/bin/php-cli -q bin/console updating:categories