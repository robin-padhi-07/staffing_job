-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 31, 2020 at 10:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staffing`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `event_name` varchar(150) NOT NULL,
  `event_des` text NOT NULL,
  `image` varchar(150) NOT NULL,
  `location` varchar(250) NOT NULL,
  `updated_at` datetime DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `service_price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_name`, `event_des`, `image`, `location`, `updated_at`, `created_at`, `service_price`) VALUES
(2, 'Kitchen Jobs', 'aking care of safety and health of all trainees Reporting: - Maintenance of Daily reports and target sheets Implementation of behaviour modification and strategy as discussed with the Program Manager Inform the Program Manager of any new behaviour in trainees or any problem behaviour in the trainees. Monitoring the progress of each trainee in relation to the goal set Preparing and maintaining the quarterly and annual goals of the trainees. Preparing the Incidence Report pertaining to any of the trainee or self. Planning, Co-ordinating & Feedback,: - Provide weekly feedback to the Program Manager Discussing with Program Manager regarding each trainee’s behaviour, goals and strategy. nteract with the other trainers, share ideas and plan activities according to trainee’s', '1378419155.jpeg', 'Bangalore ', '2020-05-24 21:19:58', '2020-05-20 13:43:56', 500),
(3, 'Jr Chef ', 'At Lavendel we offer a comprehensive cleaning package that covers deep clean of your sofa. From removing stains to make it soft like a feather, our expert professionals will turn your sofa sanitized and cozy space that you deserve.', '672675073.png', 'Delhi', '2020-05-24 21:20:03', '2020-05-20 13:43:58', 489),
(4, 'Account Manager ', 'When it comes to cleaning there is no task more arduous than the bathroom. At Lavendel we offer a comprehensive cleaning package that covers all aspects of your bathroom. From removing stains to mold build-ups, our expert professionals will turn your bathroom into the sanitized and hygienic space that you deserve.', '337064225.png', 'Kochi', '2020-05-24 21:20:06', '2020-05-20 13:43:56', 5022),
(6, 'Driver', 'Cleanliness and Hygiene are the core parts of living. Head start your day from a Clean Kitchen.', '893164828.png', 'Kerela', '2020-05-24 21:20:49', '2020-05-20 14:24:36', 30),
(7, 'Accounting ', 'Lavendel prides itself on our extensive experience in providing specialized one-off services to our clients. Advanced methods and the utilization of the latest equipment ensures your house to be cleaned to the highest of standards.', '1571696507.jpeg', 'Thiruvananthapuram', '2020-05-24 21:20:53', '2020-05-20 20:10:42', 30),
(8, 'head of Kitchen ', 'Lavendel prides itself on our extensive experience in providing specialized one-off services to our clients. Advanced methods and the utilizations of the latest equipment ensures your house to be cleaned to the highest of standards.', '1960709493.png', 'Bangalore ', '2020-05-24 21:20:55', '2020-05-20 20:28:15', 5),
(9, 'Head of Account', 'Lavendel prides itself on our extensive experience in providing specialized one-off services to our clients. Advanced methods and the utilization of the latest equipment ensures your house to be cleaned to the highest of standards.', '178805877.png', 'Thiruvananthapuram', '2020-05-24 21:20:58', '2020-05-22 06:19:15', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image`
--

CREATE TABLE `tbl_image` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(250) NOT NULL,
  `image_description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_image`
--

INSERT INTO `tbl_image` (`image_id`, `image_name`, `image_description`) VALUES
(13, '1bhk_house_cleaning_original.jpeg', ''),
(14, '1bhk_house_cleaning.png', ''),
(15, '2bhk_house_cleaning_original.jpeg', ''),
(16, '2bhk_house_cleaning.png', ''),
(17, 'carpet_cleaning.png', ''),
(18, 'house_painting.png', ''),
(19, 'office_space (1.png', ''),
(20, 'office_space.png', ''),
(21, 'slider_01.png', ''),
(22, 'slider_02.png', ''),
(23, 'sofa_cleaning.png', ''),
(24, 'villa.jpeg', ''),
(25, 'villa.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin_janaki', '$2y$10$PPdM2qXmzaig3yS1EXBGg.CY2sHTOpy7T2OwlScRFHuhSQiHY///m', '2019-02-05 16:39:50'),
(2, 'admin', '$2y$10$8ChOs4U8vAMEj6kqMa9kiu8pOmKCr.ZmwAhsBk9ux/8VdrR60bpVG', '2020-05-20 18:55:15'),
(3, 'robin', '$2y$10$GqIT1HJ1C4yCznfXYR7lpexOe3BTK75P8iuUulYO38Cgq2bKc892W', '2020-05-22 17:34:53'),
(4, 'robinpadhi', '$2y$10$cTWQOl749paAhFcxEIVDTuxp5EehXRiEJ3d8l6NYgCfqVvmKGUKKS', '2020-05-24 21:48:59'),
(5, 'riyas', '$2y$10$6f2lQrkPJnqnWsFhx1Dz9.qeZ44z0y/r0kQjKorb8njCTpzePhM5y', '2020-05-25 02:06:24'),
(6, 'padhi', '$2y$10$C5t116WEEzBxzyFHZihG/OQUOtZ6XA3NcfpLZTcGYW3PnI/2WurEW', '2020-05-29 01:26:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_image`
--
ALTER TABLE `tbl_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
