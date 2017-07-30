<html>
	<head>

		<title>PEDIDO</title>
		<link rel="stylesheet" type="text/css" href="formulario.css" media="all" />

	</head>
			<div id="dowhile">
			<br></br>
				<h1 > PEDIDO</h1>				
					<label style = "color:blue;"  align='RIGTH'>TABLA PEDIDO</label>				
				<body bgcolor="lightblue" class="practica_login1">
					<div align='center'> 
						<table border='1' cellpadding='0' cellspacing='0' width='700' bgcolor='#F6F6F6' bordercolor='#FFFFFF'> 
							<tr> 
								<td width='150' style='font-weight: bold'>ID PEDIDO	</td> 
								<td width='150' style='font-weight: bold'>ID YESO</td> 
								<td width='150' style='font-weight: bold'>ID BARRO.</td> 
								<td width='150' style='font-weight: bold'>ID USUARIO.</td> 
								<td width='250' style='font-weight: bold'>NOMBRE PRODUCTO.</td> 								
								<td width='20' style='font-weight: bold'></td>  
							</tr>  
							<?php
								include "conex.php";
								session_start();	
									$sql = ("select * from producto_pedido ;");
									$result =mysql_query ($sql);
								while ($registro = mysql_fetch_array($result)){  
									echo " 
										<tr> 
											<td width='150'>".$registro['id_pedido']."</td> 
											<td width='150'>".$registro['id_produtco_yeso']."</td> 
											<td width='150'>".$registro['id_producto_barro']."</td> 
											<td width='150'>".$registro['id_usuario']."</td>
											<td width='150'>".$registro['nombre_producto']."</td> 																		
											<td width='150'></td> 
										</tr> 
									";  
								}				
				?>
				 </table> 
				 <br></br>							
					</div>
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