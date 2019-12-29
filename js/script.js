/***************************
* Connexion page d'accueil *
****************************/
// Ouvre le formulaire de bienvenue
function openGreetingForm() {
   document.getElementById("greetingForm").style.display = "block";
}

// Ferme le formulaire de  bienvenue
function closeGreetingForm() {
   document.getElementById("greetingForm").style.display = "none";
}


/**************************
* Connexion compte client *
***************************/
// Ouvre le formulaire de login + ferme le formulaire de bienvenue (si ouvert)
function openLogin() {
   document.getElementById("greetingForm").style.display = "none";
   document.getElementById("loginForm").style.display = "block";
}

// Ferme le formulaire de login + ouvre le formulaire de  bienvenue (si dans la page principale)
function closeLogin() {
   document.getElementById("loginForm").style.display = "none";
   document.getElementById("greetingForm").style.display = "block";
}


/***************************
* Connexion nouveau client *
****************************/
// Ouvre le formulaire de signup + ferme le formulaire de bienvenue (si ouvert)
function openSignup() {
   document.getElementById("greetingForm").style.display = "none";
   document.getElementById("signupForm").style.display = "block";
}

// Ferme le formulaire de signup + ouvre le formulaire de  bienvenue (si dans la page principale)
function closeSignup() {
   document.getElementById("signupForm").style.display = "none";
   document.getElementById("greetingForm").style.display = "block";
}


/***************************
* Gestion des films        *
****************************/
// Ouvre le formulaire d'ajout d'un film a la base de donnees
function openAjouterForm() {
   document.getElementById("ajouterForm").style.display = "block";
}

// Ferme le formulaire d'ajout d'un film a la base de donnees
function closeAjouterForm() {
   document.getElementById("ajouterForm").style.display = "none";
}

// Ouvre le formulaire de modification des infos d'un film
function openModifierForm(idx) {
   document.getElementById("modifierForm").style.display = "block";

   document.getElementById("new_titre").value        = document.getElementById("titre"+idx).innerHTML;
   document.getElementById("new_realisateur").value  = document.getElementById("realisateur"+idx).innerHTML;
   document.getElementById("new_categorie").value    = document.getElementById("categorie"+idx).innerHTML;
   document.getElementById("new_duree").value        = document.getElementById("duree"+idx).innerHTML;
   document.getElementById("new_prix").value         = document.getElementById("prix"+idx).innerHTML;
   document.getElementById("new_pochette_url").value = document.getElementById("pochette_url"+idx).innerHTML;
   document.getElementById("new_preview_url").value  = document.getElementById("preview_url"+idx).innerHTML;
   
   document.getElementById("id_modifier").value  = document.getElementById("id"+idx).innerHTML;
}

// Ferme le formulaire de modification des infos d'un film
function closeModifierForm() {
   document.getElementById("modifierForm").style.display = "none";
}

// Ouvre le formulaire de suppression d'un film
function openSupprimerForm(idx) {
   document.getElementById("supprimerForm").style.display = "block";
   document.getElementById("id_supprimer").value = document.getElementById("id"+idx).innerHTML;
}

// Ferme le formulaire de suppression d'un film
function closeSupprimerForm() {
   document.getElementById("supprimerForm").style.display = "none";
}


/***************************
* Librairie des films      *
****************************/
// Ouvre le formulaire d'ajout d'un film a la base de donnees
function openDisplayPreview(idx) {
   document.getElementById("displayPreview").style.display = "block";
   document.getElementById("previewWindow").src = document.getElementById("url_selected"+idx).innerHTML;
}
 
// Ferme le formulaire d'ajout d'un film a la base de donnees
function closeDisplayPreview() {
   document.getElementById("displayPreview").style.display = "none";
   document.getElementById("previewWindow").src = "";
}

// Identifie le film a ajouter au panier puis lance la fonction d'ajout
function ajouterPanier(id) {
   document.getElementById("id_achat").value = id;
   document.getElementById("sendform").submit();
}


/***************************
* Panier                   *
****************************/
// Supprime l'item du panier
function panierSupprimer(id) {
   document.getElementById("item_id").value = id;
   document.getElementById("supprimerItemForm").submit();
}


/************************************
* Fermeture auto formulaire/fenetre *
*************************************/
// Ferme les formulaire/fenetre si clic de souris a l'exterieure du formulaire/fenetre
window.addEventListener('click', function(event) {
   if (event.target == document.getElementById("ajouterForm")) {
      document.getElementById("ajouterForm").style.display = "none";
   }

   if (event.target == document.getElementById("modifierForm")) {
      document.getElementById("modifierForm").style.display = "none";
   }

   if (event.target == document.getElementById("supprimerForm")) {
      document.getElementById("supprimerForm").style.display = "none";
   }

   if (event.target == document.getElementById("displayPreview")) {
      document.getElementById("displayPreview").style.display = "none";
      document.getElementById("previewWindow").src = "";
   }
});
