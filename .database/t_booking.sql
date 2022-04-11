-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2022 at 02:49 PM
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
-- Database: `t_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_ad` int(11) NOT NULL,
  `name_ad` varchar(25) NOT NULL,
  `lastname_em` varchar(25) NOT NULL,
  `uname_em` varchar(25) NOT NULL,
  `pass_em` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_ad`, `name_ad`, `lastname_em`, `uname_em`, `pass_em`) VALUES
(1, 'admin', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_cm` int(11) NOT NULL,
  `id_code` varchar(13) NOT NULL,
  `name_cm` varchar(50) NOT NULL,
  `lastname_cm` varchar(50) NOT NULL,
  `uname_cm` varchar(25) NOT NULL,
  `tel_cm` varchar(10) NOT NULL,
  `pass_cm` varchar(25) NOT NULL,
  `status_cm` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_cm`, `id_code`, `name_cm`, `lastname_cm`, `uname_cm`, `tel_cm`, `pass_cm`, `status_cm`) VALUES
(1, '1339900662224', 'SOMPHOL', 'WILA', 'user', '0971271931', 'user', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id_em` int(11) NOT NULL,
  `name_em` varchar(50) NOT NULL,
  `lastname_em` varchar(50) NOT NULL,
  `uname_em` varchar(25) NOT NULL,
  `tel_em` varchar(10) NOT NULL,
  `pass_em` varchar(25) NOT NULL,
  `status_em` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservation_tb`
--

CREATE TABLE `reservation_tb` (
  `id_re` int(11) NOT NULL,
  `id_cm` int(11) NOT NULL,
  `id_tb` int(11) NOT NULL,
  `people_sum` varchar(10) NOT NULL,
  `date_re` date NOT NULL,
  `timeStart_re` time NOT NULL,
  `timeEnd_re` time NOT NULL,
  `create_time` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status_re` varchar(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation_tb`
--

INSERT INTO `reservation_tb` (`id_re`, `id_cm`, `id_tb`, `people_sum`, `date_re`, `timeStart_re`, `timeEnd_re`, `create_time`, `status_re`) VALUES
(5, 1, 1, '4', '2022-04-10', '16:00:00', '18:00:00', '2022-04-10 22:55:25', '0'),
(6, 1, 1, '4', '2022-04-12', '16:00:00', '18:00:00', '2022-04-10 22:55:50', '0'),
(7, 1, 1, '4', '2022-04-11', '16:00:00', '18:00:00', '2022-04-10 22:55:53', '0'),
(9, 1, 1, '3', '2022-04-20', '16:00:00', '18:00:00', '2022-04-10 22:59:02', '0'),
(10, 1, 1, '4', '2022-04-10', '18:01:00', '19:41:00', '2022-04-10 22:59:32', '0'),
(11, 1, 1, '4', '2022-04-10', '21:00:00', '22:40:00', '2022-04-10 23:00:17', '0'),
(12, 1, 1, '4', '2022-04-13', '16:00:00', '18:00:00', '2022-04-11 09:26:47', '0'),
(13, 1, 1, '4', '2022-04-06', '18:20:00', '20:00:00', '2022-04-11 09:27:48', '0');

-- --------------------------------------------------------

--
-- Table structure for table `service_table`
--

CREATE TABLE `service_table` (
  `id_tb` int(11) NOT NULL,
  `zone_tb` varchar(10) NOT NULL,
  `no_tb` varchar(25) NOT NULL,
  `status_tb` varchar(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_table`
--

INSERT INTO `service_table` (`id_tb`, `zone_tb`, `no_tb`, `status_tb`) VALUES
(1, 'A', '1', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_ad`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_cm`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id_em`);

--
-- Indexes for table `reservation_tb`
--
ALTER TABLE `reservation_tb`
  ADD PRIMARY KEY (`id_re`),
  ADD KEY `q` (`id_cm`),
  ADD KEY `s` (`id_tb`);

--
-- Indexes for table `service_table`
--
ALTER TABLE `service_table`
  ADD PRIMARY KEY (`id_tb`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_ad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_cm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id_em` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation_tb`
--
ALTER TABLE `reservation_tb`
  MODIFY `id_re` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `service_table`
--
ALTER TABLE `service_table`
  MODIFY `id_tb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservation_tb`
--
ALTER TABLE `reservation_tb`
  ADD CONSTRAINT `q` FOREIGN KEY (`id_cm`) REFERENCES `customer` (`id_cm`),
  ADD CONSTRAINT `s` FOREIGN KEY (`id_tb`) REFERENCES `service_table` (`id_tb`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
