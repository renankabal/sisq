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
<div id="cadastrar"><a href="cadastro.php" title="Clique aqui para se cadastrar">Cadastre-se &raquo;</a></div>
<div id="login" class="form bradius">
<center><img src="imagens/logo.png"></center>
	<div class="message"  style="<?php echo $display; ?>"></div>
	<div class="acomodar">
		<form action="" method="POST">
		<label for="email">Login </label><input id="email" type="text" class="txt bradius" name="email" value="" autofocus required /><br />
		<label for="senha">Senha </label><input id="senha" type="password" class="txt bradius" name="senha" value="" required /><br />
		<input type="submit" class="sb bradius" value="Entrar" />
		</form>
		<!-- acomodar -->
	</div>
	<!-- fechamento login -->
</div>

</body>
</html>