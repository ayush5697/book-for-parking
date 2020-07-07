-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2019 at 06:03 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_parking`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(20) NOT NULL,
  `about` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about`) VALUES
(4, 'The most common types of parking are angle parking, perpendicular parking and parallel parking. Angle parking is especially widespread in parking lots, where vehicles are designated to go one way.');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `event_title` varchar(200) NOT NULL,
  `event_date` date NOT NULL,
  `event_image` varchar(255) NOT NULL,
  `event_detail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_title`, `event_date`, `event_image`, `event_detail`) VALUES
(22, 'traning', '2019-09-16', 'IMG-20180826-WA0006.jpg', 'iot'),
(23, 'Stock market wealth meet at Nehru Park', '2019-11-22', '48378804_1960786224216211_2070847541515124736_n(3).jpg', 'sgvhb hghas bvghsvbcnbxhvsshgvdbns csahghfvsab csnnsakbdhjas'),
(24, 'ayushbhai', '2019-08-14', '57083557_2026018604359639_9174470565719703552_n(5).jpg', 'dsvzxc');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(20) NOT NULL,
  `notice_title` varchar(200) NOT NULL,
  `notice_detail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `notice_title`, `notice_detail`) VALUES
(37, 'atul', 'fukeng3\r\n'),
(38, 'quantum', 'test'),
(39, 'quantum', 'test12\r\n'),
(40, 'quantum12', 'atul\r\n'),
(41, 'quntumsoftech', '12345'),
(45, 'ak', 'cxm, cm,.xz vcmmcjxnvjcxnvkcxnvdjnvfjncxvncnxv nc vnc vnc vncx vcnx vvkncxjvknjkxcnvjcxnvjmfncxnv ncx vnc vn vcxn vcnv cxnv cxnv cxnv cxn vxcnv cxnv cxnv cxn nvcxnvmcxnvmcvncmxnvcmvncxmvnxcmvncmvncxmv'),
(48, 'bhaqi', 'abishek');

-- --------------------------------------------------------

--
-- Table structure for table `parking`
--

CREATE TABLE `parking` (
  `id` int(20) NOT NULL,
  `city` varchar(200) NOT NULL,
  `area` varchar(200) NOT NULL,
  `capacity` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parking`
--

INSERT INTO `parking` (`id`, `city`, `area`, `capacity`) VALUES
(3, 'Bhopal', 'new market', '80'),
(4, 'Noida', 'Sec 62', '70'),
(5, 'Delhi', 'Moti nagar', '80'),
(6, 'Patna', 'Gandhi Maidan', '120'),
(8, 'Delhi', 'India Gate', '90'),
(9, 'Electronic City', 'Metro Station', '50');

-- --------------------------------------------------------

--
-- Table structure for table `parking_slot`
--

CREATE TABLE `parking_slot` (
  `id` int(200) NOT NULL,
  `parking_id` int(50) NOT NULL,
  `date` date NOT NULL,
  `availability` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parking_slot`
--

INSERT INTO `parking_slot` (`id`, `parking_id`, `date`, `availability`) VALUES
(28, 4, '2019-09-12', 68),
(29, 9, '2019-09-12', 48),
(30, 9, '2019-09-27', 49),
(31, 9, '2019-09-11', 49),
(32, 9, '2019-09-28', 49),
(33, 9, '2019-09-16', 49),
(34, 9, '2019-09-20', 49);

-- --------------------------------------------------------

--
-- Table structure for table `reserve_parking`
--

CREATE TABLE `reserve_parking` (
  `id` int(20) NOT NULL,
  `umobile` bigint(20) NOT NULL,
  `parking_id` int(20) NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `Vehicle_No` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `hour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserve_parking`
--

INSERT INTO `reserve_parking` (`id`, `umobile`, `parking_id`, `vehicle`, `Vehicle_No`, `date`, `hour`) VALUES
(112, 3535353535, 9, 'Motorcycle', 'MP-04 CH-2222', '2019-09-12', 1),
(113, 9471956563, 9, 'Car', 'MP-04 CH-2222', '2019-09-12', 1),
(114, 9471956563, 9, '', 'MP-04 CH-4980', '2019-09-27', 2),
(115, 9471956563, 9, 'Car', 'MP-04 CH-4980', '2019-09-11', 7),
(116, 9471956563, 9, 'Car', 'MP-04 CH-2222', '2019-09-28', 12),
(117, 3131313131, 9, 'Car', 'MP-04 CH-4980', '2019-09-16', 1),
(118, 9471956563, 9, 'Car', 'MP-04 CH-2222', '2019-09-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(20) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `mobile` varchar(16) NOT NULL,
  `password` varchar(200) DEFAULT NULL,
  `user_type` varchar(10) DEFAULT 'Customer',
  `otp` varchar(15) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `mobile`, `password`, `user_type`, `otp`, `key`, `expDate`) VALUES
(60, 'ayush', '94ayushkumar@gmail.com', '9685744215', '12345', 'Admin', '233975', '', '0000-00-00 00:00:00'),
(96, 'ayush kumar', 'sonu14802@gmail.com', '9471956563', '12345678', 'Customer', '', '', '0000-00-00 00:00:00'),
(116, 'rakesh', 'rakesg@gmail.com', '9494949494', '123456789', 'Customer', '', '', '0000-00-00 00:00:00'),
(118, 'abhiolasha', 'abhikam@gmail.com', '7979797979', '123456789', 'Customer', '', '', '0000-00-00 00:00:00'),
(119, 'rohan', 'rohan@gmail.com', '3535353535', '123456789', 'Customer', '', '', '0000-00-00 00:00:00'),
(122, 'ayush kumar', 'sof@gmail.com', '123457895412365', '12345874569641323', 'Customer', '', '', '0000-00-00 00:00:00'),
(123, 'abhijit', 'talk2ayush672@gmail.com', '8579855751', '123456', 'Customer', '', '', '0000-00-00 00:00:00'),
(124, 'atul', 'atul@gmail.com', '12345678', '12345678', 'Customer', '', '', '0000-00-00 00:00:00'),
(125, 'adi', 'ad@gmail.com', '3131313131', '12345678', 'Customer', '', '', '0000-00-00 00:00:00'),
(126, 'kanik', 'kanika@gmail.com', '7415725670', '123456', 'Customer', '', '', '0000-00-00 00:00:00'),
(127, 'deepak', 'deepk@gmail.com', '2', '123456', 'Customer', '', '', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parking`
--
ALTER TABLE `parking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parking_slot`
--
ALTER TABLE `parking_slot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserve_parking`
--
ALTER TABLE `reserve_parking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `parking`
--
ALTER TABLE `parking`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `parking_slot`
--
ALTER TABLE `parking_slot`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `reserve_parking`
--
ALTER TABLE `reserve_parking`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
