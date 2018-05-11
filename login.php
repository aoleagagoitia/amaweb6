<?php

session_start();
session_destroy();

?>

<html>
<head>
    <title>Amaweb</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
</head>
<body>
<section id="formulario">

        <h1>Iniciar sesión</h1>
        <br /><br />
        <div class="login">
            <form action="includes/login.php" method ="POST">
                <fieldset>
                    <legend>Login</legend>
                    <p>
                        <input type="text" name="usuario" placeholder="Usuario" title="Se necesita un usuario" required>
                    </p>
                    <p>
                        <input type="password" name="password" placeholder="Password" title="Se necesita un password" required>
                    </p>
                    <p>
                        <input type="submit" value="Entrar">
                        <input type="reset" value="Limpiar">
                    </p>
                    <p>
                        <a href="registro.php">Registrarse</a>

                    </p>
                 </fieldset>
            </form>
        </div>

</section>
</body>
</html>
