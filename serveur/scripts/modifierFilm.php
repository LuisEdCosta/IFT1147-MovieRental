<!-- 

   Auteur: Luis Costa, COSL27099009
   
   Derniere modification: 06/06/2019
   
   Description: Effectue la modification des infos d'un film dans la base de donnees
 
-->
 

<?php
   // Les informations du film
   $id           = $_POST['id_modifier'];
   $titre        = $_POST['new_titre'];
   $realisateur  = $_POST['new_realisateur'];
   $categorie    = $_POST['new_categorie'];
   $duree        = $_POST['new_duree'];
   $prix         = $_POST['new_prix'];
   $pochette_url = $_POST['new_pochette_url'];
   $preview_url  = $_POST['new_preview_url'];

   // Connexion au serveur
   $servername = "www-ens";
   $username = "costalui";
   $password = "luip122C";
   $dbname = "costalui_films";

   $conn = mysqli_connect($servername, $username, $password, $dbname);
   if (!$conn) {
      echo "<script>alert('Nous avons des problemes de connexion avec nos serveurs')</script>";
   }
 
   // Modifie les infos du film
   $query = "UPDATE bdfilms SET titre='$titre' WHERE id='$id'"; 
   mysqli_query($conn, $query);
   
   $query = "UPDATE bdfilms SET realisateur='$realisateur' WHERE id='$id'";
   mysqli_query($conn, $query);

   $query = "UPDATE bdfilms SET categorie='$categorie' WHERE id='$id'";
   mysqli_query($conn, $query);

   $query = "UPDATE bdfilms SET duree='$duree' WHERE id='$id'";
   mysqli_query($conn, $query);

   $query = "UPDATE bdfilms SET prix='$prix' WHERE id='$id'";
   mysqli_query($conn, $query);

   $query = "UPDATE bdfilms SET pochette_url='$pochette_url' WHERE id='$id'";
   mysqli_query($conn, $query);

   $query = "UPDATE bdfilms SET preview_url='$preview_url' WHERE id='$id'";
   mysqli_query($conn, $query);

   // Vide les resultats de la recherche + fin de la connexion
   mysqli_close($conn);

   Header("Location:http://www-ens.iro.umontreal.ca/~costalui/ift1147/tp2/filesAccess_tp1990/viewsfilms/gestionFilms.php"); exit;
?> 