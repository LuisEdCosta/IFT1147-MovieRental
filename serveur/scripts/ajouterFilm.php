<!-- 

   Auteur: Luis Costa, COSL27099009
   
   Derniere modification: 06/06/2019
   
   Description: Ajoute un film a la base de donnees et actualise le tableau de gestion de films
 
-->
 

<?php
   // Les informations du film
   $titre = $_POST['titre'];
   $realisateur = $_POST['realisateur'];
   $categorie = $_POST['categorie'];
   $duree = $_POST['duree'];
   $prix = $_POST['prix'];
   $pochette_url = $_POST['pochette_url'];
   $preview_url = $_POST['preview_url'];

   // Connexion au serveur
   $servername = "www-ens";
   $username = "costalui";
   $password = "luip122C";
   $dbname = "costalui_films";

   $conn = mysqli_connect($servername, $username, $password, $dbname);
   if (!$conn) {
      echo "<script>alert('Nous avons des problemes de connexion avec nos serveurs')</script>";
   }
 
   // Verifie que l'email n'eset pas pris 
   $query = "SELECT id FROM bdfilms WHERE pochette_url='$pochette_url'";
   $result = mysqli_query($conn, $query);

   // Cas: film n'est pas dans la base de donnee
   if(mysqli_num_rows($result) == 0) {
    
      // Insert le client dans la base de donnee
      $query = "INSERT INTO bdfilms (id, titre, realisateur, categorie, duree, prix, pochette_url, preview_url) VALUES (0,'$titre','$realisateur', '$categorie', '$duree', '$prix', '$pochette_url', '$preview_url')";
      mysqli_query($conn, $query);  
      // Message de confirmation pour l'admin
      echo "<script>alert('Ajout du film avec succes !')</script>";
   }
   // Cas: film est dans la base de donnee
   else { 
      echo "<script>alert('Le film est d&eacute;j&agrave; dans la base de donn&eacute;e')</script>";
   }

   // Vide les resultats de la recherche + fin de la connexion
   mysqli_free_result($result);
   mysqli_close($conn);

   Header("Location:http://www-ens.iro.umontreal.ca/~costalui/ift1147/tp2/filesAccess_tp1990/viewsfilms/gestionFilms.php"); exit;
?> 