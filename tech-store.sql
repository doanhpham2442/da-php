-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 24, 2021 lúc 05:05 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tech-store`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_hoa_don`
--

CREATE TABLE `ct_hoa_don` (
  `ID` int(11) NOT NULL,
  `ID_hoa_don` int(11) NOT NULL,
  `ID_san_pham` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `tong_tien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ID` int(11) NOT NULL,
  `ID_khach_hang` int(11) NOT NULL,
  `ID_nhan_vien` int(11) NOT NULL,
  `ngay_lap` date NOT NULL,
  `hinh_thuc_thanh_toan` varchar(100) NOT NULL,
  `ghi_chu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ID` int(11) NOT NULL,
  `ten_khach_hang` varchar(100) NOT NULL,
  `gioi_tinh` int(3) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `so_dien_thoai` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ghi_chu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_san_pham`
--

CREATE TABLE `loai_san_pham` (
  `ID` int(11) NOT NULL,
  `ten_loai` varchar(100) NOT NULL,
  `mo_ta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai_san_pham`
--

INSERT INTO `loai_san_pham` (`ID`, `ten_loai`, `mo_ta`) VALUES
(1, 'Màn hình máy tính', ''),
(2, 'Điện thoại', ''),
(3, 'Laptop', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhan_vien`
--

CREATE TABLE `nhan_vien` (
  `ID` int(11) NOT NULL,
  `ten_nhan_vien` varchar(100) NOT NULL,
  `gioi_tinh` int(3) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `so_cmt` int(12) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `so_dien_thoai` int(10) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `ID` int(11) NOT NULL,
  `ten_san_pham` varchar(255) NOT NULL,
  `ID_loai_san_pham` int(11) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `mo_ta` text NOT NULL,
  `so_luong` int(11) NOT NULL,
  `hinh_san_pham` varchar(255) NOT NULL,
  `ngay_tạo` date NOT NULL,
  `luot_xem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`ID`, `ten_san_pham`, `ID_loai_san_pham`, `don_gia`, `mo_ta`, `so_luong`, `hinh_san_pham`, `ngay_tạo`, `luot_xem`) VALUES
(1, 'Màn hình DELL U2419H', 1, 5500000, '', 30, 'antomi/assets/img/product/product5.jpg', '2021-12-24', 0),
(2, 'iPhone 13 Pro Max', 2, 30000000, '', 100, 'antomi/assets/img/product/product13.jpg', '2021-12-24', 0),
(3, 'Laptop Acer Nitro 5 2021', 3, 22000000, '', 200, 'antomi/assets/img/product/product30.jpg', '2021-12-24', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ct_hoa_don`
--
ALTER TABLE `ct_hoa_don`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ct_hoa_don`
--
ALTER TABLE `ct_hoa_don`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
