<html>
	<head>

		<title>Carrera</title>
		<link rel="stylesheet" type="text/css" href="formulario.css" media="all" />

	</head>
			<div id="dowhile">
			<br></br>
				<h1 > Carrera</h1>
				
				<body bgcolor="lightblue" class="practica_login1">
					<div align='center'> 
   
					<?php
					//$_SESSION['id_alumno'];
						$id_al = $_SESSION['id_alumno']; 
						include "conexion.php";
						session_start();
		
						$sql = ("select * from tb_carrera where id_carrera = '$_SESSION[id_alumno]; '");
						$result =mysql_query ($sql); 
					
						while ($registro = mysql_fetch_array($result)){  
							$nom_car="$registro[1].";
							$dep="$registro[2]."; 
						}
				?> 
				<legend>Carrera </legend>
							<label>CARRERA</label>
								<input type="text" readonly="readonly" style="width:250px;height:23px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
								Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="nombre_carrera" value="<?php echo $nom_car;?>"><br>
							<label>DEPARTAMENTO</label>
								<input type="text"  readonly="readonly" style="width:250px;height:23px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
								Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="departamento" value="<?php  echo $dep; ?>"><br>
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