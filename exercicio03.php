<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numéro par ou impar</title>
</head>
<body>
    
   <form method="POST" action="">
        <label for="numero_+-=">Verifica se o numero é postivo, negativo ou zero:</label>
        <input type="number" id="numero_+-=" name="numero_+-=" required>
        <button type="submit" name="verificar_+-=">Verificar</button>
   </form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['verificar_+-='])) {
    $numero = $_POST['numero_+-='];
    if ($numero > 0) {
        echo "O número $numero é positivo.";
    } elseif ($numero < 0) {
        echo "O número $numero é negativo.";
    } else {
        echo "O número é zero.";
    }
}
?>
    
</body>
</html>