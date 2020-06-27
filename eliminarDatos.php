<?php

include("baseDatos.php");

if(isset($_POST['boton3']))
{
    $name = $_POST['delete'];

    $consulta = "DELETE FROM tbl_datos WHERE nombre = '$name'";

    $opebd = new BaseDatos();

    $opebd->alterarBaseDatos($consulta);
}

?>