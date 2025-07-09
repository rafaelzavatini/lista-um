<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter Celsius para Fahrenheit</title>
</head>
<body>
    
<form method="POST" action="">
    <label for="ano">Ano:</label>
    <input type="number" id="ano" name="ano" required>
    <button type="submit" name="verificar">Verificar Bissexto</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['verificar'])) {
    $ano = intval($_POST['ano']);
    if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
        echo "<p>O ano $ano é bissexto.</p>";
    } else {
        echo "<p>O ano $ano não é bissexto.</p>";
    }
}
?>
</body>
</html>
