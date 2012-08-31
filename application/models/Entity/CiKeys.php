<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CiKeys
 *
 * @ORM\Table(name="ci_keys")
 * @ORM\Entity
 */
class CiKeys
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
     * @var string $key
     *
     * @ORM\Column(name="key", type="string", length=40, nullable=false)
     */
    private $key;

    /**
     * @var integer $level
     *
     * @ORM\Column(name="level", type="integer", nullable=false)
     */
    private $level;

    /**
     * @var boolean $ignoreLimits
     *
     * @ORM\Column(name="ignore_limits", type="boolean", nullable=false)
     */
    private $ignoreLimits;

    /**
     * @var integer $dateCreated
     *
     * @ORM\Column(name="date_created", type="integer", nullable=false)
     */
    private $dateCreated;


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
     * Set key
     *
     * @param string $key
     * @return CiKeys
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * Get key
     *
     * @return string 
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set level
     *
     * @param integer $level
     * @return CiKeys
     */
    public function setLevel($level)
    {
        $this->level = $level;
        return $this;
    }

    /**
     * Get level
     *
     * @return integer 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set ignoreLimits
     *
     * @param boolean $ignoreLimits
     * @return CiKeys
     */
    public function setIgnoreLimits($ignoreLimits)
    {
        $this->ignoreLimits = $ignoreLimits;
        return $this;
    }

    /**
     * Get ignoreLimits
     *
     * @return boolean 
     */
    public function getIgnoreLimits()
    {
        return $this->ignoreLimits;
    }

    /**
     * Set dateCreated
     *
     * @param integer $dateCreated
     * @return CiKeys
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return integer 
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }
}