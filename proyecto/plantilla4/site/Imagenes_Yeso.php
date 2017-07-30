<html>
	<head>
		<title>IMAGEN DE YESO</title>
		<link rel="stylesheet" type="text/css" href="index_style.css"/>
	</head>
			<div class="container">
			<br></br>
				<h1 style = "color:peru;"> TABLA IMAGEN DE YESO</h1>				
					<div class="left">
						<br>
						<a class="href" href= "imagen.php?agregar=imagenes">Agregar Imagen(es)</a>
						
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
				
				<body bgcolor="lightblue" class="practica_login1">
				
					<div class="center">
						<table border='1' cellpadding='0' cellspacing='0' width='600' bgcolor='#F6F6F6' bordercolor='#FFFFFF'> 
							<tr> 
								<td width='150' style='font-weight: bold'>ID </td> 
								<td width='150' style='font-weight: bold'>NOMBRE</td> 
								<td width='150' style='font-weight: bold'>IMAGEN</td> 
								<td width='150' style='font-weight: bold'>RUTA.</td> 								
								<td width='50' style='font-weight: bold'>MATERIAL.</td> 								 
								<td width='5' style='font-weight: bold'></td>  
							</tr>  
							<?php
								include "conex.php";
								session_start();
								@$material="Yeso";
								$sql = ("select * from imagenes where material_imagen = '$material'");
								$result =mysql_query ($sql); 

								while ($registro = mysql_fetch_array($result)){  
								$ruta =$registro['ruta'];							
									echo " 
										<tr> 
											<td width='150'>".$registro['id_imagen']."</td> 
											<td width='150'>".$registro['nombre_imagen']."</td> 
											<td width='150'><img src='".$ruta."'></td> 
														
											<td width='150'>".$registro['ruta']."</td> 											
											<td width='150'>".$registro['material_imagen']."</td> 																	
											<td width='150'></td> 																						
											</tr> 
										";  
								} 	
							?>						 				 				
						</table> 
				 
						
				
					</div>				
										<div class="right">
							<label style = "color:blue;"  align='RIGTH'>Eliminar Imagen</label>  
							<br>
							<?php
								$rutaEnServidor = "piezas";								
								include "conex.php";
								@$nombre_imagen=$_POST["nombre_imagen"];
								@$material=$_POST["rimagen"];
								$rutaEnServidor = "piezas";
		
								if($material == 1){
									$material = "Barro";
								} else{
									$material="Yeso";
								}				
		
								$consulta=mysql_query("select * from imagenes where nombre_imagen='$nombre_imagen' AND material_imagen = '$material' ");											
								if(mysql_num_rows($consulta)){
									while ($registro = mysql_fetch_array($consulta)){  
									$id =$registro[0];	
									$ruta =$registro[2];
									}
				
									$consulta= ("DELETE from imagenes  WHERE id_imagen = '$id' AND  material_imagen= '$material' ");			
									$resultado=mysql_query($consulta);	
			
									//	unlink('./htdocs/proyecto/plantilla4/site/piezas/$nombre_imagen');
									/*unlink($_FILES['imagen']['tmp_name']);
									unlink('');*/
									echo "Esta Imagen SE ELIMINÓ";
								}else{
									$consulta=mysql_query("select * from imagenes where nombre_imagen='$nombre_imagen' AND material_imagen = '$material' ");	
									$resultado=mysql_query($consulta);
									if($resultado){
									}else{
										echo "No se eliminó con exito";
									}
								}
							?>
							<form action="?" method="POST" enctype="multipart/form-data">
							<br>
							
							
							<label style = "color:blue;"  align='RIGTH'>Debe poner el tipo de archivo junto con en el nombre</label>  
							<p>Nombre de la Imagen:</label>
								<input type="text" name="nombre_imagen" />
							</p>
							<br>
							<p>Tipo de material:</label>
								<br>
								<input type="radio" name="rimagen" value="1" >Barro
								<br>					
								<input type="radio" name="rimagen" value="2"  checked>Yeso
								<br>
							</p>
							<br>
							<input type="submit" name="subir" value="Eliminar"/>
							</form>
							<br>
						</div>
					</div>
				</body>			
	</html>