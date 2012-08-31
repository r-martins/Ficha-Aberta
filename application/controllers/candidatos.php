<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Candidatos extends MY_Controller {

    function __construct() 
    {
        parent::__construct();
	$this->load->library('fb');
    }

    public function index ()
    {
        echo "index candidatos";
    }
    
    public function perfil ($idCandidato)
    {
        
        // echo "perfil candidato " . $idCandidato;

        $q        = $this->em->createQuery('SELECT c FROM Entity\Candidato c WHERE c.id = :id ORDER BY c.nomeUrna ASC');
        $q->setParameters(array(
                'id' => $idCandidato
            ));

        $candidato = $q->getResult();

        $this->load->view("template/header");
        $this->load->view("candidatos_perfil", array("candidato" => $candidato));
        $this->load->view("template/footer");
    }
    
    public function estado ($nomeEstado)
    {
        echo "listando candidatos por estado " . $nomeEstado;
    }
    
    public function partido ($nomePartido)
    {
        echo "listando candidatos por partido  " . $nomePartido;
    }
    
    public function rede ()
    {
        $this->api->somenteLogado();
        
        
    }
}