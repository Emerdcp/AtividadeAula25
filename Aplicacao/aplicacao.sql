-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Mar-2023 às 02:14
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_cliente`
--

CREATE TABLE `cad_cliente` (
  `cli_cpf` int(11) DEFAULT NULL,
  `cli_nome` varchar(150) NOT NULL,
  `cli_endereco` varchar(150) NOT NULL,
  `cli_numero` int(11) NOT NULL,
  `cli_bairro` varchar(100) NOT NULL,
  `cli_cidade` varchar(100) NOT NULL,
  `cli_estado` varchar(50) NOT NULL,
  `cli_email` varchar(150) NOT NULL,
  `cli_telefone` int(11) NOT NULL,
  `cli_senha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cad_cliente`
--

INSERT INTO `cad_cliente` (`cli_cpf`, `cli_nome`, `cli_endereco`, `cli_numero`, `cli_bairro`, `cli_cidade`, `cli_estado`, `cli_email`, `cli_telefone`, `cli_senha`) VALUES
(123, 'Emerson', 'Rua da Igualdade', 239, 'Jardim da Paz', 'Americana', 'São Paulo', 'emerson@hotmail.com', 2147483647, 123),
(1234, 'kadu', 'Rua da Igualdade', 239, 'Jardim da Paz', 'Americana', 'Paraná', 'emerson@hotmail.com', 2147483647, 123),
(12345, 'Eduardo ', 'Rua da Igualdade', 239, 'Jardim da Paz', 'Americana', 'São Paulo', 'emerson@hotmail.com', 2147483647, 123);

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
('Samsung A72', 'Celular', 1, 1500, 1800);

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
