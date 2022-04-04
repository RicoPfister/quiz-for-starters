<!-- author: rico -->

<?php
session_start();
$_SESSION += $_GET;

$backDisabled=0;

$myLastElement = end($_SESSION);

    // news: restart quiz
    if(array_key_exists("n",$_SESSION)) {
        $_SESSION = [];
        $_GET = [];
        session_destroy();
        header("Location: /index.php");
    }

    // back: go to last question

    elseif (array_key_last($_SESSION) == "b") {
        echo "ok";
        unset($_SESSION["b"]);
        array_pop($_SESSION);
        $_GET = [];
        $_SESSION["d"]="1";
        header("Location: /quiz.php");      
    }
    
    if(isset($_SESSION["d"])) $backDisabled=1; 

    // next: go to next question

    for($i=1; $i<=count(scandir('questions'))-2; $i++) {

        // set question path variable
        $path_parts = pathinfo(scandir('questions')[$i+1]);
       
        // Entfernt leading 0 vor Zahlen
        $trim0 = substr($path_parts['filename'], 8);
        $trim0 += 0;  
        
        if(!isset($_SESSION["q".$trim0])) {
            $nextQuestionPHP = "questions/question".substr($path_parts['filename'], 8).".php";
            $title = $trim0;
            $info = "$i von ".(count(scandir('questions'))-2)." Fragen";
            break;
        }
        else if ($i === count(scandir('questions'))-2) {header("Location: /php/evaluationsSeite.php");}
    } 

?>



