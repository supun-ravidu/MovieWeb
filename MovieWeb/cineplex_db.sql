-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2024 at 12:50 PM
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
-- Database: `cineplex_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `movieSelection` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bookingDate` date NOT NULL,
  `phone` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `seat` int(10) NOT NULL,
  `carParking` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `movieSelection`, `name`, `email`, `bookingDate`, `phone`, `price`, `seat`, `carParking`, `created_at`) VALUES
(1, 'Aquaman and the Lost Kingdom (3D)', 'Supun Ravidu', 'miningsuppa@gmail.com', '2024-02-29', '0776824351', 1000, 0, '', '2024-03-08 13:11:56'),
(2, 'Migration', 'Supun Ravidu', 'miningsuppa@gmail.com', '2024-02-01', '0776824399', 3000, 0, '', '2024-03-08 13:12:29'),
(3, 'Aquaman and the Lost Kingdom (3D)', 'ggg Ravidu', 'miningsuppa@gmail.com', '2024-03-14', '0776824351', 3000, 0, '', '2024-03-08 13:28:33'),
(4, 'Aquaman and the Lost Kingdom (3D)', 'lol Ravidu', 'miningsuppa@gmail.com', '2024-03-06', '0776824351', 1000, 0, '', '2024-03-08 13:32:55'),
(5, 'Aquaman and the Lost Kingdom (3D)', 'lol Ravidu', 'miningsuppa@gmail.com', '2024-03-06', '0776824351', 1000, 0, '', '2024-03-08 13:33:58'),
(6, 'Aquaman and the Lost Kingdom (3D)', 'Supun Ravidu Rathnayaka', 'jio@gmail.com', '2024-04-04', '0776824351', 3000, 0, '', '2024-03-08 13:48:15'),
(7, 'Migration', 'Supun Ravidu', 'ioioio@gmail.com', '2024-03-20', '0776824351', 1000, 0, '', '2024-03-08 13:53:23'),
(8, 'Migration', 'Supun Ravidu', 'ioioio@gmail.com', '2024-03-20', '0776824351', 3000, 0, '', '2024-03-08 13:58:22'),
(9, 'The Beekeeper', 'eeee', 'eeee@gmail.com', '2024-03-13', '2222', 3000, 0, '', '2024-03-08 14:01:07'),
(10, 'Migration', 'kkkk', 'kkk@gmail.com', '2024-03-15', '0776824351', 3000, 0, '', '2024-03-08 14:04:13'),
(11, '', 'Supun Ravidu', 'miningsuppa@gmail.com', '2024-03-02', '0776824351', 1000, 0, 'Yes', '2024-03-09 13:28:41'),
(12, 'Migration', 'Supun Ravidu', 'miningsuppa@gmail.com', '2024-03-05', '0776824351', 3000, 0, 'Yes', '2024-03-09 13:30:15'),
(13, 'Migration', 'popo Ravidu', 'miningsuppa@gmail.com', '2024-03-20', '0776824351', 1000, 0, 'Yes', '2024-03-09 13:47:22'),
(14, 'The Beekeeper', 'lastcheck', 'lastcheck@gmail.com', '2024-03-06', '0776824351', 3000, 0, 'Yes', '2024-03-09 16:15:07'),
(15, 'Aquaman and the Lost Kingdom (3D)', 'test Ravidu', 'miningsuppa@gmail.com', '2024-03-11', '0776824351', 3000, 0, 'Yes', '2024-03-10 09:25:24'),
(16, 'Migration', '1last', '1last@gmail.com', '2024-03-13', '0776824351', 3000, 0, 'Yes', '2024-03-10 11:49:37');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `phone`, `subject`, `message`, `submitted_at`) VALUES
(1, 'Supun Ravidu', 'miningsuppa@gmail.com', '0776824351', 'fghgfhfghgfhfg', 'sadascfdzxsd', '2024-03-09 03:28:02'),
(2, 'Supun Ravidu', 'miningsuppa@gmail.com', '0776824351', 'fghgfhfghgfhfg', 'sadascfdzxsd', '2024-03-09 03:34:05'),
(3, 'cxz', 'miningsuppa@gmail.com', 'c', 'c', 'czxc', '2024-03-09 03:34:41'),
(4, 'joi Ravidu', 'miningsuppa@gmail.com', '0776824351', 'sdcdscfdscfsd', 'minsako', '2024-03-09 13:48:56'),
(5, 'lastcheck Ravidu', 'lastcheck@gmail.com', '0776824351', 'lastcheck ', 'lastcheck ', '2024-03-09 16:16:39'),
(6, 'last2 Ravidu', 'last2@gmail.com', '0776824351', 'last2 ', 'last2 ', '2024-03-09 16:19:28'),
(7, 'last2 Ravidu', 'last2@gmail.com', '0776824351', 'last2 ', 'last2 ', '2024-03-09 16:20:09'),
(8, 'last3 Ravidu', 'last2@gmail.com', '0776824351', 'last2 ', 'last2 ', '2024-03-09 16:20:20'),
(9, 'last3 Ravidu', 'last2@gmail.com', '0776824351', 'last2 ', 'last2 ', '2024-03-09 16:20:28'),
(10, 'last3 Ravidu', 'last2@gmail.com', '0776824351', 'last2 ', 'last2 ', '2024-03-09 16:20:40'),
(11, 'last3 Ravidu', 'last2@gmail.com', '0776824351', 'last2 ', 'last2 ', '2024-03-09 16:20:44'),
(12, 'last3 Ravidu', 'last2@gmail.com', '0776824351', 'last2 ', 'last2 ', '2024-03-09 16:20:55'),
(13, 'last4 Ravidu', 'last2@gmail.com', '0776824351', 'last2 ', 'last2 ', '2024-03-09 16:23:15'),
(14, 'Supun Ravidu', 'testing1@gmail.com', '0776824351', 'last', 'helloworld', '2024-03-10 08:57:21'),
(15, '1last Ravidu', '1last@gmail.com', '0776824351', '1last', '1last', '2024-03-10 11:49:55');

