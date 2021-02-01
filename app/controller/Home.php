<?php
  class Home extends Controller {
    public function index() {
      $title = 'Donkey Express';
      $view = ['modal/login', 'home/index'];
      $this->fullview($title, $view);
    }
  }
?>
