<?php
$banned = $_GET['banned']; // Parola da censurare
$text = $_GET['text']; // Frase completa
$text_banned= str_replace($banned, '***', $text); //Sostituisco la parola selezionato con tre asterischi
$text_length= strlen($text); // Conto di quante lettere è composta la frase
$text_banned_length= strlen($text_banned); // Conto di quante lettere è composta la frase censurata

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Titolo</title>

    <!-- Icona -->
    <link rel="icon" href="favicon.ico" />

    <!-- Link Bootsrtap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <!-- Icon Bootstrap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
    />

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- VueJS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- js -->
    <script src="js/vuejs.js"></script>
    <script defer src="js/script.js"></script>
  </head>
  <body>
    <div class="mx-auto w-50">
      <h1 class="text-center">RISULTATO:</h1>
    
      <h4>Parola censurata:</h4>
      <p>
        <?= $banned ?>
      </p>
      <h4 class="mt-3">Paragrafo originale:</h4>
      <p>
        <?= $text ?>
      </p>
      <h5> La frase è composta da <span class="bold"> <?=$text_length?> </span> lettere</h5>

      <h4 class="mt-3">Paragrafo con censura:</h4>
      <p>
        <?= $text_banned ?>
      </p>
      <h5> La frase è composta da <span class="bold"> <?=$text_banned_length?> </span> lettere</h5>

    </div>
    
    
  </body>
</html>
