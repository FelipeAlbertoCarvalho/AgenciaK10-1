<?php
class ColaboradorController extends Controller {
  public function colaborador() {
    if ($this->admin->isLogged()) {
      $this->loadTemplateAdmin('colaborador', $array = array());
    } else {
      header('Location: ' . BASE_URL);
    }
  }
}