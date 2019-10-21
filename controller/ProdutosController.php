<?php
class ProdutosController extends Controller {
  protected $admin;
  
  public function __construct(){
    $this->admin = new Admin();
  }

  public function index() {
    $array = array();
    if ($this->admin->isLogged()) {
      $this->loadTemplateAdmin('produtos', $array = array());
    } else {
      header('Location: ' . BASE_URL);
    }
  }
}