<?php

class Cadastro{

	public function cadastrar($nome, $email, $senha){

		// Tratamento das variáveis
		$nome = ucwords(strtolower($nome));
		$email = ucwords(strtolower($email));
		$senha = sha1($senha."hxtutors");

		$validaemail=pg_query("SELECT nome, email FROM usuarios WHERE email='$email'");
		$contar=pg_num_rows($validaemail);

		if($contar == 0){
		// Inserção no banco de dados
		$insert=pg_query("INSERT INTO usuarios (nome, email, senha, nivel, status, datacriacao) VALUES ('$nome', '$email', '$senha', 1, 0, now())");
		}else{
			$flash = "Desculpe, mas já existe um usuário cadastrado com este e-mail em nosso sistemas";	
		}
			if(isset($insert)){
				$flash = "Cadastro realizado com sucesso, aguarde a aprovacao do ADMINISTRADOR!";
			}else{
				if (empty($flash)){
				$flash = "Ops! Houve um erro em nosso sistema, contate o suporte!";
				}
			}
			// Retorno para o usuário
			echo $flash;
	}
}