<!DOCTYPE html>
<html>
<head>
    <meta name="author" content="Pablo">
    <meta charset="utf-8">
    <?php 
        include 'funcionFactorial.php';
        $factoriales = [];
        for ($i = 0; $i <= 10; $i++) {
            $factoriales[$i] = factorial($i);
        }
    ?>
</head>
<body>
    <h1>Factorial</h1>
    <p>El factorial del 0 al 10 es:</p>
    <table border="1">
        <thead>
            <th colspan="2">TABLA DE FACTORIALES DEL 0 AL 10</th>
            <tr>
                <th>Número</th>
                <th>Factorial</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                for($i=0; $i<=10;$i++) {
                    echo "<tr><td>$i</td><td>{$factoriales[$i]}</td></tr>";
                }
            ?>
            <tr>
                <td colspan="2"><b>Nombre del alumno</b>: Pablo Caldito Gomez</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
