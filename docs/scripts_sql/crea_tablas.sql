
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

INSERT INTO profesor (id_profesor, no_trabajador)
VALUES (04, "322244589");

-- TABLA DIFICULTAD
CREATE TABLE dificultad (
    id_dificultad INT PRIMARY KEY AUTO_INCREMENT,
    nombre_dificutad VARCHAR(30)
);

INSERT INTO dificultad (nombre_dificutad)
VALUES ("tiempo"),
("desconocimiento"),
("falta de computadora"),
("grupo demandante"),
("Motivos personales");


-- TABLA RAZÓN DE INGRESO
CREATE TABLE razon_ingreso (
    id_razon INT PRIMARY KEY AUTO_INCREMENT,
    nombre_razon VARCHAR(20)
);

INSERT INTO razon_ingreso (nombre_razon)
VALUES ("curiosidad"),
("interés previo"), 
("relación con la carrera");


-- TABLA INTERÉS
CREATE TABLE interes (
    id_interes INT PRIMARY KEY AUTO_INCREMENT,
    nombre_interes VARCHAR(20)
);

INSERT INTO interes (nombre_interes)
VALUES ("deportes"),
("artes"), 
("tecnología"),
("espectáculo");


-- TABLA COMENTARIO
CREATE TABLE comentario (
    id_comentario INT PRIMARY KEY AUTO_INCREMENT,
    id_estudiante INT NULL,
    FOREIGN KEY (id_estudiante) 
    REFERENCES estudiante(id_estudiante),
    comentario VARCHAR(100) NOT NULL,
    fecha_publicacion DATE NOT NULL
);

INSERT INTO comentario 
(id_estudiante, comentario, fecha_publicacion)
VALUES 
(1, "Hola mundo", "2026-06-08");


-- TABLA RESPUESTA
CREATE TABLE respuesta (
    id_respuesta INT PRIMARY KEY AUTO_INCREMENT,
    id_comentario INT NULL,
    FOREIGN KEY (id_comentario) 
    REFERENCES comentario(id_comentario),
    comentario VARCHAR(100) NOT NULL,
    fecha_publicacion DATE NOT NULL
);

INSERT INTO respuesta 
(id_estudiante, comentario, fecha_publicacion)
VALUES 
(1, "Hola equipo", "2026-06-08");


-- TABLA CUESTIONARIO
CREATE TABLE cuestionario (
    id_cuestionario INT PRIMARY KEY AUTO_INCREMENT,
    id_estudiante INT NULL,
    FOREIGN KEY (id_estudiante) 
    REFERENCES estudiante(id_estudiante),
    areas_oportunidad VARCHAR(40) NOT NULL,
    sentir_estudiante VARCHAR(40) NOT NULL,
    cuesta_trabajo VARCHAR(40) NOT NULL,
    fecha_emision DATE NOT NULL
);

INSERT INTO cuestionario
(id_estudiante, comentario, fecha_publicacion)
VALUES 
(1, "Hola mundo", "2026-06-08");


-- TABLA ACTIVIDAD
CREATE TABLE actividad (
    id_actividad INT PRIMARY KEY AUTO_INCREMENT,
    id_profesor INT NULL,
    FOREIGN KEY (id_profesor) 
    REFERENCES profesor(id_profesor),
    nombre_actividad VARCHAR(30) NOT NULL,
    descripcion VARCHAR(100) NULL,
    fecha_entrega DATE NOT NULL,
);

INSERT INTO actividad 
(id_profesor, nombre_actividad, fecha_entrega)
VALUES 
(1, "Serie de Karel","2026-06-08");

-- TABLA GRUPO
CREATE TABLE grupo (
    id_grupo INT PRIMARY KEY AUTO_INCREMENT,
    id_profesor INT NULL,
    FOREIGN KEY (id_profesor) 
    REFERENCES profesor(id_profesor),
    nombre_grupo VARCHAR(3) NOT NULL,
    plantel VARCHAR(50) NOT NULL,
    cupo INT NOT NULL,
    salon VARCHAR(6) NOT NULL,
);

INSERT INTO grupo
(id_profesor, nombre_grupo, plantel, cupo, salon)
VALUES 
(1, "61B","Escuela Nacional Preparatoria No. 6 Antonio Caso", 50, "LACEC");

INSERT INTO grupo
(id_profesor, nombre_grupo, plantel, cupo, salon)
VALUES 
(1, "61D","Escuela Nacional Preparatoria No. 6 Antonio Caso", 50, "LACEC");


-- TABLA ASIGNACION
CREATE TABLE asignacion (
    id_asignacion INT PRIMARY KEY AUTO_INCREMENT,
    id_actividad INT NULL,
    FOREIGN KEY (id_actividad) 
    REFERENCES actividad(id_actividad),
    id_estudiante INT NULL,
    FOREIGN KEY (id_estudiante) 
    REFERENCES estudiante(id_estudiante),
    calificacion INT NOT NULL,
);

INSERT INTO grupo
(id_actividad, id_estudiante, calificacion)
VALUES 
(1, 2, 10);
