<?php
    session_start();
    require_once '/src/Facebook/autoload.php';

    $fb = new Facebook\Facebook([
      'app_id' => '1648153985422150',
      'app_secret' => 'd541924c4c4d3e261cddf77b42769aa8',
      'default_graph_version' => 'v2.4',
      //'default_access_token' => '', // optional
    ]);
       
    try {
      // Get the Facebook\GraphNodes\GraphUser object for the current user.
      // If you provided a 'default_access_token', the '{access-token}' is optional.
      $response = $fb->get('/me?fields=id,name,email', $_GET['token']);
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
    echo var_dump($me);
    echo 'Logged in as ' . $me->getName();
?>
