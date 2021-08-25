-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2021 at 10:50 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topup_balance`
--

-- --------------------------------------------------------

--
-- Table structure for table `lunas`
--

CREATE TABLE `lunas` (
  `id` int(11) NOT NULL,
  `no_order` varchar(50) NOT NULL,
  `status` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lunas`
--

INSERT INTO `lunas` (`id`, `no_order`, `status`) VALUES
(7, '1629875516', 'lunas');

-- --------------------------------------------------------

--
-- Table structure for table `prepaid_balance`
--

CREATE TABLE `prepaid_balance` (
  `id` int(11) NOT NULL,
  `mobile_number` varchar(35) NOT NULL,
  `value` varchar(50) NOT NULL,
  `date` int(11) NOT NULL,
  `no_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prepaid_balance`
--

INSERT INTO `prepaid_balance` (`id`, `mobile_number`, `value`, `date`, `no_order`) VALUES
(7, '087947689000', '10000', 1629876551, 1629876551),
(8, '087947689462', '10000', 1629877425, 1629877425),
(9, '0999900093', '50000', 1629877490, 1629877490),
(10, '087947689462', '50000', 1629878433, 1629878433),
(11, '087947689010', '50000', 1629878723, 1629878723),
(12, '222222', '10000', 1629878751, 1629878751),
(13, '087947689462', '50000', 1629880510, 1629880510);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product` varchar(56) NOT NULL,
  `address` varchar(128) NOT NULL,
  `price` char(30) NOT NULL,
  `date` int(11) NOT NULL,
  `no_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product`, `address`, `price`, `date`, `no_order`) VALUES
(5, 'hmm', 'Tng', '200000', 1629872848, 1629872848),
(6, 'aya', 'TNG', '100000', 1629872931, 1629872931),
(7, 'barang', 'tangerang', '100000', 1629875516, 1629875516),
(8, 'Tshirt', 'Bekasi', '120000', 1629876580, 1629876580),
(9, 'Barang', 'Tangerang', '100000', 1629877440, 1629877440),
(10, 'satu brg', 'Tangerang', '20000', 1629877519, 1629877519),
(11, 'asfseg', 'gsdgg', '200000', 1629878439, 1629878439),
(12, 'Asssss', 'TNG IND', '200000', 1629878736, 1629878736),
(13, 'H34', 'Asia', '100000', 1629878763, 1629878763),
(14, '123BR', 'Tangerang', '100000', 1629880119, 1629880119),
(15, 'adad', 'adad', '100000', 1629880517, 1629880517);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(56) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `password`) VALUES
(1, 'Yusuf Aryadilla', 'aryaherby29nov2k@gmail.com', '$2y$10$yvZOxPg36YGiZ9qtaJCopezNeq0mqnwGqpOHgB9NRx.uhv5s5XNRq'),
(4, 'Nana predator', 'nana@gmail.com', '$2y$10$m75cuCWjAw.ddzZflG6W/O5aHoF6.GPFI6dbuPkic5XT2y.xmwkqm');

-- --------------------------------------------------------

--
-- Table structure for table `value`
--

CREATE TABLE `value` (
  `id` int(11) NOT NULL,
  `price` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `value`
--

INSERT INTO `value` (`id`, `price`) VALUES
(1, '10000'),
(2, '50000'),
(3, '100000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lunas`
--
ALTER TABLE `lunas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prepaid_balance`
--
ALTER TABLE `prepaid_balance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `value`
--
ALTER TABLE `value`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lunas`
--
ALTER TABLE `lunas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `prepaid_balance`
--
ALTER TABLE `prepaid_balance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `value`
--
ALTER TABLE `value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
