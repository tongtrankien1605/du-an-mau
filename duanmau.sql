-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 23, 2024 at 06:33 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duanmau`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int NOT NULL,
  `iduser` int DEFAULT '0',
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tel` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `bill_email` varchar(100) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1. thanh toán trực tiếp\r\n2. chuyển khoản\r\n3. thanh toán online',
  `ngaydathang` varchar(50) DEFAULT NULL,
  `total` int NOT NULL DEFAULT '0',
  `bill_status` tinyint(1) DEFAULT '0' COMMENT '0. Đơn hàng mới\r\n1. Đang xử lý\r\n2. Đang giao hàng\r\n3. Đã giao hàng',
  `receive_name` varchar(255) DEFAULT NULL,
  `receive_address` varchar(255) DEFAULT NULL,
  `receive_tel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `bill_name`, `bill_address`, `bill_tel`, `bill_email`, `bill_pttt`, `ngaydathang`, `total`, `bill_status`, `receive_name`, `receive_address`, `receive_tel`) VALUES
(2, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '01:55:54pm 29/02/2024', 246, 0, NULL, NULL, NULL),
(3, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '01:56:42pm 29/02/2024', 246, 0, NULL, NULL, NULL),
(4, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '01:57:46pm 29/02/2024', 246, 0, NULL, NULL, NULL),
(5, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '01:58:02pm 29/02/2024', 246, 0, NULL, NULL, NULL),
(6, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '01:58:10pm 29/02/2024', 246, 0, NULL, NULL, NULL),
(7, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '01:59:39pm 29/02/2024', 246, 0, NULL, NULL, NULL),
(8, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '02:04:00pm 29/02/2024', 246, 0, NULL, NULL, NULL),
(9, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '02:05:11pm 29/02/2024', 246, 0, NULL, NULL, NULL),
(10, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '02:07:12pm 29/02/2024', 246, 0, NULL, NULL, NULL),
(11, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '02:08:03pm 29/02/2024', 246, 0, NULL, NULL, NULL),
(12, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '02:12:18pm 29/02/2024', 246, 0, NULL, NULL, NULL),
(13, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '02:15:24pm 29/02/2024', 246, 0, NULL, NULL, NULL),
(14, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '02:16:47pm 29/02/2024', 246, 0, NULL, NULL, NULL),
(15, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '02:18:28pm 29/02/2024', 246, 0, NULL, NULL, NULL),
(16, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '02:18:56pm 29/02/2024', 246, 0, NULL, NULL, NULL),
(17, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '02:19:54pm 29/02/2024', 246, 0, NULL, NULL, NULL),
(18, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '02:20:09pm 29/02/2024', 246, 0, NULL, NULL, NULL),
(19, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '02:20:19pm 29/02/2024', 246, 0, NULL, NULL, NULL),
(20, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '02:20:30pm 29/02/2024', 246, 0, NULL, NULL, NULL),
(21, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '02:20:48pm 29/02/2024', 246, 0, NULL, NULL, NULL),
(22, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '02:21:23pm 29/02/2024', 246, 0, NULL, NULL, NULL),
(23, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '02:22:00pm 29/02/2024', 246, 0, NULL, NULL, NULL),
(24, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '02:22:11pm 29/02/2024', 246, 0, NULL, NULL, NULL),
(25, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '02:24:12pm 29/02/2024', 246, 0, NULL, NULL, NULL),
(26, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '02:26:21pm 29/02/2024', 246, 0, NULL, NULL, NULL),
(27, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '02:26:36pm 29/02/2024', 246, 0, NULL, NULL, NULL),
(28, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '02:26:57pm 29/02/2024', 246, 0, NULL, NULL, NULL),
(29, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '02:27:59pm 29/02/2024', 246, 0, NULL, NULL, NULL),
(30, 0, 'kien35', 'Ninh bình', '0989339485', 'kien35@gmail.com', 0, '02:32:21pm 29/02/2024', 912, 0, NULL, NULL, NULL),
(31, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '02:33:23pm 29/02/2024', 789, 0, NULL, NULL, NULL),
(32, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '02:45:00pm 29/02/2024', 0, 0, NULL, NULL, NULL),
(33, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '02:47:48pm 29/02/2024', 666, 0, NULL, NULL, NULL),
(34, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '02:49:37pm 29/02/2024', 666, 0, NULL, NULL, NULL),
(35, 0, 'kien35', 'Ninh bình', '0989339485', 'kien35@gmail.com', 0, '02:50:08pm 29/02/2024', 789, 0, NULL, NULL, NULL),
(36, 0, 'kien35', 'Ninh bình', '0989339485', 'kien35@gmail.com', 0, '02:50:45pm 29/02/2024', 789, 0, NULL, NULL, NULL),
(37, 0, 'kien35', 'Ninh bình', '0989339485', 'kien35@gmail.com', 0, '02:51:25pm 29/02/2024', 789, 0, NULL, NULL, NULL),
(38, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '02:51:51pm 29/02/2024', 789, 0, NULL, NULL, NULL),
(39, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '02:52:10pm 29/02/2024', 246, 0, NULL, NULL, NULL),
(40, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '02:53:30pm 29/02/2024', 1455, 0, NULL, NULL, NULL),
(41, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '02:55:30pm 29/02/2024', 0, 0, NULL, NULL, NULL),
(42, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '02:56:30pm 29/02/2024', 0, 0, NULL, NULL, NULL),
(43, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '02:59:44pm 29/02/2024', 789, 0, NULL, NULL, NULL),
(44, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '03:02:28pm 29/02/2024', 0, 0, NULL, NULL, NULL),
(45, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '03:03:00pm 29/02/2024', 0, 0, NULL, NULL, NULL),
(46, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '03:03:11pm 29/02/2024', 0, 0, NULL, NULL, NULL),
(47, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '03:05:47pm 29/02/2024', 0, 0, NULL, NULL, NULL),
(48, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '03:06:21pm 29/02/2024', 0, 0, NULL, NULL, NULL),
(49, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '03:06:54pm 29/02/2024', 0, 0, NULL, NULL, NULL),
(50, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '03:07:14pm 29/02/2024', 0, 0, NULL, NULL, NULL),
(51, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '03:07:48pm 29/02/2024', 0, 0, NULL, NULL, NULL),
(52, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '03:08:04pm 29/02/2024', 0, 0, NULL, NULL, NULL),
(53, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '03:08:14pm 29/02/2024', 0, 0, NULL, NULL, NULL),
(54, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '03:08:49pm 29/02/2024', 0, 0, NULL, NULL, NULL),
(55, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '03:08:52pm 29/02/2024', 0, 0, NULL, NULL, NULL),
(56, 0, 'kien35', '', '', 'kien35@gmail.com', 0, '03:08:59pm 29/02/2024', 0, 0, NULL, NULL, NULL),
(57, 0, 'kien35', 'Ninh Bình', '0862713306', 'kien35@gmail.com', 0, '03:09:19pm 29/02/2024', 666, 0, NULL, NULL, NULL),
(58, 0, 'kien35', 'Ninh Bình', '0862713306', 'kien35@gmail.com', 0, '03:09:33pm 29/02/2024', 0, 0, NULL, NULL, NULL),
(59, 0, 'kien35', 'Ninh Bình', '0862713306', 'kien35@gmail.com', 0, '03:12:20pm 29/02/2024', 0, 0, NULL, NULL, NULL),
(60, 0, 'kien35', 'Ninh Bình', '0862713306', 'kien35@gmail.com', 0, '03:12:59pm 29/02/2024', 0, 0, NULL, NULL, NULL),
(61, 0, 'kien35', 'Ninh Bình', '0862713306', 'kien35@gmail.com', 0, '03:13:20pm 29/02/2024', 0, 0, NULL, NULL, NULL),
(62, 0, 'kien35', 'Ninh Bình', '0862713306', 'kien35@gmail.com', 0, '03:15:55pm 29/02/2024', 0, 0, NULL, NULL, NULL),
(63, 0, 'tongtrankien1605', 'Ninh bình', '0989339485', 'tongtrankien1605@gmail.com', 0, '03:17:20pm 29/02/2024', 123, 0, NULL, NULL, NULL),
(64, 0, 'tongtrankien1605', 'Ninh bình', '0989339485', 'tongtrankien1605@gmail.com', 0, '03:18:08pm 29/02/2024', 0, 0, NULL, NULL, NULL),
(65, 0, 'tongtrankien1605', 'Ninh bình', '0989339485', 'tongtrankien1605@gmail.com', 0, '03:18:15pm 29/02/2024', 0, 0, NULL, NULL, NULL),
(66, 0, 'tongtrankien1605', 'Ninh bình', '0989339485', 'tongtrankien1605@gmail.com', 0, '03:18:42pm 29/02/2024', 0, 0, NULL, NULL, NULL),
(67, 0, 'hạnh', 'yên nhân', '1593572585', 'hanh07@gmail.com', 0, '03:20:39pm 29/02/2024', 123, 0, NULL, NULL, NULL),
(68, 0, 'hạnh', 'yên nhân', '1593572585', 'hanh07@gmail.com', 0, '03:24:39pm 29/02/2024', 123, 0, NULL, NULL, NULL),
(69, 0, 'hạnh', 'yên nhân', '1593572585', 'hanh07@gmail.com', 0, '03:25:25pm 29/02/2024', 123, 0, NULL, NULL, NULL),
(70, 0, 'hạnh', 'yên nhân', '1593572585', 'hanh07@gmail.com', 0, '03:26:08pm 29/02/2024', 123, 0, NULL, NULL, NULL),
(71, 0, 'hạnh', 'yên nhân', '1593572585', 'hanh07@gmail.com', 0, '03:26:14pm 29/02/2024', 123, 0, NULL, NULL, NULL),
(72, 0, 'tongtrankien1605', 'Ninh bình', '0989339485', 'tongtrankien1605@gmail.com', 0, '03:27:13pm 29/02/2024', 246, 0, NULL, NULL, NULL),
(73, 0, '', '', '', '', 0, '03:27:22pm 29/02/2024', 666, 0, NULL, NULL, NULL),
(74, 0, 'kien', '123', '12345', 'huhu@gmail.com', 0, '03:29:16pm 29/02/2024', 666, 0, NULL, NULL, NULL),
(78, 0, '', '', '', '', 0, '05:27:34pm 29/02/2024', 1332, 0, NULL, NULL, NULL),
(79, 0, 'tongtrankien1605', 'Ninh bình', '0989339485', 'tongtrankien1605@gmail.com', 0, '05:27:53pm 29/02/2024', 1455, 0, NULL, NULL, NULL),
(81, 0, 'tongtrankien1605', 'Ninh bình', '0989339485', 'tongtrankien1605@gmail.com', 0, '05:33:08pm 29/02/2024', 666, 0, NULL, NULL, NULL),
(82, 0, 'tongtrankien1605', 'Ninh bình', '0989339485', 'tongtrankien1605@gmail.com', 0, '05:34:07pm 29/02/2024', 666, 0, NULL, NULL, NULL),
(83, 1, 'tongtrankien1605', 'Ninh bình', '0989339485', 'tongtrankien1605@gmail.com', 0, '05:36:19pm 29/02/2024', 666, 0, NULL, NULL, NULL),
(84, 1, 'tongtrankien1605', 'Ninh bình', '0989339485', 'tongtrankien1605@gmail.com', 0, '05:57:07pm 29/02/2024', 666, 0, NULL, NULL, NULL),
(85, 10, 'kien35', 'nb', '113', 'kien35@gmail.com', 0, '06:10:07pm 29/02/2024', 1035, 0, NULL, NULL, NULL),
(86, 10, 'kien35', '', '', 'kien35@gmail.com', 0, '06:12:02pm 29/02/2024', 1701, 0, NULL, NULL, NULL),
(87, 10, 'kien35', '', '', 'kien35@gmail.com', 0, '06:12:37pm 29/02/2024', 1824, 2, NULL, NULL, NULL),
(88, 10, 'kien35', '', '', 'kien35@gmail.com', 0, '06:20:10pm 29/02/2024', 666, 0, NULL, NULL, NULL),
(89, 10, 'kien35', '', '', 'kien35@gmail.com', 0, '06:22:29pm 29/02/2024', 0, 0, NULL, NULL, NULL),
(90, 10, 'kien35', '', '', 'kien35@gmail.com', 0, '06:22:45pm 29/02/2024', 123, 1, NULL, NULL, NULL),
(91, 1, 'tongtrankien1605', 'Ninh bình', '0989339485', 'tongtrankien1605@gmail.com', 0, '07:22:57pm 29/02/2024', 1332, 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int NOT NULL,
  `idpro` int NOT NULL,
  `ngaybinhluan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(15, 'hay quá', 1, 95, '11:35:19am 01/03/2024'),
