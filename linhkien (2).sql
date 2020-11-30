-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 13, 2019 lúc 04:29 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `linhkien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdh`
--

CREATE TABLE `chitietdh` (
  `MaDH` int(11) NOT NULL,
  `MaSP` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SLmua` int(11) NOT NULL,
  `ThanhTien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdh`
--

INSERT INTO `chitietdh` (`MaDH`, `MaSP`, `SLmua`, `ThanhTien`) VALUES
(19, '2', 3, 597),
(19, '5', 1, 1299);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietgh`
--

CREATE TABLE `chitietgh` (
  `MaGH` int(11) NOT NULL,
  `MaSP` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SLmua` int(11) NOT NULL,
  `ThanhTien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietgh`
--

INSERT INTO `chitietgh` (`MaGH`, `MaSP`, `SLmua`, `ThanhTien`) VALUES
(17, '5', 1, 1299),
(29, '2', 1, 199),
(29, '8', 3, 297),
(30, '2', 2, 398),
(30, '8', 1, 99),
(31, '2', 3, 597),
(31, '5', 1, 1299);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietsp`
--

CREATE TABLE `chitietsp` (
  `MaCT` int(11) NOT NULL,
  `MaSP` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CHITIET` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietsp`
--

INSERT INTO `chitietsp` (`MaCT`, `MaSP`, `CHITIET`) VALUES
(1, '8', 'Kết nối: USB 3.0 (hỗ trợ thêm USB 2.0)'),
(2, '8', 'Tốc độ quay: 5 Gbit/s'),
(3, '8', 'Nguồn điện: thông qua kết nối USB (tối đa 900 mA)'),
(4, '8', 'Hệ thống tệp: NTFS (MS Windows) Yêu cầu định dạng lại cho Mac OS'),
(5, '1', 'Chip ASMedia 3142 USB 3.1 Gen 2 chuẩn USB Type-C™ và Type-A'),
(6, '1', 'Đầu nối USB 3.1 Gen 2 nằm trước'),
(7, '1', 'Công nghệ AMP-UP 121dB SNR với chip xử lý ALC1220 & bộ ESS SABRE 9018 DAC cao cấp cùng tụ điện âm thanh WIMA'),
(8, '1', '3 khe M.2 giao diện PCIe Gen3 x4 siêu nhanh kèm tản nhiệt'),
(9, '1', 'Bảo vệ chống sốc điện cổng LAN 15KV và Ultra Durable™ 25KV ESD'),
(10, '2', 'Bộ nhớ kênh đôi Non-ECC Unbuffered DDR4, 4 khe ram'),
(11, '2', 'Chip xử lý âm thanh ALC1220 120dB SNR HD tích hợp Smart Headphone AMP'),
(12, '2', 'Card mạng Intel® GbE LAN Gaming tích hợp phần mềm cFosSpeed giúp tăng tốc Internet'),
(13, '2', '2 khe M.2 siêu nhanh hỗ trợ giao diện PCIe Gen3 x4 và SATA'),
(14, '2', 'Smart Fan 5 tích hợp nhiều cảm biến nhiệt và đầu cấp nguồn quạt lai hỗ trợ FAN STOP'),
(15, '3', 'Chip đồ họa: NVIDIA GeForce GTX 1070 '),
(16, '3', 'Bộ nhớ: 8GB GDDR5 ( 256-bit ) '),
(17, '3', 'GPU clock Boost: 1822 MHz/ Base: 1620 MHz in OC Mode Boost: 1784 MHz/ Base: 1594 MHz in Gaming Mode '),
(18, '3', 'Nguồn phụ: 1 x 8-pin'),
(19, '4', 'Chip đồ họa: NVIDIA GeForce GTX 1080Ti '),
(20, '4', 'Bộ nhớ: 11GB GDDR5X ( 352-bit ) '),
(21, '4', ' GPU clock Boost: 1657 MHz / Base: 1544 MHz in OC mode Boost: 1632 MHz / Base: 1518 MHz in Gaming mode (Reference Card Boost: 1582 MHz / Base: 1480 MHz) '),
(22, '4', 'Nguồn phụ: 1 x 6-pin + 1 x 8-pin'),
(23, '5', 'Socket: LGA 1151-v2 , Intel Core thế hệ thứ 9 '),
(24, '5', 'Tốc độ xử lý: 3.6 GHz - 5.0 GHz ( 8 nhân, 16 luồng) '),
(25, '5', 'Bộ nhớ đệm: 16MB '),
(26, '5', 'Đồ họa tích hợp: Intel UHD Graphics 630'),
(27, '6', 'Thiết kế tản nhiệt độc đáo'),
(28, '6', 'Tản nhiệt cấu hình thấp giúp cho việc lắp đặt dễ dàng'),
(29, '6', ' DDR4 - Hiệu suất điện năng và hiệt quả tuyệt vời'),
(30, '6', ' Tính ổn định và làm mát xuất sắc'),
(31, '6', 'Intel XMP 2.0 - ép tăng tốc dễ dàng hơn'),
(32, '7', 'Dung lượng 1TB'),
(33, '7', 'Tốc độ đọc ghi: 550MB/s – 520MB/s'),
(34, '7', 'Chuẩn kết nối 2.5 inch SATA iii'),
(35, '7', 'Độ bền đọc ghi: 600 TBW'),
(36, 'SP1', 'AA'),
(40, 'SP1', 'aaasssssaaassssssssssssssssssssssssssssssssssssssssssssssssssssssssss');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `MaDH` int(11) NOT NULL,
  `TenDN` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayLap` date NOT NULL,
  `TongTien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`MaDH`, `TenDN`, `NgayLap`, `TongTien`) VALUES
(19, 'Liem', '2019-12-07', 1896);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `MaGH` int(11) NOT NULL,
  `TenDN` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TongTien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`MaGH`, `TenDN`, `TongTien`) VALUES
(17, 'Huy', 1299),
(29, 'Liem1', 496),
(30, 'Duy Anh Pro', 497),
(31, 'Liem', 1896);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanh`
--

CREATE TABLE `hinhanh` (
  `MaHA` int(11) NOT NULL,
  `MaSP` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LinkHA` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hinhanh`
--

INSERT INTO `hinhanh` (`MaHA`, `MaSP`, `LinkHA`) VALUES
(1, '1', 'z370-1.jpg'),
(2, '2', 'z370xp-1.jpg'),
(3, '3', 'GTX-1070-1.png'),
(4, '4', 'GTX-1080ti.jpg'),
(5, '5', 'intelcorei9.png'),
(6, '6', 'XPGGAMMIXD10.png'),
(7, '7', 'SSD8601g.png'),
(8, '8', 'HDT4TB.png'),
(17, 'SP1', 'SSD8601g.png'),
(18, 'SP3', 'intelcorei9.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MAKH` int(11) NOT NULL,
  `TENKH` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT` int(11) NOT NULL,
  `DIACHI` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TENDN` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MATKHAU` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MAKH`, `TENKH`, `SDT`, `DIACHI`, `TENDN`, `MATKHAU`) VALUES
