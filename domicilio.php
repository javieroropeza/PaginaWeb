<html>
	<head>

		<title>Domicilio</title>
		<link rel="stylesheet" type="text/css" href="formulario.css" media="all" />

	</head>
			<div id="dowhile">
			<br></br>
				<h1 > Domicilio</h1>
				
				<body bgcolor="lightblue" class="practica_login1">
					<div align='center'> 
   
					<?php
					//$_SESSION['id_alumno'];
						$id_al = $_SESSION['id_alumno']; 
						include "conexion.php";
						session_start();
		
						$sql = ("select * from tb_domicilio where id_alumno = '$_SESSION[id_alumno]; '");
						$result =mysql_query ($sql); 
					
						while ($registro = mysql_fetch_array($result)){  
							$dir="$registro[1].";
							$col="$registro[2].";
							$cp="$registro[3]."; 
						}
				?> 
				<legend>Domicilio </legend>
					<label>Direcci&oacute;n</label>
						<input type="text" readonly="readonly" style="width:135px;height:23px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
						Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="direccion" value="<?php echo $dir;?>"><br>
								
					<label>Colonia</label>
						<input type="text"  readonly="readonly" style="width:120px;height:23px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
								Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="colonia" value="<?php  echo $col; ?>"><br>
								
					<label>C&oacute;digo Postal</label>
						<input type="text"  readonly="readonly" style="width:80px;height:23px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
								Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="codigo" value="<?php  echo $cp;?>"><br>
				 <?php
					session_start();
					if(isset($_SESSION['nombre']) ){
				?>
			<br><br>
					<div align="right"> 
						<a href= "PaginaPrincipal.php?cerrar=session">Pagina Principal  (<?php echo $_SESSION['nombre']; ?> )</a>
					</div> 	
				<?php
				}else
					echo "Acceso denegado";
				?>
				
					
						
							
							
					
				</div>
			</body>
	</html>