<?php
class Banner extends Model {
  private $url;
  private $idImg;

  public function deleteBanner() {
    $sql = "DELETE FROM banner 
            WHERE id = {$this->getIdImg()}";
    echo $sql;

    $this->conn->query($sql);
  }

  public function inserirBanner() {
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'assets/uploadbanner/' . $this->getUrl());
    $sql = "INSERT INTO banner (url) 
            VALUES ('{$this->getUrl()}')";

    $this->conn->query($sql);
  }

  public function listarBanner() {
    $rows = array();
    $query = "SELECT * FROM banner";
    $query = $this->conn->query($query);

    if ($query->rowCount() > 0) {
      return $query->fetchAll();
    }
  }

  public function updateBanner() {
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'assets/uploadbanner/' . $this->getUrl());
    $sql = "UPDATE banner 
            SET url = '{$this->getUrl()}' 
            WHERE id={$this->getIdImg()}";
    
    $sql = $this->conn->query($sql); 
  }
  
  public function getUrl() {
    return $this->url;
  }

  public function setUrl($url) {
    $this->url = $url;
  }

  public function getIdImg() {
    return $this->idImg;
  }

  public function setIdImg($idImg) {
    $this->idImg = $idImg;
  }
}
