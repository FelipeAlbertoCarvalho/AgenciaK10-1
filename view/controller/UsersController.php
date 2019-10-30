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

      if ($this->admin->getLogin()) { //caso acrescente mais, e queira mudar layout, redirecione aqui tambem
        switch ($_SESSION['nivel']) {
          case 1: $this->loadTemplateAdmin('admin', $array); break;
          case 2: $this->loadTemplateOrganizacaoCampeonato('organizacao-campeonato', $array); break;
          case 3: $this->loadTemplateOrganizacaoArbitragem('organizacao-arbitragem', $array); break;
          case 4: $this->loadTemplateOrganizacaoTime('organizacao-time', $array); break;
          case 5: $this->loadTemplateAdmin('presidente', $array); break; //maybe dont need
          case 6: $this->loadTemplateAdmin('colaborador', $array); break;
          //vai mais alguns aqui como organizacao-arbitragem, organizacao-time
        }
      } else {        
        header('Location: ' . BASE_URL);
      }
    } elseif ($this->admin->isLogged()) {
      switch ($_SESSION['nivel']) {
        case 1: $this->loadTemplateAdmin('admin', $array); break;
          case 2: $this->loadTemplateOrganizacaoCampeonato('organizacao-campeonato', $array); break;
          case 3: $this->loadTemplateOrganizacaoArbitragem('organizacao-arbitragem', $array); break;
          case 4: $this->loadTemplateOrganizacaoTime('organizacao-time', $array); break;
          case 5: $this->loadTemplateAdmin('presidente', $array); break; //maybe dont need
          case 6: $this->loadTemplateAdmin('colaborador', $array); break;
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