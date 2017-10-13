<?php

namespace AppBundle\Action;

use AppBundle\Entity\User;
use AppBundle\Entity\Search;
use Symfony\Component\DependencyInjection\ContainerInterface;
use AppBundle\Entity\Result;


class ActionStart{

    private $container;

    protected $twig;
    protected $mailer;

    public function __construct(ContainerInterface $container, \Twig_Environment $twig, \Swift_Mailer $mailer)
    {
        $this->container = $container;

        $this->twig = $twig;
        $this->mailer = $mailer;
    }

    public function update()
    {

        session_start();

        $em = $this->container
            ->get('doctrine')
            ->getEntityManager();



        //запрос на все задачи
        $query = $em->createQueryBuilder()
            ->select('s')
            ->from('AppBundle:Search', 's')
            ->getQuery();



        $searches = $query->getResult();



        if($searches) {

            $_SESSION['access_token'] = $this->container->getParameter('access_token');
            $_SESSION['access_secret'] = $this->container->getParameter('access_secret');

            $config = new \Upwork\API\Config(
                array(
                    'consumerKey'       => $this->container->getParameter('consumer_key'),
                    'consumerSecret'    => $this->container->getParameter('consumer_secret'),
                    'accessToken'       => $_SESSION['access_token'],
                    'accessSecret'      => $_SESSION['access_secret'],
                    //        'verifySsl'         => false,                           // whether to verify SSL
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


            $jobs = new \Upwork\API\Routers\Jobs\Search($client);


            $profile = new \Upwork\API\Routers\Jobs\Profile($client);

            foreach($searches as $search) {


                if($search->getAction() == 'start'){



                    $oldResults = $search->getResult();


                    foreach($oldResults as $oldResult){
                        $em->remove($oldResult);
                        $em->flush();
                    }


        
                    $params = array(
                        'category2' => $search->getCategory(),
                        'subcategory2' => $search->getSubcategory(),
                        'job_type' => $search->getJobType(),
                        'budget' => $search->getBudget(),
                        'client_hires' => $search->getClientHistory(),
                        'skills' => $search->getSkills(),
                        'client_feedback' => $search->getClientFeedbackScore()
                    );



                    $data = $jobs->find($params);




                    for($i=0; $i<count($data->jobs); $i++){

                        $rating = 0;

                        // обЪект с полными данными о клиенте
                        $spec = $profile->getSpecific($data->jobs[$i]->id);



                        // для поиска слов и в description и в title
                        $strAny = $spec->profile->op_description.' '.$data->jobs[$i]->title;


                        //print_r($spec);



                        //проверка обьекта на соответсвие фильтру
                        //если не соответсвует фильтру, continue

                        if(!empty($search->getLocation())){

                            // для проверки location
                            $loc = str_replace(', ', ',', $search->getLocation());
                            $countries = explode(',', $loc);

                            if(!in_array($data->jobs[$i]->client->country, $countries)){

                                continue;
                            }

                        }



                        if(!empty($search->getVerifiedPayment())){

                            // для проверки verified payment
                            $verif = strtoupper($search->getVerifiedPayment());

                            if($verif != $data->jobs[$i]->client->payment_verification_status){


                                continue;
                            }

                        }




                        if(!empty($search->getMoneySpent())){

                            if($spec->profile->buyer->op_tot_charge < $search->getMoneySpent()){

                                continue;
                            }

                        }




                        if(!empty($search->getClientPreferredFreelancerLocation() && !empty($spec->profile->op_pref_location))){

                            $freelanceLoc = str_replace(', ', ',', $search->getClientPreferredFreelancerLocation());
                            $allFreelanceLoc = explode(',', $freelanceLoc);

                            if(in_array($spec->profile->op_pref_location, $allFreelanceLoc)){

                                continue;
                            }
                            

                        }




                        if(!empty($search->getExperienceLevel()  && !empty($spec->profile->op_contractor_tier))){

                            if($search->getExperienceLevel() != $spec->profile->op_contractor_tier){

                                continue;
                            }

                        }




                        if(!empty($search->getClientEnglishLevelPreference())){

                            if( ($search->getClientEnglishLevelPreference() != 'no'
                                && $spec->profile->op_pref_english_skill == 0) ){


                                continue;
                            }

                        }


                        if(!empty($search->getClientEnglishLevelPreference())){

                            if( ($search->getClientEnglishLevelPreference() == 'no'
                                && $spec->profile->op_pref_english_skill != 0) ){


                                continue;
                            }

                        }




                        if(!empty($search->getClientTimezone() && !empty($spec->profile->buyer->op_timezone))){

                            if($spec->profile->buyer->op_timezone != $search->getClientTimezone()){

                                continue;
                            }

                        }

                        if(!empty($search->getClientPreferredHoursOfExperience())){

                            if($spec->profile->op_pref_odesk_hours > $search->getClientPreferredHoursOfExperience()){

                                continue;
                            }

                        }



                        if(!empty($search->getCharsInDescription())){

                            if($search->getCharsInDescription() > strlen($spec->profile->op_description)){

                                continue;
                            }

                        }



                        if(!empty($search->getKeywordSearch())){

                            $key = explode(' ', $search->getKeywordSearch());

                            $keywordSearchAny = [];
                            $keywordSearchDescription = [];
                            $keywordSearchTitle = [];
                            if(strtolower($key[0]) == 'description' || strtolower($key[0]) == 'title') {
                                for ($w = 1; $w < count($key); $w++) {

                                    $keywordSearchDescription[] = preg_match('/' . $key[$w] . '/i', $spec->profile->op_description);
                                    $keywordSearchTitle[] = preg_match('/' . $key[$w] . '/i', $data->jobs[$i]->title);

                                }
                            }

                            elseif(strtolower($key[0]) != 'description' || strtolower($key[0]) != 'title'){
                                for ($w = 0; $w < count($key); $w++) {
                                    $keywordSearchAny[] = preg_match('/' . $key[$w] . '/i', $strAny);

                                }
                            }


                            if(strtolower($key[0]) == 'description'
                                && !in_array(1, $keywordSearchDescription)){

                                continue;
                            }

                            elseif( strtolower($key[0]) == 'title'
                                && !in_array(1, $keywordSearchTitle) ){

                                continue;
                            }

                            elseif( strtolower($key[0]) != 'description' && strtolower($key[0]) != 'title'
                                && !in_array(1, $keywordSearchAny) ){


                                continue;
                            }

                        }



                        if(!empty($search->getStopWords())){

                            $stop = explode(' ', $search->getStopWords());

                            $stopWordsAny = [];
                            $stopWordsDescription = [];
                            $stopWordsTitle = [];
                            if(strtolower($stop[0]) == 'description' || strtolower($stop[0]) == 'title') {
                                for ($w = 1; $w < count($stop); $w++) {

                                    $stopWordsDescription[] = preg_match('/' . $stop[$w] . '/i', $spec->profile->op_description);
                                    $stopWordsTitle[] = preg_match('/' . $stop[$w] . '/i', $data->jobs[$i]->title);
                                }
                            }
                            elseif(strtolower($stop[0]) != 'description' || strtolower($stop[0]) != 'title') {
                                for ($w = 0; $w < count($stop); $w++) {
                                    $stopWordsAny[] = preg_match('/' . $stop[$w] . '/i', $strAny);
                                }
                            }

                            if(strtolower($stop[0]) == 'description'
                                && in_array(1, $stopWordsDescription)){


                                continue;
                            }

                            elseif( strtolower($stop[0]) == 'title'
                                && in_array(1, $stopWordsTitle) ){


                                continue;
                            }

                            elseif( strtolower($stop[0]) != 'description' && strtolower($stop[0]) != 'title'
                                && in_array(1, $stopWordsAny) ){


                                continue;
                            }


                        }


                        $totalHourse = [];
                        $totalCharge = [];

                        if(!empty($spec->profile->assignments->assignment)){

                            foreach($spec->profile->assignments->assignment as $avg){


                                if(!empty($avg->as_job_type) && $avg->as_job_type == 'Hourly') {

                                    $totalHourse[] = $avg->as_total_hours;

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





                        if(!empty($search->getFilterAvgRate())){
                            if($search->getFilterAvgRate() <= $avgRate) ++$rating;
                        }


                        if(!empty($search->getFilterJobType())){
                            if(strtolower($search->getFilterJobType()) == strtolower($data->jobs[$i]->job_type)) ++$rating;
                        }

                        if(!empty($search->getFilterBudget())){
                            if($search->getFilterBudget() < $data->jobs[$i]->budget) ++$rating;
                        }

                        if(!empty($search->getFilterClientHistory())){
                            if($search->getFilterClientHistory() <= $data->jobs[$i]->client->past_hires) ++$rating;
                        }

                        if(!empty($search->getFilterSkills())){
                            $mySkills = explode(',', str_replace(', ', ',', $search->getFilterSkills()));

                            $intersect = array_intersect($mySkills, $data->jobs[$i]->skills);

                            if(count($intersect)>0) ++$rating;
                        }

                        if(!empty($search->getFilterMoneySpent())){
                            if($spec->profile->buyer->op_tot_charge > $search->getFilterMoneySpent()) ++$rating;
                        }

                        if(!empty($search->getFilterVerifiedPayment())){

                            if(strtoupper($search->getFilterVerifiedPayment()) == $data->jobs[$i]->client->payment_verification_status) ++$rating;
                        }

                        if(!empty($search->getFilterClientFeedbackScore())){
                            if($data->jobs[$i]->client->feedback > $search->getFilterClientFeedbackScore()) ++$rating;
                        }

                        if(!empty($search->getFilterHoursBilled())){
                            if($spec->profile->buyer->op_tot_hours > $search->getFilterHoursBilled()) ++$rating;
                        }

                        if(!empty($search->getFilterClientTimezone() && !empty($spec->profile->buyer->op_timezone))){
                            if($search->getFilterClientTimezone() == $spec->profile->buyer->op_timezone) ++$rating;
                        }

                        if(!empty($search->getFilterExperienceLevel())){
                            if($spec->profile->op_contractor_tier == $search->getFilterExperienceLevel()) ++$rating;
                        }






                        $allSkills = [];
                        for ($k = 0; $k < count($data->jobs[$i]->skills); $k++) {
                            $allSkills[] = $data->jobs[$i]->skills[$k];
                        }

                        $result = new Result;

                            $result->setSearch($search);

                            $result->setJobType($data->jobs[$i]->job_type);

                        if(!empty($spec->profile->buyer->op_timezone))
                            $result->setTymezone($spec->profile->buyer->op_timezone);

                            $result->setBudget($data->jobs[$i]->budget);

                        if(!empty($spec->profile->candidates))
                            $result->setCandidates(count($spec->profile->candidates->candidate));

                            $result->setUrl($data->jobs[$i]->url);

                            $result->setPastHires($data->jobs[$i]->client->past_hires);

                            $result->setSkills(implode(', ', $allSkills));

                            $result->setVerifStatus($data->jobs[$i]->client->payment_verification_status);

                        if(!empty($spec->profile->buyer->op_tot_charge))
                            $result->setTotalCharge($spec->profile->buyer->op_tot_charge);

                            $result->setWorkload($data->jobs[$i]->workload);

                        if(!empty($spec->profile->op_pref_location))
                            $result->setPrefLocation($spec->profile->op_pref_location);

                            $result->setEnglish($spec->profile->op_pref_english_skill);

                            $result->setFeedback(round($data->jobs[$i]->client->feedback, 2));
                        if(!empty($spec->profile->buyer->op_tot_hours))
                            $result->setTotalHours(round($spec->profile->buyer->op_tot_hours, 2));
                        if(!empty($spec->profile->buyer->op_contract_date))
                            $result->setMemberSince($spec->profile->buyer->op_contract_date);

                            $result->setLevel($spec->profile->op_contractor_tier);
                        if(!empty($spec->profile->interviewees_total_active))
                            $result->setInterviewees($spec->profile->interviewees_total_active);
                        if(!empty($data->jobs[$i]->client->country))
                            $result->setCountry($data->jobs[$i]->client->country);

                        $result->setDescription($spec->profile->op_description);
                        $result->setAvgRate($avgRate);
                        $result->setRating($rating);


                        $em->persist($result);
                        $em->flush();


                        if( !empty($search->getFilterStars()) && $search->getFilterStars() <= $rating){

                            $name = $search->getName();
                            $url = $data->jobs[$i]->url;
                            $email = $search->getUser()->getEmail();
                            

                            $body = $this->renderTemplate($name, $url);

                            $message = \Swift_Message::newInstance()
                                ->setSubject('Upwork Message')
                                ->setContentType('text/html')
                                ->setCharset('utf-8')
                                ->setFrom('upboost@upboost.net')
                                ->setTo($email)
                                ->setBody($body)
                            ;
                            $this->mailer->send($message);
                        }

                    }

                }

            }
        }

    }

    public function renderTemplate($name, $url)
    {
        return $this->twig->render(
            'Emails/message.html.twig',
            array(
                'name' => $name,
                'url' => $url
            )
        );
    }

}