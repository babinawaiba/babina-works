-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Feb 20, 2015 at 10:16 AM
-- Server version: 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vdc_panjikaran_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
`id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `last_login_date` varchar(20) NOT NULL,
  `last_login_ip` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `address`, `email`, `password`, `last_login_date`, `last_login_ip`) VALUES
(1, 'Babina Waiba', 'Shantinagar', 'babinawaiba@gmail.com', '482c811da5d5b4bc6d497ffa98491e38', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `birth_registration`
--

CREATE TABLE `birth_registration` (
`id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `fathername` varchar(30) NOT NULL,
  `mothername` varchar(30) NOT NULL,
  `grandfathername` varchar(30) NOT NULL,
  `streetaddress` varchar(30) NOT NULL,
  `wardno` int(11) NOT NULL,
  `lastmodified` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `birth_registration`
--

INSERT INTO `birth_registration` (`id`, `fullname`, `gender`, `dob`, `fathername`, `mothername`, `grandfathername`, `streetaddress`, `wardno`, `lastmodified`) VALUES
(1, 'Amrit Tamang', 'Male', '28 August 1981', 'Dhana B Tamang', 'Pabitra Tamang', 'Bam B Tamang', 'Shantinagar', 6, ''),
(2, 'Babina Waiba', 'Female', '12 oct 1987', 'Brikha Dhoj Waiba', 'Babita Laxmi Waiba', 'Lila Dhoj Waiba', 'Lokanthali', 3, 'February 18, 2015, 8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `birth_registration`
--
ALTER TABLE `birth_registration`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `birth_registration`
--
ALTER TABLE `birth_registration`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
