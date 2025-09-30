-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th7 29, 2023 lúc 02:46 PM
-- Phiên bản máy phục vụ: 5.7.40-cll-lve
-- Phiên bản PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `rufim53yqnhj_clone`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `namemomo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `stkmomo` text NOT NULL,
  `namevcb` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `stkvcb` int(11) NOT NULL,
  `namembbank` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `stkmbbank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bank`
--

INSERT INTO `bank` (`id`, `namemomo`, `stkmomo`, `namevcb`, `stkvcb`, `namembbank`, `stkmbbank`) VALUES
(1, 'NGUYEN TUAN DUONG', '0569850988', 'Duc Huu', 0, 'NGUYEN TUAN DUONG', 322678789);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `infoadmin`
--

CREATE TABLE `infoadmin` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `linkmess` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `linkfb` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `linktelegram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `linkbehance` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sdt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `infoadmin`
--

INSERT INTO `infoadmin` (`id`, `ten`, `img`, `linkmess`, `linkfb`, `linktelegram`, `linkbehance`, `sdt`) VALUES
(1, 'DUONG.CODES', '/images/upload/avt2.png', 'hoangvancuong13', 'hoangvancuong13', 'sangtele123', 'sangtele123', '0814586185');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `maulogo`
--

CREATE TABLE `maulogo` (
  `id` int(11) NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `cash` int(11) NOT NULL,
  `product` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `maulogo`
--

INSERT INTO `maulogo` (`id`, `img`, `cash`, `product`) VALUES
(6, 'https://iamhoang.vn/images/upload/logoclmm/clzl.png', 10000, 'CLMM'),
(7, 'https://iamhoang.vn/images/upload/logoclmm/logo1.png', 10000, 'clmmme');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mauthue`
--

CREATE TABLE `mauthue` (
  `id` int(11) NOT NULL,
  `nameWebsite` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `linkContact` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `currentPicked` varchar(255) NOT NULL,
  `currentPrice` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `status` int(1) NOT NULL COMMENT '1 = chờ duyệt\r\n2 = thành công\r\n3 = hủy',
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `mauthue`
--

INSERT INTO `mauthue` (`id`, `nameWebsite`, `linkContact`, `currentPicked`, `currentPrice`, `time`, `status`, `logo`) VALUES
(4, 'CLMM.ME', 'https://zalo.me/0814586185', 'clmmme', '10,000 VND', 1690615944, 2, ''),
(5, 'CLMM.ME', 'CLMM.ME', 'CLMM', '10,000 VND', 1690616102, 2, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `muc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `giatri` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `setting`
--

INSERT INTO `setting` (`id`, `muc`, `giatri`) VALUES
(1, 'tenWeb', 'DUONG.CODES'),
(2, 'description', 'WEBSITE THIẾT KẾ LOGO CLMM SỐ 1 VN'),
(3, 'logoweb', 'https://duong.codes/anh/64b838c9a8dd7.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `infoadmin`
--
ALTER TABLE `infoadmin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `maulogo`
--
ALTER TABLE `maulogo`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `mauthue`
--
ALTER TABLE `mauthue`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `infoadmin`
--
ALTER TABLE `infoadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `maulogo`
--
ALTER TABLE `maulogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `mauthue`
--
ALTER TABLE `mauthue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
