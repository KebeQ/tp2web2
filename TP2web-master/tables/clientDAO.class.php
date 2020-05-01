<?php

require_once "client.class.php";

class ClientDAO {

    private $baseD;


    public function __construct($baseD)
    {
        $this->setBaseDeDonnee($baseD);
    }

    public function setBaseDeDonnee(PDO $baseD)
    {
    $this->baseD = $baseD;
    }

    public function add(Client $clientReçu)
    {
        $req = $this->baseD->prepare('INSERT INTO client (nom, prenom, adresse, ville, province, codePostal, loginClient, motPasse, email) VALUES (:nom, :prenom, :adresse, :ville, :province, :codePostal, :loginClient, :motPasse, :email)');

        $req->bindValue(':nom', $clientReçu->getNom(), PDO::PARAM_STR);
        $req->bindValue(':prenom', $clientReçu->getPrenom(), PDO::PARAM_STR);
        $req->bindValue(':adresse', $clientReçu->getAdresse(), PDO::PARAM_STR);
        $req->bindValue(':ville', $clientReçu->getVille(), PDO::PARAM_STR);
        $req->bindValue(':province', $clientReçu->getProvince(), PDO::PARAM_STR);
        $req->bindValue(':codePostal', $clientReçu->getCodePostal(), PDO::PARAM_STR);
        $req->bindValue(':login', $clientReçu->getLogin(), PDO::PARAM_STR);
        $req->bindValue(':motPasse', $clientReçu->getMotDePasse(), PDO::PARAM_STR);
        $req->bindValue(':email', $clientReçu->getEmail(), PDO::PARAM_STR);

        $req->execute();

        $req->closeCursor();
    }

    public function get($no)
 {
     $no = (int) $no;
     $req = $this->baseD->prepare('SELECT no, nom, prenom, adresse, ville, province, codePostal, loginClient, motPasse, email FROM client WHERE no=:no');
     $req->bindValue(':no', $no, PDO::PARAM_INT);

     $req->execute();

     $ligne = $req->fetch(PDO::FETCH_ASSOC);
     $unClient = new Client($ligne['nom'], $ligne['prenom'], $ligne['adresse'], $ligne['ville'], $ligne['province'], $ligne['codePostal'], $ligne['login'], $ligne['motPasse'], $ligne['email']);

     $unClient->setNo($no);
     $req->closeCursor();

     return $unClient;
 }

    public function update(Client $clientReçu)
    {
        $req = $this->baseD->prepare('UPDATE client SET nom= :nom, anneeNaissance= :anneeNaissance, solde= :solde WHERE id = :id');

        $req->bindValue(':nom', $clientReçu->getNom(), PDO::PARAM_STR);
        $req->bindValue(':prenom', $clientReçu->getPrenom(), PDO::PARAM_STR);
        $req->bindValue(':adresse', $clientReçu->getAdresse(), PDO::PARAM_STR);
        $req->bindValue(':ville', $clientReçu->getVille(), PDO::PARAM_STR);
        $req->bindValue(':province', $clientReçu->getProvince(), PDO::PARAM_STR);
        $req->bindValue(':codePostal', $clientReçu->getCodePostal(), PDO::PARAM_STR);
        $req->bindValue(':login', $clientReçu->getLogin(), PDO::PARAM_STR);
        $req->bindValue(':motPasse', $clientReçu->getMotDePasse(), PDO::PARAM_STR);
        $req->bindValue(':email', $clientReçu->getEmail(), PDO::PARAM_STR);
        $req->bindValue(':no', $clientReçu->getNo(), PDO::PARAM_INT);

        $req->execute();

        $req->closeCursor();
    }


}
?>