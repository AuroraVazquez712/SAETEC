
-- mysql -u root --default-character-set=utf8mb4
SET names 'utf8mb4';

CREATE DATABASE SAETEC CHARACTER SET utf8mb4 
COLLATE utf8mb4_general_ci;

USE SAETEC;

-- TABLA HABITO_ESTUDIO
CREATE TABLE habito_estudio(
    id_habito INT PRIMARY KEY AUTO_INCREMENT,
    nombre_habito VARCHAR(20)
);

INSERT INTO habito_estudio (nombre_habito)
VALUES ("constancia"),
("tiempo dedicado"), 
("estudio individual"),
("práctica constante");


-- TABLA PERFIL
CREATE TABLE perfil (
    id_perfil INT PRIMARY KEY AUTO_INCREMENT,
    rol CHAR(1) DEFAULT 'E',
    nombre VARCHAR(30) NOT NULL,
    apellido_paterno VARCHAR(30) NOT NULL,
    apellido_materno VARCHAR(30),
    fecha_nacimiento DATE NOT NULL,
    correo CHAR(50) NOT NULL,
    contrasenha VARCHAR(100)
);

INSERT INTO perfil 
(nombre, apellido_materno, apellido_paterno,
fecha_nacimiento, correo, contrasenha)
VALUES 
("Diego", "Pérez", "Salcedo", "2009-03-21", 
"diegod@saetec.com", "21032009");

INSERT INTO perfil 
(nombre, apellido_materno, apellido_paterno,
fecha_nacimiento, correo, contrasenha)
VALUES 
("Frida", "Hernández", "García", "2009-07-07", 
"friifayer@saetec.com", "07072009");


CREATE TABLE estudiante (
    id_estudiante INT PRIMARY KEY,
    FOREIGN KEY (id_estudiante)
    REFERENCES perfil(id_perfil),
    -- cambiar FK a la forma que tiene habito_estudio, 
    -- cuando dichas tablas se creen
    id_grupo INT NULL,
    id_interes INT NULL,
    id_dificultad INT NULL,
    id_razon INT NULL,

    -- la sig forma es la correcta:
    id_habito INT NULL,
    FOREIGN KEY (id_habito) 
    REFERENCES habito_estudio(id_habito),
    nocta CHAR(9) UNIQUE
);

INSERT INTO estudiante (id_estudiante, id_habito, nocta)
VALUES (1, 4, "325156992");


INSERT INTO estudiante (id_estudiante, id_habito, nocta)
VALUES (2, 2, "325295949");

CREATE TABLE profesor(
    id_profesor INT PRIMARY KEY,
    FOREIGN KEY (id_profesor) REFERENCES perfil(id_perfil),
    no_trabajador INT UNIQUE
);