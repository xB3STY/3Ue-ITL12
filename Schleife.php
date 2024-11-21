<html>
<head>
    <title>Primzahlenberechnung</title>
</head>
<body>
<h1>Primzahlenberechnung</h1>
<form method="post">
    <label for="zahl">Geben Sie eine Zahl ein:</label><br><br>
    <input type="number" id="zahl" name="zahl" required>
    <input type="submit" value="Berechnen">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $variable = $_REQUEST["zahl"];

    echo "<p>Primzahlen von <strong>1</strong>bis <strong>$variable</strong>:</p>";
    echo "<p>";
    for ($i = 1; $i <= $variable; $i++) {
        $primzahl = true; // Annahme: $i ist eine Primzahl

        // Prüfen ob $i durch eine Zahl von 2 bis $i/2 teilbar ist
        for ($div = 2; $div <= $i / 2; $div++) {
            if (($i % $div) == 0) {
                $primzahl = false; // Keine Primzahl
                break; // Schleife abbrechen
            }
        }

        // Wenn $i eine Primzahl ist ausgeben
        if ($primzahl && $i > 0) {
            echo $i . " ";
        }
    }
    echo "</p>";
}
?>
</body>
</html>
