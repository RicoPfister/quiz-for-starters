<!DOCTYPE html>
<html>
<head>
<title>schnellstes tier</title>
<style>
    /* HIDE RADIO */
.schnellstesTier { 

  opacity: 0;
  width: 0;
  height: 0;
}

/* IMAGE STYLES */
.schnellstesTier + img {
  cursor: pointer;
}

/* CHECKED STYLES */
.schnellstesTier:checked + img {
  outline: 2px solid #f00;
}

</style>
</head>
<body>

<!--
-Wrap radio and image in <label>
-Hide radio button (Don't use display:none or visibility:hidden since such will impact accessibility)
-Target the image next to the hidden radio using Adjacent sibling selector +
-Don't forget to add a class to your labels and in CSS use that class instead.
-->


<form class="ps-5 fs-4" action="index.php" method="GET">

<h2><b>2. Welches der folgenden Tiere kann am schnellsten rennen? </b></h2>
<div class="container">
<div class="row">
  <div class="col-sm-6">

<label>
    <input type="radio" name="test" value="small" checked class="schnellstesTier">
    <img src="/images/gepard.jpg" width="400">
  </label>
</div>
  
<div class="col-sm-6">
  <label >
    <input type="radio" name="test" value="big" class="schnellstesTier">
    <img src="/images/gazelle.jpg" width="400">
  </label>
</div>
</div>

<div class="row">
<div class="col-sm-6">
  <label>
    <input type="radio" name="test" value="small" checked class="schnellstesTier">
    <img src="/images/feldhase.jpg" width="400">
  </label>
</div>

<div class="col-sm-6">
  <label>
    <input type="radio" name="test" value="big" class="schnellstesTier">
    <img src="/images/strauss.jpg" width="400">
  </label>
</div>
</div>

<input type="submit" value="Submit"> 
</div>

</form>

<!-- antwort: gepard-->
</body>
</html>