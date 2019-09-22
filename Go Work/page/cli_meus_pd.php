<?php 
  
  session_start();
  include('../function/conexao.php');

  $conexao = new conectar();

  $trazer = $conexao->getRead('cliente', 'usuario_cli', $_SESSION['usuario']);
  $id = $trazer['cod_cli'];

  $tabela = 'pedido';
  $campo = 'cod_cli';

  $result = $conexao->getReadAll($tabela, $campo, $id);

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


    
    <div class="container">
        <div class="row content">
        <div class="col-sm-1"></div>
        <div class="col-sm-10 text-left"> 
          <h1>Meus pedidos</h1>
          <hr>
          <!--Começa Lista de Pedidos Pendentes-->
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th scope="col">Serviço</th>
                  <th scope="col">Endereço</th>
                  <th scope="col">Tipo</th>
                  <th scope="col">Onde</th>
                  <th scope="col">Local</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                  <?php
                    foreach ($result as $item){
                      echo "<tr>";
                      if ($item[3]==1) {
                        echo "<td>Pedreiro</td>";
                      }
                      echo "<td>$item[4]</td>";
                      echo "<td>$item[5]</td>";
                      echo "<td>$item[6]</td>";
                      echo "<td>$item[7]</td>";
                      echo "<td align='center'><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#ExemploModalCentralizado'>Ver detalhes</button></td>";
                    }
                  ?>
              </tbody>
            </table>
            <!--Termina Lista de Pedidos Pendentes-->
        </div>
      </div>
    </div>

  <!-- Modal -->
   <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="TituloModalCentralizado">Deletar Perfil</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Endereço onde o serviço será realizado</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Endereço" name="end" required>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  <a href="../function/cliente.php?delete=1" class="btn btn-primary" role="button">Sim, tenho certeza</a><p></p> 
                </div>
              </div>
            </div>
          </div>
    <!-- Termina Modal Registro-->

    

    <!-- Começa o Footer -->
    <footer class="page-footer font-small indigo" style="position: absolute; bottom: 0; width: 100%;">
      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2019 Copyright: GoWork</div>
      <!-- Copyright -->
    </footer>
    <!-- Termina o Footer -->
    
  </body>
</html>