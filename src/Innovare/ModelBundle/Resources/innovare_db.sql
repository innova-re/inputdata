-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Ago 01, 2014 alle 12:38
-- Versione del server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

DROP DATABASE inputdata_db;
CREATE DATABASE inputdata_db;
use inputdata_db;
set foreign_key_checks=0;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `innovare5`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `ambito_intervento`
--

CREATE TABLE IF NOT EXISTS `ambito_intervento` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL DEFAULT '',
  `descrizione` varchar(250) DEFAULT NULL,
  `note` varchar(250) DEFAULT NULL,
  `id_macroarea` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_ambito_intervento_macroarea2` (`id_macroarea`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `laboratorio_has_macroarea`
--

CREATE TABLE IF NOT EXISTS `laboratorio_has_macroarea` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_laboratorio` int(11) NOT NULL DEFAULT '0',
  `id_macroarea` int(10) unsigned NOT NULL DEFAULT '0',
  `id_ambito_intervento` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_laboratorio_has_macroarea_laboratoriolink1` (`id_laboratorio`),
  KEY `FK_laboratorio_has_macroarea_macroarealink2` (`id_macroarea`),
  KEY `FK_laboratorio_has_macroarea_ambito5` (`id_ambito_intervento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `macroarea`
--

CREATE TABLE IF NOT EXISTS `macroarea` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL DEFAULT '',
  `descrizione` varchar(250) DEFAULT NULL,
  `note` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `servizi`
--

CREATE TABLE IF NOT EXISTS `servizi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descrizione` varchar(1100) NOT NULL DEFAULT '',
  `id_laboratorio` int(11) NOT NULL DEFAULT '0',
  `nome` varchar(250) NOT NULL DEFAULT '',
  `strumenti_utilizzati` varchar(250) NOT NULL DEFAULT '',
  `note_strumenti_utilizzati` varchar(250) DEFAULT NULL,
  `parole_chiave` varchar(250) DEFAULT NULL,
  `note` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_servizi_laboratorio1` (`id_laboratorio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `servizi_has_macroarea`
--

CREATE TABLE IF NOT EXISTS `servizi_has_macroarea` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_servizio` int(10) unsigned NOT NULL DEFAULT '0',
  `id_macroarea` int(10) unsigned NOT NULL DEFAULT '0',
  `id_ambito_intervento` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `ambito_intervento`
--
ALTER TABLE `ambito_intervento`
  ADD CONSTRAINT `FK_ambito_intervento_macroarea2` FOREIGN KEY (`id_macroarea`) REFERENCES `macroarea` (`id`);

--
-- Limiti per la tabella `laboratorio_has_macroarea`
--
ALTER TABLE `laboratorio_has_macroarea`
  ADD CONSTRAINT `FK_laboratorio_has_macroarea_ambito5` FOREIGN KEY (`id_ambito_intervento`) REFERENCES `ambito_intervento` (`id`),
  ADD CONSTRAINT `FK_laboratorio_has_macroarea_laboratoriolink1` FOREIGN KEY (`id_laboratorio`) REFERENCES `laboratorio` (`id_laboratorio`),
  ADD CONSTRAINT `FK_laboratorio_has_macroarea_macroarealink2` FOREIGN KEY (`id_macroarea`) REFERENCES `macroarea` (`id`);

--
-- Limiti per la tabella `servizi`
--
ALTER TABLE `servizi`
  ADD CONSTRAINT `FK_servizi_laboratorio1` FOREIGN KEY (`id_laboratorio`) REFERENCES `laboratorio` (`id_laboratorio`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
