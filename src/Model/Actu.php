<?php

namespace PhiCcc\Model;

class Actu {

    private $id_actu;
    private $titre;
    private $date_;
    private $description;
    private $url_image;
    private $id_ville;
    private $id_user;

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

    /**
     * Get the value of id_actu
     */
    public function getId_actu() {
        return $this->id_actu;
    }

    /**
     * Set the value of id_actu
     */
    public function setId_actu($id_actu): self {
        $this->id_actu = $id_actu;
        return $this;
    }

    /**
     * Get the value of titre
     */
    public function getTitre() {
        return $this->titre;
    }

    /**
     * Set the value of titre
     */
    public function setTitre($titre): self {
        $this->titre = $titre;
        return $this;
    }

    /**
     * Get the value of date
     */
    public function getDate_() {
        return $this->date_;
    }

    /**
     * Set the value of date
     */
    public function setDate_($date): self {
        $this->date_ = $date;
        return $this;
    }

    /**
     * Set the value of description
     */
    public function setDescirption($description): self {
        $this->description = $description;
        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Get the value of url_image
     */
    public function getUrl_Image() {
        return $this->url_image;
    }

    /**
     * Set the value of url_image
     */
    public function setUrl_Image($url_image): self {
        $this->url_image = $url_image;
        return $this;
    }

    /**
     * Get the value of id_ville
     */
    public function getId_Ville() {
        return $this->id_ville;
    }

    /**
     * Set the value of id_ville
     */
    public function setId_Ville($id_ville): self {
        $this->id_ville = $id_ville;
        return $this;
    }

    /**
     * Get the value of id_user
     */
    public function getId_User() {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     */
    public function setId_User($id_user): self {
        $this->id_user = $id_user;
        return $this;
    }
}