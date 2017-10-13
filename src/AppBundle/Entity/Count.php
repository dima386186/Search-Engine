<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use DateTime;


/**
 * Count
 *
 * @ORM\Table(name="count")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CountRepository")
 */
class Count
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     *
     *
     */
    protected $date;

    /**
     * @var int
     *
     * @ORM\Column(name="results", type="integer", nullable=true)
     */
    protected $results;

    /**
     * @var int
     *
     * @ORM\Column(name="search_id", type="integer", nullable=true)
     */
    protected $searchId;


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Count
     */
    public function setDate()
    {
        $this->date = new DateTime();

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set results
     *
     * @param integer $results
     *
     * @return Count
     */
    public function setResults($results)
    {
        $this->results = $results;

        return $this;
    }

    /**
     * Get results
     *
     * @return int
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * Set searchId
     *
     * @param integer $searchId
     *
     * @return Count
     */
    public function setSearchId($searchId)
    {
        $this->searchId = $searchId;

        return $this;
    }

    /**
     * Get searchId
     *
     * @return int
     */
    public function getSearchId()
    {
        return $this->searchId;
    }
}

