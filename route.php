<?php

use PhiCcc\Controller\ActuController;
use PhiCcc\Controller\AssoController;
use PhiCcc\Controller\GlobalController;

function call($controller, $method) {
    switch($controller) {
        case 'global':
            $controllerObj = new GlobalController();
            break;
        case'asso':
            $controllerObj = new AssoController();
            break;
        case 'actu':
            $controllerObj = new ActuController();
            break;
        default:
            $controllerObj = new GlobalController();
            $method = 'error';
            break;
    }
    
    // Vérifier que la méthode existe
    if (method_exists($controllerObj, $method)) {
        $controllerObj->$method();
    } else {
        $controllerObj->error(); 
    }
}

// Récupérer controller et method depuis l'URL
$controller = $_GET['controller'] ?? 'global';
$method = $_GET['method'] ?? 'index';

// Nettoyer les valeurs 
$controller = strtolower(htmlspecialchars($controller));
$method = htmlspecialchars($method);

// Appeler le contrôleur
call($controller, $method);