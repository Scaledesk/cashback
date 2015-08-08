<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Facebook extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
       $this->load->model('User_model');
       $this->load->model('Product_model');
		  $this->load->library('session');
		  $this->load->library(array('ion_auth','form_validation'));
      $this->load->helper(array('form','url','language'));

	}



public function facebook_login()
{
	require_once ('facebook/src/Facebook/autoload.php');
$fb = new Facebook\Facebook([
    'app_id' => '1648153985422150',
    'app_secret' => 'd541924c4c4d3e261cddf77b42769aa8',
    'default_graph_version' => 'v2.4',
]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl(base_url().'Facebook/fb_callback', $permissions);

//echo $loginUrl;
redirect($loginUrl);

//echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
     }


   public function fb_callback(){




require_once ('facebook/src/Facebook/autoload.php');

    $fb = new Facebook\Facebook([
      'app_id' => '1648153985422150',
      'app_secret' => 'd541924c4c4d3e261cddf77b42769aa8',
      'default_graph_version' => 'v2.4',
      ]);

    $helper = $fb->getRedirectLoginHelper();

    try {
      $accessToken = $helper->getAccessToken();
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
      // When Graph returns an error
      echo 'Graph returned an error: ' . $e->getMessage();
      exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
      // When validation fails or other local issues
      echo 'Facebook SDK returned an error: ' . $e->getMessage();
      exit;
    }

    if (! isset($accessToken)) {
      if ($helper->getError()) {
        header('HTTP/1.0 401 Unauthorized');
        echo "Error: " . $helper->getError() . "\n";
        echo "Error Code: " . $helper->getErrorCode() . "\n";
        echo "Error Reason: " . $helper->getErrorReason() . "\n";
        echo "Error Description: " . $helper->getErrorDescription() . "\n";
      } else {
        header('HTTP/1.0 400 Bad Request');
        echo 'Bad request';
      }
      exit;
    }

    // Logged in
    //echo '<h3>Access Token</h3>';
    //var_dump($accessToken->getValue());

    $token=$accessToken->getValue();
    //header("Location:index.php?token=".$accessToken->getValue());
    //redirect(bsae_url().'Facebook/', 'refresh');
// ...............................................................

//require_once 'facebook/src/Facebook/autoload.php';

    $fb = new Facebook\Facebook([
      'app_id' => '1648153985422150',
      'app_secret' => 'd541924c4c4d3e261cddf77b42769aa8',
      'default_graph_version' => 'v2.4',
      //'default_access_token' => '', // optional
    ]);
       
    try {
      // Get the Facebook\GraphNodes\GraphUser object for the current user.
      // If you provided a 'default_access_token', the '{access-token}' is optional.
      $response = $fb->get('/me?fields=id,name,email', $token);
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
      // When Graph returns an error
      echo 'Graph returned an error: ' . $e->getMessage();
      exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
      // When validation fails or other local issues
      echo 'Facebook SDK returned an error: ' . $e->getMessage();
      exit;
    }

    $me = $response->getGraphUser();
    //echo var_dump($me);
   // echo 'Logged in as ' . $me->getName();
    
     $name=$me->getName();
       $email=$me["email"];
     
    //echo $name=$me->getName();
    //echo $name=$me->getName();
      
     if ($this->User_model->facebook_data($name,$email))
     {

        //$this->session->set_userdata('userdata',$name);
         //$this->session->set_userdata('userdata',$email);
          $user['user']=$this->User_model->select_user($email);
          
          //print_r($user['user']);
          
           //die();

           $this->set_session($user);
            redirect('auth/home','refresh');
           
           }
   
      
   }


public function set_session($user)
  {
       

   //print_r($user);
    //$this->trigger_events('pre_set_session');
  //echo "session";
    $session_data = array(
        'username'             => $user['user'][0]->username,
        'email'                => $user['user'][0]->email,
        'user_id'              => $user['user'][0]->id //everyone likes to overwrite id so we'll use user_id
        
    );


    //print_r($session_data);
    $this->session->set_userdata($session_data);
    // $this->session->set_userdata('userdata',$session_data);
    //$this->trigger_events('post_set_session');

      //print_r($this->session->userdata());
      //die();
    return TRUE;
  }

}
