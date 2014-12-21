-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 03, 2014 at 07:45 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `customers_schema`
--

-- --------------------------------------------------------

--
-- Table structure for table `adresses`
--

CREATE TABLE `adresses` (
`id` int(10) NOT NULL,
  `line_1_number_building` varchar(30) NOT NULL,
  `line_2_number_street` int(30) NOT NULL,
  `line_3_area_locality` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `zip_postcode` varchar(30) NOT NULL,
  `state_province_county` varchar(30) NOT NULL,
  `iso_country_code` varchar(30) NOT NULL,
  `other_adress_details` varchar(30) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `adresses`
--

INSERT INTO `adresses` (`id`, `line_1_number_building`, `line_2_number_street`, `line_3_area_locality`, `city`, `zip_postcode`, `state_province_county`, `iso_country_code`, `other_adress_details`) VALUES
(8, '11231', 12344, '123123123', 'laval', 'qc', 'qc', 'qc1', 'qc');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
`id` int(10) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `customer_phone` varchar(30) NOT NULL,
  `customer_email` varchar(30) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `customer_phone`, `customer_email`) VALUES
(8, 'Simon', '514-514-5144', 'simon@simon.com');

-- --------------------------------------------------------

--
-- Table structure for table `customers_adresses`
--

CREATE TABLE `customers_adresses` (
`id` int(10) NOT NULL,
  `adress_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `customers_adresses`
--

INSERT INTO `customers_adresses` (`id`, `adress_id`, `customer_id`) VALUES
(9, 8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `customers_payment_informations`
--

CREATE TABLE `customers_payment_informations` (
`id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `payment_information_id` int(10) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `customers_payment_informations`
--

INSERT INTO `customers_payment_informations` (`id`, `customer_id`, `payment_information_id`) VALUES
(9, 8, 5);

-- --------------------------------------------------------

--
-- Table structure for table `payment_informations`
--

CREATE TABLE `payment_informations` (
`id` int(10) NOT NULL,
  `payment_method` varchar(10) NOT NULL,
  `card_number` varchar(30) NOT NULL,
  `date_of_expiry` date NOT NULL,
  `security_number` varchar(3) NOT NULL,
  `other_details` varchar(250) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `payment_informations`
--

INSERT INTO `payment_informations` (`id`, `payment_method`, `card_number`, `date_of_expiry`, `security_number`, `other_details`) VALUES
(5, 'Cash', 'Cash', '2014-11-02', '000', 'Cash'),
(7, 'Visa', 'test', '2014-11-02', '111', '111');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `hash_change_password` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `role`, `hash_change_password`, `created`, `modified`) VALUES
(2, 'admin', 'afebb4a30fffa1f413fd3045a5646d1fad3bd17a', 'admin@admin.com', NULL, 'admin', NULL, '2014-11-02 04:42:15', '2014-11-03 01:45:17'),
(3, 'author', '5e2b8e0a57ae97ce13591ff18ac554384bef92a3', 'author@author.com', NULL, 'author', NULL, '2014-11-02 22:06:24', '2014-11-03 07:39:51'),
(4, 'visiteur', '3a8c30145c9f28a480337f8f3628b18368407165', 'visiteur@visiteur.com', NULL, NULL, NULL, '2014-11-03 06:36:09', '2014-11-03 06:36:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adresses`
--
ALTER TABLE `adresses`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers_adresses`
--
ALTER TABLE `customers_adresses`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers_payment_informations`
--
ALTER TABLE `customers_payment_informations`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_informations`
--
ALTER TABLE `payment_informations`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adresses`
--
ALTER TABLE `adresses`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `customers_adresses`
--
ALTER TABLE `customers_adresses`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `customers_payment_informations`
--
ALTER TABLE `customers_payment_informations`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `payment_informations`
--
ALTER TABLE `payment_informations`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
