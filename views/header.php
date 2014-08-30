<!DOCTYPE html>
<?xml version="1.0" encoding="utf-8" /?>
<html lang="pt-br">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<head>
	<!-- Adiciona função JavaScript -->
	<script type="text/JavaScript">
	function up(lstr){ // converte minusculas em maiusculas
		var str=lstr.value; //obtem o valor
		lstr.value=str.toUpperCase(); //converte as strings e retorna ao campo
	}
	function down(lstr){ // converte maiusculas em minusculas
		var str=lstr.value; //obtem o valor
		lstr.value=str.toLowerCase(); //converte as strings e retorna ao campo
	}
	</script>
	<!-- Fim da função JavaCsript -->
	
	<title><?php echo $page; ?></title>
	<link rel="shortcut icon" href="<?php echo $favicon; ?>" />
	<link rel="stylesheet" type="text/css" href="estilos/style.css">
	
	<!-- Adicionado arquivos do BOOTSTRAP e JQUERY -->
	<link rel="stylesheet" href="estilos/bootstrap.min.css" />
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>