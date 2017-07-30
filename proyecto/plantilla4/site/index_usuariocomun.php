<!DOCTYPE html>
<html lang="en">
<head>
  <title>Artesan&iacute;as Rocio</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <script type="text/javascript" src="js/jquery-1.5.2.js" ></script>
  <script type="text/javascript" src="js/cufon-yui.js"></script>
  <script type="text/javascript" src="js/cufon-replace.js"></script>  
  		<script type="text/javascript" src="js/Amaranth_400.font.js"></script>
  <script type="text/javascript" src="js/script.js"></script>  
  <script type="text/javascript" src="js/scroll.js"></script>  
  <script type="text/javascript" src="js/atooltip.jquery.js"></script>

  <!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
	<style type="text/css">
		.bg{ behavior: url(js/PIE.htc); }
	</style>
  <![endif]-->
	<!--[if lt IE 7]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0"  alt="" /></a>
		</div>
	<![endif]-->

</head>

<body>

<div class="extra">
	<div id="page_3">
		<div class="main">
			<!--header -->
			<header>
				<h1><a href="#page_1">Artesan&iacute;as Roc&iacute;o</a></h1>
				<nav>
					<ul class="menu">
						<li class="active"><a href="#page_3">Perfil</a></li>
						<li><a href="#page_4">Productos</a></li>
						<li><a href="#page_5">Acerca</a></li>
						<li><a href="#page_6">Contactanos</a></li>
					</ul>
				</nav>
			</header>
			<!--header end-->
			<!--content -->
			<section class="content">
				<h2>Cambiar tipo de Cuenta.</h2>
				<article class="col1 pad_left1">
					<h2>Para hacer algun pedido necesitas cambiar tu cuenta a tipo Cliente</h2>
					
						<form action="editar_usuario.php" method="post">
							<div>							
							<legend>Usuario </legend>	
								<?php
									include "conex.php";
									session_start();	
									$_SESSION['id'];
									$sql = ("select * from usuarios where id_usuario = '$_SESSION[id]; '");
									$result =mysql_query ($sql); 
									while ($registro = mysql_fetch_array($result)){  
									
										$id="$registro[0]";
										$nom_usuario="$registro[1]";
										$ape_usuario="$registro[2]";
										$pass_usuario="$registro[3]";
										$ema_usuario="$registro[4]";
										$tipo_cuenta="$registro[5]";
										
										$_SESSION["id"]=$id;
										$_SESSION["usuario"]=$nom_usuario;
										$_SESSION["apellido"]=$ape_usuario;
										$_SESSION["password"]=$pass_usuario;
										$_SESSION["email"]=$ema_usuario;
										$_SESSION["cuenta"]=$tipo_cuenta;
									} 							
								?>		
								
								<label>Nombre</label>
									<input type="text" readonly="readonly" style="width:150px;height:28px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
										Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="nombre_materia" value=<?php echo $_SESSION['usuario']; ?>><br>
								<label>Apellido</label>
									<input type="text"  readonly="readonly" style="width:150px;height:23px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
										Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="creditos" value="<?php  echo $_SESSION['apellido']; ?>"><br>
								<label>Contraseña</label>
									<input type="password"  readonly="readonly" style="width:150px;height:23px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
										Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="creditos" value="<?php  echo $_SESSION['password']; ?>"><br>						
								<label>Email</label>
									<input type="text"  readonly="readonly" style="width:200px;height:23px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
										Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="creditos" value="<?php  echo $_SESSION['email']; ?>"><br>
								<label>Tipo de cuenta</label>
									<input type="text"  readonly="readonly" style="width:150px;height:23px;background-color:cornsilk;color:peru;font-size:12pt;font-family: 
										Comic Sans MS;text-align:center;border-color:burlywood;border-style:double;border-width:medium " name="creditos" value="<?php  echo $_SESSION['cuenta']; ?>"><br>
										
								<input type="submit"  class="button button-block"  value="Editar"  name="registra"/></input>
						</form>
        		</article>
			</section>
			<!--content end-->
		</div>
		<div class="block"></div>
	</div>
