-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 02, 2017 at 06:17 PM
-- Server version: 5.5.51-38.2
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Concatenation_Consortium`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `productID` int(11) NOT NULL,
  `productCode` varchar(30) NOT NULL,
  `productName` varchar(30) NOT NULL,
  `productDescription` varchar(500) NOT NULL,
  `productPrice` float NOT NULL,
  `productDiscount` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `productCode`, `productName`, `productDescription`, `productPrice`, `productDiscount`) VALUES
(1, 'roundBracket', 'Round Bracket', 'Round Brackets are used in expressions, functions, control structures and loops.', 1, 0),
(2, 'squareBracket', 'Square Bracket', 'Square Brackets are used in array elements. Array keys are written within square brackets.', 12.99, 10),
(3, 'curlyBracket', 'Curly Bracket', 'Curly Brackets are used to mark class, function (methods in OOP terminology), loop and control structure bodies.  They can also be used within strings to separate variables from surrounding text.', 19.99, 10),
(4, 'function', 'Function', 'A subroutine which returns a value.', 9.99, 5),
(5, 'method', 'Method', 'A subroutine which belongs to an object or a class.  May also be a function.', 99.99, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(10) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(60) NOT NULL,
  `firstName` char(30) NOT NULL,
  `lastName` char(30) NOT NULL,
  `dateofBirth` date NOT NULL,
  `country` char(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `admin`, `username`, `password`, `email`, `firstName`, `lastName`, `dateofBirth`, `country`) VALUES
(1, 1, 'screason', '$2y$10$01oPO83ZzrJVpEFQMaUx/uMFDeQrD.JYAnELmYQMLZWCU6e4PKQjm', 'my@gmail.com', 'Seth', 'Creason', '1985-06-08', 'USA'),

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `userID` (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
