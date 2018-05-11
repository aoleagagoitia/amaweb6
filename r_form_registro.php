<?php
include "includes/conexion.php";
//recojo datos
$r_usuario = $_POST["nombre_usuario"];// Post del input name
$r_email = $_POST["email_usuario"];
$r_password = $_POST["password_usuario"];
$r_repassword= $_POST["repassword_usuario"];

if ($r_password!=$r_repassword)
{
        echo ("Las contraseñas introducidas son diferentes. Inténtelo de nuevo");
    }else{

    //primero hay que comprobar si existe ya
    $sql_select = "select usuario from usuarios where usuario='$r_usuario'";
    $eje_select = mysqli_query($conexion,$sql_select) or die("no puede realizar la selección");
    $contador = mysqli_num_rows($eje_select);

    if ($contador==0){
        $sql_alta = "insert into usuarios (usuario, email, password) values ('$r_usuario', '$r_email', '$r_password')";
        $ejecuto_alta = mysqli_query($conexion, $sql_alta);//hago el insert porque no hay registro igual
        echo "Usuario registrado con éxito";
        } else
       echo ("Nombre de usuario ya existente en AmaWeb, pruebe con otro.");
}
?>