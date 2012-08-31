<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Partidos extends MY_Controller {

    function __construct() 
    {
        parent::__construct();
	$this->load->library('fb');
    }

    public function index ()
    {
        echo "index partidos";
    }
    
    public function perfil ($nomePartido)
    {
        
        echo "perfil partido " . $nomePartido;
    }
    
    public function estado ($nomeEstado)
    {
        echo "listando partidos por estado " . $nomeEstado;
    }
    

}