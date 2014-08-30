<?php

$title="SISQ";
$acao="";
$startaction="";
$msg="";
$favicon="imagens/logo.ico";
if(isset($_GET["acao"])){
	$acao = $_GET["acao"];
	$startaction=1;
}