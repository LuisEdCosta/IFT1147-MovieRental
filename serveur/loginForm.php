<!-- 

   Auteur: Luis Costa, COSL27099009
   
   Derniere modification: 02/06/2019
   
   Description: La fenetre de connexion pour les utilisateurs.

-->


<div id="loginForm" class="modal">
   <form class="modal-content" method="post" action="http://www-ens.iro.umontreal.ca/~costalui/ift1147/tp2/filesAccess_tp1990/serveur/scripts/checkLogin.php">

      <h2>connexion</h2>
      
      <hr class="hrForm">

      <input type="text" placeholder="Entrez votre e-mail" id="email" name="email" required>
      <input type="password" placeholder="Entrez votre mot de passe" id="psw" name="psw" required>

      <button type="submit" class="buttonForm"  style="background-color:#4CAF50; width:90%">Log In</button>
      <button type="button" class="buttonForm"  style="background-color:#f44336; width:90%" onclick="closeLogin()">Cancel</button>

   </form>
</div> 