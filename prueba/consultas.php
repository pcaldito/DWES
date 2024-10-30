<?php
    $servidor="localhost";
    $usuario="root";
    $contrasenia="";
    $baseDatos="prueba";

    $conexion= new mysqli($servidor,$usuario,$contrasenia,$baseDatos);

    $sql = "SELECT * FROM alumnos";
    $resultado = $conexion->query($sql);

    $sql2 = "SELECT * FROM cursos";
    $resultado2 = $conexion->query($sql2);

    echo"<p><b>Con tabla y fetchassoc</b></p>";

    if ($resultado->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>Numero</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Edad</th>
                </tr>";
        while($row = $resultado->fetch_array()) {
            echo "<tr>
                    <td>" . $row["idAumno"] . "</td>
                    <td>" . $row["nombre"] . "</td>
                    <td>" . $row["apellidos"] . "</td>
                    <td>" . $row["edad"] . "</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "0 resultados";
    }
     
/*
    echo "<p><b>Foreach</b></p>";
    if($resultado->num_rows > 0){
        while($row = $resultado->fetch_array(MYSQLI_ASSOC)) {
            foreach($row as $indice){
                echo $indice;
                echo "<br>";
            } 
            echo "<br>";
        }
    }
*/
    echo "<hr>";
    echo"<p><b>Con fetchassoc los cursos</b></p>";

    if($resultado2->num_rows > 0){
        while($row = $resultado2->fetch_array(MYSQLI_ASSOC)) {
            foreach($row as $indice){
                echo $indice;
                echo "<br>";
            } 
            echo "<br>";
        }
    }

?>