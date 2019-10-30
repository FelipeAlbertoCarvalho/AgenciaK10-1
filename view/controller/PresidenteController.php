<?php
class PresidenteController extends Controller {
  public function __construct(){
    $this->admin = new Admin();
  }
  
  public function index() {

  } 

  public function adicionar() {
    $array = array();
    
    if ($this->admin->isLogged()) {
      $this->loadTemplateOrganizacao('formPresidente', $array);
    } else {
      header('Location: ' . BASE_URL); 
    }
  }
}