<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Search
 *
 * @ORM\Table(name="search")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SearchRepository")
 *
 * @UniqueEntity("name", message="Это поле должно быть уникальным")
 */
class Search
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="searches")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $user;
    

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255, nullable=true)
     */
    protected $category;

    /**
     * @var string
     *
     * @ORM\Column(name="subcategory", type="array", length=255, nullable=true)
     */
    protected $subcategory;

    /**
     * @var string
     *
     * @ORM\Column(name="job_type", type="string", length=255, nullable=true)
     */
    protected $jobType;

    /**
     * @var string
     *
     * @ORM\Column(name="budget", type="string", length=255, nullable=true)
     */
    protected $budget;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255, nullable=true)
     * @Assert\Length(max = 255)
     */
    protected $location;

    /**
     * @var string
     *
     * @ORM\Column(name="client_history", type="string", length=255, nullable=true)
     *
     *
     */
    protected $clientHistory;



    /**
     * @var string
     *
     * @ORM\Column(name="keyword_search_in_any", type="string", length=255, nullable=true)
     *
     * @Assert\Length(max = 255)
     */
    protected $keywordSearchInAny;

    /**
     * @var string
     *
     * @ORM\Column(name="keyword_search_in_title", type="string", length=255, nullable=true)
     *
     * @Assert\Length(max = 255)
     */
    protected $keywordSearchInTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="keyword_search_in_description", type="string", length=255, nullable=true)
     *
     * @Assert\Length(max = 255)
     */
    protected $keywordSearchInDescription;




    /**
     * @var string
     *
     * @ORM\Column(name="stop_words_in_any", type="string", length=255, nullable=true)
     *
     * @Assert\Length(max = 255)
     */
    protected $stopWordsInAny;

    /**
     * @var string
     *
     * @ORM\Column(name="stop_words_in_title", type="string", length=255, nullable=true)
     *
     * @Assert\Length(max = 255)
     */
    protected $stopWordsInTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="stop_words_in_description", type="string", length=255, nullable=true)
     *
     * @Assert\Length(max = 255)
     */
    protected $stopWordsInDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="skills", type="string", length=255, nullable=true)
     *
     * @Assert\Length(max = 255)
     */
    protected $skills;

    /**
     * @var string
     *
     * @ORM\Column(name="verified_payment", type="string", length=255, nullable=true)
     */
    protected $verifiedPayment;

    /**
     * @var string
     *
     * @ORM\Column(name="money_spent", type="string", length=255, nullable=true)
     *
     *
     */
    protected $moneySpent;

    /**
     * @var string
     *
     * @ORM\Column(name="client_preferred_hours_of_experience", type="string", length=255, nullable=true)
     *
     *
     */
    protected $clientPreferredHoursOfExperience;

    /**
     * @var string
     *
     * @ORM\Column(name="client_preferred_freelancer_location", type="string", length=255, nullable=true)
     *
     * @Assert\Length(max = 255)
     */
    protected $clientPreferredFreelancerLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="client_english_level_preference", type="string", length=255, nullable=true)
     */
    protected $clientEnglishLevelPreference;

    /**
     * @var string
     *
     * @ORM\Column(name="client_timezone", type="string", length=255, nullable=true)
     *
     * @Assert\Length(max = 255)
     */
    protected $clientTimezone;

    /**
     * @var string
     *
     * @ORM\Column(name="chars_in_description", type="string", length=255, nullable=true)
     *
     *
     */
    protected $charsInDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="client_feedback_score", type="string", length=255, nullable=true)
     */
    protected $clientFeedbackScore;

    /**
     * @var string
     *
     * @ORM\Column(name="experience_level", type="string", length=255, nullable=true)
     */
    protected $experienceLevel;






    /**
     * @var string
     *
     * @ORM\Column(name="filter_job_type", type="string", length=255, nullable=true)
     */
    protected $filterJobType;


    /**
     * @var string
     *
     * @ORM\Column(name="filter_budget", type="string", length=255, nullable=true)
     */
    protected $filterBudget;


    /**
     * @var string
     *
     * @ORM\Column(name="filter_experience_level", type="string", length=255, nullable=true)
     *
     */
    protected $filterExperienceLevel;


    /**
     * @var string
     *
     * @ORM\Column(name="filter_client_history", type="string", length=255, nullable=true)
     *
     */
    protected $filterClientHistory;

    /**
     * @var string
     *
     * @ORM\Column(name="filter_money_spent", type="string", length=255, nullable=true)
     *
     */
    protected $filterMoneySpent;


    /**
     * @var string
     *
     * @ORM\Column(name="filter_skills", type="string", length=255, nullable=true)
     *
     * @Assert\Length(max = 255)
     */
    protected $filterSkills;


    /**
     * @var string
     *
     * @ORM\Column(name="filter_verified_payment", type="string", length=255, nullable=true)
     */
    protected $filterVerifiedPayment;



    /**
     * @var string
     *
     * @ORM\Column(name="filter_client_feedback_score", type="string", length=255, nullable=true)
     */
    protected $filterClientFeedbackScore;


    /**
     * @var string
     *
     * @ORM\Column(name="filter_avg_rate", type="string", length=255, nullable=true)
     *
     */
    protected $filterAvgRate;


    /**
     * @var string
     *
     * @ORM\Column(name="filter_hours_billed", type="string", length=255, nullable=true)
     *
     */
    protected $filterHoursBilled;



    /**
     * @var string
     *
     * @ORM\Column(name="filter_client_timezone", type="string", length=255, nullable=true)
     *
     * @Assert\Length(max = 255)
     */
    protected $filterClientTimezone;



    /**
     * @var string
     *
     * @ORM\Column(name="filter_stars", type="string", length=255, nullable=true)
     *
     */
    protected $filterStars;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=255, nullable=true)
     */
    protected $action;

    /**
     * @var string
     *
     * @ORM\Column(name="filter_location", type="string", length=255, nullable=true)
     *
     * @Assert\Length(max = 255)
     */
    protected $filterLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="created_at", type="string", length=255, nullable=true)
     */
    protected $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="updated_at", type="string", length=255, nullable=true)
     */
    protected $updatedAt;




    /**
     * Get updatedAt
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set updatedAt
     *
     * @param string $updatedAt
     *
     * @return Search
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }


    /**
     * Get createdAt
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set createdAt
     *
     * @param string $createdAt
     *
     * @return Search
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }


    /**
     * Get filterLocation
     *
     * @return string
     */
    public function getFilterLocation()
    {
        return $this->filterLocation;
    }

    /**
     * Set filterLocation
     *
     * @param string $filterLocation
     *
     * @return Search
     */
    public function setFilterLocation($filterLocation)
    {
        $this->filterLocation = $filterLocation;

        return $this;
    }


    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set action
     *
     * @param string $action
     *
     * @return Search
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }


    /**
     * Get filterStars
     *
     * @return string
     */
    public function getFilterStars()
    {
        return $this->filterStars;
    }

    /**
     * Set filterStars
     *
     * @param string $filterStars
     *
     * @return Search
     */
    public function setFilterStars($filterStars)
    {
        $this->filterStars = $filterStars;

        return $this;
    }



    /**
     * Get filterClientTimezone
     *
     * @return string
     */
    public function getFilterClientTimezone()
    {
        return $this->filterClientTimezone;
    }

    /**
     * Set filterClientTimezone
     *
     * @param string $filterClientTimezone
     *
     * @return Search
     */
    public function setFilterClientTimezone($filterClientTimezone)
    {
        $this->filterClientTimezone = $filterClientTimezone;

        return $this;
    }





    /**
     * Get filterHoursBilled
     *
     * @return string
     */
    public function getFilterHoursBilled()
    {
        return $this->filterHoursBilled;
    }

    /**
     * Set filterHoursBilled
     *
     * @param string $filterHoursBilled
     *
     * @return Search
     */
    public function setFilterHoursBilled($filterHoursBilled)
    {
        $this->filterHoursBilled = $filterHoursBilled;

        return $this;
    }




    /**
     * Get filterAvgRate
     *
     * @return string
     */
    public function getFilterAvgRate()
    {
        return $this->filterAvgRate;
    }

    /**
     * Set filterAvgRate
     *
     * @param string $filterAvgRate
     *
     * @return Search
     */
    public function setFilterAvgRate($filterAvgRate)
    {
        $this->filterAvgRate = $filterAvgRate;

        return $this;
    }




    /**
     * Get filterClientFeedbackScore
     *
     * @return string
     */
    public function getFilterClientFeedbackScore()
    {
        return $this->filterClientFeedbackScore;
    }

    /**
     * Set filterClientFeedbackScore
     *
     * @param string $filterClientFeedbackScore
     *
     * @return Search
     */
    public function setFilterClientFeedbackScore($filterClientFeedbackScore)
    {
        $this->filterClientFeedbackScore = $filterClientFeedbackScore;

        return $this;
    }





    /**
     * Get filterVerifiedPayment
     *
     * @return string
     */
    public function getFilterVerifiedPayment()
    {
        return $this->filterVerifiedPayment;
    }

    /**
     * Set filterVerifiedPayment
     *
     * @param string $filterVerifiedPayment
     *
     * @return Search
     */
    public function setFilterVerifiedPayment($filterVerifiedPayment)
    {
        $this->filterVerifiedPayment = $filterVerifiedPayment;

        return $this;
    }


    /**
     * Get filterSkills
     *
     * @return string
     */
    public function getFilterSkills()
    {
        return $this->filterSkills;
    }

    /**
     * Set filterSkills
     *
     * @param string $filterSkills
     *
     * @return Search
     */
    public function setFilterSkills($filterSkills)
    {
        $this->filterSkills = $filterSkills;

        return $this;
    }


    /**
     * Get filterMoneySpent
     *
     * @return string
     */
    public function getFilterMoneySpent()
    {
        return $this->filterMoneySpent;
    }

    /**
     * Set filterMoneySpent
     *
     * @param string $filterMoneySpent
     *
     * @return Search
     */
    public function setFilterMoneySpent($filterMoneySpent)
    {
        $this->filterMoneySpent = $filterMoneySpent;

        return $this;
    }


    /**
     * Get filterExperienceLevel
     *
     * @return string
     */
    public function getFilterExperienceLevel()
    {
        return $this->filterExperienceLevel;
    }

    /**
     * Set filterExperienceLevel
     *
     * @param string $filterExperienceLevel
     *
     * @return Search
     */
    public function setFilterExperienceLevel($filterExperienceLevel)
    {
        $this->filterExperienceLevel = $filterExperienceLevel;

        return $this;
    }






    /**
     * Get filterClientHistory
     *
     * @return string
     */
    public function getFilterClientHistory()
    {
        return $this->filterClientHistory;
    }

    /**
     * Set filterClientHistory
     *
     * @param string $filterClientHistory
     *
     * @return Search
     */
    public function setFilterClientHistory($filterClientHistory)
    {
        $this->filterClientHistory = $filterClientHistory;

        return $this;
    }





    /**
     * Get filterBudget
     *
     * @return string
     */
    public function getFilterBudget()
    {
        return $this->filterBudget;
    }

    /**
     * Set filterBudget
     *
     * @param string $filterBudget
     *
     * @return Search
     */
    public function setFilterBudget($filterBudget)
    {
        $this->filterBudget = $filterBudget;

        return $this;
    }







    /**
     * Get filterJobType
     *
     * @return string
     */
    public function getFilterJobType()
    {
        return $this->filterJobType;
    }

    /**
     * Set filterJobType
     *
     * @param string $filterJobType
     *
     * @return Search
     */
    public function setFilterJobType($filterJobType)
    {
        $this->filterJobType = $filterJobType;

        return $this;
    }




    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get user
     *
     * @return int
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set user
     *
     * @param int $user
     *
     * @return int
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Search
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return Search
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set subcategory
     *
     * @param string $subcategory
     *
     * @return Search
     */
    public function setSubcategory($subcategory)
    {
        $this->subcategory = $subcategory;

        return $this;
    }

    /**
     * Get subcategory
     *
     * @return string
     */
    public function getSubcategory()
    {
        return $this->subcategory;
    }

    /**
     * Set jobType
     *
     * @param string $jobType
     *
     * @return Search
     */
    public function setJobType($jobType)
    {
        $this->jobType = $jobType;

        return $this;
    }

    /**
     * Get jobType
     *
     * @return string
     */
    public function getJobType()
    {
        return $this->jobType;
    }

    /**
     * Set budget
     *
     * @param string $budget
     *
     * @return Search
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get budget
     *
     * @return string
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return Search
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set clientHistory
     *
     * @param string $clientHistory
     *
     * @return Search
     */
    public function setClientHistory($clientHistory)
    {
        $this->clientHistory = $clientHistory;

        return $this;
    }

    /**
     * Get clientHistory
     *
     * @return string
     */
    public function getClientHistory()
    {
        return $this->clientHistory;
    }


    /**
     * Set keywordSearchInAny
     *
     * @param string $keywordSearchInAny
     *
     * @return Search
     */
    public function setKeywordSearchInAny($keywordSearchInAny)
    {
        $this->keywordSearchInAny = $keywordSearchInAny;

        return $this;
    }
    

    /**
     * Get keywordSearchInAny
     *
     * @return string
     */
    public function getKeywordSearchInAny()
    {
        return $this->keywordSearchInAny;
    }


    
    /**
     * Set keywordSearchInTitle
     *
     * @param string $keywordSearchInTitle
     *
     * @return Search
     */
    public function setKeywordSearchInTitle($keywordSearchInTitle)
    {
        $this->keywordSearchInTitle = $keywordSearchInTitle;

        return $this;
    }


    /**
     * Get keywordSearchInTitle
     *
     * @return string
     */
    public function getKeywordSearchInTitle()
    {
        return $this->keywordSearchInTitle;
    }


    /**
     * Set keywordSearchInDescription
     *
     * @param string $keywordSearchInDescription
     *
     * @return Search
     */
    public function setKeywordSearchInDescription($keywordSearchInDescription)
    {
        $this->keywordSearchInDescription = $keywordSearchInDescription;

        return $this;
    }


    /**
     * Get keywordSearchInDescription
     *
     * @return string
     */
    public function getKeywordSearchInDescription()
    {
        return $this->keywordSearchInDescription;
    }
    



    /**
     * Set stopWordsInAny
     *
     * @param string $stopWordsInAny
     *
     * @return Search
     */
    public function setStopWordsInAny($stopWordsInAny)
    {
        $this->stopWordsInAny = $stopWordsInAny;

        return $this;
    }


    /**
     * Get stopWordsInAny
     *
     * @return string
     */
    public function getStopWordsInAny()
    {
        return $this->stopWordsInAny;
    }



    /**
     * Set stopWordsInTitle
     *
     * @param string $stopWordsInTitle
     *
     * @return Search
     */
    public function setStopWordsInTitle($stopWordsInTitle)
    {
        $this->stopWordsInTitle = $stopWordsInTitle;

        return $this;
    }


    /**
     * Get stopWordsInTitle
     *
     * @return string
     */
    public function getStopWordsInTitle()
    {
        return $this->stopWordsInTitle;
    }


    /**
     * Set stopWordsInDescription
     *
     * @param string $stopWordsInDescription
     *
     * @return Search
     */
    public function setStopWordsInDescription($stopWordsInDescription)
    {
        $this->stopWordsInDescription = $stopWordsInDescription;

        return $this;
    }


    /**
     * Get stopWordsInDescription
     *
     * @return string
     */
    public function getStopWordsInDescription()
    {
        return $this->stopWordsInDescription;
    }

    /**
     * Set skills
     *
     * @param string $skills
     *
     * @return Search
     */
    public function setSkills($skills)
    {
        $this->skills = $skills;

        return $this;
    }

    /**
     * Get skills
     *
     * @return string
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * Set verifiedPayment
     *
     * @param string $verifiedPayment
     *
     * @return Search
     */
    public function setVerifiedPayment($verifiedPayment)
    {
        $this->verifiedPayment = $verifiedPayment;

        return $this;
    }

    /**
     * Get verifiedPayment
     *
     * @return string
     */
    public function getVerifiedPayment()
    {
        return $this->verifiedPayment;
    }

    /**
     * Set moneySpent
     *
     * @param string $moneySpent
     *
     * @return Search
     */
    public function setMoneySpent($moneySpent)
    {
        $this->moneySpent = $moneySpent;

        return $this;
    }

    /**
     * Get moneySpent
     *
     * @return string
     */
    public function getMoneySpent()
    {
        return $this->moneySpent;
    }

    /**
     * Set clientPreferredHoursOfExperience
     *
     * @param string $clientPreferredHoursOfExperience
     *
     * @return Search
     */
    public function setClientPreferredHoursOfExperience($clientPreferredHoursOfExperience)
    {
        $this->clientPreferredHoursOfExperience = $clientPreferredHoursOfExperience;

        return $this;
    }

    /**
     * Get clientPreferredHoursOfExperience
     *
     * @return string
     */
    public function getClientPreferredHoursOfExperience()
    {
        return $this->clientPreferredHoursOfExperience;
    }

    /**
     * Set clientPreferredFreelancerLocation
     *
     * @param string $clientPreferredFreelancerLocation
     *
     * @return Search
     */
    public function setClientPreferredFreelancerLocation($clientPreferredFreelancerLocation)
    {
        $this->clientPreferredFreelancerLocation = $clientPreferredFreelancerLocation;

        return $this;
    }

    /**
     * Get clientPreferredFreelancerLocation
     *
     * @return string
     */
    public function getClientPreferredFreelancerLocation()
    {
        return $this->clientPreferredFreelancerLocation;
    }

    /**
     * Set clientEnglishLevelPreference
     *
     * @param string $clientEnglishLevelPreference
     *
     * @return Search
     */
    public function setClientEnglishLevelPreference($clientEnglishLevelPreference)
    {
        $this->clientEnglishLevelPreference = $clientEnglishLevelPreference;

        return $this;
    }

    /**
     * Get clientEnglishLevelPreference
     *
     * @return string
     */
    public function getClientEnglishLevelPreference()
    {
        return $this->clientEnglishLevelPreference;
    }

    /**
     * Set clientTimezone
     *
     * @param string $clientTimezone
     *
     * @return Search
     */
    public function setClientTimezone($clientTimezone)
    {
        $this->clientTimezone = $clientTimezone;

        return $this;
    }

    /**
     * Get clientTimezone
     *
     * @return string
     */
    public function getClientTimezone()
    {
        return $this->clientTimezone;
    }

    /**
     * Set charsInDescription
     *
     * @param string $charsInDescription
     *
     * @return Search
     */
    public function setCharsInDescription($charsInDescription)
    {
        $this->charsInDescription = $charsInDescription;

        return $this;
    }

    /**
     * Get charsInDescription
     *
     * @return string
     */
    public function getCharsInDescription()
    {
        return $this->charsInDescription;
    }

    /**
     * Set clientFeedbackScore
     *
     * @param string $clientFeedbackScore
     *
     * @return Search
     */
    public function setClientFeedbackScore($clientFeedbackScore)
    {
        $this->clientFeedbackScore = $clientFeedbackScore;

        return $this;
    }

    /**
     * Get clientFeedbackScore
     *
     * @return string
     */
    public function getClientFeedbackScore()
    {
        return $this->clientFeedbackScore;
    }

    /**
     * Set experienceLevel
     *
     * @param string $experienceLevel
     *
     * @return Search
     */
    public function setExperienceLevel($experienceLevel)
    {
        $this->experienceLevel = $experienceLevel;

        return $this;
    }

    /**
     * Get experienceLevel
     *
     * @return string
     */
    public function getExperienceLevel()
    {
        return $this->experienceLevel;
    }

    /**
     * Set result
     *
     *
     *
     *
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     *
     */
    public function getResult()
    {
        return $this->result;
    }
}

