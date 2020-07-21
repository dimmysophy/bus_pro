-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2020 at 09:35 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `truebus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `profile_picture` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `user_type` int(25) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `profile_picture`, `status`, `user_type`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'http://localhost/true/admin/assets/uploads/profile_pic/admin/1566928923_IMG-20171221-WA0009.jpg', '1', 1),
(3, 'dimma', 'b63ad17940b78107e72e63b7d637d91b', '', 'online', 1);

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` int(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone_number` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `profile_picture` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL DEFAULT '1',
  `created_by` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `username`, `first_name`, `last_name`, `password`, `company_name`, `address`, `email`, `phone_number`, `city`, `country`, `profile_picture`, `status`, `created_by`) VALUES
(1, 'agent', 'agent', 'agent', 'b33aed8f3134996703dc39f9a7c95783', 'techware', 'ernakulam', 'sams@gmail.com', '0803218100643', 'lagos', 'Nigeria', 'http://localhost/true/admin/assets/uploads/profile_pic/admin/1566929351_IMG-20180126-WA0000.jpg', '1', '1'),
(2, 'immanu', 'manu', 'john', '826692ac68da0fbe60ddf3a3443b04a0', 'techware', 'ernakulam', 'immanu@gmail.com', '1212121212', 'chennai', 'tamilnadu', 'http://192.168.1.31/Najeela/True-bus-admin/admin-panel/assets/uploads/img/1462446161_dont-forget-to-smile-hd-desktop-wallpaper-widescreen-backgrounds-for-mobile-tablet-and-pc-free-images-download-520x290.jpg', '1', '1'),
(8, 'ginika', 'ginika', 'umego', '37dbcebb1b71cf04b3cfe5b1c00365dc', 'entraco', 'nike lake avenue', 'umegoginika@gmail.com', '080371717171', 'jos', 'nigeria', '', '1', 'admin'),
(10, 'immanu', 'manu', 'immanuel', '827ccb0eea8a706c4c34a16891f84e7b', 'techware', 'kollam', 'immanu@gmail.com', '2147483647', 'vazhakkala', 'india', 'http://192.168.1.31/Najeela/True-bus-admin/admin-panel/assets/uploads/img/1462446153_admin.jpg', '1', 'admin'),
(11, 'sams', 'dshg', 'eryery', '827ccb0eea8a706c4c34a16891f84e7b', 'techware', 'kollam', 'immanu24@gmail.com', '2147483647', 'vazhakkala', 'india', 'http://192.168.138.31/Immanuel/true-bus/CI-admin-structure-adminLTE/admin-panel/assets/uploads/img/1469171067_wewe.png', '1', 'admin'),
(12, 'dimmaq', 'Chidimma', 'Agubata', '38b30a001279181e46d1d45007789223', 'techware', 'Odili hostel', 'agubatachidimma@gmail.com', '08032181006', 'Enugu', 'NIGERIA', 'http://localhost/true/admin/assets/uploads/img/1538543060_IMG_20150212_130757.jpg', '1', 'admin'),
(13, 'dimmaq', 'Chidimma', 'Agubata', 'dimmaq1000', 'techware', 'jenta', 'agubatachidimma@gmail.com', '08032181006', 'Abuja', 'nigeria', '', '1', 'admin'),
(14, 'ginika', 'Sabina', 'Ginika', 'dimmaq1000', 'Sabi Motors', 'nike lake Rd', 'umegoginika@gmail.com', '08134716617', 'Enugu', 'nigeria', 'http://localhost/trueb/admin/assets/uploads/img/1563828154_IMG_20171202_141318.jpg', '1', 'admin'),
(15, 'ginika', 'Sabina', 'Umego', 'sabina', 'Entraco', 'nike lake Rd', 'umegoginika@gmail.com', '08134716617', 'Enugu city', 'Nigeria', '', '1', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `agent_terminal`
--

CREATE TABLE `agent_terminal` (
  `id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `terminal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` int(250) NOT NULL,
  `amenities` varchar(250) NOT NULL,
  `status` int(250) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `amenities`, `status`) VALUES
(1, 'WIFI', 1),
(2, 'Water Bottle', 1),
(3, 'Blankets', 1),
(4, 'Snacks', 1),
(5, 'Charging Point', 1),
(6, 'Movie', 1),
(7, 'Reading Light', 1),
(8, 'Pillow', 1),
(9, 'Personal TV', 1),
(10, 'Track My Bus', 1),
(11, 'Emergency exit', 1),
(12, 'Fire Extinguisher', 1),
(13, 'Hammer (to break glass)', 1),
(14, 'Emergency Contact Number', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(40) NOT NULL,
  `block_name` text NOT NULL,
  `blog_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `block_name`, `blog_content`) VALUES
(1, 'Routs&Operators&TicketsSold ', '<div class=\"clm-1\">\r\n<div class=\"container\">\r\n<div class=\"secssion3\">\r\n<div class=\"row\">\r\n<div class=\"col-md-3\"><br class=\"head-ourcities1\" />\r\n<h3 class=\"head-sec3\"><img src=\"#s#/assets/images/quality.png\" alt=\"\" /> <span class=\"tb_operator1\">67000 <small class=\"smalls\">ROUTES<br /></small></span></h3>\r\n<div class=\"tb_list_offer\">\r\n<div class=\"ofer_list\">UPTO RS.100 OFF</div>\r\n<div class=\"ofer_list_bold\">TRAVEL SMART</div>\r\n<div class=\"ofer_list_normal\">Code:RBM120</div>\r\n<div class=\"ofer_list_normal\">Book Using Pay Money</div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-3\">\r\n<h3 class=\"head-sec3\"><img src=\"#s#/assets/images/reliability.png\" alt=\"\" /> <span class=\"tb_operator2\">1800<small class=\"smalls\"> BUS OPERATORS</small></span></h3>\r\n<div class=\"ofer_list\">UPTO 70% OFF</div>\r\n<div class=\"ofer_list_bold\">ON HOTELS ACROSS INDIA</div>\r\n<div class=\"ofer_list_normal\">Offer Code:RBRTM120</div>\r\n<div class=\"ofer_list_normal\">&nbsp;</div>\r\n<div class=\"ofer_list_normal\">\r\n<div class=\"col-md-3\">\r\n<h3 class=\"head-sec3\"><img src=\"#s#/assets/images/quality.png\" alt=\"\" /> <span class=\"tb_operator3\">6,00,000 + <small class=\"smalls\">TICKETS SOLD</small></span></h3>\r\n<div class=\"tb_list_offer\">&nbsp;&nbsp; FLAT Rs.100 OFF\r\n<div class=\"ofer_list_bold left\">&nbsp;&nbsp; red Bus APP OFFER</div>\r\n<div class=\"ofer_list_normal\">&nbsp;&nbsp; book via the redBUS APP</div>\r\n<div class=\"ofer_list_normal\">&nbsp;&nbsp; Code:ERHH54</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"right-section\">&nbsp;</div>\r\n<div class=\"right-section\">\r\n<h4 class=\"tb_head\">Top Bus Routers</h4>\r\n<ul class=\"clm4-list\">\r\n<li>\r\n<p class=\"headlist-para\"><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Hyderabad to Bangalore</a></p>\r\n</li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Pune to Bangalore </a></li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Hyderabad to Chennai</a></li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Coimbatore to Bangalore </a></li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Chennai to Madurai</a></li>\r\n</ul>\r\n<div class=\"right-section\">\r\n<h4 class=\"tb_head\">Top Cities</h4>\r\n<ul class=\"clm4-list\">\r\n<li>\r\n<p class=\"headlist-para\"><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Hyderabad to Bangalore</a></p>\r\n</li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Pune to Bangalore </a></li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Hyderabad to Chennai</a></li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Coimbatore to Bangalore </a></li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Chennai to Madurai</a></li>\r\n</ul>\r\n<h4 class=\"tb_head\">Top Bus Operators</h4>\r\n<ul class=\"clm4-list\">\r\n<li>\r\n<p class=\"headlist-para\"><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Hyderabad to Bangalore</a></p>\r\n</li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Pune to Bangalore </a></li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Hyderabad to Chennai</a></li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Coimbatore to Bangalore </a></li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Chennai to Madurai</a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>'),
(2, 'footer ', '<div class=\"clm-4\">\r\n<div class=\"container\">\r\n<div class=\"secssion6\">\r\n<div class=\"row\">\r\n<div class=\"col-md-9\">\r\n<h3 class=\"head-ourcities2\">Follow Us</h3>\r\n<ul class=\"clm4-list\">\r\n<li>\r\n<p class=\"headlist-para\"><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">About TrueBus</a></p>\r\n</li>\r\n<li>FAQ</li>\r\n<li>Careers</li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">TrueBus Coupons</a></li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Contact Us </a></li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Terms of Use</a></li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Privacy Policy &nbsp;</a></li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">TrueBus on Mobilenew</a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>'),
(3, 'Banner Image', '<p>assets/images/images/banner-inner.png</p>');

-- --------------------------------------------------------

--
-- Table structure for table `board_points`
--

CREATE TABLE `board_points` (
  `id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `board_point` int(11) NOT NULL,
  `pickup_point` varchar(20) NOT NULL,
  `pickup_time` varchar(20) NOT NULL,
  `landmark` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `status` int(200) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `board_points`
--

INSERT INTO `board_points` (`id`, `bus_id`, `board_point`, `pickup_point`, `pickup_time`, `landmark`, `address`, `status`) VALUES
(56, 101, 68, 'delsu', '02:00 PM', '200', 'University staff quarters road, Delsu', 1),
(57, 141, 70, 'old park', '08:00 AM', 'obo-ette', 'Ogbete, Enugu', 1),
(58, 116, 65, 'Abakpa', '10:00 AM', 'university market', 'Enugu, abakpa', 1),
(59, 102, 73, 'Zuba', '05:30 PM', 'NNPC mega Station', 'Zuba General Hospital', 0),
(60, 101, 68, 'Asaba', '06:00 PM', 'plain', 'delsu', 1),
(61, 102, 73, 'Kubua', '09:00 AM', 'Shoprite', 'Utaku road', 1),
(62, 142, 79, 'KUBUA', '02:00 PM', 'ZUMA ROCK', 'Zuma rock estate', 1),
(63, 128, 81, 'Ajah', '08:00 AM', 'Mr Biggs', 'Lagos,Ajah', 1),
(64, 127, 76, 'Maza-maza', '10:00 AM', 'Genesis', 'lagos, maza-maza', 1),
(65, 126, 75, 'Oshodi', '12:00 PM', 'Cadbury', 'Lagos,Oshodi', 1),
(66, 117, 82, 'Sabon-gari', '07:00 PM', 'Shoprite', 'Sabon gari, kano', 1),
(67, 117, 82, 'ABA', '10:30 AM', 'CREST HOTEL', 'Abia,Aba', 1),
(68, 115, 71, 'Zuba', '07:00 AM', 'Zuma rock', 'Abuja Zuba', 1);

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `id` int(11) NOT NULL,
  `booking_id` varchar(250) NOT NULL,
  `amount` varchar(250) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `rout_id` int(11) NOT NULL,
  `boarding_point_id` int(11) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `seat_no` varchar(250) NOT NULL,
  `payment_status` varchar(250) NOT NULL,
  `payment_option` varchar(251) NOT NULL,
  `booking_date` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`id`, `booking_id`, `amount`, `bus_id`, `rout_id`, `boarding_point_id`, `user_id`, `seat_no`, `payment_status`, `payment_option`, `booking_date`, `status`) VALUES
