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
		if (count($candidato) == 0)
		{
			redirect(base_url());
			exit;
		}
		
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
        
        $q = $this->em->createQuery('SELECT p FROM Entity\Partido p WHERE p.sigla = :sigla OR p.sigla = :sigla2 ORDER BY p.sigla ASC');
        $q->setParameters(array(
             'sigla' => $nomePartido,
             'sigla2' => str_replace("-", " ", $nomePartido),
        ));
        $partidos = $q->getResult();
        
        if (count($partidos)==0)
        {
            redirect(base_url());
            exit;

        }
        
        $q        = $this->em->createQuery('SELECT c FROM Entity\Candidato c JOIN c.partido p WHERE (p.sigla = :sigla OR p.sigla = :sigla2)');
        $q->setParameters(array(
             'sigla' => $nomePartido,
             'sigla2' => str_replace("-", " ", $nomePartido),
            ));
        $candidatos = $q->getResult();

        $this->load->view("template/header");
        $this->load->view("candidatos_todos", array("partido" => $partidos[0], "candidatos" => $candidatos));
        $this->load->view("template/footer");
    }
    
    public function rede ()
    {
        $this->api->somenteLogado();
        
        
    }
}