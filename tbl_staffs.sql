-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 08:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eprivilege1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staffs`
--

CREATE TABLE `tbl_staffs` (
  `staff_id` varchar(255) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `staff_position` varchar(255) NOT NULL,
  `staff_gred` varchar(255) NOT NULL,
  `staff_IC` varchar(255) NOT NULL,
  `staff_phone` varchar(255) NOT NULL,
  `staff_email` varchar(255) NOT NULL,
  `staff_password` varchar(255) NOT NULL,
  `staff_repassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_staffs`
--

INSERT INTO `tbl_staffs` (`staff_id`, `staff_name`, `staff_position`, `staff_gred`, `staff_IC`, `staff_phone`, `staff_email`, `staff_password`, `staff_repassword`) VALUES
('S001', 'Siti Amirah Bt Mahmud', 'Admin', 'Pelajar Gred 19', '987654321234', '0123456789', 'a@gmail.com', '12345678', '12345678'),
('S002', 'Aminah Bt Yahya', 'Staff', 'Pelajar Gred 21', '980987654321', '01928374657', 'b@gmail.com', '123456789', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_staffs`
--
ALTER TABLE `tbl_staffs`
  ADD PRIMARY KEY (`staff_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
