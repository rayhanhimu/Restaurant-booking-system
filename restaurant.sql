-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2019 at 08:39 PM
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
(14, 'Sector 14', 4, '2019-03-02 03:14:00', '2019-03-02 03:14:00'),
(15, 'Sector 11', 4, '2019-03-02 03:14:54', '2019-03-02 03:14:54'),
(16, 'Sector 4', 4, '2019-03-02 03:15:22', '2019-03-02 03:15:22'),
(17, 'Sector 13', 4, '2019-03-02 03:16:01', '2019-03-02 03:16:01'),
(18, 'Block C', 5, '2019-03-02 05:48:36', '2019-03-02 05:48:36'),
(19, 'Block E', 5, '2019-03-02 05:50:43', '2019-03-02 05:50:43'),
(20, 'Block D', 5, '2019-03-02 05:50:51', '2019-03-02 05:50:51'),
(21, 'Block A', 5, '2019-03-02 05:51:05', '2019-03-02 16:51:06');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `restaurant_id` int(220) NOT NULL,
  `user_id` int(20) DEFAULT NULL,
  `table_ids` varchar(255) COLLATE utf32_bin DEFAULT NULL,
  `name` varchar(250) COLLATE utf32_bin NOT NULL,
  `phone` varchar(20) COLLATE utf32_bin NOT NULL,
  `email` varchar(255) COLLATE utf32_bin DEFAULT NULL,
  `address` varchar(200) COLLATE utf32_bin NOT NULL,
  `people` int(20) NOT NULL,
  `date` int(15) NOT NULL,
  `time` varchar(40) COLLATE utf32_bin NOT NULL,
  `duration` varchar(250) COLLATE utf32_bin DEFAULT NULL,
  `paid_amount` double(8,2) NOT NULL DEFAULT '0.00',
  `total` double(8,2) NOT NULL DEFAULT '0.00',
  `payment_status` varchar(10) COLLATE utf32_bin NOT NULL DEFAULT 'unpaid',
  `payment_details` longtext COLLATE utf32_bin,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `restaurant_id`, `user_id`, `table_ids`, `name`, `phone`, `email`, `address`, `people`, `date`, `time`, `duration`, `paid_amount`, `total`, `payment_status`, `payment_details`, `status`, `created_at`, `updated_at`) VALUES
