<!DOCTYPE html>
	<html>
		<head>
			<title>Bienvenidos</title>
			<link rel="stylesheet" type="text/css" href="index_style.css"/>
		</head>
			<body bgcolor="pink">
			<font color="black" face="georgia" size="5">
					<br></br>
					<div id="dowhile">
						<h1 > Bienvenid@ </h1>
				<IMG SRC="bienvenidos.jpg" WIDTH="200" HEIGHT="180" Hspace="200" Vspace="70" align="right">	
			<div id="menu">
				<ul class ="nav">
					<li><a href="">Alumno</a>
						<ul>
							<li><a href="domicilio.php">Domicilio</a></li>
							<li><a href="materias.php">Materias</a></li>
							<li><a href="profesor.php">Profesor</a></li>
							<li><a href="carrera.php">Carrera</a></li>		
						</ul>		
					</li>
				</ul>
			</div>
			<?php
				session_start();
				if(isset($_SESSION['nombre']) ){
			?>
			<br><br>
					<div align="right"> 
						<a href= "inicio.php?cerrar=session">Cerrar sesion  (<?php echo $_SESSION['nombre'];?>)</a>
					</div> 	
				<?php
				}else
					echo "Acceso denegado";
				?>
				
				<?php
					//$_SESSION['id_alumno'];
						$id_al = $_SESSION['id_alumno']; 
						include "conexion.php";
						session_start();
		
						$sql = ("select * from usuarios where id = '$_SESSION[id_alumno]; '");
						$result =mysql_query ($sql); 
					
						while ($registro = mysql_fetch_array($result)){  
							$mat="$registro[1].";
							$nom_alumno="$registro[2].";
							$pass="$registro[3]"; 
							$tel="$registro[4].";
							$ema="$registro[5]";
							$edad="$registro[6]."; 
						}
				?> 
					<br></br>
						<br></br>
							<br></br>
				<legend>Datos Personales </legend>
							
							<label>Matr&iacute;cula</label>
								<input type="text" readonly="readonly" style="width:105px;height:23px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
								Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="direccion" value="<?php echo $mat;?>"><br>
							<label>Alumno</label>
								<input type="text"  readonly="readonly" style="width:60px;height:23px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
								Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="colonia" value="<?php  echo $nom_alumno; ?>"><br>
							<label>Contrase&ntilde;a</label>
								<input type="password"  readonly="readonly" style="width:75px;height:23px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
								Comic Sans MS;text-align:center;border-color:burlywood;border-style:double; border-width:medium;" name="codigo" value="<?php  echo $pass;?>"><br>
							<label>Tel&eacute;fono</label>
								<input type="text" readonly="readonly" style="width:98px;height:23px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
								Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="direccion" value="<?php echo $tel;?>"><br>
							<label>Email</label>
								<input type="text"  readonly="readonly" style="width:145px;height:23px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
								Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="colonia" value="<?php  echo $ema; ?>"><br>
							<label>Edad</label>
								<input type="text"  readonly="readonly" style="width:32px;height:23px;background-color:dcornsilk;color:peru;font-size:12pt;font-family: 
								Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="codigo" value="<?php  echo $edad;?>"><br>
				
				
			</div>
			</body>
	</html>