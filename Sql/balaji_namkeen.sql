-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4306
-- Generation Time: Oct 09, 2025 at 02:42 PM
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
-- Database: `balaji namkeen`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcart`
--

CREATE TABLE `addcart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addcart`
--

INSERT INTO `addcart` (`id`, `product_id`, `user_id`) VALUES
(71, 28, 0),
(72, 28, 0),
(74, 29, 7),
(75, 29, 7),
(76, 27, 8),
(77, 28, 8),
(78, 31, 9),
(79, 40, 10),
(84, 42, 11),
(85, 45, 11),
(86, 37, 11),
(87, 37, 13),
(88, 38, 11);

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`email`, `password`) VALUES
('pjala@2006', '2006'),
('vicky@285.com', 'vic@285');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `full_name`, `email`, `phone`, `subject`, `message`) VALUES
(1, '', 'vikas123@gmail.com', '99999999999', 'no only testing', ''),
(2, 'vikas', 'vikass@123gmail.com', '9376092952', 'required biggest order discount', 'my name is vikas '),
(3, 'vikas', 'fnawjghaceng@gmail.com', '9376092952', 'no', 'no'),
(4, 'jala', 'Vic123@gamil.com', '8780628273', 'nsdvhs', 'rvngjwoe');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_form`
--

CREATE TABLE `enquiry_form` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `product` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry_form`
--

INSERT INTO `enquiry_form` (`id`, `name`, `email`, `phone`, `product`, `message`) VALUES
(1, 'vikas', 'vicky@285.com', '75667965755', 'Wafers', 'no test'),
(4, 'Ramesh Patel', 'ramesh.patel@example.com', '9876543210', 'Wafers', 'Looking for bulk order of wafers for my shop.'),
(5, 'Priya Sharma', 'priya.sharma@example.com', '9823456789', 'Namkeen Mix', 'Need 50 packets for a family function.'),
(6, 'Amit Joshi', 'amitjoshi12@example.com', '7896541230', 'Chana Jor Garam', 'Please share wholesale rates.'),
(7, 'Sneha Mehta', 'sneha.mehta@example.com', '9988776655', 'Wafers', 'Interested in potato wafers distribution.'),
(8, 'Rajiv Kumar', 'rajiv.kumar@example.com', '9123456789', 'Namkeen Mix', 'Do you provide customized packaging?'),
(9, 'Kavita Desai', 'kavita.desai@example.com', '9345678123', 'Chana Jor Garam', 'Need regular supply for my restaurant.'),
(10, 'Manoj Verma', 'manojv@example.com', '9012345678', 'Wafers', 'Want to try sample pack before bulk order.'),
(11, 'Anjali Singh', 'anjali.singh@example.com', '9871203456', 'Namkeen Mix', 'Kindly provide price list with delivery details.'),
(25, 'sanket jethava ', 'sanket@gmail.com', '6351711705', 'Select Product', ''),
(26, 'vishal', 'vishal@gmail.com', '9909480118', 'Namkeen Mix', 'htehtrdt');

-- --------------------------------------------------------

--
-- Table structure for table `login_users`
--

CREATE TABLE `login_users` (
  `id` int(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_users`
--

