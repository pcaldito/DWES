<?php
// Datos de conexión
$servidor = "localhost";
$usuario = "root";
$contrasenia = "";
$baseDatos = "prueba";

// Crear la conexión
$conexion = new mysqli($servidor, $usuario, $contrasenia, $baseDatos);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener el número del alumno a borrar desde el formulario
$num = $_POST['num'];

// Validar que el número no esté vacío y sea un número positivo
if (empty($num) || !is_numeric($num) || $num <= 0) {
    die("Error: Número de alumno inválido.");
}

// Preparar la consulta de borrado
$sql = "DELETE FROM alumnos WHERE idAumno = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $num);

// Ejecutar la consulta y verificar si fue exitosa
if ($stmt->execute()) {
    // Comprobar si alguna fila fue afectada
    if ($stmt->affected_rows > 0) {
        echo "Alumno con número $num eliminado con éxito.";
    } else {
        echo "No se encontró un alumno con el número proporcionado.";
    }
} else {
    echo "Error en el borrado: " . $stmt->error;
}

// Cerrar la conexión y liberar recursos
$stmt->close();
$conexion->close();
?>
