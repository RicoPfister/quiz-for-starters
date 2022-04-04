<?php 

/* Erstellt durch: Nina */

include "php/header.php"?>

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
  padding: 25px 50px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: green;
  color: white; 
}

#select {
  width: 200px;
  }

</style>
</head> 
<body>
    <div class="hero-image">  
    <div class="hero-text">
    <h1 style="font-size:80px">Quiz: Wunder der Natur</h1>
    <h1 class="display-3">Testen Sie Ihr Wissen über Orte in naher und weiter Ferne. Nehmen Sie an diesem Mul­ti­ple-Choice-Quiz teil und erkunden Sie dabei spielerisch einige der unglaublichsten Wunder der Natur.</h1>
    
    <div>

    <form class="ps-5 fs-4" action="quiz.php" method="GET" id="difficulty" onsubmit="return evaluateDIfficulty()">

    <select class="form-select" id="select" name="s" form="difficulty">
      <option value="" selected>Schwierigkeitsgrad</option>
      <option value="20">Einfach (20 Sekunden)</option>
      <option value="15">Normal (15 Sekunden)</option>
      <option value="7">Schwierig (7 Sekunden)</option>
    </select>
    <p id="warning" style="background: white; color: red"></p>

    <button style="font-size: 30px" type="submit" class="btn btn-outline btn-lg">Los geht's!</button>
      
    </form>   
</div>

  </div>
</div>
</div>

<?php include "php/footer.php"?>

</body>
</html>
