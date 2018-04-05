-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2018 at 04:26 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_customer`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_number_account` varchar(11) NOT NULL,
  `customer_segment` varchar(20) NOT NULL,
  `customer_category` varchar(20) NOT NULL,
  `residence_type` varchar(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `modified_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `shared_balance_group` varchar(20) NOT NULL,
  `dukcapil_status` varchar(20) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `npwp_number` varchar(20) NOT NULL,
  `is_converted_from_lead` varchar(20) NOT NULL,
  `customer_status` varchar(20) NOT NULL,
  `primary_mobile` varchar(15) NOT NULL,
  `bss_status` varchar(20) NOT NULL,
  `corporate_tax_id` varchar(15) NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `customer_username` varchar(20) NOT NULL,
  `pic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_number_account`, `customer_segment`, `customer_category`, `residence_type`, `date_of_birth`, `occupation`, `modified_time`, `shared_balance_group`, `dukcapil_status`, `latitude`, `longitude`, `npwp_number`, `is_converted_from_lead`, `customer_status`, `primary_mobile`, `bss_status`, `corporate_tax_id`, `created_time`, `customer_username`, `pic_id`) VALUES
('CA000000008', 'Retail', 'Default', 'Domestic', '2018-04-03', 'Employed', '2018-04-03 01:54:27', '123', 'Valid', 0, 0, '123', 'yes', 'Registered', '123', '', '123', '2018-04-03 01:54:27', 'test1', 8),
('CA000000009', 'Business', 'Enterprise', 'Foreign', '2018-04-04', 'Private', '2018-04-03 01:59:25', '456', 'Not Valid', 0, 0, '456', 'no', 'Active', '456', '', '456', '2018-04-03 01:59:25', 'test2', 9),
('CA000000010', 'Retail', 'Enterprise', 'Foreign', '2018-04-05', 'Employed', '2018-04-03 02:04:46', '789', 'Valid', 0, 0, '789', 'yes', 'Suspended', '789', '', '789', '2018-04-03 02:04:46', 'test3', 10);

--
-- Triggers `customer`
--
DELIMITER $$
CREATE TRIGGER `tg_customer_insert` BEFORE INSERT ON `customer` FOR EACH ROW BEGIN
  INSERT INTO customer_seq VALUES (NULL);
  SET NEW.customer_number_account = CONCAT('CA', LPAD(LAST_INSERT_ID(), 9, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `customer_seq`
--

CREATE TABLE `customer_seq` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_seq`
--

INSERT INTO `customer_seq` (`id`) VALUES
(8),
(9),
(10);

-- --------------------------------------------------------

--
-- Table structure for table `pic`
--

CREATE TABLE `pic` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `facebook_account_id` varchar(15) NOT NULL,
  `customer_id` varchar(20) NOT NULL,
  `customer_id_type` varchar(20) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `mother_maiden_name` varchar(20) NOT NULL,
  `primary_email` varchar(20) NOT NULL,
  `preferred_language` varchar(20) NOT NULL,
  `kk_number` varchar(20) NOT NULL,
  `home_phone` varchar(15) NOT NULL,
  `home_status` varchar(20) NOT NULL,
  `office_phone` varchar(20) NOT NULL,
  `marital_status` varchar(20) NOT NULL,
  `fax` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pic`
--

INSERT INTO `pic` (`id`, `first_name`, `last_name`, `gender`, `facebook_account_id`, `customer_id`, `customer_id_type`, `contact_number`, `mother_maiden_name`, `primary_email`, `preferred_language`, `kk_number`, `home_phone`, `home_status`, `office_phone`, `marital_status`, `fax`) VALUES
(8, 'testone', 'testone', 'Male', '123', '123', 'KTP', '123', 'test1', 'test1@test.com', 'English', '1234567898765432', '123', 'Own House', '123', 'married', '123'),
(9, 'testtwo', 'testtwo', 'Female', '456', '456', 'Passport', '456', 'test2', 'test2@test.com', 'Bahasa Indonesia', '4567890987654321', '456', 'Rent', '456', 'married', '456'),
(10, 'testthree', 'testthree', 'Female', '789', '789', 'KTP', '789', 'test3', 'test3@test.com', 'Bahasa Indonesia', '7890987654321234', '789', 'Apartment', '789', 'married', '789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_number_account`),
  ADD KEY `pic_id` (`pic_id`);

--
-- Indexes for table `customer_seq`
--
ALTER TABLE `customer_seq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pic`
--
ALTER TABLE `pic`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_seq`
--
ALTER TABLE `customer_seq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pic`
--
ALTER TABLE `pic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`pic_id`) REFERENCES `pic` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
