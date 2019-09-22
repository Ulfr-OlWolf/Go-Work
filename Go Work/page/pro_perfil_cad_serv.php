<?php 
  
  session_start();
  include('../function/conexao.php');

  $conexao = new conectar();

  $tabela = 'profissional';
  $campo = 'usuario_pro';
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
          <a class="navbar-brand" href="pro_inicio.php" style="margin-left: 100px; padding: 0"><img src="../imagens/GoWork-logo.png" style=" height: 100%; padding: 15px; width: auto;"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar" >
          <ul class="nav navbar-nav navbar-right logo">
            <li class="active"><a href="pro_inicio.php"><span class="glyphicon glyphicon-home"></span>  Ínicio</a></li>
            <li><a href="pro_perfil.php"><span class="glyphicon glyphicon-cog"></span> Perfil</a></li>
            <li><a href="../function/profissional.php?logout=1"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Termina o NavBar-->
  <div class="container">

  </div>
    
  <div class="container-fluid">
    <div class="row content">
      <div class="col-sm-3 sidenav">
        <ul class="nav nav-pills nav-stacked">
          <li><a href="pro_perfil.php">Perfil</a></li>
          <li><a href="pro_perfil_alterar.php">Editar perfil</a></li>
          <li class="active"><a href="pro_perfil_cad_serv.php">Cadastrar serviço</a></li>
          <li><a href="pro_perfil_mudarsenha.php">Mudar senha</a></li>
          <?php
            if ($result['aut_pro']==0):?>
            <li><a href="pro_perfil_aut.php">Autenticar conta</a></li>
          <?php 
            endif;
          ?>
          <li><a href="pro_perfil_hist.php">Historico de pedido</a></li>
        </ul><br>
      </div>

      <div class="col-sm-9">
        <h2 style=" text-transform: capitalize;"><?php echo $result['usuario_pro'];?></h2>
        <hr>
        <h2>Cadastrar Novos Serviços</h2>
        <br><br>
        <div class="col-sm-8">
        <form action="../function/profissional.php" method="post">
            <div class="form-group">
            <div class="form-group">
              <label>Escolha a área de atuação</label>
              <select class="form-control" name="atuacao">
                <?php 
                $tabela = 'profissao';
                $result = $conexao->getReadAll($tabela,NULL,NULL);

                foreach ($result as $item) {
                  echo "<option value='$item[2]'>$item[2]</option>";
                }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label>Escolha sua profissão</label>
              <select class="form-control" name="profissao">
                <?php 
                $tabela = 'profissao';
                $result = $conexao->getReadAll($tabela,NULL,NULL);

                foreach ($result as $item) {
                  echo "<option value='$item[0]'>$item[1]</option>";
                }
                ?>
              </select> 
            </div>
            <div class="form-group">
              <label>Escolha o serviço a ser ofertado</label>
              <select class="form-control" name="servico">
                <?php 
                $tabela = 'servico';
                $result = $conexao->getReadAll($tabela,NULL,NULL);

                foreach ($result as $item) {
                  echo "<option value=$item[0]>$item[1]</option>";
                }
                ?>
              </select> 
            </div>
            </div>
            <button type="submit" name="serv" class="btn btn-primary">Enviar</button>
          </form>

        </div>
      </div>

    </div>
  </div>
    

    
    <!-- Começa o Footer -->
    <footer class="page-footer font-small indigo" style="position: absolute; bottom: 0; width: 100%;">
      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2019 Copyright: GoWork</div>
      <!-- Copyright -->
    </footer>
    <!-- Termina o Footer -->
    
  </body>
</html>