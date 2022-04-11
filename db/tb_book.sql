-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2022 at 10:14 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_car`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_book`
--

CREATE TABLE `tb_book` (
  `id` int(11) NOT NULL COMMENT 'PK',
  `name` varchar(50) NOT NULL COMMENT 'ชื่อผู้จอง',
  `surname` varchar(50) NOT NULL COMMENT 'นามสกุลผู้จอง',
  `p_id` int(11) NOT NULL COMMENT 'ID ตำแหน่ง',
  `d_id` int(11) NOT NULL COMMENT 'ID สังกัด',
  `date_register` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'วันที่กรอกข้อมูล',
  `start_date` date NOT NULL COMMENT 'วันที่ใช้รถ',
  `start_time` time NOT NULL COMMENT 'เริ่มเวลา',
  `end_date` date NOT NULL COMMENT 'ถึงวันที่',
  `end_time` time NOT NULL COMMENT 'ถึงเวลา',
  `origin` varchar(255) NOT NULL COMMENT 'ต้นทาง',
  `destination` varchar(255) NOT NULL COMMENT 'ปลายทาง',
  `title` varchar(255) NOT NULL COMMENT 'เหตุผลขอใช้รถ',
  `count` int(11) NOT NULL COMMENT 'จำนวนผู้โดยสาร',
  `ch_id` int(11) NOT NULL COMMENT 'ID ตัวเลือกรับส่ง',
  `c_id` int(11) NOT NULL COMMENT 'ID ประเภทรถ',
  `remark` text NOT NULL COMMENT 'รายละเอียดการรับส่ง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_book`
--

INSERT INTO `tb_book` (`id`, `name`, `surname`, `p_id`, `d_id`, `date_register`, `start_date`, `start_time`, `end_date`, `end_time`, `origin`, `destination`, `title`, `count`, `ch_id`, `c_id`, `remark`) VALUES
(1, 'จามร', 'เพ็งสวย', 3, 1, '2022-04-01 13:49:21', '2022-03-31', '14:07:26', '2022-03-31', '16:00:26', 'คณะวิทยาศาสตร์', 'สุพรรณบุรี', 'ไปอบรม', 4, 1, 1, 'ไปส่งแล้วกลับมารับวันที่ 11 เมษายน 2565'),
(8, 'นางภัควรัญชญ์', 'จำปาทิว', 3, 1, '2022-04-05 19:50:53', '2022-04-16', '09:30:00', '2022-04-16', '10:00:00', 'สจล.', 'พระจอมเกล้า', 'ธนาคาร', 1, 2, 1, 'ขอใช้รถตู้ฮร-7816');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_book`
--
ALTER TABLE `tb_book`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_book`
--
ALTER TABLE `tb_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PK', AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
