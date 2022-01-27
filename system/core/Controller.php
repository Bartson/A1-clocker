<?php
defined('BASEPATH') or exit('Brak dostpu');

abstract class Controller
{
  /**
   * @var object
   */
  private $view;

  public function render($controller_name = '', $params = array())
  {
    $this->view = new View($controller_name, $params);
  }

  abstract public function exec();
}