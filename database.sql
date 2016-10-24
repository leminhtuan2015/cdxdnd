-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2016 at 05:41 AM
-- Server version: 5.5.31-log
-- PHP Version: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cdxdndedusql1`
--

-- --------------------------------------------------------

--
-- Table structure for table `dantoc`
--

CREATE TABLE IF NOT EXISTS `dantoc` (
  `dt_id` int(10) NOT NULL,
  `dt_ten` varchar(30) NOT NULL,
  `dt_order` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dantoc`
--

INSERT INTO `dantoc` (`dt_id`, `dt_ten`, `dt_order`) VALUES
(1, 'Kinh', 1),
(2, 'Mường', 2),
(3, 'Thái', 3),
(4, 'Khmer', 4),
(5, 'Tày', 5),
(6, 'Hoa', 6),
(7, 'Nùng', 7),
(8, 'Mông', 8),
(9, 'Dao', 9),
(10, 'Gia Rai', 10),
(11, 'Ê Đê', 11),
(12, 'Ba Na', 12),
(13, 'Sán Chay', 13),
(14, 'Chăm', 14),
(15, 'CơHo', 15),
(16, 'Xơ Đăng', 16),
(17, 'Sán Dìu', 17),
(18, 'Hrê', 18),
(19, 'Ra Glay', 19),
(20, 'Mnông', 20),
(21, 'Thổ', 21),
(22, 'Xtiêng', 22),
(23, 'Khơ Mú', 23),
(24, 'Bru Vân Kiều', 24),
(25, 'Cơ Tu', 25),
(26, 'Giáy', 26),
(27, 'Tà Ôi', 27),
(28, 'Mạ', 28),
(29, 'Giẻ-Triêng', 29),
(30, 'Co', 30),
(31, 'Chơ Ro', 31),
(32, 'Xinh Mun', 32),
(33, 'Hà Nhì', 33),
(34, 'Chu Ru', 34),
(35, 'Lào', 35),
(36, 'La Chí', 36),
(37, 'Kháng', 37),
(38, 'Phù Lá', 38),
(39, 'La Hủ', 39),
(40, 'La Ha', 40),
(41, 'Pà Thẻn', 41),
(42, 'Lự', 42),
(43, 'Ngái', 43),
(44, 'Chứt', 44),
(45, 'LôLô', 45),
(46, 'Mảng', 46),
(47, 'Cơ Lao', 47),
(48, 'Bố Y', 48),
(49, 'Cống', 49),
(50, 'SiLa', 50),
(51, 'PuPéo', 51),
(52, 'Rơ Mum', 52),
(53, 'Brâu', 53),
(55, 'Ơ Đu', 62);

-- --------------------------------------------------------

--
-- Table structure for table `dk`
--

