<?php
session_start();
$_SESSION += $_GET;

$myLastElement = end($_SESSION);

    // news: restart quiz
    if(array_key_exists("n",$_SESSION)) {
        $_SESSION = [];
        $_GET = [];
        session_destroy();}

    // back: go to last question

    else if(array_key_last($_SESSION) == "b") {
        echo "ok";
        unset($_SESSION["b"]);
        array_pop($_SESSION);
        $_GET = [];
        header("Location: quiz.php");
    }

    // next: go to next question

    for($i=1; $i<=count(scandir('questions'))-2; $i++) {

        // set question path variable
        $path_parts = pathinfo(scandir('questions')[$i+1]);
       
        // Entfernt leading 0 vor Zahlen
        $trim0 = substr($path_parts['filename'], 8);
        $trim0 += 0;  
        
        if(!isset($_SESSION["q".$trim0])) {
            $nextQuestionPHP = "questions/question".substr($path_parts['filename'], 8).".php";
            $title = "Frage " . $trim0;
            $info = "$i von ".(count(scandir('questions'))-2)." Fragen";
            break;
        }
        else if ($i === count(scandir('questions'))-2) {header("Location: /php/evaluation_data.php");}
    } 

    print_r($_SESSION);






















?>



