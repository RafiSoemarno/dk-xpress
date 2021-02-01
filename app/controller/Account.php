<?php
  class Account extends Controller {
    public function index() {
      session_start();
      $title = 'Account | Donkey Express';
      $view = 'account/index';
      $data['user'] = $this->model('Account_model')->getUserById($_SESSION['activeUser']);
      $this->fullview($title, $view, $data);
    }

    public function register() {
      $title = 'Register | Donkey Express';
      $view = 'account/register';
      $this->fullview($title, $view);
      session_unset();
    }

    public function newAcc() {
      $this->model('Account_model')->newUser();
      header('Location: '.BASEURL);
      exit;
    }

    public function login() {
      session_start();
      if($user = $this->model('Account_model')->userAuth()) {
        $_SESSION['activeUser'] = $user;
        unset($_SESSION['loginError']);
        header('Location: '.BASEURL);
        exit;
      } else {
        $_SESSION['loginError'] = 'Invalid email or password.';
        header('Location: '.BASEURL);
        exit;
      }
    }

    public function logout() {
      session_start();
      session_unset();
      header('Location: '.BASEURL);
      exit;
    }
  }
?>
