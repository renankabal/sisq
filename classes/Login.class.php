<?php

class Login{

	public function logar($email, $senha){

		$buscar=pg_query("SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'");

		if(pg_num_rows($buscar)!=0){
			$dados=pg_fetch_array($buscar);

			if ($dados["status"] == 1){
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
				$flash="Voce foi logado com sucesso";
			}else{
				if(empty($flash)){
				$flash="Usuario nao encontrado!";
				}
			}
			echo $flash;
	}
}