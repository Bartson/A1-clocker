<?php
class Session
{
  public function init()
  {
    session_start();
  }

  /**
   * @param string $key la llave del array de sesión
   * @param string $value el valor para el elemento de la sesión
   */
  public function add($key, $value)
  {
    $_SESSION[$key] = $value;
  }

  /**
   * @param string $key la llave del array de sesión
   * @return string el valor del array de sesión si tiene valor
   */
  public function get($key)
  {
    return !empty($_SESSION[$key]) ? $_SESSION[$key] : null;
  }

  /**
   * @return el array de sesión completo
   */
  public function getAll()
  {
    return $_SESSION;
  }

  /**
   * @param string $key la llave del array de sesión
   */
  public function remove($key)
  {
    if(!empty($_SESSION[$key]))
      unset($_SESSION[$key]);
  }

  public function close()
  {
    session_unset();
    session_destroy();
  }

  /**
   * @return string el estatus de la sesión
   */
  public function getStatus()
  {
    return session_status();
  }

}