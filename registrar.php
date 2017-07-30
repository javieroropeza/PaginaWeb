<html>

	<head>

	<title>Login</title>

	<link rel="stylesheet" type="text/css" href="formulario.css" media="all" />

	</head>
<br></br>
					<div id="dowhile">
						<h1 > Registrar</h1>
		<IMG SRC="nuevo.gif" WIDTH="200" HEIGHT="180" Hspace="200" Vspace="70" align="right">
	 <?php
					include "conexion.php";
					if(@$_POST["enviar"]){
						@$usuario=$_POST["usuario"];
						@$contrasena=$_POST["contrasena"];
						if(!empty($usuario)){
							if(!empty($contrasena)){
								$consulta="select * from usuarios where nombre='$usuario'";
								$resultado=mysql_query($consulta) or die (mysql_error());
								if (mysql_num_rows($resultado)>0){
									$error[3]="Este usuario ya existe.";
								}else{
									$consulta=("INSERT INTO usuarios VALUES('','$usuario','$contrasena')");
									$resultado=mysql_query($consulta) or die (mysql_error());
									echo' <script languaje="javascript">alert("Datos ingresados correctamente");</script>';
									mysql_close($link);
									header("location: login.php?");
								}
							}else{
									$error[1]="Ingrese la contrase&ntilde;a";
							}
						}else{
							$error[2]="Ingrese el usuario";
						}
					}
				?>

				<body bgcolor="yellow" class="practica_login1">
					<form action="?" method="post">
						<legend>Registrar</legend>
							<label>Usuario</label>
								<input type="text" name="usuario"><br>
								<?php echo @$error[2]; ?><br>
							<label>Contrase&ntilde;a</label>
								<input type="password" name="contrasena"><br>
								<?php echo @$error[1]; ?><br>
							<input type="submit"  value="Enviar"  name="enviar"><br>
								<?php echo @$error[3]; ?><br>
					</form>
				</body>
			</div>
</html>