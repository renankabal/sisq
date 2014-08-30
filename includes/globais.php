<?php

$title="SISQ";
$acao="";
$startaction="";
$msg="";
$idatual=$_SESSION["id"];
$pessoaatual=$_SESSION["nome"];
$emailatual=$_SESSION["email"];
$nivelatual=$_SESSION["nivel"];
$statusatual=$_SESSION["status"];
$favicon="imagens/logo.ico";
if(isset($_GET["acao"])){
	$acao = $_GET["acao"];
	$startaction=1;
}