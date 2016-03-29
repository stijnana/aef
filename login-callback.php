<?php
#login-callback.php

require_once __DIR__ . '/vendor/autoload.php';

session_start();

$fb = new Facebook\Facebook([
    'app_id' => '109552819442627',
    'app_secret' => 'c14e8f9a29048f95da75b5107a7b3333',
    'default_graph_version' => 'v2.5',
    'default_access_token' => isset($_SESSION['facebook_access_token']) ? $_SESSION['facebook_access_token'] : 'c14e8f9a29048f95da75b5107a7b3333'

]);

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

header('Location: index.php');
