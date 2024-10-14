<?php
    class Calculadora {
        public function sumar($a, $b) {
            return $a + $b;
        }

        public function restar($a, $b) {
            return $a - $b;
        }

        public function multiplicar($a, $b) {
            return $a * $b;
        }

        public function dividir($a, $b) {
            if ($b == 0) {
                return "Error: División por cero.";
            }
            return $a / $b;
        }
    }

// Inicializar variables
$resultado = null;

// Verificar si se han enviado datos
if (isset($_GET['numero1'], $_GET['numero2'], $_GET['operador'])) {
    $numero1= $_GET['numero1'];
    $numero2= $_GET['numero2'];
    $operador= $_GET['operador'];

    //comprobamos el mayor y el menor
    $mayor=max($numero1,$numero2);
    $menor=min($numero1,$numero2);

    $objCalculadora=new Calculadora();

    switch($operador){
        case '+':
            $resultado= $objCalculadora->sumar($mayor, $menor);
            break;
        case '-':
            $resultado= $objCalculadora->restar($mayor, $menor);
            break;
        case '*':
            $resultado= $objCalculadora->multiplicar($mayor, $menor);
            break;
        case '/':
            $resultado= $objCalculadora->dividir($mayor, $menor);
            break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>
<body>
    <h1>Calculadora PHP</h1>
    <form action="calcular.php" method="GET">
        <label for="numero1">Número 1: </label>
        <input type="number" id="numero1" name="numero1" required>
        <br>
        <label for="numero2">Número 2: </label>
        <input type="number" id="numero2" name="numero2" required>
        <br>
        <label for="operador">Operador (+, -, *, /): </label>
        <input type="text" id="operador" name="operador" required>
        <br>
        <input type="submit" value="Calcular">
    </form>

    <?php if ($resultado !== null): ?>
        <h2>Resultado:</h2>
        <p><?php echo "El resultado de $mayor $operador $menor es: " . $resultado; ?></p>
    <?php endif; ?>
</body>
</html>
