<html>
	<head>
		<title>Proveedores</title>
		<link rel="stylesheet" type="text/css" href="index_style.css"/>
	</head>
	<div class="container">
					<h1 style = "color:peru;"> AGREGAR PROVEEDOR</h1>				
	<body bgcolor="lightblue" class="practica_login1">
				
					<div class="center">
	<?php
						session_start();
						if(isset($_SESSION['usuario']) ){	
						?>
					<a class="href" href= "Proveedor.php?cerrar=session">Pagina Principal  (<?php echo $_SESSION['usuario'];?>)</a>
				<?php
				}else
					echo "Acceso denegado";
				?>
				<br>
				<?php
							include "conex.php";
								@$nombre=$_POST["nombre_proveedor"];
								@$tel=$_POST["telefono"];
								@$nproducto=$_POST["nombre_producto"];
								@$precio=$_POST["precio"];
								@$exispro=$_POST["existente_proveedor"];
								@$exisbo=$_POST["existente_bodega"];
								@$material=$_POST["rmaterial"];															
								
								$consulta=mysql_query("select * from proveedores where nombre_proveedor='$nombre' AND material_producto = '$material'");								
								if(mysql_num_rows($consulta)){
									while ($registro = mysql_fetch_array($consulta)){  
										$id =$registro[0];	
									}													
									$consulta= ("UPDATE proveedores SET id_proveedor='$id', id_producto='$id', nombre_proveedor = '$nombre', telefono='$tel', nombre_producto= '$nproducto', material_imagen= '$material',
									               precio_producto='$precio', existente_proveedor= '$exispro', existente_bodega= '$exisbo' WHERE id_producto = '$id'");			
									$resultado=mysql_query($consulta);				
									

									//tabla producto_existente
									if($material==1){
										$material="Barro";
										$consul= ("UPDATE producto_existente SET id_producto_barro='$id', nombre_producto='$nproducto', existente_proveedor='exispro', 
													existente_bodega='exisbo',	material= '$material' WHERE id_producto_barro = '$id'");			
										$resultado=mysql_query($consul);
									}else{										
										$material="Yeso";
										$consul= ("UPDATE producto_existente SET id_producto_yeso='$id', nombre_producto='$nproducto', existente_proveedor='exispro', 
													existente_bodega='exisbo',	material= '$material' WHERE id_producto_barro = '$id'");			
										$resultado=mysql_query($consul);
									}																	
																		
									echo "Este Proveedor  ya EXISTE solo se actualizó";
								}else{									
								if($material==1){
										$material="Barro";
										$consulta=("INSERT INTO proveedores VALUES('','0','$nombre','$tel','$nproducto','$material','$precio','$exispro','$exisbo')");
										$resultado=mysql_query($consulta);
									}else{
										$material="Yeso";
										$consulta=("INSERT INTO proveedores VALUES('','0','$nombre','$tel','$nproducto','$material','$precio','$exispro','$exisbo')");
										$resultado=mysql_query($consulta);
										
									}
																												
										//tabla producto_existente
										if($material==1){
											$material="Barro";
											$consul=("INSERT INTO producto_existente VALUES('','0','$nproducto','$exispro','$exisbo','$material')");
											$resultado=mysql_query($consul);
										}else{
											$material="Yeso";
											$consul=("INSERT INTO producto_existente VALUES('','0','$nproducto','$exispro','$exisbo','$material')");
											$resultado=mysql_query($consul);
										}
									//verificar
										$consu=("select * from proveedores where nombre_proveedor='$nombre' ");
										$resultad=mysql_query($consu);
										if(mysql_num_rows($resultad)){
											echo'Datos ingresados correctamente';																		
										}else{
											echo' <script languaje="javascript">alert("Los Datos no se ingresaron correctamente. Ocurrio un error vuelvalo a intentar ");</script>';
										}												
								}
							?>
						<label style = "color:peru;"  align='RIGTH'>Introduzca los </label>  <br>
						<label style = "color:peru;"  align='RIGTH'>datos del proveedor a GUARDAR</label>  <br>
							<br>
							<form action="?" method="post">				
								<br>							
							<p>Nombre Proveedor:</label><br>
								<input type="text"  style="width:200px;height:28px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
						Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="nombre_proveedor" /><br>
							</p>						
							<p>Telefono:</label><br>
								<input type="text" style="width:200px;height:28px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
						Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="telefono" /><br>
							</p>							
							<p>Nombre Producto:</label><br>
								<input type="text" style="width:200px;height:28px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
						Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="nombre_producto" /><br>
							</p>														
							<p>Tipo de material:</label>					
								<br>								 
									<input type="radio" name="rmaterial" value="1"   checked >Barro								
								<br>					
								<input type="radio" name="rmaterial" value="2"  checked>Yeso				
								<br>
							</p>							
							<p>Precio del Producto:</label><br>
								<input type="text"  style="width:200px;height:28px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
						Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="precio" /><br>
							</p>							
							<p>Existente Con el Proveedor:</label><br>
								<input type="text"  style="width:200px;height:28px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
						Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="existente_proveedor" /><br>
							</p>							
							<p>Existente en Bodega:</label><br>
								<input type="text"  style="width:200px;height:28px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
						Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="existente_bodega"/><br>
							</p>																				
							<input type="submit" name="editar" value="GUARDAR"/>
							</form>	
						</div>													
					</div>
</html>	