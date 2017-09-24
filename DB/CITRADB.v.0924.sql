-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2017 at 10:32 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citradb`
--

-- --------------------------------------------------------

--
-- Table structure for table `dtl_mst_produk`
--

CREATE TABLE `dtl_mst_produk` (
  `NID` int(11) NOT NULL COMMENT 'ID DETAIL PRODUK',
  `NID_PRODUK` int(11) NOT NULL COMMENT 'ID PRODUK (HEADER)',
  `VURL` varchar(100) NOT NULL COMMENT 'DIREKTORI GAMBAR'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dtl_mst_produk`
--

INSERT INTO `dtl_mst_produk` (`NID`, `NID_PRODUK`, `VURL`) VALUES
(1, 93, 'sample_indoor-1.jpg'),
(2, 93, 'sample_indoor-2.jpg'),
(3, 93, 'sample_indoor-3.jpg'),
(4, 94, 'sample_indoor-1.jpg'),
(5, 94, 'sample_indoor-2.jpg'),
(6, 94, 'sample_indoor-3.jpg'),
(7, 95, 'sample_indoor-1.jpg'),
(8, 95, 'sample_indoor-2.jpg'),
(9, 95, 'sample_indoor-3.jpg'),
(10, 96, 'sample_indoor-1.jpg'),
(11, 96, 'sample_indoor-2.jpg'),
(12, 96, 'sample_indoor-3.jpg'),
(13, 97, 'sample_indoor-1.jpg'),
(14, 97, 'sample_indoor-2.jpg'),
(15, 97, 'sample_indoor-3.jpg'),
(16, 98, 'sample_indoor-1.jpg'),
(17, 98, 'sample_indoor-2.jpg'),
(18, 98, 'sample_indoor-3.jpg'),
(19, 99, 'sample_indoor-1.jpg'),
(20, 99, 'sample_indoor-2.jpg'),
(21, 99, 'sample_indoor-3.jpg'),
(22, 100, 'sample_indoor-1.jpg'),
(23, 100, 'sample_indoor-2.jpg'),
(24, 100, 'sample_indoor-3.jpg'),
(25, 101, 'sample_indoor-1.jpg'),
(26, 101, 'sample_indoor-2.jpg'),
(27, 101, 'sample_indoor-3.jpg'),
(28, 102, 'sample_indoor-1.jpg'),
(29, 102, 'sample_indoor-2.jpg'),
(30, 102, 'sample_indoor-3.jpg'),
(31, 103, 'sample_indoor-1.jpg'),
(32, 103, 'sample_indoor-2.jpg'),
(33, 103, 'sample_indoor-3.jpg'),
(34, 104, 'sample_indoor-1.jpg'),
(35, 104, 'sample_indoor-2.jpg'),
(36, 104, 'sample_indoor-3.jpg'),
(37, 105, 'sample_indoor-1.jpg'),
(38, 105, 'sample_indoor-2.jpg'),
(39, 105, 'sample_indoor-3.jpg'),
(40, 106, 'sample_indoor-1.jpg'),
(41, 106, 'sample_indoor-2.jpg'),
(42, 106, 'sample_indoor-3.jpg'),
(43, 107, 'sample_indoor-1.jpg'),
(44, 107, 'sample_indoor-2.jpg'),
(45, 107, 'sample_indoor-3.jpg'),
(46, 108, 'sample_bannerdisplay-1.jpg'),
(47, 108, 'sample_bannerdisplay-2.jpg'),
(48, 108, 'sample_bannerdisplay-3.jpg'),
(49, 109, 'sample_bannerdisplay-1.jpg'),
(50, 109, 'sample_bannerdisplay-2.jpg'),
(51, 109, 'sample_bannerdisplay-3.jpg'),
(52, 110, 'sample_bannerdisplay-1.jpg'),
(53, 110, 'sample_bannerdisplay-2.jpg'),
(54, 110, 'sample_bannerdisplay-3.jpg'),
(55, 111, 'sample_bannerdisplay-1.jpg'),
(56, 111, 'sample_bannerdisplay-2.jpg'),
(57, 111, 'sample_bannerdisplay-3.jpg'),
(58, 112, 'sample_bannerdisplay-1.jpg'),
(59, 112, 'sample_bannerdisplay-2.jpg'),
(60, 112, 'sample_bannerdisplay-3.jpg'),
(61, 113, 'sample_bannerdisplay-1.jpg'),
(62, 113, 'sample_bannerdisplay-2.jpg'),
(63, 113, 'sample_bannerdisplay-3.jpg'),
(64, 114, 'sample_bannerdisplay-1.jpg'),
(65, 114, 'sample_bannerdisplay-2.jpg'),
(66, 114, 'sample_bannerdisplay-3.jpg'),
(67, 115, 'sample_bannerdisplay-1.jpg'),
(68, 115, 'sample_bannerdisplay-2.jpg'),
(69, 115, 'sample_bannerdisplay-3.jpg'),
(70, 116, 'sample_bannerdisplay-1.jpg'),
(71, 116, 'sample_bannerdisplay-2.jpg'),
(72, 116, 'sample_bannerdisplay-3.jpg'),
(73, 117, 'sample_bannerdisplay-1.jpg'),
(74, 117, 'sample_bannerdisplay-2.jpg'),
(75, 117, 'sample_bannerdisplay-3.jpg'),
(76, 118, 'sample_bannerdisplay-1.jpg'),
(77, 118, 'sample_bannerdisplay-2.jpg'),
(78, 118, 'sample_bannerdisplay-3.jpg'),
(79, 119, 'sample_bannerdisplay-1.jpg'),
(80, 119, 'sample_bannerdisplay-2.jpg'),
(81, 119, 'sample_bannerdisplay-3.jpg'),
(82, 120, 'sample_bannerdisplay-1.jpg'),
(83, 120, 'sample_bannerdisplay-2.jpg'),
(84, 120, 'sample_bannerdisplay-3.jpg'),
(85, 121, 'sample_bannerdisplay-1.jpg'),
(86, 121, 'sample_bannerdisplay-2.jpg'),
(87, 121, 'sample_bannerdisplay-3.jpg'),
(88, 122, 'sample_bannerdisplay-1.jpg'),
(89, 122, 'sample_bannerdisplay-2.jpg'),
(90, 122, 'sample_bannerdisplay-3.jpg'),
(91, 123, 'sample_outdoor-1.jpg'),
(92, 123, 'sample_outdoor-2.jpg'),
(93, 123, 'sample_outdoor-3.jpg'),
(94, 124, 'sample_outdoor-1.jpg'),
(95, 124, 'sample_outdoor-2.jpg'),
(96, 124, 'sample_outdoor-3.jpg'),
(97, 125, 'sample_outdoor-1.jpg'),
(98, 125, 'sample_outdoor-2.jpg'),
(99, 125, 'sample_outdoor-3.jpg'),
(100, 126, 'sample_outdoor-1.jpg'),
(101, 126, 'sample_outdoor-2.jpg'),
(102, 126, 'sample_outdoor-3.jpg'),
(103, 127, 'sample_outdoor-1.jpg'),
(104, 127, 'sample_outdoor-2.jpg'),
(105, 127, 'sample_outdoor-3.jpg'),
(106, 128, 'sample_outdoor-1.jpg'),
(107, 128, 'sample_outdoor-2.jpg'),
(108, 128, 'sample_outdoor-3.jpg'),
(109, 129, 'sample_outdoor-1.jpg'),
(110, 129, 'sample_outdoor-2.jpg'),
(111, 129, 'sample_outdoor-3.jpg'),
(112, 130, 'sample_outdoor-1.jpg'),
(113, 130, 'sample_outdoor-2.jpg'),
(114, 130, 'sample_outdoor-3.jpg'),
(115, 131, 'sample_outdoor-1.jpg'),
(116, 131, 'sample_outdoor-2.jpg'),
(117, 131, 'sample_outdoor-3.jpg'),
(118, 132, 'sample_outdoor-1.jpg'),
(119, 132, 'sample_outdoor-2.jpg'),
(120, 132, 'sample_outdoor-3.jpg'),
(121, 133, 'sample_outdoor-1.jpg'),
(122, 133, 'sample_outdoor-2.jpg'),
(123, 133, 'sample_outdoor-3.jpg'),
(124, 134, 'sample_outdoor-1.jpg'),
(125, 134, 'sample_outdoor-2.jpg'),
(126, 134, 'sample_outdoor-3.jpg'),
(127, 135, 'sample_outdoor-1.jpg'),
(128, 135, 'sample_outdoor-2.jpg'),
(129, 135, 'sample_outdoor-3.jpg'),
(130, 136, 'sample_outdoor-1.jpg'),
(131, 136, 'sample_outdoor-2.jpg'),
(132, 136, 'sample_outdoor-3.jpg'),
(133, 137, 'sample_outdoor-1.jpg'),
(134, 137, 'sample_outdoor-2.jpg'),
(135, 137, 'sample_outdoor-3.jpg'),
(136, 138, 'http://localhost/citradisplay/citradisplay2/assets/uploads/');

