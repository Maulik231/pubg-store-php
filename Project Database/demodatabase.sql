-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2020 at 11:15 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `demodatabase`
--
CREATE DATABASE IF NOT EXISTS `demodatabase` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `demodatabase`;

-- --------------------------------------------------------

--
-- Table structure for table `addtocart`
--

CREATE TABLE IF NOT EXISTS `addtocart` (
  `p_id` bigint(20) NOT NULL,
  `p_quantity` bigint(20) NOT NULL,
  `c_id` bigint(20) NOT NULL,
  `p_price` bigint(20) NOT NULL,
  `cart_id` int(30) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cart_id`),
  KEY `p_id` (`p_id`),
  KEY `c_id` (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `addtocart`
--

INSERT INTO `addtocart` (`p_id`, `p_quantity`, `c_id`, `p_price`, `cart_id`) VALUES
(2, 1, 43, 500, 6);

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE IF NOT EXISTS `catagory` (
  `cat_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(30) NOT NULL,
  `cat_description` varchar(100) NOT NULL,
  `cat_image` varchar(50) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`cat_id`, `cat_name`, `cat_description`, `cat_image`) VALUES
(1, 'tshirt', 'Our Best T-Shirt ', ''),
(2, 'bag', 'Our Best Bag', ''),
(3, 'mobilecover', 'Our Besst Mobilecover', ''),
(4, 'keychain', 'Our Best Key-Chain', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `c_id` bigint(10) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(50) NOT NULL,
  `c_contact` bigint(15) NOT NULL,
  `c_password` varchar(20) NOT NULL,
  `c_email` varchar(30) NOT NULL,
  `c_address` varchar(100) NOT NULL,
  `c_gender` varchar(10) NOT NULL,
  `type` varchar(25) NOT NULL DEFAULT 'customer',
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_name`, `c_contact`, `c_password`, `c_email`, `c_address`, `c_gender`, `type`) VALUES
(43, 'parth', 3456789076, 'Parth12345', 'parth234@gmail.com', 'dsbds', 'male', 'customer'),
(44, 'harsh', 7990156698, 'Harsh123', 'harsh123@gmail.com', 'rajkot', 'male', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `o_id` bigint(20) NOT NULL,
  `p_id` bigint(20) NOT NULL,
  `p_quantity` bigint(20) NOT NULL,
  `p_price` bigint(30) NOT NULL,
  KEY `o_id` (`o_id`),
  KEY `p_id` (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_master`
--

CREATE TABLE IF NOT EXISTS `order_master` (
  `o_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `o_date` date NOT NULL,
  `c_id` bigint(20) NOT NULL,
  `deli_date` date NOT NULL,
  `amount` bigint(50) NOT NULL,
  `p_id` bigint(20) NOT NULL,
  `trac_id` bigint(20) NOT NULL,
  `pay_type` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`o_id`),
  KEY `c_id` (`c_id`),
  KEY `order_master_ibfk_1` (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `p_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(50) NOT NULL,
  `p_size` varchar(20) NOT NULL,
  `p_color` varchar(20) NOT NULL,
  `p_description` varchar(100) NOT NULL,
  `cat_id` bigint(20) NOT NULL,
  `p_weight` varchar(20) NOT NULL,
  `p_image` varchar(20) NOT NULL,
  `p_quantity` bigint(20) NOT NULL,
  `p_price` bigint(20) NOT NULL,
  PRIMARY KEY (`p_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_size`, `p_color`, `p_description`, `cat_id`, `p_weight`, `p_image`, `p_quantity`, `p_price`) VALUES
(2, 'Men Grey PUBG Printed Round Neck T-Shirt', 'XL', 'GREY', 'Best Grey T-Shirt Rounded Neck', 1, '24 Gm', 'of.png', 1, 500),
(8, 'blue T-sirt', 'XL', '{color}', 'Blue t-sirt', 1, '1', 'of2.png', 20, 500),
(9, 'fancy pubg bag', '500cm', 'light grey', 'it is advance tshirt', 2, '300', 'of4.png', 20, 549),
(10, 'iphone X mobile Cover white', 'fited to iphone X', '{color}', 'best cover available for iphone X', 3, '3', 'of8.png', 20, 1599),
(11, 'Flair Gun Key Chain', '100cm', 'red ', 'it is best for showcase and vehicle keychain', 4, '150gm', 'of12.png', 20, 449);

-- --------------------------------------------------------

--
-- Table structure for table `review_rating`
--

CREATE TABLE IF NOT EXISTS `review_rating` (
  `p_id` bigint(20) NOT NULL,
  `c_id` bigint(20) NOT NULL,
  `rev_date` date NOT NULL,
  `review` varchar(100) NOT NULL,
  KEY `p_id` (`p_id`),
  KEY `c_id` (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addtocart`
--
ALTER TABLE `addtocart`
  ADD CONSTRAINT `addtocart_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `addtocart_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`) ON DELETE CASCADE;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`o_id`) REFERENCES `order_master` (`o_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`) ON DELETE CASCADE;

--
-- Constraints for table `order_master`
--
ALTER TABLE `order_master`
  ADD CONSTRAINT `oedr_master` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`),
  ADD CONSTRAINT `order_master_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`) ON DELETE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `catagory` (`cat_id`) ON DELETE CASCADE;

--
-- Constraints for table `review_rating`
--
ALTER TABLE `review_rating`
  ADD CONSTRAINT `review_rating_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `review_rating_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
