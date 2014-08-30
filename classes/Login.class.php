<?php

class Login{

	public function logar($email, $senha){

		$buscar=pg_query("SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'");

		if(pg_num_rows($buscar)!=0){
			$dados=pg_fetch_array($buscar);

			if ($dados["status"] == 1){
				$_SESSION["id"] = $dados["id"];
				$_SESSION["nome"] = $dados["nome"];
				$_SESSION["email"] = $dados["email"];
				$_SESSION["senha"] = $dados["senha"];
				$_SESSION["nivel"] = $dados["nivel"];
				setcookie("logado", 1);
				$log=1;
			}else{
				$flash="Aguarde a aprovação do ADMINISTRADOR";
			}
		}
			if(isset($log)){
				// var_dump($dados);				
				$flash="Seja Bem Vindo";				
			}else{
				if(empty($flash)){
				$flash="Usuario nao encontrado!";
				}
			}
			echo $flash;
	}
}