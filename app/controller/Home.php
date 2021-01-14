<?php

class Home extends Controller {
  public function index() {
    $data['title'] = 'Home';
    $data['delivery'] = $this->model('Delivery_model')->getData();
    $this->view('template/header', $data);
    $this->view('home/index', $data);
    $this->view('template/footer');
  }
}
