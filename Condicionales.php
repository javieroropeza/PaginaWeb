<!DOCTYPE html>
	<html>
		<head>
			<title>Pr&aacutectica III</title>
			<link rel="stylesheet" type="text/css" href="index_style.css"/>
		</head>
			<body bgcolor="#124459" class="practicaborder">
			<font color="black" face="georgia" size="5">
					<br></br>
						<div id="practica3">
							<h1 > Pr&aacutectica III Condiciones.</h1>
						</div>
					
			<body>
			<?php
				$sTipo ="Carro";
				$nPrecio = 500000;
				$sMarca = "BMW";
				if ($nPrecio < 500000){
					echo "<br>";
					echo "<div align='center'>Compra un $sTipo mas pequeño.<br/><div>";
				}
				else if($nPrecio >= 500000){
					echo "<br>";
					echo "<div align='center'>Compra un $sMarca.<br/></div>";
				}
			?>
			</body>
		
	</html> 