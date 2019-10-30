<?php 
class OrganizacaoController extends Controller {
  protected $admin;
  protected $organizacao;
  protected $endereco;
//  protected $tipo_organizacao;

  public function __construct(){
    $this->admin = new Admin();
    $this->organizacao = new Organizacao("");
    $this->endereco = new Endereco();
//    $this->tipo_organizacao = new TipoOrganizacao();
  }

  public function index() {
    
  }

  public function adicionar() {
    if ($this->admin->isLogged()) {
      $this->loadTemplateAdmin('formOrganizacao', $array = array());
    } else {
      header('Location: ' . BASE_URL);
    }
  }

  public function cadastrar() {
    if (isset($_POST['nome']) && !empty(($_POST['nome']))) {
      $users = new Users();
      $organizador = new Organizacao(($_POST['organizacao']));
      $endereco = new Endereco();
//      $tipo_organizacao = new TipoOrganizacao();

      $organizador->setNome(addslashes($_POST['nome']));
      $organizador->setEmail(addslashes($_POST['email']));
      $organizador->setSenha(addslashes($_POST['senha']));
      $organizador->setDataCriacao(addslashes($_POST['data_criacao']));
      
      $endereco->setRua(addslashes($_POST['rua']));
      $endereco->setNumero(addslashes($_POST['numero']));
      $endereco->setBairro(addslashes($_POST['bairro']));
      $endereco->setCidade(addslashes($_POST['cidade']));

      $users->setEmail(addslashes($_POST['email']));
      $users->setSenha(addslashes($_POST['senha']));
      $users->setNivel($organizador->getNivel());

      if ($id = $endereco->inserirEndereco()) {
        $organizador->inserirOrganizacao($id);
        $users->inserirUsuario();
        echo "Cadastrado";
        $this->loadTemplateAdmin('formOrganizacao', $array = array());
      } else {
        echo "fudeu";
      }
    } else {
      echo "nem entrou no  1 if";
    }
  }

  public function deletar() {
    $array = array();
    
    if ($this->admin->isLogged()) {
      $array['organizacao'] = $this->organizacao->listarOrganizacao(); // colocar pra listar os organizadores
      
      if(isset($_POST['id']) && !empty($_POST['id'])) {
        $this->organizacao->setId($_POST['id']); echo "if";
        if($this->organizacao->deletarOrganizacao() == true){
          echo "excluido com sucesso.";
          header('Location: ' . BASE_URL . 'organizacao/deletar');  //posso usar o loademplate
        } else {
          echo "Não foi possível excluir.";
          header('Location: ' . BASE_URL . 'organizacao/deletar');
        }
      } else {
        $this->loadTemplateAdmin('deletar-organizacao', $array);
      }
    } else {
      header('Location: ' . BASE_URL); 
    }
  }

  public function editar() {
    $array = array();
    
    if ($this->admin->isLogged()) {
      $array['organizacao'] = $this->organizacao->listarOrganizacao();

      if(count($array['organizacao']) > 0) {
        if(!empty($_POST['nome'])) {
          
          if(isset($_POST['id']) && !empty($_POST['id'])) {  //so entra aqui quando clicar
            
            $this->organizacao->setId($_POST['id']);
            $this->organizacao->updateOrganizacao();
            $this->endereco->setId($_POST['id_endereco']);
            $this->endereco->updateEndereco();
            header('Location: ' . BASE_URL . 'organizacao/editar');
          } else {
            if($_POST['id'])
            $this->loadTemplateAdmin('editar-organizacao-home', $array);
          } 
        } else {
            if(isset($_POST['id']) && !empty($_POST['id'])) {  //so entra aqui quando clicar
              $this->organizacao->setId($_POST['id']);
              $array['id'] = $this->organizacao->getId($_POST['id']);              
              $this->loadTemplateAdmin('editar-organizacao', $array);
            } else {
              $this->loadTemplateAdmin('editar-organizacao-home', $array);
            }
        }
      } else {
        echo "N�o possui registros";
      }
    } else {
      header('Location: ' . BASE_URL); 
    }
  }
}