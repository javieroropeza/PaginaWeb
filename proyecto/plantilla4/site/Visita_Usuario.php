<html>
	<head>

		<title>Clientes</title>
		<link rel="stylesheet" type="text/css" href="formulario.css" media="all" />

	</head>
			<div id="dowhile">
			<br></br>
				<h1 > Clientes</h1>
				
					<label style = "color:blue;"  align='RIGTH'>VISITA USUARIO COMUN</label>	
				
				<body bgcolor="lightblue" class="practica_login1">
					<div align='center'> 
						<table border='1' cellpadding='0' cellspacing='0' width='700' bgcolor='#F6F6F6' bordercolor='#FFFFFF'> 
							<tr> 
								<td width='150' style='font-weight: bold'>ID </td> 
								<td width='150' style='font-weight: bold'>NOMBRE</td> 
								<td width='150' style='font-weight: bold'>FECHA.</td> 
								<td width='150' style='font-weight: bold'>HORA.</td> 
								<td width='250' style='font-weight: bold'>IP.</td> 								
								<td width='350' style='font-weight: bold'>Tipo de Cuenta</td>  
								<td width='20' style='font-weight: bold'></td>  
							</tr>  
							<?php
								include "conex.php";
								session_start();
								@$cuenta="Usuario Comun";
								$sql = ("select * from visitas where tipo_cuenta = '$cuenta'");
								$result =mysql_query ($sql); 

								while ($registro = mysql_fetch_array($result)){  
									echo " 
										<tr> 
											<td width='150'>".$registro['id_usuario']."</td> 
											<td width='150'>".$registro['nombre_usuario']."</td> 
											<td width='150'>".$registro['fecha']."</td> 
											<td width='150'>".$registro['hora']."</td>
											<td width='150'>".$registro['ip']."</td> 							
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