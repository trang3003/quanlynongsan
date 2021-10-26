-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2021 at 07:47 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nongsangreen_nest`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `chitietdonhang_id` int(11) NOT NULL,
  `chitietdonhang_soluong` int(11) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `donhang_id` int(11) NOT NULL,
  `chitietdonhang_ghichu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chitietdonhang_diachi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`chitietdonhang_id`, `chitietdonhang_soluong`, `sanpham_id`, `donhang_id`, `chitietdonhang_ghichu`, `chitietdonhang_diachi`) VALUES
(2, 4, 30, 2, 'hem có gi gì', 'Khánh Hòa');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `donhang_id` int(11) NOT NULL,
  `tinhtrang_id` int(11) NOT NULL,
  `nhanvien_id` int(11) NOT NULL,
  `khachhang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`donhang_id`, `tinhtrang_id`, `nhanvien_id`, `khachhang_id`) VALUES
(2, 3, 8, 7);

-- --------------------------------------------------------

--
-- Table structure for table `donvitinh`
--

CREATE TABLE `donvitinh` (
  `donvitinh_id` int(11) NOT NULL,
  `donvitinh_ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donvitinh_mota` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donvitinh`
--

INSERT INTO `donvitinh` (`donvitinh_id`, `donvitinh_ten`, `donvitinh_mota`) VALUES
(1, 'Kg', 'Ki-lo-gram'),
(2, 'Quả', 'Quả'),
(3, 'Túi', 'Túi'),
(4, 'Khay', 'Khay');

-- --------------------------------------------------------

--
-- Table structure for table `loainguoidung`
--

CREATE TABLE `loainguoidung` (
  `loainguoidung_id` int(11) NOT NULL,
  `loainguoidung_ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loainguoidung`
--

INSERT INTO `loainguoidung` (`loainguoidung_id`, `loainguoidung_ten`) VALUES
(1, 'Admin'),
(2, 'Nhân viên'),
(3, 'Khách hàng');

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `loaisanpham_id` int(11) NOT NULL,
  `loaisanpham_ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loaisanpham_mota` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`loaisanpham_id`, `loaisanpham_ten`, `loaisanpham_mota`) VALUES
(1, 'Rau củ', 'Các loại rau củ'),
(2, 'Trái cây', 'Các loại trái cây'),
(3, 'Thịt', 'Các loại thịt'),
(4, 'Thủy hải sản', 'Các loại thủy hải sản');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `nguoidung_id` int(11) NOT NULL,
  `nguoidung_ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nguoidung_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nguoidung_matkhau` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loainguoidung_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`nguoidung_id`, `nguoidung_ten`, `nguoidung_email`, `nguoidung_matkhau`, `loainguoidung_id`) VALUES
(6, 'Admin', 'admin@gmail.com', '12345', 1),
(7, 'Nhã', 'nha@gmailcom', '12345', 3),
(8, 'trang', 'trang@gmailcom', '12345', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `nhacungcap_id` int(11) NOT NULL,
  `nhacungcap_ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nhacungcap_diachi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nhacungcap_sdt` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhacungcap`
--

INSERT INTO `nhacungcap` (`nhacungcap_id`, `nhacungcap_ten`, `nhacungcap_diachi`, `nhacungcap_sdt`) VALUES
(1, 'Vườn xanh Đà Lạt', '67 Ngô Xuân Thưởng, Đà Lạt', '098 765 4321'),
(2, 'Đà Lạt Gab', '02 Ngô Tất Tố, Đà Lạt', '098c965c4324'),
(3, 'Việt - Nhật nông sản', '23 Ngô Quyền, Lâm Đồng', '052 765 4321'),
(4, 'Orfarm', '02 Mai Xuân Thưởng, Đà Lạt', '098 923 4321'),
(5, 'Rau cười Việt Nhật', '02 Nguyễn Đình Chiểu, Lâm Đồng', '052 325 4322');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `sanpham_id` int(11) NOT NULL,
  `sanpham_ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sanpham_anh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sanpham_giaban` int(11) NOT NULL,
  `sanpham_soluong` int(11) NOT NULL,
  `loaisanpham_id` int(11) NOT NULL,
  `donvitinh_id` int(11) NOT NULL,
  `nhacungcap_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`sanpham_id`, `sanpham_ten`, `sanpham_anh`, `sanpham_giaban`, `sanpham_soluong`, `loaisanpham_id`, `donvitinh_id`, `nhacungcap_id`) VALUES
