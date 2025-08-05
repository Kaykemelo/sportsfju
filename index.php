<?php 
date_default_timezone_set('America/Sao_Paulo');


// http://localhost/sportsfju/?route=categorias
$route = $_GET['route'] ?? 'home';

switch ($route) {
    case 'home':
        header("location: ?route=categorias");
        exit;
        break;

    case 'categorias':
        require_once 'controller/category/CategoryController.php';
        $controller = new CategoryController();
        $controller->getList();
        break;

    case 'categorias-insert':
        require_once 'controller/category/CategoryController.php';
        $controller = new CategoryController();
        $controller->Insert();
        break;   

    case 'categorias-update':
        require_once 'controller/category/CategoryController.php';
        $controller = new CategoryController();
        if (isset($_GET['id'])) {
             $controller->update($_GET['id']);
        }
        break;    
    
    case 'categorias-delete':
        require_once 'controller/category/CategoryController.php';
        $controller = new CategoryController();
        $controller->Delete($_GET['id']);  
        break;
    
    case 'campeonatos':
        require_once 'controller/championship/ChampionshipController.php';
        $controller = new ChampionshipController();
        $controller->List();
        break;
            
    default:
        echo "Pagina Não Encontrada";
        break;
}

?>