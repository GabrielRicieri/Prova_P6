-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Set-2020 às 01:27
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agencia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimentos`
--

CREATE TABLE `atendimentos` (
  `ID` int(11) NOT NULL,
  `NOME` int(150) NOT NULL,
  `TELEFONE` varchar(50) NOT NULL,
  `ATIVIDADE` varchar(50) NOT NULL,
  `REGISTRO` datetime NOT NULL,
  `ATENDIMENTO` datetime NOT NULL,
  `STATUS` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `atendimentos`
--

INSERT INTO `atendimentos` (`ID`, `NOME`, `TELEFONE`, `ATIVIDADE`, `REGISTRO`, `ATENDIMENTO`, `STATUS`) VALUES
(19, 123, '123', 'MudanÃ§a de EndereÃ§o', '2020-09-23 01:09:07', '2020-09-23 01:09:43', 'atendido'),
(20, 123, '123', 'SuspensÃ£o do ServiÃ§o', '2020-09-23 01:09:53', '0000-00-00 00:00:00', 'cancelado'),
(21, 0, 'dfsfsd', 'SuspensÃ£o do ServiÃ§o', '2020-09-23 01:09:01', '2020-09-23 01:09:04', 'atendido'),
(22, 0, '', 'Segunda Via de Conta', '2020-09-23 01:09:21', '2020-09-23 01:09:16', 'atendido'),
(23, 0, '123', 'SuspensÃ£o do ServiÃ§o', '2020-09-23 01:09:26', '0000-00-00 00:00:00', 'cancelado'),
(24, 123, '123', 'MudanÃ§a de EndereÃ§o', '2020-09-23 01:09:09', '2020-09-23 01:09:13', 'atendido');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `atendimentos`
--
ALTER TABLE `atendimentos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atendimentos`
--
ALTER TABLE `atendimentos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
