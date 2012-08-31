<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CiLimits
 *
 * @ORM\Table(name="ci_limits")
 * @ORM\Entity
 */
class CiLimits
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $uri
     *
     * @ORM\Column(name="uri", type="string", length=255, nullable=false)
     */
    private $uri;

    /**
     * @var integer $count
     *
     * @ORM\Column(name="count", type="integer", nullable=false)
     */
    private $count;

    /**
     * @var integer $hourStarted
     *
     * @ORM\Column(name="hour_started", type="integer", nullable=false)
     */
    private $hourStarted;

    /**
     * @var string $apiKey
     *
     * @ORM\Column(name="api_key", type="string", length=40, nullable=false)
     */
    private $apiKey;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set uri
     *
     * @param string $uri
     * @return CiLimits
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
        return $this;
    }

    /**
     * Get uri
     *
     * @return string 
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Set count
     *
     * @param integer $count
     * @return CiLimits
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    /**
     * Get count
     *
     * @return integer 
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set hourStarted
     *
     * @param integer $hourStarted
     * @return CiLimits
     */
    public function setHourStarted($hourStarted)
    {
        $this->hourStarted = $hourStarted;
        return $this;
    }

    /**
     * Get hourStarted
     *
     * @return integer 
     */
    public function getHourStarted()
    {
        return $this->hourStarted;
    }

    /**
     * Set apiKey
     *
     * @param string $apiKey
     * @return CiLimits
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    /**
     * Get apiKey
     *
     * @return string 
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }
}