-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 16-Dez-2021 às 13:40
-- Versão do servidor: 5.7.21
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `av2_3daw`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `postalcode` int(11) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `cpf` int(20) NOT NULL,
  `passaporte` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nascimento` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `address`, `postalcode`, `pais`, `cpf`, `passaporte`, `email`, `nascimento`) VALUES
(1, 'Silva', 'Rua Marina, 16', 333456, 'Holanda', 1112223334, 111333222, 'aa@dfd.com', '30/12/2002'),
(2, 'Gonçalves', 'Avenida Quinze, 15', 3336767, 'Brasil', 555666777, 333222111, 'baba@ggg.com', '12/04/98'),
(5, 'Lohane', 'Avenida Dulce, 113', 123123, 'França', 123567, 123222, 'asdasd', 'nascimento'),
(6, 'Maria', 'Avenida Dulce, 43', 1236665, 'França', 1255778, 999776, 'asdfasdf', 'nascimento');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
