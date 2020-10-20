-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Out-2020 às 04:25
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `erise`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_store`
--

CREATE TABLE `tab_store` (
  `store_id` int(11) NOT NULL,
  `store_name` varchar(60) NOT NULL,
  `store_cnpj` varchar(18) NOT NULL,
  `store_email` varchar(120) NOT NULL,
  `store_tel` varchar(15) NOT NULL,
  `store_corporatename` varchar(100) NOT NULL,
  `store_status` varchar(1) NOT NULL,
  `store_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_store_address`
--

CREATE TABLE `tab_store_address` (
  `store_address_id` int(11) NOT NULL,
  `store_address_street` varchar(120) DEFAULT NULL,
  `store_address_cep` varchar(8) DEFAULT NULL,
  `store_address_number` varchar(10) DEFAULT NULL,
  `store_address_complement` varchar(120) DEFAULT NULL,
  `store_address_neighborhood` varchar(100) DEFAULT NULL,
  `store_address_city` varchar(60) DEFAULT NULL,
  `store_address_uf` varchar(4) DEFAULT NULL,
  `store_store_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_user`
--

CREATE TABLE `tab_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(60) NOT NULL,
  `user_email` varchar(120) NOT NULL,
  `user_cpf` varchar(45) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tab_store`
--
ALTER TABLE `tab_store`
  ADD PRIMARY KEY (`store_id`);

--
-- Índices para tabela `tab_store_address`
--
ALTER TABLE `tab_store_address`
  ADD PRIMARY KEY (`store_address_id`);

--
-- Índices para tabela `tab_user`
--
ALTER TABLE `tab_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tab_store`
--
ALTER TABLE `tab_store`
  MODIFY `store_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tab_store_address`
--
ALTER TABLE `tab_store_address`
  MODIFY `store_address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tab_user`
--
ALTER TABLE `tab_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
