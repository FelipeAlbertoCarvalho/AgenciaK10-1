<?php 
  class Pessoa_time extends Model {
    private $id;
    private $nome;
    private $email;
    private $descricao;
    private $nascimento;
    private $rg;
    private $cpf;
    private $cnpj;
    private $nivel;


    public function inserirPessoaTime() {
      $sql = "INSERT INTO pessoa_time (id_endereco, nome, email, descricao, nascimento, rg, cpf, cnpj, nivel)
                VALUES ($id, '{$this->getNome()}', '{$this->getEmail()}', 
                '{$this->getDescricao()}', '{$this->getNascimento()}', 
                {$this->getRg()}, {$this->getCpf()}, {$this->getCnpj()},
                {$this->getNivel()})";
      
      $this->conn->query($sql);

      return $this->conn->lastInsertId();
    }

    public function getId() {
      return $this->id;
    }

    public function setId($id) {
      $this->id = $id;
    }
    
    public function getNome() {
      $this->nome = $nome;
    }

    public function setNome($nome) {
      return $this->nome;
    }

    public function getEmail() {
      return $this->email;
    }

    public function setEmail($email) {
      $this->email = $email;
    }
    
    public function getDescricao() {
      return $this->descricao;
    }

    public function setDescricao($descricao) {
      $this->descricao = $descricao;
    }

    public function getNascimento() {
      return $this->nascimento;
    }

    public function setNascimento($nascimento) {
      return $this->nascimento;
    }

    public function getRg() {
      return $this->rg;
    }

    public function setRg($rg) {
      $this->rg = $rg;
    }

    public function getCpf() {
      return $this->cpf;
    }

    public function setCpf($cpf) {
      $this->cpf = $cpf;
    }
    
    public function getCnpj() {
      return $this->cnpj;
    }

    public function setCnpj($cnpj) {
      $this->cnpj = $cnpj;
    }

    public function getNivel() {
      return $this->nivel;
    }

    public function setNivel($nivel) {
      $this->nivel = $nivel;
    }

  }
  ?>