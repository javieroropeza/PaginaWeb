<!DOCTYPE html>
	<html>
		<head>
			<title>Pr&aacutectica IV</title>
			<link rel="stylesheet" type="text/css" href="index_style.css"/>
		</head>
			<body bgcolor="cyan" class="practica_switch">
			<font color="black" face="georgia" size="5">
					<br></br>
						<div id="switch">
							<h1 > Pr&aacutectica IV Switch.</h1>
							<IMG SRC="cake.gif" WIDTH="200" HEIGHT="180" Hspace="200" Vspace="70" align="right">
			<?php
				$Tipo_pastel = 3;
				
				Switch($Tipo_pastel) {
					case 1:
						echo "Pastel de Chocolate";
					break;	
					case 2:
						echo "Pastel de Vainilla";
					break;
					case 3: 
						echo "Pastel de Zanahoria";
					break;

					case 4: 
						echo "Pastel de Fresa";
					break;

					default:
						echo "Elige una opción válida";
				}
			?>
			</div>
			</body>
	</html>