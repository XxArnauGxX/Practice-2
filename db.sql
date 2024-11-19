CREATE DATABASE practice2;

USE practice2;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    email VARCHAR(50)
);

INSERT INTO usuarios (nombre, email) VALUES 
('Juan', 'juan@example.com'), 
('Maria', 'maria@example.com');