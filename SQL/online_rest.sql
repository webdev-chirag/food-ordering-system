-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2022 at 01:02 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_rest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `username`, `password`, `email`, `code`, `date`) VALUES
(6, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'admin@gmail.com', '', '2018-04-09 07:36:18'),
(8, 'abc888', '6d0361d5777656072438f6e314a852bc', 'abc@gmail.com', 'QX5ZMN', '2018-04-13 18:12:30');

-- --------------------------------------------------------

--
-- Table structure for table `admin_codes`
--

CREATE TABLE `admin_codes` (
  `id` int(222) NOT NULL,
  `codes` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_codes`
--

INSERT INTO `admin_codes` (`id`, `codes`) VALUES
(1, 'QX5ZMN'),
(2, 'QFE6ZM'),
(3, 'QMZR92'),
(4, 'QPGIOV'),
(5, 'QSTE52'),
(6, 'QMTZ2J');

-- --------------------------------------------------------

--
-- Table structure for table `card_payment`
--

CREATE TABLE `card_payment` (
  `id` int(10) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zipcode` int(10) NOT NULL,
  `nameoncard` varchar(50) NOT NULL,
  `cardnumber` int(20) NOT NULL,
  `expmonth` varchar(30) NOT NULL,
  `expyear` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `card_payment`
--

INSERT INTO `card_payment` (`id`, `fullname`, `email`, `address`, `city`, `state`, `zipcode`, `nameoncard`, `cardnumber`, `expmonth`, `expyear`) VALUES
(1, 'chirag', 'chirag@abc.com', 'DFDFFDDF', 'DAFSDSDS', 'DFSDSDS', 6, 'chirag', 2147483647, 'MAY', 2020),
(2, 'chirag', 'cp135116@gmail.com', 'DFDFFDDF', 'DAFSDSDS', 'DFSDSDS', 6, 'chirag', 2147483647, 'MAY', 2020),
(3, 'chirag', 'cp135116@gmail.com', 'DFDFFDDF', 'DAFSDSDS', 'DFSDSDS', 6, 'chirag', 2147483647, 'MAY', 2020),
(4, 'chirag', 'chirag@abc.com', 'DFDFFDDF', 'DAFSDSDS', 'DFSDSDS', 6, 'chirag', 2147483647, 'may', 2020),
(5, 'chirag', 'chirag@abc.com', 'DFDFFDDF', 'DAFSDSDS', 'DFSDSDS', 6, 'chirag', 2147483647, 'may', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `d_id` int(222) NOT NULL,
  `rs_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `slogan` varchar(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`d_id`, `rs_id`, `title`, `slogan`, `price`, `img`) VALUES
(11, 48, 'Veg Mushroom', 'Veg Mushroom is such a super delicious dish of Mushroom, onions, bell peppers in a spiced, tangy tomato sauce.', '557.00', '5ad7582e2ec9c.jpg'),
(12, 48, 'Dal Makhani', 'Dal Makhani is one of the popular lentil recipes from north Indian Punjabi cuisine made with Kaali dal and Rajma.', '212.00', '5ad7590d9702b.jpg'),
(13, 49, 'Masala Dosa', 'Masala dosa is a popular South Indian dish where a crispy crepe rice and lentil batter is served with flavorful spiced potato curry.', '235.00', '5ad7597aa0479.jpg'),
(14, 50, 'Shahi Paneer', 'Shahi Paneer is a Mughlai dish where paneer is cooked in a creamy gravy made of onions, yogurt, nut and seeds.', '349.00', '5ad759e1546fc.jpg'),
(15, 51, 'Egg Biryani ', 'Fragrant basmati rice cooked with aromatic biryani spices, herbs & boiled eggs to yield a delicious one egg biryani', '199.00', '5ad75a1869e93.jpg'),
(16, 52, 'Gulab Jamun', 'Gulab jamun is classic Indian sweet made with milk solids, sugar, rose water & cardamom powder. It is a very famous Indian dessert.', '255.00', '5ad75a5dbb329.jpg'),
(17, 53, 'Manchow soup', 'Chinese vegetarian soup made with mixed vegetables, garlic, ginger, soya sauce, ground pepper & a few other pantry ingredients.', '179.00', '5ad79fcf59e66.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `remark`
--

CREATE TABLE `remark` (
  `id` int(11) NOT NULL,
  `frm_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `remarkDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remark`
--

INSERT INTO `remark` (`id`, `frm_id`, `status`, `remark`, `remarkDate`) VALUES
(62, 32, 'in process', 'hi', '2018-04-18 17:35:52'),
(63, 32, 'closed', 'cc', '2018-04-18 17:36:46'),
(64, 32, 'in process', 'fff', '2018-04-18 18:01:37'),
(65, 32, 'closed', 'its delv', '2018-04-18 18:08:55'),
(66, 34, 'in process', 'on a way', '2018-04-18 18:56:32'),
(67, 35, 'closed', 'ok', '2018-04-18 18:59:08'),
(68, 37, 'in process', 'on the way!', '2018-04-18 19:50:06'),
(69, 37, 'rejected', 'if admin cancel for any reason this box is for remark only for buter perposes', '2018-04-18 19:51:19'),
(70, 37, 'closed', 'delivered success', '2018-04-18 19:51:50');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `rs_id` int(222) NOT NULL,
  `c_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `url` varchar(222) NOT NULL,
  `o_hr` varchar(222) NOT NULL,
  `c_hr` varchar(222) NOT NULL,
  `o_days` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`rs_id`, `c_id`, `title`, `email`, `phone`, `url`, `o_hr`, `c_hr`, `o_days`, `address`, `image`, `date`) VALUES
(48, 5, 'Octant   Pizza', 'octentpizza@gmail.com', ' 090412 64676', 'octantpizza.com', '7am', '4pm', 'mon-tue', 'Vrundavan mall, Parivar cross road, Waghodiya Rd, Vadodara', '5ad74ce37c383.jpg', '2022-08-11 10:51:37'),
(49, 5, 'Peswari Restaurant ', 'peswari@gmail.com', '011 2677 9070', 'peswarirestaurant.com', '6am', '5pm', 'mon-fri', 'WelcomHotel, RC Dutt Rd, Alkapuri, Vadodara', '5ad74de005016.jpg', '2022-08-11 10:43:01'),
(50, 6, 'Bayleaf Multi Cuisine Restaurant ', 'bayleaf@gmail.com', '090410 35147', 'bayleaf.com', '6am', '6pm', 'mon-sat', 'Alkapuri Society,Alkapuri,vadodara', '5ad74e5310ae4.jpg', '2022-08-11 10:38:07'),
(51, 7, 'Mirch Masala', 'mirchmasala@gmail.com', '3454345654', 'mirchmasala.com', '8am', '4pm', 'mon-thu', 'Subhanpura Rd, Gorwa, Vadodara', '5ad74ebf1d103.jpg', '2022-08-11 10:38:52'),
(52, 8, 'Sheesh Mahal', 'sheeshmahal@gmail.com', '2345434567', 'sheeshmahal.com', '6am', '7pm', 'mon-fri', 'Atlantis Heights, Shree Vikram Sarabhai Marg, Nr,Genda Cir, Vadiwadi, Vadodara', '5ad756f1429e3.jpg', '2022-08-11 10:41:19'),
(53, 9, 'Hariyali Hotel', 'hotelhariyali@gmail.com', '4512545784', 'hariyalihotel.com', '7am', '7pm', 'mon-sat', 'Vrundavan Heights Near Parivar Char Rasta, Waghodiya Rd, Vadodara', '5ad79e7d01c5a.jpg', '2022-08-11 10:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `res_category`
--

CREATE TABLE `res_category` (
  `c_id` int(222) NOT NULL,
  `c_name` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_category`
--

INSERT INTO `res_category` (`c_id`, `c_name`, `date`) VALUES
(5, 'grill', '2018-04-14 18:45:28'),
(6, 'pizza', '2018-04-14 18:44:56'),
(7, 'pasta', '2018-04-14 18:45:13'),
(8, 'thaifood', '2018-04-14 18:32:56'),
(9, 'fish', '2018-04-14 18:44:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `f_name` varchar(222) NOT NULL,
  `l_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `status` int(222) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `address`, `status`, `date`) VALUES
(33, 'chirag', 'chirag', 'parmar', 'cp135116@gmail.com', '67890', '25d55ad283aa400af464c76d713c07ad', 'dsfdgfhgfdsa', 1, '2022-08-10 07:18:34');

-- --------------------------------------------------------

--
-- Table structure for table `users_orders`
--

CREATE TABLE `users_orders` (
  `o_id` int(222) NOT NULL,
  `u_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `quantity` int(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(222) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_orders`
--

INSERT INTO `users_orders` (`o_id`, `u_id`, `title`, `quantity`, `price`, `status`, `date`) VALUES
(37, 31, 'jklmno', 5, '179.00', 'closed', '2022-08-03 17:07:49'),
(38, 31, 'Red Robins Chick on a Stick', 2, '349.00', NULL, '2022-08-03 17:08:00'),
(52, 33, 'Dal Makhani', 2, '212.00', NULL, '2022-08-10 07:52:27'),
(53, 33, 'Dal Makhani', 2, '212.00', NULL, '2022-08-10 07:54:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `admin_codes`
--
ALTER TABLE `admin_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_payment`
--
ALTER TABLE `card_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `remark`
--
ALTER TABLE `remark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`rs_id`);

--
-- Indexes for table `res_category`
--
ALTER TABLE `res_category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `users_orders`
--
ALTER TABLE `users_orders`
  ADD PRIMARY KEY (`o_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin_codes`
--
ALTER TABLE `admin_codes`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `card_payment`
--
ALTER TABLE `card_payment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `d_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `remark`
--
ALTER TABLE `remark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `rs_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `res_category`
--
ALTER TABLE `res_category`
  MODIFY `c_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users_orders`
--
ALTER TABLE `users_orders`
  MODIFY `o_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
