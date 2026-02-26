<?php
namespace PhiCcc\Controller;

use Exception;
use PhiCcc\Model\ManagerUser;
use PhiCcc\Model\User;

class UserController {

    public function logIn() {
        $user = ManagerUser::get($_POST['login']);
        if($user){
            if(password_verify($_POST['mdp'], $user->getPassword())){
                $_SESSION['role'] = $user->getRole();
                $_SESSION['id_user'] = $user->getId_User();
                setcookie('login', $user->getLogin());
                header('location: ?controller=pages&method=admin');
                exit;
            }else{
                echo "mot de passe incorrecte";
            }
        }else{
            echo "utilisateur non trouvé";
        }
    }

    public function deconnexion() {
        session_start();
        session_destroy();

        setcookie('login', '', -1);
        unset($_COOKIE['login']);

        header('Location: ?controller=global&method=index');
        exit;
    }

    public function signUp() {

        $login = (isset($_POST['login']) && (!empty($_POST['login']))) ? $_POST['login'] : null;
        $password = (isset($_POST['mdp']) && (!empty($_POST['mdp']))) ? $_POST['mdp'] : null;
        $passwordConf = (isset($_POST['confMdp']) && (!empty($_POST['confMdp']))) ? $_POST['confMdp'] : null;
        $passwordHash = ($password === $passwordConf) ? password_hash($passwordConf, PASSWORD_DEFAULT) : null;

        $user = new User(["login" => $login, "password_" => $passwordHash]);

        try{
            $loginTake = ManagerUser::isLoginTake($login);
            if($login!==null && $passwordHash!==null){
                ManagerUser::add($user);
                echo "Inscription réussi ! Bienvenue $login ";
                $_SESSION['user'] = $login;
                echo "retour à <a href=\"?controller=pages&method=admin\">l'acceuil</a>";
                setcookie('login', $login);

                $userInfo = ManagerUser::get($login);
                $_SESSION['role'] = $userInfo->getRole();
                $_SESSION['id_user'] = $userInfo->getId_User();
            }
        }catch(Exception){
            echo "Login déjà existante, merci de vous <a href=\"?controller=pages&method=connexion\">connecter</a>";
        }

    }

    public function update() {
        $user = ManagerUser::get($_SESSION['user']);
        require_once "views/admin/userupdate.php";
    }

    public function updateTraitement(){
        $login = isset($_SESSION['user']) ? $_SESSION['user'] : null;

        $user = ManagerUser::isLoginTake($login);

        if($user){
            $user = ManagerUser::get($login);
            if(password_verify($_POST['acMdp'], $user->getPassword())){

                $login = (isset($_POST['login']) && (!empty($_POST['login']))) ? $_POST['login'] : null;
                $newPassword = (isset($_POST['newMdp']) && (!empty($_POST['newMdp']))) ? $_POST['newMdp'] : null;
                $passwordHash = password_hash($newPassword, PASSWORD_DEFAULT);

                $user = new User(["id_user" => $_POST['id_user'],"login" => $login, "password" => $passwordHash]);

            }else{
                echo "ancien mot de passe incorrect";
            }
            if($login!==null && $login!==null && $passwordHash!==null){
                ManagerUser::update($user);
                setcookie('login', $user->getLogin());
                $_COOKIE['login'] = $user->getLogin();
            }
        }else{
            echo "utilisateur introuvable";
        }
    }
}