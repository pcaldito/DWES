<?php
include 'bisiesto.php';

if (isset($_POST['fecha'])) {
    $fechaIngresada = $_POST['fecha'];

    // Separar la fecha en día, mes y año
    list($dia, $mes, $anio) = explode('/', $fechaIngresada);
    $mes=intval($mes);

    // Convertir el año a 4 dígitos si es necesario
    if (strlen($anio) == 2) {
        $anio = ($anio >= 70) ? '19'.$anio : '20'.$anio;
    }

    // Crear una instancia de la clase Fecha
    $fecha = new Fecha();

    // Ajustar febrero si es año bisiesto
    $fecha->ajustarFebrero($anio);

    // Obtener el nombre del mes y la cantidad de días
    $mesInfo = $fecha->obtenerMesYDias($mes);

    echo "Fecha ingresada: " . $dia . " de " . $mesInfo['nombre'] . " de " . $anio . "<br>";
    echo "El mes de " . $mesInfo['nombre'] . " tiene " . $mesInfo['dias'] . " días.";
} else {
    echo "No se ha ingresado ninguna fecha.";
}
?>
