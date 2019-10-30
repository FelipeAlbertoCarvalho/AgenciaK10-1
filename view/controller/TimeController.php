<?php 
class TimeController extends Controller {
  protected $admin;
  protected $organizacaoTime;
  protected $endereco;
  protected $user;
  protected $presidente;
//  protected $tipo_organizacao;

  public function __construct(){
    $this->admin = new Admin();
    $this->organizacaoTime = new Time("");
    $this->endereco = new Endereco();
    $this->user = new Users();
    $this->presidente = new Presidente();
    
//    $this->tipo_organizacao = new TipoOrganizacao();
  }

  public function index() {
    
  }

  public function adicionar() {
    if ($this->admin->isLogged()) {
      $this->loadTemplateOrganizacaoCampeonato('adicionar-organizacao-time', $array = array());
    } else {
      header('Location: ' . BASE_URL);
    }
  }

  public function cadastrar() {
    if (isset($_POST['time']) && !empty(($_POST['time']))) {
      $users = new Users();
      $organizacaoTime = new Time(($_POST['time']));
      $endereco = new Endereco();
      $presidente = new Presidente();
//      $tipo_organizacao = new TipoOrganizacao();

      $organizacaoTime->setNome(addslashes($_POST['nome']));
      $organizacaoTime->setEmail(addslashes($_POST['email']));
      $organizacaoTime->setSenha(addslashes($_POST['senha']));
      $organizacaoTime->setDataCriacao(addslashes($_POST['data_criacao']));
      
      $endereco->setRua(addslashes($_POST['rua']));
      $endereco->setNumero(addslashes($_POST['numero']));
      $endereco->setBairro(addslashes($_POST['bairro']));
      $endereco->setCidade(addslashes($_POST['cidade']));

      $users->setEmail(addslashes($_POST['email']));
      $users->setSenha(addslashes($_POST['senha']));
      $users->setNivel($organizacaoTime->getNivel());
 
      $presidente->setNome(addslashes($_POST['email']));

      if ($id = $endereco->inserirEndereco()) {
        $organizacaoTime->inserirOrganizacao($id);
        $users->inserirUsuario(); 
        echo "Cadastrado";
        $this->loadTemplateOrganizacaoCampeonato('formOrganizacao', $array = array());
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
      $array['organizacao'] = $this->organizacaoTime->listarOrganizacaoTime(); // colocar pra listar os organizadores
      

      if(isset($_POST['id']) && !empty($_POST['id'])) {
        $this->organizacaoTime->setId($_POST['id']);
        $this->organizacaoTime->deletarOrganizacaoTime();
        $this->user->setId($_POST['id_user']);
        $this->user->deletarUsuario();
        $this->user->setId($_POST['id_endereco']);
        $this->user->deletarEndereco();
        header('Location: ' . BASE_URL . 'time/deletar');
      } else {
        $this->loadTemplateOrganizacaoCampeonato('deletar-organizacao-time', $array);
      }
    } else {
      header('Location: ' . BASE_URL); 
    }
  }

  public function editar() {
    $array = array();
    
    if ($this->admin->isLogged()) {
      
      if(isset($_POST['id']) && !empty($_POST['id'])){  //so entra aqui quando clicar
        $this->organizacaoTime->setId($_POST['id']);
        $this->organizacaoTime->updateOrganizacao();
        $this->endereco->setId($_POST['id_endereco']);
        $this->endereco->updateEndereco();
        header('Location: ' . BASE_URL . 'time/editar');
      } else {
        $array['organizacao'] = $this->organizacaoTime->listarOrganizacaoTime(); // colocar pra listar os organizadores
        $this->loadTemplateOrganizacaoCampeonato('editar-organizacao-time', $array);
      }
    } else {
      header('Location: ' . BASE_URL); 
    }
  }
}