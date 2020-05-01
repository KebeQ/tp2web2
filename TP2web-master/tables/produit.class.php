<?php

class Produit {
    private $no;
    private $nom;
    private $description;
    private $prix;
    private $qte;
    private $dateParution;
    private $image;

    public function __construct($no, $nom, $description, $prix, $qte, $dateParution, $image)
    {
        $this->setNom($no);
        $this->setAnneeNaissance($nom);
        $this->setSolde($description);
        $this->setNom($prix);
        $this->setAnneeNaissance($qte);
        $this->setSolde($dateParution);
        $this->setNom($image);

    }
}

?>