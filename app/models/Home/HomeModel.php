<?php
defined('BASEPATH') or exit('Brak dostpu');
/**
 * Home Model
 */
class HomeModel extends Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function getEntries()
  {
    return $this->db->query("SELECT * FROM `timeline_entries`")->fetch_array(MYSQLI_ASSOC);
  }

}