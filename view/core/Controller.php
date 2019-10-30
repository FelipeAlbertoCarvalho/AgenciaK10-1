<?php
class Controller {
  public function __construct() {}

  public function loadTemplateHome($view, $datas = array()) {
    require_once 'view/template.php';
  }

  public function loadTemplateAdmin($view, $datas = array()) {
    require_once 'view/templateAdmin.php';
  }

  public function loadTemplateOrganizacaoCampeonato($view, $datas = array()) {
    require_once 'view/templateOrganizacao.php';
  }

  public function loadTemplateOrganizacaoArbitragem($view, $datas = array()) {
    require_once 'view/templateOrganizacao.php';
  }

  public function loadTemplateOrganizacaoTime($view, $datas = array()) {
    require_once 'view/templateOrganizacao.php';
  }

  public function loadView($view, $datas = array()) {
    extract($datas);
    require_once 'view/' . $view . '.php';
  }
}