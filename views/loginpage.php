<?php
//nav
include 'views/nav.php';

//switch
switch ($_GET['page']) {
    //startpage of the quiz
    case 'home';
        include "views/start_quiz.php";
    break;

    //the quiz


    case 'quiz';
        $pageid = $_REQUEST['id'];
        switch(isset($_GET['id']) ? $_GET['id'] : "no"){
            case $pageid :
                include "views/quiz.php";
            break;

//          default = #404
            default :
            break;
        }


}


?>
