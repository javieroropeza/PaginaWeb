<html>
	<head>
		<title>EDITAR USUAARIO</title>
		<link rel="stylesheet" type="text/css" href="formulario.css" media="all" />
	</head>
			<br></br>
				<h1 > Editar Usuario</h1>
				
				<?php
				session_start();
				if(isset($_SESSION['usuario']) ){
					
			?>
					<a class="href" href= "Proveedor.php?regresar">Regresar  (<?php echo $_SESSION['usuario'];?> )</a>
				<?php
				}else
					echo "Acceso denegado";
				?>
				
				<body bgcolor="lightblue">
					<div align='center'> 
					
					<?php										
							include "conex.php";
							session_start();							
							@$material=$_POST["rproveedor"];
							$nombre_proveedor=$_POST["nombre_proveedor"];
						$tel=$_POST["telefono"];
						$nombre_producto=$_POST["nombre_producto"];						
						$precio=$_POST["precio"];
						$existente_proveedor=$_POST["existente_proveedor"];
						$existente_bodega=$_POST["existente_bodega"];									
							
								 if($material == 1)
								{
									$material ="Barro";						
								}  else{
									$material="Yeso";								
								}
														
							$consulta=("select * from proveedores where nombre_proveedor='$nombre' AND material_producto = '$material'");
							$resultado=mysql_query($consulta) or die (mysql_error());																								
					
							if (mysql_num_rows($resultado)){
								while ($registro = mysql_fetch_array($resultado)){  
						$id_proveedor="$registro[0]";
						$id_producto="$registro[1]";
					}
								$consulta= ("UPDATE proveedores SET id_proveedor = $id_proveedor, id_producto = '$id_producto', nombre_proveedor = '$nombre_proveedor', 
												telefono ='$tel', nombre_producto = '$nombre_producto', precio_producto= '$precio', existente_proveedor ='$existente_proveedor',
												existente_bodega= '$existente_bodega' WHERE id_proveedor = '$id_proveedor'");
							$resultado=mysql_query($consulta);
							if($resultado){							
								echo '<p>Los datos se han modificado correctamente.</p>';	
							}else{
								echo '<p>Error al modificar los campos en la tabla.</p>';
							}	
							}							
				?>
				<form action="?" method="post">				
					<?php
							
					@$nombre=$_POST["nombre_proveedor"];											
					@$material=$_POST["rproveedor"];						
														include "conex.php";
							session_start();
					$sql = ("select * from preveedores where  nombre_proveedor='$nombre'  AND  material_producto = '$material' ");
					$result =mysql_query ($sql); 
					while ($registro = mysql_fetch_array($result)){  						
						$_POST['nombre_proveedor']="$registro[2]";
						$tel="$registro[3]";
						$_POST["nombre_producto"]="$registro[4]";	
								$np=$_POST["nombre_producto"];
								echo $registro[4];
								echo $nombre;
						$_SESSION['precio']="$registro[6]";
						$_SESSION['existente_proveedor']="$registro[7]";
						$_SESSION['existente_bodega']="$registro[8]";
					}
					?>				
			<br>							
							<p>Nombre Proveedor:</label>
								<input type="text"  style="width:200px;height:28px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
						Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="nombre_proveedor" value="<?php echo 	$nombre_proveedor;?>"><br>
							</p>						
							<p>Telefono:</label>
								<input type="text" style="width:200px;height:28px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
						Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="telefono" value="<?php echo 	$np;?>"><br>
							</p>							
							<p>Nombre Producto:</label>
								<input type="text" style="width:200px;height:28px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
						Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="nombre_producto" value="<?php echo 	$_SESSION['nombre_producto'];?>"><br>
							</p>														
							<p>Tipo de material:</label>					
								<br>								 
									<input type="radio" name="rmaterial" value="1"   checked >Barro								
								<br>					
								<input type="radio" name="rmaterial" value="2"  checked>Yeso				
								<br>
							</p>							
							<p>Precio del Producto:</label>
								<input type="text"  style="width:200px;height:28px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
						Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="precio" value="<?php echo $_SESSION['precio'];?>"><br>
							</p>							
							<p>Existente Con el Proveedor:</label>
								<input type="text"  style="width:200px;height:28px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
						Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="existente_proveedor" value="<?php echo 	$_SESSION['existente_proveedor'];?>"><br>
							</p>							
							<p>Existente en Bodega:</label>
								<input type="text"  style="width:200px;height:28px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
						Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="existente_bodega" value="<?php echo 	$_SESSION['existente_bodega'];?>"><br>
							</p>														
							<input type="submit" name="editar" value="Guardar"/>
							</form>
							<br>				
				</div>
				<br></br>
			
					
				
			</body>
	</html>