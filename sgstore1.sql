-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 18, 2023 lúc 09:11 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sgstore1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anh_sp`
--

CREATE TABLE `anh_sp` (
  `id_anh_sp` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `anh1` varchar(20) DEFAULT NULL,
  `anh2` varchar(20) DEFAULT NULL,
  `anh3` varchar(20) DEFAULT NULL,
  `anh4` varchar(20) DEFAULT NULL,
  `anh5` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `anh_sp`
--

INSERT INTO `anh_sp` (`id_anh_sp`, `id_sp`, `anh1`, `anh2`, `anh3`, `anh4`, `anh5`) VALUES
(1, 1, 'ip15pro1.jpg', 'ip15pro2.jpg', 'ip15pro3.jpg', 'ip15pro4.jpg', NULL),
(2, 3, 'ip14pro1.jpg', 'ip14pro2.jpg', 'ip14pro3.jpg', 'ip14pro4.jpg', NULL),
(3, 5, 'ip13pro1.jpg', 'ip13pro2.jpg', 'ip13pro3.jpg', 'ip13pro4.jpg', NULL),
(4, 2, 'ip14thuong1.jpg', 'ip14thuong2.jpg', 'ip14thuong3.jpg', 'ip14thuong4.jpg', NULL),
(5, 4, 'ip13thuong1.jpg', 'ip13thuong2.jpg', 'ip13thuong3.jpg', 'ip13thuong4.jpg', NULL),
(6, 6, 'ip13mini1.jpg', 'ip13mini2.jpg', 'ip13mini3.jpg', 'ip13mini4.jpg', NULL),
(7, 7, 'apporeno1.jpg', 'apporeno2.jpg', 'apporeno3.jpg', 'apporeno4.jpg', NULL),
(8, 8, 'samsunggalaxy1.jpg', 'samsunggalaxy2.jpg', 'samsunggalaxy3.jpg', 'samsunggalaxy4.jpg', NULL),
(9, 9, 'samsungs23ultra1.jpg', 'samsungs23ultra2.jpg', 'samsungs23ultra3.jpg', 'samsungs23ultra4.jpg', NULL),
(10, 10, 'xiaomi1.jpg', 'xiaomi2.jpg', 'xiaomi3.jpg', 'xiaomi4.jpg', NULL),
(11, 11, 'xiaomilike1.jpg', 'xiaomilike2.jpg', 'xiaomilike3.jpg', 'xiaomilike4.jpg', NULL),
(12, 12, 'vivo1.jpg', 'vivo2.jpg', 'vivo3.jpg', 'vivo4.jpg', NULL),
(13, 13, 'realme1.jpg', 'realme2.jpg', 'realme3.jpg', 'realme4.jpg', NULL),
(14, 14, 'laptop1.jpg', 'laptop2.jpg', 'laptop3.jpg', 'laptop4.jpg', NULL),
(15, 15, 'laptopryzen1.jpg', 'laptopryzen2.jpg', 'laptopryzen3.jpg', 'laptopryzen4.jpg', NULL),
(16, 16, 'laptoppro1.jpg', 'laptoppro2.jpg', 'laptoppro3.jpg', 'laptoppro4.jpg', NULL),
(17, 17, 'laptopdell1.jpg', 'laptopdell2.jpg', 'laptopdell3.jpg', 'laptopdell4.jpg', NULL),
(18, 18, 'laptopair1.jpg', 'laptopair2.jpg', 'laptopair3.jpg', 'laptopair4.jpg', NULL),
(19, 19, 'khongdaypro1.jpg', 'khongdaypro2.jpg', 'khongdaypro3.jpg', 'khongdaypro4.jpg', NULL),
(20, 20, 'taingheairpods1.jpg', 'taingheairpods2.jpg', 'taingheairpods3.jpg', 'taingheairpods4.jpg', NULL),
(21, 21, 'tainghesony1.jpg', 'tainghesony2.jpg', 'tainghesony3.jpg', 'tainghesony4.jpg', NULL),
(22, 22, 'tainghegalaxy1.jpg', 'tainghegalaxy2.jpg', 'tainghegalaxy3.jpg', 'tainghegalaxy4.jpg', NULL),
(23, 23, 'tainghechuptai1.jpg', 'tainghechuptai2.jpg', 'tainghechuptai3.jpg', 'tainghechuptai4.jpg', NULL),
(24, 24, 'tivisamsung1.jpg', 'tivisamsung2.jpg', 'tivisamsung3.jpg', 'tivisamsung4.jpg', NULL),
(25, 25, 'tivisony1.jpg', 'tivisony2.jpg', 'tivisony3.jpg', 'tivisony4.jpg', NULL),
(26, 26, 'tivicasper1.jpg', 'tivicasper2.jpg', 'tivicasper3.jpg', 'tivicasper4.jpg', NULL),
(27, 27, 'ipadpro1.jpg', 'ipadpro2.jpg', 'ipadpro3.jpg', 'ipadpro4.jpg', NULL),
(28, 28, 'ipadair1.jpg', 'ipadair2.jpg', 'ipadair3.jpg', 'ipadair4.jpg', NULL),
(29, 29, 'ipadmini1.jpg', 'ipadmini2.jpg', 'ipadmini3.jpg', 'ipadmini4.jpg', NULL),
(30, 30, 'ipadsamsung1.jpg', 'ipadsamsung2.jpg', 'ipadsamsung3.jpg', 'ipadsamsung4.jpg', NULL),
(31, 31, 'ipadlenovo1.jpg', 'ipadlenovo2.jpg', 'ipadlenovo3.jpg', 'ipadlenovo4.jpg', NULL),
(32, 32, 'chuot203g1.jpg', 'chuot203g2.jpg', 'chuot203g3.jpg', 'chuot203g4.jpg', NULL),
(33, 33, 'chuot304g1.jpg', 'chuot304g2.jpg', 'chuot304g3.jpg', 'chuot304g4.jpg', NULL),
(34, 34, 'chuotasus1.jpg', 'chuotasus2.jpg', 'chuotasus3.jpg', 'chuotasus4.jpg', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id_bl` int(10) NOT NULL,
  `id_kh` int(10) NOT NULL,
  `id_sp` int(10) NOT NULL,
  `noidung` text NOT NULL,
  `ngaydang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(10) NOT NULL,
  `id_loai` int(10) NOT NULL,
  `tieude` text NOT NULL,
  `hinhanh` varchar(20) NOT NULL,
  `noidung` text NOT NULL,
  `ngaydang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_donhang`
--

CREATE TABLE `ct_donhang` (
  `id_ctdh` int(10) NOT NULL,
  `id_dh` int(10) NOT NULL,
  `id_sp` int(10) NOT NULL,
  `soluong` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ct_donhang`
