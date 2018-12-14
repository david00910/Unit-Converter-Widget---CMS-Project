<script>
function LengthConverter(valNum) {
    document.getElementById("outputcm").innerHTML = valNum/0.39370;
}

function speedConverter(valNum) {
    valNum = parseFloat(valNum);
    document.getElementById("outputKPH").innerHTML = valNum * 1.609344;
}

function weightConverter(valNum) {
    document.getElementById("outputGrams").innerHTML = valNum / 0.0022046;
}
</script>