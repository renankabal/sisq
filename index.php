<?php
//Inclui o cabeçalho de conexão com o banco de dados 
include("includes/header.php");

if(isset($logado)){
    include("templates/home.php");
}else{
    include("templates/login.php");
}
?>