<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numéro par ou impar</title>
</head>
<body>
    
   <form method="POST" action="">
        <label for="numero_par">Verificar tabuada do numero:</label>
        <input type="number" id="numero_tabauada" name="numero_tabuada" required>
        <button type="submit" name="verificar_tabuada">Verificar</button>
   </form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['verificar_tabuada'])) {
    $numero = $_POST['numero_tabuada'];
    echo "<h3>Tabuada do número $numero:</h3>";
    echo "<ul>";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "<li>$numero x $i = $resultado</li>";
    }
    echo "</ul>";
}
?>
    
</body>
</html>