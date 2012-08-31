<?php

class MY_Controller extends CI_Controller
{

    // Doctrine EntityManager
    public $em;

    function __construct()
    {
        parent::__construct();

        $this->em = $this->doctrine->em;
    }

}

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH.'/libraries/REST_Controller.php';

