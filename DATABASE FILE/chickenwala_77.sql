-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2021 at 08:40 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chickenwala_77`
--

-- --------------------------------------------------------

--
-- Table structure for table `cw_chicken_variety`
--

CREATE TABLE IF NOT EXISTS `cw_chicken_variety` (
`chv_oid` int(11) NOT NULL,
  `chv_variety_name` varchar(100) NOT NULL,
  `chv_market_price` decimal(10,2) NOT NULL,
  `chv_extra_price` decimal(10,2) NOT NULL,
  `chv_price` decimal(10,2) NOT NULL,
  `quatity_type` varchar(50) NOT NULL,
  `chv_img_loc` varchar(100) NOT NULL,
  `chv_status` varchar(20) NOT NULL,
  `chv_sort_number` int(11) NOT NULL,
  `chv_availability` varchar(50) NOT NULL,
  `chv_description` varchar(250) NOT NULL,
  `chv_price_date` date NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `cw_chicken_variety`
--

INSERT INTO `cw_chicken_variety` (`chv_oid`, `chv_variety_name`, `chv_market_price`, `chv_extra_price`, `chv_price`, `quatity_type`, `chv_img_loc`, `chv_status`, `chv_sort_number`, `chv_availability`, `chv_description`, `chv_price_date`, `create_date`) VALUES
(1, 'Chicken Full Boiler', '100.00', '0.00', '100.00', 'Per Kg', 'chicken_full_boiler.jpg', 'active', 1, 'available', 'full bonless', '2018-01-04', '2021-08-26 06:10:10'),
(2, 'Chicken Leg Piece', '100.00', '30.00', '130.00', 'Per Kg', 'chicken_leg_piece.jpg', 'active', 2, 'available', 'something supposed to be added', '2018-01-04', '2021-08-26 06:10:10'),
(3, 'Chicken Breast Boneless', '100.00', '100.00', '200.00', 'Per Kg', 'chicken_breast_bonless.jpg', 'active', 3, 'available', 'something supposed to be added', '2018-01-04', '2021-08-26 06:10:10'),
(4, 'chicken lolipop', '100.00', '30.00', '130.00', 'Per Kg', 'chicken_lollipop.jpg', 'active', 4, 'available', 'something supposed to be added', '2018-01-04', '2021-08-26 06:10:10'),
(5, 'Chicken Kheema', '100.00', '110.00', '210.00', 'Per Kg', 'chicken_kheema.jpg', 'active', 5, 'available', 'something supposed to be added', '2018-01-04', '2021-08-26 06:10:10'),
(7, 'Chicken Full Tandoori', '100.00', '15.00', '115.00', 'Per Kg', 'chicken_tandoori_full.jpg', 'active', 7, 'Out of stock', 'something supposed to be added', '2021-09-07', '2021-08-26 06:10:10'),
(8, 'Chicken Wings', '100.00', '30.00', '130.00', 'Per Kg', 'chicken_wings.jpg', 'active', 8, 'available', 'something supposed to be added', '2018-01-03', '2021-08-26 06:10:10'),
(9, 'Chicken Biryani Pieces', '100.00', '15.00', '115.00', 'Per Kg', 'chicken_biryani_piece.jpg', 'active', 1, 'available', 'something supposed to be added', '2018-01-04', '2021-08-26 06:10:10'),
(11, 'Chicken 65 Pieces', '130.00', '10.00', '140.00', 'Per Piece', 'chicken_65_pieces.jpg', 'active', 1, 'available', 'something supposed to be added', '2021-09-03', '2021-08-26 06:10:10'),
(12, 'Chicken Boneless Pakoda', '100.00', '120.00', '220.00', 'Per Kg', 'chicken_boneless_pakoda.jpg', 'active', 1, 'Order one day before', 'something supposed to be added', '2021-08-25', '2021-08-26 06:10:10'),
(13, 'Chicken Curry Cut', '100.00', '5.00', '105.00', 'Per Kg', 'chicken_curry_cut.jpg', 'active', 1, 'available', 'something supposed to be added', '2018-01-04', '2021-08-26 06:10:10'),
(14, 'Chicken Full Leg with Thigh', '100.00', '50.00', '150.00', 'Per Kg', 'chicken_full_leg_with_thigh.jpg', 'active', 1, 'Out of stock', 'something supposed to be added', '2021-08-25', '2021-08-26 06:10:10'),
(15, 'Chicken Gravy Piece', '100.00', '0.00', '100.00', 'Per Kg', 'chicken_gravy_piece.jpg', 'active', 1, 'available', 'something supposed to be added', '2018-01-04', '2021-08-26 06:10:10'),
(16, 'Chicken Leg Boneless', '100.00', '80.00', '180.00', 'Per Kg', 'chicken_leg_boneless.jpg', 'active', 1, 'available', 'something supposed to be added', '2018-01-04', '2021-08-26 06:10:10'),
(17, 'Long Supreme Boneless', '100.00', '100.00', '200.00', 'Per Kg', 'chicken_long_supereme_boneless.jpg', 'active', 1, 'available', 'something supposed to be added', '2018-01-03', '2021-08-26 06:10:10'),
(18, 'Chicken Tandoori Pieces', '100.00', '10.00', '110.00', 'Per Kg', 'chicken_tandoori_pieces.jpg', 'active', 1, 'available', 'something supposed to be added', '2018-01-04', '2021-08-26 06:10:10'),
(19, 'Chicken Thigh Boneless', '100.00', '80.00', '180.00', 'Per Kg', 'chicken_thigh_boneless.jpg', 'active', 1, 'available', 'something supposed to be added', '2018-01-03', '2021-08-26 06:10:10'),
(20, 'Chickenwaala Special', '100.00', '50.00', '150.00', 'Per Kg', 'chickenwaala_specials.jpg', 'active', 1, 'available', 'something supposed to be added', '2018-01-03', '2021-08-26 06:10:10'),
(21, 'Chicken Liver', '100.00', '0.00', '100.00', 'Per Kg', 'chicken_liver.jpg', 'active', 1, 'available', 'something supposed to be added', '2018-01-04', '2018-01-04 09:25:49'),
(22, 'Chicken Gizzard', '100.00', '0.00', '100.00', 'Per Kg', 'chicken_gizzard.jpg', 'active', 1, 'available', 'something supposed to be added', '2018-01-04', '2018-01-04 09:25:49'),
(23, 'Liver & Gizzard Mix', '100.00', '0.00', '100.00', 'Per Kg', 'liver_and_gizzard_mix.jpg', 'active', 1, 'available', 'something supposed to be added', '2018-01-04', '2018-01-04 09:25:49'),
(26, 'Chicken alfam', '150.00', '200.00', '350.00', 'Per Piece', 'maxresdefault.jpg', 'active', 9, 'available', 'tender chicken', '2021-09-07', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cw_create_chicken_order`
--

