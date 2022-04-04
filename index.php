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
  padding: 0.5px 10px;
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
  <!--<div class="container-fluid p-5 my-5 text-while text-center">*/-->
    <div class="hero-image">  
    <div class="hero-text">
   
    <h1 style="font-size:50px display-3 text-center">Quiz: Wunder der Natur</h1>
    <h1 style="font-size:50px display-3 text-center">Testen Sie Ihr Wissen über Orte in naher und weiter Ferne. Nehmen Sie an diesem Mul­ti­ple-Choice-Quiz teil und erkunden Sie dabei spielerisch einige der unglaublichsten Wunder der Natur.</h1>
    
    <div class="d-flex justify-content-center mt-5">

    <form class="ps-5 fs-4" action="quiz.php" method="GET" id="difficulty" onsubmit="return evaluateDIfficulty()">

    <select class="form-select" id="select" name="s" form="difficulty">
      <option value="" selected>Schwierigkeitsgrad</option>
      <option value="30">Einfach (30 Sekunden)</option>
      <option value="15">Normal (15 Sekunden)</option>
      <option value="7">Schwierig (7 Sekunden)</option>
    </select>  
    <p id="warning" class="text-center" style="background: white; color: red"></p>

    <button style="font-size: 20px" type="submit" class="btn btn-outline btn-lg mt-2">Los geht's!</button>


</div>

<div class="row justify-content-center">





</div>


</div>  
    </form>   
</div>

  </div>
</div>
</div>

<?php include "php/footer.php"?>

</body>
</html>
