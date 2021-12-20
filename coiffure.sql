-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 02 Août 2017 à 11:50
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `coiffure`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `codclt` int(10) NOT NULL AUTO_INCREMENT,
  `nomclt` varchar(26) NOT NULL,
  `prenclt` varchar(50) NOT NULL,
  `telclt` varchar(8) NOT NULL,
  `mailclt` varchar(256) NOT NULL,
  `motpassclt` varchar(256) NOT NULL,
  `datinscripclt` datetime NOT NULL,
  PRIMARY KEY (`codclt`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`codclt`, `nomclt`, `prenclt`, `telclt`, `mailclt`, `motpassclt`, `datinscripclt`) VALUES
(9, 'GUEI', 'DJETOU', '02020000', 'djetou@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-13 21:17:00'),
(8, 'GOGBE', 'TIA RAOUL', '04040101', 'raoul@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-13 21:15:00'),
(6, 'ALLA', 'DARESTE', '42528421', 'alla@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-13 21:05:00'),
(7, 'COULIBALY', 'LEON', '01020101', 'leon@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-13 21:15:00'),
(10, 'KANGA', 'JANINE', '45450201', 'janine225@gamil.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-13 21:17:00'),
(11, 'KASSE', 'KOUASSI', '04454545', 'kasse225@gamil.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-13 21:20:00'),
(12, 'KOFFI', 'CARMEN', '05454545', 'carmen@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-13 21:22:00'),
(13, 'KOFFI', 'YAO', '06454545', 'yao@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-13 21:23:00'),
(14, 'KOMOUIN', 'AKISSI', '03034545', 'dorcas@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-13 21:24:00'),
(15, 'KONAN', 'FAUSTIN', '36220230', 'faustin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-13 22:45:00'),
(16, 'KONAN', 'LUC', '45888888', 'luc@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-13 22:46:00'),
(17, 'KONATE', 'ZIE ALEXIS', '85996655', 'alexis@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-13 22:47:00'),
(18, 'KONE', 'ABOUBACAR', '84586525', 'aboubacar@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-13 22:49:00'),
(19, 'KONE', 'ALLAGNAN', '65256566', 'allagnan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-13 22:50:00'),
(20, 'KONE', 'MIYOMITA', '02003322', 'miyomi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-13 22:52:00'),
(21, 'KONE', 'N''DATIEN KEVIN', '96565650', 'kevino@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-13 22:57:00'),
(22, 'KOUADIO', 'ADJOUA', '01444044', 'adjoua@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-13 23:01:00'),
(23, 'KOUADIO', 'YAO ARMAND', '65020202', 'armand@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-14 05:52:00'),
(24, 'KOUAME', 'HERVE', '69693322', 'herve@mail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-14 05:53:00'),
(25, 'KOUASSI', 'LOUISE', '03032211', 'louise225@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-14 05:54:00'),
(26, 'KRA', 'ODILE', '45010102', 'odile@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-14 05:55:00'),
(27, 'ASSIGNO', 'CHIMELLE', '02656595', 'chimelle@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-14 05:56:00'),
(28, 'BROU', 'ULRICH', '04040101', 'ulrich@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-14 05:56:00'),
(29, 'KOUAKOU', 'CELESTIN', '06065502', 'celestin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-14 05:57:00'),
(30, 'OUATTARA', 'ALIDA', '05020306', 'alida@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-14 05:58:00'),
(31, 'OUATTARA', 'ZANITIN', '78050542', 'zanitin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-14 05:59:00'),
(32, 'SANGARE', 'DJARABA', '05090909', 'djaraba@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-14 06:00:00'),
(33, 'SIDIBE', 'ISSA', '09060633', 'sidibe@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-14 06:00:00'),
(34, 'SORO', 'ROKIYA', '09080708', 'rokiya225@gamil.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-14 06:01:00'),
(35, 'SORO', 'YARDJOUMA', '05080877', 'soro@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-14 06:02:00'),
(36, 'TOUMA', 'SERGES', '06065544', 'touman@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-14 06:03:00'),
(37, 'TRAORE', 'ALIMATOU', '59858566', 'alima@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-14 06:03:00'),
(38, 'YAO', 'FRANCK', '09332211', 'franck@glail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-14 06:04:00'),
(39, 'YOBOUA', 'JOCELYNE', '01010199', 'joce@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-14 06:10:00'),
(40, 'ZONGO', 'INOUSSA', '07078899', 'inous@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-14 06:13:00'),
(41, 'KONE', 'aboubakar', '45349860', 'abou@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-16 10:17:00'),
(42, 'kouassi', 'amoin', '55245555', 'kouassi20016@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-07-19 09:16:00');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `codcmd` int(10) NOT NULL AUTO_INCREMENT,
  `libcmd` varchar(50) DEFAULT NULL,
  `datcmd` date NOT NULL,
  `codfseur` int(10) NOT NULL,
  `codpers` int(10) NOT NULL,
  PRIMARY KEY (`codcmd`),
  KEY `codfseur` (`codfseur`),
  KEY `codpers` (`codpers`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`codcmd`, `libcmd`, `datcmd`, `codfseur`, `codpers`) VALUES
