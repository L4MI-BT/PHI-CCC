<?php
namespace PhiCcc\Model;

use ManagerVille;

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