(2, 'Măng Tây', 'mangtay.jpg', 30000, 30, 1, 3, 1),
(3, 'Cà chua', 'cachua.jpg\r\n', 20000, 30, 1, 1, 3),
(4, 'Atiso', 'atiso.jpg', 40000, 30, 1, 1, 5),
(5, 'Cải sú', 'caisu.jpg', 30000, 30, 1, 1, 5),
(6, 'Cải xanh', 'caixanh.jpg', 20000, 30, 1, 3, 2),
(7, 'Cà rốt', 'carott.jpg', 20000, 30, 1, 1, 2),
(8, 'Chanh đào', 'chanhdaoo.jpg', 20000, 30, 2, 1, 1),
(13, 'Gừng', 'gung.jpg', 20000, 30, 1, 3, 3),
(15, 'Nấm hương', 'namhuong.jpg', 35000, 30, 1, 3, 2),
(19, 'Thịt bò loại 1', 'thitboloaii.jpg', 100000, 30, 3, 1, 4),
(20, 'Thịt bò xay', 'thitboxay.jpg', 900000, 30, 3, 4, 4),
(21, 'Thịt ba chỉ', 'thitbachi.jpg', 80000, 30, 3, 1, 2),
(24, 'Thịt gà', 'thitgaa.jpg', 60000, 30, 3, 4, 2),
(29, 'Cá hồi', 'cahoii.jpg', 150000, 30, 4, 4, 2),
(30, 'Bạch tuột', 'bachtuott.jpg', 120000, 30, 4, 1, 2),
(31, 'Cá chép', 'cachepp.jpg', 35000, 30, 4, 1, 4),
(32, 'Cá thu', 'cathuu.jpg', 40000, 30, 4, 1, 2),
(34, 'Sò', 'soo.jpg', 40000, 30, 4, 3, 4),
(35, 'Cam ', 'camm.jpg', 35000, 30, 2, 1, 1),
(37, 'Nho đen', 'nhodenn.jpg', 30000, 30, 2, 4, 5),
(38, 'Nho xanh', 'nhoxanh.jpg', 40000, 30, 2, 4, 5),
(39, 'Chuối', 'chuoii.jpg', 30000, 30, 2, 3, 3),
(40, 'Dâu', 'dauu.jpg', 40000, 30, 2, 4, 3),
(41, 'Dưa hấu ruột đỏ', 'duahauu.jpg', 20000, 30, 2, 2, 1),
(42, 'Dưa leo Nhật', 'dualeoo.jpg', 20000, 30, 2, 3, 2),
(43, 'Đu đủ', 'duduu.jpg', 30000, 30, 2, 2, 3),
(44, 'Kiwi', 'kiwii.jpg', 40000, 30, 2, 4, 1),
(45, 'Hàu sữa', 'hauu.jpg', 80000, 30, 4, 3, 4),
(47, 'Khoai tây', 'khoaitayy.jpg', 30000, 30, 1, 3, 3),
(48, 'Me thái', 'me.jpg', 40000, 30, 2, 3, 3),
(51, 'Ớt ', 'ott.jpg', 10000, 30, 1, 3, 1),
(52, 'Sườn non', 'suonnonn.jpg', 900000, 30, 3, 1, 4),
(53, 'Tôm', 'tomm.jpg', 80000, 30, 4, 1, 4),
(54, 'Sườn heo', 'suonheoo.jpg', 900000, 30, 3, 1, 4),
(55, 'Vải thiều', 'vai.jpg', 35000, 30, 2, 1, 3),
(56, 'Mực tươi', 'muc.jpg', 45000, 30, 4, 1, 4),
(57, 'Cánh gà', 'canhga.jpg', 80000, 30, 3, 4, 4),
(58, 'Củ dền đỏ', 'cuden.jpg', 30000, 30, 1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tinhtrangdh`
--

CREATE TABLE `tinhtrangdh` (
  `tinhtrang_id` int(11) NOT NULL,
  `tinhtrang_ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinhtrang_mota` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tinhtrangdh`
--

INSERT INTO `tinhtrangdh` (`tinhtrang_id`, `tinhtrang_ten`, `tinhtrang_mota`) VALUES
(1, 'Đang Giao', 'Đang Giao'),
(2, 'Hủy', 'Hủy'),
(3, 'Chưa Xác Nhận', 'Chưa Xác Nhận');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`chitietdonhang_id`),
  ADD KEY `FK_chitiet_donhang` (`donhang_id`),
  ADD KEY `FK_chitiet_sanpham` (`sanpham_id`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`donhang_id`),
  ADD KEY `FK_donhang_tinhtrang` (`tinhtrang_id`),
  ADD KEY `FK_nhanvien_donhang` (`nhanvien_id`),
  ADD KEY `FK_khachhang_donhang` (`khachhang_id`);

