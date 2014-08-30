<?php
// Liga o display erros
// init_set("php_value display_erros", "On");

// Globais
$title="SISQ";
$startaction="";
$msg="";
if(isset($_GET["acao"])){
	$acao = $_GET["acao"];
	$startaction=1;
}

// Incluindo as classes
include("classes/Cadastro.class.php");
include("classes/DB.class.php");
include("classes/Login.class.php");

// Conexão com o banco de dados
$conectar = new DB;
$conectar = $conectar->conectar();

// Método de cadastro
if($startaction == 1){
	if($acao == "cadastrar"){

		$nome=$_POST["nome"];
		$email=$_POST["email"];		
		$senha=$_POST["senha"];
		// Falta fazer as validações aqui!!!!!!!

		// if(empty($nome) || empty($email) || empty($senha)){
		// 	$msg="Preencha todos os campos!";	
		// }
		// // Todos os campos preenchidos
		// else{
		// 	// E-mail válido
		// 	if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		// 		// Senha inválida
		// 		if(strlen($senha) < 8){
		// 			$msg="Preencha todos os campos!";
		// 		}
		// 		//Senha válida
		// 		else{
					$conectar = new Cadastro;
					echo "<div class='flash'>";
					$conectar = $conectar->cadastrar($nome, $email, $senha);
					echo "</div>";
		// 		}
		// 	}
		// 	// E-mail inválido
		// 	else{
		// 		$msg="Digite seu e-mail corretamente!";
		// 	}
		// }

	}
}

// Método de login
if($startaction == 1){
	if($acao == "logar"){
		
	}
}

// Variáveis de estilos
if(empty($msg)){
	$display="display:none";
}else{
	$display="display:block";	
}