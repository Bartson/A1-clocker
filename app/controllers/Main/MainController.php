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
  }

  public function exec()
  {
  }

  public function logout()
  {
  }

}