(21, 6, NULL, '[26]', 'zahid', '01776231545', NULL, 'uttara house building', 5, 1551549600, '10:00:00', '1 Hours', 0.00, 0.00, 'paid', '{\"tran_id\":\"3c59dc048e\",\"val_id\":\"1903021423070RVreCnD5c5wGD3\",\"amount\":\"810\",\"card_type\":\"BKASH-BKash\",\"store_amount\":\"789.75\",\"card_no\":null,\"bank_tran_id\":\"190302142307Q4FZVAMgJ2gz8IS\",\"status\":\"VALID\",\"tran_date\":\"2019-03-02 14:22:57\",\"currency\":\"BDT\",\"card_issuer\":\"BKash Mobile Banking\",\"card_brand\":\"MOBILEBANKING\",\"card_issuer_country\":\"Bangladesh\",\"card_issuer_country_code\":\"BD\",\"store_id\":\"activ5c3c5dac9254d\",\"verify_sign\":\"77751f9f6f9be1103021b4a18fb60168\",\"verify_key\":\"amount,bank_tran_id,base_fair,card_brand,card_issuer,card_issuer_country,card_issuer_country_code,card_no,card_type,currency,currency_amount,currency_rate,currency_type,risk_level,risk_title,status,store_amount,store_id,tran_date,tran_id,val_id,value_a,value_b,value_c,value_d\",\"verify_sign_sha2\":\"82b936af7b57290c3d8250ba40bda06b954013feeb0d63f9966749c0c9a0934d\",\"currency_type\":\"BDT\",\"currency_amount\":\"810.00\",\"currency_rate\":\"1.0000\",\"base_fair\":\"0.00\",\"value_a\":null,\"value_b\":null,\"value_c\":null,\"value_d\":null,\"risk_level\":\"0\",\"risk_title\":\"Safe\"}', 1, '2019-03-02 08:19:52', '2019-03-02 08:22:49'),
(22, 4, NULL, NULL, 'manik', '01776231545', NULL, 'uttara house building', 10, 1551463200, '11:00:00', '1 Hours', 0.00, 0.00, 'paid', '{\"tran_id\":\"b6d767d2f8\",\"val_id\":\"1903022224081c2f6nlL9ud1Dwj\",\"amount\":\"150\",\"card_type\":\"BKASH-BKash\",\"store_amount\":\"146.25\",\"card_no\":null,\"bank_tran_id\":\"1903022224081oT6UHOUz7w6BgH\",\"status\":\"VALID\",\"tran_date\":\"2019-03-02 22:24:01\",\"currency\":\"BDT\",\"card_issuer\":\"BKash Mobile Banking\",\"card_brand\":\"MOBILEBANKING\",\"card_issuer_country\":\"Bangladesh\",\"card_issuer_country_code\":\"BD\",\"store_id\":\"activ5c3c5dac9254d\",\"verify_sign\":\"7249f6389da5198393c1535dd7667790\",\"verify_key\":\"amount,bank_tran_id,base_fair,card_brand,card_issuer,card_issuer_country,card_issuer_country_code,card_no,card_type,currency,currency_amount,currency_rate,currency_type,risk_level,risk_title,status,store_amount,store_id,tran_date,tran_id,val_id,value_a,value_b,value_c,value_d\",\"verify_sign_sha2\":\"35c62e8a54fdcde31becc556857bd6c0a261724a4bfd90e8e7b46c270cfffe49\",\"currency_type\":\"BDT\",\"currency_amount\":\"150.00\",\"currency_rate\":\"1.0000\",\"base_fair\":\"0.00\",\"value_a\":null,\"value_b\":null,\"value_c\":null,\"value_d\":null,\"risk_level\":\"0\",\"risk_title\":\"Safe\"}', 0, '2019-03-02 16:20:56', '2019-03-02 16:21:05'),
(23, 4, NULL, NULL, 'manik', '01776231545', NULL, 'uttara house building', 13, 1551463200, '11:00:00', '1 Hours', 0.00, 0.00, 'paid', '{\"tran_id\":\"37693cfc74\",\"val_id\":\"1903022224470Xxqea20zH0HPxx\",\"amount\":\"200\",\"card_type\":\"BKASH-BKash\",\"store_amount\":\"195\",\"card_no\":null,\"bank_tran_id\":\"1903022224470zatTW0jmi5ZD2r\",\"status\":\"VALID\",\"tran_date\":\"2019-03-02 22:24:43\",\"currency\":\"BDT\",\"card_issuer\":\"BKash Mobile Banking\",\"card_brand\":\"MOBILEBANKING\",\"card_issuer_country\":\"Bangladesh\",\"card_issuer_country_code\":\"BD\",\"store_id\":\"activ5c3c5dac9254d\",\"verify_sign\":\"189d5972bf8de05af064d4dfdc2ad2a3\",\"verify_key\":\"amount,bank_tran_id,base_fair,card_brand,card_issuer,card_issuer_country,card_issuer_country_code,card_no,card_type,currency,currency_amount,currency_rate,currency_type,risk_level,risk_title,status,store_amount,store_id,tran_date,tran_id,val_id,value_a,value_b,value_c,value_d\",\"verify_sign_sha2\":\"d9f0535dcfe0b3be4b5d84b03c37389db86ed1d5d5aad76de56bf09bfe79ee7a\",\"currency_type\":\"BDT\",\"currency_amount\":\"200.00\",\"currency_rate\":\"1.0000\",\"base_fair\":\"0.00\",\"value_a\":null,\"value_b\":null,\"value_c\":null,\"value_d\":null,\"risk_level\":\"0\",\"risk_title\":\"Safe\"}', 0, '2019-03-02 16:21:38', '2019-03-02 16:21:44'),
(24, 4, NULL, NULL, 'manik', '01996231545', NULL, 'uttara house building', 20, 1551463200, '12:00:00', '1 Hours', 0.00, 0.00, 'paid', '{\"tran_id\":\"1ff1de7740\",\"val_id\":\"1903022225320uRFKZqCxBrarbB\",\"amount\":\"200\",\"card_type\":\"BKASH-BKash\",\"store_amount\":\"195\",\"card_no\":null,\"bank_tran_id\":\"1903022225320M2jVNRq8Sfq6uK\",\"status\":\"VALID\",\"tran_date\":\"2019-03-02 22:25:26\",\"currency\":\"BDT\",\"card_issuer\":\"BKash Mobile Banking\",\"card_brand\":\"MOBILEBANKING\",\"card_issuer_country\":\"Bangladesh\",\"card_issuer_country_code\":\"BD\",\"store_id\":\"activ5c3c5dac9254d\",\"verify_sign\":\"c44d8170a3b0dc3d5a997557b1629d60\",\"verify_key\":\"amount,bank_tran_id,base_fair,card_brand,card_issuer,card_issuer_country,card_issuer_country_code,card_no,card_type,currency,currency_amount,currency_rate,currency_type,risk_level,risk_title,status,store_amount,store_id,tran_date,tran_id,val_id,value_a,value_b,value_c,value_d\",\"verify_sign_sha2\":\"28061048fbe531c8640d0869df0c6f76da0676ef5509f2243b1a0761fab322d6\",\"currency_type\":\"BDT\",\"currency_amount\":\"200.00\",\"currency_rate\":\"1.0000\",\"base_fair\":\"0.00\",\"value_a\":null,\"value_b\":null,\"value_c\":null,\"value_d\":null,\"risk_level\":\"0\",\"risk_title\":\"Safe\"}', 0, '2019-03-02 16:22:21', '2019-03-02 16:22:29'),
(25, 4, NULL, NULL, 'Table 2', '01996231545', NULL, 'uttara house building', 10, 1551636000, '11:00:00', '1 Hours', 35.00, 350.00, 'paid', '{\"tran_id\":\"8e296a067a\",\"val_id\":\"1903030364604LXMQg4thKq3dj\",\"amount\":\"35\",\"card_type\":\"VISA-Dutch Bangla\",\"store_amount\":\"34.125\",\"card_no\":\"418117XXXXXX6675\",\"bank_tran_id\":\"190303036461QEUPgEgJJseogz\",\"status\":\"VALID\",\"tran_date\":\"2019-03-03 00:36:39\",\"currency\":\"BDT\",\"card_issuer\":\"TRUST BANK, LTD.\",\"card_brand\":\"VISA\",\"card_issuer_country\":\"Bangladesh\",\"card_issuer_country_code\":\"BD\",\"store_id\":\"activ5c3c5dac9254d\",\"verify_sign\":\"4161316643ec3b894c2364d2da6a18b8\",\"verify_key\":\"amount,bank_tran_id,base_fair,card_brand,card_issuer,card_issuer_country,card_issuer_country_code,card_no,card_type,currency,currency_amount,currency_rate,currency_type,risk_level,risk_title,status,store_amount,store_id,tran_date,tran_id,val_id,value_a,value_b,value_c,value_d\",\"verify_sign_sha2\":\"14ddf2f527aedc947ad82f81814245bce4d9f2772c036e5207b69d22f00bfe6a\",\"currency_type\":\"BDT\",\"currency_amount\":\"35.00\",\"currency_rate\":\"1.0000\",\"base_fair\":\"0.00\",\"value_a\":null,\"value_b\":null,\"value_c\":null,\"value_d\":null,\"risk_level\":\"0\",\"risk_title\":\"Safe\"}', 0, '2019-03-02 18:33:34', '2019-03-02 18:33:43'),
(26, 4, NULL, NULL, 'manik', '01776231545', 'rayhan@gmail.com', 'uttara house building', 10, 1551636000, '11:00:00', '1 Hours', 0.00, 0.00, 'unpaid', NULL, 0, '2019-03-02 20:02:33', '2019-03-02 20:02:33'),
(27, 4, NULL, NULL, 'manik', '01776231545', 'rayhan15-233@diu.edu.bd', 'uttara house building', 6, 1551636000, '11:00:00', '1 Hours', 10.00, 100.00, 'paid', '{\"tran_id\":\"02e74f10e0\",\"val_id\":\"190303206551EL0V3r3DqmfV8J\",\"amount\":\"10\",\"card_type\":\"BKASH-BKash\",\"store_amount\":\"9.75\",\"card_no\":null,\"bank_tran_id\":\"19030320655RGsT3TNs0dzq6f2\",\"status\":\"VALID\",\"tran_date\":\"2019-03-03 02:06:47\",\"currency\":\"BDT\",\"card_issuer\":\"BKash Mobile Banking\",\"card_brand\":\"MOBILEBANKING\",\"card_issuer_country\":\"Bangladesh\",\"card_issuer_country_code\":\"BD\",\"store_id\":\"activ5c3c5dac9254d\",\"verify_sign\":\"01e9b5b14d3bbdcda602eb409bbdaf3f\",\"verify_key\":\"amount,bank_tran_id,base_fair,card_brand,card_issuer,card_issuer_country,card_issuer_country_code,card_no,card_type,currency,currency_amount,currency_rate,currency_type,risk_level,risk_title,status,store_amount,store_id,tran_date,tran_id,val_id,value_a,value_b,value_c,value_d\",\"verify_sign_sha2\":\"7c53eea4386ad065bcf763838fac7a721cea9cf54acc83cf3081179f12390a14\",\"currency_type\":\"BDT\",\"currency_amount\":\"10.00\",\"currency_rate\":\"1.0000\",\"base_fair\":\"0.00\",\"value_a\":null,\"value_b\":null,\"value_c\":null,\"value_d\":null,\"risk_level\":\"0\",\"risk_title\":\"Safe\"}', 0, '2019-03-02 20:03:42', '2019-03-02 20:03:52'),
(28, 9, NULL, '[34,35,36]', 'Rayhan', '01776231545', 'rayhanhimu1996@gmail.com', 'Ajompur kachabazar', 20, 1551549600, '11:00:00', '1 Hours', 70.00, 700.00, 'paid', '{\"tran_id\":\"33e75ff09d\",\"val_id\":\"1903031030513zW5iiYtz4uPDTa\",\"amount\":\"70\",\"card_type\":\"BKASH-BKash\",\"store_amount\":\"68.25\",\"card_no\":null,\"bank_tran_id\":\"1903031030511Ji5l50uqtOUBwq\",\"status\":\"VALID\",\"tran_date\":\"2019-03-03 10:30:44\",\"currency\":\"BDT\",\"card_issuer\":\"BKash Mobile Banking\",\"card_brand\":\"MOBILEBANKING\",\"card_issuer_country\":\"Bangladesh\",\"card_issuer_country_code\":\"BD\",\"store_id\":\"activ5c3c5dac9254d\",\"verify_sign\":\"93a9f36aab72a93a6ac4ecc8fb1a3c28\",\"verify_key\":\"amount,bank_tran_id,base_fair,card_brand,card_issuer,card_issuer_country,card_issuer_country_code,card_no,card_type,currency,currency_amount,currency_rate,currency_type,risk_level,risk_title,status,store_amount,store_id,tran_date,tran_id,val_id,value_a,value_b,value_c,value_d\",\"verify_sign_sha2\":\"bb9c21b26eda8ec1cac4decdae37254026d89225992877bfaec1a82b00f24904\",\"currency_type\":\"BDT\",\"currency_amount\":\"70.00\",\"currency_rate\":\"1.0000\",\"base_fair\":\"0.00\",\"value_a\":null,\"value_b\":null,\"value_c\":null,\"value_d\":null,\"risk_level\":\"0\",\"risk_title\":\"Safe\"}', 1, '2019-03-03 04:27:38', '2019-03-03 04:31:40'),
(29, 9, NULL, '[34]', 'Anik', '01776231545', 'rayhan15-233@diu.edu.bd', 'uttara house building', 6, 1551549600, '11:00:00', '1 Hours', 90.00, 900.00, 'paid', '{\"tran_id\":\"6ea9ab1baa\",\"val_id\":\"190303103234vzVl7i6jecD8LX0\",\"amount\":\"90\",\"card_type\":\"BKASH-BKash\",\"store_amount\":\"87.75\",\"card_no\":null,\"bank_tran_id\":\"190303103234eCugfm9ldSTWhl0\",\"status\":\"VALID\",\"tran_date\":\"2019-03-03 10:32:27\",\"currency\":\"BDT\",\"card_issuer\":\"BKash Mobile Banking\",\"card_brand\":\"MOBILEBANKING\",\"card_issuer_country\":\"Bangladesh\",\"card_issuer_country_code\":\"BD\",\"store_id\":\"activ5c3c5dac9254d\",\"verify_sign\":\"3c435bcd3007234371bba68ea55ac8bc\",\"verify_key\":\"amount,bank_tran_id,base_fair,card_brand,card_issuer,card_issuer_country,card_issuer_country_code,card_no,card_type,currency,currency_amount,currency_rate,currency_type,risk_level,risk_title,status,store_amount,store_id,tran_date,tran_id,val_id,value_a,value_b,value_c,value_d\",\"verify_sign_sha2\":\"17d9bdd30cc0436c870cb635535259813f412b9253b368512c078b5c097e8792\",\"currency_type\":\"BDT\",\"currency_amount\":\"90.00\",\"currency_rate\":\"1.0000\",\"base_fair\":\"0.00\",\"value_a\":null,\"value_b\":null,\"value_c\":null,\"value_d\":null,\"risk_level\":\"0\",\"risk_title\":\"Safe\"}', 1, '2019-03-03 04:29:22', '2019-03-03 04:31:47'),
(30, 5, NULL, NULL, 'manik', '01776231545', 'rayhanhimu233@gmail.com', 'uttara house building', 20, 1551722400, '11:00:00', '1 Hours', 0.00, 0.00, 'unpaid', NULL, 0, '2019-03-03 09:51:21', '2019-03-03 09:51:21'),
(31, 5, NULL, NULL, 'manik', '01776231545', 'rayhanhimu233@gmail.com', 'uttara house building', 10, 1551722400, '12:00:00', '1 Hours', 0.00, 0.00, 'unpaid', NULL, 0, '2019-03-03 09:54:01', '2019-03-03 09:54:01'),
(32, 5, NULL, NULL, 'Table 2', '01776231545', 'rayhan@gmail.com', '55', 26, 1552500000, '11:00:00', '1 Hours', 0.00, 0.00, 'unpaid', NULL, 0, '2019-03-10 16:53:35', '2019-03-10 16:53:35'),
(33, 4, 15, NULL, 'Mehedi', '01996231545', 'mehedi@gmail.com', 'djso', 10, 1552500000, '11:00:00', '1 Hours', 10.00, 100.00, 'paid', '{\"tran_id\":\"182be0c5cd\",\"val_id\":\"19031111659mgpIMScPyKn2ZN5\",\"amount\":\"10\",\"card_type\":\"VISA-Dutch Bangla\",\"store_amount\":\"9.75\",\"card_no\":\"432155******9342\",\"bank_tran_id\":\"19031111659PaCf4MT7AwD50Sw\",\"status\":\"VALID\",\"tran_date\":\"2019-03-11 01:16:55\",\"currency\":\"BDT\",\"card_issuer\":\"STANDARD CHARTERED BANK\",\"card_brand\":\"VISA\",\"card_issuer_country\":\"Bangladesh\",\"card_issuer_country_code\":\"BD\",\"store_id\":\"activ5c3c5dac9254d\",\"verify_sign\":\"8c85191da8c1938e1744b2d7ba3f6730\",\"verify_key\":\"amount,bank_tran_id,base_fair,card_brand,card_issuer,card_issuer_country,card_issuer_country_code,card_no,card_type,currency,currency_amount,currency_rate,currency_type,risk_level,risk_title,status,store_amount,store_id,tran_date,tran_id,val_id,value_a,value_b,value_c,value_d\",\"verify_sign_sha2\":\"c7f3eb0d561e6299a557f7267760496cb1fd9cc1c8134cb34f1b8f7173fa7d03\",\"currency_type\":\"BDT\",\"currency_amount\":\"10.00\",\"currency_rate\":\"1.0000\",\"base_fair\":\"0.00\",\"value_a\":null,\"value_b\":null,\"value_c\":null,\"value_d\":null,\"risk_level\":\"0\",\"risk_title\":\"Safe\"}', 0, '2019-03-10 19:13:49', '2019-03-10 19:13:56');

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
(50, 21, 44, 1, '2019-03-02 08:19:52', '2019-03-02 08:19:52'),
(51, 21, 46, 1, '2019-03-02 08:19:52', '2019-03-02 08:19:52'),
(52, 21, 48, 1, '2019-03-02 08:19:52', '2019-03-02 08:19:52'),
(53, 21, 52, 1, '2019-03-02 08:19:52', '2019-03-02 08:19:52'),
(54, 22, 35, 1, '2019-03-02 16:20:56', '2019-03-02 16:20:56'),
(55, 23, 23, 1, '2019-03-02 16:21:38', '2019-03-02 16:21:38'),
(56, 23, 23, 1, '2019-03-02 16:21:38', '2019-03-02 16:21:38'),
(57, 24, 23, 1, '2019-03-02 16:22:21', '2019-03-02 16:22:21'),
(58, 24, 23, 1, '2019-03-02 16:22:21', '2019-03-02 16:22:21'),
(59, 25, 72, 1, '2019-03-02 18:33:34', '2019-03-02 18:33:34'),
(60, 26, 23, 1, '2019-03-02 20:02:33', '2019-03-02 20:02:33'),
(61, 27, 23, 1, '2019-03-02 20:03:42', '2019-03-02 20:03:42'),
(62, 28, 72, 2, '2019-03-03 04:27:38', '2019-03-03 04:27:38'),
(63, 29, 73, 3, '2019-03-03 04:29:22', '2019-03-03 04:29:22'),
(64, 30, 23, 1, '2019-03-03 09:51:21', '2019-03-03 09:51:21'),
(65, 31, 23, 1, '2019-03-03 09:54:01', '2019-03-03 09:54:01'),
(66, 32, 43, 1, '2019-03-10 16:53:36', '2019-03-10 16:53:36'),
(67, 33, 23, 1, '2019-03-10 19:13:49', '2019-03-10 19:13:49');

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
(4, 'Uttara', '2019-03-02 03:11:56', '2019-03-02 03:11:56'),
(5, 'Banani', '2019-03-02 03:12:04', '2019-03-02 03:12:04');

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
(12, 4, 'Burger', '2019-03-02 03:24:27', '2019-03-02 03:24:27'),
(13, 4, 'Mexican', '2019-03-02 03:24:44', '2019-03-02 03:25:22'),
(14, 4, 'Fast Food', '2019-03-02 03:25:36', '2019-03-02 03:25:36'),
(15, 4, 'Chicken', '2019-03-02 03:25:50', '2019-03-02 03:25:50'),
(16, 5, 'Soup', '2019-03-02 03:54:50', '2019-03-02 03:54:50'),
(17, 5, 'Salad', '2019-03-02 03:55:06', '2019-03-02 03:55:06'),
(18, 5, 'Sandwich', '2019-03-02 03:55:21', '2019-03-02 03:55:21'),
(19, 5, 'Mexican Food', '2019-03-02 03:55:33', '2019-03-02 03:55:33'),
(20, 6, 'Kebab Menu', '2019-03-02 04:05:54', '2019-03-02 04:05:54'),
(21, 6, 'Seafood Menu', '2019-03-02 04:06:10', '2019-03-02 04:06:10'),
(22, 6, 'Premium Steak Menu', '2019-03-02 04:06:23', '2019-03-02 04:06:23'),
(23, 6, 'Deserts', '2019-03-02 04:06:42', '2019-03-02 04:06:42'),
(24, 6, 'Beverage', '2019-03-02 04:07:36', '2019-03-02 04:07:36'),
(25, 6, 'Extras', '2019-03-02 04:12:24', '2019-03-02 04:12:24'),
(26, 7, 'Classic Burgers', '2019-03-02 04:17:51', '2019-03-02 04:17:51'),
(28, 7, 'Chefs Special Burger', '2019-03-02 04:18:21', '2019-03-02 04:18:21'),
(29, 7, 'Junior Burger', '2019-03-02 04:18:43', '2019-03-02 04:18:43'),
(30, 7, 'Sides', '2019-03-02 04:19:05', '2019-03-02 04:19:05'),
(31, 8, 'Tandoori', '2019-03-02 05:53:17', '2019-03-02 05:53:17'),
(32, 8, 'Thai Fish', '2019-03-02 05:53:33', '2019-03-02 05:53:33'),
(33, 8, 'Thai Rice', '2019-03-02 05:53:44', '2019-03-02 05:53:44'),
(35, 9, 'Most Popular Smoothies', '2019-03-02 06:02:52', '2019-03-02 06:02:52'),
(36, 9, 'Crushes', '2019-03-02 06:03:10', '2019-03-02 06:03:10');

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
(23, 'Crispy Chicken Burger', 12, '1:1', 100, '2019-03-02 03:26:21', '2019-03-02 03:26:21'),
(24, 'Mexican Burger', 12, '1:1', 100, '2019-03-02 03:26:45', '2019-03-02 03:26:45'),
(25, 'Stick Swiss Burger', 12, '1:1', 100, '2019-03-02 03:27:03', '2019-03-02 03:27:03'),
(26, 'Mexican Nachos', 13, '1:1', 150, '2019-03-02 03:27:29', '2019-03-02 03:27:29'),
(27, 'Mexican Sub Sandwich', 13, '1:1', 150, '2019-03-02 03:27:48', '2019-03-02 03:27:48'),
(28, 'Mexican Chicken Pizza', 13, '1:1', 170, '2019-03-02 03:28:06', '2019-03-02 03:28:06'),
(29, 'Spicy Taco', 14, '1:1', 200, '2019-03-02 03:28:33', '2019-03-03 10:01:08'),
(30, 'Crispy Fish Finger', 14, '1:1', 190, '2019-03-02 03:28:50', '2019-03-02 03:28:50'),
(31, 'Crispy Shrimp Baha', 14, '1:1', 190, '2019-03-02 03:29:06', '2019-03-02 03:29:06'),
(32, 'Chicken Quesadilla', 15, '1:1', 170, '2019-03-02 03:29:30', '2019-03-02 03:29:30'),
(33, 'Chicken Burrito', 15, '1:1', 190, '2019-03-02 03:29:46', '2019-03-02 03:29:46'),
(34, 'Fajitas Chicken', 15, '1:1', 170, '2019-03-02 03:30:00', '2019-03-02 03:30:00'),
(35, 'Thai Soup', 16, '1:1', 150, '2019-03-02 03:56:01', '2019-03-02 03:56:01'),
(37, 'Vegetable Soup', 16, '1:1', 180, '2019-03-02 03:56:42', '2019-03-02 03:56:42'),
(38, 'Cashewnut Salad', 17, '1:1', 320, '2019-03-02 03:57:01', '2019-03-02 03:57:01'),
(39, 'Mix Cashewnut Salad', 17, '1:1', 300, '2019-03-02 03:57:19', '2019-03-02 03:57:19'),
(40, 'Mexican Chicken Sub Sandwich', 18, '1:1', 120, '2019-03-02 03:57:42', '2019-03-02 03:57:42'),
(41, 'Mexican Chicken Double Decker', 18, '1:1', 300, '2019-03-02 03:58:09', '2019-03-02 03:58:09'),
(42, 'Mexican Chicken Spicy Taco', 19, '1:1', 200, '2019-03-02 03:58:29', '2019-03-02 03:58:29'),
(43, 'Mexican Chicken Nachos', 19, '1:1', 120, '2019-03-02 03:58:50', '2019-03-02 03:58:50'),
(44, 'Turkish Reshmi Kebab (Chicken)', 20, '1:1', 200, '2019-03-02 04:08:22', '2019-03-02 04:08:22'),
(45, 'Panjab Hariyali Kebab (Chicken)', 20, '1:1', 260, '2019-03-02 04:08:40', '2019-03-02 04:08:40'),
(46, 'Grilled Jumbo Prawn', 21, '1:1', 300, '2019-03-02 04:09:02', '2019-03-02 04:09:02'),
(47, 'Silver Pompret Fry', 21, '1:1', 490, '2019-03-02 04:09:35', '2019-03-02 04:09:35'),
(48, 'Hulihuli Chicken Steak', 22, '1:1', 290, '2019-03-02 04:10:28', '2019-03-02 04:10:28'),
(49, 'Mexican Chili Steak', 22, '1:1', 300, '2019-03-02 04:10:44', '2019-03-02 04:10:44'),
(50, 'Blueberry Baked Cheesecake', 23, '1:1', 170, '2019-03-02 04:11:02', '2019-03-02 04:11:02'),
(51, 'Strawberry Baked Cheesecake', 23, '1:1', 180, '2019-03-02 04:11:28', '2019-03-02 04:11:28'),
(52, 'Pepsi', 24, '1:1', 20, '2019-03-02 04:11:48', '2019-03-02 04:11:48'),
(53, 'Cocacola', 24, '1:1', 20, '2019-03-02 04:12:02', '2019-03-02 04:12:02'),
(54, 'Butter Creamy Mashed Potato', 25, '1:1', 120, '2019-03-02 04:12:50', '2019-03-02 04:12:50'),
(55, 'Butter Rice', 25, '1:1', 130, '2019-03-02 04:13:12', '2019-03-02 04:13:12'),
(56, 'Beef Burger', 26, '1:1', 150, '2019-03-02 04:19:33', '2019-03-02 04:19:33'),
(57, 'Beef Burger with Cheese', 26, '1:1', 220, '2019-03-02 04:19:47', '2019-03-02 04:19:47'),
(58, 'Twister Burger', 28, '1:1', 180, '2019-03-02 04:20:10', '2019-03-02 04:20:10'),
(59, 'Beef And Bacon', 28, '1:1', 180, '2019-03-02 04:20:25', '2019-03-02 04:20:25'),
(60, 'Junior Chicken burger', 29, '1:1', 150, '2019-03-02 04:20:43', '2019-03-02 04:20:43'),
(61, 'Junior Chicken Burger with Cheese', 29, '1:1', 180, '2019-03-02 04:21:01', '2019-03-02 04:21:01'),
(62, 'Fries Regular', 30, '1:1', 100, '2019-03-02 04:21:21', '2019-03-02 04:21:21'),
(63, 'Fries Large', 30, '1:1', 100, '2019-03-02 04:21:38', '2019-03-02 04:21:38'),
(64, 'Curly Fries', 30, '1:1', 120, '2019-03-02 04:21:54', '2019-03-02 04:21:54'),
(65, 'Tandoori chicken full 4 pcs', 31, '1:1', 200, '2019-03-02 05:54:55', '2019-03-02 05:54:55'),
(66, 'Tandoori chicken half 2 pcs', 31, '1:1', 100, '2019-03-02 05:55:15', '2019-03-02 05:55:15'),
(67, 'Sweet and sour fish', 32, '1:1', 150, '2019-03-02 05:55:38', '2019-03-02 05:55:38'),
(68, 'Prawn garlic sauce', 32, '1:1', 500, '2019-03-02 05:55:55', '2019-03-02 05:55:55'),
(69, 'Chicken fried rice', 33, '1:1', 200, '2019-03-02 05:56:14', '2019-03-02 05:56:14'),
(70, 'Fried rice beef', 33, '1:1', 150, '2019-03-02 05:56:29', '2019-03-02 05:56:29'),
(72, 'Mango Magic', 35, '1:1', 350, '2019-03-02 06:03:56', '2019-03-02 06:03:56'),
(73, 'Banana Buzz', 35, '1:1', 300, '2019-03-02 06:04:10', '2019-03-02 06:04:10'),
(74, 'Strawberry Squeeze', 35, '1:1', 400, '2019-03-02 06:04:24', '2019-03-02 06:04:24'),
(75, 'Berry Crush', 36, '1:1', 200, '2019-03-02 06:04:39', '2019-03-02 06:04:39'),
(76, 'Citrus Crush', 36, '1:1', 200, '2019-03-02 06:04:56', '2019-03-02 06:04:56'),
(77, 'Mango Tango Crush', 36, '1:1', 300, '2019-03-02 06:05:13', '2019-03-02 06:05:13');

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
(4, 'Tacos Shop Uttara 14', 9, 14, 1, 'uploads/l33A0mgPqS7qvQPma4ucLWj6elnJ7t2Cb4EufZkr.jpeg', '2019-03-02 03:17:50', '2019-03-02 04:25:53'),
(5, 'Tacos Uttara', 10, 15, 1, 'uploads/biPad19bWkZSSpsxFHSOXQCflE3FXnRuZMn2Q7rd.jpeg', '2019-03-02 03:54:06', '2019-03-02 04:01:43'),
(6, 'The Food Ink', 11, 16, 1, 'uploads/4Qkt1Uz5QdHUjPAcgwSkNMdbQkkUrVqgAMPOuS1x.jpeg', '2019-03-02 04:05:07', '2019-03-02 04:25:08'),
(7, 'Take Out', 12, 17, 1, 'uploads/uDNvgkRGiRFpVf0EADsEEZXuxpSaz4CA14BAuEzV.jpeg', '2019-03-02 04:17:14', '2019-03-02 04:25:06'),
(8, 'The Orchard Suites Banani', 13, 18, 1, 'uploads/FNnVtaGXqzMEG7wfXI5HhVMqyzzbcgGOtW8Tey2Z.jpeg', '2019-03-02 05:52:50', '2019-03-02 05:59:20'),
(9, 'Boost Juice Banani', 14, 19, 1, 'uploads/iUpGoDewg6qfmqJfeKlpUIYmdSbLfl5zJTmc31pH.jpeg', '2019-03-02 06:01:53', '2019-03-02 08:24:24');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `rating` int(10) NOT NULL,
  `photo` varchar(255) COLLATE utf32_bin DEFAULT NULL,
  `name` varchar(200) COLLATE utf32_bin NOT NULL,
  `email` varchar(200) COLLATE utf32_bin NOT NULL,
  `review` mediumtext COLLATE utf32_bin NOT NULL,
  `restaurant_id` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `rating`, `photo`, `name`, `email`, `review`, `restaurant_id`, `created_at`, `updated_at`) VALUES
