<?php

class Account extends Controller {
  public function index() {
    $data['title'] = 'Account';
    // $data['delivery'] = $this->model('Account_model')->getData();
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

  public function login() {
    session_start();
    if($user = $this->model('Account_model')->userAuth()) {
      $_SESSION['activeUser'] = $user;
      header('Location: ../');
      exit;
    } else {
      $_SESSION['loginError'] = 'Invalid email or password.';
      header('Location: ../');
      exit;
    }
  }

  public function logout() {
    session_start();
    header('Location: ../');
    session_unset();
    exit;
  }
}
