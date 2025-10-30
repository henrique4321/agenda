-- phpMyAdmin SQL Dump
-- version 5.1.4-dev+20220429.6af017a6ad
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Out-2025
-- Versão do servidor: 10.4.24-MariaDB
-- Versão do PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
 /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
 /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 /*!40101 SET NAMES utf8mb4 */;

-- Banco de dados: `petshop`
DROP DATABASE IF EXISTS petshop;
CREATE DATABASE petshop;
USE petshop;

-- --------------------------------------------------------
-- Estrutura da tabela `atendimento`
-- --------------------------------------------------------
CREATE TABLE `atendimento` (
  `id` INT(11) NOT NULL,
  `cachorro` VARCHAR(255) DEFAULT NULL,
  `contato` VARCHAR(20) DEFAULT NULL,
  `raca` VARCHAR(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Inserindo dados de exemplo
-- --------------------------------------------------------
INSERT INTO `atendimento` (`id`, `cachorro`, `contato`, `raca`) VALUES
(1, 'Thor', '11999998888', 'Labrador'),
(2, 'Mel', '(11)98888-7777', 'Poodle'),
(3, 'Rex', '11987654321', 'Bulldog');

-- --------------------------------------------------------
-- Índices para tabela `atendimento`
-- --------------------------------------------------------
ALTER TABLE `atendimento`
  ADD PRIMARY KEY (`id`);

-- --------------------------------------------------------
-- AUTO_INCREMENT da tabela `atendimento`
-- --------------------------------------------------------
ALTER TABLE `atendimento`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
 /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
 /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
