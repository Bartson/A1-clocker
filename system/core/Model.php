<?php
defined('BASEPATH') or exit('Brak dostpu');

class Model
{
  /**
  * @var object
  */
  protected $db;

  public function __construct()
  {
    $this->db = new Mysqli(HOST, USER, PASSWORD, DB_NAME);
  }

  public function __destruct()
  {
    $this->db->close();
  }
}