--

INSERT INTO `ct_donhang` (`id_ctdh`, `id_dh`, `id_sp`, `soluong`) VALUES
(3, 14, 3, 1),
(4, 15, 3, 1),
(5, 15, 3, 1),
(6, 15, 5, 1),
(7, 15, 4, 1),
(8, 15, 3, 1),
(9, 15, 5, 1),
(10, 15, 3, 1),
(11, 15, 5, 1),
(12, 15, 3, 1),
(13, 15, 5, 1),
(14, 22, 3, 1),
(15, 22, 5, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id_dh` int(10) NOT NULL,
  `id_kh` int(10) NOT NULL,
  `tongtien` int(10) NOT NULL,
  `ngaydathang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `trangthai` text NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id_dh`, `id_kh`, `tongtien`, `ngaydathang`, `trangthai`) VALUES
(5, 1, 32670000, '2023-11-17 23:25:29', '0'),
(7, 1, 1980000, '2023-11-17 23:30:28', '0'),
(8, 1, 1980000, '2023-11-18 00:14:07', 'Đang chuẩn bị hàng'),
(9, 1, 50490000, '2023-11-18 00:59:39', 'Đang chuẩn bị hàng'),
(10, 1, 50490000, '2023-11-18 01:01:03', 'Đang chuẩn bị hàng'),
(11, 1, 50490000, '2023-11-18 01:01:49', 'Đang chuẩn bị hàng'),
(12, 1, 50490000, '2023-11-18 01:02:37', 'Đang chuẩn bị hàng'),
(13, 1, 1980000, '2023-11-18 01:03:28', 'Đang chuẩn bị hàng'),
(14, 1, 1980000, '2023-11-18 01:04:05', 'Đang chuẩn bị hàng'),
(15, 1, 1980000, '2023-11-18 01:05:39', 'Đang chuẩn bị hàng'),
(16, 1, 28215000, '2023-11-18 01:06:04', 'Đang chuẩn bị hàng'),
(17, 1, 28215000, '2023-11-18 01:14:25', 'Đang chuẩn bị hàng'),
(18, 1, 1980000, '2023-11-18 01:24:20', 'Đang chuẩn bị hàng'),
(19, 1, 15345000, '2023-11-18 01:33:42', 'Đang chuẩn bị hàng'),
(20, 1, 15345000, '2023-11-18 01:34:15', 'Đang chuẩn bị hàng'),
(21, 1, 15345000, '2023-11-18 01:34:16', 'Đang chuẩn bị hàng'),
(22, 1, 15345000, '2023-11-18 01:36:50', 'Đang chuẩn bị hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id_gh` int(10) NOT NULL,
  `id_kh` int(10) NOT NULL,
  `id_sp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id_kh` int(10) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `tenkhachhang` varchar(40) NOT NULL,
  `email` varchar(20) NOT NULL,
  `sdt` int(10) NOT NULL,
  `hinhAnh` varchar(100) DEFAULT NULL,
  `matkhau` varchar(20) NOT NULL,
  `matkhaucap2` text NOT NULL,
  `diaChi` text DEFAULT NULL,
  `trangthai` tinyint(1) NOT NULL DEFAULT 0,
  `gioitinh` tinyint(4) DEFAULT NULL,
  `vaitro` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id_kh`, `user_name`, `tenkhachhang`, `email`, `sdt`, `hinhAnh`, `matkhau`, `matkhaucap2`, `diaChi`, `trangthai`, `gioitinh`, `vaitro`) VALUES
(1, 'duyp7454', 'duypham', 'duyp7454@gmail.com', 2147483647, NULL, 'Ngocduy1', 'Ngocduy12', '15/5 ấp mới 2 xã chunh chánh hóc môn', 0, NULL, 0),
(3, 'duypham', '', 'duyp7454@gmail.com', 0, NULL, 'Ngocduy1', 'Ngocduy12', NULL, 0, NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_blog`
--

CREATE TABLE `loai_blog` (
  `id_loai` int(10) NOT NULL,
  `tenloai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_sp`
--

CREATE TABLE `loai_sp` (
  `id_loai` int(10) NOT NULL,
  `tenloai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_sp`
--

INSERT INTO `loai_sp` (`id_loai`, `tenloai`) VALUES
(1, 'điện thoại'),
(2, 'Laptop'),
(3, 'Tivi'),
(4, 'Tai Nghe'),
(5, 'Ipad'),
(6, 'Chuột Máy Tính');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(10) NOT NULL,
  `id_loai` int(10) DEFAULT NULL,
  `ten_sp` varchar(100) DEFAULT NULL,
  `gia` int(10) DEFAULT NULL,
  `hinhanh` varchar(20) DEFAULT NULL,
  `noibat` tinyint(1) NOT NULL DEFAULT 0,
  `khuyenmai` int(3) NOT NULL DEFAULT 1,
  `luotxem` int(10) DEFAULT NULL,
  `kichthuoc` varchar(20) DEFAULT NULL,
  `hedieuhanh` varchar(20) DEFAULT NULL,
  `ngaythem` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `maudo` tinyint(1) NOT NULL DEFAULT 0,
  `mauxanh` tinyint(1) NOT NULL DEFAULT 0,
  `mauden` tinyint(1) NOT NULL DEFAULT 0,
  `conhang` tinyint(1) NOT NULL DEFAULT 1,
  `anhmota1` varchar(20) DEFAULT NULL,
  `text1` text DEFAULT NULL,
  `anhmota2` varchar(20) DEFAULT NULL,
  `text2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `id_loai`, `ten_sp`, `gia`, `hinhanh`, `noibat`, `khuyenmai`, `luotxem`, `kichthuoc`, `hedieuhanh`, `ngaythem`, `maudo`, `mauxanh`, `mauden`, `conhang`, `anhmota1`, `text1`, `anhmota2`, `text2`) VALUES
(1, 1, 'iPhone 15 Pro Max 256GB | Chính hãng VN/A | Hàng đặt trước,Màu Titan mới nhất ', 200000, 'ip15pro0.png', 0, 0, 0, '128mb', 'IOS', '2023-11-17 15:53:58', 1, 0, 0, 1, 'ip15pro.jpg', 'Kích thước màn hình\r\n\r\n6.7 inches\r\nCông nghệ màn hình\r\n\r\nSuper Retina XDR OLED\r\nCamera sau\r\n\r\nCamera chính: 48MP, 24 mm, ƒ/1.78,\r\nCamera góc siêu rộng: 12 MP, 13 mm, ƒ/2.2\r\nCamera Tele 5x: 12 MP, 120 mm, ƒ/2.8\r\nCamera Tele 2x: 12 MP, 48 mm, ƒ/1.78\r\nCamera trước\r\n\r\n12MP, ƒ/1.9\r\nChipset\r\n\r\nA17 Pro\r\nDung lượng RAM\r\n\r\n8 GB\r\nBộ nhớ trong\r\n\r\n256 GB\r\nPin\r\n\r\n4422 mAh\r\nThẻ SIM\r\n\r\n2 SIM (nano‑SIM và eSIM)\r\nHệ điều hành\r\n\r\niOS 17\r\nĐộ phân giải màn hình\r\n\r\n2796 x 1290-pixel\r\nTính năng màn hình\r\n\r\nTốc độ làm mới 120Hz\r\n460 ppi\r\nHDR\r\nTrue Tone\r\nDải màu rộng (P3)\r\nHaptic Touch\r\nTỷ lệ tương phản 2.000.000:1', NULL, NULL),
(2, 1, 'iPhone 14 128GB | Chính hãng VN/A | Màu hồng', 18000000, 'ip14thuong0.png', 0, 1, 15, '128mb', 'IOS', '2023-11-17 05:39:36', 0, 1, 0, 1, 'ip14thuong1.jpg', 'Kích thước màn hình\r\n\r\n6.1 inches\r\nCông nghệ màn hình\r\n\r\nOLED\r\nCamera sau\r\n\r\nCamera góc rộng: 12MP\r\nCamera góc siêu rộng: 12MP\r\nCamera trước\r\n\r\n12MP, ƒ/1.9\r\nChipset\r\n\r\nApple A15 Bionic 6 nhân\r\nDung lượng RAM\r\n\r\n6 GB\r\nBộ nhớ trong\r\n\r\n128 GB\r\nPin\r\n\r\n3,279mAh\r\nThẻ SIM\r\n\r\n2 SIM (nano‑SIM và eSIM)\r\nHệ điều hành\r\n\r\niOS 16\r\nĐộ phân giải màn hình\r\n\r\n2532 x 1170 pixels\r\nTính năng màn hình\r\n\r\nTần số quét 60Hz, 1200 nits, Kính cường lực Ceramic Shield', NULL, NULL),
(3, 1, 'iPhone 14 Pro 128GB | Chính hãng VN/A | Màu Xanh', 2000000, 'ip14pro0.png', 0, 1, 45, '128mb', 'IOS', '2023-11-17 05:41:21', 0, 0, 1, 1, 'ip14pro1.jpg', 'Kích thước màn hình\r\n\r\n6.1 inches\r\nCông nghệ màn hình\r\n\r\nSuper Retina XDR OLED\r\nCamera sau\r\n\r\nCamera chính: 48 MP, f/1.8, 24mm, OIS\r\nCamera góc siêu rộng: 12 MP, f/2.2, 120˚, 1.4µm\r\nCamera tele: 12 MP, f/2.8, PDAF, OIS, 3x optical zoom\r\nCảm biến độ sâu TOF 3D LiDAR\r\nCamera trước\r\n\r\nCamera selfie: 12 MP, f/1.9, 23mm, PDAF\r\nChipset\r\n\r\nApple A16 Bionic 6 nhân\r\nDung lượng RAM\r\n\r\n6 GB\r\nBộ nhớ trong\r\n\r\n128 GB\r\nPin\r\n\r\n3200 mAh\r\nThẻ SIM\r\n\r\n2 SIM (nano‑SIM và eSIM)\r\nHệ điều hành\r\n\r\niOS 16\r\nĐộ phân giải màn hình\r\n\r\n2556 x 1179 pixels\r\nTính năng màn hình\r\n\r\nCông nghệ ProMotion với tần số quét 120Hz\r\nTỷ lệ tương phản 2.000.000: 1\r\nĐộ sáng tối đa: 1.000 nits (điển hình), 1.600 nits (HDR), 2.000 nits (ngoài trời)', NULL, NULL),
(4, 1, 'iPhone 13 128GB | Chính hãng VN/A | Màu Xanh Dương', 13000000, 'ip13thuong0.png', 0, 1, 0, '128mb', 'IOS', '2023-11-17 05:44:00', 0, 0, 1, 1, 'ip13thuong.jpg', 'Kích thước màn hình\r\n\r\n6.1 inches\r\nCông nghệ màn hình\r\n\r\nSuper Retina XDR OLED\r\nCamera sau\r\n\r\nCamera góc rộng: 12MP, f/1.6\r\nCamera góc siêu rộng: 12MP, ƒ/2.4\r\nCamera trước\r\n\r\n12MP, f/2.2\r\nChipset\r\n\r\nApple A15\r\nDung lượng RAM\r\n\r\n4 GB\r\nBộ nhớ trong\r\n\r\n128 GB\r\nPin\r\n\r\n3240mAh\r\nThẻ SIM\r\n\r\n2 SIM (nano‑SIM và eSIM)\r\nHệ điều hành\r\n\r\niOS 15\r\nĐộ phân giải màn hình\r\n\r\n2532 x 1170 pixels\r\nTính năng màn hình\r\n\r\nMàn hình super Retina XDR, OLED, 460 ppi, HDR display, công nghệ True Tone Wide color (P3), Haptic Touch, Lớp phủ oleophobic chống bám vân tay', NULL, NULL),
(5, 1, 'Phone 13 Pro Max 128GB | Chính hãng VN/A | Hàng 99%', 13500000, 'ip13pro0.png', 0, 1, 12, '128mb', 'IOS', '2023-11-17 05:44:40', 1, 0, 0, 1, 'ip13pro1.jpg', 'Cấu hình Điện thoại iPhone 13 128GB\r\n\r\nMàn hình:OLED6.1\"Super Retina XDR\r\nHệ điều hành:iOS 15\r\nCamera sau:2 camera 12 MP\r\nCamera trước:12 MP\r\nChip:Apple A15 Bionic\r\nRAM:4 GB\r\nDung lượng lưu trữ:128 GB\r\nSIM:1 Nano SIM & 1 eSIMHỗ trợ 5G\r\nPin, Sạc:3240 mAh20 W', NULL, NULL),
(6, 1, 'iPhone 13 mini 128GB - Hàng chính Hãng -Cũ Đẹp', 10000000, 'ip13mini0.png', 0, 0, 50, '128mb', 'IOS', '2023-11-17 05:46:02', 0, 0, 1, 1, 'ip13mini1.jpg', 'Kích thước màn hình\r\n\r\n5.4 inches\r\nCông nghệ màn hình\r\n\r\nOLED\r\nCamera sau\r\n\r\nCamera góc rộng: 12MP, f/1.6\r\nCamera góc siêu rộng: 12MP, ƒ/2.4\r\nCamera trước\r\n\r\n12MP, f/2.2\r\nChipset\r\n\r\nApple A15\r\nDung lượng RAM\r\n\r\n4 GB\r\nBộ nhớ trong\r\n\r\n128 GB\r\nPin\r\n\r\n2,406mAh\r\nThẻ SIM\r\n\r\n2 SIM (nano‑SIM và eSIM)\r\nHệ điều hành\r\n\r\niOS15\r\nĐộ phân giải màn hình\r\n\r\n1080 x 2340 pixels (FullHD+)\r\nTính năng màn hình\r\n\r\nMàn hình super Retina XDR, OLED, 476 ppi, HDR display, công nghệ True Tone Wide color (P3), Haptic Touch, Lớp phủ oleophobic chống bám vân tay', NULL, NULL),
(7, 1, 'OPPO Reno10 5G 8GB 256GB - Chính Hãng', 18000000, 'apporeno0.png', 0, 1, 5, '128mb', 'Android', '2023-11-17 05:48:25', 0, 0, 1, 1, 'apporeno.jpg', 'Kích thước màn hình\r\n\r\n6.7 inches\r\nCông nghệ màn hình\r\n\r\nAMOLED\r\nCamera sau\r\n\r\nCamera góc rộng: 64MP; f/1.7, PDAF\r\nChụp Telephoto chân dung: 32 MP, f/2.0\r\nCamera góc siêu rộng: 8 MP, f/2.2, Zoom quang lai 2X× và Xoom kỹ thuật số 20X\r\nCamera trước\r\n\r\nCamera góc rộng: 32 MP, f/2.4\r\nChipset\r\n\r\nMediaTek Dimensity 7050\r\nDung lượng RAM\r\n\r\n8 GB\r\nBộ nhớ trong\r\n\r\n256 GB\r\nPin\r\n\r\n5000 mAh\r\nThẻ SIM\r\n\r\n2 SIM (Nano-SIM)\r\nHệ điều hành\r\n\r\nAndroid 13\r\nĐộ phân giải màn hình\r\n\r\n1080 x 2412 pixels\r\nTính năng màn hình\r\n\r\n1.07 tỷ màu, tần số quét 120Hz, HDR10+, tỷ lệ hiển thị 93%, 950 nits , viền cong 3D', NULL, NULL),
(8, 1, 'Samsung Galaxy Z Fold5', 15131311, 'samsunggalaxy0.png', 0, 1, 0, '128mb', 'Android', '2023-11-16 11:42:19', 0, 0, 1, 1, 'samsunggalaxy1.jpg', 'Công nghệ màn hình:Dynamic AMOLED 2X\r\nĐộ phân giải:Chính: QXGA+ (2176 x 1812 Pixels) & Phụ: HD+ (2316 x 904 Pixels)\r\nMàn hình rộng:Chính 7.6\" & Phụ 6.2\" - Tần số quét 120 Hz\r\nĐộ sáng tối đa:1750 nits\r\nMặt kính cảm ứng:Chính: Ultra Thin Glass & Phụ: Corning Gorilla Glass Victus 2', NULL, NULL),
(9, 1, 'Samsung Galaxy S23 Ultra', 18000000, 'samsungs23ultra0.png', 1, 1, 88, '128mb', 'Android', '2023-11-16 11:43:55', 0, 0, 1, 1, 'samsungs23ultra.jpg', 'Màn hình:Dynamic AMOLED 2X6.8\"Quad HD+ (2K+)\r\nHệ điều hành:Android 13\r\nCamera sau:Chính 200 MP & Phụ 12 MP, 10 MP, 10 MP\r\nCamera trước:12 MP\r\nChip:Snapdragon 8 Gen 2 for Galaxy\r\nRAM:8 GB\r\nDung lượng lưu trữ:256 GB\r\nSIM:2 Nano SIM hoặc 1 Nano SIM + 1 eSIMHỗ trợ 5G\r\nPin, Sạc:5000 mAh45 W', NULL, NULL),
(10, 1, 'Điện thoại Xiaomi 13T Pro 5G', 15802000, 'xiaomi0.png', 0, 1, 2, '128mb', 'Android', '2023-11-16 11:43:55', 1, 0, 0, 1, 'xiaomi.jpg', 'Màn hình:AMOLED6.67\"1.5K\r\nHệ điều hành:Android 13\r\nCamera sau:Chính 50 MP & Phụ 50 MP, 12 MP\r\nCamera trước:20 MP\r\nChip:MediaTek Dimensity 9200+ 5G 8 nhân\r\nRAM:12 GB\r\nDung lượng lưu trữ:256 GB\r\nSIM:2 Nano SIMHỗ trợ 5G\r\nPin, Sạc:5000 mAh120 W', NULL, NULL),
(11, 1, 'Điện thoại Xiaomi 13 Lite 5G', 18000000, 'xiaomilike0.png', 0, 1, 10, '128mb', 'Android', '2023-11-16 11:43:55', 1, 0, 0, 1, 'xiaomilike.jpg', 'Màn hình:AMOLED6.55\"Full HD+\r\nHệ điều hành:Android 12\r\nCamera sau:Chính 50 MP & Phụ 8 MP, 2 MP\r\nCamera trước:Chính 32 MP & Phụ 8 MP\r\nChip:Snapdragon 7 Gen 1 8 nhân\r\nRAM:8 GB\r\nDung lượng lưu trữ:256 GB\r\nSIM:2 Nano SIMHỗ trợ 5G\r\nPin, Sạc:4500 mAh67 W', NULL, NULL),
(12, 1, 'Điện thoại vivo V25 Pro 5G', 15000000, 'vivo0.png', 1, 1, 11, '128mb', 'Android', '2023-11-16 11:43:55', 0, 1, 0, 1, 'vivo.jpg', 'Màn hình:AMOLED6.56\"Full HD+\r\nHệ điều hành:Android 12\r\nCamera sau:Chính 64 MP & Phụ 8 MP, 2 MP\r\nCamera trước:32 MP\r\nChip:MediaTek Dimensity 1300\r\nRAM:8 GB\r\nDung lượng lưu trữ:128 GB\r\nSIM:2 Nano SIMHỗ trợ 5G\r\nPin, Sạc:4830 mAh66 W', NULL, NULL),
(13, 1, 'Điện thoại realme 11 Pro 5G', 2000000, 'realme0.png', 0, 1, 23, '128mb', 'Android', '2023-11-16 11:43:55', 0, 0, 1, 1, 'realme.jpg', 'Màn hình:AMOLED6.7\"Full HD+\r\nHệ điều hành:Android 13\r\nCamera sau:Chính 100 MP & Phụ 2 MP\r\nCamera trước:16 MP\r\nChip:MediaTek Dimensity 7050 5G 8 nhân\r\nRAM:8 GB\r\nDung lượng lưu trữ:256 GB\r\nSIM:2 Nano SIMHỗ trợ 5G\r\nPin, Sạc:5000 mAh67 W', NULL, NULL),
(14, 2, 'Laptop Apple MacBook Pro M1 16', 30000000, 'laptop0.png', 0, 1, 25, '15in', 'macOS', '2023-11-16 11:43:55', 0, 0, 1, 1, 'laptop.jpg', '13.3 inch, 2560 x 1600 Pixels, IPS, IPS LCD LED Backlit, True Tone\r\n\r\nApple, M1\r\n\r\n16 GB, LPDDR4\r\n\r\nSSD 512 GB\r\n\r\nApple M1 GPU 8 nhân', NULL, NULL),
(15, 2, 'Laptop MateBook 14 Ryzen Editi', 25000000, 'laptopryzen0.png', 0, 0, 0, '15in', 'Windows', '2023-11-16 11:43:55', 0, 0, 1, 1, 'laptopryzen.jpg', 'Loại card đồ họa\r\nAMD Radeon Graphics\r\nDung lượng RAM\r\n16GB\r\nỔ cứng\r\n512 GB NVMe PCIe SSD\r\nKích thước màn hình\r\n14 inches\r\nPin\r\n56 Wh\r\nHệ điều hành\r\nWindows 11\r\nĐộ phân giải màn hình\r\n2160 x 1440 pixels\r\nCông nghệ màn hình\r\n100% sRGB\r\nCổng giao tiếp\r\nUSB-C x 1 (support data, charging and DisplayPort)\r\nUSB3.2 Gen1 x 2\r\nHDMI x 1\r\n1 x combo mic tai nghe 3.5mm', NULL, NULL),
(16, 2, 'Laptop MateBook Pro 2021 Intel', 18000000, 'laptoppro0.png', 0, 0, 1, '15in', 'Windows ', '2023-11-16 11:43:55', 1, 0, 0, 1, '', '– CPU Chip: Intel Core i7-8550U\r\n– RAM: 16GB LPDDR3 2133MHz\r\n– Ổ cứng: 512GB NVMe PCIe SSD\r\n– Chipset đồ họa: NVIDIA GeForce MX150 2GB GDDR5 + Intel UHD Graphics 620\r\n– Màn hình: 13.9 inch LTPS (3000 x 2000) Touch, độ sáng 500 nits, 100% màu sRGB\r\n– Hệ điều hành: Windows 10 Home\r\n– Pin: Lithium polymer, 57.4 Whrs\r\n– Trọng lượng 1,33Kg', NULL, NULL),
(17, 2, 'Laptop Dell Vostro 3400 Intel ', 15000000, 'laptopdell0.png', 0, 1, 2, '15in', 'Windows ', '2023-11-16 11:45:41', 0, 0, 1, 1, 'laptopdell.jpg', 'CPU: Intel® Core™ i3-1115G4 (tối đa 4.10GHz, 6MB)\r\nRAM: 8GB(8GBX1)DDR4 3200MHz (2 khe)\r\nỔ cứng: 256GB SSD M.2 PCIe NVMe\r\nVGA: Intel HD Graphics\r\nMàn hình: 14 inch FHD (1920 x 1080) 60Hz, WVA\r\nPin: 42Wh, 3 cell,\r\nMàu sắc: Đen', NULL, NULL),
(18, 2, 'MacBook Air M1 ', 18000000, 'laptopair0.png', 0, 0, 2, '15in', 'macOS', '2023-11-16 11:45:41', 1, 0, 0, 1, 'laptopair.jpg', 'Hệ điều hành & CPU\r\nChip xử lý (CPU)\r\nApple M1 chip with 8‑core CPU, 7‑core GPU, and 16‑core Neural Engine\r\nHệ điều hành\r\nMac OS\r\nBộ nhớ RAM, Ổ cứng\r\nLoại RAM\r\nLPDDR4X 4266 MT/s\r\nỔ đĩa quang\r\nKhông\r\nỔ cứng\r\n256GB SSD\r\n', NULL, NULL),
(19, 4, 'Apple Airpods Pro MWP22A M/A B', 500000, 'khongdaypro0.png', 0, 5, 10, '0', 'IOS', '2023-11-16 11:45:41', 0, 0, 1, 1, 'khongdaypro.jpg', 'Thời gian tai nghe:Dùng 5 giờ - Sạc 2 giờ\r\nThời gian hộp sạc:Dùng 24 giờ - Sạc 3 giờ\r\nCổng sạc:LightningSạc không dây\r\nCông nghệ âm thanh:Adaptive EQActive Noise CancellationTransparency ModeSpatial AudioCustom High Dynamic Range AmplifierCustom high-excursion Apple driverChip Apple H1\r\nTương thích:AndroidiOS (iPhone)iPadOS (iPad)MacOS', NULL, NULL),
(20, 4, 'Apple Bluetooth AirPods Max MG', 800000, 'taingheairpods0.png', 0, 10, 80, '0', 'IOS', '2023-11-16 11:45:41', 1, 0, 0, 1, 'taingheairpods.jpg', 'Thời gian tai nghe:Dùng 20 giờ - Sạc 3 giờ\r\nCổng sạc:Lightning\r\nCông nghệ âm thanh:Adaptive EQActive Noise CancellationTransparency ModeSpatial AudioChip Apple H1\r\nTương thích:macOS (Macbook, iMac)AndroidiOS (iPhone)iPadOS (iPad)\r\nTiện ích:Chống ồn chủ độngSạc nhanh', NULL, NULL),
(21, 4, 'Bluetooth Sony HBS-FN6 Noise C', 2000000, 'tainghesony0.png', 0, 0, 10, '0', 'Android', '2023-11-16 11:45:41', 0, 1, 0, 1, 'tainghesony.jpg', 'Thời gian tai nghe:Dùng 5 giờ - Sạc Khoảng 70 phút\r\nThời gian hộp sạc:Dùng 23 giờ - Sạc Khoảng 130 phút\r\nCổng sạc:Sạc không dây QiType-C\r\nCông nghệ âm thanh:360 Reality AudioActive Noise CancellingAmbient SoundÂm thanh Hi-Fi\r\nTương thích:Android\r\nỨng dụng kết nối:SmartThings\r\nTiện ích:3 Micro chống ồnChống nước IPX7Chống ồn chủ động ANCHỗ trợ sạc không dây QiSạc nhanh', NULL, NULL),
(22, 4, 'Tai nghe Bluetooth True Wirele', 2600000, 'tainghegalaxy0.png', 0, 5, 10, '0', 'Android', '2023-11-16 11:45:41', 0, 1, 0, 1, 'tainghegalaxy.jpg', 'Thời gian tai nghe:Dùng 5 giờ - Sạc Khoảng 70 phút\r\nThời gian hộp sạc:Dùng 23 giờ - Sạc Khoảng 130 phút\r\nCổng sạc:Type-CSạc không dây Qi\r\nCông nghệ âm thanh:Active Noise Cancelling360 Reality AudioAmbient SoundÂm thanh Hi-Fi\r\nTương thích:Android\r\nỨng dụng kết nối:SmartThings', NULL, NULL),
(23, 4, 'Tai nghe Bluetooth Chụp Tai JB', 2900000, 'tainghechuptai0.png', 0, 15, 16, '', 'Windows ', '2023-11-16 11:45:41', 0, 0, 1, 1, 'tainghechuptai.jpg', 'Pin:Dùng 57 giờ - Sạc 2 giờ\r\nCổng sạc:Type-C\r\nCông nghệ âm thanh:JBL Pure Bass SoundKích thước driver: 33 mm\r\nTương thích:AndroidiOS (iPhone)WindowsMacOS\r\nỨng dụng kết nối:JBL Headphones\r\nTiện ích:Tương thích trợ lý ảo Có mic thoạiSạc nhanh\r\nHỗ trợ kết nối:Bluetooth 5.3\r\nĐiều khiển bằng:\r\nPhím nhấn', NULL, NULL),
(24, 3, 'Smart Tivi Samsung 4K Crystal ', 20000000, 'tivisamsung0.png', 1, 10, 25, '55in', 'Android', '2023-11-16 11:45:41', 0, 0, 1, 1, 'tivisamsung.jpg', 'Loại tivi:Smart Tivi43 inch4K\r\nHệ điều hànhTizen™\r\nỨng dụng phổ biến:Clip TVFPT PlayGalaxy Play (Fim+)MP3 ZingMyTVNetflixPOPS KidsSpotifyTrình duyệt webVieONYouTube\r\nCông nghệ hình ảnh:Chuyển động mượt Motion Xcelerator TurboDynamic Crystal ColorGiảm độ trễ chơi game Auto Low Latency Mode (ALLM)HDR10+Kiểm soát đèn nền UHD DimmingNâng cấp độ tương phản Contrast Enhancer\r\nĐiều khiển bằng giọng nói:Bixby có tiếng Việt (dự kiến kích hoạt từ ngày 6/11/2023)Tìm kiếm giọng nói trên YouTube bằng tiếng Việt', NULL, NULL),
(25, 3, 'Google Tivi Mini LED Sony 4K 8', 25000000, 'tivisony0.png', 0, 10, 25, '55in', 'Android', '2023-11-16 11:46:22', 0, 0, 1, 1, 'tivisony.jpg', 'Loại tivi:Google Tivi Mini LED85 inch4K\r\nHệ điều hành:Google TV\r\nỨng dụng phổ biến:Clip TVFPT PlayGalaxy Play (Fim+)NetflixVieONVTVcab ONYouTube\r\nCông nghệ hình ảnh:Công nghệ chống phản chiếu X-Anti ReflectionDolby VisionGiảm nhiễu XR Clear ImageGiảm độ trễ chơi game Auto Low Latency Mode (ALLM)Góc nhìn rộng X-Wide AngleHDR10HLGKiểm soát đèn nền XR Backlight Master DriveLàm mượt chuyển động XR Motion ClarityNâng cấp độ phân giải XR 4K Upscaling Tinh năng Game MenuTính năng chơi game 4K 120fpsTăng cường màu sắc XR Triluminos ProTăng cường tương phản XR Contrast Booster 20Đồng bộ khung hình/tần số quét chơi game VRR', NULL, NULL),
(26, 3, ' Smart Tivi Casper 4K 55 inch ', 30000000, 'tivicasper0.png', 0, 10, 20, '55in', 'Android', '2023-11-16 11:46:22', 0, 0, 1, 1, 'tivicasper.jpg', 'Loại tivi:Smart Tivi55 inch4K\r\nHệ điều hành:webOS 5.0\r\nỨng dụng phổ biến:Clip TVFPT PlayNetflixNhaccuatuiYouTube\r\nCông nghệ hình ảnh:4K HDR10\r\nĐiều khiển bằng giọng nói:Tìm kiếm giọng nói trên YouTube bằng tiếng Việt\r\nRemote thông minh:Remote tích hợp micro tìm kiếm bằng giọng nói', NULL, NULL),
(27, 5, 'Apple iPad Pro M1 11-inch 2021', 15000000, 'ipadpro0.png', 1, 10, 25, '11in', 'IOS', '2023-11-16 11:46:22', 0, 0, 1, 1, 'ipadpro.jpg', 'Màn hình:IPS LCD, Liquid Retina HD, 2388 x 1668 Pixels\r\nCamera sau:12.0 MP\r\nCamera Selfie:12.0 MP\r\nRAM:8 GB\r\nBộ nhớ trong:128 GB\r\nCPU:Apple M1\r\nGPU:Apple M1', NULL, NULL),
(28, 5, 'Apple iPad Air 4 10.9-inch Wi-', 10000000, 'ipadair0.png', 0, 10, 3, '11in', 'IOS', '2023-11-16 11:46:53', 0, 0, 1, 1, 'ipadair.jpg', 'Màn hình:10.86\"Liquid Retina\r\nHệ điều hành:iPadOS 15\r\nChip:Apple A14 Bionic\r\nRAM:4 GB\r\nDung lượng lưu trữ:256 GB\r\nKết nối:Hỗ trợ 4GNghe gọi qua FaceTime\r\nSIM:1 Nano SIM hoặc 1 eSIM\r\nCamera sau:12 MP', NULL, NULL),
(29, 5, 'Apple iPad Mini 6 Wi-Fi Cellul', 12000000, 'ipadmini0.png', 0, 10, 20, '11in', 'IOS', '2023-11-16 11:46:53', 1, 0, 0, 1, 'ipadmini.jpg', 'Màn hình:8.3\"LED-backlit IPS LCD\r\nHệ điều hành:iPadOS 15\r\nChip:Apple A15 Bionic\r\nRAM:4 GB\r\nDung lượng lưu trữ:64 GB\r\nKết nối:5GNghe gọi qua FaceTime', NULL, NULL),
(30, 5, 'Máy tính bảng Samsung Galaxy T', 15000000, 'ipadsamsung0.png', 0, 10, 20, '11in', 'Android', '2023-11-16 11:46:53', 1, 0, 0, 1, 'ipadsamsung.jpg', 'Màn hình:8.7\"TFT LCD\r\nHệ điều hành:Android 11\r\nChip:MediaTek MT8768T\r\nRAM:3 GB\r\nDung lượng lưu trữ:32 GB\r\nKết nối:Hỗ trợ 4GCó nghe gọi\r\nSIM:1 Nano SIM\r\nCamera sau:8 MP', NULL, NULL),
(31, 5, 'Máy tính bảng Lenovo Tab M9', 2000000, 'ipadlenovo0.png', 0, 10, 20, '11in', 'Android', '2023-11-16 11:47:24', 0, 0, 1, 1, 'ipadlenovo.jpg', 'Màn hình:9\"IPS LCD\r\nHệ điều hành:Android 12\r\nChip:MediaTek Helio G80\r\nRAM:4 GB\r\nDung lượng lưu trữ:64 GB\r\nKết nối:Hỗ trợ 4GCó nghe gọi\r\nSIM:1 Nano SIM\r\nCamera sau:8 MP', NULL, NULL),
(32, 6, 'Chuột Logitech G203 Wired 8000', 1000000, 'chuot203g0.png', 0, 10, 50, '', 'Android', '2023-11-16 11:47:24', 1, 0, 0, 1, 'chuot203g.jpg', 'Thương hiệu:Logitech\r\nTên sản phẩm:G203 LightSync Blue\r\nThiết kế:Đối xứng - Ambidextrous\r\nMắt đọc:Mercury Sensor\r\nĐiểm ảnh trên 1 inch (DPI):8000\r\nIPS:200\r\nGia tốc:30g\r\nTần số phản hồi:1000Hz\r\nChất liệu vỏ:Nhựa ABS', NULL, NULL),
(33, 6, 'Chuột Logitech G304 Lightspeed', 2000000, 'chuot304g0.png', 0, 10, 30, '', 'Android', '2023-11-16 11:47:24', 0, 1, 0, 1, 'chuot304g.jpg', 'Độ phân giải:200 - 12000 DPI\r\nCảm biến:HERO\r\nNút nhấn:6 nút có thể lập trình\r\nTương thích:MacOS, Windows\r\nKết nối:Lightspeed\r\nTiện ích:Hệ thống ứng lực cho nút cơ học\r\nTần suất gửi tín hiệu không dây 1000Hz (1ms)\r\nBộ vi xử lý: 32-bit ARM', NULL, NULL),
(34, 6, 'Chuột Không dây Gaming ASUS RO', 3000000, 'chuotasus0.png', 0, 10, 50, '', 'Android', '2023-11-16 11:47:24', 1, 0, 0, 1, 'chuotasus.jpg', 'ương thích:Windows\r\nĐộ phân giải:36000 DPI\r\nCách kết nối:Đầu thu USB ReceiverBluetoothDây cắm USB\r\nĐộ dài dây / Khoảng cách kết nối:Dây dài 200 cm, khoảng cách kết nối 10 m (kết nối không dây)\r\nĐèn LED:Có\r\nỨng dụng điều khiển:Armoury Crate\r\nLoại pin:Pin sạc', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `yeuthich`
--

CREATE TABLE `yeuthich` (
  `id_yt` int(10) NOT NULL,
  `id_kh` int(10) NOT NULL,
  `id_sp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `anh_sp`
--
ALTER TABLE `anh_sp`
  ADD PRIMARY KEY (`id_anh_sp`),
  ADD KEY `FK_ANH_SP` (`id_sp`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_bl`),
  ADD KEY `FK_BL_KH` (`id_kh`),
  ADD KEY `FK_BL_SP` (`id_sp`);

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`),
  ADD KEY `FK_BLOG_LBLOG` (`id_loai`);

--
-- Chỉ mục cho bảng `ct_donhang`
--
ALTER TABLE `ct_donhang`
  ADD PRIMARY KEY (`id_ctdh`),
  ADD KEY `FK_CTDH_DH` (`id_dh`),
  ADD KEY `FK_CTDH_SP` (`id_sp`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_dh`),
  ADD KEY `FK_DH_KH` (`id_kh`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id_gh`),
  ADD KEY `FK_GH_KH` (`id_kh`),
  ADD KEY `FK_GH_SP` (`id_sp`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_kh`);

--
-- Chỉ mục cho bảng `loai_blog`
--
ALTER TABLE `loai_blog`
  ADD PRIMARY KEY (`id_loai`);

--
-- Chỉ mục cho bảng `loai_sp`
--
ALTER TABLE `loai_sp`
  ADD PRIMARY KEY (`id_loai`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `FK_SP_LSP` (`id_loai`);

--
-- Chỉ mục cho bảng `yeuthich`
--
ALTER TABLE `yeuthich`
  ADD PRIMARY KEY (`id_yt`),
  ADD KEY `FK_YT_KH` (`id_kh`),
  ADD KEY `FK_YT_SP` (`id_sp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `anh_sp`
--
ALTER TABLE `anh_sp`
  MODIFY `id_anh_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_bl` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ct_donhang`
--
ALTER TABLE `ct_donhang`
  MODIFY `id_ctdh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_dh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id_gh` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id_kh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `loai_blog`
--
ALTER TABLE `loai_blog`
  MODIFY `id_loai` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loai_sp`
--
ALTER TABLE `loai_sp`
  MODIFY `id_loai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `yeuthich`
--
ALTER TABLE `yeuthich`
  MODIFY `id_yt` int(10) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `anh_sp`
--
ALTER TABLE `anh_sp`
  ADD CONSTRAINT `FK_ANH_SP` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`);

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `FK_BL_KH` FOREIGN KEY (`id_kh`) REFERENCES `khachhang` (`id_kh`),
  ADD CONSTRAINT `FK_BL_SP` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`);

--
-- Các ràng buộc cho bảng `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `FK_BLOG_LBLOG` FOREIGN KEY (`id_loai`) REFERENCES `loai_blog` (`id_loai`);

--
-- Các ràng buộc cho bảng `ct_donhang`
--
ALTER TABLE `ct_donhang`
  ADD CONSTRAINT `FK_CTDH_DH` FOREIGN KEY (`id_dh`) REFERENCES `donhang` (`id_dh`),
  ADD CONSTRAINT `FK_CTDH_SP` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `FK_DH_KH` FOREIGN KEY (`id_kh`) REFERENCES `khachhang` (`id_kh`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `FK_GH_KH` FOREIGN KEY (`id_kh`) REFERENCES `khachhang` (`id_kh`),
  ADD CONSTRAINT `FK_GH_SP` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `FK_SP_LSP` FOREIGN KEY (`id_loai`) REFERENCES `loai_sp` (`id_loai`);

--
-- Các ràng buộc cho bảng `yeuthich`
--
ALTER TABLE `yeuthich`
  ADD CONSTRAINT `FK_YT_KH` FOREIGN KEY (`id_kh`) REFERENCES `khachhang` (`id_kh`),
  ADD CONSTRAINT `FK_YT_SP` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
