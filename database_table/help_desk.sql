-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2021 at 07:43 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `help_desk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`password`) VALUES
('12345');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `sn` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `dates` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`sn`, `email`, `message`, `dates`, `status`) VALUES
(4, 'shahabuddeenibrahim1@gmail.com', 'When will you start your services?', '06/10/2021', 'done'),
(12, 'habibu@gmail.com', 'how can i get the admission form ?', '10/10/2021', 'done'),
(13, 'saminu@gmail.com', 'menene sunanka?', '10/10/2021', 'done'),
(14, 'shahabuddeenibrahim1@gmail.com', 'hello', '10/10/2021', 'done'),
(15, 'haruna@gmail.com', 'hahslk', '10/10/2021', 'yet'),
(16, 'shahabuddeenibrahim1@gmail.com', 'how are you', '10/10/2021', 'done'),
(17, 'shahabuddeenibrahim1@gmail.com', 'iuui', '11/10/2021', 'yet'),
(18, 'haruna@gmail.com', 'ddf', '11/10/2021', 'done'),
(19, 'haruna@gmail.com', 'hgh', '11/10/2021', 'yet');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `replies` varchar(5000) NOT NULL,
  `queries` varchar(5000) NOT NULL,
  `sn` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`replies`, `queries`, `sn`) VALUES
('on 27th September, 2020', 'when will the Registration commence?', 6),
('180 above', 'Who is the VC o3eeeef GSU', 7),
('Prof. Abdullahi Mahdi', 'Who is the Vice Chancellor (VC) of Kashere', 8),
('180 above', 'What is the Jamb Code of MArk of Kashere', 9),
('on 10 October 2021', 'when will the Registration commence?', 10),
('Morning How Are you?', 'Good morning', 11),
('Waalaikumusssalam', 'Assalamu alaikum', 12),
('you can get the admission form online via the school portal fuk.edu.ng', 'how can i get the admission form ?', 13),
('Sunana Shahabuddeen', 'menene sunanka?', 14),
('Sunana Habibu', 'menene sunanka?', 15),
('visit the school portal', 'how can i get the admission form ?', 16),
('from monday to friday', 'When will you start your services?', 17),
('hey hw are you?', 'hello', 18),
('Sunana Shahabuddeen', 'ddf', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `sn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
