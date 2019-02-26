-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2019 at 09:15 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf32_bin NOT NULL,
  `city_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `name`, `city_id`, `created_at`, `updated_at`) VALUES
(1, 'sector 6', 1, '2019-02-22 12:49:49', '2019-02-22 12:49:49'),
(2, 'sector 5', 1, '2019-02-22 12:50:00', '2019-02-22 12:50:00'),
(4, 'Block D', 2, '2019-02-22 12:50:35', '2019-02-22 12:50:35'),
(5, 'Block A', 2, '2019-02-22 12:50:47', '2019-02-22 12:50:47'),
(7, 'Mirpur 1', 3, '2019-02-23 11:53:07', '2019-02-23 11:53:07'),
(8, 'MIrpur 2', 3, '2019-02-23 11:53:19', '2019-02-23 11:53:19'),
(9, 'DOHS', 3, '2019-02-23 11:53:42', '2019-02-23 11:53:42'),
(10, 'Mirpur 10', 3, '2019-02-23 11:53:57', '2019-02-23 11:53:57'),
(11, 'Block C', 2, '2019-02-24 01:59:36', '2019-02-24 01:59:36'),
(12, 'Sector 7', 1, '2019-02-24 01:59:47', '2019-02-24 01:59:47'),
(13, 'Sector 8', 1, '2019-02-24 02:00:00', '2019-02-24 02:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `restaurant_id` int(220) NOT NULL,
  `table_ids` varchar(255) COLLATE utf32_bin DEFAULT NULL,
  `name` varchar(250) COLLATE utf32_bin NOT NULL,
  `phone` varchar(20) COLLATE utf32_bin NOT NULL,
  `address` varchar(200) COLLATE utf32_bin NOT NULL,
  `people` int(20) NOT NULL,
  `date` int(15) NOT NULL,
  `time` varchar(40) COLLATE utf32_bin NOT NULL,
  `duration` varchar(250) COLLATE utf32_bin DEFAULT NULL,
  `payment_status` varchar(10) COLLATE utf32_bin NOT NULL DEFAULT 'unpaid',
  `payment_details` longtext COLLATE utf32_bin,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `restaurant_id`, `table_ids`, `name`, `phone`, `address`, `people`, `date`, `time`, `duration`, `payment_status`, `payment_details`, `status`, `created_at`, `updated_at`) VALUES
(2, 3, '[6,7,8,9]', 'manik', '123456789', '55', 10, 1550916000, '10:00:00', '3 Hours', 'paid', '{\"tran_id\":\"c81e728d9d\",\"val_id\":\"19022412004jtdnz4AtUUTQZMl\",\"amount\":\"20\",\"card_type\":\"BKASH-BKash\",\"store_amount\":\"19.5\",\"card_no\":null,\"bank_tran_id\":\"19022412004ocEe1vj7wrTT2kx\",\"status\":\"VALID\",\"tran_date\":\"2019-02-24 01:19:44\",\"currency\":\"BDT\",\"card_issuer\":\"BKash Mobile Banking\",\"card_brand\":\"MOBILEBANKING\",\"card_issuer_country\":\"Bangladesh\",\"card_issuer_country_code\":\"BD\",\"store_id\":\"activ5c3c5dac9254d\",\"verify_sign\":\"427c0c8dd706b2d151c3981509d1a134\",\"verify_key\":\"amount,bank_tran_id,base_fair,card_brand,card_issuer,card_issuer_country,card_issuer_country_code,card_no,card_type,currency,currency_amount,currency_rate,currency_type,risk_level,risk_title,status,store_amount,store_id,tran_date,tran_id,val_id,value_a,value_b,value_c,value_d\",\"verify_sign_sha2\":\"6aec298b8bfedeb2346f6ff58f26d6be4d4ae890113aff477f0581b0d1a97719\",\"currency_type\":\"BDT\",\"currency_amount\":\"20.00\",\"currency_rate\":\"1.0000\",\"base_fair\":\"0.00\",\"value_a\":null,\"value_b\":null,\"value_c\":null,\"value_d\":null,\"risk_level\":\"0\",\"risk_title\":\"Safe\"}', 1, '2019-02-23 13:16:37', '2019-02-23 13:29:38'),
(3, 3, NULL, 'Riad', '01996231545', 'uttara ajompur', 5, 1550916000, '10:00:00', '2 Hours', 'paid', '{\"tran_id\":\"eccbc87e4b\",\"val_id\":\"190224143261zbT3D4HYiSVbj6\",\"amount\":\"840\",\"card_type\":\"BKASH-BKash\",\"store_amount\":\"819\",\"card_no\":null,\"bank_tran_id\":\"19022414326fJ6fk4fuD2VbTec\",\"status\":\"VALID\",\"tran_date\":\"2019-02-24 01:42:24\",\"currency\":\"BDT\",\"card_issuer\":\"BKash Mobile Banking\",\"card_brand\":\"MOBILEBANKING\",\"card_issuer_country\":\"Bangladesh\",\"card_issuer_country_code\":\"BD\",\"store_id\":\"activ5c3c5dac9254d\",\"verify_sign\":\"52ef82d3f2d515921b00aa8913769ad8\",\"verify_key\":\"amount,bank_tran_id,base_fair,card_brand,card_issuer,card_issuer_country,card_issuer_country_code,card_no,card_type,currency,currency_amount,currency_rate,currency_type,risk_level,risk_title,status,store_amount,store_id,tran_date,tran_id,val_id,value_a,value_b,value_c,value_d\",\"verify_sign_sha2\":\"e884b96e50977896f9d77c4f69014500941f604e6181fa37c47237f3cb6cb6c1\",\"currency_type\":\"BDT\",\"currency_amount\":\"840.00\",\"currency_rate\":\"1.0000\",\"base_fair\":\"0.00\",\"value_a\":null,\"value_b\":null,\"value_c\":null,\"value_d\":null,\"risk_level\":\"0\",\"risk_title\":\"Safe\"}', 0, '2019-02-23 13:39:17', '2019-02-23 13:40:20'),
(4, 3, NULL, 'alamin', '01996231545', 'uttara house building', 10, 1550916000, '10:00:00', '2 Hours', 'paid', '{\"tran_id\":\"a87ff679a2\",\"val_id\":\"190224144511Yjxg4Mnfr62uFz\",\"amount\":\"1800\",\"card_type\":\"BKASH-BKash\",\"store_amount\":\"1755\",\"card_no\":null,\"bank_tran_id\":\"190224144510wjoHaufa9RT9Is\",\"status\":\"VALID\",\"tran_date\":\"2019-02-24 01:44:46\",\"currency\":\"BDT\",\"card_issuer\":\"BKash Mobile Banking\",\"card_brand\":\"MOBILEBANKING\",\"card_issuer_country\":\"Bangladesh\",\"card_issuer_country_code\":\"BD\",\"store_id\":\"activ5c3c5dac9254d\",\"verify_sign\":\"5154210f3b918f38ab52b065878fa87f\",\"verify_key\":\"amount,bank_tran_id,base_fair,card_brand,card_issuer,card_issuer_country,card_issuer_country_code,card_no,card_type,currency,currency_amount,currency_rate,currency_type,risk_level,risk_title,status,store_amount,store_id,tran_date,tran_id,val_id,value_a,value_b,value_c,value_d\",\"verify_sign_sha2\":\"a07d8a1dfa1a724e266e878d3fbdbdc96b455bcd7f9a05721f7d1d417cea2814\",\"currency_type\":\"BDT\",\"currency_amount\":\"1800.00\",\"currency_rate\":\"1.0000\",\"base_fair\":\"0.00\",\"value_a\":null,\"value_b\":null,\"value_c\":null,\"value_d\":null,\"risk_level\":\"0\",\"risk_title\":\"Safe\"}', 0, '2019-02-23 13:41:39', '2019-02-23 13:41:46'),
(5, 1, '[10,11]', 'Rayhan', '01996231545', 'Utatra', 10, 1551002400, '10:00:00', '2 Hours', 'paid', '{\"tran_id\":\"e4da3b7fbb\",\"val_id\":\"190224111918xWaukhrLYcEG1ho\",\"amount\":\"190\",\"card_type\":\"BKASH-BKash\",\"store_amount\":\"185.25\",\"card_no\":null,\"bank_tran_id\":\"1902241119186B4110VX6LIuPTV\",\"status\":\"VALID\",\"tran_date\":\"2019-02-24 11:19:11\",\"currency\":\"BDT\",\"card_issuer\":\"BKash Mobile Banking\",\"card_brand\":\"MOBILEBANKING\",\"card_issuer_country\":\"Bangladesh\",\"card_issuer_country_code\":\"BD\",\"store_id\":\"activ5c3c5dac9254d\",\"verify_sign\":\"5d2db9344f2672020adb0c3f78bf1e5e\",\"verify_key\":\"amount,bank_tran_id,base_fair,card_brand,card_issuer,card_issuer_country,card_issuer_country_code,card_no,card_type,currency,currency_amount,currency_rate,currency_type,risk_level,risk_title,status,store_amount,store_id,tran_date,tran_id,val_id,value_a,value_b,value_c,value_d\",\"verify_sign_sha2\":\"16b33368e28fd56845af3b77fe1e60dce90d57a6b1f623f361145bd2f332ad34\",\"currency_type\":\"BDT\",\"currency_amount\":\"190.00\",\"currency_rate\":\"1.0000\",\"base_fair\":\"0.00\",\"value_a\":null,\"value_b\":null,\"value_c\":null,\"value_d\":null,\"risk_level\":\"0\",\"risk_title\":\"Safe\"}', 1, '2019-02-23 23:16:05', '2019-02-23 23:17:11'),
(8, 1, '[10,11,12]', 'manik', '01996231545', 'uttara house building', 15, 1551009600, '12:00:00', '2 Hours', 'unpaid', NULL, 1, '2019-02-24 01:23:54', '2019-02-24 01:32:06'),
(12, 1, NULL, 'manik', '01996231545', 'uttara house building', 10, 1551002400, '10:00:00', '1 Hours', 'unpaid', NULL, 0, '2019-02-24 01:48:49', '2019-02-24 01:48:49'),
(13, 1, NULL, 'manik', '01996231545', 'uttara house building', 10, 1551007800, '11:30:00', '2 Hours', 'unpaid', NULL, 0, '2019-02-24 04:51:18', '2019-02-24 04:51:18'),
(14, 1, NULL, 'manik', '01996231545', 'uttara house building', 10, 1551002400, '10:00:00', '1 Hours', 'paid', '{\"tran_id\":\"aab3238922\",\"val_id\":\"1902241656331XKmTzC4iMgUG7Z\",\"amount\":\"920\",\"card_type\":\"BKASH-BKash\",\"store_amount\":\"897\",\"card_no\":null,\"bank_tran_id\":\"190224165633skzBrgBJedsgqHy\",\"status\":\"VALID\",\"tran_date\":\"2019-02-24 16:56:07\",\"currency\":\"BDT\",\"card_issuer\":\"BKash Mobile Banking\",\"card_brand\":\"MOBILEBANKING\",\"card_issuer_country\":\"Bangladesh\",\"card_issuer_country_code\":\"BD\",\"store_id\":\"activ5c3c5dac9254d\",\"verify_sign\":\"adaaa04bd7f64c1ac6a64f1b7a33b950\",\"verify_key\":\"amount,bank_tran_id,base_fair,card_brand,card_issuer,card_issuer_country,card_issuer_country_code,card_no,card_type,currency,currency_amount,currency_rate,currency_type,risk_level,risk_title,status,store_amount,store_id,tran_date,tran_id,val_id,value_a,value_b,value_c,value_d\",\"verify_sign_sha2\":\"13bd95ea4c5d896d7949d9aca62c856ba8f263fce0573bc5d322a7c4215c0e30\",\"currency_type\":\"BDT\",\"currency_amount\":\"920.00\",\"currency_rate\":\"1.0000\",\"base_fair\":\"0.00\",\"value_a\":null,\"value_b\":null,\"value_c\":null,\"value_d\":null,\"risk_level\":\"0\",\"risk_title\":\"Safe\"}', 0, '2019-02-24 04:53:00', '2019-02-24 04:53:28');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `food_menu_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`id`, `booking_id`, `food_menu_id`, `quantity`, `created_at`, `updated_at`) VALUES
(4, 2, 5, 1, '2019-02-23 13:16:37', '2019-02-23 13:16:37'),
(5, 3, 3, 1, '2019-02-23 13:39:17', '2019-02-23 13:39:17'),
(6, 3, 5, 1, '2019-02-23 13:39:17', '2019-02-23 13:39:17'),
(7, 3, 7, 1, '2019-02-23 13:39:17', '2019-02-23 13:39:17'),
(8, 4, 3, 1, '2019-02-23 13:41:39', '2019-02-23 13:41:39'),
(9, 4, 4, 1, '2019-02-23 13:41:39', '2019-02-23 13:41:39'),
(10, 5, 10, 1, '2019-02-23 23:16:05', '2019-02-23 23:16:05'),
(11, 5, 13, 1, '2019-02-23 23:16:05', '2019-02-23 23:16:05'),
(12, 5, 14, 1, '2019-02-23 23:16:05', '2019-02-23 23:16:05'),
(13, 6, 10, 1, '2019-02-23 23:19:09', '2019-02-23 23:19:09'),
(14, 6, 11, 1, '2019-02-23 23:19:09', '2019-02-23 23:19:09'),
(15, 6, 13, 1, '2019-02-23 23:19:09', '2019-02-23 23:19:09'),
(16, 7, 10, 1, '2019-02-24 01:23:43', '2019-02-24 01:23:43'),
(17, 7, 11, 1, '2019-02-24 01:23:43', '2019-02-24 01:23:43'),
(18, 7, 12, 1, '2019-02-24 01:23:43', '2019-02-24 01:23:43'),
(19, 8, 10, 1, '2019-02-24 01:23:54', '2019-02-24 01:23:54'),
(20, 8, 11, 1, '2019-02-24 01:23:54', '2019-02-24 01:23:54'),
(21, 8, 12, 1, '2019-02-24 01:23:54', '2019-02-24 01:23:54'),
(22, 9, 10, 1, '2019-02-24 01:23:59', '2019-02-24 01:23:59'),
(23, 9, 11, 1, '2019-02-24 01:23:59', '2019-02-24 01:23:59'),
(24, 9, 12, 1, '2019-02-24 01:23:59', '2019-02-24 01:23:59'),
(25, 10, 10, 1, '2019-02-24 01:39:09', '2019-02-24 01:39:09'),
(26, 10, 10, 1, '2019-02-24 01:39:09', '2019-02-24 01:39:09'),
(27, 10, 11, 1, '2019-02-24 01:39:09', '2019-02-24 01:39:09'),
(28, 10, 11, 1, '2019-02-24 01:39:09', '2019-02-24 01:39:09'),
(29, 11, 10, 5, '2019-02-24 01:47:41', '2019-02-24 01:47:41'),
(30, 12, 10, 5, '2019-02-24 01:48:49', '2019-02-24 01:48:49'),
(31, 12, 10, 1, '2019-02-24 01:48:49', '2019-02-24 01:48:49'),
(32, 13, 10, 4, '2019-02-24 04:51:18', '2019-02-24 04:51:18'),
(33, 13, 12, 1, '2019-02-24 04:51:18', '2019-02-24 04:51:18'),
(34, 13, 13, 1, '2019-02-24 04:51:18', '2019-02-24 04:51:18'),
(35, 14, 10, 4, '2019-02-24 04:53:00', '2019-02-24 04:53:00'),
(36, 14, 12, 1, '2019-02-24 04:53:00', '2019-02-24 04:53:00'),
(37, 14, 13, 1, '2019-02-24 04:53:00', '2019-02-24 04:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(244) COLLATE utf32_bin NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'uttara', '2019-02-22 12:49:19', '2019-02-22 12:49:19'),
(2, 'banani', '2019-02-22 12:49:26', '2019-02-22 12:49:26'),
(3, 'Mirpur', '2019-02-23 11:52:15', '2019-02-23 11:52:15');

-- --------------------------------------------------------

--
-- Table structure for table `food_categories`
--

CREATE TABLE `food_categories` (
  `id` int(11) NOT NULL,
  `restaurant_id` int(29) NOT NULL,
  `name` varchar(200) COLLATE utf32_bin NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `food_categories`
--

INSERT INTO `food_categories` (`id`, `restaurant_id`, `name`, `created_at`, `updated_at`) VALUES
(2, 3, 'Pizza', '2019-02-23 11:56:58', '2019-02-23 11:56:58'),
(3, 3, 'Drinks', '2019-02-23 12:00:51', '2019-02-23 12:00:51'),
(4, 3, 'wedges', '2019-02-23 12:01:24', '2019-02-23 12:01:24'),
(5, 1, 'Burger', '2019-02-23 23:03:50', '2019-02-23 23:03:50'),
(6, 1, 'Drinks', '2019-02-23 23:04:05', '2019-02-23 23:04:05'),
(7, 4, 'Burger', '2019-02-24 02:10:53', '2019-02-24 02:10:53'),
(8, 4, 'Drinks', '2019-02-24 02:11:01', '2019-02-24 02:11:01'),
(10, 2, 'Biriany', '2019-02-24 02:16:12', '2019-02-24 02:16:12'),
(11, 2, 'Drinks', '2019-02-24 02:16:23', '2019-02-24 02:16:23');

-- --------------------------------------------------------

--
-- Table structure for table `food_menus`
--

CREATE TABLE `food_menus` (
  `id` int(11) NOT NULL,
  `name` varchar(240) COLLATE utf32_bin NOT NULL,
  `food_category_id` int(20) NOT NULL,
  `ratio` varchar(20) COLLATE utf32_bin NOT NULL,
  `price` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `food_menus`
--

INSERT INTO `food_menus` (`id`, `name`, `food_category_id`, `ratio`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Beef Burger', 1, '1:1', 150, '2019-02-22 13:26:23', '2019-02-22 13:26:23'),
(2, 'Chicken Burger', 1, '1:1', 120, '2019-02-22 13:26:52', '2019-02-22 13:26:52'),
(3, 'Beef Pizza', 2, '1:4', 800, '2019-02-23 12:00:07', '2019-02-23 12:00:07'),
(4, 'Italian Pizza', 2, '1:2', 1000, '2019-02-23 12:00:38', '2019-02-23 12:00:38'),
(5, 'Cocacola', 3, '1:1', 20, '2019-02-23 12:01:41', '2019-02-23 12:01:41'),
(6, 'Pepsi', 3, '1:1', 20, '2019-02-23 12:01:54', '2019-02-23 12:01:54'),
(7, '7up', 3, '1:1', 20, '2019-02-23 12:02:10', '2019-02-23 12:02:10'),
(8, 'Potato fry', 4, '1:1', 100, '2019-02-23 12:02:33', '2019-02-23 12:02:33'),
(9, 'French fry', 4, '1:2', 100, '2019-02-23 12:02:46', '2019-02-23 12:02:46'),
(10, 'Beff Burger', 5, '1:1', 150, '2019-02-23 23:11:27', '2019-02-23 23:11:27'),
(11, 'Chicken Burger', 5, '1:1', 150, '2019-02-23 23:11:44', '2019-02-23 23:11:44'),
(12, 'Italian Burger', 5, '1:1', 300, '2019-02-23 23:12:02', '2019-02-23 23:12:02'),
(13, 'Cocacola', 6, '1:1', 20, '2019-02-23 23:12:17', '2019-02-23 23:12:17'),
(14, 'Pepsi', 6, '1:1', 20, '2019-02-23 23:12:58', '2019-02-23 23:12:58'),
(15, 'Beef Burger', 7, '1:1', 150, '2019-02-24 02:11:34', '2019-02-24 02:11:34'),
(16, 'Chicken Burger', 7, '1:1', 200, '2019-02-24 02:11:48', '2019-02-24 02:11:48'),
(17, 'Cocacola', 8, '1:2', 20, '2019-02-24 02:12:06', '2019-02-24 02:12:06'),
(18, 'Pepsi', 8, '1:1', 20, '2019-02-24 02:12:20', '2019-02-24 02:12:20'),
(19, 'Chicken Biriany', 10, '1:1', 150, '2019-02-24 02:16:54', '2019-02-24 02:16:54'),
(20, 'Beef Biriany', 10, '1:1', 150, '2019-02-24 02:17:09', '2019-02-24 02:17:09'),
(21, 'Cocacola', 11, '1:1', 20, '2019-02-24 02:17:24', '2019-02-24 02:17:24'),
(22, 'Pepsi', 11, '1:1', 20, '2019-02-24 02:17:37', '2019-02-24 02:17:37');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(11) NOT NULL,
  `name` varchar(244) COLLATE utf32_bin NOT NULL,
  `user_id` int(20) NOT NULL,
  `area_id` int(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `photo` varchar(255) COLLATE utf32_bin DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `user_id`, `area_id`, `status`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'manik burger', 2, 1, 1, 'uploads/x5oNdtViNi7oy9x8PvkoHb3VdS7EfIQRBNKwCHIk.jpeg', '2019-02-22 19:08:53', '2019-02-23 23:01:23'),
(2, 'Hajir biriany', 4, 5, 1, 'uploads/dvfgWEk82BsuD6e0o7jVCouoC7PHtEuTwlyvzTsu.jpeg', '2019-02-23 04:06:28', '2019-02-24 02:15:47'),
(3, 'Hellow Testy', 5, 9, 1, 'uploads/x4S7U97sHSAK1594Z4irLg9EDAh4wtGY7BnAuaJs.jpeg', '2019-02-23 11:56:13', '2019-02-24 01:43:01');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf32_bin NOT NULL,
  `capacity` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `restaurant_id`, `name`, `capacity`, `created_at`, `updated_at`) VALUES
(6, 3, 'Table 1', 6, '2019-02-23 12:04:07', '2019-02-23 12:04:07'),
(7, 3, 'Table 2', 5, '2019-02-23 12:04:21', '2019-02-23 12:04:21'),
(8, 3, 'Table 3', 4, '2019-02-23 12:04:37', '2019-02-23 12:04:37'),
(9, 3, 'Table 4', 10, '2019-02-23 12:04:48', '2019-02-23 12:04:48'),
(10, 1, 'Table 1', 5, '2019-02-23 23:13:24', '2019-02-23 23:13:24'),
(11, 1, 'Table 2', 5, '2019-02-23 23:13:41', '2019-02-23 23:13:41'),
(12, 1, 'Table 3', 5, '2019-02-23 23:13:53', '2019-02-23 23:13:53'),
(13, 4, 'Table 1', 10, '2019-02-24 02:12:37', '2019-02-24 02:12:37'),
(14, 4, 'Table 2', 5, '2019-02-24 02:12:51', '2019-02-24 02:12:51'),
(15, 4, 'Table 3', 7, '2019-02-24 02:13:02', '2019-02-24 02:13:02'),
(16, 2, 'Table 1', 5, '2019-02-24 02:17:49', '2019-02-24 02:17:49'),
(17, 2, 'Table 2', 8, '2019-02-24 02:18:01', '2019-02-24 02:18:01'),
(18, 2, 'Table 3', 10, '2019-02-24 02:18:14', '2019-02-24 02:18:14');

-- --------------------------------------------------------

--
-- Table structure for table `time_configs`
--

CREATE TABLE `time_configs` (
  `id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `day` varchar(11) COLLATE utf32_bin NOT NULL,
  `opening_time` varchar(10) COLLATE utf32_bin NOT NULL,
  `closing_time` varchar(10) COLLATE utf32_bin NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `time_configs`
--

INSERT INTO `time_configs` (`id`, `restaurant_id`, `day`, `opening_time`, `closing_time`, `created_at`, `updated_at`) VALUES
(1, 1, 'Monday', '10:00:00', '17:00:00', '2019-02-23 06:34:42', '2019-02-23 06:37:17'),
(2, 1, 'Tuesday', '10:00:00', '17:00:00', '2019-02-23 06:34:42', '2019-02-23 06:37:17'),
(3, 1, 'Wednesday', '10:00:00', '17:00:00', '2019-02-23 06:34:42', '2019-02-23 06:37:17'),
(4, 1, 'Thursday', '10:00:00', '17:00:00', '2019-02-23 06:34:42', '2019-02-23 06:37:17'),
(5, 1, 'Friday', 'Closed', 'Closed', '2019-02-23 06:34:42', '2019-02-23 06:34:42'),
(6, 1, 'Saturday', '10:00:00', '17:00:00', '2019-02-23 06:34:42', '2019-02-23 06:37:17'),
(7, 1, 'Sunday', '10:00:00', '17:00:00', '2019-02-23 06:34:42', '2019-02-23 06:37:18'),
(8, 3, 'Monday', '10:00:00', '21:00:00', '2019-02-23 12:06:16', '2019-02-23 12:06:16'),
(9, 3, 'Tuesday', '10:00:00', '21:00:00', '2019-02-23 12:06:16', '2019-02-23 12:06:16'),
(10, 3, 'Wednesday', '10:00:00', '22:00:00', '2019-02-23 12:06:16', '2019-02-23 12:06:16'),
(11, 3, 'Thursday', '10:00:00', '22:00:00', '2019-02-23 12:06:16', '2019-02-23 12:06:16'),
(12, 3, 'Friday', '10:00:00', '00:00:00', '2019-02-23 12:06:16', '2019-02-23 12:06:16'),
(13, 3, 'Saturday', '10:00:00', '22:00:00', '2019-02-23 12:06:16', '2019-02-23 12:06:16'),
(14, 3, 'Sunday', '10:00:00', '22:00:00', '2019-02-23 12:06:16', '2019-02-23 12:06:16'),
(15, 4, 'Monday', '10:00:00', '22:00:00', '2019-02-24 02:14:21', '2019-02-24 02:14:21'),
(16, 4, 'Tuesday', '10:00:00', '22:00:00', '2019-02-24 02:14:21', '2019-02-24 02:14:21'),
(17, 4, 'Wednesday', '10:00:00', '22:00:00', '2019-02-24 02:14:21', '2019-02-24 02:14:21'),
(18, 4, 'Thursday', '10:00:00', '22:00:00', '2019-02-24 02:14:21', '2019-02-24 02:14:21'),
(19, 4, 'Friday', '10:00:00', '22:00:00', '2019-02-24 02:14:21', '2019-02-24 02:14:21'),
(20, 4, 'Saturday', 'Closed', 'Closed', '2019-02-24 02:14:21', '2019-02-24 02:14:21'),
(21, 4, 'Sunday', '10:00:00', '22:00:00', '2019-02-24 02:14:21', '2019-02-24 02:14:21'),
(22, 2, 'Monday', '10:00:00', '19:00:00', '2019-02-24 02:18:56', '2019-02-24 02:18:56'),
(23, 2, 'Tuesday', '10:00:00', '19:00:00', '2019-02-24 02:18:56', '2019-02-24 02:18:56'),
(24, 2, 'Wednesday', '10:00:00', '19:00:00', '2019-02-24 02:18:56', '2019-02-24 02:18:56'),
(25, 2, 'Thursday', '09:00:00', '19:00:00', '2019-02-24 02:18:56', '2019-02-24 02:18:56'),
(26, 2, 'Friday', '10:00:00', '19:00:00', '2019-02-24 02:18:56', '2019-02-24 02:18:56'),
(27, 2, 'Saturday', '10:00:00', '19:00:00', '2019-02-24 02:18:57', '2019-02-24 02:18:57'),
(28, 2, 'Sunday', 'Closed', 'Closed', '2019-02-24 02:18:57', '2019-02-24 02:18:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_type` varchar(250) COLLATE utf32_bin NOT NULL DEFAULT 'Customer',
  `name` varchar(250) COLLATE utf32_bin NOT NULL,
  `email` varchar(200) COLLATE utf32_bin NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(200) COLLATE utf32_bin NOT NULL,
  `remember_token` varchar(200) COLLATE utf32_bin DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'SystemAdmin', 'anik', 'anik@gmail.com', '2019-02-24 10:13:54', '$2y$10$aEw8avP2ZGG8B3FjYUC71.ZjvSt5UoM.7x.OfdtNRAPTMbwyrwFvK', 'KdR5NfUmYqs07nwaLRlHvY23lJst1r6Tb1I8rcCQu05v1Fn4yIRXVNwrD4Rz', '2019-02-22 18:43:27', '2019-02-22 18:43:27'),
(2, 'Admin', 'rayhan', 'rayhan@gmail.com', '2019-02-24 10:57:48', '$2y$10$aEw8avP2ZGG8B3FjYUC71.ZjvSt5UoM.7x.OfdtNRAPTMbwyrwFvK', 'tXe8w1TvfcH91tuIszLD4cGE3Gkfdm5cDoQaajZeFy1xVLfB3RtBwq8Lnx7q', '2019-02-22 18:44:21', '2019-02-22 18:44:21'),
(3, 'Customer', 'tushar', 'tushar@gmail.com', '2019-02-24 07:38:24', '$2y$10$aEw8avP2ZGG8B3FjYUC71.ZjvSt5UoM.7x.OfdtNRAPTMbwyrwFvK', 'XIH6TNsdVdOHKEbR3PFP3aVdc60hE8m2zOEvjNX6059YYTeqG0ewxqu1Dcqq', '2019-02-22 18:45:07', '2019-02-22 18:45:07'),
(4, 'Admin', 'redwan', 'redwan@gmail.com', '2019-02-24 08:19:07', '$2y$10$IUNa5LJV6mRcTD51i7pQUeic9e71QdsulypjKCIhAsGxRTD6/OGmW', 'WlsHRJBtUTgrkLPRdQMsewfYnjtQ1tOW4nT5iOOXDHM5HlIra7Gp6SgfMPRw', '2019-02-23 04:05:47', '2019-02-23 04:06:28'),
(5, 'Admin', 'Naim', 'naim@gmail.com', '2019-02-24 07:43:23', '$2y$10$7YyZME6IoP0KmVl3VTpwWOsMiu1SVMES8ymg7Z/NtB.xGotoZpEYe', 'Hwg8rXMyUFnmVbSnGUozXoqrtya0XFHMxquk9MH60XUiEapzbubB0rjMPWPL', '2019-02-23 11:55:27', '2019-02-23 11:56:13'),
(6, 'Admin', 'limu', 'limu@gmail.com', '2019-02-24 08:14:27', '$2y$10$Do4iM8BDIUAajw4FGJOymuBmjM/BKkGLiL1V3f5MIvEYCLnyOTC8.', 'nEqSKGK1bYqTdx39enuGFrHsBaownhN0KWkdYvouDjyqzK5RaKli5gDmMXXs', '2019-02-23 12:33:40', '2019-02-23 12:34:47'),
(7, 'Admin', 'rumel', 'rumel@gmail.com', '2019-02-24 04:58:59', '$2y$10$bvM2siDUjPL/H7or8lscNubKxQEvf10dnwq0o7dRA4DGEkNw0ubEi', '60Ydi1bgWXhtv0reu3f6XLScbypu6lj4HpsA4euPTtL7MpOu5UF12tyc8yO3', '2019-02-23 22:41:23', '2019-02-23 22:42:02'),
(8, 'Admin', 'tushar', 'tushar11@gmail.com1', '2019-02-24 07:30:00', '$2y$10$x8l45lpbnB357gtCOhAYR.28s4Uw4r20yVJuM//nSyRPpGGfROqFi', 'spm7yzXS6w8yMSY39GOjoxBJvyTp6Am5XIyQivtVfJ79BGubfwUpgjBGcpd6', '2019-02-24 01:29:07', '2019-02-24 01:29:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_categories`
--
ALTER TABLE `food_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_menus`
--
ALTER TABLE `food_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_configs`
--
ALTER TABLE `time_configs`
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
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `food_categories`
--
ALTER TABLE `food_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `food_menus`
--
ALTER TABLE `food_menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `time_configs`
--
ALTER TABLE `time_configs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
