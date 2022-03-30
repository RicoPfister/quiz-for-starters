<!-- Erstellt durch: Rahel -->

<!--
-Wrap radio and image in <label>
-Hide radio button (Don't use display:none or visibility:hidden since such will impact accessibility)
-Target the image next to the hidden radio using Adjacent sibling selector +
-Don't forget to add a class to your labels and in CSS use that class instead.
-->

<form class="ps-5 fs-4" action="quiz.php" method="GET">

<h3><b>Welches der folgenden Tiere kann am schnellsten rennen? </b></h3>


<div class="form-check">
    <input type="radio" name="q999" value="1" checked class="schnellstesTier">
    <img src="/images/gepard.jpg" width="400">
    </div>

<div class="form-check">
    <input type="radio" name="q999" value="0" class="schnellstesTier">
    <img src="/images/gazelle.jpg" width="400">
    </div>

<div class="form-check">
    <input type="radio" name="q999" value="0" checked class="schnellstesTier">
    <img src="/images/feldhase.jpg" width="400">
    </div>

<div class="form-check">
    <input type="radio" name="q999" value="0" class="schnellstesTier">
    <img src="/images/strauss.jpg" width="400">
    </div>



