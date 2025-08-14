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
        
             $controller->update($_GET['id']);
        
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
        
    case 'campeonatos-insert':
        require_once 'controller/championship/ChampionshipController.php';
        $controller = new ChampionshipController();
        $controller->Insert();
        break;

    case 'campeonatos-update':
        require_once 'controller/championship/ChampionshipController.php';
        $controller = new ChampionshipController();
        $controller->Update($_GET['id']); 
        
        break;    
            
    case 'campeonatos-delete':
        require_once 'controller/championship/ChampionshipController.php';
        $controller = new ChampionshipController();
        $controller->Delete($_GET['id']);
        break;   

    case 'times':
        require_once 'controller/team/TeamController.php';
        $controller = new TeamController();
        $controller->List();
        break;

    case 'times-insert':
        require_once 'controller/team/TeamController.php';
        $controller = new TeamController();
        $controller->Insert();
        break;

    case 'times-update':
        require_once 'controller/team/TeamController.php';
        $controller = new TeamController();
        $controller->Update($_GET['id']); 

        break;
        
    case 'times-delete':
        require_once 'controller/team/TeamController.php';
        $controller = new TeamController();
        $controller->Delete($_GET['id']);
        break;
    
    case 'jogadores':
        require_once 'controller/player/PlayerController.php';
        $controller = new PlayerController();
        $controller->List();
        break;

    case 'jogadores-insert':
        require_once 'controller/player/PlayerController.php';
        $controller = new PlayerController();
        $controller->Insert();
        break;
        
    case 'jogadores-update':
        require_once 'controller/player/PlayerController.php';
        $controller = new PlayerController();
        $controller->Update($_GET['id']);
        break;
        
    case 'jogadores-delete':
        require_once 'controller/player/PlayerController.php';
        $controller = new PlayerController();
        $controller->Delete($_GET['id']);
        break;
        
    case 'rodadas':
        require_once 'controller/round/RoundController.php';
        $controller = new RoundController();
        $controller->List();
        break;    

    case 'rodadas-insert':
        require_once 'controller/round/RoundController.php';
        $controller = new RoundController();
        $controller->Insert();
        break;
        
    case 'rodadas-update':
        require_once 'controller/round/RoundController.php';
        $controller = new RoundController();
        $controller->Update($_GET['id']);
        break;    
        
    default:
        echo "Pagina Não Encontrada";
        break;
}

?>