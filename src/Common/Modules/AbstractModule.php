<?php
/**
 *
 */

namespace Site\Common\Modules;

use Phalcon\DI;
use Phalcon\Mvc\View;

abstract class AbstractModule
{

  public function __construct()
  {
    // Define the Application name, so we know where the controllers are
    $moduleClassNames = explode('\\', get_called_class());
    define('APP_NAME', $moduleClassNames[1]);
  }

  public function registerAutoloaders() { }

  public function registerServices($di)
  {

    // Set the controllers namespace for this application
    $di['dispatcher']->setDefaultNamespace(
      "Site\\" . APP_NAME . "\\Controllers"
    );

    // Set the Layout & Views dir
    $di['view'] = function ()
    {

      $view = new View();

      // Templates dir
      $view->setViewsDir(APPS_DIR . '/' . APP_NAME . '/Views/');

      // From the ViewsDir
      $view->setLayoutsDir('../../Common/Layouts/');

      return $view;
    };
  }
}
