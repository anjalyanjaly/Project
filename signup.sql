-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2024 at 02:55 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup_form`
--

CREATE TABLE `signup_form` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `area_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup_form`
--

INSERT INTO `signup_form` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `address`, `city`, `province`, `area_code`) VALUES
(1, 'Anjaly', 'Bhardwaj', 'anjaly001', '12anjaly09@gmail.com', '$2y$10$QvpXcGtTYu0FuQyaoAXDdu0qBwo4ELZ7t.GA0BzXBiw', '11 dusk', 'Brampton', 'L6Y5V4', ''),
(3, 'Anjaly', 'Bhardwaj', 'anjaly1', '123anjaly@gmail.com', '$2y$10$JYO6CLqP/4kF4lMeRuv2Buefb7qSZLQ6a1PkpU2UjP/', '11 dusk drive', 'Brampton', 'Ontario', 'L6Y5V4'),
(4, 'Anjaly', 'Bhardwaj', 'anjaly8', 'anjaly12@gmail.com', '$2y$10$m2oIkGXuC859gOdnN9bY9ObslkhJRxOdOfeY4CDUviw', '11 dusk drive', 'Brampton', 'Ontario', 'L6Y5V4'),
(6, 'Anjaly', 'Bhardwaj', 'anjaly', 'anjaly1@gmail.com', '$2y$10$EqfFFXbHPJ9QgsHnN2AJM.M9fUBVNU.fmNaWXQH3Wcz', '11 dusk drive', 'Brampton', 'Ontario', 'L6Y5V4'),
(11, 'Anjaly', 'Bhardwaj', 'anjaly7', 'anjaly7@gmail.com', '$2y$10$s04O5GVXvP6IVK6qczYSd.YGClkRkGWWErIvUrPS7AW', '11 dusk', 'Brampton', 'Ontario', 'L6Y5V4'),
(15, 'Anjaly', 'Bhardwaj', 'anjaly11', 'anjaly11@gmail.com', '$2y$10$bp6s9EX/p5ZYPueFZw.WRO1DV9JSyUl1etvktsnU4vy', '11 dusk', 'Brampton', 'Ontario', 'L6Y5V4'),
(16, 'Anjaly', 'Bhardwaj', 'nnn', 'anjaly16@gmail.com', '$2y$10$JXnecLMTPlgtIv5VqmfCWu6GhuEzZweLnWaXOmqPRI7', '11 dusk', 'Brampton', 'Ontario', 'L6Y5V4'),
(18, 'anjaly', 'anjaly', 'anjaly37', 'anjaly37@gmail.com', '$2y$10$/wkwm0P5dDeu8u59Qs6oruuAiXXaJ02ckrNUcwZP8OU', '11 dusk', 'Brampton', 'Ontario', 'L6Y5V4'),
(19, 'Anjaly', 'Bhardwaj', 'anjaly66', 'anjaly66@gmail.com', '$2y$10$Buu7t3KExqVckZNY209g1uR00eBOHHcAZpr/F7to1O.', '11 dusk drive', 'Brampton', 'Ontario', 'L6Y5V4'),
(20, 'Anjaly', 'Bhardwaj', 'anjaly77', 'anjaly77@gmail.com', '$2y$10$iGbe/N/SrHVVXr9FhPptE.VvVx/.wpIMw5zNJOGfVmU', '11 dusk', 'Brampton', 'Ontario', 'L6Y5V4'),
(21, 'Anjaly', 'Bhardwaj', 'anjaly17', 'anjaly17@gmail.com', '$2y$10$wjE20ECYJKhn8YqgWlAxcOBStLgPQLaBNWQJgu3pe17', '11 dusk', 'Brampton', 'Ontario', 'L6Y5V4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup_form`
--
ALTER TABLE `signup_form`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup_form`
--
ALTER TABLE `signup_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