</div>
	<div class="main">
			<!--footer -->
			<footer>
				<ul class="icons">
					<li><a href="https://www.facebook.com/Artesanias-Rocios-1452027235040411/" class="normaltip" title="Facebook"><img src="images/icon1.jpg" alt=""></a></li>					
					<li><a href="#" class="normaltip" title="Twitter"><img src="images/icon4.jpg" alt=""></a></li>		
				</ul>
			</footer>
			<!--footer end-->
	</div>
<div class="extra">
	<div id="page_1">
		<div class="main">
			<!--header -->
			<header>
				<a href="index_usuariocomun.php" id="logo">Artesanias Roc$iacute;o</a>
				
			<label style = "color:blue;"  align='center'>USUARIO COMÚN</label>
				<nav>
					<ul id="menu">
						<li class="nav2"><a href="#page_3">Perfil</a></li>
						<li class="nav3"><a href="#page_4">Productos</a></li>
						<li class="nav4"><a href="#page_5">Acerca</a></li>
						<li class="nav5"><a href="#page_6">Contactanos</a></li>
						
					</ul>
					<?php
						session_start();
						if(isset($_SESSION['usuario']) ){	
						$ide=$_SESSION['id'];
						
							function visitas($ide){								
								include "conex.php";	
								session_start();
								
								$nom=$_SESSION['usuario'];															
								$ip = $REMOTE_ADDR;   
								$cuenta="Usuario Comun";
								date_default_timezone_set('America/Monterrey'); 											
								$hora = date("h:i:s");      
								$hoy = date("d-m-Y");									
								$consulta=mysql_query("select * from visitas WHERE id_usuario ='$ide' ");									
								if(mysql_num_rows($consulta)){
									$consulta= ("UPDATE visitas SET nombre_usuario = '$nom', fecha='$hoy', hora= '$hora', ip ='$ip', tipo_cuenta= '$cuenta' WHERE id_usuario = '$ide'");
									$resultado=mysql_query($consulta);	
										echo $hora
								} else{   
								$consulta = "INSERT INTO visitas VALUES ('$ide','$nom','$hoy','$hora','$ip','$cuenta')";
									$resultado=mysql_query($consulta);
									return $ide;									
								} 
							}
							
							$iden=visitas($ide);														
			?>
					<a class="href" href= "/proyecto/index.php?cerrar=session">Cerrar sesion  (<?php echo $_SESSION['usuario'];?> <?php $_SESSION['id'];?>)</a>
				<?php
				}else
					echo "Acceso denegado";
				?>
				
				
				</nav>
			</header>
			<!--header end-->
			<div class="ic">More Website Templates at TemplateMonster.com!</div>
		</div>
		<div class="block"></div>
	</div>
</div>
	<div class="main">
			<!--footer -->
			<footer>
				<ul class="icons">
					<li><a href="https://www.facebook.com/Artesanias-Rocios-1452027235040411/" class="normaltip" title="Facebook"><img src="images/icon1.jpg" alt=""></a></li>		
					<li><a href="#" class="normaltip" title="Twitter"><img src="images/icon4.jpg" alt=""></a></li>
				</ul>
			</footer>
			<!--footer end-->
	</div>
