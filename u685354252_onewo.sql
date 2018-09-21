
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 15, 2016 at 07:16 AM
-- Server version: 5.1.73
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u685354252_onewo`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `thid` int(6) NOT NULL AUTO_INCREMENT COMMENT 'tracking history id. auto incrementing',
  `tcode` varchar(16) NOT NULL COMMENT 'history date',
  `hdate` varchar(32) NOT NULL COMMENT 'location of the cargo at that date',
  `hlocal` varchar(128) NOT NULL,
  PRIMARY KEY (`thid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`thid`, `tcode`, `hdate`, `hlocal`) VALUES
(1, '7983736389', 'Thu, Oct 20, 2016', 'Vahalla, Denmark'),
(2, '9596611900', 'Sat, Oct 22, 2016', ' Building # 5, Dubai Internet City , China.'),
(3, '9596611900', 'Sun, Oct 23, 2016', 'Thailand	Bangkok'),
(4, '9596611900', 'Tue, Oct 25, 2016', ' North America. Mexico City.'),
(5, '7795966119', 'Fri, Nov 11, 2016', 'Germany'),
(6, '7795966119', 'Sat, Nov 12, 2016', 'Malaga, Spain.'),
(7, '9596611988', 'Sun, Nov 13, 2016', 'Los Angeles, Carlifornia; United State.'),
(8, '7795966119', 'Mon, Nov 14, 2016', ' North America. Mexico City.'),
(9, '9596611988', 'Mon, Nov 14, 2016', 'chile '),
(10, '9596611988', 'Tue, Nov 15, 2016', 'Madrid, Spain'),
(11, '9596611988', 'Wed, Nov 16, 2016', 'Sao Paulo, Brasil.'),
(12, '9596611907', 'Wed, Nov 23, 2016', 'Germany'),
(13, '', 'Sat, Nov 26, 2016', 'Malaga, Spain'),
(14, '', 'Sat, Nov 26, 2016', 'Guatemela'),
(15, '0096611900', 'Sat, Nov 26, 2016', 'Malaga, Spain'),
(16, '0096611900', 'Sun, Nov 27, 2016', 'COSTA RICA.'),
(17, '7795900001', 'Fri, Dec 02, 2016', 'Malaga, Spain'),
(18, '7795900001', 'Sat, Dec 03, 2016', ' North America. Mexico City.'),
(19, '7795900001', 'Sun, Dec 04, 2016', 'COSTA RICA.'),
(20, '7795900001', 'Mon, Dec 05, 2016', 'BRAZIL'),
(21, '9594411111', 'Tue, Dec 06, 2016', 'Germany'),
(22, '9596600000', 'Tue, Dec 06, 2016', 'Germany'),
(23, '9596600000', 'Tue, Dec 06, 2016', 'Malaga, Spain.'),
(24, '9594411111', 'Tue, Dec 06, 2016', 'Malaga, Spain.'),
(25, '9596600000', 'Tue, Dec 06, 2016', 'BRAZIL'),
(26, '9594411111', 'Tue, Dec 06, 2016', 'BRAZIL'),
(27, '0126611900', 'Mon, Dec 12, 2016', 'Dublin Ireland UK'),
(28, '0126611900', 'Tue, Dec 13, 2016', 'WALE'),
(29, '9596615555', 'Wed, Dec 14, 2016', 'New York. United States of American'),
(30, '0126611900', 'Wed, Dec 14, 2016', 'Malaga, Spain.'),
(31, '9596615555', 'Thu, Dec 15, 2016', 'CANADA.');

-- --------------------------------------------------------

--
-- Table structure for table `newship`
--

