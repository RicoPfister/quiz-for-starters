<form class="ps-5 fs-4" action="quiz.php" method="GET">

<p> Ende des Quizes. Danke für's mitmachen!<br><br>Auswertung folgt.</p>

<?php
session_start();

foreach($_SESSION as $q => $a){

}


print_r($_SESSION);
$_SESSION = [];
$_GET = [];
?>
