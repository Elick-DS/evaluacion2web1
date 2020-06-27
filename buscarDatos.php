<?php

include("baseDatos.php");

if(isset($_POST['boton2']))
{
    $name = $_POST['search'];
    
    $consulta = "SELECT nombre, correo, contrasenia FROM tbl_datos WHERE nombre = '$name'";
    
    $opebd = new BaseDatos();

    $resultado = $opebd->consultarEnBaseDatos($consulta);
    
    echo "<br>";
    print_r(json_encode($resultado));
}

?>