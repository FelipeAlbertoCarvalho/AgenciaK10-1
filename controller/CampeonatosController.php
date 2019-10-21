<?php
class CampeonatosController extends Controller {
  public function index() {
    $this->loadTemplateHome('Campeonatos', $array = array());
  }
}