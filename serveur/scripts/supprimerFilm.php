<!-- 

   Auteur: Luis Costa, COSL27099009
   
   Derniere modification: 06/06/2019
   
   Description: Supprime un film de la base de donnees
 
-->
 

<?php
   // Les informations du film
   $id = $_POST['id_supprimer'];

   // Connexion au serveur
   $servername = "www-ens";
   $username = "costalui";
   $password = "luip122C";
   $dbname = "costalui_films";

   $conn = mysqli_connect($servername, $username, $password, $dbname);
   if (!$conn) {
      echo "<script>alert('Nous avons des problemes de connexion avec nos serveurs')</script>";
   }
 
   // Supprime le film de la base de donnees
   $query = "DELETE FROM `bdfilms` WHERE id='$id'"; 
   mysqli_query($conn, $query);

   // Vide les resultats de la recherche + fin de la connexion
   mysqli_close($conn);

   Header("Location:http://www-ens.iro.umontreal.ca/~costalui/ift1147/tp2/filesAccess_tp1990/viewsfilms/gestionFilms.php"); exit;
?> 