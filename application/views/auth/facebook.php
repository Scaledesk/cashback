<?php


require 'src/config.php';
require 'src/facebook.php';
// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
  'appId'  => $config['398712076989264'],
  'secret' => $config['deec86777ae58b330f089b35d319c185'],
  'cookie' => true
));

if(isset($_GET['logout']))
{
    $url = 'https://www.facebook.com/logout.php?next=' . urlencode('http://demo.phpgang.com/facebook_login_graph_api/') .
      '&access_token='.$_GET['tocken'];
    session_destroy();
    header('Location: '.$url);
}
if(isset($_GET['fbTrue']))
{
    $token_url = "https://graph.facebook.com/oauth/access_token?"
       . "client_id=".$config['App_ID']."&redirect_uri=" . urlencode($config['callback_url'])
       . "&client_secret=".$config['App_Secret']."&code=" . $_GET['code'];

     $response = file_get_contents($token_url);
     $params = null;
     parse_str($response, $params);

     $graph_url = "https://graph.facebook.com/me?access_token=CAACEdEose0cBAAZClup632RXes59BSNhqzENpVVDHbMHB6oEVNgcyItTSSi24i2ePZAZBkptfWNXdySite5P7ubJZA5EpzxWGaymLcqrzwD7PK9dFY0OfK3W25dPxZBCX60Wg96tX1mNH1izGE9RFq68S4h3tZCPFnXjgSIbpZC4kGG1eQD8kSJ7TkccSjJkXvPSQxgyvUxbfqAzxRkF41DRqxbqEvqKFEZD"
       . $params['access_token'];

     $user = json_decode(file_get_contents($graph_url));
     $extra = "<a href='index.php?logout=1&tocken=".$params['access_token']."'>Logout</a><br>";
     $content = $user;
}
else
{
    $content = '<a href="https://www.facebook.com/dialog/oauth?client_id='.$config['App_ID'].'&redirect_uri='.$config['callback_url'].'&scope=email,user_likes"><img src="./images/login-button.png" alt="Sign in with Facebook"/></a>';
}

include('html.inc');
