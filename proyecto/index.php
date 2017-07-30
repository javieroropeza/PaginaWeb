<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title> Artesanías Rocio Sign-Up OR Login </title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
				<?php
					include "conex.php";
					session_start();
						if(@$_POST["enviar"]){
							@$email=$_POST["email"];
							@$password=$_POST["password"];
							$consulta=mysql_query("select * from usuarios where  password = '$password' and email= '$email'");
							if(mysql_num_rows($consulta)){
								$arreglo = mysql_fetch_array($consulta);
								$_SESSION["usuario"]=$arreglo["nombre"];
								
								//hago la consulta con los datos
								$sql = ("select * from usuarios where  password = '$password' and email= '$email'");
								$result =mysql_query ($sql); 
								//obtengo los datos en el arreglo registro 
								while ($registro = mysql_fetch_array($result)){  
								//pongo una variable que sea igual a la posicion 1 de mi tabla y asi sucesivamente la posicion 0 es el id.
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
								if($tipo_cuenta == "administrador"){
									session_start();
									header("location: plantilla4/site/index.php");
								}
								if($tipo_cuenta == "Cliente"){
									session_start();
									header("location: plantilla4/site/index_cliente.php");
								}
								if($tipo_cuenta == "Usuario Comun"){
									session_start();
									header("location: plantilla4/site/index_usuariocomun.php");
								}
							}else{
							echo' <script languaje="javascript">alert("Este usuario no existe. Ó  el usuario y/o contraseña incorrectos");</script>';
							}
						} 
					else if(@$_POST["registra"]){
						include "conex.php";
								@$nombre=$_POST["nombrer"];
								@$apellido=$_POST["apellidor"];
								@$password=$_POST["passwordr"];
								@$email=$_POST["emailr"];
								@$cuenta=$_POST["rcliente"];
								 if($cuenta == 1)
								{
									$cuenta ="Cliente";
								}  else{
									$cuenta="Usuario Comun";
								}
								$consulta=("select * from usuarios where email='$email'");
								$resultado=mysql_query($consulta) or die (mysql_error());
									if (mysql_num_rows($resultado)>0){
										echo' <script languaje="javascript">alert("Este correo ya existe .");</script>';
									}else{
										$consulta=("INSERT INTO usuarios VALUES('','$nombre','$apellido','$password','$email','$cuenta')");
										$resultado=mysql_query($consulta);
								
										$consu=("select * from usuarios where email='$email'");
										$resultad=mysql_query($consu);
										if(mysql_num_rows($consulta)){
											echo' <script languaje="javascript">alert("Datos ingresados correctamente");</script>';																		
										}else{
											echo' <script languaje="javascript">alert("Los Datos no se ingresaron correctamente. Ocurrio un error vuelvalo a intentar ");</script>';
										}
										header("location: index.php?");
									}
					}
				?>
					
    <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="?" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off"  name="nombrer"/>
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="apellidor"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"  name="emailr"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="passwordr"/>
          </div>
		   <div class="field-wrap">
				<label>
					Account Type
				</label>
					<br></br>
					<div class="lista">
					<input type="radio" name="rcliente" value="1" >Cliente
					<br>					
					<input type="radio" name="rcliente" value="2"  checked>Usuario Común
					<br>
					</div>
          </div>
		  <br></br>
		  
          <input type="submit"  class="button button-block"  value="Get Started"  name="registra"/></input>
        
          
          </form>

        </div>
        
         <div id="login"> 
          <h1>Welcome Back!</h1>
          
          <form action="?" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"name="email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"name="password"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
           <input type="submit"  class="button button-block"  value="Log In"  name="enviar"/></input>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>
  </body>
</html>
