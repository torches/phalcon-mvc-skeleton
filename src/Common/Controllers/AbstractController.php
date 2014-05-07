<?php


namespace Site\Common\Controllers;

use Phalcon\Mvc\Controller as PhalconMVCController;
use Phalcon\Mvc\View as PhalconMVCView;
use Phalcon\Tag;
use Site\Common\ViewModels\AbstractViewModel;

class AbstractController extends PhalconMVCController
{
  public function setView(AbstractViewModel $view)
  {
    // Set the Main Layout
    $this->view->setLayout($view->getLayout());

    // Set the View Phtml
    $template = $view->getTemplate();
    if($template)
    {
      $template = '../../' . APP_NAME . '/Views/' . $template;

      // Do not render anything after the ViewModel template
      $this->view->setRenderLevel(PhalconMVCView::LEVEL_AFTER_TEMPLATE);

      // Set the ViewModel template
      $this->view->setTemplateBefore($template);
    }

    // Send Main View, you could do the same with a sidebar etc.
    $this->view->setVar('viewModel', $view);

    // Set the Footer View
    $this->view->setVar('footerViewModel', $view->getFooterViewModel());

    // Set the title
    Tag::setTitle($view->getTitle());

    return $this;
  }
}
