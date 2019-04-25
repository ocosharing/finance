-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2019 at 07:06 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sae`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bank_id` int(11) NOT NULL,
  `bank_name` varchar(500) NOT NULL,
  `bank_account_number` int(11) NOT NULL,
  `bank_branch` varchar(500) NOT NULL,
  `bank_swift_code` varchar(100) DEFAULT NULL,
  `rec_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bank_type`
--

CREATE TABLE `bank_type` (
  `bt_id` int(11) NOT NULL,
  `bt_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `box_receipt`
--

CREATE TABLE `box_receipt` (
  `br_id` int(11) NOT NULL,
  `br_box_id` int(11) NOT NULL,
  `br_receipt_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `catch`
--

CREATE TABLE `catch` (
  `cat_id` int(11) NOT NULL,
  `cat_price` varchar(500) NOT NULL,
  `cat_by` enum('cash','cheque') NOT NULL,
  `cat_date` date NOT NULL,
  `cat_reason` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `rec_id` int(11) NOT NULL,
  `rec_supplier` varchar(500) NOT NULL,
  `rec_address` varchar(500) NOT NULL,
  `rec_date` date NOT NULL,
  `rec_user_id` int(11) NOT NULL,
  `rec_price_text` varchar(500) NOT NULL,
  `rec_cheque_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `receipt_statement`
--

CREATE TABLE `receipt_statement` (
  `stat_id` int(11) NOT NULL,
  `stat_details` varchar(500) NOT NULL,
  `stat_price` float NOT NULL,
  `stat_rec_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `receipt_type`
--

CREATE TABLE `receipt_type` (
  `rec_type_id` int(11) NOT NULL,
  `rec_type_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `password`, `create_time`, `user_id`) VALUES
('ادارة النظام', 'amsf@amsf.com', '123', '0000-00-00 00:00:00', 140);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `bank_type`
--
ALTER TABLE `bank_type`
  ADD PRIMARY KEY (`bt_id`);

--
-- Indexes for table `box_receipt`
--
ALTER TABLE `box_receipt`
  ADD PRIMARY KEY (`br_id`,`br_box_id`,`br_receipt_id`);

--
-- Indexes for table `catch`
--
ALTER TABLE `catch`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`rec_id`);

--
-- Indexes for table `receipt_statement`
--
ALTER TABLE `receipt_statement`
  ADD PRIMARY KEY (`stat_id`);

--
-- Indexes for table `receipt_type`
--
ALTER TABLE `receipt_type`
  ADD PRIMARY KEY (`rec_type_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bank_type`
--
ALTER TABLE `bank_type`
  MODIFY `bt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `catch`
--
ALTER TABLE `catch`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receipt_type`
--
ALTER TABLE `receipt_type`
  MODIFY `rec_type_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
