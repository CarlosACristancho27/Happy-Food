<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-sca">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<script src="https://unpkg.com/scrollreveal"></script>

	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">

	<link rel="stylesheet" type="text/css" href="./css/main1.css">
	<link rel="icon" href="./img/logo.png">
	<title>Registro de Usuario (Prototipo)</title>
</head>
<body>


	<nav id="navbar" class="navbar navbar-expand-lg bg-dark navbar-dark">

  	<div id="mySidenav" class="sidenav">
  	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
  	<a class="navbar-brand" href="index.html">
    <img src="./img/logo.png" alt="logo" style="width: 50px;">
	  </a>
	  <a href="index.html">Inicio</a>
	  <a href="menu.html">Ver Menú</a>
	  <a href="iniciar-sesion.html">Iniciar Sesion</a>
	</div>

	<span style="font-size:30px;cursor:pointer;color:white;margin-left: 13px;" onclick="openNav()">&#9776;</span>
	  
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

	    <div class="navbar-nav">
	      
	  </div>  
	</nav>
	<br>


	<section class="formulario">
		<h1>Registro de usuario.</h1>

	<form action="mensaje.php" method="post">

		<div class="row">
		 	<div class="col">
		      <label>Nombre: </label>
		      <input type="text" placeholder="Ingrese su Nombre">
			</div>

		    <div class="col">
		      <label>Apellido: </label>
		      <input type="text" placeholder="Ingrese su Apellido">
		    </div>
		</div>

		<div class="row">
			<div class="col">
			<label>Cedula: </label>
			<input type="text" placeholder="Ingrese su Cedula de Identidad.">
			</div>

			<div class="col">
			<label>Telefono: </label>
			<input type="text" placeholder="Ingrese su Telefono">
			</div>
		</div>

		<div class="row">
			<div class="col">
			<label>Email: </label>
			<input type="email" name="email"  placeholder="Ingrese su Email.">
			</div>

			<div class="col">
			<label>Confirme su Email: </label>
			<input type="email" name="email" placeholder="Confirme su Email.">
			</div>
		</div>

		<div class="row">
			<div class="col">
			<label>Contraseña: </label>
			<input type="password" name="password" placeholder="Ingrese una Contraseña">
			</div>

			<div class="col">
			<label>Confirme su Contraseña: </label>
			<input type="password" name="password" placeholder="Confirme su Contraseña">
			</div>
		</div>

		<div class="row">
			<div class="col">
				<label>Seleccione el cargo que le fue otorgado:</label>
				<br>
				<select id="cargo" name="cargo">
				<option>Seleciona...</option>
	            <option value="1">Cocinero</option>
	            <option value="2">Camarero</option>
	            <option value="3">Administrador</option>
	            <option value="4">Jefe de Cocina</option>
	        	</select>
			</div>
		</div>

		<label>
			<input type="checkbox" id="cbox1" value="first"> He leido y acepto los <a href="Terminos-y-Condiciones.txt">Terminos y Condiciones</a>
		</label>

		<center>
		<input class="botons" type="submit" value="Registrarse">
		</center>

		<p><a href="iniciar-sesion.php">¿Ya tienes una cuenta? Inicia sesion.</a></p>
	</form>

	</section>

	<footer>
      <span> Happy Food C.A - © 2022</span>
 	 </footer>

	<!----Scripts--->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<!--Scroll_Reveal-->
	<script>
      window.sr = ScrollReveal();
    sr.reveal('.formulario', {
      duration: 2000,
      origin: 'top',
      distance: '300px'
    });
	</script>

	<script>
	function openNav() {
	  document.getElementById("mySidenav").style.width = "250px";
	}

	function closeNav() {
	  document.getElementById("mySidenav").style.width = "0";
	}
	</script>

</body>
</html>