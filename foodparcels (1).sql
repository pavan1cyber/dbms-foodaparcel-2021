-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 29, 2022 at 08:36 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodparcels`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminid` int(11) NOT NULL,
  `firstname` varchar(12) NOT NULL,
  `lastname` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminid`, `firstname`, `lastname`, `password`) VALUES
(1, 'pavan', 'k', 'password'),
(2, 'rohit', 'd', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerid` int(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `phoneno` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerid`, `firstname`, `lastname`, `city`, `state`, `phoneno`) VALUES
(1, 'firstname', 'lastname', 'banglore', 'karnataka', '6756767561'),
(2, 'vijay', 's', 'manglore', 'karnataka', '9978792344'),
(3, 'dhanush', 'kumar', 'tumkur', 'karnataka', '567897654'),
(5, 'Yoogesh', 'ks', 'manglore', 'karnataka', '66955665456'),
(6, 'madhu', 'm', 'sira', 'karnataka', '98456248658'),
(7, 'lohith', 'g', 'bukkapatna', 'karnataka', '9524862246'),
(8, 'vinod', 'kumar', 'mysore', 'maharastra', '1234478956'),
(9, 'bhararh', 'cd', 'hyderabad', 'maharastra', '9865456892'),
(10, 'prabhakar', 'k', 'banglore', 'karnataka', '8975894589'),
(11, 'pavan', 'k', 'chennai', 'maharastra', '2588796446'),
(12, 'prakash', 'd', 'banglore', 'karnataka', '9857954845'),
(13, 'sanjay ', 'ly', 'tumkur', 'karnataka', '98456248658'),
(14, 'gagan', 'y', 'sira', 'karnataka', '2589756972'),
(15, 'sujatha', 'mam', 'mysore', 'karnataka', '257897896258'),
(16, 'lohith', 'g', 'sira', 'karnataka', '9857952578'),
(17, 'devaraju', 'm', 'tumkur', 'karnataka', '2578945826'),
(18, 'madhu', 's', 'mysore', 'karnataka', '8795875926');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `dish` varchar(30) NOT NULL,
  `price` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`dish`, `price`) VALUES
('allseasongulliverpizza', 481),
('bbqchickenclassicpizzalarge', 400),
('chickenfajitapizza', 500),
('margheritapizza', 300),
('maxicanpizzatestbetter', 351);

-- --------------------------------------------------------

--
-- Table structure for table `parcels`
--

CREATE TABLE `parcels` (
  `parcelid` int(10) NOT NULL,
  `customerid` int(10) NOT NULL,
  `price` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parcels`
--

INSERT INTO `parcels` (`parcelid`, `customerid`, `price`) VALUES
(1, 1, 1429),
(2, 2, 1229),
(3, 3, 1229),
(5, 5, 580),
(6, 6, 979),
(7, 7, 580),
(8, 8, 979),
(9, 9, 979),
(10, 10, 879),
(11, 11, 580),
(12, 12, 930),
(13, 13, 979),
(14, 14, 979),
(15, 15, 580),
(16, 16, 930),
(17, 17, 1079),
(18, 18, 979);

--
-- Triggers `parcels`
--
DELIMITER $$
CREATE TRIGGER `gst` BEFORE INSERT ON `parcels` FOR EACH ROW set new.price=new.price+100
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `paytss`
--

CREATE TABLE `paytss` (
  `customerid` varchar(12) NOT NULL,
  `cardno` varchar(20) NOT NULL,
  `ccv` varchar(20) NOT NULL,
  `expiredat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paytss`
--

INSERT INTO `paytss` (`customerid`, `cardno`, `ccv`, `expiredat`) VALUES
('', '', '', ''),
('5', '2345-2584-3257-9856', '589', '24/04/2023'),
('6', '2345-5897-2658-5897', '215', '30/04/2024'),
('7', '1247-2365-2589-3256', '213', '27/03/2024'),
('8', '1234-2589-2356-2569', '123', '24/04/2024'),
('9', '2345-2547-1235-2589', '254', '25/04/2024'),
('10', '2157-2569-2368-5869', '214', '27/04/2024'),
('11', '2457-2589-2368-2689', '216', '27/04/2025'),
('12', '125-266-269-589', '215', '28/04/2027'),
('13', '2578-2369-2589-5897', '215', '25/03/2024'),
('14', '2557-2698-2589-2589', '215', '27/04/2027'),
('15', '2145-2356-2589-2548', '215', '24/05/2027'),
('16', '1234-1234-1235-2587', '215', '25/05/2027'),
('17', '2145-1258-2158-2589', '216', '28/07/2028'),
('18', '2458-1256-1258-1258', '216', '24-02-2016');

-- --------------------------------------------------------

--
-- Table structure for table `reserves`
--

CREATE TABLE `reserves` (
  `dish` varchar(20) NOT NULL,
  `parcelid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserves`
--

INSERT INTO `reserves` (`dish`, `parcelid`) VALUES
('food1', 1),
('food3', 1),
('food5', 1),
('food1', 2),
('food4', 2),
('food5', 2),
('food1', 3),
('food4', 3),
('food5', 3),
('food1', 5),
('food1', 6),
('food2', 6),
('food1', 7),
('food1', 8),
('food2', 8),
('food1', 9),
('food2', 9),
('food1', 10),
('food4', 10),
('food1', 11),
('food1', 12),
('food5', 12),
('food1', 13),
('food2', 13),
('food1', 14),
('food2', 14),
('food1', 15),
('food1', 16),
('food5', 16),
('food1', 17),
('food3', 17),
('food1', 18),
('food2', 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `parcels`
--
ALTER TABLE `parcels`
  ADD PRIMARY KEY (`parcelid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
