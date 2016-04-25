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
        switch(isset($_GET['id']) ? $_GET['id'] : "no id found"){
            case $pageid :
                include "views/quiz.php";
            break;

//          default = #404
            default :
                include "views/start_quiz.php";
            break;
        }
        break;

    case 'account-info';
        include "views/accountinfo.php";
        break;

}


?>
