<html>
	<head>
		<title>Producto Barro</title>
		<link rel="stylesheet" type="text/css" href="index_style.css"/>
	</head>
			<div class="container">
			<br></br>
				<h1 style = "color:peru;"> Producto Barro</h1>													
						<div class="left">
						<br></br>
						<?php
							include "conex.php";
							session_start();
							if(isset($_SESSION['usuario']) ){	
						?>
						<a class="href" href= "index.php?cerrar=session">Pagina Principal  (<?php echo $_SESSION['usuario'];?>)</a>
						<?php
							}else
								echo "Acceso denegado";															
						?>							
												<label style = "color:blue;"  align='RIGTH'>Eliminar Imagen</label>  
							<br>
							<?php								
								@$nombre=$_POST["nombre_producto"];
								@$material=$_POST["rimagen"];								
		
								if($material == 1){
									$material = "Barro";
								} else{
									$material="Yeso";
								}				
		
								$consulta=mysql_query("select * from producto_barro where nombre_prod_barro='$nombre' AND material = '$material' ");											
								if(mysql_num_rows($consulta)){
									while ($registro = mysql_fetch_array($consulta)){  
									$id =$registro[0];	
									$ruta =$registro[2];
									}
				
									$consulta= ("DELETE from producto_barro  WHERE id_producto_barro = '$id' AND  material= '$material' ");			
									$resultado=mysql_query($consulta);												
									echo "Este Producto SE ELIMINÓ";
								}else{
									$consulta=mysql_query("select * from producto_barro where nombre_prod_barro='$nombre' AND material = '$material' ");	
									$resultado=mysql_query($consulta);
									if($resultado){
									}else{
										echo "No se eliminó con exito";
									}
								}
							?>
							<form action="?" method="POST" enctype="multipart/form-data">
							<br>																				
							<p>Nombre del Producto:</label>
								<input type="text" name="nombre_producto" />
							</p>
							<br>
							<p>Tipo de material:</label>
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

					<body bgcolor="lightblue" class="practica_login1">								
					<div class="center">						
						<head>	
			<br></br>			
				
					<label style = "color:blue;"  align='RIGTH'>TABLA Productos</label>
							<table border='1' cellpadding='0' cellspacing='0' width='700' bgcolor='#F6F6F6' bordercolor='#FFFFFF'> 
							<tr> 
								<td width='150' style='font-weight: bold'>ID PRODUCCTO</td> 
								<td width='150' style='font-weight: bold'>ID IMAGEN</td> 
								<td width='150' style='font-weight: bold'>ID PEDIDO.</td> 
								<td width='150' style='font-weight: bold'>NOMBRE PRODUCTO.</td> 
								<td width='250' style='font-weight: bold'>PRECIO.</td> 
								<td width='390' style='font-weight: bold'>MATERIAL</td> 
								<td width='20' style='font-weight: bold'></td>  
							</tr>  
							<?php
								include "conex.php";
								session_start();
								@$cuenta="Cliente";
								$sql = ("select * from producto_barro");
								$result =mysql_query ($sql); 

								while ($registro = mysql_fetch_array($result)){  
									echo " 
										<tr> 
											<td width='150'>".$registro['id_producto_barro']."</td> 
											<td width='150'>".$registro['id_imagen']."</td> 
											<td width='150'>".$registro['id_pedido']."</td> 
											<td width='150'>".$registro['nombre_prod_barro']."</td>
											<td width='150'>".$registro['precio_barro']."</td> 							
											<td width='150'>".$registro['material']."</td> 
											<td width='150'></td> 
										</tr> 
									";  
								}				
				?>
				 </table> 
				 <br></br>
						</div>
						
						<div class="rigth">
							<label style = "color:blue;"  align='RIGTH'>Agregar Producto</label>  
							<br>
							<?php
								include "conex.php";
								@$nombre_producto=$_POST["nombre_producto"];
								@$material=$_POST["rmaterial"];
								@$precio=$_POST["precio"];				

								if($material == 1){
									$material = "Barro";
									$consulta=mysql_query("select * from producto_barro where nombre_prod_barro='$nombre_producto' AND material = '$material' ");											
									if(mysql_num_rows($consulta)){		
												echo"hi";
											while ($registro = mysql_fetch_array($consulta)){  
											$id =$registro[0];	
										}									
										$consult= ("UPDATE producto_barro SET id_prod_barro='$id', id_imagen = '$id', nombre_prod_barro='$nombre_producto', precio_barro ='$precio', material= '$material'
									               WHERE id_producto_barro = '$id'");			
										$resultado=mysql_query($consult);
									}else{
													
										$consult=("INSERT INTO producto_barro VALUES('','0','0','$nombre_producto','$precio','$material')");
										$resultado=mysql_query($consult);
									}																	
								} else{
									$material="Yeso";									
									$consulta=mysql_query("select * from productos_yeso where nombre_prod_yeso='$nombre_producto' AND material = '$material' ");											
									if(mysql_num_rows($consulta)){												
											while ($registro = mysql_fetch_array($consulta)){  
											$id =$registro[0];	
										}									
										$consult= ("UPDATE productos_yeso SET id_producto_yeso='$id', id_imagen = '$id', nombre_prod_yeso='$nombre_producto', precio_yeso ='$precio', material= '$material'
									               WHERE id_producto_yeso = '$id'");			
										$resultado=mysql_query($consult);

										}else{											
										$consult=mysql_query("INSERT INTO productos_yeso VALUES('','0','0','$nombre_producto','$precio','$material')");																																			
									}				
								}
							?>
							
					<label style = "color:peru;"  align='RIGTH'>Introduzca los </label>  <br>
						<label style = "color:peru;"  align='RIGTH'>datos del producto a GUARDAR</label>  <br>
							<br>
							<form action="?" method="post">									
								<br>																			
							<p>Nombre Producto:</label><br>
								<input type="text" style="width:200px;height:28px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
						Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="nombre_producto" /><br>
							</p>														
							<p>Tipo de material:</label>					
								<br>								 
									<input type="radio" name="rmaterial" value="1"   checked >Barro								
								<br>					
								<input type="radio" name="rmaterial" value="2"  >Yeso				
								<br>
							</p>							
							<p>Precio del Producto:</label><br>
								<input type="text"  style="width:200px;height:28px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
						Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="precio" /><br>
							</p>							
							<input type="submit" name="editar" value="GUARDAR"/>
							</form>	
						</div>
					</div>
				</body>			
	</html>			