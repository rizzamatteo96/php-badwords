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

      echo $frase;

    ?>
  </p>

  <!-- Frase modificata -->
  <h2>Frase modificata</h2>

  <p>
    <?php 
    
      $fraseCensurata = str_replace($censura, '***' , $frase);
      echo $fraseCensurata;
    
    ?>
  </p>
    
</body>
</html>