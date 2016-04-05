<?php
//if(isset($_GET['action']) && $_GET['action'] === 'logout'){
//    $facebook->destroySession();
//}

session_start();            //start session
$_SESSION = array();    //clear session array
session_destroy();      //destroy session


echo 'you are logged out';
header('Location: index.php');

?>
