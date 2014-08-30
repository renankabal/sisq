<?php
// starts
ob_start();
session_start();

// Globais
$title="SISQ";
$startaction="";
$msg="";
$favicon="imagens/logo.ico";
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
					$conectar = new Cadastro;
					echo "<div class='flash'>";
					$conectar = $conectar->cadastrar($nome, $email, $senha);
					echo "</div>";

	}
}

// Método de login
if($startaction == 1){
	if($acao == "logar"){
		// Dados
		$email=$_POST["email"];
		$senha=sha1($_POST["senha"]."hxtutors");

		// var_dump($email);
		// var_dump($senha);
		// exit();

		// Falta fazer as validações aqui!!!!!!!
				
				// Executa a busca pelo usuário
				$login = new Login;
				echo "<div class='flash'>";
				$login = $login->logar($email, $senha);
				echo "</div>";
	}
}
// Método de Logout
if($startaction == 1){
	if($acao == "logout"){
		setcookie("logado", "");
		unset($_SESSION["email"], $_SESSION["senha"], $_SESSION["nivel"]);
	}
}
// Métodos de checar usuário
if(isset($_SESSION["email"]) && isset ($_SESSION["senha"])){
	$logado=1;
	$nivel=$_SESSION["nivel"];
}

// Variáveis de estilos
if(empty($msg)){
	$display="display:none";
}else{
	$display="display:block";	
}