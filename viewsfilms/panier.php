<?php
   session_start();
?>

<!--

   Auteur: Luis Costa, COSL27099009
   
   Derniere modification: 
   
   Description: Le panier du client

-->

<!DOCTYPE html>

<html lang="fr">
   
   <head>
      <meta charset="UTF-8">
   
      <link rel="stylesheet" type="text/css" href="../css/styles.css" />
      <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <script src="../js/script.js"></script>

      <title>Travail Pratique #2</title>
   </head>

   <body>

      <!-- Barre de navigation -->
      <?php include('../serveur/barreNavigation.php') ?>

      <!-- Affichage du panier -->
      <?php include('../serveur/displayPanier.php') ?>

      <!-- Bas de page -->
      <?php include('../serveur/footer.php') ?>

   </body>
   
</html>