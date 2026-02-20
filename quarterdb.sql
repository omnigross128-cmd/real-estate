-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2025 at 10:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quarterdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `residential_rent`
--

CREATE TABLE `residential_rent` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `price_negotiable` enum('YES','NO') DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `listing_type` enum('Rentals','Sales') DEFAULT NULL,
  `status` enum('Active','hot offer','new offer','open house','sold','no status') DEFAULT NULL,
  `file_upload` varchar(255) DEFAULT NULL,
  `video_from` enum('vimeo','youtube') DEFAULT NULL,
  `video_id` varchar(255) DEFAULT NULL,
  `virtual_tour` text DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `neighborhood` varchar(100) DEFAULT NULL,
  `zip` varchar(20) DEFAULT NULL,
  `agreement_type` enum('Registered','Not Registered','Goverment Stamp') DEFAULT NULL,
  `rooms` int(11) DEFAULT NULL,
  `bedrooms` int(11) DEFAULT NULL,
  `bathrooms` int(11) DEFAULT NULL,
  `security_deposit` enum('1 Month Rent','2 Month Rent','Custom Amount') DEFAULT NULL,
  `maintenance_charges` enum('Included','Excluded') DEFAULT NULL,
  `year_built` int(11) DEFAULT NULL,
  `preferred_tenants` enum('No Preference','Family','Bachelors','Company Lease') DEFAULT NULL,
  `available_from` date DEFAULT NULL,
  `floor_number` varchar(50) DEFAULT NULL,
  `carpet_area` int(11) DEFAULT NULL,
  `verification_status` enum('Verified Property','Not Verified') DEFAULT NULL,
  `balconies` int(11) DEFAULT NULL,
  `bhk` enum('One RK','1 BHK','2 BHK','3 BHK','4 BHK') DEFAULT NULL,
  `floors_no` int(11) DEFAULT NULL,
  `furnishing_status` enum('Furnished','Semi-Furnished','Unfurnished','Not Available') DEFAULT NULL,
  `property_status` enum('Ready to move','Under Construction','Not Available') DEFAULT NULL,
  `interior_details` text DEFAULT NULL,
  `outdoor_details` text DEFAULT NULL,
  `utilities` text DEFAULT NULL,
  `other_features` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `residential_rent`
--

INSERT INTO `residential_rent` (`id`, `title`, `description`, `price`, `price_negotiable`, `category`, `listing_type`, `status`, `file_upload`, `video_from`, `video_id`, `virtual_tour`, `address`, `country`, `state`, `city`, `neighborhood`, `zip`, `agreement_type`, `rooms`, `bedrooms`, `bathrooms`, `security_deposit`, `maintenance_charges`, `year_built`, `preferred_tenants`, `available_from`, `floor_number`, `carpet_area`, `verification_status`, `balconies`, `bhk`, `floors_no`, `furnishing_status`, `property_status`, `interior_details`, `outdoor_details`, `utilities`, `other_features`, `created_at`) VALUES
(1, 'title test', 'testing', 2198.00, '', 'None', 'Rentals', NULL, 'Screenshot 2025-04-29 223429.png', 'youtube', 'sdsf', 'test', 'test', 'test', 'test', 'test', 'test', '7878', 'Not Registered', 22, 32, 432, '2 Month Rent', 'Included', 0, 'Family', '0000-00-00', '2', 1, '', 1, '3 BHK', 0, 'Unfurnished', 'Ready to move', '[\"Media Room\"]', '[\"Garage Attached\"]', '[\"Central Air\"]', '[\"Chair Accessible\",\"Washer and dryer\"]', '2025-05-01 08:43:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `residential_rent`
--
ALTER TABLE `residential_rent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `residential_rent`
--
ALTER TABLE `residential_rent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
