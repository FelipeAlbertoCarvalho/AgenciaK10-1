<?php
class Users extends Model {
  private $id;
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
    return $this->conn->lastInsertId();
  }

  public function deletarUsuario() {
  $sql = "DELETE FROM users WHERE id = {$this->getId()};";

    $this->conn->query($sql);
  }

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
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