<?php

// Globais
$title="SISQ";

// Conexão com o banco de dados
include("classes/DB.class.php");
$conectar = new DB;
$conectar = $conectar->conectar();

$query=pg_query("SELECT * FROM usuarios");
echo pg_num_rows($query);