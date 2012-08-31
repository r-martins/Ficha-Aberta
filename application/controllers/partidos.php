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
    
    public function perfil ($nomePartido="")
    {
        $q = $this->em->createQuery('SELECT p FROM Entity\Partido p WHERE p.sigla = :sigla ORDER BY p.sigla ASC');
        $q->setParameters(array(
             'sigla' => $nomePartido,
        ));
        $partidos = $q->getResult();
        
        if (count($partidos)==0)
        {
            redirect(base_url());
            exit;

            }
        $q = $this->em->createQuery('SELECT c FROM Entity\Candidato c WHERE c.partido = :partido');
        $q->setParameters(array(
             'partido' => $partidos[0]->getId(),
        ));
        $candidatos = $q->getResult();
        
        $this->load->view("template/header");
        $this->load->view("partidos_perfil", array("partido" => $partidos[0], 
                                                   "candidatos"=>$candidatos, 
                                                   "seguindo"=>true));
        $this->load->view("template/footer");
    }
    
    public function estado ($nomeEstado)
    {
        echo "listando partidos por estado " . $nomeEstado;
    }
    

}