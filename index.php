<?php 
date_default_timezone_set('America/Sao_Paulo');

// http://localhost/sportsfju/web/?route=home

// http://localhost/sportsfju/admin/?route=categorias


$url = $_SERVER['REQUEST_URI'];
$partes = explode("/", $url);
//echo $partes[1]; // Ex: "produto"
//echo $partes[2]; // Ex: "123"
$route = $_GET['route'] ?? 'home';

$module = $_GET['module']  ?? 'admin';

switch ($route) {
    case 'home':
        header("location: ?route=web");
        exit;
        break;

    case 'categorias':
        if ($module === 'admin') {
             require_once 'controller/category/CategoryController.php';
            $controller = new CategoryController();
            $controller->getList($module);
        } else {
            require_once 'model/category/CategoryModel.php';
            $categoryModel = new CategoryModel();
            $Categorys = $categoryModel->getDataCategory();

            include 'view/web/championship.php';
        }
        break;

    case 'categorias-insert':
        require_once 'controller/category/CategoryController.php';
        $controller = new CategoryController();
        $controller->Insert($module);
        break;   

    case 'categorias-update':
        require_once 'controller/category/CategoryController.php';
        $controller = new CategoryController();
        
             $controller->update($_GET['id'],$module);
        
        break;    
    
    case 'categorias-delete':
        require_once 'controller/category/CategoryController.php';
        $controller = new CategoryController();
        $controller->Delete($_GET['id'],$module);  
        break;
    
    case 'campeonatos':
        if ($module === 'admin') {
            require_once 'controller/championship/ChampionshipController.php';
            $controller = new ChampionshipController();
            $controller->List($module);
        } else {
            require_once 'model/championship/ChampionshipModel.php';
            $championshipModel = new ChampionshipModel();
            $aChampionship = $championshipModel->List();

            include '../sportsfju/view/web/championship.php';

        }
        break;
       
    case 'campeonatos-insert':
        require_once 'controller/championship/ChampionshipController.php';
        $controller = new ChampionshipController();
        $controller->Insert($module);
        break;

    case 'campeonatos-update':
        require_once 'controller/championship/ChampionshipController.php';
        $controller = new ChampionshipController();
        $controller->Update($_GET['id'],$module); 
        
        break;    
            
    case 'campeonatos-delete':
        require_once 'controller/championship/ChampionshipController.php';
        $controller = new ChampionshipController();
        $controller->Delete($_GET['id'],$module);
        break;   

    case 'times':
        require_once 'controller/team/TeamController.php';
        $controller = new TeamController();
        $controller->List($module);
        break;

    case 'times-insert':
        require_once 'controller/team/TeamController.php';
        $controller = new TeamController();
        $controller->Insert($module);
        break;

    case 'times-update':
        require_once 'controller/team/TeamController.php';
        $controller = new TeamController();
        $controller->Update($_GET['id'],$module); 

        break;
        
    case 'times-delete':
        require_once 'controller/team/TeamController.php';
        $controller = new TeamController();
        $controller->Delete($_GET['id'],$module);
        break;
    
    case 'jogadores':
        require_once 'controller/player/PlayerController.php';
        $controller = new PlayerController();
        $controller->List($module);
        break;

    case 'jogadores-insert':
        require_once 'controller/player/PlayerController.php';
        $controller = new PlayerController();
        $controller->Insert($module);
        break;
        
    case 'jogadores-update':
        require_once 'controller/player/PlayerController.php';
        $controller = new PlayerController();
        $controller->Update($_GET['id'],$module);
        break;
        
    case 'jogadores-delete':
        require_once 'controller/player/PlayerController.php';
        $controller = new PlayerController();
        $controller->Delete($_GET['id'],$module);
        break;
        
    case 'rodadas':
        require_once 'controller/round/RoundController.php';
        $controller = new RoundController();
        $controller->List($module);
        break;    

    case 'rodadas-insert':
        require_once 'controller/round/RoundController.php';
        $controller = new RoundController();
        $controller->Insert($module);
        break;
        
    case 'rodadas-update':
        require_once 'controller/round/RoundController.php';
        $controller = new RoundController();
        $controller->Update($_GET['id'],$module);
        break;    
        
    case 'rodadas-delete':
        require_once 'controller/round/RoundController.php';
        $controller = new RoundController();
        $controller->Delete($_GET['id'],$module);
        break;
            
    case 'partidas':
        require_once 'controller/match/MatchController.php';
        $controller = new MatchController();
        $controller->List($module);
        break;

    case 'partidas-insert':
        require_once 'controller/match/MatchController.php';
        $controller = new MatchController();
        $controller->Insert($module);
        break;

    case 'partidas-update':
        require_once 'controller/match/MatchController.php';
        $controller = new MatchController();
        $controller->Update($_GET['id'],$module);
        break;

    case 'partidas-delete':
        require_once 'controller/match/MatchController.php';
        $controller = new MatchController();
        $controller->Delete($_GET['id'],$module);
        break;
    
    case 'usuarios':
        require_once 'controller/user/UserController.php';
        $controller = new UserController();
        $controller->userList($module);
        break;

    case 'usuario-cadastro':
        require_once 'controller/user/UserController.php';
        $controller = new UserController();
        $controller->registerUser();
        break;    

    case 'usuario-update':
        require_once 'controller/user/UserController.php';
        $controller = new UserController();
        $controller->userUpdate($_GET['id']);
        break;
        
    case 'usuario-delete':
        require_once 'controller/user/UserController.php';
        $controller = new UserController();
        $controller->userDelete($_GET['id']);
        break;
            
    case 'usuario-login':
        require_once 'controller/user/UserController.php';
        $controller = new UserController();
        $controller->loginUser($module);
        break;    

    case 'contatos':
        include 'view/web/contacts.php';
        break;
        
    case 'fju':
        include 'view/web/fju.php';
        break;
    
    case 'web':
        include 'view/web/web.php';
        break;

    default:
        echo "Pagina Não Encontrada";
        break;
}

?>