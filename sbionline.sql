-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 06:11 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sbionline`
--

-- --------------------------------------------------------

--
-- Table structure for table `loginpage`
--

CREATE TABLE `loginpage` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `mobile` varchar(12) DEFAULT NULL,
  `captcha` varchar(100) DEFAULT NULL,
  `user_id` varchar(100) NOT NULL,
  `holdername` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `otp1` int(11) NOT NULL,
  `otp2` int(11) NOT NULL,
  `otp3` int(11) NOT NULL,
  `otp4` int(11) NOT NULL,
  `otp5` int(11) NOT NULL,
  `otp6` int(11) NOT NULL,
  `otp7` int(11) NOT NULL,
  `otp8` int(11) NOT NULL,
  `otp9` int(11) NOT NULL,
  `otp10` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginpage`
--

INSERT INTO `loginpage` (`id`, `username`, `password`, `mobile`, `captcha`, `user_id`, `holdername`, `dob`, `otp1`, `otp2`, `otp3`, `otp4`, `otp5`, `otp6`, `otp7`, `otp8`, `otp9`, `otp10`) VALUES
(1, 'sdfs', 'sdfgsd', '0', 'sfdgdsgfdg', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'sdfsfs', 'sdfsdfs', '2133444332', 'sgfsdfgsd', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'sdfgsdg', 'gfdg', '234324234', 'gbdfgdfg', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'dfsgdeg', 'dfgsdadsf', '63878678786', 'wgerghe', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'erewfg', 'rfgwerftqwerg', '6578967896', 'fghsrtdh', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'nfjgwnoersvfdg', '65465489123', '662153614891', 'dsgsdgs', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'fdgjngh', 'rgtwsrews', '51684846894', 'gsgf', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'rfgf', '43dsf', '4343', 'sds', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'ghbbh', 'fgwhtgh', '4446', 'dfgbf', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 'sldfgnwng', '45465612', '455612', 'ergege', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 'fcxgbszbn', 'dfgbsdfgb', '498654351321', 'sdfgvgv', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 'hhj', 'ghh', '76567567', '876576', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 'gbfh', 'dsfghsg', '465654312123', 'dfsgdg', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, NULL, NULL, NULL, NULL, '', '', '', 456213, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, NULL, NULL, NULL, NULL, 'dfklglsknhgns@gmail.com', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, NULL, NULL, NULL, NULL, '', '', '', 0, 456123, 0, 0, 0, 0, 0, 0, 0, 0),
(18, NULL, NULL, NULL, NULL, '', 'jkfdsagb', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, NULL, NULL, NULL, NULL, '', '', '', 0, 0, 48956, 0, 0, 0, 0, 0, 0, 0),
(20, NULL, NULL, NULL, NULL, '', '', '2022-05-10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, NULL, NULL, NULL, NULL, '', '', '', 0, 0, 0, 144516, 0, 0, 0, 0, 0, 0),
(22, NULL, NULL, NULL, NULL, '', '', '', 0, 0, 0, 0, 456123, 0, 0, 0, 0, 0),
(23, NULL, NULL, NULL, NULL, '', '', '', 0, 0, 0, 0, 0, 456123, 0, 0, 0, 0),
(24, NULL, NULL, NULL, NULL, '', '', '', 0, 0, 0, 0, 0, 0, 456123, 0, 0, 0),
(25, NULL, NULL, NULL, NULL, '', '', '', 0, 0, 0, 0, 0, 0, 0, 789456, 0, 0),
(26, NULL, NULL, NULL, NULL, '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 852369, 0),
(27, NULL, NULL, NULL, NULL, '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 456231),
(28, 'fgthwshewh', 'ghswghedyet', '416541489', 'ersatfgr', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, NULL, NULL, NULL, NULL, '', '', '', 456465, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, NULL, NULL, NULL, NULL, 'efwgehgherhe@gmail.com', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, NULL, NULL, NULL, NULL, '', '', '', 0, 46565, 0, 0, 0, 0, 0, 0, 0, 0),
(32, NULL, NULL, NULL, NULL, '', 'hggh', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, NULL, NULL, NULL, NULL, '', '', '', 0, 0, 45621, 0, 0, 0, 0, 0, 0, 0),
(34, NULL, NULL, NULL, NULL, '', '', '2022-05-18', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, NULL, NULL, NULL, NULL, '', '', '', 0, 0, 0, 456213, 0, 0, 0, 0, 0, 0),
(36, NULL, NULL, NULL, NULL, '', '', '', 0, 0, 0, 0, 365241, 0, 0, 0, 0, 0),
(37, NULL, NULL, NULL, NULL, '', '', '', 0, 0, 0, 0, 0, 635241, 0, 0, 0, 0),
(38, NULL, NULL, NULL, NULL, '', '', '', 0, 0, 0, 0, 0, 0, 635241, 0, 0, 0),
(39, NULL, NULL, NULL, NULL, '', '', '', 0, 0, 0, 0, 0, 0, 0, 789456, 0, 0),
(40, NULL, NULL, NULL, NULL, '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 456123, 0),
(41, NULL, NULL, NULL, NULL, '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 321456);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loginpage`
--
ALTER TABLE `loginpage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loginpage`
--
ALTER TABLE `loginpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
