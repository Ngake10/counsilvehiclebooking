-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2025 at 12:17 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_counsil`
--

-- --------------------------------------------------------

--
-- Table structure for table `budget_deductions`
--

CREATE TABLE `budget_deductions` (
  `deduction_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `trip_id` int(11) NOT NULL,
  `amount_deducted` decimal(10,2) DEFAULT NULL,
  `deduction_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL,
  `budget` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(250) NOT NULL,
  `sender` varchar(250) NOT NULL,
  `receiver` varchar(250) NOT NULL,
  `content` mediumtext NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `sender`, `receiver`, `content`, `created_at`, `updated_at`) VALUES
(1, 'kgosi@botsogo.co.bw', 'kasongo@botsogo.co.bw', 'Doctor is unavailable', '2020-04-22', '2020-04-22'),
(2, 'kgosi@botsogo.co.bw', 'kasongo@botsogo.co.bw', 'Our dentist Doctor is now available for consultation.', '2020-04-22', '2020-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('tambona975@gmail.com', '$2y$10$q8kWCF.9wBY.68zhUn.HB.6aqEkVXrkmVrVzM2YYp34nV5XVZQk3W', '2019-12-17 09:51:50'),
('tumi@botsogo.co.bw', '$2y$10$/fTZRe5iEHKDuLpk38afHOG3rwahhZRdorErV6N7qDqXtbWewiYuy', '2020-03-01 22:18:20');

-- --------------------------------------------------------

--
-- Table structure for table `trip_costs`
--

CREATE TABLE `trip_costs` (
  `cost_id` int(11) NOT NULL,
  `trip_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `distance_km` decimal(6,2) DEFAULT NULL,
  `fuel_efficiency` decimal(5,2) DEFAULT NULL,
  `maintenance_cost_per_km` decimal(5,2) DEFAULT NULL,
  `fuel_cost_per_liter` decimal(5,2) DEFAULT NULL,
  `total_fuel_cost` decimal(10,2) DEFAULT NULL,
  `total_maintenance_cost` decimal(10,2) DEFAULT NULL,
  `total_cost` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trip_requests`
--

CREATE TABLE `trip_requests` (
  `trip_id` int(11) NOT NULL,
  `supervisor_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `trip_purpose` text DEFAULT NULL,
  `destination` varchar(100) DEFAULT NULL,
  `passenger_count` int(11) NOT NULL,
  `distance_km` decimal(6,2) DEFAULT NULL,
  `request_date` date DEFAULT NULL,
  `status` enum('pending','approved','rejected') DEFAULT 'pending',
  `cost` decimal(10,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(191) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_role` varchar(200) DEFAULT 'staff',
  `gender` varchar(30) DEFAULT NULL,
  `provider` varchar(200) DEFAULT NULL,
  `google_id` varchar(200) DEFAULT NULL,
  `avatar` varchar(600) DEFAULT 'https://www.freepngimg.com/thumb/google/66726-customer-account-google-service-button-search-logo.png',
  `user_name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `user_role`, `gender`, `provider`, `google_id`, `avatar`, `user_name`) VALUES
(64, 'alisha@gmail.com', 'Alisha Ngake', '2025-03-16 16:54:34', '$2y$10$OB1h.iOVpiKGIGxjo7GvNulM4lhnNFB5/DRAeuJt9tXCEHyrdmEQi', NULL, NULL, NULL, 'supervisor', NULL, NULL, NULL, 'https://www.freepngimg.com/thumb/google/66726-customer-account-google-service-button-search-logo.png', NULL),
(1, 'info@admin.co.bw', 'Admin', '2021-03-08 19:26:35', '$2y$10$OB1h.iOVpiKGIGxjo7GvNulM4lhnNFB5/DRAeuJt9tXCEHyrdmEQi', NULL, NULL, NULL, 'admin', NULL, NULL, NULL, 'https://www.freepngimg.com/thumb/google/66726-customer-account-google-service-button-search-logo.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vehicle_id` int(11) NOT NULL,
  `registration_number` varchar(50) NOT NULL,
  `make` varchar(50) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `passenger_capacity` int(11) NOT NULL,
  `fuel_efficiency` decimal(5,2) DEFAULT NULL,
  `maintenance_cost_per_km` decimal(5,2) DEFAULT NULL,
  `availability` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_bookings`
--

CREATE TABLE `vehicle_bookings` (
  `booking_id` int(11) NOT NULL,
  `trip_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `booking_status` enum('suggested','accepted','rejected','confirmed') DEFAULT 'suggested',
  `suggestion_reason` text DEFAULT NULL,
  `approval_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budget_deductions`
--
ALTER TABLE `budget_deductions`
  ADD PRIMARY KEY (`deduction_id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `trip_id` (`trip_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `trip_costs`
--
ALTER TABLE `trip_costs`
  ADD PRIMARY KEY (`cost_id`),
  ADD KEY `trip_id` (`trip_id`),
  ADD KEY `vehicle_id` (`vehicle_id`);

--
-- Indexes for table `trip_requests`
--
ALTER TABLE `trip_requests`
  ADD PRIMARY KEY (`trip_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`,`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vehicle_id`),
  ADD UNIQUE KEY `registration_number` (`registration_number`);

--
-- Indexes for table `vehicle_bookings`
--
ALTER TABLE `vehicle_bookings`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `trip_id` (`trip_id`),
  ADD KEY `vehicle_id` (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `budget_deductions`
--
ALTER TABLE `budget_deductions`
  MODIFY `deduction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trip_costs`
--
ALTER TABLE `trip_costs`
  MODIFY `cost_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trip_requests`
--
ALTER TABLE `trip_requests`
  MODIFY `trip_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicle_bookings`
--
ALTER TABLE `vehicle_bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `budget_deductions`
--
ALTER TABLE `budget_deductions`
  ADD CONSTRAINT `budget_deductions_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`),
  ADD CONSTRAINT `budget_deductions_ibfk_2` FOREIGN KEY (`trip_id`) REFERENCES `trip_requests` (`trip_id`);

--
-- Constraints for table `trip_costs`
--
ALTER TABLE `trip_costs`
  ADD CONSTRAINT `trip_costs_ibfk_1` FOREIGN KEY (`trip_id`) REFERENCES `trip_requests` (`trip_id`),
  ADD CONSTRAINT `trip_costs_ibfk_2` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`vehicle_id`);

--
-- Constraints for table `trip_requests`
--
ALTER TABLE `trip_requests`
  ADD CONSTRAINT `trip_requests_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`);

--
-- Constraints for table `vehicle_bookings`
--
ALTER TABLE `vehicle_bookings`
  ADD CONSTRAINT `vehicle_bookings_ibfk_1` FOREIGN KEY (`trip_id`) REFERENCES `trip_requests` (`trip_id`),
  ADD CONSTRAINT `vehicle_bookings_ibfk_2` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`vehicle_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
