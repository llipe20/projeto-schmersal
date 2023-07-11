-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Maio-2023 às 14:51
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `schmersal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `credito`
--

CREATE TABLE `credito` (
  `idCredito` int(11) NOT NULL,
  `cartao` varchar(50) DEFAULT NULL,
  `numero` varchar(20) DEFAULT NULL,
  `validade` date DEFAULT NULL,
  `cvc` int(3) DEFAULT NULL,
  `limite` int(11) DEFAULT NULL,
  `senha` int(4) DEFAULT NULL,
  `dono` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `credito`
--

INSERT INTO `credito` (`idCredito`, `cartao`, `numero`, `validade`, `cvc`, `limite`, `senha`, `dono`) VALUES
(5, 'CAIXA', '1111.1111.1111.1111', '2023-05-13', 123, 250, 1503, NULL),
(6, 'nubank', '1234.1111.2222.5889', '2023-05-13', 147, 2500, 1503, NULL),
(9, 'C6 bank', '7777.8888.9999.0000', '2023-05-13', 123, 250, 1503, NULL),
(10, 'Mercado Pago', '9999.9999.9999.9999', '2023-05-13', 125, 725, 1503, 45),
(11, 'Banco Pan', '1111.1111.1111.1112', '2023-05-13', 123, 500, 1503, 67);

-- --------------------------------------------------------

--
-- Estrutura da tabela `hospedes`
--

CREATE TABLE `hospedes` (
  `idHospede` int(11) NOT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `sexo` enum('masculino','feminino') DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `hospedes`
--

INSERT INTO `hospedes` (`idHospede`, `cpf`, `nome`, `sexo`, `email`, `telefone`) VALUES
(1, '616.154.703-10', 'Felipe', 'masculino', 'silvahlipe@gmail.com', '(85)98447-0567'),
(4, '111.111.111.11', 'Danielly', 'feminino', 'fs2284511@gmail.com', '(99)98858-4406'),
(5, '616.154.703-10', 'Felipe', 'masculino', 'silvahlipe@gmail.com', '(85)98447-0567'),
(6, '119.518.753.10', 'Ana Luiza', 'feminino', 'ml2463265@gmail.com', '(99)98812-0348'),
(7, '616.154.703-10', 'Felipe da Conceição Silva', 'masculino', 'silvahlipe@gmail.com', '(99)98812-0348'),
(8, '616.154.703-10', 'Felipe da Conceição Silva', 'masculino', 'silvahlipe@gmail.com', '(99)98812-0348'),
(9, '111.111.111.11', 'Felipe da Conceição Silva', 'masculino', 'ml2463265@gmail.com', '(99)98858-4406'),
(10, '119.518.753.10', 'Danielly', 'masculino', 'fs2284511@gmail.com', '(99)98812-0348'),
(11, '119.518.753.10', 'Danielly', 'masculino', 'fs2284511@gmail.com', '(99)98812-0348'),
(12, '119.518.753.10', 'Felipe', 'masculino', 'danii@gmail.com', '(99)98812-0348'),
(13, '119.518.753.10', 'Felipe', 'masculino', 'danii@gmail.com', '(99)98812-0348'),
(14, '119.518.753.10', 'Felipe', 'masculino', 'danii@gmail.com', '(99)98812-0348'),
(15, '119.518.753.10', 'Felipe', 'masculino', 'danii@gmail.com', '(99)98812-0348'),
(16, '119.518.753.10', 'Felipe', 'masculino', 'danii@gmail.com', '(99)98812-0348'),
(17, '119.518.753.10', 'Felipe', 'masculino', 'danii@gmail.com', '(99)98812-0348'),
(18, '123.456.789.10', 'Ana Luiza', 'feminino', 'ml2463265@gmail.com', '(99)98812-0348'),
(19, '119.054.357-54', 'Felipe', 'masculino', 'silvahlipe@gmail.com', '(99)98858-4406'),
(20, '119.054.357-54', 'Felipe', 'masculino', 'silvahlipe@gmail.com', '(99)98858-4406'),
(21, '119.054.357-54', 'Felipe', 'masculino', 'silvahlipe@gmail.com', '(99)98858-4406'),
(22, '119.054.357-54', 'Felipe', 'masculino', 'silvahlipe@gmail.com', '(99)98858-4406'),
(23, '119.054.357-54', 'Felipe', 'masculino', 'silvahlipe@gmail.com', '(99)98858-4406'),
(24, '119.054.357-54', 'Felipe', 'masculino', 'silvahlipe@gmail.com', '(99)98858-4406'),
(25, '119.054.357-54', 'Felipe', 'masculino', 'silvahlipe@gmail.com', '(99)98858-4406'),
(26, '119.054.357-54', 'Felipe', 'masculino', 'silvahlipe@gmail.com', '(99)98858-4406'),
(27, '119.054.357-54', 'Felipe', 'masculino', 'silvahlipe@gmail.com', '(99)98858-4406'),
(28, '119.054.357-54', 'Felipe', 'masculino', 'silvahlipe@gmail.com', '(99)98858-4406'),
(29, '616.154.703-10', 'Nara', 'masculino', 'silvahlipe@gmail.com', '(99)98812-0348'),
(30, '616.154.703-10', 'Felipe', 'masculino', 'fs2284511@gmail.com', '(85)98447-0567'),
(31, '616.154.703-10', 'Felipe', 'masculino', 'fs2284511@gmail.com', '(85)98447-0567'),
(32, '616.154.703-10', 'Felipe', 'masculino', 'fs2284511@gmail.com', '(85)98447-0567'),
(33, '616.154.703-10', 'Nara', 'feminino', 'silvahlipe@gmail.com', '(85)98447-0567'),
(34, '616.154.703-10', 'Nara', 'feminino', 'silvahlipe@gmail.com', '(85)98447-0567'),
(35, '119.054.357-54', 'Nara', 'masculino', 'silvahlipe@gmail.com', '(85)98447-0567'),
(36, '616.154.703-10', 'Felipe', 'masculino', 'fs2284511@gmail.com', '(99)98858-4406'),
(37, '111.111.111.11', 'Kamii', 'feminino', 'ml2463265@gmail.com', '(99)98858-4406'),
(38, '111.111.111.11', 'Kamii', 'feminino', 'ml2463265@gmail.com', '(99)98858-4406'),
(39, '119.054.357-54', 'Ana Luiza', 'feminino', 'fs2284511@gmail.com', '(99)98812-0348'),
(40, '616.154.703-10', 'Felipe', 'masculino', 'silvahlipe@gmail.com', '(99)98812-0348'),
(41, '616.154.703-10', 'Kamii', 'masculino', 'silvahlipe@gmail.com', '(99)98812-0348'),
(42, '616.154.703-10', 'Nara', 'masculino', 'silvahlipe@gmail.com', '(85)98447-0567'),
(43, '616.154.703-10', 'Felipe', 'masculino', 'silvahlipe@gmail.com', '(85)98447-0567'),
(44, '616.154.703-10', 'Felipe', 'feminino', 'silvahlipe@gmail.com', '(85)98447-0567'),
(45, '119.518.753.10', 'Kamii', 'masculino', 'silvahlipe@gmail.com', '(99)98812-0348'),
(46, '616.154.703-10', 'Kamii', 'masculino', 'silvahlipe@gmail.com', '(85)98447-0567'),
(47, '616.154.703-10', 'Nara', 'masculino', 'fs2284511@gmail.com', '(85)98447-0567'),
(48, '616.154.703-10', 'Felipe', 'masculino', 'fs2284511@gmail.com', '(85)98447-0567'),
(49, '616.154.703-10', 'Felipe da Conceição Silva', 'masculino', 'silvahlipe@gmail.com', '(85)98447-0567'),
(50, '616.154.703-10', 'Felipe da Conceição Silva', 'masculino', 'silvahlipe@gmail.com', '(85)98447-0567'),
(51, '616.154.703-10', 'Nara', 'feminino', 'silvahlipe@gmail.com', '(85)98447-0567'),
(52, '616.154.703-10', 'Felipe da Conceição Silva', 'feminino', 'silvahlipe@gmail.com', '(99)98812-0348'),
(53, '123.456.789.10', 'Nara', 'masculino', 'danii@gmail.com', '(99)98858-4406'),
(54, '616.154.703-10', 'Ana Luiza', 'masculino', 'silvahlipe@gmail.com', '(99)98812-0348'),
(55, '616.154.703-10', 'Nara', 'masculino', 'danii@gmail.com', '(85)98447-0567'),
(56, '119.054.357-54', 'Danielly', 'feminino', 'danii@gmail.com', '(99)98812-0348'),
(57, '616.154.703-10', 'Ana Luiza', 'masculino', 'silvahlipe@gmail.com', '(85)98447-0567'),
(58, '616.154.703-10', 'Kamii', 'feminino', 'danii@gmail.com', '(99)98812-0348'),
(59, '616.154.703-10', 'Kamii', 'feminino', 'danii@gmail.com', '(99)98812-0348'),
(60, '616.154.703-10', 'Kamii', 'feminino', 'danii@gmail.com', '(99)98812-0348'),
(61, '119.054.357-54', 'Felipe', 'masculino', 'silvahlipe@gmail.com', '(85)98447-0567'),
(62, '616.154.703-10', 'Ana Luiza', 'feminino', 'silvahlipe@gmail.com', '(99)98812-0348'),
(63, '616.154.703-10', 'Kamii', 'feminino', 'silvahlipe@gmail.com', '(99)98858-4406'),
(64, '', '', '', '', ''),
(65, '119.518.753.10', 'Danielly', 'feminino', 'danii@gmail.com', '(85)98447-0567'),
(66, '', '', '', '', ''),
(67, '616.154.703-10', 'Felipe', 'masculino', 'silvahlipe@gmail.com', '(85)98447-0567'),
(68, '119.518.753.10', 'Danielly', 'feminino', 'ml2463265@gmail.com', '(85)98447-0567');

-- --------------------------------------------------------

--
-- Estrutura da tabela `quartos`
--

CREATE TABLE `quartos` (
  `idQuarto` int(11) NOT NULL,
  `andar` int(1) DEFAULT NULL,
  `tipo` varchar(25) DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `situacao` enum('disponivel','indisponivel') DEFAULT NULL,
  `descricao` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `quartos`
--

INSERT INTO `quartos` (`idQuarto`, `andar`, `tipo`, `valor`, `situacao`, `descricao`) VALUES
(1, 1, 'individual', 40, 'disponivel', 'Quarto de 9 metros quadrado, para solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(2, 1, 'individual', 40, 'disponivel', 'Quarto de 9 metros quadrado, para solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(3, 1, 'individual', 40, 'disponivel', 'Quarto de nove metros quadrado, para solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(4, 1, 'individual', 40, 'disponivel', 'Quarto de 9 metros quadrado, para solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(5, 1, 'individual', 40, 'disponivel', 'Quarto de 9 metros quadrado, para solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(6, 1, 'individual', 40, 'disponivel', 'Quarto de 9 metros quadrado, para solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(7, 1, 'individual', 40, 'disponivel', 'Quarto de nove metros quadrado, para solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(8, 1, 'individual', 40, 'disponivel', 'Quarto de 9 metros quadrado, para solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(9, 1, 'individual', 40, 'disponivel', 'Quarto de 9 metros quadrado, para solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(10, 1, 'individual', 40, 'disponivel', 'Quarto de 9 metros quadrado, para solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(11, 1, 'individual', 40, 'disponivel', 'Quarto de 9 metros quadrado, para solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(12, 2, 'individual', 40, 'disponivel', 'Quarto de 9 metros quadrado, para solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(13, 2, 'individual', 40, 'disponivel', 'Quarto de 9 metros quadrado, para solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(14, 1, 'individual', 40, 'disponivel', 'Quarto de 9 metros quadrado, para solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(15, 2, 'individual', 40, 'disponivel', 'Quarto de 9 metros quadrado, para solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(16, 2, 'individual', 40, 'disponivel', 'Quarto de nove metros quadrado, para solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(17, 2, 'individual', 40, 'disponivel', 'Quarto de 9 metros quadrado, para solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(18, 2, 'individual', 40, 'disponivel', 'Quarto de 9 metros quadrado, para solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(19, 3, 'individual', 40, 'disponivel', 'Quarto de 9 metros quadrado, para solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(20, 3, 'individual', 40, 'disponivel', 'Quarto de nove metros quadrado, para solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(21, 3, 'individual', 40, 'disponivel', 'Quarto de 9 metros quadrado, para solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(22, 2, 'duplo_individual', 75, 'disponivel', 'Quarto de 9 metros quadrado, para dupla de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(23, 2, 'duplo_individual', 75, 'disponivel', 'Quarto de 9 metros quadrado, para dupla de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(24, 2, 'duplo_individual', 75, 'disponivel', 'Quarto de 9 metros quadrado, para dupla de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(25, 2, 'duplo_individual', 75, 'disponivel', 'Quarto de 9 metros quadrado, para dupla de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(26, 2, 'duplo_individual', 75, 'disponivel', 'Quarto de 9 metros quadrado, para dupla de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(27, 2, 'duplo_individual', 75, 'disponivel', 'Quarto de 9 metros quadrado, para dupla de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(28, 2, 'duplo_individual', 75, 'disponivel', 'Quarto de 9 metros quadrado, para dupla de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(29, 2, 'duplo_individual', 75, 'disponivel', 'Quarto de 9 metros quadrado, para dupla de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(30, 2, 'duplo_individual', 75, 'disponivel', 'Quarto de 9 metros quadrado, para dupla de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(31, 2, 'duplo_individual', 75, 'disponivel', 'Quarto de 9 metros quadrado, para dupla de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(32, 3, 'duplo_individual', 75, 'disponivel', 'Quarto de 9 metros quadrado, para dupla de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(33, 3, 'duplo_individual', 75, 'disponivel', 'Quarto de 9 metros quadrado, para dupla de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(34, 3, 'duplo_individual', 75, 'disponivel', 'Quarto de 9 metros quadrado, para dupla de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(35, 3, 'duplo_individual', 75, 'disponivel', 'Quarto de 9 metros quadrado, para dupla de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(36, 1, 'duplo_individual', 75, 'disponivel', 'Quarto de nove metros quadrado, para solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(37, 1, 'duplo_individual', 75, 'disponivel', 'Quarto de 9 metros quadrado, para dupla de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(38, 3, 'duplo_individual', 75, 'disponivel', 'Quarto de nove metros quadrado, para solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(39, 1, 'trio_individual', 110, 'disponivel', 'Quarto de 15 metros quadrado, para trio de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(40, 1, 'trio_individual', 110, 'disponivel', 'Quarto de 15 metros quadrado, para trio de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(41, 1, 'trio_individual', 110, 'disponivel', 'Quarto de 15 metros quadrado, para trio de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(42, 2, 'trio_individual', 110, 'disponivel', 'Quarto de 15 metros quadrado, para trio de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(43, 2, 'trio_individual', 110, 'disponivel', 'Quarto de 15 metros quadrado, para trio de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(44, 2, 'trio_individual', 110, 'disponivel', 'Quarto de 15 metros quadrado, para trio de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(45, 2, 'trio_individual', 110, 'disponivel', 'Quarto de 15 metros quadrado, para trio de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(46, 2, 'trio_individual', 110, 'disponivel', 'Quarto de 15 metros quadrado, para trio de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(47, 2, 'trio_individual', 110, 'disponivel', 'Quarto de 15 metros quadrado, para trio de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(48, 3, 'trio_individual', 110, 'disponivel', 'Quarto de 15 metros quadrado, para trio de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(49, 3, 'trio_individual', 110, 'disponivel', 'Quarto de 15 metros quadrado, para trio de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(50, 3, 'trio_individual', 110, 'disponivel', 'Quarto de 15 metros quadrado, para trio de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(51, 4, 'trio_individual', 110, 'disponivel', 'Quarto de 15 metros quadrado, para trio de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(52, 4, 'casal', 70, 'disponivel', 'Quarto de 12 metros quadrado, para casal, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(53, 4, 'casal', 70, 'disponivel', 'Quarto de 12 metros quadrado, para casal, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(54, 4, 'casal', 70, 'disponivel', 'Quarto de 12 metros quadrado, para casal, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(55, 4, 'casal', 70, 'disponivel', 'Quarto de 12 metros quadrado, para casal, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(56, 4, 'casal', 70, 'disponivel', 'Quarto de 12 metros quadrado, para casal, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(57, 4, 'casal', 70, 'disponivel', 'Quarto de 12 metros quadrado, para casal, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(58, 1, 'casal', 70, 'disponivel', 'Quarto de 12 metros quadrado, para casal, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(59, 1, 'casal', 70, 'disponivel', 'Quarto de 12 metros quadrado, para casal, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(60, 3, 'casal', 70, 'disponivel', 'Quarto de 12 metros quadrado, para casal, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(61, 2, 'casal', 70, 'disponivel', 'Quarto de 12 metros quadrado, para casal, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(62, 2, 'casal', 70, 'disponivel', 'Quarto de 12 metros quadrado, para casal, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(63, 2, 'casal', 70, 'disponivel', 'Quarto de 12 metros quadrado, para casal, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(64, 3, 'casal', 70, 'disponivel', 'Quarto de 12 metros quadrado, para casal, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(65, 3, 'casal', 70, 'disponivel', 'Quarto de 12 metros quadrado, para casal, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(66, 1, 'casal', 70, 'disponivel', 'Quarto de 15 metros quadrado, para trio de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(67, 4, 'familia', 200, 'disponivel', 'Quarto de  20 metros quadrado, para um casal e duas camas de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(68, 4, 'familia', 200, 'disponivel', 'Quarto de  20 metros quadrado, para um casal e duas camas de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(69, 4, 'familia', 200, 'disponivel', 'Quarto de  20 metros quadrado, para um casal e duas camas de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(70, 3, 'familia', 200, 'disponivel', 'Quarto de  20 metros quadrado, para um casal e duas camas de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(71, 3, 'familia', 200, 'disponivel', 'Quarto de  20 metros quadrado, para um casal e duas camas de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(72, 3, 'familia', 200, 'disponivel', 'Quarto de  20 metros quadrado, para um casal e duas camas de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(73, 2, 'familia', 200, 'disponivel', 'Quarto de  20 metros quadrado, para um casal e duas camas de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(74, 1, 'familia', 200, 'disponivel', 'Quarto de  20 metros quadrado, para um casal e duas camas de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(75, 2, 'familia', 200, 'disponivel', 'Quarto de  20 metros quadrado, para um casal e duas camas de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(76, 3, 'familia', 200, 'disponivel', 'Quarto de  20 metros quadrado, para um casal e duas camas de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(77, 2, 'familia', 200, 'disponivel', 'Quarto de  20 metros quadrado, para um casal e duas camas de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(78, 1, 'familia', 200, 'disponivel', 'Quarto de  20 metros quadrado, para um casal e duas camas de solteiro, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(79, 2, 'casal', 70, 'disponivel', 'Quarto de 12 metros quadrado, para casal, climatizado, possui um banheiro, televisão e janela para nossa piscina.'),
(80, 1, 'casal', 70, 'disponivel', 'Quarto de 12 metros quadrado, para casal, climatizado, possui um banheiro, televisão e janela para nossa piscina.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

CREATE TABLE `reserva` (
  `idReserva` int(11) NOT NULL,
  `checkin` date DEFAULT NULL,
  `checkout` date DEFAULT NULL,
  `fatura` int(11) DEFAULT NULL,
  `cliente` int(11) DEFAULT NULL,
  `quarto` int(11) DEFAULT NULL,
  `cartao` int(11) DEFAULT NULL,
  `statu` enum('on','off') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `reserva`
--

INSERT INTO `reserva` (`idReserva`, `checkin`, `checkout`, `fatura`, `cliente`, `quarto`, `cartao`, `statu`) VALUES
(13, '2023-05-23', '2023-05-24', 200, 51, 67, 5, 'on'),
(22, '2023-05-23', '2023-05-24', 200, 66, 67, 5, 'on'),
(23, '2023-05-23', '2023-05-24', 200, 67, 67, 11, 'on'),
(24, '2023-05-23', '2023-05-24', 200, 68, 67, 5, 'on');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `credito`
--
ALTER TABLE `credito`
  ADD PRIMARY KEY (`idCredito`),
  ADD KEY `dono` (`dono`);

--
-- Índices para tabela `hospedes`
--
ALTER TABLE `hospedes`
  ADD PRIMARY KEY (`idHospede`);

--
-- Índices para tabela `quartos`
--
ALTER TABLE `quartos`
  ADD PRIMARY KEY (`idQuarto`);

--
-- Índices para tabela `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`idReserva`),
  ADD KEY `cliente` (`cliente`),
  ADD KEY `quarto` (`quarto`),
  ADD KEY `cartao` (`cartao`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `credito`
--
ALTER TABLE `credito`
  MODIFY `idCredito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `hospedes`
--
ALTER TABLE `hospedes`
  MODIFY `idHospede` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de tabela `quartos`
--
ALTER TABLE `quartos`
  MODIFY `idQuarto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de tabela `reserva`
--
ALTER TABLE `reserva`
  MODIFY `idReserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `credito`
--
ALTER TABLE `credito`
  ADD CONSTRAINT `credito_ibfk_1` FOREIGN KEY (`dono`) REFERENCES `hospedes` (`idHospede`);

--
-- Limitadores para a tabela `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`cliente`) REFERENCES `hospedes` (`idHospede`),
  ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`quarto`) REFERENCES `quartos` (`idQuarto`),
  ADD CONSTRAINT `reserva_ibfk_3` FOREIGN KEY (`cartao`) REFERENCES `credito` (`idCredito`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
