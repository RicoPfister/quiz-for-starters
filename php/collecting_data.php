<?php
session_start();
$_SESSION += $_GET;

$myLastElement = end($_SESSION);
print_r(intval(array_key_last($_SESSION))+1);

if(array_key_last($_SESSION) == "b"){
    array_pop($_SESSION);
}

$nextQuestionNumber = intval(array_key_last($_SESSION))+1;

$questionBForm = "question$nextQuestionNumber";


















?>



