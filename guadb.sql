-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2016 at 06:17 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `guadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `name` char(30) NOT NULL,
  `email` varchar(254) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `pass`) VALUES
(100, 'test', 'test@gmail.com', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `librarypic`
--

CREATE TABLE IF NOT EXISTS `librarypic` (
`id` int(10) NOT NULL,
  `picname` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `librarypic`
--

INSERT INTO `librarypic` (`id`, `picname`) VALUES
(49, '16030842061492.png'),
(50, '16030846061497.png'),
(51, '16030850061436.jpg'),
(52, '16030855061467.png'),
(53, '16030859061438.jpg'),
(54, '16030802061559.png'),
(55, '16030807061558.png'),
(56, '16030811061538.png'),
(57, '16030815061543.png');

-- --------------------------------------------------------

--
-- Table structure for table `loghistory`
--

CREATE TABLE IF NOT EXISTS `loghistory` (
`id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `login` datetime NOT NULL,
  `logout` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loghistory`
--

INSERT INTO `loghistory` (`id`, `userId`, `login`, `logout`) VALUES
(11, 2, '2016-08-03 09:02:10', '2016-08-03 09:02:28');

-- --------------------------------------------------------

--
-- Table structure for table `picpass`
--

CREATE TABLE IF NOT EXISTS `picpass` (
`id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `pic1` varchar(25) NOT NULL,
  `pic2` varchar(25) NOT NULL,
  `pic3` varchar(25) NOT NULL,
  `pic4` varchar(25) NOT NULL,
  `pic5` varchar(25) NOT NULL,
  `pic6` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `picpass`
--

INSERT INTO `picpass` (`id`, `userId`, `pic1`, `pic2`, `pic3`, `pic4`, `pic5`, `pic6`) VALUES
(2, 2, '2016080305571521.png', '2016080305571522.png', '2016080305571523.png', '2016080305571524.jpg', '2016080305571525.jpg', '2016080305571526.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `name` char(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `country` text NOT NULL,
  `city` text NOT NULL,
  `gender` char(6) NOT NULL,
  `role` char(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `dob`, `country`, `city`, `gender`, `role`) VALUES
(2, 'admin', 'admin@gmail.com', '0000-00-00', 'Pakistan', 'Lahore', 'Male', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `librarypic`
--
ALTER TABLE `librarypic`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `loghistory`
--
ALTER TABLE `loghistory`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `picpass`
--
ALTER TABLE `picpass`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `librarypic`
--
ALTER TABLE `librarypic`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `loghistory`
--
ALTER TABLE `loghistory`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `picpass`
--
ALTER TABLE `picpass`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
