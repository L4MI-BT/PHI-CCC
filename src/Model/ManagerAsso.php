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

    // public static function geoloc($department){
    //     $db=Db::getInstance();
    //     $department=intval($department);
    //     $get=$db->prepare('SELECT association.*,ville.* FROM association
    //     INNER JOIN ville ON association.id_ville = ville.id_ville
    //     WHERE departement=:departement');
    //     $get->execute(array(
    //         "departement"=>$department
    //     ));
    //     $result=$get->fetch(PDO::FETCH_ASSOC);
    //     return new Asso($result);
    // }
    public function addAsso($obj) {
        $db=Db::getInstance();
        $add=$db->prepare("INSERT INTO association (presidents, vice_president, tresorier, vice_tresorier
        secretaire, vice_secretaire, telephone, adresse, mail, description, image, id_ville)
        VALUES (:presidents, :vice_president, :tresorier, :vice_tresorier
        :secretaire, :vice_secretaire, :telephone, :adresse, :mail, :description, :image, :id_ville)");

        return $add->execute(array(
            'presidents '=> $obj->getPresidents,
            'vice_president '=>$obj->getVice_president,
            'tresorier' =>$obj->getTresorier,
            'vice_tresorier' =>$obj->getVice_tresorier,
            'secretaire' =>$obj->getSecretaire,
            'vice_secretaire' => $obj->getVice_secretaire,
            'telephone' =>$obj->getTelephone,
            'adresse' => $obj->getAdresse,
            'mail' => $obj->getMail,
            'description' => $obj->getDescription,
            'image' => $obj->getImage,
            'id_ville' => $obj->getId_ville,
        ));
    }

    public function local($ville){
        $db = Db::getInstance();

        $req = $db->prepare("SELECT nom_asso 
            FROM association
            INNER JOIN ville 
            ON association.id_ville = ville.id_ville
            WHERE ville.ville = :nomVille
        ");
        $req->bindValue(':nomVille', $ville, PDO::PARAM_STR);
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        var_dump($result);
        return $result;
    }

}