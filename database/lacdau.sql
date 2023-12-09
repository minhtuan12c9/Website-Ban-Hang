-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 11:58 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lacdau`
--

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `ma` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `anhsanpham` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tensanpham` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `danhmuc` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `ma`, `anhsanpham`, `tensanpham`, `gia`, `danhmuc`) VALUES
(7, 'BPK0002', 'https://lacdau.com/media/product/250-16-8b048f7683dfb6f800e45854f5f47317.jpg', 'COMBO PHÍM CHUỘT GIẢ CƠ LIMEIDE G21 ĐEN\r\n', 150000, 'ban_phim'),
(8, 'BPK0001', 'https://lacdau.com/media/product/250-2687-aa.jpg', 'COMBO PHÍM CHUỘT GIẢ CƠ LIMEIDE G21 TRẮNG', 200000, 'ban_phim'),
(9, 'fsadfsdfsd', 'https://lzd-img-global.slatic.net/g/p/467136ea8c7ef971c8b20ab80bf39240.jpg_200x200q80.jpg_.webp', 'rewrwerwer', 1500000, 'ban_phim'),
(10, 'CNEW0001', 'https://lacdau.com/media/product/250-68-bc1d4bb1d2c435808b594449973ed9b4.jpg', 'gjhjsdkafhjsdkfaghjksadfjkhgdfas', 500000, 'chuot'),
(11, 'dasdasd', 'https://lzd-img-global.slatic.net/g/p/467136ea8c7ef971c8b20ab80bf39240.jpg_200x200q80.jpg_.webp', 'ads das das', 200000, 'chuot'),
(12, 'dasdasd', 'https://lzd-img-global.slatic.net/g/p/467136ea8c7ef971c8b20ab80bf39240.jpg_200x200q80.jpg_.webp', 'ads das das', 56789, 'chuot');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
