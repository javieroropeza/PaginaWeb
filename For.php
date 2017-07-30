<!DOCTYPE html>
	<html>
		<head>
			<title>Pr&aacutectica VII</title>
			<link rel="stylesheet" type="text/css" href="index_style.css"/>
		</head>
			<body bgcolor="white" class="practica_for">
			<font color="black" face="georgia" size="5">
					<br></br>
					<div id="for">
						<h1 > Pr&aacutectica VII For.</h1>
						<IMG SRC="wing.gif" WIDTH="200" HEIGHT="180" Hspace="200" Vspace="70" align="right">
						<IMG SRC="pollo.gif" WIDTH="200" HEIGHT="180" Hspace="200" Vspace="70">
						
			 <?php
				$producto = "Alitas";
				$contador = 1;
				     for ($contador=1; $contador <= 50; $contador++)
					{
						echo'<br>';
						echo "$producto  $contador ." ;
					}
			?>
			</div>
			</body>
	</html>