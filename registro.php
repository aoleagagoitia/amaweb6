<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" /><!--Responsive-->
		<title> Formulario registro </title>
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/css/main.css" />
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		




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