<html>
	<head>

		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="formulario.css" media="all" />

	</head>
			<div id="dowhile">
			<br></br>
				<h1 > Login</h1>
				<IMG SRC="usuario.gif" WIDTH="200" HEIGHT="180" Hspace="200" Vspace="70" align="right">

				<?php
					include "conexion.php";
					session_start();
					if(@$_POST["enviar"]){
						@$usuario=$_POST["usuario"];
						@$contrasena=$_POST["contrasena"];
						if(!empty($usuario)){
							if(!empty($contrasena)){
								$consulta=mysql_query("select * from usuarios where nombre = '$usuario' and password = '$contrasena'");
								if(mysql_num_rows($consulta)){
									$arreglo = mysql_fetch_array($consulta);
									$_SESSION["usuario"]=$arreglo["nombre"];
									session_start();
									header("location: bienvenidos.php");
								}else{ 
									$error[3]="Usuario o Contrase&ntilde;a incorrecta";
								}
							}else{
								$error[1]="Ingrese la contrase&ntilde;a";
							}
						}else{
							$error[2]="Ingrese el usuario";
						}
					}else{
							$consulta=mysql_query("insert into usuarios values nombre = '$usuario' and password = '$contrasena'");
						}
				?>
	 
				<body bgcolor="lightblue" class="practica_login1">
					<form action="?" method="post">
						<legend>Login</legend>
							<label>Usuario</label>
								<input type="text" name="usuario"><br>
								<?php echo @$error[2]; ?><br>
							<label>Contrase&ntilde;a</label>
								<input type="password" name="contrasena"><br>
								<?php echo @$error[1]; ?><br>
							<input type="submit"  value="Enviar"  name="enviar"><br>
								<?php echo @$error[3]; ?><br>
					</form>
					<form name="myform" action="registrar.php" method="POST">
						<input id="campo4"  name="registrar" type="submit" value="Registrar" />
					</form>

				</body>
			</div>
	</html>