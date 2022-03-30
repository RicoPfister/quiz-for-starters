<!-- Erstellt durch: Rahel -->

<!--
-Wrap radio and image in <label>
-Hide radio button (Don't use display:none or visibility:hidden since such will impact accessibility)
-Target the image next to the hidden radio using Adjacent sibling selector +
-Don't forget to add a class to your labels and in CSS use that class instead.
-->

<!-- Antwortform -->
<!-- richtige Antwort:Gibbon -->

<div class="form-check">

    <input type="radio" class="form-check-input" id="2-1" name="q2" value="0">Gorilla
    <label class="form-check-label" for="radio1"></label>
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

    <input type="radio" class="form-check-input" id="2-4" name="q2" value="0">Schimpanse
    <label class="form-check-label" for="radio2"></label>
    <p id="validate-warning" style="color:red" class="warning"></p>
</div>

