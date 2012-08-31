<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Partidos extends MY_Controller {

    function __construct() 
    {
        parent::__construct();
	$this->load->library('fb');
    }

    public function index ()
    {
        $partidos  = $this->em->getRepository('Entity\Partido')->findAll(array("order"=>"sigla"));
        var_dump($partidos);
        exit;
        $this->load->view("template/header");
        $this->load->view("partidos_todos");
        $this->load->view("template/footer");
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