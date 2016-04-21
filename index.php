<?php
#index.php

require_once __DIR__ . '/vendor/autoload.php';
require 'includes/config.php';
require_once 'includes/database.php';


// functions
include 'functions.php';

session_start();

//include de header met links
include 'views/header.php';


$fb = new Facebook\Facebook([
    'app_id' => '1588369618156841',
    'app_secret' => '1053fbdcb5833fcaf743df26e1c4e831',
    'default_graph_version' => 'v2.5',
    'default_access_token' => isset($_SESSION['facebook_access_token']) ? $_SESSION['facebook_access_token'] : '1053fbdcb5833fcaf743df26e1c4e831'

]);

try {
    //Query die de 'fields' ophaald.
    $response = $fb->get('/me?fields=id,name,picture,about,age_range,bio,birthday,context,cover,currency,devices,education,email,favorite_athletes,favorite_teams,first_name,gender,hometown,inspirational_people,install_type,installed,interested_in,is_shared_login,is_verified,languages,last_name,link,locale,location,meeting_for,middle_name,name_format,payment_pricepoints,political,public_key,quotes,relationship_status,religion,security_settings,shared_login_upgrade_required_by,significant_other,sports,test_group,third_party_id,timezone,updated_time,verified,video_upload_limits,viewer_can_send_gift,website,work&debug=all');

    //Maakt van de response de variable $user
    $user = $response->getGraphObject();

    // check if ID exists


    //set variables
    $id = $user['id'];
    $name = $user['name'];

    $data = $mysqli->query('SELECT facebookId FROM acount_data WHERE facebookId = '. $id);

    $fbid = $data->num_rows;

    if($fbid == 0) {
        //insert Username + facebook id to the database
        $query  = "INSERT INTO acount_data (facebookId, facebookName) VALUES ('$id', '$name')";
        $mysqli->query($query);
    }
    else{
        //echo "this id exists";
    }

?>
    <script>// Test for the ugliness.
        if (window.location.hash == '#_=_'){

            // Check if the browser supports history.replaceState.
            if (history.replaceState) {

                // Keep the exact URL up to the hash.
                var cleanHref = window.location.href.split('#')[0];

                // Replace the URL in the address bar without messing with the back button.
                history.replaceState(null, null, 'index.php?page=home');

            } else {

                // Well, you're on an old browser, we can get rid of the _=_ but not the #.
                window.location.hash = '';

            }

        }</script>
<?php
    //login page
    include 'views/loginpage.php';
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

//login page
include "views/login.php";

?>
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>