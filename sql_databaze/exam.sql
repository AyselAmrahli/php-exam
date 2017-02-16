-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2017 at 05:19 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `admin_name`, `password`) VALUES
(1, 'aysel_emrah', 'aysel123');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `que_number` int(11) NOT NULL,
  `que_desc` text NOT NULL,
  `answer1` varchar(255) NOT NULL,
  `answer2` varchar(255) NOT NULL,
  `answer3` varchar(255) NOT NULL,
  `answer4` varchar(255) NOT NULL,
  `true_answer` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `que_number`, `que_desc`, `answer1`, `answer2`, `answer3`, `answer4`, `true_answer`) VALUES
(79, 10, '<p>Birinci Napoleon BonapartÄ± hansÄ± adaya s&uuml;rg&uuml;n etmiÅŸdilÉ™r?</p>\r\n', 'MÃ¼qÉ™ddÉ™s Yelena', 'Rusiya hÉ™bsxanasÄ±', 'Ä°ngiltÉ™rÉ™', 'Ä°taliya adalarÄ±', 1),
(80, 12, '<p>ksdvajksb</p>\r\n', 'variant1', 'variant2', 'variant3', 'variant4', 2),
(78, 9, '<p>D&uuml;ntada ilk Ä°qtisadÄ± b&ouml;hran harada vÉ™ ne&ccedil;É™nci ildÉ™ bas verdi?</p>\r\n', 'Ä°ngiltÉ™rÉ™ 1856-ci ildÉ™', 'Fransa 1825-ci ildÉ™', 'Fransa 1877-ci ildÉ™', 'Ä°ngiltÉ™rÉ™ 1825-ci ildÉ™', 4),
(77, 8, '<p>MÉ™tni komp&uuml;terin yaddaÅŸÄ±nda saxlamaq &uuml;&ccedil;&uuml;n hansÄ± menyu komandasÄ±ndan istifadÉ™ olunur?</p>\r\n', 'File+Exit', 'File+New', 'File+Open', 'File+Save as', 4),
(75, 6, '<p>&Ccedil;Ä±xÄ±ÅŸ qurÄŸularÄ±na aiddir..</p>\r\n', 'Mikrofon, klaviatura, maus, prosessor', 'Monitor, klaviatura, skaner, maus', 'Monitor, sÉ™sgÃ¼clÉ™ndirici, printer', 'Qrafiki planÅŸet, printer, rÉ™qÉ™mli kamera, maus', 3),
(76, 7, '<p>AÅŸaÄŸÄ±dakÄ±lardan hansÄ±nda komp&uuml;ter ÅŸÉ™bÉ™kÉ™dÉ™n ayrÄ±ldÄ±qdan sonra informasiya silinir?</p>\r\n', 'SÉ™rt disk', 'CD', 'Ram', 'DVD', 3),
(74, 5, '<p>I nÉ™sil kompy&uuml;terlÉ™rÉ™ aiddir...</p>\r\n', 'YarÄ±mkeÃ§iricilÉ™r', 'Lampalar', 'Tranzistorlar', 'Ä°nteqral sxelmlÉ™r', 2),
(73, 4, '<p>BoÅŸ bir hovuzu iki krantdan biri a saata, digÉ™ri a/3 saata doldurur. Ä°kisi birlikdÉ™ boÅŸ hovuzu 8 saata doldurursa a ne&ccedil;É™dir?</p>\r\n', '56', '40', '67', '32', 4),
(72, 3, '<p>&Ccedil;evrÉ™ &uuml;zrÉ™ bÉ™rabÉ™r s&uuml;rÉ™tli hÉ™rÉ™kÉ™tdÉ™ d&ouml;nmÉ™ bucaÄŸÄ±nÄ±n hansÄ± qiymÉ™tlÉ™rindÉ™ maddi n&ouml;qtÉ™nin yerdÉ™yiÅŸmÉ™sinin modulu &ccedil;evrÉ™nin radiusuna bÉ™rabÉ™r olar?</p>\r\n', '90 dÉ™rÉ™cÉ™ 180 dÉ™rÉ™cÉ™', '90 dÉ™rÉ™cÉ™ 270 dÉ™rÉ™cÉ™', '60 dÉ™rÉ™cÉ™ 300 dÉ™rÉ™cÉ™', '120 dÉ™rÉ™cÉ™ 240 dÉ™rÉ™cÉ™', 3),
(71, 2, '<p>QapalÄ± qabda verilmiÅŸ k&uuml;tlÉ™li ideal qazÄ±n temperaturu 2 dÉ™fÉ™ azaltdÄ±qda, onun molekullarÄ±nÄ±n istilik hÉ™rÉ™kÉ™tinin orta kinetik enerjisi necÉ™ dÉ™yiÅŸÉ™r?</p>\r\n', '2 dÉ™fÉ™ azalar', '5 dÉ™fÉ™ artar', '3 dÉ™fÉ™ azalar', '3 dÉ™fÉ™ artar', 1),
(70, 1, '<p>Ep=mgh nÉ™yin d&uuml;sturudur?</p>\r\n', 'radiusun', 'qÃ¼vvÉ™nin', 'impulsun', 'potensial enerjinin', 4);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(150) NOT NULL,
  `student_surname` varchar(150) NOT NULL,
  `group_number` varchar(100) NOT NULL,
  `student_img` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_name`, `student_surname`, `group_number`, `student_img`, `password`) VALUES
(17, 'Selcan', 'NurÉ™mmÉ™dli', 'TK-19', 'fon-galka-28561.jpg', 'selcan123');

-- --------------------------------------------------------

--
-- Table structure for table `student_answer`
--

DROP TABLE IF EXISTS `student_answer`;
CREATE TABLE IF NOT EXISTS `student_answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `que_desc` text NOT NULL,
  `true_answer` int(11) NOT NULL,
  `your_answer` int(11) DEFAULT NULL,
  `exam_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1095 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_answer`
