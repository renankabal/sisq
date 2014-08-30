<?php
// starts
ob_start();
session_start();

// Globais
include("globais.php");

// Incluindo as classes
include("classes/Cadastro.class.php");
include("classes/DB.class.php");
include("classes/Login.class.php");

// Conexão com o banco de dados
$conectar = new DB;
$conectar = $conectar->conectar();

// Métodos
include("controllers/cadastro.php");
include("controllers/login.php");
include("controllers/logout.php");
include("controllers/check.php");
include("controllers/aprovar.php");
include("controllers/bloquear.php");
include("controllers/style.php");
