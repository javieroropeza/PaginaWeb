<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title> Subir Imágenes </title>
 </head>

  <body bgcolor="lightblue" class="practica_login1">
  <div>
  <label style = "color:blue;"  align='RIGTH'>Guardar Imagenes</label>
  </div>
  <br>
	<?php
		
		/*$print_r($_FILES);
		echo '<br>';
		echo"Nombre de la imagen:";
		$print_r($_FILES['imagen']['name']);
		
		echo '<br>';
		echo'Tipo de la imagen:';
		$print_r($_FILES['imagen']['type']);
		
		echo '<br>';
		echo'Ruta temporal de la imagen:';
		$print_r($_FILES['imagen']['tmp_name']);*/
	
		include "conex.php";
		
		$rutaEnServidor = "piezas";
		$rutaTemporal = $_FILES['imagen']['tmp_name'];
		$nombre_imagen = $_FILES['imagen']['name'];
		$rutaDestino = $rutaEnServidor."/".$nombre_imagen;
		move_uploaded_file($rutaTemporal, $rutaDestino);
		@$material=$_POST["rimagen"];
		
		 if($material == 1){
			$material = "Barro";
		} else{
			$material="Yeso";
		}
		
		
		$consulta=mysql_query("select * from imagenes where nombre_imagen='$nombre_imagen' AND material_imagen = '$material' ");											
		if(mysql_num_rows($consulta)){
			while ($registro = mysql_fetch_array($consulta)){  
				$id =$registro[0];	
			}
				
			$consulta= ("UPDATE visitas SET nombre_imagen = '$nombre_imagen', ruta='$ruta', material_imagen= '$material' WHERE id_usuario = '$id'");			
			$resultado=mysql_query($consulta);											
			echo "Esta Imagen ya EXISTE solo se actualizó";
			$_SESSION["id_imagen"]=$id_imagen;
			
			
		}else{
			$consulta=("INSERT INTO imagenes VALUES('','$nombre_imagen','$rutaDestino','$material')");
			$resultado=mysql_query($consulta);
			if($resultado){
				echo "Insercion con exito";
				
				$consulta=mysql_query("select * from imagenes where nombre_imagen='$nombre_imagen' AND material_imagen = '$material' ");											
				if(mysql_num_rows($consulta)){
					while ($registro = mysql_fetch_array($consulta)){  
						$id_imagen =$registro[0];	
						$material =$registro[3];	
					}												
				}				
			}else{
				echo "No se guardo con exito";
			}
		}
	?>		
</body>

		<form action="?" method="POST" enctype="multipart/form-data">
		<br>
		<br>
		<p>Seleccion la Imagen:</label>
			<input type="file" name="imagen" />
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
		<input type="submit" name="subir" value="Subir"/>
		</form>
		
		<br>
		<?php
						session_start();
						if(isset($_SESSION['usuario']) ){	
						?>
					<a class="href" href= "Imagenes_Barro.php?cerrar=session">Pagina Principal  (<?php echo $_SESSION['usuario'];?>)</a>
				<?php
				}else
					echo "Acceso denegado";
				?>
</html>