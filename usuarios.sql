-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Mar-2022 às 15:43
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `endereco` varchar(70) NOT NULL,
  `numero` varchar(7) NOT NULL,
  `bairro` varchar(60) NOT NULL,
  `cidade` varchar(60) NOT NULL,
  `estado` varchar(60) NOT NULL,
  `cep` int(11) NOT NULL,
  `cnpj` int(11) NOT NULL,
  `email` varchar(90) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `telefone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `cnpj`, `email`, `password`, `status`, `data`, `telefone`) VALUES
(16, 'teste', 'teste', '123', 'teste', 'teste', 'teste', 213213, 312321, 'teste@teste.com', 'aa1bf4646de67fd9086cf6c79007026c', 1, '2022-03-04', ''),
(17, 'admin', 'adminadmin', '123', 'admin', 'adminadmin', 'SP', 123231, 132213, 'admin@admin.com', '0192023a7bbd73250516f069df18b500', 1, '2022-03-04', '1321321321'),
(18, 'admin', 'adminadmin', '123', 'admin', 'adminadmin', 'SP', 123231, 132213, 'admin@admin.com', '0192023a7bbd73250516f069df18b500', 1, '2022-03-04', '1321321321');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
