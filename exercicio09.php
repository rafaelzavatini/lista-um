<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar Pares</title>
</head>
<body>
    
  <form method="POST" action="">
    <label for="num1">Primeiro número:</label>
    <input type="number" id="num1" name="num1" required>
    <br>
    <label for="num2">Segundo número:</label>
    <input type="number" id="num2" name="num2" required>
    <br>
    <button type="submit" name="somar_intervalo">Somar Intervalo</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['somar_intervalo'])) {
    $num1 = intval($_POST['num1']);
    $num2 = intval($_POST['num2']);

    if ($num1 != $num2) {
        $inicio = min($num1, $num2) + 1;
        $fim = max($num1, $num2) - 1;
        if ($inicio > $fim) {
            echo "Não há números entre $num1 e $num2.";
        } else {
            $soma = 0;
            for ($i = $inicio; $i <= $fim; $i++) {
                $soma += $i;
            }
            echo "A soma dos números entre $num1 e $num2 é $soma.";
        }
    } else {
        echo "Os números devem ser diferentes.";
    }
}
?>

</body>
</html>
