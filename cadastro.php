<?php
	//Inclui o cabeçalho de conexão com o banco de dados 
	include("includes/header.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="estilos/style.css">
</head>
<body>

<div id="cadastrar"><a href="index.php" title="Faça login">Login &raquo;</a></div>
<div id="login" class="form bradius" style="top: 100px">
<center><img src="imagens/cadastrar.png"></center>
	<div class="message bradius" style="<?php echo $display; ?>"><?php echo $msg; ?></div>
	<div class="acomodar">
		<form action="?acao=cadastrar" method="POST">
		<label for="nome">Nome </label><input id="nome" type="text" class="txt bradius" name="nome" autofocus /><br />
		<label for="email">Login </label><input id="email" type="text" class="txt bradius" name="email" /><br />
		<label for="senha">Senha </label><input id="senha" type="password" class="txt bradius" name="senha" /><br />
		<input type="submit" class="sb bradius" value="Cadastrar" />
		</form>
		<!-- acomodar -->
	</div>
	<!-- fechamento login -->
</div>

</body>
</html>