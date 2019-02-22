-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2019 at 09:41 PM
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
(5, 'Block A', 2, '2019-02-22 12:50:47', '2019-02-22 12:50:47');

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
(2, 'banani', '2019-02-22 12:49:26', '2019-02-22 12:49:26');

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
(1, 1, 'Burger', '2019-02-22 13:25:18', '2019-02-22 13:25:18');

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
(2, 'Chicken Burger', 1, '1:1', 120, '2019-02-22 13:26:52', '2019-02-22 13:26:52');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(11) NOT NULL,
  `name` varchar(244) COLLATE utf32_bin NOT NULL,
  `user_id` int(20) NOT NULL,
  `area_id` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `user_id`, `area_id`, `created_at`, `updated_at`) VALUES
(1, 'manik burger', 2, 1, '2019-02-22 19:08:53', '2019-02-22 19:08:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_type` varchar(250) COLLATE utf32_bin NOT NULL,
  `name` varchar(250) COLLATE utf32_bin NOT NULL,
  `email` varchar(200) COLLATE utf32_bin NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(200) COLLATE utf32_bin NOT NULL,
  `remember_token` varchar(200) COLLATE utf32_bin NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'SystemAdmin', 'anik', 'anik@gmail.com', '2019-02-22 19:09:14', '$2y$10$aEw8avP2ZGG8B3FjYUC71.ZjvSt5UoM.7x.OfdtNRAPTMbwyrwFvK', 'L11R9R5zE33Nh1IBhRl86A3oU2DUccRStXvb3PqcvifCNslWzUSDZOpQKYUO', '2019-02-22 18:43:27', '2019-02-22 18:43:27'),
(2, 'Admin', 'rayhan', 'rayhan@gmail.com', '2019-02-22 19:27:31', '$2y$10$aEw8avP2ZGG8B3FjYUC71.ZjvSt5UoM.7x.OfdtNRAPTMbwyrwFvK', 'tB3XfQQ8qsZLq2OhZo26k12wewRlMpujAirN8p0QiWG6JnVTtzo4SflHaDUG', '2019-02-22 18:44:21', '2019-02-22 18:44:21'),
(3, 'Customer', 'tushar', 'tushar@gmail.com', '2019-02-22 18:48:52', '$2y$10$aEw8avP2ZGG8B3FjYUC71.ZjvSt5UoM.7x.OfdtNRAPTMbwyrwFvK', '', '2019-02-22 18:45:07', '2019-02-22 18:45:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `food_categories`
--
ALTER TABLE `food_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `food_menus`
--
ALTER TABLE `food_menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
