-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 07:28 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` enum('Male','Female','Others') NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlog`
--

INSERT INTO `adminlog` (`first_name`, `last_name`, `date_of_birth`, `gender`, `username`, `email`, `phone_no`, `password`) VALUES
('Avinash', 'Prasad', '1998-09-26', 'Male', 'avinash26', 'avinashprasad184@gmail.com', 7004806734, 'avinash@12345'),
('Kavita', 'Chaudhary', '2000-03-07', 'Female', 'kavita07', '831kavita73@gmail.com', 8318959667, '12345'),
('ram', 'raja', '2019-06-12', 'Male', 'ram12', 'ram12@ksit.edu.in', 7954610382, 'ram12'),
('Renuka', 'Chaudhary', '2004-05-22', 'Female', 'renuka22', 'narendrachaudharyrbl@gmail.com', 9336342999, 'ijk123');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `app_id` int(11) NOT NULL,
  `app_date` date NOT NULL,
  `app_time` time NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `doc_id` int(11) DEFAULT NULL,
  `symptoms` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`app_id`, `app_date`, `app_time`, `pid`, `doc_id`, `symptoms`) VALUES
(1, '2020-12-29', '12:00:00', 2, 2, 'cough'),
(2, '2020-12-29', '11:31:00', 2, 3, 'headache, tonsils');

-- --------------------------------------------------------

--
-- Table structure for table `doctorlog`
--

CREATE TABLE `doctorlog` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `specialist` varchar(20) NOT NULL,
  `date_appointed` date NOT NULL,
  `time_from` time NOT NULL,
  `time_to` time NOT NULL,
  `salary` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctorlog`
--

INSERT INTO `doctorlog` (`id`, `first_name`, `last_name`, `date_of_birth`, `gender`, `username`, `password`, `email`, `phone_no`, `qualification`, `specialist`, `date_appointed`, `time_from`, `time_to`, `salary`) VALUES
(2, 'Avinash', 'Prasad', '1998-09-26', 'Male', 'avinash26', '123456', 'avinashprasad184@gmail.com', 7004806734, 'MBBS', 'Physician', '2020-12-25', '16:00:00', '20:00:00', 250000),
(3, 'Kavita', 'Chaudhary', '2001-03-07', 'Female', 'kavita07', '1234567', '831kavita73@gmail.com', 8318959667, 'MD-PhD', 'Cardiologist', '2018-02-02', '09:00:00', '16:00:00', 250000);

-- --------------------------------------------------------

--
-- Table structure for table `patientlog`
--

CREATE TABLE `patientlog` (
  `id` int(11) NOT NULL,
  `pfirst_name` varchar(20) NOT NULL,
  `plast_name` varchar(20) NOT NULL,
  `pdate_of_birth` date NOT NULL,
  `pgender` varchar(10) NOT NULL,
  `pusername` varchar(20) NOT NULL,
  `pemail` varchar(30) NOT NULL,
  `pphone_no` bigint(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientlog`
--

INSERT INTO `patientlog` (`id`, `pfirst_name`, `plast_name`, `pdate_of_birth`, `pgender`, `pusername`, `pemail`, `pphone_no`, `password`) VALUES
(1, 'Dhruv', 'Shukla', '2020-12-23', 'male', 'dhruv', 'dhruv@ksit.edu.in', 9956620173, '98765'),
(2, 'pawan', 'patil', '2000-05-15', 'male', 'pawan', 'pawan@yahoo.com', 9988552211, '12345'),
(3, 'bhuvana', 'chandrika', '2000-12-26', 'female', 'bhuvana', 'bhuvana@yahoo.com', 7766443311, '12345');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE `pharmacy` (
  `drug_id` int(11) NOT NULL,
  `drug_name` varchar(20) DEFAULT NULL,
  `dosage` varchar(20) DEFAULT NULL,
  `batch_no` bigint(20) DEFAULT NULL,
  `mfg_date` date DEFAULT NULL,
  `exp_date` date DEFAULT NULL,
  `qnty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`drug_id`, `drug_name`, `dosage`, `batch_no`, `mfg_date`, `exp_date`, `qnty`) VALUES
(120, 'paracetamol', '100gm', 789456, '2020-12-15', '2024-06-19', 100),
(125, 'eno', '10gm', 123654, '2020-12-29', '2022-09-29', 50),
(456, 'Combilame', '500mg', 78897, '2016-06-28', '2020-12-12', 200);

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `pres_no` bigint(20) NOT NULL,
  `pres_date` date DEFAULT NULL,
  `d_id` int(11) DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL,
  `symptom` varchar(30) DEFAULT NULL,
  `medicine` varchar(30) DEFAULT NULL,
  `comments` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`pres_no`, `pres_date`, `d_id`, `p_id`, `symptom`, `medicine`, `comments`) VALUES
(123456, '2020-12-29', 2, 2, 'fever', 'paracetamol', 'drink hot water'),
(234561, '2020-12-29', 2, 2, 'fever,cough,headache', 'paracetamol-500mg,zedex-250ml', 'drink hot water, do not eat cold items');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlog`
--
ALTER TABLE `adminlog`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`app_id`),
  ADD UNIQUE KEY `app_id` (`app_id`),
  ADD KEY `appointment_ibfk_1` (`pid`),
  ADD KEY `appointment_ibfk_2` (`doc_id`);

--
-- Indexes for table `doctorlog`
--
ALTER TABLE `doctorlog`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `patientlog`
--
ALTER TABLE `patientlog`
  ADD PRIMARY KEY (`id`,`pusername`),
  ADD UNIQUE KEY `pusername` (`pusername`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD PRIMARY KEY (`drug_id`),
  ADD UNIQUE KEY `drug_id` (`drug_id`),
  ADD UNIQUE KEY `batch_no` (`batch_no`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`pres_no`),
  ADD UNIQUE KEY `pres_no` (`pres_no`),
  ADD KEY `prescription_ibfk_1` (`d_id`),
  ADD KEY `prescription_ibfk_2` (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctorlog`
--
ALTER TABLE `doctorlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pharmacy`
--
ALTER TABLE `pharmacy`
  MODIFY `drug_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=457;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `pres_no` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234562;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `patientlog` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`doc_id`) REFERENCES `doctorlog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prescription`
--
ALTER TABLE `prescription`
  ADD CONSTRAINT `prescription_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `doctorlog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prescription_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `patientlog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
