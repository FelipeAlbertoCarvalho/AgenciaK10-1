<?php
class Organizacao extends Model {
  private $id;
  private $nome;
  private $email;
  private $senha;
  private $dataCriacao;
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

  public function inserirOrganizacao($id) {
    $sql = "INSERT INTO organizacao (id_endereco, nome, email, senha, dataCriacao, nivel)
              VALUES ($id, '{$this->getNome()}', '{$this->getEmail()}', '{$this->getSenha()}', '{$this->getDataCriacao()}', {$this->getNivel()})";
   
    $this->conn->query($sql);
  }

  public function deletarOrganizacao() {
    $sql = "DELETE FROM organizacao WHERE id = {$this->getId()}";
    
    $this->conn->query($sql);
  }

  public function listarOrganizacao() {
    $rows = array();
    $query = "SELECT organizacao.id, organizacao.id_endereco, organizacao.nome,
                     organizacao.email, organizacao.dataCriacao, endereco.rua,
                     endereco.bairro, endereco.cidade, endereco.numero
              FROM   organizacao, endereco 
              WHERE  organizacao.id_endereco = endereco.id";

    $query = $this->conn->query($query);

    if ($query->rowCount() > 0) {
      return $query->fetchAll();
    }
  }

  public function listarOrganizacaoTime() {
    $rows = array();
    $query = "SELECT * FROM organizacao, endereco
              WHERE organizacao.id_endereco = endereco.id 
                    &&
                    organizacao.nivel = {$this->getNivel()}";

    $query = $this->conn->query($query);

    if ($query->rowCount() > 0) {
      return $query->fetchAll();
    }
  }

  public function updateOrganizacao() {
    $sql = "UPDATE organizacao
            SET nome = '{$this->getNome()}',
                email = '{$this->getEmail()}',
                dataCriacao = '{$this->getDataCriacao()}'
            WHERE 
                id = $this->organizacao->getId()";

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

  public function getSenha() {
    return md5($this->senha);
  }

  public function setSenha($senha) {
    $this->senha = $senha;
  }

  public function getDataCriacao() {
    return $this->dataCriacao;
  }

  public function setDataCriacao($dataCriacao) {
    $this->dataCriacao = $dataCriacao;
  }
}
