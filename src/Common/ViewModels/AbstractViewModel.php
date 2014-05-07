<?php


namespace Site\Common\ViewModels;

use Phalcon\Mvc\View\Engine\Php as PHPViewEngine;

class AbstractViewModel
{
  const LAYOUT_DEFAULT = 'Default';

  private $_titlePrepend = 'Brand Name!';
  private $_title;

  /**
   * Set Title Tag
   *
   * @param $title
   *
   * @return string
   */
  public function setTitle($title)
  {
    return
      $this->_title = $title;
  }

  /**
   * Get Title Tag
   * @return string
   */
  public function getTitle()
  {
    if(isset($this->_title))
    {
      return $this->_title . ' - ' . $this->_titlePrepend;
    }

    return $this->_titlePrepend;
  }

  /**
   * Return the required Template file (without .phtml)
   * @return null
   */
  public function getTemplate()
  {
    $splitClass = explode('\\', get_called_class());

    return str_replace('ViewModel', '', end($splitClass));
  }

  /**
   * Return the required Layout
   * @return string
   */
  public function getLayout()
  {
    return self::LAYOUT_DEFAULT;
  }

  /**
   * This is a shortcut to the view engine, which provides additional
   * functionality to the views, such as access to the DI etc
   * @return PHPViewEngine
   */
  public function getViewEngine()
  {
    // todo
  }

  /**
   * Sets the footer ViewModel
   * @return FooterViewModel
   */
  public function getFooterViewModel()
  {
    return new FooterViewModel();
  }
}
