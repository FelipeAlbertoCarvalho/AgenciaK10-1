<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $view; ?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/agencia.css">
  <link rel="shortcut icon" href="<?php echo BASE_URL; ?>/assets/img/logo.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
</head>

<body>
  <header>

    <!--nav upper-->
    <nav class="navbar bg-dark">
      <div class="ml-auto">
        <div class="row">
          <div id="icons-social" class="col-md-7">
            <a href=""><i class="fab fa-facebook-square"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-whatsapp"></i></a>
          </div>
          <div class="col-md-4">
            <a href="#" id="btn-entrar">Entrar</a>
            <script>
              var id = "<?php echo $datas['nivel']?>";
              var base = "<?php echo BASE_URL; ?>";
            </script>
          </div>
        </div>
      </div>
    </nav>
    <!--Fim nav upper-->

    <!--popup form login-->
    <div class="popup-login" id="popupLogin">
      <button class="btn-fechar" id="btn-fechar"><i class="fas fa-times"></i></button>
      <form action="<?php echo BASE_URL; ?>users" method="post">
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control form-control-sm" name="email" id="email">
        </div>
        <div class="form-group">
          <label for="senha">Senha:</label>
          <input type="password" class="form-control form-control-sm" name="senha" id="senha">
        </div>
        <input class="btn-entrar" type="submit" name="logar">
      </form>
    </div>
    <!--Fim popip login-->

    <!--nav main-->
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="<?php echo BASE_URL; ?>">Agência K10</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav m-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL; ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL; ?>campeonatos">Campeonatos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL; ?>produtos">Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL; ?>sobre">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL; ?>contatos">Contatos</a>
          </li>
        </ul>
      </div>
    </nav>
    <!--Fim nav main-->

  </header>
  <!--Fim cabeçalho-->

  <main>
    <?php $this->loadView($view, $datas); ?>
  </main>
  <br><br>
  <footer class="firstFooter container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <img src="assets/img/logo.png" alt="logo" class="img-fluid">
          <h4>Agência K10</h4>
        </div>
        <div class="col-md-3">
          <ul class="links-footer">
            <li><a class="nav-link" href="<?php echo BASE_URL; ?>">Home</a></li>
            <li><a class="nav-link" href="<?php echo BASE_URL; ?>campeonatos">Campeonatos</a></li>
            <li><a class="nav-link" href="<?php echo BASE_URL; ?>produtos">Produtos</a></li>
            <li><a class="nav-link" href="<?php echo BASE_URL; ?>sobre">Sobre</a></li>
            <li><a class="nav-link" href="<?php echo BASE_URL; ?>contatos">Contatos</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>Endereço</h5>
        </div>
        <div class="col-md-3 links-footer icons-footer">
          <a target="_blank" href="https://facebook.com/agenciak10"><i class="fab fa-facebook-square"></i></a>
          <a target="_blank" href="https://instagram.com/k10agencia"><i class="fab fa-instagram"></i></a>
          <a href=""><i class="fab fa-whatsapp"></i></a>
          <div class="footer-endereco">
            <p>R.Francisco Derosso, 3488</p>
            <p>Xaxim, Curitiba - PR, Brasil</p>
            <p>CEP : 81830-285</p>
            <img src="assets/img/brasil.png" alt="brasil" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </footer>

  <footer class="secondFooter">
    <p>Todos os direitos reservados. &reg;</p>
  </footer>

  <script src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo BASE_URL; ?>assets/js/popper.min.js"></script>
  <script src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo BASE_URL; ?>assets/js/login.js"></script>
  <script src="<?php echo BASE_URL; ?>assets/js/slider.js"></script>
  <script src="<?php echo BASE_URL; ?>assets/js/inOut.js"></script>
</body>

</html>