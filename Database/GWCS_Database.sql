-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 09:41 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `number` int(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `number`, `message`) VALUES
(12, 'test', 'test@gmail.com', 121012104, 'test'),
(13, 'test', 'test@gmail.com', 121012104, 'hi'),
(14, 'test', 'test@gmail.com', 121012104, 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempt`
--

CREATE TABLE `login_attempt` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(30) NOT NULL,
  `try_time` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `upcomming_camping`
--

CREATE TABLE `upcomming_camping` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `details` varchar(250) NOT NULL,
  `date_time` date NOT NULL DEFAULT current_timestamp(),
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upcomming_camping`
--

INSERT INTO `upcomming_camping` (`id`, `title`, `details`, `date_time`, `image`) VALUES
(1, 'Norwegian Camping Trip', 'From the freedom to roam law to the best campsites, this is your complete guide to planning and making the most of a camping trip in Norway.', '2023-07-10', 'upcomming1.jpg'),
(2, 'Motorhome tent', 'Wherever you land, you’ll pitch up and fall asleep under the stars to the sound of crashing waves. But plan your sleepovers wisely – camping on California’s coast is no secret, and places book up months in advance.', '2023-06-20', 'upcomming2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'saifulislam', '1001061@daffodil.ac', '202cb962ac59075b964b07152d234b70'),
(2, 'user1', 'user1@gmail.com', '24c9e15e52afc47c225b757e7bee1f9d'),
(3, 'user2', 'user2@gmail.com', '7e58d63b60197ceb55a1c487989a3720'),
(4, 'user3', 'user3@gmail.com', '92877af70a45fd6a2ed7fe81e1236b78'),
(5, 'user4', 'user4@gmail.com', '3f02ebe3d7929b091e3d8ccfde2f3bc6'),
(6, 'user6', 'user6@gmail.com', 'affec3b64cf90492377a8114c86fc093'),
(7, 'saifulislam', 'gamingsaiful38@gmail.com', '202cb962ac59075b964b07152d234b70'),
(8, 'test', 'test@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `view_counter`
--

CREATE TABLE `view_counter` (
  `id` int(10) NOT NULL,
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `view_counter`
--

INSERT INTO `view_counter` (`id`, `ip_address`) VALUES
(337, '::1'),
(338, '::1'),
(339, '::1'),
(340, '::1'),
(341, '::1'),
(342, '::1'),
(343, '::1'),
(344, '::1'),
(345, '::1'),
(346, '::1'),
(347, '::1'),
(348, '127.0.0.1'),
(349, '127.0.0.1'),
(350, '127.0.0.1'),
(351, '127.0.0.1'),
(352, '127.0.0.1'),
(353, '127.0.0.1'),
(354, '127.0.0.1'),
(355, '127.0.0.1'),
(356, '127.0.0.1'),
(357, '127.0.0.1'),
(358, '127.0.0.1'),
(359, '127.0.0.1'),
(360, '127.0.0.1'),
(361, '127.0.0.1'),
(362, '127.0.0.1'),
(363, '127.0.0.1'),
(364, '127.0.0.1'),
(365, '127.0.0.1'),
(366, '127.0.0.1'),
(367, '::1'),
(368, '::1'),
(369, '::1'),
(370, '::1'),
(371, '::1'),
(372, '::1'),
(373, '::1'),
(374, '::1'),
(375, '::1'),
(376, '::1'),
(377, '::1'),
(378, '::1'),
(379, '::1'),
(380, '::1'),
(381, '::1'),
(382, '::1'),
(383, '::1'),
(384, '::1'),
(385, '::1'),
(386, '::1'),
(387, '::1'),
(388, '::1'),
(389, '::1'),
(390, '::1'),
(391, '::1'),
(392, '::1'),
(393, '::1'),
(394, '::1'),
(395, '::1'),
(396, '::1'),
(397, '::1'),
(398, '::1'),
(399, '::1'),
(400, '::1'),
(401, '::1'),
(402, '::1'),
(403, '::1'),
(404, '::1'),
(405, '::1'),
(406, '::1'),
(407, '::1'),
(408, '::1'),
(409, '::1'),
(410, '::1'),
(411, '::1'),
(412, '::1'),
(413, '::1'),
(414, '::1'),
(415, '::1'),
(416, '::1'),
(417, '::1'),
(418, '::1'),
(419, '::1'),
(420, '::1'),
(421, '::1'),
(422, '::1'),
(423, '::1'),
(424, '::1'),
(425, '::1'),
(426, '::1'),
(427, '::1'),
(428, '::1'),
(429, '::1'),
(430, '::1'),
(431, '::1'),
(432, '::1'),
(433, '::1'),
(434, '::1'),
(435, '::1'),
(436, '::1'),
(437, '::1'),
(438, '::1'),
(439, '::1'),
(440, '::1'),
(441, '::1'),
(442, '::1'),
(443, '::1'),
(444, '::1'),
(445, '::1'),
(446, '::1'),
(447, '::1'),
(448, '::1'),
(449, '::1'),
(450, '::1'),
(451, '::1'),
(452, '::1'),
(453, '127.0.0.1'),
(454, '::1'),
(455, '::1'),
(456, '::1'),
(457, '::1'),
(458, '::1'),
(459, '::1'),
(460, '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempt`
--
ALTER TABLE `login_attempt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcomming_camping`
--
ALTER TABLE `upcomming_camping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `view_counter`
--
ALTER TABLE `view_counter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `login_attempt`
--
ALTER TABLE `login_attempt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `upcomming_camping`
--
ALTER TABLE `upcomming_camping`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `view_counter`
--
ALTER TABLE `view_counter`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=461;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
