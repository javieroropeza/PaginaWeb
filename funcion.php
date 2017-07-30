<!DOCTYPE html>
	<html>
		<head>
			<title>Pr&aacutectica VIII</title>
			<link rel="stylesheet" type="text/css" href="index_style.css"/>
		</head>
			<body bgcolor="yellow">
			<font color="black" face="georgia" size="5">
					<br></br>
						<div id="while">
							<h1 > Pr&aacutectica PHP VIII Funciones.</h1>
			<?php
				 function sumar($n1,$n2,$n3,$n4,$n5) 
				{
					$resultado= $n1+$n2+$n3+$n4+$n5;
					echo"<br></br>";
					echo "  <b> La suma es: $resultado. </b>  "  ;
					echo"<br></br>";
				}
				
				sumar(1,2,3,4,5);
				
				$time = time();
				echo date ("d-m-Y (H-i-s)",$time);
			?>
			</div>
			</body>
	</html>