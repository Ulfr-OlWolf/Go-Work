<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content - type" content="text/html" charset = "UTF-8">
		<meta name="RodC & MatG">
		<link rel="stylesheet" href="../assets/css/css.css"/>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
		
    	
		<title>Tela de login</title>
	</head>
	<body id="login">
		<div class="formulario">
			<img src="../imagens/GoWork-logo-minW.png">
			<form action="../function/cliente.php" method="post">
				<div class="login">
					<h4>Login</h4>
					<input type="text" name="user" id="user" required placeholder="Endereço de e-mail ou nome do usuário" class="form">
				</div>
				<div class="senha">
					<h4>Senha</h4>
					<input type="password" required name="senha" placeholder="Senha" class="form" >
				</div>
				<br>
				<div class="lembre" align="left">
					<input type="checkbox" name="lembre" value="xxx"> <label>Lembrar-me</label>
					<a href="recuperar_pass.php" style="color: #fff">Esqueceu a senha ?</a>
				</div>
				<br>
				<?php
					if (isset($_SESSION['nao_aut'])):
				?>
				<div class="alert alert-danger" role="alert">
  					Erro: Usuário ou senha inválidos
				</div>
				<?php
				endif;
				unset($_SESSION['nao_aut']);
				?>
				<input type="submit" name="login" value="ENTRAR" class="botao">
				<hr>
				<h4>Não é registrado ?<a href="../page/cli_cadastro.php">Clique Aqui</a></h4>
			</form>
		</div>
	</body>
</html>