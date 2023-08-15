-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 30, 2020 lúc 04:26 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `website_bansach`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `adminEmail` varchar(150) NOT NULL,
  `adminUser` varchar(255) NOT NULL,
  `adminPass` varchar(255) NOT NULL,
  `level` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminName`, `adminEmail`, `adminUser`, `adminPass`, `level`) VALUES
(1, ' Anh', 'anh@gmail.com', 'anhadmin', 'e10adc3949ba59abbe56e057f20f883e', 0),
(2, 'Anh', 'anh1@gmail.com', 'anh1admin', 'e10adc3949ba59abbe56e057f20f883e', 0),
(3, 'Anh', 'anh2@gmail.com', 'anh2admin', 'e10adc3949ba59abbe56e057f20f883e', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_binhluan`
--

CREATE TABLE `tbl_binhluan` (
  `binhluan_id` int(11) NOT NULL,
  `tenbinhluan` varchar(255) CHARACTER SET utf8 NOT NULL,
  `binhluan` text CHARACTER SET utf8 NOT NULL,
  `product_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `image` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_binhluan`
--

INSERT INTO `tbl_binhluan` (`binhluan_id`, `tenbinhluan`, `binhluan`, `product_id`, `blog_id`, `image`) VALUES
(1, 'gd', 'gdgd', 12, 0, ''),
(2, 'gd', 'gdgd', 12, 0, ''),
(3, '234', 'd', 10, 0, ''),
(4, 'gd', 'fff', 14, 0, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brandId` int(11) NOT NULL,
  `brandName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brandId`, `brandName`) VALUES
(8, 'Tâm Lý'),
(9, 'Khoa Học'),
(10, 'Ngôn Tình'),
(11, 'Truyện Tranh'),
(12, 'Giáo Khoa'),
(13, 'Kinh Tế');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `sId` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` int(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`cartId`, `productId`, `sId`, `productName`, `price`, `quantity`, `image`) VALUES
(13, 14, '3ckblgr55iepuud03lfpr8p408', 'hhhassss', 678, 1, '2e71ddb079.jpg'),
(14, 10, '1tlla91k3mrbedlbvie5l5a435', 'hih', 567, 1, '4b58b11008.jpg'),
(15, 15, '1tlla91k3mrbedlbvie5l5a435', 'yht', 2147483647, 1, '7dde526a99.jpg'),
(16, 10, '1tlla91k3mrbedlbvie5l5a435', 'hih', 567, 1, '4b58b11008.jpg'),
(17, 12, '1lbiejpve3nu4p8uc5rlk96dip', 'oke', 111, 3, '986ddc0291.jpg'),
(18, 10, '1lbiejpve3nu4p8uc5rlk96dip', 'hih', 567, 1, '4b58b11008.jpg'),
(19, 12, '1lbiejpve3nu4p8uc5rlk96dip', 'oke', 111, 5, '986ddc0291.jpg'),
(24, 14, 'ucqt16t08o2masp3u2gcmeaoah', 'hhhassss', 678, 2, '2e71ddb079.jpg'),
(27, 14, 'amlpsfk34l9n5ftvgem9o36fq6', 'hhhassss', 678, 1, '2e71ddb079.jpg'),
(28, 14, 'c82u02r64ve0jii30t9id07kco', 'hhhassss', 678, 1, '2e71ddb079.jpg'),
(29, 12, 'c0mm8cr8ss38rb084j7tsb0hsp', 'oke', 111, 3, '986ddc0291.jpg'),
(30, 14, 'c2kkhhg2n9vpbpb8q3oerm8rgc', 'hhhassss', 678, 1, '2e71ddb079.jpg'),
(31, 15, '4gobjlb73nehnguugm6io24g2d', 'yht', 2147483647, 1, '7dde526a99.jpg'),
(36, 12, 'mtifre362oio4sk4dckgrjbamq', 'oke', 111, 3, '986ddc0291.jpg'),
(37, 12, 'vpqpfce9hjgq25094o1sbudtsa', 'oke', 111, 2, '986ddc0291.jpg'),
(38, 12, 'vpqpfce9hjgq25094o1sbudtsa', 'oke', 111, 3, '986ddc0291.jpg'),
(43, 12, 'kfc34mprntbbl45kmtop4nm0o3', 'oke', 111, 1, '986ddc0291.jpg'),
(44, 12, '4l4v7lekhg92uk5r4mrhicuvr6', 'oke', 111, 1, '986ddc0291.jpg'),
(45, 15, '4l4v7lekhg92uk5r4mrhicuvr6', 'yht', 2147483647, 1, '7dde526a99.jpg'),
(50, 15, 'loadvt3pjd5q52a2quvgk1mgoj', 'yht', 9000000, 1, '7dde526a99.jpg'),
(51, 15, '8utiab4jv0hb6vdth6ucn1hu5u', 'Cho Đất Nước Đi Lên', 111000, 1, '7dde526a99.jpg'),
(52, 14, 'rr9jr5sr26urvq4uu2tl30sv4s', 'Chúng Ta Sống Có Vui Không', 288000, 1, '2e71ddb079.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `catId` int(11) NOT NULL,
  `catName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`catId`, `catName`) VALUES
(16, 'Mọi thứ đều có thể thay đổi'),
(17, 'Đắc nhân tâm'),
(18, 'All in love 1'),
(19, 'Đất Nước'),
(20, 'Code đạo kỹ sư'),
(21, '1 lít nước mắt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_compare`
--

CREATE TABLE `tbl_compare` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `price` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_compare`
--

INSERT INTO `tbl_compare` (`id`, `customer_id`, `productId`, `productName`, `price`, `image`) VALUES
(8, 5, 12, 'Lẽ Nào Em Không Biết', '132000', '986ddc0291.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `zipcode` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `address`, `city`, `country`, `zipcode`, `phone`, `email`, `password`) VALUES
(5, 'Nguyen Minh Anh', 'QUẢNG NAM', 'ĐÀ NẴNG', 'AL', '2808', '0935009888', 'ntmanh28@gmail.com.vn', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `date_order` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `productId`, `productName`, `customer_id`, `quantity`, `price`, `image`, `status`, `date_order`) VALUES
(2, 12, 'oke', 5, 5, '555', '986ddc0291.jpg', 2, '2020-12-13 11:43:18'),
(3, 12, 'oke', 5, 3, '333', '986ddc0291.jpg', 2, '2020-12-13 19:11:21'),
(5, 15, 'yht', 5, 1, '2147483647', '7dde526a99.jpg', 0, '2020-12-19 13:40:51'),
(6, 10, 'hih', 5, 1, '567', '4b58b11008.jpg', 0, '2020-12-22 14:44:26'),
(7, 12, 'oke', 5, 1, '111', '986ddc0291.jpg', 0, '2020-12-22 14:44:26'),
(8, 15, 'yht', 5, 1, '9000000', '7dde526a99.jpg', 0, '2020-12-22 14:44:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `catId` int(11) NOT NULL,
  `brandId` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `type` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`productId`, `productName`, `catId`, `brandId`, `product_desc`, `type`, `price`, `image`) VALUES
(10, 'Mắt Biếc', 20, 10, '<p>145</p>', 0, '345000', '4b58b11008.jpg'),
(12, 'Lẽ Nào Em Không Biết', 19, 11, '<p>2344</p>', 0, '132000', '986ddc0291.jpg'),
(14, 'Chúng Ta Sống Có Vui Không', 18, 12, '<p>qqqqqqq</p>', 0, '288000', '2e71ddb079.jpg'),
(15, 'Cho Đất Nước Đi Lên', 16, 13, '<p>qqqqqqqqq</p>', 0, '111000', '7dde526a99.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_wishlist`
--

CREATE TABLE `tbl_wishlist` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `price` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Chỉ mục cho bảng `tbl_binhluan`
--
ALTER TABLE `tbl_binhluan`
  ADD PRIMARY KEY (`binhluan_id`);

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brandId`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartId`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`catId`);

--
-- Chỉ mục cho bảng `tbl_compare`
--
ALTER TABLE `tbl_compare`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productId`);

--
-- Chỉ mục cho bảng `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_binhluan`
--
ALTER TABLE `tbl_binhluan`
  MODIFY `binhluan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tbl_compare`
--
ALTER TABLE `tbl_compare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
