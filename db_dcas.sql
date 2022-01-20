-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 07:09 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dcas`
--
CREATE DATABASE IF NOT EXISTS `db_dcas` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_dcas`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `admin_sex` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `last_name`, `first_name`, `middle_name`, `admin_sex`, `birth_date`, `contact_no`, `admin_name`, `admin_password`) VALUES
('DZW92000', 'Brazas', 'Welmar Alex', 'Bautista', 'Male', '2000-05-20', '09686812424', 'wabbrazas', 'ThrulX@13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE `tbl_appointment` (
  `app_num` int(11) NOT NULL,
  `pat_num` int(11) NOT NULL,
  `app_date` date NOT NULL,
  `app_time` varchar(50) NOT NULL,
  `doc_name` varchar(50) NOT NULL,
  `app_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patient`
--

CREATE TABLE `tbl_patient` (
  `pat_num` int(11) NOT NULL,
  `pat_fn` varchar(50) NOT NULL,
  `pat_mn` varchar(50) NOT NULL,
  `pat_ln` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `pat_sex` varchar(50) NOT NULL,
  `pat_pn` varchar(50) NOT NULL,
  `pat_address` varchar(200) NOT NULL,
  `pat_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_patient`
--

INSERT INTO `tbl_patient` (`pat_num`, `pat_fn`, `pat_mn`, `pat_ln`, `dob`, `pat_sex`, `pat_pn`, `pat_address`, `pat_id`) VALUES
(1, 'Welmar Alex', 'Bautista', 'Brazas', '2000-05-20', 'Male', '09686812424', 'Brgy. Wakas, Orion, Bataan', 'AEF130'),
(2, 'Monaliza', 'Gerandoy', 'Conde', '2022-01-26', 'Female', '09184058739', 'Brgy. Bilolo, Orion, Bataan', 'ADW122'),
(3, 'Thrulx', 'Lhuver', 'Axia', '2010-07-20', 'Male', '09787897070', 'Brgy. Sandigan, Orion, Bataan', 'EWR356');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD PRIMARY KEY (`app_num`),
  ADD KEY `pat_num` (`pat_num`);

--
-- Indexes for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  ADD PRIMARY KEY (`pat_num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `app_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  MODIFY `pat_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD CONSTRAINT `tbl_appointment_ibfk_1` FOREIGN KEY (`pat_num`) REFERENCES `tbl_patient` (`pat_num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
