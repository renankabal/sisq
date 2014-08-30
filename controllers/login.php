<?php

if($startaction == 1 && $acao == "logar"){
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