<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content - type" content="text/html" charset = "UTF-8">
		<meta name="RodC & MatG">
		<link rel="stylesheet" href="../assets/css/css.css"/>
		
    	
		<title>Recuperar Senha</title>
	</head>
	<body id="login">
		<div class="formulario">
			<img src="../imagens/logo_login.png">
			<form action="../function/cliente.php" method="post">
				<div class="email">
					<br><br>
					<b style="color: #fff;">Para que possamos enviar uma nova senha para seu email</b>
					<h4>Insira seu e-mail</h4>
					<input type="email" name="email" id="email" required placeholder="Endereço de e-mail ou nome do usuário" class="form">
				</div><br>

				<?php
					if (isset($_SESSION['senha_rec'])):
				?>
				<p>Sua Senha é</p>
				<?php
				echo $_SESSION['senha_rec'];
				unset($_SESSION['senha_rec']);
				endif;
				?>
			  
				<br><br>
				<input type="submit" name="recuperar_pass" value="ENVIAR" class="botao">
			</form>
		</div>
	</body>
</html>