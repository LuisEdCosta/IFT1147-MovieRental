<!-- 

   Auteur: Luis Costa, COSL27099009
   
   Derniere modification: 05/06/2019
   
   Description: Affiche la barre de navigation 

-->


<nav>
   <a href="http://www-ens.iro.umontreal.ca/~costalui/ift1147/tp2/filesAccess_tp1990/index.php">
      accueil
   </a>
   
   <?php
      if($_SESSION['logged_in'] == 'admin') {
         echo "<a href='http://www-ens.iro.umontreal.ca/~costalui/ift1147/tp2/filesAccess_tp1990/viewsfilms/gestionFilms.php'>
                  gestion des films
               </a>";
      }else{
         echo "<a href='http://www-ens.iro.umontreal.ca/~costalui/ift1147/tp2/filesAccess_tp1990/viewsfilms/librairieFilms.php'>
                  nos films
               </a>";
      }
   ?>

   <div class="dropdown">
      <a href="javascript:void(0)">
      
         cat&eacute;gories  <i class='fa fa-caret-down'></i>

         <div id="myDropdown" class="dropdown-content">
            <table>
               <tr>
                  <td>
                     <a href="http://www-ens.iro.umontreal.ca/~costalui/ift1147/tp2/filesAccess_tp1990/serveur/scripts/filtreCategorie/actionOnly.php">action</a>
                  </td>

                  <td>
                     <a href="http://www-ens.iro.umontreal.ca/~costalui/ift1147/tp2/filesAccess_tp1990/serveur/scripts/filtreCategorie/animationOnly.php">animation</a>
                  </td>

                  <td>
                     <a href="http://www-ens.iro.umontreal.ca/~costalui/ift1147/tp2/filesAccess_tp1990/serveur/scripts/filtreCategorie/comedyOnly.php">com&eacute;die</a>
                  </td>
               </tr>

               <tr>
                  <td>
                     <a href="http://www-ens.iro.umontreal.ca/~costalui/ift1147/tp2/filesAccess_tp1990/serveur/scripts/filtreCategorie/crimeOnly.php">crime</a>
                  </td>

                  <td>
                     <a href="http://www-ens.iro.umontreal.ca/~costalui/ift1147/tp2/filesAccess_tp1990/serveur/scripts/filtreCategorie/dramaOnly.php">drame</a>
                  </td>

                  <td>
                     <a href="http://www-ens.iro.umontreal.ca/~costalui/ift1147/tp2/filesAccess_tp1990/serveur/scripts/filtreCategorie/horrorOnly.php">horreur</a>
                  </td>
               </tr>

               <tr>
                  <td>
                     <a href="http://www-ens.iro.umontreal.ca/~costalui/ift1147/tp2/filesAccess_tp1990/serveur/scripts/filtreCategorie/sci-fiOnly.php">sci-fi</a>
                  </td>

                  <td>
                     <a href="http://www-ens.iro.umontreal.ca/~costalui/ift1147/tp2/filesAccess_tp1990/serveur/scripts/filtreCategorie/thrillerOnly.php">thriller</a>
                  </td>

                  <td>
                  </td>
               </tr>
            </table>
         </div>
      </a>
   </div>

   <?php
      if($_SESSION['logged_in'] == 'true' || $_SESSION['logged_in'] == 'admin') {
         echo "<a style='float:right' href='http://www-ens.iro.umontreal.ca/~costalui/ift1147/tp2/filesAccess_tp1990/serveur/scripts/deconnexion.php'>
                  <i class='fa fa-sign-out'></i> d&eacute;connexion 
               </a>";
      }else {
         echo "<a style='float:right' href='javascript:void(0)' onClick='openLogin()'>
                  <i class='fa fa-sign-in'></i> connexion
               </a>";
      }
   ?>

   <?php
      if($_SESSION['logged_in'] == 'true' || $_SESSION['logged_in'] == 'admin') {
         echo "<a style='float:right' href='javascript:void(0)'>".$_SESSION['user']."</a>";
      }else {
         echo "<a style='float:right' href='javascript:void(0)' onClick='openSignup()'>
            devenir membre
         </a>";
      } 
   ?>

   <?php
      if($_SESSION['logged_in'] == 'true') {
         echo "<a style='float:right; display:block' href='http://www-ens.iro.umontreal.ca/~costalui/ift1147/tp2/filesAccess_tp1990/viewsfilms/panier.php'>";
      }else{
         echo "<a style='float:right; display:none' href='#'>";  
      }
   ?>
               
                  mon panier <i class='fa fa-shopping-cart' style='font-size:20px;color:red'></i>
               </a>
</nav>




     
   
  
  