<div class="extra">
	<div id="page_4">
		<div class="main">
			<!--header -->
			<header>
				<h1><a href="#page_1">Artesan&iacute;as Roc&iacute;o</a></h1>
				<nav>
					<ul class="menu">
						<li><a href="#page_3">Perfil</a></li>
						<li class="active"><a href="#page_4">Productos</a></li>
						<li><a href="#page_5">Acerca</a></li>
						<li><a href="#page_6">Contactanos</a></li>
					</ul>
				</nav>
			</header>
			<!--header end-->
			<!--content -->
			<section class="content">
				<article class="col1">
					<div class="wrapper pad_top1 pad_bot2">
						<figure class="pad_bot3"><a href="#"><img src="images/terminadoyeso.jpg" alt=""></a></figure>
						<p class="pad_bot1"><strong class="font1">YESO</strong></p>
						<p class="pad_bot3">Este es el terminado que tienen las piezas de yeso.</p>						
					</div>
					<div class="wrapper pad_top1 pad_bot2">
						<figure class="pad_bot3"><a href="#"><img src="images/basetaceldeflor.jpg" alt=""></a></figure>
						<p class="pad_bot1"><strong class="font1">Product 2</strong></p>
						<p class="pad_bot3">Base tacel de flor $80.</p>						
					</div>
					<div class="wrapper pad_top1 pad_bot2">
						<figure class="pad_bot3"><a href="#"><img src="images/elefanteparadochico.jpg" alt=""></a></figure>
						<p class="pad_bot1"><strong class="font1">Product 3</strong></p>
						<p class="pad_bot3">Elefante parado chico $50.</p>						
					</div>
					<div class="wrapper pad_top1 pad_bot2">
						<figure class="pad_bot3"><a href="#"><img src="images/jgo.dejarrondeeces.jpg" alt=""></a></figure>
						<p class="pad_bot1"><strong class="font1">Product 4</strong></p>
						<p class="pad_bot3">Juego de jarron de eces $120.</p>						
					</div>
					<div class="wrapper pad_top1 pad_bot2">
						<figure class="pad_bot3"><a href="#"><img src="images/jgo.dejarrondemoño.jpg" alt=""></a></figure>
						<p class="pad_bot1"><strong class="font1">Product 5</strong></p>
						<p class="pad_bot3">Juego. de jarron de moño $120.</p>						
					</div>
					<div class="wrapper pad_top1 pad_bot2">
						<figure class="pad_bot3"><a href="#"><img src="images/jgo.dejarrondeolla.jpg" alt=""></a></figure>
						<p class="pad_bot1"><strong class="font1">Product 6</strong></p>
						<p class="pad_bot3">Juego de jarron de olla $120.</p>						
					</div>
					<div class="wrapper pad_top1 pad_bot2">
						<figure class="pad_bot3"><a href="#"><img src="images/jgo.dejarronflorconlazo.jpg" alt=""></a></figure>
						<p class="pad_bot1"><strong class="font1">Product 7</strong></p>
						<p class="pad_bot3">Juego de jarron flor con lazo $120.</p>						
					</div>
        		</article>
				<article class="col1 pad_left1">									
					<div class="wrapper pad_top1 pad_bot2">
						<figure class="pad_bot3"><a href="#"><img src="images/pro1.jpg" alt=""></a></figure>
						<p class="pad_bot1"><strong class="font1">BARRO</strong></p>
						<p class="pad_bot3">Este es el terminado que tienen las piezas de barro con diferentes combinacion de 
												colores naranja con rojo ó negro, verde con rojo ó negro y/o rojo con negro.</p>						
					</div>	
					<div class="wrapper pad_top1 pad_bot2">
						<figure class="pad_bot3"><a href="#"><img src="images/cilindroliso.jpg" alt=""></a></figure>
						<p class="pad_bot1"><strong class="font1">Cilindro liso $140</strong></p>
						<p class="pad_bot3">Este producto se encuentra en todas las conbinaciones de colores.</p>						
					</div>
					<div class="wrapper pad_top1 pad_bot2">
						<figure class="pad_bot3"><a href="#"><img src="images/macetaolanchica.jpg" alt=""></a></figure>
						<p class="pad_bot1"><strong class="font1">Maceta olan chica $60</strong></p>
						<p class="pad_bot3">Este producto se encuentra en todas las conbinaciones de colores.</p>						
					</div>
					<div class="wrapper pad_top1 pad_bot2">
						<figure class="pad_bot3"><a href="#"><img src="images/macetapiedralisa.jpg" alt=""></a></figure>
						<p class="pad_bot1"><strong class="font1">Maceta piedra lisa $100</strong></p>
						<p class="pad_bot3">Este producto se encuentra en todas las conbinaciones de colores.</p>						
					</div>
					<div class="wrapper pad_top1 pad_bot2">
						<figure class="pad_bot3"><a href="#"><img src="images/asadordepozo.jpg" alt=""></a></figure>
						<p class="pad_bot1"><strong class="font1">Asador de pozo $600</strong></p>
						<p class="pad_bot3">Este producto se encuentra en todas las conbinaciones de colores.</p>						
					</div>
					<div class="wrapper pad_top1 pad_bot2">
						<figure class="pad_bot3"><a href="#"><img src="images/vasoconbordoliso.jpg" alt=""></a></figure>
						<p class="pad_bot1"><strong class="font1">Vaso con bordo liso $100</strong></p>
						<p class="pad_bot3">Este producto se encuentra en todas las conbinaciones de colores.</p>						
					</div>
        		</article>
				<article class="col1">		
					<div class="wrapper pad_top1 pad_bot2">
						<figure class="pad_bot3"><a href="#"><img src="images/vasocorona.jpg" alt=""></a></figure>
						<p class="pad_bot1"><strong class="font1">Vaso corona $100</strong></p>
						<p class="pad_bot3">Este producto se encuentra en todas las conbinaciones de colores.</p>						
					</div>					
					<div class="wrapper pad_top1 pad_bot2">
						<figure class="pad_bot3"><a href="#"><img src="images/vasoolangde.jpg" alt=""></a></figure>
						<p class="pad_bot1"><strong class="font1">Vaso olan grande $70</strong></p>
						<p class="pad_bot3">Este producto se encuentra en todas las conbinaciones de colores.</p>						
					</div>			
					<div class="wrapper pad_top1 pad_bot2">
						<figure class="pad_bot3"><a href="#"><img src="images/vasopiedragde.jpg" alt=""></a></figure>
						<p class="pad_bot1"><strong class="font1">Vaso piedra grande. $110</strong></p>
						<p class="pad_bot3">Este producto se encuentra en todas las conbinaciones de colores.</p>						
					</div>
					<div class="wrapper pad_top1 pad_bot2">
						<figure class="pad_bot3"><a href="#"><img src="images/macetatortuga.jpg" alt=""></a></figure>
						<p class="pad_bot1"><strong class="font1">Maceta tortuga $100</strong></p>
						<p class="pad_bot3">Este producto se encuentra en todas las conbinaciones de colores.</p>						
					</div>					
				</article>
			</section>
			<!--content end-->
		</div>
		<div class="block"></div>
	</div>
