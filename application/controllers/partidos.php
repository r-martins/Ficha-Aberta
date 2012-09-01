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
        
        $q = $this->em->createQuery('SELECT c FROM Entity\Candidato c WHERE c.partido = :partido');
        $q->setParameters(array(
             'partido' => $partidos[0]->getId(),
        ));
        $candidatos = $q->getResult();
        
        if ($this->session->userdata("usuario_logado",false)) 
        {
            $q = $this->em->createQuery('SELECT p FROM Entity\PartidoSeguir p JOIN p.usuario u  JOIN p.partido pa WHERE  pa.id = :partido AND u.fbuid IN (SELECT f.fbuid FROM Entity\Amigos as f WHERE f.usuario = :usuario)');
            $q->setParameters(array(
                 'partido' => $partidos[0]->getId(),
                 'usuario' => $this->session->userdata("usuario_id",0),
            ));
            $amigos = $q->getResult();
        }
        else
        {
         $amigos = array();
        }
        

        
        $seguindo = false; 
        if ($this->session->userdata("usuario_logado",false)) 
        {
            $q = $this->em->createQuery('SELECT s FROM Entity\PartidoSeguir s JOIN s.usuario u JOIN s.partido p WHERE p.id = :partido AND u.id = :usuario');
            $q->setParameters(array(
                 'partido' => $partidos[0]->getId(),
                 'usuario' => $this->session->userdata("usuario_id",0),
            ));

            $seguindos = $q->getResult();
            $seguindo = count($seguindos) > 0;
            
            if ($this->input->get("seguir", "") != "")
            {
                if (!$seguindo && $this->input->get("seguir") == "1")
                {
                    $usuario = $this->em->getRepository('Entity\Usuario')->findById($this->session->userdata("usuario_id",0));
                    $s = new Entity\PartidoSeguir();
                    $s->setPartido($partidos[0]);
                    $s->setUsuario($usuario[0]);
                    $seguindo = true;
                    $this->em->persist($s);
                }
                else if ($seguindo && $this->input->get("seguir") == "0")
                {
                    $this->em->remove($seguindos[0]);
                }
                $this->em->flush();
            }            
        }
            

        
        $graph = array();
        $graph["type"]         = "partido";
        $graph["title"]        = $partidos[0]->getSigla();
        $graph["description"]  = "Perfil do Partido " . $partidos[0]->getSigla();
        $graph["image"]        = base_url() . "assets/img/spacer.gif";
        $graph["url"]          = base_url() . "partidos/" . str_replace(" ", "-", strtolower($partidos[0]->getSigla())) . "/";
        
        $this->load->view("template/header", array("metas" => $graph));
        $this->load->view("partidos_perfil", array("partido" => $partidos[0], 
                                                   "candidatos"=>$candidatos, 
                                                   "seguindo"=>$seguindo,
                                                   "amigos"=>$amigos));
        $this->load->view("template/footer");
    }
    
    public function estado ($nomeEstado)
    {
        echo "listando partidos por estado " . $nomeEstado;
    }
    

}