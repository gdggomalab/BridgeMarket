-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
-- emulateur android : 10.0.2.2
-- port : 8080
-- Client: 127.0.0.1
-- Généré le : Lundi 27 Mai 2013 à 10:42
-- Version du serveur: 5.5.16
-- Version de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;



CREATE DATABASE mobobridge;

use mobobridge;

-- --------------------------------------------------------
--
-- Structure de la table `user`
--
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) not null ,
  `usern` varchar(15) NOT NULL default '',
  `pswd` varchar(15) NOT NULL default '',
  `type-acc` varchar(15) NOT NULL,
  `email` varchar(100) not null,
  `title` varchar(20),
  `lastname` varchar(100),
  `firstname` varchar(100),
  `website` varchar(100),
  `city` varchar(100),
  `country` varchar(100),
  `company` varchar(100),
  `phone` varchar(100),
  `biography` varchar(200),
  `Uid` varchar(100) unique,
  CONSTRAINT user_pk PRIMARY KEY (`userid`)
) ENGINE = MYISAM ;

-- Quelques insertions des utilisateurs
INSERT INTO `users` VALUES (1,'admin', 'root', 'admin','misamuna@gmail.com','M','Isamuna','Michel','www.mobitours.com','Goma','DRC','Synapsehub.cd','0811704141','software developer','abc2319yasm88');


