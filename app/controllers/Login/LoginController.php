<?php
defined('BASEPATH') or exit('Brak dostpu');

require_once ROOT . FOLDER_PATH .'/app/models/Login/LoginModel.php';
require_once LIBS_ROUTE .'Session.php';

/**
* Login controller
*/
class LoginController extends Controller
{
  private $model;

  private $session;

  public function __construct()
  {
    $this->model = new LoginModel();
    $this->session = new Session();
  }

  public function exec()
  {
    $this->render(__CLASS__);
  }

  public function signin($request_params)
  {
    if($this->verify($request_params))
      return $this->renderErrorMessage('Dane są nieprawidłowe');

    $result = $this->model->signIn($request_params['email']);

    if(!$result->num_rows)
      return $this->renderErrorMessage("Nie znaleziono {$request_params['email']}");

    $result = $result->fetch_object();

    if(!password_verify($request_params['password'], $result->password))
      return $this->renderErrorMessage('Hasło jest niepoprawne');

    $this->session->init();
    $this->session->add('email', $result->email);
    header('location: /php-mvc/main');
  }

  private function verify($request_params)
  {
    return empty($request_params['email']) OR empty($request_params['password']);
  }

  private function renderErrorMessage($message)
  {
    $params = array('error_message' => $message);
    $this->render(__CLASS__, $params);
  }

}