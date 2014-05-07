<?php


namespace Site\Home\Controllers;

use Phalcon\Exception;
use Site\Common\Controllers\AbstractController;
use Site\Home\ViewModels\IndexViewModel;

class IndexController extends AbstractController
{
  public function indexAction()
  {
    $viewModel = new IndexViewModel();
    $viewModel->welcomeMessage = 'Welcome to the home page';
    return $this->setView($viewModel);

  }
}
