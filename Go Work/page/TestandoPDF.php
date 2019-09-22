<?php
session_start();
include('../function/conexao.php');
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
    </style>
  </head>
  <body>
<div class="container-fluid">
      <div class="row content">
        <div class="col-sm-1"></div>
        <div class="col-sm-10 text-center" style="border: 1px solid #000; margin-top: 20px;">
          <h3>Go Work</h3>
          <h5>Sistema de Contratação de Profissionais</h5>
        </div>
      </div>
      <div class="col-sm-1"></div>
    </div>
    
    <div class="container">
      <div class="row content">
        <div class="col-sm-1"></div>
        <div class="col-sm-10 text-left">
          <h1>Históricos meus pedidos</h1>
          <hr>
          <!--Começa Lista de Pedidos Pendentes-->
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Serviço</th>
                <th scope="col">Tipo</th>
                <th scope="col">Onde</th>
                <th scope="col">Local</th>
                <th scope="col">Valor R$</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">#5618</th>
                <td>Pedreiro</td>
                <td>Contrução</td>
                <td>Parede</td>
                <td>Casa</td>
                <td>1500</td>
              </tr>
              <tr>
                <th scope="row">#3189</th>
                <td>Pedreiro</td>
                <td>Reformas</td>
                <td>Pisos e revestimentos</td>
                <td>Apartamento</td>
                <td>1200</td>
              </tr>
              <tr>
                <th scope="row">#5647</th>
                <td>Pedreiro</td>
                <td>Instalação</td>
                <td>Porta e Janelas</td>
                <td>Empresa</td>
                <td>500</td>
              </tr>
            </tbody>
          </table>
          <!--Termina Lista de Pedidos Pendentes-->
        </div>
      </div>
    </div>
    
    <!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
    
  </body>
</html>