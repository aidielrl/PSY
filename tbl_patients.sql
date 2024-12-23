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
-- Table structure for table `tbl_patients`
--

CREATE TABLE `tbl_patients` (
  `patient_id` varchar(255) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `patient_IC` varchar(255) NOT NULL,
  `patient_age` varchar(255) NOT NULL,
  `patient_gender` varchar(255) NOT NULL,
  `patient_address` varchar(255) NOT NULL,
  `patient_phone` varchar(255) NOT NULL,
  `patient_email` varchar(255) NOT NULL,
  `patient_password` varchar(255) NOT NULL,
  `patient_repassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_patients`
--

INSERT INTO `tbl_patients` (`patient_id`, `patient_name`, `patient_IC`, `patient_age`, `patient_gender`, `patient_address`, `patient_phone`, `patient_email`, `patient_password`, `patient_repassword`) VALUES
('ayu', 'NurHidayu Bt Ahmad', '123456789098', '27', 'Perempuan', 'HTI', '09876543212', 'aaa@gmail.com', '111111', '111111'),
('aina', 'Aina Batrisyah Bt Kamal', '890987654321', '35', 'Perempuan', 'Asrama Doktor HTI', '01123456789', 'bbb@gmail.com', '123456', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
