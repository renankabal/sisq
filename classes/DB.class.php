<?php

	class DB{
		public function conectar(){
			// Falta melhorar esssa parte
			// $host="locahost";
			// $dbname="sisq";
			// $user="sisq";
			// $pass="sisq@sistemap2014";

			$conexao=pg_connect("host=localhost dbname=sisq user=sisq password=sisq@sistemap2014");

	   		return $conexao;

		}	

	}