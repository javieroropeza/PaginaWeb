<html>
	<head>

		<title>Clientes</title>
		<link rel="stylesheet" type="text/css" href="formulario.css" media="all" />

	</head>
			<div id="dowhile">
			<br></br>
				<h1 > Clientes</h1>
				
					<label style = "color:blue;"  align='RIGTH'>TABLA USUARIOS COMUNES</label>
				
				<body bgcolor="lightblue" class="practica_login1">
					<div align='center'> 
						<table border='1' cellpadding='0' cellspacing='0' width='800' bgcolor='#F6F6F6' bordercolor='#FFFFFF'> 
							<tr> 
								<td width='150' style='font-weight: bold'>ID </td> 
								<td width='150' style='font-weight: bold'>NOMBRE</td> 
								<td width='150' style='font-weight: bold'>APELLIDO.</td> 
								<td width='150' type ='password' style='font-weight: bold'>PASSWORD.</td> 
								<td width='250' style='font-weight: bold'>E-MAIL.</td> 
								<td width='390' style='font-weight: bold'>CUENTA.</td> 
								<td width='20' style='font-weight: bold'></td> 
							</tr>  
							<?php
								include "conex.php";
								session_start();
								@$cuenta="Usuario Comun";
								$sql = ("select * from usuarios where tipo_cuenta = '$cuenta'");
								$result =mysql_query ($sql); 

								while ($registro = mysql_fetch_array($result)){  
									echo " 
										<tr> 
											<td width='150'>".$registro['id_usuario']."</td> 
											<td width='150'>".$registro['nombre_usuario']."</td> 
											<td width='150'>".$registro['apellido_usuario']."</td> 
											<td width='150'>".$registro['password']."</td>
											<td width='150'>".$registro['email']."</td> 							
											<td width='150'>".$registro['tipo_cuenta']."</td> 
											<td width='150'></td> 
										</tr> 
									";  
								}				
				?>
				 </table> 
				 
				 <br></br>
				 	<?php
						session_start();
						if(isset($_SESSION['usuario']) ){	
						?>
					<a class="href" href= "index.php?cerrar=session">Pagina Principal  (<?php echo $_SESSION['usuario'];?>)</a>
				<?php
				}else
					echo "Acceso denegado";
				?>
				 
				 </div> 
				</body>
			</div>
	</html>