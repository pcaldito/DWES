<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="author" content="Pablo">
    <meta charset="utf-8">
    <title>Tabla de Factoriales Dinámica</title>
</head>
<body>
    <h1>Factorial</h1>
    <p>Introduce el rango de números para calcular el factorial:</p>

    <!-- Formulario para ingresar el rango -->
    <form method="POST" action="">
        <label for="min">Número mínimo:</label>
        <input type="number" id="min" name="min" required>
        <br>
        <label for="max">Número máximo:</label>
        <input type="number" id="max" name="max" required>
        <br><br>
        <input type="submit" value="Calcular Factoriales">
    </form>

    <?php
    // Función para calcular el factorial de un número
    function factorial($n) {
        if ($n==0)
			return 1;
		$fact = 1;
        for ($j = 1; $j <= $n; $j++) {
            $fact *= $j; 
        }
        return $fact;
    }

    // Verifica si se enviaron los datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $min = intval($_POST['min']);
        $max = intval($_POST['max']);

        // Asegura que los valores sean válidos
        if ($min >= 0 && $max >= $min) {
            echo "<p>El factorial del $min al $max es:</p>";
            echo "<table border='1'>
                    <thead>
                        <th colspan='2'>TABLA DE FACTORIALES DEL $min AL $max</th>
                        <tr>
                            <th>Número</th>
                            <th>Factorial</th>
                        </tr>
                    </thead>
                    <tbody>";

            // Cálculo y muestra de los factoriales en el rango
            for ($i = $min; $i <= $max; $i++) {
                $factorial = factorial($i);
                echo "<tr><td>$i</td><td>$factorial</td></tr>";
            }

            echo "<tr><td colspan='2'><b>Nombre del alumno</b>: Pablo Caldito Gomez</td></tr>";
            echo "</tbody></table>";
        } else {
            echo "<p>Por favor, introduce un rango válido (mínimo mayor a 0 y máximo mayor o igual al mínimo).</p>";
        }
    }
    ?>
</body>
</html>
