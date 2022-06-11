-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Jun 11, 2022 at 07:38 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food-order`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `name`, `address`, `email`, `password`, `phone_no`, `gender`) VALUES
(1, 'Milan', 'Rolpa', 'm@gmail.com', '12345', 1234567890, 'male'),
(2, 'Neeru', 'NPJ', 'n@gmail.com', '1234', 1234567890, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `subject` varchar(45) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `phone_no`, `subject`, `message`) VALUES
(1, 'Neeru', 'n@gmail.com', 1234567890, 'need discount', 'I need extra discount on food'),
(6, 'Samikshya', 'Samu@gmail.com', 2147483647, 'about food', 'i need pizza with extea chees'),
(7, 'prashant kumar thakur', 'prashant@gmail.com', 2147483647, 'about food', 'food was so testy.'),
(8, 'Nirmala Dhungana', 'neerudhungana@gmail.com', 2147483647, 'about deliver charge', 'i want some discount '),
(11, 'Nirmala Dhungana', 'neeru@gmail.com', 2147483647, 'about food', 'i want some discount ');

-- --------------------------------------------------------

--
-- Table structure for table `manage_food`
--

CREATE TABLE `manage_food` (
  `food_id` int(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `quantity` varchar(45) NOT NULL,
  `price` int(45) NOT NULL,
  `picture` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manage_food`
--

INSERT INTO `manage_food` (`food_id`, `name`, `quantity`, `price`, `picture`) VALUES
(19, 'momo', '1 plate', 120, 'uplodedfood/momo.jpg'),
(20, 'Chowmin', '1 plate', 120, 'uplodedfood/chaumin.jpg'),
(21, 'Burger', 'Big size', 200, 'uplodedfood/burger.jpg'),
(22, 'Pizza', 'Medium size', 250, 'uplodedfood/pizza.jpg'),
(23, 'Salad', '1 plate', 180, 'uplodedfood/salad.jpg'),
(24, 'Katti_roll', '1 Roll', 250, 'uplodedfood/katti-roll.jpg'),
(25, 'Lassi', '1 Glass', 180, 'uplodedfood/sweet-lassi.jpg'),
(26, 'Cold Coffee', '1 Glass', 220, 'uplodedfood/cold-coffee.jpg'),
(27, 'Meurig', ' 1 plate', 500, 'uplodedfood/Meurig.jpg'),
(28, 'Meurig', ' 1 plate', 500, 'uplodedfood/Meurig.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` varchar(10) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_address` varchar(30) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_phone` varchar(10) NOT NULL,
  `total_price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_name`, `user_address`, `user_email`, `user_phone`, `total_price`) VALUES
('1-02-59-51', 'neeru dhungana', 'NPJ', 'neeru@gmail.com', '2147483647', 440),
('1-08-49-17', 'neeru dhungana', 'NPJ', 'neeru@gmail.com', '2147483647', 0),
('3-10-38-55', 'Anjana Dhungana', 'Kirtipur', 'anju@gmail.com', '2147483647', 440),
('3-11-33-13', 'Anjana Dhungana', 'Kirtipur', 'anju@gmail.com', '2147483647', 0),
('3-11-49-36', 'Anjana Dhungana', 'Kirtipur', 'anju@gmail.com', '2147483647', 0),
('4-12-09-58', 'Milan singh', 'Rolpa', 'milan@gmail.com', '2147483647', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `order_id` varchar(10) NOT NULL,
  `food_name` varchar(30) NOT NULL,
  `food_qty` int(10) NOT NULL,
  `food_price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`order_id`, `food_name`, `food_qty`, `food_price`) VALUES
('', 'Chowmin', 2, 120),
('', 'Burger', 1, 200),
('', 'Pizza', 3, 250),
('', 'Burger', 1, 200),
('', 'Pizza', 2, 250),
('3-10-38-55', 'Chowmin', 2, 120),
('3-10-38-55', 'Burger', 1, 200),
('1-02-59-51', 'Chowmin', 2, 120),
('1-02-59-51', 'Burger', 1, 200);

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `name`, `address`, `email`, `password`, `phone_no`, `gender`) VALUES
(1, 'neeru dhungana', 'NPJ', 'neeru@gmail.com', '12345', 2147483647, 'female'),
(2, 'Upendra Amgain', 'Kathmandu', 'upendra@gmail.com', '98765', 2147483647, 'male'),
(3, 'Anjana Dhungana', 'Kirtipur', 'anju@gmail.com', '000', 2147483647, 'female'),
(4, 'Milan singh', 'Rolpa', 'milan@gmail.com', '999', 2147483647, 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_food`
--
ALTER TABLE `manage_food`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `manage_food`
--
ALTER TABLE `manage_food`
  MODIFY `food_id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
