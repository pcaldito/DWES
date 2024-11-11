<?php
    // Incluye la clase base
    include 'login.php';

    // Crear una instancia de la clase
    $base = new Base();

    // Llama al método de conexión
    $base->conexion();

    // Llama al método mostrar para procesar el login
    $base->mostrar();
?>