(1, 'commande des produit ub forti des etats unis', '0000-00-00', 2, 17),
(2, 'commande des produit ub forti des etats unis', '0000-00-00', 2, 17),
(3, '		rouge a levre du canada \r\n									', '0000-00-00', 3, 17),
(4, '									venant des real\r\n									', '0000-00-00', 4, 17),
(5, '									bon produit\r\n									', '0000-00-00', 2, 17),
(6, '									bon produit\r\n									', '0000-00-00', 2, 17),
(7, '									description de la commande\r\n									', '2017-07-17', 2, 22),
(8, '									description de la commande\r\n									', '2017-07-17', 2, 22),
(9, '									description de la commande\r\n									', '2017-07-19', 5, 22);

-- --------------------------------------------------------

--
-- Structure de la table `constituer`
--

CREATE TABLE IF NOT EXISTS `constituer` (
  `codconst` int(10) NOT NULL AUTO_INCREMENT,
  `qteproduit` int(6) NOT NULL,
  `prixvente` int(10) NOT NULL,
  `remise` int(6) DEFAULT NULL,
  `codprod` int(10) NOT NULL,
  `codfact` int(10) NOT NULL,
  PRIMARY KEY (`codconst`),
  KEY `codprod` (`codprod`),
  KEY `codfact` (`codfact`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Contenu de la table `constituer`
--

INSERT INTO `constituer` (`codconst`, `qteproduit`, `prixvente`, `remise`, `codprod`, `codfact`) VALUES
(25, 2, 1400, 0, 9, 24),
(2, 0, 2800, 300, 10, 0),
(3, 0, 1600, 200, 9, 0),
(4, 0, 1200, 200, 7, 0),
(22, 1, 1000, 0, 7, 21),
(21, 3, 3300, 0, 8, 21),
(7, 2, 1000, 0, 7, 11),
(8, 1, 2500, 0, 10, 11),
(9, 2, 1000, 0, 7, 13),
(10, 1, 2500, 0, 10, 13),
(11, 2, 1000, 0, 7, 14),
(12, 1, 2500, 0, 10, 14),
(13, 2, 1000, 0, 7, 15),
(14, 1, 1400, 0, 9, 18),
(15, 1, 1000, 0, 7, 18),
(16, 1, 2500, 0, 10, 19),
(17, 1, 1000, 0, 7, 19),
(18, 0, 3500, 200, 8, 0),
(19, 1, 2500, 0, 10, 20),
(20, 2, 1000, 0, 7, 20),
(23, 2, 1000, 0, 7, 22),
(24, 2, 1000, 0, 7, 23),
(26, 1, 3300, 0, 8, 25),
(27, 1, 1000, 0, 7, 25),
(28, 1, 3300, 0, 8, 26),
(29, 2, 1000, 0, 7, 27),
(30, 1, 2500, 0, 10, 27),
(31, 1, 1400, 0, 9, 27),
(32, 1, 2500, 0, 10, 28),
(33, 1, 3300, 0, 8, 28),
(34, 1, 2500, 0, 10, 29),
(35, 1, 3300, 0, 8, 29);

-- --------------------------------------------------------

--
-- Structure de la table `contenir`
--

CREATE TABLE IF NOT EXISTS `contenir` (
  `codcont` int(10) NOT NULL AUTO_INCREMENT,
  `qtecmd` int(6) NOT NULL,
  `prixachat` int(10) NOT NULL,
  `codcmd` int(10) NOT NULL,
  `codprod` int(10) NOT NULL,
  PRIMARY KEY (`codcont`),
  KEY `codcmd` (`codcmd`),
  KEY `codprod` (`codprod`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `contenir`
--

INSERT INTO `contenir` (`codcont`, `qtecmd`, `prixachat`, `codcmd`, `codprod`) VALUES
(1, 17, 2300, 6, 10),
(2, 20, 800, 7, 7),
(3, 15, 1200, 8, 9),
(4, 20, 3000, 9, 8);

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE IF NOT EXISTS `facture` (
  `codfact` int(10) NOT NULL AUTO_INCREMENT,
  `libfact` varchar(50) DEFAULT NULL,
  `montfact` int(10) NOT NULL,
  `datfact` datetime NOT NULL,
  `codclt` int(10) NOT NULL,
  `codpers` int(10) DEFAULT NULL,
  `codmod` int(10) DEFAULT NULL,
  `codprest` int(10) DEFAULT NULL,
  PRIMARY KEY (`codfact`),
  KEY `codclt` (`codclt`),
  KEY `codpers` (`codpers`),
  KEY `codmod` (`codmod`),
  KEY `codprest` (`codprest`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Contenu de la table `facture`
--

INSERT INTO `facture` (`codfact`, `libfact`, `montfact`, `datfact`, `codclt`, `codpers`, `codmod`, `codprest`) VALUES
(1, 'Achat de produit ', 24000, '0000-00-00 00:00:00', 0, 0, 0, 0),
(2, 'Achat de produit ', 24000, '0000-00-00 00:00:00', 0, 0, 0, 0),
(3, 'Achat de produit ', 24000, '0000-00-00 00:00:00', 0, 0, 0, 0),
(4, 'Achat de produit ', 24000, '0000-00-00 00:00:00', 0, 0, 0, 0),
(5, 'Achat de produit ', 24000, '0000-00-00 00:00:00', 0, 0, 0, 0),
(6, 'Achat de produit ', 24000, '0000-00-00 00:00:00', 0, 0, 0, 0),
(7, 'Achat de produit ', 24000, '2017-07-18 23:32:00', 0, 0, 0, 0),
(8, 'Achat de produit ', 4500, '2017-07-19 01:10:00', 0, 0, 0, 0),
(29, 'Achat de produit ', 5800, '2017-08-01 23:53:00', 24, 0, 0, 0),
(28, 'Achat de produit ', 5800, '2017-08-01 23:51:00', 25, 0, 0, 0),
(27, 'Achat de produit ', 5900, '2017-08-01 23:48:00', 26, 0, 0, 0),
(26, 'Achat de produit ', 3300, '2017-08-01 23:44:00', 28, 0, 0, 0),
(25, 'Achat de produit ', 4300, '2017-08-01 12:22:00', 30, 0, 0, 0),
(24, 'Achat de produit ', 2800, '2017-08-01 04:13:00', 29, 0, 0, 0),
(23, 'Achat de produit ', 2000, '2017-08-01 04:01:00', 29, 0, 0, 0),
(22, 'Achat de produit ', 2000, '2017-08-01 01:17:00', 15, 0, 0, 0),
(21, 'Achat de produit ', 10900, '2017-08-01 01:16:00', 14, 0, 0, 0),
(19, 'Achat de produit ', 3800, '2017-07-19 13:57:00', 30, 0, 0, 0),
(20, 'Achat de produit ', 4500, '2017-07-31 21:15:00', 30, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE IF NOT EXISTS `fournisseur` (
  `codfseur` int(10) NOT NULL AUTO_INCREMENT,
  `nomfseur` varchar(26) NOT NULL,
  `prenfseur` varchar(50) NOT NULL,
  `telfseur` varchar(8) NOT NULL,
  `mailfseur` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`codfseur`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `fournisseur`
--

INSERT INTO `fournisseur` (`codfseur`, `nomfseur`, `prenfseur`, `telfseur`, `mailfseur`) VALUES
(2, 'kouassi', 'wili', '5456563', 'jghdh@live.fr'),
(3, 'jfdhkgrh', 'dhfkjnj', '3545434', 'hgh@gmail.com'),
(4, 'kiki', 'oufouet', '54564685', 'hsgr@gmail.com'),
(5, 'Bamba', 'yacouba', '5847584', 'bamba@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `modele`
--

CREATE TABLE IF NOT EXISTS `modele` (
  `codmod` int(10) NOT NULL AUTO_INCREMENT,
  `catgmod` varchar(26) NOT NULL,
  `nommod` varchar(26) NOT NULL,
  `tarifmod` int(10) NOT NULL,
  `imgmod` varchar(50) DEFAULT NULL,
  `descripmod` text,
  PRIMARY KEY (`codmod`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `modele`
--

INSERT INTO `modele` (`codmod`, `catgmod`, `nommod`, `tarifmod`, `imgmod`, `descripmod`) VALUES
(4, 'hm', 'DREAD', 3000, 'modeleH (15).jpg', 'Les jeunes, la beautÃ© devient une realitÃ©                  '),
(3, 'hm', 'MAZE', 1500, 'modeleH (2).jpg', ' La coiffure de l''excellence                   '),
(5, 'fm', 'CLAIRE BAILLY', 45000, 'modeleF (9).jpg', 'Une coiffure des stars                   '),
(6, 'hm', 'AFFRO', 1000, 'modeleH (5).jpg', 'Une coiffure qui reigne toujours                    '),
(7, 'hm', 'SUPER DESIGN', 2500, 'modeleH (7).jpg', 'Quand tu souhaite etre beaut                     '),
(8, 'fm', 'MARCOUSSICE', 5000, 'modeleF (7).jpg', 'Une coffure de soirÃ©e pour toutes les femmes\r\n                                    '),
(9, 'fm', 'TRESSE AFRICAIN', 1500, 'tresse7.jpg', 'La beautÃ© de l''afrique par les femmes               '),
(10, 'fm', 'TECKTONIC', 3500, 'modeleF (14).jpg', 'Le monde change avec la BeautÃ©               ');

-- --------------------------------------------------------

--
-- Structure de la table `personnel`
--

CREATE TABLE IF NOT EXISTS `personnel` (
  `codpers` int(10) NOT NULL AUTO_INCREMENT,
  `nompers` varchar(26) NOT NULL,
  `prenpers` varchar(50) NOT NULL,
  `telpers` varchar(8) NOT NULL,
  `salpers` int(10) DEFAULT NULL,
  `datembpers` datetime DEFAULT NULL,
  `mailpers` varchar(256) NOT NULL,
  `motpasspers` varchar(256) NOT NULL,
  `catgpers` varchar(20) NOT NULL,
  PRIMARY KEY (`codpers`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `personnel`
--

INSERT INTO `personnel` (`codpers`, `nompers`, `prenpers`, `telpers`, `salpers`, `datembpers`, `mailpers`, `motpasspers`, `catgpers`) VALUES
(20, 'BAKAYOKO', 'SAFIAWA', '06060606', 45000, '2017-06-13 21:11:00', 'safiawa@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'grt'),
(19, 'AMANY', 'AYA FRANCE', '05050505', 60000, '2017-06-13 21:10:00', 'france@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'stg'),
(18, 'AMANY', 'RODRIGUE', '02010201', 60000, '2017-06-13 21:09:00', 'rodriguest@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'pers'),
(17, 'KONE', 'ISSA BEH', '84020268', 150000, '2017-06-13 21:08:00', 'konebehkys225@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'adm'),
(21, 'COULIBALY', 'GUAOUSSOU', '02030203', 60000, '2017-06-13 21:12:00', 'coolio225@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'grt'),
(22, 'KONE', 'aboubakar', '45349860', 123000, '2017-06-16 10:28:00', 'abou@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'adm');

-- --------------------------------------------------------

--
-- Structure de la table `prestation`
--

CREATE TABLE IF NOT EXISTS `prestation` (
  `codprest` int(10) NOT NULL AUTO_INCREMENT,
  `catgprest` varchar(26) NOT NULL,
  `nomprest` varchar(26) NOT NULL,
  `tarifprest` int(10) NOT NULL,
  `imgprest` varchar(50) DEFAULT NULL,
  `descriprest` text,
  PRIMARY KEY (`codprest`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `prestation`
--

INSERT INTO `prestation` (`codprest`, `catgprest`, `nomprest`, `tarifprest`, `imgprest`, `descriprest`) VALUES
(3, 'fm', 'MANICURE', 10000, 'index.jpg', 'La beaute des mains\r\n                                    '),
(4, 'fm', 'PEDICURE', 10000, 'indexh.jpg', '    La beaute des pieds\r\n                                    '),
(5, 'fm', 'MAQUILLAGE', 10000, 'imagesm.jpg', '     La beaute du visage\r\n                                    '),
(6, 'fm', 'GOMMAGE', 10000, 'imagesg.jpg', '  L''entretien du visage\r\n                                    '),
(7, 'fm', 'Traitement de cheveu', 975, 'prest (17).jpg', 'Pour mieux prendre soin de ses cheveu faire partir notre bien etre         '),
(8, 'fm', 'Deffrissage', 2500, 'prest (19).jpg', 'Bien allonger ses cheveux avec soin             '),
(9, 'hm', 'coupe homme', 500, 'prest (1).png', 'Couper homme la meilleure methode pour garder sa coiffure               ');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `codprod` int(10) NOT NULL AUTO_INCREMENT,
  `nomprod` varchar(26) NOT NULL,
  `imgprod` varchar(50) DEFAULT NULL,
  `descriprod` text,
  `tarifprod` varchar(26) NOT NULL,
  PRIMARY KEY (`codprod`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`codprod`, `nomprod`, `imgprod`, `descriprod`, `tarifprod`) VALUES
(8, 'UB', 'vcd.jpg', '  La douceur des cheveux\r\n                                    ', '1500'),
(7, 'ROUGE A LEVRE', 'nbv.jpg', ' La beaute des levres\r\n                                    ', '2000'),
(9, 'COSMENCE', 'imagesp1.jpg', '  NÂ°1 au monde\r\n                                    ', '1300'),
(10, 'NEUTROGENA', 'erg.jpg', ' Efficace\r\n                                    ', '1750'),
(11, 'UB 500g', 'vcd.jpg', 'Efficace pour les cheveux\r\n									', '');

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

CREATE TABLE IF NOT EXISTS `rdv` (
  `codrdv` int(10) NOT NULL AUTO_INCREMENT,
  `daterdv` datetime DEFAULT NULL,
  `objetrdv` text,
  `codclt` int(10) DEFAULT NULL,
  `codpers` int(10) DEFAULT NULL,
  `codprest` int(10) DEFAULT NULL,
  `codmod` int(10) DEFAULT NULL,
  PRIMARY KEY (`codrdv`),
  KEY `codclt` (`codclt`),
  KEY `codpers` (`codpers`),
  KEY `codmod` (`codmod`),
  KEY `codprest` (`codprest`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Contenu de la table `rdv`
--

INSERT INTO `rdv` (`codrdv`, `daterdv`, `objetrdv`, `codclt`, `codpers`, `codprest`, `codmod`) VALUES
(2, '2017-07-01 00:00:00', '	la coiffure maze\r\n									', 10, 20, 3, 3),
(3, '2017-07-03 00:00:00', 'je passerai apres						', 10, 19, 5, 5),
(4, '2017-07-02 00:00:00', '	ma beautÃ© compte				', 10, 17, 6, 4),
(5, '2017-07-07 00:00:00', '	special\r\n									', 10, 18, 4, 3),
(6, '2017-07-13 00:00:00', '									Objet du rdv\r\n									', 10, 19, 3, 4),
(7, '2017-07-13 00:00:00', '									Objet du rdv\r\n									', 10, 20, 3, 4),
(8, '2017-07-13 00:00:00', '									Objet du rdv\r\n									', 10, 0, 0, 0),
(9, '2017-07-13 00:00:00', '									Objet du rdv\r\n									', 10, 0, 0, 0),
(10, '2017-07-13 00:00:00', '									Objet du rdv\r\n									', 10, 0, 0, 0),
(11, '2017-07-13 00:00:00', '									Objet du rdv\r\n									', 10, 0, 0, 0),
(12, '2017-07-13 00:00:00', '									\r\n									', 10, 0, 0, 0),
(13, '2017-07-13 00:00:00', '									Objet du rdv\r\n									', 10, 0, 0, 0),
(14, '2017-07-17 07:00:00', '									Objet du rdv\r\n									', 10, 20, 4, 4),
(15, '2017-07-17 07:10:00', '									Objet du rdv\r\n									', 10, 19, 6, 3),
(16, '2017-07-17 14:14:00', '									Objet du rdv\r\n									', 10, 21, 7, 5),
(17, '2017-07-20 07:00:00', 'drv pour manicure et pedicure merci', 10, 0, 3, 5),
(18, '2017-08-08 12:00:00', '									Objet du rdv\r\n									', 10, 20, 9, 0),
(19, '2017-08-09 10:00:00', '									Objet du rdv\r\n									', 10, 21, 0, 10),
(20, '2017-09-11 10:00:00', '									Objet du rdv\r\n									', 10, 19, 0, 9),
(21, '2017-08-13 12:00:00', '									Objet du rdv\r\n									', 10, 17, 0, 3),
(22, '2017-08-08 07:00:00', '									Objet du rdv\r\n									', 14, 19, 0, 5),
(23, '2017-08-15 10:07:00', '									Objet du rdv\r\n									', 30, 0, 6, 8),
(24, '2017-08-10 07:00:00', '									Objet du rdv\r\n									', 30, 18, 4, 3),
(25, '2017-08-13 11:00:00', '									Objet du rdv\r\n									', 30, 20, 4, 3),
(26, '2017-08-02 07:00:00', '									Objet du rdv\r\n									', 14, 21, 4, 5);

-- --------------------------------------------------------

--
-- Structure de la table `reglement`
--

CREATE TABLE IF NOT EXISTS `reglement` (
  `codregl` int(10) NOT NULL AUTO_INCREMENT,
  `datregl` date NOT NULL,
  `libregl` varchar(50) DEFAULT NULL,
  `montregl` int(10) NOT NULL,
  `codfact` int(10) NOT NULL,
  PRIMARY KEY (`codregl`),
  KEY `codfact` (`codfact`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
