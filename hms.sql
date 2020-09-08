-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2020 at 06:57 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `dob` datetime NOT NULL,
  `id_no` int(11) NOT NULL,
  `telephone_no` int(11) NOT NULL,
  `telephone_no2` int(11) NOT NULL,
  `medical_coverage` text NOT NULL,
  `mail` varchar(30) NOT NULL,
  `physical_address` text NOT NULL,
  `document_type` tinyint(1) NOT NULL,
  `document_expiration` datetime NOT NULL,
  `document_name` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `group_permission`
--

CREATE TABLE `group_permission` (
  `group_id` int(11) NOT NULL,
  `perm_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_permission`
--

INSERT INTO `group_permission` (`group_id`, `perm_id`) VALUES
(2, 2),
(2, 3),
(2, 1),
(3, 4),
(3, 3),
(4, 2),
(4, 5),
(1, 2),
(1, 4),
(1, 3),
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `group_sub_blocklist`
--

CREATE TABLE `group_sub_blocklist` (
  `group_id` int(11) NOT NULL,
  `perm_id` int(11) NOT NULL,
  `sub_perm_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_sub_blocklist`
--

INSERT INTO `group_sub_blocklist` (`group_id`, `perm_id`, `sub_perm_id`) VALUES
(2, 2, 6),
(2, 1, 1),
(2, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `dob` datetime NOT NULL,
  `marital_status` tinyint(1) NOT NULL,
  `nationality` tinyint(1) NOT NULL,
  `document_type` tinyint(1) NOT NULL,
  `number` int(11) NOT NULL,
  `country` tinyint(1) NOT NULL,
  `city` tinyint(1) NOT NULL,
  `address` text NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `company` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL,
  `vehicle` varchar(20) NOT NULL,
  `registration` varchar(20) NOT NULL,
  `observations` varchar(20) NOT NULL,
  `creation_date` datetime NOT NULL,
  `deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `perm_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `perm_desc`) VALUES
(1, 'Manage Users'),
(2, 'Manage Employee'),
(3, 'Manage Guest'),
(4, 'Manage Extras'),
(5, 'Manage Rates');

-- --------------------------------------------------------

--
-- Table structure for table `permission_subpermission`
--

CREATE TABLE `permission_subpermission` (
  `perm_id` int(11) NOT NULL,
  `sub_perm_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission_subpermission`
--

INSERT INTO `permission_subpermission` (`perm_id`, `sub_perm_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 4),
(2, 5),
(2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `subpermissions`
--

CREATE TABLE `subpermissions` (
  `id` int(11) NOT NULL,
  `sub_permission` varchar(255) NOT NULL,
  `sub_perm_label` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subpermissions`
--

INSERT INTO `subpermissions` (`id`, `sub_permission`, `sub_perm_label`) VALUES
(1, 'Add User', 'Add User'),
(2, 'Edit User', 'Edit User'),
(3, 'Delete User', 'Delete User'),
(4, 'Add Employee', 'Add Employee'),
(5, 'Edit Employee', 'Edit Employee'),
(6, 'Delete Employee', 'Delete Employee');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `sector` int(11) NOT NULL,
  `site_login` tinyint(1) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `user_name`, `password`, `sector`, `site_login`, `deleted`) VALUES
(1, 'Admin', 'admin', '12345', 3, 1, 0),
(2, 'Governor', 'governor', '123', 2, 1, 0),
(3, 'Reception', 'reception', '123', 2, 1, 0),
(4, 'Manager', 'manager', '123', 2, 1, 0),
(5, 'Admin1', 'admin1', '12345', 2, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(20) NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`, `deleted`) VALUES
(1, 'Admin', 0),
(2, 'Reception', 0),
(3, 'Management', 0),
(4, 'Governor', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subpermissions`
--
ALTER TABLE `subpermissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subpermissions`
--
ALTER TABLE `subpermissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
