<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Authentification du client</title>
</head>
<body>
<?php
require_once 'includes/connexion.php';
require_once 'tables/clientDAO.class.php';
require_once 'includes/formulaireClient.php';
?>
<div class="jumbotron">
   <form method="post" action="catalogue.php">
        <div class="form-row">
            <div class="col-md-4">
            <label for="nomClient">Nom: </label><input type="text" name="nomClient" id="nomClient" required>
            </div>
            <div class="col-md-4">
            <label for="prenomClient">Prénom: </label><input type="text" name="prenomClient" id="prenomClient" required> 
            </div>
            <div class="col-md-4">
            <label for="adresseClient">Adresse: </label>
            <input type="text" name="adresseClient" id="adresseClient" placeholder="Ex: 51 Rue Déziel" required>
            </div>
        </div>

        <br />
        <div class="form-row">
            <div class="col-md-4">
            <label for="villeClient">Ville: </label>
            <input type="text" name="villeClient" id="villeClient" placeholder="Ex: Lévis" required> 
            </div>
            <div class="col-md-4">
            <label for="provinceClient">Province: </label>
            <input type="text" name="provinceClient" id="provinceClient" placeholder="Ex: Québec" required> 
            </div>
            <div class="col-md-4">
            <label for="codePostal">Code Postal: </label>
            <input type="text" name="codePostal" id="codePostal" placeholder="Ex: G6V 3T7" required pattern="[A-Z][0-9][A-Z] [0-9][A-Z][0-9]"> 
            </div>
        </div>
        
        <br />
        <div class="form-row">
        <div class="col-md-3">
            <label for="login">Login: </label><input type="text" name="login" id="login" required> 
            </div>
         <div class="col-md-3">
            <label for="motDePasse">Mot de Passe: </label>
            <input type="password" name="motDePasse" id="motDePasse" required> 
         </div>
         <div class="col-md-3">
            <label for="motDePasseConfirm">Confirmation Mot de Passe: </label>
            <input type="password" name="motDePasseConfirm" id="motDePasseConfirm" required> 
         </div>
        <div class="col-md-3">
            <label for="emailClient">Email: </label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
              </div>
              <input type="email" id="emailClient" name="emailClient" aria-describedby="inputGroupPrepend" required>
            </div>
           </div>
          </div>
		<br />
		<input type="submit" value="Créer nouveau compte">
    </form>
   </div>

</body>
</html>
