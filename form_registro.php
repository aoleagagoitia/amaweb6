<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" /><!--Responsive-->
		<title> Formulario registro </title>
		<link rel="stylesheet" type="text/css" href="css/common.css"><!-- Crear carpetas css (con common.css) e img... -->	
		<link rel="stylesheet" type="text/css" href="css/registro.css">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="http://localhost:35729/livereload.js"></script><!--carga modificaciones instantaneamente desde el sublime. Instalarlo y Activar: Tools - Command Palette - Reload Enable -->
		
		<style type="text/css">
	 	 .clase{
	 	 
	 	 }

		</style>

		<script>
			function funcion1() {
				
			}
		</script>

	</head>
	<body>
		<form action="r_form_registro.php" method="post">
		  <div>
		    <label for="usuario">Usuario:</label>
		    <input type="text" id="id_usuario" name="nombre_usuario" required>
		  </div>

          <div>
          		    <label for="usuario">Email:</label>
          		    <input type="text" id="id_email" name="email_usuario" required>
          </div>

		  <div>
		    <label for="password">Password:</label>
		    <input type="password" id="id_password" name="password_usuario" required>
		  </div>

		  <div>
		    <label for="repassword">Repita Password:</label>
		    <input type="password" id="id_repassword" name="repassword_usuario" required>
		  </div>
		 
		  <div class="button">
		    <button type="submit">Registrarme</button>
		  </div>
		</form>
		

	</body>
</html>