-- Crear tabla de usuarios
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'user') NOT NULL
);

-- Insertar usuarios de ejemplo
INSERT INTO usuarios (username, password, role) VALUES
('admin', 'admin123', 'admin'),
('usuario', 'usuario123', 'user');