(53, 'TRB1468559520', '3000', 103, 25, 43, '4', 'A8', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(55, 'TRB1468559554-55', '3000', 103, 25, 43, '4', 'A8', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(56, 'TRB1468559554-56', '2000', 101, 1, 16, '4', 'A4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(57, 'TRB1468563980', '6000', 103, 25, 43, '4', 'C7,D7', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(59, 'TRB1468657011', '4000', 101, 1, 1, '4', 'C3,C4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(60, 'TRB1468657203', '4000', 101, 1, 1, '4', 'C3,C4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(61, 'TRB1468657251', '4000', 101, 1, 1, '4', 'C3,C4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(62, 'TRB1468657350', '4000', 101, 1, 1, '4', 'C3,C4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(63, 'TRB1468657385', '4000', 101, 1, 1, '4', 'C3,C4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(64, 'TRB1468657486', '4000', 101, 1, 1, '4', 'C3,C4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(65, 'TRB1468657742', '4000', 101, 1, 1, '4', 'C3,C4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(66, 'TRB1468657841', '2000', 101, 1, 1, '4', 'D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(67, 'TRB1468657894', '2000', 101, 1, 1, '4', 'D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(68, 'TRB1468657997', '2000', 101, 1, 1, '4', 'D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(69, 'TRB1468658140', '2000', 101, 1, 1, '4', 'D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(70, 'TRB1468658271', '2000', 101, 1, 1, '4', 'D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(71, 'TRB1468839488-71', '5000', 103, 3, 1, '4', 'C8', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(72, 'TRB1468839741', '5000', 101, 1, 1, '4', 'C9', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(73, 'TRB1468839874-73', '5000', 103, 3, 1, '4', 'C1,C9,C2', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(74, 'TRB1468840107', '5000', 101, 1, 1, '4', 'C8', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(75, 'TRB1468840392', '5000', 101, 1, 1, '4', 'C8', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(76, 'TRB1468910408', '3000', 103, 25, 43, '4', 'D7', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(77, 'TRB1468910409', '5000', 101, 1, 1, '4', 'C8', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(78, 'TRB1468918433', '5000', 101, 1, 1, '4', 'C8', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(79, 'TRB1468919373', '3000', 103, 25, 43, '4', 'D5', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(80, 'TRB1468920018', '2000', 101, 1, 16, '4', 'E1', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(82, 'TRB1468920029', '2000', 101, 1, 16, '4', 'E1', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(84, 'TRB1468920084-84', '2000', 101, 1, 16, '4', 'E1', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(85, 'TRB1468920084-85', '3000', 103, 25, 43, '4', 'C8', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(86, 'TRB1468920488', '3000', 103, 25, 43, '4', 'D5', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(87, 'TRB1468922448-87', '9000', 103, 25, 43, '151', 'C6,C7,C8', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(88, 'TRB1468923989-88-88-88-88-88-88', '2000', 101, 1, 16, '4', 'E4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(89, 'TRB1468926362-89', '4000', 101, 1, 15, '4', 'C4,D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(90, 'TRB1468987591-90', '3000', 103, 25, 43, '153', 'C8', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(91, 'TRB1468987960-91', '3000', 103, 25, 43, '153', 'B2', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(92, 'TRB1468987960-92', '2000', 101, 1, 34, '153', 'A4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(93, 'TRB1468988780-93', '3000', 103, 25, 43, '4', 'C6', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(94, 'TRB1468989185-94', '3000', 103, 25, 43, '154', 'E3', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(95, 'TRB1468989185-95', '2000', 101, 1, 15, '154', 'E2', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(96, 'TRB1469515442-96', '2000', 101, 1, 16, '', 'E3', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(97, 'TRB1469515650-97', '2000', 101, 1, 16, '156', 'E4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(98, 'TRB1469515650-98', '2000', 101, 1, 16, '156', 'E4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(99, 'TRB1469603777-99', '3000', 126, 25, 43, '', 'C6', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(100, 'TRB1539278759', '5000', 141, 64, 54, '12', 'C3', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(101, 'TRB1559738943', '3500', 116, 69, 58, '11', 'C5', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(102, 'TRB1559739323', '3500', 116, 69, 58, '11', 'C5', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(103, 'TRB1559740283', '3500', 116, 69, 58, '11', 'D5', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(104, 'TRB1559740611', '3500', 116, 69, 58, '11', 'D5', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(105, 'TRB1559741780', '3500', 116, 69, 58, '11', 'D5', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(106, 'TRB1559742089', '7000', 116, 69, 58, '11', 'D4,D5', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(107, 'TRB1559801208', '7000', 116, 69, 58, '', 'D4,D5', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(108, 'TRB1559801438', '7000', 116, 69, 58, '', 'D4,D5', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(109, 'TRB1559802071', '3500', 116, 69, 58, '11', 'D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(110, 'TRB1559802122', '3500', 116, 69, 58, '11', 'D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(111, 'TRB1559802135', '3500', 116, 69, 58, '11', 'D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(112, 'TRB1559802204', '3500', 116, 69, 58, '11', 'D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(113, 'TRB1559802253', '3500', 116, 69, 58, '11', 'D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(114, 'TRB1559802256', '3500', 116, 69, 58, '11', 'D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(115, 'TRB1559804135', '3500', 116, 69, 58, '11', 'D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(116, 'TRB1559804300', '3500', 116, 69, 58, '11', 'D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(117, 'TRB1559804336', '3500', 116, 69, 58, '11', 'D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(118, 'TRB1559804376', '3500', 116, 69, 58, '11', 'D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(119, 'TRB1559804432', '3500', 116, 69, 58, '11', 'D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(120, 'TRB1559804852', '3500', 116, 69, 58, '11', 'D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(121, 'TRB1559805187', '3500', 116, 69, 58, '11', 'D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(122, 'TRB1559805288', '3500', 116, 69, 58, '11', 'D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(123, 'TRB1559805315', '3500', 116, 69, 58, '11', 'D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(124, 'TRB1559805414', '3500', 116, 69, 58, '11', 'D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(125, 'TRB1559805470', '3500', 116, 69, 58, '11', 'D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(126, 'TRB1559805567', '3500', 116, 69, 58, '11', 'D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(127, 'TRB1559805591', '3500', 116, 69, 58, '11', 'D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(128, 'TRB1559806060', '3500', 116, 69, 58, '11', 'D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(129, 'TRB1559806129', '4500', 116, 63, 55, '11', 'D5', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(130, 'TRB1559806353', '4500', 116, 63, 55, '11', 'D5', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(131, 'TRB1559806396', '4500', 116, 63, 55, '11', 'D5', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(132, 'TRB1559806429', '4500', 116, 63, 55, '11', 'D5', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(133, 'TRB1559806470', '4500', 116, 63, 55, '11', 'D5', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(134, 'TRB1559806534', '4500', 116, 63, 55, '11', 'D5', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(135, 'TRB1559806557', '4500', 116, 63, 55, '11', 'D5', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(136, 'TRB1559806590', '4500', 116, 63, 55, '11', 'D5', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(137, 'TRB1559806663', '4500', 116, 63, 55, '11', 'D5', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(138, 'TRB1559806745', '4500', 116, 63, 55, '11', 'D5', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(139, 'TRB1559806789', '4500', 116, 63, 55, '11', 'D5', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(140, 'TRB1559806923', '4500', 116, 63, 55, '11', 'D5', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(141, 'TRB1560034155', '9000', 116, 63, 55, '11', 'C3,D3', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(142, 'TRB1563354072', 'NaN', 101, 68, 56, '12', 'A2,A3,B1,B4,C3,D3', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(143, 'TRB1563354273', 'NaN', 101, 68, 56, '12', 'B3,B4,C2,C3,C4,D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(144, 'TRB1563354466', 'NaN', 101, 68, 56, '12', 'B3,B4,C2,C3,C4,D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(145, 'TRB1563354638', 'NaN', 101, 68, 56, '12', 'E3,E4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(146, 'TRB1563354787', 'NaN', 101, 68, 56, '12', 'C4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(147, 'TRB1563354920', 'NaN', 141, 64, 54, '12', 'E3,E4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(148, 'TRB1563355064', 'NaN', 141, 64, 54, '12', 'C4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(149, 'TRB1563355772', 'NaN', 141, 64, 54, '12', 'C5', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(150, 'TRB1563355907', 'NaN', 116, 69, 58, '12', 'C5', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(151, 'TRB1563357116', 'NaN', 101, 68, 56, '12', 'D3,D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(152, 'TRB1563361248', '7000', 101, 68, 56, '', 'C4,D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(153, 'TRB1563362335', '7000', 141, 70, 57, '', 'C3,C6', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(154, 'TRB1563362941', '7000', 141, 70, 57, '', 'C3,C6', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(155, 'TRB1563363356', '3500', 101, 68, 56, '', 'D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(156, 'TRB1563363509', '3500', 101, 68, 56, '', 'D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(157, 'TRB1563363816', '3500', 101, 68, 56, '12', 'C4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(158, 'TRB1563364869', '3500', 101, 68, 56, '12', 'C4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(159, 'TRB1563368062', '10500', 141, 70, 58, '12', 'C4,C5,D4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(160, 'TRB1563370857', '14000', 141, 70, 56, '12', 'B3,B4,C4,D3', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(161, 'TRB1563373385', '14000', 141, 70, 57, '', 'B1,B2,B3,B4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(162, 'TRB1563373842', '21000', 141, 70, 58, '', 'C1,C2,C3,C4,C5,E4', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(163, 'TRB1563457109', '3500', 141, 70, 57, '12', 'C3', 'Completed', 'paypal', '22-07-2019', 'Booking'),
(164, 'TRB1563798066', '3500', 101, 68, 56, '12', 'C4', 'Completed', 'paypal', '23-07-2019 ', 'Booking'),
(165, 'TRB1563877766', '2000', 102, 72, 0, '12', 'B1', '', '', '24-07-2019 ', ''),
(166, 'TRB1563890741', '1', 102, 72, 0, '12', 'E2', '', '', '24-07-2019 ', ''),
(167, 'TRB1563895774', '3500', 116, 69, 58, '12', 'E2', '', '', '24-07-2019 ', ''),
(168, 'TRB1563909973', '5500', 102, 77, 0, '', 'E3', '', '', '24-07-2019 ', ''),
(169, 'TRB1563910134', '5500', 102, 77, 0, '', 'E3', '', '', '24-07-2019 ', ''),
(170, 'TRB1563911030-170-170', '5500', 102, 77, 0, '', 'E3', 'Completed', 'paypal', '24-07-2019 ', 'Booking'),
(171, 'TRB1563912593-171', '3500', 101, 68, 60, '12', 'C9', 'Completed', 'paypal', '24-07-2019 ', 'Booking'),
(172, 'TRB1563913521-172', '5500', 102, 77, 0, '12', 'E2', 'Completed', 'paypal', '24-07-2019 ', 'Booking'),
(173, 'TRB1563915481-173', '5500', 102, 77, 0, '', 'A2', 'Completed', 'paypal', '24-07-2019 ', 'Booking'),
(174, 'TRB1563915710-174', '5500', 102, 77, 0, '', 'E1', 'Completed', 'paypal', '24-07-2019 ', 'Booking'),
(175, 'TRB1564040482', '5000', 127, 76, 64, '12', 'E2', '', '', '26-07-2019 ', ''),
(176, 'TRB1564040568-176', '5000', 127, 76, 64, '12', 'E2', 'Completed', 'paypal', '26-07-2019 ', 'Booking'),
(177, 'TRB1564044976', '2000', 102, 73, 61, '12', 'E3', '', '', '26-07-2019 ', ''),
(178, 'TRB1564054672-178', '9000', 102, 77, 0, '12', 'E2', 'Completed', 'paypal', '26-07-2019 ', 'Booking'),
(179, 'TRB1566909249-179', '9000', 102, 77, 0, '12', 'E2', 'Completed', 'paypal', '28-08-2019 ', 'Booking');

-- --------------------------------------------------------

--
-- Table structure for table `book_bus`
--

CREATE TABLE `book_bus` (
  `id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `book_date` datetime NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_bus`
--

INSERT INTO `book_bus` (`id`, `bus_id`, `user_id`, `book_date`, `amount`, `status`) VALUES
(1, 101, 'usr_001', '2016-04-25 14:22:29', '5000.00', 'Booked');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id` int(11) NOT NULL,
  `bus_name` varchar(20) NOT NULL,
  `bus_type_id` int(11) NOT NULL,
  `amenities_id` varchar(250) NOT NULL,
  `bus_reg_no` varchar(20) NOT NULL,
  `max_seats` int(11) NOT NULL,
  `board_point` varchar(250) NOT NULL,
  `board_time` varchar(20) NOT NULL,
  `drop_point` varchar(20) NOT NULL,
  `drop_time` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `bus_status` int(200) NOT NULL DEFAULT '1',
  `created_by` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `bus_name`, `bus_type_id`, `amenities_id`, `bus_reg_no`, `max_seats`, `board_point`, `board_time`, `drop_point`, `drop_time`, `status`, `bus_status`, `created_by`) VALUES
(101, 'CMS', 11, '4', 'TN-03/CC/5643', 50, 'Dindigul', '11:00 AM', 'Kottayam', '06:30 AM', 1, 1, 'admin'),
(102, 'SHARAN', 11, '6', 'RBC-0O4 AA', 7, 'Abuja,Utaku', '08:00 AM', 'Jos', '12:45 PM', 1, 1, 'admin'),
(103, 'KE', 13, '6', 'TN-05/BC/1234', 17, 'Ernakulam', '02:45 PM', 'Bangalore', '03:00 AM', 1, 1, 'admin'),
(104, 'RMS', 14, '0', 'KL-06/DA/7676', 50, 'Ernakulam', '03:30 PM', 'Bangalore', '03:30 PM', 1, 1, 'admin'),
(105, 'CMSE', 15, '12', 'TN-07/CV/2536', 42, 'Kumily', '11:00 PM', 'Ernakulam', '05:00 AM', 1, 1, 'admin'),
(112, 'RKS', 11, '1', 'KL-04/AC/0011', 60, 'Ernakulam', '02:15 PM', 'Bangalore', '12:45 AM', 1, 1, 'admin'),
(113, 'COMPUTER BUS', 15, '2', 'IDM-192 QA', 15, 'ANAMBRA, NKPOR', '09:00 AM', 'Rivers,RUMONA', '06:00 PM', 1, 1, 'admin'),
(115, 'HUMMERBUS', 15, '5', 'RBC-56 AB', 18, 'Abuja', '07:00 AM', 'Lagos', '06:00 PM', 1, 1, '2'),
(116, 'XUV', 12, '', 'IGB-136 AC', 16, 'Enugu', '09:00 AM', 'Nsukka', '10:30 AM', 1, 1, '1'),
(117, 'MARCOPOLO', 13, '1,2', 'JJN-145 BA ', 55, 'Kano', '06:30 PM', 'Abia', '10:30 AM', 1, 1, 'admin'),
(125, 'CHINABUS', 15, '2,4', 'NJK-343 AA', 16, 'ANAMBRA, NKPOR', '08:00 AM', 'Enugu, Abakpa', '01:30 PM', 1, 0, 'admin'),
(126, 'HIACE, BUS', 15, '1', 'OSH-435 LG', 14, 'Lagos', '12:00 PM', 'Abuja', '10:15 PM', 1, 1, '1'),
(127, 'TOYOTA, COASTER', 11, '5', 'FKJ-785 XA', 26, 'Lagos', '10:00 AM', 'Abuja', '09:00 PM', 1, 1, '2'),
(128, 'COASTER', 12, '1', 'IKR-009 AE', 22, 'Lagos', '08:00 AM', 'Abuja', '07:00 PM', 1, 1, 'admin'),
(129, 'BUSSCAR', 15, '1,2', 'GGE-090ZY', 60, 'Abia', '06:30 PM', 'Kano', '10:15 AM', 1, 1, 'admin'),
(130, 'NMS', 11, '1,3,5', 'KL-02/AZ/0908', 60, 'Ernakulam', '10:45 AM', 'Ernalulam', '10:45 AM', 1, 0, 'admin'),
(134, 'SHYAMA', 11, '1,2,5', 'A-12', 49, 'kochi', '11:30 AM', 'Kannur', '11:30 PM', 1, 0, 'admin'),
(135, 'TEST', 11, '2,3,4,5', 'FSDF', 20, 'kochi', '05:00 PM', 'kollam', '05:00 AM', 1, 0, 'admin'),
(136, 'SAMPLE', 11, '3', 'DFD', 49, 'kochi', '05:15 PM', 'kollam', '05:15 AM', 1, 0, 'admin'),
(137, 'TTEST', 15, '4', 'RRT', 33, '3RR', '09:00 AM', 'RTR', '09:00 PM', 1, 0, 'admin'),
(138, 'tttt', 12, '3,5', 'erer', 33, 'sfsf', '11:30 AM', 'sfsf', '11:30 PM', 1, 0, 'admin'),
(139, 'erqe', 12, '3,4,5', 'ere', 22, 'rer', '11:30 AM', 'werw', '11:30 PM', 1, 0, 'admin'),
(140, 'ty', 11, '6', 'rrr', 11, 'kochi', '12:30 PM', 'werw', '12:30 AM', 1, 0, 'admin'),
(141, 'CHINA BUS', 15, '', 'NSK-101EN', 18, 'Old park', '08:00 AM', 'Nsukka', '09:15 AM', 1, 1, 'admin'),
(142, 'SHARON', 11, '2', 'ABC-333 AY', 11, 'ABUJA', '03:00 PM', 'JOS', '06:00 PM', 1, 0, 'admin'),
(143, 'MARCOPOLO', 11, '5', 'FGE-111 SA', 55, 'Kano', '10:30 AM', 'Abia', '01:30 AM', 1, 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bus_count`
--

CREATE TABLE `bus_count` (
  `id` int(11) NOT NULL,
  `terminal_id` int(11) NOT NULL,
  `no_of_buses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_count`
--

INSERT INTO `bus_count` (`id`, `terminal_id`, `no_of_buses`) VALUES
(1, 1, 15),
(2, 3, 30),
(3, 4, 5),
(4, 5, 8),
(5, 6, 10),
(6, 7, 12),
(7, 8, 15),
(8, 9, 18),
(9, 10, 11),
(10, 11, 7),
(11, 12, 3),
(12, 13, 11),
(13, 14, 4);

-- --------------------------------------------------------

--
-- Table structure for table `bus_gallery`
--

CREATE TABLE `bus_gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(750) NOT NULL,
  `user_id` int(250) NOT NULL,
  `bus_id` int(250) NOT NULL,
  `created_by` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_gallery`
--

INSERT INTO `bus_gallery` (`id`, `image`, `user_id`, `bus_id`, `created_by`) VALUES
(75, 'assets/uploads/img/1469103203_1-Capture.PNG', 1, 131, 0),
(79, 'assets/uploads/img/1469186137_1-20130518-062857.jpg', 1, 133, 0),
(80, 'assets/uploads/img/1469186137_1-beautiful_daffodils-wallpaper-1366x768.jpg', 1, 133, 0),
(81, 'assets/uploads/img/1469186137_1-open_book_macro_2-wallpaper-1366x768.jpg', 1, 133, 0),
(82, 'assets/uploads/img/1469255065_1-20130518-062857.jpg', 1, 134, 0),
(83, 'assets/uploads/img/1469447643_1-_MG_1197W.jpg', 1, 135, 0),
(84, 'assets/uploads/img/1469448384_1-_MG_1125W.jpg', 1, 136, 0),
(91, 'assets/uploads/img/1469622647_1-bus-rusty.jpg', 1, 101, 0),
(92, 'assets/uploads/img/1469622694_1-vray_vehicle_bus.jpg', 1, 141, 0),
(93, 'assets/uploads/img/1469622751_1-40seater-3.jpg', 1, 102, 0),
(94, 'assets/uploads/img/1469622771_1-Desh-Travel-Bus.jpg', 1, 102, 0),
(95, 'assets/uploads/img/1469622827_1-1393157496bus1.jpg', 1, 103, 0),
(96, 'assets/uploads/img/1469622857_1-bus_PNG8621.png', 1, 103, 0),
(97, 'assets/uploads/img/1469622906_1-disel1.png', 1, 104, 0),
(98, 'assets/uploads/img/1469622944_1-45-seater-bus.png', 1, 104, 0),
(99, 'assets/uploads/img/1469622973_1-0-CoachBlue.png', 1, 105, 0),
(100, 'assets/uploads/img/1469622993_1-1435748382131868075714283121063059967bus1_(1).jpg', 1, 112, 0),
(101, 'assets/uploads/img/1469623051_1-otobus.png', 1, 113, 0),
(102, 'assets/uploads/img/1469689700_1-HinoBus_h200px.jpg', 1, 116, 0),
(104, 'assets/uploads/img/1469689727_1-kkbooking_in_bus2.jpg', 1, 126, 0),
(105, 'assets/uploads/img/1563260222_1-BCM_New_Livery.JPG', 1, 101, 0),
(106, 'assets/uploads/img/1563260525_1-toyota-hiace-commuter-bus-3l-mt-2f6d.jpg', 1, 141, 0),
(107, 'assets/uploads/img/1563260582_1-127172_3c84_27_jpg29de515b80392ac09bf1da5456b42f52.jpg', 1, 103, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bus_state`
--

CREATE TABLE `bus_state` (
  `id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `terminal_id` int(11) NOT NULL,
  `take_off_time` datetime NOT NULL,
  `arrival_time` datetime DEFAULT NULL,
  `destination_terminal_id` int(11) DEFAULT NULL,
  `state` varchar(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_state`
--

INSERT INTO `bus_state` (`id`, `bus_id`, `terminal_id`, `take_off_time`, `arrival_time`, `destination_terminal_id`, `state`) VALUES
(1, 0, 1, '2019-07-03 02:53:00', '2019-07-05 08:03:00', 6, 'running'),
(2, 0, 1, '2019-07-03 05:30:00', '2019-07-04 18:17:00', 5, 'running'),
(3, 104, 8, '2019-07-14 13:22:00', NULL, 13, 'running');

-- --------------------------------------------------------

--
-- Table structure for table `bus_type`
--

CREATE TABLE `bus_type` (
  `id` int(11) NOT NULL,
  `bus_type` varchar(20) NOT NULL,
  `status` varchar(250) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_type`
--

INSERT INTO `bus_type` (`id`, `bus_type`, `status`) VALUES
(11, 'AC', '0'),
(12, 'Non AC', '0'),
(13, 'Sleeper', '0'),
(14, 'Cab', '0'),
(15, 'AC Bus', '1'),
(16, 'RTC', '1'),
(17, 'Cab', '0'),
(18, 'AC/NON AC', '0'),
(19, 'AC / CAB', '0'),
(20, 'NON AC', '0'),
(21, 'OOO', '0'),
(22, 'OOP', '0'),
(23, 'TESTTEST', '0'),
(24, 'TESTt', '0');

-- --------------------------------------------------------

--
-- Table structure for table `cancellation`
--

CREATE TABLE `cancellation` (
  `id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `advertisement_status` int(250) NOT NULL,
  `cancel_time` varchar(250) NOT NULL,
  `percentage` varchar(11) NOT NULL,
  `flat` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `key` varchar(50) NOT NULL,
  `value` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(250) NOT NULL,
  `age` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `booking_id` varchar(250) NOT NULL,
  `order_id` varchar(250) NOT NULL,
  `seat_no` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`id`, `customer_name`, `age`, `mobile`, `email`, `gender`, `booking_id`, `order_id`, `seat_no`) VALUES
(129, 'manu', '24', '1234567890', 'shsjd@hsdu.gdf', 'male', 'TRB1468559520', '53', 'A8'),
(130, 'manu', '24', '1234567890', 'shsjd@hsdu.gdf', 'male', 'TRB1468559520', '54', 'A4'),
(131, 'erty', '23', 'TRB1468559554-55', 'shibilabs23@gmail.com', 'male', 'TRB1468559554-55', '55', 'A8'),
(132, 'erty', '23', '1234567890', 'df@fgf.gh', 'male', 'TRB1468559554', '56', 'A4'),
(133, 'hjh', '12', '13457890767', 'vbv!fh@fg.hj', 'male', 'TRB1468563980', '57', 'C7'),
(134, 'hjh', '56', '13457890767', 'vbv!fh@fg.hj', 'male', 'TRB1468563980', '57', 'D7'),
(135, 'hjh', '12', '13457890767', 'vbv!fh@fg.hj', 'male', 'TRB1468563980', '58', 'C4'),
(136, 'hjh', '56', '13457890767', 'vbv!fh@fg.hj', 'male', 'TRB1468563980', '58', 'D3'),
(137, 'shh', '23', '1234567890', 'hgh@GH.U', 'female', 'TRB1468657011', '59', 'C3'),
(138, 'dfg', '23', '1234567890', 'hgh@GH.U', 'female', 'TRB1468657011', '59', 'C4'),
(139, 'ER', '34', '1234567890', 'HG@GH.YH', 'female', 'TRB1468657203', '60', 'C3'),
(140, 'GFG', '54', '1234567890', 'HG@GH.YH', 'female', 'TRB1468657203', '60', 'C4'),
(141, 'VB', '3', '1234567890', 'BNB@RY.H', 'male', 'TRB1468657251', '61', 'C3'),
(142, 'ER', '3', '1234567890', 'BNB@RY.H', 'male', 'TRB1468657251', '61', 'C4'),
(143, 'gfg', '343', '1234567890', 'jh@ty.th', 'male', 'TRB1468657350', '62', 'C3'),
(144, 'ef', '3', '1234567890', 'jh@ty.th', 'male', 'TRB1468657350', '62', 'C4'),
(145, 'rtr', '4', '1234567890', 'kl@rt.hg', 'male', 'TRB1468657385', '63', 'C3'),
(146, 're', '5', '1234567890', 'kl@rt.hg', 'male', 'TRB1468657385', '63', 'C4'),
(147, 'werc', '243', '1234567890', 'v@rj.ghg', 'male', 'TRB1468657486', '64', 'C3'),
(148, 'ty', '4', '1234567890', 'v@rj.ghg', 'male', 'TRB1468657486', '64', 'C4'),
(149, 'ty', '5', '1234567890', 'vg@hj.g', 'male', 'TRB1468657742', '65', 'C3'),
(150, 'f', '5', '1234567890', 'vg@hj.g', 'male', 'TRB1468657742', '65', 'C4'),
(151, 'ty', '3', '1234567890', 'df@fg.yh', 'male', 'TRB1468657841', '66', 'D4'),
(152, 're', '4', '0987654321', 'cv@ghj.tr', 'male', 'TRB1468657894', '67', 'D4'),
(153, 't', '4', '1323243434343', 'fg@t.yu', 'male', 'TRB1468657997', '68', 'D4'),
(154, 'yu', '66', '1234567890', 'fg@tgh.gh', 'male', 'TRB1468658140', '69', 'D4'),
(155, 't', '4', '1234567890', 'downloaddf@gh.g', 'male', 'TRB1468658271', '70', 'D4'),
(156, 'Ragunathan', '24', '9979798556', 'ragu1991nathan@gmail.com', 'male', 'TRB1468839488', '71', 'C8'),
(157, 'ragunathan', '25', '95260855456', 'ragu1991nathan@gmail.com', 'male', 'TRB1468839741', '72', 'C9'),
(158, 'ragunathah', '24', '3243433', 'ragu@gmail.com', 'male', 'TRB1468839874', '73', 'C8'),
(159, 'r', '23', '1234567890', 'vbv@ghg.gh', 'male', 'TRB1468840107', '74', 'C8'),
(160, 'fdf', '34', '1234567890', 'd@fg.hj', 'female', 'TRB1468840392', '75', 'C8'),
(161, 'wwwwww', '232', '1234567890', 'df@hg.ff', 'male', 'TRB1468910408', '76', 'D7'),
(162, 'wwwwww', '232', '1234567890', 'df@hg.ff', 'male', 'TRB1468910409', '77', 'C8'),
(163, 'gh', '56', '1234567890', 'fghf@fgh.df', 'male', 'TRB1468918433', '78', 'C8'),
(164, 'yj', '23', '123456789', 'nbb@hm.d', 'male', 'TRB1468919373', '79', 'D5'),
(165, 'Ragu', '24', '9897959595', 'ragu@gmail.com', 'male', 'TRB1468920018', '80', 'E1'),
(166, 'Ragu', '24', '9897959595', 'ragu@gmail.com', 'male', 'TRB1468920018', '81', 'C8'),
(167, 'Ragu', '24', '9897959595', 'ragu@gmail.com', 'male', 'TRB1468920029', '82', 'E1'),
(168, 'Ragu', '24', '9897959595', 'ragu@gmail.com', 'male', 'TRB1468920029', '83', 'C8'),
(169, 'Ragu', '23', '2132332232', 'test@gm.m', 'male', 'TRB1468920084', '84', 'E1'),
(170, 'Ragu', '23', '2132332232', 'test@gm.m', 'male', 'TRB1468920084', '85', 'C8'),
(171, 'yj', '23', '123456789', 'nbb@hm.d', 'male', 'TRB1468920488', '86', 'D5'),
(172, 'Ragu', '25', '1234567890', 'ragu@gmail.com', 'male', 'TRB1468922448', '87', 'C6'),
(173, 'test', '21', '1234567890', 'ragu@gmail.com', 'female', 'TRB1468922448', '87', 'C7'),
(174, 'Nahtn', '24', '1234567890', 'ragu@gmail.com', 'male', 'TRB1468922448', '87', 'C8'),
(175, 'df', '23', '1234638493', 'shibilabs23@gmail.com', 'male', 'TRB1468923989', '88', 'E4'),
(176, 'ui', '88', '123456789', 'shibilabs23@gmail.com', 'male', 'TRB1468926362', '89', 'C4'),
(177, 'vb', '78', '123456789', 'shibilabs23@gmail.com', 'female', 'TRB1468926362', '89', 'D4'),
(178, 'rahu', '25', '2525252525', 'ragu@ragu.com', 'male', 'TRB1468987591-90', '90', 'C8'),
(179, 'ragu', '25', '1324343441', 'ragu@gmail.com', 'male', 'TRB1468987960-91', '91', 'B2'),
(180, 'ragu', '25', '1324343441', 'ragu@gmail.com', 'male', 'TRB1468987960-92', '92', 'A4'),
(181, 'ragu', '23', '1234567890', 'shibilabs23@gmail.com', 'male', 'TRB1468988780-93', '93', 'C6'),
(182, 'JAINYMOL', '25', '5678568756', 'jainymol.techware@gmail.com', 'female', 'TRB1468989185-94', '94', 'E3'),
(183, 'JAINYMOL', '25', '5678568756', 'jainymol.techware@gmail.com', 'female', 'TRB1468989185-95', '95', 'E2'),
(184, 'test', '22', '3232323232', 'jainymol@techware.in', 'male', 'TRB1469515442-96', '96', 'E3'),
(185, 'test', '22', '22223232322', 'jainymol@techware.in', 'male', 'TRB1469515650-97', '97', 'E4'),
(186, 'test', '22', '22223232322', 'jainymol@techware.in', 'male', 'TRB1469515650-98', '98', 'E4'),
(187, 'test', '25', '13254354445', 'download@tre.com', 'male', 'TRB1469603777-99', '99', 'C6'),
(188, 'CHIDIMMA', '30', '08032181006', 'agubatachidimma@gmail.com', 'female', 'TRB1539278759', '100', 'C3'),
(189, 'CHIDIMMA', '30', '08032181006', 'agubatachidimma@gmail.com', 'female', 'TRB1539278759', '101', 'C3'),
(190, 'Godwin', '33', '8161382451', 'gkalu30@gmail.com', 'male', 'TRB1559806789', '139', 'D5'),
(191, 'Godwin', '33', '8161382451', 'gkalu30@gmail.com', 'male', 'TRB1559806923', '140', 'D5'),
(192, 'Godwin Kalu', '11', '08161382451', 'gkalu30@gmail.com', 'male', 'TRB1560034155', '141', 'C3'),
(193, 'goddy kay', '33', '08161382451', 'gkalu30@gmail.com', 'female', 'TRB1560034155', '141', 'D3'),
(194, 'chidimma', '23', '08032181006', 'agubatachidimma@gmail.com', 'female', 'TRB1563354920', '147', 'E3'),
(195, 'godwin', '22', '08032181006', 'agubatachidimma@gmail.com', 'male', 'TRB1563354920', '147', 'E4'),
(196, 'ginika', '32', '08032181006', 'agubatachidimma@gmail.com', 'female', 'TRB1563355064', '148', 'C4'),
(197, 'nonso', '23', '08032181006', 'umegoginika@gmail.com', 'male', 'TRB1563355772', '149', 'C5'),
(198, 'dimma', '12', '08032181006', 'agubatachidimma@gmail.com', 'female', 'TRB1563368062', '159', 'C4'),
(199, 'joy', '22', '08032181006', 'agubatachidimma@gmail.com', 'female', 'TRB1563368062', '159', 'C5'),
(200, 'chi', '33', '08032181006', 'agubatachidimma@gmail.com', 'female', 'TRB1563368062', '159', 'D4'),
(201, 'Chidi', '23', '08032151617', 'agubatachidimma@gmail.com', 'female', 'TRB1563370857', '160', 'B3'),
(202, 'Godwin', '24', '08032151617', 'agubatachidimma@gmail.com', 'male', 'TRB1563370857', '160', 'B4'),
(203, 'Blaise', '25', '08032151617', 'agubatachidimma@gmail.com', 'male', 'TRB1563370857', '160', 'C4'),
(204, 'Siri', '26', '08032151617', 'agubatachidimma@gmail.com', 'male', 'TRB1563370857', '160', 'D3'),
(205, 'jane', '22', '08045454545', 'umegoginika@gmail.com', 'female', 'TRB1563373385', '161', 'B1'),
(206, 'sabina', '21', '08045454545', 'umegoginika@gmail.com', 'female', 'TRB1563373385', '161', 'B2'),
(207, 'nche', '23', '08045454545', 'umegoginika@gmail.com', 'female', 'TRB1563373385', '161', 'B3'),
(208, 'ekene', '22', '08045454545', 'umegoginika@gmail.com', 'male', 'TRB1563373385', '161', 'B4'),
(209, 'aloy', '21', '09065432123', 'aloyagu@gmail.com', 'male', 'TRB1563373842', '162', 'C1'),
(210, 'chibu', '22', '09065432123', 'aloyagu@gmail.com', 'male', 'TRB1563373842', '162', 'C2'),
(211, 'ife', '23', '09065432123', 'aloyagu@gmail.com', 'male', 'TRB1563373842', '162', 'C3'),
(212, 'amobi', '24', '09065432123', 'aloyagu@gmail.com', 'male', 'TRB1563373842', '162', 'C4'),
(213, 'oluchi', '25', '09065432123', 'aloyagu@gmail.com', 'female', 'TRB1563373842', '162', 'C5'),
(214, 'uka', '26', '09065432123', 'aloyagu@gmail.com', 'female', 'TRB1563373842', '162', 'E4'),
(215, 'onyi', '22', '08032128287', 'agubatachidimma@gmail.com', 'female', 'TRB1563457109', '163', 'C3'),
(216, 'agu', '34', '09087654567', 'ogbuagujohnphilip@gmail.com', 'female', 'TRB1563798066', '164', 'C4'),
(217, 'agubatachidimma', '12', '0805463234', 'agubatachidimma@gmail.com', 'female', 'TRB1563877766', '165', 'B1'),
(218, 'Dimma', '32', '08032181006', 'agubatachidimma@gmail.com', 'female', 'TRB1563890741', '166', 'E2'),
(219, 'Esiri', '23', '0805654323', 'ighobulu@gmail.com', 'male', 'TRB1563895774', '167', 'E2'),
(220, 'dhfjdh', '22', '87215271621', 'immaculate.agubata.pg80573@unn.edu.ng', 'male', 'TRB1563909973', '168', 'E3'),
(221, 'dhfjdh', '22', '87215271621', 'immaculate.agubata.pg80573@unn.edu.ng', 'male', 'TRB1563910134', '169', 'E3'),
(222, 'gfhgdfgh', '22', '782363763', 'agubatachidimma@gmail.com', 'male', 'TRB1563911030-170-170', '170', 'E3'),
(223, 'ginika', '54', '0807654321', 'umegoginika@gmail.com', 'female', 'TRB1563912593-171', '171', 'C9'),
(224, 'blaise', '32', '08065432456', 'immaculate.agubata.pg80573@unn.edu.ng', 'male', 'TRB1563913521-172', '172', 'E2'),
(225, 'ginika', '22', '08134717667', 'umegoginika@gmail.com', 'female', 'TRB1563915481-173', '173', 'A2'),
(226, 'blaise', '33', '090876377484', 'blaise@gmail.com', 'male', 'TRB1563915710-174', '174', 'E1'),
(227, 'ukamaka', '22', '08141414141', 'agubataukamaka@gmail.com', 'female', 'TRB1564040482', '175', 'E2'),
(228, 'ukamaka', '22', '08141414141', 'agubataukamaka@gmail.com', 'female', 'TRB1564040568-176', '176', 'E2'),
(229, 'Ebere', '12', '0807654321', 'ebele@gmail.com', 'female', 'TRB1564044976', '177', 'E3'),
(230, 'asderr', '56', '0908765487', 'agubatachidimma@gmail.com', 'male', 'TRB1564054672-178', '178', 'E2'),
(231, 'helen', '34', '0804556544', 'helen@gmail.com', 'female', 'TRB1566909249-179', '179', 'E2');

-- --------------------------------------------------------

--
-- Table structure for table `drop_points`
--

CREATE TABLE `drop_points` (
  `id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `drop_point` varchar(250) NOT NULL,
  `stoping_point` varchar(250) NOT NULL,
  `drop_time` varchar(250) DEFAULT NULL,
  `landmark` varchar(250) DEFAULT NULL,
  `address` varchar(250) NOT NULL,
  `status` int(200) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drop_points`
--

INSERT INTO `drop_points` (`id`, `bus_id`, `drop_point`, `stoping_point`, `drop_time`, `landmark`, `address`, `status`) VALUES
(1, 102, '2', 'Aluva', '11:15 AM', 'MG Road', 'Ernakulam', 1),
(2, 101, '1', 'Muttam', '03:00 PM', 'MG', 'Ernakulam', 1),
(3, 103, '3', 'Aluva', '03:00 PM', 'MG Road', 'Ernakulam', 1),
(5, 103, '3', 'kozhikode', '04:15 PM', 'thalashery  railway', 'fdsfsdf', 1),
(6, 134, '45', 'thalasherry', '02:15 PM', 'railway station', 'GHGFH', 1),
(7, 135, '46', 'ddf', '05:00 PM', 'dfdf', 'dfd', 1),
(8, 136, '47', 'FRF', '05:15 PM', 'SDF', 'SDF', 1),
(9, 137, '48', 'YUTYp', '09:00 AM', 'FG', 'DFG', 1),
(10, 116, '26', 'angamaly', '12:30 PM', 'we', 'we', 1),
(11, 141, '64', 'ONITSHA', '04:30 PM', '200KM', 'ENUGU ROAD BY SOUTNERN BUS STOP', 1),
(12, 102, '77', 'Ajah', '08:45 PM', 'hilly', 'Lagos,Ajah', 1),
(13, 115, '71', 'Oshodi', '07:30 PM', '675', 'Lagos,Oshodi', 1),
(14, 141, '70', 'Nsukka', '10:30 PM', 'Ogige market', 'Enugu, Nsukka', 1);

-- --------------------------------------------------------

--
-- Table structure for table `excess`
--

CREATE TABLE `excess` (
  `id` int(11) NOT NULL,
  `terminal_id` int(11) NOT NULL,
  `no_of_excess_buses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `excess`
--

INSERT INTO `excess` (`id`, `terminal_id`, `no_of_excess_buses`) VALUES
(1, 1, 6),
(2, 8, 12),
(3, 10, 3),
(4, 11, 2),
(5, 12, 2),
(6, 13, 2),
(7, 15, 2);

-- --------------------------------------------------------

--
-- Table structure for table `location_graph`
--

CREATE TABLE `location_graph` (
  `id` int(11) NOT NULL,
  `terminal_1` int(11) NOT NULL,
  `terminal_2` int(11) NOT NULL,
  `distance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location_graph`
--

INSERT INTO `location_graph` (`id`, `terminal_1`, `terminal_2`, `distance`) VALUES
(9, 1, 3, 235),
(10, 4, 10, 266),
(11, 4, 11, 259),
(12, 4, 12, 272),
(13, 3, 8, 64),
(14, 3, 9, 56),
(15, 8, 9, 9.4),
(16, 5, 4, 325),
(17, 12, 11, 32),
(18, 3, 13, 65),
(19, 8, 13, 8.5),
(20, 13, 9, 15),
(21, 5, 7, 967),
(22, 7, 4, 841),
(23, 1, 5, 1024),
(24, 1, 7, 233),
(25, 1, 9, 181),
(26, 3, 11, 362),
(27, 1, 8, 175),
(28, 1, 13, 165),
(29, 1, 12, 645),
(30, 6, 7, 51),
(31, 10, 12, 8.7),
(32, 11, 10, 24),
(33, 5, 10, 430),
(34, 15, 16, 48),
(35, 15, 17, 22),
(36, 16, 17, 50);

-- --------------------------------------------------------

--
-- Table structure for table `moved`
--

CREATE TABLE `moved` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `booking_detail_id` int(11) NOT NULL,
  `old_route_id` int(11) NOT NULL,
  `new_route_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moved`
--

INSERT INTO `moved` (`id`, `user_id`, `booking_detail_id`, `old_route_id`, `new_route_id`, `created`, `modified`) VALUES
(1, 12, 160, 68, 69, '2019-07-22 00:48:56', '2019-07-22 00:48:56'),
(2, 12, 160, 68, 69, '2019-07-22 00:48:59', '2019-07-22 00:48:59'),
(3, 12, 160, 68, 69, '2019-07-22 00:49:42', '2019-07-22 00:49:42'),
(4, 12, 160, 68, 69, '2019-07-22 00:50:25', '2019-07-22 00:50:25'),
(5, 12, 160, 68, 69, '2019-07-22 00:51:04', '2019-07-22 00:51:04'),
(6, 12, 160, 68, 69, '2019-07-22 00:51:44', '2019-07-22 00:51:44'),
(7, 12, 160, 68, 69, '2019-07-22 00:52:27', '2019-07-22 00:52:27'),
(8, 12, 160, 68, 69, '2019-07-22 00:53:05', '2019-07-22 00:53:05'),
(9, 12, 160, 68, 69, '2019-07-22 00:53:48', '2019-07-22 00:53:48'),
(10, 12, 160, 68, 69, '2019-07-22 00:55:11', '2019-07-22 00:55:11'),
(11, 12, 160, 68, 69, '2019-07-22 00:55:13', '2019-07-22 00:55:13'),
(12, 12, 160, 68, 69, '2019-07-22 00:56:53', '2019-07-22 00:56:53'),
(13, 12, 160, 68, 69, '2019-07-22 00:56:54', '2019-07-22 00:56:54'),
(14, 12, 160, 68, 69, '2019-07-22 00:57:27', '2019-07-22 00:57:27'),
(15, 12, 159, 69, 70, '2019-07-22 01:00:19', '2019-07-22 01:00:19'),
(16, 12, 160, 69, 70, '2019-07-22 01:01:44', '2019-07-22 01:01:44'),
(17, 4, 72, 3, 1, '2019-07-22 01:23:02', '2019-07-22 01:23:02'),
(18, 4, 74, 3, 1, '2019-07-22 01:23:28', '2019-07-22 01:23:28'),
(19, 4, 75, 3, 1, '2019-07-22 01:24:12', '2019-07-22 01:24:12'),
(20, 4, 77, 3, 1, '2019-07-22 01:24:45', '2019-07-22 01:24:45'),
(21, 4, 78, 3, 1, '2019-07-22 01:26:53', '2019-07-22 01:26:53');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `bus_quality` varchar(250) NOT NULL,
  `punctuality` varchar(250) NOT NULL,
  `Staff_behaviour` varchar(250) NOT NULL,
  `average` varchar(250) NOT NULL,
  `comments` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `requesting_terminal` int(11) NOT NULL,
  `terminal_from` int(11) NOT NULL,
  `number_needed` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `serviced` varchar(5) NOT NULL DEFAULT 'false',
  `cancelled` varchar(5) NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `requesting_terminal`, `terminal_from`, `number_needed`, `created`, `modified`, `serviced`, `cancelled`) VALUES
(1, 3, 1, 5, '2019-06-26 09:02:43', '2019-06-26 09:02:43', '', ''),
(2, 3, 8, 4, '2019-06-26 09:39:21', '2019-07-02 21:54:13', 'true', 'false'),
(3, 3, 8, 5, '2019-06-26 09:53:42', '2019-07-15 18:13:15', 'true', 'false'),
(4, 13, 8, 4, '2019-07-02 17:39:31', '2019-07-02 17:39:31', 'false', 'false'),
(5, 3, 5, 2, '2019-07-02 18:04:21', '2019-07-02 18:04:21', 'false', 'false'),
(6, 3, 8, 2, '2019-07-24 22:57:28', '2019-07-24 22:57:28', 'false', 'false'),
(7, 4, 8, 1, '2019-09-17 10:58:32', '2019-09-17 10:58:32', 'false', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `board_point` varchar(20) NOT NULL,
  `board_time` time NOT NULL,
  `drop_point` varchar(20) NOT NULL,
  `drop_time` varchar(20) NOT NULL,
  `fare` int(11) NOT NULL,
  `status` int(200) NOT NULL DEFAULT '1',
  `created_by` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `bus_id`, `board_point`, `board_time`, `drop_point`, `drop_time`, `fare`, `status`, `created_by`) VALUES
(63, 116, 'JOS', '08:00:00', 'ENUGU', '06:00 PM', 4500, 1, 'admin'),
(64, 141, 'ENUGU', '08:00:00', 'JOS', '06:00 PM', 5000, 0, 'admin'),
(65, 116, 'Enugu', '09:00:00', 'NSUKKA', '10:30 AM', 500, 1, 'admin'),
(66, 102, 'ABA', '09:00:00', 'NSUKKA', '04:00 PM', 3000, 1, 'admin'),
(67, 101, 'Nsukka', '10:00:00', 'ABA', '05:15 PM', 3000, 1, 'admin'),
(68, 101, 'delta', '12:00:00', 'lagos', '11:30 PM', 3500, 1, 'admin'),
(69, 116, 'delta', '13:00:00', 'lagos', '11:00 PM', 3500, 1, 'admin'),
(70, 141, 'old park', '08:00:00', 'Nsukka', '09:15 PM', 500, 1, 'admin'),
(71, 115, 'Abuja', '07:00:00', 'lagos', '06:00 PM', 7200, 1, 'admin'),
(73, 102, 'Abuja', '18:15:00', 'Jos', '09:30 PM', 2000, 0, 'admin'),
(74, 113, 'Ikorodu', '07:30:00', 'Abuja', '06:30 AM', 6800, 1, 'admin'),
(75, 126, 'Lagos', '12:00:00', 'Abuja', '10:30 PM', 8000, 1, 'admin'),
(76, 127, 'Lagos', '10:00:00', 'Abuja', '10:30 PM', 5000, 1, 'admin'),
(77, 102, 'Abuja', '09:00:00', 'lagos', '07:45 PM', 9000, 1, 'admin'),
(78, 102, 'Abuja', '09:45:00', 'Jos', '03:45 PM', 2400, 0, 'admin'),
(79, 142, 'ABUJA', '02:00:00', 'JOS', '05:00 PM', 2100, 1, 'admin'),
(80, 129, 'Aba', '06:30:00', 'Kano', '10:15 AM', 7000, 1, 'admin'),
(81, 128, 'Lagos', '08:00:00', 'Abuja', '07:00 PM', 6000, 1, 'admin'),
(82, 117, 'Kano', '07:00:00', 'Abia', '10:00 AM', 7000, 1, 'admin'),
(83, 117, 'Abia', '02:30:00', 'Kano', '12:30 AM', 7000, 1, 'admin'),
(84, 141, 'jos', '01:30:00', 'enugu', '01:30 PM', 3000, 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `seat_layout`
--

CREATE TABLE `seat_layout` (
  `id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `bus_type` varchar(250) NOT NULL,
  `totel_seat` varchar(250) NOT NULL,
  `layout` longtext NOT NULL,
  `layout_type` varchar(250) NOT NULL,
  `last_seat` varchar(250) NOT NULL,
  `no_sleeper` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat_layout`
--

INSERT INTO `seat_layout` (`id`, `bus_id`, `bus_type`, `totel_seat`, `layout`, `layout_type`, `last_seat`, `no_sleeper`) VALUES
(86, 102, 'Seater && Sleeper', '7', '{\"0\":[{\"bus\":0,\"type\":\"seater\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"seater\",\"seat_no\":\"A2\"}],\"1\":[{\"bus\":2,\"type\":\"seater\",\"seat_no\":\"B1\"},{\"bus\":3,\"type\":\"seater\",\"seat_no\":\"B2\"}],\"2\":[],\"3\":[],\"4\":[{\"bus\":4,\"type\":\"seater\",\"seat_no\":\"E1\"},{\"bus\":5,\"type\":\"seater\",\"seat_no\":\"E2\"},{\"bus\":6,\"type\":\"seater\",\"seat_no\":\"E3\"},{\"bus\":7,\"type\":\"sleeper1\",\"seat_no\":\"E4\"},{\"bus\":8,\"type\":\"sleeper1\",\"seat_no\":\"E5\"}]}', 'layout-1', '3', ''),
(87, 141, 'Seater && Sleeper', '18', '{\"0\":[{\"bus\":0,\"type\":\"seater\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"seater\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"seater\",\"seat_no\":\"A3\"},{\"bus\":3,\"type\":\"seater\",\"seat_no\":\"A4\"}],\"1\":[{\"bus\":4,\"type\":\"seater\",\"seat_no\":\"B1\"},{\"bus\":5,\"type\":\"seater\",\"seat_no\":\"B2\"},{\"bus\":6,\"type\":\"seater\",\"seat_no\":\"B3\"},{\"bus\":7,\"type\":\"seater\",\"seat_no\":\"B4\"}],\"2\":[{\"bus\":12,\"type\":\"seater\",\"seat_no\":\"C1\"},{\"bus\":13,\"type\":\"seater\",\"seat_no\":\"C2\"},{\"bus\":14,\"type\":\"seater\",\"seat_no\":\"C3\"},{\"bus\":15,\"type\":\"seater\",\"seat_no\":\"C4\"},{\"bus\":16,\"type\":\"seater\",\"seat_no\":\"C5\"},{\"bus\":17,\"type\":\"seater\",\"seat_no\":\"C6\"}],\"3\":[],\"4\":[{\"bus\":14,\"type\":\"seater\",\"seat_no\":\"E1\"},{\"bus\":15,\"type\":\"seater\",\"seat_no\":\"E2\"},{\"bus\":16,\"type\":\"seater\",\"seat_no\":\"E3\"},{\"bus\":17,\"type\":\"seater\",\"seat_no\":\"E4\"},{\"bus\":18,\"type\":\"sleeper1\",\"seat_no\":\"E5\"}]}', 'layout-2', '4', ''),
(88, 129, 'Seater && Sleeper', '60', '{\"0\":[{\"bus\":0,\"type\":\"sleeper\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"sleeper\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"sleeper\",\"seat_no\":\"A3\"},{\"bus\":3,\"type\":\"sleeper\",\"seat_no\":\"A4\"},{\"bus\":4,\"type\":\"sleeper\",\"seat_no\":\"A5\"},{\"bus\":5,\"type\":\"sleeper\",\"seat_no\":\"A6\"},{\"bus\":6,\"type\":\"sleeper\",\"seat_no\":\"A7\"},{\"bus\":7,\"type\":\"sleeper\",\"seat_no\":\"A8\"},{\"bus\":8,\"type\":\"sleeper\",\"seat_no\":\"A9\"},{\"bus\":9,\"type\":\"sleeper\",\"seat_no\":\"A10\"},{\"bus\":10,\"type\":\"seater\",\"seat_no\":\"A11\"},{\"bus\":11,\"type\":\"seater\",\"seat_no\":\"A12\"},{\"bus\":12,\"type\":\"seater\",\"seat_no\":\"A13\"}],\"1\":[{\"bus\":13,\"type\":\"seater\",\"seat_no\":\"B1\"},{\"bus\":14,\"type\":\"seater\",\"seat_no\":\"B2\"},{\"bus\":15,\"type\":\"seater\",\"seat_no\":\"B3\"},{\"bus\":16,\"type\":\"seater\",\"seat_no\":\"B4\"},{\"bus\":17,\"type\":\"seater\",\"seat_no\":\"B5\"},{\"bus\":18,\"type\":\"seater\",\"seat_no\":\"B6\"},{\"bus\":19,\"type\":\"seater\",\"seat_no\":\"B7\"},{\"bus\":20,\"type\":\"seater\",\"seat_no\":\"B8\"},{\"bus\":21,\"type\":\"seater\",\"seat_no\":\"B9\"},{\"bus\":22,\"type\":\"seater\",\"seat_no\":\"B10\"},{\"bus\":23,\"type\":\"seater\",\"seat_no\":\"B11\"},{\"bus\":24,\"type\":\"seater\",\"seat_no\":\"B12\"},{\"bus\":25,\"type\":\"seater\",\"seat_no\":\"B13\"}],\"2\":[{\"bus\":26,\"type\":\"seater\",\"seat_no\":\"C1\"},{\"bus\":27,\"type\":\"seater\",\"seat_no\":\"C2\"},{\"bus\":28,\"type\":\"seater\",\"seat_no\":\"C3\"},{\"bus\":29,\"type\":\"seater\",\"seat_no\":\"C4\"},{\"bus\":30,\"type\":\"seater\",\"seat_no\":\"C5\"},{\"bus\":31,\"type\":\"seater\",\"seat_no\":\"C6\"},{\"bus\":32,\"type\":\"seater\",\"seat_no\":\"C7\"},{\"bus\":33,\"type\":\"seater\",\"seat_no\":\"C8\"},{\"bus\":34,\"type\":\"seater\",\"seat_no\":\"C9\"},{\"bus\":35,\"type\":\"seater\",\"seat_no\":\"C10\"},{\"bus\":36,\"type\":\"seater\",\"seat_no\":\"C11\"},{\"bus\":37,\"type\":\"seater\",\"seat_no\":\"C12\"},{\"bus\":38,\"type\":\"seater\",\"seat_no\":\"C13\"}],\"3\":[{\"bus\":48,\"type\":\"seater\",\"seat_no\":\"D1\"},{\"bus\":49,\"type\":\"seater\",\"seat_no\":\"D2\"},{\"bus\":50,\"type\":\"seater\",\"seat_no\":\"D3\"},{\"bus\":51,\"type\":\"seater\",\"seat_no\":\"D4\"},{\"bus\":52,\"type\":\"seater\",\"seat_no\":\"D5\"},{\"bus\":53,\"type\":\"seater\",\"seat_no\":\"D6\"},{\"bus\":54,\"type\":\"seater\",\"seat_no\":\"D7\"},{\"bus\":55,\"type\":\"seater\",\"seat_no\":\"D8\"},{\"bus\":56,\"type\":\"seater\",\"seat_no\":\"D9\"},{\"bus\":57,\"type\":\"seater\",\"seat_no\":\"D10\"},{\"bus\":58,\"type\":\"seater\",\"seat_no\":\"D11\"},{\"bus\":59,\"type\":\"seater\",\"seat_no\":\"D12\"},{\"bus\":60,\"type\":\"seater\",\"seat_no\":\"D13\"},{\"bus\":61,\"type\":\"seater\",\"seat_no\":\"D14\"},{\"bus\":62,\"type\":\"seater\",\"seat_no\":\"D15\"},{\"bus\":63,\"type\":\"seater\",\"seat_no\":\"D16\"}],\"4\":[{\"bus\":55,\"type\":\"seater\",\"seat_no\":\"E1\"},{\"bus\":56,\"type\":\"seater\",\"seat_no\":\"E2\"},{\"bus\":57,\"type\":\"seater\",\"seat_no\":\"E3\"},{\"bus\":58,\"type\":\"seater\",\"seat_no\":\"E4\"},{\"bus\":59,\"type\":\"seater\",\"seat_no\":\"E5\"}]}', 'layout-4', '5', ''),
(89, 128, 'Seater / Semi sleeper', '19', '{\"0\":[{\"bus\":0,\"type\":\"seater\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"seater\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"seater\",\"seat_no\":\"A3\"}],\"1\":[{\"bus\":3,\"type\":\"seater\",\"seat_no\":\"B1\"},{\"bus\":4,\"type\":\"seater\",\"seat_no\":\"B2\"},{\"bus\":5,\"type\":\"seater\",\"seat_no\":\"B3\"}],\"2\":[{\"bus\":6,\"type\":\"seater\",\"seat_no\":\"C1\"},{\"bus\":7,\"type\":\"seater\",\"seat_no\":\"C2\"},{\"bus\":8,\"type\":\"seater\",\"seat_no\":\"C3\"}],\"3\":[{\"bus\":15,\"type\":\"seater\",\"seat_no\":\"D1\"},{\"bus\":16,\"type\":\"seater\",\"seat_no\":\"D2\"},{\"bus\":17,\"type\":\"seater\",\"seat_no\":\"D3\"},{\"bus\":18,\"type\":\"seater\",\"seat_no\":\"D4\"},{\"bus\":19,\"type\":\"seater\",\"seat_no\":\"D5\"}],\"4\":[{\"bus\":14,\"type\":\"seater\",\"seat_no\":\"E1\"},{\"bus\":15,\"type\":\"seater\",\"seat_no\":\"E2\"},{\"bus\":16,\"type\":\"seater\",\"seat_no\":\"E3\"},{\"bus\":17,\"type\":\"seater\",\"seat_no\":\"E4\"},{\"bus\":18,\"type\":\"seater\",\"seat_no\":\"E5\"}]}', 'layout-4', '5', ''),
(90, 127, 'Seater / Semi sleeper', '26', '{\"0\":[{\"bus\":0,\"type\":\"seater\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"seater\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"seater\",\"seat_no\":\"A3\"},{\"bus\":3,\"type\":\"seater\",\"seat_no\":\"A4\"},{\"bus\":4,\"type\":\"seater\",\"seat_no\":\"A5\"},{\"bus\":5,\"type\":\"seater\",\"seat_no\":\"A6\"},{\"bus\":6,\"type\":\"seater\",\"seat_no\":\"A7\"}],\"1\":[{\"bus\":7,\"type\":\"seater\",\"seat_no\":\"B1\"},{\"bus\":8,\"type\":\"seater\",\"seat_no\":\"B2\"},{\"bus\":9,\"type\":\"seater\",\"seat_no\":\"B3\"},{\"bus\":10,\"type\":\"seater\",\"seat_no\":\"B4\"},{\"bus\":11,\"type\":\"seater\",\"seat_no\":\"B5\"},{\"bus\":12,\"type\":\"seater\",\"seat_no\":\"B6\"},{\"bus\":13,\"type\":\"seater\",\"seat_no\":\"B7\"}],\"2\":[{\"bus\":14,\"type\":\"seater\",\"seat_no\":\"C1\"},{\"bus\":15,\"type\":\"seater\",\"seat_no\":\"C2\"},{\"bus\":16,\"type\":\"seater\",\"seat_no\":\"C3\"},{\"bus\":17,\"type\":\"seater\",\"seat_no\":\"C4\"},{\"bus\":18,\"type\":\"seater\",\"seat_no\":\"C5\"},{\"bus\":19,\"type\":\"seater\",\"seat_no\":\"C6\"},{\"bus\":20,\"type\":\"seater\",\"seat_no\":\"C7\"}],\"3\":[],\"4\":[{\"bus\":21,\"type\":\"seater\",\"seat_no\":\"E1\"},{\"bus\":22,\"type\":\"seater\",\"seat_no\":\"E2\"},{\"bus\":23,\"type\":\"seater\",\"seat_no\":\"E3\"},{\"bus\":24,\"type\":\"seater\",\"seat_no\":\"E4\"},{\"bus\":25,\"type\":\"seater\",\"seat_no\":\"E5\"}]}', 'layout-3', '5', ''),
(91, 126, 'Seater / Semi sleeper', '26', '{\"0\":[{\"bus\":0,\"type\":\"seater\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"seater\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"seater\",\"seat_no\":\"A3\"},{\"bus\":3,\"type\":\"seater\",\"seat_no\":\"A4\"},{\"bus\":4,\"type\":\"seater\",\"seat_no\":\"A5\"},{\"bus\":5,\"type\":\"seater\",\"seat_no\":\"A6\"},{\"bus\":6,\"type\":\"seater\",\"seat_no\":\"A7\"}],\"1\":[{\"bus\":7,\"type\":\"seater\",\"seat_no\":\"B1\"},{\"bus\":8,\"type\":\"seater\",\"seat_no\":\"B2\"},{\"bus\":9,\"type\":\"seater\",\"seat_no\":\"B3\"},{\"bus\":10,\"type\":\"seater\",\"seat_no\":\"B4\"},{\"bus\":11,\"type\":\"seater\",\"seat_no\":\"B5\"},{\"bus\":12,\"type\":\"seater\",\"seat_no\":\"B6\"},{\"bus\":13,\"type\":\"seater\",\"seat_no\":\"B7\"}],\"2\":[{\"bus\":14,\"type\":\"seater\",\"seat_no\":\"C1\"},{\"bus\":15,\"type\":\"seater\",\"seat_no\":\"C2\"},{\"bus\":16,\"type\":\"seater\",\"seat_no\":\"C3\"},{\"bus\":17,\"type\":\"seater\",\"seat_no\":\"C4\"},{\"bus\":18,\"type\":\"seater\",\"seat_no\":\"C5\"},{\"bus\":19,\"type\":\"seater\",\"seat_no\":\"C6\"},{\"bus\":20,\"type\":\"seater\",\"seat_no\":\"C7\"}],\"3\":[],\"4\":[{\"bus\":21,\"type\":\"seater\",\"seat_no\":\"E1\"},{\"bus\":22,\"type\":\"seater\",\"seat_no\":\"E2\"},{\"bus\":23,\"type\":\"seater\",\"seat_no\":\"E3\"},{\"bus\":24,\"type\":\"seater\",\"seat_no\":\"E4\"},{\"bus\":25,\"type\":\"seater\",\"seat_no\":\"E5\"}]}', 'layout-2', '5', ''),
(92, 117, 'Seater && Sleeper', '55', '{\"0\":[{\"bus\":0,\"type\":\"sleeper\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"sleeper\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"sleeper\",\"seat_no\":\"A3\"},{\"bus\":3,\"type\":\"sleeper\",\"seat_no\":\"A4\"},{\"bus\":4,\"type\":\"sleeper\",\"seat_no\":\"A5\"},{\"bus\":5,\"type\":\"sleeper\",\"seat_no\":\"A6\"},{\"bus\":6,\"type\":\"sleeper\",\"seat_no\":\"A7\"},{\"bus\":7,\"type\":\"sleeper\",\"seat_no\":\"A8\"},{\"bus\":8,\"type\":\"sleeper\",\"seat_no\":\"A9\"},{\"bus\":9,\"type\":\"sleeper\",\"seat_no\":\"A10\"},{\"bus\":10,\"type\":\"sleeper\",\"seat_no\":\"A11\"}],\"1\":[{\"bus\":11,\"type\":\"sleeper\",\"seat_no\":\"B1\"},{\"bus\":12,\"type\":\"sleeper\",\"seat_no\":\"B2\"},{\"bus\":13,\"type\":\"sleeper\",\"seat_no\":\"B3\"},{\"bus\":14,\"type\":\"sleeper\",\"seat_no\":\"B4\"},{\"bus\":15,\"type\":\"seater\",\"seat_no\":\"B5\"},{\"bus\":16,\"type\":\"seater\",\"seat_no\":\"B6\"},{\"bus\":17,\"type\":\"seater\",\"seat_no\":\"B7\"},{\"bus\":18,\"type\":\"seater\",\"seat_no\":\"B8\"},{\"bus\":19,\"type\":\"seater\",\"seat_no\":\"B9\"},{\"bus\":20,\"type\":\"seater\",\"seat_no\":\"B10\"},{\"bus\":21,\"type\":\"seater\",\"seat_no\":\"B11\"}],\"2\":[{\"bus\":22,\"type\":\"seater\",\"seat_no\":\"C1\"},{\"bus\":23,\"type\":\"seater\",\"seat_no\":\"C2\"},{\"bus\":24,\"type\":\"seater\",\"seat_no\":\"C3\"},{\"bus\":25,\"type\":\"seater\",\"seat_no\":\"C4\"},{\"bus\":26,\"type\":\"seater\",\"seat_no\":\"C5\"},{\"bus\":27,\"type\":\"seater\",\"seat_no\":\"C6\"},{\"bus\":28,\"type\":\"seater\",\"seat_no\":\"C7\"},{\"bus\":29,\"type\":\"seater\",\"seat_no\":\"C8\"},{\"bus\":30,\"type\":\"seater\",\"seat_no\":\"C9\"},{\"bus\":31,\"type\":\"seater\",\"seat_no\":\"C10\"},{\"bus\":32,\"type\":\"seater\",\"seat_no\":\"C11\"}],\"3\":[{\"bus\":42,\"type\":\"seater\",\"seat_no\":\"D1\"},{\"bus\":43,\"type\":\"seater\",\"seat_no\":\"D2\"},{\"bus\":44,\"type\":\"seater\",\"seat_no\":\"D3\"},{\"bus\":45,\"type\":\"seater\",\"seat_no\":\"D4\"},{\"bus\":46,\"type\":\"seater\",\"seat_no\":\"D5\"},{\"bus\":47,\"type\":\"seater\",\"seat_no\":\"D6\"},{\"bus\":48,\"type\":\"seater\",\"seat_no\":\"D7\"},{\"bus\":49,\"type\":\"seater\",\"seat_no\":\"D8\"},{\"bus\":50,\"type\":\"seater\",\"seat_no\":\"D9\"},{\"bus\":51,\"type\":\"seater\",\"seat_no\":\"D10\"},{\"bus\":52,\"type\":\"seater\",\"seat_no\":\"D11\"},{\"bus\":53,\"type\":\"seater\",\"seat_no\":\"D12\"},{\"bus\":54,\"type\":\"seater\",\"seat_no\":\"D13\"},{\"bus\":55,\"type\":\"seater\",\"seat_no\":\"D14\"}],\"4\":[{\"bus\":47,\"type\":\"seater\",\"seat_no\":\"E1\"},{\"bus\":48,\"type\":\"seater\",\"seat_no\":\"E2\"},{\"bus\":49,\"type\":\"seater\",\"seat_no\":\"E3\"},{\"bus\":50,\"type\":\"seater\",\"seat_no\":\"E4\"},{\"bus\":51,\"type\":\"seater\",\"seat_no\":\"E5\"},{\"bus\":52,\"type\":\"seater\",\"seat_no\":\"E6\"},{\"bus\":53,\"type\":\"seater\",\"seat_no\":\"E7\"},{\"bus\":54,\"type\":\"seater\",\"seat_no\":\"E8\"}]}', 'layout-4', '8', ''),
(93, 115, 'Seater / Semi sleeper', '15', '{\"0\":[{\"bus\":0,\"type\":\"seater\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"seater\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"seater\",\"seat_no\":\"A3\"},{\"bus\":3,\"type\":\"seater\",\"seat_no\":\"A4\"}],\"1\":[{\"bus\":4,\"type\":\"seater\",\"seat_no\":\"B1\"},{\"bus\":5,\"type\":\"seater\",\"seat_no\":\"B2\"},{\"bus\":6,\"type\":\"seater\",\"seat_no\":\"B3\"},{\"bus\":7,\"type\":\"seater\",\"seat_no\":\"B4\"}],\"2\":[{\"bus\":8,\"type\":\"seater\",\"seat_no\":\"C1\"},{\"bus\":9,\"type\":\"seater\",\"seat_no\":\"C2\"},{\"bus\":10,\"type\":\"seater\",\"seat_no\":\"C3\"},{\"bus\":11,\"type\":\"seater\",\"seat_no\":\"C4\"}],\"3\":[],\"4\":[{\"bus\":12,\"type\":\"seater\",\"seat_no\":\"E1\"},{\"bus\":13,\"type\":\"seater\",\"seat_no\":\"E2\"},{\"bus\":14,\"type\":\"seater\",\"seat_no\":\"E3\"},{\"bus\":15,\"type\":\"sleeper1\",\"seat_no\":\"E4\"},{\"bus\":16,\"type\":\"sleeper1\",\"seat_no\":\"E5\"}]}', 'layout-2', '3', ''),
(94, 113, 'Seater / Semi sleeper', '18', '{\"0\":[{\"bus\":0,\"type\":\"seater\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"seater\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"seater\",\"seat_no\":\"A3\"},{\"bus\":3,\"type\":\"seater\",\"seat_no\":\"A4\"},{\"bus\":4,\"type\":\"seater\",\"seat_no\":\"A5\"}],\"1\":[{\"bus\":5,\"type\":\"seater\",\"seat_no\":\"B1\"},{\"bus\":6,\"type\":\"seater\",\"seat_no\":\"B2\"},{\"bus\":7,\"type\":\"seater\",\"seat_no\":\"B3\"},{\"bus\":8,\"type\":\"seater\",\"seat_no\":\"B4\"},{\"bus\":9,\"type\":\"seater\",\"seat_no\":\"B5\"}],\"2\":[{\"bus\":10,\"type\":\"seater\",\"seat_no\":\"C1\"},{\"bus\":11,\"type\":\"seater\",\"seat_no\":\"C2\"},{\"bus\":12,\"type\":\"seater\",\"seat_no\":\"C3\"},{\"bus\":13,\"type\":\"seater\",\"seat_no\":\"C4\"},{\"bus\":14,\"type\":\"seater\",\"seat_no\":\"C5\"}],\"3\":[],\"4\":[{\"bus\":15,\"type\":\"seater\",\"seat_no\":\"E1\"},{\"bus\":16,\"type\":\"seater\",\"seat_no\":\"E2\"},{\"bus\":17,\"type\":\"seater\",\"seat_no\":\"E3\"},{\"bus\":18,\"type\":\"sleeper1\",\"seat_no\":\"E4\"},{\"bus\":19,\"type\":\"sleeper1\",\"seat_no\":\"E5\"}]}', 'layout-3', '3', ''),
(95, 101, 'Seater && Sleeper', '42', '{\"0\":[{\"bus\":0,\"type\":\"sleeper\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"sleeper\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"sleeper\",\"seat_no\":\"A3\"},{\"bus\":3,\"type\":\"sleeper\",\"seat_no\":\"A4\"},{\"bus\":4,\"type\":\"sleeper\",\"seat_no\":\"A5\"},{\"bus\":5,\"type\":\"sleeper\",\"seat_no\":\"A6\"},{\"bus\":6,\"type\":\"sleeper\",\"seat_no\":\"A7\"},{\"bus\":7,\"type\":\"sleeper\",\"seat_no\":\"A8\"},{\"bus\":8,\"type\":\"sleeper\",\"seat_no\":\"A9\"}],\"1\":[{\"bus\":9,\"type\":\"sleeper\",\"seat_no\":\"B1\"},{\"bus\":10,\"type\":\"sleeper\",\"seat_no\":\"B2\"},{\"bus\":11,\"type\":\"sleeper\",\"seat_no\":\"B3\"},{\"bus\":12,\"type\":\"sleeper\",\"seat_no\":\"B4\"},{\"bus\":13,\"type\":\"sleeper\",\"seat_no\":\"B5\"},{\"bus\":14,\"type\":\"sleeper\",\"seat_no\":\"B6\"},{\"bus\":15,\"type\":\"seater\",\"seat_no\":\"B7\"},{\"bus\":16,\"type\":\"seater\",\"seat_no\":\"B8\"},{\"bus\":17,\"type\":\"seater\",\"seat_no\":\"B9\"}],\"2\":[{\"bus\":18,\"type\":\"seater\",\"seat_no\":\"C1\"},{\"bus\":19,\"type\":\"seater\",\"seat_no\":\"C2\"},{\"bus\":20,\"type\":\"seater\",\"seat_no\":\"C3\"},{\"bus\":21,\"type\":\"seater\",\"seat_no\":\"C4\"},{\"bus\":22,\"type\":\"seater\",\"seat_no\":\"C5\"},{\"bus\":23,\"type\":\"seater\",\"seat_no\":\"C6\"},{\"bus\":24,\"type\":\"seater\",\"seat_no\":\"C7\"},{\"bus\":25,\"type\":\"seater\",\"seat_no\":\"C8\"},{\"bus\":26,\"type\":\"seater\",\"seat_no\":\"C9\"}],\"3\":[{\"bus\":27,\"type\":\"seater\",\"seat_no\":\"D1\"},{\"bus\":28,\"type\":\"seater\",\"seat_no\":\"D2\"},{\"bus\":29,\"type\":\"seater\",\"seat_no\":\"D3\"},{\"bus\":30,\"type\":\"seater\",\"seat_no\":\"D4\"},{\"bus\":31,\"type\":\"seater\",\"seat_no\":\"D5\"},{\"bus\":32,\"type\":\"seater\",\"seat_no\":\"D6\"},{\"bus\":33,\"type\":\"seater\",\"seat_no\":\"D7\"},{\"bus\":34,\"type\":\"seater\",\"seat_no\":\"D8\"},{\"bus\":35,\"type\":\"seater\",\"seat_no\":\"D9\"}],\"4\":[{\"bus\":36,\"type\":\"seater\",\"seat_no\":\"E1\"},{\"bus\":37,\"type\":\"seater\",\"seat_no\":\"E2\"},{\"bus\":38,\"type\":\"seater\",\"seat_no\":\"E3\"},{\"bus\":39,\"type\":\"seater\",\"seat_no\":\"E4\"},{\"bus\":40,\"type\":\"seater\",\"seat_no\":\"E5\"},{\"bus\":41,\"type\":\"seater\",\"seat_no\":\"E6\"}]}', 'layout-4', '6', ''),
(96, 104, 'Seater / Semi sleeper', '50', '{\"0\":[{\"bus\":0,\"type\":\"seater\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"seater\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"seater\",\"seat_no\":\"A3\"},{\"bus\":3,\"type\":\"seater\",\"seat_no\":\"A4\"},{\"bus\":4,\"type\":\"seater\",\"seat_no\":\"A5\"},{\"bus\":5,\"type\":\"seater\",\"seat_no\":\"A6\"},{\"bus\":6,\"type\":\"seater\",\"seat_no\":\"A7\"},{\"bus\":7,\"type\":\"seater\",\"seat_no\":\"A8\"},{\"bus\":8,\"type\":\"seater\",\"seat_no\":\"A9\"},{\"bus\":9,\"type\":\"seater\",\"seat_no\":\"A10\"}],\"1\":[{\"bus\":10,\"type\":\"seater\",\"seat_no\":\"B1\"},{\"bus\":11,\"type\":\"seater\",\"seat_no\":\"B2\"},{\"bus\":12,\"type\":\"seater\",\"seat_no\":\"B3\"},{\"bus\":13,\"type\":\"seater\",\"seat_no\":\"B4\"},{\"bus\":14,\"type\":\"seater\",\"seat_no\":\"B5\"},{\"bus\":15,\"type\":\"seater\",\"seat_no\":\"B6\"},{\"bus\":16,\"type\":\"seater\",\"seat_no\":\"B7\"},{\"bus\":17,\"type\":\"seater\",\"seat_no\":\"B8\"},{\"bus\":18,\"type\":\"seater\",\"seat_no\":\"B9\"},{\"bus\":19,\"type\":\"seater\",\"seat_no\":\"B10\"}],\"2\":[{\"bus\":20,\"type\":\"seater\",\"seat_no\":\"C1\"},{\"bus\":21,\"type\":\"seater\",\"seat_no\":\"C2\"},{\"bus\":22,\"type\":\"seater\",\"seat_no\":\"C3\"},{\"bus\":23,\"type\":\"seater\",\"seat_no\":\"C4\"},{\"bus\":24,\"type\":\"seater\",\"seat_no\":\"C5\"},{\"bus\":25,\"type\":\"seater\",\"seat_no\":\"C6\"},{\"bus\":26,\"type\":\"seater\",\"seat_no\":\"C7\"},{\"bus\":27,\"type\":\"seater\",\"seat_no\":\"C8\"},{\"bus\":28,\"type\":\"seater\",\"seat_no\":\"C9\"},{\"bus\":29,\"type\":\"seater\",\"seat_no\":\"C10\"}],\"3\":[{\"bus\":36,\"type\":\"seater\",\"seat_no\":\"D1\"},{\"bus\":37,\"type\":\"seater\",\"seat_no\":\"D2\"},{\"bus\":38,\"type\":\"seater\",\"seat_no\":\"D3\"},{\"bus\":39,\"type\":\"seater\",\"seat_no\":\"D4\"},{\"bus\":40,\"type\":\"seater\",\"seat_no\":\"D5\"},{\"bus\":41,\"type\":\"seater\",\"seat_no\":\"D6\"},{\"bus\":42,\"type\":\"seater\",\"seat_no\":\"D7\"},{\"bus\":43,\"type\":\"seater\",\"seat_no\":\"D8\"},{\"bus\":44,\"type\":\"seater\",\"seat_no\":\"D9\"},{\"bus\":45,\"type\":\"seater\",\"seat_no\":\"D10\"},{\"bus\":46,\"type\":\"seater\",\"seat_no\":\"D11\"},{\"bus\":47,\"type\":\"seater\",\"seat_no\":\"D12\"}],\"4\":[{\"bus\":42,\"type\":\"seater\",\"seat_no\":\"E1\"},{\"bus\":43,\"type\":\"seater\",\"seat_no\":\"E2\"},{\"bus\":44,\"type\":\"seater\",\"seat_no\":\"E3\"},{\"bus\":45,\"type\":\"seater\",\"seat_no\":\"E4\"},{\"bus\":46,\"type\":\"seater\",\"seat_no\":\"E5\"},{\"bus\":47,\"type\":\"seater\",\"seat_no\":\"E6\"},{\"bus\":48,\"type\":\"seater\",\"seat_no\":\"E7\"},{\"bus\":49,\"type\":\"seater\",\"seat_no\":\"E8\"}]}', 'layout-4', '8', ''),
(97, 103, 'Seater / Semi sleeper', '11', '{\"0\":[{\"bus\":0,\"type\":\"seater\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"seater\",\"seat_no\":\"A2\"}],\"1\":[{\"bus\":2,\"type\":\"seater\",\"seat_no\":\"B1\"},{\"bus\":3,\"type\":\"seater\",\"seat_no\":\"B2\"}],\"2\":[{\"bus\":8,\"type\":\"seater\",\"seat_no\":\"C1\"},{\"bus\":9,\"type\":\"seater\",\"seat_no\":\"C2\"},{\"bus\":10,\"type\":\"seater\",\"seat_no\":\"C3\"},{\"bus\":11,\"type\":\"seater\",\"seat_no\":\"C4\"}],\"3\":[],\"4\":[{\"bus\":8,\"type\":\"seater\",\"seat_no\":\"E1\"},{\"bus\":9,\"type\":\"seater\",\"seat_no\":\"E2\"},{\"bus\":10,\"type\":\"seater\",\"seat_no\":\"E3\"},{\"bus\":11,\"type\":\"sleeper1\",\"seat_no\":\"E4\"},{\"bus\":12,\"type\":\"sleeper1\",\"seat_no\":\"E5\"}]}', 'layout-3', '3', ''),
(98, 105, 'Seater / Semi sleeper', '50', '{\"0\":[{\"bus\":0,\"type\":\"seater\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"seater\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"seater\",\"seat_no\":\"A3\"},{\"bus\":3,\"type\":\"seater\",\"seat_no\":\"A4\"},{\"bus\":4,\"type\":\"seater\",\"seat_no\":\"A5\"},{\"bus\":5,\"type\":\"seater\",\"seat_no\":\"A6\"},{\"bus\":6,\"type\":\"seater\",\"seat_no\":\"A7\"},{\"bus\":7,\"type\":\"seater\",\"seat_no\":\"A8\"},{\"bus\":8,\"type\":\"seater\",\"seat_no\":\"A9\"},{\"bus\":9,\"type\":\"seater\",\"seat_no\":\"A10\"}],\"1\":[{\"bus\":10,\"type\":\"seater\",\"seat_no\":\"B1\"},{\"bus\":11,\"type\":\"seater\",\"seat_no\":\"B2\"},{\"bus\":12,\"type\":\"seater\",\"seat_no\":\"B3\"},{\"bus\":13,\"type\":\"seater\",\"seat_no\":\"B4\"},{\"bus\":14,\"type\":\"seater\",\"seat_no\":\"B5\"},{\"bus\":15,\"type\":\"seater\",\"seat_no\":\"B6\"},{\"bus\":16,\"type\":\"seater\",\"seat_no\":\"B7\"},{\"bus\":17,\"type\":\"seater\",\"seat_no\":\"B8\"},{\"bus\":18,\"type\":\"seater\",\"seat_no\":\"B9\"},{\"bus\":19,\"type\":\"seater\",\"seat_no\":\"B10\"}],\"2\":[{\"bus\":20,\"type\":\"seater\",\"seat_no\":\"C1\"},{\"bus\":21,\"type\":\"seater\",\"seat_no\":\"C2\"},{\"bus\":22,\"type\":\"seater\",\"seat_no\":\"C3\"},{\"bus\":23,\"type\":\"seater\",\"seat_no\":\"C4\"},{\"bus\":24,\"type\":\"seater\",\"seat_no\":\"C5\"},{\"bus\":25,\"type\":\"seater\",\"seat_no\":\"C6\"},{\"bus\":26,\"type\":\"seater\",\"seat_no\":\"C7\"},{\"bus\":27,\"type\":\"seater\",\"seat_no\":\"C8\"},{\"bus\":28,\"type\":\"seater\",\"seat_no\":\"C9\"},{\"bus\":29,\"type\":\"seater\",\"seat_no\":\"C10\"}],\"3\":[{\"bus\":36,\"type\":\"seater\",\"seat_no\":\"D1\"},{\"bus\":37,\"type\":\"seater\",\"seat_no\":\"D2\"},{\"bus\":38,\"type\":\"seater\",\"seat_no\":\"D3\"},{\"bus\":39,\"type\":\"seater\",\"seat_no\":\"D4\"},{\"bus\":40,\"type\":\"seater\",\"seat_no\":\"D5\"},{\"bus\":41,\"type\":\"seater\",\"seat_no\":\"D6\"},{\"bus\":42,\"type\":\"seater\",\"seat_no\":\"D7\"},{\"bus\":43,\"type\":\"seater\",\"seat_no\":\"D8\"},{\"bus\":44,\"type\":\"seater\",\"seat_no\":\"D9\"},{\"bus\":45,\"type\":\"seater\",\"seat_no\":\"D10\"},{\"bus\":46,\"type\":\"seater\",\"seat_no\":\"D11\"},{\"bus\":47,\"type\":\"seater\",\"seat_no\":\"D12\"}],\"4\":[{\"bus\":42,\"type\":\"seater\",\"seat_no\":\"E1\"},{\"bus\":43,\"type\":\"seater\",\"seat_no\":\"E2\"},{\"bus\":44,\"type\":\"seater\",\"seat_no\":\"E3\"},{\"bus\":45,\"type\":\"seater\",\"seat_no\":\"E4\"},{\"bus\":46,\"type\":\"seater\",\"seat_no\":\"E5\"},{\"bus\":47,\"type\":\"seater\",\"seat_no\":\"E6\"},{\"bus\":48,\"type\":\"seater\",\"seat_no\":\"E7\"},{\"bus\":49,\"type\":\"seater\",\"seat_no\":\"E8\"}]}', 'layout-4', '8', ''),
(99, 112, 'Seater / Semi sleeper', '17', '{\"0\":[{\"bus\":0,\"type\":\"seater\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"seater\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"seater\",\"seat_no\":\"A3\"}],\"1\":[{\"bus\":3,\"type\":\"seater\",\"seat_no\":\"B1\"},{\"bus\":4,\"type\":\"seater\",\"seat_no\":\"B2\"},{\"bus\":5,\"type\":\"seater\",\"seat_no\":\"B3\"}],\"2\":[{\"bus\":6,\"type\":\"seater\",\"seat_no\":\"C1\"},{\"bus\":7,\"type\":\"seater\",\"seat_no\":\"C2\"},{\"bus\":8,\"type\":\"seater\",\"seat_no\":\"C3\"}],\"3\":[{\"bus\":9,\"type\":\"seater\",\"seat_no\":\"D1\"},{\"bus\":10,\"type\":\"seater\",\"seat_no\":\"D2\"},{\"bus\":11,\"type\":\"seater\",\"seat_no\":\"D3\"}],\"4\":[{\"bus\":12,\"type\":\"seater\",\"seat_no\":\"E1\"},{\"bus\":13,\"type\":\"seater\",\"seat_no\":\"E2\"},{\"bus\":14,\"type\":\"seater\",\"seat_no\":\"E3\"},{\"bus\":15,\"type\":\"seater\",\"seat_no\":\"E4\"},{\"bus\":16,\"type\":\"seater\",\"seat_no\":\"E5\"}]}', 'layout-4', '5', ''),
(100, 116, 'Seater / Semi sleeper', '8', '{\"0\":[{\"bus\":0,\"type\":\"seater\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"seater\",\"seat_no\":\"A2\"}],\"1\":[{\"bus\":3,\"type\":\"seater\",\"seat_no\":\"B1\"},{\"bus\":4,\"type\":\"seater\",\"seat_no\":\"B2\"},{\"bus\":5,\"type\":\"seater\",\"seat_no\":\"B3\"}],\"2\":[],\"3\":[],\"4\":[{\"bus\":5,\"type\":\"seater\",\"seat_no\":\"E1\"},{\"bus\":6,\"type\":\"seater\",\"seat_no\":\"E2\"},{\"bus\":7,\"type\":\"seater\",\"seat_no\":\"E3\"},{\"bus\":8,\"type\":\"sleeper1\",\"seat_no\":\"E4\"},{\"bus\":9,\"type\":\"sleeper1\",\"seat_no\":\"E5\"}]}', 'layout-1', '3', ''),
(101, 142, 'Seater / Semi sleeper', '7', '{\"0\":[{\"bus\":0,\"type\":\"seater\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"seater\",\"seat_no\":\"A2\"}],\"1\":[{\"bus\":2,\"type\":\"seater\",\"seat_no\":\"B1\"},{\"bus\":3,\"type\":\"seater\",\"seat_no\":\"B2\"}],\"2\":[],\"3\":[],\"4\":[{\"bus\":4,\"type\":\"seater\",\"seat_no\":\"E1\"},{\"bus\":5,\"type\":\"seater\",\"seat_no\":\"E2\"},{\"bus\":6,\"type\":\"seater\",\"seat_no\":\"E3\"},{\"bus\":7,\"type\":\"sleeper1\",\"seat_no\":\"E4\"},{\"bus\":8,\"type\":\"sleeper1\",\"seat_no\":\"E5\"}]}', 'layout-1', '3', '');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `favicon` varchar(250) NOT NULL,
  `smtp_username` varchar(250) NOT NULL,
  `smtp_host` varchar(250) NOT NULL,
  `smtp_password` varchar(250) NOT NULL,
  `sender_id` varchar(250) NOT NULL,
  `sms_username` varchar(250) NOT NULL,
  `sms_password` varchar(250) NOT NULL,
  `paypal` varchar(250) NOT NULL,
  `paypalid` varchar(251) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `title`, `logo`, `favicon`, `smtp_username`, `smtp_host`, `smtp_password`, `sender_id`, `sms_username`, `sms_password`, `paypal`, `paypalid`) VALUES
(1, 'TrueBus', 'assets/uploads/logo/1469446049_TrueBus.png', 'assets/uploads/favicons/1469446049_TrueBus.png', 'gkalu30@gmail.com', 'smtp.gmail.com', '676', '101', 'manu', '676', 'https://www.sandbox.paypal.com/cgi-bin/webscr', 'shajeermhmmd@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `terminals`
--

CREATE TABLE `terminals` (
  `id` int(3) NOT NULL,
  `street` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terminals`
--

INSERT INTO `terminals` (`id`, `street`, `city`, `state`, `name`, `created`, `modified`) VALUES
(1, 'God\'s Divine Favour,', 'Aba', 'Abia', 'Abia, Aba branch', '0000-00-00 00:00:00', '2019-07-22 19:53:58'),
(3, 'Enugu road', 'Nsukka', 'Enugu', 'Nsukka branch', '2018-12-12 10:10:57', '2019-07-22 19:50:23'),
(4, 'jonathan road', 'Jos', 'Plateau', 'Plateau,Jos branch', '2018-12-12 11:55:53', '2019-07-22 19:54:47'),
(5, 'sabon gari', 'Kano', 'Kano', 'Kano, Sabo branch', '2018-12-12 11:56:50', '2019-07-22 19:55:12'),
(6, 'Abraka', 'Asaba', 'Delta', 'Delta, Abraka Branch', '2018-12-12 11:57:42', '2019-07-22 19:55:38'),
(7, 'Esiri layout', 'Warri', 'Delta', 'Delta, Warri branch', '2018-12-12 11:59:38', '2019-07-22 19:56:09'),
(8, 'old road', 'Enugu', 'Enugu', 'ENUGU, OLd_road branch', '2018-12-12 12:01:35', '2019-07-22 19:56:43'),
(9, 'Abakpa', 'Enugu', 'Enugu', 'Enugu, Abakpa branch', '2018-12-12 12:03:01', '2019-07-22 20:11:43'),
(10, 'Utaku', 'Abuja', 'Abuja', 'Abuja, Utaku branch', '2018-12-12 12:07:10', '2019-07-22 20:12:13'),
(11, 'Maraba', 'Abuja', 'Abuja', 'Abuja, Maraba branch', '2018-12-12 12:07:53', '2019-07-22 20:11:05'),
(12, 'Zuba', 'F.C.T', 'Abuja', 'Abuja, Zuba branch', '2018-12-12 12:08:44', '2019-07-22 20:10:33'),
(13, 'Garki', 'Coal city', 'Enugu', 'Enugu,Garki branch', '2018-12-17 07:56:48', '2019-07-22 19:53:17'),
(14, 'tv garage', 'kaduna', 'kaduna', 'Kaduna branch', '2018-12-17 08:10:23', '2018-12-17 08:10:23'),
(15, 'Oshodi', 'Oshodi', 'Lagos', 'lagos, Oshodi branch', '2019-07-22 19:52:20', '2019-07-25 04:39:34'),
(16, 'Abiola Cresent', 'Ajah', 'Lagos', 'Lagos, Ajah branch', '2019-07-25 04:24:41', '2019-07-25 04:39:54'),
(17, 'Tinubu bye pass', 'Maza-Maza', 'Lagos', 'Lagos, Maza-Maza branch', '2019-07-25 04:27:14', '2019-07-25 04:40:13'),
(18, 'ALIHERI', 'ENUGU', 'ENUGU', 'enugu Ezike', '2019-07-25 11:30:36', '2019-07-25 11:30:36');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(250) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `image` varchar(80) NOT NULL,
  `gender` varchar(16) NOT NULL,
  `mob` bigint(20) NOT NULL,
  `reset_key` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_id`, `username`, `password`, `name`, `dob`, `image`, `gender`, `mob`, `reset_key`) VALUES
(3, 'usr_001', 'test@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'test', '05/13/2016', 'assets/uploads/profilepic/crossbar.png', 'male', 9867542324, ''),
(4, 'usr_002', 'shibilabs23@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'shibi', '05/13/2016', 'assets/uploads/profilepic/crossbar.png', 'female', 9496383739, 'TB1469535255'),
(10, 'usr_003', 'shilpa.techware@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'abc-traders', '03-07-1970', 'http://192.168.1.31/jasir/truebus/assets/uploads/Koala.jpg', 'male', 0, 'TB1469535808'),
(11, 'usr_004', 'gkalu30@gmail.com', '362bc19c01260565595bd0496a7f8933', '', '', '', '', 8161382451, ''),
(12, '', 'agubatachidimma@gmail.com', '38b30a001279181e46d1d45007789223', 'AgubataChidimma', '11/11/1995', 'assets/uploads/profilepic/IMG-20180213-WA0030.jpg', 'female', 8032181006, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agent_terminal`
--
ALTER TABLE `agent_terminal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agent_id_idx` (`agent_id`),
  ADD KEY `terminal_id_idx` (`terminal_id`);

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `board_points`
--
ALTER TABLE `board_points`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bus_id_idx` (`bus_id`),
  ADD KEY `route_boardpoint_idx` (`board_point`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `booking_id_UNIQUE` (`booking_id`),
  ADD KEY `bus_bookingdetails_idx` (`bus_id`),
  ADD KEY `route_bookingdetails_idx` (`rout_id`),
  ADD KEY `boardingpt_bookingdetails_idx` (`boarding_point_id`),
  ADD KEY `user_bookingdetails_idx` (`user_id`);

--
-- Indexes for table `book_bus`
--
ALTER TABLE `book_bus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bus_bookbus_idx` (`bus_id`),
  ADD KEY `user_bookbus_idx` (`user_id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bustype_bus_idx` (`bus_type_id`),
  ADD KEY `amenities_bus_idx` (`amenities_id`);

--
-- Indexes for table `bus_count`
--
ALTER TABLE `bus_count`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus_gallery`
--
ALTER TABLE `bus_gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_busgallery_idx` (`user_id`),
  ADD KEY `busid_busgallery_idx` (`bus_id`);

--
-- Indexes for table `bus_state`
--
ALTER TABLE `bus_state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus_type`
--
ALTER TABLE `bus_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cancellation`
--
ALTER TABLE `cancellation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `busid_cancellation_idx` (`bus_id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookingid_customerdetails_idx` (`booking_id`);

--
-- Indexes for table `drop_points`
--
ALTER TABLE `drop_points`
  ADD PRIMARY KEY (`id`),
  ADD KEY `busid_droppts_idx` (`bus_id`);

--
-- Indexes for table `excess`
--
ALTER TABLE `excess`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teminalid_request_idx` (`terminal_id`);

--
-- Indexes for table `location_graph`
--
ALTER TABLE `location_graph`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moved`
--
ALTER TABLE `moved`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid_rating_idx` (`user_id`),
  ADD KEY `busid_rating_idx` (`bus_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`id`),
  ADD KEY `busid_route_idx` (`bus_id`);

--
-- Indexes for table `seat_layout`
--
ALTER TABLE `seat_layout`
  ADD PRIMARY KEY (`id`),
  ADD KEY `busid_seatlayout_idx` (`bus_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terminals`
--
ALTER TABLE `terminals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id_UNIQUE` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `agent_terminal`
--
ALTER TABLE `agent_terminal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `board_points`
--
ALTER TABLE `board_points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;
--
-- AUTO_INCREMENT for table `book_bus`
--
ALTER TABLE `book_bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;
--
-- AUTO_INCREMENT for table `bus_count`
--
ALTER TABLE `bus_count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `bus_gallery`
--
ALTER TABLE `bus_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT for table `bus_state`
--
ALTER TABLE `bus_state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `bus_type`
--
ALTER TABLE `bus_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `cancellation`
--
ALTER TABLE `cancellation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;
--
-- AUTO_INCREMENT for table `drop_points`
--
ALTER TABLE `drop_points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `excess`
--
ALTER TABLE `excess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `location_graph`
--
ALTER TABLE `location_graph`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `moved`
--
ALTER TABLE `moved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `seat_layout`
--
ALTER TABLE `seat_layout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `terminals`
--
ALTER TABLE `terminals`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `excess`
--
ALTER TABLE `excess`
  ADD CONSTRAINT `teminalid_request` FOREIGN KEY (`terminal_id`) REFERENCES `terminals` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `busid_rating` FOREIGN KEY (`bus_id`) REFERENCES `bus` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `userid_rating` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `route`
--
ALTER TABLE `route`
  ADD CONSTRAINT `busid_route` FOREIGN KEY (`bus_id`) REFERENCES `bus` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `seat_layout`
--
ALTER TABLE `seat_layout`
  ADD CONSTRAINT `busid_seatlayout` FOREIGN KEY (`bus_id`) REFERENCES `bus` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
