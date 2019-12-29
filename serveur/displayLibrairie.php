<!-- 

   Auteur: Luis Costa, COSL27099009
   
   Derniere modification: 06/06/2019
   
   Description: Affiche la librairie de films

-->


<div class="card">

   <?php
      // Cherche les items deja presents dans le panier
      if(isset($_SESSION['cart'])) {
         if($_SESSION['cart'] != "") {
	    $id_list = explode(":", $_SESSION['cart']);
	 }
      }
	  
      // Connexion au serveur
      $servername = "www-ens";
      $username = "costalui";
      $password = "luip122C";
      $dbname = "costalui_films";

      $conn = mysqli_connect($servername, $username, $password, $dbname);
      if (!$conn) {
         echo "<script>alert('Nous avons des problemes de connexion avec nos serveurs')</script>";
      }

      // Cherche la liste des films
      $query = "SELECT * FROM bdfilms";
      $result = mysqli_query($conn, $query);

      // Gere l'affichage de chaque ligne du tableau
      $idx = 0;

      if(mysqli_num_rows($result) > 0) {
         while($row = mysqli_fetch_assoc($result)) {
            if($_SESSION['choix'] == '' || $row['categorie'] == $_SESSION['choix']) {

               echo "<div class='card-content'>
                        <img class='imgCard' src='".$row['pochette_url']."' alt='".$row['titre']."' onclick='openDisplayPreview(".$idx.")'>

                        <h4 style='margin:0'>".$row['titre']."</h4>

                        <p style='margin:0.2em'>".$row['realisateur']."<br>".$row['categorie']."</p>

                        <p style='margin:0.2em'>$".$row['prix']."</p>

                        <span style='display:none' id='id_selected".$idx."'  name='id_selected".$idx."'>".$row['id']."</span>
                        <span style='display:none' id='url_selected".$idx."' name='url_selected".$idx."'>".$row['preview_url']."</span>";

               if($_SESSION['logged_in'] == 'true' || $_SESSION['logged_in'] == 'admin') {
	          if(isset($id_list) && in_array($row['id'], $id_list)) {

		     echo "<button type='button' class='buttonCardDone'>
                              <i class='fa fa-cart-arrow-down' style='font-size:20px;color:white'></i>
                           </button>";
			      
                  }else {
                     echo "<button type='button' class='buttonCard' onclick='ajouterPanier(".$row['id'].")'>
                              Ajouter
                              <i class='fa fa-cart-plus' style='font-size:20px'></i>
                           </button>";
                  }
               }
             
               echo "</div>";

               $idx++;
            }
         }

         echo "<form id='sendform' name='sendform' method='post' action='http://www-ens.iro.umontreal.ca/~costalui/ift1147/tp2/filesAccess_tp1990/serveur/scripts/ajouterPanier.php'>
                  <input type='text' style='display:none' id='id_achat' name='id_achat' required>
               </form>"; 
 
      }else {
         echo "<br><br><br><br>
               <h3 style='text-align:center'>Aucun film present dans la base de donnee...</h3>";
      }
         
      // Vide les resultats de la recherche + fin de la connexion
      mysqli_free_result($result);
      mysqli_close($conn);

      // Reset le choix de categorie
      $_SESSION['choix'] = '';
   ?>

</div>

