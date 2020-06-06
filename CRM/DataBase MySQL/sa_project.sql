-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 01:46 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sw_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaint_id` int(11) NOT NULL,
  `Complaint_header` varchar(128) NOT NULL,
  `Complaint` text NOT NULL,
  `customer_id` int(11) NOT NULL,
  `complaint_state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaint_id`, `Complaint_header`, `Complaint`, `customer_id`, `complaint_state`) VALUES
(116, '1111eqweq', 'qeqwrqweqweqwe', 1, 1),
(117, ' hahah', 'hahahahahamn ', 1, 1),
(118, 'lag', 'fa;slfjkka', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `connection`
--

CREATE TABLE `connection` (
  `connection_id` int(11) NOT NULL,
  `connection_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `connection`
--

INSERT INTO `connection` (`connection_id`, `connection_type`) VALUES
(1, 'WireLess'),
(2, 'DialUp'),
(3, 'BroadBand');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `c_id` int(11) NOT NULL,
  `c_Name` text NOT NULL,
  `c_of_user` int(11) NOT NULL,
  `c_isp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`c_id`, `c_Name`, `c_of_user`, `c_isp`) VALUES
(0, 'egypt', 33334, 0);

-- --------------------------------------------------------

--
-- Table structure for table `isp`
--

CREATE TABLE `isp` (
  `isp_name` text NOT NULL,
  `isp_id` int(11) NOT NULL,
  `isp_plans` int(11) NOT NULL,
  `isp_of_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `isp`
--

INSERT INTO `isp` (`isp_name`, `isp_id`, `isp_plans`, `isp_of_users`) VALUES
('tedata', 0, 1, 33334);

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `plan_id` int(11) NOT NULL,
  `plan_name` varchar(128) NOT NULL,
  `speed_limits` varchar(128) NOT NULL,
  `cost` varchar(32) NOT NULL,
  `duration` date NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`plan_id`, `plan_name`, `speed_limits`, `cost`, `duration`, `c_id`) VALUES
(1, 'megaplus', '16', '185', '0000-00-00', 33334),
(2, '', '', '', '0000-00-00', 33334),
(4, 'megaplus', '16', '185', '0000-00-00', 4544);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `users_id` int(20) NOT NULL,
  `Report` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `type_id` int(20) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`type_id`, `type`) VALUES
(1, 'Admin'),
(2, 'customer'),
(3, 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `solution`
--

CREATE TABLE `solution` (
  `solution_id` int(11) NOT NULL,
  `solution` varchar(128) NOT NULL,
  `Rate` varchar(10000) NOT NULL,
  `complaint_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `solution`
--

INSERT INTO `solution` (`solution_id`, `solution`, `Rate`, `complaint_id`, `customer_id`) VALUES
(1, 'd,;a,sd;al,', '1', 116, 0),
(18, 'dfhhnuyn', '1', 117, 1),
(19, 'restart', '2', 118, 1);

-- --------------------------------------------------------

--
-- Table structure for table `type_conn_isp`
--

CREATE TABLE `type_conn_isp` (
  `id` int(11) NOT NULL,
  `conn_id` int(11) NOT NULL,
  `isp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_type_id` int(20) NOT NULL,
  `connection_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fname`, `lname`, `email`, `user_type_id`, `connection_type_id`) VALUES
(0, 'admin', 'admin', 'admin', 'admin', 'admin@gmaill.com', 1, 1),
(1, 'ali', 'ali', 'ali', 'ali', 'aliy.mahmoud00@gmail.com', 2, 1),
(2, 'aliy', 'aliy', 'aliy', 'aliy', 'alimostfa2000@hotmail.com', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaint_id`),
  ADD UNIQUE KEY `complaint_id` (`complaint_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `connection`
--
ALTER TABLE `connection`
  ADD PRIMARY KEY (`connection_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `c_id` (`c_id`),
  ADD KEY `c_of_user` (`c_of_user`),
  ADD KEY `c_isp` (`c_isp`);

--
-- Indexes for table `isp`
--
ALTER TABLE `isp`
  ADD PRIMARY KEY (`isp_id`),
  ADD UNIQUE KEY `isp_id` (`isp_id`),
  ADD KEY `isp_plans` (`isp_plans`),
  ADD KEY `isp_of_users` (`isp_of_users`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`plan_id`),
  ADD UNIQUE KEY `plan_id` (`plan_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`users_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `solution`
--
ALTER TABLE `solution`
  ADD PRIMARY KEY (`solution_id`),
  ADD KEY `complaint_id` (`complaint_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `type_conn_isp`
--
ALTER TABLE `type_conn_isp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conn_id` (`conn_id`),
  ADD KEY `isp_id` (`isp_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_type_id` (`user_type_id`),
  ADD KEY `connection_type_id` (`connection_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `plan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `type_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `solution`
--
ALTER TABLE `solution`
  MODIFY `solution_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `complaint_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `country`
--
ALTER TABLE `country`
  ADD CONSTRAINT `country_ibfk_2` FOREIGN KEY (`c_isp`) REFERENCES `isp` (`isp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `isp`
--
ALTER TABLE `isp`
  ADD CONSTRAINT `isp_ibfk_2` FOREIGN KEY (`isp_plans`) REFERENCES `plan` (`plan_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `solution`
--
ALTER TABLE `solution`
  ADD CONSTRAINT `solution_ibfk_1` FOREIGN KEY (`complaint_id`) REFERENCES `complaint` (`complaint_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `solution_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `type_conn_isp`
--
ALTER TABLE `type_conn_isp`
  ADD CONSTRAINT `type_conn_isp_ibfk_1` FOREIGN KEY (`conn_id`) REFERENCES `connection` (`connection_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `type_conn_isp_ibfk_2` FOREIGN KEY (`isp_id`) REFERENCES `isp` (`isp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_type_id`) REFERENCES `roles` (`type_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`connection_type_id`) REFERENCES `connection` (`connection_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
