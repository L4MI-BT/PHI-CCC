<?php

namespace PhiCcc\Model;

use PDO;
use PhiCcc\Database\Db;

class ManagerActu {


    public static function all(){
        $list=[];
        $db= Db::getInstance();
        $req = $db->query("SELECT * FROM actu");

        foreach ($req->fetchAll(PDO::FETCH_ASSOC) as $actu){
            $list[] = new Actu($actu);
        }
        return $list;
    }

    public function get($id) {
        $db= Db::getInstance();
        $query = $db->prepare('SELECT * FROM actu WHERE id_actu=:id');
            $query->bindValue(':id', $id);
            $query->execute();
            $info = $query->fetch(PDO::FETCH_ASSOC);
            return new Actu($info);
    }
}