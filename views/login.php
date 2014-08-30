<?php

$page="Login";
include("header.php");
?>
<!-- Botão de cadastrar novo usuário -->
<div id="cadastrar"><a href="cadastro.php" title="Clique aqui para se cadastrar">Cadastre-se &raquo;</a></div>
<!-- Div do menu de logar -->
<div id="login" class="form bradius">
<!-- Iagem do sistema -->
<center><img src="imagens/logo.png"></center>
	<div class="message"  style="<?php echo $display; ?>"></div>
	<div class="acomodar">
		<form action="index.php?acao=logar" method="POST">
		<label for="email">Login </label><input onkeyup="down(this)" placeholder="Digite seu login" id="email" type="text" class="txt bradius" name="email" value="" autofocus /><br />
		<label for="senha">Senha </label><input placeholder="Digite sua senha" id="senha" type="password" class="txt bradius" name="senha" value="" /><br />
		<input type="submit" class="btn btn-primary btn-lg btn-block" value="Entrar" />
		</form>
		<!-- acomodar -->
	</div>
	<br />
	<!-- fechamento login -->
<h6><center>
Todos os diretos reservados copyright ©
</center></h6>
</div>
	<!-- boneco do rodapé -->
<!-- 	<footer class="footer">
		<img src="imagens/super-RH1.png">
	</footer> -->
	<!-- fim do rodapé -->
</body>
</html>