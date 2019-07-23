<?php

ini_set('display_errors', 1);
ini_set('display_starup_error', 1);
error_reporting(E_ALL);

 require_once '../vendor/autoload.php';
 use Illuminate\Database\Capsule\Manager as Capsule;
 use Aura\Router\RouterContainer;
 

 session_start();


$dotenv = Dotenv\Dotenv::create(__DIR__. '/..');
$dotenv->load();

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => getenv('DB_DRIVER'),
    'host'      => getenv('DB_HOST'),
    'database'  => getenv('DB_NAME'),
    'username'  => getenv('DB_USER'),
    'password'  => getenv('DB_PASS'),
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

//$route = isset($_GET['route']) ? $_GET['route'] : '/';
$routerContainer = new RouterContainer();

$map = $routerContainer->getMap();
$map->get('index', '/', [
    'controller' => 'Controller\IndexController',
    'action' => 'indexAction',
    'auth' => true
]);
$map->get('addJob', '/jobs/add', [
    'controller' => 'Controller\JobsController',
    'action' => 'getAddJobAction',
    'auth' => true
]);
$map->post('saveJobs', '/jobs/add', [
    'controller' => 'Controller\JobsController',
    'action' => 'getAddJobAction'
]);
$map->get('addProject', '/projects/add', [
    'controller' => 'Controller\ProjectsController',
    'action' => 'getAddProject',
    'auth' => true
]);
$map->post('saveProject', '/projects/add', [
    'controller' => 'Controller\ProjectsController',
    'action' => 'getAddProject'
]);
$map->get('addUsers', '/users/add', [
    'controller' => 'Controller\UsersController',
    'action' => 'userAction',
    'auth' => true
]);
$map->post('saveUsers', '/users/add', [
    'controller' => 'Controller\UsersController',
    'action' => 'userAction'
]);
$map->get('loginUsers', '/login', [
    'controller' => 'Controller\AuthController',
    'action' => 'getLogin'
]);
$map->post('auth', '/auth', [
    'controller' => 'Controller\AuthController',
    'action' => 'postLogin'
]);
$map->get('logoutUsers', '/logout', [
    'controller' => 'Controller\AuthController',
    'action' => 'getLogout'
]);
$map->get('admin', '/admin', [
    'controller' => 'Controller\AdminController',
    'action' => 'getIndex',
    'auth' => true
]);



$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);

if(!$route)
{
    echo 'No sirve';
}
else
{

   // require $route->handler;
   
      $handlerData = $route->handler;
      $controllerName = $handlerData['controller'];
      $actionName = $handlerData['action'];
      $needsAuth =$handlerData['auth'] ?? false;
          
       $sessionUserId = $_SESSION['userId'] ?? null;
          if($needsAuth && !$sessionUserId)  
          {
            $controllerName ='Controller\AuthController';
            $actionName = 'getLogout';
          } 
      $controller = new $controllerName;
      $response = $controller->$actionName($request);

    //  var_dump(header(sprintf('%s:%s', $name, $value), false));

       foreach($response->getHeaders() as $name => $values) {
            # code...
            foreach($values as $value) {
                # code...
                header(sprintf('%s:%s', $name, $value), false);
            }
        }
     
        http_response_code($response->getStatusCode());
    
        echo $response->getBody();
      
     
     

   //  $controller->$actionName();
     
}      





?>