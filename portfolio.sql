-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13-Jun-2016 às 23:14
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `certificados`
--

CREATE TABLE IF NOT EXISTS `certificados` (
  `cert_nome` varchar(150) NOT NULL,
  `cert_inst` varchar(150) NOT NULL,
  `cert_durc` varchar(40) NOT NULL,
  `cert_situ` varchar(50) NOT NULL,
  PRIMARY KEY (`cert_nome`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE IF NOT EXISTS `contato` (
  `cont_name` varchar(200) NOT NULL,
  `cont_email` varchar(150) NOT NULL,
  `cont_mensagem` varchar(2400) NOT NULL,
  PRIMARY KEY (`cont_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `experiencia`
--

CREATE TABLE IF NOT EXISTS `experiencia` (
  `expe_empr` varchar(100) NOT NULL,
  `expe_func` varchar(100) NOT NULL,
  `expe_roti` varchar(2400) NOT NULL,
  `expe_mes_inic` decimal(10,0) DEFAULT NULL,
  `expe_ano_inic` decimal(10,0) DEFAULT NULL,
  `expe_mes_fim` decimal(10,0) DEFAULT NULL,
  `expe_ano_fim` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`expe_empr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `formacao`
--

CREATE TABLE IF NOT EXISTS `formacao` (
  `form_nome` varchar(100) NOT NULL,
  `form_inst` varchar(100) NOT NULL,
  `form_peri` decimal(2,0) NOT NULL,
  `form_com` date DEFAULT NULL,
  `form_term` date DEFAULT NULL,
  PRIMARY KEY (`form_nome`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `info_pessoal`
--

CREATE TABLE IF NOT EXISTS `info_pessoal` (
  `info_pes_nome` varchar(50) NOT NULL,
  `info_pes_snome` varchar(50) NOT NULL,
  `info_pes_idade` int(3) DEFAULT NULL,
  `info_pes_rua` varchar(50) DEFAULT NULL,
  `info_pes_num` int(4) DEFAULT NULL,
  `info_pes_cid` varchar(100) DEFAULT NULL,
  `info_pes_est` varchar(20) DEFAULT NULL,
  `info_pes_pais` varchar(10) DEFAULT NULL,
  `info_pes_cep` decimal(10,0) DEFAULT NULL,
  `info_pes_email` varchar(50) DEFAULT NULL,
  `info_pes_tel1` decimal(14,0) DEFAULT NULL,
  `info_pes_tel2` decimal(14,0) DEFAULT NULL,
  PRIMARY KEY (`info_pes_nome`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `info_pessoal`
--

INSERT INTO `info_pessoal` (`info_pes_nome`, `info_pes_snome`, `info_pes_idade`, `info_pes_rua`, `info_pes_num`, `info_pes_cid`, `info_pes_est`, `info_pes_pais`, `info_pes_cep`, `info_pes_email`, `info_pes_tel1`, `info_pes_tel2`) VALUES
('Raabe', 'Sampaio', 20, 'XXXXX', 999, 'Guarulhos', 'São Paulo', 'Brasil', '99999999', 'raabe.13@hotmail.com', '999999999999', '9999999999');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `logi_user` varchar(20) NOT NULL,
  `logi_pass` varchar(20) NOT NULL,
  PRIMARY KEY (`logi_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`logi_user`, `logi_pass`) VALUES
('rssampaio', 'lurds1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
