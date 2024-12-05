-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2024 at 03:28 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_do_zequinha`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `nasc` varchar(100) NOT NULL,
  `gen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `nasc`, `gen`) VALUES
(1, '', '', '', '', ''),
(2, '', '', '', '', ''),
(3, '', '', '', '', ''),
(4, '', '', '', '', ''),
(5, 'Joao Nery', 'neryzineo61@gmail.com', 'cudepiroca', '2003-09-08', 'masculino'),
(7, 'Joao Nery', 'neryzineo61@gmail.com', 'cudepiroca', '2003-09-08', 'masculino'),
(9, 'Rafael que morde', 'rafa_pinto@gmail.com', 'vendogolroubado', '1997-09-07', 'masculino'),
(10, 'kol;asjdlJAS', 'alksdlAS@GMAIL.COM', 'AKQAEDA', '1997-09-07', 'masculino'),
(11, 'Fernanda', 'fernandagames@gmail.com', 'fefe1313', '2001-12-05', 'feminino'),
(12, 'Fernanda', 'fernandagames@gmail.com', 'fefe1313', '2001-12-05', 'feminino'),
(13, 'Fabrizio', 'amgifabric@hotmail.com', 'pipoca3', '2001-12-03', 'masculino'),
(14, 'Marcos', 'marcos1337@hotmail.com', 'pipoca', '0004-01-23', 'masculino'),
(16, 'pingu retardado', 'amigopingu@gmail.com', '3dlegal', '2004-02-01', 'masculino'),
(17, 'Guilherme Peixoto', 'guipeixoto@outlook.com', 'eusouguipeixe', '2009-12-03', 'masculino');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
