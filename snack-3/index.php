<!-- ## Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Snacks #3</title>
</head>
<body>
 <?php
/* Creo array vuoto */
$array_prova = [];
/* Creo ciclo che conti fino a 15 posizioni e stampi i numeri casuali */
for($i = 0; $i < 15; $i++){
    
    $num = rand(1,100);
    if(!in_array($num, $array_prova)){
            $array_prova[] = $num;

    }
}

var_dump($array_prova); 



?>
   
</body>
</html>