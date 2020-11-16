-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: db_skills
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.14-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (4,'2020_08_26_180713_create_foraneas_table',2),(34,'2014_10_12_000000_create_users_table',3),(35,'2014_10_12_100000_create_password_resets_table',3),(36,'2019_08_19_000000_create_failed_jobs_table',3),(37,'2020_09_06_014005_create_roles_table',3),(38,'2020_09_06_014142_create_role_user_table',3),(39,'2020_09_15_222829_create_juli_tests_table',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_user_role_id_foreign` (`role_id`),
  KEY `role_user_user_id_foreign` (`user_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=179 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_user`
--

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
INSERT INTO `role_user` VALUES (149,1,1,'2020-11-05 20:49:33','2020-11-05 20:49:33'),(150,2,1,'2020-11-05 20:49:33','2020-11-05 20:49:33'),(151,3,1,'2020-11-05 20:49:34','2020-11-05 20:49:34'),(177,1,2,'2020-11-09 20:03:38','2020-11-09 20:03:38'),(178,2,2,'2020-11-09 20:03:38','2020-11-09 20:03:38');
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Administrador','Administrator','2020-09-06 07:28:20','2020-09-06 07:28:20'),(2,'Consultor','User','2020-09-06 07:28:20','2020-09-06 07:28:20'),(3,'Evaluador','Evaluador','2020-09-06 07:28:20','2020-09-06 07:28:20');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skl_cargo`
--

DROP TABLE IF EXISTS `skl_cargo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skl_cargo` (
  `car_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_nombre` varchar(200) NOT NULL,
  `car_descripcion` text DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skl_cargo`
--

LOCK TABLES `skl_cargo` WRITE;
/*!40000 ALTER TABLE `skl_cargo` DISABLE KEYS */;
INSERT INTO `skl_cargo` VALUES (1,'Junior','Para desempeñarse suele requerir acompañamiento. Probablemente no maneja todas las herramientas que se necesitan para el cumplimiento de las tareas.','2020-11-03','2020-11-03',NULL),(2,'Experto','Técnicamente autosuficiente. Puede desarrollar funcionalidades más complejas y ejecutar proyectos de mayor envergadura.','2020-11-03','2020-11-03',NULL),(3,'Senior','Es un referente técnico dentro del equipo. Sus conocimientos le permite trabajar o colaborar en proyectos más desafiantes.','2020-11-03','2020-11-03',NULL),(4,'Gerente','Sus funciones son planificar, organizar, dirigir, controlar, coordinar, analizar, calcular y conducir el trabajo de la empresa, además de contratar al personal adecuado, efectuando esto durante la jornada de trabajo.','2020-11-03','2020-11-03',NULL);
/*!40000 ALTER TABLE `skl_cargo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skl_categoria`
--

DROP TABLE IF EXISTS `skl_categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skl_categoria` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_nombre` varchar(300) NOT NULL,
  `cat_descripcion` text DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skl_categoria`
--

LOCK TABLES `skl_categoria` WRITE;
/*!40000 ALTER TABLE `skl_categoria` DISABLE KEYS */;
INSERT INTO `skl_categoria` VALUES (1,'Base de Datos','Esta es la descripción de Base de Datos','2020-08-28','2020-10-29',NULL),(2,'Calidad de Codigo',NULL,'2020-08-28','2020-10-29',NULL),(3,'Desarrollo de Software',NULL,'2020-08-28',NULL,NULL),(4,'Infraestructura',NULL,'2020-08-28',NULL,NULL),(5,'ETL',NULL,'2020-08-28','2020-10-29',NULL),(6,'Experiencia de Usuario',NULL,'2020-08-28','2020-10-29',NULL),(7,'General',NULL,'2020-08-28',NULL,NULL),(8,'Ingeniería de Software',NULL,'2020-08-28',NULL,NULL),(9,'Integración',NULL,'2020-08-28',NULL,NULL),(10,'Ofimática',NULL,'2020-08-28',NULL,NULL),(11,'Plataforma',NULL,'2020-08-28',NULL,NULL),(12,'Procesos',NULL,'2020-08-28',NULL,NULL),(13,'Framework',NULL,'2020-08-28',NULL,NULL),(14,'Data Science',NULL,'2020-08-28',NULL,NULL),(15,'Programación',NULL,'2020-08-28',NULL,NULL),(16,'Programación Web',NULL,'2020-08-28',NULL,NULL),(17,'Versionamiento de Código Fuente',NULL,'2020-08-28',NULL,NULL),(18,'Visualización y Reportería',NULL,'2020-08-28',NULL,NULL),(19,'RPA',NULL,'2020-08-28',NULL,NULL),(20,'Testing',NULL,'2020-08-28',NULL,NULL),(21,'CategoriaPRUEBA','Bla blaaa blabla','2020-10-29','2020-10-29','2020-10-29'),(22,'Experiencia de Usuario','Bla bla blaaa','2020-10-29','2020-10-29','2020-10-29'),(24,'NUEVA CAT','kkkkkkkkkkkk','2020-10-29',NULL,NULL),(25,'HOLA','hola hola','2020-10-29','2020-10-29','2020-10-29'),(26,'ULTIMA PRUEBA',NULL,'2020-10-29','2020-10-29','2020-10-29');
/*!40000 ALTER TABLE `skl_categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skl_consultor`
--

DROP TABLE IF EXISTS `skl_consultor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skl_consultor` (
  `con_id` int(11) NOT NULL AUTO_INCREMENT,
  `con_nombres` varchar(400) NOT NULL,
  `con_apellidos` varchar(400) NOT NULL,
  `con_comentarios` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `lsv_id` int(11) DEFAULT NULL,
  `nvl_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`con_id`),
  UNIQUE KEY `email` (`email`),
  KEY `lsv_id` (`lsv_id`),
  KEY `skl_consultor_ibfk_2` (`nvl_id`),
  KEY `skl_consultor_ibfk_3` (`car_id`),
  CONSTRAINT `skl_consultor_ibfk_1` FOREIGN KEY (`lsv_id`) REFERENCES `skl_linea_servicio` (`lsv_id`),
  CONSTRAINT `skl_consultor_ibfk_2` FOREIGN KEY (`nvl_id`) REFERENCES `skl_nivel` (`nvl_id`),
  CONSTRAINT `skl_consultor_ibfk_3` FOREIGN KEY (`car_id`) REFERENCES `skl_cargo` (`car_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skl_consultor`
--

LOCK TABLES `skl_consultor` WRITE;
/*!40000 ALTER TABLE `skl_consultor` DISABLE KEYS */;
INSERT INTO `skl_consultor` VALUES (1,'Ricardo','Romero','Ingeniero Infromatico','ricardo.romero.cl@gmail.com',1,3,3,'2020-09-30',NULL,NULL),(2,'Julieta','Cortés',NULL,'juli.crts@gmail.com',1,1,1,'2020-10-01','2020-11-04',NULL),(3,'Juan','Pardo','Ingeniero Civil Inf','juan.pardo@gmail.com',1,2,2,'2020-10-08',NULL,NULL);
/*!40000 ALTER TABLE `skl_consultor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skl_consultor_skill`
--

DROP TABLE IF EXISTS `skl_consultor_skill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skl_consultor_skill` (
  `csk_id` int(11) NOT NULL AUTO_INCREMENT,
  `con_id` int(11) NOT NULL,
  `skl_id` int(11) NOT NULL,
  `nvl_id` int(11) DEFAULT NULL,
  `csk_comentario` text DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`csk_id`),
  KEY `con_id` (`con_id`),
  KEY `skl_id` (`skl_id`),
  KEY `nvl_id` (`nvl_id`),
  CONSTRAINT `skl_consultor_skill_ibfk_2` FOREIGN KEY (`skl_id`) REFERENCES `skl_skill` (`skl_id`),
  CONSTRAINT `skl_consultor_skill_ibfk_3` FOREIGN KEY (`nvl_id`) REFERENCES `skl_nivel` (`nvl_id`),
  CONSTRAINT `skl_consultor_skill_ibfk_4` FOREIGN KEY (`con_id`) REFERENCES `skl_consultor` (`con_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skl_consultor_skill`
--

LOCK TABLES `skl_consultor_skill` WRITE;
/*!40000 ALTER TABLE `skl_consultor_skill` DISABLE KEYS */;
INSERT INTO `skl_consultor_skill` VALUES (2,1,2,4,'esto es una prueba','2020-08-30','2020-10-26','2020-10-26'),(4,1,54,2,NULL,'2020-08-30','2020-08-30','2020-08-30'),(5,1,11,3,'prueba Ricardo','2020-08-30','2020-08-31',NULL),(6,1,9,4,'asljaldkjd','2020-08-31','2020-10-16',NULL),(7,2,5,3,'prueba','2020-09-02','2020-09-02',NULL),(8,1,55,4,NULL,'2020-09-07','2020-09-07',NULL),(9,1,19,1,NULL,'2020-10-01','2020-10-01',NULL),(10,1,123,3,NULL,'2020-10-01','2020-10-01',NULL),(11,1,3,4,NULL,'2020-10-01','2020-10-01',NULL),(12,1,4,4,NULL,'2020-10-01','2020-10-01',NULL),(13,1,7,2,NULL,'2020-10-01','2020-10-19',NULL),(14,2,11,2,'blabla','2020-10-07',NULL,NULL),(15,3,1,2,'bliblibli','2020-10-08',NULL,NULL),(16,3,11,4,'plaplapla','2020-10-08',NULL,NULL),(17,2,14,3,'hbfjhvfd','2020-10-09',NULL,NULL),(18,1,131,4,NULL,'2020-10-16','2020-10-16',NULL),(19,1,28,2,NULL,'2020-10-16','2020-10-16',NULL),(20,1,29,2,NULL,'2020-10-16','2020-10-16',NULL),(21,1,70,4,NULL,'2020-10-16','2020-10-16',NULL),(22,1,18,1,NULL,'2020-10-16','2020-10-16',NULL),(23,1,22,2,NULL,'2020-10-16','2020-10-16',NULL),(24,1,23,4,NULL,'2020-10-16','2020-10-16',NULL),(35,1,13,1,NULL,'2020-10-26','2020-10-26',NULL),(37,1,1,4,NULL,'2020-10-26','2020-10-26',NULL),(38,2,4,1,NULL,'2020-10-26',NULL,NULL),(39,2,1,2,NULL,'2020-10-26',NULL,NULL);
/*!40000 ALTER TABLE `skl_consultor_skill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skl_curso`
--

DROP TABLE IF EXISTS `skl_curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skl_curso` (
  `cur_id` int(11) NOT NULL AUTO_INCREMENT,
  `cur_nombre` varchar(200) NOT NULL,
  `cur_descripcion` varchar(300) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`cur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skl_curso`
--

LOCK TABLES `skl_curso` WRITE;
/*!40000 ALTER TABLE `skl_curso` DISABLE KEYS */;
/*!40000 ALTER TABLE `skl_curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skl_curso_consultor`
--

DROP TABLE IF EXISTS `skl_curso_consultor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skl_curso_consultor` (
  `cuc_id` int(11) NOT NULL AUTO_INCREMENT,
  `cur_id` int(11) NOT NULL,
  `con_id` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`cuc_id`),
  KEY `skl_curso_consultor_ibfk_1` (`cur_id`),
  KEY `skl_curso_consultor_ibfk_2` (`con_id`),
  CONSTRAINT `skl_curso_consultor_ibfk_1` FOREIGN KEY (`cur_id`) REFERENCES `skl_curso` (`cur_id`),
  CONSTRAINT `skl_curso_consultor_ibfk_2` FOREIGN KEY (`con_id`) REFERENCES `skl_consultor` (`con_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skl_curso_consultor`
--

LOCK TABLES `skl_curso_consultor` WRITE;
/*!40000 ALTER TABLE `skl_curso_consultor` DISABLE KEYS */;
/*!40000 ALTER TABLE `skl_curso_consultor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skl_curso_skill`
--

DROP TABLE IF EXISTS `skl_curso_skill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skl_curso_skill` (
  `crs_id` int(11) NOT NULL AUTO_INCREMENT,
  `cur_id` int(11) NOT NULL,
  `skl_id` int(11) NOT NULL,
  `nvl_id` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`crs_id`),
  KEY `skl_curso_skill_ibfk_1` (`cur_id`),
  KEY `skl_curso_skill_ibfk_2` (`skl_id`),
  KEY `skl_curso_skill_ibfk_3` (`nvl_id`),
  CONSTRAINT `skl_curso_skill_ibfk_1` FOREIGN KEY (`cur_id`) REFERENCES `skl_curso` (`cur_id`),
  CONSTRAINT `skl_curso_skill_ibfk_2` FOREIGN KEY (`skl_id`) REFERENCES `skl_skill` (`skl_id`),
  CONSTRAINT `skl_curso_skill_ibfk_3` FOREIGN KEY (`nvl_id`) REFERENCES `skl_nivel` (`nvl_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skl_curso_skill`
--

LOCK TABLES `skl_curso_skill` WRITE;
/*!40000 ALTER TABLE `skl_curso_skill` DISABLE KEYS */;
/*!40000 ALTER TABLE `skl_curso_skill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skl_linea_servicio`
--

DROP TABLE IF EXISTS `skl_linea_servicio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skl_linea_servicio` (
  `lsv_id` int(11) NOT NULL AUTO_INCREMENT,
  `lsv_nombre` varchar(300) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`lsv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skl_linea_servicio`
--

LOCK TABLES `skl_linea_servicio` WRITE;
/*!40000 ALTER TABLE `skl_linea_servicio` DISABLE KEYS */;
INSERT INTO `skl_linea_servicio` VALUES (1,'Desarrollo','2020-09-30',NULL,NULL),(2,'Consultoria','2020-09-30',NULL,NULL),(3,'Procesos','2020-09-30',NULL,NULL);
/*!40000 ALTER TABLE `skl_linea_servicio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skl_nivel`
--

DROP TABLE IF EXISTS `skl_nivel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skl_nivel` (
  `nvl_id` int(11) NOT NULL AUTO_INCREMENT,
  `nvl_nombre` varchar(200) NOT NULL,
  `nvl_descripcion` text DEFAULT NULL,
  `nvl_valor` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`nvl_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skl_nivel`
--

LOCK TABLES `skl_nivel` WRITE;
/*!40000 ALTER TABLE `skl_nivel` DISABLE KEYS */;
INSERT INTO `skl_nivel` VALUES (1,'BASICO','No es una habilidad requerida, aunque debería ser capaz de definir y administrar la habilidad si es necesario.',25,'2020-09-30',NULL,NULL),(2,'INTERMEDIO','Comprende los antecedentes, los problemas y las implicaciones lo suficiente como para poder comprender cómo continuar y asesorar al cliente en consecuencia.',50,'2020-09-30',NULL,NULL),(3,'AVANZADO','Conocimiento detallado del área temática y capaz de proporcionar asesoramiento y orientación profesional. Capacidad para integrar la capacidad en el diseño de la arquitectura.',75,'2020-09-30',NULL,NULL),(4,'EXPERTO','Amplia y sustancial experiencia práctica y conocimiento aplicado sobre el tema.',100,'2020-09-30',NULL,NULL);
/*!40000 ALTER TABLE `skl_nivel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skl_perfil`
--

DROP TABLE IF EXISTS `skl_perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skl_perfil` (
  `per_id` int(11) NOT NULL AUTO_INCREMENT,
  `per_nombre` varchar(300) NOT NULL,
  `per_descripcion` text DEFAULT NULL,
  `car_id` int(11) NOT NULL,
  `lsv_id` int(11) NOT NULL,
  `nvl_id` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`per_id`),
  KEY `skl_perfil_ibfk_2` (`car_id`),
  KEY `skl_perfil_ibfk_3` (`lsv_id`),
  KEY `skl_perfil_ibfk_4` (`nvl_id`),
  CONSTRAINT `skl_perfil_ibfk_2` FOREIGN KEY (`car_id`) REFERENCES `skl_cargo` (`car_id`),
  CONSTRAINT `skl_perfil_ibfk_3` FOREIGN KEY (`lsv_id`) REFERENCES `skl_linea_servicio` (`lsv_id`),
  CONSTRAINT `skl_perfil_ibfk_4` FOREIGN KEY (`nvl_id`) REFERENCES `skl_nivel` (`nvl_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skl_perfil`
--

LOCK TABLES `skl_perfil` WRITE;
/*!40000 ALTER TABLE `skl_perfil` DISABLE KEYS */;
/*!40000 ALTER TABLE `skl_perfil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skl_perfil_detalle`
--

DROP TABLE IF EXISTS `skl_perfil_detalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skl_perfil_detalle` (
  `pde_id` int(11) NOT NULL AUTO_INCREMENT,
  `per_id` int(11) NOT NULL,
  `skl_id` int(11) NOT NULL,
  `nvl_id` int(11) NOT NULL,
  `psk_comentario` text DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`pde_id`),
  KEY `per_id` (`per_id`),
  KEY `skl_id` (`skl_id`),
  KEY `nvl_id` (`nvl_id`),
  CONSTRAINT `skl_perfil_detalle_ibfk_1` FOREIGN KEY (`per_id`) REFERENCES `skl_perfil` (`per_id`),
  CONSTRAINT `skl_perfil_detalle_ibfk_2` FOREIGN KEY (`skl_id`) REFERENCES `skl_skill` (`skl_id`),
  CONSTRAINT `skl_perfil_detalle_ibfk_3` FOREIGN KEY (`nvl_id`) REFERENCES `skl_nivel` (`nvl_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skl_perfil_detalle`
--

LOCK TABLES `skl_perfil_detalle` WRITE;
/*!40000 ALTER TABLE `skl_perfil_detalle` DISABLE KEYS */;
/*!40000 ALTER TABLE `skl_perfil_detalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skl_skill`
--

DROP TABLE IF EXISTS `skl_skill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skl_skill` (
  `skl_id` int(11) NOT NULL AUTO_INCREMENT,
  `skl_nombre` varchar(300) NOT NULL,
  `skl_descripcion` text DEFAULT NULL,
  `scat_id` int(11) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`skl_id`),
  KEY `scat_id` (`scat_id`),
  CONSTRAINT `skl_skill_ibfk_1` FOREIGN KEY (`scat_id`) REFERENCES `skl_sub_categoria` (`scat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skl_skill`
--

LOCK TABLES `skl_skill` WRITE;
/*!40000 ALTER TABLE `skl_skill` DISABLE KEYS */;
INSERT INTO `skl_skill` VALUES (1,'Redis','',1,'2020-08-28',NULL,NULL),(2,'Cassandra','',2,'2020-08-28',NULL,NULL),(3,'MongoDB','',2,'2020-08-28',NULL,NULL),(4,'MariaDB','',3,'2020-08-28',NULL,NULL),(5,'MySQL','',3,'2020-08-28',NULL,NULL),(6,'Oracle','',3,'2020-08-28',NULL,NULL),(7,'DB2','',3,'2020-08-28',NULL,NULL),(8,'PostgreSQL','',3,'2020-08-28',NULL,NULL),(9,'SQL Server','',3,'2020-08-28',NULL,NULL),(10,'SQL','',4,'2020-08-28',NULL,NULL),(11,'T-SQL (SQL Server)','',5,'2020-08-28',NULL,NULL),(12,'PL-SQL (Oracle)','',5,'2020-08-28',NULL,NULL),(13,'Check Style','',6,'2020-08-28',NULL,NULL),(14,'OWASP','',6,'2020-08-28',NULL,NULL),(15,'PMD','',6,'2020-08-28',NULL,NULL),(16,'SonarLint','',6,'2020-08-28',NULL,NULL),(17,'SonarQube','',6,'2020-08-28',NULL,NULL),(18,'Jenkins','',7,'2020-08-28',NULL,NULL),(19,'Docker','',8,'2020-08-28',NULL,NULL),(20,'Nexus','',9,'2020-08-28',NULL,NULL),(21,'Terraform','',10,'2020-08-28',NULL,NULL),(22,'Bamboo','',7,'2020-08-28',NULL,NULL),(23,'GitLab CICD','',7,'2020-08-28',NULL,NULL),(24,'Jfrog Artifactory','',9,'2020-08-28',NULL,NULL),(25,'Apache NiFi','',11,'2020-08-28',NULL,NULL),(26,'Pentaho','',11,'2020-08-28',NULL,NULL),(27,'PowerCenter','',11,'2020-08-28',NULL,NULL),(28,'Desarrollo Responsivo','',12,'2020-08-28',NULL,NULL),(29,'Diseño Interfaz Usuario','',12,'2020-08-28',NULL,NULL),(30,'Experiencia Usuario','',12,'2020-08-28',NULL,NULL),(31,'Inglés Escrito','Nivel de Ingles Escrito',13,'2020-08-28',NULL,NULL),(32,'Inglés Oral','Nivel de Ingles Oral',13,'2020-08-28',NULL,NULL),(33,' Gestión de proyectos','',14,'2020-08-28',NULL,NULL),(34,'Gestión de programas','',14,'2020-08-28',NULL,NULL),(35,'Gestión del cambio','',14,'2020-08-28',NULL,NULL),(36,'Gestión del valor','',14,'2020-08-28',NULL,NULL),(37,'Gestionar el cambio comercial','',14,'2020-08-28',NULL,NULL),(38,'Amazon Web Services','Abrir en los servicios detallados',15,'2020-08-28',NULL,NULL),(39,'Azure','Abrir en los servicios detallados',15,'2020-08-28',NULL,NULL),(40,'Google Cloud','Abrir en los servicios detallados',15,'2020-08-28',NULL,NULL),(41,'IBM Cloud','Abrir en los servicios detallados',15,'2020-08-28',NULL,NULL),(42,'Oracle Cloud','Abrir en los servicios detallados',15,'2020-08-28',NULL,NULL),(43,'Diseño de Base de Datos','',16,'2020-08-28',NULL,NULL),(44,'Optimización de Querys','',16,'2020-08-28',NULL,NULL),(45,'Patrones de Arquitectura','',17,'2020-08-28',NULL,NULL),(46,'Patrones de Diseño','',18,'2020-08-28',NULL,NULL),(47,'IIB - IBM Integration Bus','',19,'2020-08-28',NULL,NULL),(48,'OSB - Oracle Service Bus','',19,'2020-08-28',NULL,NULL),(49,'JMS','',20,'2020-08-28',NULL,NULL),(50,'Kafka','',21,'2020-08-28',NULL,NULL),(51,'MQ','',20,'2020-08-28',NULL,NULL),(52,'Access','',11,'2020-08-28',NULL,NULL),(53,'Excel','',11,'2020-08-28',NULL,NULL),(54,'Power Point','',11,'2020-08-28',NULL,NULL),(55,'Word','',11,'2020-08-28',NULL,NULL),(56,'Android (Java)','',23,'2020-08-28',NULL,NULL),(57,'Apple','Plataforma, sistema operativo Apple bla bla',23,'2020-08-28','2020-09-21',NULL),(58,'Linux','',23,'2020-08-28',NULL,NULL),(59,'GlassFish','',24,'2020-08-28',NULL,NULL),(60,'NodeJS (Javascript)','',24,'2020-08-28',NULL,NULL),(61,'WAS','',24,'2020-08-28',NULL,NULL),(62,'Weblogic','',24,'2020-08-28',NULL,NULL),(63,'WildFly','',24,'2020-08-28',NULL,NULL),(64,'Windows','',23,'2020-08-28',NULL,NULL),(65,'Aris','',25,'2020-08-28',NULL,NULL),(66,'Bizagi','',25,'2020-08-28',NULL,NULL),(67,'Visio','',25,'2020-08-28',NULL,NULL),(68,'LEAN','',26,'2020-08-28',NULL,NULL),(69,'Six Sigma','',26,'2020-08-28',NULL,NULL),(70,'.NET / .NET Core (Librerías)',NULL,27,'2020-08-28','2020-11-03',NULL),(71,'Angular','',28,'2020-08-28',NULL,NULL),(72,'Ionic','',29,'2020-08-28',NULL,NULL),(73,'Rails (Ruby)','',27,'2020-08-28',NULL,NULL),(74,'React','',28,'2020-08-28',NULL,NULL),(75,'React Native','',29,'2020-08-28',NULL,NULL),(76,'Springboot','',27,'2020-08-28',NULL,NULL),(77,'MatLab','',5,'2020-08-28',NULL,NULL),(78,'R','',5,'2020-08-28',NULL,NULL),(79,'C#','',5,'2020-08-28',NULL,NULL),(80,'C/C++','',5,'2020-08-28',NULL,NULL),(81,'Flutter','',29,'2020-08-28',NULL,NULL),(82,'Go','',5,'2020-08-28',NULL,NULL),(83,'CSS','',32,'2020-08-28',NULL,NULL),(84,'HTML','',33,'2020-08-28',NULL,NULL),(85,'XML','',33,'2020-08-28',NULL,NULL),(86,'JavaScript','',5,'2020-08-28',NULL,NULL),(87,'Kotlin','',5,'2020-08-28',NULL,NULL),(88,'Objetive-C','',5,'2020-08-28',NULL,NULL),(89,'PHP','',5,'2020-08-28',NULL,NULL),(90,'Python','',5,'2020-08-28',NULL,NULL),(91,'Ruby','',5,'2020-08-28',NULL,NULL),(92,'Swift ','',5,'2020-08-28',NULL,NULL),(93,'Java','',5,'2020-08-28',NULL,NULL),(94,'Git','',11,'2020-08-28',NULL,NULL),(95,'Subversion','',11,'2020-08-28',NULL,NULL),(96,'MicroStrategy','',11,'2020-08-28',NULL,NULL),(97,'PowerBI','',11,'2020-08-28',NULL,NULL),(98,'QlikView','',11,'2020-08-28',NULL,NULL),(99,'Tableau','',11,'2020-08-28',NULL,NULL),(100,'Automation Anywhere','',37,'2020-08-28',NULL,NULL),(101,'UiPath','',37,'2020-08-28',NULL,NULL),(102,'Ambientación','',38,'2020-08-28',NULL,NULL),(103,'Certificación','',38,'2020-08-28',NULL,NULL),(104,'Diseño','',38,'2020-08-28',NULL,NULL),(105,'Integración','',38,'2020-08-28',NULL,NULL),(106,'Programación','',38,'2020-08-28',NULL,NULL),(107,'Cucumber','',39,'2020-08-28',NULL,NULL),(108,'Nightwatch','',39,'2020-08-28',NULL,NULL),(109,'Selenuim','',39,'2020-08-28',NULL,NULL),(110,'Insomnia','',40,'2020-08-28',NULL,NULL),(111,'Postman','',40,'2020-08-28',NULL,NULL),(112,'SoapUI','',40,'2020-08-28',NULL,NULL),(113,'Mantis','',41,'2020-08-28',NULL,NULL),(114,'Testlink','',41,'2020-08-28',NULL,NULL),(115,'Jmeter','',42,'2020-08-28',NULL,NULL),(116,'AlgoAsi',NULL,11,'2020-09-16','2020-09-16',NULL),(117,'Apple','bla bla bla bla',23,'2020-09-21','2020-09-21','2020-09-21'),(118,'cualquier cosa',NULL,35,'2020-09-24','2020-09-24',NULL),(120,'Walghj','Descripcion bla bla bla',11,'2020-09-28','2020-09-28',NULL),(121,'BlueSQL','Descripcion del nuevo skill',6,'2020-09-28','2020-09-28',NULL),(122,'NuevoSkill','lala,ldcesjjakajsaoao',6,'2020-09-28','2020-09-28',NULL),(123,'Fluflu','jnjjbu',9,'2020-09-29','2020-09-29',NULL),(130,'ppppppp',NULL,6,'2020-10-13','2020-10-13',NULL),(131,'prueba de nuevo Skill',NULL,2,'2020-10-13','2020-10-13',NULL),(132,'Ejemplo',NULL,7,'2020-10-13','2020-10-13',NULL),(133,'Nuevo Skill','Nuevo skill',23,'2020-10-13','2020-10-13',NULL),(134,'Frances','Idioma francés',13,'2020-10-16','2020-10-16',NULL);
/*!40000 ALTER TABLE `skl_skill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skl_sub_categoria`
--

DROP TABLE IF EXISTS `skl_sub_categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skl_sub_categoria` (
  `scat_id` int(11) NOT NULL AUTO_INCREMENT,
  `scat_nombre` varchar(300) NOT NULL,
  `scat_descripcion` text DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`scat_id`),
  KEY `cat_id` (`cat_id`),
  CONSTRAINT `skl_sub_categoria_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `skl_categoria` (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skl_sub_categoria`
--

LOCK TABLES `skl_sub_categoria` WRITE;
/*!40000 ALTER TABLE `skl_sub_categoria` DISABLE KEYS */;
INSERT INTO `skl_sub_categoria` VALUES (1,'Motor de datos en memoria',NULL,1,'2020-08-28',NULL,NULL),(2,'Motor de datos NoSQL',NULL,1,'2020-08-28',NULL,NULL),(3,'Motor de datos relacional',NULL,1,'2020-08-28',NULL,NULL),(4,'Lenguaje de consulta',NULL,1,'2020-08-28',NULL,NULL),(5,'Lenguaje de programación',NULL,1,'2020-08-28',NULL,NULL),(6,'Revisión de Código',NULL,2,'2020-08-28',NULL,NULL),(7,'Integración Continua',NULL,3,'2020-08-28',NULL,NULL),(8,'Contenedores',NULL,4,'2020-08-28',NULL,NULL),(9,'Gestión de Repositorio',NULL,3,'2020-08-28',NULL,NULL),(10,'DevOps',NULL,4,'2020-08-28',NULL,NULL),(11,'Herramienta',NULL,5,'2020-08-28',NULL,NULL),(12,'Desarrollo Web',NULL,6,'2020-08-28',NULL,NULL),(13,'Idioma',NULL,7,'2020-08-28',NULL,NULL),(14,'Gestión',NULL,7,'2020-08-28',NULL,NULL),(15,'Servicios Cloud',NULL,4,'2020-08-28',NULL,NULL),(16,'Modelamiento de Datos',NULL,8,'2020-08-28',NULL,NULL),(17,'Patrones de Arquitectura',NULL,8,'2020-08-28',NULL,NULL),(18,'Patrones de Diseño',NULL,8,'2020-08-28',NULL,NULL),(19,'Bus de Integración',NULL,9,'2020-08-28',NULL,NULL),(20,'Colas de Mensajes',NULL,9,'2020-08-28',NULL,NULL),(21,'Streaming de Mensajes',NULL,9,'2020-08-28',NULL,NULL),(22,'Herramienta',NULL,10,'2020-08-28',NULL,NULL),(23,'Sistema Operativo',NULL,11,'2020-08-28',NULL,NULL),(24,'Servidor de Aplicaciones',NULL,11,'2020-08-28',NULL,NULL),(25,'Herramienta de modelamiento',NULL,12,'2020-08-28',NULL,NULL),(26,'Framework',NULL,12,'2020-08-28',NULL,NULL),(27,'Backend',NULL,13,'2020-08-28',NULL,NULL),(28,'Frontend',NULL,13,'2020-08-28',NULL,NULL),(29,'Móvil',NULL,13,'2020-08-28',NULL,NULL),(30,'Lenguaje de programación',NULL,14,'2020-08-28',NULL,NULL),(31,'Lenguaje de programación',NULL,15,'2020-08-28',NULL,NULL),(32,'Lenguaje de estilos',NULL,16,'2020-08-28',NULL,NULL),(33,'Lenguaje de estructura',NULL,16,'2020-08-28',NULL,NULL),(34,'Lenguaje de estructura',NULL,15,'2020-08-28',NULL,NULL),(35,'Herramienta',NULL,17,'2020-08-28',NULL,NULL),(36,'Herramienta',NULL,18,'2020-08-28',NULL,NULL),(37,'Plataforma/Herramienta',NULL,19,'2020-08-28',NULL,NULL),(38,'Proyecto',NULL,19,'2020-08-28',NULL,NULL),(39,'Automatización de Flujos',NULL,20,'2020-08-28',NULL,NULL),(40,'Cliente HTTP',NULL,20,'2020-08-28',NULL,NULL),(41,'Gestión de Casos de Prueba',NULL,20,'2020-08-28',NULL,NULL),(42,'Pruebas de Estrés',NULL,20,'2020-08-28',NULL,NULL),(49,'NuevaSubCategoriaaaaaaa','kjyhgfdskijuytgr',18,'2020-10-28',NULL,NULL),(50,'NuevaSubCategoria','ñl,kmujnyhbgvfrcd',24,'2020-10-29',NULL,NULL),(52,'PRUEBA','bla bla prueba',15,'2020-10-29','2020-10-29',NULL);
/*!40000 ALTER TABLE `skl_sub_categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(10000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_provider_id_unique` (`provider_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Ricardo Romero','ricardo.romero.cl@gmail.com','https://i.musicaimg.com/letras/resmax/ricardo-arjona.jpg',NULL,'$2y$10$UB36rDsVFTdwausq4pSdrOi09iJaN.Zt2XN.mpTDRwtq2nicZOqIS',NULL,NULL,NULL,'2020-08-01 04:00:00','2020-09-17 01:08:50',NULL),(2,'Julieta Cortes','juli.crts@gmail.com','https://estaticos.sport.es/resources/jpg/3/7/supernova-mas-grande-historia-1590657809173.jpg',NULL,'$2y$10$UB36rDsVFTdwausq4pSdrOi09iJaN.Zt2XN.mpTDRwtq2nicZOqIS',NULL,NULL,NULL,'2020-09-15 04:00:00','2020-09-17 01:28:45',NULL),(3,'Juan Pardo','juan.pardo@gmail.com','https://estaticos.sport.es/resources/jpg/3/7/supernova-mas-grande-historia-1590657809173.jpg',NULL,'$2y$10$UB36rDsVFTdwausq4pSdrOi09iJaN.Zt2XN.mpTDRwtq2nicZOqIS',NULL,NULL,NULL,'2020-10-10 04:00:00',NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'db_skills'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-11  9:53:43
