-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2022 at 05:36 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `niceadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `image` varchar(1024) NOT NULL,
  `fullName` varchar(64) NOT NULL,
  `about` text NOT NULL,
  `company` varchar(64) NOT NULL,
  `job` varchar(64) NOT NULL,
  `country` varchar(64) NOT NULL,
  `users_email` varchar(64) NOT NULL,
  `users_password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `image`, `fullName`, `about`, `company`, `job`, `country`, `users_email`, `users_password`) VALUES
(1, 'users_img/profile-img.jpg', 'Kevin Anderson', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 'Lueilwitz, Wisoky and Leuschke', 'Web Designer', 'USA', 'k.anderson@example.com', '$2y$10$tSYN82JUXWbbTb/iCuNS3OhZltucJuWGR3d5oD9msm4yP7HPROLPO'),
(2, 'users_img/messages-3.jpg', 'Victor Elliot', '      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'TerraPoint', 'Dental Hygenist', 'LA', 'v.elliot@example.com', '$2y$10$BSzuK24heNVLF55xIneja.vvnTcnR3T3LvGy6NrXRR./drbDxLKIu'),
(3, 'users_img/messages-1.jpg', 'Tanja Schroeder', '      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborums.', 'Bloom Brothers', 'Biomedical engineer', 'Portland, USA', 't.schroeder@example.com', '$2y$10$U5qZB63WX1mIU7GgRdfTnu2xQKn2857zmHUEIKG210XR4fhZ9Ui4y'),
(4, 'users_img/author-1.jpg', 'Juan Luiz', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Forum Cafetarias', 'Health Consultant', 'Atlantic', 'j.luiz@example.com', '$2y$10$V9gB3DBXELc.8SL2uxxDnud8jRVOUGucgxuoJTNPDeXGLIVgZxbXu'),
(5, 'users_img/testimonials-2.jpg', 'Arubia Bata', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'PionerChicken', 'Business Management Counselor', 'Grand Folks', 'a.bata@example.com', '$2y$10$unUJnExbbvjRI4ZAPko2f.sYNNcv3G9ow2JP1JhLLrJfr5bVF0DTq'),
(6, 'users_img/messages-2.jpg', 'Nicole Brown', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Casa Bonita', 'DTP Operator', 'Toledo', 'n.brown@example.com', '$2y$10$ZS43QfW7Dzj3d4JCtX1vgezMIpfVHqR5oAX61fT6aFTkiB44TFbR2'),
(7, 'users_img/author-2.jpg', 'Sara Freitag', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'TUI fly Deutchland', 'Airline flight engineer', 'Hannover', 's.freitag@example.com', '$2y$10$My0XysvxvU/r0pxsQN3yBOAUIc0FbTXAyMI5gvM8TChcJ0ROHENPW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
