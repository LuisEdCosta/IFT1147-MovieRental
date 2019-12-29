<?php
   session_start();
?>

<!-- 

   Auteur: Luis Costa, COSL27099009
   
   Derniere modification: 04/06/2019
   
   Description: Deconnecte l'usager courant et retour a la page d'acceuil

-->


<?php
 
   $_SESSION['user']= '';
   $_SESSION['logged_in'] = 'false';
   $_SESSION['cart'] = '';
   $_SESSION['login_attempt'] = 'false';
   $_SESSION['choix'] = '';

   // Redirect a la page d'accueil
   Header("Location:http://www-ens.iro.umontreal.ca/~costalui/ift1147/tp2/filesAccess_tp1990/index.php"); exit;
?>

