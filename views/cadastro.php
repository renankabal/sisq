<?php

$page="Cadastro";
include("header.php");
?>

<div id="cadastrar"><a href="index.php" title="Faça login">Login &raquo;</a></div>
<div id="login" class="form bradius" style="top: 100px">
<center><img src="imagens/cadastrar.png"></center>
	<div class="message bradius" style="<?php echo $display; ?>"><?php echo $msg; ?></div>
	<div class="acomodar">
		<form action="cadastro.php?acao=cadastrar" method="POST">
		<label for="nome">Nome </label><input id="nome" onkeyup="up(this)" type="text" class="txt bradius" name="nome" autofocus /><br />
		<label for="email">Login </label><input id="email" onkeyup="down(this)" type="text" class="txt bradius" name="email" /><br />
		<label for="senha">Senha </label><input id="senha" type="password" class="txt bradius" name="senha" /><br />
		<input type="submit" class="btn btn-primary btn-lg btn-block" value="Cadastrar" />
		</form>
		<!-- acomodar -->
	</div>
	<!-- fechamento login -->
</div>

</body>
</html>