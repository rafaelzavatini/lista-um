<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perfeito</title>
</head>
<body>
    
   <form method="POST" action="">
        <label for="numero_par">Verifica se é um número perfeito:</label>
        <input type="number" id="numero_par" name="numero_par" required>
        <button type="submit" name="verificar_par">Verificar</button>
   </form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['verificar_par'])) {
    $numero = intval($_POST['numero_par']);
    if ($numero > 1) {
        $soma = 0;
        for ($i = 1; $i < $numero; $i++) {
            if ($numero % $i == 0) {
                $soma += $i;
            }
        }
        if ($soma == $numero) {
            echo "O número $numero é perfeito.";
        } else {
            echo "O número $numero não é perfeito.";
        }
    } else {
        echo "Informe um número maior que 1.";
    }
}
?>