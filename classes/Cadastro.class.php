<?php

class Cadastro{

	public function cadastrar($nome, $email, $senha){

		// Tratamento das variáveis
		$nome = ucwords(strtolower($nome));
		$email = ucwords(strtolower($email));
		$senha = sha1($senha."hxtutors");

		// Inserção no banco de dados
		$insert=pg_query("INSERT INTO usuarios (nome, email, senha, nivel, status, datacriacao) VALUES ('$nome', '$email', '$senha', 1, 0, now())");
		if(isset($insert)){
			$flash = "Cadastro realizado com sucesso, aguarde a aprovação do ADMINISTRADOR!";
		}else{
			$flash = "Ops! Houve um erro em nosso sistema, contate o suporte!";
		}
		// Retorno para o usuário
		echo $flash;
	}
}