-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 26, 2022 lúc 12:00 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `xdpmktm`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chungtunganhang`
--

CREATE TABLE `chungtunganhang` (
  `id` int(11) NOT NULL,
  `MaChungTu` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LoaiChungTu` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayChungTu` int(30) NOT NULL,
  `SoChungTu` int(30) NOT NULL,
  `MaKh` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MSThue` int(20) NOT NULL,
  `DienGiai` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ThuChi` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chungtunganhang_chitiet`
--

CREATE TABLE `chungtunganhang_chitiet` (
  `id` int(11) NOT NULL,
  `Machungtu` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Maso` int(30) NOT NULL,
  `Diengiaichitiet` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sotien` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tkno` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tkco` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `Id` int(11) NOT NULL,
  `Mahang` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tenhang` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Donvitinh` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Soluongton` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`Id`, `Mahang`, `Tenhang`, `Donvitinh`, `Soluongton`) VALUES
(4, 'HH001', 'Lê Thị Đào', 'Thùng', 93),
(5, 'HH002', 'Nước Ngọt', 'Lon', 22);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `Id` int(11) NOT NULL,
  `Makh` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tenkh` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Masothue` int(30) NOT NULL,
  `Diachi` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tinh` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dienthoai` int(15) NOT NULL,
  `Fax` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`Id`, `Makh`, `Tenkh`, `Masothue`, `Diachi`, `Tinh`, `Dienthoai`, `Fax`) VALUES
(67, 'KH002', 'Lê Thị Nụ', 998876822, '33 Vĩnh Viễn', 'HCM', 329992999, 22200222),
(68, 'KH003', 'Trần Thị Xuân Dai', 242333, '123 Phạm Văn Cừ', 'HN', 2147483647, 7777775),
(69, 'KH001@xn--dd-e0a', 'Nguyễn Hoài Linh', 2147483647, '1209 Phạm Văn Đồng', 'HCM', 329992622, 3323232);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chungtunganhang`
--
ALTER TABLE `chungtunganhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chungtunganhang_chitiet`
--
ALTER TABLE `chungtunganhang_chitiet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chungtunganhang`
--
ALTER TABLE `chungtunganhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chungtunganhang_chitiet`
--
ALTER TABLE `chungtunganhang_chitiet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
