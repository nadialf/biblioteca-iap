-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2016 at 12:44 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca-iap`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id_r` int(5) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `number` varchar(5) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `pc` varchar(5) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id_r`, `street`, `number`, `location`, `state`, `pc`, `country`) VALUES
(8, '21', '11', 'El Lencero', 'Ver.', '91020', 'México'),
(9, 'Corona', '17', 'Xalapa Enríquez', 'Ver.', '91000', 'México'),
(10, 'Calle Villahermosa', '21', 'Xalapa Enríquez', 'Ver.', '', 'México'),
(11, 'Bosque', '51', 'Xalapa Enríquez', 'Ver.', '91017', 'México'),
(1, 'Bosque', '51', 'Xalapa Enríquez', 'Ver.', '91017', 'México');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id_a` int(5) NOT NULL,
  `name_a` varchar(50) NOT NULL,
  `last1_a` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id_a`, `name_a`, `last1_a`) VALUES
(1, 'Autor', 'Desconocido'),
(2, 'Fernando', 'Savater'),
(3, 'Ignacio', 'Bernal'),
(4, 'Juan Antonio', 'Gaya Nuño'),
(5, 'Lourdes', 'Grobet'),
(6, 'Klára', 'Garas'),
(7, 'José', 'Camón Aznar'),
(8, 'Emma', 'Micheletti'),
(9, 'Federico', 'Wattenberg'),
(10, 'Gustav', 'Glück'),
(11, 'Felipe', 'Ehrenberg'),
(12, 'Gabriel', 'Orozco'),
(13, 'Juan', 'Soriano'),
(14, 'Graciela', 'Schmilchuk'),
(15, 'Paul', 'Schubring'),
(16, 'Sarah', 'Carr-Gomm'),
(17, 'Hereward Lester', 'Cooke'),
(18, 'Lily S. de', 'Kassner'),
(19, 'Sergio', 'Cuevas'),
(20, 'Alan', 'Livingston'),
(21, 'Frank', 'Zöllner'),
(22, 'Enrique', 'Lafuente Ferrari'),
(23, 'Mel', 'Byars'),
(24, 'Albertus', 'Seba'),
(25, 'Joan', 'Fontcuberta'),
(26, 'Mercedes', 'Iturbe'),
(27, 'Manuel', 'Alvarez Bravo'),
(28, 'Josef', 'Koudelka'),
(29, 'Andres', 'Serrano'),
(30, 'Spencer', 'Tunick'),
(31, 'John', 'Berger'),
(32, 'Clément', 'Rosset'),
(33, 'Jacques', 'Ranciere'),
(34, 'Martin', 'Jay'),
(35, 'Jean-Luc', 'Nancy'),
(36, 'Alain', 'Badiou'),
(37, 'Immanuel', 'Kant'),
(38, 'Slavoj', 'Zizek'),
(39, 'Nelson', 'Goodman'),
(40, 'Emmanuel', 'Lévinas'),
(41, 'Theodor W.', 'Adorno'),
(42, 'Susan', 'Buck-Morss'),
(43, 'Christoph', 'Menke'),
(44, 'Albrecht', 'Wellmer'),
(45, 'Paul', 'Ricoeur'),
(46, 'Philippe', 'Lacoue-Labarthe'),
(47, 'Hans', 'Blumenberg'),
(48, 'Karl-Otto', 'Apel'),
(49, 'Juan', 'Naranjo'),
(50, 'Enrico', 'Castelli'),
(51, 'Ramón', 'Díaz Padilla'),
(52, 'James', 'Oles'),
(53, 'Cees J.', 'Hamelink'),
(54, 'Aicher', 'Otl'),
(55, 'Ludwig von', 'Bertalanffy'),
(56, 'Ananda Kentish', 'Coomaraswamy'),
(57, 'David', 'Summers');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id_b` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `release_year` int(4) DEFAULT NULL,
  `language` varchar(50) NOT NULL,
  `place` varchar(80) DEFAULT NULL,
  `pages` int(5) NOT NULL,
  `description` text,
  `classification` varchar(100) NOT NULL,
  `edition` varchar(5) DEFAULT NULL,
  `copy` int(5) NOT NULL,
  `copy_loan` int(5) NOT NULL,
  `notes_b` text,
  `cover` varchar(100) DEFAULT NULL,
  `release_date` date NOT NULL,
  `id_a` int(5) NOT NULL,
  `id_e` int(5) NOT NULL,
  `id_g` int(5) DEFAULT NULL,
  `id_l` int(5) NOT NULL,
  `id_c` int(5) NOT NULL,
  `id_i` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id_b`, `title`, `release_year`, `language`, `place`, `pages`, `description`, `classification`, `edition`, `copy`, `copy_loan`, `notes_b`, `cover`, `release_date`, `id_a`, `id_e`, `id_g`, `id_l`, `id_c`, `id_i`) VALUES
('XIAP01000018', 'Analógico y digital', 2001, 'Español', '', 272, '', 'BH39 A42', '1', 2, 1, '', 'img/covers/XIAP01000018.jpg', '2016-08-01', 54, 3, 1, 1, 2, 1),
('XIAP01000074', 'Diccionario filosófico', 2007, 'Español', 'México', 100, 'Nuevo', 'B68 S28 2007', '1', 1, 1, 'Cambio', 'img/covers/XIAP01000074.jpg', '2016-08-01', 2, 1, 1, 1, 1, 1),
('XIAP01000117', 'Arte moderno de México', 2005, 'Español', '', 401, 'La colección de arte mexicano del siglo XX de Andrés Blaisten es, según la presente obra, la más grande del mundo en manos privadas, pero sobre todo, es una colección de gran valor, que incluye obras centrales de los artistas considerados y en general de la plástica mexicana del período. El libro abre con dos textos generales sobre las características y la conformación de la colección, para realizar luego breves análisis críticos de cada una de las obras.', 'N6555 A773 2005', '1', 1, 0, '', 'img/covers/XIAP01000117.jpg', '2016-08-01', 52, 5, 3, 1, 1, 1),
('XIAP01000163', 'Citadinos', 2009, 'Castellano', '', 62, 'Uno de los intereses centrales de la Universidad Nacional Autónoma de México a lo largo del tiempo ha sido estimular la creación artística como uno de los principios fundamentales para el conocimiento de nuestra realidad. Citadinos, la exposición de Spencer Tunick que presenta el Centro Cultural Universitario Tlatelolco, a través de la Colección Blaisten, cumple con este propósito fundamental; surge a partir de la visita que hiciera el artista a la Colección Blaisten del Centro Cultural Universitario Tlatelolco en el otoño de 2007. El encuentro con las obras de ese vasto acervo que tiene su núcleo temporal entre 1900 y 1960, detonó la idea de realizar una serie de treinta fotografías que tuviesen como personaje central a la propia ciudad y el espacio público, como sucede en numerosas piezas de la colección. - Sealtiel Alatriste', 'TR675 T86 2009', '1', 1, 0, '', 'img/covers/XIAP01000163.jpg', '2016-08-01', 30, 5, 1, 1, 1, 1),
('XIAP01000166', 'La danza de Síva', 2006, 'Castellano', 'Madrid', 120, 'La esencia de la experiencia de la estética india. Siete ensayos de profundo y clarificador análisis con que Coomaraswamy nos presenta la historia y esencia del arte de la India.', 'DS423 C66 2006', '2', 1, 0, '', 'img/covers/XIAP01000166.jpg', '2016-08-01', 56, 6, 1, 1, 2, 1),
('XIAP01000174', 'Fotografía, antropología y colonialismo (1845-2006)', 2006, 'Español', '', 100, '', 'GN34.3.P45 F67', '', 1, 0, '', 'img/covers/XIAP01000174.jpg', '2016-08-01', 49, 4, 1, 1, 2, 1),
('XIAP01000220', 'El dibujo del natural en la época postacademia', 2007, 'Español', '', 328, 'Este libro trata de cubrir las necesidades de contenidos icónicos, teóricos y visuales, de los estudiantes de un nivel medio alto de Bellas Artes, Escuelas de Arte, Arquitectura, Historia del Arte o Restauración y, en general, de los artistas y de todas aquellas personas interesadas en conocer los procesos de aprendizaje del dibujo del natural, así como la permanencia de sus conceptos básicos y la significación histórica de su legado académico.', 'NC285 D52 2007', '1', 1, 1, '', 'img/covers/XIAP01000220.jpg', '2016-08-01', 51, 7, 1, 1, 2, 1),
('XIAP01000406', 'Lo demoníaco en el arte', 2007, 'Español', '', 416, 'Escrito hace ya más de medio siglo, no por azar después de los horrores de la Segunda Guerra Mundial, este libro trata de las representaciones de lo demoníaco en el arte europeo desde el siglo XIV al XVII. Castelli, este gran humanista que durante años reunió en Roma a la flor de la intelectualidad europea en unos encuentros epifánicos, forjó una hermenéutica espiritual del arte, de la que este libro es su mejor expresión.', 'N8140 C37', '1', 1, 0, '', 'img/covers/XIAP01000406.jpg', '2016-08-01', 50, 6, 1, 1, 2, 1),
('XIAP01000447', 'La aldea transnacional', 1981, 'Español', '', 100, '', 'P90.I5 H35', '1', 1, 0, '', 'img/covers/XIAP01000447.jpg', '2016-08-01', 53, 1, 1, 1, 2, 1),
('XIAP01000450', 'Teoría general de los sistemas', 1976, 'Español', '', 100, '', 'Q295 B47 T4', '1', 1, 0, '', 'img/covers/XIAP01000450.jpg', '2016-08-01', 55, 9, 1, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('f03e16d179e4139e323895a6764de936', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36', 1472726400, 'a:4:{s:9:"user_data";s:0:"";s:7:"user_id";s:1:"1";s:8:"username";s:11:"nadia-admin";s:6:"status";s:1:"1";}');

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE `collection` (
  `id_c` int(5) NOT NULL,
  `name_c` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collection`
