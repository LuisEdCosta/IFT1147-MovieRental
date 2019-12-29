<?php
   session_start();
?>

<!-- 

   Auteur: Luis Costa, COSL27099009
   
   Derniere modification: 07/06/2019
   
   Description: Ajoute un film au panier
 
-->


<?php

   if($_SESSION['cart'] == "") {
      $_SESSION['cart'] = $_POST['id_achat'];

   }else{
      $_SESSION['cart'] = $_SESSION['cart'].":".$_POST['id_achat'];
   }

   Header("Location:http://www-ens.iro.umontreal.ca/~costalui/ift1147/tp2/filesAccess_tp1990/viewsfilms/librairieFilms.php"); exit;

?>