INSERT INTO `login_users` (`id`, `name`, `email`, `password`, `phone`) VALUES
(3, 'vikas', 'vicky@285.com', '$2y$10$ZqAxvzuiFuru/tcgMIgBeOpKvYD/koCOZRTp7ryQ6jDxyoiw0ck6G', '99999999999'),
(4, 'Vicky ', 'Vic123@gamil.com', '$2y$10$r0BajyzQC2BP8A2jNWGwNOkW0N2eqI.mzQ4s9ihWSGu4aDC4zblly', 'vik'),
(5, 'vikas', 'pjala@2006', '$2y$10$WiYzs0dn3gLYkbj23WT0X.L5Qw0aU10NaSnrFkLoiQGypkByBm3a6', '9376092952'),
(6, 'priyank', 'fnawjghaceng@gmail.com', '$2y$10$DrvFsDAMf7THcvgA2CM/SesFZrnIEzgIO3MmzqrOue1M21lrKizBm', '8780628273'),
(7, 'sujal', 'sss@123', '$2y$10$nDR/aHRUKSE2q7QRlPa//unQyiR8pvdZlAiJ6B3zwi0mVkx9e4a/a', '1234567890'),
(8, 'krish', 'krish@gmail.com', '$2y$10$ZQ2Guu3QvW8VCzFjfYkjZegkObzRaUErXm22cDLxD.Y0/hKcbwfSG', '1234567890'),
(9, 'rutvik', 'rutvik@gmail.com', '$2y$10$4fkcHReMsCm/LMRAIwbQxOlnHdU/Vpxsle3K2MqqD4ctN2iIzwNKq', '9999999999'),
(10, 'sanket jethava ', 'sanket@gmail.com', '$2y$10$AFy2DEJzLijrSpjsCGhOJ.s4MQL79UIU2wF6HeDB33Sk2zqB/FxVW', '6351711705'),
(11, 'vishal', 'vishal@gmail.com', '098', '9909480118'),
(12, 'sujal', 'sujal@gamail.com', '222', '9909480118'),
(13, 'ansh', 'ansh@gmail.com', '17911', '9674567364');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `name`, `phone`, `address`, `quantity`, `order_date`) VALUES
(1, 11, 38, 'vishal', '9909480118', 'asddfswgsw', 1, '2025-09-10 00:36:20'),
(2, 11, 42, 'sanket jethava ', '6351711705', 'sfsegs', 1, '2025-09-10 00:43:54');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `p_img` varchar(255) NOT NULL,
  `p_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_name`, `p_price`, `p_img`, `p_desc`) VALUES
(36, 'Masala_masti_wafer', '40', 'Crunchem__Masala_Masti_Wafers.jpg', 'WAFER'),
(37, 'Simply Salted Wafer', '40', 'IMG-20250804-WA0008.jpg', 'WAFER'),
(38, 'Tomato Twist Wafer', '40', 'IMG-20250804-WA0013.jpg', 'WAFER'),
(39, 'Cream & Onion Wafer', '40', 'IMG-20250804-WA0017.jpg', 'WAFER'),
(40, 'Peri Peri Wafer', '40', 'IMG-20250804-WA0019.jpg', 'WAFER'),
(41, 'Chat Chaska Wafer', '40', 'IMG-20250804-WA0011.jpg', 'WAFER'),
(42, 'Chataka Pataka Masala', '10', 'Chataka_Pataka_Masala_Masti_Carousal.webp', 'NAMKEEN'),
(43, 'Chataka Pataka Tangy Tomato', '10', 'Chataka_Pataka_Tangy_Tomato_Carousal_01_c3441f0c-bbc3-4ade-9fe3-79114c2f72bc.jpg', 'NAMKEEN'),
(44, 'Sev_Murmura', '10', 'Sev_Murmura.jpg', 'NAMKEEN'),
(45, 'Masala_Sev_Murmura', '10', 'Masala_Sev_Murmura.jpg', 'NAMKEEN'),
(46, 'Chana_Jor_Garam', '10', 'Chana_Jor_Garam1.jpg', 'NAMKEEN MIX'),
(47, 'Katak_Batak_Mix', '10', 'IMG-20250804-WA0005.jpg', 'NAMKEEN MIX'),
(48, 'PopRing_Cheese_Chili', '40', 'PopRings_Cheese_Chilli.jpg', 'NAMKEEN MIX');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `staff_id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `city_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `staff_id`, `name`, `mobile`, `city_code`) VALUES
(11, 'STF101', 'Amit Sharma', '9876543210', 'DEL01'),
(12, 'STF102', 'Priya Verma', '9123456780', 'MUM02'),
(13, 'STF103', 'Rohit Singh', '9988776655', 'AHD01'),
(14, 'STF104', 'Neha Patel', '9012345678', 'BPL03'),
(15, 'STF105', 'Vikas Kumar', '9098765432', 'DEL02'),
(16, 'STF106', 'Sneha Joshi', '9345678901', 'MUM01'),
(17, 'STF107', 'Arjun Mehta', '9234567890', 'AHD02'),
(18, 'STF108', 'Kavita Rani', '9456789012', 'PUN01'),
(19, 'STF109', 'Suresh Yadav', '9786543210', 'KOL01'),
(20, 'STF110', 'Meena Desai', '9654321876', 'CHN01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcart`
--
ALTER TABLE `addcart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry_form`
--
ALTER TABLE `enquiry_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_users`
--
ALTER TABLE `login_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
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
-- AUTO_INCREMENT for table `addcart`
--
ALTER TABLE `addcart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enquiry_form`
--
ALTER TABLE `enquiry_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `login_users`
--
ALTER TABLE `login_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
