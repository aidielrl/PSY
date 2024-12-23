-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 08:12 AM
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
-- Database: `psy`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor`
--

CREATE TABLE `tbl_doctor` (
  `dr_name` varchar(35) NOT NULL,
  `dr_id` varchar(10) NOT NULL,
  `dr_password` varchar(15) NOT NULL,
  `dr_IC` int(15) NOT NULL,
  `dr_phone` int(11) NOT NULL,
  `dr_email` varchar(25) NOT NULL,
  `dr_bdate` date NOT NULL,
  `dr_address` varchar(35) NOT NULL,
  `dr_gender` varchar(10) NOT NULL,
  `dr_repassword` varchar(15) NOT NULL,
  `dr_gred` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_doctor`
--

INSERT INTO `tbl_doctor` (`dr_name`, `dr_id`, `dr_password`, `dr_IC`, `dr_phone`, `dr_email`, `dr_bdate`, `dr_address`, `dr_gender`, `dr_repassword`, `dr_gred`) VALUES
('test12', 'test3', '1234', 0, 12, 'test@', '2022-12-08', 'perak', 'male', '1234', '100'),
('test12', 'test3', '1234', 0, 12, 'test@', '2022-12-08', 'perak', 'male', '1234', '100');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
