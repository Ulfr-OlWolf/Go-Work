<?php
  session_start();
  include('conexao.php');

  $conexao = new conectar();

  //Function Cadastrar
  if (isset($_POST['pedido'])) {

	$end = trim($_POST['end']);
	$dado1_pd = trim($_POST['dado1_pd']);
	$dado2_pd = trim($_POST['dado2_pd']);
	$dado3_pd  = trim($_POST['dado3_pd']);
	$dsc_pd     = trim($_POST['dsc_pd']);

	$tabela = 'pedido';
	$trazer = $conexao->getRead('cliente', 'usuario_cli', $_SESSION['usuario']);
	$cod_cli = $trazer['cod_cli'];
	
	$campos = 'cod_cli, cod_serv, end_pd, dado1_pd, dado2_pd, dado3_pd, dsc_pd, data_pd';
	$dados = "'$cod_cli','1', '$end', '$dado1_pd', '$dado2_pd', '$dado3_pd', '$dsc_pd', NOW()";

	$sql = $conexao->getInsert($tabela,$campos,$dados);

	if ($sql==true) {
		$_SESSION['status_cadastro_pd'] = true;
		header('Location: ../page/cli_cadastrar_pd.php');
		exit();
	}else{
		$_SESSION['status_ncadastro_pd'] = true;
		header('Location: ../page/cli_cadastrar_pd.php');
		exit();
	}
	
  }

  //Function Read

  	function ConsultarUser(){
  		$tabela = 'cliente';
        $campo = 'usuario_cli';
        $id = $_SESSION['usuario'];

        $result = $conexao->getRead($tabela, $campo, $id);

        return $result;
  	}

  //Function Update
  	if (isset($_POST['update'])) {

	  	$nome     = trim($_POST['nome']);
		$email    = trim($_POST['email']);
		$cpf      = trim($_POST['cpf']);
		$telefone = trim($_POST['telefone']);
		$celular  = trim($_POST['celular']);
		$sexo     = trim($_POST['sexo']);

		$tabela = 'cliente';

		$formt = "nome_cli='$nome', email_cli='$email', cpf_cli='$cpf', tel_cli='$telefone', cel_cli='$celular', sex_cli='$sexo'";

		$sql = $conexao->getUpdate($tabela,'usuario_cli',$_SESSION['usuario'], $formt);

		if ($sql == 1) {
			header('Location: ../page/cli_perfil.php');
			exit();
		}else{
			echo "Deu Erro";
			exit();
		}

  	}

  	//Function Deletar
  	if (isset($_GET['delete'])) {

  		$fun = $conexao->getDelete('cliente', 'usuario_cli', $_SESSION['usuario']);

  		if (isset($fun)){
  			unset($_SESSION['usuario']);
  			header('Location: ../index.php');
  		}else{
  			echo "Error";
  		}

  	}

?>



  