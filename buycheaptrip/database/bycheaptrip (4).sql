-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2024 at 03:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bycheaptrip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `account_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `image`, `account_name`, `username`, `password`) VALUES
(1, 'Buycheaptrip-logo.png', 'Administrator', 'admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `background`
--

CREATE TABLE `background` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `background`
--

INSERT INTO `background` (`id`, `image`) VALUES
(1, 'bg-image.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`) VALUES
(1, 'Noida'),
(2, 'Hariyana'),
(3, 'Sultanpur'),
(4, 'Kanpur'),
(5, 'HongKong2');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `address_1` varchar(500) NOT NULL,
  `address_2` varchar(500) NOT NULL,
  `address_3` varchar(500) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `web` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `address_1`, `address_2`, `address_3`, `mobile`, `email`, `web`) VALUES
(1, 'Reg. Office - 5/324 Viram Khand-5', 'Gomati Nagar Lucknow', ' Uttar Pradesh-226010', '7887031889', ' info@apmleeducational.com', 'ampleeducationalsociety.org');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `hotel_id` int(11) NOT NULL,
  `hotel_name` varchar(100) NOT NULL,
  `hcity_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hotel_id`, `hotel_name`, `hcity_id`) VALUES
(1, 'taj hotel', 1),
(10, 'Delhi Hotels', 3),
(12, 'demo hotel', 5),
(13, 'Noida Hotel', 2),
(14, 'BMDU hoteks', 4),
(15, 'manish hotel', 1),
(16, 'Satyam Hotel', 1),
(17, 'dlf mall', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_categories`
--

CREATE TABLE `hotel_categories` (
  `hcategory_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `hc_id` int(10) NOT NULL,
  `prices` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel_categories`
--

INSERT INTO `hotel_categories` (`hcategory_id`, `category_name`, `hc_id`, `prices`) VALUES
(2, 'Economy1', 1, 15000),
(17, 'VIP', 1, 15000),
(18, 'Economy', 1, 1500),
(19, 'Economy', 15, 100),
(20, 'Super DLX', 1, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `image`) VALUES
(1, 'MANISH2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sightseeing`
--

CREATE TABLE `sightseeing` (
  `sight_id` int(11) NOT NULL,
  `sight_name` varchar(150) NOT NULL,
  `prices` double NOT NULL,
  `tsight_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sightseeing`
--

INSERT INTO `sightseeing` (`sight_id`, `sight_name`, `prices`, `tsight_id`) VALUES
(1, 'rever Front2', 1520, 0),
(4, 'rever Front2', 15000, 3),
(5, 'rever Front3', 150000, 4);

-- --------------------------------------------------------

--
-- Table structure for table `thailand_customers`
--

CREATE TABLE `thailand_customers` (
  `cust_id` int(11) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `reff_id` varchar(10) NOT NULL,
  `email` varchar(75) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `pax` int(20) NOT NULL,
  `package_inr` double NOT NULL,
  `persion_inr` double NOT NULL,
  `travel_date` varchar(50) NOT NULL,
  `create_date` date NOT NULL DEFAULT current_timestamp(),
  `status` enum('pending','cancel','confirm','') NOT NULL DEFAULT 'pending',
  `account_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thailand_customers`
--

INSERT INTO `thailand_customers` (`cust_id`, `customer_name`, `reff_id`, `email`, `phone`, `pax`, `package_inr`, `persion_inr`, `travel_date`, `create_date`, `status`, `account_id`) VALUES
(53, 'satyam', 'BCT609022', 'satyam@gmail.com', '9765432398', 2, 35000, 17500, '2024-04-11', '2024-04-06', 'pending', 'jay@gmail.com'),
(56, 'testname', 'BCT319722', 'admin@gmail.com', '1234567890', 2, 21500, 10750, '2024-04-13', '2024-04-06', 'pending', 'jay@gmail.com'),
(57, 'testname', 'BCT376105', 'anilbmdu@gmail.com', '1234567890', 2, 0, 0, '2024-04-13', '2024-04-06', 'pending', 'jay@gmail.com'),
(58, 'anilgg', 'BCT139234', 'anilbmdu@gmail.com', '1234567890', 2, 21500, 10750, '2024-04-13', '2024-04-06', 'pending', 'jay@gmail.com'),
(59, 'testname', 'BCT799975', 'anilbmdu@gmail.com', '1234567890', 2, 21500, 10750, '2024-04-13', '2024-04-06', 'pending', 'jay@gmail.com'),
(60, 'anil kumar', 'BCT423903', 'anilbmdu@gmail.com', '1234567890', 2, 35000, 17500, '2024-04-10', '2024-04-07', 'pending', 'jay@gmail.com'),
(61, 'anil', 'BCT524716', 'anil@gmail.com', '7654342534', 1, 1500, 1500, '2024-04-10', '2024-04-09', 'pending', 'jay@gmail.com'),
(62, 'anilgg', 'BCT73071', 'anilbmdu@gmail.com', '1234567890', 2, 1500, 750, '2024-04-10', '2024-04-09', 'pending', 'jay@gmail.com'),
(63, 'anilgg', 'BCT238142', 'anilbmdu@gmail.com', '1234567890', 2, 21500, 10750, '2024-04-10', '2024-04-09', 'pending', 'jay@gmail.com'),
(64, 'testname', 'BCT749203', 'anilbmdu@gmail.com', '1234567890', 2, 1500, 750, '2024-04-10', '2024-04-09', 'pending', 'jay@gmail.com'),
(65, 'testname', 'BCT408098', 'anilbmdu@gmail.com', '1234567890', 2, 1500, 750, '2024-04-10', '2024-04-09', 'pending', 'jay@gmail.com'),
(66, 'testname', 'BCT732385', 'anilbmdu@gmail.com', '1234567890', 2, 5000, 2500, '2024-04-10', '2024-04-09', 'pending', 'jay@gmail.com'),
(67, 'testname', 'BCT266148', 'anilbmdu@gmail.com', '1234567890', 2, 5000, 2500, '2024-04-10', '2024-04-09', 'pending', 'jay@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `thailand_hotel`
--

CREATE TABLE `thailand_hotel` (
  `thailand_hotel_id` int(11) NOT NULL,
  `hotelcity_name` varchar(100) NOT NULL,
  `hotels` varchar(100) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `rooms` int(100) NOT NULL,
  `nights` int(100) NOT NULL,
  `ex_adults` varchar(100) DEFAULT NULL,
  `refer_id` varchar(50) NOT NULL,
  `prices` double DEFAULT NULL,
  `reff_id` varchar(20) NOT NULL,
  `hotel_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thailand_hotel`
--

INSERT INTO `thailand_hotel` (`thailand_hotel_id`, `hotelcity_name`, `hotels`, `category_name`, `rooms`, `nights`, `ex_adults`, `refer_id`, `prices`, `reff_id`, `hotel_date`) VALUES
(176, 'Noida', 'taj hotel', 'Economy1', 1, 1, '', 'BCT609022', 15000, '', '2024-04-06 12:18:53'),
(177, 'Noida', 'manish hotel', 'Economy', 1, 1, '', 'BCT628131', 100, '', '2024-04-06 12:49:30'),
(178, 'Noida', 'manish hotel', 'Economy', 2, 1, '', 'BCT311174', 200, '', '2024-04-06 13:15:58'),
(179, 'Noida', 'manish hotel', 'Economy', 1, 1, '', 'BCT251839', 100, '', '2024-04-06 13:16:43'),
(180, 'Noida', 'taj hotel', 'Economy', 1, 1, '', 'BCT149817', 1500, '', '2024-04-06 13:19:47'),
(181, 'Noida', 'taj hotel', 'Economy', 2, 1, '', 'BCT760862', 3000, '', '2024-04-06 13:20:47'),
(182, 'Noida', 'taj hotel', 'Economy', 1, 1, '', 'BCT319722', 1500, '', '2024-04-06 13:21:34'),
(183, 'Noida', 'taj hotel', 'Economy', 1, 1, '', 'BCT139234', 1500, '', '2024-04-06 13:48:53'),
(184, 'Noida', 'taj hotel', 'Economy', 1, 1, '', 'BCT799975', 1500, '', '2024-04-06 14:34:14'),
(185, 'Noida', 'taj hotel', 'Economy1', 1, 1, '', 'BCT423903', 15000, '', '2024-04-07 14:44:07'),
(186, 'Noida', 'taj hotel', 'Economy', 1, 1, '', 'BCT232757', 1500, '', '2024-04-07 14:57:39'),
(187, 'Noida', 'taj hotel', 'Economy', 1, 1, '', 'BCT15979', 1500, '', '2024-04-07 15:06:46'),
(188, 'Noida', 'taj hotel', 'Economy1', 1, 1, '', 'BCT862098', 15000, '', '2024-04-07 16:44:33'),
(189, 'Noida', 'taj hotel', 'Economy', 1, 1, '', 'BCT430973', 1500, '', '2024-04-07 16:52:46'),
(190, 'Noida', 'taj hotel', 'Economy', 1, 1, '', 'BCT756397', 1500, '', '2024-04-07 17:19:54'),
(191, 'Noida', 'taj hotel', 'Economy1', 1, 1, '', 'BCT260890', 15000, '', '2024-04-08 05:03:18'),
(192, 'Noida', 'taj hotel', 'Economy', 1, 1, '', 'BCT204400', 1500, '', '2024-04-08 05:06:01'),
(193, 'Noida', 'taj hotel', 'Economy1', 1, 1, '', 'BCT704572', 15000, '', '2024-04-08 06:14:24'),
(194, 'Noida', 'taj hotel', 'Super DLX', 1, 1, '', 'BCT860336', 10000, '', '2024-04-08 06:17:43'),
(195, 'Noida', 'taj hotel', 'Economy1', 1, 1, '', 'BCT853864', 15000, '', '2024-04-08 09:23:18'),
(196, 'Noida', 'taj hotel', 'Economy', 1, 1, '', 'BCT138697', 1500, '', '2024-04-08 11:22:06'),
(197, 'Noida', 'taj hotel', 'Economy', 1, 1, '', 'BCT346679', 1500, '', '2024-04-08 11:26:58'),
(198, 'Noida', 'taj hotel', 'Economy', 1, 1, '', 'BCT551523', 1500, '', '2024-04-08 11:31:08'),
(199, 'Noida', 'taj hotel', 'Economy', 1, 1, '', 'BCT148534', 1500, '', '2024-04-08 11:56:05'),
(200, 'Noida', 'taj hotel', 'Economy', 1, 1, '', 'BCT852467', 1500, '', '2024-04-08 12:14:29'),
(201, 'Noida', 'taj hotel', 'Super DLX', 1, 1, '', 'BCT122813', 10000, '', '2024-04-08 13:16:09'),
(202, 'Noida', 'taj hotel', 'Economy', 1, 1, '', 'BCT524716', 1500, '', '2024-04-09 03:48:15'),
(203, 'Noida', 'taj hotel', 'Economy', 1, 1, '', 'BCT238142', 1500, '', '2024-04-09 05:23:36'),
(204, 'Noida', 'taj hotel', 'Economy', 1, 1, '', 'BCT73071', 1500, '', '2024-04-09 05:24:23'),
(205, 'Noida', 'taj hotel', 'Economy', 1, 1, '', 'BCT749203', 1500, '', '2024-04-09 05:34:57'),
(206, 'Noida', 'taj hotel', 'Economy', 1, 1, '', 'BCT408098', 1500, '', '2024-04-09 05:36:40'),
(207, 'Noida', 'taj hotel', 'Economy', 1, 1, '', 'BCT33005', 1500, '', '2024-04-09 06:03:05');

-- --------------------------------------------------------

--
-- Table structure for table `thailand_sightseeing`
--

CREATE TABLE `thailand_sightseeing` (
  `thailand_sight_id` int(255) NOT NULL,
  `sight_city` varchar(255) NOT NULL,
  `sightseeing` varchar(255) NOT NULL,
  `prices` varchar(255) NOT NULL,
  `sight_persion` varchar(255) NOT NULL,
  `sight_date` varchar(255) NOT NULL,
  `refer_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thailand_sightseeing`
--

INSERT INTO `thailand_sightseeing` (`thailand_sight_id`, `sight_city`, `sightseeing`, `prices`, `sight_persion`, `sight_date`, `refer_id`) VALUES
(97, 'Sultanpur', 'rever Front2', '15000', '1', '2024-04-11', 'BCT609022'),
(98, 'Sultanpur', 'rever Front2', '15000', '1', '2024-04-13', 'BCT319722'),
(99, 'Sultanpur', 'rever Front2', '15000', '1', '2024-04-13', 'BCT129871'),
(100, 'Sultanpur', 'rever Front2', '15000', '1', '2024-04-13', 'BCT139234'),
(101, 'Sultanpur', 'rever Front2', '15000', '1', '2024-04-13', 'BCT799975'),
(102, 'Sultanpur', 'rever Front2', '15000', '1', '2024-04-10', 'BCT423903'),
(103, 'Sultanpur', 'rever Front2', '15000', '1', '2024-04-13', 'BCT232757'),
(104, 'Kanpur', 'rever Front3', '150000', '1', '2024-04-07', 'BCT15979'),
(105, 'Sultanpur', 'rever Front2', '15000', '1', '2024-04-08', 'BCT862098'),
(106, 'Sultanpur', 'rever Front2', '15000', '1', '2024-04-15', 'BCT430973'),
(107, 'Sultanpur', 'rever Front2', '5', '1', '2024-04-09', 'BCT430973'),
(108, 'Sultanpur', 'rever Front2', '15000', '1', '2024-04-09', 'BCT756397'),
(109, 'Sultanpur', 'rever Front2', '5', '1', '2024-04-08', 'BCT756397'),
(110, 'Sultanpur', 'rever Front2', '15000', '1', '2024-04-09', 'BCT260890'),
(111, 'Sultanpur', 'rever Front2', '5', '1', '2024-04-09', 'BCT260890'),
(112, 'Sultanpur', 'rever Front2', '15000', '1', '2024-04-09', 'BCT204400'),
(113, 'Sultanpur', 'rever Front2', '5', '1', '2024-04-09', 'BCT204400'),
(114, 'Kanpur', 'rever Front3', '150000', '1', '2024-04-10', 'BCT524611'),
(115, 'Kanpur', 'rever Front3', '4', '1', '2024-04-09', 'BCT524611'),
(116, 'Sultanpur', 'rever Front2', '15000', '1', '2024-04-12', 'BCT584198'),
(117, 'Sultanpur', 'rever Front2', '5', '1', '2024-04-12', 'BCT584198'),
(118, 'Kanpur', 'rever Front3', '150000', '1', '2024-04-09', 'BCT264730'),
(119, 'Kanpur', 'rever Front3', '4', '1', '2024-04-09', 'BCT264730'),
(120, 'Sultanpur', 'rever Front2', '15000', '1', '2024-04-09', 'BCT880196'),
(121, 'Sultanpur', 'rever Front2', '5', '1', '2024-04-09', 'BCT880196'),
(122, 'Sultanpur', 'rever Front2', '15000', '1', '2024-04-10', 'BCT828967'),
(123, 'Sultanpur', 'rever Front2', '5', '1', '2024-04-09', 'BCT828967'),
(124, 'Sultanpur', 'rever Front2', '15000', '1', '2024-04-09', 'BCT701920'),
(125, 'Sultanpur', 'rever Front2', '10', '2', '', 'BCT701920'),
(126, 'Sultanpur', 'rever Front2', '15000', '1', '2024-04-09', 'BCT704572'),
(127, 'Sultanpur', 'rever Front2', '5', '1', '2024-04-09', 'BCT704572'),
(128, 'Sultanpur', 'rever Front2', '15000', '1', '2024-04-09', 'BCT860336'),
(129, 'Sultanpur', 'rever Front2', '5', '1', '2024-04-09', 'BCT860336'),
(130, 'Sultanpur', 'rever Front2', '15000', '1', '2024-04-18', 'BCT180300'),
(131, 'Sultanpur', 'rever Front2', '5', '1', '2024-04-18', 'BCT180300'),
(132, 'Sultanpur', 'rever Front2', '15000', '1', '2024-04-15', 'BCT787131'),
(133, 'Sultanpur', 'rever Front2', '5', '1', '2024-04-15', 'BCT787131'),
(134, 'Sultanpur', 'rever Front2', '15000', '1', '2024-04-08', 'BCT853864'),
(135, 'Sultanpur', 'rever Front2', '5', '1', '2024-04-09', 'BCT853864'),
(136, 'Sultanpur', 'rever Front2', '15000', '1', '2024-04-09', 'BCT935406'),
(137, 'Sultanpur', 'rever Front2', '5', '1', '2024-04-09', 'BCT935406'),
(138, 'Sultanpur', 'rever Front2', '15000', '1', '2024-04-09', 'BCT601919'),
(139, 'Sultanpur', 'rever Front2', '5', '1', '2024-04-09', 'BCT601919'),
(140, 'Sultanpur', 'rever Front2', '15000', '1', '2024-04-09', 'BCT218089'),
(141, 'Sultanpur', 'rever Front2', '15000', '1', '2024-04-10', 'BCT238142');

-- --------------------------------------------------------

--
-- Table structure for table `thailand_transport`
--

CREATE TABLE `thailand_transport` (
  `thailand_transport_id` int(255) NOT NULL,
  `transport` varchar(255) NOT NULL,
  `prices` varchar(255) NOT NULL,
  `transport_city` varchar(255) NOT NULL,
  `refer_id` varchar(255) NOT NULL,
  `transport_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thailand_transport`
--

INSERT INTO `thailand_transport` (`thailand_transport_id`, `transport`, `prices`, `transport_city`, `refer_id`, `transport_date`) VALUES
(144, '01Why Taxi From Phuket Airport to Kharabi Hotel', '5000', 'Noida', 'BCT609022', '2024-04-10 18:30:00'),
(145, '01Why Taxi From Phuket Airport to Kharabi Hotel', '5000', 'Noida', 'BCT319722', '2024-04-12 18:30:00'),
(146, '01Why Taxi From Phuket Airport to Kharabi Hotel', '5000', 'Noida', 'BCT129871', '2024-04-12 18:30:00'),
(147, '01Why Taxi From Phuket Airport to Kharabi Hotel', '5000', 'Noida', 'BCT139234', '2024-04-12 18:30:00'),
(148, '01Why Taxi From Phuket Airport to Kharabi Hotel', '5000', 'Noida', 'BCT799975', '2024-04-12 18:30:00'),
(149, '01Why Taxi From Phuket Airport to Kharabi Hotel', '5000', 'Noida', 'BCT423903', '2024-04-09 18:30:00'),
(150, '01Why Taxi From Phuket Airport to Kharabi Hotel', '5000', 'Noida', 'BCT232757', '2024-04-12 18:30:00'),
(151, '01Why Taxi From Phuket Airport to Kharabi Hotel', '5000', 'Noida', 'BCT15979', '2024-04-06 18:30:00'),
(152, '01Why Taxi From Phuket Airport to Kharabi Hotel', '5000', 'Noida', 'BCT862098', '2024-04-07 18:30:00'),
(153, '01Why Taxi From Phuket Airport to Kharabi Hotel', '5000', 'Noida', 'BCT430973', '2024-04-14 18:30:00'),
(154, '01Why Taxi From Phuket Airport to Kharabi Hotel', '5000', 'Noida', 'BCT756397', '2024-04-08 18:30:00'),
(155, '01Why Taxi From Phuket Airport to Kharabi Hotel', '5000', 'Noida', 'BCT260890', '2024-04-08 18:30:00'),
(156, '01Why Taxi From Phuket Airport to Kharabi Hotel', '5000', 'Noida', 'BCT204400', '2024-04-08 18:30:00'),
(157, '01Why Taxi From Phuket Airport to Kharabi Hotel', '5000', 'Noida', 'BCT704572', '2024-04-08 18:30:00'),
(158, '01Why Taxi From Phuket Airport to Kharabi Hotel', '5000', 'Noida', 'BCT860336', '2024-04-08 18:30:00'),
(159, '01Why Taxi From Phuket Airport to Kharabi Hotel', '5000', 'Noida', 'BCT853864', '2024-04-07 18:30:00'),
(160, '01Why Taxi From Phuket Airport to Kharabi Hotel', '5000', 'Noida', 'BCT138697', '2024-04-08 18:30:00'),
(161, '01Why Taxi From Phuket Airport to Kharabi Hotel', '5000', 'Noida', 'BCT346679', '2024-04-08 18:30:00'),
(162, '01Why Taxi From Phuket Airport to Kharabi Hotel', '5000', 'Noida', 'BCT551523', '2024-04-08 18:30:00'),
(163, '01Why Taxi From Phuket Airport to Kharabi Hotel', '5000', 'Noida', 'BCT148534', '2024-04-15 18:30:00'),
(164, '01Why Taxi From Phuket Airport to Kharabi Hotel', '5000', 'Noida', 'BCT852467', '2024-04-09 18:30:00'),
(165, '01Why Taxi From Phuket Airport to Kharabi Hotel', '5000', 'Noida', 'BCT122813', '2024-04-09 18:30:00'),
(166, '01Why Taxi From Phuket Airport to Kharabi Hotel', '5000', 'Noida', 'BCT238142', '2024-04-09 18:30:00'),
(167, '01 Way Taxi From Phuket Airport to Krabi Hotel', '5000', 'Noida', 'BCT732385', '0000-00-00 00:00:00'),
(168, '01Why Taxi From Phuket Airport to Kharabi Hotel', '5000', 'Noida', 'BCT266148', '2024-04-09 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `trans_id` int(11) NOT NULL,
  `transport_name` varchar(150) NOT NULL,
  `prices` double NOT NULL,
  `tcity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`trans_id`, `transport_name`, `prices`, `tcity_id`) VALUES
(1, '01 Way Taxi From Phuket to Krabi Hotel', 2000, 1),
(3, '01 Way Taxi From Phuket Airport to Krabi Hotel', 2000, 1),
(4, '01Why Taxi From Phuket Airport to Kharabi Hotel', 1500, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transport_category`
--

CREATE TABLE `transport_category` (
  `tranport_cat_id` int(11) NOT NULL,
  `transport_category` varchar(150) NOT NULL,
  `prices` double NOT NULL,
  `transref_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transport_category`
--

INSERT INTO `transport_category` (`tranport_cat_id`, `transport_category`, `prices`, `transref_id`) VALUES
(2, '1-8PAX', 5000, 4),
(3, '1-10', 5000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `created_at` varchar(1000) NOT NULL DEFAULT current_timestamp(),
  `delete_at` varchar(255) NOT NULL,
  `status` enum('active','pending','reject','inactive') DEFAULT 'pending',
  `feedback` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `phone`, `email`, `password`, `created_at`, `delete_at`, `status`, `feedback`) VALUES
(15, 'Jai', 'male', '9454969291', 'jay@gmail.com', '123456', '2024-03-28 18:50:22', '', 'active', 'good user'),
(16, 'Manish', 'male', '9454969290', 'manish@gmail.com', '12345', '2024-03-29 12:32:14', '', 'active', NULL),
(17, 'Manish', 'male', '9454969298', 'manish1@gmail.com', '123456', '2024-03-29 12:33:59', '', 'reject', 'not carrect user'),
(18, 'Manish', 'male', '9454969250', 'manish12@gmail.com', '123456', '2024-03-29 12:35:19', '', 'pending', NULL),
(19, 'Keegan Macias', 'male', '9876543210', 'tara@mailinator.com', '123456', '2024-04-01 11:00:01', '', 'pending', NULL),
(20, 'Bo Floyd', 'male', '9876542030', 'cevygamor@mailinator.com', '123456', '2024-04-01 11:01:35', '', 'pending', NULL),
(21, 'Bo Floyd', 'male', '9876542031', 'cevygamor1@mailinator.com', '123456', '2024-04-01 11:03:23', '', 'pending', 'not verify');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `background`
--
ALTER TABLE `background`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `hotel_categories`
--
ALTER TABLE `hotel_categories`
  ADD PRIMARY KEY (`hcategory_id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sightseeing`
--
ALTER TABLE `sightseeing`
  ADD PRIMARY KEY (`sight_id`);

--
-- Indexes for table `thailand_customers`
--
ALTER TABLE `thailand_customers`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `thailand_hotel`
--
ALTER TABLE `thailand_hotel`
  ADD PRIMARY KEY (`thailand_hotel_id`);

--
-- Indexes for table `thailand_sightseeing`
--
ALTER TABLE `thailand_sightseeing`
  ADD PRIMARY KEY (`thailand_sight_id`);

--
-- Indexes for table `thailand_transport`
--
ALTER TABLE `thailand_transport`
  ADD PRIMARY KEY (`thailand_transport_id`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`trans_id`);

--
-- Indexes for table `transport_category`
--
ALTER TABLE `transport_category`
  ADD PRIMARY KEY (`tranport_cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `background`
--
ALTER TABLE `background`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `hotel_categories`
--
ALTER TABLE `hotel_categories`
  MODIFY `hcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sightseeing`
--
ALTER TABLE `sightseeing`
  MODIFY `sight_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `thailand_customers`
--
ALTER TABLE `thailand_customers`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `thailand_hotel`
--
ALTER TABLE `thailand_hotel`
  MODIFY `thailand_hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT for table `thailand_sightseeing`
--
ALTER TABLE `thailand_sightseeing`
  MODIFY `thailand_sight_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `thailand_transport`
--
ALTER TABLE `thailand_transport`
  MODIFY `thailand_transport_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transport_category`
--
ALTER TABLE `transport_category`
  MODIFY `tranport_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
