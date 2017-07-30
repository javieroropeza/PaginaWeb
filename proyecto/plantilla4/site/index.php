<!DOCTYPE html>
	<html>
		<head>
			<title>Artesanias Rocio</title>
			<link rel="stylesheet" type="text/css" href="index_style.css"/>
		</head>
		<body bgcolor="#124459">
			<div id="general">
			<br><br>
			<div id="menu">
				<ul class ="nav">
					<li><a href="">Usuarios</a>
						<ul>
							<li><a href="Clientes.php">Clientes</a></li>
							<li><a href="Usuario_Comun.php">Usuario Comun</a></li>		
						</ul>					
					</li>
					<li><a href="verPedido.php">Pedidos</a>						
					</li>
					<li><a href="">Visitas</a>	
						<ul>
							<li><a href="Visita_Cliente.php">Cliente</a></li>
							<li><a href="Visita_Usuario.php">Usuario Comun</a></li>		
						</ul>
					</li>
					<li><a href="">Imagenes</a>
						<ul>
							<li><a href="Imagenes_Barro.php">Barro</a></li>
							<li><a href="Imagenes_Yeso.php">Yeso</a></li>
						</ul>
					</li>
					<li><a href="">Productos</a>
						<ul>
							<li><a href="Productos_Barro.php">Barro</a></li>
							<li><a href="Productos.php">Yeso</a></li>
						</ul>
					</li>
					<li><a href="Proveedor.php">Proveedores</a>					
					</li>
				</ul>
				<?php
						session_start();
						if(isset($_SESSION['usuario']) ){	
						?>
					<a class="href" href= "/proyecto/index.php?cerrar=session">Cerrar sesion  (<?php echo $_SESSION['usuario'];?>)</a>
				<?php
				}else
					echo "Acceso denegado";
				?>
				</div>														
				
			</div>					
		</body>
	</html> 
