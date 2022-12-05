-- MariaDB dump 10.19  Distrib 10.9.4-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: migym
-- ------------------------------------------------------
-- Server version	10.9.4-MariaDB

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `a_paterno` varchar(50) NOT NULL,
  `a_materno` varchar(50) NOT NULL,
  `telefono` varchar(12) DEFAULT NULL,
  `correo` varchar(50) NOT NULL,
  `contrase` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES
(1234,'Nataly','Garcia','Castro','5544332211','jen.123@gmail.com','01020304'),
(5678,'Alfredo','Calamar','Morales','5598893328','alfro@gmail.com','foor4543');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_deporte`
--

DROP TABLE IF EXISTS `admin_deporte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_deporte` (
  `id_admin` int(10) NOT NULL,
  `id_deporte` int(10) NOT NULL,
  KEY `id_admin` (`id_admin`),
  KEY `id_deporte` (`id_deporte`),
  CONSTRAINT `admin_deporte_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`),
  CONSTRAINT `admin_deporte_ibfk_2` FOREIGN KEY (`id_deporte`) REFERENCES `deporte` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_deporte`
--

LOCK TABLES `admin_deporte` WRITE;
/*!40000 ALTER TABLE `admin_deporte` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_deporte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alumno`
--

DROP TABLE IF EXISTS `alumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumno` (
  `cuenta` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `a_paterno` varchar(50) NOT NULL,
  `a_materno` varchar(50) NOT NULL,
  `telefono` varchar(12) DEFAULT NULL,
  `correo` varchar(50) NOT NULL,
  `contrase` varchar(50) NOT NULL,
  PRIMARY KEY (`cuenta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumno`
--

LOCK TABLES `alumno` WRITE;
/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
INSERT INTO `alumno` VALUES
(315794959,'Juan','Rodriguez','Alvarado','5599887766','juan.123@gmail.com','98979695'),
(415685848,'Brayan','Mendez','Juarez','5521232426','bray.987@gmail.com','89878685'),
(430023866,'Beto','Benitez','Bahena','5500938287','betuki@gmail.com','contrase12345'),
(515876757,'Marco','Molina','Gutierrez','5531323435','marco.987@gmail.com','79787675'),
(615789456,'Alejandro','Gomez','Garcia','5541424345','ale.1711@gmail.com','69686765');
/*!40000 ALTER TABLE `alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alumno_deporte`
--

DROP TABLE IF EXISTS `alumno_deporte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumno_deporte` (
  `cuenta_alumno` int(10) NOT NULL,
  `id_deporte` int(10) NOT NULL,
  KEY `cuenta_alumno` (`cuenta_alumno`),
  KEY `id_deporte` (`id_deporte`),
  CONSTRAINT `alumno_deporte_ibfk_1` FOREIGN KEY (`cuenta_alumno`) REFERENCES `alumno` (`cuenta`),
  CONSTRAINT `alumno_deporte_ibfk_2` FOREIGN KEY (`id_deporte`) REFERENCES `deporte` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumno_deporte`
--

LOCK TABLES `alumno_deporte` WRITE;
/*!40000 ALTER TABLE `alumno_deporte` DISABLE KEYS */;
/*!40000 ALTER TABLE `alumno_deporte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deporte`
--

DROP TABLE IF EXISTS `deporte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `deporte` (
  `id` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `ubicacion` varchar(50) DEFAULT 'Gimnasio',
  `id_profesor` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_profesor` (`id_profesor`),
  CONSTRAINT `deporte_ibfk_1` FOREIGN KEY (`id_profesor`) REFERENCES `profesor` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deporte`
--

LOCK TABLES `deporte` WRITE;
/*!40000 ALTER TABLE `deporte` DISABLE KEYS */;
INSERT INTO `deporte` VALUES
(1,'Full Contact','Combate','Gimnasio',518),
(2,'Karate y Kendo','Combate','Gimnasio',754),
(3,'Kick-Boxing','Combate','Gimnasio',518),
(4,'Lima Lama','Combate','Gimnasio',518),
(5,'Tae Kwon Do','Combate','Gimnasio',427),
(6,'Tae Kwon Do','Combate','Gimnasio',464),
(7,'Baloncesto','Conjunto con pelota','Cancha de Basquetbol',280),
(8,'Baloncesto','Conjunto con pelota','Cancha de Basquetbol',962),
(9,'Béisbol y Softbol','Conjunto con pelota','Campo de Béisbol',200),
(10,'Fútbol Americano Intermedia','Conjunto con pelota','Gimnasio/Campo',825),
(11,'Flag Tocho Bandera','Conjunto con pelota','Campo',786),
(12,'Futbol Americano Femenil','Conjunto con pelota','Gimnasio/Campo',825),
(13,'Fútbol Asociación Varonil','Conjunto con pelota','Campo de Fútbol',876),
(14,'Fútbol Asociación Femenil','Conjunto con pelota','Campo de Fútbol',401),
(15,'Voleibol','Conjunto con pelota','Cancha de Voleibol',969),
(16,'Ajedrez','Individuales','Club de Ajedrez',43),
(17,'Atletismo','Individuales','Pista',427),
(18,'Atletismo','Individuales','Pista',271),
(19,'Tenis','Individuales','Cancha de Tenis',742),
(20,'Bailes Latinos','Fitness','Gimnasio',113),
(21,'Crossfit','Fitness','Gimnasio',639),
(22,'Danza Árabe','Fitness','Gimnasio',113),
(23,'Físico-Constructivismo','Fitness','Gimnasio',580),
(24,'Físico-Constructivismo','Fitness','Gimnasio',870),
(25,'Zumba','Fitness','Gimnasio',113),
(26,'Zumba String','Fitness','Gimnasio',864),
(27,'Yoga','Integral','Gimnasio',121);
/*!40000 ALTER TABLE `deporte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documento`
--

DROP TABLE IF EXISTS `documento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documento` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cuenta_alumno` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `fecha` date DEFAULT NULL,
  `valido` tinyint(1) DEFAULT NULL,
  `revisado` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documento`
--

LOCK TABLES `documento` WRITE;
/*!40000 ALTER TABLE `documento` DISABLE KEYS */;
INSERT INTO `documento` VALUES
(1,415685848,'Credencial','PNG','2022-11-02',0,0),
(2,515876757,'Certificado médico','PDF','2022-10-07',0,0),
(3,415685848,'Certificado médico','PDF','2022-09-07',1,1),
(4,615789456,'Tira de materias','PDF','2022-09-22',0,0);
/*!40000 ALTER TABLE `documento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `horario`
--

DROP TABLE IF EXISTS `horario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `horario` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_deporte` int(10) NOT NULL,
  `dia` varchar(20) NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_deporte` (`id_deporte`),
  CONSTRAINT `horario_ibfk_1` FOREIGN KEY (`id_deporte`) REFERENCES `deporte` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `horario`
--

LOCK TABLES `horario` WRITE;
/*!40000 ALTER TABLE `horario` DISABLE KEYS */;
INSERT INTO `horario` VALUES
(9,1,'Lunes','11:00:00','12:00:00'),
(10,1,'Miércoles','11:00:00','12:00:00'),
(11,1,'Viernes','11:00:00','12:00:00'),
(12,2,'Martes','09:00:00','14:30:00'),
(13,2,'Jueves','09:00:00','14:30:00'),
(14,2,'Viernes','09:00:00','16:00:00'),
(15,3,'Lunes','08:00:00','10:00:00'),
(16,3,'Miércoles','08:00:00','10:00:00'),
(17,3,'Viernes','08:00:00','10:00:00'),
(18,4,'Lunes','10:00:00','11:00:00'),
(19,4,'Miércoles','10:00:00','11:00:00'),
(31,4,'Viernes','10:00:00','11:00:00'),
(32,5,'Lunes','12:00:00','17:00:00'),
(33,5,'Miércoles','12:00:00','17:00:00'),
(34,5,'Viernes','12:00:00','17:00:00'),
(35,6,'Lunes','13:00:00','17:00:00'),
(36,6,'Martes','13:00:00','17:00:00'),
(37,6,'Miércoles','13:00:00','17:00:00'),
(38,6,'Jueves','13:00:00','17:00:00'),
(39,7,'Martes','14:00:00','16:00:00'),
(40,7,'Miércoles','14:00:00','16:00:00'),
(41,7,'Jueves','14:00:00','16:00:00'),
(42,8,'Lunes','13:00:00','16:00:00'),
(43,8,'Miércoles','13:00:00','16:00:00'),
(44,8,'Viernes','13:00:00','16:00:00'),
(45,9,'Lunes','14:00:00','16:00:00'),
(46,9,'Martes','14:00:00','16:00:00'),
(47,9,'Miércoles','14:00:00','16:00:00'),
(48,9,'Jueves','14:00:00','16:00:00'),
(49,9,'Viernes','14:00:00','16:00:00'),
(50,10,'Lunes','14:00:00','16:00:00'),
(51,10,'Martes','14:00:00','16:00:00'),
(52,10,'Miércoles','14:00:00','16:00:00'),
(53,10,'Jueves','14:00:00','16:00:00'),
(54,11,'Lunes','14:00:00','16:00:00'),
(55,11,'Martes','14:00:00','16:00:00'),
(56,11,'Miércoles','14:00:00','16:00:00'),
(57,11,'Jueves','14:00:00','16:00:00'),
(58,11,'Viernes','14:00:00','16:00:00'),
(59,12,'Lunes','19:00:00','21:00:00'),
(60,12,'Martes','19:00:00','21:00:00'),
(61,12,'Miércoles','19:00:00','21:00:00'),
(62,12,'Jueves','19:00:00','21:00:00'),
(63,13,'Martes','13:00:00','16:00:00'),
(64,13,'Miércoles','13:00:00','16:00:00'),
(65,13,'Jueves','13:00:00','16:00:00'),
(66,13,'Viernes','13:00:00','16:00:00'),
(67,13,'Lunes','13:00:00','16:00:00'),
(68,14,'Lunes','12:00:00','16:00:00'),
(69,14,'Miércoles','12:00:00','16:00:00'),
(70,14,'Viernes','12:00:00','16:00:00'),
(71,15,'Lunes','13:00:00','17:00:00'),
(72,15,'Miércoles','13:00:00','17:00:00'),
(73,15,'Viernes','13:00:00','17:00:00'),
(74,16,'Martes','12:00:00','17:00:00'),
(75,16,'Jueves','12:00:00','17:00:00'),
(76,17,'Lunes','09:00:00','16:00:00'),
(77,17,'Martes','09:00:00','16:00:00'),
(78,17,'Miércoles','09:00:00','16:00:00'),
(79,17,'Jueves','09:00:00','16:00:00'),
(80,17,'Viernes','09:00:00','16:00:00'),
(81,18,'Lunes','09:00:00','13:00:00'),
(82,18,'Miércoles','09:00:00','13:00:00'),
(83,18,'Viernes','09:00:00','13:00:00'),
(84,19,'Lunes','12:00:00','14:00:00'),
(85,19,'Martes','13:00:00','15:00:00'),
(86,19,'Miércoles','12:00:00','14:00:00'),
(87,19,'Jueves','13:00:00','15:00:00'),
(88,19,'Viernes','12:00:00','14:00:00'),
(89,20,'Martes','14:00:00','16:00:00'),
(90,20,'Jueves','14:00:00','16:00:00'),
(91,21,'Lunes','13:00:00','17:00:00'),
(92,21,'Martes','13:00:00','17:00:00'),
(93,21,'Miércoles','13:00:00','17:00:00'),
(94,21,'Jueves','13:00:00','17:00:00'),
(95,21,'Viernes','13:00:00','17:00:00'),
(96,23,'Lunes','12:00:00','14:00:00'),
(97,23,'Martes','12:00:00','14:00:00'),
(98,23,'Miércoles','12:00:00','14:00:00'),
(99,23,'Jueves','12:00:00','14:00:00'),
(100,23,'Viernes','12:00:00','14:00:00'),
(101,24,'Lunes','14:00:00','16:00:00'),
(102,24,'Martes','14:00:00','16:00:00'),
(103,24,'Miércoles','14:00:00','16:00:00'),
(104,24,'Jueves','14:00:00','16:00:00'),
(105,24,'Viernes','14:00:00','16:00:00'),
(106,25,'Martes','11:00:00','12:00:00'),
(107,25,'Jueves','11:00:00','12:00:00'),
(108,26,'Lunes','13:00:00','15:00:00'),
(109,26,'Miércoles','13:00:00','15:00:00'),
(110,27,'Martes','08:00:00','10:00:00'),
(111,27,'Jueves','08:00:00','10:00:00');
/*!40000 ALTER TABLE `horario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profesor`
--

DROP TABLE IF EXISTS `profesor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profesor` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `a_paterno` varchar(50) NOT NULL,
  `a_materno` varchar(50) NOT NULL,
  `telefono` varchar(12) DEFAULT NULL,
  `correo` varchar(50) NOT NULL,
  `contrase` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profesor`
--

LOCK TABLES `profesor` WRITE;
/*!40000 ALTER TABLE `profesor` DISABLE KEYS */;
INSERT INTO `profesor` VALUES
(43,'Victor','Hugo','Olmos','56','Vic_H@yahoo.com','vp9qsw^pDUJ:!,$'),
(113,'Jeymy Nancy','Cazares','Arellano','56','Jey_C@hotmail.com','CXfQO.$G3dT#56_'),
(121,'Jimena','Patiño','Martínez','56','Jim_P@unam.com','yLy?kd*MtSOVJ|6'),
(200,'Ricardo','López','Méndez','55','Ric_L@gmail.com','2Jpg|N@.ynaDpYP'),
(271,'Nara','Medina','Tello','55','Nar_M@hotmail.com','f&OLiY*^XA0e|^1'),
(280,'Oscar Alfonso','Orduño','Yañez','56','Osc_O@unam.com','t|UfL?8q+{ZDi#:'),
(401,'Alfredo','Pérez','Rojas','56','Alf_P@proton.com','euieEnNV}ZuSAD:'),
(427,'Leticia','León','Fernández','56','Let_L@unam.com','29zt@f2jhX,F44m'),
(464,'Norberto','Flores','Porcayo','56','Nor_F@unam.com','*u;.=;g26dG:3=$'),
(518,'Eréndira','Hernández','Rojas','56','Eré_H@gmail.com','dQ,?t@,V!kq}ahW'),
(580,'Juan Carlos','Camacho','Benítez','56','Jua_C@yahoo.com','Y3a!IU9McuANail'),
(639,'Héctor','González','Muñoz','55','Héc_G@unam.com','KSymx?DjPY7i105'),
(683,'Juan Carlos','Cruz','Altamirano','55','Jua_C@hotmail.com','YDwyQsI3Wjg@n=c'),
(742,'Jorge','Morales','Narváez','55','Jor_M@yahoo.com','H#1DaD6K}nIW!,W'),
(754,'Vidal','Briones','Rojas','56','Vid_B@gmail.com','-.2ii?SD7{qm_GX'),
(786,'Pablo','Villanueva','Null','55','Pab_V@yahoo.com','37-B9:^o39Od5M@'),
(825,'Michel ','Morales y Horacio','Peralta','55','Mic_M@hotmail.com','?FJOa7O&NbFjj&x'),
(864,'Perla Ivonne','Bello','Martínez','55','Per_B@gmail.com','{v;}+7Lc^*3Oiaq'),
(870,'Fernándo','Gallegos','Null','56','Fer_G@yahoo.com','.f?%#@Y86TNs;%v'),
(876,'Dagoberto','Riaño','Ruiz','56','Dag_R@unam.com','qc2?1hyYcV#q0;6'),
(962,'Eduardo Jesús','Muciño','Gordoa','56','Edu_M@gmail.com','yE1U-KEcs%!!S:%'),
(969,'Luis Manuel','Vivas','Amador','56','Lui_V@gmail.com','R;t6^KBe+WxM!z4');
/*!40000 ALTER TABLE `profesor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-01  9:42:27
