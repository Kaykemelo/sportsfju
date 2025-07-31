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
        require_once 'controller/category/ControllerCategory.php';
        $controller = new ControllerCategory();
        $controller->getList();
        break;

    case 'categorias-insert':
        require_once 'controller/category/ControllerCategory.php';
        $controller = new ControllerCategory();
        $controller->Insert();
        break;   

    case 'categorias-update':
        require_once 'controller/category/ControllerCategory.php';
        $controller = new ControllerCategory();
        if (isset($_GET['id'])) {
             $controller->update($_GET['id']);
        }
        break;    
    
    default:
        echo "Pagina Não Encontrada";
        break;
}

?>