<?php
   session_start();
?>

<!-- 

   Auteur: Luis Costa, COSL27099009
   
   Derniere modification: 08/06/2019
   
   Description: Vide le panier
 
-->


<?php

   $_SESSION['cart'] = '';

   Header("Location:http://www-ens.iro.umontreal.ca/~costalui/ift1147/tp2/filesAccess_tp1990/viewsfilms/panier.php"); exit;

?>