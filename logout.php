<?php

session_start();            //start session
$_SESSION = array();    //clear session array
session_destroy();      //destroy session
header( "refresh:2;url=index.php" );
echo 'you are logged out';

?>
