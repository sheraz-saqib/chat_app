-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2023 at 02:33 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ichatapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `message_list`
--

CREATE TABLE `message_list` (
  `mes_id` int(11) NOT NULL,
  `reciever_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `mes_text` varchar(222) NOT NULL,
  `is_view` int(11) NOT NULL DEFAULT 1,
  `mes_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_rand_id` int(111) NOT NULL,
  `user_name` varchar(222) NOT NULL,
  `user_email` varchar(222) NOT NULL,
  `user_pass` varchar(222) NOT NULL,
  `user_img` varchar(222) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `last_seen` datetime NOT NULL DEFAULT current_timestamp(),
  `user_create_acc` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_rand_id`, `user_name`, `user_email`, `user_pass`, `user_img`, `status`, `last_seen`, `user_create_acc`) VALUES
(1, 1105698395, 'sheraz ', 'sheraz@gmail.com', '$2y$10$Q1nLXbqv/jFwXvgh/jwUMOtw5XLliAALQs9XMLzYfNmmn6lVIn7RS', '1697193138bear-g50540882a_1920.png', 0, '2023-10-13 16:25:14', '2023-10-10 17:02:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message_list`
--
ALTER TABLE `message_list`
  ADD PRIMARY KEY (`mes_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message_list`
--
ALTER TABLE `message_list`
  MODIFY `mes_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
