<?php

class Client {
    private $no;
    private $nom;
    private $prenom;
    private $adresse;
    private $ville;
    private $province;
    private $codePostal;
    private $loginClient;
    private $motPasse;
    private $email;

    public function __construct($nom, $prenom, $adresse, $ville, $province, $codePostal, $loginClient, $motPasse, $email)
    {
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setAdresse($adresse);
        $this->setVille($ville);
        $this->setProvince($province);
        $this->setCodePostal($codePostal);
        $this->setLogin($loginClient);
        $this->setMotDePasse($motPasse);
        $this->setEmail($email);

    }

    public function setNo($no) {
        $this->no = $no;
    }

    public function setNom($nom){
        if ($nom == '' || $nom == ' ')
            {
            trigger_error('Il faut insérer un nom!');
            return;
            }
    
        $this->nom = $nom;
        }

    public function setPrenom($prenom){
        if ($prenom == '' || $prenom == ' ')
            {
             trigger_error('Il faut insérer un prénom!');
            return;
            }
        
         $this->prenom = $prenom;
         }

         public function setAdresse($adresse){
            if ($adresse = '' || $adresse == ' ')
                {
                trigger_error('Il faut insérer une adresse!');
                return;
                }
        
            $this->adresse = $adresse;
            }
    
        public function setVille($ville){
            if ($ville == '' || $ville == ' ')
                {
                 trigger_error('Il faut insérer une ville!');
                return;
                }
            
             $this->ville = $ville;
             }

        public function setProvince($province){
            if ($province == '' || $province == ' ')
            {
            trigger_error('Il faut insérer une province!');
            return;
            }
    
        $this->province = $province;
        }

        public function setCodePostal($codePostal){
            $expRegCodePostal = "/^[A-Z][0-9][A-Z] [0-9][A-Z][0-9]$/";
            if (!preg_match($expRegCodePostal, $codePostal))           
              {
               trigger_error('Il faut insérer un code postal valide!');
              return;
              }
          
           $this->codePostal = $codePostal;
           } 

           public function setLogin($loginClient){
            if ($loginClient == '' || $loginClient == ' ')
              {
               trigger_error('Il faut insérer un login!');
              return;
              }
          
           $this->loginClient = $loginClient;
           }  

           public function setMotDePasse($motPasse){
            if ($motPasse == '' || $motPasse == ' ')
              {
               trigger_error('Il faut insérer un mot de passe valide!');
              return;
              }
          
           $this->motPasse = $motPasse;
           } 

           public function setEmail($email){
            if ($email == '' || $email == ' ')
              {
               trigger_error('Il faut insérer un email!');
              return;
              }
          
           $this->email = $email;
           }            

    public function getNo()
    {
    return $this->no;
    }

    public function getNom()
    {
    return $this->nom;
    }

    public function getPrenom()
    {
    return $this->prenom;
    }

    public function getAdresse()
    {
    return $this->adresse;
    }

    public function getVille()
    {
    return $this->ville;
    }

    public function getProvince()
    {
    return $this->province;
    }

    public function getCodePostal()
    {
    return $this->codePostal;
    }

    public function getLogin()
    {
    return $this->loginClient;
    }

    public function getMotDePasse()
    {
    return $this->motPasse;
    }

    public function getEmail()
    {
    return $this->email;
    }

}

?>