(1, 'Liem', 143763, '123Ass', 'Liem', '12345'),
(4, 'HUY', 12312, '123Ass', 'Huy', '123'),
(5, 'Tien', 123, '123123', 'Tien', '123'),
(8, 'Nguyen Duy Anh', 12344321, 'Ninh Kieu', 'Duy Anh Pro', 'duyanh'),
(10, 'quangliem', 123, '123', 'Liem1', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasx`
--

CREATE TABLE `nhasx` (
  `MaNhaSX` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenNSX` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhasx`
--

INSERT INTO `nhasx` (`MaNhaSX`, `TenNSX`) VALUES
('AS', 'ASUS'),
('GG', 'GIGABYTE'),
('IT', 'INTEL'),
('AD', 'ADATA'),
('SS', 'SAMSUNG'),
('TS', 'TOSHIBA');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `noisx`
--

CREATE TABLE `noisx` (
  `MaNSX` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DienGiai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `noisx`
--

INSERT INTO `noisx` (`MaNSX`, `DienGiai`) VALUES
('CN', 'CHINA'),
('JP', 'JAPAN'),
('US', 'USA'),
('VN', 'VIETNAM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quantri`
--

CREATE TABLE `quantri` (
  `TK` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MK` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenQT` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quantri`
--

INSERT INTO `quantri` (`TK`, `MK`, `TenQT`) VALUES
('Liem12', '123123', 'Liem'),
('Liem123', '123', 'Liem');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenSP` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaNhaSX` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaNSX` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LoaiSP` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gia` int(11) NOT NULL,
  `SL` int(11) NOT NULL,
  `TGBH` int(11) NOT NULL,
  `Hot` tinyint(1) NOT NULL,
  `New` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `MaNhaSX`, `MaNSX`, `LoaiSP`, `Gia`, `SL`, `TGBH`, `Hot`, `New`) VALUES
('1', 'GIGABYTE Z370 AORUS', 'GG', 'US', 'Mainboard', 209, 22, 12, 1, 1),
('2', 'GIGABYTE Z370XP SLI', 'GG', 'JP', 'Mainboard', 199, 22, 24, 1, 0),
('3', 'GeForce GTX-1070', 'GG', 'CN', 'VGA', 299, 30, 24, 0, 1),
('4', 'GeForce GTX-1080ti', 'GG', 'VN', 'VGA', 799, 50, 36, 1, 0),
('5', 'Intel® Core™ i9-9900K', 'IT', 'CN', 'CPU', 1299, 50, 36, 1, 1),
('6', 'XPG GAMMIX D10 DDR4 ', 'AD', 'CN', 'Ram', 59, 50, 12, 1, 0),
('7', 'Samsung 860 EVO 1TB', 'SS', 'US', 'SSD', 249, 50, 24, 1, 1),
('8', 'Canvio Basics 4 TB', 'TS', 'JP', 'HDD', 99, 100, 24, 1, 1),
('SP1', 'test12', 'IT', 'JP', 'Ram', 69, 96, 669, 1, 0),
('SP3', 'AAA', 'GG', 'US', 'VGA', 333, 111, 12, 1, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdh`
--
ALTER TABLE `chitietdh`
  ADD PRIMARY KEY (`MaSP`,`MaDH`);

--
-- Chỉ mục cho bảng `chitietgh`
--
ALTER TABLE `chitietgh`
  ADD PRIMARY KEY (`MaGH`,`MaSP`);

--
-- Chỉ mục cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  ADD PRIMARY KEY (`MaCT`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDH`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`MaGH`);

--
-- Chỉ mục cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`MaHA`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MAKH`,`TENDN`);

--
-- Chỉ mục cho bảng `noisx`
--
ALTER TABLE `noisx`
  ADD PRIMARY KEY (`MaNSX`);

--
-- Chỉ mục cho bảng `quantri`
--
ALTER TABLE `quantri`
  ADD PRIMARY KEY (`TK`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  MODIFY `MaCT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `MaDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `MaGH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `MaHA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MAKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
