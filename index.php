<?php
   session_start();

   // Nouvelle session
   if(!isset($_SESSION['logged_in'])) {
      $_SESSION['user']= '';
      $_SESSION['logged_in'] = 'false';
      $_SESSION['cart'] = '';
      $_SESSION['login_attempt'] = 'false';
      $_SESSION['choix'] = '';
   }

?>

<!--

   Auteur: Luis Costa, COSL27099009
   
   Derniere modification: 05/06/2019
   
   Description: La page d'accueil du travail pratique #2

-->

<!DOCTYPE html>

<html lang="fr">
    
   <head>
      <meta charset="UTF-8">
   
      <link rel="stylesheet" type="text/css" href="css/styles.css" />
      <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <script src="js/script.js"></script>

      <title>Travail Pratique #2</title>
   </head>

   <body>

      <!-- Barre de navigation -->
      <?php include('serveur/barreNavigation.php') ?>

      <!-- Image de fond pour la page principale -->
      <?php include('serveur/imgFond.php') ?>

      <!-- Bas de page -->
      <?php include('serveur/footer.php') ?>

      <!-- Message de bienvenue au site  -->
      <?php include('serveur/greetingForm.php') ?>

      <!-- Connexion client existant -->
      <?php include('serveur/loginForm.php') ?>

      <!-- Connexion nouveau client -->
      <?php include('serveur/signupForm.php') ?>

      <?php 
         if($_SESSION['logged_in'] == 'false' && $_SESSION['login_attempt'] == 'false') {
            echo "<script>openGreetingForm()</script>";

         }elseif($_SESSION['logged_in'] == 'false' && $_SESSION['login_attempt'] == 'true') {
            $_SESSION['login_attempt'] = 'false';
            echo "<script>openLogin()</script>";
            echo "<script>alert('Mot de passe incorrect!')</script>";
         }
      ?>

   </body>

</html>