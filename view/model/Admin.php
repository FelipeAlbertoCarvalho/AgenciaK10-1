<?php
class Admin extends Model {
  
  private $email;
  private $senha;

  public function isLogged() {
    if (isset($_SESSION['nivel']) && !empty($_SESSION['nivel'])) {
      return true;
    } else {
      return false;
    }
  }

  public function getLogin() {
    $sql = "SELECT * 
            FROM users 
            WHERE email='{$this->getEmail()}'
            AND senha='{$this->getSenha()}'";
    
    $sql = $this->conn->query($sql);
    
    if ($sql->rowCount() > 0) {
      $sql = $sql->fetch();
      $_SESSION['nivel'] = $sql['nivel'];
      return true;
    } else {
      return false;
    }
  }

  public function getEmail() {
    return $this->email;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function setSenha($senha) {
    $this->senha = $senha;
  }

  public function getSenha() {
    return md5($this->senha);
  }
}