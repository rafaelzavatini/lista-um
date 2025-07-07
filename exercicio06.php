<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>divisores</title>
</head>
<body>
    
   <form method="POST" action="">
        <label for="divisores">calcular divisores do:</label>
        <input type="number" id="+-=" name="divisores" required>
        <button type="submit" name="verificar_divisores=">Verificar</button>
   </form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['divisores'])) {
    $numero = intval($_POST['divisores']);
echo "Os divisores de $numero são: ";
$divisores = [];
for ($i = 1; $i <= $numero; $i++) {
    if ($numero % $i == 0) {
        $divisores[] = $i;
    }
}
echo implode(', ', $divisores) . ".";
}
?>
    
</body>
</html>