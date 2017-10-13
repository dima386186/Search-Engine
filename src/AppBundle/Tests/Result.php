<?php

namespace AppBundle\Tests;

class Result{

    public $search;
    public $resources;

    public function __construct($search, $resources)
    {
        $this->search = $search;
        $this->resources = $resources;
    }

    public function getData()
    {
        $data = [];

        // получение данных из таблицы resource в БД
        foreach ($this->resources as $result){

            $rating = 0;

            // исходя из настроек категории в поиске отсекаем данные с другими категориями
            if (!empty($this->search->getCategory())) {
                if (empty($result->getCategory()) || $result->getCategory() != $this->search->getCategory()) {

                    continue;
                }
            }

            // исходя из настроек субкатегории в поиске отсекаем данные с другими субкатегориями
            if (!empty($this->search->getSubcategory())) {
                if (empty($result->getSubcategory()) || !in_array($result->getSubcategory(), $this->search->getSubcategory())) {

                    continue;
                }
            }

            // исходя из настроек истории клентов в поиске отсекаем данные не совпадающие с данными настройками
            if (!empty($this->search->getClientHistory())) {
                if (empty($result->getPastHires()) || $result->getPastHires() < $this->search->getClientHistory()) {

                    continue;
                }
            }

            // исходя из настроек типа работы в поиске отсекаем данные не совпадающие с данными настройками
            if (!empty($this->search->getJobType())) {
                if (empty($result->getJobType()) || strtolower($result->getJobType()) != strtolower($this->search->getJobType())) {

                    continue;
                }
            }

            // исходя из настроек бюджета в поиске отсекаем данные не совпадающие с данными настройками
            if (!empty($this->search->getBudget()) && $this->search->getJobType()!='fixed') {
                if ($result->getBudget() != 0 && $result->getBudget() <= $this->search->getBudget()) {

                    continue;
                }
            }

            // исходя из настроек бюджета в поиске отсекаем данные не совпадающие с данными настройками
            if (!empty($this->search->getBudget()) && $this->search->getJobType()=='fixed') {
                if ($result->getBudget() <= $this->search->getBudget()) {

                    continue;
                }
            }

            // исходя из настроек скиллов в поиске отсекаем данные не совпадающие с данными настройками
            if (!empty($this->search->getSkills())) {
                $arraySearchSkills = explode(',', str_replace(', ', ',', $this->search->getSkills()));
                $arrayResultSkills = explode(', ', $result->getSkills());
                $intersect = array_intersect($arrayResultSkills, $arraySearchSkills);

                if (count($intersect) < 1) {

                    continue;
                }
            }

            // исходя из настроек клиент-фидбека в поиске отсекаем данные не совпадающие с данными настройками
            if (!empty($this->search->getClientFeedbackScore())) {
                $feedbackScore = str_replace(',', '.', $this->search->getClientFeedbackScore());
                if (empty($result->getFeedback()) || $feedbackScore >= $result->getFeedback()) {

                    continue;
                }
            }

            // исходя из настроек локации в поиске отсекаем данные не совпадающие с данными настройками
            if (!empty($this->search->getLocation())) {
                $loc = str_replace(', ', ',', $this->search->getLocation());
                $countries = explode(',', $loc);

                if (empty($result->getCountry()) || !in_array($result->getCountry(), $countries)) {

                    continue;
                }

            }

            // исходя из настроек verified-payment в поиске отсекаем данные не совпадающие с данными настройками
            if (!empty($this->search->getVerifiedPayment())) {
                $verif = strtoupper($this->search->getVerifiedPayment());

                if (empty($result->getVerifStatus()) || $verif != strtoupper($result->getVerifStatus())) {

                    continue;
                }
            }

            // исходя из настроек money-spent в поиске отсекаем данные не совпадающие с данными настройками
            if (!empty($this->search->getMoneySpent())) {

                if (empty($result->getTotalCharge()) || $result->getTotalCharge() <= $this->search->getMoneySpent()) {

                    continue;
                }
            }

            // исходя из настроек Client-Preferred-Freelancer-Location в поиске отсекаем данные не совпадающие с данными настройками
            if (!empty($this->search->getClientPreferredFreelancerLocation())) {

                $freelanceLoc = str_replace(', ', ',', $this->search->getClientPreferredFreelancerLocation());
                $allFreelanceLoc = explode(',', $freelanceLoc);

                if (!empty($result->getPrefLocation()) && in_array($result->getPrefLocation(), $allFreelanceLoc)) {

                    continue;
                }
            }

            // исходя из настроек Experience-Level в поиске отсекаем данные не совпадающие с данными настройками
            if(!empty($this->search->getExperienceLevel())){

                $expLevel = str_replace(', ', ',', $this->search->getExperienceLevel());
                $level = explode(',', $expLevel);
                if(!in_array($result->getLevel(), $level)){

                    continue;
                }
            }

            // исходя из настроек Client-EnglishLevel-Preference в поиске отсекаем данные не совпадающие с данными настройками
            if (!empty($this->search->getClientEnglishLevelPreference()) && $this->search->getClientEnglishLevelPreference() != 'no') {
                if ($result->getEnglish() > $this->search->getClientEnglishLevelPreference()) {

                    continue;
                }
            }

            // исходя из настроек Client-EnglishLevel-Preference в поиске отсекаем данные не совпадающие с данными настройками
            if ($this->search->getClientEnglishLevelPreference() == 'no') {

                if ($result->getEnglish() != 0) {

                    continue;
                }

            }

            // исходя из настроек Client-Timezone в поиске отсекаем данные не совпадающие с данными настройками
            if (!empty($this->search->getClientTimezone())) {

                $arrayLoc = explode(',', str_replace(', ', ',', $this->search->getClientTimezone()));

                $zoneInResource = substr($result->getTymezone(),3,6);

                if(!in_array($zoneInResource, $arrayLoc)){

                    continue;
                }

            }

            // исходя из настроек Client-Preferred-Hours-Of-Experience в поиске отсекаем данные не совпадающие с данными настройками
            if (!empty($this->search->getClientPreferredHoursOfExperience())) {

                if ($result->getClientPreferredHoursOfExperience() > $this->search->getClientPreferredHoursOfExperience()) {

                    continue;
                }
            }

            // исходя из настроек Chars-In-Description в поиске отсекаем данные не совпадающие с данными настройками
            if (!empty($this->search->getCharsInDescription())) {

                if ($this->search->getCharsInDescription() > strlen($result->getDescription())) {

                    continue;
                }
            }

            // исходя из настроек Keyword-Search-In-Any в поиске отсекаем данные не совпадающие с данными настройками
            if(!empty($this->search->getKeywordSearchInAny())){
                $key = explode(',', str_replace(', ', ',', $this->search->getKeywordSearchInAny()));

                $replaceAny = str_replace(['.', ',', '!', '?', '\'', '"', '(', ')', ':', '*'], '', $result->getDescription().' '.$result->getTitle());
                $wordInAny = explode(' ', $replaceAny);

                $keywordSearchAny = [];

                for ($w = 0; $w < count($key); $w++) {

                    if(str_word_count($key[$w]) < 2){
                        for($a=0; $a<count($wordInAny); $a++){
                            $keywordSearchAny[] = preg_match('/^' . $key[$w] . '$/i', $wordInAny[$a]);
                        }
                    }

                    elseif(str_word_count($key[$w]) > 1){
                        if(strlen(stristr($result->getDescription().' '.$result->getTitle(), $key[$w]))>0){
                            $keywordSearchAny[] = 1;
                        }
                    }
                }

                if( !in_array(1, $keywordSearchAny) ){
                    continue;
                }
            }

            // исходя из настроек Keyword-Search-In-Title в поиске отсекаем данные не совпадающие с данными настройками
            if(!empty($this->search->getKeywordSearchInTitle())){
                $key = explode(',', str_replace(', ', ',', $this->search->getKeywordSearchInTitle()));

                $replaceTitle = str_replace(['.', ',', '!', '?', '\'', '"', '(', ')', ':', '*'], '', $result->getTitle());
                $wordInTitle = explode(' ', $replaceTitle);

                $keywordSearchTitle = [];

                for ($w = 0; $w < count($key); $w++) {
                    if(str_word_count($key[$w]) < 2){
                        for($t=0; $t<count($wordInTitle); $t++){
                            $keywordSearchTitle[] = preg_match('/^' . $key[$w] . '$/i', $wordInTitle[$t]);
                        }
                    }

                    elseif(str_word_count($key[$w]) > 1){
                        if(strlen(stristr($result->getTitle(), $key[$w]))>0){
                            
                            $keywordSearchTitle[] = 1;
                        }
                    }
                }

                if( !in_array(1, $keywordSearchTitle) ){
                    continue;
                }
            }

            // исходя из настроек Keyword-Search-In-Description в поиске отсекаем данные не совпадающие с данными настройками
            if(!empty($this->search->getKeywordSearchInDescription())){
                $key = explode(',', str_replace(', ', ',', $this->search->getKeywordSearchInDescription()));

                $replaceDescription = str_replace(['.', ',', '!', '?', '\'', '"', '(', ')', ':', '*'], '', $result->getDescription());
                $wordInDescription = explode(' ', $replaceDescription);

                $keywordSearchDescription = [];

                for ($w = 0; $w < count($key); $w++) {

                    if(str_word_count($key[$w]) < 2){

                        for($d=0; $d<count($wordInDescription); $d++){

                            $keywordSearchDescription[] = preg_match('/^' . $key[$w] . '$/i', $wordInDescription[$d]);

                        }
                    }

                    elseif(str_word_count($key[$w]) > 1){
                        if(strlen(stristr($result->getDescription(), $key[$w]))>0){
                            $keywordSearchDescription[] = 1;
                        }
                    }
                }

                if( !in_array(1, $keywordSearchDescription) ){
                    continue;
                }
            }

            // исходя из настроек Stop-Words-In-Any в поиске отсекаем данные не совпадающие с данными настройками
            if(!empty($this->search->getStopWordsInAny())){
                $stop = explode(',', str_replace(', ', ',', $this->search->getStopWordsInAny()));

                $replaceAny = str_replace(['.', ',', '!', '?', '\'', '"', '(', ')', ':', '*'], '', $result->getDescription().' '.$result->getTitle());
                $wordInAny = explode(' ', $replaceAny);

                $stopWordsAny = [];

                for ($w = 0; $w < count($stop); $w++) {

                    if(str_word_count($stop[$w]) < 2){

                        for($a=0; $a<count($wordInAny); $a++){
                            $stopWordsAny[] = preg_match('/^' . $stop[$w] . '$/i', $wordInAny[$a]);
                        }
                    }

                    elseif(str_word_count($stop[$w]) > 1){
                        if(strlen(stristr($result->getDescription().' '.$result->getTitle(), $stop[$w]))>0){
                            $stopWordsAny[] = 1;
                        }
                    }
                }

                if( in_array(1, $stopWordsAny) ){
                    continue;
                }
            }

            // исходя из настроек Stop-Words-In-Title в поиске отсекаем данные не совпадающие с данными настройками
            if(!empty($this->search->getStopWordsInTitle())){
                $stop = explode(',', str_replace(', ', ',', $this->search->getStopWordsInTitle()));

                $replaceTitle = str_replace(['.', ',', '!', '?', '\'', '"', '(', ')', ':', '*'], '', $result->getTitle());
                $wordInTitle = explode(' ', $replaceTitle);

                $stopWordsTitle = [];

                for ($w = 0; $w < count($stop); $w++) {

                    if(str_word_count($stop[$w]) < 2){
                        for($t=0; $t<count($wordInTitle); $t++){
                            $stopWordsTitle[] = preg_match('/^' . $stop[$w] . '$/i', $wordInTitle[$t]);
                        }
                    }

                    elseif(str_word_count($stop[$w]) > 1){
                        if(strlen(stristr($result->getTitle(), $stop[$w]))>0){

                            $stopWordsTitle[] = 1;
                        }
                    }
                }

                if( in_array(1, $stopWordsTitle) ){
                    continue;
                }
            }

            // исходя из настроек Stop-Words-In-Description в поиске отсекаем данные не совпадающие с данными настройками
            if(!empty($this->search->getStopWordsInDescription())){
                $stop = explode(',', str_replace(', ', ',', $this->search->getStopWordsInDescription()));

                $replaceDescription = str_replace(['.', ',', '!', '?', '\'', '"', '(', ')', ':', '*'], '', $result->getDescription());
                $wordInDescription = explode(' ', $replaceDescription);

                $stopWordsDescription = [];

                for ($w = 0; $w < count($stop); $w++) {
                    if(str_word_count($stop[$w]) < 2){
                        for($d=0; $d<count($wordInDescription); $d++){
                            $stopWordsDescription[] = preg_match('/^' . $stop[$w] . '$/i', $wordInDescription[$d]);
                        }
                    }

                    elseif(str_word_count($stop[$w]) > 1){
                        if(strlen(stristr($result->getDescription(), $stop[$w]))>0){
                            $stopWordsDescription[] = 1;
                        }
                    }
                }

                if( in_array(1, $stopWordsDescription) ){
                    continue;
                }
            }

            // исходя из настроек avg. rate в поиске отсекаем данные не совпадающие с данными настройками
            if (!empty($this->search->getFilterAvgRate())) {
                if ($this->search->getFilterAvgRate() <= $result->getAvgRate()) ++$rating;
            }

                                        // Подсчёт рейтинга ресурса исходя из настроек данного поиска

            // рейтинг по типу работы
            if (!empty($this->search->getFilterJobType())) {
                if (strtolower($this->search->getFilterJobType()) == strtolower($result->getJobType())) ++$rating;
            }

            // рейтинг по бюджету
            if (!empty($this->search->getFilterBudget())) {
                if ($this->search->getFilterBudget() < $result->getBudget()) ++$rating;
            }

            // рейтинг по Client History
            if (!empty($this->search->getFilterClientHistory())) {
                if ($this->search->getFilterClientHistory() <= $result->getPastHires()) ++$rating;
            }

            // рейтинг по Skills
            if (!empty($this->search->getFilterSkills()) && !empty($result->getSkills())) {

                $mySkills = explode(',', str_replace(', ', ',', $this->search->getFilterSkills()));
                $arrayResultSkills = explode(',', str_replace(', ', ',', $result->getSkills()));

                $intersect = array_intersect($mySkills, $arrayResultSkills);

                if (count($intersect) >= 1) ++$rating;
            }

            // рейтинг по Money Spent
            if (!empty($this->search->getFilterMoneySpent())) {
                if ($result->getTotalCharge() > $this->search->getFilterMoneySpent()) ++$rating;
            }

            // рейтинг по Verified Payment
            if (!empty($this->search->getFilterVerifiedPayment())) {
                if (strtoupper($this->search->getFilterVerifiedPayment()) == strtoupper($result->getVerifStatus())) ++$rating;
            }

            // рейтинг по Client Feedback
            if (!empty($this->search->getFilterClientFeedbackScore())) {
                $feedbackScore = str_replace(',', '.', $this->search->getFilterClientFeedbackScore());
                if ($result->getFeedback() >= $feedbackScore) ++$rating;
            }

            // рейтинг по Hours Billed
            if (!empty($this->search->getFilterHoursBilled())) {
                if ($result->getTotalHours() > $this->search->getFilterHoursBilled()) ++$rating;
            }

            // рейтинг по Client Timezone
            if (!empty($this->search->getFilterClientTimezone())) {
                $arrayLoc = explode(',', str_replace(', ', ',', $this->search->getFilterClientTimezone()));
                $zoneInResource = substr($result->getTymezone(),3,6);

                if(in_array($zoneInResource, $arrayLoc)) ++$rating;
            }

            // рейтинг по Experience Level
            if(!empty($this->search->getFilterExperienceLevel())){
                if($result->getLevel() == $this->search->getFilterExperienceLevel()) ++$rating;
            }

            // рейтинг по Location
            if (!empty($this->search->getFilterLocation())) {

                $loc = str_replace(', ', ',', $this->search->getFilterLocation());
                $countries = explode(',', $loc);

                if (empty($result->getCountry()) || in_array($result->getCountry(), $countries)) {
                    ++$rating;
                }
            }

            $result->setFilterStars($rating);

            $data[] = $result;
        }
      return $data;
    }
}