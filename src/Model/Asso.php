<?php

namespace PhiCcc\Model;

    class Asso{
        private $nom_asso;
        private $id_asso;
        private $presidents;
        private $vice_president;
        private $tresorier;
        private $vice_tresorier;
        private $secretaire;
        private $vice_secretaire;
        private $telephone;
        private $adresse;
        private $mail;
        private $description;
        private $image;
        private $id_ville;

        public function __construct($valeur=[])
        {
        if(!empty($valeur))
            $this->hydrate($valeur);
        }
        
        public function hydrate($list){
        foreach ($list as $key => $value)
            {
                $method='set'.ucfirst($key);
                if(method_exists($this,$method)){
                    $this->$method($value);
                }else{
                    echo $method." introuvable";
                }
            }
        }
        public function getId_asso()
        {
                return $this->id_asso;
        }
        public function setId_asso($id_asso): self
        {
                $this->id_asso = $id_asso;

                return $this;
        }

        public function getPresidents()
        {
                return $this->presidents;
        }
        public function setPresidents($presidents): self
        {
                $this->presidents = $presidents;

                return $this;
        }

        public function getVice_president()
        {
                return $this->vice_president;
        }
        public function setVice_president($vice_president): self
        {
                $this->vice_president = $vice_president;

                return $this;
        }

        public function getTresorier()
        {
                return $this->tresorier;
        }
        public function setTresorier($tresorier): self
        {
                $this->tresorier = $tresorier;

                return $this;
        }

        public function getVice_tresorier()
        {
                return $this->vice_tresorier;
        }

        public function setVice_tresorier($vice_tresorier): self
        {
                $this->vice_tresorier = $vice_tresorier;

                return $this;
        }

        public function getSecretaire()
        {
                return $this->secretaire;
        }
        public function setSecretaire($secretaire): self
        {
                $this->secretaire = $secretaire;

                return $this;
        }

        public function getVice_secretaire()
        {
                return $this->vice_secretaire;
        }
        public function setVice_secretaire($vice_secretaire): self
        {
                $this->vice_secretaire = $vice_secretaire;

                return $this;
        }

        public function getTelephone()
        {
                return $this->telephone;
        }
        public function setTelephone($telephone): self
        {
                $this->telephone = $telephone;

                return $this;
        }

        public function getAdresse()
        {
                return $this->adresse;
        }
        public function setAdresse($adresse): self
        {
                $this->adresse = $adresse;

                return $this;
        }

        public function getMail()
        {
                return $this->mail;
        }
        public function setMail($mail): self
        {
                $this->mail = $mail;

                return $this;
        }

        public function getDescription()
        {
                return $this->description;
        }
        public function setDescription($description): self
        {
                $this->description = $description;

                return $this;
        }

        public function getImage()
        {
                return $this->image;
        }
        public function setImage($image): self
        {
                $this->image = $image;

                return $this;
        }

        public function getId_ville()
        {
                return $this->id_ville;
        }
        public function setId_ville($id_ville): self
        {
                $this->id_ville = $id_ville;

                return $this;
        }

        public function getNom_asso()
        {
                return $this->nom_asso;
        }
        public function setNom_asso($nom_asso): self
        {
                $this->nom_asso = $nom_asso;

                return $this;
        }
    }
    