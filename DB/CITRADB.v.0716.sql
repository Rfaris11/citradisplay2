-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2017 at 05:31 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `CITRADB`
--

-- --------------------------------------------------------

--
-- Table structure for table `MST_KATEGORI`
--

CREATE TABLE IF NOT EXISTS `MST_KATEGORI` (
`NID` int(11) NOT NULL COMMENT 'ID KATEGORI',
  `VNAMA` varchar(50) NOT NULL COMMENT 'NAMA KATEGORI',
  `VDESKRIPSI` varchar(500) DEFAULT NULL COMMENT 'DESKRIPSI KATEGORI'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `MST_KATEGORI`
--

INSERT INTO `MST_KATEGORI` (`NID`, `VNAMA`, `VDESKRIPSI`) VALUES
(1, 'INDOOR', 'Banner indoor adalah media yang digunakan untuk media promosi produk, event/ acara Anda.'),
(2, 'BANNER DISPLAY', 'Banner display adalah media promosi berjenis bla bla bla dengan kualitas bla bla bla'),
(3, 'OUTDOOR', 'Banner outdoot adalah media promosi bertipikal bla bla bla yang cocok dan memumpuni untuk dipasang di tempat yang rentan terhadap perubahan suhu dan cuaca ekstreem.');

-- --------------------------------------------------------

--
-- Table structure for table `MST_MERK`
--

CREATE TABLE IF NOT EXISTS `MST_MERK` (
`NID` int(11) NOT NULL COMMENT 'ID MERK',
  `VNAMA` varchar(50) NOT NULL COMMENT 'NAMA MERK',
  `VDESKRIPSI` varchar(100) DEFAULT NULL COMMENT 'DESKRIPSI MERK'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `MST_PRODUK`
--

CREATE TABLE IF NOT EXISTS `MST_PRODUK` (
`NID` int(11) NOT NULL COMMENT 'ID PRODUK',
  `NID_KATEGORI` int(11) NOT NULL COMMENT 'RELASI ID KATEGORI',
  `VURL` varchar(100) DEFAULT NULL COMMENT 'DIREKTORI GAMBAR PRODUK',
  `VNAMA` varchar(50) NOT NULL COMMENT 'NAMA PRODUK',
  `VDESKRIPSI` varchar(300) DEFAULT NULL COMMENT 'DESKRIPSI PRODUK',
  `VSPESIFIKASI` varchar(300) DEFAULT NULL COMMENT 'SPESIFIKASI PRODUK',
  `NID_MERK` int(11) NOT NULL COMMENT 'RELASI ID MERK'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=93 ;

--
-- Dumping data for table `MST_PRODUK`
--

INSERT INTO `MST_PRODUK` (`NID`, `NID_KATEGORI`, `VURL`, `VNAMA`, `VDESKRIPSI`, `VSPESIFIKASI`, `NID_MERK`) VALUES
(1, 1, NULL, '130g Matt Eco-solvent Self Adhesive PP Paper 0,914', NULL, NULL, 0),
(2, 1, NULL, '130g Matt Eco-solvent Self Adhesive PP Paper 1,27', '', NULL, 0),
(3, 1, NULL, '130g Matt Eco-solvent Self Adhesive PP Paper 1,52', '', NULL, 0),
(4, 1, NULL, '180g Eco-solvent Matt PP Paper 0,914', '', NULL, 0),
(5, 1, NULL, '180g Eco-solvent Matt PP Paper 1,27', '', NULL, 0),
(6, 1, NULL, '180g Eco-solvent Matt PP Paper 1,52', '', NULL, 0),
(7, 1, NULL, '80120 Glossy PVC Vinyl 0,914', '', NULL, 0),
(8, 1, NULL, '80120 Glossy PVC Vinyl 1,27', '', NULL, 0),
(9, 1, NULL, '80120 Glossy PVC Vinyl 1,52', '', NULL, 0),
(10, 1, NULL, 'Glossy Cold Lamination Film 0,914', '', NULL, 0),
(11, 1, NULL, 'Glossy Cold Lamination Film 1,07', '', NULL, 0),
(12, 1, NULL, 'Glossy Cold Lamination Film 1,27', '', NULL, 0),
(13, 1, NULL, 'Glossy Cold Lamination Film 1,52', '', NULL, 0),
(14, 1, NULL, 'Matt Cold Lamination Film 0,914', '', NULL, 0),
(15, 1, NULL, 'Matt Cold Lamination Film 1,07', '', NULL, 0),
(16, 1, NULL, 'Matt Cold Lamination Film 1,27', '', NULL, 0),
(17, 1, NULL, 'Matt Cold Lamination Film 1,52', '', NULL, 0),
(18, 2, NULL, 'BABY L BANNER', '', NULL, 0),
(19, 2, NULL, 'BABY L BANNER DOUBLE SIDE', '', NULL, 0),
(20, 2, NULL, 'BACK WALL 3x3 (CURVE)', '', NULL, 0),
(21, 2, NULL, 'BACK WALL 3x3 (STRAIGHT)', '', NULL, 0),
(22, 2, NULL, 'BACK WALL 3x4 (CURVE)', '', NULL, 0),
(23, 2, NULL, 'BACK WALL 3x4 (STRAIGHT)', '', NULL, 0),
(24, 2, NULL, 'BROCHURE STAND (AL) ACRYLIC BOARD', '', NULL, 0),
(25, 2, NULL, 'BROCHURE STAND (WOOD)', '', NULL, 0),
(26, 2, NULL, 'DOUBLE LIGHT BOX', '', NULL, 0),
(27, 2, NULL, 'EVENT DESK ECONOMIS', 'Material : Wooden/PVC, Color : Silver/Grey, Package : Double Oxford Bag', NULL, 0),
(28, 2, NULL, 'EVENT DESK/PROMO TABLE (Premium)', '', NULL, 0),
(29, 2, NULL, 'Eventdesk NEW', '', NULL, 0),
(30, 2, NULL, 'FLYING SOCTOR BASE (14-1)', 'Graphic Size : 87*178/80*330, Material : Aluminium/Plastic, Color: Silver/Black, Package : Double Oxford Bag', NULL, 0),
(31, 2, NULL, 'FLYING SOKTOR CROSS', '', NULL, 0),
(32, 2, NULL, 'Folded Panel', '', NULL, 0),
(33, 2, NULL, 'MOVING ROLL UP', '', NULL, 0),
(34, 2, NULL, 'NEW LUXURY ROLLA 85x200', '', NULL, 0),
(35, 2, NULL, 'New Pop Up Counter With Header', '', NULL, 0),
(36, 2, NULL, 'New Pop Up Counter Without Header', '', NULL, 0),
(37, 2, NULL, 'POP UP COUNTER 2x2 (CURVE)', '', NULL, 0),
(38, 2, NULL, 'Pop Up Counter Bulat', '', NULL, 0),
(39, 2, NULL, 'RS 2 (120X200) ST', 'Graphic Size : 120*200, Material : Stainless Steel, Color: Silver, Package : Oxford Bag', NULL, 0),
(40, 2, NULL, 'RS 2 (150x200) ST', 'Graphic Size : 150*200, Material : Stainless Steel, Color: Silver, Package : Oxford Bag', NULL, 0),
(41, 2, NULL, 'RS 2 (60x160) AL', 'Graphic Size : 60*160, Material : Aluminium, Color: Silver, Package : Oxford Bag', NULL, 0),
(42, 2, NULL, 'RS 2 (60x160) ST', 'Graphic Size : 600*160, Material : Stainless Steel, Color: Silver, Package : Oxford Bag', NULL, 0),
(43, 2, NULL, 'RS 2 (80x200) ST', 'Graphic Size : 80*200, Material : Stainless Steel, Color: Silver, Package : Oxford Bag', NULL, 0),
(44, 2, NULL, 'RS 2 (85x200) AL', 'Graphic Size : 85*200, Material : Aluminium, Color: Silver, Package : Oxford Bag', NULL, 0),
(45, 2, NULL, 'RS 2 (85x200) ST', 'Graphic Size : 85*200, Material : Stainless Steel, Color: Silver, Package : Oxford Bag', NULL, 0),
(46, 2, NULL, 'RS 5 (60x160) AL', 'Graphic Size : 60*160, Material : Aluminium, Color: Silver, Package : Oxford Bag', NULL, 0),
(47, 2, NULL, 'RS 5 (80x200) AL', 'Graphic Size : 80*200, Material : Aluminium, Color: Silver, Package : Oxford Bag', NULL, 0),
(48, 2, NULL, 'RS 5 (85x200) AL', 'Graphic Size : 85*200, Material : Aluminium, Color: Silver, Package : Oxford Bag', NULL, 0),
(49, 2, NULL, 'RS 6 (60x160) AL', 'Graphic Size : 60*160, Material : Aluminium, Color: Silver, Package : Oxford Bag', NULL, 0),
(50, 2, NULL, 'RS 6 (85x200) AL', 'Graphic Size : 85*200, Material : Aluminium, Color: Silver, Package : Oxford Bag', NULL, 0),
(51, 2, NULL, 'TABLE LIGHT BOX', '', NULL, 0),
(52, 2, NULL, 'Table X Banner (22*42)', '', NULL, 0),
(53, 2, NULL, 'X BANNER BIG (60x160)', 'Graphic Size : 60*160, Material : Aluminium, Color: Silver/White/Blue, Package : Single Oxford Bag', NULL, 0),
(54, 2, NULL, 'X BANNER BIG (80x180)', 'Graphic Size : 80*180, Material : Aluminium, Color: Silver/White/Blue, Package : Single Oxford Bag', NULL, 0),
(55, 2, NULL, 'X BANNER C-1', '', NULL, 0),
(56, 2, NULL, 'X BANNER W', 'Graphic Size : 60*160/80*180, Material : Aluminium, Color: Silver/White/Blue, Package : Single Oxford Bag', NULL, 0),
(57, 2, NULL, 'Y BANNER (60X160)', '', NULL, 0),
(58, 2, NULL, 'Y BANNER (80x180)', '', NULL, 0),
(59, 3, NULL, 'FG 2.2/240 GSM', 'Type : Matte, Weight 240 Gsm, Width : 2.2m, Length : 50m, Color : White, Package : Roll', NULL, 0),
(60, 3, NULL, 'FG 2.2/240 GSM Feet', '', NULL, 0),
(61, 3, NULL, 'FG 2.2/260 GSM', 'Type : Matte, Weight 260 Gsm, Width : 2.2m, Length : 50m, Color : White, Package : Roll', NULL, 0),
(62, 3, NULL, 'FG 2.2/260 GSM feet', '', NULL, 0),
(63, 3, NULL, 'FG 2.2/280 GSM', 'Type : Matte, Weight 280 Gsm, Width : 2.2m, Length : 50m, Color : White, Package : Roll', NULL, 0),
(64, 3, NULL, 'FG 2.2/280 YY GSM (70 M)', 'Type : Matte, Weight 280 Gsm, Width : 2.2m, Length : 70m, Color : White, Package : Roll', NULL, 0),
(65, 3, NULL, 'FG 2.2/300 GSM', 'Type : Matte, Weight 300 Gsm, Width : 2.2m, Length : 50m, Color : White, Package : Roll', NULL, 0),
(66, 3, NULL, 'FG 2.2/300 GSM JL', 'Type : Matte (JL), Weight 300 Gsm, Width : 2.2m, Length : 50m, Color : White, Package : Roll', NULL, 0),
(67, 3, NULL, 'FG 2.2/340 GSM', 'Type : Matte, Weight 340 Gsm, Width : 2.2m, Length : 50m, Color : White, Package : Roll', NULL, 0),
(68, 3, NULL, 'FG 2.2/440 GSM', 'Type : Matte, Weight 440 Gsm, Width : 2.2m, Length : 50m, Color : White, Package : Roll', NULL, 0),
(69, 3, NULL, 'FG 2.2/440 GSM Glossy', 'Type : Glossy, Weight 440 Gsm, Width : 2.2m, Length : 50m, Color : White, Package : Roll', NULL, 0),
(70, 3, NULL, 'FG 2.2/SL 260 GSM (70)', 'Type : Matte SL, Weight 260 Gsm, Width : 2.2m, Length : 70m, Color : White, Package : Roll', NULL, 0),
(71, 3, NULL, 'FG 2.2/SL 280 GSM', 'Type : Matte SL, Weight 280 Gsm, Width : 2.2m, Length : 50m, Color : White, Package : Roll', NULL, 0),
(72, 3, NULL, 'FG 2.2/SL 280 GSM (70)', 'Type : Matte SL, Weight 280 Gsm, Width : 2.2m, Length : 70m, Color : White, Package : Roll', NULL, 0),
(73, 3, NULL, 'FG 2.5/280 YY GSM (70 M)', 'Type : Matte, Weight 280 Gsm, Width : 2.5m, Length : 70m, Color : White, Package : Roll', NULL, 0),
(74, 3, NULL, 'FG 2.6/260 GSM', 'Type : Matte, Weight 260 Gsm, Width : 2.6m, Length : 50m, Color : White, Package : Roll', NULL, 0),
(75, 3, NULL, 'FG 2.6/270 GSM', 'Type : Matte, Weight 270 Gsm, Width : 2.6m, Length : 50m, Color : White, Package : Roll', NULL, 0),
(76, 3, NULL, 'FG 2.6/280 GSM', 'Type : Matte, Weight 280 Gsm, Width : 2.6m, Length : 50m, Color : White, Package : Roll', NULL, 0),
(77, 3, NULL, 'FG 2.6/280 YY GSM (70 M)', 'Type : Matte, Weight 280 Gsm, Width : 2.6m, Length : 70m, Color : White, Package : Roll', NULL, 0),
(78, 3, NULL, 'FG 3.2/240 GSM JL', 'Type : Matte, Weight 240 Gsm, Width : 3.2m, Length : 50m, Color : White, Package : Roll', NULL, 0),
(79, 3, NULL, 'FG 3.2/240 GSM', 'Type : Matte (JL), Weight 240 Gsm, Width : 3.2m, Length : 50m, Color : White, Package : Roll', NULL, 0),
(80, 3, NULL, 'FG 3.2/240 GSM (60M)', 'Type : Matte, Weight 240 Gsm, Width : 3.2m, Length : 60m, Color : White, Package : Roll', NULL, 0),
(81, 3, NULL, 'FG 3.2/240 GSM (70M)', 'Type : Matte, Weight 240 Gsm, Width : 3.2m, Length : 70m, Color : White, Package : Roll', NULL, 0),
(82, 3, NULL, 'FG 3.2/260 GSM', 'Type : Matte, Weight 260 Gsm, Width : 3.2m, Length : 50m, Color : White, Package : Roll', NULL, 0),
(83, 3, NULL, 'FG 3.2/260 GSM JL', 'Type : Matte (JL), Weight 260 Gsm, Width : 3.2m, Length : 50m, Color : White, Package : Roll', NULL, 0),
(84, 3, NULL, 'FG 3.2/280 GSM', 'Type : Matte, Weight 280 Gsm, Width : 3.2m, Length : 50m, Color : White, Package : Roll', NULL, 0),
(85, 3, NULL, 'FG 3.2/280 YY GSM (70 M)', 'Type : Matte, Weight 280 Gsm, Width : 3.2m, Length : 70m, Color : White, Package : Roll', NULL, 0),
(86, 3, NULL, 'FG 3.2/300 GSM', 'Type : Matte, Weight 300 Gsm, Width : 3.2m, Length : 50m, Color : White, Package : Roll', NULL, 0),
(87, 3, NULL, 'FG 3.2/340 GSM', 'Type : Matte, Weight 340 Gsm, Width : 3.2m, Length : 50m, Color : White, Package : Roll', NULL, 0),
(88, 3, NULL, 'FG 3.2/440 GSM', 'Type : Matte, Weight 440 Gsm, Width : 3.2m, Length : 50m, Color : White, Package : Roll', NULL, 0),
(89, 3, NULL, 'FG 3.2/440 GSM Glossy', 'Type : Glossy, Weight 440 Gsm, Width : 3.2m, Length : 50m, Color : White, Package : Roll', NULL, 0),
(90, 3, NULL, 'FG 3.2/SL 260 GSM (70)', 'Type : Matte SL, Weight 260 Gsm, Width : 3.2m, Length : 70m, Color : White, Package : Roll', NULL, 0),
(91, 3, NULL, 'FG 3.2/SL 280 GSM', 'Type : Matte SL, Weight 280 Gsm, Width : 3.2m, Length : 50m, Color : White, Package : Roll', NULL, 0),
(92, 3, NULL, 'FG 3.2/SL 280 GSM (70)', 'Type : Matte SL, Weight 280 Gsm, Width : 3.2m, Length : 70m, Color : White, Package : Roll', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `MST_USERS`
--

CREATE TABLE IF NOT EXISTS `MST_USERS` (
`NID` int(11) NOT NULL COMMENT 'ID USER',
  `VUSERNAME` varchar(25) NOT NULL COMMENT 'USERNAME',
  `VPASSWORD` varchar(25) NOT NULL COMMENT 'PASSWORD',
  `VEMAIL` varchar(35) NOT NULL COMMENT 'EMAIL USER'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `MST_USERS`
--

INSERT INTO `MST_USERS` (`NID`, `VUSERNAME`, `VPASSWORD`, `VEMAIL`) VALUES
(1, 'USER', '123456', 'abc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `MST_KATEGORI`
--
ALTER TABLE `MST_KATEGORI`
 ADD PRIMARY KEY (`NID`);

--
-- Indexes for table `MST_MERK`
--
ALTER TABLE `MST_MERK`
 ADD PRIMARY KEY (`NID`);

--
-- Indexes for table `MST_PRODUK`
--
ALTER TABLE `MST_PRODUK`
 ADD PRIMARY KEY (`NID`), ADD UNIQUE KEY `VNAMA` (`VNAMA`);

--
-- Indexes for table `MST_USERS`
--
ALTER TABLE `MST_USERS`
 ADD PRIMARY KEY (`NID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `MST_KATEGORI`
--
ALTER TABLE `MST_KATEGORI`
MODIFY `NID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID KATEGORI',AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `MST_MERK`
--
ALTER TABLE `MST_MERK`
MODIFY `NID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID MERK';
--
-- AUTO_INCREMENT for table `MST_PRODUK`
--
ALTER TABLE `MST_PRODUK`
MODIFY `NID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID PRODUK',AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `MST_USERS`
--
ALTER TABLE `MST_USERS`
MODIFY `NID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID USER',AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
