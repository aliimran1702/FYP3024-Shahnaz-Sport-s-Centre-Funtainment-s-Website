-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2024 at 09:31 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shahnaz sport center`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(40) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('AliAdmin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerName` varchar(40) NOT NULL,
  `customerAge` int(40) NOT NULL,
  `customerEmail` varchar(40) NOT NULL,
  `customerPassword` varchar(40) NOT NULL,
  `bookingDate` date NOT NULL,
  `bookingTime` time(1) NOT NULL,
  `bookingLength` int(40) NOT NULL,
  `bookingFacilities` varchar(40) NOT NULL,
  `totalPrice` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerName`, `customerAge`, `customerEmail`, `customerPassword`, `bookingDate`, `bookingTime`, `bookingLength`, `bookingFacilities`, `totalPrice`) VALUES
('Ali Imran', 20, 'ali22@gmail.com', '', '2024-03-21', '14:48:00.0', 3, 'Futsal', 45),
('Afif', 20, 'afif@gmail.com', '', '2024-04-02', '14:00:00.0', 1, 'Futsal', 15),
('Haikal', 22, 'haikal@gmail.com', '', '2024-04-02', '22:32:00.0', 3, 'Takraw', 30),
('Kamal', 37, 'kamal@gmail.com', '', '2024-04-03', '13:00:00.0', 3, 'Gym', 21);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
