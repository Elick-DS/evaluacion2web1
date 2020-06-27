<?php

include("baseDatos.php");

if(isset($_POST['boton']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $consulta = "INSERT INTO tbl_datos(nombre, correo, contrasenia) VALUES ('$name', '$email', '$pwd')";

    $opebd = new BaseDatos();

    $opebd->alterarBaseDatos($consulta);
}

?>