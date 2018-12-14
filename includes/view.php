

<style>
    /* Loading the CSS file */
    <?php include 'style.css'; ?>
</style>

<?php

// Loading the JavaScript functions
require 'function.php';


echo '<div class="container">

<p>
  <label>Inches</label>
  <input id="inputInches" type="number" placeholder="Inches" 
  oninput="LengthConverter(this.value)" onchange="LengthConverter(this.value)">
</p>

<p class="output">CM: <span id="outputcm"></span></p>';

echo '<p>
  <label>MPH</label>
  <input id="inputMPH" type="number" placeholder="MPH"
  oninput="speedConverter(this.value)" onchange="speedConverter(this.value)">
</p>

<p class="output">KPH: <span id="outputKPH"></span></p>';

echo '<p>
  <label>Pounds</label>
  <input id="inputPounds" type="number" placeholder="Pounds"
  oninput="weightConverter(this.value)" onchange="weightConverter(this.value)">
</p>

<p class="output">Grams: <span id="outputGrams"></span></p>

</div>';

?>

