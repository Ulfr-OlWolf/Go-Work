<!DOCTYPE html>
<html lang="en">
  <head>
    <title>GoWork</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Não Consegui linka ele por arquivos fisicos, verificar-->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
    <style>
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
    .container {
    padding: 80px 120px;
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
    .logo {
    font-size: 200px;
    }
    .cinza{
    background-color: #f1f1f1d1;
    color: #000;
    }
    .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    }
    .person:hover {
    border-color: #f1f1f1;
    }
    .bg-1 {
    background: #005487;
    color: #ffffff;
    }
    .bg-1 h3 {color: #fff;}
    .bg-1 p {font-style: italic;
    }
    .nav >li >a {
    padding-top: 15px;
    padding-bottom: 15px;
    }
    .navbar-toggle {
    padding: 10px;
    margin: 25px 15px 25px 0;
    }
    .jumbotron{
    padding-top: 10px;
    padding-bottom: 10px;
    margin: 0px;
    }
    .cserv{
    padding-top: 10px;
    padding-bottom: 10px;
    }
    
    </style>
  </head>
  <body>
    <!-- Começa o NavBar-->
    <nav class="navbar navbar-inverse-light">
      <div class="navbar-header logo">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php" style="margin-left: 200px;  padding-top: 10px;; color: black"><span>Go Work</span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="index.php">Ínicio</a></li>
          <li><a href="#somos">Quem somos</a></li>
          <li><a href="#contato">Contato</a></li>
          <li><a href="page/login.php"><span class="glyphicon glyphicon-log-in"></span> Acessar</a></li>
        </ul>
      </div>
    </nav>
    <!-- Termina o NavBar-->
    <!-- Começa o Carousel-->
    <div class="jumbotron text-center">
      <h1>Go Work</h1>
      <p>A solução para todos seus problemas em um único lugar</p>
    </div>
    <!-- Termina o Carousel-->
    <div class="container cserv text-center">
      <h3>Nossos Serviços</h3>
      <p><em>Esses são alguns dos serviços que ofertamos em nossos sistema</em></p>
      <br>
      <div class="row">
        <div class="col-sm-4">
          <p class="text-center"><strong>Pedreiro</strong></p><br>
          <a href="#demo" data-toggle="collapse">
            <img src="imagens/pedreiro 255.jpg" class="img-circle person" alt="Random Name">
          </a>
        </div>
        <div class="col-sm-4">
          <p class="text-center"><strong>Eletricista</strong></p><br>
          <a href="#demo2" data-toggle="collapse">
            <img src="imagens/eletricista 255.jpg" class="img-circle person" alt="Random Name">
          </a>
        </div>
        <div class="col-sm-4">
          <p class="text-center"><strong>Professor</strong></p><br>
          <a href="index.php" data-toggle="collapse">
            <img src="imagens/professora 255.jpg" class="img-circle person" alt="Random Name">
          </a>
        </div>
      </div>
    </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      
      <div class="carousel-inner" role="listbox">
        <!-- Primeira foto do slide -->
        <div class="item active">
          <img src="imagens/carousel_cli_1.gif" alt="Image">
          <div class="carousel-caption">
            <h3>Análise</h3>
            <p>Profissionais de Contabilidade</p>
          </div>
        </div>
        <!-- Segunda foto do slide -->
        <div class="item">
          <img src="imagens/carousel_cli_2.jpg" alt="Image">
          <div class="carousel-caption">
            <h3>Construção</h3>
            <p>Egenharia Civil e mais</p>
          </div>
        </div>
        <!-- Terceira foto do slide -->
        <div class="item">
          <img src="imagens/carousel_cli_3.jpg" alt="Image">
          <div class="carousel-caption">
            <h3>Lição</h3>
            <p>Psicologos e Professores</p>
          </div>
        </div>
      </div>
      <!-- Anterior e Avançar controles -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Avançar</span>
      </a>
    </div>
    <div id="somos" class="container text-center">
      <h3>Quem somos ?</h3><br>
      <div class="row">
        <div class="col-sm-4">
          <img src="imagens/GoWork-logo.png" style="width: 300px; height: auto">
        </div>
        <div class="col-sm-8 text-left">
          <p>Nós somos uma start-up criada por alunos do Instituto Federal de Sergipe que visa a fácil interação entre Cliente e Profissional. Assim sendo, nós temos a simples proposta de aproximar esses indivíduos com o nosso sistema de pedidos. Esse que funciona com a velha e boa demanda e oferta.</p>
        </div>
      </div>
      <p></p>
      <div class="row"  style="margin-top: 50px">
        <div class="col-sm-8 text-right">
          <p>Temos como região inicial de funcionamento a cidade de <em>Aracaju - SE</em> e esperamos expandir nossas operações para todo o Brasil. Criamos a Go Work procurando pelo menos amenizar a situação de vários Brasileiros que sofrem com o temível desemprego e facilitar a vida de clientes que necessitam de ajuda. Venha para Go Work! A solução para todos seu problemas em um único lugar!</p>
        </div>
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-signal logo"></span>
        </div>
      </div>
      <p></p>
    </div><br>
    <!-- -->
    <div class="bg-1">
      <div id="contato" class="container container-fluid bg-grey">
        <h2 class="text-center">Contato</h2>
        <div class="row">
          <div class="col-sm-5">
            <p>Nossa equipe entrará em contato com no máximo 24 horas.</p>
            <p><span class="glyphicon glyphicon-map-marker"></span> Aracaju, SE</p>
            <p><span class="glyphicon glyphicon-phone"></span> +00 000000-0000</p>
            <p><span class="glyphicon glyphicon-envelope"></span> gowork@contato.com</p>
          </div>
          <div class="col-sm-7">
            <div class="row">
              <div class="col-sm-6 form-group">
                <input class="form-control" id="name" name="name" placeholder="Nome" type="text" required>
              </div>
              <div class="col-sm-6 form-group">
                <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
              </div>
            </div>
            <textarea class="form-control" id="comments" name="comments" placeholder="Comentário" rows="5"></textarea><br>
            <div class="row">
              <div class="col-sm-12 form-group">
                <button class="btn btn-primary pull-right" type="submit">Enviar</button>
              </div>
            </div>
          </div>
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