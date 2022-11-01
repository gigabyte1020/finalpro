-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2022 at 06:55 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tt2`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(25) NOT NULL,
  `user_id` int(25) NOT NULL,
  `rent_id` int(25) NOT NULL,
  `host_id` int(25) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `conf_book` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `rent_id`, `host_id`, `from_date`, `to_date`, `conf_book`) VALUES
(18, 14, 36, 15, '2022-10-03', '2022-10-21', 0),
(24, 34, 38, 31, '2022-10-01', '2022-10-14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `filename`) VALUES
(1, 'schtq.png'),
(2, ''),
(3, ''),
(4, ''),
(5, ''),
(6, '95dd1933a1ae091396ff56be1a0e6126.jpg'),
(7, ''),
(8, ''),
(9, ''),
(10, ''),
(11, '95dd1933a1ae091396ff56be1a0e6126.jpg'),
(12, '95dd1933a1ae091396ff56be1a0e6126.jpg'),
(13, '95dd1933a1ae091396ff56be1a0e6126.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `rent_id` int(11) NOT NULL,
  `rent_hostid` int(11) NOT NULL,
  `rent_name` varchar(25) NOT NULL,
  `rent_img` varchar(255) NOT NULL,
  `rent_detail` varchar(255) NOT NULL,
  `rent_price` int(11) NOT NULL,
  `rent_summary` varchar(255) NOT NULL,
  `rent_rules` varchar(255) NOT NULL,
  `rent_add` varchar(255) NOT NULL,
  `rent_latln` varchar(255) NOT NULL,
  `rent_approv` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`rent_id`, `rent_hostid`, `rent_name`, `rent_img`, `rent_detail`, `rent_price`, `rent_summary`, `rent_rules`, `rent_add`, `rent_latln`, `rent_approv`) VALUES
(36, 15, 'Root Farms Pvt Cottage', '95dd1933a1ae091396ff56be1a0e6126.jpg', 'This is a standalone farm stay with a private garden , terrace, river view and located in a 3 acre farm. Enjoy the tranquility of a farmstay while also being close to popular destinations. We are 5 mins away from Sula wines and about 20 minutes from Nashi', 2500, 'Root Farms, is located on the river front & is right next to York Winery. ', 'wifi,pets,park,', 'Nashik, Maharashtra, India', 'LatLng(20.012319, 73.810625)', 1),
(37, 16, 'House &amp; Home ', '3.jpg', 'The Heritage  water front house situated on the face of Nigeen Lake Kashmir offers the best location to stay in clean and peacefully environment with all facilities, one of the cleanest natural water lake well known for swimming, boating &amp; water skeei', 3000, 'Private room in home', 'park,pools,', 'Srinagar, India', 'LatLng(25.889072, 87.424531)', 0),
(38, 31, 'Avondale - Beautiful Heri', 'stl1.jpg', 'My place is close to great views, the golf course, and is in a private gated community. It is ideal for large groups, couples, families and folks who want a quiet time or want a private place to party. . You’ll love my place because of the coziness, the l', 18000, 'Entire villa hosted by Navin', 'wifi,pools,', 'Kodaikanal, Tamil Nadu, India', 'LatLng(10.2348, 77.494582)', 1),
(39, 33, 'Luxury Villa in Ugangda', 'istockphoto-1415886888-170667a.jpg', 'Looking for a luxury Villa in Patong Beach area?Villa infinity is one of the most luxury villa you can find with everything you need for aperfect time in Phuket.A lot space for you and your group in one of the best location in Patong.Pictures sayi', 25002, 'Welcome to Villa infinity in Patong. One of the most luxury villa in Patong.', 'wifi,pets,pools,', '\r\nPrivate outdoor pool – available all year, open 24 hours, infinity, saltwat', 'LatLng(8.521323, 76.929301)', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rent_feed`
--

