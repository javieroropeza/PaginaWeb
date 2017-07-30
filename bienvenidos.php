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
						<h1 > Bienvenid@</h1>
				<IMG SRC="bienvenidos.jpg" WIDTH="200" HEIGHT="180" Hspace="200" Vspace="70" align="right">

			<?php
				session_start();
				if(isset($_SESSION['usuario']) ){
			?>
					<a href= "login.php?cerrar=session">Cerrar sesion  (<?php echo $_SESSION['usuario'];?> 	)</a>
				<?php
				}else
					echo "Acceso denegado";
				?>
				
				
				
			</div>
			</body>
	</html>