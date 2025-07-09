<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palíndromo</title>
</head>
<body>
    
   <form method="POST" action="">
        <label for="palavra">Verifica se é um palíndromo:</label>
        <input type="text" id="palavra" name="palavra" required>
        <button type="submit" name="verificar_palindromo">Verificar</button>
   </form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['verificar_palindromo'])) {
    $palavra = strtolower(trim($_POST['palavra']));
    $palavra = preg_replace('/\s+/', '', $palavra); 
    $invertida = strrev($palavra);

    if ($palavra === $invertida) {
        echo "A palavra é um palíndromo.";
    } else {
        echo "A palavra não é um palíndromo.";
    }
}
?>
</body>
</html>
