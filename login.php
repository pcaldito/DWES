<?php
class Base {
    private $conexion;

    // Método para crear la conexión
    function conexion() {
        $servidor = "localhost";
        $usuario = "root";
        $contrasenia = "";
        $basedeDatos = "login";
        
        $this->conexion = new mysqli($servidor, $usuario, $contrasenia, $basedeDatos);

        // Verificar la conexión
        if ($this->conexion->connect_error) {
            die("Conexión fallida: " . $this->conexion->connect_error);
        }
    }

    // Método para mostrar los datos del usuario
    function mostrar() {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        
        $sql = "SELECT * FROM usuarios WHERE username = '$user' AND password = '$pass'"; 
        $result = $this->conexion->query($sql);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if ($row['role'] === 'admin' && $user && $pass) { 
                echo "Has accedido como administrador.<br>";
                echo "Bienvenido.";
            } elseif ($user && $pass) {
                echo "Has accedido como usuario.<br>";
                echo "Bienvenido.";
            }
        } else {
            echo "Usuario o contraseña incorrectos.";
        }
    }
}
?>
