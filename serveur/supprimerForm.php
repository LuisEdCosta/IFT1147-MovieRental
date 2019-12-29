<!-- 

   Auteur: Luis Costa, COSL27099009
   
   Derniere modification: 06/06/2019
   
   Description: Affiche le formulaire de suppression d'un film de la base de donnees

-->


<div id="supprimerForm" class="modal">
   <form class="modal-content" method="post" action="http://www-ens.iro.umontreal.ca/~costalui/ift1147/tp2/filesAccess_tp1990/serveur/scripts/supprimerFilm.php">

      <span class="close" onclick="closeSupprimerForm()">&times;</span><br>

      <h2>attention!<h2>

      <h4>d&eacute;sirez-vous supprimer ce film?</h4>
      
      <hr class="hrForm">

      <input type="text" style="display:none" id="id_supprimer" name="id_supprimer" required>

      <button type="submit" class="buttonForm" style="background-color: #4CAF50; width:90%">Supprimer</button>
      <button type="button" class="buttonForm" style="background-color: #f44336; width:90%" onclick="closeSupprimerForm()">Cancel</button>
     
   </form>
</div>

