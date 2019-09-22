<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content - type" content="text/html" charset = "UTF-8">
		<meta name="RodC & MatG">
		<meta charset="utf-8">
		<link rel="stylesheet" href="../assets/css/css.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

		<title>Tela de cadastro</title>
	</head>

	<body id="cadastro">
		<a

		<div class="formulario">
		<div class="image">
		<img src="../imagens/GoWork-logo-minW.png">
		</div>

			<form action="../function/cliente.php" method="post">
				<!-- Nome -->

					<h4>Nome</h4>
					<input type="text" required name="nome" placeholder="Nome" class="form">

				<!-- Email -->

					<h4>E-mail</h4>
					<input type="email" required name="email" placeholder="example@example.com" class="form">

				<!-- Usuário -->

					<h4>Usuário</h4>
					<input type="text" required name="usuario" placeholder="Usuário" class="form">

				<!-- Senha -->

					<h4>Senha</h4>
					<input type="password" required name="senha" placeholder="Senha" class="form" >

				<!-- CPF -->
					<h4>CPF</h4>
					<input type="text" required name="cpf" id="cpf" placeholder="000.000.000-00" class="form">
				<!-- Telefone -->

					<h4>Telfone</h4>
					<input type="text" required name="telefone" id="telefone" placeholder="(00) 0000-0000" class="form">

				<!-- Celular -->

					<h4>Celular</h4>
					<input type="text" required name="celular" id="celular" placeholder="(00) 00000-0000" class="form">


				<!-- Sexo -->

				<div >
					<h4>Sexo</h4>
					<select name="sexo" class="form-group">
						<option value="F">Feminino</option>
						<option value="M" selected="true">Masculino</option>
					</select>
					<!--<input type="radio" name="sexo" value="M" /> <label>Masculino</label><br>
					<input type="radio" name="sexo" value="F"/> <label>Feminino</label><br> -->
				</div>


				<input type="submit" name="cadastrar" value="CADASTRAR" class="botao">
				<input type="reset" value="LIMPAR CAMPOS" class="botao">
			</form>

			<script type="text/javascript">
        		$("#celular").mask("(00) 00000-0000");
        		$("#telefone").mask("(00) 0000-0000");
        		$("#cpf").mask("000.000.000-00");
    		</script>

		</div>
	</body>
</html>
