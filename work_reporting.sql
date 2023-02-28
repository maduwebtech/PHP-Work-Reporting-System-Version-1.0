-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2022 at 06:41 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `work_reporting`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `user_des` varchar(50) NOT NULL,
  `user_scale` varchar(50) NOT NULL,
  `user_res` text NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `fullname`, `user_des`, `user_scale`, `user_res`, `user_id`, `user_pass`, `user_role`) VALUES
(3, 'Muddsar Qayyum', 'Computer Programmer', 'BPS-17', 'Write and Debug Code', 'muddsar', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0),
(6, 'Smith', 'Computer Operator', 'BPS-16', 'Data Entry related work', 'smith', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1);

-- --------------------------------------------------------

--
-- Table structure for table `work_tbl`
--

CREATE TABLE `work_tbl` (
  `employee_id` int(11) NOT NULL,
  `work_desc` text NOT NULL,
  `work_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work_tbl`
--

INSERT INTO `work_tbl` (`employee_id`, `work_desc`, `work_date`) VALUES
(4, 'eeeeeeeeeeeeeeeeeeee', '0000-00-00'),
(4, 'udfjtuftyidttdyhfhmcbvbb', '2022-10-09'),
(5, 'djwsdmDBNVQdDdDWD', '2022-10-09'),
(4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2022-10-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
