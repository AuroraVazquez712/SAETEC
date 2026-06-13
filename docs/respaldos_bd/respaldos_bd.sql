-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: SAETEC
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `actividad`
--

DROP TABLE IF EXISTS `actividad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `actividad` (
  `id_actividad` int(11) NOT NULL AUTO_INCREMENT,
  `id_profesor` int(11) NOT NULL,
  `nombre_actividad` varchar(30) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `fecha_entrega` date NOT NULL,
  PRIMARY KEY (`id_actividad`),
  KEY `id_profesor` (`id_profesor`),
  CONSTRAINT `actividad_ibfk_1` FOREIGN KEY (`id_profesor`) REFERENCES `profesor` (`id_profesor`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actividad`
--

LOCK TABLES `actividad` WRITE;
/*!40000 ALTER TABLE `actividad` DISABLE KEYS */;
INSERT INTO `actividad` VALUES (1,1,'Serie de Karel',NULL,'2026-06-08');
/*!40000 ALTER TABLE `actividad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `administrador`
--

DROP TABLE IF EXISTS `administrador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administrador` (
  `id_administrador` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_administrador` text NOT NULL,
  `contrasenha` text NOT NULL,
  PRIMARY KEY (`id_administrador`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrador`
--

LOCK TABLES `administrador` WRITE;
/*!40000 ALTER TABLE `administrador` DISABLE KEYS */;
INSERT INTO `administrador` VALUES (1,'fersagood','02022002');
/*!40000 ALTER TABLE `administrador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asignacion`
--

DROP TABLE IF EXISTS `asignacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asignacion` (
  `id_asignacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_actividad` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `calificacion` int(11) NOT NULL,
  PRIMARY KEY (`id_asignacion`),
  KEY `id_actividad` (`id_actividad`),
  KEY `id_estudiante` (`id_estudiante`),
  CONSTRAINT `asignacion_ibfk_1` FOREIGN KEY (`id_actividad`) REFERENCES `actividad` (`id_actividad`),
  CONSTRAINT `asignacion_ibfk_2` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asignacion`
--

LOCK TABLES `asignacion` WRITE;
/*!40000 ALTER TABLE `asignacion` DISABLE KEYS */;
INSERT INTO `asignacion` VALUES (1,1,2,10);
/*!40000 ALTER TABLE `asignacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comentario`
--

DROP TABLE IF EXISTS `comentario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL AUTO_INCREMENT,
  `id_estudiante` int(11) NOT NULL,
  `comentario` varchar(100) NOT NULL,
  `fecha_publicacion` date NOT NULL,
  PRIMARY KEY (`id_comentario`),
  KEY `id_estudiante` (`id_estudiante`),
  CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentario`
--

LOCK TABLES `comentario` WRITE;
/*!40000 ALTER TABLE `comentario` DISABLE KEYS */;
INSERT INTO `comentario` VALUES (1,1,'Hola mundo','2026-06-08');
/*!40000 ALTER TABLE `comentario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cuestionario`
--

DROP TABLE IF EXISTS `cuestionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cuestionario` (
  `id_cuestionario` int(11) NOT NULL AUTO_INCREMENT,
  `id_estudiante` int(11) NOT NULL,
  `areas_oportunidad` varchar(40) DEFAULT NULL,
  `id_emocion` int(1) NOT NULL,
  `cuesta_trabajo` varchar(40) DEFAULT NULL,
  `explicacion` varchar(100) DEFAULT NULL,
  `fecha_emision` date DEFAULT NULL,
  PRIMARY KEY (`id_cuestionario`),
  KEY `id_estudiante` (`id_estudiante`),
  CONSTRAINT `cuestionario_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cuestionario`
--

LOCK TABLES `cuestionario` WRITE;
/*!40000 ALTER TABLE `cuestionario` DISABLE KEYS */;
INSERT INTO `cuestionario` VALUES (2,1,'todo',1,'todo','nada','2026-06-11'),(3,1,'todo',1,'todo','nada','2026-06-12'),(4,1,'Todo',1,'nada','A','2026-06-12'),(5,1,'todo',1,'todo','a','2026-06-12');
/*!40000 ALTER TABLE `cuestionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dificultad`
--

DROP TABLE IF EXISTS `dificultad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dificultad` (
  `id_dificultad` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_dificutad` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_dificultad`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dificultad`
--

LOCK TABLES `dificultad` WRITE;
/*!40000 ALTER TABLE `dificultad` DISABLE KEYS */;
INSERT INTO `dificultad` VALUES (1,'tiempo'),(2,'desconocimiento'),(3,'falta de computadora'),(4,'grupo demandante'),(5,'motivos personales');
/*!40000 ALTER TABLE `dificultad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emocion`
--

DROP TABLE IF EXISTS `emocion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emocion` (
  `id_emocion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_emocion` text NOT NULL,
  PRIMARY KEY (`id_emocion`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emocion`
--

LOCK TABLES `emocion` WRITE;
/*!40000 ALTER TABLE `emocion` DISABLE KEYS */;
INSERT INTO `emocion` VALUES (1,'feliz'),(2,'mas o menos'),(3,'triste'),(4,'cansado');
/*!40000 ALTER TABLE `emocion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudiante`
--

DROP TABLE IF EXISTS `estudiante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estudiante` (
  `id_estudiante` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `id_interes` int(11) DEFAULT NULL,
  `id_dificultad` int(11) DEFAULT NULL,
  `id_razon` int(11) DEFAULT NULL,
  `id_habito` int(11) DEFAULT NULL,
  `nocta` int(9) DEFAULT NULL,
  PRIMARY KEY (`id_estudiante`),
  UNIQUE KEY `nocta` (`nocta`),
  KEY `id_grupo` (`id_grupo`),
  KEY `id_interes` (`id_interes`),
  KEY `id_dificultad` (`id_dificultad`),
  KEY `id_razon` (`id_razon`),
  KEY `id_habito` (`id_habito`),
  CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `perfil` (`id_perfil`),
  CONSTRAINT `estudiante_ibfk_2` FOREIGN KEY (`id_grupo`) REFERENCES `grupo` (`id_grupo`),
  CONSTRAINT `estudiante_ibfk_3` FOREIGN KEY (`id_interes`) REFERENCES `interes` (`id_interes`),
  CONSTRAINT `estudiante_ibfk_4` FOREIGN KEY (`id_dificultad`) REFERENCES `dificultad` (`id_dificultad`),
  CONSTRAINT `estudiante_ibfk_5` FOREIGN KEY (`id_razon`) REFERENCES `razon_ingreso` (`id_razon`),
  CONSTRAINT `estudiante_ibfk_6` FOREIGN KEY (`id_habito`) REFERENCES `habito_estudio` (`id_habito`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudiante`
--

LOCK TABLES `estudiante` WRITE;
/*!40000 ALTER TABLE `estudiante` DISABLE KEYS */;
INSERT INTO `estudiante` VALUES (1,2,3,5,3,1,325156992),(2,1,2,5,2,2,325295949);
/*!40000 ALTER TABLE `estudiante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupo`
--

DROP TABLE IF EXISTS `grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupo` (
  `id_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `id_profesor` int(11) NOT NULL,
  `nombre_grupo` varchar(3) NOT NULL,
  `plantel` varchar(50) NOT NULL,
  `cupo` int(11) NOT NULL,
  `salon` varchar(6) NOT NULL,
  PRIMARY KEY (`id_grupo`),
  KEY `id_profesor` (`id_profesor`),
  CONSTRAINT `grupo_ibfk_1` FOREIGN KEY (`id_profesor`) REFERENCES `profesor` (`id_profesor`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupo`
--

LOCK TABLES `grupo` WRITE;
/*!40000 ALTER TABLE `grupo` DISABLE KEYS */;
INSERT INTO `grupo` VALUES (1,1,'61B','Escuela Nacional Preparatoria No. 6 Antonio Caso',50,'LACEC'),(2,1,'61D','Escuela Nacional Preparatoria No. 6 Antonio Caso',50,'LACEC');
/*!40000 ALTER TABLE `grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `habito_estudio`
--

DROP TABLE IF EXISTS `habito_estudio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `habito_estudio` (
  `id_habito` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_habito` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_habito`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `habito_estudio`
--

LOCK TABLES `habito_estudio` WRITE;
/*!40000 ALTER TABLE `habito_estudio` DISABLE KEYS */;
INSERT INTO `habito_estudio` VALUES (1,'constancia'),(2,'tiempo dedicado'),(3,'estudio individual'),(4,'práctica constante');
/*!40000 ALTER TABLE `habito_estudio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `interes`
--

DROP TABLE IF EXISTS `interes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `interes` (
  `id_interes` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_interes` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_interes`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `interes`
--

LOCK TABLES `interes` WRITE;
/*!40000 ALTER TABLE `interes` DISABLE KEYS */;
INSERT INTO `interes` VALUES (1,'deportes'),(2,'artes'),(3,'tecnología'),(4,'espectáculo');
/*!40000 ALTER TABLE `interes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfil`
--

DROP TABLE IF EXISTS `perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perfil` (
  `id_perfil` int(11) NOT NULL AUTO_INCREMENT,
  `rol` char(1) DEFAULT 'E',
  `nombre` varchar(30) NOT NULL,
  `apellido_paterno` varchar(30) NOT NULL,
  `apellido_materno` varchar(30) DEFAULT NULL,
  `fecha_nacimiento` date NOT NULL,
  `correo` char(50) NOT NULL,
  `contrasenha` varchar(100) DEFAULT NULL,
  `foto_perfil` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_perfil`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfil`
--

LOCK TABLES `perfil` WRITE;
/*!40000 ALTER TABLE `perfil` DISABLE KEYS */;
INSERT INTO `perfil` VALUES (1,'E','Diego','Salcedo','Pérez','2009-03-21','diegod@saetec.com','21032009',NULL),(2,'E','Frida','García','Hernández','2009-07-07','friifayer@saetec.com','07072009',NULL);
/*!40000 ALTER TABLE `perfil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profesor`
--

DROP TABLE IF EXISTS `profesor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profesor` (
  `id_profesor` int(11) NOT NULL AUTO_INCREMENT,
  `no_trabajador` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_profesor`),
  UNIQUE KEY `no_trabajador` (`no_trabajador`),
  CONSTRAINT `profesor_ibfk_1` FOREIGN KEY (`id_profesor`) REFERENCES `perfil` (`id_perfil`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profesor`
--

LOCK TABLES `profesor` WRITE;
/*!40000 ALTER TABLE `profesor` DISABLE KEYS */;
INSERT INTO `profesor` VALUES (1,322244589);
/*!40000 ALTER TABLE `profesor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `razon_ingreso`
--

DROP TABLE IF EXISTS `razon_ingreso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `razon_ingreso` (
  `id_razon` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_razon` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_razon`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `razon_ingreso`
--

LOCK TABLES `razon_ingreso` WRITE;
/*!40000 ALTER TABLE `razon_ingreso` DISABLE KEYS */;
INSERT INTO `razon_ingreso` VALUES (1,'curiosidad'),(2,'interés previo'),(3,'relación con la carr');
/*!40000 ALTER TABLE `razon_ingreso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `respuesta`
--

DROP TABLE IF EXISTS `respuesta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `respuesta` (
  `id_respuesta` int(11) NOT NULL AUTO_INCREMENT,
  `id_comentario` int(11) NOT NULL,
  `comentario` varchar(100) NOT NULL,
  `fecha_publicacion` date NOT NULL,
  PRIMARY KEY (`id_respuesta`),
  KEY `id_comentario` (`id_comentario`),
  CONSTRAINT `respuesta_ibfk_1` FOREIGN KEY (`id_comentario`) REFERENCES `comentario` (`id_comentario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `respuesta`
--

LOCK TABLES `respuesta` WRITE;
/*!40000 ALTER TABLE `respuesta` DISABLE KEYS */;
INSERT INTO `respuesta` VALUES (1,1,'Hola equipo','2026-06-08');
/*!40000 ALTER TABLE `respuesta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-06-13  0:14:57