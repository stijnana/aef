<?php
#login-callback.php

require_once __DIR__ . '/vendor/autoload.php';
include "functions.php";

session_start();

$fb = new Facebook\Facebook([
    'app_id' => '1588369618156841',
    'app_secret' => '1053fbdcb5833fcaf743df26e1c4e831',
    'default_graph_version' => 'v2.5',
    'default_access_token' => isset($_SESSION['facebook_access_token']) ? $_SESSION['facebook_access_token'] : '1053fbdcb5833fcaf743df26e1c4e831'

]);

insertUsers();

$helper = $fb->getRedirectLoginHelper();

try{
    $accessToken = $helper->getAccessToken();
} catch (Facebook\Exceptions\FacebookResponseException $e){
    //echo 'Graph returned an error: ' . $e->getMessage();
} catch (Facebook\Exceptions\FacebookSDKException $e){
    //echo 'Facebook SDK returned an error: ' . $e->getMessage();
}

if (isset($accessToken)){
    //Logged in!
    $_SESSION['facebook_access_token'] = (string) $accessToken;
} elseif ($helper->getError()){
    //The user denied the request
}

header('Location: index.php?page=home');
?>

