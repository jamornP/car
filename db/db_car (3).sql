-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2022 at 03:09 PM
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
  `people` text DEFAULT NULL COMMENT 'รายชื่อผู้ที่ไป',
  `ch_id` int(11) NOT NULL COMMENT 'ID ตัวเลือกรับส่ง',
  `c_id` int(11) NOT NULL COMMENT 'ID ประเภทรถ',
  `remark` text NOT NULL COMMENT 'รายละเอียดการรับส่ง',
  `s_id` int(11) NOT NULL DEFAULT 1 COMMENT 'ID สถานะใบขอ',
  `user_add` varchar(50) DEFAULT NULL COMMENT 'USER ผู้กรอกข้อมูล',
  `provin` varchar(20) NOT NULL COMMENT 'ต่างจังหวัดหรือไม่',
  `esypass` varchar(20) NOT NULL COMMENT 'ใช้ทางด่วนหรือไม่'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_books`
--

CREATE TABLE `tb_books` (
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
  `people` text DEFAULT NULL COMMENT 'รายชื่อผู้ที่ไป',
  `ch_id` int(11) NOT NULL COMMENT 'ID ตัวเลือกรับส่ง',
  `c_id` int(11) NOT NULL COMMENT 'ID ประเภทรถ',
  `remark` text NOT NULL COMMENT 'รายละเอียดการรับส่ง',
  `s_id` int(11) NOT NULL DEFAULT 1,
  `user_add` varchar(50) DEFAULT NULL COMMENT 'USER ผู้กรอกข้อมูล'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_books`
--

