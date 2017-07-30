<html>
	<head>
		<title>EDITAR USUAARIO</title>
		<link rel="stylesheet" type="text/css" href="formulario.css" media="all" />
	</head>
			<br></br>
				<h1 > Editar Usuario</h1>
				
				<body bgcolor="lightblue">
					<div align='center'> 
					
					<?php				
						if(@$_POST["edita"]){
							include "conex.php";
							session_start();
							$_SESSION['id'];
							@$nombre=$_POST["nombre_usuario"];
							@$apellido=$_POST["apellido_usuario"];
							@$password=$_POST["password"];
							@$email=$_POST["email"];							
							@$cuenta=$_POST["rcliente"];
								 if($cuenta == 1)
								{
									$cuenta ="Cliente";						
								}  else{
									$cuenta="Usuario Comun";
									echo "entro mal";
								}
							
							$id =$_SESSION['id'];										
							$consulta= ("UPDATE usuarios SET nombre_usuario = '$nombre', apellido_usuario='$apellido', password = '$password',
											email= '$email', tipo_cuenta ='$cuenta' WHERE id_usuario = '$id'");
								$resultado=mysql_query($consulta);
							if($resultado){							
								echo '<p>Los datos se han modificado correctamente.</p>';	
								$_SESSION['id'];
								$id =$_SESSION['id'];	
									$sql = ("select * from usuarios where id_usuario = '$id'");
									$result =mysql_query ($sql); 
									while ($registro = mysql_fetch_array($result)){  
									
										$id="$registro[0]";
										$nom_usuario="$registro[1]";
										$ape_usuario="$registro[2]";
										$pass_usuario="$registro[3]";
										$ema_usuario="$registro[4]";
										$tipo_cuenta="$registro[5]";
										
										$_SESSION["usuario"]=$nom_usuario;
										$_SESSION["apellido"]=$ape_usuario;
										$_SESSION["password"]=$pass_usuario;
										$_SESSION["email"]=$ema_usuario;
										$_SESSION["cuenta"]=$tipo_cuenta;																							
									}
									if($cuenta ==="Cliente"){	
										header("Location:editar_usuario.php");
									}else{															
										echo' <script languaje="javascript">alert("Se cerrará sesión automaticamente ya que has cambiado el tipo de cuenta. Gracias ");</script>';									
										header("Location:../../index.php");
									}
							}else{
									echo '<p>Error al modificar los campos en la tabla.</p>';
							}
						}
							
				?>
				
				<form action="?" method="post">				
					<?php
					session_start();
						$_SESSION['id'];
							$_SESSION['usuario'];
							$_SESSION['apellido'];
							$_SESSION['password'];
							$_SESSION['email'];
							$_SESSION['cuenta'];
					?>				
				<label>Nombre</label>
					<input type="text" style="width:200px;height:28px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
						Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="nombre_usuario" value="<?php echo 	$_SESSION['usuario'];?>"><br>
					<label>Apellido</label>
						<input type="text" style="width:150px;height:23px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
							Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="apellido_usuario" value="<?php echo $_SESSION['apellido'];?>"><br>
					<label>Contraseña</label>
						<input type="password" style="width:150px;height:23px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
							Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="password" value="<?php  echo $_SESSION['password']; ?>"><br>						
					<label>Email</label>
						<input type="text" style="width:200px;height:30px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
							Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="email" value="<?php  echo $_SESSION['email']; ?>"><br>
					<label>Tipo de cuenta</label>	
					<div >					
						<input type="radio" name="rcliente" value="1" checked>Cliente<br>
						<input type="radio" name="rcliente" value="2">Usuario Común<br>
					</div>
								
					<input type="submit"  class="button button-block"  value="Guardar"  name="edita"/></input>
					<br></br>
						<label style ="color:red;"  >OJO!!! Se cerrará sesión automaticamente si  cambias el tipo de cuenta. Gracias</label>
				</form>
				</div>
				<br></br>
			<?php
				session_start();
				if(isset($_SESSION['usuario']) ){
					
			?>
					<a class="href" href= "index_cliente.php?regresar">Regresar  a(<?php echo $_SESSION['usuario'];?> )</a>
				<?php
				}else
					echo "Acceso denegado";
				?>
					
				
			</body>
	</html>