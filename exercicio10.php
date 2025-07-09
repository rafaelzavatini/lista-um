<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência de Fibonacci</title>
</head>
<body>
    
   <form method="POST" action="">
        <label for="numero_fib">Exibir sequência de Fibonacci até:</label>
        <input type="number" id="numero_fib" name="numero_fib" required>
        <button type="submit" name="verificar_fib">Exibir</button>
   </form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['verificar_fib'])) {
    $limite = intval($_POST['numero_fib']);
    if ($limite >= 0) {
        $a = 0;
        $b = 1;
        echo "Sequência de Fibonacci até $limite: ";
        if ($limite >= 0) echo "$a ";
        if ($limite >= 1) echo "$b ";
        while (true) {
            $c = $a + $b;
            if ($c > $limite) break;
            echo "$c ";
            $a = $b;
            $b = $c;
        }
    } else {
        echo "Informe um número maior ou igual a 0.";
    }
}
?>
</body>
</html>