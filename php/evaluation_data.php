<?php
session_start();
$points = 0;

$answerText = [
    "answer1" => "Du hast einige Wissenslücken. Probier es doch gleich nochmals.", // von 0-3 Punkte
    "answer2" => "Das war schon ziemlich gut! Willst du es gleich nochmals probieren?", // von 4-6 Punkte
    "answer3" => "Super gemacht, du bist sehr naturverbunden." //von 7-10 Punkte
];

foreach($_SESSION as $question => $value){
    $points+=$value; //wir haben die Gesamt-Punktzahl hier in der Variable $points gespeichert
    
    if ($points <= 3){
        $text = $answerText["answer1"];
    }
    else if ($points <= 6){
        $text = $answerText["answer2"];
    }
    else {$text = $answerText["answer3"];
    }
}
