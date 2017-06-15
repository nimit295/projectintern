-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2017 at 04:45 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `research`
--

-- --------------------------------------------------------

--
-- Table structure for table `resource_data`
--

CREATE TABLE `resource_data` (
  `rd_id` int(15) UNSIGNED NOT NULL,
  `rd_type` varchar(255) DEFAULT NULL COMMENT 'ชนิดของทรัพยากร',
  `rd_commonName` varchar(255) DEFAULT NULL COMMENT 'ชื่อสามัญ',
  `rd_localName` varchar(255) DEFAULT NULL COMMENT 'ชื่อท้องถิ่น/อื่นๆ',
  `rd_scienceName` varchar(255) DEFAULT NULL COMMENT 'ชื่อทางวิทยาศาสตร์',
  `rd_familyName` varchar(255) DEFAULT NULL COMMENT 'ชื่อวงศ์',
  `rd_nature` varchar(4095) DEFAULT NULL COMMENT 'ลักษณะทั่วไป /ข้อมูลทั่วไป',
  `rd_area` varchar(4095) DEFAULT NULL COMMENT 'พื้นที่วิจัยที่พบ /แหล่งที่พบ',
  `rd_benefit` varchar(4095) DEFAULT NULL COMMENT 'การศึกษาวิจัย /การใช้ประโยชน์',
  `rd_picture` varchar(255) DEFAULT NULL COMMENT 'รูปภาพอื่นๆ',
  `rd_other` varchar(511) NOT NULL DEFAULT '-' COMMENT 'ข้อมูลอื่นๆ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ข้อมูลทรัพยากร';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resource_data`
--
ALTER TABLE `resource_data`
  ADD PRIMARY KEY (`rd_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resource_data`
--
ALTER TABLE `resource_data`
  MODIFY `rd_id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
