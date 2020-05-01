<?php

class Commande {
    private $no;
    private $date;
    private $statut;
    private $typePaiement;
    private $noClient;

    public function __construct($no, $date, $statut, $typePaiement, $noClient)
    {
        $this->setNom($no);
        $this->setAnneeNaissance($date);
        $this->setNom($statut);
        $this->setAnneeNaissance($typePaiement);
        $this->setSolde($noClient);

    }
}

?>