-- --------------------------------------------------------

--
-- Table structure for table `mst_kategori`
--

CREATE TABLE `mst_kategori` (
  `NID` int(11) NOT NULL COMMENT 'ID KATEGORI',
  `VNAMA` varchar(50) NOT NULL COMMENT 'NAMA KATEGORI',
  `VURL` varchar(100) DEFAULT NULL COMMENT 'NAMA FILE GAMBAR DAN FORMATNYA',
  `VDESKRIPSI` varchar(500) DEFAULT NULL COMMENT 'DESKRIPSI KATEGORI'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_kategori`
--

INSERT INTO `mst_kategori` (`NID`, `VNAMA`, `VURL`, `VDESKRIPSI`) VALUES
(1, 'INDOOR', NULL, 'Banner indoor adalah media yang digunakan untuk media promosi produk, event/ acara Anda.'),
(2, 'BANNER DISPLAY', NULL, 'Banner display adalah media promosi berjenis bla bla bla dengan kualitas bla bla bla'),
(3, 'OUTDOOR', NULL, 'Banner outdoot adalah media promosi bertipikal bla bla bla yang cocok dan memumpuni untuk dipasang di tempat yang rentan terhadap perubahan suhu dan cuaca ekstreem.'),
(4, 'tes coy', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mst_merk`
--

CREATE TABLE `mst_merk` (
  `NID` int(11) NOT NULL COMMENT 'ID MERK',
  `VNAMA` varchar(50) NOT NULL COMMENT 'NAMA MERK',
  `VDESKRIPSI` varchar(100) DEFAULT NULL COMMENT 'DESKRIPSI MERK'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mst_produk`
--

CREATE TABLE `mst_produk` (
  `NID` int(11) NOT NULL COMMENT 'ID PRODUK',
  `NID_KATEGORI` int(11) NOT NULL COMMENT 'RELASI ID KATEGORI',
  `VURL1` varchar(100) DEFAULT NULL COMMENT 'DIREKTORI GAMBAR 1 PRODUK',
  `VURL2` varchar(100) DEFAULT NULL COMMENT 'DIREKTORI GAMBAR 2 PRODUK',
  `VURL3` varchar(100) DEFAULT NULL COMMENT 'DIREKTORI GAMBAR 3 PRODUK',
  `VNAMA` varchar(50) NOT NULL COMMENT 'NAMA PRODUK',
  `VDESKRIPSI` varchar(300) DEFAULT NULL COMMENT 'DESKRIPSI PRODUK',
  `VSPESIFIKASI` varchar(300) DEFAULT NULL COMMENT 'SPESIFIKASI PRODUK',
  `NID_MERK` int(11) NOT NULL COMMENT 'RELASI ID MERK'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_produk`
--

INSERT INTO `mst_produk` (`NID`, `NID_KATEGORI`, `VURL1`, `VURL2`, `VURL3`, `VNAMA`, `VDESKRIPSI`, `VSPESIFIKASI`, `NID_MERK`) VALUES
(93, 1, 'assets/images/produk/sample_indoor/1.jpg', 'assets/images/produk/sample_indoor/2.jpg', 'assets/images/produk/sample_indoor/3.jpg', 'TITLE PRODUK INDOOR SERI - 1', 'Uraian deskripsi tentang produk berkategori INDOOOR seri - 1', 'Detail informasi spesifikasi produk INDOOR tentang ukuran, berat, dan fungsi. Produk INDOOR Seri - 1', 0),
(94, 1, 'assets/images/produk/sample_indoor/1.jpg', 'assets/images/produk/sample_indoor/2.jpg', 'assets/images/produk/sample_indoor/3.jpg', 'TITLE PRODUK INDOOR SERI - 2', 'Uraian deskripsi tentang produk berkategori INDOOOR seri - 2', 'Detail informasi spesifikasi produk INDOOR tentang ukuran, berat, dan fungsi. Produk INDOOR Seri - 2', 0),
(95, 1, 'assets/images/produk/sample_indoor/1.jpg', 'assets/images/produk/sample_indoor/2.jpg', 'assets/images/produk/sample_indoor/3.jpg', 'TITLE PRODUK INDOOR SERI - 3', 'Uraian deskripsi tentang produk berkategori INDOOOR seri - 3', 'Detail informasi spesifikasi produk INDOOR tentang ukuran, berat, dan fungsi. Produk INDOOR Seri - 3', 0),
(96, 1, 'assets/images/produk/sample_indoor/1.jpg', 'assets/images/produk/sample_indoor/2.jpg', 'assets/images/produk/sample_indoor/3.jpg', 'TITLE PRODUK INDOOR SERI - 4', 'Uraian deskripsi tentang produk berkategori INDOOOR seri - 4', 'Detail informasi spesifikasi produk INDOOR tentang ukuran, berat, dan fungsi. Produk INDOOR Seri - 4', 0),
(97, 1, 'assets/images/produk/sample_indoor/1.jpg', 'assets/images/produk/sample_indoor/2.jpg', 'assets/images/produk/sample_indoor/3.jpg', 'TITLE PRODUK INDOOR SERI - 5', 'Uraian deskripsi tentang produk berkategori INDOOOR seri - 5', 'Detail informasi spesifikasi produk INDOOR tentang ukuran, berat, dan fungsi. Produk INDOOR Seri - 5', 0),
(98, 1, 'assets/images/produk/sample_indoor/1.jpg', 'assets/images/produk/sample_indoor/2.jpg', 'assets/images/produk/sample_indoor/3.jpg', 'TITLE PRODUK INDOOR SERI - 6', 'Uraian deskripsi tentang produk berkategori INDOOOR seri - 6', 'Detail informasi spesifikasi produk INDOOR tentang ukuran, berat, dan fungsi. Produk INDOOR Seri - 6', 0),
(99, 1, 'assets/images/produk/sample_indoor/1.jpg', 'assets/images/produk/sample_indoor/2.jpg', 'assets/images/produk/sample_indoor/3.jpg', 'TITLE PRODUK INDOOR SERI - 7', 'Uraian deskripsi tentang produk berkategori INDOOOR seri - 7', 'Detail informasi spesifikasi produk INDOOR tentang ukuran, berat, dan fungsi. Produk INDOOR Seri - 7', 0),
(100, 1, 'assets/images/produk/sample_indoor/1.jpg', 'assets/images/produk/sample_indoor/2.jpg', 'assets/images/produk/sample_indoor/3.jpg', 'TITLE PRODUK INDOOR SERI - 8', 'Uraian deskripsi tentang produk berkategori INDOOOR seri - 8', 'Detail informasi spesifikasi produk INDOOR tentang ukuran, berat, dan fungsi. Produk INDOOR Seri - 8', 0),
(101, 1, 'assets/images/produk/sample_indoor/1.jpg', 'assets/images/produk/sample_indoor/2.jpg', 'assets/images/produk/sample_indoor/3.jpg', 'TITLE PRODUK INDOOR SERI - 9', 'Uraian deskripsi tentang produk berkategori INDOOOR seri - 9', 'Detail informasi spesifikasi produk INDOOR tentang ukuran, berat, dan fungsi. Produk INDOOR Seri - 9', 0),
(102, 1, 'assets/images/produk/sample_indoor/1.jpg', 'assets/images/produk/sample_indoor/2.jpg', 'assets/images/produk/sample_indoor/3.jpg', 'TITLE PRODUK INDOOR SERI - 10', 'Uraian deskripsi tentang produk berkategori INDOOOR seri - 10', 'Detail informasi spesifikasi produk INDOOR tentang ukuran, berat, dan fungsi. Produk INDOOR Seri - 10', 0),
(103, 1, 'assets/images/produk/sample_indoor/1.jpg', 'assets/images/produk/sample_indoor/2.jpg', 'assets/images/produk/sample_indoor/3.jpg', 'TITLE PRODUK INDOOR SERI - 11', 'Uraian deskripsi tentang produk berkategori INDOOOR seri - 11', 'Detail informasi spesifikasi produk INDOOR tentang ukuran, berat, dan fungsi. Produk INDOOR Seri - 11', 0),
(104, 1, 'assets/images/produk/sample_indoor/1.jpg', 'assets/images/produk/sample_indoor/2.jpg', 'assets/images/produk/sample_indoor/3.jpg', 'TITLE PRODUK INDOOR SERI - 12', 'Uraian deskripsi tentang produk berkategori INDOOOR seri - 12', 'Detail informasi spesifikasi produk INDOOR tentang ukuran, berat, dan fungsi. Produk INDOOR Seri - 12', 0),
(105, 1, 'assets/images/produk/sample_indoor/1.jpg', 'assets/images/produk/sample_indoor/2.jpg', 'assets/images/produk/sample_indoor/3.jpg', 'TITLE PRODUK INDOOR SERI - 13', 'Uraian deskripsi tentang produk berkategori INDOOOR seri - 13', 'Detail informasi spesifikasi produk INDOOR tentang ukuran, berat, dan fungsi. Produk INDOOR Seri - 13', 0),
(106, 1, 'assets/images/produk/sample_indoor/1.jpg', 'assets/images/produk/sample_indoor/2.jpg', 'assets/images/produk/sample_indoor/3.jpg', 'TITLE PRODUK INDOOR SERI - 14', 'Uraian deskripsi tentang produk berkategori INDOOOR seri - 14', 'Detail informasi spesifikasi produk INDOOR tentang ukuran, berat, dan fungsi. Produk INDOOR Seri - 14', 0),
(107, 1, 'assets/images/produk/sample_indoor/1.jpg', 'assets/images/produk/sample_indoor/2.jpg', 'assets/images/produk/sample_indoor/3.jpg', 'TITLE PRODUK INDOOR SERI - 15', 'Uraian deskripsi tentang produk berkategori INDOOOR seri - 15', 'Detail informasi spesifikasi produk INDOOR tentang ukuran, berat, dan fungsi. Produk INDOOR Seri - 15', 0),
(108, 2, 'assets/images/produk/sample_bannerdisplay/1.jpg', 'assets/images/produk/sample_bannerdisplay/2.jpg', 'assets/images/produk/sample_bannerdisplay/3.jpg', 'TITLE PRODUK BANNER DISPLAY SERI - 1', 'Uraian deskripsi tentang produk berkategori BANNER DISPLAY seri - 1', 'Detail informasi spesifikasi produk BANNER DISPLAY tentang ukuran, berat, dan fungsi. Produk BANNER DISPLAY Seri - 1', 0),
(109, 2, 'assets/images/produk/sample_bannerdisplay/1.jpg', 'assets/images/produk/sample_bannerdisplay/2.jpg', 'assets/images/produk/sample_bannerdisplay/3.jpg', 'TITLE PRODUK BANNER DISPLAY SERI - 2', 'Uraian deskripsi tentang produk berkategori BANNER DISPLAY seri - 2', 'Detail informasi spesifikasi produk BANNER DISPLAY tentang ukuran, berat, dan fungsi. Produk BANNER DISPLAY Seri - 2', 0),
(110, 2, 'assets/images/produk/sample_bannerdisplay/1.jpg', 'assets/images/produk/sample_bannerdisplay/2.jpg', 'assets/images/produk/sample_bannerdisplay/3.jpg', 'TITLE PRODUK BANNER DISPLAY SERI - 3', 'Uraian deskripsi tentang produk berkategori BANNER DISPLAY seri - 3', 'Detail informasi spesifikasi produk BANNER DISPLAY tentang ukuran, berat, dan fungsi. Produk BANNER DISPLAY Seri - 3', 0),
(111, 2, 'assets/images/produk/sample_bannerdisplay/1.jpg', 'assets/images/produk/sample_bannerdisplay/2.jpg', 'assets/images/produk/sample_bannerdisplay/3.jpg', 'TITLE PRODUK BANNER DISPLAY SERI - 4', 'Uraian deskripsi tentang produk berkategori BANNER DISPLAY seri - 4', 'Detail informasi spesifikasi produk BANNER DISPLAY tentang ukuran, berat, dan fungsi. Produk BANNER DISPLAY Seri - 4', 0),
(112, 2, 'assets/images/produk/sample_bannerdisplay/1.jpg', 'assets/images/produk/sample_bannerdisplay/2.jpg', 'assets/images/produk/sample_bannerdisplay/3.jpg', 'TITLE PRODUK BANNER DISPLAY SERI - 5', 'Uraian deskripsi tentang produk berkategori BANNER DISPLAY seri - 5', 'Detail informasi spesifikasi produk BANNER DISPLAY tentang ukuran, berat, dan fungsi. Produk BANNER DISPLAY Seri - 5', 0),
(113, 2, 'assets/images/produk/sample_bannerdisplay/1.jpg', 'assets/images/produk/sample_bannerdisplay/2.jpg', 'assets/images/produk/sample_bannerdisplay/3.jpg', 'TITLE PRODUK BANNER DISPLAY SERI - 6', 'Uraian deskripsi tentang produk berkategori BANNER DISPLAY seri - 6', 'Detail informasi spesifikasi produk BANNER DISPLAY tentang ukuran, berat, dan fungsi. Produk BANNER DISPLAY Seri - 6', 0),
(114, 2, 'assets/images/produk/sample_bannerdisplay/1.jpg', 'assets/images/produk/sample_bannerdisplay/2.jpg', 'assets/images/produk/sample_bannerdisplay/3.jpg', 'TITLE PRODUK BANNER DISPLAY SERI - 7', 'Uraian deskripsi tentang produk berkategori BANNER DISPLAY seri - 7', 'Detail informasi spesifikasi produk BANNER DISPLAY tentang ukuran, berat, dan fungsi. Produk BANNER DISPLAY Seri - 7', 0),
(115, 2, 'assets/images/produk/sample_bannerdisplay/1.jpg', 'assets/images/produk/sample_bannerdisplay/2.jpg', 'assets/images/produk/sample_bannerdisplay/3.jpg', 'TITLE PRODUK BANNER DISPLAY SERI - 8', 'Uraian deskripsi tentang produk berkategori BANNER DISPLAY seri - 8', 'Detail informasi spesifikasi produk BANNER DISPLAY tentang ukuran, berat, dan fungsi. Produk BANNER DISPLAY Seri - 8', 0),
(116, 2, 'assets/images/produk/sample_bannerdisplay/1.jpg', 'assets/images/produk/sample_bannerdisplay/2.jpg', 'assets/images/produk/sample_bannerdisplay/3.jpg', 'TITLE PRODUK BANNER DISPLAY SERI - 9', 'Uraian deskripsi tentang produk berkategori BANNER DISPLAY seri - 9', 'Detail informasi spesifikasi produk BANNER DISPLAY tentang ukuran, berat, dan fungsi. Produk BANNER DISPLAY Seri - 9', 0),
(117, 2, 'assets/images/produk/sample_bannerdisplay/1.jpg', 'assets/images/produk/sample_bannerdisplay/2.jpg', 'assets/images/produk/sample_bannerdisplay/3.jpg', 'TITLE PRODUK BANNER DISPLAY SERI - 10', 'Uraian deskripsi tentang produk berkategori BANNER DISPLAY seri - 10', 'Detail informasi spesifikasi produk BANNER DISPLAY tentang ukuran, berat, dan fungsi. Produk BANNER DISPLAY Seri - 10', 0),
(118, 2, 'assets/images/produk/sample_bannerdisplay/1.jpg', 'assets/images/produk/sample_bannerdisplay/2.jpg', 'assets/images/produk/sample_bannerdisplay/3.jpg', 'TITLE PRODUK BANNER DISPLAY SERI - 11', 'Uraian deskripsi tentang produk berkategori BANNER DISPLAY seri - 11', 'Detail informasi spesifikasi produk BANNER DISPLAY tentang ukuran, berat, dan fungsi. Produk BANNER DISPLAY Seri - 11', 0),
(119, 2, 'assets/images/produk/sample_bannerdisplay/1.jpg', 'assets/images/produk/sample_bannerdisplay/2.jpg', 'assets/images/produk/sample_bannerdisplay/3.jpg', 'TITLE PRODUK BANNER DISPLAY SERI - 12', 'Uraian deskripsi tentang produk berkategori BANNER DISPLAY seri - 12', 'Detail informasi spesifikasi produk BANNER DISPLAY tentang ukuran, berat, dan fungsi. Produk BANNER DISPLAY Seri - 12', 0),
(120, 2, 'assets/images/produk/sample_bannerdisplay/1.jpg', 'assets/images/produk/sample_bannerdisplay/2.jpg', 'assets/images/produk/sample_bannerdisplay/3.jpg', 'TITLE PRODUK BANNER DISPLAY SERI - 13', 'Uraian deskripsi tentang produk berkategori BANNER DISPLAY seri - 13', 'Detail informasi spesifikasi produk BANNER DISPLAY tentang ukuran, berat, dan fungsi. Produk BANNER DISPLAY Seri - 13', 0),
(121, 2, 'assets/images/produk/sample_bannerdisplay/1.jpg', 'assets/images/produk/sample_bannerdisplay/2.jpg', 'assets/images/produk/sample_bannerdisplay/3.jpg', 'TITLE PRODUK BANNER DISPLAY SERI - 14', 'Uraian deskripsi tentang produk berkategori BANNER DISPLAY seri - 14', 'Detail informasi spesifikasi produk BANNER DISPLAY tentang ukuran, berat, dan fungsi. Produk BANNER DISPLAY Seri - 14', 0),
(122, 2, 'assets/images/produk/sample_bannerdisplay/1.jpg', 'assets/images/produk/sample_bannerdisplay/2.jpg', 'assets/images/produk/sample_bannerdisplay/3.jpg', 'TITLE PRODUK BANNER DISPLAY SERI - 15', 'Uraian deskripsi tentang produk berkategori BANNER DISPLAY seri - 15', 'Detail informasi spesifikasi produk BANNER DISPLAY tentang ukuran, berat, dan fungsi. Produk BANNER DISPLAY Seri - 15', 0),
(123, 3, 'assets/images/produk/sample_outdoor/1.jpg', 'assets/images/produk/sample_outdoor/2.jpg', 'assets/images/produk/sample_outdoor/3.jpg', 'TITLE PRODUK OUTDOOR SERI - 1', 'Uraian deskripsi tentang produk berkategori OUTDOOR seri - 1', 'Detail informasi spesifikasi produk OUTDOOR tentang ukuran, berat, dan fungsi. Produk OUTDOOR Seri - 1', 0),
(124, 3, 'assets/images/produk/sample_outdoor/1.jpg', 'assets/images/produk/sample_outdoor/2.jpg', 'assets/images/produk/sample_outdoor/3.jpg', 'TITLE PRODUK OUTDOOR SERI - 2', 'Uraian deskripsi tentang produk berkategori OUTDOOR seri - 2', 'Detail informasi spesifikasi produk OUTDOOR tentang ukuran, berat, dan fungsi. Produk OUTDOOR Seri - 2', 0),
(125, 3, 'assets/images/produk/sample_outdoor/1.jpg', 'assets/images/produk/sample_outdoor/2.jpg', 'assets/images/produk/sample_outdoor/3.jpg', 'TITLE PRODUK OUTDOOR SERI - 3', 'Uraian deskripsi tentang produk berkategori OUTDOOR seri - 3', 'Detail informasi spesifikasi produk OUTDOOR tentang ukuran, berat, dan fungsi. Produk OUTDOOR Seri - 3', 0),
(126, 3, 'assets/images/produk/sample_outdoor/1.jpg', 'assets/images/produk/sample_outdoor/2.jpg', 'assets/images/produk/sample_outdoor/3.jpg', 'TITLE PRODUK OUTDOOR SERI - 4', 'Uraian deskripsi tentang produk berkategori OUTDOOR seri - 4', 'Detail informasi spesifikasi produk OUTDOOR tentang ukuran, berat, dan fungsi. Produk OUTDOOR Seri - 4', 0),
(127, 3, 'assets/images/produk/sample_outdoor/1.jpg', 'assets/images/produk/sample_outdoor/2.jpg', 'assets/images/produk/sample_outdoor/3.jpg', 'TITLE PRODUK OUTDOOR SERI - 5', 'Uraian deskripsi tentang produk berkategori OUTDOOR seri - 5', 'Detail informasi spesifikasi produk OUTDOOR tentang ukuran, berat, dan fungsi. Produk OUTDOOR Seri - 5', 0),
(128, 3, 'assets/images/produk/sample_outdoor/1.jpg', 'assets/images/produk/sample_outdoor/2.jpg', 'assets/images/produk/sample_outdoor/3.jpg', 'TITLE PRODUK OUTDOOR SERI - 6', 'Uraian deskripsi tentang produk berkategori OUTDOOR seri - 6', 'Detail informasi spesifikasi produk OUTDOOR tentang ukuran, berat, dan fungsi. Produk OUTDOOR Seri - 6', 0),
(129, 3, 'assets/images/produk/sample_outdoor/1.jpg', 'assets/images/produk/sample_outdoor/2.jpg', 'assets/images/produk/sample_outdoor/3.jpg', 'TITLE PRODUK OUTDOOR SERI - 7', 'Uraian deskripsi tentang produk berkategori OUTDOOR seri - 7', 'Detail informasi spesifikasi produk OUTDOOR tentang ukuran, berat, dan fungsi. Produk OUTDOOR Seri - 7', 0),
(130, 3, 'assets/images/produk/sample_outdoor/1.jpg', 'assets/images/produk/sample_outdoor/2.jpg', 'assets/images/produk/sample_outdoor/3.jpg', 'TITLE PRODUK OUTDOOR SERI - 8', 'Uraian deskripsi tentang produk berkategori OUTDOOR seri - 8', 'Detail informasi spesifikasi produk OUTDOOR tentang ukuran, berat, dan fungsi. Produk OUTDOOR Seri - 8', 0),
(131, 3, 'assets/images/produk/sample_outdoor/1.jpg', 'assets/images/produk/sample_outdoor/2.jpg', 'assets/images/produk/sample_outdoor/3.jpg', 'TITLE PRODUK OUTDOOR SERI - 9', 'Uraian deskripsi tentang produk berkategori OUTDOOR seri - 9', 'Detail informasi spesifikasi produk OUTDOOR tentang ukuran, berat, dan fungsi. Produk OUTDOOR Seri - 9', 0),
(132, 3, 'assets/images/produk/sample_outdoor/1.jpg', 'assets/images/produk/sample_outdoor/2.jpg', 'assets/images/produk/sample_outdoor/3.jpg', 'TITLE PRODUK OUTDOOR SERI - 10', 'Uraian deskripsi tentang produk berkategori OUTDOOR seri - 10', 'Detail informasi spesifikasi produk OUTDOOR tentang ukuran, berat, dan fungsi. Produk OUTDOOR Seri - 10', 0),
(133, 3, 'assets/images/produk/sample_outdoor/1.jpg', 'assets/images/produk/sample_outdoor/2.jpg', 'assets/images/produk/sample_outdoor/3.jpg', 'TITLE PRODUK OUTDOOR SERI - 11', 'Uraian deskripsi tentang produk berkategori OUTDOOR seri - 11', 'Detail informasi spesifikasi produk OUTDOOR tentang ukuran, berat, dan fungsi. Produk OUTDOOR Seri - 11', 0),
(134, 3, 'assets/images/produk/sample_outdoor/1.jpg', 'assets/images/produk/sample_outdoor/2.jpg', 'assets/images/produk/sample_outdoor/3.jpg', 'TITLE PRODUK OUTDOOR SERI - 12', 'Uraian deskripsi tentang produk berkategori OUTDOOR seri - 12', 'Detail informasi spesifikasi produk OUTDOOR tentang ukuran, berat, dan fungsi. Produk OUTDOOR Seri - 12', 0),
(135, 3, 'assets/images/produk/sample_outdoor/1.jpg', 'assets/images/produk/sample_outdoor/2.jpg', 'assets/images/produk/sample_outdoor/3.jpg', 'TITLE PRODUK OUTDOOR SERI - 13', 'Uraian deskripsi tentang produk berkategori OUTDOOR seri - 13', 'Detail informasi spesifikasi produk OUTDOOR tentang ukuran, berat, dan fungsi. Produk OUTDOOR Seri - 13', 0),
(136, 3, 'assets/images/produk/sample_outdoor/1.jpg', 'assets/images/produk/sample_outdoor/2.jpg', 'assets/images/produk/sample_outdoor/3.jpg', 'TITLE PRODUK OUTDOOR SERI - 14', 'Uraian deskripsi tentang produk berkategori OUTDOOR seri - 14', 'Detail informasi spesifikasi produk OUTDOOR tentang ukuran, berat, dan fungsi. Produk OUTDOOR Seri - 14', 0),
(137, 3, 'assets/images/produk/sample_outdoor/1.jpg', 'assets/images/produk/sample_outdoor/2.jpg', 'assets/images/produk/sample_outdoor/3.jpg', 'TITLE PRODUK OUTDOOR SERI - 15', 'Uraian deskripsi tentang produk berkategori OUTDOOR seri - 15', 'Detail informasi spesifikasi produk OUTDOOR tentang ukuran, berat, dan fungsi. Produk OUTDOOR Seri - 15', 0),
(138, 4, '0', '0', '0', 'tes', 'tes', 'tes', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mst_users`
--

CREATE TABLE `mst_users` (
  `NID` int(11) NOT NULL COMMENT 'ID USER',
  `VUSERNAME` varchar(25) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL COMMENT 'USERNAME',
  `VPASSWORD` varchar(255) NOT NULL COMMENT 'PASSWORD',
  `VEMAIL` varchar(35) NOT NULL COMMENT 'EMAIL USER'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_users`
--

INSERT INTO `mst_users` (`NID`, `VUSERNAME`, `VPASSWORD`, `VEMAIL`) VALUES
(1, 'USER', 'c3f4844291667a12a22dc50401863839', 'abc');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_detail_produk`
-- (See below for the actual view)
--
CREATE TABLE `v_detail_produk` (
`NID` int(11)
,`NID_KATEGORI` int(11)
,`VURL` varchar(100)
,`VNAMA` varchar(50)
,`VDESKRIPSI` varchar(300)
,`VSPESIFIKASI` varchar(300)
,`VNAMA_KTG` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_get_selected_master_prod`
-- (See below for the actual view)
--
CREATE TABLE `v_get_selected_master_prod` (
`ID` int(11)
,`ID_KATEGORI` int(11)
,`NAMA_KATEGORI` varchar(50)
,`NAMA_PRODUK` varchar(50)
,`VDESKRIPSI` varchar(300)
,`VSPESIFIKASI` varchar(300)
,`VURL` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure for view `v_detail_produk`
--
DROP TABLE IF EXISTS `v_detail_produk`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_detail_produk`  AS  select `prd`.`NID` AS `NID`,`prd`.`NID_KATEGORI` AS `NID_KATEGORI`,(select `dtl_mst_produk`.`VURL` from `dtl_mst_produk` where (`dtl_mst_produk`.`NID_PRODUK` = `prd`.`NID`) limit 1) AS `VURL`,`prd`.`VNAMA` AS `VNAMA`,`prd`.`VDESKRIPSI` AS `VDESKRIPSI`,`prd`.`VSPESIFIKASI` AS `VSPESIFIKASI`,`ktg`.`VNAMA` AS `VNAMA_KTG` from (`mst_produk` `prd` join `mst_kategori` `ktg`) where (`prd`.`NID_KATEGORI` = `ktg`.`NID`) ;

-- --------------------------------------------------------

--
-- Structure for view `v_get_selected_master_prod`
--
DROP TABLE IF EXISTS `v_get_selected_master_prod`;

CREATE ALGORITHM=MERGE DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_get_selected_master_prod`  AS  select `a`.`NID` AS `ID`,`a`.`NID_KATEGORI` AS `ID_KATEGORI`,`c`.`VNAMA` AS `NAMA_KATEGORI`,`a`.`VNAMA` AS `NAMA_PRODUK`,`a`.`VDESKRIPSI` AS `VDESKRIPSI`,`a`.`VSPESIFIKASI` AS `VSPESIFIKASI`,`b`.`VURL` AS `VURL` from ((`mst_produk` `a` join `dtl_mst_produk` `b` on((`a`.`NID` = `b`.`NID_PRODUK`))) join `mst_kategori` `c` on((`a`.`NID_KATEGORI` = `c`.`NID`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dtl_mst_produk`
--
ALTER TABLE `dtl_mst_produk`
  ADD PRIMARY KEY (`NID`);

--
-- Indexes for table `mst_kategori`
--
ALTER TABLE `mst_kategori`
  ADD PRIMARY KEY (`NID`);

--
-- Indexes for table `mst_merk`
--
ALTER TABLE `mst_merk`
  ADD PRIMARY KEY (`NID`);

--
-- Indexes for table `mst_produk`
--
ALTER TABLE `mst_produk`
  ADD PRIMARY KEY (`NID`),
  ADD UNIQUE KEY `VNAMA` (`VNAMA`);

--
-- Indexes for table `mst_users`
--
ALTER TABLE `mst_users`
  ADD PRIMARY KEY (`NID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dtl_mst_produk`
--
ALTER TABLE `dtl_mst_produk`
  MODIFY `NID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID DETAIL PRODUK', AUTO_INCREMENT=137;
--
-- AUTO_INCREMENT for table `mst_kategori`
--
ALTER TABLE `mst_kategori`
  MODIFY `NID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID KATEGORI', AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mst_merk`
--
ALTER TABLE `mst_merk`
  MODIFY `NID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID MERK';
--
-- AUTO_INCREMENT for table `mst_produk`
--
ALTER TABLE `mst_produk`
  MODIFY `NID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID PRODUK', AUTO_INCREMENT=139;
--
-- AUTO_INCREMENT for table `mst_users`
--
ALTER TABLE `mst_users`
  MODIFY `NID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID USER', AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
