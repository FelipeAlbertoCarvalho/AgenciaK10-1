<?php
class Endereco extends Model {
  private $id;
  private $rua;
  private $numero;
  private $bairro;
  private $cidade;

  public function inserirEndereco() {
    $sql = "INSERT INTO endereco (rua, numero, bairro, cidade)
            VALUES ('{$this->getRua()}', {$this->getNumero()}, '{$this->getBairro()}', '{$this->getCidade()}')";
    
    $this->conn->query($sql);
    return $this->conn->lastInsertId();
  }

  public function deletarEndereco() {
    $sql = "DELETE FROM endereco WHERE id = {$this->getId()}";

    $this->conn->query($sql);
  }

  public function updateEndereco() {
    $sql = "UPDATE endereço
            SET rua = '{$this->getRua()}',
                numero = '{$this->getNumero()}',
                cidade = '{$this->getCidade()}'
            WHERE id = '{this->getId()}'";
    
    $this->conn->query($sql);
  }

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getRua() {
    return $this->rua;
  }

  public function setRua($rua) {
    $this->rua = $rua;
  }

  public function getNumero() {
    return $this->numero;
  }

  public function setNumero($numero) {
    $this->numero = $numero;
  }

  public function getBairro() {
    return $this->bairro;
  }

  public function setBairro($bairro) {
    $this->bairro = $bairro;
  }

  public function getCidade() {
    return $this->cidade;
  }

  public function setCidade($cidade) {
    $this->cidade = $cidade;
  }
}
   