--

INSERT INTO `student_answer` (`id`, `student_id`, `que_desc`, `true_answer`, `your_answer`, `exam_time`) VALUES
(1094, 17, '<p>I nÉ™sil kompy&uuml;terlÉ™rÉ™ aiddir...</p>\r\n', 2, 2, '2016-10-10 12:22:00'),
(1093, 17, '<p>&Ccedil;Ä±xÄ±ÅŸ qurÄŸularÄ±na aiddir..</p>\r\n', 3, 3, '2016-10-10 12:22:00'),
(1092, 17, '<p>QapalÄ± qabda verilmiÅŸ k&uuml;tlÉ™li ideal qazÄ±n temperaturu 2 dÉ™fÉ™ azaltdÄ±qda, onun molekullarÄ±nÄ±n istilik hÉ™rÉ™kÉ™tinin orta kinetik enerjisi necÉ™ dÉ™yiÅŸÉ™r?</p>\r\n', 1, 1, '2016-10-10 12:22:00'),
(1090, 17, '<p>ksdvajksb</p>\r\n', 2, 3, '2016-10-10 12:22:00'),
(1091, 17, '<p>D&uuml;ntada ilk Ä°qtisadÄ± b&ouml;hran harada vÉ™ ne&ccedil;É™nci ildÉ™ bas verdi?</p>\r\n', 4, 4, '2016-10-10 12:22:00'),
(1089, 17, '<p>AÅŸaÄŸÄ±dakÄ±lardan hansÄ±nda komp&uuml;ter ÅŸÉ™bÉ™kÉ™dÉ™n ayrÄ±ldÄ±qdan sonra informasiya silinir?</p>\r\n', 3, 3, '2016-10-10 12:22:00'),
(1088, 17, '<p>MÉ™tni komp&uuml;terin yaddaÅŸÄ±nda saxlamaq &uuml;&ccedil;&uuml;n hansÄ± menyu komandasÄ±ndan istifadÉ™ olunur?</p>\r\n', 4, 4, '2016-10-10 12:22:00'),
(1087, 17, '<p>Birinci Napoleon BonapartÄ± hansÄ± adaya s&uuml;rg&uuml;n etmiÅŸdilÉ™r?</p>\r\n', 1, 4, '2016-10-10 12:22:00'),
(1086, 17, '<p>BoÅŸ bir hovuzu iki krantdan biri a saata, digÉ™ri a/3 saata doldurur. Ä°kisi birlikdÉ™ boÅŸ hovuzu 8 saata doldurursa a ne&ccedil;É™dir?</p>\r\n', 4, 3, '2016-10-10 12:22:00'),
(1085, 17, '<p>&Ccedil;evrÉ™ &uuml;zrÉ™ bÉ™rabÉ™r s&uuml;rÉ™tli hÉ™rÉ™kÉ™tdÉ™ d&ouml;nmÉ™ bucaÄŸÄ±nÄ±n hansÄ± qiymÉ™tlÉ™rindÉ™ maddi n&ouml;qtÉ™nin yerdÉ™yiÅŸmÉ™sinin modulu &ccedil;evrÉ™nin radiusuna bÉ™rabÉ™r olar?</p>\r\n', 3, 3, '2016-10-10 12:22:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
