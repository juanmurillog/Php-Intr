<?php

ini_set('display_errors', 1);
ini_set('display_starup_error', 1);
error_reporting(E_ALL);

 require_once '../vendor/autoload.php';
 use Illuminate\Database\Capsule\Manager as Capsule;
 use Aura\Router\RouterContainer;
 use Controller\{IndexController,JobsController};

    
$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'cursophp',
    'username'  => 'root',
    'password'  => '',
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
$map->get('index', '/app/', [
    'controller' => 'Controller\IndexController',
    'action' => 'indexAction'
]);
$map->get('addJob', '/app/jobs/add', [
    'controller' => 'Controller\JobsController',
    'action' => 'getAddJobAction'
]);
$map->post('saveJobs', '/app/jobs/add', [
    'controller' => 'Controller\JobsController',
    'action' => 'getAddJobAction'
]);
$map->get('addProject', '/app/projects/add', [
    'controller' => 'Controller\ProjectsController',
    'action' => 'getAddProject'
]);
$map->post('saveProject', '/app/projects/add', [
    'controller' => 'Controller\ProjectsController',
    'action' => 'getAddProject'
]);

function printElement($job)
   {

   //    if($job->visible == false)
     // {
       //         return;
      //}
              echo ' <li class="work-position">';
              echo '<h5> '. $job->title.'</h5>';
              echo '<p> '. $job->description.'</p>';
              echo '<p> '.$job->getDuration() .'</p>';
              echo '<strong>Achievements:</strong>';
             // echo  '<br>'.$totalMonths;
              echo '<ul>';
              echo  '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
              echo  '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
              echo  '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
              echo'</ul>';
              echo'</li>';
              

   }

$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);

if(!$route)
{
    echo 'No route';
}
else
{

   // require $route->handler;
   
      $handlerData = $route->handler;
      $controllerName = $handlerData['controller'];
      $actionName = $handlerData['action'];
   
             
      $controller = new $controllerName;
      $response = $controller->$actionName($request);

     
        echo $response->getBody();
     
     

   //  $controller->$actionName();
     
}      





?>