CREATE TABLE `rent_feed` (
  `fdbk_id` int(255) NOT NULL,
  `rent_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `fdbk_det` varchar(255) NOT NULL,
  `approval` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rent_feed`
--

INSERT INTO `rent_feed` (`fdbk_id`, `rent_id`, `user_id`, `fdbk_det`, `approval`) VALUES
(6, 38, 32, 'feedback 1', 1),
(7, 38, 32, 'feedback 2', 1),
(8, 36, 32, 'ffdbk12', 1),
(9, 38, 31, '655', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_email`, `user_password`, `user_role`) VALUES
(13, 'admin', 'admin', '$2y$10$ZvWGKovbOpPNXZMYH3U.6eljlKO.LCBgWSBThIWMg6bTX5boMt0xK', 'admin'),
(14, ' Guest A', 'guest1@gmail.com', '$2y$10$vajxE9opVExopdbE5udC..SGhnmGNW44dO9AEQTQp0XZFdtfofRgm', 'guest'),
(15, 'Host A', 'host1@gmail.com', '$2y$10$uPJiXkjircTaCdz7IHrMGOdLvq8A6ehGvX0AGTvhBXHeRKY4eRcAi', 'host'),
(16, 'Host B', 'host2@gmail.com', '$2y$10$gfMygVOT/7sFF6DnVAYraeECEbcSBpv/CSIstFsvMReOdYw/OEDe2', 'host'),
(17, 'Ano ', 'user2@gmail.com', '$2y$10$JfI29CZ/V4IPMXwnfcmFXedfgm0iUI.2MswnJjPmB2mOa1XZQXjwe', 'guest'),
(18, 'Ano ', 'user2@gmail.com', '$2y$10$GgFm7kl7AOpS/2ilSJDn4.39vUw9ShPwnU31nTgxb8nhvNXca1AzC', 'guest'),
(19, 'Ano ', 'guest3@gmail.com', '$2y$10$1vKeGHvndM2ahPxz0HFGn.3yoK2SFJtYvErPjLFrYHyKlimsKFvNK', 'guest'),
(28, 'us', 'us@gmail.com', '$2y$10$g/3qsaZC3tBVWgkOJCuq8e3o5eTSWcDY6p9E5Jd3KZc.uxc0giyqG', 'guest'),
(29, 'us1', 'us1@gmail.com', '$2y$10$5rFw7gZ9AiZwCODfj2hazuPCIcDTWMUI3xHDkdDJ307WMnqBRH.ES', 'guest'),
(30, 'us3', 'us3@gmail.com', '$2y$10$yMz53fQaGDdCCvQjcZHG5.X4ERXz8.Riqdge1glKmcoFR4AhZdHL.', 'guest'),
(31, 'dhost', 'dhost@gmail.com', '$2y$10$8neZnJaOB9Kym3CszqKL1eNk6X5hm0prr2sTipUQ6yY.AhVqK491.', 'host'),
(32, 'duser', 'duser@gmail.com', '$2y$10$B/aYFLRXGb2jXBSXgB3dl.48EgVilDOWsuCXz.jeHr/viWY3E85Xu', 'guest'),
(33, 'Host C', 'host7@gmail.com', '$2y$10$JJyIRym75GTO5A0v9HwuauygISlyBFwc3QQTq9fXqDD.SgFdWT1BS', 'host'),
(34, 'rash', 'rash@gmail.com', '$2y$10$JYCzlmFU/.jCO2yfhIbpXeiFI1k93lC.aMn.C1U1oOVMyGyiuDmJG', 'guest'),
(35, '6', '6@h.g', '$2y$10$tWx0hL/8leAmPB3N56i.yeL87fyShKKwQQ/2oQ1283A5uDbFezziG', ''),
(36, '57', '57@e.c', '$2y$10$waDDVfWd7LVZ/cLRpPyq8uuJ.l1pbIcook6KJajVsph7uf1Bn1c.2', ''),
(37, 'rrr', 'rrr@d.c', '$2y$10$L/ddgdHQy0tfRjM9gNURweM8i1VPj623uQPDchkwFVOmbifIJwpD.', ''),
(38, '3', '3@d.c', '$2y$10$Xg9Pv0nmoOUInoXDu03tH.B0FOkNy4o4rpH2fu6UYIk7RP5TpkGCO', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_prof`
--

CREATE TABLE `user_prof` (
  `prof_id` int(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pno` varchar(255) NOT NULL,
  `user_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_prof`
--

INSERT INTO `user_prof` (`prof_id`, `user_id`, `user_name`, `user_email`, `user_pno`, `user_img`) VALUES
(1, '15', 'ost', 'ahost1@gmail.com', '44444', 'favicon.png'),
(7, '30', 'us3', 'us3@gmail.com', '', 'blnk.jpg'),
(8, '14', 'sttt', 'guest1@gmail.com', '11111111111', 'ozqd94um43o51.jpg'),
(9, '31', 'dhost', 'dhost@gmail.com', '94440022444', 'aeecc22a67dac7987a80ac0724658493.jpg'),
(10, '32', 'duser', 'duser@gmail.com', '', 'blnk.jpg'),
(11, '33', 'San', 'san@gmail.com', '944040404040', '2.jpg'),
(12, '34', 'rash', 'rash@gmail.com', '', 'blnk.jpg'),
(13, '35', '6', '6@h.g', '', 'blnk.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`rent_id`),
  ADD KEY `rent_hostid` (`rent_hostid`);

--
-- Indexes for table `rent_feed`
--
ALTER TABLE `rent_feed`
  ADD PRIMARY KEY (`fdbk_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_prof`
--
ALTER TABLE `user_prof`
  ADD PRIMARY KEY (`prof_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `rent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `rent_feed`
--
ALTER TABLE `rent_feed`
  MODIFY `fdbk_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user_prof`
--
ALTER TABLE `user_prof`
  MODIFY `prof_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
