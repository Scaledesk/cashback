<?php 
/* -----------------------------------------------------------------------------------------
   IdiotMinds - http://idiotminds.com
   -----------------------------------------------------------------------------------------
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//include the facebook.php from libraries directory
require_once APPPATH.'libraries/facebook/facebook.php';

class Fbci extends CI_Controller {

   public function __construct(){
	    parent::__construct();
	    $this->load->library('session');
	    $this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('form','url','language'));  //Load the Session 
		$this->config->load('facebook'); //Load the facebook.php file which is located in config directory
    }
	public function index()
	{
	  $this->load->view('auth/main.php'); //load the main.php file for view
	}
	
	

	function logout(){
		$base_url=$this->config->item('base_url'); //Read the baseurl from the config.php file
		$this->session->sess_destroy();  //session destroy
		header('Location: '.$base_url);  //redirect to the home page
		
	}
	function fblogin(){
		$base_url=$this->config->item('base_url'); //Read the baseurl from the config.php file
		//get the Facebook appId and app secret from facebook.php which located in config directory for the creating the object for Facebook class
    	$facebook = new Facebook(array(
		'appId'		=>  $this->config->item('appID'), 
		'secret'	=> $this->config->item('appSecret'),
		));
		
		$user = $facebook->getUser(); // Get the facebook user id 
		

		if($user){
			
			try{
				$user_profile = $facebook->api('/me');  //Get the facebook user profile data
				
				$params = array('next' => $base_url.'fbci/logout');
				
				$ses_user=array('User'=>$user_profile,
				   'logout' =>$facebook->getLogoutUrl($params)   //generating the logout url for facebook 
				);
                 print_r($ses_user);

		        $this->session->set_userdata($ses_user);
				header('Location: '.$base_url);
			}catch(FacebookApiException $e){
				error_log($e);
				$user = NULL;
			}		
		}	
		$this->load->view('auth/main');
	}
	





	function google_login1(){

     $data['title']='Cashback';

       $this->load->library('Google_Client.php');
       $this->load->library('Google_Oauth2Service.php');
      $this->load->view('templates/header.php');
      $this->load->view('pages/google_login.php');
      $this->load->view('templates/footer.php');

}

public function google_login2(){


	
$provider = new League\OAuth2\Client\Provider\ Google([
    'clientId'      => '488548419189-f9fh4l2lq9o5ufle358ta9jkk8l6s4cc.apps.googleusercontent.com',
    'clientSecret'  => 'h0yrMZCliF1rjh_QeNsPUqU9',
    'redirectUri'   => 'http://localhost:88/cashback/fbci/google_login',
    'scopes'        => ['email','publish_actions','user_birthday','user_location','user_work_history','user_hometown','user_photos'],
]);

if (!isset($_GET['code'])) {

    // If we don't have an authorization code then get one
    $authUrl = $provider->getAuthorizationUrl();
    $_SESSION['oauth2state'] = $provider->getState();
    header('Location: '.$authUrl);
    exit;

// Check given state against previously stored one to mitigate CSRF attack
} elseif (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {

    unset($_SESSION['oauth2state']);
    exit('Invalid state');

} else {

    // Try to get an access token (using the authorization code grant)
    $token = $provider->getAccessToken('authorization_code', [
        'code' => $_GET['code']
    ]);

    // Optional: Now you have a token you can look up a users profile data
    try {

        // We got an access token, let's now get the user's details
        $userDetails = $provider->getResourceOwner($token);

        // Use these details to create a new profile
        printf('Hello %s!', $userDetails->firstName);

    } catch (Exception $e) {

        // Failed to get user details
        exit('Oh dear...');
    }

    // Use this to interact with an API on the users behalf
    echo $token->accessToken;

    // Use this to get a new access token if the old one expires
    echo $token->refreshToken;

    // Unix timestamp of when the token will expire, and need refreshing
    echo $token->expires;
}
}



public function google_login(){


	  $this->load->view('auth/main_google.php'); //load the main.php file for view

   }



public function twitter_login(){


	  $this->load->view('auth/main_twitter.php'); //load the main.php file for view

   }

}

/* End of file fbci.php */
/* Location: ./application/controllers/fbci.php */