<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="formulario.css" media="all" />

	</head>
			<div id="dowhile">
			<br></br>
				<h1 > Entrar</h1>
				<IMG SRC="usuario.gif" WIDTH="200" HEIGHT="180" Hspace="200" Vspace="70" align="right">
				<!--datos para que inicie sesion la maestra -->
			<label>Usuarios con estos usuarios puede acceder a la base de datos.</label>
			<label>Nombre : javier Password: javier</label>
			<label>Nombre : sara Password: sara</label>
			<label>Nombre : lulu Password: lulu</label>
			<?php $vacio=1; ?>
				<?php
				//abres tu conexion
					include "conexion.php";
					session_start();
					if(@$_POST["enviar"]){
						@$usuario=$_POST["usuario"];//tu variable del formulario que obtiene el nombre
						@$contrasena=$_POST["contrasena"];//tu variable del formulario que obtiene la contraseña
						if(!empty($usuario)){//estos if son errores en caso de no intoducir un nombre o una contraseña correcta
							if(!empty($contrasena)){
								//hace la consulta para ver si tiene esos datos
								$consulta=mysql_query("select * from usuarios where nombre = '$usuario' and password = '$contrasena'");
								$arreglo = mysql_fetch_array($consulta);
								//$result =mysql_query ($sql); 
								//$total = mysql_num_rows(mysql_query("select * from usuarios where nombre = '$usuario' and password = '$contrasena'"));
								if(mysql_num_rows($consulta)){//en caso de que la consulta tenga datos los pone en un arreglo
								//	$_SESSION["usuario"]=$arreglo["nombre"];
									//esta consulta es para verificar el usuario
									$sql=("select * from usuarios where nombre = '$usuario' and password = '$contrasena'");
									$result =mysql_query ($sql);//mete los datos en el arreglo
										while ($registro = mysql_fetch_array($result)){  
											$id_alumno="$registro[0]."; //obtengo el id del alumno para poder extraer los datos de todas las tablas
									}
									$_SESSION["id_alumno"]=$arreglo["id"];//obtengo el id del alumno
									$_SESSION["nombre"]=$arreglo["nombre"];//obtengo el nombre del alumno
									session_start();//inicio sesion 
									header("location: PaginaPrincipal.php");//en caso de que sea correcto el usuario y contraseña abre la pagina principal 
								}else{ 
									$error[3]="Usuario o Contrase&ntilde;a incorrecta";//estos son los errores
								}
							}else{
								$error[1]="Ingrese la contrase&ntilde;a";
							}
						}else{
							$error[2]="Ingrese el usuario";
						}
					}
				?>
				
				<body bgcolor="lightblue" class="practica_login1">
					<form action="?" method="post">
						<legend>Login</legend><!--este es el formulario -->
							<label>Usuario</label>
								<input type="text" name="usuario"><br>
								<?php echo @$error[2]; ?><br><!--estos son para los errores dependiendo cual sea -->
							<label>Contrase&ntilde;a</label>
								<input type="password" name="contrasena"><br>
								<?php echo @$error[1]; ?><br>
							<input type="submit"  value="Enviar"  name="enviar"><br>
							<?php echo @$error[3]; ?><br>
					</form>
				</body>
			</div>
	</html>