<?php
namespace PhiCcc\Database;



require_once __DIR__ . '/connexion.php';
require_once __DIR__ . '/../Model/ManagerVille.php'; // si pas d'autoload
use PhiCcc\Model\ManagerVille;


$info = new ManagerVille();
if(isset($_GET["codepostal"])){
    echo json_encode($info->autocompletionCodepostal($_GET["codepostal"]));
    exit;
}
if(isset($_GET["ville"])){
    echo json_encode($info->autocompletionVille($_GET["ville"]));
    exit;
}
echo json_encode([]);