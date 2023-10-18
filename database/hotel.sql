-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2023 at 01:58 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `phoneno` int(11) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `cdate` date DEFAULT NULL,
  `approval` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `phoneno`, `email`, `cdate`, `approval`) VALUES
(3, 'Sydney Moagi', 789591500, 'smoagi67@gmail.com', '2023-10-16', 'Allowed');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `nation` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `usname`, `pass`) VALUES
(1, 'Admin', '1234'),
(3, 'Sydney', 'sydney');

-- --------------------------------------------------------

--
-- Table structure for table `newsletterlog`
--

CREATE TABLE `newsletterlog` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(52) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `news` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `newsletterlog`
--

INSERT INTO `newsletterlog` (`id`, `title`, `subject`, `news`) VALUES
(1, 'The user', 'Rooms', 'Good day'),
(2, 'Dies', 'Rooms', 'We are running something');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) DEFAULT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `tbed` varchar(30) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `mepr` double(8,2) DEFAULT NULL,
  `meal` varchar(30) DEFAULT NULL,
  `btot` double(8,2) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `title`, `fname`, `lname`, `troom`, `tbed`, `nroom`, `cin`, `cout`, `ttot`, `fintot`, `mepr`, `meal`, `btot`, `noofdays`) VALUES
(2, 'Mr.', 'Sydney', 'Moagi', 'Deluxe Room', 'Single', 1, '2023-10-10', '2023-10-11', 220.00, 222.20, 0.00, 'Room only', 2.20, 1),
(3, 'Mr.', 'Katlego', 'Mabuza', 'Single Room', 'Single', 1, '2023-10-13', '2023-10-14', 150.00, 151.50, 0.00, 'Room only', 1.50, 1),
(4, 'Mr.', 'Bongani Charlie', 'Mdaka', 'Deluxe Room', 'Double', 1, '2023-10-14', '2023-10-31', 3740.00, 3814.80, 0.00, 'Room only', 74.80, 17),
(5, 'Miss.', 'Thindeka', 'Muhlari', 'Deluxe Room', 'Single', 1, '2023-10-21', '2023-10-23', 440.00, 444.40, 0.00, 'Room only', 4.40, 2),
(6, 'Dr.', 'Sydney', 'Moagi', 'Superior Room', 'Double', 1, '2023-10-17', '2023-10-18', 320.00, 326.40, 0.00, 'Room only', 6.40, 1),
(7, 'Miss.', 'Thindeka', 'Muhlari', 'Single Room', 'Double', 1, '2023-10-20', '2023-10-22', 300.00, 330.00, 24.00, 'Full Board', 6.00, 2);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `tittle` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date_send` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `tittle`, `message`, `username`, `date_send`) VALUES
(1, 'aa', 'aa', 'sydney', '2023-10-16 22:42:44'),
(2, 'aa', 'aa', '', '2023-10-16 22:43:53'),
(3, 'Things are expensive', 'My bill was too high the prices should be reduced', '', '2023-10-16 22:46:05'),
(4, 'Dirty Sheets', 'i feel pity', 'aa', '2023-10-17 04:28:06'),
(5, 'Poor services', 'fhjadgfjdahfgjafhgasdhj', 'xilaveko1', '2023-10-17 15:30:06'),
(6, 'Poor services', 'fhjadgfjdahfgjafhgasdhj', 'xilaveko1', '2023-10-17 16:30:18');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `bedding` varchar(10) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `bedding`, `place`, `cusid`) VALUES
(1, 'Superior Room', 'Single', 'Free', NULL),
(2, 'Superior Room', 'Double', 'NotFree', 6),
(3, 'Superior Room', 'Triple', 'Free', NULL),
(4, 'Single Room', 'Quad', 'Free', NULL),
(5, 'Superior Room', 'Quad', 'Free', NULL),
(6, 'Deluxe Room', 'Single', 'Free', 0),
(7, 'Deluxe Room', 'Double', 'Free', 0),
(19, 'Deluxe Room', 'Triple', 'Free', NULL),
(20, 'Guest House', 'Single', 'Free', NULL),
(21, 'Single Room', 'Triple', 'Free', NULL),
(22, 'Single Room', 'Triple', 'Free', NULL),
(23, 'Superior Room', 'Double', 'NotFree', 6),
(24, 'Deluxe Room', 'Single', 'Free', NULL),
(25, 'Deluxe Room', 'Double', 'Free', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(5) DEFAULT NULL,
  `FName` text DEFAULT NULL,
  `LName` text DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `National` varchar(30) DEFAULT NULL,
  `Phone` text DEFAULT NULL,
  `TRoom` varchar(20) DEFAULT NULL,
  `Bed` varchar(10) DEFAULT NULL,
  `NRoom` varchar(2) DEFAULT NULL,
  `Meal` varchar(15) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `Title`, `FName`, `LName`, `Email`, `National`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`, `stat`, `nodays`, `date`) VALUES
