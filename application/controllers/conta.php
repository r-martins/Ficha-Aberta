<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Conta extends MY_Controller {

    function __construct() 
    {
        parent::__construct();
	$this->load->library('fb');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $back = $this->input->get("back","");
        if (strlen($back) > 0) $back = substr($back,1,strlen($back)-1);
        redirect(base_url().$back);
    }
    
    
    public function facebook()
    {
        $this->fb->getLoggedUser();

        
        if ($this->fb->getUser())
        {
            $loggedUser = $this->fb->getUserProfile();
            
            if (!$this->session->userdata("usuario_logado",false))
            {
                $this->session->set_userdata("usuario_logado",true);
                $this->session->set_userdata("usuario_fbid",$loggedUser["id"]);
                $this->session->set_userdata("usuario_nome",$loggedUser["name"]);
                $this->session->set_userdata("usuario_nome_primeiro",$loggedUser["first_name"]);
                $this->session->set_userdata("usuario_location",$loggedUser["location"]);
            }
            if (strlen($back) > 0) $back = substr($back,1,strlen($back)-1);
            redirect(base_url(). $back);
        }
        else
        {
            $back = $this->input->get("back","");
            if (strlen($back) > 0) $back = "?back=" . substr($back,1,strlen($back)-1);
            redirect(base_url()."facebook/" . $back);
        }
    }
    
    public function login()
    {
        $back = $this->input->get("back","");
        if (strlen($back) > 0) $back = "?back=" . substr($back,1,strlen($back)-1);

        $params = array(
          'scope' => 'user_location, email, user_birthday',
          'redirect_uri' => base_url()."facebook/" . $back 
        );

        redirect($this->fb->getLoginUrl($params));
        
    }
    

}