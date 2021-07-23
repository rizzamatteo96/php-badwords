<?php
  $frase = 'Ciao bella vita, come va? Bella la nuova esperienza di Boolean? Come sta proseguendo il corso? Ciao e buona serata';
  $censura = $_GET['censura'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  <!-- Frase di partenza -->
  <h2>Frase originale</h2>
  <p>
    <?php 

      // stampo la frase primaria
      echo $frase;
      // ne calcolo la quantità di caratteri
      $frase_len = strlen($frase);

    ?>
  </p>
  <!-- stampo la lunghezza della frase primaria -->
  <p>La lunghezza della frase è di <?php echo $frase_len; ?> caratteri</p>

  <!-- Frase modificata -->
  <h2>Frase modificata</h2>
  <p>
    <?php 
    
      // Censuro la frase primaria attraverso l'input dell'utente
      $fraseCensurata = str_replace($censura, '***' , $frase);
      // stampo la frase modificata
      echo $fraseCensurata;
      // ne calcolo la quantità di caratteri
      $fraseCensurata_len = strlen($fraseCensurata);
    
    ?>
  </p>
   <!-- stampo la lunghezza della frase modificata -->
   <p>La lunghezza della frase è di <?php echo $fraseCensurata_len; ?> caratteri</p>
    
</body>
</html>