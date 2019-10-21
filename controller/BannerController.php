<?php
class BannerController extends Controller {
  protected $admin;
  protected $banner;

  public function __construct() {
    $this->banner = new Banner();
    $this->admin = new Admin();
  }

  public function deletar() {
    $array = array();
    
    if ($this->admin->isLogged()) {
      $array['imgBanner'] = $this->banner->listarBanner();

      if (isset($_POST['id']) && !empty($_POST['id'])) {
        $this->banner->setIdImg($_POST['id']);
        $this->banner->deleteBanner();
        header('Location: ' . BASE_URL . 'banner/deletar'); 
      } else {
        $this->loadTemplateAdmin('Deletar-banner', $array);
      }
    } else {
      header('Location: ' . BASE_URL); 
    }
  }

  public function adicionar() {
    $array = array();
    if ($this->admin->isLogged()) {
      if (isset($_FILES['arquivo']) && !empty($_FILES['arquivo']['tmp_name'])) {
        $formatos = array('image/jpg', 'image/jpeg', 'image/png');

        if (in_array($_FILES['arquivo']['type'], $formatos)) {
          $this->banner->setUrl(md5(time().rand(0, 999)) . '.jpg');
          $this->banner->inserirBanner();
          $this->loadTemplateAdmin('Adicionar-banner', $array);
        } else {
          $this->loadTemplateAdmin('Adicionar-banner', $array);
        }
      } else {
        $this->loadTemplateAdmin('Adicionar-banner', $array);
      }
    } else {
      header('Location: ' . BASE_URL);
    }
  }

  public function alterar() {
    $array = array();
    
    if ($this->admin->isLogged()) {
      $array['imgBanner'] = $this->banner->listarBanner();

      if (count($array['imgBanner']) > 0){
        if (!empty($_FILES['arquivo'])) {

          if (isset($_POST['id']) && !empty($_POST['id'])) {
            $id_img['id'] = $_POST['id'];
            $this->banner->setIdImg($id_img['id']);

            if (isset($_FILES['arquivo']) && !empty($_FILES['arquivo']['tmp_name'])) {
              $formatos = array('image/jpeg', 'image/jpg', 'image/png');
            
              if (in_array($_FILES['arquivo']['type'], $formatos)) {
                $this->banner->setUrl(md5(time().rand(0, 999)) . '.jpg');
                $this->banner->updateBanner();
                $this->loadTemplateAdmin('alterar-banner', $array);
              } 
            }
            $this->loadTemplateAdmin('alterar', $array);
          }
        } else {
          if (isset($_POST['id']) && !empty($_POST['id'])){
            $this->banner->setIdImg($_POST['id']);
            $array['id'] = $this->banner->getIdImg();
            $this->loadTemplateAdmin('alterar', $array);
          } else {
            $this->loadTemplateAdmin('alterar-banner', $array);
          }
        }
      } else {
        echo "Sem registro.";
      }
    } else {
      header('Location: ' . BASE_URL);
    }
  }
}