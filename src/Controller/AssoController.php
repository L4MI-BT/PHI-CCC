<?php
namespace PhiCcc\Controller;

use PhiCcc\Model\Asso;
use PhiCcc\Model\ManagerAsso;

class AssoController{


    public function list(){
        $asso = new ManagerAsso;
        $liste_assos = $asso->all();
        require_once __DIR__ . '/../Views/public/assos.php';
    }

    public function insert(){
        require_once __DIR__.'/../Views/asso/ajout_form.php';
    }
    
    public function ajouter(){
        $asso = new Asso([
            'presidents' => $_POST['presidents'],
            'vice_president'  => $_POST['vice_president'],
            'tresorier'  => $_POST['tresorier'],
            'vice_tresorier'  => $_POST['vice_tresorier'],
            'secretaire'  => $_POST['secretaire'],
            'vice_secretaire'  => $_POST['vice_secretaire'],
            'telephone'  => $_POST['telephone'],
            'adresse'  => $_POST['adresse'],
            'mail'  => $_POST['mail'],
            'description'  => $_POST['description'],
            'image'  => $_POST['image'],
            'id_ville'  => $_POST['id_ville'],
            
        ]);
        $manager = new ManagerAsso();
        $result = $manager->addAsso($asso);
    }

    public function search(){
        require_once __DIR__.'/../Views/public/collecte.php';
    }

    public function recherche(){
        $asso = new ManagerAsso;
        $departement = $asso->local($_POST["ville"]);
        require_once __DIR__ . '/../Views/public/collecte.php';
    }
    }

