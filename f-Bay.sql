-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_kuliner
CREATE DATABASE IF NOT EXISTS `db_kuliner` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_kuliner`;

-- Dumping structure for table db_kuliner.tbl_makanan
CREATE TABLE IF NOT EXISTS `tbl_makanan` (
  `id_makanan` int NOT NULL AUTO_INCREMENT,
  `nama_makanan` varchar(100) NOT NULL,
  `daerah_makanan` varchar(100) NOT NULL,
  `foto_makanan` blob,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_makanan`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_kuliner.tbl_makanan: ~3 rows (approximately)
REPLACE INTO `tbl_makanan` (`id_makanan`, `nama_makanan`, `daerah_makanan`, `foto_makanan`, `keterangan`) VALUES
	(1, 'Nasi Goreng', 'Heaven fr.', _binary 0x6e6173695f676f72656e672e6a7067, 'makanan Pria Sigma rajin bekerja'),
	(2, 'Mie Goreng', 'Isekai called earth', _binary 0x6d69655f63616265696a6f2e6a7067, 'benda apa itu, benda itu BEWARNA HIJAU1!1!'),
	(3, 'Shorekeeper', 'Wuthering dimension', _binary 0x73686f72656b65657065722e6a7067, 'Punya gwehj, mommy <3');

-- Dumping structure for table db_kuliner.tbl_minuman
CREATE TABLE IF NOT EXISTS `tbl_minuman` (
  `id_minuman` int NOT NULL AUTO_INCREMENT,
  `nama_minuman` varchar(100) NOT NULL,
  `jenis_minuman` varchar(100) NOT NULL,
  `foto_minuman` blob,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_minuman`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_kuliner.tbl_minuman: ~3 rows (approximately)
REPLACE INTO `tbl_minuman` (`id_minuman`, `nama_minuman`, `jenis_minuman`, `foto_minuman`, `keterangan`) VALUES
	(1, 'Kelp Shake', 'Drugs', _binary 0x6b656c705f7368616b652e6a7067, 'another green fields?! for a drunk-'),
	(2, 'ABC Soya Milk', 'Dingin', _binary 0x736f79615f6d696c6b2e6a7067, 'Creamy Chocolate, just fav drink.'),
	(3, 'Yeo&#039;s Cincau', 'Dingin', _binary 0x79656f735f63696e6361752e6a7067, 'minuman 2 tahun sekali ganti design kaleng aowkao');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
