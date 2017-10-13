<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resource
 *
 * @ORM\Table(name="resource")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ResourceRepository")
 */
class Resource
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
     * @var string
     *
     * @ORM\Column(name="job_id", type="string", length=255, nullable=true)
     */
    protected $jobId;

    /**
     * @var string
     *
     * @ORM\Column(name="created_at", type="string", length=255, nullable=true)
     */
    protected $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="job_type", type="string", length=255, nullable=true)
     */
    protected $jobType;

    /**
     * @var string
     *
     * @ORM\Column(name="tymezone", type="string", length=255, nullable=true)
     */
    protected $tymezone;

    /**
     * @var string
     *
     * @ORM\Column(name="budget", type="string", length=255, nullable=true)
     */
    protected $budget;

    /**
     * @var string
     *
     * @ORM\Column(name="candidates", type="string", length=255, nullable=true)
     */
    protected $candidates;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    protected $url;

    /**
     * @var string
     *
     * @ORM\Column(name="past_hires", type="string", length=255, nullable=true)
     */
    protected $pastHires;

    /**
     * @var string
     *
     * @ORM\Column(name="skills", type="text", nullable=true)
     */
    protected $skills;

    /**
     * @var string
     *
     * @ORM\Column(name="verif_status", type="string", length=255, nullable=true)
     */
    protected $verifStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="total_charge", type="string", length=255, nullable=true)
     */
    protected $totalCharge;

    /**
     * @var string
     *
     * @ORM\Column(name="workload", type="string", length=255, nullable=true)
     */
    protected $workload;

    /**
     * @var string
     *
     * @ORM\Column(name="pref_location", type="string", length=255, nullable=true)
     */
    protected $prefLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="english", type="string", length=255, nullable=true)
     */
    protected $english;

    /**
     * @var string
     *
     * @ORM\Column(name="feedback", type="string", length=255, nullable=true)
     */
    protected $feedback;

    /**
     * @var string
     *
     * @ORM\Column(name="total_hours", type="string", length=255, nullable=true)
     */
    protected $totalHours;

    /**
     * @var string
     *
     * @ORM\Column(name="member_since", type="string", length=255, nullable=true)
     */
    protected $memberSince;

    /**
     * @var string
     *
     * @ORM\Column(name="level", type="string", length=255, nullable=true)
     */
    protected $level;

    /**
     * @var string
     *
     * @ORM\Column(name="interviewees", type="string", length=255, nullable=true)
     */
    protected $interviewees;

    /**
     * @var string
     *
     * @ORM\Column(name="avg_rate", type="string", length=255, nullable=true)
     */
    protected $avgRate;

    /**
     * @var string
     *
     * @ORM\Column(name="rating", type="string", length=255, nullable=true)
     */
    protected $rating;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    protected $description;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", nullable=true)
     */
    protected $title;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    protected $country;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255, nullable=true)
     */
    protected $category;

    /**
     * @var string
     *
     * @ORM\Column(name="subcategory", type="string", length=255, nullable=true)
     */
    protected $subcategory;

    /**
     * @var string
     *
     * @ORM\Column(name="client_preferred_hours_of_experience", type="string", length=255, nullable=true)
     */
    protected $clientPreferredHoursOfExperience;


    /**
     * @var string
     *
     * @ORM\Column(name="filter_stars", type="string", length=255, nullable=true)
     */
    protected $filterStars;





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
     * Set clientPreferredHoursOfExperience
     *
     * @param string $clientPreferredHoursOfExperience
     *
     * @return Resource
     */
    public function setClientPreferredHoursOfExperience($clientPreferredHoursOfExperience)
    {
        $this->clientPreferredHoursOfExperience = $clientPreferredHoursOfExperience;

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
     * Set subcategory
     *
     * @param string $subcategory
     *
     * @return Resource
     */
    public function setSubcategory($subcategory)
    {
        $this->subcategory = $subcategory;

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
     * Set category
     *
     * @param string $category
     *
     * @return Resource
     */
    public function setCategory($category)
    {
        $this->category = $category;

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
     * Set jobType
     *
     * @param string $jobType
     *
     * @return Resource
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
     * Set tymezone
     *
     * @param string $tymezone
     *
     * @return Resource
     */
    public function setTymezone($tymezone)
    {
        $this->tymezone = $tymezone;

        return $this;
    }

    /**
     * Get tymezone
     *
     * @return string
     */
    public function getTymezone()
    {
        return $this->tymezone;
    }

    /**
     * Set budget
     *
     * @param string $budget
     *
     * @return Resource
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
     * Set candidates
     *
     * @param string $candidates
     *
     * @return Resource
     */
    public function setCandidates($candidates)
    {
        $this->candidates = $candidates;

        return $this;
    }

    /**
     * Get candidates
     *
     * @return string
     */
    public function getCandidates()
    {
        return $this->candidates;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Resource
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set pastHires
     *
     * @param string $pastHires
     *
     * @return Resource
     */
    public function setPastHires($pastHires)
    {
        $this->pastHires = $pastHires;

        return $this;
    }

    /**
     * Get pastHires
     *
     * @return string
     */
    public function getPastHires()
    {
        return $this->pastHires;
    }

    /**
     * Set skills
     *
     * @param string $skills
     *
     * @return Resource
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
     * Set verifStatus
     *
     * @param string $verifStatus
     *
     * @return Resource
     */
    public function setVerifStatus($verifStatus)
    {
        $this->verifStatus = $verifStatus;

        return $this;
    }

    /**
     * Get verifStatus
     *
     * @return string
     */
    public function getVerifStatus()
    {
        return $this->verifStatus;
    }

    /**
     * Set totalCharge
     *
     * @param string $totalCharge
     *
     * @return Resource
     */
    public function setTotalCharge($totalCharge)
    {
        $this->totalCharge = $totalCharge;

        return $this;
    }

    /**
     * Get totalCharge
     *
     * @return string
     */
    public function getTotalCharge()
    {
        return $this->totalCharge;
    }

    /**
     * Set workload
     *
     * @param string $workload
     *
     * @return Resource
     */
    public function setWorkload($workload)
    {
        $this->workload = $workload;

        return $this;
    }

    /**
     * Get workload
     *
     * @return string
     */
    public function getWorkload()
    {
        return $this->workload;
    }

    /**
     * Set prefLocation
     *
     * @param string $prefLocation
     *
     * @return Resource
     */
    public function setPrefLocation($prefLocation)
    {
        $this->prefLocation = $prefLocation;

        return $this;
    }

    /**
     * Get prefLocation
     *
     * @return string
     */
    public function getPrefLocation()
    {
        return $this->prefLocation;
    }

    /**
     * Set english
     *
     * @param string $english
     *
     * @return Resource
     */
    public function setEnglish($english)
    {
        $this->english = $english;

        return $this;
    }

    /**
     * Get english
     *
     * @return string
     */
    public function getEnglish()
    {
        return $this->english;
    }

    /**
     * Set feedback
     *
     * @param string $feedback
     *
     * @return Resource
     */
    public function setFeedback($feedback)
    {
        $this->feedback = $feedback;

        return $this;
    }

    /**
     * Get feedback
     *
     * @return string
     */
    public function getFeedback()
    {
        return $this->feedback;
    }

    /**
     * Set totalHours
     *
     * @param string $totalHours
     *
     * @return Resource
     */
    public function setTotalHours($totalHours)
    {
        $this->totalHours = $totalHours;

        return $this;
    }

    /**
     * Get totalHours
     *
     * @return string
     */
    public function getTotalHours()
    {
        return $this->totalHours;
    }

    /**
     * Set memberSince
     *
     * @param string $memberSince
     *
     * @return Resource
     */
    public function setMemberSince($memberSince)
    {
        $this->memberSince = $memberSince;

        return $this;
    }

    /**
     * Get memberSince
     *
     * @return string
     */
    public function getMemberSince()
    {
        return $this->memberSince;
    }

    /**
     * Set level
     *
     * @param string $level
     *
     * @return Resource
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set interviewees
     *
     * @param string $interviewees
     *
     * @return Resource
     */
    public function setInterviewees($interviewees)
    {
        $this->interviewees = $interviewees;

        return $this;
    }

    /**
     * Get interviewees
     *
     * @return string
     */
    public function getInterviewees()
    {
        return $this->interviewees;
    }

    /**
     * Set avgRate
     *
     * @param string $avgRate
     *
     * @return Resource
     */
    public function setAvgRate($avgRate)
    {
        $this->avgRate = $avgRate;

        return $this;
    }

    /**
     * Get avgRate
     *
     * @return string
     */
    public function getAvgRate()
    {
        return $this->avgRate;
    }

    /**
     * Set rating
     *
     * @param string $rating
     *
     * @return Resource
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return string
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Resource
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Resource
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Resource
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set jobId
     *
     * @param string $country
     *
     * @return Resource
     */
    public function setJobId($jobId)
    {
        $this->jobId = $jobId;

        return $this;
    }

    /**
     * Get jobId
     *
     * @return string
     */
    public function getJobId()
    {
        return $this->jobId;
    }

    /**
     * Set createdAt
     *
     * @param string $country
     *
     * @return Resource
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

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

}

