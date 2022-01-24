<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Snacks #1</title>
</head>
<body>
        <?php 
/*             Creo un Array con la 15° giornata del campionato di basket italiano */ 
            $giornata_15 = [

                [
                    'casa' => 'Trento',
                    'trasferta' => 'Venezia',
                    'p-casa' => '81',
                    'p-tras' => '94',
                ],
                [
                    'casa' => 'Cremona',
                    'trasferta' => 'Dinamo Sassari',
                    'p-casa' => '89',
                    'p-tras' => '80',
                ],
                [
                    'casa' => 'Olimpia Milano',
                    'trasferta' => 'Dertona',
                    'p-casa' => '72',
                    'p-tras' => '60',
                ],  
                [
                    'casa' => 'Reggiana',
                    'trasferta' => 'Virtus Bologna',
                    'p-casa' => '81',
                    'p-tras' => '90',
                ],  
                [
                    'casa' => 'Fortitudo Bologna',
                    'trasferta' => 'Varese',
                    'p-casa' => '101',
                    'p-tras' => '94',
                ],  
                [
                    'casa' => 'Brindisi',
                    'trasferta' => 'Napoli',
                    'p-casa' => '76',
                    'p-tras' => '83',
                ],
                [
                    'casa' => 'Brescia',
                    'trasferta' => 'VL Pesaro',
                    'p-casa' => '110',
                    'p-tras' => '78',
                ],
                [
                    'casa' => 'Universo Treviso',
                    'trasferta' => 'Trieste',
                    'p-casa' => '84',
                    'p-tras' => '89',
                ]                     

            ];
       /*      var_dump($giornata_15); */
        ?>
        <h1>15° Giornata del campionato di Basket Italiano</h1>
        <h4>I risultati degli incontri delle squadre sono i seguenti: </h4>
<!--         Utilizzo un ciclo FOR per leggere e stampare tutte le squdre ed i relativi risultati -->
        <?php for($i = 0; $i < count($giornata_15); $i++){ ?>
            <?php $incontri = $giornata_15[$i]; ?>    
            <div> 
                    <h5><span class="red"> <?php echo $incontri['casa'] ?> </span>  VS <span class="green">  <?php echo $incontri['trasferta'] ?>  </span>| <?php echo $incontri['p-casa'] ?> - <?php echo $incontri['p-tras'] ?></h5>
            </div>

            
        
        <?php }?>
    
</body>
</html>