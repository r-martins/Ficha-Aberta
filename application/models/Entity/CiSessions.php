<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CiSessions
 *
 * @ORM\Table(name="ci_sessions")
 * @ORM\Entity
 */
class CiSessions
{
    /**
     * @var string $sessionId
     *
     * @ORM\Column(name="session_id", type="string", length=40, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sessionId;

    /**
     * @var string $ipAddress
     *
     * @ORM\Column(name="ip_address", type="string", length=45, nullable=false)
     */
    private $ipAddress;

    /**
     * @var string $userAgent
     *
     * @ORM\Column(name="user_agent", type="string", length=120, nullable=false)
     */
    private $userAgent;

    /**
     * @var integer $lastActivity
     *
     * @ORM\Column(name="last_activity", type="integer", nullable=false)
     */
    private $lastActivity;

    /**
     * @var text $userData
     *
     * @ORM\Column(name="user_data", type="text", nullable=false)
     */
    private $userData;


    /**
     * Get sessionId
     *
     * @return string 
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set ipAddress
     *
     * @param string $ipAddress
     * @return CiSessions
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    /**
     * Get ipAddress
     *
     * @return string 
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set userAgent
     *
     * @param string $userAgent
     * @return CiSessions
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;
        return $this;
    }

    /**
     * Get userAgent
     *
     * @return string 
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Set lastActivity
     *
     * @param integer $lastActivity
     * @return CiSessions
     */
    public function setLastActivity($lastActivity)
    {
        $this->lastActivity = $lastActivity;
        return $this;
    }

    /**
     * Get lastActivity
     *
     * @return integer 
     */
    public function getLastActivity()
    {
        return $this->lastActivity;
    }

    /**
     * Set userData
     *
     * @param text $userData
     * @return CiSessions
     */
    public function setUserData($userData)
    {
        $this->userData = $userData;
        return $this;
    }

    /**
     * Get userData
     *
     * @return text 
     */
    public function getUserData()
    {
        return $this->userData;
    }
}