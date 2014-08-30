<?php
	//Inclui o cabeçalho de conexão com o banco de dados 
	include("includes/header.php");

if(isset($cadastro)){
    include("views/home.php");
}else{
    include("views/cadastro.php");
}
?>