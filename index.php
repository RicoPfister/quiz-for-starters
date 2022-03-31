<?php include "php/header.php"?>

        <style>
body, html {
    height: 100%;
    margin: 0;
    font-family:'Fredoka';
}
   
.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/bild_1.jpg");
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
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}


</style>
</head> 
<body>
    <div class="hero-image">  
    <div class="hero-text">
    <h1 style="font-size:50px">Quiz: Wunder der Natur</h1>
    <p class="service-paragraph">     
    Sie Ihr Wissen über Orte in naher und weiter Ferne. Nehmen Sie an diesem Mul­ti­ple-Choice-Quiz teil und erkunden Sie dabei spielerisch einige der unglaublichsten Wunder der Natur.</p>
    
    <form action="quiz.php">
      <input type="submit" value="Los geht's!">
    </form>

  </div>
</div>

<--! Erstellt durch: Nina -->

</body>
</html>
