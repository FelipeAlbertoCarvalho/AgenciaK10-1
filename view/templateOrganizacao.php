<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin</title>
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/agencia.css">
  <link rel="shortcut icon" href="<?php echo BASE_URL; ?>/assets/img/icon.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
</head>

<body>
  <header>
    <nav class="navbar bg-dark">
      <div class="ml-auto">
        <div class="row">
          <div id="icons-social" class="col-md-8">
            <a href=""><i class="fab fa-facebook-square"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-whatsapp"></i></a>
          </div>
          <div class="col-md-4">
            <a href="<?php echo BASE_URL; ?>users/logout">Sair</a>
          </div>
        </div>
      </div>
    </nav>
    <!--Fim upper-menu-->

    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="<?php echo BASE_URL; ?>users">Agência K10</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav m-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL; ?>users">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
              Colaborador
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo BASE_URL; ?>colaborador/adicionar">Adicionar</a>
              <a class="dropdown-item" href="<?php echo BASE_URL; ?>colaborador/alterar">Alterar</a>
              <a class="dropdown-item" href="<?php echo BASE_URL; ?>colaborador/deletar">Deletar</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
              Presidente
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo BASE_URL; ?>presidente/adicionar">Adicionar</a>
              <a class="dropdown-item" href="<?php echo BASE_URL; ?>presidente/alterar">Alterar</a>
              <a class="dropdown-item" href="<?php echo BASE_URL; ?>presidente/deletar">Deletar</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
              Campeonato
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo BASE_URL; ?>campeonato/adicionar">Adicionar</a>
              <a class="dropdown-item" href="<?php echo BASE_URL; ?>campeonato/editar">Editar</a>
              <a class="dropdown-item" href="<?php echo BASE_URL; ?>campeonato/deletar">Deletar</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
              Time
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo BASE_URL; ?>time/adicionar">Adicionar</a>
              <a class="dropdown-item" href="<?php echo BASE_URL; ?>time/alterar">Alterar</a>
              <a class="dropdown-item" href="<?php echo BASE_URL; ?>time/deletar">Deletar</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!--Fim menu-->
  </header>
  <!--Fim cabeçalho-->

  <main class="container">
    <?php $this->loadView($view, $datas); ?>
  </main>

  <footer class="">

  </footer>

  <script src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo BASE_URL; ?>assets/js/popper.min.js"></script>
  <script src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo BASE_URL; ?>assets/js/login.js"></script>
  <script src="<?php echo BASE_URL; ?>assets/js/formBanner.js"></script>
</body>

</html>