-- --------------------------------------------------------

--
-- Table structure for table `staff_members`
--

CREATE TABLE `staff_members` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff_members`
--

INSERT INTO `staff_members` (`id`, `name`, `position`, `department`, `email`, `phone`) VALUES
(1, 'Supun Ravidu', 'cleaning', 'cledfd', 'miningsuppa@gmail.com', '0776824351'),
(2, 'Supun Raviduu', 'cleaningu', 'cledfdu', 'miningsupupa@gmail.com', '0776824351'),
(3, 'Supun Ravidu', 'sfahgjskdfhgk', 'dfjklhgvfdjhjkdhjkh', 'miningsuppa@gmail.com', '0776824351'),
(4, 'Supun Ravidu', 'sfahgjskdfhgk', 'dfjklhgvfdjhjkdhjkh', 'miningsuppa@gmail.com', '0776824351'),
(5, 'Supun Ravidu', 'sfahgjskdfhgk', 'dfjklhgvfdjhjkdhjkh', 'miningsuppa@gmail.com', '0776824351'),
(6, 'Supun Ravidu', 'sfahgjskdfhgk', 'dfjklhgvfdjhjkdhjkh', 'miningsuppa@gmail.com', '0776824351'),
(7, 'Supun Ravidu', 'sfahgjskdfhgk', 'dfjklhgvfdjhjkdhjkh', 'miningsuppa@gmail.com', '0776824351'),
(8, 'Supun Ravidu', 'sfahgjskdfhgk', 'dfjklhgvfdjhjkdhjkh', 'miningsuppa@gmail.com', '0776824351'),
(9, 'Supun Ravidu', 'sfahgjskdfhgkd', 'dfjklhgvfdjhjkdhjkh', 'miningsuppa@gmail.com', '0776824351'),
(10, 'Minsadi', 'sfahgjskdfhgkd', 'dfjklhgvfdjhjkdhjkh', 'miningsuppa@gmail.com', '0776824351'),
(11, 'Minsadimai', 'sfahgjskdfhgkd', 'dfjklhgvfdjhjkdhjkh', 'miningsuppa@gmail.com', '0776824351'),
(12, 'hrlllo', 'sfahgjskdfhgkd', 'fdfsd', 'miningsuppa@gmail.com', '0776824351'),
(13, 'hrlllo', 'sfahgjskdfhgkd', 'fdfsd', 'miningsuppa@gmail.com', '0776824351'),
(14, 'hrlllo', 'sfahgjskdfhgkd', 'fdfsd', 'miningsuppa@gmail.com', '0776824351'),
(15, 'SupunMinsa', 'sfahgjskdfhgkd', 'dfjklhgvfdjhjkdhjkh', 'miningsuppa@gmail.com', '0776824351'),
(16, 'kasun', 'katerin', 'cafe', 'kasun@gmail.com', '0776824351'),
(17, 'lastcheck', 'lastcheck', 'lastcheck', 'lastcheck@gmail.com', '0776824351'),
(18, 'lastcheck2', 'lastcheck', 'lastcheck', 'lastcheck@gmail.com', '0776824351'),
(19, 'lastcheck2', 'lastcheck', 'lastcheck', 'lastcheck@gmail.com', '0776824351'),
(20, 'Supun Ravidu', 'tescse', 'tescse', 'tescse@gmail.com', '0776824351');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(2, 'kaiza', 'minsa@gmail.com', '0'),
(4, 'Suppabuildfffffffff', 'fffffff@gmail.com', '$2y$10$m1AVhpBPY2FtmBguAxHszOGEdSwsVbbcB8Ilya2bcMhhgPK2Og7pi'),
(5, 'devee', 'miningsuppa@gmail.com', 'kaiza'),
(24, 'Suppabuild01233', 'minsamage@gmail.com', '1234'),
(25, 'udev', 'udev@gmail.com', '1234'),
(26, 'gihan', 'gihan@gmail.com', '$2y$10$M0oTiGNpTq1oAdMfXvJGN.37cGWEjHeB.rmSI4mGTrz8FL0pKtRT6'),
(27, 'mageeka', 'mageeka@gmail.com', '1234'),
(28, 'helloworkd', 'helloworkd@gmail.com', '$2y$10$JDhJn2rbfR4P/6wnBx66S.rxV363.YuYah5feZzPiF3tJeZ9jLvP6'),
(29, 'minsa', 'minsa1@gmail.com', '$2y$10$YAk9qGFj8BJuK19llMkwwe5lZpLPlFyYPwSPMfYc9u7ePYC5vr6By'),
(30, 'ddddddddddd', 'ddddddddddddddddd@gmail.com', '$2y$10$HegQ8KhjR9BC8O2HTjWy7.k2pCgshLAfvlkDnyEqIzeBSg1usSoce'),
(31, 'lahi', 'lahi@gmail.com', '$2y$10$6bveapAGwM8NObqcxpHnwuQXtUm7xi1Ku.gBL/awFkeVAAZh/RJOG'),
(32, 'testcase', 'testcase@gmail.com', '$2y$10$6SNQjepfaTcRsomUJnjtc.FRbivV5iRkxjRsn04QY8rh265ZGWk5u'),
(33, '1last', '1last@gmail.com', '$2y$10$jo0CFUJWI3vD7IsQzG7y8.BVLntnv.6Suvye9r2WmwSkHcmaVX31S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_members`
--
ALTER TABLE `staff_members`
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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `staff_members`
--
ALTER TABLE `staff_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
