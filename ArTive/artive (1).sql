-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 05:29 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artive`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin-id` int(255) NOT NULL,
  `admin-name` varchar(255) NOT NULL,
  `admin-email` varchar(255) NOT NULL,
  `admin-role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`id`, `name`, `mobile`, `email`, `password`, `address`) VALUES
(1, ' ', '01314929336', 'khadizajarin@email.com', 'khadiza', 'bakul,narsingdi'),
(2, ' ', '04836252785', 'ghushikaeshika@gmail.com', 'kghduebnt', 'aaaaaaaaaaaaaaaaaaa'),
(3, ' ', '03938376262', 'rehanaurmi22@gmail.com', 'khgfdsaqwerty', 'lkjhgfghjk'),
(4, ' ', '03938376262', 'rehanaurmi22@gmail.com', 'jhgfds', 'lkjhgfghjk'),
(5, ' ', '9387572747', 'tasniaahmed@gmail.com', 'jghyfutiyjggn', 'rajshahi'),
(6, 'raha laiba', '8373625184957', 'laibaraha@gmail.com', 'laiba.umme', 'motijhil'),
(7, 'dipannita shikdar', '0485648385766', 'dipannitashikdr@email.com', 'asdfghjkl', 'hhhhhhhhhhhh');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `prd-id` int(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prdid` int(255) NOT NULL,
  `prdname` varchar(255) NOT NULL,
  `prdprice` varchar(255) NOT NULL,
  `prdstatus` varchar(255) NOT NULL,
  `prdimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prdid`, `prdname`, `prdprice`, `prdstatus`, `prdimage`) VALUES
(1, 'Doll', '200', 'toy', ''),
(2, 'Doll', '200', 'toy', ''),
(3, 'kite', '100', 'toy', ''),
(4, 'car', '500', 'Toy', 'CamScanner 12-12-2022 16.09_1.jpg'),
(5, 'car', '500', 'Toy', ''),
(6, 'mug', '79', 'daily use', ''),
(7, 'Dress', '2200', 'Daily use', 'IMG_20220217_121140.jpg'),
(8, 'bracelate', '200', 'Daily use', ''),
(9, 'febric', '300', 'Any', ''),
(10, 'febric', '300', 'Any', ''),
(11, 'jacket', '22000', 'Riding', ''),
(23, 'Dress', '300', 'daily use', ''),
(24, 'car', '500', 'Bike riding', ''),
(25, 'Dress', '79', 'daily use', ''),
(26, 'lego', '1000', 'Toy', ''),
(27, 'lego', '1000', 'Toy', ''),
(28, 'car', '200', 'Toy', ''),
(29, 'clay', '1000', 'Toy', ''),
(30, 'clay', '1000', 'Toy', ''),
(31, 'mirror', '1000', 'daily use', ''),
(32, 'mirror', '1000', 'daily use', ''),
(33, 'Toy', '200', 'toy', '');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `sellerid` int(255) NOT NULL,
  `sellername` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `prdid` varchar(255) NOT NULL,
  `prdname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mobile1` text NOT NULL,
  `mobile2` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `fname`, `lname`, `mobile1`, `mobile2`, `email`, `password`, `address1`, `address2`, `city`, `image`) VALUES
(33, 'khadiza', 'jarin', '013215929336', '019711338835', 'khadizajarin@email.com', 'dfghj', 'bakul,gach', 'alu gach', 'narsingdi', ''),
(34, 'mnbvcxz', 'mnbvc', '0987654321', '0987654321', 'nahiyanahmed18@gmail.com', 'hgfds', 'hgf,jjjj98765', 'jjjjjjjjjjjj,jhgfds', 'ooooooooo', ''),
(35, 'nhjuhb', 'nhyhjkiuytgrfed', 'sdfgh', '098765432', 'nahiyanahmed18@gmail.com', 'uyhgtfrdes', 'kjhgtfr', 'efgbn', 'mjhgtr', ''),
(36, 'sairrah ', 'safwan', '019474575523', '019374638565', 'sairrahsafwan@gmail.com', 'hfthdy', 'hynrit,fjfururhe', 'jgjfkmdnfr', 'bmbjfjrfjfj', ''),
(37, 'nusrat', 'murkho', '0384625585', '0483638563', 'murkhomanob@gmail.com', 'murkhota', 'murkho unlimited', 'murkhota is real', '', ''),
(38, 'tasnim', 'suraiya', '086464528264', '029364625478', 'tasnimsuraiya@gmail.com', 'tasnimdepti', 'jhgfdcvbn', 'bhvcfdtgf', 'jhgfcvbn', ''),
(39, 'yhbvgfrd', 'gfrtyhb', '95784559', '01837498573', 'eshikaalam@gmail.com', 'lkjhgfdmnbvc', 'oiuygtfrd', 'uytredfghnjmkljhgf', 'rajshahi', ''),
(40, 'nurjahan', 'jahan', '048463528364', '049827625533', 'nurjahan@gmail.com', 'jgdternt', 'jfyfyrikf', 'jgufuhf', 'alurbari', ''),
(41, 'sirajum', 'murina', '09836528224', '03938762527', 'sirajummunira@gmail.com', 'kfhgdyebenhf', 'sirajum munnira road', 'kkkkkkkkkkkkkk', 'chittagong', ''),
(42, 'rehana', 'urmi', '973628292', '09372625242', 'rehanaurmi@gmail.com', 'khdyeiesnd', 'rehana urmi road', 'dinajpur', 'kustia', ''),
(43, 'akhi', 'aktaer', '03928261536', '03827261514', 'akhiakter@gmail.com', 'akhiakter', 'akhi alam street', 'boubazar', 'narsngdi', ''),
(44, 'saherul', 'islam', '01987665432', '0975638482', 'islamnihal@gmail.com', 'nihal', 'bakultala,narsingdi', 'jjjjjjjjjjjj,jhgfds', 'Dhaka', ''),
(45, 'mahfuz', 'rahman', '05454274826', '093745241', 'mahfuzRahman@gmail.com', 'mahfuz', 'mahfuz street', 'mahfuz rasta', 'narsingdi', ''),
(46, 'farhana', ' ananna', '0492825145', '0392726492', 'fananna@gmail.com', 'fsananna', 'feni', 'balu', 'chittagong', '');

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `web-name` int(255) NOT NULL,
  `web-url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `admin-id` (`admin-id`),
  ADD UNIQUE KEY `admin-id_2` (`admin-id`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`prd-id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prdid`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`sellerid`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `prd-id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prdid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `sellerid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
