<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Projeto extends MY_Controller {

    function __construct() 
    {
        parent::__construct();
	$this->load->library('fb');
    }

    public function index ()
    {
        $this->load->view("template/header");
        $this->load->view("projeto_inicio");
        $this->load->view("template/footer");
    }

    public function sobre ()
    {
        $this->load->view("template/header");
        $this->load->view("projeto_sobre");
        $this->load->view("template/footer");
    }

}