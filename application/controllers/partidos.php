<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Partidos extends MY_Controller {

    function __construct() 
    {
        parent::__construct();
	$this->load->library('fb');
    }

    public function index ()
    {
        $q        = $this->em->createQuery('SELECT p FROM Entity\Partido p ORDER BY p.sigla ASC');
        $partidos = $q->getResult();

        $this->load->view("template/header");
        $this->load->view("partidos_todos", array("partidos" => $partidos));
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