(5, 2, NULL, 'Rayhan', 'rayhan@gmail.com', 'Good food .. And better service', 4, '2019-03-02 03:48:19', '2019-03-02 03:48:19'),
(6, 1, NULL, 'Anik', 'anik@gmail.com', 'NIce place', 4, '2019-03-02 03:48:43', '2019-03-02 03:48:43'),
(7, 2, NULL, 'manik', 'rayhanhimu233@gmail.com', 'Well Services..', 4, '2019-03-02 03:51:14', '2019-03-02 03:51:14'),
(8, 1, NULL, 'manik', 'rayhan@gmail.com', 'bnm,.', 4, '2019-03-02 04:43:53', '2019-03-02 04:43:53'),
(10, 4, NULL, 'Tushar', 'tushar@gmail.com', 'Nice food', 4, '2019-03-02 06:29:08', '2019-03-02 06:29:08'),
(11, 4, NULL, 'Zahid', 'zahid@gmail.com', 'Food is good', 6, '2019-03-02 08:17:21', '2019-03-02 08:17:21'),
(12, 5, NULL, 'rayhan', 'rayhan@gmail.com', 'nice food', 4, '2019-03-03 09:57:27', '2019-03-03 09:57:27'),
(13, 5, NULL, 'Himu', 'himu@gmail.com', 'Nice', 4, '2019-03-09 15:58:20', '2019-03-09 15:58:20');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf32_bin NOT NULL,
  `capacity` int(10) NOT NULL,
  `photo` varchar(255) COLLATE utf32_bin DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `restaurant_id`, `name`, `capacity`, `photo`, `created_at`, `updated_at`) VALUES
