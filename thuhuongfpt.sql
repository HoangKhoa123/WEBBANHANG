-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2020 at 09:08 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlibanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdathang`
--

CREATE TABLE `chitietdathang` (
  `SoDonDH` varchar(5) NOT NULL,
  `MSHH` varchar(5) NOT NULL,
  `SoLuong` tinyint(4) NOT NULL,
  `GiaDatHang` double NOT NULL,
  `size` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dangnhap`
--

CREATE TABLE `dangnhap` (
  `Id` varchar(5) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dangnhap`
--

INSERT INTO `dangnhap` (`Id`, `Username`, `Password`) VALUES
('01', 'root', 'root'),
('02', 'Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `dathang`
--

CREATE TABLE `dathang` (
  `SoDonDH` varchar(5) NOT NULL,
  `NgayDH` datetime NOT NULL,
  `TrangThai` varchar(10) NOT NULL,
  `MSNV` varchar(5) DEFAULT NULL,
  `MSKH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `MSHH` varchar(5) NOT NULL,
  `TenHH` varchar(50) NOT NULL,
  `Gia` int(11) NOT NULL,
  `SoLuongHang` tinyint(4) NOT NULL,
  `MaNhom` varchar(5) NOT NULL,
  `Hinh` varchar(50) NOT NULL,
  `MotaHH` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`MSHH`, `TenHH`, `Gia`, `SoLuongHang`, `MaNhom`, `Hinh`, `MotaHH`) VALUES
