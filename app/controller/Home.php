<?php

class Home extends Controller {
  public function index() {
    $data['title'] = 'Home';
    $this->view('template/header', $data);
    $this->view('template/navigation', $data);
    $this->view('home/index', $data);
    $this->view('template/footer');
  }
}
