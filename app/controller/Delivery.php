<?php
  class Delivery extends Controller {
    public function index() {
      $title = 'Delivery | Donkey Express';
      $view = ['modal/neworder', 'delivery/index'];
      $data['delivery'] = $this->model('Delivery_model')->getDeliveryByUser();
      $this->fullview($title, $view, $data);
    }

    public function newOrder() {
      $this->model('Delivery_model')->addOrder();
      header('Location: '.BASEURL.'/delivery');
      exit;
    }
  }
?>