('A1', 'Adidas Ultra Boost', 1250000, 100, 'AD', 'adidas-ultra-boost-20.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu black mạnh mẽ.'),
('A10', 'Adidas Humanrace', 1400000, 50, 'AD', 'adidas-nmd-humanrace-xanh-nam-nu-replica-1-1.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu xanh đặc sắc ,phù hợp với cả nam và nữ.'),
('A11', 'Adidas Humanrace 2.0', 1400000, 50, 'AD', 'adidas-nmd-humanrace-hong-nu-replica-1-1.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu hồng đặc sắc ,phù hợp với cả nam và nữ.'),
('A12', 'Adidas Humanrace 3.0', 1400000, 50, 'AD', 'adidas-nmd-humanrace-vang-nam-nu-replica-1-1.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu vàng đặc sắc ,phù hợp với cả nam và nữ.'),
('A13', 'Adidas Stan Smith', 600000, 50, 'AD', 'stan-smith-xanh-la.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu xanh lá ,phù hợp với cả nam và nữ.'),
('A14', 'Adidas Stan Smith 2.0', 650000, 50, 'AD', 'stan-smith-den-nam-nu.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu trắng đen ,phù hợp với cả nam và nữ.'),
('A2', 'Adidas Ultra Boost 4.0', 1200000, 50, 'AD', 'adidas-ultraboot.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu trắng nhẹ nhàng ,phù hợp với cả nam và nữ.'),
('A3', 'Adidas Instinct', 1100000, 50, 'AD', 'adidas-alphabounce-instinct-m-orange.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu orange blue mạnh mẽ hấp dẫn.'),
('A4', 'Adidas Ultra Boost 20', 1250000, 50, 'AD', 'adidas-ultra-boost-20-dash-grey-1-1.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu trắng xanh nhẹ nhàng ,phù hợp với cả nam và nữ.'),
('A5', 'Adidas Ultra Boost 5.0', 1000000, 50, 'AD', 'adidas-ultra-boost-5-0-hong-rep-1-1-2019.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu hồng nữ tính nhẹ nhàng ,phù hợp với nữ.'),
('A6', 'Adidas Beyond', 1000000, 50, 'AD', 'adidas-alphabounce-beyond-den-full-2019-nam.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu đen xám mạnh mẽ hấp dẫn.'),
('A7', 'Adidas Prophere', 1100000, 50, 'AD', 'adidas-prophere-reu-cam-nam-nu.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu rêu phong cách hấp dẫn phù hợp với nam và nữ.'),
('A8', 'Adidas Prophere 2.0', 1150000, 50, 'AD', 'adidas-prophere-xam-cam-nam-nu.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu xám cam phong cách hấp dẫn phù hợp với nam và nữ.'),
('A9', 'Adidas Prophere', 1100000, 50, 'AD', 'adidas-prophere-den-xanh-nam-nu.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu đen xanh phong cách hấp dẫn phù hợp với nam và nữ.'),
('AY1', 'Adidas Yeezy 350', 1100000, 100, 'AD', 'adidas-yeezy-350-v2-flax.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu flax vàng nhẹ nhàng ,phù hợp với cả nam và nữ.'),
('AY2', 'Adidas Yeezy 360', 1100000, 50, 'AD', 'adidas-yeezy-350-v2-earth-nau-dat-nam-nu-1-1.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu nâu đất ,phù hợp với cả nam và nữ.'),
('BG1', 'Balenciaga Triple Red', 1700000, 50, 'BG', 'balenciaga-triple-s-red-black-clear-sole-nam.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu đỏ cá tính ,phù hợp với cả nam và nữ.'),
('BG10', 'Balenciaga Speed Red', 1350000, 50, 'BG', 'balenciaga-speed-trainer-red-bordeaux.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu đỏ đậm hấp dẫn ,phù hợp với cả nam và nữ.'),
('BG2', 'Balenciaga Triple Pink', 1700000, 50, 'BG', 'balenciaga-triple-s-pink-clear-sole-nu.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu hồng cá tính ,phù hợp với cả nam và nữ.'),
('BG3', 'Balenciaga Triple Red2', 1700000, 50, 'BG', 'balenciaga-triple-s-red-clear-sole-nam-nu.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu đỏ đậm hấp dẫn ,phù hợp với cả nam và nữ.'),
('BG4', 'Balenciaga Triple Grey', 1700000, 50, 'BG', 'balenciaga-triple-s-grey.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu xám trắng ,phù hợp với cả nam và nữ.'),
('BG5', 'Balenciaga Triple Trainer', 1700000, 50, 'BG', 'balenciaga-triple-s-trainer-vang-xanh-nam-nu.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu vàng trainer cá tính ,phù hợp với cả nam và nữ.'),
('BG6', 'Balenciaga Triple Trainer2', 1700000, 50, 'BG', 'balenciaga-triple-s-trainers-den-bac-nam-nu.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu đen xám hấp dẫn ,phù hợp với cả nam và nữ.'),
('BG7', 'Balenciaga Track Black', 2400000, 10, 'BG', 'balenciaga-track-den-full-nam-1-1.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu đen mạnh mẽ ,phù hợp với cả nam và nữ.'),
('BG8', 'Balenciaga Track White', 2400000, 50, 'BG', 'balenciaga-track-trang-cam-nam-nu-1-1.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu trắng cam cá tính ,phù hợp với cả nam và nữ.'),
('BG9', 'Balenciaga Speed', 1600000, 50, 'BG', 'balenciaga-speed-trainer-black-white.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu đen mạnh mẽ ,phù hợp với cả nam và nữ.'),
('CV1', 'Converse 1970s', 850000, 50, 'CV', 'converse-1970s-x-g-dragon-nam-nu-1-1.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu đen họa tiết ,phù hợp với cả nam và nữ.'),
('CV2', 'Converse Chuck 1970', 900000, 50, 'CV', 'converse-chuck-1970-chinatown.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu đặc sắc ,phù hợp với cả nam và nữ.'),
('Cv3', 'Converse Chuck 1971', 900000, 50, 'CV', 'converse-chuck-1970-nau-do-co-cao-nam-nu.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu đỏ cá tính ,phù hợp với cả nam và nữ.'),
('CV4', 'Converse Chuck 1972', 950000, 10, 'CV', 'converse-chuck-1970-trang-co-cao-nam-nu.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu trắng ,phù hợp với cả nam và nữ.'),
('CV5', 'Converse Chuck 1972s', 950000, 50, 'CV', 'converse-vang-co-cao-nam-nu.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu vàng nhẹ nhàng ,phù hợp với cả nam và nữ.'),
('CV6', 'Converse Chuck 1972r', 950000, 50, 'CV', 'converse-vang-co-thap-nam-nu.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu vàng cổ thấp nhẹ nhàng ,phù hợp với cả nam và nữ.'),
('CV7', 'Converse 1970r', 950000, 50, 'CV', 'converse-chuck-1970-den-co-thap-nam-nu.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu đen cổ thấp mạnh mẽ ,phù hợp với cả nam và nữ.'),
('GC1', 'Gucci Yankees White', 900000, 50, 'GC', 'mlb-new-york-yankees-big-ball-chunky-a.jpg', 'Giày newyork giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu trắng nhẹ nhàng ,phù hợp với cả nam và nữ.'),
('GC10', 'Gucci Tigger', 1600000, 50, 'GC', 'gucci-ho-nam-nu-1-1.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu xanh trắng họa tiết nhẹ nhàng ,phù hợp với cả nữ.'),
('GC2', 'Gucci Yankess Red', 900000, 50, 'GC', 'mlb-new-york-yankees-red-big-ball-chunky-a.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu đỏ cá tính ,phù hợp với cả nam và nữ.	'),
('GC3', 'Gucci Chunky P', 900000, 50, 'GC', 'mlb-new-york-yankees-big-ball-chunky-p.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu trắng chữ xanh cá tính ,phù hợp với nữ dịu dàng.'),
('GC4', 'Gucci Yankess Black', 1000000, 50, 'GC', 'mlb-new-york-yankees-black-big-ball-chunky-a.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu black mạnh mẽ phù hợp cho cả nam và nữ.'),
('GC5', 'Gucci Mickey C', 1250000, 50, 'GC', 'mlb-mickey-boston-red-sox-big-ball-chunky.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu mickey nhẹ nhàng ,phù hợp với cả nữ.'),
('GC6', 'Gucci Yankess Pink', 900000, 20, 'GC', 'mlb-new-york-yankees-pink-big-ball-chunky-p.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu hồng xu hướng ,phù hợp với nữ dịu dàng.'),
('GC7', 'Gucci Mickey A', 1100000, 50, 'GC', 'mlb-mickey-new-york-yankees-big-ball-chunky-a.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu mickey nhẹ nhàng ,phù hợp với nữ.'),
('GC8', 'Gucci Chunky LA', 1150000, 50, 'GC', 'mlb-la-dodgers-big-ball-chunky-a.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu trắng chữ LA cá tính ,phù hợp với nữ dịu dàng.'),
('GC9', 'Gucci Bee', 1600000, 50, 'GC', 'gucci-bee-nam-nu-1-1.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu xanh trắng nhẹ nhàng ,phù hợp với cả nữ.'),
('MQ1', 'Mcqueen Pink', 1100000, 20, 'MQ', 'mcqueen-hong-trang-nu-1-1.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu hồng nữ tính nhẹ nhàng ,phù hợp với nữ.'),
('MQ2', 'Mcqueen Static', 1400000, 50, 'MQ', 'mcqueen-trang-full-phan-quang-nam-nu.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu phản quang đặc sắc ,phù hợp với cả nam và nữ.'),
('MQ3', 'Mcqueen White Black', 1200000, 50, 'MQ', 'mcqueen-trang-got-den-1-1-nam-nu.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu trắng gót đen ,phù hợp với  và nữ.'),
('MQ4', 'Mcqueen White Yellow', 1100000, 50, 'MQ', 'mcqueen-trang-got-vang-1-1-nam-nu.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu trắng gót vàng ,phù hợp với  nữ.'),
('MQ7', 'Mcqueen 3.0', 1100000, 50, 'MQ', 'mcqueen-trang-got-bong-tim-1-1-nam-nu.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu trắng gót bóng tím ,phù hợp với nữ.'),
('NK1', 'Nike Air 270', 850000, 100, 'NK', 'nike-air-max-270-core-black-den-trang.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu trắng đen truyền thống ,phù hợp với cả nam và nữ.'),
('NK2', 'Nike Air Pink', 800000, 50, 'NK', 'nike-air-max-270-hong-phan-nu.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu hồng phấn ,phù hợp với nữ dịu dàng.'),
('NK3', 'Nike Uptempo 1.0', 1200000, 50, 'NK', 'nike-air-more-uptempo-96-den-xam-trang-nam-nu.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu đen xám ,phù hợp với cả nam và nữ.'),
('NK4', 'Nike Uptempo 2.0', 1250000, 50, 'NK', 'nike-air-more-uptempo-trang-chu-vien-do-nam-nu.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu trắng viền đỏ ,phù hợp với cả nam và nữ năng động.'),
('NK5', 'Nike M2k Tekno', 800000, 50, 'NK', 'nike-m2k-tekno-cream-white-orange-nam.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu trắng cam ,phù hợp với cả nam và nữ.'),
('NK6', 'Nike Cortez Classic', 750000, 50, 'NK', 'nike-cortez-classic-trang-den-nam-nu.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu đen trắng ,phù hợp với cả nam và nữ.'),
('NK7', 'Nike Uptempo 3.0', 650000, 10, 'NK', 'nike-uptempo-do-den.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu đỏ đen,phù hợp với cả nam và nữ.'),
('NK8', 'Nike M2k Cream', 750000, 50, 'NK', 'nike-m2k-cream-blue-orange-nam-nu.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu trắng cam sữa ,phù hợp với cả nam và nữ.'),
('VS1', 'Vans Fear Of God', 500000, 10, 'VS', 'vans-fear-of-god-nam-nu.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu xám trắng ,phù hợp với cả nam và nữ.'),
('VS2', 'Vans Checkerboard Slip', 550000, 10, 'VS', 'vans-checkerboard-slip-on-nam-nu.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu xám trắng ,phù hợp với cả nam và nữ.'),
('VS3', 'Vans Marvel Authentic', 500000, 5, 'VS', 'vans-marvel-authentic-all-over-print-nam-nu.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu trắng đặc sắc ,phù hợp với cả nam và nữ.'),
('VS4', 'Vans Marvel Authentic2', 550000, 10, 'VS', 'vans-marvel-authentic-nam-nu.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu trắng đen đặc sắc ,phù hợp với cả nam và nữ.'),
('VS5', 'Vans Slip On Hulk', 550000, 50, 'VS', 'vans-slip-on-hulk-replica-nam-nu.jpg', 'Giày giá rẻ , chất lượng cao ,phong cách mang xu hướng mới ,màu xanh đen lạ lẫm ,phù hợp với cả nam và nữ.');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MSKH` int(11) NOT NULL,
  `HoTenKH` varchar(50) NOT NULL,
  `Matkhau` varchar(25) NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `SoDienThoai` varchar(10) NOT NULL,
  `Ghichu` text NOT NULL,
  `Email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MSKH`, `HoTenKH`, `Matkhau`, `DiaChi`, `SoDienThoai`, `Ghichu`, `Email`) VALUES
(57, 'Lê Bảo Công', 'admin', '3/2 Ninh Kiều cần thơ', '0338254512', '', 'congle130899@gmail.com'),
(58, 'Bảo Minh', 'admin', 'Nguyen Van Cu, Can Tho', '0338254513', '', 'Dangthanh19901212@gmail.com'),
(59, 'Bảo Công', 'admin', '30/4 Ninh Kiều , Cần Thơ', '0338254514', '', 'congb1709268@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MSNV` varchar(5) NOT NULL,
  `HoTenNV` varchar(50) NOT NULL,
  `ChucVu` varchar(50) NOT NULL,
  `Diachi` varchar(50) DEFAULT NULL,
  `SoDienThoai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MSNV`, `HoTenNV`, `ChucVu`, `Diachi`, `SoDienThoai`) VALUES
