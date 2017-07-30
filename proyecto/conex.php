<?php
//Datos para la conexion
$servidor = "sql101.byethost12.com";
$bd = "b12_17285400_pagina_productos";
$usuario="b12_17285400";
$password = "Sara2836";

//Conectar a MySql
$conexion = mysql_connect($servidor, $usuario, $password)
or die('Error de conexion a mysql: '.mysql_error());
//if (!$conexion){
	//exit("Error de conexion a mysql: " + .mysql_error() );
//}

//seleccionar nuestra base de datos
$db_selected = mysql_select_db($bd, $conexion)
or die('Error: Select database: '.mysql_error());
//if(!$db_selected){
	//exit("Error de conexion a mysql: " + .mysql_error() );
//}else{
	//echo "Conexion exitosa.";
//}
 
?>
