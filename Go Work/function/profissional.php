<?php
 session_start();
  include('conexao.php');

  $conexao = new conectar();

  //Function Logout
  	if (isset($_GET['logout'])) {
  		header('Location: ../index.php');
  		session_destroy(); 
  		exit();
  	}

  //Function Login
  if (isset($_POST['submit'])) {
  	if (empty($_POST['login']) || empty($_POST['senha'])) {
		header('Location: ../page/pro_login.php');
		exit();
	}

  	$login = $_POST['login'];
	$senha = $_POST['senha'];

  	$user = $conexao->getLogin($login,$senha,'profissional','usuario_pro','senha_pro');
 
   	if (empty($user)) {
   		$_SESSION['nao_aut'] = true;
		header('Location: ../page/pro_login.php');
		exit();
		
	}else{
		$_SESSION['usuario'] = $login;
		header('Location: ../page/pro_inicio.php');
		exit();
	}
  }


  //Function Cadastrar
  if (isset($_POST['cadastrar'])) {

  	$nome     = trim($_POST['nome']);
  	$usuario  = trim($_POST['usuario']);
	$email    = trim($_POST['email']);
	$senha    = trim($_POST['senha']);
	$cpf      = trim($_POST['cpf']);
	$telefone = trim($_POST['telefone']);
	$celular  = trim($_POST['celular']);
	$escolar  = trim($_POST['escolaridade']);
	$sexo     = trim($_POST['sexo']);


	$tabela = 'profissional';


	$result = $conexao->getCount($tabela,'usuario_pro',$usuario);

	print_r($result);

	if ($result[0]==1) {
		$_SESSION['usuario_existe'] = true;
		header('Location: ../page/pro_cadastro.php');
		exit;	
	}
	
	$campos = 'nome_pro, usuario_pro,email_pro, senha_pro, cpf_pro, tel_pro, cel_pro, sex_pro, esc_pro, doc_pro, aut_pro, datac_pro';
	$dados = "'$nome', '$usuario','$email', '$senha', '$cpf', '$telefone', '$celular', '$sexo', '$escolar', 0, 0, NOW()";

	$sql = $conexao->getInsert($tabela,$campos,$dados);

	if ($sql==true) {
		$_SESSION['status_cadastro'] = true;
		header('Location: ../page/pro_login.php');
		exit();
	}else{
		$_SESSION['status_cadastro'] = false;
		echo "Deu erro";
	}
	exit;
  }

  //Function UpdateSenha
  	if (isset($_POST['update-senha'])) {
  		
  		$senha_atual = trim($_POST['senha_a']);
  		$senha_nova = trim($_POST['senha_n']);
  		$senha_novav = trim($_POST['senha_nv']);

	  	$user = $conexao->getLogin($_SESSION['usuario'],$senha_atual,'profissional','usuario_pro','senha_pro');
	 
	   	if (empty($user)) {
	   		$_SESSION['senha_aaut'] = true;
	   		header('Location: ../page/pro_perfil_mudarsenha.php');
			exit();		
		}else{
			if ($senha_nova == $senha_novav) {
				$tabela = 'profissional';
				$formt = "senha_pro='$senha_nova'";
				$sql = $conexao->getUpdate($tabela,'usuario_pro',$_SESSION['usuario'], $formt);			
				$_SESSION['senha_aut'] = true;
				header('Location: ../page/pro_perfil_mudarsenha.php');
				exit();
			}else{
				$_SESSION['senha_naut'] = true;
				header('Location: ../page/pro_perfil_mudarsenha.php');
				exit();	
			}			
		}
  	}

  //Function Update
  	if (isset($_POST['update'])) {

	  	$nome     = trim($_POST['nome']);
		$email    = trim($_POST['email']);
		$cpf      = trim($_POST['cpf']);
		$telefone = trim($_POST['telefone']);
		$celular  = trim($_POST['celular']);
		$escolar  = trim($_POST['escolaridade']);
 		$sexo     = trim($_POST['sexo']);

		$tabela = 'profissional';

		$formt = "nome_pro='$nome', email_pro='$email', cpf_pro='$cpf', tel_pro='$telefone', cel_pro='$celular', sex_pro='$sexo', esc_pro='$escolar'";

		$sql = $conexao->getUpdate($tabela,'usuario_pro',$_SESSION['usuario'], $formt);

		if ($sql == 1) {
			header('Location: ../page/pro_perfil.php');
			exit();
		}else{
			echo "Deu Erro";
			exit();
		}

  	}

  //Function Deletar
  	if (isset($_GET['delete'])) {

  		$fun = $conexao->getDelete('profissional', 'usuario_pro', $_SESSION['usuario']);

  		if (isset($fun)){
  			unset($_SESSION['usuario']);
  			header('Location: ../index.php');
  		}else{
  			echo "Error";
  		}

  	}
  //Function GerarPDF
  	if(isset($_GET['pdf'])){
  		
  	}

  //Function Serviço
  	if (isset($_POST['serv'])) {
  		$tabela = 'profissional';
  		$campo = 'usuario_pro';
  		$usu = $_SESSION['usuario'];

  		$result = $conexao->getRead($tabela, $campo, $usu);
  		$id = $result['cod_pro'];
  		$serv = $_POST['servico'];
  		$tabela = 'pro_serv';
  		$campo = 'cod_pro, cod_serv';
		$dados = "'$id', '$serv'";

		//$result = $conexao->getCount($tabela,);

		$result = $conexao->getInsert($tabela,$campo,$dados);

		if ($result==true) {
		header('Location: ../page/pro_perfil_cad_serv.php');
		exit();
		}else{
		echo "Deu erro";
		}
		exit;
  	}


?>