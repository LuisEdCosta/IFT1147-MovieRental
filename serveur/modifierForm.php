<!-- 

   Auteur: Luis Costa, COSL27099009
   
   Derniere modification: 06/06/2019
   
   Description: Affiche le formulaire de modification des infos d'un film

-->


<div id="modifierForm" class="modal">
   <form class="modal-content" method="post" action="http://www-ens.iro.umontreal.ca/~costalui/ift1147/tp2/filesAccess_tp1990/serveur/scripts/modifierFilm.php">

      <span class="close" onclick="closeModifierForm()">&times;</span><br>

      <h2>Modifier un film</h2>
      
      <hr class="hrForm">

      <input type="text" placeholder="Titre du film"             id="new_titre"        name="new_titre"        required>
      <input type="text" placeholder="Nom du r&eacute;alisateur" id="new_realisateur"  name="new_realisateur"  required>
      <input type="text" placeholder="Cat&eacute;gorie"          id="new_categorie"    name="new_categorie"    required>
      <input type="text" placeholder="Dur&eacute;e"              id="new_duree"        name="new_duree"        required>
      <input type="text" placeholder="Prix"                      id="new_prix"         name="new_prix"         required>
      <input type="text" placeholder="URL de la pochette"        id="new_pochette_url" name="new_pochette_url" required>
      <input type="text" placeholder="URL de la bande annonce"   id="new_preview_url"  name="new_preview_url"  required>

      <input type="text" style="display:none" id="id_modifier" name="id_modifier" required>

      <button type="submit" class="buttonForm" style="background-color: #4CAF50; width:90%">Modifier</button>
      <button type="button" class="buttonForm" style="background-color: #f44336; width:90%" onclick="closeModifierForm()">Cancel</button>
     
   </form>
</div>

