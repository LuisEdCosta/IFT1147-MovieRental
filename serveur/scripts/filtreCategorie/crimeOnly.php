<?php
   session_start();
?>

<!-- 

   Auteur: Luis Costa, COSL27099009
   
   Derniere modification: 09/06/2019
   
   Description: Filtre la librairie de films

-->


<?php
 
   $_SESSION['choix'] = 'crime';

   Header("Location:http://www-ens.iro.umontreal.ca/~costalui/ift1147/tp2/filesAccess_tp1990/viewsfilms/librairieFilms.php"); exit;
?>

