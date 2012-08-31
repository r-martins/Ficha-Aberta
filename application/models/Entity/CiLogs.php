<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\CiLogs
 *
 * @ORM\Table(name="ci_logs")
 * @ORM\Entity
 */
class CiLogs
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
     * @var string $method
     *
     * @ORM\Column(name="method", type="string", length=6, nullable=false)
     */
    private $method;

    /**
     * @var text $params
     *
     * @ORM\Column(name="params", type="text", nullable=true)
     */
    private $params;

    /**
     * @var string $apiKey
     *
     * @ORM\Column(name="api_key", type="string", length=40, nullable=false)
     */
    private $apiKey;

    /**
     * @var string $ipAddress
     *
     * @ORM\Column(name="ip_address", type="string", length=45, nullable=false)
     */
    private $ipAddress;

    /**
     * @var integer $time
     *
     * @ORM\Column(name="time", type="integer", nullable=false)
     */
    private $time;

    /**
     * @var boolean $authorized
     *
     * @ORM\Column(name="authorized", type="boolean", nullable=false)
     */
    private $authorized;


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
     * @return CiLogs
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
     * Set method
     *
     * @param string $method
     * @return CiLogs
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * Get method
     *
     * @return string 
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set params
     *
     * @param text $params
     * @return CiLogs
     */
    public function setParams($params)
    {
        $this->params = $params;
        return $this;
    }

    /**
     * Get params
     *
     * @return text 
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Set apiKey
     *
     * @param string $apiKey
     * @return CiLogs
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

    /**
     * Set ipAddress
     *
     * @param string $ipAddress
     * @return CiLogs
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
     * Set time
     *
     * @param integer $time
     * @return CiLogs
     */
    public function setTime($time)
    {
        $this->time = $time;
        return $this;
    }

    /**
     * Get time
     *
     * @return integer 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set authorized
     *
     * @param boolean $authorized
     * @return CiLogs
     */
    public function setAuthorized($authorized)
    {
        $this->authorized = $authorized;
        return $this;
    }

    /**
     * Get authorized
     *
     * @return boolean 
     */
    public function getAuthorized()
    {
        return $this->authorized;
    }
}