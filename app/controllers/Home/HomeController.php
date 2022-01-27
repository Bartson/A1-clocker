<?php
defined('BASEPATH') or exit('Brak dostpu');
require_once ROOT . '/php-mvc/app/models/Home/HomeModel.php';
/**
 * Home controller
 */
class HomeController extends Controller
{
  public $name;
  
  public $model;

  public function __construct()
  {
    $this->model = new HomeModel();
    $this->name = 'Strona powitalna';
  }

  public function exec()
  {
    $this->entries();
  }

  public function show()
  {
    $params = array('name' => $this->name);
    $this->render(__CLASS__, $params); 
  }

  public function entries()
  {
    $res = $this->model->getEntries();
    $this->name = $res['desciption'];
    $this->show();
  }


}