</div>
	<div class="main">
			<!--footer -->
			<footer>
				<ul class="icons">
					<li><a href="https://www.facebook.com/Artesanias-Rocios-1452027235040411/" class="normaltip" title="Facebook"><img src="images/icon1.jpg" alt=""></a></li>
					<li><a href="#" class="normaltip" title="Twitter"><img src="images/icon4.jpg" alt=""></a></li>
					
				</ul>
			</footer>
			<!--footer end-->
	</div>
<div class="extra">
	<div id="page_5">
		<div class="main">
			<!--header -->
			<header>
				<h1><a href="#page_1">Artesan&iacute;as Roc&iacute;o</a></h1>
				<nav>
					<ul class="menu">
						<li><a href="#page_3">Perfil</a></li>
						<li><a href="#page_4">Productos</a></li>
						<li class="active"><a href="#page_5">Acerca</a></li>
						<li><a href="#page_6">Contactanos</a></li>
					</ul>
				</nav>
			</header>
			<!--header end-->
			<!--content -->
			<section class="content">
				<div class="wrapper">
					<p class="font1 pad_bot1 pad_top1"><strong>Como surge Aretesanias Rocio</strong></p>
					<p>Artesanías Rocio surge en el tiangüis de Tonalá, un pequeño negocio que comenzaba a vender pocos productos, hasta que un cliente de Costa Rica
					se interesa un poco más que otros clientes en los productos y les pide que trabajen para él así fue como fue creciendo esta pequeña empresa, hasta entonces.</p>
					<p class="font1 pad_bot1"><strong>¿Estan caros los precios o porque se da a ese precio?</strong></p>
					<p>Los precios estan asi por que Artesanias Rocio garantiza su trabajo, es decir si tu compras una maceta de barro y la tienes en tu jardin
					o en tu patio, en un espacio abierto, la empresa te garantiza que esa maceta no le pasara nada ni con la lluvia ni con el polvo, si se moja
					notaras que es como si la hubieras lavado, ya que no pierde su brillo, al contrario se ve mas brillosa sin perder su color como nueva, ahora ¿Crees que el precio es elevado? Te invitamos a comprar
					una maceta, para que tú mismo te serciores y compruebes la garantia que te ofrece Artesanías Rocio. </p>					
				</div>
			</section>
			<!--content end-->
		</div>
		<div class="block"></div>
	</div>