(19, 4, 'Table 1', 10, 'uploads/a7jaCn0ULqFDL7MgE9sbX3jPW04sjOiZSvCRSckw.jpeg', '2019-03-02 03:30:37', '2019-03-02 03:30:37'),
(20, 4, 'Table 2', 10, 'uploads/a7jaCn0ULqFDL7MgE9sbX3jPW04sjOiZSvCRSckw.jpeg', '2019-03-02 03:30:52', '2019-03-02 03:30:52'),
(21, 4, 'Table 3', 8, 'uploads/a7jaCn0ULqFDL7MgE9sbX3jPW04sjOiZSvCRSckw.jpeg', '2019-03-02 03:31:04', '2019-03-02 03:31:04'),
(22, 5, 'Table 1', 8, 'uploads/a7jaCn0ULqFDL7MgE9sbX3jPW04sjOiZSvCRSckw.jpeg', '2019-03-02 03:59:35', '2019-03-02 03:59:35'),
(23, 5, 'Table 2', 10, 'uploads/a7jaCn0ULqFDL7MgE9sbX3jPW04sjOiZSvCRSckw.jpeg', '2019-03-02 03:59:46', '2019-03-02 03:59:46'),
(25, 5, 'Table 3', 8, 'uploads/a7jaCn0ULqFDL7MgE9sbX3jPW04sjOiZSvCRSckw.jpeg', '2019-03-02 04:00:15', '2019-03-02 04:00:15'),
(26, 6, 'Table1', 12, 'uploads/a7jaCn0ULqFDL7MgE9sbX3jPW04sjOiZSvCRSckw.jpeg', '2019-03-02 04:13:38', '2019-03-02 04:13:38'),
(27, 6, 'Table 2', 12, 'uploads/a7jaCn0ULqFDL7MgE9sbX3jPW04sjOiZSvCRSckw.jpeg', '2019-03-02 04:13:51', '2019-03-02 04:13:51'),
(28, 6, 'Table 3', 12, 'uploads/a7jaCn0ULqFDL7MgE9sbX3jPW04sjOiZSvCRSckw.jpeg', '2019-03-02 04:14:01', '2019-03-02 04:14:01'),
(29, 7, 'Table 1', 10, 'uploads/a7jaCn0ULqFDL7MgE9sbX3jPW04sjOiZSvCRSckw.jpeg', '2019-03-02 04:22:32', '2019-03-02 04:22:32'),
(30, 7, 'Table 2', 10, 'uploads/a7jaCn0ULqFDL7MgE9sbX3jPW04sjOiZSvCRSckw.jpeg', '2019-03-02 04:22:43', '2019-03-02 04:22:43'),
(31, 7, 'Table 3', 10, 'uploads/a7jaCn0ULqFDL7MgE9sbX3jPW04sjOiZSvCRSckw.jpeg', '2019-03-02 04:22:56', '2019-03-02 04:22:56'),
(32, 8, 'Table 1', 20, 'uploads/a7jaCn0ULqFDL7MgE9sbX3jPW04sjOiZSvCRSckw.jpeg', '2019-03-02 05:57:42', '2019-03-02 05:57:42'),
(33, 8, 'Table 2', 20, 'uploads/a7jaCn0ULqFDL7MgE9sbX3jPW04sjOiZSvCRSckw.jpeg', '2019-03-02 05:57:53', '2019-03-02 05:57:53'),
(34, 9, 'Table 1', 10, 'uploads/a7jaCn0ULqFDL7MgE9sbX3jPW04sjOiZSvCRSckw.jpeg', '2019-03-02 06:05:31', '2019-03-02 06:05:31'),
(35, 9, 'Table 2', 8, 'uploads/a7jaCn0ULqFDL7MgE9sbX3jPW04sjOiZSvCRSckw.jpeg', '2019-03-02 06:05:39', '2019-03-02 06:05:39'),
(36, 9, 'Table 3', 8, 'uploads/a7jaCn0ULqFDL7MgE9sbX3jPW04sjOiZSvCRSckw.jpeg', '2019-03-02 06:05:50', '2019-03-02 06:05:50'),
(37, 4, 'Table 4', 10, 'uploads/a7jaCn0ULqFDL7MgE9sbX3jPW04sjOiZSvCRSckw.jpeg', '2019-03-09 16:35:37', '2019-03-09 16:35:37');

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
(26, 2, 'Friday', '10:00:00', '19:00:00', '2019-02-24 02:18:56', '2019-02-24 02:18:56'),
(27, 2, 'Saturday', '10:00:00', '19:00:00', '2019-02-24 02:18:57', '2019-02-24 02:18:57'),
(28, 2, 'Sunday', 'Closed', 'Closed', '2019-02-24 02:18:57', '2019-02-24 02:18:57'),
(29, 4, 'Monday', '11:00:00', '22:00:00', '2019-03-02 03:32:49', '2019-03-02 03:32:49'),
(30, 4, 'Tuesday', '11:00:00', '22:00:00', '2019-03-02 03:32:49', '2019-03-02 03:32:49'),
(31, 4, 'Wednesday', '11:00:00', '22:00:00', '2019-03-02 03:32:49', '2019-03-02 03:32:49'),
(32, 4, 'Thursday', '11:00:00', '22:00:00', '2019-03-02 03:32:50', '2019-03-02 03:32:50'),
(33, 4, 'Friday', '11:00:00', '22:00:00', '2019-03-02 03:32:50', '2019-03-02 03:32:50'),
(34, 4, 'Saturday', '11:00:00', '22:00:00', '2019-03-02 03:32:50', '2019-03-02 03:32:50'),
(35, 4, 'Sunday', 'Closed', 'Closed', '2019-03-02 03:32:50', '2019-03-02 03:32:50'),
(36, 5, 'Monday', '11:00:00', '22:00:00', '2019-03-02 04:01:10', '2019-03-02 04:01:10'),
(37, 5, 'Tuesday', '11:00:00', '22:00:00', '2019-03-02 04:01:10', '2019-03-02 04:01:10'),
(38, 5, 'Wednesday', '11:00:00', '22:00:00', '2019-03-02 04:01:10', '2019-03-02 04:01:10'),
(39, 5, 'Thursday', '11:00:00', '22:00:00', '2019-03-02 04:01:10', '2019-03-02 04:01:10'),
(40, 5, 'Friday', 'Closed', 'Closed', '2019-03-02 04:01:10', '2019-03-02 04:01:10'),
(41, 5, 'Saturday', '11:00:00', '22:00:00', '2019-03-02 04:01:10', '2019-03-02 04:01:10'),
(42, 5, 'Sunday', '11:00:00', '22:00:00', '2019-03-02 04:01:10', '2019-03-02 04:01:10'),
(43, 6, 'Monday', '10:00:00', '20:00:00', '2019-03-02 04:15:01', '2019-03-02 04:15:01'),
(44, 6, 'Tuesday', '10:00:00', '20:00:00', '2019-03-02 04:15:01', '2019-03-02 04:15:01'),
(45, 6, 'Wednesday', '10:00:00', '20:00:00', '2019-03-02 04:15:01', '2019-03-02 04:15:01'),
(46, 6, 'Thursday', '10:00:00', '20:00:00', '2019-03-02 04:15:01', '2019-03-02 04:15:01'),
(47, 6, 'Friday', '10:00:00', '20:00:00', '2019-03-02 04:15:01', '2019-03-02 04:15:01'),
(48, 6, 'Saturday', '10:00:00', '20:00:00', '2019-03-02 04:15:02', '2019-03-02 04:15:02'),
(49, 6, 'Sunday', '10:00:00', '20:00:00', '2019-03-02 04:15:02', '2019-03-02 04:15:02'),
(64, 7, 'Monday', '01:00:00', '07:00:00', '2019-03-02 05:18:37', '2019-03-02 05:18:37'),
(65, 7, 'Tuesday', 'Closed', 'Closed', '2019-03-02 05:18:37', '2019-03-02 05:18:37'),
(66, 7, 'Wednesday', 'Closed', 'Closed', '2019-03-02 05:18:38', '2019-03-02 05:18:38'),
(67, 7, 'Thursday', 'Closed', 'Closed', '2019-03-02 05:18:38', '2019-03-02 05:18:38'),
(68, 7, 'Friday', 'Closed', 'Closed', '2019-03-02 05:18:38', '2019-03-02 05:18:38'),
(69, 7, 'Saturday', 'Closed', 'Closed', '2019-03-02 05:18:38', '2019-03-02 05:18:38'),
(70, 7, 'Sunday', 'Closed', 'Closed', '2019-03-02 05:18:38', '2019-03-02 05:18:38'),
(71, 8, 'Monday', '10:00:00', '22:00:00', '2019-03-02 05:59:00', '2019-03-02 05:59:00'),
(72, 8, 'Tuesday', '10:00:00', '22:00:00', '2019-03-02 05:59:00', '2019-03-02 05:59:00'),
(73, 8, 'Wednesday', '10:00:00', '22:00:00', '2019-03-02 05:59:00', '2019-03-02 05:59:00'),
(74, 8, 'Thursday', 'Closed', 'Closed', '2019-03-02 05:59:00', '2019-03-02 05:59:00'),
(75, 8, 'Friday', '10:00:00', '22:00:00', '2019-03-02 05:59:00', '2019-03-02 05:59:00'),
(76, 8, 'Saturday', '10:00:00', '22:00:00', '2019-03-02 05:59:00', '2019-03-02 05:59:00'),
(77, 8, 'Sunday', '10:00:00', '22:00:00', '2019-03-02 05:59:00', '2019-03-02 05:59:00'),
(78, 9, 'Monday', '10:00:00', '23:00:00', '2019-03-02 06:06:41', '2019-03-02 06:06:41'),
(79, 9, 'Tuesday', '10:00:00', '23:00:00', '2019-03-02 06:06:41', '2019-03-02 06:06:41'),
(80, 9, 'Wednesday', '10:00:00', '23:00:00', '2019-03-02 06:06:41', '2019-03-02 06:06:41'),
(81, 9, 'Thursday', '10:00:00', '23:00:00', '2019-03-02 06:06:41', '2019-03-02 06:06:41'),
(82, 9, 'Friday', '10:00:00', '23:00:00', '2019-03-02 06:06:41', '2019-03-02 06:06:41'),
(83, 9, 'Saturday', '10:00:00', '23:00:00', '2019-03-02 06:06:41', '2019-03-02 06:06:41'),
(84, 9, 'Sunday', '10:00:00', '23:00:00', '2019-03-02 06:06:41', '2019-03-02 06:06:41');

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
  `photo` varchar(255) COLLATE utf32_bin DEFAULT NULL,
  `address` varchar(1000) COLLATE utf32_bin DEFAULT NULL,
  `website` varchar(1000) COLLATE utf32_bin DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `photo`, `address`, `website`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'SystemAdmin', 'anik', 'anik@gmail.com', '2019-03-02 17:17:50', '$2y$10$aEw8avP2ZGG8B3FjYUC71.ZjvSt5UoM.7x.OfdtNRAPTMbwyrwFvK', 'y53HhWHlwi0oB7xOSBAIdiqEERcdBz14ZDncZPiYxVC88wsesQFKJjnQS4wb', NULL, NULL, NULL, NULL, '2019-02-22 18:43:27', '2019-02-22 18:43:27'),
