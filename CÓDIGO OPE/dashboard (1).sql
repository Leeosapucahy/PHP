-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 12:26 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` int(20) NOT NULL,
  `cliente` varchar(50) DEFAULT NULL,
  `servico` varchar(50) NOT NULL,
  `datas` date DEFAULT NULL,
  `horario` varchar(5) DEFAULT NULL,
  `funcionario` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `cliente`, `servico`, `datas`, `horario`, `funcionario`) VALUES
(5, 'Victor', 'Corte de cabelo', '2021-12-30', '16h30', 'Maria'),
(8, 'Leonardo', 'Degradê', '2021-12-16', '17h00', 'Maria Layla'),
(9, 'Giulia', 'Luzes', '2022-01-06', '11h00', 'Débora');

-- --------------------------------------------------------

--
-- Table structure for table `contatos`
--

CREATE TABLE `contatos` (
  `id` int(20) NOT NULL,
  `cliente` varchar(50) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contatos`
--

INSERT INTO `contatos` (`id`, `cliente`, `telefone`) VALUES
(2, 'Leonardo', 2147483647),
(3, 'Victor', 1198745534),
(5, 'Giulia', 2147483647),
(6, 'Guilherme', 1490997658);

-- --------------------------------------------------------

--
-- Table structure for table `financas`
--

CREATE TABLE `financas` (
  `id` int(20) NOT NULL,
  `rendamensal` varchar(50) DEFAULT NULL,
  `deficitmensal` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `financas`
--

INSERT INTO `financas` (`id`, `rendamensal`, `deficitmensal`) VALUES
(0, 'R$8000 /01', 'R$4700 /01'),
(0, 'R$3000 /02', 'R$1700 /02'),
(0, 'R$10000 /03', 'R$6800 /03'),
(0, 'R$20000 /04', 'R$12000 /04');

-- --------------------------------------------------------

--
-- Table structure for table `funcionarios`
--

CREATE TABLE `funcionarios` (
  `nome` varchar(50) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `datacontratacao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `id` int(20) NOT NULL,
  `produto` varchar(50) DEFAULT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `quantidade` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id`, `produto`, `marca`, `tipo`, `quantidade`) VALUES
(1, 'Shampoo', 'Elseve', 'Cabelo', 8),
(2, 'Condicionador', 'L´oreal Paris', 'Cabelo', 13),
(4, 'Gel', 'Bozzano', 'Cabelo', 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
