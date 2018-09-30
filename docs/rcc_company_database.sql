-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Set-2018 às 20:33
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rcc_company_database`
--
DROP DATABASE IF EXISTS rcc_company_database;

CREATE DATABASE rcc_company_database;
USE rcc_company_database;

-- --------------------------------------------------------

--
-- Criação de um novo username para a base de dados + permissões totais à mesma
--
DROP USER IF EXISTS 'rcc_company_user'@'localhost';

CREATE USER 'rcc_company_user'@'localhost' IDENTIFIED BY 'company_user_passwd';
GRANT ALL PRIVILEGES ON * . * TO 'rcc_company_user'@'localhost';

-- --------------------------------------------------------

--
-- Estrutura da tabela `access_for_type`
--

CREATE TABLE `access_for_type` (
  `pk_company_position` bigint(20) UNSIGNED NOT NULL,
  `pk_access` bigint(20) UNSIGNED NOT NULL,
  `pk_pages` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `class_type`
--

CREATE TABLE `class_type` (
  `pk_class_type` bigint(20) UNSIGNED NOT NULL,
  `designation` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `company`
--

CREATE TABLE `company` (
  `pk_company` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(40) NOT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `is_in_maint` tinyint(1) DEFAULT NULL,
  `initials` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `company_position`
--

CREATE TABLE `company_position` (
  `pk_company_position` bigint(20) UNSIGNED NOT NULL,
  `pk_company` bigint(20) UNSIGNED NOT NULL,
  `pk_user` bigint(20) UNSIGNED DEFAULT NULL,
  `position_designation` varchar(30) NOT NULL,
  `is_valid` tinyint(1) DEFAULT NULL,
  `start_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `correcoes_script`
--

