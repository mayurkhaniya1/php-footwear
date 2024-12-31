-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2022 at 12:56 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `footwear_db`
--
CREATE DATABASE IF NOT EXISTS `footwear_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `footwear_db`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Adidas'),
(2, 'Asics'),
(3, 'Bally'),
(4, 'Batta'),
(5, 'Lowcoste'),
(6, 'Nike');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `mobile`, `email`, `feedback`) VALUES
(1, 'shurti dhulashiya', '9853634567', 'shrutidhulashiya@gmail.com', 'They have the worst customer service I\'ve ever experienced in retail.'),
(2, 'reeya adroja ', '9832576145', 'reeyaadroja@gmail.com', 'Bought sandals & received only 1 sandal but at least my account was credited.'),
(3, 'shruti ghodasara', '9632457827', 'shrutighodasara@gmail.com', 'I bought Brooks athletic shoes. They were defective. '),
(4, 'vishva khirsariya', '9825455445', 'vishvakhirsariya@gmail.com', 'My search was for the best running shoes. '),
(5, 'itisha makadiya', '9523225582', 'itishamakadiya@gmail.com', 'Ordered a shoe from online bata. '),
(6, 'jashmin bhalodiya', '9823475624', 'jashminbhalodiya@gmail.com', 'I purchases a pair of shoes for my brother and myself also.'),
(7, 'pooja gangadiya', '8695421375', 'poojagangadiya@gmail.com', 'BATA is cheating customers with overpriced poor quality products.'),
(8, 'isvari patel', '9385247515', 'isvaripatel@gmail.com', 'Very low quality!! ????????Iâ€™ll never purchase from BATA again.'),
(9, 'vrunda padaliya', '8612478270', 'vrundapadaliya@gmail.com', 'I bought one of the costliest Woodland shoes available thinking that it would be comfortable and would last a ling time.'),
(10, 'vishva kansagara', '8612454214', 'vishvakansagara@gmail.com', 'I ordered a pair of shoes after my wife had used this website with good results.');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'shruti123', 'shruti123'),
(3, 'reeya', 'reeya'),
(4, 'shruti456', 'shruti456');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category`, `price`, `image`, `description`) VALUES
(1, 'Adidas_1	', 'Adidas', 1050, 'product/Adidas_1.jpg', 'Ultraboost Shoes Made With Recycled Materials.'),
(2, 'Adidas_2', 'Adidas', 990, 'product/Adidas_2.jpg', 'A Sandle For Everyday Wear.'),
(3, 'Asics_1', 'Asics', 850, 'product/Asics_1.jpg', 'A Lightweight Boot For Your Version Of Speed.'),
(4, 'Asics_2', 'Asics', 890, 'product/Asics_2.jpg', 'The PATRIOT shoe for kids is a versatile shoe with clean, fast designs.'),
(5, 'Bally_1', 'Bally', 1100, 'product/Bally_1.jpg', 'A new addition to the Lux Driver range, the Leyla style, here in light blue leather, makes for the ideal off-duty shoe.'),
(6, 'Bally_2', 'Bally', 750, 'product/Bally_2.jpg', 'We are successfully meeting the requirements of our clients by offering the best quality range of Ladies Belly sandal.'),
(7, 'Batta_1', 'Batta', 1090, 'product/Batta_1.jpg', 'Toddler Girl Sandals Flowers Baby Dresses Shoes Floral Children Sandals Girls Shoes Kids Summer Footwear Wholesale.'),
(8, 'Batta_2', 'Batta', 800, 'product/Batta_2.jpg', 'Ladies footwear multi brand store having a collection of footwear from the best brands across the globe.'),
(9, 'Lowcoste_1', 'Lowcoste', 600, 'product/Lowcoste_1.jpg', ' Its tennis-inspired cup sole construction and heritage court aesthetics, the carnaby evo showcases classic lacoste design features.'),
(10, 'Lowcoste_2', 'Lowcoste', 970, 'product/Lowcoste_2.jpg', 'The Croco Slide is a simple sandal designed for laid-back summer wear.'),
(11, 'Nike_1', 'Nike', 990, 'product/Nike_1.jpg', 'The Best Nike Shoes for Women on Zappos, According to Hyperenthusiastic Reviewers.'),
(12, 'Nike_2', 'Nike', 950, 'product/Nike_2.jpg', 'Nothing as fly, nothing as comfortable, nothing as proven.');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `itemid` int(11) NOT NULL,
  `itemname` varchar(50) NOT NULL,
  `itemprice` varchar(50) NOT NULL,
  `itemquantity` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `address`, `city`, `pincode`, `state`, `username`, `password`, `gender`, `mobile`, `email`, `dob`) VALUES
