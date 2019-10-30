<?php
class HomeController extends Controller {
  private $admin;

  public function __construct() {
    parent:: __construct();
    $this->admin = new Admin();

    if (!$this->admin->isLogged()) {
      header('Location: ');
    } 
  }

  public function index() {
    $array = array();
    
    if ($this->admin->isLogged()) {
      $array['nivel'] = $_SESSION['nivel'];
    } else {
      $array['nivel'] = "";
    }
    
    $banner = new Banner();
    
    $array['banner'] = $banner->listarBanner();
    $this->loadTemplateHome('AgenciaK10', $array);
  }
}