CREATE TABLE `correcoes_script` (
  `pk_user` bigint(20) UNSIGNED NOT NULL,
  `pk_scripts` bigint(20) UNSIGNED NOT NULL,
  `pk_correcoes_script` bigint(20) UNSIGNED NOT NULL,
  `post_date` datetime NOT NULL,
  `corrections` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `pk_eventos` bigint(20) UNSIGNED NOT NULL,
  `pk_company` bigint(20) UNSIGNED NOT NULL,
  `pk_user` bigint(20) UNSIGNED NOT NULL,
  `begin_date` datetime NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_body` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `medalhas`
--

CREATE TABLE `medalhas` (
  `pk_medalhas` bigint(20) UNSIGNED NOT NULL,
  `pk_class_type` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `medalhas_user`
--

CREATE TABLE `medalhas_user` (
  `pk_user` bigint(20) UNSIGNED NOT NULL,
  `pk_medalhas` bigint(20) UNSIGNED NOT NULL,
  `post_date` datetime NOT NULL,
  `pk_medalhas_user` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pages`
--

CREATE TABLE `pages` (
  `pk_pages` bigint(20) UNSIGNED NOT NULL,
  `route_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `pk_user` bigint(20) UNSIGNED NOT NULL,
  `pk_scripts` bigint(20) UNSIGNED NOT NULL,
  `post_date` datetime NOT NULL,
  `militares` text NOT NULL,
  `pk_posts` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `projetos`
--

CREATE TABLE `projetos` (
  `pk_projetos` bigint(20) UNSIGNED NOT NULL,
  `pk_project_result` bigint(20) UNSIGNED NOT NULL,
  `pk_company` bigint(20) UNSIGNED NOT NULL,
  `pk_user` bigint(20) UNSIGNED NOT NULL,
  `project_title` varchar(100) NOT NULL,
  `project_body` text NOT NULL,
  `post_date` datetime NOT NULL,
  `voted_date` datetime DEFAULT NULL,
  `responsible` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `scripts`
--

CREATE TABLE `scripts` (
  `pk_scripts` bigint(20) UNSIGNED NOT NULL,
  `pk_company` bigint(20) UNSIGNED NOT NULL,
  `script_name` varchar(60) NOT NULL,
  `script_body` text NOT NULL,
  `pk_class_type` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `type_result_project`
--

CREATE TABLE `type_result_project` (
  `pk_project_result` bigint(20) UNSIGNED NOT NULL,
  `project_designation` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `type_user`
--

CREATE TABLE `type_user` (
  `pk_type_user` bigint(20) UNSIGNED NOT NULL,
  `type_designation` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `pk_user` bigint(20) UNSIGNED NOT NULL,
  `pk_type_user` bigint(20) UNSIGNED NOT NULL,
  `nickname` varchar(80) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `is_ban` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `warnings`
--

CREATE TABLE `warnings` (
  `pk_warnings` bigint(20) NOT NULL,
  `post_date` datetime NOT NULL,
  `pk_user` int(11) DEFAULT NULL,
  `warning_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_for_type`
--
ALTER TABLE `access_for_type`
  ADD PRIMARY KEY (`pk_company_position`,`pk_access`,`pk_pages`),
  ADD UNIQUE KEY `pk_access` (`pk_access`),
  ADD UNIQUE KEY `pk_access_2` (`pk_access`),
  ADD KEY `pk_pages` (`pk_pages`);

--
-- Indexes for table `class_type`
--
ALTER TABLE `class_type`
  ADD PRIMARY KEY (`pk_class_type`),
  ADD UNIQUE KEY `pk_class_type` (`pk_class_type`),
  ADD UNIQUE KEY `pk_class_type_2` (`pk_class_type`),
  ADD UNIQUE KEY `designation` (`designation`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`pk_company`),
  ADD UNIQUE KEY `pk_company` (`pk_company`),
  ADD UNIQUE KEY `pk_company_2` (`pk_company`),
  ADD UNIQUE KEY `company_name` (`company_name`);

--
-- Indexes for table `company_position`
--
ALTER TABLE `company_position`
  ADD PRIMARY KEY (`pk_company_position`),
  ADD UNIQUE KEY `pk_company_position` (`pk_company_position`),
  ADD UNIQUE KEY `pk_company_position_2` (`pk_company_position`),
  ADD KEY `pk_user` (`pk_user`),
  ADD KEY `pk_company` (`pk_company`);

--
-- Indexes for table `correcoes_script`
--
ALTER TABLE `correcoes_script`
  ADD PRIMARY KEY (`pk_user`,`pk_scripts`,`pk_correcoes_script`),
  ADD UNIQUE KEY `pk_correcoes_script` (`pk_correcoes_script`),
  ADD UNIQUE KEY `pk_correcoes_script_2` (`pk_correcoes_script`),
  ADD KEY `pk_scripts` (`pk_scripts`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`pk_eventos`),
  ADD UNIQUE KEY `pk_eventos` (`pk_eventos`),
  ADD UNIQUE KEY `pk_eventos_2` (`pk_eventos`),
  ADD KEY `pk_user` (`pk_user`),
  ADD KEY `pk_company` (`pk_company`);

--
-- Indexes for table `medalhas`
--
ALTER TABLE `medalhas`
  ADD PRIMARY KEY (`pk_medalhas`),
  ADD UNIQUE KEY `pk_medalhas` (`pk_medalhas`),
  ADD UNIQUE KEY `pk_medalhas_2` (`pk_medalhas`),
  ADD KEY `pk_class_type` (`pk_class_type`);

--
-- Indexes for table `medalhas_user`
--
ALTER TABLE `medalhas_user`
  ADD PRIMARY KEY (`pk_user`,`pk_medalhas`,`pk_medalhas_user`),
  ADD UNIQUE KEY `pk_medalhas_user` (`pk_medalhas_user`),
  ADD UNIQUE KEY `pk_medalhas_user_2` (`pk_medalhas_user`),
  ADD KEY `pk_medalhas` (`pk_medalhas`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`pk_pages`),
  ADD UNIQUE KEY `pk_pages` (`pk_pages`),
  ADD UNIQUE KEY `pk_pages_2` (`pk_pages`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`pk_user`,`pk_scripts`,`pk_posts`),
  ADD UNIQUE KEY `pk_posts` (`pk_posts`),
  ADD UNIQUE KEY `pk_posts_2` (`pk_posts`),
  ADD KEY `pk_scripts` (`pk_scripts`);

--
-- Indexes for table `projetos`
--
ALTER TABLE `projetos`
  ADD PRIMARY KEY (`pk_projetos`),
  ADD UNIQUE KEY `pk_projetos` (`pk_projetos`),
  ADD UNIQUE KEY `pk_projetos_2` (`pk_projetos`),
  ADD UNIQUE KEY `project_title` (`project_title`),
  ADD KEY `pk_user` (`pk_user`),
  ADD KEY `pk_company` (`pk_company`),
  ADD KEY `pk_project_result` (`pk_project_result`);

--
-- Indexes for table `scripts`
--
ALTER TABLE `scripts`
  ADD PRIMARY KEY (`pk_scripts`),
  ADD UNIQUE KEY `pk_scripts` (`pk_scripts`),
  ADD UNIQUE KEY `pk_scripts_2` (`pk_scripts`),
  ADD UNIQUE KEY `script_name` (`script_name`),
  ADD KEY `pk_company` (`pk_company`),
  ADD KEY `pk_class_type` (`pk_class_type`);

--
-- Indexes for table `type_result_project`
--
ALTER TABLE `type_result_project`
  ADD PRIMARY KEY (`pk_project_result`),
  ADD UNIQUE KEY `pk_project_result` (`pk_project_result`),
  ADD UNIQUE KEY `pk_project_result_2` (`pk_project_result`);

--
-- Indexes for table `type_user`
--
ALTER TABLE `type_user`
  ADD PRIMARY KEY (`pk_type_user`),
  ADD UNIQUE KEY `pk_type_user` (`pk_type_user`),
  ADD UNIQUE KEY `pk_type_user_2` (`pk_type_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`pk_user`),
  ADD UNIQUE KEY `pk_user` (`pk_user`),
  ADD UNIQUE KEY `pk_user_2` (`pk_user`),
  ADD KEY `pk_type_user` (`pk_type_user`);

--
-- Indexes for table `warnings`
--
ALTER TABLE `warnings`
  ADD PRIMARY KEY (`pk_warnings`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_for_type`
--
ALTER TABLE `access_for_type`
  MODIFY `pk_access` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_type`
--
ALTER TABLE `class_type`
  MODIFY `pk_class_type` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `pk_company` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_position`
--
ALTER TABLE `company_position`
  MODIFY `pk_company_position` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `correcoes_script`
--
ALTER TABLE `correcoes_script`
  MODIFY `pk_correcoes_script` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `pk_eventos` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medalhas`
--
ALTER TABLE `medalhas`
  MODIFY `pk_medalhas` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medalhas_user`
--
ALTER TABLE `medalhas_user`
  MODIFY `pk_medalhas_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `pk_pages` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `pk_posts` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projetos`
--
ALTER TABLE `projetos`
  MODIFY `pk_projetos` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scripts`
--
ALTER TABLE `scripts`
  MODIFY `pk_scripts` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type_result_project`
--
ALTER TABLE `type_result_project`
  MODIFY `pk_project_result` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type_user`
--
ALTER TABLE `type_user`
  MODIFY `pk_type_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `pk_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `warnings`
--
ALTER TABLE `warnings`
  MODIFY `pk_warnings` bigint(20) NOT NULL AUTO_INCREMENT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- --------------------------------------------------------

--
-- Dados iniciais a serem inseridos
--

INSERT INTO company (company_name, is_active, is_in_maint, initials)
VALUES
("Companhia de Instrução", "1", "1", "INS"),
("Escola de Formação do Corpo Executivo", "1", "1", "EFE"),
("Companhia de Supervisores de Promoção", "1", "1", "SUP"),
("Companhia de Treinadores", "1", "1", "TRE"),
("Companhia de Professores", "1", "1", "PROF"),
("Companhia de Rondeiros", "1", "1", "ROND");


INSERT INTO company_position (pk_company, position_designation, is_valid, start_date, updated_date)
VALUES
(1, "Aprendiz", 1, NOW(), NOW()),
(1, "Instrutor", 1, NOW(), NOW()),
(1, "Graduador", 1, NOW(), NOW()),
(1, "Avaliador", 1, NOW(), NOW()),
(1, "Estagiário", 1, NOW(), NOW()),
(1, "Ministro", 1, NOW(), NOW()),
(1, "Vice-líder", 1, NOW(), NOW()),
(1, "Líder", 1, NOW(), NOW()),

(2, "Professor", 1, NOW(), NOW()),
(2, "Capacitador", 1, NOW(), NOW()),
(2, "Graduador", 1, NOW(), NOW()),
(2, "Ministro", 1, NOW(), NOW()),
(2, "Vice-líder", 1, NOW(), NOW()),
(2, "Líder", 1, NOW(), NOW()),

(3, "Supervisor", 1, NOW(), NOW()),
(3, "Tutor", 1, NOW(), NOW()),
(3, "Fiscalizador", 1, NOW(), NOW()),
(3, "Graduador", 1, NOW(), NOW()),
(3, "Ministro", 1, NOW(), NOW()),
(3, "Vice-líder", 1, NOW(), NOW()),
(3, "Líder", 1, NOW(), NOW()),

(4, "Treinador Nível I", 1, NOW(), NOW()),
(4, "Treinador Nível II", 1, NOW(), NOW()),
(4, "Treinador Nível III", 1, NOW(), NOW()),
(4, "Graduador", 1, NOW(), NOW()),
(4, "Ministério", 1, NOW(), NOW()),
(4, "Vice-líder", 1, NOW(), NOW()),
(4, "Líder", 1, NOW(), NOW()),

(5, "Professor/Coordenador", 1, NOW(), NOW()),
(5, "Monitor", 1, NOW(), NOW()),
(5, "Graduador", 1, NOW(), NOW()),
(5, "Estagiário", 1, NOW(), NOW()),
(5, "Conselho", 1, NOW(), NOW()),
(5, "Vice-líder", 1, NOW(), NOW()),
(5, "Líder", 1, NOW(), NOW()),

(6, "Organizador de ronda", 1, NOW(), NOW()),
(6, "Capacitador", 1, NOW(), NOW()),
(6, "Graduador", 1, NOW(), NOW()),
(6, "Estagiário", 1, NOW(), NOW()),
(6, "Ministro", 1, NOW(), NOW()),
(6, "Vice-líder", 1, NOW(), NOW()),
(6, "Líder", 1, NOW(), NOW());

INSERT INTO type_user (type_designation)
VALUES
("member_in_company"),
("superuser"),
("ban_user");

INSERT INTO type_result_project (project_designation)
VALUES
("APPROVED"),
("PENDING"),
("NEGATED"),
("APPROVED_WITH_ALTERATIONS");

COMMIT;
