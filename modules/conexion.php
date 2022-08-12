<?php
date_default_timezone_set('America/Mexico_City');
$servername = "https://school-system.dvtecam.com/";
$database = "u445726646_db_escuela";
$username = "u445726646_db_escuela";
$password = "Rompecaras2381208087";

$conexion = mysqli_connect($servername, $username, $password, $database);

if (mysqli_connect_errno()) {
	printf("Falló la conexión: %s\n", mysqli_connect_error());
	exit();
}

mysqli_set_charset($conexion, 'utf8');