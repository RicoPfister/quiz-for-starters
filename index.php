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

<?php include "php/collecting_data.php"?>

<!-- Ab hier beginnt Bootstrap/HTML/PHP -->

 <!-- Container (Bereich alles zwischen Header und Footer) -->

<div class="container-fluid quizArea">

 <!-- Alles, was das Quiz betritt -->

    <div class="row">

        <div class="col"></div>

        <!-- Quiz-Hauptbereich mit den 3 Boxen -->

        <div class="col-6">

            <!-- Bootstrap Box 1 - Frage1-10 -->

            <div class="row">
            
                <div class="col"><h2>Frage <?=$nextQuestionNumber?></h2></div>

            </div>

            <!-- Bootstrap Box 2 - Antwortform -->

            <div class="row mt-2">
            
                <div class="col border rounded border-secondary border-2 quizAnswerArea bg-quiz position-relative">

                <div class="position-absolute top-0 start-100 translate-middle"><img class="imgDeco" src="images/deco1.png"></div>

                <!-- Form Start -->   

                <?php include "php/$questionBForm.php"?> 

            </div>
        </div>       

            <!-- Bootstrap Boxen 3-5 - Info/Button -->

                <div class="row mt-3">
                
                    <div class="col"><p class="m-0 fs-5">Frage <?=$nextQuestionNumber?>/10</p></div>
                    <div class="col-auto"><button type="submit" name="b" value="b" class="btn bg-danger btn-lg mb-2">Vorherige Frage</button></div>
                    <div class="col-auto"><button type="submit" class="btn bg-success btn-lg">Nächste Frage</button></div>

                <form>

                <!-- Form Ende -->  

                </div>
            </div>
    
    <div class="col"></div>

</div>

</body>

