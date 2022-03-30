<!DOCTYPE html>
<html>
<head>
<title>Tier das sich im Spiegel erkennen kann</title>
<style>
    /* HIDE RADIO */
.schnellstesTier { 
  position: absolute;
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
<h2><b>6. Welches dieser Tiere ist so intelligent, dass es sich in einem Spiegel wiedererkennen kann?  </b></h2>
<label>
    <input type="radio" name="test" value="small" checked class="schnellstesTier">
    <img src="/images/hund.jpg" width="400">
  </label>
  
  <label >
    <input type="radio" name="test" value="big" class="schnellstesTier">
    <img src="/images/elefant.jpg" width="400">
  </label>

<label>
    <input type="radio" name="test" value="small" checked class="schnellstesTier">
    <img src="/images/affe.jpg" width="400">
</label>
  
<label>
    <input type="radio" name="test" value="big" class="schnellstesTier">
    <img src="/images/schwein.jpg" width="400">
</label>

<input type="submit" value="Submit"> 

</form>

<!-- antwort: elefant-->
</body>
</html>