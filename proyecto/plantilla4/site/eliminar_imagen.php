<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title> Eliminar Imágenes </title>
	<link rel="stylesheet" type="text/css" href="index_style.css"/>
 </head>

  <body bgcolor="lightblue" class="practica_login1">
  <div>
  <label style = "color:blue;"  align='RIGTH'>Eliminar Imagenes</label>
  
  
  <br>
	<?php
		$rutaEnServidor = "piezas";
		/*$rutaTemporal = $_FILES['imagen']['tmp_name'];
		$nombre_imagen = $_FILES['imagen']['name'];
		$rutaDestino = $rutaEnServidor."/".$nombre_imagen;
		move_uploaded_file($rutaTemporal, $rutaDestino);
	*/
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
		
</body>

		<form action="?" method="POST" enctype="multipart/form-data">
		<br>
		<br>
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
		<?php
						session_start();
						if(isset($_SESSION['usuario']) ){	
						?>
					<a class="href" href= "Imagenes_Barro.php?cerrar=session">Regresar a IMAGENES DE BARRO (<?php echo $_SESSION['usuario'];?>)</a>
				<?php
				}else
					echo "Acceso denegado";
				?>
</html>