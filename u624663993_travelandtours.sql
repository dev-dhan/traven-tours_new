-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 24, 2024 at 01:18 PM
-- Server version: 10.11.7-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u624663993_travelandtours`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_content`
--

CREATE TABLE `about_content` (
  `id` int(11) NOT NULL,
  `about_image` varchar(255) DEFAULT NULL,
  `about_heading` varchar(100) DEFAULT NULL,
  `about_text` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_content`
--

INSERT INTO `about_content` (`id`, `about_image`, `about_heading`, `about_text`) VALUES
(12, '1710507943_FINAL (2).jpg', 'Empowering Your Wanderlust, One Journey at a Time', 'At See and Explore, we believe that travel is not just about reaching a destination; its about embracing the journey, immersing yourself in new cultures, and creating memories that last a lifetime.');

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'password'),
(3, 'programmer', 'superpassword'),
(7, 'programmer_1', 'superpassword'),
(8, 'programme_@', 'superpassword'),
(9, 'programmer_3', 'superpassword'),
(11, 'admin_1', 'password'),
(12, 'programmer_5', 'superpassword'),
(13, 'programmer_6', 'superpassword'),
(15, ' programmer_11 ', ' superpassword '),
(16, ' programmer_@@ ', ' superpassword '),
(28, 'test', 'test'),
(29, 'test_@', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `introduction_content`
--

CREATE TABLE `introduction_content` (
  `id` int(11) NOT NULL,
  `main_image` varchar(255) DEFAULT NULL,
  `main_subheading` varchar(100) DEFAULT NULL,
  `main_heading` varchar(100) DEFAULT NULL,
  `main_text` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `introduction_content`
--

INSERT INTO `introduction_content` (`id`, `main_image`, `main_subheading`, `main_heading`, `main_text`) VALUES
(12, '1710474223_hero-banner-1.png', 'Embark on Unforgettable Journeys Tailored Just for You', 'We always make sure you travel safe, fun and easy.', 'Welcome to See and Explore  Travel & Tours, where the world becomes your playground and every journey is a story waiting to be told.');

-- --------------------------------------------------------

--
-- Table structure for table `job_posting`
--

CREATE TABLE `job_posting` (
  `id` int(11) NOT NULL,
  `job_image` varchar(255) DEFAULT NULL,
  `job_role` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `job_type` varchar(50) DEFAULT NULL,
  `date_created` date DEFAULT curdate(),
  `job_description` text DEFAULT NULL,
  `qualification` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_posting`
--

INSERT INTO `job_posting` (`id`, `job_image`, `job_role`, `location`, `job_type`, `date_created`, `job_description`, `qualification`) VALUES
(9, '1710593753_aerial-view-of-mithi-resort.jpg', 'Relaxing 4-Day Beachfront Mithi Resort Bohol Package from Manila', 'Beachfront Mithi Resort Bohol Package from Manila', 'Limited Time Only', '2023-11-21', 'Treat yourself to a tropical island getaway and fly to Bohol on this 4-day and 3-night travel package that includes roundtrip Philippine Airlines airfare to Panglao Island. You can choose your preferred flights, but this is subject to availability. Aside from flexible flights, accommodations at Mithi Resort and Spa, roundtrip airport transfers.', '✔️Roundtrip airfare via Philippine Airlines | Manila - Bohol - Manila (Preferred flights are subject to availability. See below for schedule and terms & conditions)\r\n✔️Economy class seat with baggage allowance of 10 kilos\r\n✔️3 nights accommodation at Mithi Resort & Spa - Superior Room  (Max. Occupancy of 2 Adults)\r\n✔️Daily breakfast\r\n✔️Roundtrip Airport Transfers\r\n✔️All environmental, port fees, and all other applicable taxes'),
(19, '1710593394_exciting-7-day-snorkeling-canyoneering-whale-shark-watching-tour-to-coron-and-cebu-from-manila.jpg', 'Exciting 7-Day Snorkeling, Canyoneering & Whale Shark Watching Tour to Coron and Cebu From Manila', 'Coron And Cebu', 'Limited Time only', '2023-11-22', 'Spend a week in the Philippines and explore Manila, Coron, and Cebu in this 7-day Philippines tour. This tour package includes 6 nights of comfortable accommodations in comfort-level hotels and round trip economy class airfare with Philippine Airlines seats with a 20kg baggage allowance. Enjoy the convenience of included land transfers and start each day with a delicious breakfast.', '✔️1 night accommodation in a comfort level hotel or similar in Manila\r\n✔️2 nights accommodation in a comfort level hotel or similar in Coron\r\n✔️3 nights accommodation in a comfort level hotel or similar in Cebu\r\n✔️Roundtrip airfare from Manila to Coron, Coron to Cebu, and Cebu to Manila via ✔️Philippine Airlines with 20KG baggage allowance\r\n✔️Economy class seat inclusive of 20kg baggage allowance per person\r\n✔️Land transfers in Manila\r\n✔️Land transfers in Coron\r\n✔️Land transfers in Cebu\r\n✔️Daily breakfast\r\n✔️Day 3 - Coron Palawan Reefs & Shipwreck Snorkeling Tour with Lunch & Transfers\r\n✔️Day 5 - Cebu Oslob Whale Shark Watching & Tumalog Falls Private Tour with Transfers\r\n✔️Day 6 - Cebu Moalboal Sardine Run, Pescador Island & Turtle Bay Tour with Lunch & ✔️Transfers from Cebu City\r\n✔️Complimentary Wi-Fi access inside the resort premises\r\n✔️Use of resort facilties and amenities'),
(22, '1710593141_boracay.jpg', 'Stress-Free 5-Day Boracay Island Hopping Package with Accommodations, Transfers & Breakfast', 'Boracay', 'Limited Time Only', '2023-11-23', 'Enjoy the island of Boracay with this 5-day, 4-night package that comes with 4 nights at a resort in Boracay, roundtrip land and boat transfers from and to Boracay Airport, and a half-day shared island-hopping tour. Those who want to try water activities will also enjoy this Boracay tour package, as they can easily add a banana boat ride, a UFO ride, parasailing, or paraw sailing to their itinerary.', '✔️4 nights accommodation at a comfort level accommodation in Boracay\r\n✔️Roundtrip shared airport transfers\r\n✔️Daily breakfast\r\n✔️Day 2 - Boracay Half-Day Island Hopping Shared Tour with Lunch\r\n✔️Complimentary Wi-Fi Access in the hotel premises\r\n✔️Use of hotel facilities & amenities\r\n✔️All environmental, port fees, and all other applicable taxes');

-- --------------------------------------------------------

--
-- Table structure for table `partnership_content`
--

CREATE TABLE `partnership_content` (
  `id` int(11) NOT NULL,
  `image_content` varchar(255) DEFAULT NULL,
  `title_content` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partnership_content`
--

INSERT INTO `partnership_content` (`id`, `image_content`, `title_content`) VALUES
(1, '1710590658_philippineairlines.png', 'Philippine Airlines'),
(2, '1710590678_airasia.png', 'AirAsia'),
(3, '1710590695_ceb.png', 'Cebu Pacific');

-- --------------------------------------------------------

--
-- Table structure for table `service_content`
--

CREATE TABLE `service_content` (
  `id` int(11) NOT NULL,
  `image_content` varchar(255) DEFAULT NULL,
  `title_content` varchar(100) DEFAULT NULL,
  `description_content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_content`
--

INSERT INTO `service_content` (`id`, `image_content`, `title_content`, `description_content`) VALUES
(2, '1710507346_villa.png', 'Accommodation', 'Booking hotels, resorts, hostels, or vacation rentals based on the preferences and budget of the traveler. This could involve arranging stays.'),
(3, '1710507484_online-flight-booking.png', 'Travel Packages', 'Offering pre-designed travel packages that bundle transportation, accommodation, and activities into a single purchase.'),
(29, '1710507508_cruise.png', 'Cruise and Ferry Bookings', 'Facilitating bookings for cruises and ferry rides, including cabin selection, itinerary planning, and onboard amenities.'),
(30, '1710507544_group.png', 'Group Travel', 'Organizing group tours and travel experiences for families, friends, or corporate groups, including group discounts, customized itineraries.');

-- --------------------------------------------------------

--
-- Table structure for table `team_content`
--

CREATE TABLE `team_content` (
  `id` int(11) NOT NULL,
  `image_content` varchar(255) DEFAULT NULL,
  `name_content` varchar(100) DEFAULT NULL,
  `position_content` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team_content`
--

INSERT INTO `team_content` (`id`, `image_content`, `name_content`, `position_content`) VALUES
(1, '1710666184__DSC0060(1).jpg', 'Adsvanced Media Tech', 'Website Development Team'),
(2, '1710666901__DSC0060(1).jpg', 'Team Test', 'Team Test'),
(3, '1710666918__DSC0060(1).jpg', 'Team Test 3', 'Team Test3'),
(4, '1710666926__DSC0060(1).jpg', 'Team Test 4', 'Team Test 4');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_content`
--

CREATE TABLE `testimonial_content` (
  `id` int(11) NOT NULL,
  `title_content` varchar(100) DEFAULT NULL,
  `description_content` text DEFAULT NULL,
  `name_content` varchar(100) DEFAULT NULL,
  `jobTitle_content` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonial_content`
--

INSERT INTO `testimonial_content` (`id`, `title_content`, `description_content`, `name_content`, `jobTitle_content`) VALUES
(1, 'Awesome', 'Very Good Experience', 'Martin Louis', 'CEO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_content`
--
ALTER TABLE `about_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `introduction_content`
--
ALTER TABLE `introduction_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_posting`
--
ALTER TABLE `job_posting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partnership_content`
--
ALTER TABLE `partnership_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_content`
--
ALTER TABLE `service_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_content`
--
ALTER TABLE `team_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial_content`
--
ALTER TABLE `testimonial_content`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_content`
--
ALTER TABLE `about_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `introduction_content`
--
ALTER TABLE `introduction_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `job_posting`
--
ALTER TABLE `job_posting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `partnership_content`
--
ALTER TABLE `partnership_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service_content`
--
ALTER TABLE `service_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `team_content`
--
ALTER TABLE `team_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonial_content`
--
ALTER TABLE `testimonial_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
