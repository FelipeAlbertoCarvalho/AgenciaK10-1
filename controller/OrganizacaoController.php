<?php 
class OrganizacaoController extends Controller {
  protected $admin;
  protected $organizacao;
  
  public function __construct(){
    $this->admin = new Admin();
    $this->organizacao = new Organizacao();
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
      $organizador = new Organizacao();
      $endereco = new Endereco();
      
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
      
      $this->loadTemplateAdmin('deletar-organizacao', $array);

    } else {
      header('Location: ' . BASE_URL); 
    }
  }

}