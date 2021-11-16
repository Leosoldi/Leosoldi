-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Nov-2021 às 21:42
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `transvirtus_com_br`
--
CREATE DATABASE IF NOT EXISTS `transvirtus_com_br` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `transvirtus_com_br`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivos`
--

CREATE TABLE `arquivos` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `nome_arquivo` varchar(220) NOT NULL,
  `proprietario` varchar(200) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `arquivos`
--

INSERT INTO `arquivos` (`id`, `nome`, `nome_arquivo`, `proprietario`, `data`) VALUES
(69, 'relatorio', 'acesso-alert.txt', 'leonardo97', '2021-11-01 18:11:28'),
(70, 'Comprovante de Pagamento', 'certificado.pdf', 'ireno21', '2021-11-01 20:57:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato_msg`
--

CREATE TABLE `contato_msg` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` int(40) NOT NULL,
  `assunto` varchar(100) NOT NULL,
  `mensagem` text NOT NULL,
  `criado` datetime NOT NULL,
  `modificado` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contato_msg`
--

INSERT INTO `contato_msg` (`id`, `nome`, `email`, `telefone`, `assunto`, `mensagem`, `criado`, `modificado`) VALUES
(17, 'Leonardo', 'leo.soldi1997@gmail.com', 2147483647, 'teste', 'teste', '0000-00-00 00:00:00', NULL),
(18, 'Leonardo', 'leo.soldi1997@gmail.com', 2147483647, 'teste', 'teste', '0000-00-00 00:00:00', NULL),
(19, 'Leonardo', 'leo.soldi1997@gmail.com', 2147483647, 'teste', 'teste', '0000-00-00 00:00:00', NULL),
(20, 'Leonardo', 'leo.soldi1997@gmail.com', 2147483647, 'teste', 'teste', '0000-00-00 00:00:00', NULL),
(21, 'Leonardo', 'leo.soldi1997@gmail.com', 2147483647, 'teste', 'teste', '0000-00-00 00:00:00', NULL),
(22, 'Leonardo', 'leo.soldi1997@gmail.com', 2147483647, 'teste', 'teste', '0000-00-00 00:00:00', NULL),
(23, 'Leonardo', 'leo.soldi1997@gmail.com', 2147483647, 'teste', 'teste', '0000-00-00 00:00:00', NULL),
(24, 'Leonardo', 'leo.soldi1997@gmail.com', 2147483647, 'teste', 'teste', '0000-00-00 00:00:00', NULL),
(25, 'Leonardo Soldi', 'leo.soldi1997@gmail.com', 2147483647, 'teste', 'teste da txt mensagem\r\n', '0000-00-00 00:00:00', NULL),
(26, 'Leonardo Soldi', 'leo.soldi1997@gmail.com', 2147483647, 'teste', 'teste da txt mensagem\r\n', '0000-00-00 00:00:00', NULL),
(27, 'Leonardo Soldi', 'leo.soldi1997@gmail.com', 2147483647, 'teste', 'teste da txt mensagem\r\n', '0000-00-00 00:00:00', NULL),
(28, 'Leonardo Soldi', 'leo.soldi1997@gmail.com', 2147483647, 'Teste assunto', 'teste mensagem txt', '0000-00-00 00:00:00', NULL),
(29, 'Leonardo', 'leo.soldi1997@gmail.com', 2147483647, 'assunto aqui', 'mensagem aqui', '0000-00-00 00:00:00', NULL),
(30, 'Leonardo', 'leo.soldi1997@gmail.com', 85233916, 'teste', 'mixingadm.com.brmixingadm.com.brmixingadm.com.brmixingadm.com.brmixingadm.com.brmixingadm.com.brmixingadm.com.brmixingadm.com.brmixingadm.com.br', '0000-00-00 00:00:00', NULL),
(31, 'Leonardo', 'leo.soldi1997@gmail.com', 85233916, 'tswertger', 'sdgfsdgfs', '0000-00-00 00:00:00', NULL),
(32, 'Leonardo', 'leo.soldi1997@gmail.com', 85233916, 'teste', 'sdfgdsg', '0000-00-00 00:00:00', NULL),
(33, 'Leonardo', 'leo.soldi1997@gmail.com', 85233916, 'teste', 'sdfgdsg', '0000-00-00 00:00:00', NULL),
(34, 'Loonardo Soldi', 'leo.soldi1997@gmail.com', 2147483647, 'Intesse', 'quero saber mais', '0000-00-00 00:00:00', NULL),
(35, 'leonardo soldi', 'leo.soldi1997@gmail.com', 2147483647, 'Tenho interesse no produto', 'teste', '0000-00-00 00:00:00', NULL),
(36, 'teste', 'leo.soldi1997@gmail.com', 2147483647, 'teste', 'teswte', '0000-00-00 00:00:00', NULL),
(37, 'Leonardo Soldi', 'leo.soldi1997@gmail.com', 2147483647, 'interess', 'tenho interesse no seu produto ', '0000-00-00 00:00:00', NULL),
(38, 'leonardo', 'correiosistema97@gmail.com', 2147483647, 'tenho interesse', 'quero adquirir  o produto', '0000-00-00 00:00:00', NULL),
(39, '', '', 0, '', '', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usr_usuarios`
--

CREATE TABLE `usr_usuarios` (
  `id` int(11) NOT NULL,
  `login` varchar(40) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `nivel` int(10) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `login` varchar(40) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `nivel` int(10) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `nome`, `email`, `senha`, `nivel`, `data`) VALUES
(1, 'leonardo97', 'leonardo soldi', 'leo.soldi1997@gmail.com', 'a24e1b300b21614139a7a937eea8c5fc', 1, '2021-11-03 13:26:29');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `arquivos`
--
ALTER TABLE `arquivos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contato_msg`
--
ALTER TABLE `contato_msg`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `arquivos`
--
ALTER TABLE `arquivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de tabela `contato_msg`
--
ALTER TABLE `contato_msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
