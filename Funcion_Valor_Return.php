<!DOCTYPE html>
	<html>
		<head>
			<title>Pr&aacutectica IX</title>
			<link rel="stylesheet" type="text/css" href="index_style.css"/>
		</head>
			<body bgcolor="lightgreen">
			
			<font color="black" face="georgia" size="5">
					<br></br>
						<div id="while">
							<h1 > Pr&aacutectica PHP IX Funci&oacuten con Valor de Retorno.</h1>
							<IMG SRC="math.gif"WIDTH="100" HEIGHT="120" Hspace="200" Vspace="70" align="right">
						
			<?php
				 function cuadrado($n1) 
				{
					$resultado= $n1*$n1;
					return $resultado;
				}
				$nB=5;
				$nA=cuadrado($nB);
				echo"<br></br>";
					echo "  <b>El cuadrado de $nB es: $nA. </b>  "  ;
					echo"<br></br>";
					
				$time = time();
				echo date ("d-m-Y (H-i-s)",$time);
			?>
			</div>
			</body>
	</html>