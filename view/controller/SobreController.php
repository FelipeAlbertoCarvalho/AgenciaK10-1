<?php
class SobreController extends Controller {
  protected $admin;
  
  public function __construct(){
    $this->admin = new Admin();
  }

  public function index() {
    $array = array();
    if ($this->admin->isLogged()) {
      $this->loadTemplateAdmin('sobre', $array = array());
    } else {
      header('Location: ' . BASE_URL);
    }
  }
}