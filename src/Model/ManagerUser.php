<?php 
namespace PhiCcc\Model;

use Exception;
use PhiCcc\Database\Db;
use PDO;




class ManagerUser {
    
    public static function add($obj) {

        $db = Db::getInstance();

        $query = $db->prepare('INSERT INTO user_ (login, password) VALUES (:login, :password)');

        $query->bindValue(':login', $obj->getLogin(), PDO::PARAM_STR);
        $query->bindValue(':password', $obj->getPassword(), PDO::PARAM_STR);

        $query->execute();

    }

    public static function delete($obj) {
        $db = Db::getInstance();
        $query = $db->prepare("DELETE FROM user_ WHERE id_user=:id");
        $query->bindValue(':id', $obj);
        $query -> execute();
    }

    public static function get($login) {
        $db = Db::getInstance();
        $query = $db->prepare('SELECT * FROM user_ WHERE login=:login');
        $query->bindValue(':login', $login);
        $query->execute();
        $info = $query->fetch(PDO::FETCH_ASSOC);

        return new User($info);
    }

    public static function isLoginTake($login) {
        $db = Db::getInstance();
        $query = $db->prepare('SELECT * FROM user_ WHERE login=:login');
        $query->bindValue(':login', $login);
        $query->execute();
        $info = $query->fetchAll(PDO::FETCH_ASSOC);

        if(count($info)){
            throw new Exception('Login déjà utiliser');
        }else{
            return false;
        }
    }

    public static function getList() {
        $db = Db::getInstance();
        $query = $db->prepare('SELECT * FROM user_');
        $query->execute();
        $user_ = [];
        $info = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach($info as $val){
            $user_[] = new User($val);
        }
        
        return $user_;
    }

    public static function update($obj) {
        $db = Db::getInstance();
        $query = $db->prepare('UPDATE user_ SET login =:login, password =:password WHERE id_user =:id');
        $query->bindValue('login', $obj->getLogin());
        $query->bindValue('password', $obj->getpassword());
        $query->bindValue('id', $obj->getId_User());
        $query->execute();
    }


}
