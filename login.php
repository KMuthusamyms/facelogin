<?php 
if(!session_id()) {
    session_start();
}
require_once __DIR__ . '/Facebook/autoload.php'; // change path as needed
$fb = new Facebook\Facebook([
  'app_id' => '109337853192972', // Replace {app-id} with your app id
  'app_secret' => '6756645a5d256f1bfbb808e18047072b',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://localhost/facelogin/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
?>