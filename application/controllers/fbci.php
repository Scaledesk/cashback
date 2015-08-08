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


	  //$this->load->view('auth/main_google.php'); //load the main.php file for view

   

########## Google Settings.. Client ID, Client Secret from https://cloud.google.com/console #############
$google_client_id       = '63682838275-89hv1pmfogua5tesftaosirgv6a9bbdt.apps.googleusercontent.com';
$google_client_secret   = 'h2aV1lp9x2An0J3QS2POXP6Y';
$google_redirect_url    = 'http://localhost:88/cashback/fbci/google_login'; //path to your script
$google_developer_key   = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx';

########## MySql details (Replace with yours) #############
$db_username = "root"; //Database Username
$db_password = "084222252"; //Database Password
$hostname = "localhost:3306"; //Mysql Hostname
$db_name = 'cashback'; //Database Name
$base_url='http://localhost:88/cashback';
###################################################################
//include google api files

require_once '/google_src/Google_Client.php';
require_once '/google_src/config.php';
require_once '/google_src/Google_Oauth2Service.php';


$gClient = new Google_Client();
$gClient->setApplicationName('Login to Sanwebe.com');
$gClient->setClientId($google_client_id);
$gClient->setClientSecret($google_client_secret);
$gClient->setRedirectUri($google_redirect_url);
$gClient->setDeveloperKey($google_developer_key);

$google_oauthV2 = new Google_Oauth2Service($gClient);

//If user wish to log out, we just unset Session variable
if (isset($_REQUEST['reset'])) 
{
  unset($_SESSION['token']);
  $gClient->revokeToken();
  header('Location: ' . filter_var($google_redirect_url, FILTER_SANITIZE_URL)); //redirect user back to page
}

//If code is empty, redirect user to google authentication page for code.
//Code is required to aquire Access Token from google
//Once we have access token, assign token to session variable
//and we can redirect user back to page and login.
if (isset($_GET['code'])) 
{ 
    $gClient->authenticate($_GET['code']);
    $_SESSION['token'] = $gClient->getAccessToken();
    header('Location: ' . filter_var($google_redirect_url, FILTER_SANITIZE_URL));
    return;
}


if (isset($_SESSION['token'])) 
{ 
    $gClient->setAccessToken($_SESSION['token']);
}


if ($gClient->getAccessToken()) 
{
      //For logged in user, get details from google using access token
      $user                 = $google_oauthV2->userinfo->get();
      $user_id              = $user['id'];
      $user_name            = filter_var($user['name'], FILTER_SANITIZE_SPECIAL_CHARS);
      $email                = filter_var($user['email'], FILTER_SANITIZE_EMAIL);
      $profile_url          = filter_var($user['link'], FILTER_VALIDATE_URL);
      $profile_image_url    = filter_var($user['picture'], FILTER_VALIDATE_URL);
      $personMarkup         = "$email<div><img src='$profile_image_url?sz=50'></div>";
      $_SESSION['token']    = $gClient->getAccessToken();
}
else 
{
    //For Guest user, get google login url
    $authUrl = $gClient->createAuthUrl();
}

//HTML page start
// echo '<!DOCTYPE HTML><html>';
// echo '<head>';
// echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
// echo '<title>Login with Google</title>';
// echo '</head>';
// echo '<body>';
// echo '<h1>Login with Google</h1>';



if(isset($authUrl)) //user is not logged in, show login button
{ 
  //header('location:$authUrl');
  redirect($authUrl);
    //echo '<a class="login" href="'.$authUrl.'"><img src="'.$base_url.'/images/google-login-button.png" /></a>';
} 
else // user logged in 
{

     $this->load->model('User_model');
	 $user['user']=$this->User_model->google_data($user_id);

	 if(isset($user)){

	 	$this->set_session($user);
        redirect('auth/home','refresh');
       
	 }
	 else{


	 	 $this->User_model->google_login_data($user_name,$email,$user_id);
        $user['user']=$this->User_model->google_data($user_id);
        $this->set_session($user);
         redirect('auth/home','refresh');

	 }
	 //print_r($user);

   /* connect to database using mysqli */
  //   $mysqli = new mysqli($hostname, $db_username, $db_password, $db_name);
    
  //   if ($mysqli->connect_error) {
  //       die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
  //   }
    
    
  //   $user_exist = $mysqli->query("SELECT COUNT(google_id) as usercount FROM users WHERE google_id=$user_id")->fetch_object()->usercount; 
  //   if($user_exist)
  //   {
  //       echo 'Welcome back '.$user_name.'!';


  //   }else{ 
  //   	$th
        
  //   if(){
     
  // $oldname=explode(' ', $user_name);
  // $fname=$oldname[0];
  // $lname=$oldname[1];
  // $provider='google';
  //       //echo 'Hi '.$user_name.', Thanks for Registering!';
  //       $mysqli->query("INSERT INTO users ( google_id,username,first_name, last_name,email,provider) 
  //       VALUES ('$user_id','$user_name','$fname','$lname','$email','$provider')");
   
  //  }
    }
    
    
    // echo '<pre>'; 
    // print_r($user);
    // echo '</pre>';  
// }




    }


public function set_session($user)
  {
     
       
    $session_data = array(
        'username'             => $user['name'],
        'email'                => $user['email'],
        'user_id'              => $user['id'] //everyone likes to overwrite id so we'll use user_id
        
    );
     
    $this->session->set_userdata($session_data);
    
    return TRUE;
  }







}

/* End of file fbci.php */
/* Location: ./application/controllers/fbci.php */