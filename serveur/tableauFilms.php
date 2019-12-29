<!-- 

   Auteur: Luis Costa, COSL27099009
   
   Derniere modification: 06/06/2019
   
   Description: Affiche le tableau de gestion des films (pour admin)

-->


<div class="gestionfilms">
   <div class="gestionfilms-wrapper">
      
      <h1>Liste des films</h1>

      <button type="button" class="buttonGestion" style="background-color:#4CAF50" onclick="openAjouterForm()">Ajouter</button>

      <br><br>

      <table class="tabfilms">
         <tr style='background-color:#F0F0F0'>
            <td>Pochette</td>
            <td>Titre</td>
            <td>R&eacute;alisateur</td>
            <td>Cat&eacute;gorie</td>
            <td>Dur&eacute;e</td>
            <td>Prix</td>
            <td></td>
          
            <td style="display:none">id</td>
            <td style="display:none">pochette_url</td>
            <td style="display:none">preview_url</td>
         </tr>

         <?php
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
                  if($idx % 2 == 1) { 
                     echo "<tr style='background-color:#F0F0F0'>";
                  }else {
                     echo "<tr>";
                  }
                     echo    "<td><img style='width:75px;height:100px' src='".$row['pochette_url']."'></a></td>

                              <td id='titre".$idx."'       name='id".$idx."'>".$row['titre']."</td>
                              <td id='realisateur".$idx."' name='id".$idx."'>".$row['realisateur']."</td>
                              <td id='categorie".$idx."'   name='id".$idx."'>".$row['categorie']."</td>
                              <td id='duree".$idx."'       name='id".$idx."'>".$row['duree']."</td>
                              <td id='prix".$idx."'        name='id".$idx."'>$".$row['prix']."</td>

                              <td style='text-align:right;padding:1em'>
                                 <button type='button' class='buttonGestion' style='background-color:#4CAF50; onclick='openModifierForm(".$idx.")'>Modifier</button>
                                 <button type='button' class='buttonGestion' style='background-color:#f44336' onclick='openSupprimerForm(".$idx.")'>Supprimer</button>
                              </td>

                              <td style='display:none' id='id".$idx."'           name='id".$idx."'>".$row['id']."</td>
                              <td style='display:none' id='pochette_url".$idx."' name='pochette_url".$idx."'>".$row['pochette_url']."</td>
                              <td style='display:none' id='preview_url".$idx."'  name='preview_url".$idx."'>".$row['preview_url']."</td>
                           </tr>";

                  $idx++;
               }
            }else {
               echo "</table>
                     <br><br><br><br>
                     <h3 style='text-align:center'>Aucun film present dans la base de donnee...</h3>";
            }
         
            // Vide les resultats de la recherche + fin de la connexion
            mysqli_free_result($result);
            mysqli_close($conn);
         ?>

      </table>
   </div>
</div>