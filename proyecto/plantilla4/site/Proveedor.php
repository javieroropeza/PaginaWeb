<html>
	<head>

		<title>Clientes</title>
		<link rel="stylesheet" type="text/css" href="formulario.css" media="all" />

	</head>
			<div id="dowhile">
			<br></br>
				<h1 > Clientes</h1>
				
					<label style = "color:blue;"  align='RIGTH'>TABLA CLIENTES</label>												
						
						<div class="left">
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
											<br></br>
					<a class="href" href= "agregar_proveedores.php?cerrar=session">Agregar Proveedor  (<?php echo $_SESSION['usuario'];?>)</a>
					
				</div>
						
						
					<body bgcolor="lightblue" class="practica_login1">
					<div align='center'> 
						<table border='1' cellpadding='0' cellspacing='0' width='700' bgcolor='#F6F6F6' bordercolor='#FFFFFF'> 
							<tr> 
								<td width='150' style='font-weight: bold'>ID PROVEEDOR</td> 
								<td width='150' style='font-weight: bold'>ID PRODUCTO</td> 
								<td width='150' style='font-weight: bold'>NOMBRE PROVEEDOR.</td> 
								<td width='150' style='font-weight: bold'>TELEFONO.</td> 
								<td width='250' style='font-weight: bold'>NOMBRE PRODUCTO.</td> 
								<td width='390' style='font-weight: bold'>MATERIAL.</td> 
								<td width='390' style='font-weight: bold'>PRECIO.</td> 
								<td width='390' style='font-weight: bold'>EXISTENCIA EN PROVEEDOR.</td> 
								<td width='390' style='font-weight: bold'>EXISTENCIA EN BODEGA.</td> 
								<td width='20' style='font-weight: bold'></td>  
							</tr>  
							<?php
								include "conex.php";
								session_start();
								
								$sql = ("select * from proveedores ");
								$result =mysql_query ($sql); 

								while ($registro = mysql_fetch_array($result)){  
									echo " 
										<tr> 
											<td width='150'>".$registro['id_proveedor']."</td> 
											<td width='150'>".$registro['id_producto']."</td> 
											<td width='150'>".$registro['nombre_proveedor']."</td> 
											<td width='150'>".$registro['telefono']."</td>
											<td width='150'>".$registro['nombre_producto']."</td> 							
											<td width='150'>".$registro['material_producto']."</td> 
											<td width='150'>".$registro['precio_producto']."</td> 
											<td width='150'>".$registro['existente_proveedor']."</td> 
											<td width='150'>".$registro['existente_bodega']."</td> 
											<td width='150'></td> 
										</tr> 
									";  
								}				
				?>
				 </table> 
				 <br></br>
				
				 </div> 
				 
				 <div class="rigt">
						<br></br>
											
							<label style = "color:blue;"  align='RIGTH'>Eliminar Proveedor</label>  
							<br>
							<?php							
								include "conex.php";							
								@$nombre=$_POST["nombre"];
								@$material=$_POST["rimagen"];								
		
								if($material == 1){
									$material = "Barro";
								} else{
									$material="Yeso";
								}				
		
								$consulta=mysql_query("select * from proveedores where nombre_proveedor='$nombre' AND material_producto = '$material' ");											
								if(mysql_num_rows($consulta)){
									while ($registro = mysql_fetch_array($consulta)){  
									$id =$registro[0];	
									$ruta =$registro[2];
									}
				
									$consulta= ("DELETE from proveedores  WHERE id_proveedor = '$id' AND  material= '$material' ");			
									$resultado=mysql_query($consulta);												
									echo "Este Proveedor SE ELIMINÓ";
								}else{
									$consulta=mysql_query("select * from proveedores where nombre_proveedor='$nombre' AND material = '$material' ");	
									$resultado=mysql_query($consulta);
									if($resultado){
									}else{
										echo "No se eliminó con exito";
									}
								}
							?>
							<form action="?" method="POST" enctype="multipart/form-data">
							<br>																				
							<p>Nombre del Proveedor:</label>
								<input type="text" name="nombre" />
							</p>
							<br>
							<p>Material que trabaja:</label>
								<br>
								<input type="radio" name="rimagen" value="1" checked>Barro
								<br>					
								<input type="radio" name="rimagen" value="2"  >Yeso
								<br>
							</p>
							<br>
							<input type="submit" name="subir" value="Eliminar"/>
							</form>
							<br>						
						
					</div>
				 
				</body>
			</div>
	</html>