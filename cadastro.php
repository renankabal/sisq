<?php
	//Inclui o cabeçalho de conexão com o banco de dados 
	include("includes/header.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>	
	<link rel="shortcut icon" href="<?php echo $favicon; ?>" />
	<link rel="stylesheet" type="text/css" href="estilos/style.css">

	<script type="text/JavaScript">
	function up(lstr){ // converte minusculas em maiusculas
		var str=lstr.value; //obtem o valor
		lstr.value=str.toUpperCase(); //converte as strings e retorna ao campo
	}
	function down(lstr){ // converte maiusculas em minusculas
		var str=lstr.value; //obtem o valor
		lstr.value=str.toLowerCase(); //converte as strings e retorna ao campo
	}
	</script>

</head>
<body>

<div id="cadastrar"><a href="index.php" title="Faça login">Login &raquo;</a></div>
<div id="login" class="form bradius" style="top: 100px">
<center><img src="imagens/cadastrar.png"></center>
	<div class="message bradius" style="<?php echo $display; ?>"><?php echo $msg; ?></div>
	<div class="acomodar">
		<form action="?acao=cadastrar" method="POST">
		<label for="nome">Nome </label><input id="nome" onkeyup="up(this)" type="text" class="txt bradius" name="nome" autofocus /><br />
		<label for="email">Login </label><input id="email" onkeyup="down(this)" type="text" class="txt bradius" name="email" /><br />
		<label for="senha">Senha </label><input id="senha" type="password" class="txt bradius" name="senha" /><br />
		<input type="submit" class="sb bradius" value="Cadastrar" />
		</form>
		<!-- acomodar -->
	</div>
	<!-- fechamento login -->
</div>

</body>
</html>