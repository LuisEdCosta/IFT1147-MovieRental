<?php
   session_start();
?>

<!--

   Auteur: Luis Costa, COSL27099009
   
   Derniere modification: 06/06/2019
   
   Description: Page de gestion du site - communique avec la base de donnees de films

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

      <!-- Outil de modification pour la liste des films -->
      <?php include('../serveur/tableauFilms.php') ?>

      <!-- Formulaire d'ajout d'un film a la base de donnees -->
      <?php include('../serveur/ajouterForm.php') ?>

      <!-- Formulaire de modification des infos d'un film -->
      <?php include('../serveur/modifierForm.php') ?>

      <!-- Formulaire de suppression d'un film -->
      <?php include('../serveur/supprimerForm.php') ?>

      <!-- Bas de page -->
      <?php include('../serveur/footer.php') ?>
   </body>
   
</html>