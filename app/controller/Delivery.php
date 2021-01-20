<?php

class Delivery extends Controller {
  public function index() {
    $data['title'] = 'Delivery';
    $data['delivery'] = $this->model('Delivery_model')->getDeliveryByUser();
    $this->view('template/header', $data);
    $this->view('template/navigation', $data);
    $this->view('delivery/index', $data);
    $this->view('template/footer');
  }

  public function newOrder() {
    $this->model('Delivery_model')->addOrder();
    header('Location: '.BASEURL.'/delivery');
    exit;
  }
}
