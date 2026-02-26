<?php
namespace PhiCcc\Model;

use PDO;
use PhiCcc\Database\Db;


class ManagerVille{

  
    public function autocompletionCodepostal($codepostal){
        $db = Db::getInstance();
        $requete=$db->prepare("SELECT * FROM ville WHERE code_postal like :recherche LIMIT 0,10");
        $requete->execute(['recherche'=>"$codepostal%"]);
        $info = $requete->fetchAll(PDO::FETCH_ASSOC);
        return $info;

         
    }

    public function autocompletionVille($ville){
        $db = Db::getInstance();
        $requete=$db->prepare("SELECT * FROM ville WHERE ville like :recherche LIMIT 0,10");
        $requete->execute(['recherche'=>"$ville%"]);
        $info = $requete->fetchAll(PDO::FETCH_ASSOC);
        return $info;
    }
}