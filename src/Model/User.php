<?php
namespace PhiCcc\Model;

class User {

    private $id_user;
    private $login;
    private $password;
    private $id_ville;
    private $role;

     public function __construct($valeur = [])
    {
        if(!empty($valeur)){
            $this->hydrate($valeur);
        }        
    }
    
    public function hydrate($donnee) {
        foreach ($donnee as $key => $value){
            $method = 'set'.ucfirst($key);
            if(method_exists($this, $method)){
                $this->$method($value);
            }else{
                echo $method.' introuvable';
            }
        }
    }

    

    public function getId_User() {
        return $this->id_user;
    }

    public function setId_User($id_user): self {
        $this->id_user = $id_user;
        return $this;
    }


    public function getLogin() {
        return $this->login;
    }

    public function setLogin_($login): self {
        $this->login = $login;
        return $this;
    }


    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password): self {
        $this->password = $password;
        return $this;
    }
  
    public function getRole() {
        return $this->role;
    }

    public function setRole($role): self {
        $this->role = $role;
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
}