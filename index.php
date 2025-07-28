<?php 

// http://localhost/sportsfju/?route=categorias
$route = $_GET['route'] ?? 'home';

switch ($route) {
    case 'categorias':
        require_once 'controller/category/ControllerCategory.php';
        $controller = new ControllerCategory();
        $controller->getList();
        break;
    
    default:
        echo "Pagina Não Encontrada";
        break;
}

?>