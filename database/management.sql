-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2021 at 03:54 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `management`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_calendar`
--

CREATE TABLE `tb_calendar` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `group_id` int(20) NOT NULL,
  `cal_name` varchar(100) NOT NULL,
  `create_on` date NOT NULL,
  `date_time` datetime NOT NULL,
  `note` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_project`
--

CREATE TABLE `tb_project` (
  `pj_id` int(30) UNSIGNED NOT NULL,
  `pj_name` varchar(200) NOT NULL,
  `pj_note` text NOT NULL,
  `pj_status` varchar(50) NOT NULL,
  `pj_start` date NOT NULL,
  `pj_end` date NOT NULL,
  `manager_id` int(11) NOT NULL,
  `user_ids` text NOT NULL,
  `date_create` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_nick` varchar(30) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_level` int(11) DEFAULT NULL,
  `regis_date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_userinfo`
--

CREATE TABLE `tb_userinfo` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_dob` date NOT NULL,
  `user_job` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_phone` int(20) NOT NULL,
  `user_address` varchar(300) NOT NULL,
  `group_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_calendar`
--
ALTER TABLE `tb_calendar`
  ADD KEY `group_id` (`group_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tb_project`
--
ALTER TABLE `tb_project`
  ADD PRIMARY KEY (`pj_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tb_userinfo`
--
ALTER TABLE `tb_userinfo`
  ADD UNIQUE KEY `UNIQUE` (`group_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_project`
--
ALTER TABLE `tb_project`
  MODIFY `pj_id` int(30) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_userinfo`
--
ALTER TABLE `tb_userinfo`
  MODIFY `group_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_calendar`
--
ALTER TABLE `tb_calendar`
  ADD CONSTRAINT `tb_calendar_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `tb_userinfo` (`group_id`),
  ADD CONSTRAINT `tb_calendar_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`user_id`);

--
-- Constraints for table `tb_userinfo`
--
ALTER TABLE `tb_userinfo`
  ADD CONSTRAINT `tb_userinfo_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
