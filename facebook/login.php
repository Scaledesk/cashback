<?php
session_start();
require_once ('/src/Facebook/autoload.php');

$fb = new Facebook\Facebook([
    'app_id' => '1648153985422150',
    'app_secret' => 'd541924c4c4d3e261cddf77b42769aa8',
    'default_graph_version' => 'v2.4',
]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl(base_url().'facebook/fb-callback.php', $permissions);

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
?>

