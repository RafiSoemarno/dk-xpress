<?php

class Account extends Controller {
  public function index() {
    session_start();
    $data['title'] = 'Account';
    $data['user'] = $this->model('Account_model')->getUserById($_SESSION['activeUser']['user_id']);
    $this->view('template/header', $data);
    $this->view('template/navigation', $data);
    $this->view('account/index', $data);
    $this->view('template/footer');
  }

  public function register() {
    $data['title'] = 'Register';
    $this->view('template/header', $data);
    $this->view('template/navigation', $data);
    $this->view('account/register');
    session_unset();
    $this->view('template/footer');
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
    header('Location: '.BASEURL);
    session_unset();
    exit;
  }
}
