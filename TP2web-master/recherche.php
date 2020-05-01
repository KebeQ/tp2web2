<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Recherche</title>
</head>
<body>
<a href="catalogue.php">Retour au catalogue</a>
<?php
require_once 'includes/connexion.php';
?>
<?php
try {
    $verification = $conn->prepare('SELECT nom, description, prix, qte, dateParution, image FROM produits WHERE nom = :nom');
    $verification->bindValue(':nom', $_GET['nom'], PDO::PARAM_STR);
    $verification->execute();

}

catch (PDOException $e) { 
    exit( "Erreur de lecture de BD: " .  $e -> getMessage()); 
} 

?>

<?php 
$nbLignes = $verification->rowCount();
if($nbLignes ==0)
{
    echo "<b><h3>" . "Aucun résultat obtenu" . "</h3></b>";
}

?>

<?php 
if ($nbLignes >=1)
{
$jeu = $verification->fetch()
    ?>
    
        <div class="row">
            <?php
            echo $jeu['nom'];
            ?>
        </div>

<?php
}
?>

<?php
    $verification->closeCursor();

    $conn = NULL;

    ?>

</body>
</html>
