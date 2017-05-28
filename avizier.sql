-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28 Mai 2017 la 14:12
-- Versiune server: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avizier`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(1) NOT NULL,
  `user` varchar(100) NOT NULL,
  `parola` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Salvarea datelor din tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `user`, `parola`) VALUES
(1, 'administrator', 'inginerie');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `examen`
--

CREATE TABLE `examen` (
  `id_examen` int(11) NOT NULL,
  `data` date NOT NULL,
  `sala` varchar(5) NOT NULL,
  `id_materie` int(11) NOT NULL,
  `id_grupa` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Salvarea datelor din tabel `examen`
--

INSERT INTO `examen` (`id_examen`, `data`, `sala`, `id_materie`, `id_grupa`) VALUES
(5, '2017-05-09', 'IE332', 1, 1),
(6, '2017-05-31', 'IM201', 5, 4),
(7, '2017-05-24', 'IE541', 7, 3),
(8, '2017-06-14', 'IM231', 12, 5),
(9, '2017-05-17', 'IE123', 4, 3),
(10, '2017-05-17', 'IE331', 11, 5),
(11, '2017-06-21', 'IE551', 5, 3),
(13, '2017-06-13', 'IM002', 3, 2),
(14, '2017-05-03', 'dsadc', 4, 2);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `grupa`
--

CREATE TABLE `grupa` (
  `id_grupa` int(11) NOT NULL,
  `grupa` int(3) NOT NULL,
  `id_specializare` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Salvarea datelor din tabel `grupa`
--

INSERT INTO `grupa` (`id_grupa`, `grupa`, `id_specializare`) VALUES
(1, 221, 1),
(2, 222, 1),
(3, 223, 1),
(4, 224, 2),
(5, 225, 3);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `materie`
--

CREATE TABLE `materie` (
  `id_materie` int(11) NOT NULL,
  `nume_materie` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Salvarea datelor din tabel `materie`
--

INSERT INTO `materie` (`id_materie`, `nume_materie`) VALUES
(1, 'Tehnici de programare'),
(2, 'Interfeţe şi protocoale de comunicaţii'),
(3, 'Programarea aplicaţiilor grafice'),
(4, 'Dezvoltarea aplicaţiilor WEB'),
(5, 'Electronică digitală'),
(6, 'Măsurări şi achiziţii de date'),
(7, 'Limba engleză'),
(8, 'Limba germană'),
(10, 'Grafică asistată de calculator'),
(11, 'Tehnologii WEB'),
(12, 'Măsurări și traductoare'),
(15, 'Structuri de date'),
(14, 'Metode numerice');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `specializare`
--

CREATE TABLE `specializare` (
  `id_specializare` int(11) NOT NULL,
  `nume_specializare` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Salvarea datelor din tabel `specializare`
--

INSERT INTO `specializare` (`id_specializare`, `nume_specializare`) VALUES
(1, 'Calculatoare'),
(2, 'Tehnologia informației'),
(3, 'Ingineria sitemelor multimedia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `examen`
--
ALTER TABLE `examen`
  ADD PRIMARY KEY (`id_examen`);

--
-- Indexes for table `grupa`
--
ALTER TABLE `grupa`
  ADD PRIMARY KEY (`id_grupa`);

--
-- Indexes for table `materie`
--
ALTER TABLE `materie`
  ADD PRIMARY KEY (`id_materie`);

--
-- Indexes for table `specializare`
--
ALTER TABLE `specializare`
  ADD PRIMARY KEY (`id_specializare`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `examen`
--
ALTER TABLE `examen`
  MODIFY `id_examen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `grupa`
--
ALTER TABLE `grupa`
  MODIFY `id_grupa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `materie`
--
ALTER TABLE `materie`
  MODIFY `id_materie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `specializare`
--
ALTER TABLE `specializare`
  MODIFY `id_specializare` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
