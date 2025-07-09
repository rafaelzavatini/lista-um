<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter Celsius para Fahrenheit</title>
</head>
<body>
    <form method="POST" action="">
        <label for="celsius">Graus Celsius:</label>
        <input type="number" step="any" id="celsius" name="celsius" required>
        <button type="submit" name="converter">Converter</button>
    </form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['converter'])) {
    $celsius = floatval($_POST['celsius']);
    $fahrenheit = ($celsius * 9/5) + 32;
    echo "<p>$celsius &deg;C = $fahrenheit &deg;F</p>";
}
?>
</body>
</html>
