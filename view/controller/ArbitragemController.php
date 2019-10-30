<?php 
class ArbitragemController extends Controller {
  protected $admin;
  protected $arbitragem;
  protected $enderecoArbitragem;
  protected $enderecoPresidente;
  protected $user;
  protected $pessoa_arbitragem;
//  protected $tipo_organizacao;

  public function __construct(){
    $this->admin = new Admin();
    $this->arbitragem = new Arbitragem();
    $this->enderecoArbitragem = new Endereco();
    $this->enderecoPresidente = new Endereco();
    $this->user = new Users();
    $this->pessoa_arbitragem = new Pessoa_arbitragem();
    
//    $this->tipo_organizacao = new TipoOrganizacao();
  }

  public function index() {
    
  }
  //Show the form
  public function adicionar() {
    if ($this->admin->isLogged()) {
      $this->loadTemplateOrganizacaoCampeonato('adicionar-arbitragem', $array = array());
    } else {
      header('Location: ' . BASE_URL);
    }
  }

  public function cadastrarArbitragemPresidente() {
    if (isset($_POST['arbitragem']) && !empty(($_POST['arbitragem']))) {
      $users = new Users();
      $arbitragem = new Arbitragem();
      $enderecoArbitragem = new Endereco();
      $enderecoPresidente = new Endereco();
      $pessoa_arbitragem = new Pessoa_arbitragem();
//      $tipo_organizacao = new TipoOrganizacao();

      $arbitragem->setNome(addslashes($_POST['arbitragem']));
      $arbitragem->setEmail(addslashes($_POST['emailArbitragem']));
      $arbitragem->setDataCriacao(addslashes($_POST['data_criacao']));
      
      $pessoa_arbitragem->setNome(addslashes($_POST['nomePresidente']));
      $pessoa_arbitragem->setEmail(addslashes($_POST['emailPresidente']));
      $pessoa_arbitragem->setNascimento(addslashes($_POST['nascimento']));
      $pessoa_arbitragem->setRg(addslashes($_POST['rg']));
      $pessoa_arbitragem->setCpf("texxte");
      $pessoa_arbitragem->setCnpj("teste");
      $pessoa_arbitragem->setDescricao("Presidente");
      $pessoa_arbitragem->setNivel($arbitragem->getNivel());
      
      $enderecoArbitragem->setRua(addslashes($_POST['ruaArbitragem']));
      $enderecoArbitragem->setNumero(addslashes($_POST['numeroArbitragem']));
      $enderecoArbitragem->setBairro(addslashes($_POST['bairroArbitragem']));
      $enderecoArbitragem->setCidade(addslashes($_POST['cidadeArbitragem']));

      $enderecoPresidente->setRua(addslashes($_POST['rua']));
      $enderecoPresidente->setNumero(addslashes($_POST['numero']));
      $enderecoPresidente->setBairro(addslashes($_POST['bairro']));
      $enderecoPresidente->setCidade(addslashes($_POST['cidade']));

      $users->setEmail(addslashes($_POST['emailPresidente']));
      $users->setSenha(addslashes($_POST['senha']));
      $users->setNivel($pessoa_arbitragem->getNivel());
 

      if ($idEnderecoArbitragem = $enderecoArbitragem->inserirEndereco()) {
        echo "Endereço Arbitragem inserido com sucesso.";
      } else echo "Endereço não inserido.";
      
      if ($idEnderecoPresidente = $enderecoPresidente->inserirEndereco()) {
        echo "Endereço Presidente inserido com sucesso.";
      } else echo "Endereço não inserido.";
      
      if ($idArbitragem = $arbitragem->inserirArbitragem($idEnderecoArbitragem)) {
        echo "Arbitragem inserido com sucesso. ";
      } else echo "Arbitragem não inserido.";
      
      if ($idUser = $users->inserirUsuario()) {
        echo "Login e Senha criados com sucesso.";
      } else echo "Login e Senha não criado.";

      if ($pessoa_arbitragem->inserirPresidenteArbitragem($idArbitragem ,$idEnderecoPresidente, $idUser)) {
        echo "Presidente inserido com sucesso.";
      } else echo "Presidente não inserido.";
      
      
      $this->loadTemplateOrganizacaoCampeonato('adicionar-arbitragem', $array = array());

    } else "Não deu boa.";
  }

  public function deletar() {
    $array = array();
    
    if ($this->admin->isLogged()) {
      $array['organizacao'] = $this->arbitragem->listarOrganizacaoTime(); // colocar pra listar os organizadores  

      if(isset($_POST['id']) && !empty($_POST['id'])) {
        $this->arbitragem->setId($_POST['id']);
        $this->arbitragem->deletarOrganizacaoTime();
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
        $this->arbitragem->setId($_POST['id']);
        $this->arbitragem->updateOrganizacao();
        $this->enderecoArbitragem->setId($_POST['id_endereco']);
        $this->enderecoArbitragem->updateEndereco();
        header('Location: ' . BASE_URL . 'time/editar');
      } else {
        $array['organizacao'] = $this->arbitragem->listarOrganizacaoTime(); // colocar pra listar os organizadores
        $this->loadTemplateOrganizacaoCampeonato('editar-organizacao-time', $array);
      }
    } else {
      header('Location: ' . BASE_URL); 
    }
  }
}