--

INSERT INTO `collection` (`id_c`, `name_c`) VALUES
(1, 'Consulta'),
(2, 'General'),
(3, 'Periodicas');

-- --------------------------------------------------------

--
-- Table structure for table `editorial`
--

CREATE TABLE `editorial` (
  `id_e` int(5) NOT NULL,
  `name_e` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `editorial`
--

INSERT INTO `editorial` (`id_e`, `name_e`) VALUES
(1, 'Editorial desconocido'),
(2, 'BLUME'),
(3, 'Gustavo Gili'),
(4, 'FotoGGrafía'),
(5, 'Universidad Nacional Autónoma de México'),
(6, 'Siruela'),
(7, 'AKAL'),
(9, 'Fondo de Cultura Económica'),
(10, 'Universidad Veracruzana');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id_g` int(5) NOT NULL,
  `name_g` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id_g`, `name_g`) VALUES
(1, 'Tema desconocido'),
(2, 'Fotografía'),
(3, 'Arte moderno');

-- --------------------------------------------------------

--
-- Table structure for table `institute`
--

CREATE TABLE `institute` (
  `id_i` int(5) NOT NULL,
  `name_i` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institute`
--

INSERT INTO `institute` (`id_i`, `name_i`) VALUES
(1, 'Instituto de Artes Plásticas Xalapa');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id_l` int(5) NOT NULL,
  `name_l` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id_l`, `name_l`) VALUES
(1, 'CI-X');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `id_ln` int(5) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `advance` varchar(30) NOT NULL,
  `delivery` varchar(30) NOT NULL,
  `notes_l` text,
  `id_b` varchar(100) NOT NULL,
  `id_r` int(5) NOT NULL,
  `credential` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`id_ln`, `start_date`, `end_date`, `advance`, `delivery`, `notes_l`, `id_b`, `id_r`, `credential`) VALUES
(1, '2016-06-23', '2016-06-30', 'Vencido', 'No', 'Ninguna observación', 'XIAP01000074', 1, 'IFE'),
(3, '2016-08-01', '2016-09-15', 'Vencido', 'Si', '', 'XIAP01000220', 10, 'IFE'),
(10, '2016-09-01', '2016-09-01', 'Vigente', 'No', '', 'XIAP01000018', 11, 'IFE');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(2, '192.168.0.48', 'nadialbrs@hotmail.com', '2016-06-13 15:04:36'),
(3, '192.168.0.48', 'nadialbrs@hotmail.co', '2016-06-13 15:04:58'),
(4, '192.168.0.48', 'nadialbrs@hotmail.co', '2016-06-13 15:05:51'),
(5, '192.168.0.48', 'nadialbrs@hotmail.com', '2016-06-13 15:05:58'),
(6, '192.168.0.48', 'nadialbrs@hotmail.co', '2016-06-13 15:06:29'),
(7, '192.168.0.48', 'nadialbrs@hotmail.co', '2016-06-13 15:07:40');

-- --------------------------------------------------------

--
-- Table structure for table `reader`
--

CREATE TABLE `reader` (
  `id_r` int(5) NOT NULL,
  `date_r` date NOT NULL,
  `name_r` varchar(50) NOT NULL,
  `last1_r` varchar(50) NOT NULL,
  `last2_r` varchar(50) NOT NULL,
  `sex` varchar(9) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(80) DEFAULT NULL,
  `notes_r` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reader`
--

INSERT INTO `reader` (`id_r`, `date_r`, `name_r`, `last1_r`, `last2_r`, `sex`, `phone`, `email`, `notes_r`) VALUES
(1, '2016-08-01', 'Nadia', 'Libreros', 'Fernández', 'Femenino', '2281795757', 'nadialbrs@hotmail.com', 'Entrega libros a tiempo'),
(8, '2016-08-02', 'Marlen', 'Mendoza', 'Carmona', 'Femenino', '2281898989', 'mc@html.com', ''),
(9, '2016-08-03', 'Dulce', 'Huerta', 'Leon', 'Femenino', '2281898989', 'dulce@huerta', ''),
(10, '2016-08-04', 'Jorge Alexis', 'Limon', 'Bello', 'Masculino', '2281898989', '', ''),
(11, '2016-08-08', 'Isis Andrea', 'Libreros', 'Fernández', 'Femenino', '2288142129', 'isis@j', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES
(1, 'nadia-admin', '$2a$08$NbSV9VRisyanSEmqogzkHuaGfS6p2YidiaMOXxoLhpiGtFOqLQEWS', 'nadialbrs@hotmail.com', 1, 0, NULL, NULL, NULL, NULL, 'd5c8a50c83e310977fe08c93c286c984', '::1', '2016-09-01 07:42:52', '2016-06-08 18:13:13', '2016-09-01 05:42:52');

-- --------------------------------------------------------

--
-- Table structure for table `user_autologin`
--

CREATE TABLE `user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user_autologin`
--

INSERT INTO `user_autologin` (`key_id`, `user_id`, `user_agent`, `last_ip`, `last_login`) VALUES
('5536253af2fa216a7ec53673e657b9bd', 1, 'Mozilla/5.0 (iPhone; CPU iPhone OS 9_3_2 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Version/9.0 Mobile/13F69 Safari/601.1', '192.168.0.22', '2016-06-17 14:22:31'),
('5adfc8bc92561b35e29ba09840e3b4cb', 1, 'Mozilla/5.0 (iPhone; CPU iPhone OS 9_3_2 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Version/9.0 Mobile/13F69 Safari/601.1', '192.168.0.47', '2016-06-13 16:00:01'),
('a3f705c6a21c2ba0b4a1c073a1deaf77', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safari/537.36', '192.168.0.48', '2016-06-14 13:57:56');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD KEY `address_ibfk_1` (`id_r`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id_a`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id_b`),
  ADD KEY `book_ibfk_1` (`id_a`),
  ADD KEY `book_ibfk_2` (`id_e`),
  ADD KEY `book_ibfk_3` (`id_g`),
  ADD KEY `book_ibfk_4` (`id_l`),
  ADD KEY `book_ibfk_5` (`id_c`),
  ADD KEY `book_ibfk_6` (`id_i`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`id_c`);

--
-- Indexes for table `editorial`
--
ALTER TABLE `editorial`
  ADD PRIMARY KEY (`id_e`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_g`);

--
-- Indexes for table `institute`
--
ALTER TABLE `institute`
  ADD PRIMARY KEY (`id_i`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id_l`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`id_ln`),
  ADD KEY `loan_ibfk_1` (`id_b`),
  ADD KEY `loan_ibfk_2` (`id_r`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reader`
--
ALTER TABLE `reader`
  ADD PRIMARY KEY (`id_r`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_autologin`
--
ALTER TABLE `user_autologin`
  ADD PRIMARY KEY (`key_id`,`user_id`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id_a` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `collection`
--
ALTER TABLE `collection`
  MODIFY `id_c` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `editorial`
--
ALTER TABLE `editorial`
  MODIFY `id_e` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id_g` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `institute`
--
ALTER TABLE `institute`
  MODIFY `id_i` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id_l` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `id_ln` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `reader`
--
ALTER TABLE `reader`
  MODIFY `id_r` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`id_r`) REFERENCES `reader` (`id_r`) ON DELETE CASCADE;

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`id_a`) REFERENCES `author` (`id_a`) ON DELETE CASCADE,
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`id_e`) REFERENCES `editorial` (`id_e`) ON DELETE CASCADE,
  ADD CONSTRAINT `book_ibfk_3` FOREIGN KEY (`id_g`) REFERENCES `genre` (`id_g`) ON DELETE CASCADE,
  ADD CONSTRAINT `book_ibfk_4` FOREIGN KEY (`id_l`) REFERENCES `library` (`id_l`) ON DELETE CASCADE,
  ADD CONSTRAINT `book_ibfk_5` FOREIGN KEY (`id_c`) REFERENCES `collection` (`id_c`) ON DELETE CASCADE,
  ADD CONSTRAINT `book_ibfk_6` FOREIGN KEY (`id_i`) REFERENCES `institute` (`id_i`) ON DELETE CASCADE;

--
-- Constraints for table `loan`
--
ALTER TABLE `loan`
  ADD CONSTRAINT `loan_ibfk_1` FOREIGN KEY (`id_b`) REFERENCES `book` (`id_b`) ON DELETE CASCADE,
  ADD CONSTRAINT `loan_ibfk_2` FOREIGN KEY (`id_r`) REFERENCES `reader` (`id_r`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
