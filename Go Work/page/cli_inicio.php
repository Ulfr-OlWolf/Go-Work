<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>GoWork</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Não Consegui linka ele por arquivos fisicos, verificar-->
    <link rel="stylesheet" type="text/css" href="../assets/css/css.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
    <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
    margin-bottom: 0;
    border-radius: 0;
    color: white;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
    background-color: #f2f2f2;
    padding: 25px;
    }
    
    .carousel-inner img {
    width: 100%; /* Set width to 100% */
    margin: auto;
    min-height:200px;
    }
    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
    .carousel-caption {
    display: none;
    }
    }
    .logo-small {
    color: #f4511e;
    font-size: 50px;
    }
    .logo {
    color: #f4511e;
    font-size: 200px;
    }
    .container-fluid{
    padding: 80px 120px;
    }

    .navbar-brand {
      height: 80px;
    }

     .logo >li >a {
      padding-top: 30px;
      padding-bottom: 30px;
    }
    .navbar-toggle {
      padding: 10px;
      margin: 25px 15px 25px 0;
    }
    </style>
  </head>
  <body>
    <!-- Começa o NavBar-->
    <nav class="navbar navbar-inverse-light">
      <div class="container">
        <div class="navbar-header logo">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="cli_inicio.php" style="margin-left: 100px; padding: 0"><img src="../imagens/GoWork-logo.png" style=" height: 100%; padding: 15px; width: auto;"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar" style="margin-top: 15px">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="cli_inicio.php"><span class="glyphicon glyphicon-home"></span>  Ínicio</a></li>
            <li><a href="cli_perfil.php"><span class="glyphicon glyphicon-cog"></span> Perfil</a></li>
            <li><a href="../function/cliente.php?logout=1"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Termina o NavBar-->
    <div class="jumbotron text-center">
      <h1 style=" text-transform: capitalize;">Olá, <?php echo $_SESSION['usuario'];?></h1>
      <p>A solução para todos seus problemas em um único lugar</p>
    </div>
    
    <div class="container-fluid text-center">
      <h2>Nossos Serviços</h2>
      <br>
      <div class="row">
        <div class="col-sm-4">
          <a href=""><span class="glyphicon glyphicon-check" style="font-size: 50px"></span></a>
          <h2>Serviços</h2>
          <h4>Disponíveis</h4>
          <p>Serviços ofertados pelo sistema</p>
        </div>
        <div class="col-sm-4">
          <a href="cli_pedido.php"><span class="glyphicon glyphicon-list-alt" style="font-size: 50px"></span></a>
          <h2>Registrar</h2>
          <h4>Pedido</h4>
          <p>Cadastrar um novo pedido</p>
        </div>
        <div class="col-sm-4">
          <a href="cli_meus_pd.php"><span class="glyphicon glyphicon-inbox" style="font-size: 50px"></span></a>
          <h2>Meus</h2>
          <h4>Pedidos</h4>
          <p>Acompanhar status dos pedidos</p>
        </div>
      </div>
      <br><br>
      <div class="row">
        <div class="col-sm-4">
          <a href=""><span class="glyphicon glyphicon-user" style="font-size: 50px"></span></a>
          <h2>Prestadores</h2>
          <h4>de Serviços</h4>
          <p>Ranking dos melhores funcionários</p>
        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
          <a href=""><span class="glyphicon glyphicon-book" style="font-size: 50px"></span></a>
          <h2>Relatórios</h2>
          <p>PDF do histórico de pedidos</p>
        </div>
      </div>
    </div>
    
    <!-- Começa o Footer -->
    <footer class="page-footer font-small indigo">
      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2019 Copyright: GoWork</div>
      <!-- Copyright -->
    </footer>
    <!-- Termina o Footer -->
  </body>
</html>