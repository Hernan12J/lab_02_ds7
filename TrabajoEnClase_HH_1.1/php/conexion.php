<?php
    //mysqli_connect("host", "mi_usuario", "mi_contraseña", "mi_bd");
    $conexion = mysqli_connect("localhost", "root", "", "sistema");

    if (!$conexion) {
        echo "Error: No se pudo conectar a MySQL.";
        exit;
    }
 else
 {   
    echo "Éxito: Se realizó una conexión ";
 }   


?>