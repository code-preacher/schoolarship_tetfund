-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 01:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tetfund`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(3, 'Nancy', 'a@a.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `aschool` text NOT NULL,
  `aprogram` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `school_id` int(30) NOT NULL,
  `acc` varchar(30) NOT NULL,
  `eot` varchar(200) NOT NULL,
  `department_id` int(30) NOT NULL,
  `fq` varchar(30) NOT NULL,
  `fqd` varchar(30) NOT NULL,
  `sq` varchar(30) NOT NULL,
  `sqd` varchar(30) NOT NULL,
  `tq` varchar(30) NOT NULL,
  `tqd` varchar(30) NOT NULL,
  `fap` varchar(30) NOT NULL,
  `etd` int(30) NOT NULL,
  `yapt` int(30) NOT NULL,
  `remark` text NOT NULL,
  `yapl` varchar(30) NOT NULL,
  `passport` varchar(200) NOT NULL,
  `al` varchar(200) NOT NULL,
  `bf` varchar(200) NOT NULL,
  `be` varchar(200) NOT NULL,
  `cv` varchar(200) NOT NULL,
  `mc` varchar(200) NOT NULL,
  `sl` varchar(200) NOT NULL,
  `ubd` varchar(200) NOT NULL,
  `rp` varchar(200) NOT NULL,
  `status` int(30) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `name`, `aschool`, `aprogram`, `gender`, `dob`, `school_id`, `acc`, `eot`, `department_id`, `fq`, `fqd`, `sq`, `sqd`, `tq`, `tqd`, `fap`, `etd`, `yapt`, `remark`, `yapl`, `passport`, `al`, `bf`, `be`, `cv`, `mc`, `sl`, `ubd`, `rp`, `status`, `date`) VALUES
(1, 'Joel Hart', 'Oxford University', 'PHD', 'MALE', '2021-04-03', 9, 'FCMB 56726382920 Co-operate ac', 'h@h.com', 3, 'BSC', '2021-04-13', 'NONE', '', 'NONE', '', '2021-04-16', 19, 20, 'Hello Final', '2026', 'Joel Hart-tetfund-passport-607f3cc61a327.jfif', 'Joel Hart-tetfund-admission-letter-607f3cc61a52f.pdf', 'Joel Hart-tetfund-bond-form-607f3cc61a72a.pdf', 'Joel Hart-tetfund-budget-estimate-607f3cc61a93d.pdf', 'Joel Hart-tetfund-cv-607f3cc61ab17.pdf', 'Joel Hart-tetfund-medical-certificate-607f3cc61ace7.pdf', 'Joel Hart-tetfund-study-leave-607f3cc61aedd.pdf', 'Joel Hart-tetfund-university-bank-details-607f3cc61c3bd.pdf', 'Joel Hart-tetfund-research-proposal-607f3cc61c582.pdf', 1, '2021-04-20 21:42:46');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `date`) VALUES
(1, 'PHYSICS', '2007-11-20 00:00:00'),
(2, 'CHEMISTRY', '2007-11-20 00:00:00'),
(3, 'COMPUTER SCIENCE', '2022-02-21 00:00:00'),
(4, 'FISHERY', '0000-00-00 00:00:00'),
(6, 'STATISTICS', '2021-03-16 12:35:01');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `name`, `date`) VALUES
(8, 'BSU', '2021-03-02 13:42:39'),
(9, 'UAM', '2021-03-02 13:42:39'),
(11, 'UNICAL', '2021-03-02 14:22:23'),
(12, 'UNN', '2021-03-16 12:35:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
