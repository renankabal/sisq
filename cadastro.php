<!DOCTYPE html>
<html>
<head>
	<title>SISQ</title>
	<link rel="stylesheet" type="text/css" href="estilos/style.css">
</head>
<body>

<div id="cadastrar"><a href="index.php" title="Faça login">Login &raquo;</a></div>
<div id="login" class="form bradius" style="top: 100px">
<center><img src="imagens/cadastrar.png"></center>
	<div class="message"></div>
	<div class="acomodar">
		<form action="" method="POST">
		<label for="nome">Nome </label><input id="nome" type="text" class="txt bradius" name="nome" autofocus required/><br />
		<label for="email">Login </label><input id="email" type="text" class="txt bradius" name="email" required/><br />
		<label for="senha">Senha </label><input id="senha" type="password" class="txt bradius" name="senha" required/><br />
		<input type="submit" class="sb bradius" value="Cadastrar" />
		</form>
		<!-- acomodar -->
	</div>
	<!-- fechamento login -->
</div>

</body>
</html>