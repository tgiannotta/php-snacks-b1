<!-- ## Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Snacks #4</title>
</head>
<body>
<!-- Prendo un testo da internet -->

<?php
    $testo = '«Come squadra, siamo in missione per estendere il divertimento a tutti nel mondo. Sappiamo che il videogioco è la forma più vibrante e dinamica 
    di intrattenimento in tutto il mondo. e abbiamo sperimentato il potere di connessione sociale e di amicizia che il gioco rende possibile.
    Mentre perseguiamo questa missione, è incredibilmente emozionante annunciare che Microsoft ha accettato di acquisire Activision Blizzard.
    Nel corso di molti decenni, gli studi e i team che compongono Activision Blizzard hanno guadagnato vaste fonti di gioia e rispetto da miliardi.
     di persone in tutto il mondo. Siamo incredibilmente entusiasti di avere la possibilità. di lavorare con le incredibili e talentuose persone di Activision Publishing,
      Blizzard Entertainment, Beenox, Demonware, Digital Legends. High Moon Studios, Infinity Ward, King, Major League Gaming. Radical Entertainment, Raven Software, Sledgehammer Games, 
      Toys for Bob, Treyarch e ogni team di Activision Blizzard.»';
      
    
$testo_giustificato = explode('.', $testo);

    var_dump($testo_giustificato);
?>


</body>
</html>