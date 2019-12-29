<!-- 

   Auteur: Luis Costa, COSL27099009
   
   Derniere modification: 08/06/2019
   
   Description: Affiche le panier

-->


<div class="gestionfilms">
   <div class="gestionfilms-wrapper">
      
      <h1>votre panier</h1>
     
      <form method="post" action="http://www-ens.iro.umontreal.ca/~costalui/ift1147/tp2/filesAccess_tp1990/serveur/scripts/clearPanier.php">
         <button type="submit" class="buttonGestion" style="background-color:#4CAF50">Vider le panier</button>
      </form>

      <br><br>

      <table class="tabfilms">
         <tr style='background-color:#F0F0F0'>
            <td>Pochette</td>
            <td>Titre</td>
            <td>Prix</td>
            <td></td>
         </tr>

         <?php
            // Extrait les ids du panier
            $id_list = explode(":", $_SESSION['cart']);

            // Connexion au serveur
            $servername = "www-ens";
            $username = "costalui";
            $password = "luip122C";
            $dbname = "costalui_films";

            $conn = mysqli_connect($servername, $username, $password, $dbname);
            if (!$conn) {
               echo "<script>alert('Nous avons des problemes de connexion avec nos serveurs')</script>";
            }

            // Gere l'affichage de chaque ligne du tableau
            $idx = 0;
            $sous_total = 0;

            for($i=0; $i<sizeof($id_list); $i++) {

               // Recherche des infos du film grace au id
               $query = "SELECT * FROM bdfilms WHERE id=".$id_list[$i];
               $result = mysqli_query($conn, $query);

               if(mysqli_num_rows($result) > 0) {
                  $row = mysqli_fetch_assoc($result);

                  if($idx % 2 == 1) { 
                     echo "<tr style='background-color:#F0F0F0'>";
                  }else {
                     echo "<tr>";
                  }

                  echo       "<td><img style='width:75px;height:100px' src='".$row['pochette_url']."'></a></td>

                              <td>".$row['titre']."</td>
                              <td>".$row['prix']."</td>

                              <td style='text-align:right;padding:1em'><button type='button' class='buttonGestion' style='background-color:#f44336' onclick='panierSupprimer(".$row['id'].")'>Supprimer</button></td>
                           </tr>";

                  $idx++;
                  $sous_total += $row['prix'];

                  if($i == sizeof($id_list)-1) {

                    $tvq = $sous_total * 9.975 / 100;
                    $tps = $sous_total * 5 / 100;
                    $total = $sous_total + $tvq + $tps;

                    echo "<tr style='text-align:right'>
                             <td></td>
                             <td></td>
                             <td></td>

                             <td>
                                sous-total: $".number_format((float)$sous_total, 2, '.', '')."<br>
                                tvq: $".number_format((float)$tvq, 2, '.', '')."<br>
                                tps: $".number_format((float)$tps, 2, '.', '')."<br>
                                total: $".number_format((float)$total, 2, '.', '')."<br>
                             </td>
                          </tr>

                          <form id='supprimerItemForm' name='supprimerItemForm' method='post' action='http://www-ens.iro.umontreal.ca/~costalui/ift1147/tp2/filesAccess_tp1990/serveur/scripts/supprimerItemPanier.php'>
                             <input type='text' style='display:none' id='item_id' name='item_id'></input>
                          </form>";
                  }

               }else {
                  echo "</table>
                        <br><br><br><br>
                        <h3 style='text-align:center'>Aucun film present dans le panier...</h3>
                        <table>";
               }
            }
                
                 
            // Vide les resultats de la recherche + fin de la connexion
            mysqli_free_result($result);
            mysqli_close($conn);
         ?>

      </table>
   </div>
</div>