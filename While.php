<!DOCTYPE html>
	<html>
		<head>
			<title>Pr&aacutectica V</title>
			<link rel="stylesheet" type="text/css" href="index_style.css"/>
		</head>
			<body bgcolor="pink" class="practica_while">
			<font color="black" face="georgia" size="5">
					<br></br>
						<div id="while">
							<h1 > Pr&aacutectica V While.</h1>
							<IMG SRC="hamburger.gif" WIDTH="200" HEIGHT="180" Hspace="200" Vspace="70" align="right">
			<?php
				$producto = "Torta";
				$contador = 1;
				
				While ($contador <= 6)
				{
					echo"<br></br>";
					echo "$producto  $contador.";
					$contador++;
				}
			?>
			</div>
			</body>
	</html>