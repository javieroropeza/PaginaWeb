<html>
	<head>

		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="formulario.css" media="all" />

	</head>
			<div id="dowhile">
			<br></br>
				<h1 > Todos Los Registros</h1>
				
				<body bgcolor="lightblue" class="practica_login1">
					<div align='center'> 
  <table border='1' cellpadding='0' cellspacing='0' width='600' bgcolor='#F6F6F6' bordercolor='#FFFFFF'> 
    <tr> 
      <td width='150' style='font-weight: bold'>ID</td> 
      <td width='150' style='font-weight: bold'>NOMBRE</td> 
	   <td width='150' style='font-weight: bold'>PASSWORD.</td> 
	    <td width='150' style='font-weight: bold'>TELEFONO.</td> 
		 <td width='150' style='font-weight: bold'>E-MAIL.</td> 
      <td width='150' style='font-weight: bold'>EDAD.</td> 
      <td width='150' style='font-weight: bold'></td> 
    </tr>  
				<?php
					include "conexion.php";
					session_start();
					@$edad=10;
					$sql = ("select * from usuarios where edad = '$edad'");
					$result =mysql_query ($sql); 

					//while ($row = mysql_fetch_row($result)){   
					while ($registro = mysql_fetch_array($result)){  
					echo " 
						<tr> 
							<td width='150'>".$registro['id']."</td> 
							<td width='150'>".$registro['nombre']."</td> 
							<td width='150'>".$registro['password']."</td> 
							<td width='150'>".$registro['telefono']."</td>
							<td width='150'>".$registro['email']."</td> 							
							<td width='150'>".$registro['edad']."</td> 
							<td width='150'></td> 

							</tr> 
						";  
					}
				//	echo "</table>"; 

				?>
				 </table> 
				 </div> 
				</body>
			</div>
	</html>