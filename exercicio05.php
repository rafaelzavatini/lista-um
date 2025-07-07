<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numero amigo</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero1">Primeiro número:</label>
        <input type="number" id="numero1" name="numero1" required>
        <br>
        <label for="numero2">Segundo número:</label>
        <input type="number" id="numero2" name="numero2" required>
        <br>
        <button type="submit" name="verificar_+-=">Verificar</button>
    </form>
<br>
<?php
function somaDivisores($num) {
    $soma = 0;
    for ($i = 1; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            $soma += $i;
        }
    }
    return $soma;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['verificar_+-='])) {
    $numero1 = intval($_POST['numero1'] ?? 0);
    $numero2 = intval($_POST['numero2'] ?? 0);

    if ($numero1 <= 0 || $numero2 <= 0) {
        echo "Informe dois números inteiros positivos.";
    } else {
        $soma1 = somaDivisores($numero1);
        $soma2 = somaDivisores($numero2);

        if ($soma1 == $numero2 && $soma2 == $numero1) {
            echo "$numero1 e $numero2 são números amigos.";
        } else {
            echo "$numero1 e $numero2 não são números amigos.";
        }
    }
}
?>
    
</body>
</html>