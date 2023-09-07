-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Set-2023 às 17:49
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `integrador`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `IDCLIENTE` int(20) NOT NULL,
  `NOME` varchar(100) NOT NULL,
  `SEXO` enum('F','M') DEFAULT NULL,
  `EMAIL` varchar(30) DEFAULT NULL,
  `CPF` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`IDCLIENTE`, `NOME`, `SEXO`, `EMAIL`, `CPF`) VALUES
(1, 'DARIO', 'M', 'dario@gmail.com', '99999'),
(2, 'JOAO', 'M', 'TETTETRTE@GMAIL.COM', '989898998'),
(3, 'CARLOS', 'M', 'maria@gmail.com', '767656767'),
(4, 'Marta', 'F', 'marta@gmail.com', '3232323232'),
(5, 'CLARA', 'F', NULL, '5687766856'),
(6, '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `IDENDERECO` int(11) NOT NULL,
  `RUA` varchar(30) NOT NULL,
  `BAIRRO` varchar(30) NOT NULL,
  `CIDADE` varchar(30) NOT NULL,
  `ESTADO` char(2) NOT NULL,
  `ID_CLIENTE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`IDENDERECO`, `RUA`, `BAIRRO`, `CIDADE`, `ESTADO`, `ID_CLIENTE`) VALUES
(1, 'RUA 1111', 'bairro 1', 'cidade 1', 'rj', 1),
(2, 'rua 2', 'bairro 2', 'cidade 2', 'sp', 2),
(3, 'rua 3', 'bairro 3', 'cidade 3', 'pr', 3),
(4, 'rua 4', 'bairro 4', 'cidade 4', 'sc', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone`
--

CREATE TABLE `telefone` (
  `IDTELEFONE` int(11) NOT NULL,
  `TIPO` enum('RES','COM','CEL') NOT NULL,
  `NUMERO` varchar(10) NOT NULL,
  `ID_CLIENTE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `telefone`
--

INSERT INTO `telefone` (`IDTELEFONE`, `TIPO`, `NUMERO`, `ID_CLIENTE`) VALUES
(1, 'RES', '8787686788', 1),
(2, 'COM', '656565665', 2),
(3, 'RES', '7657657575', 3),
(4, 'CEL', '9789897978', 4),
(5, 'CEL', '97989879', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `myusername` varchar(50) NOT NULL,
  `passcode` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `myusername`, `passcode`) VALUES
(1, 'administrador', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(5, 'Dario', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`IDCLIENTE`);

--
-- Índices para tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`IDENDERECO`),
  ADD UNIQUE KEY `ID_CLIENTE` (`ID_CLIENTE`);

--
-- Índices para tabela `telefone`
--
ALTER TABLE `telefone`
  ADD PRIMARY KEY (`IDTELEFONE`),
  ADD KEY `ID_CLIENTE` (`ID_CLIENTE`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `myusername` (`myusername`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `IDCLIENTE` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `IDENDERECO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `telefone`
--
ALTER TABLE `telefone`
  MODIFY `IDTELEFONE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `endereco_ibfk_1` FOREIGN KEY (`ID_CLIENTE`) REFERENCES `cliente` (`IDCLIENTE`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `telefone`
--
ALTER TABLE `telefone`
  ADD CONSTRAINT `telefone_ibfk_1` FOREIGN KEY (`ID_CLIENTE`) REFERENCES `cliente` (`IDCLIENTE`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
