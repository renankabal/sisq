<?php

if($startaction == 1 && $acao == "logout"){
		setcookie("logado", "");
		unset($_SESSION["email"], $_SESSION["senha"], $_SESSION["nivel"]);
}