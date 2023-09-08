-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 28, 2021 at 08:55 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lucr_an`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `agricultura`
--

CREATE TABLE `agricultura` (
  `id_agr` int(11) NOT NULL,
  `nr_angajati_agr` int(11) NOT NULL,
  `teren_arabil` int(40) NOT NULL,
  `nr_animale` int(11) NOT NULL,
  `recolta_cerealiere` int(11) NOT NULL,
  `anul` int(11) NOT NULL,
  `id_regiune` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agricultura`
--

INSERT INTO `agricultura` (`id_agr`, `nr_angajati_agr`, `teren_arabil`, `nr_animale`, `recolta_cerealiere`, `anul`, `id_regiune`) VALUES
(1, 47492, 1000142, 1197230, 2244378, 2019, 1),
(2, 3669, 3210, 7571, 5340, 2019, 2),
(3, 17035, 398045, 300124, 1020520, 2019, 3),
(4, 10677, 209743, 466602, 493917, 2019, 4),
(5, 11651, 294965, 281178, 585254, 2019, 5),
(6, 4460, 94179, 141755, 139347, 2019, 6);

-- --------------------------------------------------------

--
-- Table structure for table `antreprenoriat`
--

CREATE TABLE `antreprenoriat` (
  `id_antrep` int(11) NOT NULL,
  `nr_intreprinderi` int(11) NOT NULL,
  `nr_salariati` int(11) NOT NULL,
  `sold_venit` int(11) NOT NULL,
  `anul` int(11) NOT NULL,
  `id_regiune` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antreprenoriat`
--

INSERT INTO `antreprenoriat` (`id_antrep`, `nr_intreprinderi`, `nr_salariati`, `sold_venit`, `anul`, `id_regiune`) VALUES
(1, 56714, 552113, 26247, 2019, 1),
(2, 35445, 332562, 20220, 2019, 2),
(3, 7287, 90897, 2327, 2019, 3),
(4, 9174, 77830, 2685, 2019, 4),
(5, 3107, 33447, 651, 2019, 5),
(6, 1701, 17377, 362, 2019, 6);

-- --------------------------------------------------------

--
-- Table structure for table `demografia`
--

CREATE TABLE `demografia` (
  `id_demogr` int(11) NOT NULL,
  `densitate_medie` double NOT NULL,
  `spor_natural` int(11) NOT NULL,
  `sold_migr_interna` int(11) NOT NULL,
  `anul` int(11) NOT NULL,
  `id_regiune` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `demografia`
--

INSERT INTO `demografia` (`id_demogr`, `densitate_medie`, `spor_natural`, `sold_migr_interna`, `anul`, `id_regiune`) VALUES
(1, 85.6, -4394, 0, 2019, 1),
(2, 1159, 1133, 8860, 2019, 2),
(3, 96.3, -3295, -2807, 2019, 3),
(4, 99.7, -1289, -3765, 2019, 4),
(5, 72.8, -1149, -2283, 2019, 5),
(6, 73, 32, -49, 2019, 6);

-- --------------------------------------------------------

--
-- Table structure for table `forta_de_munca`
--

CREATE TABLE `forta_de_munca` (
  `id_forta_munca` int(11) NOT NULL,
  `nr_salariati` int(11) NOT NULL,
  `rata_ocuparii` varchar(40) NOT NULL,
  `loc_munca_vacante` int(11) NOT NULL,
  `nr_someri` int(11) NOT NULL,
  `rata_somaj` varchar(40) NOT NULL,
  `anul` int(11) NOT NULL,
  `id_regiune` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forta_de_munca`
--

INSERT INTO `forta_de_munca` (`id_forta_munca`, `nr_salariati`, `rata_ocuparii`, `loc_munca_vacante`, `nr_someri`, `rata_somaj`, `anul`, `id_regiune`) VALUES
(1, 742067, '40', 42190, 16598, '5.25', 2019, 1),
(2, 359138, '52.6', 26276, 616, '4.6', 2019, 2),
(3, 151059, '42.5', 5546, 8350, '4.3', 2019, 3),
(4, 128989, '33.6', 5509, 4682, '6.3', 2019, 4),
(5, 68841, '31.3', 3031, 2119, '5.8', 2019, 5),
(6, 28963, '35.7', 1140, 831, '6.6', 2019, 6);

-- --------------------------------------------------------

--
-- Table structure for table `indicatori_sociali`
--

CREATE TABLE `indicatori_sociali` (
  `id_indicatori` int(11) NOT NULL,
  `nr_institutii_medicale` int(11) NOT NULL,
  `nr_scoli` int(11) NOT NULL,
  `nr_elevi` int(11) NOT NULL,
  `nr_inst_superioare` int(11) NOT NULL,
  `anul` int(11) NOT NULL,
  `id_regiune` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `indicatori_sociali`
--

INSERT INTO `indicatori_sociali` (`id_indicatori`, `nr_institutii_medicale`, `nr_scoli`, `nr_elevi`, `nr_inst_superioare`, `anul`, `id_regiune`) VALUES
(1, 1773, 1253, 332133, 24, 2019, 1),
(2, 680, 153, 91092, 20, 2019, 2),
(3, 370, 405, 84198, 1, 2019, 3),
(4, 313, 429, 95483, 0, 2019, 4),
(5, 217, 213, 44494, 2, 2019, 5),
(6, 70, 48, 15485, 1, 2019, 6);

-- --------------------------------------------------------

--
-- Table structure for table `industrie`
--

CREATE TABLE `industrie` (
  `id_ind` int(11) NOT NULL,
  `nr_angajati` int(11) NOT NULL,
  `nr_intreprinderi_ind` int(11) NOT NULL,
  `val_productie` int(11) NOT NULL,
  `pond_productie` double NOT NULL,
  `anul` int(11) NOT NULL,
  `id_regiune` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `industrie`
--

INSERT INTO `industrie` (`id_ind`, `nr_angajati`, `nr_intreprinderi_ind`, `val_productie`, `pond_productie`, `anul`, `id_regiune`) VALUES
(1, 161739, 4937, 59333, 100, 2019, 1),
(2, 71493, 2715, 30095, 50.7, 2019, 2),
(3, 39353, 723, 13066, 22, 2019, 3),
(4, 32944, 1012, 11603, 19.6, 2019, 4),
(5, 10775, 247, 2585, 4.4, 2019, 5),
(6, 7175, 240, 1983, 3.3, 2019, 6);

-- --------------------------------------------------------

--
-- Table structure for table `infrastructura`
--

CREATE TABLE `infrastructura` (
  `id_infr` int(11) NOT NULL,
  `lung_drum_publice` double NOT NULL,
  `pond_loc_gazificate` varchar(40) NOT NULL,
  `alim_apeducte` varchar(40) NOT NULL,
  `pond_canalizare` varchar(40) NOT NULL,
  `anul` int(11) NOT NULL,
  `id_regiune` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `infrastructura`
--

INSERT INTO `infrastructura` (`id_infr`, `lung_drum_publice`, `pond_loc_gazificate`, `alim_apeducte`, `pond_canalizare`, `anul`, `id_regiune`) VALUES
(1, 9431.5, '59.2', '68.8', '71.4', 2019, 1),
(2, 113, '86.8', '95.8', '96.9', 2019, 2),
(3, 3403.7, '44.4', '49.4', '59.4', 2019, 3),
(4, 3402.5, '45.8', '64.4', '67.7', 2019, 4),
(5, 2109.3, '68.8', '72.5', '64.6', 2019, 5),
(6, 402.9, '70.2', '76.1', '16.5', 2019, 6);

-- --------------------------------------------------------

--
-- Table structure for table `produs_intern_brut`
--

CREATE TABLE `produs_intern_brut` (
  `id_pib` int(11) NOT NULL,
  `pib_regional` int(11) NOT NULL,
  `ponderea_pib` double NOT NULL,
  `anul` int(11) NOT NULL,
  `id_regiune` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produs_intern_brut`
--

INSERT INTO `produs_intern_brut` (`id_pib`, `pib_regional`, `ponderea_pib`, `anul`, `id_regiune`) VALUES
(1, 192508553, 100, 2019, 1),
(2, 114309761, 59.4, 2019, 2),
(3, 31866288, 16.6, 2019, 3),
(4, 28289243, 14.7, 2019, 4),
(5, 13734316, 7.1, 2019, 5),
(6, 4308945, 2.2, 2019, 6);

-- --------------------------------------------------------

--
-- Table structure for table `regiuni_de_dezvoltare`
--

CREATE TABLE `regiuni_de_dezvoltare` (
  `id_regiune` int(11) NOT NULL,
  `nume_regiune` varchar(40) NOT NULL,
  `suprafata_regiune` int(11) NOT NULL,
  `nr_populatie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regiuni_de_dezvoltare`
--

INSERT INTO `regiuni_de_dezvoltare` (`id_regiune`, `nume_regiune`, `suprafata_regiune`, `nr_populatie`) VALUES
(1, 'Republica Moldova', 33843, 3559000),
(2, 'Chisinau', 572, 832865),
(3, 'Nord', 10375, 999216),
(4, 'Centru', 10636, 1060750),
(5, 'Sud', 7379, 537182),
(6, 'Gagauzia', 1848, 134535);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agricultura`
--
ALTER TABLE `agricultura`
  ADD PRIMARY KEY (`id_agr`),
  ADD KEY `id_regiune` (`id_regiune`);

--
-- Indexes for table `antreprenoriat`
--
ALTER TABLE `antreprenoriat`
  ADD PRIMARY KEY (`id_antrep`),
  ADD KEY `id_regiune` (`id_regiune`);

--
-- Indexes for table `demografia`
--
ALTER TABLE `demografia`
  ADD PRIMARY KEY (`id_demogr`),
  ADD KEY `id_regiune` (`id_regiune`);

--
-- Indexes for table `forta_de_munca`
--
ALTER TABLE `forta_de_munca`
  ADD PRIMARY KEY (`id_forta_munca`),
  ADD KEY `id_regiune` (`id_regiune`);

--
-- Indexes for table `indicatori_sociali`
--
ALTER TABLE `indicatori_sociali`
  ADD PRIMARY KEY (`id_indicatori`),
  ADD KEY `id_regiune` (`id_regiune`);

--
-- Indexes for table `industrie`
--
ALTER TABLE `industrie`
  ADD PRIMARY KEY (`id_ind`),
  ADD KEY `id_regiune` (`id_regiune`);

--
-- Indexes for table `infrastructura`
--
ALTER TABLE `infrastructura`
  ADD PRIMARY KEY (`id_infr`),
  ADD KEY `id_regiune` (`id_regiune`);

--
-- Indexes for table `produs_intern_brut`
--
ALTER TABLE `produs_intern_brut`
  ADD PRIMARY KEY (`id_pib`),
  ADD KEY `id_regiune` (`id_regiune`);

--
-- Indexes for table `regiuni_de_dezvoltare`
--
ALTER TABLE `regiuni_de_dezvoltare`
  ADD PRIMARY KEY (`id_regiune`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agricultura`
--
ALTER TABLE `agricultura`
  MODIFY `id_agr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `antreprenoriat`
--
ALTER TABLE `antreprenoriat`
  MODIFY `id_antrep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `demografia`
--
ALTER TABLE `demografia`
  MODIFY `id_demogr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `forta_de_munca`
--
ALTER TABLE `forta_de_munca`
  MODIFY `id_forta_munca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `indicatori_sociali`
--
ALTER TABLE `indicatori_sociali`
  MODIFY `id_indicatori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `industrie`
--
ALTER TABLE `industrie`
  MODIFY `id_ind` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `infrastructura`
--
ALTER TABLE `infrastructura`
  MODIFY `id_infr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `produs_intern_brut`
--
ALTER TABLE `produs_intern_brut`
  MODIFY `id_pib` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `regiuni_de_dezvoltare`
--
ALTER TABLE `regiuni_de_dezvoltare`
  MODIFY `id_regiune` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agricultura`
--
ALTER TABLE `agricultura`
  ADD CONSTRAINT `agricultura_ibfk_1` FOREIGN KEY (`id_regiune`) REFERENCES `regiuni_de_dezvoltare` (`id_regiune`);

--
-- Constraints for table `antreprenoriat`
--
ALTER TABLE `antreprenoriat`
  ADD CONSTRAINT `antreprenoriat_ibfk_1` FOREIGN KEY (`id_regiune`) REFERENCES `regiuni_de_dezvoltare` (`id_regiune`);

--
-- Constraints for table `demografia`
--
ALTER TABLE `demografia`
  ADD CONSTRAINT `demografia_ibfk_1` FOREIGN KEY (`id_regiune`) REFERENCES `regiuni_de_dezvoltare` (`id_regiune`);

--
-- Constraints for table `forta_de_munca`
--
ALTER TABLE `forta_de_munca`
  ADD CONSTRAINT `forta_de_munca_ibfk_1` FOREIGN KEY (`id_regiune`) REFERENCES `regiuni_de_dezvoltare` (`id_regiune`);

--
-- Constraints for table `indicatori_sociali`
--
ALTER TABLE `indicatori_sociali`
  ADD CONSTRAINT `indicatori_sociali_ibfk_1` FOREIGN KEY (`id_regiune`) REFERENCES `regiuni_de_dezvoltare` (`id_regiune`);

--
-- Constraints for table `industrie`
--
ALTER TABLE `industrie`
  ADD CONSTRAINT `industrie_ibfk_1` FOREIGN KEY (`id_regiune`) REFERENCES `regiuni_de_dezvoltare` (`id_regiune`);

--
-- Constraints for table `infrastructura`
--
ALTER TABLE `infrastructura`
  ADD CONSTRAINT `infrastructura_ibfk_1` FOREIGN KEY (`id_regiune`) REFERENCES `regiuni_de_dezvoltare` (`id_regiune`);

--
-- Constraints for table `produs_intern_brut`
--
ALTER TABLE `produs_intern_brut`
  ADD CONSTRAINT `produs_intern_brut_ibfk_1` FOREIGN KEY (`id_regiune`) REFERENCES `regiuni_de_dezvoltare` (`id_regiune`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
