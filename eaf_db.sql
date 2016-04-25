-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Gegenereerd op: 21 apr 2016 om 23:45
-- Serverversie: 5.5.42
-- PHP-versie: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eaf_db`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `acount_data`
--

CREATE TABLE `acount_data` (
  `id` int(1) NOT NULL,
  `facebookId` varchar(255) NOT NULL,
  `facebookName` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `acount_data`
--

INSERT INTO `acount_data` (`id`, `facebookId`, `facebookName`) VALUES
(1, '1604360766556534', 'Daan Van Dalen'),
(2, '897752703684372', 'Elles van Dalen'),
(3, '970592719643877', 'Anne Hetteling');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Answers`
--

CREATE TABLE `Answers` (
  `id` int(11) NOT NULL,
  `facebookId` varchar(255) NOT NULL,
  `a1` varchar(255) NOT NULL,
  `a2` varchar(255) NOT NULL,
  `a3` varchar(255) NOT NULL,
  `a4` varchar(255) NOT NULL,
  `a5` varchar(255) NOT NULL,
  `a6` varchar(255) NOT NULL,
  `a7` varchar(255) NOT NULL,
  `a8` varchar(255) NOT NULL,
  `a9` varchar(255) NOT NULL,
  `a10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer1` varchar(255) NOT NULL,
  `answer2` varchar(255) NOT NULL,
  `answer3` varchar(255) NOT NULL,
  `answer4` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `questions`
--

INSERT INTO `questions` (`id`, `question`, `answer1`, `answer2`, `answer3`, `answer4`) VALUES
(1, 'Wat is het verschil tussen dementie en Alzheimer?\r\n', 'Dementie en Alzheimer is hetzelfde\r\n', 'De ziekte van Alzheimer is één van vele de vormen van dementie\r\n', '', ''),
(2, 'Zijn mensen met dementie wilsonbekwaam?\r\n', 'Ja', 'Nee', 'Dat ligt eraan', ''),
(3, 'Welk gedrag duidt op dementie? Omcirkel het goede antwoord er is meer dan één antwoord mogelijk.\r\n', 'Vergeten welk seizoen het is of welk deel van de dag\r\n', 'Bij het opstaan niet meteen weten welk deel van de dag het is\r\n', 'De tijd verkeerd inschatten bijvoorbeeld 2 uur inschatten als een half uur\r\n', 'Nog weken last hebben van de omschakeling van zomer naar wintertijd\r\n'),
(4, 'Het gebruik van vrijheid beperkende maatregelen of gedrag beïnvloedende medicijnen kan worden verminderd of voorkomen door:', 'De persoon met dementie volledig zijn gang te laten gaan\r\n', 'De persoon met dementie steeds te corrigeren als hij zich vergist of iets vergeet\r\n', 'Kennis te hebben van zijn levensverhaal en daar het gesprek met hem over aangaan\r\n', ''),
(5, 'Een persoon met beginnende dementie mag geen auto meer rijden.', 'Waar, mensen met dementie zijn een gevaar op de weg.\r\n', 'Niet waar, dat ligt aan het type dementie\r\n', '', ''),
(6, 'De meeste mensen met dementie wonen in een verpleeghuis\r\n', 'Dat is waar, als je dementie krijgt beland je onherroepelijk in een verpleeghuis\r\n', 'Dat is niet waar, de meeste mensen met dementie wonen zelfs thuis\r\n', '', ''),
(7, 'Wat kun je het beste doen als iemand met dementie boos wordt om wat je zegt?\r\n', 'Steeds opnieuw uitleggen wat je bedoelde\r\n', 'Zelf boos worden, je bent ook maar een mens.\r\n', 'De boosheid negeren en weglopen, diegene kan er per slot van rekening niks aan doen.\r\n', 'Rustig en vriendelijk zeggen dat je merkt dat de persoon boos op je wordt en uitleggen dat dat niet je bedoeling was. Het gesprek op een voor de persoon prettig onderwerp brengen.\r\n'),
(8, 'Een meneer met vergevorderde dementie vraagt angstig om zijn moeder, je weet dat zijn moeder niet meer leeft. Wat doe je?', 'Je vertelt dat zijn moeder overleden is.\r\n', 'Je vraagt of meneer een lieve moeder heeft en of hij iets over haar kan vertellen.\r\n', '', ''),
(9, 'Welk gedrag duidt op dementie? Omcirkel het goede antwoord er is meer dan één antwoord mogelijk.\r\n', 'Taken die in het verleden makkelijk te doen waren niet meer kunnen, bijvoorbeeld koffie zetten, financiën regelen.\r\n', 'Ondanks dat het al een paar keer is uitgelegd complexe handelingen niet kunnen uitvoeren, zoals bijvoorbeeld een video programmeren.\r\n', 'Per ongeluk tegen iemand aanbotsen.\r\n', 'Dingen uit de handen laten vallen\r\n'),
(10, 'Wat draagt bij aan het dagelijks geluk van mensen met dementie? Er kunnen meer antwoorden goed zijn.\r\n', 'Mensen met dementie kunnen niet meer gelukkig zijn', 'De ziekte behandelen\r\n', 'Nieuwsgierig zijn naar de mens met dementie, hem leren kennen, zijn gevoelens erkennen en hem aanspreken op wat hij wel kan.\r\n', 'Hoe meer mensen kennis hebben van dementie en hoe hier het best mee om te gaan, hoe prettiger de samenleving wordt om in te leven voor mensen met dementie.\r\n');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `acount_data`
--
ALTER TABLE `acount_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `Answers`
--
ALTER TABLE `Answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `acount_data`
--
ALTER TABLE `acount_data`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `Answers`
--
ALTER TABLE `Answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
