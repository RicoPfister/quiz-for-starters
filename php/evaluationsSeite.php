<?php include "header.php"?>
<?php include "evaluation_data.php"?>




<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("/images/hintergrund-bild.jpg");
  height: 90%;
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
  <div class="hero-text" class="font-weight-bold">
    <h1 >RESULTAT</h1>
    <p class="h2">Sie haben <strong class="text-warning"><?=$points?> Punkt(e)</strong> erzielt.</p>
<p class="h2" p class="lh-lg">Das können Sie besser!<br>
Auf diesem Wissensgebiet haben Sie noch einige Wissenslücken,<br> bestimmt konnten Sie jetzt einige davon schließen.<br>
Quizzen Sie am besten gleich nochmal.</p>

<form action="/index.php">
      <input type="submit" value="WIEDERHOLEN" class="btn btn-danger btn-lg">
    </form>

</div>
</div>

<?php

session_start();
$_SESSION = [];
$_GET = [];


?>

<?php include "footer.php"?>