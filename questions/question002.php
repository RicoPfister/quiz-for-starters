<!-- Erstellt durch: Rahel -->

<!--
-Wrap radio and image in <label>
-Hide radio button (Don't use display:none or visibility:hidden since such will impact accessibility)
-Target the image next to the hidden radio using Adjacent sibling selector +
-Don't forget to add a class to your labels and in CSS use that class instead.
-->

<!-- Fragetext -->

<h3 class="p-5 mt-5">Welches der folgenden Tiere kann am schnellsten rennen?</h2>

<!-- Antwortform -->

    <form class="ps-5 fs-4" action="quiz.php" method="GET" onsubmit="return evaluateCheckboxes();">

    <div class="d-flex justify-content-start z-index-3">

    <label>
        <input type="radio" id="2-1" name="q2" value="1" class="schnellstesTier">
        <img src="/images/gepard.jpg" width="200" class=" me-3">
    </label>
    
    <label >
        <input type="radio" id="2-2" name="q2" value="0" class="schnellstesTier">
        <img src="/images/gazelle.jpg" width="200" class="me-3">
    </label>

    <label>
        <input type="radio" id="2-3" name="q2" value="0" class="schnellstesTier">
        <img src="/images/feldhase.jpg" width="200" class="me-3">
    </label>
    
    <label>
        <input type="radio" id="2-4" name="q2" value="0" class="schnellstesTier">
        <img src="/images/strauss.jpg" width="200" class=">
    </label>

    </div>

<div class="row">

<p id="validate-warning" style="color:red" class="warning"></p>

</div>




