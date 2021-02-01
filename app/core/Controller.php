<?php
  class Controller {
    // Includes specified view
    protected function view($view, $data = []) {
      require_once 'app/view/'.$view.'.php';
    }

    // Includes a complete page
    protected function fullview($title, $view, $data = []) {
      $this->header($title, $data);
      if(is_array($view)) {
        foreach($view as $view) {
          $this->view($view, $data);
        }
      } else {
        $this->view($view, $data);
      }
      $this->footer();
    }

    // Includes specificed model
    protected function model($model) {
      require_once 'app/model/'.$model.'.php';
      return new $model;
    }

    // Includes header template along with navigation
    protected function header($title, $data = []) {
      require_once 'app/view/template/header.php';
      $this->navigation($data);
    }

    // Includes header template only
    protected function headeronly($title) {
      require_once 'app/view/template/header.php';
    }

    // Includes footer template
    protected function footer() {
      require_once 'app/view/template/footer.php';
    }

    // Includes navigation template (for header only)
    private function navigation($data = []) {
      require_once 'app/view/template/navigation.php';
    }
  }
?>
