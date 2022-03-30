
<!-- author: Thomas -->
<h3 class="p-5">Welches der Folgenden Tiere kann am schnellsten rennen?</h2>

<!-- Antwortform -->

<form class="ps-5 fs-4" action="quiz.php" method="GET" onsubmit="return evaluateCheckboxes()">

<div class="form-check">
    <input type="radio" class="form-check-input" name="q3" id="3-1" value="0">Lamm
    <label class="form-check-label" for="3-1"></label>
</div>

<div class="form-check">
    <input type="radio" class="form-check-input" name="q3" id="3-2" value="0">Hammel
    <label class="form-check-label" for="3-1"></label>
</div>

<div class="form-check">
    <input type="radio" class="form-check-input" name="q3" id="3-3"  value="1">Widder
    <label class="form-check-label" for="3-1"></label>
</div>

<div class="form-check">
    <input type="radio" class="form-check-input" name="q3" id="3-4" value="0">Mufflon
    <label class="form-check-label" for="3-1"></label>
    <p id="validate-warning" class="warning"></p>
</div>
<input type="hidden" name="lastPageID" value="question-multiple-choice">
<input type="hidden" id="achievedPoints" name="achievedPoints">
<p id="validation-warning" style="color:red" class="warning"></p>

