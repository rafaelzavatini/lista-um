<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar Pares</title>
</head>
<body>
    
   <form method="POST" action="">
        <label for="numero">Informe um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="contar_pares">Contar Pares</button>
   </form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['contar_pares'])) {
    $numero = intval($_POST['numero']);
    if ($numero >= 1) {
        $quantidade_pares = intdiv($numero, 2);
        echo "Existem $quantidade_pares números pares entre 1 e $numero.";
    } else {
        echo "Informe um número maior ou igual a 1.";
    }
}
?>
</body>
</html>
