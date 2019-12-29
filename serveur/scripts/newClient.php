<!-- 

   Auteur: Luis Costa, COSL27099009
   
   Derniere modification: 03/06/2019
   
   Description: Ajoute un nouveau client a la base de donnee.
 
-->


<?php
   // Les informations du clients sont presentes pour la creation d'un compte
   $email = $_POST['email'];
   $newpsw = $_POST['newpsw'];

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
   $query = "SELECT id FROM clients WHERE email='$email'";
   $result = mysqli_query($conn, $query);

   // Cas: email est disponible
   if(mysqli_num_rows($result) == 0) {
    
      // Insert le client dans la base de donnee
      $query = "INSERT INTO clients (id, email, password) VALUES (0,'$email','$newpsw')";
      mysqli_query($conn, $query);  
      // Message de confirmation pour le client
      echo "<script>alert('Creation du compte avec succes !')</script>";
   }
   // Cas:email n'est pas disponible
   else {
      echo "<script>alert('Adresse email non disponible')</script>";
   }

   // Vide les resultats de la recherche + fin de la connexion
   mysqli_free_result($result);
   mysqli_close($conn);

   Header("Location:http://www-ens.iro.umontreal.ca/~costalui/ift1147/tp2/filesAccess_tp1990/index.php"); exit;
?>