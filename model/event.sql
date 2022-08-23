-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2022 at 07:54 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tours_and_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `Name` varchar(100) NOT NULL,
  `H_M_day` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `serial` int(100) NOT NULL,
  `Place_Name` varchar(100) NOT NULL,
  `Food` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`Name`, `H_M_day`, `Description`, `image`, `serial`, `Place_Name`, `Food`, `Price`) VALUES
('Dhaka to Sundarban', 'one day two night', 'Sundarbans is a mangrove area in the delta formed by the confluence of the Padma, Brahmaputra and Me', '../image/sudhrbon.jpg', 18, 'Sundarban', 'nothing', '3500tk'),
('Sundarban to Dhaka ', 'one day one night', 'nothing', '../image/Dhaka.jpg', 19, 'Sundarban', 'nothing', '3500tk'),
('Dhaka to Sajek', 'one day two night', 'Sajek Tripuri Valley is one of the most popular tourist spots in Bangladesh situated among the hills', '../image/Sajek.jpg', 20, 'Sajek', 'Sajek Tripuri Valley is one of the most popular tourist spots in Bangladesh situated among the hills', '3500tk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`serial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `serial` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
