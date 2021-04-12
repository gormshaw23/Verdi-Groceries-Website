-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2021 at 09:39 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `verdi`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(3) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_link` varchar(255) NOT NULL,
  `product_img` text NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `prod_price_calc_p4` varchar(255) NOT NULL,
  `product_facts` text NOT NULL,
  `product_inventory` varchar(255) NOT NULL,
  `product_qty` varchar(255) NOT NULL,
  `product_addToCart_P3` varchar(255) NOT NULL,
  `product_id_p4` varchar(255) NOT NULL,
  `product_add_p4` varchar(255) NOT NULL,
  `product_data_p4` varchar(255) NOT NULL,
  `product_delete_p4` varchar(255) NOT NULL,
  `product_remove_p4` varchar(255) NOT NULL,
  `product_total_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_link`, `product_img`, `product_price`, `prod_price_calc_p4`, `product_facts`, `product_inventory`, `product_qty`, `product_addToCart_P3`, `product_id_p4`, `product_add_p4`, `product_data_p4`, `product_delete_p4`, `product_remove_p4`, `product_total_price`) VALUES
(22, 'Chicken', 'P3_php.php', 'mac-miller-copy-ig.png', '$14.29/kg', '14.29', 'If you are looking to build and maintain muscle mass and stregthen your bones, this product is for you! Chicken breast is a great source of lean protein, contains zero carbs and has a very small amount of fat!  \r\nHELLO      ', '89', 'breastqty', 'addToCartBreast()', 'breast', 'addBreast()', 'breastData', 'deleteBreast()', 'removeBreast()', 'breastTotalPrice'),
(31, 'Beans', '', 'mac-miller-copy1.png', '$2.49/can', '', 'boi', '56', '', '', '', '', '', '', '', ''),
(32, 'Corn', '', 'Boiled-Corn-on-the-Cob-500x500.jpg', '1.99$/lb', '', 'hello   ', '89', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `extra` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `extra`) VALUES
(1, 'therealbatman', 'joker123', 'Bruce', 'Wayne', 'batman.inquiry@gmail.com', '', 'admin', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
