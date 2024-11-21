<html>
<head>
    <title>Logarithmische Funktion</title>
</head>
<body>
<h1>Logarithmische Funktion</h1>
<p>Gib eine Zahl und einen Multiplikator ein<br>
    Die Anzahl der Sterne wird basierend auf log(n) * Multiplikator berechnet:</p>


<form method="post">
    <label for="limit">Maximale Zahl:</label>
    <input type="number" id="limit" name="limit" required>
    <br><br>
    <label for="multiplier">Multiplikator:</label>
    <input type="number" id="multiplier" name="multiplier" required>
    <br><br>
    <input type="submit" value="Berechnen">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $limit = $_REQUEST["limit"]; //maximale Zahl
    $multiplier = $_REQUEST["multiplier"]; //Multiplikator

    echo "<h2>Logarithmische Funktion bis $limit mit Multiplikator $multiplier:</h2>";
    for ($n = 1; $n <= $limit; $n++) {
        $logValue = log($n); // Berechnung des Logarithmus von n
        $scaledValue = $logValue * $multiplier;

        echo "n = $n: ";
        // Sterne basierend auf scaledValue Logarithmuswert ausgeben
        for ($i = 0; $i < $scaledValue; $i++) {
            echo "*";
        }
        echo "<br>";
    }
}
?>
</body>
</html>
