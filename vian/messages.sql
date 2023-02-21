-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 24, 2022 at 04:02 PM
-- Server version: 10.6.7-MariaDB-1:10.6.7+maria~focal
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_marvels`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messages_id` int(10) UNSIGNED NOT NULL,
  `cfName` varchar(255) DEFAULT NULL,
  `cfMessage` text DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `user_country` varchar(255) DEFAULT NULL,
  `create_date` varchar(255) DEFAULT NULL,
  `cfPhone` varchar(255) DEFAULT NULL,
  `cfEmail` varchar(255) DEFAULT NULL,
  `c_status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`messages_id`, `cfName`, `cfMessage`, `ip`, `user_country`, `create_date`, `cfPhone`, `cfEmail`, `c_status`) VALUES
(1, 'shad', 'sdfsd sdf sdf sdfsd fs', '1.1.1.1', 'Syria', '2022-01-28 16:24:15', '23423423', '011212@asd.asd', 1),
(2, 'asdasdas', 'asdas das dsa ', '127.0.0.1', 'Unknown', '2022-01-28 16:30:54', '131231231', '011212@asd.asd', 1),
(3, 'sdasdas', '4565054054054054', '127.0.0.1', 'Unknown', '2022-02-02 12:56:30', '46554654645', '011212@asd.asd', 1),
(4, 'name', 'message', '178.52.136.139', 'Syria', '2022-06-06 14:43:01', NULL, 'email', 0),
(5, 'name', 'message', '178.52.136.139', 'Syria', '2022-06-06 14:43:34', NULL, 'email', 0),
(6, 'testing', 'how it goes', '178.52.200.49', 'Syria', '2022-06-06 16:52:09', NULL, 'the test', 0),
(7, 'test', 'test', '178.52.30.81', 'Syria', '2022-06-07 08:05:46', NULL, 'test', 0),
(8, 'name', 'dfdf 44', '178.52.30.81', 'Syria', '2022-06-07 08:11:31', NULL, 'bakr20sarraj@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messages_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messages_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
