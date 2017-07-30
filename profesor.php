<html>
	<head>

		<title>Profesor(es)</title>
		<link rel="stylesheet" type="text/css" href="formulario.css" media="all" />

	</head>
			<div id="dowhile">
			<br></br>
				<h1 > Profesor(es)</h1>
				
				<body bgcolor="lightblue" class="practica_login1">
					<div align='center'> 
   
					<?php
					//$_SESSION['id_alumno'];
						$id_al = $_SESSION['id_alumno']; 
						include "conexion.php";
						session_start();
		
						$sql = ("select * from tb_profesor where id_profesor = '$_SESSION[id_alumno]; '");
						$result =mysql_query ($sql); 
					
						while ($registro = mysql_fetch_array($result)){  
							$id_pro="$registro[0].";
							$nom_pro="$registro[1].";
						}
				?> 
				<legend>Profesor </legend>
					<label>Id</label>
						<input type="text" readonly="readonly" style="width:50px;height:28px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
							Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="nombre_materia" value="<?php echo $id_pro;?>"><br>
					<label>Nombre</label>
						<input type="text"  readonly="readonly" style="width:350px;height:23px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
							Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="creditos" value="<?php  echo $nom_pro; ?>"><br>
	
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