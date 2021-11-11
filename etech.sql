-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2021 at 08:56 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etech`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`email`, `password`, `fname`, `lname`, `phone`) VALUES
('test9@test.com', '$2y$10$8C.apYRiyxeZ5EAfjnghsunu7AU.vr9P.WVs2ROAFSAjYwZ3uVRIW', 'sengdavone', 'soukthavilay', '0805714652'),
('test10@test.com', '$2y$10$gevmq.cENAm8ux9Akt30guXqTP.qpNvpRpKZde3Pm7DpkJxoAj.B6', 'lee', 'soukthavilay', '0805714652'),
('lee@lee.com', '$2y$10$YN5rPoS05RRkaxbUy/GCdOj8yEr62/E3Be/V/.ihaU/uioj2UQa0W', 'sengdavone', 'soukthavilay', '0887776666');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
