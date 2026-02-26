<?php
namespace PhiCcc\Controller;

use PhiCcc\Model\ManagerAsso;

class AssoController{
    public function list(){
        $asso = new ManagerAsso;
        $list_asso = $asso->all();
       require_once __DIR__ . '/../Views/asso/list_asso.php';
    }
}