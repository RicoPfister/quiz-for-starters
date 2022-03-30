<!-- Erstellt durch: Rahel -->

<!--
-Wrap radio and image in <label>
-Hide radio button (Don't use display:none or visibility:hidden since such will impact accessibility)
-Target the image next to the hidden radio using Adjacent sibling selector +
-Don't forget to add a class to your labels and in CSS use that class instead.
-->

<!-- Fragetext -->

<h3 class="p-5">Welches der folgenden Tiere kann am schnellsten rennen?</h2>

<!-- Antwortform -->

<form class="ps-5 fs-4" action="quiz.php" method="GET" onsubmit="return evaluateCheckboxes();">

<div class="form-check">
    <input type="radio" class="form-check-input" name="q2" id="2-1" value="0">Gepard
    <label class="form-check-label" for="2-1"></label>
</div>

<div class="form-check">
    <input type="radio" class="form-check-input" name="q2" id="2-2" value="0">Gazelle
    <label class="form-check-label" for="2-2"></label>
</div>

<div class="form-check">
    <input type="radio" class="form-check-input" name="q2" id="2-3"  value="1">Feldhase
    <label class="form-check-label" for="2-3"></label>
</div>

<div class="form-check">
    <input type="radio" class="form-check-input" name="q2" id="2-4" value="0">Strauß
    <label class="form-check-label" for="2-4"></label>
    <p id="validate-warning" class="warning" style="color:red"></p>
</div>

