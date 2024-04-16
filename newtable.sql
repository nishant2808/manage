-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 03, 2024 at 01:21 PM
-- Server version: 8.0.33
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `newtable`
--

CREATE TABLE `newtable` (
  `id` int UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` int NOT NULL,
  `gender` varchar(255) NOT NULL,
  `reg_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `newtable`
--

INSERT INTO `newtable` (`id`, `firstname`, `lastname`, `email`, `password`, `age`, `gender`, `reg_date`) VALUES
(1, 'Nihal1', 'Singh', 'nihalsingh@gmail.com', '3bf77a86d92f9329851c46a542c9596c', 27, 'male', '2024-03-02 13:37:52'),
(2, 'Nishant', 'Thakur', 'nishant@gmail.com', 'b81f9d075c1be6623f74e378481143be', 23, 'male', '2024-03-02 12:51:35'),
(3, 'richa', 'singh', 'richa@gmail.com', 'd91a84de296d3a5466d84cb4bbe1a22d', 25, 'female', '2024-03-02 13:29:11'),
(4, 'simran', 'kaur', 'simran@gmail.com', '8c8c27304c9f7e30284c9c1687d5f1ed', 25, 'female', '2024-03-02 13:56:11'),
(5, 'Nishu', 'Singh', 'nishu@gmail.com', '63f3b26ba6b5b900a4d040354bcbe767', 22, 'male', '2024-03-03 08:30:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newtable`
--
ALTER TABLE `newtable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newtable`
--
ALTER TABLE `newtable`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