--
-- Indexes for table `donvitinh`
--
ALTER TABLE `donvitinh`
  ADD PRIMARY KEY (`donvitinh_id`);

--
-- Indexes for table `loainguoidung`
--
ALTER TABLE `loainguoidung`
  ADD PRIMARY KEY (`loainguoidung_id`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`loaisanpham_id`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`nguoidung_id`),
  ADD KEY `FK_nguoidung_loainguoidung` (`loainguoidung_id`);

--
-- Indexes for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`nhacungcap_id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`sanpham_id`),
  ADD KEY `FK_sanpham_nhacungcap` (`nhacungcap_id`),
  ADD KEY `FK_sanpham_donvitinh` (`donvitinh_id`),
  ADD KEY `FK_sanpham_loaisp` (`loaisanpham_id`);

--
-- Indexes for table `tinhtrangdh`
--
ALTER TABLE `tinhtrangdh`
  ADD PRIMARY KEY (`tinhtrang_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `chitietdonhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `donhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donvitinh`
--
ALTER TABLE `donvitinh`
  MODIFY `donvitinh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `loainguoidung`
--
ALTER TABLE `loainguoidung`
  MODIFY `loainguoidung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `loaisanpham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `nguoidung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `nhacungcap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `sanpham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tinhtrangdh`
--
ALTER TABLE `tinhtrangdh`
  MODIFY `tinhtrang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `FK_chitiet_donhang` FOREIGN KEY (`donhang_id`) REFERENCES `donhang` (`donhang_id`),
  ADD CONSTRAINT `FK_chitiet_sanpham` FOREIGN KEY (`sanpham_id`) REFERENCES `sanpham` (`sanpham_id`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `FK_donhang_tinhtrang` FOREIGN KEY (`tinhtrang_id`) REFERENCES `tinhtrangdh` (`tinhtrang_id`),
  ADD CONSTRAINT `FK_khachhang_donhang` FOREIGN KEY (`khachhang_id`) REFERENCES `nguoidung` (`nguoidung_id`),
  ADD CONSTRAINT `FK_nhanvien_donhang` FOREIGN KEY (`nhanvien_id`) REFERENCES `nguoidung` (`nguoidung_id`);

--
-- Constraints for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `FK_nguoidung_loainguoidung` FOREIGN KEY (`loainguoidung_id`) REFERENCES `loainguoidung` (`loainguoidung_id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `FK_sanpham_donvitinh` FOREIGN KEY (`donvitinh_id`) REFERENCES `donvitinh` (`donvitinh_id`),
  ADD CONSTRAINT `FK_sanpham_loaisp` FOREIGN KEY (`loaisanpham_id`) REFERENCES `loaisanpham` (`loaisanpham_id`),
  ADD CONSTRAINT `FK_sanpham_nhacungcap` FOREIGN KEY (`nhacungcap_id`) REFERENCES `nhacungcap` (`nhacungcap_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
