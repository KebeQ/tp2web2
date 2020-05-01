<?php
require 'tables/produit.class.php';
?>

<!DOCTYPE html>
<html lang="en">
<script src="js/catalogue.js"></script> 
<?php 
require_once 'includes/connexion.php';
require_once 'includes/headEtCSS.php';
require_once 'tables/clientDAO.class.php';

?>
<?php 
     $management = new ClientDAO($conn);

     $client = new Client($_POST['nomClient'], 
     $_POST['prenomClient'], $_POST['adresseClient'], $_POST['villeClient'], $_POST['provinceClient'], 
     $_POST['codePostal'], $_POST['login'], $_POST['motDePasse'], $_POST['emailClient']);
    ?>

<body class="text-center">
        <div class="row">
         <div class="logo"><img src="img/logoSite.PNG" width="75" height="75"></div>
          <h1 class="text-center">Jeux vidéos</h1>
          </div>
        <br />
        <form method="get" action="recherche.php">
        <div class="form-row">
          <input type="text" name="nom" id="nom" required> 
          <input type="submit" value="Rechercher">
        </div>
  </form>
  <br />
        <div class="row">
          <div class="col-md-4">
           <div class="jumbotron">
            <h4>Garfield Kart: Furious Racing</h4>
            <img src="img/Garfield.png" width="100" height="150">
          <p>Garfield, the famous lasagna-loving cat is back to take...</p>
            <p><a href="pageDetails.php" class="btn btn-info btn-sm" value='1' id="1" onclick="pageDetailsValue(this.id)">Voir</a></p>
           </div>
          </div>
          <div class="col-md-4">
            <div class="jumbotron">
            <h4>Mordhau</h4>
            <img src="img/Mordhau.jpg" width="100" height="150">
          <p>MORDHAU est un slasher multijoueur à la première et troisième personne basée au Moyen-age.</p>
            <p><a href="pageDetails.php" class="btn btn-info btn-sm" value='2' id="2" onclick="pageDetailsValue(this.id)">Voir</a></p>
            </div>
          </div>
          <div class="col-md-4">
           <div class="jumbotron">
            <h4>Call of Duty 4: Modern Warfare</h4>
            <img src="img/CallofDuty.jpg" width="100" height="150">
          <p>Call of Duty 4: Modern Warfare est un jeu vidéo de tir à la première personne développé...</p>
            <p><a href="pageDetails.php" class="btn btn-info btn-sm" value='3' id="3" onclick="pageDetailsValue(this.id)">Voir</a></p>
           </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
           <div class="jumbotron">
            <h4>Halo: Reach</h4>
            <img src="img/Halo.png" width="100" height="150">
          <p>Halo: Reach est un jeu vidéo de tir à la première personne (FPS) développé par Bungie et...</p>
            <p><a href="pageDetails.php" class="btn btn-info btn-sm" value='4' id="4" onclick="pageDetailsValue(this.id)">Voir</a></p>
           </div>
          </div>
          <div class="col-md-4">
            <div class="jumbotron">
            <h4>Red Dead Redemption 2</h4>
            <img src="img/RedDead.png" width="200" height="150">
          <p>Amérique, 1899. L'ère de l'ouest sauvage touche à sa fin.</p>
            <p><a href="pageDetails.php" class="btn btn-info btn-sm" value='5' id="5" onclick="pageDetailsValue(this.id)">Voir</a></p>
            </div>
          </div>
          <div class="col-md-4">
           <div class="jumbotron">
            <h4>Minecraft</h4>
            <img src="img/Minecraft.jpg" width="100" height="150">
          <p>Minecraft est un jeu vidéo de type "bac à sable" (construction complètement libre) développé...</p>
            <p><a href="pageDetails.php" class="btn btn-info btn-sm" value='6' id="5" onclick="pageDetailsValue(this.id)">Voir</a></p>
           </div>
          </div>
        </div>  
</body>
</html>
