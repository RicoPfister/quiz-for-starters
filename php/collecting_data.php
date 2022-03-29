<?php
session_start();
$_SESSION += $_GET;

$myLastElement = end($_SESSION);

if(!isset($_SESSION["q1"])) {
    $nextQuestionPHP = "questions/question1.php";
    $title = "Frage 1"; 
    $info = "1 von ".count(scandir('questions'))-2;
}

else {

    // news: restart quiz
    if(array_key_exists("n",$_SESSION)) {
        echo "ok";
        $_SESSION = [];
        $_GET = [];
        session_destroy();}

    // back: go to last question
    else if(array_key_last($_SESSION) == "b") {
        unset($_SESSION["b"]);
        array_pop($_SESSION);
        $_GET = [];
    }

    // next: go to next question

    for($i=1; $i<=count(scandir('questions'))-2; $i++ ) {

        $path_parts = pathinfo(scandir('questions')[$i+1]);
       
        // Entfernt leading 0 vor Zahlen
        $trim0 = substr($path_parts['filename'], 8);
        $trim0 += 0;        

        if(!isset($_SESSION["q$i"])) {
            $nextQuestionPHP = "questions/question".substr($path_parts['filename'], 8).".php";
            $title = "Frage " . $trim0;
            $info = "$i von ".(count(scandir('questions'))-2)." Fragen";
            break;
        } else {
            $nextQuestionPHP = "php/evaluation.php";
            $title = "Auswertung";
            $info = "";
        } 
    } 
}

print_r($_SESSION);






















?>