(16, 'hay', 2, 100, '01:39:13pm 14/03/2024');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `iduser` int NOT NULL,
  `idpro` int NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int NOT NULL DEFAULT '0',
  `soluong` int NOT NULL,
  `thanhtien` int NOT NULL,
  `idbill` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(1, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 11),
(2, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 11),
(3, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 12),
(4, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 12),
(5, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 13),
(6, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 13),
(7, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 14),
(8, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 14),
(9, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 15),
(10, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 15),
(11, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 16),
(12, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 16),
(13, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 17),
(14, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 17),
(15, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 18),
(16, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 18),
(17, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 19),
(18, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 19),
(19, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 20),
(20, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 20),
(21, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 21),
(22, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 21),
(23, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 22),
(24, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 22),
(25, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 23),
(26, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 23),
(27, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 24),
(28, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 24),
(29, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 25),
(30, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 25),
(31, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 26),
(32, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 26),
(33, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 27),
(34, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 27),
(35, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 28),
(36, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 28),
(37, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 29),
(38, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 29),
(39, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 30),
(40, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 30),
(41, 10, 93, '../upload/dothikhanhngoc.jpg', 'Khánh Ngọc 2007', 666, 1, 666, 30),
(42, 10, 93, '../upload/dothikhanhngoc.jpg', 'Khánh Ngọc 2007', 666, 1, 666, 31),
(43, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 31),
(44, 10, 93, '../upload/dothikhanhngoc.jpg', 'Khánh Ngọc 2007', 666, 1, 666, 33),
(45, 10, 93, '../upload/dothikhanhngoc.jpg', 'Khánh Ngọc 2007', 666, 1, 666, 34),
(46, 10, 93, '../upload/dothikhanhngoc.jpg', 'Khánh Ngọc 2007', 666, 1, 666, 35),
(47, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 35),
(48, 10, 93, '../upload/dothikhanhngoc.jpg', 'Khánh Ngọc 2007', 666, 1, 666, 36),
(49, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 36),
(50, 10, 93, '../upload/dothikhanhngoc.jpg', 'Khánh Ngọc 2007', 666, 1, 666, 37),
(51, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 37),
(52, 10, 93, '../upload/dothikhanhngoc.jpg', 'Khánh Ngọc 2007', 666, 1, 666, 38),
(53, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 38),
(54, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 39),
(55, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 39),
(56, 10, 93, '../upload/dothikhanhngoc.jpg', 'Khánh Ngọc 2007', 666, 1, 666, 40),
(57, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 40),
(58, 10, 93, '../upload/dothikhanhngoc.jpg', 'Khánh Ngọc 2007', 666, 1, 666, 40),
(59, 10, 93, '../upload/dothikhanhngoc.jpg', 'Khánh Ngọc 2007', 666, 1, 666, 43),
(60, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 43),
(61, 10, 93, '../upload/dothikhanhngoc.jpg', 'Khánh Ngọc 2007', 666, 1, 666, 57),
(62, 1, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 63),
(68, 1, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 72),
(69, 1, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 72),
(76, 1, 93, '../upload/dothikhanhngoc.jpg', 'Khánh Ngọc 2007', 666, 1, 666, 79),
(77, 1, 93, '../upload/dothikhanhngoc.jpg', 'Khánh Ngọc 2007', 666, 1, 666, 79),
(78, 1, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 79),
(80, 1, 93, '../upload/dothikhanhngoc.jpg', 'Khánh Ngọc 2007', 666, 1, 666, 81),
(81, 1, 93, '../upload/dothikhanhngoc.jpg', 'Khánh Ngọc 2007', 666, 1, 666, 82),
(82, 1, 93, '../upload/dothikhanhngoc.jpg', 'Khánh Ngọc 2007', 666, 1, 666, 83),
(83, 1, 93, '../upload/dothikhanhngoc.jpg', 'Khánh Ngọc 2007', 666, 1, 666, 84),
(84, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 85),
(85, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 85),
(86, 10, 93, '../upload/dothikhanhngoc.jpg', 'Khánh Ngọc 2007', 666, 1, 666, 85),
(87, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 85),
(88, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 86),
(89, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 86),
(90, 10, 93, '../upload/dothikhanhngoc.jpg', 'Khánh Ngọc 2007', 666, 1, 666, 86),
(91, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 86),
(92, 10, 93, '../upload/dothikhanhngoc.jpg', 'Khánh Ngọc 2007', 666, 1, 666, 86),
(93, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 87),
(94, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 87),
(95, 10, 93, '../upload/dothikhanhngoc.jpg', 'Khánh Ngọc 2007', 666, 1, 666, 87),
(96, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 87),
(97, 10, 93, '../upload/dothikhanhngoc.jpg', 'Khánh Ngọc 2007', 666, 1, 666, 87),
(98, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 87),
(99, 10, 93, '../upload/dothikhanhngoc.jpg', 'Khánh Ngọc 2007', 666, 1, 666, 88),
(100, 10, 92, '../upload/avatar.jpg', 'k1', 123, 1, 123, 90),
(101, 1, 93, '../upload/dothikhanhngoc.jpg', 'Khánh Ngọc 2007', 666, 1, 666, 91),
(102, 1, 93, '../upload/dothikhanhngoc.jpg', 'Khánh Ngọc 2007', 666, 1, 666, 91);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int NOT NULL,
  `namedm` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `namedm`) VALUES
