-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Iul 2015 la 20:34
-- Versiune server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `our_engine_final`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `ods_sys_config`
--

CREATE TABLE IF NOT EXISTS `ods_sys_config` (
`id` int(10) unsigned NOT NULL,
  `alias` varchar(255) NOT NULL,
  `conf` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Salvarea datelor din tabel `ods_sys_config`
--

INSERT INTO `ods_sys_config` (`id`, `alias`, `conf`) VALUES
(1, 'admin_email', 'admin@admin.com'),
(2, 'produse_per_pagina', '25');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `ods_sys_inscript`
--

CREATE TABLE IF NOT EXISTS `ods_sys_inscript` (
`id` int(10) unsigned NOT NULL,
  `alias` varchar(255) NOT NULL,
  `ro` text,
  `ru` text,
  `en` text,
  `bg` text,
  `ukr` text
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='system table different inscription';

--
-- Salvarea datelor din tabel `ods_sys_inscript`
--

INSERT INTO `ods_sys_inscript` (`id`, `alias`, `ro`, `ru`, `en`, `bg`, `ukr`) VALUES
(1, 'SAVE', 'salvează', 'сохранити', 'done', 'bg_save', 'ukr_save'),
(2, 'DONE', 'terminat', 'готово', 'done', 'bg_done', 'ukr_done'),
(3, 'home', 'Acasă', 'Главная', '', '', '');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `ods_sys_messages`
--

CREATE TABLE IF NOT EXISTS `ods_sys_messages` (
`id` int(10) unsigned NOT NULL,
  `alias` varchar(255) NOT NULL,
  `ro` varchar(255) DEFAULT NULL,
  `ru` varchar(255) DEFAULT NULL,
  `en` varchar(255) DEFAULT NULL,
  `bg` varchar(255) DEFAULT NULL,
  `ukr` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='system table';

--
-- Salvarea datelor din tabel `ods_sys_messages`
--

INSERT INTO `ods_sys_messages` (`id`, `alias`, `ro`, `ru`, `en`, `bg`, `ukr`) VALUES
(1, 'login_success', '<h2 style="font-style:italic"><span style="font-family:comic sans ms,cursive"><span style="background-color:#FFD700">va-ți logat cu success! cmiourilor</span></span></h2>', '<p><span class="marker">вы успешно залогинились</span></p>', '<p>login success</p>', '<p>bg_login success</p>', ''),
(2, 'logout_success', '<h3><strong><cite><span style="color:#FF0000"><span style="font-family:courier new,courier,monospace">v-ați deconectat cu succes</span></span></cite></strong></h3>', '<h3 style="color:#aaa; font-style:italic"><span style="font-family:tahoma,geneva,sans-serif"><span style="background-color:#00FF00">вы успешно вышли</span></span></h3>', '<p>logout success</p>', '<p>bg_logout success</p>', '<p>ukr_logout success</p>');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `ods_sys_text_redact`
--

CREATE TABLE IF NOT EXISTS `ods_sys_text_redact` (
`id` int(10) unsigned NOT NULL,
  `alias` varchar(255) NOT NULL,
  `ro` text,
  `ru` text,
  `en` text,
  `bg` text,
  `ukr` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='system table redactable text area';

--
-- Salvarea datelor din tabel `ods_sys_text_redact`
--

INSERT INTO `ods_sys_text_redact` (`id`, `alias`, `ro`, `ru`, `en`, `bg`, `ukr`) VALUES
(1, 'moto', 'finisat', 'сохранити', 'save', 'bg_save', 'ukr_save');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `ods_user_admin`
--

CREATE TABLE IF NOT EXISTS `ods_user_admin` (
`id` int(10) unsigned NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `role` int(1) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Salvarea datelor din tabel `ods_user_admin`
--

INSERT INTO `ods_user_admin` (`id`, `login`, `password`, `name`, `role`) VALUES
(1, 'gigi', '99dd74c177d70c96ec68eccfa46c042f', 'Gheorghi Sapojnic', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ods_sys_config`
--
ALTER TABLE `ods_sys_config`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ods_sys_inscript`
--
ALTER TABLE `ods_sys_inscript`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ods_sys_messages`
--
ALTER TABLE `ods_sys_messages`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ods_sys_text_redact`
--
ALTER TABLE `ods_sys_text_redact`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ods_user_admin`
--
ALTER TABLE `ods_user_admin`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ods_sys_config`
--
ALTER TABLE `ods_sys_config`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ods_sys_inscript`
--
ALTER TABLE `ods_sys_inscript`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ods_sys_messages`
--
ALTER TABLE `ods_sys_messages`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ods_sys_text_redact`
--
ALTER TABLE `ods_sys_text_redact`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ods_user_admin`
--
ALTER TABLE `ods_user_admin`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
