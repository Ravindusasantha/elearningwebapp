-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2020 at 04:04 PM
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
-- Database: `elearning_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `paper` varchar(100) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `grade`, `subject`, `paper`, `question`, `answer`) VALUES
(222, '10', 'science', '2017', '1', '2'),
(223, '10', 'science', '2017', '2', '1'),
(224, '10', 'science', '2017', '3', '2'),
(225, '10', 'science', '2017', '4', '3'),
(226, '10', 'science', '2017', '5', '4'),
(227, '10', 'science', '2017', '6', '1'),
(228, '10', 'science', '2017', '7', '3'),
(229, '10', 'science', '2017', '8', '2'),
(230, '10', 'science', '2017', '9', '4'),
(231, '10', 'science', '2017', '10', '3'),
(232, '10', 'science', '2017', '11', '1'),
(233, '10', 'science', '2017', '12', '2'),
(234, '10', 'science', '2017', '13', '2'),
(235, '10', 'science', '2017', '14', '1'),
(236, '10', 'science', '2017', '15', '4'),
(237, '10', 'science', '2017', '16', '3'),
(238, '10', 'science', '2017', '17', '4'),
(239, '10', 'science', '2017', '18', '1'),
(240, '10', 'science', '2017', '19', '1'),
(241, '10', 'science', '2017', '20', '4'),
(242, '10', 'science', '2017', '21', '3'),
(243, '10', 'science', '2017', '22', '2'),
(244, '10', 'science', '2017', '23', '2'),
(245, '10', 'science', '2017', '24', '3'),
(246, '10', 'science', '2017', '25', '1'),
(247, '10', 'science', '2017', '26', '3'),
(248, '10', 'science', '2017', '27', '2'),
(249, '10', 'science', '2017', '28', '3'),
(250, '10', 'science', '2017', '29', '2'),
(251, '10', 'science', '2017', '30', '4'),
(252, '10', 'science', '2017', '31', '1'),
(253, '10', 'science', '2017', '32', '2'),
(254, '10', 'science', '2017', '33', '4'),
(255, '10', 'science', '2017', '34', '2'),
(256, '10', 'science', '2017', '35', '1'),
(257, '10', 'science', '2017', '36', '2'),
(258, '10', 'science', '2017', '37', '3'),
(259, '10', 'science', '2017', '38', '1'),
(260, '10', 'science', '2017', '39', '2'),
(261, '10', 'science', '2017', '40', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=262;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