INSERT INTO `tb_books` (`id`, `name`, `surname`, `p_id`, `d_id`, `date_register`, `start_date`, `start_time`, `end_date`, `end_time`, `origin`, `destination`, `title`, `count`, `people`, `ch_id`, `c_id`, `remark`, `s_id`, `user_add`) VALUES
(1, 'จามร', 'เพ็งสวย', 3, 1, '2022-04-19 11:54:55', '2022-04-19', '08:30:00', '2022-04-19', '16:30:00', 'คณะวิทยาศาสตร์', 'Magq Bangna', 'ซื้อของ', 1, '1.นายจามร เพ็งสวย', 2, 5, '-', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_bs`
--

CREATE TABLE `tb_bs` (
  `id` int(11) NOT NULL COMMENT 'PK',
  `b_id` int(11) NOT NULL COMMENT 'เลขที่ใบจองรถ',
  `number` varchar(50) DEFAULT NULL COMMENT 'เลขทะเบียนรถ',
  `sname` varchar(255) DEFAULT NULL COMMENT 'ชื่อคนขับรถ',
  `tel` varchar(50) DEFAULT NULL COMMENT 'เบอร์โทรคนขับรถ',
  `s_id` int(11) NOT NULL COMMENT 'id สถานะ',
  `date_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'วันที่update',
  `user_add` varchar(255) NOT NULL COMMENT 'user ที่ Update'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_car`
--

CREATE TABLE `tb_car` (
  `id` int(11) NOT NULL COMMENT 'PK',
  `name` varchar(50) NOT NULL COMMENT 'ประเภทรถ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_car`
--

INSERT INTO `tb_car` (`id`, `name`) VALUES
(1, 'รถตู้'),
(2, 'รถกระบะ'),
(3, 'รถ 6 ล้อ'),
(5, 'รถเก๋ง'),
(7, 'รถบัส');

-- --------------------------------------------------------

--
-- Table structure for table `tb_choose`
--

CREATE TABLE `tb_choose` (
  `id` int(11) NOT NULL COMMENT 'PK',
  `name` varchar(50) NOT NULL COMMENT 'ตัวเลือกรับส่ง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_choose`
--

INSERT INTO `tb_choose` (`id`, `name`) VALUES
(1, 'ส่งเที่ยวเดียว'),
(2, 'ส่งแล้วรอรับกลับ'),
(3, 'ส่งแล้วให้ไปรับเวลา');

-- --------------------------------------------------------

--
-- Table structure for table `tb_department`
--

CREATE TABLE `tb_department` (
  `id` int(11) NOT NULL COMMENT 'PK',
  `name` varchar(50) NOT NULL COMMENT 'สังกัด'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_department`
--

INSERT INTO `tb_department` (`id`, `name`) VALUES
(1, 'ส่วนสนับสนุนวิชาการ'),
(2, 'สาขาวิชาสถิติ'),
(3, 'สาขาวิทยาการคอมพิวเตอร์'),
(4, 'สาขาวิชาคณิตศาสตร์'),
(5, 'สาขาวิชาฟิสิกส์'),
(6, 'สาขาวิชาชีววิทยา'),
(7, 'สาขาวิชาเคมี'),
(8, 'K-DAI'),
(9, 'สโมสรนักศึกษา');

-- --------------------------------------------------------

--
-- Table structure for table `tb_position`
--

CREATE TABLE `tb_position` (
  `id` int(11) NOT NULL COMMENT 'PK',
  `name` varchar(50) NOT NULL COMMENT 'ตำแหน่ง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_position`
--

INSERT INTO `tb_position` (`id`, `name`) VALUES
(1, 'ผู้บริหาร'),
(2, 'อาจารย์'),
(3, 'เจ้าหน้าที่'),
(4, 'นักศึกษา');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `id` int(11) NOT NULL COMMENT 'PK',
  `name` varchar(50) NOT NULL COMMENT 'สถานะ',
  `color` varchar(10) NOT NULL COMMENT 'สี'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`id`, `name`, `color`) VALUES
(1, 'ยื่นแบบฟอร์ม', '#99ccff'),
(2, 'ดำเนินการขออนุมัติคณะ', '#5f82a2'),
(3, 'คณะอนุมัติและขอทางสถาบัน', '#8abba5'),
(4, 'ดำเนินการขออนุมัติสถาบัน', '#3db4d1'),
(5, 'สถาบันอนุมัติ', '#30c562'),
(6, 'สถาบันไม่อนุมัติ', '#d62929');

-- --------------------------------------------------------

--
-- Table structure for table `tb_test`
--

CREATE TABLE `tb_test` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `date_add` datetime NOT NULL DEFAULT current_timestamp(),
  `start_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_test`
--

INSERT INTO `tb_test` (`id`, `name`, `surname`, `date_add`, `start_date`, `start_time`) VALUES
(1, 'จามร', 'เพ็งสวย', '0000-00-00 00:00:00', NULL, NULL),
(2, 'รองศาสตราจารย์ ดร.สุธี', 'ชุติไพจิตร', '2022-04-04 11:44:25', NULL, NULL),
(3, 'กก', 'dd', '2022-04-04 11:50:33', '2022-04-05', '08:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_timebook`
--

CREATE TABLE `tb_timebook` (
  `id` int(11) NOT NULL COMMENT 'PK',
  `time` varchar(6) NOT NULL DEFAULT '00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_timebook`
--

INSERT INTO `tb_timebook` (`id`, `time`) VALUES
(1, '05:00'),
(2, '05:30'),
(3, '06:00'),
(4, '06:30'),
(5, '07:00'),
(6, '07:30'),
(7, '08:00'),
(8, '08:30'),
(9, '09:00'),
(10, '09:30'),
(11, '10:00'),
(12, '10:30'),
(13, '11:00'),
(14, '11:30'),
(15, '12:00'),
(16, '12:30'),
(17, '13:00'),
(18, '13:30'),
(19, '14:00'),
(20, '14:30'),
(21, '15:00'),
(22, '15:30'),
(23, '16:00'),
(24, '16:30'),
(25, '17:00'),
(26, '17:30'),
(27, '18:00'),
(28, '18:30'),
(29, '19:00'),
(30, '19:30'),
(31, '20:00'),
(32, '20:30'),
(33, '21:00'),
(34, '21:30'),
(35, '22:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL COMMENT 'PK',
  `name` varchar(50) NOT NULL COMMENT 'ชื่อ',
  `surname` varchar(50) NOT NULL COMMENT 'นามสกุล',
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tel` varchar(50) NOT NULL COMMENT 'เบอร์โทร',
  `role` varchar(50) DEFAULT 'member',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL,
  `d_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `name`, `surname`, `email`, `password`, `tel`, `role`, `created_at`, `updated_at`, `p_id`, `d_id`) VALUES
(1, 'จามร', 'เพ็งสวย', 'jamorn.pe@kmitl.ac.th', '$2y$10$a51xCXB4bNaaTVvZt3gUVuPI1KVko6zkb.GLlYt60TrXHBUFKQHrW', '0868082435', 'admin', '2022-04-20 12:24:04', '2022-05-11 13:43:24', 3, 1),
(2, 'จามร', 'เพ็งสวย', 'jamorn07@gmail.com', '$2y$10$tRIwDrBizhBAEMZOhAU1HexrZ/iB.Xrp7w3m1SBmWPfLOiMz.1n9K', '0868082435', 'member', '2022-04-20 13:52:21', NULL, 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_book`
--
ALTER TABLE `tb_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_books`
--
ALTER TABLE `tb_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_bs`
--
ALTER TABLE `tb_bs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_car`
--
ALTER TABLE `tb_car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_choose`
--
ALTER TABLE `tb_choose`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_department`
--
ALTER TABLE `tb_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_position`
--
ALTER TABLE `tb_position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_test`
--
ALTER TABLE `tb_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_timebook`
--
ALTER TABLE `tb_timebook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_book`
--
ALTER TABLE `tb_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PK';

--
-- AUTO_INCREMENT for table `tb_books`
--
ALTER TABLE `tb_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PK', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_bs`
--
ALTER TABLE `tb_bs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PK';

--
-- AUTO_INCREMENT for table `tb_car`
--
ALTER TABLE `tb_car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PK', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_choose`
--
ALTER TABLE `tb_choose`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PK', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_department`
--
ALTER TABLE `tb_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PK', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_position`
--
ALTER TABLE `tb_position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PK', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PK', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_test`
--
ALTER TABLE `tb_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_timebook`
--
ALTER TABLE `tb_timebook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PK', AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PK', AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
