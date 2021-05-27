-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 05:45 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_register_pure_coding`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `username`, `password`) VALUES
(8, '', '', '', 'Pure Coding', '0139a3c5cf42394be982e766c93f5ed0'),
(9, '', '', '', 'cjcotiamco', '202cb962ac59075b964b07152d234b70'),
(10, '', '', 'cjcotiamco@gmail.com', 'cjcotiamco1', '202cb962ac59075b964b07152d234b70'),
(11, '', '', 'cjcotiamco016@gmail.com', 'cjcotiamco', '202cb962ac59075b964b07152d234b70'),
(12, 'Carmel Jun ', '', 'cj@gmail.com', 'cjcotiamco112', '202cb962ac59075b964b07152d234b70'),
(13, 'Carmel Jun ', 'Cotiamco', 'cjcotiamco16@gmail.com', 'cj143', '202cb962ac59075b964b07152d234b70'),
(14, 'Baby', 'Ko', 'sikulot@gmail.com', 'kulot', '1233'),
(15, 'qwdq', 'qwd', 'qwdwdq', 'qwd', '123'),
(18, 'Jamela', 'Tiguman', 'Jamela@gmail.com', 'Jamela T', '202cb962ac59075b964b07152d234b70'),
(19, 'Aldwin', 'Zulita', 'aldwin@gmail.com', 'adlwin123', '202cb962ac59075b964b07152d234b70'),
(20, 'Jade', 'Sajol', 'jade@yahoo.com', 'Jade S', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