</div>
	<div class="main">
			<!--footer -->
			<footer>
				<ul class="icons">
					<li><a href="https://www.facebook.com/Artesanias-Rocios-1452027235040411/" class="normaltip" title="Facebook"><img src="images/icon1.jpg" alt=""></a></li>
					<li><a href="#" class="normaltip" title="Twitter"><img src="images/icon4.jpg" alt=""></a></li>
					
				</ul>
			</footer>
			<!--footer end-->
	</div>
<div class="extra2">
	<div id="page_6">
		<div class="main">
			<!--header -->
			<header>
				<h1><a href="#page_1">Artesan&iacute;as Roc&iacute;o</a></h1>
				<nav>
					<ul class="menu">
						<li><a href="#page_3">Perfil</a></li>
						<li><a href="#page_4">Productos</a></li>
						<li><a href="#page_5">Acerca</a></li>
						<li class="active"><a href="#page_6">Contactanos</a></li>
					</ul>
				</nav>
			</header>
			<!--header end-->
			<!--content -->
			<section class="content">
				<article class="col1">
					<h2>Información de Aretesanías Rocio</h2>
					<p> Estamos a tus Ordenes para cualquier duda o aclaración</p>
					<p></p>
        		</article>
				<article class="col1 pad_left1">
					<h2>Contact Form</h2>
					<form id="ContactForm"  action="enviarMensaje.php" method="post">
							<div>
								<div class="wrapper"><input class="input" type="text" value="Name"  onblur="if(this.value=='') this.value='Name:'" onFocus="if(this.value =='Name:' ) this.value=''" ></div>
								<div class="wrapper"><input class="input" type="text" value="Email"  onblur="if(this.value=='') this.value='Email:'" onFocus="if(this.value =='Email:' ) this.value=''" ></div>				
								<div class="textarea_box"><textarea cols="1" rows="1" value="Opinion" onBlur="if(this.value=='') this.value='Message:'" onFocus="if(this.value =='Message:' ) this.value=''"  >Message:</textarea></div>
								<a href="javascript:" class="button" onClick="document.getElementById('ContactForm').reset()">clear</a>
								<a href="javascript:"" class="button" onClick="document.getElementById('ContactForm').submit()">send</a>
							</div>
					</form>
        		</article>
								<article class="col1 pad_left1">
					<h2>Nuestra Localización</h2>
					<p>Tonalá Jalisco<br>
							Calle Margaritas #312, col.ALtamira. cp 45400</p>
					<p> 
						<span class="right">+33 36831875</span><strong class="color1">Telefono:</strong><br>
						<span class="right"><a href="mailto:">artesaniasrocios@hotmail.com</a></span>	<strong class="color1">E-mail:</strong></p>
        		</article>
			</section>
			<!--content end-->
		</div>
		<div class="block2"></div>
	</div>
</div>
	<div class="main">
			<!--footer -->
			<footer class="footer_end">
				<div class="wrapper">
					<ul class="icons">
						<li><a href="https://www.facebook.com/Artesanias-Rocios-1452027235040411/" class="normaltip" title="Facebook"><img src="images/icon1.jpg" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Twitter"><img src="images/icon4.jpg" alt=""></a></li>
					</ul>
				</div>
			</footer>
			<!--footer end-->
	</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>