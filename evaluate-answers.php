<?php 

$questionPageNames = [
    "question-1",
    "question-2",
    "question-multiple-choice",
    "question-4"
];

$totalPoints = 0;
$pageNum = count($questionPageNames);

for ($i = 0; $i < $pageNum; $i++) {
    $lastPageID = $questionPageNames[$i];

    if (isset($_SESSION[$lastPageID])) {

    // Wir holen die Daten zu $lastPageID aus $_SESSION.
    // in data-collector.php: $_SESSION[$lastPageID] = $_POST;
    $pageData = $_SESSION[$lastPageID];
    $achievedPoints = $pageData["achievedPoints"];

    //Zu $totalPOints zusammenrechnen.
    $totalPoints += $achievedPoints; // = $totalPoints + achievedPoints;
    }
}

// dev only
echo "\totalPoints = $totalPoints<br>";
    

//verschiedene antworten für verschiedene punktzahlen- ein feedback geben

if ($totalPoints <5) {
    echo "nicht sehr gut!<br>";
}
elseif ($totalPoints < 15) {
    echo "Ok - schon recht gut!<br>";
}
else {
    echo "Spitze- ganz toll! <br>";
}

?>