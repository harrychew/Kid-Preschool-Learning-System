-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2019 at 11:19 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pre_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `name` varchar(100) NOT NULL,
  `score` int(10) NOT NULL,
  `date` datetime(4) NOT NULL DEFAULT CURRENT_TIMESTAMP(4)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`name`, `score`, `date`) VALUES
('peter', 8, '2019-01-27 15:21:17.4976'),
('harry', 8, '2019-01-27 15:22:28.4047'),
('harry', 8, '2019-01-27 15:22:57.4780'),
('peter', 10, '2019-01-27 15:27:18.2785'),
('peter', 10, '2019-01-27 15:27:35.8767'),
('peter', 10, '2019-01-27 15:28:13.9795'),
('peter', 10, '2019-01-27 15:31:03.9186'),
('rere', 11, '2019-01-27 15:32:03.5430'),
('', 0, '2019-01-27 15:32:49.2172'),
('', 0, '2019-01-27 16:01:09.1843'),
('peter', 6, '2019-01-27 18:00:45.9942');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(10) NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT 'Guest',
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_number` int(10) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `newsletter` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `name`, `username`, `password`, `email`, `contact_number`, `photo`, `gender`, `newsletter`) VALUES
(100005, 'harry', 'user1', '1234', 'harry@email.com', 2131321, 'FB_IMG_1436398874400.jpg', 'male', 'yes'),
(100006, 'karen', 'karen', '1234', 'karen@email.com', 1231231231, 'FB_IMG_1439031989614.jpg', 'female', 'no'),
(100007, 'aaron cheong ', 'aaron', '1234', 'aaron@email.com', 65465, 'FB_IMG_1444792384806.jpg', 'male', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100008;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
