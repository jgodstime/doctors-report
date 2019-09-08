-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2019 at 07:18 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctors_report`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `email`, `password`, `created_at`) VALUES
(1, 'admin', '$2y$10$zRe8Ii/45irUzBIVXAefDeNOthtdMHsyk8IxPeAYzPEzm9HzGLUKa', '2019-08-18 17:23:02');

-- --------------------------------------------------------

--
-- Table structure for table `patient_tbl`
--

CREATE TABLE `patient_tbl` (
  `id` int(11) NOT NULL,
  `reportId` int(11) NOT NULL,
  `dateRegistered` text NOT NULL,
  `doctorInCharge` text NOT NULL,
  `surnameOfPatient` text NOT NULL,
  `otherNameOfPatient` text NOT NULL,
  `gender` varchar(33) NOT NULL,
  `diagnosis` text NOT NULL,
  `presentCondition` text NOT NULL,
  `drugsPrescribed` text NOT NULL,
  `dateDischarged` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_tbl`
--

INSERT INTO `patient_tbl` (`id`, `reportId`, `dateRegistered`, `doctorInCharge`, `surnameOfPatient`, `otherNameOfPatient`, `gender`, `diagnosis`, `presentCondition`, `drugsPrescribed`, `dateDischarged`) VALUES
(1, 8933, '08/09/2019', 'John Godstime', 'John', 'Etim', 'Female', 'Malaraia', 'Typhoid', 'Procold', '2019-09-12'),
(2, 8517, '08/09/2019', 'John Godstimee', 'John', 'Etim', 'Female', 'Malaraia', 'Typhoid', 'Procold', '2019-09-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_tbl`
--
ALTER TABLE `patient_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient_tbl`
--
ALTER TABLE `patient_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
