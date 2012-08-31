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
                
                $usuario = $this->em->getRepository('Entity\Usuario')->findByFbuid($loggedUser["id"],1);
                
                if (count($usuario) == 0)
                {
                    $u = new Entity\Usuario();
                    $u->setCadastro(new DateTime());
                    $u->setEmail($loggedUser["email"]);
                    $u->setNome($loggedUser["name"]);
                    $u->setFbuid($loggedUser["id"]);
                }
                else
                {
                    $u = $usuario[0];
                }
                $u->setFbtoken($this->fb->getAccessToken());
                
                $this->em->persist($u);
                
                
                $friends    = $this->em->getRepository('Entity\Amigos')->findByUsuario($u);
                $arrFriends = array();

                if (count($friends) > 0)
                {
                    for ($x=0;$x<count($friends);$x++)
                    {
                        $arrFriends[] = $friends[$x]->getFbuid();
                    }
                }
                
                $updated     = false;
                $currFriends = $this->fb->getUserFriends();

                for ($x=0;$x < count($currFriends);$x++)
                {
                    if (!in_array($currFriends[$x]["id"], $arrFriends))
                    {
                        $newFriend = new Entity\Amigos();
                        $newFriend->setUsuario($u);
                        $newFriend->setFbuid($currFriends[$x]["id"]);
                        $newFriend->setNome($currFriends[$x]["name"]);
                        $this->em->persist($newFriend);
                        $updated = true;
                    }
                }                
                
                try
                {
                    $this->em->flush();                   
                }
                catch (Exception $e)
                {
                    
                }
                
                $this->session->set_userdata("usuario_logado",true);
                $this->session->set_userdata("usuario_id",$u->getId());
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