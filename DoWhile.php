<!DOCTYPE html>
	<html>
		<head>
			<title>Pr&aacutectica VI</title>
			<link rel="stylesheet" type="text/css" href="index_style.css"/>
		</head>
			<body bgcolor="red" class="practica_dowhile">
			<font color="black" face="georgia" size="5">
					<br></br>
					<div id="dowhile">
						<h1 > Pr&aacutectica VI Do While.</h1>
						<IMG SRC="coca.gif" WIDTH="200" HEIGHT="180" Hspace="200" Vspace="70" align="right">
						<IMG SRC="pizza.gif" WIDTH="200" HEIGHT="180" Hspace="200" Vspace="70">
						
			 <?php

				$producto = "Pizza";
				$contador = 10;
				
				
					do{
					echo'<br>';
					echo "$producto  $contador ." ;
					$contador-- ;
				}while ($contador >= 1);
			
			?>
			</div>
			</body>
	</html>