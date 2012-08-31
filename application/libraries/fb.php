<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** 
 * Facebook-SDK
 * Classe responsável pelo integração com o facebook.
 * 
 * @package	libraries
 * @desc	Classe responsável pelo integração com o facebook.
 * @author	David Ruiz;
 * 
 */
class Fb
{

    private $_facebook;
    private $_user;

    function __construct() 
    {
        require_once 'facebook-sdk/facebook.php';

        $this->_facebook = new Facebook(array(
          'appId'  => '202233506573421',
          'secret' => '320b9f99d9dd5e97377560ee5a6d8af2',
        ));
    }

    public function getLoggedUser()
    {
        // Get User ID
        $this->_user = $this->_facebook->getUser();
    }
    
    public function getUser()
    {
        return $this->_user;
    }
    
    public function getLoginUrl($params=array())
    {
        return $this->_facebook->getLoginUrl($params);
    }
    
    public function getLogoutUrl($params=array())
    {
        return $this->_facebook->getLogoutUrl($params);
    }
    
    public function getUserFriends()
    {
        $user_friends = array();
        if ($this->_user)
        {
            try
            {
                $api     = $this->_facebook->api('/me/friends?limit=5000');
                $friends = $api["data"];
                
				for ($x=0;$x<count($friends);$x++)
					$user_friends[count($user_friends)] = $friends[$x];

                $api     = $this->_facebook->api('/me/friends?limit=5000&offset=5000');
                $friends = $api["data"];
                
				for ($x=0;$x<count($friends);$x++)
					$user_friends[count($user_friends)] = $friends[$x];

            } 
            catch (FacebookApiException $e) 
            {
                $this->_user = null;
            }
        }

        return $user_friends;
        
    }
    
    public function getUserProfile()
    {
        $user_profile = null;
        if ($this->_user)
        {
            try
            {
                $user_profile = $this->_facebook->api('/me');
            } 
            catch (FacebookApiException $e) 
            {
                $this->_user = null;
            }
        }
        return $user_profile;
    }
    
    public function getAccessToken()
    {
        return $this->_facebook->getAccessToken();
    }
    
    public function setExtendedToken()
    {
        return $this->_facebook->api('/oauth/access_token?client_id=138950392913487&client_secret=b072eb2ca218004ea77ff32ae61d3a17&grant_type=fb_exchange_token&fb_exchange_token=' . $this->_facebook->getAccessToken());
    }
}