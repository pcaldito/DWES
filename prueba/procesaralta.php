<?php
// Datos de conexión
$servidor = "localhost";
$usuario = "root";
$contrasenia = "";
$baseDatos = "prueba";

// Crear la conexión
$conexion = new mysqli($servidor, $usuario, $contrasenia, $baseDatos);

$controlador = new mysqli_driver();
$controlador->report_mode = MYSQLI_REPORT_OFF;

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];
$curso = $_POST['curso'];

// Validar los datos
if (empty($nombre) || empty($apellidos) || !is_numeric($edad) || $edad < 0 || empty($curso)) {
    die("Error: Los datos proporcionados no son válidos.");
}

// Preparar la consulta de inserción
$sql = "INSERT INTO alumnos (nombre, apellidos, edad, curso) VALUES (?, ?, ?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("ssis", $nombre, $apellidos, $edad, $curso);

// Ejecutar la consulta y verificar si fue exitosa
if ($stmt->execute()) {
    echo "Nuevo alumno registrado con éxito.";
} else {
    echo "Error en el registro: " . $stmt->error;
}

// Capturar detalles de error en caso de fallo
$errno = $conexion->errno;
$error = $conexion->error;
echo '<br/>Código de error: ' . $errno . " - " . $error;

// Cerrar la conexión y liberar recursos
$stmt->close();
$conexion->close();
?>
