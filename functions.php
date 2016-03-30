<?php
function displayData($user){
    echo "<pre>";
    var_export($user);
    echo "</pre>";

    echo $user['name'];
    echo $user['age_range'];
    echo $user['favorite_athletes'];

}
