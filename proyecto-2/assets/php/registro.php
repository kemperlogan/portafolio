<?php

// Incluir base de datos

include_once('conection.php');

// Extraccion de datos del formulario de registro
$Nombre = $_POST['Name'];
$Apellido = $_POST['Apellido'];
$Email = $_POST['Email'];
$Contrasena = $_POST['Contraseña'];

// Mandar los datos a la base de datos

$registro = "INSERT INTO users (Nombre,Apellido,Email,Pasword) VALUES ('$Nombre','$Apellido','$Email','$Contrasena')";
// Validacion de la peticion y guardado de datos

$validacion = mysqli_query($conection,$registro);

if($validacion != false){
    header('Location:../public/inicio.html');
}

else{
    echo "Error inseperado, no se pudieron guardar los datos";
}