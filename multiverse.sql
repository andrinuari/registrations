/*
 Navicat Premium Data Transfer

 Source Server         : lokal_maria
 Source Server Type    : MariaDB
 Source Server Version : 100422
 Source Host           : localhost:3306
 Source Schema         : multiverse

 Target Server Type    : MariaDB
 Target Server Version : 100422
 File Encoding         : 65001

 Date: 19/10/2024 03:50:30
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `NamaLengkap` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Role` enum('Admin','Super Admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for komisi
-- ----------------------------
DROP TABLE IF EXISTS `komisi`;
CREATE TABLE `komisi`  (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `SponsorID` int(11) NULL DEFAULT NULL,
  `MemberBaruID` int(11) NULL DEFAULT NULL,
  `PaketID` int(11) NULL DEFAULT NULL,
  `JumlahKomisi` decimal(10, 0) NULL DEFAULT NULL,
  `TanggalKomisi` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE,
  INDEX `SponsorID`(`SponsorID`) USING BTREE,
  INDEX `MemberBaruID`(`MemberBaruID`) USING BTREE,
  INDEX `PaketID`(`PaketID`) USING BTREE,
  CONSTRAINT `komisi_ibfk_2` FOREIGN KEY (`MemberBaruID`) REFERENCES `member` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `komisi_ibfk_3` FOREIGN KEY (`PaketID`) REFERENCES `paketaktivasi` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of komisi
-- ----------------------------
INSERT INTO `komisi` VALUES (1, 2, 9, 10, 500000, '2024-10-18 20:24:01');
INSERT INTO `komisi` VALUES (2, 4, 10, 6, 1000000, '2024-10-18 22:24:26');

-- ----------------------------
-- Table structure for member
-- ----------------------------
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member`  (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IdMember` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Rt` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Rw` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Kelurahan` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Kecamatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `KodePos` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `JenisKelamin` enum('Laki-laki','Perempuan') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `NoKTP` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `TempatLahir` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `TanggalLahir` date NOT NULL,
  `NoHandphone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `NamaBank` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `NoRekening` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `IDUpline` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `IDSponsor` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Paket` int(2) NULL DEFAULT NULL,
  `NamaPaket` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `ManagerArea` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `KartuStockist` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Tempat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Tanggal` date NULL DEFAULT NULL,
  `TanggalDaftar` timestamp(0) NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `StatusBayar` enum('Lunas','Belum Lunas') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `TanggalBayar` datetime(0) NULL DEFAULT NULL,
  `AktivasiBy` int(11) NULL DEFAULT NULL,
  `Status` enum('New','Approved','Disapproved') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE,
  INDEX `FK_AktivasiBy_Admin`(`AktivasiBy`) USING BTREE,
  INDEX `IdMember`(`IdMember`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of member
-- ----------------------------
INSERT INTO `member` VALUES (1, 'MEM10240001', 'Andri', 'Jakarta', '01', '02', 'Kedaung', 'Pamulang', '14142', 'Laki-laki', '23239898', 'Jakarta', '1991-01-01', '0887576565', 'andri@gmail.com', 'BRI', '7676767', NULL, NULL, 1, 'Fast Track', 'Aip', 'ABCD', 'Jakarta', '2024-10-19', '2024-10-19 02:27:35', 'Belum Lunas', NULL, NULL, 'New');
INSERT INTO `member` VALUES (2, 'MEM10240002', 'Nuari', 'Jakarta', '01', '02', 'Kedaung', 'Pamulang', '14142', 'Laki-laki', '1122333', 'Jakarta', '1991-01-01', '0887576565', 'andri@gmail.com', 'BRI', '7676767', 'MEM10240001', 'MEM10240001', 1, 'Fast Track', 'Aip', 'ABCD', 'Jakarta', '2024-10-19', '2024-10-19 00:48:27', 'Belum Lunas', NULL, NULL, 'New');
INSERT INTO `member` VALUES (3, 'MEM10240003', 'aa', '', '', '', '', '', '', 'Laki-laki', '', '', '0000-00-00', '', '', '', '', '', 'A', 3, '', '', '', '', '0000-00-00', '2024-10-19 01:02:03', 'Belum Lunas', NULL, NULL, 'New');
INSERT INTO `member` VALUES (4, 'MEM10240004', 'Rani', '', '', '', '', '', '', 'Perempuan', '600002', '', '0000-00-00', '', '', '', '', 'MEM10240001', 'MEM10240001', 2, '', '', '', '', '0000-00-00', '2024-10-19 01:14:48', 'Belum Lunas', NULL, NULL, 'New');
INSERT INTO `member` VALUES (5, 'MEM10240005', 'Aisyah', '', '', '', '', '', '', 'Perempuan', '23', '', '0000-00-00', '', '', '', '', 'MEM10240001', 'MEM10240002', 10, '', '', '', '', '0000-00-00', '2024-10-19 01:18:16', 'Belum Lunas', NULL, NULL, 'New');
INSERT INTO `member` VALUES (6, 'MEM10240006', 'Aisyah', '', '', '', '', '', '', 'Perempuan', '2323', '', '0000-00-00', '', '', '', '', 'MEM10240001', 'MEM10240002', 10, '', '', '', '', '0000-00-00', '2024-10-19 01:20:44', 'Belum Lunas', NULL, NULL, 'New');
INSERT INTO `member` VALUES (7, 'MEM10240007', 'Aisyah', '', '', '', '', '', '', 'Perempuan', '89', '', '0000-00-00', '', '', '', '', 'MEM10240001', 'MEM10240002', 10, '', '', '', '', '0000-00-00', '2024-10-19 01:21:04', 'Belum Lunas', NULL, NULL, 'New');
INSERT INTO `member` VALUES (8, 'MEM10240008', 'Aisyah', '', '', '', '', '', '', 'Perempuan', '875', '', '0000-00-00', '', '', '', '', 'MEM10240001', 'MEM10240002', 10, '', '', '', '', '0000-00-00', '2024-10-19 01:23:26', 'Belum Lunas', NULL, NULL, 'New');
INSERT INTO `member` VALUES (9, 'MEM10240009', 'Aisyah', '', '', '', '', '', '', 'Perempuan', '78736', '', '0000-00-00', '', '', '', '', 'MEM10240001', 'MEM10240002', 10, '', '', '', '', '0000-00-00', '2024-10-19 01:24:01', 'Belum Lunas', NULL, NULL, 'New');
INSERT INTO `member` VALUES (10, 'MEM10240010', 'Yani', '', '', '', '', '', '', 'Laki-laki', '2311223', '', '0000-00-00', '', '', '', '', 'MEM10240004', 'MEM10240004', 6, '', '', '', '', '0000-00-00', '2024-10-19 03:24:26', 'Belum Lunas', NULL, NULL, 'New');

-- ----------------------------
-- Table structure for paketaktivasi
-- ----------------------------
DROP TABLE IF EXISTS `paketaktivasi`;
CREATE TABLE `paketaktivasi`  (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NamaPaket` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Harga` float NOT NULL,
  `Wilayah` enum('WiI.A','WiI.B') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Kategori` enum('Silver','Gold','Platinum','Regular','Executive','Luxury') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `JumlahBonus` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of paketaktivasi
-- ----------------------------
INSERT INTO `paketaktivasi` VALUES (1, 'Fast Track', 1450000, 'WiI.A', 'Silver', '500000');
INSERT INTO `paketaktivasi` VALUES (2, 'Fast Track', 4350000, 'WiI.A', 'Gold', '500000');
INSERT INTO `paketaktivasi` VALUES (3, 'Fast Track', 8700000, 'WiI.A', 'Platinum', '500000');
INSERT INTO `paketaktivasi` VALUES (4, 'Smart Reward', 3000000, 'WiI.A', 'Regular', '500000');
INSERT INTO `paketaktivasi` VALUES (5, 'Smart Reward', 9000000, 'WiI.A', 'Executive', '500000');
INSERT INTO `paketaktivasi` VALUES (6, 'Smart Reward', 21000000, 'WiI.A', 'Luxury', '1000000');
INSERT INTO `paketaktivasi` VALUES (7, 'Fast Track & Smart Reward', 4450000, 'WiI.A', 'Regular', '500000');
INSERT INTO `paketaktivasi` VALUES (8, 'Fast Track & Smart Reward', 13250000, 'WiI.A', 'Executive', '500000');
INSERT INTO `paketaktivasi` VALUES (9, 'Fast Track & Smart Reward', 31500000, 'WiI.A', 'Luxury', '500000');
INSERT INTO `paketaktivasi` VALUES (10, 'Fast Track', 1550000, 'WiI.B', 'Silver', '500000');
INSERT INTO `paketaktivasi` VALUES (11, 'Fast Track', 4655000, 'WiI.B', 'Gold', '500000');
INSERT INTO `paketaktivasi` VALUES (12, 'Fast Track', 9300000, 'WiI.B', 'Platinum', '500000');
INSERT INTO `paketaktivasi` VALUES (13, 'Smart Reward', 3210000, 'WiI.B', 'Regular', '500000');
INSERT INTO `paketaktivasi` VALUES (14, 'Smart Reward', 9630000, 'WiI.B', 'Executive', '500000');
INSERT INTO `paketaktivasi` VALUES (15, 'Smart Reward', 22470000, 'WiI.B', 'Luxury', '500000');
INSERT INTO `paketaktivasi` VALUES (16, 'Fast Track & Smart Reward', 4760000, 'WiI.B', 'Regular', '500000');
INSERT INTO `paketaktivasi` VALUES (17, 'Fast Track & Smart Reward', 14285000, 'WiI.B', 'Executive', '500000');
INSERT INTO `paketaktivasi` VALUES (18, 'Fast Track & Smart Reward', 33330000, 'WiI.B', 'Luxury', '500000');

SET FOREIGN_KEY_CHECKS = 1;
