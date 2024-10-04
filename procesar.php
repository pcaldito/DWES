<?php
// Función para determinar si un número es par y calcular su cuadrado
// 'es_par' se pasa por referencia para modificar su valor directamente
function es_par_y_cuadrado($numero, &$es_par) {
    $es_par = ($numero % 2 === 0); // Modificamos la variable pasada por referencia
    return $numero * $numero; // Retornamos el cuadrado del número
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtenemos el número del formulario
    $numero = intval($_POST['numero']);
    
    // Variable para almacenar si es par o no
    $es_par = false;

    // Llamamos a la función, que modifica $es_par por referencia
    $cuadrado = es_par_y_cuadrado($numero, $es_par);

    // Redirigimos a la página correspondiente
    if ($es_par) {
        header("Location: par.php?numero=$numero&cuadrado=$cuadrado");
    } else {
        header("Location: impar.php?numero=$numero&cuadrado=$cuadrado");
    }
    exit();
}
?>
