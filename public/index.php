<?php
use Phalcon\DI\FactoryDefault as DefaultDI;
use Phalcon\Mvc\Router;

/**
 * Skeleton Site
 * https://github.com/torches/phalcon-mvc-skeleton
 */

// Autoloader
$loader = include_once dirname(__DIR__) . '/vendor/autoload.php';

// Application dir
define('APPS_DIR', dirname(__DIR__) . '/src');

// Error reporting for development environment
if(getenv('ENV') == 'development')
{
  error_reporting(E_ALL);
}

try
{
  $di = new DefaultDI();

  /*
   * Default View service, overwritten in the AbstractModule
   */
  $di['view'] = function ()
  {
    return new \Phalcon\Mvc\View();
  };


  // Set up routes
  $di['router'] = function ()
  {
    $router = new Router(false);

    // Add home route
    $router->add(
      '/',
      array(
        'module' => 'Home',
        'controller' => 'Index',
        'action' => 'Index'
      )
    );

    return $router;
  };

  // Store DI
  $app = new \Phalcon\Mvc\Application();
  $app->setDI($di);

  /*
   * Register application modules
   */
  $app->registerModules(
    [
      'Home'    => [
        'className' => 'Site\Home\Module',
        'path'      => APPS_DIR . '/Home/Module.php'
      ]
    ]
  );

  echo $app->handle()->getContent();
}
catch(Phalcon\Exception $e)
{
  echo $e->getMessage();
}
catch(PDOException $e)
{
  echo $e->getMessage();
}
