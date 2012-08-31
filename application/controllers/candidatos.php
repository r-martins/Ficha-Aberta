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
    
    public function perfil ($nomePartido)
    {
        
        echo "perfil candidato " . $nomePartido;
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