<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fit and Well</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  
  <link rel="stylesheet" href="css/style.css">

</head>

<body>

<?php include "php/collecting_data.php";
$_SESSION += $_GET;
?>

<!-- Ab hier beginnt Bootstrap/HTML/PHP -->

 <!-- Container (Bereich alles zwischen Header und Footer) -->

<div class="container-fluid quizArea">

 <!-- Alles, was das Quiz betritt -->

    <div class="row">

        <div class="col"></div>

        <!-- Quiz-Hauptbereich mit den 3 Boxen -->

        <div class="col-8">

            <!-- Bootstrap Box 1 - Frage1-10 -->

            <div class="row">
            
                <div class="col"><h2><?=$title?></h2></div>

            </div>

            <!-- Bootstrap Box 2 - Antwortform -->

            <div class="row mt-2 d-flex index">
            
                <div class="col shadow-lg border rounded border-secondary border-2 quizAnswerArea bg-quiz position-relative">

                <div class="position-absolute top-50 start-100 translate-middle z-index-0"><img class="imgDeco4" src="images/happybird.gif"></div>
                <div class="position-absolute top-0 start-50 translate-middle-y z-index-1"><img class="imgDeco1" src="images/deco8-4.png"></div>
                <div class="position-absolute top-50 start-100 translate-middle z-index-1"><img class="imgDeco2" src="images/deco8-5.png"></div>
                <div class="position-absolute top-100 start-0 translate-middle z-index-1"><img class="imgDeco3" src="images/deco8-3.png"></div>
          

                <!-- Form Start -->        

                <?php include "$nextQuestionPHP"?> 

            </div>
        </div>       

            <!-- Bootstrap Boxen 3-5 - Info/Button -->

                <div class="row z-index-2 mt-3">
                
                    <div class="col ms-5"><p class="m-0 fs-5"><?=$info?></p></div>
                    <div class="col-auto"><button type="submit" name="b" value="b" class="btn btn-back btn-lg mb-2">Vorherige Frage</button></div>
                    <div class="col-auto"><button type="submit" name="n" value="n" class="btn btn-new btn-lg mb-2">Quiz neu starten</button></div>
                    <div class="col-auto"><button type="submit" class="btn btn-next btn-lg">Nächste Frage</button></div>

                <form>

                <!-- Form Ende -->  

                </div>
            </div>
    
    <div class="col"></div>

</div>

<script src="js/script.js"></script>

</body>

