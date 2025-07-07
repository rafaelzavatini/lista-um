<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numéro par ou impar</title>
</head>
<body>
    
   <form method="POST" action="">
        <label for="numero_par">Verifica se é um número par:</label>
        <input type="number" id="numero_par" name="numero_par" required>
        <button type="submit" name="verificar_par">Verificar</button>
   </form>

   <?php
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['verificar_par'])){
        $numero = $_POST['numero_par'];
        $ehPrimo = true;
        if($numero <= 1){
            $ehPrimo = false;
        }else{
            for($i = 2; $i <= sqrt($numero); $i++){
                // Verifica se o número é par ou ímpar
                if ($numero % 2 == 0) {
                    $par = true;
                } else {
                    $par = false;
                }
                   
                    break;
                }
            }
        }
        echo "O número $numero é ". ($par ? 'primo':'não é primo');
    };

   ;

   ?>
    
</body>
</html>