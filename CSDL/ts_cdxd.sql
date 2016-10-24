-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 11, 2015 at 12:11 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ts_cdxd`
--
CREATE DATABASE IF NOT EXISTS `ts_cdxd` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ts_cdxd`;

-- --------------------------------------------------------

--
-- Table structure for table `dantoc`
--

CREATE TABLE IF NOT EXISTS `dantoc` (
  `dt_id` int(10) NOT NULL AUTO_INCREMENT,
  `dt_ten` varchar(30) NOT NULL,
  `dt_order` int(10) NOT NULL,
  PRIMARY KEY (`dt_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `dantoc`
--

INSERT INTO `dantoc` (`dt_id`, `dt_ten`, `dt_order`) VALUES
(1, 'Kinh', 0),
(2, 'MÆ°á»ng', 0),
(3, 'ThÃ¡i', 0),
(4, 'MÆ°á»ng', 0),
(5, 'TÃ y', 0),
(6, 'moi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dk`
--

CREATE TABLE IF NOT EXISTS `dk` (
  `dk_id` int(15) NOT NULL AUTO_INCREMENT,
  `dk_ten` varchar(250) NOT NULL,
  `dk_order` int(15) NOT NULL,
  PRIMARY KEY (`dk_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `dk`
--

INSERT INTO `dk` (`dk_id`, `dk_ten`, `dk_order`) VALUES
(1, 'Dá»±a vÃ o káº¿t quáº£ thi THPT quá»‘c gia', 0),
(2, 'Äiá»ƒm tá»•ng káº¿t lá»›p 12', 0),
(3, 'Äiá»ƒm tá»•ng káº¿t lá»›p 9', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hedt`
--

CREATE TABLE IF NOT EXISTS `hedt` (
  `hedt_id` int(11) NOT NULL AUTO_INCREMENT,
  `hedt_ma` varchar(15) NOT NULL,
  `hedt_ten` varchar(100) NOT NULL,
  `hedt_order` int(11) NOT NULL,
  PRIMARY KEY (`hedt_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `hedt`
--

INSERT INTO `hedt` (`hedt_id`, `hedt_ma`, `hedt_ten`, `hedt_order`) VALUES
(1, 'CDCQ660', 'Cao Ä‘áº³ng chÃ­nh quy', 0),
(2, 'CDLTCQ100', 'Cao Ä‘áº³ng liÃªn thÃ´ng chÃ­nh quy', 0),
(3, 'TCCQ500', 'Trung cáº¥p chÃ­nh quy', 0),
(4, 'SC', 'SÆ¡ cáº¥p', 0),
(5, 'LKDT', 'LiÃªn káº¿t Ä‘Ã o táº¡o', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hv`
--

CREATE TABLE IF NOT EXISTS `hv` (
  `hv_id` int(11) NOT NULL AUTO_INCREMENT,
  `hv_name` varchar(60) NOT NULL,
  `hv_order` int(10) NOT NULL,
  PRIMARY KEY (`hv_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `hv`
--

INSERT INTO `hv` (`hv_id`, `hv_name`, `hv_order`) VALUES
(1, 'Tá»‘t nghiá»‡p THPT hoáº·c tÆ°Æ¡ng Ä‘Æ°Æ¡ng', 0),
(2, 'Tá»‘t nghiá»‡p THCS hoáº·c tÆ°Æ¡ng Ä‘Æ°Æ¡ng', 0),
(3, 'Háº¿t lá»›p 12 nhÆ°ng chÆ°a tá»‘t nghiá»‡p', 0),
(6, 'Tá»‘t nghiá»‡p trung cáº¥p', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nganh`
--

CREATE TABLE IF NOT EXISTS `nganh` (
  `nganh_id` int(10) NOT NULL AUTO_INCREMENT,
  `nganh_ma` varchar(15) NOT NULL,
  `nganh_ten` varchar(200) NOT NULL,
  `he_id` int(10) NOT NULL,
  `nganh_order` int(11) NOT NULL,
  PRIMARY KEY (`nganh_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `nganh`
--

INSERT INTO `nganh` (`nganh_id`, `nganh_ma`, `nganh_ten`, `he_id`, `nganh_order`) VALUES
(1, '51510102', 'CÃ´ng nghá»‡ Ká»¹ thuáº­t CÃ´ng trÃ¬nh XÃ¢y dá»±ng', 1, 0),
(2, '51580302', 'Quáº£n lÃ½ XÃ¢y dá»±ng (chuyÃªn ngÃ nh Kinh táº¿ XÃ¢y dá»±ng)', 1, 1),
(3, '51340301', 'Káº¿ toÃ¡n', 1, 3),
(4, '50510106', 'Ká»¹ thuáº­t XÃ¢y dá»±ng', 1, 4),
(5, '50510203', 'CÃ´ng nghá»‡ HÃ n', 1, 5),
(6, '51510102', 'CÃ´ng nghá»‡ Ká»¹ thuáº­t CÃ´ng trÃ¬nh XÃ¢y dá»±ng (chuyÃªn ngÃ nh XÃ¢y dá»±ng DÃ¢n dá»¥ng vÃ  CÃ´ng nghiá»‡p)', 2, 6),
(7, '51340301', 'Káº¿ toÃ¡n', 2, 7),
(8, '42510106', 'XÃ¢y dá»±ng dÃ¢n dá»¥ng vÃ  cÃ´ng nghiá»‡p', 3, 8),
(9, '42340303', 'Káº¿ toÃ¡n doanh nghiá»‡p', 3, 10),
(10, '40510106', 'Ká»¹ thuáº­t XÃ¢y dá»±ng', 3, 11),
(11, '40510203', 'CÃ´ng nghá»‡ HÃ n', 3, 12),
(12, '40480206', 'Quáº£n trá»‹ máº¡ng mÃ¡y tÃ­nh', 3, 13),
(13, '40510301', 'Äiá»‡n dÃ¢n dá»¥ng', 3, 14),
(14, '40510302', 'Äiá»‡n cÃ´ng nghiá»‡p', 3, 15),
(15, '40510104', 'Cáº¥p, thoÃ¡t nÆ°á»›c', 3, 16);

-- --------------------------------------------------------

--
-- Table structure for table `ts`
--

CREATE TABLE IF NOT EXISTS `ts` (
  `ts_id` int(10) NOT NULL AUTO_INCREMENT,
  `ts_ten` varchar(50) NOT NULL,
  `ts_born` varchar(15) NOT NULL,
  `ts_gt` int(3) NOT NULL,
  `ts_dt` int(20) NOT NULL,
  `ts_hocvan` int(10) DEFAULT NULL,
  `ts_trinhdo` varchar(100) DEFAULT 'Chưa có',
  `ts_noitn` varchar(300) DEFAULT NULL,
  `ts_namtn` int(10) DEFAULT NULL,
  `ts_xep` int(10) DEFAULT NULL,
  `ts_add` varchar(500) NOT NULL,
  `ts_phone` varchar(15) NOT NULL,
  `ts_email` varchar(50) DEFAULT NULL,
  `ts_3m` varchar(50) NOT NULL,
  `diem_toan` varchar(10) NOT NULL DEFAULT 'N/A',
  `diem_van` varchar(10) NOT NULL DEFAULT 'N/A',
  `diem_anh` varchar(10) NOT NULL DEFAULT 'N/A',
  `diem_ly` varchar(10) NOT NULL DEFAULT 'N/A',
  `diem_hoa` varchar(10) NOT NULL DEFAULT 'N/A',
  `ts_dk` varchar(200) NOT NULL,
  `ts_he` int(10) NOT NULL,
  `ts_nganh` int(10) NOT NULL,
  PRIMARY KEY (`ts_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ts`
--

INSERT INTO `ts` (`ts_id`, `ts_ten`, `ts_born`, `ts_gt`, `ts_dt`, `ts_hocvan`, `ts_trinhdo`, `ts_noitn`, `ts_namtn`, `ts_xep`, `ts_add`, `ts_phone`, `ts_email`, `ts_3m`, `diem_toan`, `diem_van`, `diem_anh`, `diem_ly`, `diem_hoa`, `ts_dk`, `ts_he`, `ts_nganh`) VALUES
(1, 'Nguyá»…n VÄƒn A', '01/01/1998', 1, 1, 3, 'Chưa có', NULL, 2014, 3, 'XÃ³m B, ThÃ´n A, xÃ£ C, Huyá»‡n D, Nam Äá»‹nh', '0911223344', 'ngvb@gmail.com', 'ToÃ¡n ,VÄƒn ,Anh', '6', '5', '7', '', '', '2', 1, 1),
(2, 'Nguyá»…n Thá»‹ C', '06/68/1995', 2, 3, 2, 'Chưa có', NULL, 2013, 3, 'XÃ³m 11, XÃ£ 12, Huyá»‡n 13, Nam Äá»‹nh', '0933825852', 'ngtc@gmail.com', 'VÄƒn ,Anh ,LÃ½', '', '9', '7', '5', '', '3', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_quyenhan` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'member',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_username`, `user_password`, `user_quyenhan`) VALUES
(1, 'administrator', 'admin', 'admin'),
(16, 'vuicdxd', '123456', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `xl`
--

CREATE TABLE IF NOT EXISTS `xl` (
  `xl_id` int(11) NOT NULL AUTO_INCREMENT,
  `xl_ten` varchar(20) NOT NULL,
  `xl_order` int(10) NOT NULL,
  PRIMARY KEY (`xl_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `xl`
--

INSERT INTO `xl` (`xl_id`, `xl_ten`, `xl_order`) VALUES
(1, 'Yáº¿u', 0),
(2, 'Trung bÃ¬nh yáº¿u', 0),
(3, 'Trung bÃ¬nh', 0),
(4, 'Trung bÃ¬nh khÃ¡', 0),
(5, 'KhÃ¡', 0),
(6, 'Giá»i', 0),
(7, 'Xuáº¥t sáº¯c', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
