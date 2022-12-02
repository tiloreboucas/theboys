<?php
	$servidor = "127.0.0.1";
	$usuario = "root";
	$senha = "root";
	$dbname = "form_theboys";
	
	// criar a conexão
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	if (!$conn) {
    	printf("Can't connect to localhost. Error: %s\n", mysqli_connect_error());
	}