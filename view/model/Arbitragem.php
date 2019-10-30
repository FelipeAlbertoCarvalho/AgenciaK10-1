<?php
class Arbitragem extends Model {
  private $id;
  private $nome;
  private $data_criacao;
  private $email;
  private $nivel;
  
  
  public function __construct() {
    parent::__construct();
    
    $this->nivel = 3;
  }

  public function inserirArbitragem($id_endereco) {
    $sql = "INSERT INTO arbitragem (id_endereco, nome, data_criacao,  email)
              VALUES ($id_endereco, '{$this->getNome()}', '{$this->getDataCriacao()}', '{$this->getEmail()}')";
   
    $this->conn->query($sql);
    return $this->conn->lastInsertId();
  }

  public function deletarArbitragem() {
    $sql = "DELETE FROM arbitragem WHERE id = {$this->getId()}";
    
    $this->conn->query($sql);
  }

  public function listarArbitragem() {
    $rows = array();
    $query = "SELECT arbitragem.id, arbitragem.id_endereco, arbitragem.nome,
                     arbitragem.email, arbitragem.data_criacao, endereco.rua,
                     endereco.bairro, endereco.cidade, endereco.numero
              FROM   arbitragem, endereco 
              WHERE  arbitragem.id_endereco = endereco.id";

    $query = $this->conn->query($query);

    if ($query->rowCount() > 0) {
      return $query->fetchAll();
    }
  }

  public function listarArbitragemUpdate() {
    $rows = array();
    $query = "SELECT * FROM arbitragem, endereco
              WHERE arbitragem.id_endereco = endereco.id 
                    &&
                    arbitragem.nivel = {$this->getNivel()}";

    $query = $this->conn->query($query);

    if ($query->rowCount() > 0) {
      return $query->fetchAll();
    }
  }

  public function updateArbitragem() {
    $sql = "UPDATE arbitragem
            SET nome = '{$this->getNome()}',
                email = '{$this->getEmail()}',
                data_criacao = '{$this->getDataCriacao()}'
            WHERE 
                id = $this->arbitragem->getId()";

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
