<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("/images/hintergrund-bild.jpg");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: red;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: red;
  color: white;
}
</style>
</head>
<body>

<div class="hero-image">
  <div class="hero-text" >
    <h1>RESULTAT</h1>
    <p class="h2">Sie haben <?=$points?> Punkten erzielt.</p>
<p id="antwort" class="h2">Das können Sie besser!
Auf diesem Wissensgebiet haben Sie noch einige Wissenslücken, bestimmt konnten Sie jetzt einige davon schließen. 
Quizzen Sie am besten gleich nochmal.</p>

<form action="/index.php">
      <input type="submit" value="WIEDERHOLEN" class="btn btn-danger btn-lg">
    </form>

</div>
</div>

<?php

$_SESSION = [];
$_GET = [];

?>

</body>
</html>
