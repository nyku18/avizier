-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14 Mai 2017 la 14:03
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
-- Structura de tabel pentru tabelul `examen`
--

CREATE TABLE `examen` (
  `id_examen` int(11) NOT NULL,
  `data` date NOT NULL,
  `sala` varchar(5) NOT NULL,
  `id_materie` int(11) NOT NULL,
  `id_grupa` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
(2, 'Interfeţe şi protocoale de Comunicaţii'),
(3, 'Programarea aplicaţiilor grafice'),
(4, 'Dezvoltarea aplicaţiilor WEB'),
(5, 'Electronică digitală'),
(6, 'Măsurări şi achiziţii de date'),
(7, 'Limba engleză'),
(8, 'Limba germană'),
(9, 'Ingineria sistemelor de programare'),
(10, 'Grafică asistată de calculator'),
(11, 'Tehnologii WEB'),
(12, 'Măsurări și traductoare');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `materie_specializare`
--

CREATE TABLE `materie_specializare` (
  `id_materie_specializare` int(11) NOT NULL,
  `id_materie` int(11) NOT NULL,
  `id_specializare` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
-- Indexes for table `materie_specializare`
--
ALTER TABLE `materie_specializare`
  ADD PRIMARY KEY (`id_materie_specializare`);

--
-- Indexes for table `specializare`
--
ALTER TABLE `specializare`
  ADD PRIMARY KEY (`id_specializare`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `examen`
--
ALTER TABLE `examen`
  MODIFY `id_examen` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `grupa`
--
ALTER TABLE `grupa`
  MODIFY `id_grupa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `materie`
--
ALTER TABLE `materie`
  MODIFY `id_materie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `materie_specializare`
--
ALTER TABLE `materie_specializare`
  MODIFY `id_materie_specializare` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `specializare`
--
ALTER TABLE `specializare`
  MODIFY `id_specializare` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
