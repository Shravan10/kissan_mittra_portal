<?php
$fb = new Facebook\Facebook([
  'app_id' => '227542381141559', // Replace {app-id} with your app id
  'app_secret' => '0ec30b34bdbbcd193aff39021e7e382f',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://example.com/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';

?>