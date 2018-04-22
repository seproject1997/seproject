-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 22, 2018 at 02:56 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SE`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

DROP TABLE IF EXISTS `course_details`;
CREATE TABLE `course_details` (
  `course_name` varchar(80) NOT NULL,
  `credits` int(2) NOT NULL,
  `semester` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_details`
--

INSERT INTO `course_details` (`course_name`, `credits`, `semester`) VALUES
('Analysis of Algorithms', 3, 5),
('Analysis of Algorithms Lab', 1, 5),
('Artificial Intelligence', 3, 6),
('Compiler Design', 4, 6),
('Complex Variables and Transforms', 4, 3),
('Computer Aided Design for Computer', 4, 3),
('Computer Graphics', 3, 5),
('Computer Networks', 3, 5),
('Computer Organization and Architecture', 4, 5),
('Computer Programming', 4, 2),
('Cryptography and Network Security', 3, 6),
('Data Mining and Warehouse', 3, 6),
('Data Structures Using C', 4, 4),
('Database systems', 4, 4),
('Digital Design', 4, 3),
('Discrete Mathematics', 4, 3),
('Electrical Sciences', 3, 2),
('Engineering Chemistry', 3, 1),
('Engineering Graphics', 4, 1),
('Engineering Mathematics-I', 4, 1),
('Engineering Mathematics-II', 4, 2),
('Engineering Physics', 3, 1),
('English', 4, 1),
('Environmental Science', 3, 3),
('General Biology', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_details`
--
ALTER TABLE `course_details`
  ADD PRIMARY KEY (`course_name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
