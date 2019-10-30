<?php
class Time extends Model {
  private $id;
  private $nome;
  private $data_criacao;
  private $email;
  private $nivel;

  
  public function __construct($tipo_organizacao) {
    parent::__construct();
    if($tipo_organizacao == "campeonato") {
      $this->nivel = 2;
    } else if($tipo_organizacao == "arbitragem") {
      $this->nivel = 3;
    } else if($tipo_organizacao == "time") {
      $this->nivel = 4;
    }
  }

  public function inserirTime($id) {
    $sql = "INSERT INTO time (id_endereco, nome, email, data_criacao, nivel)
              VALUES ($id, '{$this->getNome()}', '{$this->getEmail()}', {$this->getDataCriacao()}', {$this->getNivel()})";
   
    $this->conn->query($sql);
  }

  public function deletarTime() {
    $sql = "DELETE FROM time WHERE id = {$this->getId()}";
    
    $this->conn->query($sql);
  }

  public function listarTime() {
    $rows = array();
    $query = "SELECT time.id, time.id_endereco, time.nome,
                     time.email, time.data_criacao, endereco.rua,
                     endereco.bairro, endereco.cidade, endereco.numero
              FROM   time, endereco 
              WHERE  time.id_endereco = endereco.id";

    $query = $this->conn->query($query);

    if ($query->rowCount() > 0) {
      return $query->fetchAll();
    }
  }

  public function listarTimeUpdate() {
    $rows = array();
    $query = "SELECT * FROM time, endereco
              WHERE time.id_endereco = endereco.id 
                    &&
              time.nivel = {$this->getNivel()}";

    $query = $this->conn->query($query);

    if ($query->rowCount() > 0) {
      return $query->fetchAll();
    }
  }

  public function updateTime() {
    $sql = "UPDATE time
            SET nome = '{$this->getNome()}',
                email = '{$this->getEmail()}',
                data_criacao = '{$this->getDataCriacao()}'
            WHERE 
                id = $this->time->getId()";

    $this->conn->query($sql);
  }

  public function getNivel() {
    return $this->nivel;
  }

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getNome() {
    return $this->nome;
  }

  public function setNome($nome) {
    $this->nome = $nome;
  }

  public function getEmail() {
    return $this->email;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function getDataCriacao() {
    return $this->data_criacao;
  }

  public function setDataCriacao($data_criacao) {
    $this->data_criacao = $data_criacao;
  }
}
