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
        
        $sql = "SELECT * FROM usuarios WHERE username = ? AND password = ?";
        $stmt = $this->conexion->prepare($sql);

        if ($stmt === false) {
            die("Error en la consulta: " . $this->conexion->error);
        }

        $stmt->bind_param("ss", $user, $pass);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if ($row['role'] === 'admin') {
                echo "Has accedido como administrador.<br>";
                echo "Bienvenido.";
            } else {
                echo "Has accedido como usuario.<br>";
                echo "Bienvenido.";
            }
        } else {
            echo "Usuario o contraseña incorrectos.";
        }
    }
}
