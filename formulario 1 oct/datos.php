<?php
// Recibir los datos del formulario
$nombre = $_GET['nombre'];
$gmail = $_GET['gmail'];
$pais = $_GET['pais'];
$sexo = $_GET['sexo'];
$fecha_nacimiento = $_GET['fecha'];
$catastrofes = isset($_GET['catastrofe']) ? $_GET['catastrofe'] : [];

// Verificar que se recibieron los datos correctamente
if ($pais && $sexo) {
    // Mostrar los datos recibidos
    echo "Nombre: " . $nombre . "<br>";
    echo "Gmail: " . $gmail . "<br>";
    echo "País seleccionado: " . $pais . "<br>";
    echo "Sexo: " . $sexo . "<br>";
    echo "Fecha de nacimiento: " . $fecha_nacimiento . "<br>";

    // Comprobar si se seleccionaron catástrofes
    if (!empty($catastrofes)) {
        echo "Catástrofes seleccionadas: <br>";
        foreach ($catastrofes as $catastrofe) {
            echo "- " . $catastrofe . "<br>";
        }
    } else {
        echo "No se seleccionó ninguna catástrofe.<br>";
    }
} else {
    echo "Faltan datos obligatorios.";
}
?>