('0001', 'Lê Bảo Công', 'Nhan Vien', 'Hem 9 ,Vo Van Kiet ', '0338254512'),
('0002', 'Lê Bảo', 'Nhan Vien', 'Nguyen Van Cu', '0338254513'),
('0003', 'Le Bao Cong', 'Quản lí', '3/2 Ninh Kiều cần thơ', '0338254514');

-- --------------------------------------------------------

--
-- Table structure for table `nhomhanghoa`
--

CREATE TABLE `nhomhanghoa` (
  `MaNhom` varchar(5) NOT NULL,
  `TenNhom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhomhanghoa`
--

INSERT INTO `nhomhanghoa` (`MaNhom`, `TenNhom`) VALUES
('AD', 'ADIDAS'),
('BG', 'BALENCIAGA'),
('CV', 'CONVERSE'),
('GC', 'GUCCI'),
('MQ', 'MCQUEEN'),
('NK', 'NIKE'),
('VS', 'VANS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD PRIMARY KEY (`SoDonDH`,`MSHH`),
  ADD KEY `MSHH` (`MSHH`);

--
-- Indexes for table `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `dathang`
--
ALTER TABLE `dathang`
  ADD PRIMARY KEY (`SoDonDH`),
  ADD KEY `MSNV` (`MSNV`),
  ADD KEY `MSKH` (`MSKH`) USING BTREE;

--
-- Indexes for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`MSHH`),
  ADD KEY `MaNhom` (`MaNhom`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MSKH`),
  ADD UNIQUE KEY `SoDienThoai` (`SoDienThoai`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MSNV`);

--
-- Indexes for table `nhomhanghoa`
--
ALTER TABLE `nhomhanghoa`
  ADD PRIMARY KEY (`MaNhom`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MSKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD CONSTRAINT `chitietdathang_ibfk_1` FOREIGN KEY (`SoDonDH`) REFERENCES `dathang` (`SoDonDH`),
  ADD CONSTRAINT `chitietdathang_ibfk_2` FOREIGN KEY (`MSHH`) REFERENCES `hanghoa` (`MSHH`),
  ADD CONSTRAINT `chitietdathang_ibfk_3` FOREIGN KEY (`MSHH`) REFERENCES `hanghoa` (`MSHH`),
  ADD CONSTRAINT `chitietdathang_ibfk_4` FOREIGN KEY (`SoDonDH`) REFERENCES `dathang` (`SoDonDH`);

--
-- Constraints for table `dathang`
--
ALTER TABLE `dathang`
  ADD CONSTRAINT `dathang_ibfk_1` FOREIGN KEY (`MSNV`) REFERENCES `nhanvien` (`MSNV`),
  ADD CONSTRAINT `dathang_ibfk_2` FOREIGN KEY (`MSKH`) REFERENCES `khachhang` (`MSKH`);

--
-- Constraints for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `hanghoa_ibfk_1` FOREIGN KEY (`MaNhom`) REFERENCES `nhomhanghoa` (`MaNhom`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