(9, 'Admin', 'Himu', 'rayhan@gmail.com', '2019-03-10 18:14:07', '$2y$10$x3GtQHACcuax50ghL8/EgOzFp.Jj9Fc4C16C4zbAVbnaeGBE2dnyW', 'ER230YZ2lbJaVMJuOas96AJdFFuWR4EQrwe7T584GzTskQoDhaIn89Y5u5tg', NULL, NULL, NULL, NULL, '2019-03-02 03:11:12', '2019-03-10 18:13:58'),
(10, 'Admin', 'tushar', 'tushar@gmail.com', '2019-03-02 05:17:23', '$2y$10$AosLwsvSvXc5cC.s6QjXJO.3cYeE7MEYcwpGNv65x0TX7TpxNa3Xi', 'cpvvooFBUYcu6Yx2S7MpwlDl1x2IiyMzD35bp4yqgetX6zrsF9sjSrxPTqMA', NULL, NULL, NULL, NULL, '2019-03-02 03:52:40', '2019-03-02 03:54:06'),
(11, 'Admin', 'naim', 'naim@gmail.com', '2019-03-02 08:24:01', '$2y$10$0K8o.E8bX3yZitjAT4bJPOho2iUfbbSBHIiuaoJPIeF/al/rdqyHW', 'UyMTe8hWal6qee6MRzIDxbHpMfaLIIuBW0CcuL7ybWdfqN0UuDTwNDg6TuVW', NULL, NULL, NULL, NULL, '2019-03-02 04:04:07', '2019-03-02 04:05:07'),
(12, 'Admin', 'limu', 'limu@gmail.com', '2019-03-02 05:25:34', '$2y$10$ZbTkSTNiG0NnP62QIDW/ceneGNOyb757UpRiTfIodEaVu3uMlmN8W', 'Koax4tVc6J5fedvddDISJ6OYXmDrIsNmuQOmqmH4B2JqzHWhk6tGMqgMExYG', NULL, NULL, NULL, NULL, '2019-03-02 04:16:24', '2019-03-02 04:17:14'),
(13, 'Admin', 'Alamin', 'alamin@gmail.com', '2019-03-10 16:30:28', '$2y$10$.ePe1.YPVQGBZ5tOVeLeP.vegTVRKzNW.bI5OJvtnBn3yXmLkO6ee', 'ezjWNAjRov7ccQvwpvtnsgqrqj2hPcJdZvyRfbxyUPhBucgxM5XmEvmfVKpC', NULL, NULL, NULL, NULL, '2019-03-02 05:51:49', '2019-03-02 05:52:50'),
(14, 'Admin', 'Riad', 'riad@gmail.com', '2019-03-03 04:33:41', '$2y$10$fIu1PZhEb4vguOP4pqyIXO5eSLghyX18xFx7fVQ1JhgBHaNDILRG6', '7Qy45Y96c8zFMrVljSI4MudbfN4jTOmcAfYMGpyerAGpLArLAcSquTFw5gEs', NULL, NULL, NULL, NULL, '2019-03-02 06:00:48', '2019-03-02 06:01:53'),
(15, 'Customer', 'Mehedi', 'Mehedi@gmail.com', '2019-03-10 19:20:17', '$2y$10$wpjnsdPSNUmhB47uOfrkKe6xwfQw3tWkRg0cDL3lsKQstTkWEDiJy', '6eUDMe7UIOKNWydvP9QromerLKhl7SyPH6htZMJBnaS5AC71u0cb4ZGlgRtw', 'uploads/SuaZw1mPze77NPZFZJCdWaxYRbJoPpzxeXDmqClu.jpeg', NULL, NULL, NULL, '2019-03-08 14:17:00', '2019-03-10 18:24:31');

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
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `food_categories`
--
ALTER TABLE `food_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `food_menus`
--
ALTER TABLE `food_menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `time_configs`
--
ALTER TABLE `time_configs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
