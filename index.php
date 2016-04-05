<?php

#index.php

require_once __DIR__ . '/vendor/autoload.php';

// functions
include 'functions.php';

session_start();

//include de header met links
include 'views/header.php';


$fb = new Facebook\Facebook([
    'app_id' => '1588369618156841',
    'app_secret' => '1053fbdcb5833fcaf743df26e1c4e831',
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
    displayData($user);

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
?>
<div class="container-fluid">
    <h1></h1>
</div>
<div class="container">
<?php
$helper = $fb->getRedirectLoginHelper();

//$permissions = ['email','user_likes'];
$permissions = [];
$loginUrl = $helper->getLoginUrl('http://localhost:8887/aef/login-callback.php', $permissions);

echo '<a href="'. $loginUrl . '">Log in with Facebook!</a>';
?>
</div>




