<?php
namespace PhiCcc\Controller;

use PhiCcc\Model\ManagerActu;

class ActuController {

    public function list(){
        $actu = new ManagerActu;
        $liste_actus = $actu->all();
        require_once __DIR__ . '/../Views/public/missions.php';
    }

    public function getActu()
    {
        $actu = new ManagerActu;
        $detail_actu = $actu->get($_GET['id']);
        require_once __DIR__.'/../Views/public/actudetail.php';
    }
}