<?php
class UsersController extends Controller {
  protected $banner;
  
  public function __construct() {
    parent::__construct();
    $this->admin = new Admin();
  }

  public function index() {
    $array = array();
    
    if (isset($_POST['email']) && !empty($_POST['email'])) {
      $this->admin->setEmail($_POST['email']);
      $this->admin->setSenha($_POST['senha']);

      if ($this->admin->getLogin()) {
        switch ($_SESSION['nivel']) {
          case 1: $this->loadTemplateAdmin('admin', $array); break;
          case 2: $this->loadTemplateOrganizacao('organizacao', $array); break;
          case 3: $this->loadTemplateAdmin('presidente', $array); break;
          case 4: $this->loadTemplateAdmin('colaborador', $array); break;
        }
      } else {        
        header('Location: ' . BASE_URL);
      }
    } elseif ($this->admin->isLogged()) {
      switch ($_SESSION['nivel']) {
        case 1: $this->loadTemplateAdmin('admin', $array); break;
        case 2: $this->loadTemplateOrganizacao('organizacao', $array); break;
        case 3: $this->loadTemplateAdmin('presidente', $array); break;
        case 4: $this->loadTemplateAdmin('colaborador', $array); break;
      }
    } else {
      header('Location: ' . BASE_URL);
    }
  }

  public function logout() {
    unset($_SESSION['nivel']); 
    header('Location: ' . BASE_URL);
  }
}