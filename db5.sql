-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2026 at 05:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db5`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `date`, `category`, `location`, `description`) VALUES
(3, 'efes ', '0000-00-00', 'Fash', 'WKD K kwdhWK IS Ah', 'uwdi j uDyiawydoi oawydoDJWH'),
(4, 'abc', '0000-00-00', 'ere ', 'r etr gtjehrh', 'essees tyrht '),
(5, 'xvt', '0000-00-00', 'fash', 'WKD K kwdhWK IS Ah', 'uwdi j uDyiawydoi oawydoDJWH'),
(6, 'xvt', '0000-00-00', 'ELEC', 'WKD K kwdhWK IS Ah', 'uwdi j uDyiawydoi oawydoDJWH');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `phone`, `password`) VALUES
(1, 'Disha', 'zd', 'moredisha098@gmail.com', 2147483647, '$2y$10$kR.OdJsrMIDDI5sWaqAhZeNKZ1qjU.96CdS7M8ze.DeQbirhcWYIW'),
(2, 'Disha', 'zd', 'moredisha098@gmail.com', 2147483647, '$2y$10$88DoRNe3iGEBWM7KIIc9y.o5tl6Wdm3QgU2w4JYfsI5vVB5uVJcpe'),
(3, '', '', '', 0, '$2y$10$1LrTlPeWtgyZVis73o/thusfI2BECl8olHuLJCruhwpqLpVP90GjG'),
(4, '', '', '', 0, '$2y$10$lPdBGOPZ5XZbInw4ubG7jeJBiPebfcULzelksrO.K0oOz66NssDgK'),
(5, '', '', '', 0, '$2y$10$O4.D.kA19l0w6xCjPTRG9OUeRHFIH0S84BPmriz1Fed8SQds3cmoe'),
(6, 'Disha', 'Disha', 'moredisha098@gmail.com', 2147483647, '$2y$10$/hOuty6xGIsbDhp5BQN/CupGH1KLJobfaqxurqPkDDLyKU/fuRbre'),
(7, '', '', '', 0, '$2y$10$1bUVn/KuawuDxDKS7faVaevS0hyXt/sHXICQ/qysMv7q1m.ts5xZm'),
(8, '', '', '', 0, '$2y$10$uOx9iWLDGhCoqZ3O3A1/UOkfAhILskHFcSQBQbxjMJw0FqMmvGdyW'),
(9, '', '', '', 0, '$2y$10$6pTbkrGilzfHY0l9kpI7m.vdi4PRmG7TYU6iR7DIq9zBkkH2nr05W'),
(10, '', '', '', 0, '$2y$10$WafgL1BIJIWv7Cp6kFS48uvNrLcIQ3uDpvtMwuoCYcAtnx7svBXsy'),
(11, '', '', '', 0, '$2y$10$SmLhg1ZdqlChmx2j5ZIAc.ZZD3T960EMyB4ehJZKgF5F8iIpfIt4K'),
(12, '', '', '', 0, '$2y$10$JNc6/MfZNj7ESeb8FI/SOOXkcgVNRKFZK.aWkE7YaPDYxmAshZ3TW'),
(13, '', '', '', 0, '$2y$10$.EOWI3Mwv6n7reFUV4yXX.lhVxy133PSAKZIMQEJVliBM.XjbPDhK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
