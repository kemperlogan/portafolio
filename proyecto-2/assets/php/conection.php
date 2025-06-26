<?php
// Parametros de conexion
$host ="localhost";
$user = "root";
$db = "registro";

// variable de conexion

$conection = mysqli_connect($host,$user,'',$db);

$err = "ha ocurrido un error con la base de datos";

if($conection !=true){
    mysqli_error($conection);
}