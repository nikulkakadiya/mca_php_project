-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 16, 2021 at 04:41 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `footwear`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(2) NOT NULL,
  `user` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `password`) VALUES
(1, 'Piyush', 'piyush@617'),
(2, 'Dhaval', '12345'),
(3, 'Jay', '00000');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE IF NOT EXISTS `buyer` (
  `buyer_id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`buyer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`buyer_id`, `username`, `email`, `address`, `password`) VALUES
(1, 'Piyush', 'piyush123@gmail.com', 'ratnakar society', '202cb962ac59075b964b07152d234b70'),
(2, 'Piyush', 'piyush617@gmail.com', 'Ratnakar SOciety Deesa', 'db4681e38bd4624ab8d16a7f75302db6'),
(3, 'kiran', 'kiran@gmail.com', 'xyz', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'mayur', 'mayur123@gmail.com', 'bca clg', 'e807f1fcf82d132f9bb018ca6738a19f');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cate_id` int(1) NOT NULL,
  `cate_name` varchar(10) NOT NULL,
  PRIMARY KEY (`cate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cate_id`, `cate_name`) VALUES
(1, 'man'),
(2, 'woman');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `massage` text NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `name`, `email`, `massage`) VALUES
(1, 'hitesh maidh', 'hitesh_maidh@yahoo.co.in', 'hello '),
(2, 'akash', 'akash@gmail.com', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(4) NOT NULL AUTO_INCREMENT,
  `buyer_name` varchar(40) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `order_qty` int(3) NOT NULL,
  `order_price` float NOT NULL,
  `order_date` varchar(50) NOT NULL,
  `payment_type` varchar(6) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `order`
--


-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(4) NOT NULL,
  `cate_id` int(1) NOT NULL,
  `sub_cate_id` int(1) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_price` float NOT NULL,
  `product_size` int(11) NOT NULL,
  `product_image` text NOT NULL,
  `product_color` varchar(15) NOT NULL,
  `product_description` text NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `sub_cate_id` (`sub_cate_id`),
  KEY `cate_id` (`cate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `cate_id`, `sub_cate_id`, `product_name`, `product_price`, `product_size`, `product_image`, `product_color`, `product_description`) VALUES
(1, 1, 1, 'nike', 2500, 7, 'm-s-1.png', 'Blue', 'Light Weight Sports Shoes.'),
(2, 1, 1, 'nike air', 4000, 6, 'm-s-2.png', 'black', 'Air Shoes. Running,Training and Gym Shoes for Men.  '),
(3, 1, 1, 'nike air pro', 4500, 6, 'm-s-3.png', 'blue', 'Walking Shoes for Men. BEST BRAND IN BEST PRICE. '),
(4, 1, 1, 'nike air max', 1299, 9, 'm-s-4.png', 'red', 'Sports shoes for men. Latest Stylish casual sneaker for men.'),
(5, 1, 2, 'Zara', 4300, 7, 'm-p-1.png', 'black', 'A trendy pair of shoes help in boosting your confidence.'),
(6, 1, 2, 'Swanwood', 4322, 5, 'm-p-2.png', 'black', 'Presenting wide range of formal,casual,party wear shoes for men.'),
(7, 1, 2, 'WOATI', 6700, 7, 'm-p-3.png', 'coffy', 'Shoes are designed to keeping in mind durability as well as trends.'),
(8, 1, 2, 'KNOOS', 2100, 5, 'm-p-4.png', 'green', 'Synthetic leather casual Loafer,partywear shoes. Simple Designed.'),
(9, 2, 3, 'Campus', 4500, 6, 'w-s-1.png', 'pink', 'Women sports shoes. Excellent product,price worthy.'),
(10, 2, 3, 'Nike', 4758, 4, 'w-s-2.png', 'red', 'Running shoes for women. Latest style and best brand for women. '),
(11, 2, 3, 'ASIAN', 436, 5, 'w-s-3.png', 'gvsr', 'Cute sports shoes for Gym,Walking and Running for women.'),
(12, 2, 3, 'Cassiey', 3546, 6, 'w-s-4.png', 'erg', 'Latest ladies sports SUP Lace Running shoes for women. '),
(13, 2, 4, 'Nilgiri Jutti', 4654, 8, 'w-p-1.png', '4ev', 'Leather Lining Cushion,Store  in a dry place for women.'),
(14, 2, 4, 'EVE'' Garden', 3463, 6, 'w-p-2.png', 'pink', 'Hend Crafted by some ofindia''s finest artisan for women'),
(15, 2, 4, 'CARA MIA', 6466, 6, 'w-p-3.png', 'coffy', 'Casuals for women. BEST STYLE BEST BRAND BEST PRICE.'),
(16, 2, 4, 'Alley Walk', 46578, 5, 'w-p-4.png', 'pink', 'Women''s print flats ankle strap buckle Sandals for women.');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE IF NOT EXISTS `sub_category` (
  `sub_cate_id` int(1) NOT NULL,
  `cate_id` int(1) NOT NULL,
  `sub_cate_name` varchar(10) NOT NULL,
  PRIMARY KEY (`sub_cate_id`),
  KEY `cate_id` (`cate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_cate_id`, `cate_id`, `sub_cate_name`) VALUES
(1, 1, 'sports'),
(2, 1, 'partywear'),
(3, 2, 'sports'),
(4, 2, 'partywear');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `category` (`cate_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`sub_cate_id`) REFERENCES `sub_category` (`sub_cate_id`) ON DELETE CASCADE ON UPDATE CASCADE;
