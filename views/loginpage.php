<?php
//nav
include 'views/nav.php';
$id = 1;
//waardes
$quiz = "quiz";
//switch
switch ($_GET['page']) {
    //startpage of the quiz
    case 'home';
        include "views/start_quiz.php";
    break;

    //the quiz


    case 'quiz';
        switch(isset($_GET['id']) ? $_GET['id'] : "id bestaat niet") {
            case $id :

                break;

            //default 404
//            default :
//                break;
        }


}


?>
