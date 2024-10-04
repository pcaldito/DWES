<?php
// Función para determinar si un número es par y calcular su cuadrado
function es_par_y_cuadrado($numero) {
    $resultado = [
        'es_par' => $numero % 2 === 0,
        'cuadrado' => $numero * $numero
    ];
    return $resultado;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtenemos el número del formulario
    $numero = intval($_POST['numero']);

    // Llamamos a la función
    $resultado = es_par_y_cuadrado($numero);

    // Redirigimos a la página correspondiente
    if ($resultado['es_par']) {
        header("Location: par.php?numero=$numero&cuadrado={$resultado['cuadrado']}");
    } else {
        header("Location: impar.php?numero=$numero&cuadrado={$resultado['cuadrado']}");
    }
    exit();
}
?>
