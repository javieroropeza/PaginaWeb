<html>
	<head>

		<title>Materia(s)</title>
		<link rel="stylesheet" type="text/css" href="formulario.css" media="all" />

	</head>
			<div id="dowhile">
			<br></br>
				<h1 > Materia(s)</h1>
				
				<body bgcolor="lightblue" class="practica_login1">
					<div align='center'> 
   
					<?php
					//$_SESSION['id_alumno'];
						$id_al = $_SESSION['id_alumno']; 
						include "conexion.php";
						session_start();
		
						$sql = ("select * from tb_materias where id_materia = '$_SESSION[id_alumno]; '");
						$result =mysql_query ($sql); 
					
						while ($registro = mysql_fetch_array($result)){  
							$nom_mat="$registro[1].";
							$cre="$registro[2].";
							$id_carr="$registro[3]."; 
							$id_pro="$registro[4]."; 
						}
				?> 
				<legend>Materias </legend>
					<label>Materia</label>
						<input type="text" readonly="readonly" style="width:250px;height:28px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
							Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="nombre_materia" value="<?php echo $nom_mat;?>"><br>
					<label>Creditos</label>
						<input type="text"  readonly="readonly" style="width:50px;height:23px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
							Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="creditos" value="<?php  echo $cre; ?>"><br>
					<label>Id Carrera</label>
						<input type="text"  readonly="readonly" style="width:50px;height:23px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
							Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="id_carrera" value="<?php  echo $id_carr;?>"><br>
					<label>Id Profesor</label>
						<input type="text"  readonly="readonly" style="width:50px;height:23px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
							Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="id_profesor" value="<?php  echo $id_pro;?>"><br>
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