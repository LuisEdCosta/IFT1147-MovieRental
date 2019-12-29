<!-- 

   Auteur: Luis Costa, COSL27099009
   
   Derniere modification: 02/06/2019
   
   Description: Formulaire d'ajout de film a la base de donnee

-->



<div id="ajouterForm" class="modal">
   <form class="modal-content" method="post" action="http://www-ens.iro.umontreal.ca/~costalui/ift1147/tp2/filesAccess_tp1990/serveur/scripts/ajouterFilm.php">

      <span class="close" onclick="closeAjouterForm()">&times;</span><br>

      <h2>ajout d'un film</h2>
      
      <hr class="hrForm">

      <input type="text" placeholder="Titre du film"             id="titre"        name="titre"        required>
      <input type="text" placeholder="Nom du r&eacute;alisateur" id="realisateur"  name="realisateur"  required>
      <input type="text" placeholder="Cat&eacute;gorie"          id="categorie"    name="categorie"    required>
      <input type="text" placeholder="Dur&eacute;e"              id="duree"        name="duree"        required>
      <input type="text" placeholder="Prix"                      id="prix"         name="prix"         required>
      <input type="text" placeholder="URL de la pochette"        id="pochette_url" name="pochette_url" required>
      <input type="text" placeholder="URL de la bande annonce"   id="preview_url"  name="preview_url"  required>

      <button type="submit" class="buttonForm" style="background-color: #4CAF50; width:90%">Valider</button>
      <button type="button" class="buttonForm" style="background-color: #f44336; width:90%" onclick="closeAjouterForm()">Cancel</button>
     
   </form>
</div>

