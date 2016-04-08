<?php
header("refresh:3;url=index.php");
session_start();            //start session
include 'views/header.php';
$_SESSION = array();    //clear session array
session_destroy();      //destroy session

?>
<div class="container-fluid no-padding">
    <div class="wrap2">
        <div class="hwrap2">
        <h1 class=" h1aef wow fadeInUp" data-wow-duration="2s" data-wow-delay="0s">You are logged out</h1>
        </div>
        <p >you are getting redirected to the loginpage</p>
    </div>
</div>
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