CREATE TABLE IF NOT EXISTS `dk` (
  `dk_id` int(15) NOT NULL,
  `dk_ten` varchar(250) NOT NULL,
  `dk_order` int(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dk`
--

INSERT INTO `dk` (`dk_id`, `dk_ten`, `dk_order`) VALUES
(1, 'Dựa vào kết quả thi THPT quốc gia', 0),
(2, 'Điểm tổng kết lớp 12', 0),
(3, 'Điểm tổng kết lớp 9', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hedt`
--

CREATE TABLE IF NOT EXISTS `hedt` (
  `hedt_id` int(11) NOT NULL,
  `hedt_ma` varchar(15) NOT NULL,
  `hedt_ten` varchar(100) NOT NULL,
  `hedt_order` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hedt`
--

INSERT INTO `hedt` (`hedt_id`, `hedt_ma`, `hedt_ten`, `hedt_order`) VALUES
(1, 'CDCQ661', 'Cao đẳng chính quy', 0),
(2, 'CDLTCQ100', 'Cao đẳng Liên thông chính quy', 0),
(3, 'TCCQ500', 'Trung cấp chính quy', 0),
(6, 'TCNQ410', 'Trung cấp Nghề', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hv`
--

CREATE TABLE IF NOT EXISTS `hv` (
  `hv_id` int(11) NOT NULL,
  `hv_name` varchar(60) NOT NULL,
  `hv_order` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hv`
--

INSERT INTO `hv` (`hv_id`, `hv_name`, `hv_order`) VALUES
(1, 'Tốt nghiệp THPT hoặc tương đương', 0),
(2, 'Tốt nghiệp THCS hoặc tương đương', 0),
(3, 'Hết lớp 12 nhưng chưa tốt nghiệp', 0),
(6, 'Tốt nghiệp trung cấp', 0),
(7, 'abc', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nganh`
--

CREATE TABLE IF NOT EXISTS `nganh` (
  `nganh_id` int(10) NOT NULL,
  `nganh_ma` varchar(15) NOT NULL,
  `nganh_ten` varchar(200) NOT NULL,
  `he_id` int(10) NOT NULL,
  `nganh_order` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nganh`
--

INSERT INTO `nganh` (`nganh_id`, `nganh_ma`, `nganh_ten`, `he_id`, `nganh_order`) VALUES
(1, '51510102', 'Công nghệ Kỹ thuật Công trình Xây dựng', 1, 0),
(2, '51580302', 'Quản lý Xây dựng (chuyên ngành Kinh tế Xây dựng)', 1, 1),
(3, '51340301', 'Kế toán', 1, 3),
(4, '50510106', 'Kỹ thuật Xây dựng', 1, 4),
(5, '50510203', 'Công nghệ Hàn', 1, 5),
(6, '51510102', 'Công nghệ Kỹ thuật Công trình Xây dựng (chuyên ngành Xây dựng Dân dụng và Công nghiệp)', 2, 6),
(7, '51340301', 'Kế toán', 2, 7),
(8, '42510106', 'Xây dựng dân dụng và công nghiệp', 3, 8),
(9, '42340303', 'Kế toán doanh nghiệp', 3, 10),
(10, '40510106', 'Kỹ thuật Xây dựng', 3, 11),
(11, '40510203', 'Công nghệ Hàn', 3, 12),
(12, '40480206', 'Quản trị mạng máy tính', 3, 13),
(13, '40510301', 'Điện dân dụng', 3, 14),
(14, '40510302', 'Điện công nghiệp', 3, 15),
(15, '40510104', 'Cấp, thoát nước', 3, 16),
(16, '40510103', 'Cốt thép Hàn', 3, 9),
(18, '40540312', 'Mộc mỹ nghệ', 3, 11),
(19, '40540310', 'Mộc Xây dựng và Trang trí Nội thất', 3, 10),
(24, '40210101', 'Kỹ thuật Điêu khắc gỗ', 3, 12),
(25, '40210405', 'Kỹ thuật Sơn mài và Khảm trai', 3, 12),
(26, '40210402', 'Chạm khắc đá', 3, 13),
(27, '', 'Kỹ thuật Xây dựng', 4, 1),
(28, '', 'Hàn', 4, 2),
(29, '', 'Kế toán Doanh nghiệp', 4, 3),
(30, '', 'Quản trị mạng máy tính', 4, 4),
(31, '', 'Điện dân dụng', 4, 5),
(32, '', 'Cấp, thoát nước', 4, 6),
(33, '', 'Cốt thép Hàn', 4, 8),
(34, '', 'Mộc Xây dựng và Trang trí Nội thất', 4, 9),
(35, '', 'Mộc mỹ nghệ', 4, 10),
(36, '', 'Kỹ thuật Sơn mài và Khảm trai', 4, 12),
(37, '', 'Chạm khắc đá', 4, 13),
(38, '', 'Liên thông từ TCCN', 5, 1),
(39, '', 'Cao đẳng lên Đại học', 1, 2),
(40, '', 'Điện Công nghiệp', 4, 6),
(41, '', 'Kỹ thuật Điêu khắc gỗ', 4, 11);

-- --------------------------------------------------------

--
-- Table structure for table `ts`
--

CREATE TABLE IF NOT EXISTS `ts` (
  `ts_id` int(10) NOT NULL,
  `ts_ten` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
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
  `ts_date` varchar(50) NOT NULL,
  `ts_he` int(10) NOT NULL,
  `ts_nganh` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ts`
--

INSERT INTO `ts` (`ts_id`, `ts_ten`, `ts_born`, `ts_gt`, `ts_dt`, `ts_hocvan`, `ts_trinhdo`, `ts_noitn`, `ts_namtn`, `ts_xep`, `ts_add`, `ts_phone`, `ts_email`, `ts_3m`, `diem_toan`, `diem_van`, `diem_anh`, `diem_ly`, `diem_hoa`, `ts_dk`, `ts_date`, `ts_he`, `ts_nganh`) VALUES
(24, 'Nguyễn Xuân Ưu', '15-09-1995', 1, 1, 1, 'Chưa có', NULL, 2014, 3, 'Thôn Bùi Việt - Xã Duyên Hải - Huyện Hưng Hà - Tỉnh Thái Bình', '0972929236', 'nguyennhuantb1990@gmail.com', 'Toán ,Lý ,Hoá', '5.3', '0', '0', '7.1', '5.3', '2', '18-08-2015 lúc 3:24:19', 1, 1),
(25, 'Lâm Văn Xuân', '', 1, 1, 1, 'Chưa có', NULL, 2015, 5, 'Đội 3,xã Hải Phú,huyện Hải Hậu ,tỉnh Nam định', '01639267663', '', 'Toán ,Lý ,Hoá', '6.6', '', '', '6.4', '5.9', '2', '19-08-2015 lúc 10:24:51', 1, 0),
(38, 'Vương Minh Thai', '14-03-1978', 1, 36, 6, 'Chưa có', NULL, 0, 6, 'Thôn Thắng Lợi Xã Nàn Sỉn Huyện Xín Mần Tỉnh Hà Giang', '02196506482', '', 'Toán ,Lý ,Hoá', '10', '', '', '9', '10', '2', '14-04-2016 lúc 8:12:55', 1, 3),
(40, 'Nguyen A', '20-04-2016', 1, 6, 1, 'Chưa có', NULL, 0, 3, 'Sdf Dfg Fg Jhgj Hj Kjh ABC', '0212346567', '', '', '0', '0', '0', '0', '', '2', '20-04-2016 lúc 15:47:12', 1, 2),
(41, 'Trần Thị Thanh Thủy', '21-04-1995', 2, 1, 1, 'Chưa có', NULL, 2016, 5, 'Xóm 2 Xuân Thượng, Xuân Trường, Nam Định', '324356768', '', '', '0', '0', '0', '0', '', '2', '21-04-2016 lúc 2:21:44', 1, 1),
(42, 'Phạm Ngọc Tuyền', '05-08-1981', 0, 0, 1, 'Chưa có', NULL, 2015, 3, 'Nhân Mỹ/Lý Nhân/Hà Nam', '0988817852', '', '', '', '', '', '', '', '2', '27-04-2016 lúc 2:05:32', 1, 1),
(43, 'Trần Quang Long', '23-11-1964', 1, 1, 1, 'Chưa có', NULL, 2015, 4, '591 đường Trường Chinh/phường Hạ Long/TP Nam Định', '0912894243', 'tranquanglongxd@gmail.com', '', '', '', '', '', '', '2', '27-04-2016 lúc 2:10:13', 1, 1),
(44, 'H', '', 0, 0, 0, 'Chưa có', NULL, 0, 0, '', '', '', '', '', '', '', '', '', '0', '28-04-2016 lúc 8:56:52', 0, 0),
(45, '', '0', 0, 0, 0, 'Chưa có', NULL, 0, 0, '0', '0', '0', '', '0', '0', '0', '0', '0', '0', '10-05-2016 lúc 5:25:48', 0, 0),
(46, 'A', '15-06-1980', 1, 2, 0, 'Chưa có', NULL, 0, 0, 'Gfty Ygi Juhju Hku Kjuy', '0123456789', '', '', '', '', '', '', '', '0', '12-05-2016 lúc 14:26:57', 2, 0),
(47, 'MZGrqxfAGZzYRJQX', 'CysYWQlIZuoK', 1, 28, 6, 'Chưa có', NULL, 0, 1, 'VNbkCe Http://www.y7YwKx7Pm6OnyJvolbcwrWdoEnRF29pb.com', '87679353247', 'mark3qf527@hotmail.com', '', 'ruqcxDQSLk', 'zLYdVDChd', 'TNXAnNMEWg', 'dWrMZRhC', 'IWddfAjsoF', '2', '13-05-2016 lúc 6:52:08', 3, 0),
(48, 'Đỗ Bằng Đoàn', '12-12-1983', 1, 1, 6, 'Chưa có', NULL, 2010, 3, '45N - Ô 18 - Phường Hạ Long - TP. Nam Định', '0919.124783', 'hoanghien4783@gmail.com.vn', '', '', '', '', '', '', '0', '13-05-2016 lúc 9:12:12', 2, 7),
(49, '', '0', 0, 0, 0, 'Chưa có', NULL, 0, 0, '0', '0', '0', '', '0', '0', '0', '0', '0', '0', '28-05-2016 lúc 2:26:46', 0, 0),
(50, '', '0', 0, 0, 0, 'Chưa có', NULL, 0, 0, '0', '0', '0', '', '0', '0', '0', '0', '0', '0', '10-07-2016 lúc 9:31:10', 0, 0),
(51, '', '0', 0, 0, 0, 'Chưa có', NULL, 0, 0, '0', '0', '0', '', '0', '0', '0', '0', '0', '0', '12-07-2016 lúc 8:25:05', 0, 0),
(52, 'Phạm Văn Diêm', '17-01-1998', 1, 1, 0, 'Chưa có', NULL, 0, 0, 'Xóm Trung Khuân- Xã Trực Đại - Huyện  Trực Ninh - Tỉnh Nam Định ', '01635099383', '', '', '', '', '', '', '', '1', '17-07-2016 lúc 13:13:32', 1, 39),
(53, 'Phạm Văn Diêm', '17-01-1998', 1, 1, 1, 'Chưa có', NULL, 0, 5, 'Xóm Trung Khuân - Xã Trực Đại  - Huyện Trực Ninh - Tỉnh Nam Định\r\n', '01635099383', '', '', '', '', '', '', '', '2', '20-07-2016 lúc 16:44:59', 1, 1),
(54, 'VŨ XUÂN MẬU', '07-07-1998', 2, 1, 1, 'Chưa có', NULL, 2016, 5, 'Xóm Nam Cường-trực đại-trực Ninh-nam định', '01659008669', 'vumau98@gmail.com', '', '', '', '', '', '', '2', '27-07-2016 lúc 5:35:53', 1, 4),
(55, 'Vũ Như Tín', '15-10-1998', 1, 1, 1, 'Chưa có', NULL, 2016, 0, 'Xóm Nam Lạc_Xã Xuân Ninh_H.Xuân Trường_Nam Định', '0968.592.917', '', '', '', '', '', '', '', '1', '27-07-2016 lúc 13:12:20', 1, 1),
(56, 'Nguyễn Ngọc Dũng', '04-09-1997', 1, 1, 1, 'Chưa có', NULL, 2016, 3, 'Thọ Lão - Đạo Lý - Lý Nhân - Hà Nam', '01683599868', 'shadowzed6666@gmail.com', '', '', '', '', '', '', '1', '31-07-2016 lúc 2:47:03', 2, 6),
(57, 'Vũ Tiến Dũng', '26-06-1998', 1, 1, 1, 'Chưa có', NULL, 2016, 4, 'Thôn Nguyệt Trung, Xã Yên Tân, Huueejn Ý Yên,tỉnh Nam Định', '0942239572', 'sauminho266@gmail.com', '', '', '', '', '', '', '1', '01-08-2016 lúc 6:03:07', 1, 4),
(58, 'Vũ Như Tín', '15-10-2008', 1, 1, 1, 'Chưa có', NULL, 2016, 3, 'Xóm Nam Lạc_Xã Xuân Ninh_H.Xuân Trường_T.Nam ĐỊnh', '0968.592.917', '', '', '', '', '', '', '', '2', '01-08-2016 lúc 8:41:35', 1, 1),
(59, '', '0', 0, 0, 0, 'Chưa có', NULL, 0, 0, '0', '0', '0', '', '0', '0', '0', '0', '0', '0', '02-08-2016 lúc 18:41:40', 0, 0),
(60, 'Đỗ Hoàng Anh', '01-11-1998', 1, 1, 1, 'Chưa có', NULL, 2016, 0, 'Xóm 3 THôn Lại Xá Xã Minh LÃng HUyện Vũ Thư Tỉnh Thái Bình', '0975681302', 'hoanganh34566@gmail.com', '', '', '', '', '', '', '1', '13-08-2016 lúc 7:44:43', 2, 6),
(61, 'Phùng Thị Ngọc', '18-07-1998', 2, 1, 1, 'Chưa có', NULL, 0, 0, 'Phùng Hữu Bằng -khu 6 Thị Trấn Ngô Đồng - Giao Thủy  - Nam Định', '01252559117', 'phungngoc1807@gmail.com', '', '', '', '', '', '', '1', '21-08-2016 lúc 8:56:27', 1, 3),
(62, '', '0', 0, 0, 0, 'Chưa có', NULL, 0, 0, '0', '0', '0', '', '0', '0', '0', '0', '0', '0', '01-09-2016 lúc 14:18:28', 0, 0),
(63, '', '0', 0, 0, 0, 'Chưa có', NULL, 0, 0, '0', '0', '0', '', '0', '0', '0', '0', '0', '0', '12-10-2016 lúc 6:02:44', 0, 0),
(64, '', '0', 0, 0, 0, 'Chưa có', NULL, 0, 0, '0', '0', '0', '', '0', '0', '0', '0', '0', '0', '13-10-2016 lúc 22:58:34', 0, 0),
(65, '', '0', 0, 0, 0, 'Chưa có', NULL, 0, 0, '0', '0', '0', '', '0', '0', '0', '0', '0', '0', '14-10-2016 lúc 2:02:08', 0, 0),
(66, 'Pham Văn Nam', '17-10-1995', 1, 1, 1, 'Chưa có', NULL, 2015, 4, 'Fdgfdg', '3242345', 'vuinamdinh@gmail.com', '', '', '', '', '', '', '2', '17-10-2016 lúc 10:40:54', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_quyenhan` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'member',
  `user_stt` int(11) NOT NULL,
  `user_email` varchar(70) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_username`, `user_password`, `user_quyenhan`, `user_stt`, `user_email`) VALUES
(1, 'administrator', 'admin', 'admin', 0, ''),
(16, 'vuicdxd', '123456', 'member', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `xl`
--

CREATE TABLE IF NOT EXISTS `xl` (
  `xl_id` int(11) NOT NULL,
  `xl_ten` varchar(20) NOT NULL,
  `xl_order` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xl`
--

INSERT INTO `xl` (`xl_id`, `xl_ten`, `xl_order`) VALUES
(3, 'Trung bình', 0),
(4, 'Trung bình khá', 0),
(5, 'Khá', 0),
(6, 'Giỏi', 0),
(7, 'Xuất sắc', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dantoc`
--
ALTER TABLE `dantoc`
  ADD PRIMARY KEY (`dt_id`);

--
-- Indexes for table `dk`
--
ALTER TABLE `dk`
  ADD PRIMARY KEY (`dk_id`);

--
-- Indexes for table `hedt`
--
ALTER TABLE `hedt`
  ADD PRIMARY KEY (`hedt_id`);

--
-- Indexes for table `hv`
--
ALTER TABLE `hv`
  ADD PRIMARY KEY (`hv_id`);

--
-- Indexes for table `nganh`
--
ALTER TABLE `nganh`
  ADD PRIMARY KEY (`nganh_id`);

--
-- Indexes for table `ts`
--
ALTER TABLE `ts`
  ADD PRIMARY KEY (`ts_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `xl`
--
ALTER TABLE `xl`
  ADD PRIMARY KEY (`xl_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dantoc`
--
ALTER TABLE `dantoc`
  MODIFY `dt_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `dk`
--
ALTER TABLE `dk`
  MODIFY `dk_id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hedt`
--
ALTER TABLE `hedt`
  MODIFY `hedt_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `hv`
--
ALTER TABLE `hv`
  MODIFY `hv_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `nganh`
--
ALTER TABLE `nganh`
  MODIFY `nganh_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `ts`
--
ALTER TABLE `ts`
  MODIFY `ts_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `xl`
--
ALTER TABLE `xl`
  MODIFY `xl_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