CREATE TABLE IF NOT EXISTS `newship` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tcode` varchar(12) COLLATE latin1_general_ci NOT NULL,
  `sfname` varchar(64) COLLATE latin1_general_ci NOT NULL,
  `saddress` varchar(128) COLLATE latin1_general_ci NOT NULL,
  `rfname` varchar(64) COLLATE latin1_general_ci NOT NULL,
  `raddress` varchar(128) COLLATE latin1_general_ci NOT NULL,
  `rphone` varchar(24) COLLATE latin1_general_ci NOT NULL,
  `remail` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `ocargo` varchar(64) COLLATE latin1_general_ci NOT NULL,
  `dcargo` varchar(64) COLLATE latin1_general_ci NOT NULL,
  `items` varchar(128) COLLATE latin1_general_ci NOT NULL,
  `clcargo` varchar(64) COLLATE latin1_general_ci NOT NULL,
  `clts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tcode` (`tcode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shiphist`
--

CREATE TABLE IF NOT EXISTS `shiphist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(12) NOT NULL,
  `clcargo` varchar(64) COLLATE latin1_general_ci NOT NULL,
  `clts` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tdetails`
--

CREATE TABLE IF NOT EXISTS `tdetails` (
  `tid` int(6) NOT NULL AUTO_INCREMENT COMMENT 'serial auto incrementing id',
  `tcode` varchar(16) NOT NULL COMMENT 'tracking code',
  `sender` varchar(90) NOT NULL COMMENT 'senders name',
  `saddress` varchar(256) NOT NULL COMMENT 'senders address',
  `item` varchar(128) NOT NULL COMMENT 'detail of the item sent',
  `destination` varchar(128) NOT NULL COMMENT 'where the item is heading',
  `status` varchar(256) NOT NULL COMMENT 'current location of the item',
  `sentdate` varchar(32) NOT NULL,
  `receiver` varchar(90) NOT NULL COMMENT 'receivers date',
  `rphone` varchar(16) NOT NULL COMMENT 'receivers  phone number',
  `remail` varchar(64) NOT NULL COMMENT 'receivers email address',
  `raddress` varchar(256) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tdetails`
--

INSERT INTO `tdetails` (`tid`, `tcode`, `sender`, `saddress`, `item`, `destination`, `status`, `sentdate`, `receiver`, `rphone`, `remail`, `raddress`) VALUES
(12, '9596611990', ' HARRY M DERVISH KELVIN', '183-185 Rose Lane, Mossley Hill, Liverpool, L18 5EA, United Kingdom', 'Money,Ring and jewelry', 'Sao Paulo, Brasil', 'Dublin Ireland UK', '24/11/2016', 'MarÃ­lia FÃ¡tima Braz de QueirÃ³z', '+5534-991747084', 'mariliaqueiroz459@gmail.com.br', 'R. Duque de Caxias 250 apartamento 204. Bairro SÃ£o Benedito. CEP 38022-180 Uberaba Mg'),
(16, '9596600000', 'Steven Oliver Philip', 'Hamburg, Germany', 'Money,Ring and jewelry etc', 'Sao Paulo, Brasil', 'Your parcel has been held by the brazilian government. Contact our email for futher details. ', '05/12/2016', 'Maria Sebastiana Sutil da Costa ', ' +5542999163493', 'tiana_0022@hotmail.com', 'Rua Antenor Sampaio 275 PiraÃ­ do Sul pr CEP 84240-000.'),
(17, '9594411111', 'Steven Oliver Philip', 'Hamburg, Germany', 'Money,Ring and jewelry etc', 'Sao Paulo, Brasil', 'Your parcel has been held by the brazilian government. Contact our email for futher details. ', '05/12/2016', 'Terezinha Ferreira Bueno', '+554291478573', 'tereferreirabueno@gmail.com', ' Rua Jau quadra 26 lote 25 condominio parati nÃºmero 688 Pinhais Pr Alphaville graciosa Cep 83327-108 Brasil '),
(15, '7795900001', 'TESSY MARIANA NESPRAL', 'Aranjuez, Spain.', 'PARCEL', 'Cochin, Kerala(India)', 'Your parcel has been held by the brazilian government. Contact our email for futher details. ', '01/12/2016', 'JOSEPH MARTIN', '+919995411165', 'josephmartin999@gmail.com', '7/390 Nedunilath House , Kundanoor Maradu po , postal code Pin - 682304 , Cochin, Kerala(India)'),
(18, '0126611900', 'MATHEW GATES ', '183-185 Rose Lane, Mossley Hill, Liverpool, L18 5EA, United Kingdom', 'funds, gift and jewelry', 'RepÃºblica Dominicana.', 'MILAN , ITALY.', '10/11/2016', 'Luisa Yaquelyn GarcÃ­a MartÃ­nez.', ' +1829689-7886', 'jelian16@hotmail.com', 'C/ Respaldo Las Flores # 13; Palma Real; en Los Girasoles ( entrando por el colegio Palma Real).'),
(19, '9596615555', 'Samuel Parker', '1444  Alameda street, los Angeles California 90021 united states of america ', 'Money,Ring and jewelry', 'Rio de Janeiro, Brasil', ' North America. Mexico City.', '14/12/2016', 'Maria LÃºcia Raulino', '+5511969524299', '', 'Rua Manoel Alvores Pimentel nÃºmero 19  C Bairro jardim lajeado Intaim paulista SP CEP 08141000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
