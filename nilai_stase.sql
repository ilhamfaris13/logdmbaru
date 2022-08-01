SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `newrm2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `newrm2`;

CREATE TABLE `nilai_anestesi` (
  `Id` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `atitude` double DEFAULT NULL,
  `longcase` double DEFAULT NULL,
  `jurnal` double DEFAULT NULL,
  `minicex` double DEFAULT NULL,
  `derajat` double DEFAULT NULL,
  `pengabdian` double DEFAULT NULL,
  `prettest` double DEFAULT NULL,
  `posttest` double DEFAULT NULL,
  `dops` double DEFAULT 0,
  `osce` double DEFAULT NULL,
  `responsi` double DEFAULT NULL,
  `nilai_akhir` double DEFAULT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `nilai_bedah` (
  `Id` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `atitude` double DEFAULT NULL,
  `longcase` double DEFAULT NULL,
  `jurnal` double DEFAULT NULL,
  `minicex` double DEFAULT NULL,
  `derajat` double DEFAULT NULL,
  `pengabdian` double DEFAULT NULL,
  `prettest` double DEFAULT NULL,
  `posttest` double DEFAULT NULL,
  `dops` double DEFAULT 0,
  `osce` double DEFAULT NULL,
  `responsi` double DEFAULT NULL,
  `nilai_akhir` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `nilai_farmasi` (
  `Id` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `atitude` double DEFAULT NULL,
  `longcase` double DEFAULT NULL,
  `jurnal` double DEFAULT NULL,
  `minicex` double DEFAULT NULL,
  `derajat` double DEFAULT NULL,
  `pengabdian` double DEFAULT NULL,
  `prettest` double DEFAULT NULL,
  `posttest` double DEFAULT NULL,
  `dops` double DEFAULT 0,
  `osce` double DEFAULT NULL,
  `responsi` double DEFAULT NULL,
  `nilai_akhir` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `nilai_forensik` (
  `Id` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `atitude` double DEFAULT NULL,
  `longcase` double DEFAULT NULL,
  `jurnal` double DEFAULT NULL,
  `minicex` double DEFAULT NULL,
  `derajat` double DEFAULT NULL,
  `pengabdian` double DEFAULT NULL,
  `prettest` double DEFAULT NULL,
  `posttest` double DEFAULT NULL,
  `dops` double DEFAULT 0,
  `osce` double DEFAULT NULL,
  `responsi` double DEFAULT NULL,
  `nilai_akhir` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `nilai_ika` (
  `Id` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `atitude` double DEFAULT NULL,
  `longcase` double DEFAULT NULL,
  `jurnal` double DEFAULT NULL,
  `minicex` double DEFAULT NULL,
  `derajat` double DEFAULT NULL,
  `pengabdian` double DEFAULT NULL,
  `prettest` double DEFAULT NULL,
  `posttest` double DEFAULT NULL,
  `dops` double DEFAULT 0,
  `osce` double DEFAULT NULL,
  `responsi` double DEFAULT NULL,
  `nilai_akhir` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `nilai_ikm` (
  `Id` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `atitude` double DEFAULT NULL,
  `longcase` double DEFAULT NULL,
  `jurnal` double DEFAULT NULL,
  `minicex` double DEFAULT NULL,
  `derajat` double DEFAULT NULL,
  `pengabdian` double DEFAULT NULL,
  `prettest` double DEFAULT NULL,
  `posttest` double DEFAULT NULL,
  `dops` double DEFAULT 0,
  `osce` double DEFAULT NULL,
  `responsi` double DEFAULT NULL,
  `nilai_akhir` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `nilai_ipd` (
  `id` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `atitude` double DEFAULT NULL,
  `longcase` double DEFAULT NULL,
  `jurnal` double DEFAULT NULL,
  `minicex` double DEFAULT NULL,
  `derajat` double DEFAULT NULL,
  `pengabdian` double DEFAULT NULL,
  `prettest` double DEFAULT NULL,
  `posttest` double DEFAULT NULL,
  `dops` double DEFAULT 0,
  `osce` double DEFAULT NULL,
  `responsi` double DEFAULT NULL,
  `nilai_akhir` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `nilai_jiwa` (
  `Id` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `atitude` double DEFAULT NULL,
  `longcase` double DEFAULT NULL,
  `jurnal` double DEFAULT NULL,
  `minicex` double DEFAULT NULL,
  `derajat` double DEFAULT NULL,
  `pengabdian` double DEFAULT NULL,
  `prettest` double DEFAULT NULL,
  `posttest` double DEFAULT NULL,
  `dops` double DEFAULT 0,
  `osce` double DEFAULT NULL,
  `responsi` double DEFAULT NULL,
  `nilai_akhir` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `nilai_kulit` (
  `Id` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `atitude` double DEFAULT NULL,
  `longcase` double DEFAULT NULL,
  `jurnal` double DEFAULT NULL,
  `minicex` double DEFAULT NULL,
  `derajat` double DEFAULT NULL,
  `pengabdian` double DEFAULT NULL,
  `prettest` double DEFAULT NULL,
  `posttest` double DEFAULT NULL,
  `dops` double DEFAULT 0,
  `osce` double DEFAULT NULL,
  `responsi` double DEFAULT NULL,
  `nilai_akhir` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `nilai_lakesla` (
  `Id` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `atitude` double DEFAULT NULL,
  `longcase` double DEFAULT NULL,
  `jurnal` double DEFAULT NULL,
  `minicex` double DEFAULT NULL,
  `derajat` double DEFAULT NULL,
  `pengabdian` double DEFAULT NULL,
  `prettest` double DEFAULT NULL,
  `posttest` double DEFAULT NULL,
  `dops` double DEFAULT 0,
  `osce` double DEFAULT NULL,
  `responsi` double DEFAULT NULL,
  `nilai_akhir` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `nilai_mata` (
  `Id` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `atitude` double DEFAULT NULL,
  `longcase` double DEFAULT NULL,
  `jurnal` double DEFAULT NULL,
  `minicex` double DEFAULT NULL,
  `derajat` double DEFAULT NULL,
  `pengabdian` double DEFAULT NULL,
  `prettest` double DEFAULT NULL,
  `posttest` double DEFAULT NULL,
  `dops` double DEFAULT 0,
  `osce` double DEFAULT NULL,
  `responsi` double DEFAULT NULL,
  `nilai_akhir` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `nilai_obgyn` (
  `Id` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `atitude` double DEFAULT NULL,
  `longcase` double DEFAULT NULL,
  `jurnal` double DEFAULT NULL,
  `minicex` double DEFAULT NULL,
  `derajat` double DEFAULT NULL,
  `pengabdian` double DEFAULT NULL,
  `prettest` double DEFAULT NULL,
  `posttest` double DEFAULT NULL,
  `dops` double DEFAULT 0,
  `osce` double DEFAULT NULL,
  `responsi` double DEFAULT NULL,
  `nilai_akhir` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `nilai_radiologi` (
  `Id` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `atitude` double DEFAULT NULL,
  `longcase` double DEFAULT NULL,
  `jurnal` double DEFAULT NULL,
  `minicex` double DEFAULT NULL,
  `derajat` double DEFAULT NULL,
  `pengabdian` double DEFAULT NULL,
  `prettest` double DEFAULT NULL,
  `posttest` double DEFAULT NULL,
  `dops` double DEFAULT 0,
  `osce` double DEFAULT NULL,
  `responsi` double DEFAULT NULL,
  `nilai_akhir` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `nilai_rehab` (
  `Id` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `atitude` double DEFAULT NULL,
  `longcase` double DEFAULT NULL,
  `jurnal` double DEFAULT NULL,
  `minicex` double DEFAULT NULL,
  `derajat` double DEFAULT NULL,
  `pengabdian` double DEFAULT NULL,
  `prettest` double DEFAULT NULL,
  `posttest` double DEFAULT NULL,
  `dops` double DEFAULT 0,
  `osce` double DEFAULT NULL,
  `responsi` double DEFAULT NULL,
  `nilai_akhir` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `nilai_saraf` (
  `Id` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `atitude` double DEFAULT NULL,
  `longcase` double DEFAULT NULL,
  `jurnal` double DEFAULT NULL,
  `minicex` double DEFAULT NULL,
  `derajat` double DEFAULT NULL,
  `pengabdian` double DEFAULT NULL,
  `prettest` double DEFAULT NULL,
  `posttest` double DEFAULT NULL,
  `dops` double DEFAULT 0,
  `osce` double DEFAULT NULL,
  `responsi` double DEFAULT NULL,
  `nilai_akhir` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `nilai_tht` (
  `Id` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `atitude` double DEFAULT NULL,
  `longcase` double DEFAULT NULL,
  `jurnal` double DEFAULT NULL,
  `minicex` double DEFAULT NULL,
  `derajat` double DEFAULT NULL,
  `pengabdian` double DEFAULT NULL,
  `prettest` double DEFAULT NULL,
  `posttest` double DEFAULT NULL,
  `dops` double DEFAULT 0,
  `osce` double DEFAULT NULL,
  `responsi` double DEFAULT NULL,
  `nilai_akhir` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `nilai_anestesi`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `nilai_bedah`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `nilai_farmasi`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `nilai_forensik`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `nilai_ika`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `nilai_ikm`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `nilai_jiwa`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `nilai_kulit`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `nilai_lakesla`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `nilai_mata`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `nilai_obgyn`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `nilai_radiologi`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `nilai_rehab`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `nilai_saraf`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `nilai_tht`
  ADD PRIMARY KEY (`Id`);


ALTER TABLE `nilai_anestesi`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `nilai_bedah`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `nilai_farmasi`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `nilai_forensik`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `nilai_ika`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `nilai_ikm`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `nilai_jiwa`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `nilai_kulit`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `nilai_lakesla`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `nilai_mata`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `nilai_obgyn`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `nilai_radiologi`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `nilai_rehab`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `nilai_saraf`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `nilai_tht`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
