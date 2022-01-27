<?php
defined('BASEPATH') or exit('Brak dostpu');

require_once ROOT . FOLDER_PATH .'/app/models/Login/LoginModel.php';
require_once LIBS_ROUTE .'Session.php';

/**
* Main controller
*/
class MainController extends Controller
{
  private $session;

  public function __construct()
  {
    $this->session = new Session();
    $this->session->init();
    if($this->session->getStatus() === 1 || empty($this->session->get('email')))
      exit('Brak dostępu');
  }

  public function exec()
  {
    $params = array('email' => $this->session->get('email'));
    $this->render(__CLASS__, $params);
  }

  public function logout()
  {
    $this->session->close();
    header('location: /php-mvc/login');
  }

}
