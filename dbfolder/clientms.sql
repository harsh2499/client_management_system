-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2022 at 01:52 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clientms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `username`, `password`, `mobile`) VALUES
(1, 'admin@gmail.com', 'admin', '123456', '9825742566');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `time`, `date`) VALUES
(14, 'admin', '04:11:28', '03-05-2222'),
(15, 'admin', '04:11:59', '03-05-2222'),
(16, 'admin', '04:12:07', '03-05-2222'),
(17, 'admin', '04:52:48', '03-05-2222'),
(18, 'admin', '05:00:14', '03-05-2222'),
(19, 'admin', '05:13:35', '03-05-2222'),
(20, 'admin', '05:22:24', '03-05-2222');

-- --------------------------------------------------------

--
-- Table structure for table `clientlogin`
--

CREATE TABLE `clientlogin` (
  `id` int(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clientlogin`
--

INSERT INTO `clientlogin` (`id`, `email`, `time`, `date`) VALUES
(20, 'harshmvaghela99@gmail.com', '12:09:54', '03-05-2222'),
(21, 'harshmvaghela99@gmail.com', '12:12:08', '03-05-2222'),
(22, 'harshmvaghela99@gmail.com', '12:42:32', '03-05-2222'),
(23, 'harshmvaghela99@gmail.com', '12:42:44', '03-05-2222'),
(24, 'harshmvaghela99@gmail.com', '12:44:40', '03-05-2222'),
(25, 'harshmvaghela99@gmail.com', '02:22:53', '03-05-2222'),
(26, 'harshmvaghela99@gmail.com', '04:24:00', '03-05-2222'),
(27, 'harshmvaghela99@gmail.com', '04:38:50', '03-05-2222'),
(28, 'harshmvaghela99@gmail.com', '04:55:49', '03-05-2222'),
(29, 'harshmvaghela99@gmail.com', '04:59:23', '03-05-2222'),
(30, 'harshmvaghela99@gmail.com', '05:15:23', '03-05-2222'),
(31, 'harshmvaghela99@gmail.com', '05:16:05', '03-05-2222'),
(32, 'harshmvaghela99@gmail.com', '05:18:21', '03-05-2222'),
(33, 'harshmvaghela99@gmail.com', '05:20:44', '03-05-2222');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `ID` int(10) NOT NULL,
  `AccountID` int(10) DEFAULT NULL,
  `AccountType` varchar(50) DEFAULT NULL,
  `ContactName` varchar(120) DEFAULT NULL,
  `CompanyName` varchar(120) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `City` varchar(120) DEFAULT NULL,
  `State` varchar(120) DEFAULT NULL,
  `ZipCode` int(10) DEFAULT NULL,
  `Workphnumber` bigint(10) DEFAULT NULL,
  `Cellphnumber` bigint(10) DEFAULT NULL,
  `Otherphnumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `WebsiteAddress` varchar(200) DEFAULT NULL,
  `Notes` mediumtext DEFAULT NULL,
  `Password` varchar(200) NOT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(200) NOT NULL,
  `servicename` varchar(200) NOT NULL,
  `serviceprice` varchar(200) NOT NULL,
  `creationdate` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `servicename`, `serviceprice`, `creationdate`) VALUES
(1, 'tv', '100', '22-04-29 09:29:23'),
(2, 'tv', '2000', '22-04-29 09:52:52'),
(3, 'asdad', '2500', '22-04-30 04:56:15'),
(4, 'dadasd', '2000', '22-04-30 04:56:26'),
(5, 'teacher', '1200', '22-05-03 11:23:20');

-- --------------------------------------------------------

--
-- Table structure for table `tblclient`
--

CREATE TABLE `tblclient` (
  `ID` int(10) NOT NULL,
  `AccountID` int(10) DEFAULT NULL,
  `AccountType` varchar(50) DEFAULT NULL,
  `ContactName` varchar(120) DEFAULT NULL,
  `CompanyName` varchar(120) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `City` varchar(120) DEFAULT NULL,
  `State` varchar(120) DEFAULT NULL,
  `ZipCode` int(10) DEFAULT NULL,
  `Workphnumber` bigint(10) DEFAULT NULL,
  `Cellphnumber` bigint(10) DEFAULT NULL,
  `Otherphnumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `WebsiteAddress` varchar(200) DEFAULT NULL,
  `Notes` mediumtext DEFAULT NULL,
  `Password` varchar(200) NOT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblclient`
--

INSERT INTO `tblclient` (`ID`, `AccountID`, `AccountType`, `ContactName`, `CompanyName`, `Address`, `City`, `State`, `ZipCode`, `Workphnumber`, `Cellphnumber`, `Otherphnumber`, `Email`, `WebsiteAddress`, `Notes`, `Password`, `CreationDate`) VALUES
(8, 149994912, 'Active Account', 'account', 'asdasd', 'uhui', 'bhavnagar', 'Andhra', 6546546, 4454564646, 9510151546, 9510151546, 'harshmvaghela99@gmail.com', 'asda', 'sadadad', '123', '2022-05-03 05:51:11'),
(9, 570293394, 'Contact/Lead', 'vxgxv', 'asdasd', 'uhui', 'bhavnagar', 'Andhra', 6546546, 4454564646, 9510151546, 9510151546, 'harshm1vaghela99@gmail.com', 'asda', 'sadadad', '123465', '2022-04-29 23:07:57'),
(10, 212889783, 'Contact/Lead', 'accountdfdsfs', 'asdasdertertert', 'sdffsd', 'abc', 'gujarat', 6546546, 4454564646, 9510151546, 9510151546, 'harshm2vaghela99@gmail.com', 'sdfsdf', 'dfsdfds', 'sdfsdf', '2022-04-30 00:55:26');

-- --------------------------------------------------------

--
-- Table structure for table `tblinvoice`
--

CREATE TABLE `tblinvoice` (
  `id` int(200) NOT NULL,
  `userid` varchar(200) NOT NULL,
  `serviceid` varchar(200) NOT NULL,
  `billingid` varchar(200) NOT NULL,
  `postingdate` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblinvoice`
--

INSERT INTO `tblinvoice` (`id`, `userid`, `serviceid`, `billingid`, `postingdate`) VALUES
(1, '9', '2', '166813078', '22-04-30 05:28:03'),
(2, '9', '2', '166813078', '22-04-30 05:28:03'),
(3, '9', '4', '166813078', '22-04-30 05:28:03'),
(4, '8', '1', '707505459', '22-04-30 05:46:07'),
(5, '8', '2', '707505459', '22-04-30 05:46:07'),
(6, '8', '3', '707505459', '22-04-30 05:46:07'),
(7, '10', '1', '733691370', '22-04-30 06:25:35'),
(8, '10', '2', '733691370', '22-04-30 06:25:35'),
(9, '10', '3', '733691370', '22-04-30 06:25:35'),
(10, '10', '4', '733691370', '22-04-30 06:25:35'),
(11, '10', '1', '543805546', '22-05-02 10:19:40'),
(12, '10', '2', '543805546', '22-05-02 10:19:40'),
(13, '10', '1', '564836796', '22-05-02 10:20:42'),
(14, '10', '2', '564836796', '22-05-02 10:20:42'),
(15, '10', '3', '422182164', '22-05-02 10:21:52'),
(16, '10', '4', '422182164', '22-05-02 10:21:52'),
(17, '9', '2', '383728372', '22-05-02 10:23:04'),
(18, '9', '3', '383728372', '22-05-02 10:23:04'),
(24, '10', '1', '609787218', '22-05-03 10:53:09'),
(25, '10', '2', '609787218', '22-05-03 10:53:09'),
(26, '9', '1', '636486683', '22-05-03 04:23:14'),
(27, '10', '5', '235835128', '22-05-03 04:54:00'),
(28, '10', '5', '697608290', '22-05-03 05:00:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientlogin`
--
ALTER TABLE `clientlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblclient`
--
ALTER TABLE `tblclient`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `clientlogin`
--
ALTER TABLE `clientlogin`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblclient`
--
ALTER TABLE `tblclient`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
