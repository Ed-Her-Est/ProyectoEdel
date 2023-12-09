<?php

function connection() {
    $host = "localhost"; 
    $user = "root"; // Cambia esto con tu nombre de usuario de base de datos
    $pass = ""; // Cambia esto con tu contraseña de base de datos
    
    $bd = "starfit"; // Cambia esto con el nombre de tu base de datos

    $connect = mysqli_connect($host, $user, $pass);

   mysqli_select_db($connect, $bd);

    return $connect;
};
?>