(51, 'Điện Thoại'),
(52, 'Laptop'),
(53, 'Tủ Lạnh'),
(54, 'Máy Giặt'),
(55, 'Điều Hòa');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) DEFAULT '0.00',
  `img` varchar(255) DEFAULT NULL,
  `mota` text,
  `luotxem` int DEFAULT '0',
  `iddm` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(92, 'k1', 123456.00, '../upload/anh1.jpg', 'huhu', 0, 52),
(93, 'Khánh Ngọc 2007', 666.00, '../upload/dothikhanhngoc.jpg', 'xinh ngon', 4, 51),
(95, 'tủ lạnh ttk', 9800.00, '../upload/avatar.jpg', 'haha test', 2, 53),
(96, 'điều hòa 1', 123.00, '../upload/dieuhoa1.jpg', 'đây là điều hòa 1, rẻ nhất', 1, 55),
(97, 'máy giặt 1', 231.00, '../upload/maygiat1.jpg', 'máy giặt siêu sạch', 0, 54),
(98, 'tủ lạnh 1', 745.00, '../upload/tulanh1.jpg', 'tủ lạnh 1 dung tích 180 lít', 0, 53),
(99, 'laptop 1', 346265.00, '../upload/laptop1.jpg', 'laptop đến từ hãng AAA nào đó', 0, 52),
(100, 'điện thoại 12', 2355.00, '../upload/dienthoai1.jpg', 'iphone cũng đắt quá', 2, 55);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'tongtrankien1605', '123456', 'tongtrankien1605@gmail.com', 'Ninh bình', '0989339485', 1),
(2, 'kien', '123456', 'kien@gmail.com', 'Ninh Bình', '0862713306', 1),
(10, 'kien35', '123456', 'kien35@gmail.com', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idpro` (`idpro`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idpro` (`idpro`),
  ADD KEY `idbill` (`idbill`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddm` (`iddm`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
