-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2024 at 04:33 PM
-- Server version: 8.0.29
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citytaxiase`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_list`
--

CREATE TABLE `booking_list` (
  `id` int NOT NULL,
  `ref_code` varchar(100) NOT NULL,
  `client_id` int NOT NULL,
  `cab_id` int NOT NULL,
  `pickup_zone` text NOT NULL,
  `drop_zone` text NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '0 = Pending,\r\n1 = Driver has Confirmed,\r\n2 = Pickup,\r\n3 = drop-off,\r\n4 = cancelled',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `booking_list`
--

INSERT INTO `booking_list` (`id`, `ref_code`, `client_id`, `cab_id`, `pickup_zone`, `drop_zone`, `status`, `date_created`, `date_updated`) VALUES
(2, '202202-00003', 2, 2, 'Esoft Metro Campus, Colombo-4', 'KFC, Panadura', 4, '2024-02-23 13:53:27', '2024-02-23 22:07:49'),
(3, '202202-00003', 2, 2, 'Esoft Metro Campus, Colombo-4', 'Dehiwala Zoo', 3, '2024-02-23 15:33:10', '2024-02-23 16:08:01'),
(4, '202203-00001', 2, 1, 'Esoft Metro Campus, Colombo-4', 'Petta Railway Station', 3, '2024-02-23 19:22:40', '2024-02-23 22:08:13');

-- --------------------------------------------------------

--
-- Table structure for table `cab_list`
--

CREATE TABLE `cab_list` (
  `id` int NOT NULL,
  `reg_code` varchar(100) NOT NULL,
  `category_id` int NOT NULL,
  `cab_reg_no` varchar(200) NOT NULL,
  `body_no` varchar(100) NOT NULL,
  `cab_model` text NOT NULL,
  `cab_driver` text NOT NULL,
  `driver_contact` text NOT NULL,
  `driver_address` text NOT NULL,
  `password` text NOT NULL,
  `image_path` text,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_flag` tinyint(1) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cab_list`
--

INSERT INTO `cab_list` (`id`, `reg_code`, `category_id`, `cab_reg_no`, `body_no`, `cab_model`, `cab_driver`, `driver_contact`, `driver_address`, `password`, `image_path`, `status`, `delete_flag`, `date_created`, `date_updated`) VALUES
(1, '202202-00002', 1, 'CAB 1234', 'Toyota -130', 'Toyota Aqua', 'Nimal Perera', '0777982259', '123, Temple Road Panadura', '5f4dcc3b5aa765d61d8327deb882cf99', 'uploads/dirvers/1.png?v=1644981064', 1, 0, '2022-03-02 10:59:12', '2024-02-23 21:30:24'),
(2, '202202-00001', 4, 'CAA 7375', 'Prius-440', 'Toyota Prius', 'Sunil Perera', '0718945612', 'Templers road, Mt.Lavinia', '7ad1aea197a92805ac70f71bdec579d3', 'uploads/dirvers/2.png?v=1644981833', 1, 0, '2022-03-02 11:13:30', '2024-02-24 09:14:42'),
(15, '202402-00001', 3, 'CAA 5612', 'Kia- 130', 'Kia Cranes', 'Ajith Fernando', '0718956234', '23, St.Sebastian Road, Moratuwa', '81dc9bdb52d04dc20036dbd8313ed055', 'uploads/dirvers/15.png?v=1708746698', 1, 0, '2024-02-24 09:21:38', '2024-02-24 09:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `category_list`
--

CREATE TABLE `category_list` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `delete_flag` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category_list`
--

INSERT INTO `category_list` (`id`, `name`, `description`, `delete_flag`, `status`, `date_created`, `date_updated`) VALUES
(1, '5 Seater', 'A 4-door passenger car. Can be accommodated 4 passengers except driver.', 0, 1, '2022-03-01 10:03:54', '2024-02-23 21:34:36'),
(2, '6 Seater', 'A 4-door passenger car. Can be accommodated 5 passengers except driver.', 0, 1, '2022-03-01 10:08:10', '2024-02-23 21:35:35'),
(3, '7 Seater', 'A 4-door passenger car. Can be accommodated 6 passengers except driver.', 0, 1, '2022-03-03 12:59:29', '2024-02-23 21:35:54'),
(4, '4 Seater', '4 doors and, can be accommodated to 3 passengers passengers except driver.', 0, 1, '2024-02-23 21:31:31', '2024-02-23 21:34:53');

-- --------------------------------------------------------

--
-- Table structure for table `client_list`
--

CREATE TABLE `client_list` (
  `id` int NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text,
  `lastname` text NOT NULL,
  `gender` text NOT NULL,
  `contact` text NOT NULL,
  `address` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `image_path` text,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_flag` tinyint(1) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_added` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `client_list`
--

INSERT INTO `client_list` (`id`, `firstname`, `middlename`, `lastname`, `gender`, `contact`, `address`, `email`, `password`, `image_path`, `status`, `delete_flag`, `date_created`, `date_added`) VALUES
(2, 'Malsha', 'N.', 'Perera', 'Female', '0715896341', '243/2, Janapriya Mawatha, Panadura', 'malshan@gmail.com', '8b9e7ab295e87570551db122a04c6f7c', 'uploads/clients/2.png?v=1648043485', 1, 0, '2022-03-01 19:36:24', '2024-02-24 09:33:10'),
(4, 'Saara', 'Z.', 'Raban', 'Female', '0777963852', '34/3A, Galle Road, Dehiwala', 'saaraz@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 1, 0, '2022-03-01 13:34:09', '2024-02-24 09:31:57'),
(5, 'Viraj', '', 'Thimedha', 'Male', '0777894512', '12/4, Gravel Road, Homagama', 'thimedhav@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 1, 0, '2022-03-01 13:39:25', '2024-02-24 09:29:59'),
(9, 'Akila', 'N.', 'De Alwis', 'Male', '01123456789', '42, Alubomulla, Panadura', 'akila@gmail.com', '8b9e7ab295e87570551db122a04c6f7c', NULL, 1, 0, '2022-03-01 13:59:54', '2024-02-24 09:24:28'),
(11, 'Charitha', 'N.', 'Punchihewa', 'Male', '0777123456', '123, High Level Road, Avissawella', 'charithn@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, 1, 0, '2022-03-01 14:14:37', '2024-02-24 09:25:47'),
(14, 'Vishmi', '', 'Ramona', 'Female', '0778945612', '12, Duplication Road, Colombo-4', 'vishmir@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 1, 0, '2022-03-27 22:20:32', '2024-02-24 09:28:42');

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `id` int NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', 'City Taxi Booking System'),
(6, 'short_name', 'City Taxi'),
(11, 'logo', 'uploads/logo.png'),
(13, 'user_avatar', 'uploads/user_avatar.jpg'),
(14, 'cover', 'uploads/cover_page.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text,
  `last_login` datetime DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `avatar`, `last_login`, `type`, `date_added`, `date_updated`) VALUES
(1, 'Malsha', 'Perera', 'admin', 'd00f5d5217896fb7fd601412cb890830', 'uploads/1624000_adminicn.png', NULL, 1, '2024-02-19 14:02:37', '2024-02-19 21:51:35'),
(8, 'Viraj', 'Thimedha', 'viraj', 'd00f5d5217896fb7fd601412cb890830', 'uploads/avatar-8.png?v=1648396920', NULL, 2, '2024-02-19 16:14:00', '2024-02-19 21:47:00'),
(9, 'Charitha', 'Punchihewa', 'charitha', 'd00f5d5217896fb7fd601412cb890830', 'uploads/avatar-9.png?v=1648396901', NULL, 2, '2024-02-19 21:46:41', '2024-02-19 21:46:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_list`
--
ALTER TABLE `booking_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cab_id` (`cab_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `cab_list`
--
ALTER TABLE `cab_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `category_list`
--
ALTER TABLE `category_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_list`
--
ALTER TABLE `client_list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `system_info`
--
ALTER TABLE `system_info`
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
-- AUTO_INCREMENT for table `booking_list`
--
ALTER TABLE `booking_list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `cab_list`
--
ALTER TABLE `cab_list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `category_list`
--
ALTER TABLE `category_list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `client_list`
--
ALTER TABLE `client_list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `system_info`
--
ALTER TABLE `system_info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_list`
--
ALTER TABLE `booking_list`
  ADD CONSTRAINT `booking_list_ibfk_1` FOREIGN KEY (`cab_id`) REFERENCES `cab_list` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `booking_list_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `client_list` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cab_list`
--
ALTER TABLE `cab_list`
  ADD CONSTRAINT `cab_list_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category_list` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
