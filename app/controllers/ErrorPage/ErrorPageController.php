<?php
defined('BASEPATH') or exit('Brak dostpu');

class ErrorPageController extends Controller
{
  public $path_init;

  public function __construct()
  {
    $this->path_init = FOLDER_PATH;
  }
  
  public function exec()
  {
    $this->render(__class__, array('path_init' => $this->path_init));
  }
}