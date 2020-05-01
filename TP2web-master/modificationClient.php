<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modification du client</title>
</head>
<body>
<?php
require_once 'includes/connexion.php';
require_once 'tables/clientDAO.class.php';
require_once 'includes/formulaireClient.php';
?>
<div class="jumbotron">
   <form method="post" action="modificationClient.php">
        <div class="form-row">
            <div class="col-md-4">
            <label for="nomClientModification">Nom: </label><input type="text" name="nomClientModification" id="nomClientModification"
            value=<?php echo $_POST['nomClient'] ?>>
            </div>
            <div class="col-md-4">
            <label for="prenomClient">Prénom: </label><input type="text" name="prenomClient" id="prenomClient"> 
            </div>
            <div class="col-md-4">
            <label for="adresseClient">Adresse: </label>
            <input type="text" name="adresseClient" id="adresseClient">
            </div>
        </div>

        <br />
        <div class="form-row">
            <div class="col-md-4">
            <label for="villeClient">Ville: </label>
            <input type="text" name="villeClient" id="villeClient"> 
            </div>
            <div class="col-md-4">
            <label for="provinceClient">Province: </label>
            <input type="text" name="provinceClient" id="provinceClient"> 
            </div>
            <div class="col-md-4">
            <label for="codePostal">Code Postal: </label>
            <input type="text" name="codePostal" id="codePostal"> 
            </div>
        </div>
        
        <br />
        <div class="form-row">
         <div class="col-md-4">
            <label for="motDePasse">Mot de Passe: </label>
            <input type="password" name="motDePasse" id="motDePasse"> 
         </div>
         <div class="col-md-4">
            <label for="motDePasseConfirm">Confirmer mot de Passe: </label>
            <input type="password" name="motDePasseConfirm" id="motDePasseConfirm"> 
         </div>
        <div class="col-md-4">
            <label for="emailClient">Email: </label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
              </div>
              <input type="email" id="emailClient" name="emailClient" aria-describedby="inputGroupPrepend">
            </div>
           </div>
          </div>
		<br />
		<input type="submit" value="Approuvé les modifications">
    </form>
</div>
</body>
</html>