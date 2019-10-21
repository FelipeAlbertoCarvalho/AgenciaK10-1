<?php
class Users extends Model {
  private $email;
  private $senha;
  private $nivel;
  
  public function __construct() {
    parent::__construct();
  }

  public function inserirUsuario() {
    $sql = "INSERT INTO users (email, senha, nivel)
            VALUES ('{$this->getEmail()}', '{$this->getSenha()}', {$this->getNivel()})";

    $this->conn->query($sql);
  }

  public function getEmail() {
    return $this->email;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function getSenha() {
    return md5($this->senha);
  }

  public function setSenha($senha) {
    $this->senha = $senha;
  }

  public function getNivel() {
    return $this->nivel;
  }

  public function setNivel($nivel) {
    $this->nivel = $nivel;
  }
}