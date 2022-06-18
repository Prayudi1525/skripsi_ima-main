-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 11:50 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ima`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `id` bigint(20) NOT NULL,
  `equipmentcategory_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `capacity` decimal(6,2) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`id`, `equipmentcategory_id`, `name`, `capacity`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'CR01', '100.00', '1', '2022-05-16 07:59:51', '2022-05-16 07:59:51'),
(2, 2, 'F01', '8.00', '1', '2022-05-16 07:59:51', '2022-05-16 07:59:51'),
(3, 1, 'CR02', '120.00', '1', '2022-06-18 11:16:47', '2022-06-18 11:16:47');

-- --------------------------------------------------------

--
-- Table structure for table `equipment_categories`
--

CREATE TABLE `equipment_categories` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipment_categories`
--

INSERT INTO `equipment_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Crane', '2022-05-16 07:59:14', '2022-05-16 07:59:14'),
(2, 'Forklift', '2022-05-16 07:59:14', '2022-05-16 07:59:14');

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `id` bigint(20) NOT NULL,
  `partcategory_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parts_category`
--

CREATE TABLE `parts_category` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pre_uses`
--

CREATE TABLE `pre_uses` (
  `id` bigint(20) NOT NULL,
  `equipment_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `air_radiator` bit(1) NOT NULL DEFAULT b'1',
  `hose_radiator` bit(1) NOT NULL DEFAULT b'1',
  `v_belt` bit(1) NOT NULL DEFAULT b'1',
  `tangki_bbm` bit(1) NOT NULL DEFAULT b'1',
  `oli_engine` bit(1) NOT NULL DEFAULT b'1',
  `oli_hydraulik` bit(1) NOT NULL DEFAULT b'1',
  `air_accu` bit(1) NOT NULL DEFAULT b'1',
  `kabel_battery` bit(1) NOT NULL DEFAULT b'1',
  `kepala_battery` bit(1) NOT NULL DEFAULT b'1',
  `tpkb` bit(1) NOT NULL DEFAULT b'1',
  `lampu_rotary` bit(1) NOT NULL DEFAULT b'1',
  `lampu_depan` bit(1) NOT NULL DEFAULT b'1',
  `lampu_rem` bit(1) NOT NULL DEFAULT b'1',
  `lampu_mundur` bit(1) NOT NULL DEFAULT b'1',
  `lampu_sein` bit(1) NOT NULL DEFAULT b'1',
  `indikator_pa` bit(1) NOT NULL DEFAULT b'1',
  `indikator_ta` bit(1) NOT NULL DEFAULT b'1',
  `indikator_oe` bit(1) NOT NULL DEFAULT b'1',
  `alarm_mundur` bit(1) NOT NULL DEFAULT b'1',
  `klakson` bit(1) NOT NULL DEFAULT b'1',
  `wiper` bit(1) NOT NULL DEFAULT b'1',
  `kerangka_boom` bit(1) NOT NULL DEFAULT b'1',
  `roller_hook` bit(1) NOT NULL DEFAULT b'1',
  `kp_hook` bit(1) NOT NULL DEFAULT b'1',
  `kanvas_rem_winch` bit(1) NOT NULL DEFAULT b'1',
  `drum_winch` bit(1) NOT NULL DEFAULT b'1',
  `wire_sling` bit(1) NOT NULL DEFAULT b'1',
  `gear_swing` bit(1) NOT NULL DEFAULT b'1',
  `drums_swing` bit(1) NOT NULL DEFAULT b'1',
  `kerusakan` bit(1) NOT NULL DEFAULT b'1',
  `greasing` bit(1) NOT NULL DEFAULT b'1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` varchar(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pre_uses`
--

INSERT INTO `pre_uses` (`id`, `equipment_id`, `user_id`, `air_radiator`, `hose_radiator`, `v_belt`, `tangki_bbm`, `oli_engine`, `oli_hydraulik`, `air_accu`, `kabel_battery`, `kepala_battery`, `tpkb`, `lampu_rotary`, `lampu_depan`, `lampu_rem`, `lampu_mundur`, `lampu_sein`, `indikator_pa`, `indikator_ta`, `indikator_oe`, `alarm_mundur`, `klakson`, `wiper`, `kerangka_boom`, `roller_hook`, `kp_hook`, `kanvas_rem_winch`, `drum_winch`, `wire_sling`, `gear_swing`, `drums_swing`, `kerusakan`, `greasing`, `created_at`, `updated_at`, `status`) VALUES
(1, 1, 1, b'0', b'0', b'0', b'0', b'0', b'0', b'0', b'0', b'0', b'0', b'0', b'0', b'0', b'0', b'0', b'0', b'0', b'0', b'0', b'0', b'0', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', '2022-06-04 12:06:39', '2022-06-04 12:06:39', '0'),
(2, 0, 0, b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(3, 0, 0, b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(4, 0, 0, b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(5, 0, 0, b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(6, 0, 0, b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'0', b'0', b'0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(7, 0, 0, b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'0', b'0', b'0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(8, 2, 1, b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'0', b'1', b'1', b'0', '2022-06-04 17:53:15', '0000-00-00 00:00:00', '0'),
(9, 2, 1, b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'0', b'1', b'1', b'0', '2022-06-04 17:53:42', '2022-06-04 17:53:42', '0'),
(10, 1, 1, b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'0', b'0', b'0', b'1', b'0', '2022-06-04 17:53:51', '2022-06-04 17:53:51', '0'),
(11, 3, 1, b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'0', b'1', b'0', '2022-06-18 16:29:17', '2022-06-18 16:29:17', '0');

-- --------------------------------------------------------

--
-- Table structure for table `pre_use_sub`
--

CREATE TABLE `pre_use_sub` (
  `id` bigint(20) NOT NULL,
  `pre_use_id` bigint(20) NOT NULL,
  `part_id` bigint(20) NOT NULL,
  `kondisi` varchar(2) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'superuser', '2022-05-16 05:08:48', '2022-05-16 05:08:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `role_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 1, 'superuser', 'superuser.ekanuri@gmail.com', '3c2b47c43e88b6b4dc423284e08144b0', '2022-05-16 05:11:10', '2022-05-16 05:11:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipment_categories`
--
ALTER TABLE `equipment_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parts_category`
--
ALTER TABLE `parts_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pre_uses`
--
ALTER TABLE `pre_uses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pre_use_sub`
--
ALTER TABLE `pre_use_sub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `equipment_categories`
--
ALTER TABLE `equipment_categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parts_category`
--
ALTER TABLE `parts_category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pre_uses`
--
ALTER TABLE `pre_uses`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pre_use_sub`
--
ALTER TABLE `pre_use_sub`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
