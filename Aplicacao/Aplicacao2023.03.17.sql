-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Mar-2023 às 02:11
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
-- Banco de dados: `aplicacao`
--
CREATE DATABASE IF NOT EXISTS `aplicacao` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `aplicacao`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_cliente`
--

CREATE TABLE `cad_cliente` (
  `cli_cpf` varchar(14) DEFAULT NULL,
  `cli_nome` varchar(150) NOT NULL,
  `cli_endereco` varchar(150) NOT NULL,
  `cli_numero` int(11) NOT NULL,
  `cli_bairro` varchar(100) NOT NULL,
  `cli_cidade` varchar(100) NOT NULL,
  `cli_estado` varchar(50) NOT NULL,
  `cli_email` varchar(150) NOT NULL,
  `cli_telefone` varchar(14) NOT NULL,
  `cli_senha` varchar(100) NOT NULL,
  `cli_foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cad_cliente`
--

INSERT INTO `cad_cliente` (`cli_cpf`, `cli_nome`, `cli_endereco`, `cli_numero`, `cli_bairro`, `cli_cidade`, `cli_estado`, `cli_email`, `cli_telefone`, `cli_senha`, `cli_foto`) VALUES
('123456789', 'Emerson', 'Rua da Igualdade', 239, 'Jardim da Paz', 'Americana', 'Santa Catarina', 'emerson@hotmail.com', '2147483647', '202cb962ac59075b964b07152d234b70', ''),
('360.673.818-85', 'Emerson de Carvalho', 'Via Francisco Boldrini', 100, 'Jardim Recanto', 'Americana', 'São Paulo', 'emersoncarvalho@hotmail.com.br', '(19) 9810-8238', '202cb962ac59075b964b07152d234b70', '1679098597.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_produtos`
--

CREATE TABLE `cad_produtos` (
  `prod_nome` varchar(150) NOT NULL,
  `prod_categoria` varchar(100) NOT NULL,
  `prod_quant` double NOT NULL,
  `prod_precocompra` double NOT NULL,
  `prod_precovenda` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cad_produtos`
--

INSERT INTO `cad_produtos` (`prod_nome`, `prod_categoria`, `prod_quant`, `prod_precocompra`, `prod_precovenda`) VALUES
('Samsung A52', 'Celular', 1, 1200, 1500),
('Samsung A53', 'Celular', 1, 120000, 150000),
('Samsung A72', 'Celular', 1, 150000, 180000),
('Samsung A72', 'Celular', 1, 1500, 1800),
('Samsung', 'Celular', 1, 1250, 1000),
('Samsung A32', 'Celular', 1, 1250, 1000),
('Samsung A72', 'Celular', 3, 12222, 123121),
('Carrinho de Controle', 'Brinquedo', 50, 39.99, 69.99);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cad_cliente`
--
ALTER TABLE `cad_cliente`
  ADD UNIQUE KEY `cad_cpf` (`cli_cpf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
