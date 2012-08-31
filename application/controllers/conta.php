<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Conta extends MY_Controller {

    function __construct() 
    {
        parent::__construct();
	$this->load->library('fb');
    }

    public function index ()
    {
        
        if ($this->session->userdata("usuario_logado",false))
        {

        }
        else
        {
            $params = array(
              'scope' => 'user_location, email, user_birthday',
              'redirect_uri' => base_url() 
            );
            
            $this->load->view('template/header');
            $this->load->view('login', array(
                "login" => $this->fb->getLoginUrl($params),
            ));
            $this->load->view('template/footer');
        }
    }
    
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
    
    
    
    public function login()
    {
        $this->fb->getLoggedUser();
                
        if ($this->fb->getUser())
        {
            $loggedUser = $this->fb->getUserProfile();
            $user       = $this->em->getRepository('Entity\User')->findByFbUid($loggedUser["id"],1);
            
            if (count($user) == 0)
            {
				//cadastrado
                $user = $u;
                
            }
            else
            {
                $user = $user[0];
            }
            
            
        }
    }
    

}