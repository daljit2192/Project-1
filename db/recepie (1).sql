-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 03:40 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recepie`
--
CREATE DATABASE IF NOT EXISTS `recepie` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `recepie`;

-- --------------------------------------------------------

--
-- Table structure for table `food_type`
--

CREATE TABLE `food_type` (
  `id` int(100) NOT NULL,
  `type_name` varchar(100) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `image_path` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_type`
--

INSERT INTO `food_type` (`id`, `type_name`, `image_name`, `image_path`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Gujrati', 'gujrati.jpg', 'images\\foodtype', '2020-11-22 15:40:50', '2020-11-22 15:40:50', '2020-11-22 15:40:50'),
(2, 'Punjabi', 'punjabi.jpg', 'images\\foodtype', '2020-11-22 15:41:02', '2020-11-22 15:41:02', '2020-11-22 15:41:02'),
(3, 'South Indian', 'southindian.jpg', 'images\\foodtype', '2020-11-22 15:41:14', '2020-11-22 15:41:14', '2020-11-22 15:41:14');

-- --------------------------------------------------------

--
-- Table structure for table `recepie`
--

CREATE TABLE `recepie` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `user_id` int(100) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `image_path` varchar(100) NOT NULL,
  `food_type_id` int(100) NOT NULL,
  `rating` float NOT NULL DEFAULT 5,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recepie`
--

INSERT INTO `recepie` (`id`, `name`, `description`, `user_id`, `image_name`, `image_path`, `food_type_id`, `rating`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 'Halwaa', 'It’s just a simple dessert but here are few things you need to keep in mind while making sooji halwa.\r\n\r\nGetting the ratio right: back home, I have often heard this from people that for making the best sooji halwa, use same amount of ghee, sugar and sooji and double the water.\r\n\r\nNow that might seem like a lot of ghee but it does really make the best halwa.\r\n\r\nFor this recipe, I do use same amount (1/2 cup) of ghee and sooji. I slightly cut down on the sugar and use 1/3 cup.\r\n\r\nYou can very well 1/2 cup so then it will be 1/2 cup of each ingredient.\r\n\r\nI use 3 times the water since I like my halwa more on the softer side. And I don’t do 100% water but rather 50% milk and 50% water for a creamier halwa.\r\n\r\nRoast the sooji until fragrant: the most important step! If you don’t roast the sooji properly, the halwa will have raw taste.\r\n\r\nI don’t like to brown my sooji for the halwa. So I roast it on low heat, stirring continuously until it’s nice and fragrant.\r\n\r\nIt takes around 8 to 9 minutes for it to roast on low heat.', 5, 'Sooji-Halwa-Suji-Halwa.jpg', '../images/recepies/', 2, 2.5, '2020-11-29 02:10:31', '2020-11-29 02:10:31', '2020-11-29 02:10:31'),
(12, 'Daliaaa', 'Wash Bulgur wheat / Daliya 2-3 times and drain the water.\r\nTurn on Saute Button, heat oil, add cumin seeds, ginger and garlic. Saute for few seconds.\r\nNow add all the chopped vegetables, washed daliya/Bulgur wheat, salt, chili powder, turmeric powder and water. Stir well.\r\nTurn off the saute mode, close the lid, Press the manual button. Set the time for 6 minutes under high pressure with pressure valve set to sealing.\r\nWhen cooking time is complete, do a quick release of the pressure.\r\nWhen the pressure is fully released, the float valve will drop and the lid will unlock to open. Now it is safe to open the lid.\r\nOpen and give a gentle stir with fork.\r\nNow add chopped cilantro, mint and lemon juice. Give it a gentle mix.\r\nDaliya is ready. Serve it with Cucumber Raita, Boondi Raita or Plain curd/yogurt.', 5, 'veg-dalia.jpg', '../images/recepies/', 2, 4, '2020-11-29 02:20:39', '2020-11-29 02:20:39', '2020-11-29 02:20:39'),
(14, 'Poha', '1- To a strainer, add flattened rice (poha). Rinse it under running water until it turns soft.\r\n\r\n2- To check if it’s done, press a flake between your thumb and index finger, it should break easily.\r\n\r\n3- Add turmeric and 1/2 teaspoon salt to the poha and toss to combine. Set it aside while you make the tempering in the pan.\r\n\r\n4- Heat oil in a pan on medium heat. Once the oil is hot, add the mustard seeds and let them pop.', 5, 'Aloo-Poha-notitle-cwm.jpg', '../images/recepies/', 2, 5, '2020-11-29 05:21:06', '2020-11-29 05:21:06', '2020-11-29 05:21:06'),
(16, 'testt', 'here', 5, 'Aloo-Poha-notitle-cwm.jpg', '../images/recepies/', 3, 5, '2020-11-30 02:32:10', '2020-11-30 02:32:10', '2020-11-30 02:32:10');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(100) NOT NULL,
  `slider_image` varchar(100) NOT NULL,
  `slider_image_path` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_image`, `slider_image_path`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'sl1.jpg', 'images/', '2020-11-29 04:47:26', '2020-11-29 04:47:26', '2020-11-29 04:47:26'),
(2, 'sl2.jpg', 'images/', '2020-11-29 04:47:26', '2020-11-29 04:47:26', '2020-11-29 04:47:26'),
(4, 'sl3.jpg', 'images/', '2020-11-29 04:47:33', '2020-11-29 04:47:33', '2020-11-29 04:47:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'Daljit', 'Singh', 'daljit@yahoo.com', '698d51a19d8a121ce581499d7b701668', '2020-11-18 03:08:11', '2020-11-18 03:08:11', '2020-11-18 03:08:11'),
(9, 'Aman', 'Singh', 'aman@yahoo.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '2020-11-30 02:30:22', '2020-11-30 02:30:22', '2020-11-30 02:30:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food_type`
--
ALTER TABLE `food_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recepie`
--
ALTER TABLE `recepie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `food_type_id` (`food_type_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
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
-- AUTO_INCREMENT for table `food_type`
--
ALTER TABLE `food_type`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `recepie`
--
ALTER TABLE `recepie`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `recepie`
--
ALTER TABLE `recepie`
  ADD CONSTRAINT `recepie_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
