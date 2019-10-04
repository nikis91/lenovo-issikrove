-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 04, 2019 at 06:03 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projektas`
--

-- --------------------------------------------------------

--
-- Table structure for table `pragyvenimas`
--

CREATE TABLE `pragyvenimas` (
  `ID` int(11) NOT NULL,
  `Produkto pavadinimas` varchar(20) NOT NULL,
  `Kiekis` varchar(20) NOT NULL,
  `Kaina` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pragyvenimas`
--

INSERT INTO `pragyvenimas` (`ID`, `Produkto pavadinimas`, `Kiekis`, `Kaina`) VALUES
(1, 'Pienas', '1l', '1.21€'),
(2, 'Šviežia balta duona', '1 vnt.', '1.53€'),
(3, 'Ryžiai', '1 kg', '1.71€'),
(4, 'Kiaušiniai', '12 vnt.', '3.23€');

-- --------------------------------------------------------

--
-- Table structure for table `pragyvenimas2`
--

CREATE TABLE `pragyvenimas2` (
  `ID` int(11) NOT NULL,
  `Produkto pavadinimas` varchar(20) NOT NULL,
  `Kiekis` varchar(20) NOT NULL,
  `Kaina` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pragyvenimas2`
--

INSERT INTO `pragyvenimas2` (`ID`, `Produkto pavadinimas`, `Kiekis`, `Kaina`) VALUES
(1, 'Pienas', '1l', '0.86€'),
(2, 'Šviežia balta duona', '1 vnt.', '1.06€'),
(3, 'Ryžiai', '1 kg', '1.57€'),
(4, 'Kiaušiniai', '12 vnt.', '1.59€');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pragyvenimas`
--
ALTER TABLE `pragyvenimas`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pragyvenimas2`
--
ALTER TABLE `pragyvenimas2`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pragyvenimas`
--
ALTER TABLE `pragyvenimas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pragyvenimas2`
--
ALTER TABLE `pragyvenimas2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
