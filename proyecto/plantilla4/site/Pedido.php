<html>
	<head>
		<title>Pedido</title>
		<link rel="stylesheet" type="text/css" href="index_style.css"/>
	</head>
			<div class="container">
			<br></br>
				<h1 style = "color:peru;"> Pedido</h1>													
				<body bgcolor="lightblue" class="practica_login1">								
						<br></br>
					
						<?php 
						include "conex.php";
						session_start();
						$_SESSION['usuario'];
						$_SESSION['id'];
						@$nombre_cliente=$_SESSION['usuario'];
						@$pais=$_POST["pais"];
						@$ciudad=$_POST["ciudad"];
						@$telefono=$_POST["telefono"];
						@$email=$_POST["email"];
							@$email=$_POST["email"];	
						
									//caja de seleccion
							@$producto2=$_POST["producto2"];   @$producto3=$_POST["producto3"];   @$producto4=$_POST["producto4"];
							@$producto5=$_POST["producto5"];   @$producto6=$_POST["producto6"];   @$producto7=$_POST["producto7"];							
							@$producto9=$_POST["producto9"];   @$producto10=$_POST["producto10"]; @$producto11=$_POST["producto11"];
							@$producto12=$_POST["producto12"]; @$producto13=$_POST["producto13"]; @$producto14=$_POST["producto14"];
							@$producto15=$_POST["producto15"]; @$producto16=$_POST["producto16"]; @$producto17=$_POST["producto17"];
							
							//caja de texto de la cantidad
							@$can2=$_POST["product2"];   @$can3=$_POST["product3"];   @$can4=$_POST["product4"];
							@$can5=$_POST["product5"];   @$can6=$_POST["product6"];   @$can7=$_POST["product7"];							
							@$can9=$_POST["product9"];   @$can10=$_POST["product10"]; @$can11=$_POST["product11"];
							@$can12=$_POST["product12"]; @$can13=$_POST["product13"]; @$can14=$_POST["product14"];
							@$can15=$_POST["product15"]; @$can16=$_POST["product16"]; @$can17=$_POST["product17"];
							
							//productos                   //precio
							$npro2="vaso con bordo liso"; $preciopro2=100;  		 $npro3="vaso corona" ; $preciopro3=100;       				   $npro4="vaso olan gde"; $preciopro4= 70;
							$npro5="asador de pozo" ;$preciopro5= 600 ;           $npro6="vaso piedra gde" ; $preciopro6=110;   				   $npro7="maceta olan chic"; $preciopro7=60;
							$npro9="maceta tortuga"; $preciopro9=100;     		 $npro10="maceta piedra lisa"; $preciopr10=100; 				   $npro11="cilindro liso"; $preciopro11=140;	
							$npro12="base tacel de flor"; $preciopro12=80; 		 $npro13="jgo. de jarron flor con lazo"; $preciopro13=120;      $npro14="jgo. de jarron de eces "; $preciopro14=120;
							$npro15="jgo. de jarron de olla"; $preciopro15=120;  $npro16="jgo. de jarron de moño "; $preciopro16=120 ;  		   $npro17="elefante parado chic "; $preciopro17=50;
							
							$id_usu = $_SESSION['id'];		
								
								if (isset($_REQUEST['producto2'])){
									$id=2;									
									$material="Yeso";
									$consult=mysql_query("INSERT INTO producto_pedido VALUES('','$id','0', '$id_usu','$npro12')");
									$consult=mysql_query("INSERT INTO pedidos VALUES('','$id_usu','$nombre_cliente','$pais','$ciudad','$telefono','$email')");
									$total2=$can2 * $preciopro12;
								}
								if (isset($_REQUEST['producto3']))
								{
									$id=3;
									$material="Yeso";
									$consult=mysql_query("INSERT INTO producto_pedido VALUES('','$id','0', '$id_usu','$npro17')");
									$consult=mysql_query("INSERT INTO pedidos VALUES('','$id_usu','$nombre_cliente','$pais','$ciudad','$telefono','$email')");									
									$total3=$can3 * $preciopro17;									
								}		
								if (isset($_REQUEST['producto4']))
								{
									$id=4;
									$material="Yeso";
									$consult=mysql_query("INSERT INTO producto_pedido VALUES('','$id','0', '$id_usu','$npro14')");
									$consult=mysql_query("INSERT INTO pedidos VALUES('','$id_usu','$nombre_cliente','$pais','$ciudad','$telefono','$email')");		
									$total4=$can4 * $preciopro14;
								}		
								if (isset($_REQUEST['producto5']))
								{
									$id=5;
									$material="Yeso";
									$consult=mysql_query("INSERT INTO producto_pedido VALUES('','$id','0', '$id_usu','$npro16')");
									$consult=mysql_query("INSERT INTO pedidos VALUES('','$id_usu','$nombre_cliente','$pais','$ciudad','$telefono','$email')");		
									$total5=$can5 * $preciopro16;
								}		
								if (isset($_REQUEST['producto6']))
								{
									$id=6;
									$material="Yeso";
									$consult=mysql_query("INSERT INTO producto_pedido VALUES('','$id','0', '$id_usu','$npro15')");
									$consult=mysql_query("INSERT INTO pedidos VALUES('','$id_usu','$nombre_cliente','$pais','$ciudad','$telefono','$email')");		
									$total6=$can6 * $preciopro15;
								}		
								 if (isset($_REQUEST['producto7']))
								{
									$id=7;
									$material="Yeso";
									$consult=mysql_query("INSERT INTO producto_pedido VALUES('','$id','0', '$id_usu','$npro13')");
									$consult=mysql_query("INSERT INTO pedidos VALUES('','$id_usu','$nombre_cliente','$pais','$ciudad','$telefono','$email')");		
									$total7=$can7 * $preciopro13;
								}		
								 if (isset($_REQUEST['producto9']))
								{
									$id=9;
									$material="Barro";
									$consult=mysql_query("INSERT INTO producto_pedido VALUES('','0','$id', '$id_usu','$npro11')");
									$consult=mysql_query("INSERT INTO pedidos VALUES('','$id_usu','$nombre_cliente','$pais','$ciudad','$telefono','$email')");			
									$total9=$can9 * $preciopro11;
								}		
								 if (isset($_REQUEST['producto10']))
								{
									$id=10;
									$material="Barro";
									$consult=mysql_query("INSERT INTO producto_pedido VALUES('','0','$id', '$id_usu','$npro7')");
									$consult=mysql_query("INSERT INTO pedidos VALUES('','$id_usu','$nombre_cliente','$pais','$ciudad','$telefono','$email')");		
									$total10=$can10 * $preciopro7;
								}		
								 if (isset($_REQUEST['producto11']))
								{
									$id=11;
									$material="Barro";
									$consult=mysql_query("INSERT INTO producto_pedido VALUES('','0','$id', '$id_usu','$npro10')");
									$consult=mysql_query("INSERT INTO pedidos VALUES('','$id_usu','$nombre_cliente','$pais','$ciudad','$telefono','$email'");		
									$total11=$can11 * $preciopro10;
								}		
								 if (isset($_REQUEST['producto12']))
								{
									$id=12;
									$material="Barro";
									$consult=mysql_query("INSERT INTO producto_pedido VALUES('','0','$id', '$id_usu','$npro5')");
									$consult=mysql_query("INSERT INTO pedidos VALUES('','$id_usu','$nombre_cliente','$pais','$ciudad','$telefono','$email'");		
									$total12=$can12 * $preciopro5;
								}		
								if (isset($_REQUEST['producto13']))
								{							
									$id=13;
									$material="Barro";
									$consult=mysql_query("INSERT INTO producto_pedido VALUES('','0','$id', '$id_usu','$npro2')");
									$consult=mysql_query("INSERT INTO pedidos VALUES('','$id_usu','$nombre_cliente','$pais','$ciudad','$telefono','$email')");		
									$total13=$can13 * $preciopro2;
								}		
								if (isset($_REQUEST['producto14']))
								{
									$id=14;
									$material="Barro";
									$consult=mysql_query("INSERT INTO producto_pedido VALUES('','0','$id', '$id_usu','$npro3')");
									$consult=mysql_query("INSERT INTO pedidos VALUES('','$id_usu','$nombre_cliente','$pais','$ciudad','$telefono','$email')");		
									$total14=$can14 * $preciopro3;
								}		
								if (isset($_REQUEST['producto15']))
								{
									$id=15;
									$material="Barro";
									$consult=mysql_query("INSERT INTO producto_pedido VALUES('','0','$id', '$id_usu','$npro4')");
									$consult=mysql_query("INSERT INTO pedidos VALUES('','$id_usu','$nombre_cliente','$pais','$ciudad','$telefono','$email')");		
									$total15=$can15 * $preciopro4;
								}		
								if (isset($_REQUEST['producto16']))
								{
									$id=16;
									$material="Barro";
									$consult=mysql_query("INSERT INTO producto_pedido VALUES('','0','$id', '$id_usu','$npro6')");
									$consult=mysql_query("INSERT INTO pedidos VALUES('','$id_usu','$nombre_cliente','$pais','$ciudad','$telefono','$email')");		
									$total16=$can16 * $preciopro6;
								}		
								if (isset($_REQUEST['producto17']))
								{
									$id=17;
																		$material="Barro";
									$consult=mysql_query("INSERT INTO producto_pedido VALUES('','0','$id', '$id_usu','$npro9')");
									$consult=mysql_query("INSERT INTO pedidos VALUES('','$id_usu','$nombre_cliente','$pais','$ciudad','$telefono','$email')");		
									$total17=$can17 * $preciopro9;
								}									
								$TOTAL =$total2+$total3+$total4+$total5+$total6+$total7+$total9+$total10+$total11+$total12+$total13+$total14+$total15+$total16+$total17	;													
								echo "TOTAL A PAGAR $";echo $TOTAL;
								
							?>
							
					<div class="center">
					
					<form action="?" method="post">						
						<label>Nombre Cliente</label>
									<input type="text" style="width:150px;height:28px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
										Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="nombre_cliente" /><br>
								<label>Pais</label>
									<input type="text" style="width:150px;height:23px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
										Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="pais" /><br>
								<label>Ciudad</label>
									<input type="text"  style="width:150px;height:23px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
										Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="ciudad" /><br>						
								<label>Telefono</label>
									<input type="text" style="width:200px;height:23px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
										Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="telefono" /><br>
								<label>Email</label>
									<input type="text" style="width:300px;height:23px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
										Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="email" /><br>									
										<br><br>
								<input type="submit"  class="button button-block"  value="Guardar"  name="registra"/></input>
						</form>								
					</div>
					</div>						
					</ul>
					<?php
						session_start();
						if(isset($_SESSION['usuario']) ){	
					?>
					<a class="href" href= "index_cliente.php?cerrar=session">Regresar  (<?php echo $_SESSION['usuario'];?><?php echo $_SESSION['id'];?>)</a>
				<?php
				}else
					echo "Acceso denegado";
				?>