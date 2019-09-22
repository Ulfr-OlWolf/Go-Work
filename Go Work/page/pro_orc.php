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
          <a class="navbar-brand" href="pro_inicio.php" style="margin-left: 100px; padding: 0"><img src="../imagens/GoWork-logo.png" style=" height: 100%; padding: 15px; width: auto;"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right logo">
            <li class="active"><a href="pro_inicio.php"><span class="glyphicon glyphicon-home"></span>  Ínicio</a></li>
            <li><a href="pro_perfil.php"><span class="glyphicon glyphicon-cog"></span> Perfil</a></li>
            <li><a href="../function/profissional.php?logout=1"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Termina o NavBar-->

    <div class="jumbotron text-center">
      <h1>Registrar Orçamento</h1>
      <p>Analise as informações passadas pelo usuário e preencha o valor do serviço</p>
    </div>
    
    <div class="container">
        <div class="row content">
          <div class="col-sm-1"></div>
        <div class="col-sm-10 text-left"> 
          <h1></h1>
          <hr>
          <!--Começa Lista de Pedidos Pendentes-->
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Cliente</th>
                  <th scope="col">Descrição</th>
                  <th scope="col">Status</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">#5647</th>
                  <td>Rodrigo</td>
                  <td>Preciso de um serviço completo no muro d...</td>
                  <td><label style="color: #337ab7">Pendente</label></td>
                  <td><a href="#" data-toggle="modal" data-target="#Registrar">Registrar</a></td>
                  <td><a href="#" role="button" class="btn btn-primary">Ver Detalhes</a></td>
                </tr>
                <tr>
                  <th scope="row">#1283</th>
                  <td>Larry</td>
                  <td>Preciso de ajuda com um telhado que queb...</td>
                  <td><label style="color: red">Cancelado</label></td>
                  <td style="color: gray">Indisponível</td>
                  <td><a href="#" role="button" class="btn btn-primary">Ver Detalhes</a></td>
                </tr>
              </tbody>
            </table>
            <!--Termina Lista de Pedidos Pendentes-->
        </div>
      </div>
    </div>

   <!-- Começa Modal Registro-->
   <!--  <div class="modal fade" id="Registrar" tabindex="-1" role="dialog" aria-labelledby="Titulo" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="Titulo">Registrar</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="" method="POST">
              <div class="form-group">
                <div class="form-group">
                  <label>Texto: </label>
                  <input type="text" name="" class="form-control" placeholder="Alguma Coisa">   
                </div>
                <div class="form-group">
                  <label>Valor: </label>
                  <input type="number" name="" class="form-control" placeholder="00.0">   
                </div>
              </div>
              <div class="form-group">
                  <textarea name="" placeholder="Detalhes" class="form-control">
                    
                  </textarea>  
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Termina Modal Registro-->

    
    <br><br><br>

    <!-- Começa o Footer -->
    <footer class="page-footer font-small indigo" style="bottom: 0; width: 100%; position: absolute;">
      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2019 Copyright: GoWork</div>
      <!-- Copyright -->
    </footer>
    <!-- Termina o Footer -->
    
  </body>
</html>