-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2022 at 12:16 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `name`, `department`, `email`, `address`, `status`) VALUES
(13, 'test name1', 'cse', 't1@gmail.com', 'Dhaka', '2'),
(15, 'Abdul Kader Zilani', 'Civil', 'abdul@gmail.com', 'Dhaka', '1'),
(16, 'Saif Bhuiyan', 'EEE', 't5@gmail.com', 'Dhaka', '2'),
(17, 'Abdul Kader Zilani', 'cse', 'abdul@gmail.com', 'Dhaka', '1'),
(20, 'Saif Bhuiyan', 'eee', 't2@gmail.com', 'uttara', '2'),
(21, 'Saif Bhuiyan', 'eee', 't2@gmail.com', 'uttara', '1'),
(22, 'Saif Bhuiyan', 'eee', 't2@gmail.com', 'uttara', '1'),
(23, 'Saif Bhuiyan', 'eee', 't2@gmail.com', 'uttara', '2'),
(24, 'Saif Bhuiyan', 'eee', 't2@gmail.com', 'uttara', '2'),
(25, 'Saif Bhuiyan', 'eee', 't2@gmail.com', 'uttara', '2'),
(26, 'Saif Bhuiyan', 'eee', 't2@gmail.com', 'uttara', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
