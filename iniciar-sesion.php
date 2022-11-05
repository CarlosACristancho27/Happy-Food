<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-sca">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">

	<link rel="stylesheet" type="text/css" href="./css/main2.css">
	<link rel="icon" href="./img/logo.png">
	<title>Inicio de Sesion (Prototipo)</title>
</head>
<body>


<nav class="navbar navbar-expand-lg bg-dark navbar-dark">

  	<div id="mySidenav" class="sidenav">
  	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
  	<a class="navbar-brand" href="index.html">
    <img src="./img/logo.png" alt="logo" style="width: 50px;">
	  </a>
	  <a href="index.html">Inicio</a>
	  <a href="menu.html">Ver Menú</a>
	</div>

	<span style="font-size:30px;cursor:pointer;color:white;margin-left: 13px;" onclick="openNav()">&#9776;</span>

	    <div class="navbar-nav">
	      
	  	</div>  
</nav>
	<br>

	<section class="formulario">
		<div>
		<h1>Inicio de Sesion.</h1>
		<form name="f1" action="autenticacion.php" onsubmit="return validation()" method="POST">  

		<input class="controls" type="email" name="email" placeholder="Ingrese su Correo Electronico." required>
		<input class="controls" type="password" name="password" placeholder="Ingrese su contraseña." required>
		
		<p><a href="recuperar.html">¿Has olvidado tu contraseña?</a></p>

		<input class="botons" type="submit" value="Ingresar">
		
		<p><a href="registarse.php">¿No tienes una cuenta? Registrate.</a></p>
		</form>
	</div>
	</section>


	<div class="footer">
      		<span>Happy Food C.A - © 2022</span>
  	</div>


  	<script>  
            function validation()  
            {  
                var id=document.f1.username.value;  
                var ps=document.f1.password.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("Username is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
    </script>  


  	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

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