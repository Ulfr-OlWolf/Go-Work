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
  if (isset($_POST['login'])) {
  	if (empty($_POST['login']) || empty($_POST['senha'])) {
		header('Location: ../page/login.php');
		exit();
	}

  	$login = $_POST['user'];
	$senha = $_POST['senha'];

  	$user = $conexao->getLogin($login,$senha,'cliente','usuario_cli','senha_cli');
 
   	if (empty($user)) {
   		$_SESSION['nao_aut'] = true;
		header('Location: ../page/login.php');
		exit();		
	}else{
		$_SESSION['usuario'] = $login;
		header('Location: ../page/cli_inicio.php');
		exit();
	}
  }


  //Function Cadastrar
  if (isset($_POST['cadastrar'])) {

  	$nome     = trim($_POST['nome']);
	$email    = trim($_POST['email']);
	$usuario  = trim($_POST['usuario']);
	$senha    = trim($_POST['senha']);
	$cpf      = trim($_POST['cpf']);
	$telefone = trim($_POST['telefone']);
	$celular  = trim($_POST['celular']);
	$sexo     = trim($_POST['sexo']);

	$tabela = 'cliente';


	$result = $conexao->getCount($tabela,'usuario_cli',$usuario);

	print_r($result);

	if ($result[0]==1) {
		$_SESSION['usuario_existe'] = true;
		header('Location: ../page/cadastro.php');
		exit();	
	}
	
	$campos = 'nome_cli, email_cli, usuario_cli, senha_cli, cpf_cli, tel_cli, cel_cli, sex_cli, datac_cli';
	$dados = "'$nome', '$email', '$usuario', '$senha', '$cpf', '$telefone', '$celular', '$sexo', NOW()";

	$sql = $conexao->getInsert($tabela,$campos,$dados);

	if ($sql==true) {
		$_SESSION['status_cadastro'] = true;
		header('Location: ../page/login.php');
		exit();
	}else{
		$_SESSION['status_cadastro'] = false;
		echo "Deu erro";
	}
	exit();
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

  	//Function UpdateSenha
  	if (isset($_POST['update-senha'])) {
  		
  		$senha_atual = trim($_POST['senha_a']);
  		$senha_nova = trim($_POST['senha_n']);
  		$senha_novav = trim($_POST['senha_nv']);

	  	$user = $conexao->getLogin($_SESSION['usuario'],$senha_atual,'cliente','usuario_cli','senha_cli');
	 
	   	if (empty($user)) {
	   		$_SESSION['senha_aaut'] = true;
	   		header('Location: ../page/cli_perfil_mudarsenha.php');
			exit();		
		}else{
			if ($senha_nova == $senha_novav) {
				$tabela = 'cliente';
				$formt = "senha_cli='$senha_nova'";
				$sql = $conexao->getUpdate($tabela,'usuario_cli',$_SESSION['usuario'], $formt);			
				$_SESSION['senha_aut'] = true;
				header('Location: ../page/cli_perfil_mudarsenha.php');
				exit();
			}else{
				$_SESSION['senha_naut'] = true;
				header('Location: ../page/cli_perfil_mudarsenha.php');
				exit();	
			}			
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

  	//Function recuperar senha
  	if (isset($_POST['recuperar_pass'])) {

  	  	$tabela = 'cliente';
        $campo = 'email_cli';
        $id = $_POST['email'];	
  		
  		$result = $conexao->getRead($tabela, $campo, $id);

  		if (isset($result)) {
  			$_SESSION['senha_rec'] = $result['senha_cli'];
  			header('Location: ../page/recuperar_pass.php');
  		}else{
  			echo "Error";
  			header('Location: ../page/recuperar_pass.php');
  		}
  	}

  	//Function autenticar cliente
  	if (isset($_POST['autenticar'])) {
  		$_SESSION['email_enviado'] = true;
  		header('Location: ../page/cli_perfil_aut.php');
  	}

?>



  