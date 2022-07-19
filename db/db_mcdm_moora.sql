/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : db_mcdm_moora

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 11/07/2022 07:25:05
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id_admin` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_admin`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (1, 'leader', '12345');
INSERT INTO `admin` VALUES (2, 'admin', 'admin');

-- ----------------------------
-- Table structure for tabel_hasil
-- ----------------------------
DROP TABLE IF EXISTS `tabel_hasil`;
CREATE TABLE `tabel_hasil`  (
  `id_hasil` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nilai` double NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_hasil`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 125 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tabel_hasil
-- ----------------------------
INSERT INTO `tabel_hasil` VALUES (120, 'Titanium', 3.4037731612585, '2022-07-11 02:21:23', 'rekomendasi');
INSERT INTO `tabel_hasil` VALUES (121, 'Tembaga', 0.027484523182762, '2022-07-11 02:21:23', 'rekomendasi');
INSERT INTO `tabel_hasil` VALUES (122, 'Besi', -0.066073462777345, '2022-07-11 02:21:23', 'tidak rekomendasi');
INSERT INTO `tabel_hasil` VALUES (123, 'Aluminium', -0.98919204876334, '2022-07-11 02:21:23', 'tidak rekomendasi');
INSERT INTO `tabel_hasil` VALUES (124, 'Zinc', -3.2773185378909, '2022-07-11 02:21:23', 'tidak rekomendasi');

-- ----------------------------
-- Table structure for tabel_kriteria
-- ----------------------------
DROP TABLE IF EXISTS `tabel_kriteria`;
CREATE TABLE `tabel_kriteria`  (
  `id_kriteria` int NOT NULL AUTO_INCREMENT,
  `kriteria` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bobot` float NOT NULL,
  PRIMARY KEY (`id_kriteria`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tabel_kriteria
-- ----------------------------
INSERT INTO `tabel_kriteria` VALUES (1, 'Kepadatan', 'benefit', 2.5);
INSERT INTO `tabel_kriteria` VALUES (2, 'Harga', 'cost', 1.7);
INSERT INTO `tabel_kriteria` VALUES (3, 'Berat', 'cost', 1.4);
INSERT INTO `tabel_kriteria` VALUES (4, 'Titik Lebur', 'benefit', 1.8);
INSERT INTO `tabel_kriteria` VALUES (5, 'Jumlah', 'cost', 1.5);

-- ----------------------------
-- Table structure for tabel_logam
-- ----------------------------
DROP TABLE IF EXISTS `tabel_logam`;
CREATE TABLE `tabel_logam`  (
  `id_logam` int NOT NULL AUTO_INCREMENT,
  `nama` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Kepadatan` bigint NOT NULL,
  `Harga` bigint NOT NULL,
  `Berat` bigint NOT NULL,
  `Titik_Lebur` bigint NOT NULL,
  `Jumlah` bigint NOT NULL,
  PRIMARY KEY (`id_logam`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tabel_logam
-- ----------------------------
INSERT INTO `tabel_logam` VALUES (1, 'Titanium', 'logam terkuat di bumi', 30000, 300000, 4, 3000, 1);
INSERT INTO `tabel_logam` VALUES (2, 'Besi', 'logam paling banyak di gunakan', 7000, 12000, 20, 400, 10);
INSERT INTO `tabel_logam` VALUES (3, 'Aluminium', 'logam yang memiliki ketahanan akan karatan dan memiliki berat yang lebih ringan dari besi', 3000, 500000, 12, 350, 6);
INSERT INTO `tabel_logam` VALUES (4, 'Zinc', 'Besi yang aneh', 4000, 700000, 40, 600, 60);
INSERT INTO `tabel_logam` VALUES (5, 'Tembaga', 'Paling bagus untuk konduksi listrik', 5000, 50000, 12, 300, 4);

-- ----------------------------
-- Table structure for tabel_nilai
-- ----------------------------
DROP TABLE IF EXISTS `tabel_nilai`;
CREATE TABLE `tabel_nilai`  (
  `id_nilai` int NOT NULL AUTO_INCREMENT,
  `id_kriteria` int NOT NULL,
  `id_logam` int NOT NULL,
  `nilai` int NOT NULL,
  PRIMARY KEY (`id_nilai`) USING BTREE,
  INDEX `id_kriteria`(`id_kriteria` ASC) USING BTREE,
  INDEX `id_siswa`(`id_logam` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 52 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tabel_nilai
-- ----------------------------
INSERT INTO `tabel_nilai` VALUES (1, 1, 1, 30000);
INSERT INTO `tabel_nilai` VALUES (2, 2, 1, 300000);
INSERT INTO `tabel_nilai` VALUES (3, 3, 1, 4);
INSERT INTO `tabel_nilai` VALUES (4, 4, 1, 3000);
INSERT INTO `tabel_nilai` VALUES (5, 5, 1, 1);
INSERT INTO `tabel_nilai` VALUES (6, 1, 2, 7000);
INSERT INTO `tabel_nilai` VALUES (7, 2, 2, 12000);
INSERT INTO `tabel_nilai` VALUES (8, 3, 2, 20);
INSERT INTO `tabel_nilai` VALUES (9, 4, 2, 400);
INSERT INTO `tabel_nilai` VALUES (10, 5, 2, 10);
INSERT INTO `tabel_nilai` VALUES (11, 1, 3, 3000);
INSERT INTO `tabel_nilai` VALUES (12, 2, 3, 500000);
INSERT INTO `tabel_nilai` VALUES (13, 3, 3, 12);
INSERT INTO `tabel_nilai` VALUES (14, 4, 3, 350);
INSERT INTO `tabel_nilai` VALUES (15, 5, 3, 6);
INSERT INTO `tabel_nilai` VALUES (16, 1, 4, 4000);
INSERT INTO `tabel_nilai` VALUES (17, 2, 4, 700000);
INSERT INTO `tabel_nilai` VALUES (18, 3, 4, 40);
INSERT INTO `tabel_nilai` VALUES (19, 4, 4, 600);
INSERT INTO `tabel_nilai` VALUES (20, 5, 4, 60);
INSERT INTO `tabel_nilai` VALUES (21, 1, 5, 5000);
INSERT INTO `tabel_nilai` VALUES (22, 2, 5, 50000);
INSERT INTO `tabel_nilai` VALUES (23, 3, 5, 12);
INSERT INTO `tabel_nilai` VALUES (24, 4, 5, 300);
INSERT INTO `tabel_nilai` VALUES (25, 5, 5, 4);
INSERT INTO `tabel_nilai` VALUES (26, 0, 3, 5);
INSERT INTO `tabel_nilai` VALUES (27, 0, 1, 4);
INSERT INTO `tabel_nilai` VALUES (28, 0, 4, 2);
INSERT INTO `tabel_nilai` VALUES (29, 0, 5, 1);
INSERT INTO `tabel_nilai` VALUES (30, 0, 2, 0);
INSERT INTO `tabel_nilai` VALUES (37, 1, 6, 1);
INSERT INTO `tabel_nilai` VALUES (38, 2, 6, 1);
INSERT INTO `tabel_nilai` VALUES (39, 3, 6, 1);
INSERT INTO `tabel_nilai` VALUES (40, 4, 6, 500000);
INSERT INTO `tabel_nilai` VALUES (41, 5, 6, 25);
INSERT INTO `tabel_nilai` VALUES (42, 1, 7, 1);
INSERT INTO `tabel_nilai` VALUES (43, 2, 7, 1);
INSERT INTO `tabel_nilai` VALUES (44, 3, 7, 1);
INSERT INTO `tabel_nilai` VALUES (45, 4, 7, 2147483647);
INSERT INTO `tabel_nilai` VALUES (46, 5, 7, 25);
INSERT INTO `tabel_nilai` VALUES (47, 1, 21, 2312);
INSERT INTO `tabel_nilai` VALUES (48, 2, 21, 41251);
INSERT INTO `tabel_nilai` VALUES (49, 3, 21, 1251);
INSERT INTO `tabel_nilai` VALUES (50, 4, 21, 51521);
INSERT INTO `tabel_nilai` VALUES (51, 5, 21, 5);

SET FOREIGN_KEY_CHECKS = 1;
