-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2021 at 04:15 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tours_travels`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE IF NOT EXISTS `admin_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE IF NOT EXISTS `booking_details` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` varchar(30) DEFAULT NULL,
  `p_id` varchar(30) DEFAULT NULL,
  `booking_date` varchar(30) DEFAULT NULL,
  `sdate` varchar(30) DEFAULT NULL,
  `ldate` varchar(30) DEFAULT NULL,
  `payment_mode` varchar(30) DEFAULT NULL,
  `booking_status` varchar(30) DEFAULT NULL,
  `pay_amount` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE IF NOT EXISTS `customer_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(300) DEFAULT NULL,
  `uid` varchar(30) DEFAULT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`id`, `full_name`, `uid`, `mobile`, `email`, `password`) VALUES
(1, 'Ritesh Rama Surange', '12341234', '8900890089', 'ritesh@gmail.com', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `package_details`
--

CREATE TABLE IF NOT EXISTS `package_details` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `package_name` varchar(100) DEFAULT NULL,
  `place_name` varchar(100) DEFAULT NULL,
  `place_img` varbinary(100) DEFAULT NULL,
  `hotel_name` varchar(100) DEFAULT NULL,
  `hotel_city` varchar(30) DEFAULT NULL,
  `hotel_img` varchar(100) DEFAULT NULL,
  `about_place` text,
  `visit_location` text,
  `p_price` varchar(30) DEFAULT NULL,
  `package_status` varchar(30) NOT NULL DEFAULT 'Available',
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `package_details`
--

INSERT INTO `package_details` (`p_id`, `package_name`, `place_name`, `place_img`, `hotel_name`, `hotel_city`, `hotel_img`, `about_place`, `visit_location`, `p_price`, `package_status`) VALUES
(1, 'Family Trip', 'IndiaGate', '1.jpg', 'Ram Hotel', 'Delhi', 'e4.png', 'India gate is Located in delhi', 'Delhi, India Gate ', '3000', 'Available'),
(3, 'Family Trip', 'Agra', 'D.jpg', 'Shankar Hotel', 'Agra', 'e5.png', 'Tajmal is develop b Shahajaha for Mumtaz ', 'Tajmahal', '2800', 'Available');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
