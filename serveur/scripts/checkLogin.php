<?php
   session_start();
?>

<!-- 

   Auteur: Luis Costa, COSL27099009
   
   Derniere modification: 09/06/2019
   
   Description: Gere la connexion a un compte admin/utilisateur sur le site

-->


<?php

   // Les informations du clients sont presentes pour le login
   $email = $_POST['email'];
   $psw = $_POST['psw'];

   // Essai de connexion
   $_SESSION['login_attempt'] = 'true';

   // Connexion au serveur
   $servername = "www-ens";
   $username = "costalui";
   $password = "luip122C";
   $dbname = "costalui_films";

   $conn = mysqli_connect($servername, $username, $password, $dbname);
   if (!$conn) {
      echo "<script>alert('Nous avons des problemes de connexion avec nos serveurs')</script>";
   }

   // Cherche le id de l'usager avec email+pass fournis 
   $query = "SELECT id FROM clients WHERE email='$email' AND password='$psw'";
   $result = mysqli_query($conn, $query);

   // Connexion avec success si un seul client est trouve + on sauvegarde le id du client
   if(mysqli_num_rows($result) == 1) {
      $_SESSION['user'] = $email;
      $_SESSION['logged_in'] = 'true';
      $_SESSION['cart'] = '';
      $_SESSION['login_attempt'] = 'false';
      $_SESSION['choix'] = '';

      if($email == 'admin@gmail.com') {
         $_SESSION['logged_in'] = 'admin';
      }
   }
  
   // Vide les resultats de la recherche + fin de la connexion
   mysqli_free_result($result);
   mysqli_close($conn);

   // Redirige l'utilisateur a la page appropriee une fois connecter/failed login
   if($_SESSION['logged_in'] == 'true') {
      Header("Location:http://www-ens.iro.umontreal.ca/~costalui/ift1147/tp2/filesAccess_tp1990/viewsfilms/librairieFilms.php"); exit;

   }elseif($_SESSION['logged_in'] == 'admin') {
      Header("Location:http://www-ens.iro.umontreal.ca/~costalui/ift1147/tp2/filesAccess_tp1990/viewsfilms/gestionFilms.php"); exit;

   }else {
      Header("Location:http://www-ens.iro.umontreal.ca/~costalui/ift1147/tp2/filesAccess_tp1990/index.php"); exit;
   } 
     
?>

