<?php
session_start();
$points = 0;


foreach($_SESSION as $question => $value){
    $points+=$value;
}

?>