CREATE TABLE IF NOT EXISTS `cw_create_chicken_order` (
`ccco_oid` int(11) NOT NULL,
  `cust_oid` int(11) NOT NULL,
  `cud_oid` int(11) NOT NULL,
  `chv_oid` int(11) NOT NULL,
  `chv_variety_name` varchar(100) NOT NULL,
  `chv_price` decimal(10,2) NOT NULL,
  `ccco_qty` decimal(10,2) NOT NULL,
  `ccco_total_amount` decimal(10,2) NOT NULL,
  `ccco_order_status` varchar(50) NOT NULL,
  `ccco_order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ccco_order_delivery_date` varchar(50) NOT NULL,
  `order_date` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `cw_create_chicken_order`
--

INSERT INTO `cw_create_chicken_order` (`ccco_oid`, `cust_oid`, `cud_oid`, `chv_oid`, `chv_variety_name`, `chv_price`, `ccco_qty`, `ccco_total_amount`, `ccco_order_status`, `ccco_order_date`, `ccco_order_delivery_date`, `order_date`) VALUES
(1, 388, 8, 1, 'Chicken Full Boiler', '100.00', '5.00', '500.00', 'yet_to_confirm', '2021-09-01 20:33:32', '', ''),
(2, 388, 8, 1, 'Chicken Full Boiler', '100.00', '5.00', '500.00', 'yet_to_confirm', '2021-09-01 20:33:54', '', ''),
(3, 388, 8, 1, 'Chicken Full Boiler', '100.00', '2.00', '200.00', 'yet_to_confirm', '2021-09-01 20:33:54', '', ''),
(4, 388, 8, 1, 'Chicken Full Boiler', '100.00', '3.00', '300.00', 'yet_to_confirm', '2021-09-01 20:33:54', '', ''),
(5, 388, 8, 15, 'Chicken Gravy Piece', '100.00', '5.00', '500.00', 'yet_to_confirm', '2021-09-01 20:33:54', '', ''),
(6, 388, 8, 20, 'Chickenwaala Special', '150.00', '3.00', '450.00', 'yet_to_confirm', '2021-09-01 20:33:54', '', ''),
(7, 388, 8, 18, 'Chicken Tandoori Pieces', '110.00', '3.00', '330.00', 'yet_to_confirm', '2021-09-01 20:33:54', '', ''),
(8, 388, 8, 5, 'Chicken Kheema', '210.00', '2.00', '420.00', 'yet_to_confirm', '2021-09-01 20:33:54', '', ''),
(9, 388, 8, 9, 'Chicken Biryani Pieces', '115.00', '6.00', '690.00', 'yet_to_confirm', '2021-09-01 20:33:54', '', ''),
(10, 390, 9, 18, 'Chicken Tandoori Pieces', '110.00', '3.00', '330.00', 'yet_to_confirm', '2021-09-01 20:33:54', '', ''),
(11, 390, 9, 19, 'Chicken Thigh Boneless', '180.00', '10.00', '1800.00', 'order_delivered', '2021-09-02 18:47:38', '2021-09-03 00:17:38 AM', ''),
(12, 390, 9, 18, 'Chicken Tandoori Pieces', '110.00', '3.00', '330.00', 'yet_to_confirm', '2021-09-01 20:33:54', '', ''),
(13, 390, 9, 13, 'Chicken Curry Cut', '105.00', '5.00', '525.00', 'order_cancel', '2021-09-01 21:07:06', '2021-09-02 02:37:06 AM', ''),
(14, 390, 9, 3, 'Chicken Breast Boneless', '200.00', '3.00', '600.00', 'order_cancel', '2021-09-01 21:01:06', '2021-09-02 02:31:06 AM', ''),
(15, 390, 9, 8, 'Chicken Wings', '130.00', '7.00', '910.00', 'order_delivered', '2021-09-01 20:51:44', '2021-09-02 02:21:44 AM', ''),
(16, 390, 9, 8, 'Chicken Wings', '130.00', '15.00', '1950.00', 'order_confirm', '2021-09-01 20:49:05', '2021-09-02 02:19:05 AM', ''),
(17, 390, 10, 16, 'Chicken Leg Boneless', '180.00', '10.00', '1800.00', 'order_delivered', '2021-09-01 20:41:19', '2021-09-02 02:11:19 AM', ''),
(18, 381, 7, 1, 'Chicken Full Boiler', '100.00', '7.00', '700.00', 'order_cancel', '2021-09-01 20:54:06', '', ''),
(19, 390, 9, 1, 'Chicken Full Boiler', '100.00', '5.00', '500.00', 'order_confirm', '2021-09-02 18:42:54', '2021-09-03 00:12:54 AM', ''),
(20, 390, 9, 15, 'Chicken Gravy Piece', '100.00', '5.00', '500.00', 'order_delivered', '2021-09-02 18:42:50', '2021-09-03 00:12:50 AM', ''),
(21, 391, 11, 1, 'Chicken Full Boiler', '100.00', '5.00', '500.00', 'order_cancel', '2021-09-07 15:04:49', '2021-09-07 20:34:49 PM', ''),
(22, 391, 11, 12, 'Chicken Boneless Pakoda', '220.00', '3.00', '660.00', 'order_delivered', '2021-09-07 15:30:30', '2021-09-07 21:00:30 PM', ''),
(23, 391, 11, 17, 'Long Supreme Boneless', '200.00', '2.00', '400.00', 'order_confirm', '2021-09-07 15:33:16', '2021-09-07 21:03:16 PM', ''),
(24, 391, 11, 9, 'Chicken Biryani Pieces', '115.00', '3.00', '345.00', 'yet_to_confirm', '2021-09-07 15:29:37', '', ''),
(25, 391, 11, 8, 'Chicken Wings', '130.00', '2.00', '260.00', 'yet_to_confirm', '2021-09-07 18:25:07', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cw_customer_address`
--

CREATE TABLE IF NOT EXISTS `cw_customer_address` (
`cud_oid` int(11) NOT NULL,
  `cust_oid` int(11) NOT NULL,
  `cud_address` varchar(500) NOT NULL,
  `cud_address_type` varchar(100) NOT NULL,
  `cud_creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cw_customer_details`
--

CREATE TABLE IF NOT EXISTS `cw_customer_details` (
`cust_oid` int(11) NOT NULL,
  `cust_fname` varchar(50) NOT NULL,
  `cust_lname` varchar(50) NOT NULL,
  `cust_mobile` varchar(15) NOT NULL,
  `cust_email` varchar(100) NOT NULL,
  `cust_password` varchar(15) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cw_hit_app`
--

CREATE TABLE IF NOT EXISTS `cw_hit_app` (
`hit_oid` int(11) NOT NULL,
  `hit_date` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=584 ;

--
-- Dumping data for table `cw_hit_app`
--

INSERT INTO `cw_hit_app` (`hit_oid`, `hit_date`) VALUES
(1, '2017-03-17'),
(2, '2017-03-17'),
(3, '2017-03-17'),
(4, '2017-03-17'),
(5, '2017-03-17'),
(6, '2017-03-17'),
(7, '2017-03-17'),
(8, '2017-03-17'),
(9, '2017-03-17'),
(10, '2017-03-17'),
(11, '2017-03-17'),
(12, '2017-03-17'),
(13, '2017-03-17'),
(14, '2017-03-17'),
(15, '2017-03-17'),
(16, '2017-03-17'),
(17, '2017-03-17'),
(18, '2017-03-17'),
(19, '2017-03-17'),
(20, '2017-03-17'),
(21, '2017-03-17'),
(22, '2017-03-17'),
(23, '2017-03-17'),
(24, '2017-03-17'),
(25, '2017-03-17'),
(26, '2017-03-17'),
(27, '2017-03-17'),
(28, '2017-03-17'),
(29, '2017-03-17'),
(30, '2017-03-17'),
(31, '2017-03-17'),
(32, '2017-03-17'),
(33, '2017-03-17'),
(34, '2017-03-17'),
(35, '2017-03-17'),
(36, '2017-03-17'),
(37, '2017-03-17'),
(38, '2017-03-17'),
(39, '2017-03-17'),
(40, '2017-03-17'),
(41, '2017-03-17'),
(42, '2017-03-17'),
(43, '2017-03-17'),
(44, '2017-03-17'),
(45, '2017-03-17'),
(46, '2017-03-17'),
(47, '2017-03-17'),
(48, '2017-03-17'),
(49, '2017-03-17'),
(50, '2017-03-17'),
(51, '2017-03-17'),
(52, '2017-03-17'),
(53, '2017-03-17'),
(54, '2017-03-17'),
(55, '2017-03-17'),
(56, '2017-03-17'),
(57, '2017-03-17'),
(58, '2017-03-17'),
(59, '2017-03-17'),
(60, '2017-03-17'),
(61, '2017-03-17'),
(62, '2017-03-17'),
(63, '2017-03-17'),
(64, '2017-03-17'),
(65, '2017-03-17'),
(66, '2017-03-17'),
(67, '2017-03-17'),
(68, '2017-03-17'),
(69, '2017-03-17'),
(70, '2017-03-17'),
(71, '2017-03-17'),
(72, '2017-03-17'),
(73, '2017-03-17'),
(74, '2017-03-17'),
(75, '2017-03-17'),
(76, '2017-03-17'),
(77, '2017-03-17'),
(78, '2017-03-17'),
(79, '2017-03-17'),
(80, '2017-03-17'),
(81, '2017-03-17'),
(82, '2017-03-17'),
(83, '2017-03-17'),
(84, '2017-03-17'),
(85, '2017-03-17'),
(86, '2017-03-17'),
(87, '2017-03-17'),
(88, '2017-03-17'),
(89, '2017-03-17'),
(90, '2017-03-17'),
(91, '2017-03-17'),
(92, '2017-03-17'),
(93, '2017-03-17'),
(94, '2017-03-17'),
(95, '2017-03-17'),
(96, '2017-03-17'),
(97, '2017-03-17'),
(98, '2017-03-17'),
(99, '2017-03-17'),
(100, '2017-03-17'),
(101, '2017-03-17'),
(102, '2017-03-17'),
(103, '2017-03-17'),
(104, '2017-03-17'),
(105, '2017-03-17'),
(106, '2017-03-17'),
(107, '2017-03-17'),
(108, '2017-03-17'),
(109, '2017-03-17'),
(110, '2017-03-17'),
(111, '2017-03-17'),
(112, '2017-03-17'),
(113, '2017-03-17'),
(114, '2017-03-17'),
(115, '2017-03-17'),
(116, '2017-03-17'),
(117, '2017-03-17'),
(118, '2017-03-17'),
(119, '2017-03-17'),
(120, '2017-03-17'),
(121, '2017-03-17'),
(122, '2017-03-17'),
(123, '2017-03-17'),
(124, '2017-03-17'),
(125, '2017-03-17'),
(126, '2017-03-17'),
(127, '2017-03-17'),
(128, '2017-03-17'),
(129, '2017-03-17'),
(130, '2017-03-17'),
(131, '2017-03-17'),
(132, '2017-03-17'),
(133, '2017-03-17'),
(134, '2017-03-17'),
(135, '2017-03-17'),
(136, '2017-03-17'),
(137, '2017-03-17'),
(138, '2017-03-17'),
(139, '2017-03-17'),
(140, '2017-03-17'),
(141, '2017-03-17'),
(142, '2017-03-17'),
(143, '2017-03-17'),
(144, '2017-03-17'),
(145, '2017-03-17'),
(146, '2017-03-17'),
(147, '2017-03-17'),
(148, '2017-03-17'),
(149, '2017-03-17'),
(150, '2017-03-17'),
(151, '2017-03-17'),
(152, '2017-03-17'),
(153, '2017-03-17'),
(154, '2017-03-17'),
(155, '2017-03-17'),
(156, '2017-03-17'),
(157, '2017-03-17'),
(158, '2017-03-17'),
(159, '2017-03-17'),
(160, '2017-03-17'),
(161, '2017-03-17'),
(162, '2017-03-17'),
(163, '2017-03-17'),
(164, '2017-03-17'),
(165, '2017-03-17'),
(166, '2017-03-17'),
(167, '2017-03-17'),
(168, '2017-03-17'),
(169, '2017-03-17'),
(170, '2017-03-17'),
(171, '2017-03-17'),
(172, '2017-03-17'),
(173, '2017-03-17'),
(174, '2017-03-17'),
(175, '2017-03-17'),
(176, '2017-03-17'),
(177, '2017-03-17'),
(178, '2017-03-17'),
(179, '2017-03-17'),
(180, '2017-03-17'),
(181, '2017-03-17'),
(182, '2017-03-17'),
(183, '2017-03-18'),
(184, '2017-03-18'),
(185, '2017-03-18'),
(186, '2017-03-18'),
(187, '2017-03-18'),
(188, '2017-03-18'),
(189, '2017-03-18'),
(190, '2017-03-18'),
(191, '2017-03-18'),
(192, '2017-03-18'),
(193, '2017-03-18'),
(194, '2017-03-18'),
(195, '2017-03-18'),
(196, '2017-03-18'),
(197, '2017-03-18'),
(198, '2017-03-18'),
(199, '2017-03-18'),
(200, '2017-03-18'),
(201, '2017-03-18'),
(202, '2017-03-18'),
(203, '2017-03-18'),
(204, '2017-03-18'),
(205, '2017-03-18'),
(206, '2017-03-18'),
(207, '2017-03-18'),
(208, '2017-03-18'),
(209, '2017-03-18'),
(210, '2017-03-18'),
(211, '2017-03-18'),
(212, '2017-03-18'),
(213, '2017-03-18'),
(214, '2017-03-18'),
(215, '2017-03-18'),
(216, '2017-03-18'),
(217, '2017-03-18'),
(218, '2017-03-18'),
(219, '2017-03-18'),
(220, '2017-03-18'),
(221, '2017-03-18'),
(222, '2017-03-18'),
(223, '2017-03-18'),
(224, '2017-03-18'),
(225, '2017-03-18'),
(226, '2017-03-18'),
(227, '2017-03-18'),
(228, '2017-03-18'),
(229, '2017-03-18'),
(230, '2017-03-18'),
(231, '2017-03-18'),
(232, '2017-03-18'),
(233, '2017-03-18'),
(234, '2017-03-18'),
(235, '2017-03-18'),
(236, '2017-03-18'),
(237, '2017-03-18'),
(238, '2017-03-18'),
(239, '2017-03-18'),
(240, '2017-03-18'),
(241, '2017-03-18'),
(242, '2017-03-18'),
(243, '2017-03-18'),
(244, '2017-03-18'),
(245, '2017-03-18'),
(246, '2017-03-18'),
(247, '2017-03-18'),
(248, '2017-03-18'),
(249, '2017-03-18'),
(250, '2017-03-18'),
(251, '2017-03-18'),
(252, '2017-03-18'),
(253, '2017-03-18'),
(254, '2017-03-18'),
(255, '2017-03-18'),
(256, '2017-03-18'),
(257, '2017-03-18'),
(258, '2017-03-18'),
(259, '2017-03-18'),
(260, '2017-03-18'),
(261, '2017-03-18'),
(262, '2017-03-18'),
(263, '2017-03-18'),
(264, '2017-03-18'),
(265, '2017-03-19'),
(266, '2017-03-19'),
(267, '2017-03-19'),
(268, '2017-03-19'),
(269, '2017-03-19'),
(270, '2017-03-19'),
(271, '2017-03-19'),
(272, '2017-03-19'),
(273, '2017-03-19'),
(274, '2017-03-19'),
(275, '2017-03-19'),
(276, '2017-03-19'),
(277, '2017-03-19'),
(278, '2017-03-19'),
(279, '2017-03-19'),
(280, '2017-03-19'),
(281, '2017-03-19'),
(282, '2017-03-19'),
(283, '2017-03-19'),
(284, '2017-03-19'),
(285, '2017-03-19'),
(286, '2017-03-20'),
(287, '2017-03-20'),
(288, '2017-03-20'),
(289, '2017-03-20'),
(290, '2017-03-20'),
(291, '2017-03-20'),
(292, '2017-03-20'),
(293, '2017-03-20'),
(294, '2017-03-20'),
(295, '2017-03-20'),
(296, '2017-03-20'),
(297, '2017-03-20'),
(298, '2017-03-20'),
(299, '2017-03-20'),
(300, '2017-03-20'),
(301, '2017-03-20'),
(302, '2017-03-20'),
(303, '2017-03-20'),
(304, '2017-03-20'),
(305, '2017-03-20'),
(306, '2017-03-20'),
(307, '2017-03-20'),
(308, '2017-03-20'),
(309, '2017-03-20'),
(310, '2017-03-20'),
(311, '2017-03-20'),
(312, '2017-03-20'),
(313, '2017-03-20'),
(314, '2017-03-20'),
(315, '2017-03-20'),
(316, '2017-03-20'),
(317, '2017-03-20'),
(318, '2017-03-20'),
(319, '2017-03-20'),
(320, '2017-03-20'),
(321, '2017-03-20'),
(322, '2017-03-20'),
(323, '2017-03-20'),
(324, '2017-03-22'),
(325, '2017-03-22'),
(326, '2017-03-22'),
(327, '2017-03-22'),
(328, '2017-03-22'),
(329, '2017-03-22'),
(330, '2017-03-22'),
(331, '2017-03-22'),
(332, '2017-03-22'),
(333, '2017-03-22'),
(334, '2017-03-22'),
(335, '2017-03-22'),
(336, '2017-03-22'),
(337, '2017-03-22'),
(338, '2017-03-22'),
(339, '2017-03-22'),
(340, '2017-03-22'),
(341, '2017-03-22'),
(342, '2017-03-22'),
(343, '2017-03-22'),
(344, '2017-03-22'),
(345, '2017-03-22'),
(346, '2017-03-22'),
(347, '2017-03-22'),
(348, '2017-03-22'),
(349, '2017-03-22'),
(350, '2017-03-22'),
(351, '2017-03-22'),
(352, '2017-03-22'),
(353, '2017-03-22'),
(354, '2017-03-22'),
(355, '2017-03-22'),
(356, '2017-03-22'),
(357, '2017-03-22'),
(358, '2017-03-22'),
(359, '2017-03-22'),
(360, '2017-03-22'),
(361, '2017-03-22'),
(362, '2017-03-22'),
(363, '2017-03-22'),
(364, '2017-03-22'),
(365, '2017-03-22'),
(366, '2017-03-22'),
(367, '2017-03-22'),
(368, '2017-03-22'),
(369, '2017-03-22'),
(370, '2017-03-22'),
(371, '2017-03-22'),
(372, '2017-03-22'),
(373, '2017-03-22'),
(374, '2017-03-22'),
(375, '2017-03-22'),
(376, '2017-03-22'),
(377, '2017-03-22'),
(378, '2017-03-22'),
(379, '2017-03-22'),
(380, '2017-03-22'),
(381, '2017-03-22'),
(382, '2017-03-22'),
(383, '2017-03-22'),
(384, '2017-03-22'),
(385, '2017-03-22'),
(386, '2017-03-22'),
(387, '2017-03-22'),
(388, '2017-03-23'),
(389, '2017-04-03'),
(390, '2017-04-03'),
(391, '2017-04-03'),
(392, '2017-04-03'),
(393, '2017-04-03'),
(394, '2017-04-03'),
(395, '2017-04-03'),
(396, '2017-04-03'),
(397, '2017-04-03'),
(398, '2017-04-03'),
(399, '2017-04-03'),
(400, '2017-04-03'),
(401, '2017-04-03'),
(402, '2017-04-03'),
(403, '2017-04-03'),
(404, '2017-04-03'),
(405, '2017-04-03'),
(406, '2017-04-03'),
(407, '2017-04-03'),
(408, '2017-04-03'),
(409, '2017-04-03'),
(410, '2017-04-03'),
(411, '2017-04-03'),
(412, '2017-04-03'),
(413, '2017-04-03'),
(414, '2017-04-03'),
(415, '2017-04-03'),
(416, '2017-04-04'),
(417, '2017-04-10'),
(418, '2017-07-16'),
(419, '2017-07-16'),
(420, '2017-07-16'),
(421, '2017-07-16'),
(422, '2017-07-16'),
(423, '2017-07-16'),
(424, '2017-07-16'),
(425, '2017-07-16'),
(426, '2017-07-16'),
(427, '2017-07-16'),
(428, '2017-07-16'),
(429, '2017-07-16'),
(430, '2017-07-16'),
(431, '2017-07-16'),
(432, '2017-07-16'),
(433, '2017-07-18'),
(434, '2017-07-18'),
(435, '2017-07-18'),
(436, '2017-07-18'),
(437, '2017-07-18'),
(438, '2017-07-18'),
(439, '2017-07-18'),
(440, '2017-07-18'),
(441, '2017-07-18'),
(442, '2017-07-18'),
(443, '2017-07-18'),
(444, '2017-07-18'),
(445, '2017-07-18'),
(446, '2017-07-18'),
(447, '2017-07-18'),
(448, '2017-07-18'),
(449, '2017-07-18'),
(450, '2017-07-21'),
(451, '2017-07-29'),
(452, '2017-08-01'),
(453, '2017-08-14'),
(454, '2017-09-25'),
(455, '2017-09-25'),
(456, '2017-09-25'),
(457, '2017-09-25'),
(458, '2017-09-25'),
(459, '2018-01-01'),
(460, '2018-01-01'),
(461, '2018-01-02'),
(462, '2018-01-03'),
(463, '2018-01-03'),
(464, '2018-01-03'),
(465, '2018-01-03'),
(466, '2018-01-03'),
(467, '2018-01-03'),
(468, '2018-01-03'),
(469, '2018-01-03'),
(470, '2018-01-03'),
(471, '2018-01-03'),
(472, '2018-01-03'),
(473, '2018-01-04'),
(474, '2018-01-04'),
(475, '2018-01-04'),
(476, '2018-01-04'),
(477, '2018-01-04'),
(478, '2018-01-04'),
(479, '2018-01-04'),
(480, '2018-01-04'),
(481, '2018-01-04'),
(482, '2018-01-04'),
(483, '2018-01-04'),
(484, '2018-01-04'),
(485, '2018-01-04'),
(486, '2018-01-04'),
(487, '2018-01-04'),
(488, '2018-01-04'),
(489, '2018-01-04'),
(490, '2018-01-04'),
(491, '2018-01-04'),
(492, '2018-01-04'),
(493, '2018-01-04'),
(494, '2018-01-04'),
(495, '2018-01-04'),
(496, '2018-01-04'),
(497, '2018-01-04'),
(498, '2018-01-04'),
(499, '2018-01-04'),
(500, '2018-01-04'),
(501, '2018-01-04'),
(502, '2018-01-04'),
(503, '2018-01-04'),
(504, '2018-01-04'),
(505, '2018-01-04'),
(506, '2018-01-04'),
(507, '2018-01-04'),
(508, '2018-01-04'),
(509, '2018-01-04'),
(510, '2018-01-04'),
(511, '2018-01-04'),
(512, '2018-01-04'),
(513, '2018-01-04'),
(514, '2018-01-04'),
(515, '2018-01-04'),
(516, '2018-01-04'),
(517, '2018-01-04'),
(518, '2018-01-04'),
(519, '2018-01-04'),
(520, '2018-01-04'),
(521, '2018-01-04'),
(522, '2018-01-04'),
(523, '2018-01-04'),
(524, '2018-01-04'),
(525, '2018-01-04'),
(526, '2018-01-05'),
(527, '2018-01-18'),
(528, '2018-01-19'),
(529, '2018-01-19'),
(530, '2018-01-19'),
(531, '2018-03-03'),
(532, '2018-05-13'),
(533, '2018-05-13'),
(534, '2018-05-13'),
(535, '2018-05-13'),
(536, '2018-05-13'),
(537, '2018-05-13'),
(538, '2018-05-13'),
(539, '2018-05-13'),
(540, '2018-05-13'),
(541, '2018-05-13'),
(542, '2018-05-13'),
(543, '2018-05-13'),
(544, '2018-05-13'),
(545, '2018-05-13'),
(546, '2018-05-13'),
(547, '2018-06-15'),
(548, '2018-06-15'),
(549, '2018-08-30'),
(550, '2018-08-30'),
(551, '2018-08-30'),
(552, '2019-05-05'),
(553, '2019-05-12'),
(554, '2019-05-12'),
(555, '2021-08-04'),
(556, '2021-08-04'),
(557, '2021-08-04'),
(558, '2021-08-22'),
(559, '2021-08-22'),
(560, '2021-08-22'),
(561, '2021-08-22'),
(562, '2021-08-22'),
(563, '2021-08-22'),
(564, '2021-08-22'),
(565, '2021-08-22'),
(566, '2021-08-22'),
(567, '2021-08-22'),
(568, '2021-08-22'),
(569, '2021-08-22'),
(570, '2021-08-22'),
(571, '2021-08-22'),
(572, '2021-08-22'),
(573, '2021-08-22'),
(574, '2021-08-22'),
(575, '2021-08-22'),
(576, '2021-08-22'),
(577, '2021-08-22'),
(578, '2021-08-22'),
(579, '1970-01-01'),
(580, '1970-01-01'),
(581, '1970-01-01'),
(582, '1970-01-01'),
(583, '1970-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `cw_login`
--

CREATE TABLE IF NOT EXISTS `cw_login` (
`log_oid` int(11) NOT NULL,
  `log_name` varchar(100) NOT NULL,
  `log_contact` varchar(20) NOT NULL,
  `log_role` varchar(50) NOT NULL,
  `log_username` varchar(100) NOT NULL,
  `log_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cw_login`
--

INSERT INTO `cw_login` (`log_oid`, `log_name`, `log_contact`, `log_role`, `log_username`, `log_date`) VALUES
(1, 'shahbaaz', 'aaa', 'su-admin', 'shaz@cw', '2021-08-15 06:56:19'),
(3, 'admin', 'admin', 'su-admin', 'admin@admin.com', '2021-09-07 18:27:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cw_chicken_variety`
--
ALTER TABLE `cw_chicken_variety`
 ADD PRIMARY KEY (`chv_oid`);

--
-- Indexes for table `cw_create_chicken_order`
--
ALTER TABLE `cw_create_chicken_order`
 ADD PRIMARY KEY (`ccco_oid`);

--
-- Indexes for table `cw_customer_address`
--
ALTER TABLE `cw_customer_address`
 ADD PRIMARY KEY (`cud_oid`);

--
-- Indexes for table `cw_customer_details`
--
ALTER TABLE `cw_customer_details`
 ADD PRIMARY KEY (`cust_oid`);

--
-- Indexes for table `cw_hit_app`
--
ALTER TABLE `cw_hit_app`
 ADD PRIMARY KEY (`hit_oid`);

--
-- Indexes for table `cw_login`
--
ALTER TABLE `cw_login`
 ADD PRIMARY KEY (`log_oid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cw_chicken_variety`
--
ALTER TABLE `cw_chicken_variety`
MODIFY `chv_oid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `cw_create_chicken_order`
--
ALTER TABLE `cw_create_chicken_order`
MODIFY `ccco_oid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `cw_customer_address`
--
ALTER TABLE `cw_customer_address`
MODIFY `cud_oid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cw_customer_details`
--
ALTER TABLE `cw_customer_details`
MODIFY `cust_oid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cw_hit_app`
--
ALTER TABLE `cw_hit_app`
MODIFY `hit_oid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=584;
--
-- AUTO_INCREMENT for table `cw_login`
--
ALTER TABLE `cw_login`
MODIFY `log_oid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;