(1, 'Dhulashiya Shruti Mahesbhai', 'patel street-wanshjaliya', 'Jamnagar', '360531', 'Gujarat', 'shruti', 'shruti', 'Female', '8955124436', 'shrutidhulashiya @gmail.com', '7/1/2003'),
(2, 'Adroja Reeya Rajeshbhai', 'Nand Heights , Mahavir Road', 'Ahemedabad', '360004', 'Gujarat', 'reeya', 'reeya', 'Female', '9832576145', 'reeyaadroja@gmail.com', '4/11/2002'),
(3, 'Ghodasara Shruti Hareshbhai', 'Shree Krishna Apartment, Near Gandhi Road.', 'Keshod', '360045', 'Gujarat', 'shruti123', 'shruti123', 'Female', '9632457827', 'shrutighodasara@gmail.com', '17/7/2003'),
(4, 'Khirasariya Vishva Nileshbhai', 'Shilpan Onyex,Univercity Road', 'Rajkot', '360592', 'Gujarat', 'vishva', 'vishva', 'Female', '9825455445', 'vishvakhirasariya@gmail.com', '14/4/2003'),
(5, 'Makadiya Itisha Anilbhai', 'Radhe krishna Society,, Sardar Road ', 'Porbandar', '360987', 'Gujarat', 'itisha', 'itisha', 'Female', '9523225582', 'itisha makadiya@gmail.com', '5/4/2002'),
(6, 'Bhalodiya Jashmin Darshanbhai', 'Nand heights, Univercity Road', 'Rajkot', '360592', 'Gujarat', 'jashmin', 'jashmin', 'Female', '9823475624', 'jashminbhalodiya@gmail.com', '15/8/2001'),
(7, 'Gangadiya Pooja Sandipbhai', 'Patidar Township ', 'Morbi', '360846', 'Gujarat', 'pooja', 'pooja', 'Female', '8695421375', 'poojagangadiya @gmail.com', '8/3/2001'),
(8, 'Patel Isvari Hareshbhai', 'Mavdi Bypass', 'Rajkot', '360592', 'Gujarat', 'Isvari', 'Isvari', 'Female', '9385247515', 'patelisvari@gmail.com', '5/6/2004'),
(9, 'Padaliya Vrunda  Jaybhai', 'Shree Radhe Apartment, Near Gandhi Road.', 'Amreli', '360086', 'Gujarat', 'vrunda', 'vrunda', 'Female', '8612478270', 'padaliyavrunda@gmail.com', '6/5/2003'),
(10, 'Kansagara Vishva Pradipbhai', 'Madhuram Bypass', 'Junagadh', '360462', 'Gujarat', 'vishva123', 'vishva123', 'Female', '8612454214', 'vishvakansagra@gmail.com', '9/12/2002'),
(11, 'rushi patel', 'amreli', 'amreli', '360510', 'Gujrat', 'rushi ', 'rushi123', 'female', '9685741425', 'rushi@gmail.com', '23_6_2002'),
(12, 'reni hingarajiya', 'Ahmdabad', 'Ahmdabad', '365687', 'Gujarat', 'reni', 'reni123', 'Female', '7485961425', 'reni@gmail.com', '5-12-2006');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
