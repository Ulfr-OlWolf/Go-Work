<?php
session_start();
include('../function/conexao.php');
$conexao = new conectar();
$tabela = 'cliente';
$campo = 'usuario_cli';
$id = $_SESSION['usuario'];
$result = $conexao->getRead($tabela, $campo, $id);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>GoWork</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Não Consegui linka ele por arquivos fisicos, verificar-->
    <link rel="stylesheet" href="../assets/css/css.css"/>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
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
    margin-top: 50px;
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
    .jumbotron {
    background-color: #005487;
    color: #fff;
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
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right logo">
            <li class="active"><a href="cli_inicio.php"><span class="glyphicon glyphicon-home"></span>  Ínicio</a></li>
            <li><a href="cli_perfil.php"><span class="glyphicon glyphicon-cog"></span> Perfil</a></li>
            <li><a href="../function/cliente.php?logout=1"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Termina o NavBar-->
    <div class="jumbotron text-center">
      <h1>Novo pedido</h1>
      <p>Preencha todos os campo para que o profissional passe o melhor orçamento</p>
    </div>
    <div class="container container-fluid">
      <div class="row content">
        <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <?php
              if (isset($_SESSION['status_cadastro_pd'])):
            ?>
            <div class="alert alert-success" role="alert">
                Cadastro realizado com sucesso
            </div>
            <?php
            endif;
            unset($_SESSION['status_cadastro_pd']);
            ?>
            <?php
              if (isset($_SESSION['status_ncadastro_pd'])):
            ?>
            <div class="alert alert-danger" role="alert">
                  Erro inesperádo ao realizar o cadastro. Tente novamente mais tarde
            </div>
            <?php
            endif;
            unset($_SESSION['status_ncadastro_pd']);
            ?>
          <form action="../function/pedido.php" method="post">
            <div class="form-group">
              <label for="exampleFormControlInput1">Endereço onde o serviço será realizado</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Endereço" name="end" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Selecione o tipo de serviço</label>
              <select class="form-control" id="exampleFormControlSelect1" name="dado1_pd">
                <option>Construção</option>
                <option>Reformas</option>
                <option>Instalação</option>
                <option>Troca</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Onde o serviço será feito</label>
              <select class="form-control" id="exampleFormControlSelect1" name="dado2_pd">
                <option>Parede</option>
                <option>Construção geral</option>
                <option>Outros</option>
                <option>Pisos e revestimentos</option>
                <option>Telhado e telhas</option>
                <option>Portas e Janelas</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">O local em que o serviço será feito</label>
              <select class="form-control" id="exampleFormControlSelect1" name="dado3_pd" >
                <option>Casa</option>
                <option>Apartamento</option>
                <option>Empresa</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Descreva o seu pedido</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="dsc_pd" required></textarea>
            </div>
            <div class="row content">
              <div class="col-sm-8"></div>
              <div class="col-sm-2">
                <button class="btn btn-primary pull-right" name="pedido" type="submit"><span class="glyphicon glyphicon-ok"></span> Enviar</button>
              </div>
              <div class="col-sm-2">
                <button class="btn btn-danger pull-right" type="reset"><span class="glyphicon glyphicon-trash"></span> Limpar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    
    <!-- Começa o Footer -->
    <footer class="page-footer font-small indigo">
      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2019 Copyright:Go Work</div>
      <!-- Copyright -->
    </footer>
    <!-- Termina o Footer -->
    
    <script type="text/javascript">
    $("#telefone").mask("(00) 0000-0000");
    $("#celular").mask("(00) 00000-0000");
    $("#cpf").mask("000.000.000-00");
    </script>
  </body>
</html>