(6, 'Dr.', 'Sydney', 'Moagi', 'smoagi67@gmail.com', 'Non South African', '0789591500', 'Superior Room', 'Double', '1', 'Room only', '2023-10-17', '2023-10-18', 'Conform', 1, '2023-10-17 14:43:12'),
(7, 'Miss.', 'Thindeka', 'Muhlari', 'thindeka67@gmail.com', 'South African', '+27784549041', 'Single Room', 'Double', '1', 'Full Board', '2023-10-20', '2023-10-22', 'Conform', 2, '2023-10-17 15:28:21');

-- --------------------------------------------------------

--
-- Table structure for table `tb_data`
--

CREATE TABLE `tb_data` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `nation` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_data`
--

INSERT INTO `tb_data` (`id`, `title`, `name`, `surname`, `username`, `email`, `phone`, `nation`, `password`) VALUES
(20, '', 'Sydney', 'Moagi', 'aa', 'smoagi67@gmail.com', '0789591500', 'Non South African', 'aa'),
(21, 'Dr.', 'Sydney', 'Moagi', 'Cypto', 'smoagi67@gmail.com', '0789591500', 'Non South African', 'aaaa'),
(22, 'Miss.', 'Thindeka', 'Muhlari', 'Thindeka', 'thindeka67@gmail.com', '+27784549041', 'South African', '$2y$10$uasto0N6Ia6hKTPJAyY5Bu5YQiSXKMqjtUlV/gwByRK'),
(23, 'Dr.', 'Sydney', 'Moagi', 'Sydd', 'smoagi67@gmail.com', '0789591500', 'South African', '$2y$10$FYUaLAstACyHzwPNIbrqCunR05hGAGlrCOn.DHXo49/'),
(24, 'Mrs.', 'Nesta', 'Mabuza', 'Mss', '218065477@student.uj.ac.za', '+27789591500', 'Non South African', '$2y$10$ajcV6Yp7sS2zZar9yk4QiePBKSXxuS3T.7y7syIMYmC'),
(25, 'Mr.', 'Katlego', 'Mabuza', 'Kat', 'kat@gmail.com', '0765154324', 'South African', '$2y$10$VjI2Mkoues2030Ive7INYuQMkvMY4o83qT/s9PKNE2Z'),
(26, 'Prof.', 'Sydney', 'Moagi', 'Moagi', 'smoagi67@gmail.com', '0789591500', 'South African', '$2y$10$/zTIUi2YUn1FotDfPRECV.UwP89af74vaj6cz84Ksty'),
(27, 'Mr.', 'Bongani', 'Mdaka', 'Dakaboy', 'bongs2@gmail.com', '+27789591500', 'South African', '$2y$10$9It0T9HHpX95sg21Lqwk1uxGzD85f7Vtb3eimmCUmAL'),
(28, 'Mr.', 'Sydney', 'Moagi', 'aa', 'smoagi67@gmail.com', '0789591500', 'South African', '$2y$10$adx3QR.dLkGyqWBHtGaBmOF7.KgeQrhMQgaLMRTY3zT'),
(29, 'Dr.', 'Sydney', 'Moagi', 'QQQ', 'smoagi67@gmail.com', '0789591500', 'South African', '$2y$10$1MLESsZKpQQKrZVEoAUT4OpDCwMHRj2cwLX4cj9KKZg'),
(30, 'Miss.', 'Thindeka', 'Muhlari', 'xilaveko', 'thindeka67@gmail.com', '+27784549041', 'South African', '$2y$10$eZS2682okel.A0KRYUQz6.Da9paERN7p3xvjDTtuVoL'),
(31, 'Miss.', 'Thindeka', 'Muhlari', 'xilaveko1', 'thindeka67@gmail.com', '+27784549041', 'South African', 'xilaveko1');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `title` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `firstname` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lastname` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `phone` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nation` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_data`
--
ALTER TABLE `tb_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_data`
--
ALTER TABLE `tb_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
