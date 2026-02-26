<?php
namespace PhiCcc\Model;

use PDO;
use PhiCcc\Database\Db;
use PhiCcc\Model\Asso;

class ManagerAsso{
    public function all(){
        $list=[];
        $db= Db::getInstance();
        $req = $db->query("SELECT * FROM association");

        foreach ($req->fetchAll(PDO::FETCH_ASSOC) as $asso){
            $list[]=new Asso($asso);
        }
        return $list;
    }

    public static function get($id){
        $db=Db::getInstance();
        $id=intval($id);
        $get=$db->prepare('SELECT association.*,ville.* FROM association
        INNER JOIN ville ON association.id_ville = ville.id_ville
        WHERE association.id_association=:id');
        $get->execute(array(
            "id"=>$id
        ));
        $result=$get->fetch(PDO::FETCH_ASSOC);
        return new Asso($result);
    }
}