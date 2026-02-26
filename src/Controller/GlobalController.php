<?php
namespace PhiCcc\Controller;

class GlobalController {


    public function index() {
        require_once __DIR__ . '/../Views/public/index.php';
    }

    public function error() {
        echo "je suis une erreur";
    }

    public function enBref() 
    {
        require_once __DIR__ . '/../Views/public/enBref.php';
    }

    public function dons()
    {
        require_once __DIR__ . '/../Views/public/dons.php';
    }

    public function collecte()
    {
        require_once __DIR__ . '/../Views/public/collecte.php';
    }

    public function boutique()
    {
        require_once __DIR__ . '/../Views/public/boutique.php';
    }

    public function benevol()
    {
        require_once __DIR__ . '/../Views/public/benevol.php';
    }

    public function assos()
    {
        require_once __DIR__ . '/../Views/public/assos.php';
    }

    public function mission()
    {
        require_once __DIR__ . '/../Views/public/missions.php';
    }

    public function contact()
    {
        require_once __DIR__ . '/../Views/public/contact.php';
    }

    public function mentionLegal()
    {
        require_once __DIR__ . '/../Views/public/mentionLegal.php';
    }



    // public function actualite()
    // {
    //     if($_SESSION['user']){

    //     }
    // }
    // public function admin() {
    //   if($_SESSION['role'] === 'admin'){
    // //    Afficher ce qu'on veut pour l'admin 

    //   }elseif($_SESSION['role'] === 'editeur'){
        
    // //   Afficher ce qu'on veut pour les assos
    //   }
    //   require_once "views/admin/index.php";
    // }
}