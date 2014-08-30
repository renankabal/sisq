<?php

if($startaction == 1 && $acao == "cadastrar"){

		$nome=$_POST["nome"];
		$email=$_POST["email"];		
		$senha=$_POST["senha"];
		// Falta fazer as validações aqui!!!!!!!
					$conectar = new Cadastro;
					echo "<div class='flash'>";
					$conectar = $conectar->cadastrar($nome, $email, $senha);
					echo "</div>";
}