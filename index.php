<?php

#index.php

require_once __DIR__ . '/vendor/autoload.php';
require 'includes/config.php';
require_once 'includes/database.php';


// functions
include 'functions.php';

session_start();

$fb = new Facebook\Facebook([
    'app_id' => '109552819442627',
    'app_secret' => 'c14e8f9a29048f95da75b5107a7b3333',
    'default_graph_version' => 'v2.5',
    'default_access_token' => isset($_SESSION['facebook_access_token']) ? $_SESSION['facebook_access_token'] : 'c14e8f9a29048f95da75b5107a7b3333'

]);

try {
    //Query die de 'fields' ophaald.
    $response = $fb->get('/me?fields=id,name,about,age_range,bio,birthday,context,cover,currency,devices,education,email,favorite_athletes,favorite_teams,first_name,gender,hometown,inspirational_people,install_type,installed,interested_in,is_shared_login,is_verified,languages,last_name,link,locale,location,meeting_for,middle_name,name_format,payment_pricepoints,political,public_key,quotes,relationship_status,religion,security_settings,shared_login_upgrade_required_by,significant_other,sports,test_group,third_party_id,timezone,updated_time,verified,video_upload_limits,viewer_can_send_gift,website,work&debug=all');

    //Maakt van de response de variable $user
    $user = $response->getGraphObject();

    echo "<pre>";
    ?>


    <li><a href="logout.php">Logout</a></li>


    <?php
    echo "</pre>";




    //displayData($user);
    $id = $user['id'];
    $name = $user['name'];
    //echo $id;
    //echo $name;
    $sql = "INSERT INTO acount_data (facebookId, facebookName) VALUES ( '$id', '$name')";
    echo $sql;

    exit;
}
    //Error
    catch (Facebook\Exceptions\FacebookResponseException $e){
        //echo 'Graph returned an error: ' . $e->getMessage();
}
    //Error
    catch (Facebook\Exceptions\FacebookSDKException $e){
        //echo 'Facebook SDK returned an error: ' . $e->getMessage();
}

$helper = $fb->getRedirectLoginHelper();

//$permissions = ['email','user_likes'];
$permissions = [];
$loginUrl = $helper->getLoginUrl('http://localhost/leerjaar2/periode3/proj/aef/login-callback.php', $permissions);

echo '<a href="'. $loginUrl . '">Log in with Facebook!</a>';

//
//$permissions = [];
//$loginUrl = $helper->getLoginUrl('http://localhost:8887/aef/login-callback.php', $permissions);
//
//echo '<a href="'. $loginUrl . '">Log in with Facebook!</a>';






