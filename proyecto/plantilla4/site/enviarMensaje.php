<?php

$mail ="j.a.och@hotmail.com";

$nombre = $_POST['Name'];
$correo_electronico= $_POST['Email'];
$opinion=$_POST['Opinion'];
$thank = "http://oropezachavez.byethost12.com/proyecto/plantilla4/site/index_usuariocomun.php#page_6/";

$message ="
Nombre: ".$nombre."
Email:  ".$correo_electronico."
Opinion: ".$opinion."
";
if(mail ($mail,"Nuevo Mensaje", $message))
	
Header("location: $thank");
echo 'mensaje enviado correctamente';

?> 