<?php
   session_start();
?>
 
<!--

   Auteur: Luis Costa, COSL27099009
   
   Derniere modification: 05/06/2019
   
   Description: La librairie de films.

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

      <!-- Connexion nouveau client -->
      <?php include('../serveur/signupForm.php') ?>

      <!-- Connexion client existant -->
      <?php include('../serveur/loginForm.php') ?>

      <!-- Message de bienvenue au site  -->
      <?php include('../serveur/greetingForm.php') ?>

      <!-- Affiche la librairie de films -->
      <?php include('../serveur/displayLibrairie.php') ?>

      <!-- Visionnement de la bande annonce -->
      <?php include('../serveur/displayPreview.php') ?>

      <!-- Bas de page -->
      <?php include('../serveur/footer.php') ?>

   </body>

</html>