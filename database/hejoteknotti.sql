/*
 Navicat Premium Data Transfer

 Source Server         : koneksi01
 Source Server Type    : MySQL
 Source Server Version : 100427 (10.4.27-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : hejoteknotti

 Target Server Type    : MySQL
 Target Server Version : 100427 (10.4.27-MariaDB)
 File Encoding         : 65001

 Date: 29/05/2024 10:44:22
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id_admin` int NOT NULL AUTO_INCREMENT,
  `google_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_admin`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin
-- ----------------------------

-- ----------------------------
-- Table structure for alamat
-- ----------------------------
DROP TABLE IF EXISTS `alamat`;
CREATE TABLE `alamat`  (
  `id_alamat` int NOT NULL AUTO_INCREMENT,
  `id_customer` int NULL DEFAULT NULL,
  `nama_provinsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_kabupaten_kota` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_kecamatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_kelurahan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_detail_alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kode_pos` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_alamat`) USING BTREE,
  INDEX `id_customer`(`id_customer` ASC) USING BTREE,
  CONSTRAINT `alamat_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of alamat
-- ----------------------------

-- ----------------------------
-- Table structure for contactus
-- ----------------------------
DROP TABLE IF EXISTS `contactus`;
CREATE TABLE `contactus`  (
  `id_contact` int NOT NULL AUTO_INCREMENT,
  `sender_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sender_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_contact`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of contactus
-- ----------------------------

-- ----------------------------
-- Table structure for customer
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer`  (
  `id_customer` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `google_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_customer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `no_telephone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_customer`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of customer
-- ----------------------------

-- ----------------------------
-- Table structure for pembayaran
-- ----------------------------
DROP TABLE IF EXISTS `pembayaran`;
CREATE TABLE `pembayaran`  (
  `id_pembayaran` int NOT NULL AUTO_INCREMENT,
  `id_pesanan` int NULL DEFAULT NULL,
  `metode_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah_pembayaran` decimal(10, 2) NOT NULL,
  `tanggal_pembayaran` datetime NULL DEFAULT current_timestamp,
  `status` enum('Belum Bayar','Sudah Bayar') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'Belum Bayar',
  PRIMARY KEY (`id_pembayaran`) USING BTREE,
  INDEX `id_pesanan`(`id_pesanan` ASC) USING BTREE,
  CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pembayaran
-- ----------------------------

-- ----------------------------
-- Table structure for person
-- ----------------------------
DROP TABLE IF EXISTS `person`;
CREATE TABLE `person`  (
  `id_person` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jabatan_divisi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_person`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of person
-- ----------------------------

-- ----------------------------
-- Table structure for pesanan
-- ----------------------------
DROP TABLE IF EXISTS `pesanan`;
CREATE TABLE `pesanan`  (
  `id_pesanan` int NOT NULL AUTO_INCREMENT,
  `id_customer` int NULL DEFAULT NULL,
  `id_product` int NULL DEFAULT NULL,
  `jumlah_item_dipesan` int NOT NULL,
  `jumlah_harga` decimal(10, 2) NOT NULL,
  `tanggal_pesananan_dibuat` datetime NULL DEFAULT current_timestamp,
  `status` enum('Pending','Dibayar','Dikirim','Selesai','Dibatalkan') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'Pending',
  PRIMARY KEY (`id_pesanan`) USING BTREE,
  INDEX `id_customer`(`id_customer` ASC) USING BTREE,
  INDEX `id_product`(`id_product` ASC) USING BTREE,
  CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pesanan
-- ----------------------------

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product`  (
  `id_product` int NOT NULL AUTO_INCREMENT,
  `nama_product` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dekripsi_nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `harga` int NOT NULL,
  `stock` int NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_product`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES (1, 'STUNGTAxPINDAD', 'Smokeless Incinerator', 'Smokeless Incinerator adalah sebuah produk solusi Karya Anak Bangsa  untuk penanganan masalah sampah dengan menggunakan produk teknologi ramah lingkungan dan hemat energi.\r\n\r\nIncinerator adalah mesin pembakar sampah dengan mengubah umpan sampah menjadi abu, gas buang, partikulat dan panas yang bertujuan mengurangi volume sampah.\r\n\r\nKelebihan STUNGTAxPINDAD ~ Smokeless Incinerator : Ramah Lingkungan, Hemat Energi, Continuous System, Pembakaran Sempurna, Compact & Portable, Kemudahan Pengoperasian.\r\nSmokeless Incinerator adalah sebuah produk solusi Karya Anak Bangsa  untuk penanganan masalah sampah dengan menggunakan produk teknologi ramah lingkungan dan hemat energi.\r\n\r\nIncinerator adalah mesin pembakar sampah dengan mengubah umpan sampah menjadi abu, gas buang, partikulat dan panas yang bertujuan mengurangi volume sampah.\r\n\r\nKelebihan STUNGTAxPINDAD ~ Smokeless Incinerator : Ramah Lingkungan, Hemat Energi, Continuous System, Pembakaran Sempurna, Compact & Portable, Kemudahan Pengoperasian.Smokeless Incinerator adalah sebuah produk solusi Karya Anak Bangsa  untuk penanganan masalah sampah dengan menggunakan produk teknologi ramah lingkungan dan hemat energi.\r\n\r\nIncinerator adalah mesin pembakar sampah dengan mengubah umpan sampah menjadi abu, gas buang, partikulat dan panas yang bertujuan mengurangi volume sampah.\r\n\r\nKelebihan STUNGTAxPINDAD ~ Smokeless Incinerator : Ramah Lingkungan, Hemat Energi, Continuous System, Pembakaran Sempurna, Compact & Portable, Kemudahan Pengoperasian.\r\n', 0, 1, NULL);
INSERT INTO `product` VALUES (2, 'HETRIC', 'Hejotekno Electric Tricycle ', 'HETRIC ~ Hejotekno Electric Tricycle adalah sebuah produk solusi Karya Anak Bangsa untuk penanganan distribusi sampah dengan menggunakan produk teknologi ramah lingkungan dan hemat energi. \r\n\r\nHETRIC ~ Hejotekno Tricycle adalah alat transportasi untuk mendistribusi sampah bertenaga listrik dari baterai isi ulang. \r\n\r\nKelebihan HETRIC ~ Hejotekno Electric Tricycle : Ramah Lingkungan, Hemat Energi, Kemudahan Pengoprasian, Dapat Mengakses Area Kecil dan Memiliki Baterai Untuk Jarak Tempuh 60 Km.\r\n', 0, 1, NULL);
INSERT INTO `product` VALUES (3, 'HEJO CRUSHER ', 'Mesin Pencacah', 'Mesin pencacah adalah perangkat mekanis yang digunakan untuk memotong atau menghancurkan bahan menjadi potongan-potongan yang lebih kecil.\n\nSpesifikasi\nTipe				: 600\nDimensi			: 2000 X 1300 X 2000\nPenggerak			: Motor Listrik 13 KW/ 3Phase\nFrame			: UNP 100\nDiameter Saringan	: 10 mm\nJumlah Pisau		: 22\nKapasitas			: 0,8 – 1 Ton/Jam', 0, 1, NULL);
INSERT INTO `product` VALUES (4, 'HEJO DRYER\r\n', 'Mesin Rotary Dryer', 'Rotary dryer dalam bahasa Indonesia dikenal sebagai \"pengering putar\" atau \"pengering silinder\". Ini adalah jenis pengering industri yang digunakan untuk mengurangi kadar air bahan melalui pemanasan langsung atau tidak langsung. Pengering ini memutar bahan di dalam sebuah drum berputar dan mengeksposnya pada udara panas, yang menguapkan kelembaban.\n\nSpesifikasi\nPanjang			: 1,1 M3/H\nPenggerak			: Motor Listrik 3,75 KW / 3 Phase\nFrame			: Unp 100\nGear Box			: Worm\nKapasitas			: 0,8 – 1 Ton/Jam\nPemanas			: HEJOBURNER \n				  dengan Chamber ', 0, 1, NULL);
INSERT INTO `product` VALUES (5, 'HEJOPYRO', 'Mesin Pyrolysis\r\n', 'Spesifikasi\r\nKapasitas 		: 50 Kg/hari\r\nKeluaran 		: 45-50 liter/hari.\r\nBahan baku 	: Sampah plastik, ban, oli,   				             Styrofoam dll.\r\n\r\nSetara bensin dan solar. Hasil bergantung pada kondisi limbah (kebersihan dan kelembaban). Persentase menghasilkan 70% solar, 30% bensin.', 0, 1, NULL);
INSERT INTO `product` VALUES (6, 'HEJOBURNER', 'Burner Biomass\r\n', 'Spesifikasi\nDimensi	 	: 110 cm x 40 cm x125 cm\nFeeder	 	: 35 cm x 35 cm\nScrew 		: 30 cm\nPipa			: 10 mm, Pelapis Castable\nVoltage	 	: AC 220 V/ 50 Hz\nMotor 		: 40 Watt\nBlower 		: 3 “, 370 Watt\nBahan Bakar 	: Pelet Kayu 6 – 7 Kg/Jam\nType			: 4”, 5”, 6” & 8”', 0, 0, NULL);
INSERT INTO `product` VALUES (7, 'HEJO PRESS BALER\r\n', 'Mesin Press Baler\r\n', '\"Press Baler“ adalah mesin yang digunakan untuk mengkompresi dan mengikat material seperti kertas, plastik, kardus, logam, atau barang lainnya menjadi baling-baling yang padat dan mudah diangkut atau didaur ulang. Mesin ini umumnya digunakan dalam industri pengolahan limbah, pengiriman dan penyimpanan material, dan daur ulang untuk mengelola limbah dan mengoptimalkan ruang penyimpanan\n\nSpesifikasi\n\nRuang Press	: 600 x 900 x 1.000\nPenggerak	 	: Motor Litrik 11,2 KW / 3 Phase\nFrame		: IWF 150\nTiang			: Hollow 100\nBase Plate	 	: MS 20 mm\nPiston Press 	: MS 20 mm\nDimensi		: 1.000 x 700 x 2.500\nPintu 		: 4 \nMatl Pintu		: Plat Esser 5 mm', 0, 1, NULL);
INSERT INTO `product` VALUES (8, 'HEJO CONVEYOR\r\n', 'Mesin Conveyor', '\"Conveyor\" adalah alat mekanis yang digunakan untuk memindahkan barang atau material dari satu tempat ke tempat lain dalam suatu fasilitas atau lokasi. Conveyor umumnya terdiri dari sebuah ban atau sabuk yang bergerak terus-menerus untuk membawa barang secara efisien. Mereka dapat ditemukan dalam berbagai industri, seperti manufaktur, pertambangan, distribusi, dan penyortiran barang.\n\nSpesifikasi\n\nTebal Belt	 	: 10 mm\nLebar Belt 	 	: 500 mm\nFrame 		: UNP 100\nPenggerak 		: Motor Listrik 3,75 KW / 3 Phase\nGear Box  		: Worm Gear\nMin. Panjang	: 5 M', 0, 1, NULL);
INSERT INTO `product` VALUES (9, 'HEJO BRIKET\r\n', 'Mesin Cetak Briket\r\n', 'Mesin cetak briket adalah peralatan yang digunakan untuk mencetak briket atau dari serbuk atau potongan kecil bahan bakar seperti arang, kayu, serbuk gergaji, atau limbah biomassa lainnya. Proses pencetakan ini biasanya melibatkan pemanasan bahan baku hingga suhu tinggi dan penekanan dengan menggunakan tekanan tinggi untuk membentuk briket yang padat dan tahan lama. Mesin cetak briket sering digunakan dalam industri energi alternatif dan pengolahan limbah untuk menghasilkan bahan bakar yang lebih ramah lingkungan dan efisien dalam pembakaran.\n\nSpesifikasi\n\nDimensi	 	: 100 cm x 50 cm x 100 cm\nFrame		: UNP 100\nOutput		: 2 – 3 Ton/Hari\nSistem		: Roll Press\nPower		: 3,75 KW/5 Hp\nVoltase		: AC 380 V/50 Hz/ 3 P', 0, 1, NULL);

SET FOREIGN_KEY_CHECKS = 1;
