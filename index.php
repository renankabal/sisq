    <script>
    var timeScreen=0;
    var limitToStart=0; // 0 é igual a 1 minuto com o mouse parado vai aparecer o efeito
    var divScreen;

    window.onload=function(){
        divScreen=document.getElementById("screen");
        setInterval(startScreen, 3000);

    document.onmousemove=function(){
        var d = new Date();
        var hours = d.getHours();
        var minutes = d.getMinutes();
        timeScreen=""+hours+""+minutes+"";
        divScreen.style.display='none';
    }
    document.onkeydown=function(){
        var d = new Date();
        var hours = d.getHours();
        var minutes = d.getMinutes();
        timeScreen=""+hours+""+minutes+"";
        divScreen.style.display='none';
    }

    function startScreen(){
        var d = new Date();
        var hours = d.getHours();
        var minutes = d.getMinutes();
        currentTime=""+hours+""+minutes+"";
            if(timeScreen > 0 && Number(timeScreen)+limitToStart  <  currentTime){
                divScreen.style.display='block';
            }
    }

}
</script>
<?php
//Inclui o cabeçalho de conexão com o banco de dados 
include("includes/header.php");

?>

<!DOCTYPE html>
<?xml version="1.0" encoding="utf-8" ?>
<html lang="pt-br">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<head>
	<title><?php echo $title; ?></title>
	<link rel="shortcut icon" href="<?php echo $favicon; ?>" />
	<link rel="stylesheet" type="text/css" href="estilos/style.css">
</head>
    <!-- Aqui começa a modal de proteção de tela -->
<!--     <div id="screen" class="modal">
        <table border="0" width="100%">
            <tr>
                <td>
                    <center><img src="imagens/teste.jpg"></center>
                </td>
            </tr>
        </table>
    </div> -->
    <!-- fim da modal de proteção -->
<body>
<!-- Botão de cadastrar novo usuário -->
<div id="cadastrar"><a href="cadastro.php" title="Clique aqui para se cadastrar">Cadastre-se &raquo;</a></div>
<!-- Div do menu de logar -->
<div id="login" class="form bradius">
<!-- Iagem do sistema -->
<center><img src="imagens/logo.png"></center>
	<div class="message"  style="<?php echo $display; ?>"></div>
	<div class="acomodar">
		<form action="?acao=logar" method="POST">
		<label for="email">Login </label><input placeholder="Digite seu login" id="email" type="text" class="txt bradius" name="email" value="" autofocus /><br />
		<label for="senha">Senha </label><input placeholder="Digite sua senha" id="senha" type="password" class="txt bradius" name="senha" value="" /><br />
		<input type="submit" class="sb bradius" value="Entrar" />
		</form>
		<!-- acomodar -->
	</div>
	<br />
	<!-- fechamento login -->
<h6><center>copyright ©</center></h6>
</div>
	<!-- boneco do rodapé -->
<!-- 	<footer class="footer">
		<img src="imagens/super-RH1.png">
	</footer> -->
	<!-- fim do rodapé -->
</body>
</html>