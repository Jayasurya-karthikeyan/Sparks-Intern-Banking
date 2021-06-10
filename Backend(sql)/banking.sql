-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 05:01 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` varchar(5) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Account_No` varchar(15) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile_No` varchar(10) NOT NULL,
  `Current_Balance` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `Name`, `Account_No`, `Email`, `Mobile_No`, `Current_Balance`) VALUES
('1', 'Karthikeyan', '243615832147', 'karthikeyan@gmail.com', '8532215323', '219299'),
('2', 'Jayasurya', '151648461461', 'jayasurya@gmail.com', '9566548425', '87343'),
('3', 'Akshat', '523681235', 'akshatmaheshwar@gmail.com', '8654231573', '80574'),
('4', 'Sandesh', '564746893142', 'sandesh@gmail.com', '6511846823', '64723'),
('5', 'Sharwin', '457896315536', 'Sharwin@gmail.com', '7564892314', '766559'),
('6', 'Logavishwan', '123644897523', 'logavishwan@gmail.com', '8964235174', '58240'),
('7', 'Chandru', '456872135489', 'chandru@gmail.com', '7586421488', '73831'),
('8', 'Manoj', '564321025784', 'manoj@licet.ac.in', '6547891256', '75962'),
('9', 'Aravind', '123654702154', 'aravind@gmail.com', '5468731024', '68754'),
('10', 'VijayaLakshmi', '546231544864', 'vijayalakshmi@gmail.com', '8654721368', '148332'),
('11', 'Sivaraj A', '354454156487', 'sivaraj@gmail.com', '9767543215', '648760'),
('15', 'ram', '856320497531', 'ram@gmail.com', '8423123494', '221316');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sender` varchar(50) DEFAULT NULL,
  `receiver` varchar(50) DEFAULT NULL,
  `amount` varchar(50) DEFAULT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sender`, `receiver`, `amount`, `timestamp`) VALUES
('Akshat', 'Jayasurya', '1001', '2021-05-23 00:00:00'),
('Akshat', 'Jayasurya', '12359', '2021-06-06 16:12:04'),
('Sandesh', 'Chandru', '252', '2021-06-06 16:23:42'),
('Jayasurya', 'Akshat', '12354', '2021-06-06 16:25:06'),
('Karthikeyan', 'Jayasurya', '10000', '2021-06-06 20:51:11'),
('Karthikeyan', 'Jayasurya', '1000', '2021-06-07 20:05:59'),
('Karthikeyan', 'Jayasurya', '1000', '2021-06-07 20:06:32'),
('Chandru', 'Sivaraj', '1500', '2021-06-07 20:21:54'),
('Logavishwan', 'Jayasurya', '1000', '2021-06-08 00:18:09'),
('Akshat', 'Sivaraj', '2050', '2021-06-08 00:23:44'),
('Akshat', 'Chandru', '2001', '2021-06-08 00:24:03'),
('Karthikeyan', 'Chandru', '10000', '2021-06-08 00:28:01'),
('Sivaraj', 'Chandru', '500', '2021-06-08 00:28:28'),
('Jayasurya', 'VijayaLakshmi', '100000', '2021-06-08 01:02:42'),
('VijayaLakshmi', 'Jayasurya', '10000', '2021-06-08 01:04:43'),
('Karthikeyan', 'VijayaLakshmi', '2000', '2021-06-09 11:43:32'),
('ram', 'Jayasurya', '25000', '2021-06-09 11:46:47'),
('Jayasurya', 'Logavishwan', '5000', '2021-06-09 11:54:09'),
('ram', 'Logavishwan', '3000', '2021-06-09 13:25:37'),
('ram', 'Manoj', '1000', '2021-06-09 13:29:18'),
('VijayaLakshmi', 'Chandru', '100', '2021-06-09 14:34:07'),
('Karthikeyan', 'Sharwin', '250', '2021-06-09 18:15:22'),
('Manoj', 'Sharwin', '500', '2021-06-09 19:04:30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
