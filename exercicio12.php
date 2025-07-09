<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palíndromo</title>
</head>
<body>
    
   <form method="POST" action="">
        <label for="palavra">quantidade vogais:</label>
        <input type="text" id="palavra" name="palavra" required>
        <button type="submit" name="verificar_palindromo">Verificar</button>
   </form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['verificar_palindromo'])) {
    $palavra = strtolower(trim($_POST['palavra']));
    $vogais = preg_match_all('/[aeiou]/', $palavra, $matches);
    echo "Quantidade de vogais: $vogais";
}
?>
</body>
</html>
