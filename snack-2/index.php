<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
 Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Snacks #2</title>
</head>
<body>
 
    <?php 
/*         Vado a prendere i valori che mi sevorno dall'utente */
        $name = $_GET["name"];
        $mail = $_GET["email"];
        $eta = $_GET["age"];   
    ?>
    <h1>Check Dati</h1>
    <div>Il nome che hai inserito è: <?php echo $name; ?>;</div>
    <div>La mail che hai inserito è: <?php echo $mail; ?>;</div>
    <div>L'età che hai inserito è: <?php echo $eta; ?>;</div>
<!--     Contiamo le lettere del nome con un strlen -->
    <?php
  
         $lunghezza_nome = strlen($name);      
    ?>
<!--     Stampo l'accesso riuscito o negato -->
<?php
if($lunghezza_nome > 3 && strpos($mail , '@') && strpos($mail, '.') && is_numeric($eta)){
    echo 'tutto ok';
}
else{
    echo 'hai sbalgiato qualcosa';
}
?>


   
</body>
</html>