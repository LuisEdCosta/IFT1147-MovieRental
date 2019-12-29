<?php
   session_start();
?>

<!-- 

   Auteur: Luis Costa, COSL27099009
   
   Derniere modification: 08/06/2019
   
   Description: Supprime 1 item du panier
 
-->


<?php

   // Extrait toutes les items du panier
   $id_list = explode(":", $_SESSION['cart']);

   // Index de l'item a enlever puis enleve l'item
   $key = array_search($_POST['item_id'], $id_list);
   unset($id_list[$key]);

   // Reconstruit le panier avec les items restant
   $_SESSION['cart'] = implode(':', $id_list);

   // Retour au panier
   Header("Location:http://www-ens.iro.umontreal.ca/~costalui/ift1147/tp2/filesAccess_tp1990/viewsfilms/panier.php"); exit;

?>