<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naturquiz</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant:wght@300;400;500&family=Fredoka:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <style>
body, html {
    height: 100%;
    margin: 0;
    font-family:'Fredoka';
}
   
.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("bild_1.jpg");
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
 <div class="hero-text">
    <h1 style="font-size:60px">RESULTAT</h1>
    <p class="service-paragraph" style="font-size: 30px">     
    <span style="font-size: 40px">Sie haben 5/10 Punkten erzielt.</span><br>
Das können Sie besser!
Auf diesem Wissensgebiet haben Sie noch einige Wissenslücken, 
<br> bestimmt konnten Sie jetzt einige davon schließen.
<br>Quizzen Sie am besten gleich nochmal.</p>
<button type="button" class="btn btn-danger btn-lg" ><b>WIEDERHOLEN</b></button>

</div>
</div>

</body>
</html>




