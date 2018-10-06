-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2016 at 07:54 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taxi_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `key_id` int(11) NOT NULL,
  `top_paragraph` text NOT NULL,
  `bottom_paragraph` text NOT NULL,
  `safety` int(11) NOT NULL,
  `certainty` int(11) NOT NULL,
  `timing` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`key_id`, `top_paragraph`, `bottom_paragraph`, `safety`, `certainty`, `timing`) VALUES
(1, 'Don''t have a car? Don''t want to ride on public transport? Get in touch with us to experience a great and comfortable transportation ride throughout the country. ', 'GRAB TAXI mostly focuses to ease your transportation management system. In Bangladesh we do not have a popular transportation management system. Therefore moving from places to places becomes difficult for people who do not own a car, which is basically the most of the people. For those gentlemen and ladies, we provide taxis in no time and throughout a very easy process to make transportation simple for you. ', 90, 85, 75);

-- --------------------------------------------------------

--
-- Table structure for table `cabs`
--

CREATE TABLE IF NOT EXISTS `cabs` (
  `model` text NOT NULL,
  `cab_id` int(11) NOT NULL,
  `license` text NOT NULL,
  `image_name` text NOT NULL,
  `image` text NOT NULL,
  `status` text NOT NULL,
  `driven_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cabs`
--

INSERT INTO `cabs` (`model`, `cab_id`, `license`, `image_name`, `image`, `status`, `driven_by`) VALUES
('Toyota 612', 1, 'C342B21', ' ', ' ', 'yes', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cabs_provide_content`
--

CREATE TABLE IF NOT EXISTS `cabs_provide_content` (
  `key_id` int(11) NOT NULL,
  `first_para` text NOT NULL,
  `second_para` text NOT NULL,
  `third_para` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cabs_provide_content`
--

INSERT INTO `cabs_provide_content` (`key_id`, `first_para`, `second_para`, `third_para`) VALUES
(1, 'GRAB MY TAXI provides both taxis and cars as per your demand. We have drivers ready with cars in great condition waiting to get a knock from you. ', 'For reserving a car you can always try out our rent a car service. We provide cars , suv, Micro and Jeep. If you are looking to take a road trip, order one now.', 'These cars are exclusively available for our members only. Become a member today to have acccess to your rides to make your life easier.');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
  `model` text NOT NULL,
  `car_id` int(11) NOT NULL,
  `license` text NOT NULL,
  `capacity` varchar(30) NOT NULL,
  `cpd` varchar(30) NOT NULL,
  `cpkm` varchar(30) NOT NULL,
  `milage` varchar(30) NOT NULL,
  `status` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`model`, `car_id`, `license`, `capacity`, `cpd`, `cpkm`, `milage`, `status`, `image`) VALUES
('Hyundai 9212', 3, 'NA214B2', '5Persons', '700TK', '70TK', '40KM', 'Yes', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `cms_sct_content`
--

CREATE TABLE IF NOT EXISTS `cms_sct_content` (
  `key_id` int(11) NOT NULL,
  `title1` text NOT NULL,
  `content1` text NOT NULL,
  `title2` text NOT NULL,
  `content2` text NOT NULL,
  `title3` text NOT NULL,
  `content3` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_sct_content`
--

INSERT INTO `cms_sct_content` (`key_id`, `title1`, `content1`, `title2`, `content2`, `title3`, `content3`) VALUES
(1, 'Safety', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', 'Certainty', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', 'Timing', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE IF NOT EXISTS `drivers` (
  `key_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `driver_id` int(11) NOT NULL,
  `address` text NOT NULL,
  `phone` text NOT NULL,
  `status` text NOT NULL,
  `areas` text NOT NULL,
  `trip_no` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`key_id`, `name`, `driver_id`, `address`, `phone`, `status`, `areas`, `trip_no`) VALUES
(2, 'Mostak Rahman', 121, 'Ajimpur, Dhaka', '0933442', 'Yes', 'Ajimpur, New Market, Dhanmondi, Asad Gate', 0);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `key_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`key_id`, `question`, `answer`) VALUES
(1, 'What Are Your Hours?', 'We Are Open 24/7'),
(2, 'Can I Book An Emergency Taxi?', 'Your request is always treated as an emergency to us. But unfortunately the respond time is the same for each case. You have to wait 15 mins to get your cab. '),
(3, 'Can I Take A Car for Several days?', 'Yes, of course you can. But only Rent a car provides that service. you can Rent a Car for any number of days as per your need.'),
(4, 'Can I drive on my own?', 'Sorry, The cars or taxis must be driven by the provided driver for safety measures.'),
(5, 'Do I have to be a member to order cab or a taxi?', 'Yes, All the offers and the services in the website are exclusively for members only. Get a membership now . :) ');

-- --------------------------------------------------------

--
-- Table structure for table `fare_cost`
--

CREATE TABLE IF NOT EXISTS `fare_cost` (
  `key_id` int(11) NOT NULL,
  `feature` text NOT NULL,
  `peak` text NOT NULL,
  `off_peak` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fare_cost`
--

INSERT INTO `fare_cost` (`key_id`, `feature`, `peak`, `off_peak`) VALUES
(1, 'Base Fare', '200TK', '150TK'),
(2, 'Per KM', '15TK', '10TK'),
(3, 'Per Min', '0.5Tk', '0.5Tk'),
(7, 'Minimum Fare', '40TK', '40TK');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `key_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `visibility` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`key_id`, `member_id`, `comment`, `visibility`) VALUES
(1, 1, '\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Yes'),
(2, 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Yes'),
(3, 1, '\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(11) NOT NULL,
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `address` text NOT NULL,
  `car_rented` int(11) NOT NULL,
  `taxi_hired` int(11) NOT NULL,
  `join_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` text NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `f_name`, `l_name`, `address`, `car_rented`, `taxi_hired`, `join_date`, `email`, `phone`) VALUES
(1, 'Ruhul', 'Mashbu', 'House 235,Mirpur 1, Darus salam road, Dhaka', 0, 0, '2016-04-02 21:56:18', 'mashbu111@yahoo.com', '9883772334'),
(2, 'Ruhul ', 'Maruf', '4/1 Kolotan Villa ,Agargaib, Sher e Bangla Road, Dhaka- 1207', 0, 0, '2016-04-02 21:56:18', 'maruf@yahoo.com', '20937214334');

-- --------------------------------------------------------

--
-- Table structure for table `member_account`
--

CREATE TABLE IF NOT EXISTS `member_account` (
  `member_id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member_log`
--

CREATE TABLE IF NOT EXISTS `member_log` (
  `key_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `starting_point` text NOT NULL,
  `destination` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member_log`
--

INSERT INTO `member_log` (`key_id`, `member_id`, `name`, `starting_point`, `destination`, `email`, `phone`) VALUES
(1, 1, 'Ruhul Mashbu', 'Agargaon', 'Mirpur1', 'mashbu111@yahoo.com', '999836432'),
(4, 1, 'Zakia Tasneem', 'Uttara', 'Bashundhara', 'zakia@yahoo.com', '87563924');

-- --------------------------------------------------------

--
-- Table structure for table `member_rent_car_log`
--

CREATE TABLE IF NOT EXISTS `member_rent_car_log` (
  `key_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `car_id` text NOT NULL,
  `email` text NOT NULL,
  `start_date` date NOT NULL,
  `starting_point` text NOT NULL,
  `duration` text NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member_rent_car_log`
--

INSERT INTO `member_rent_car_log` (`key_id`, `member_id`, `name`, `car_id`, `email`, `start_date`, `starting_point`, `duration`, `phone`) VALUES
(6, 0, 'mashbu dewan', '0001', 'mashbu111@yahoo.com', '2016-04-04', 'Agargaon', '3days', '9937572'),
(7, 1, 'mashbu dewan', '0001', 'mashbu@gmail.com', '2016-04-04', 'Agargaon', '3days', '8775392');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `key_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `notice` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`key_id`, `title`, `notice`, `date`) VALUES
(1, 'Notice Number 1', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,sunt in culpa qui officia deserunt mollit anim id est laborum.', '2016-04-03 15:05:15'),
(2, 'Notice Number 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,sunt in culpa qui officia deserunt mollit anim id est laborum.', '2016-04-03 14:03:44');

-- --------------------------------------------------------

--
-- Table structure for table `ordered_cab`
--

CREATE TABLE IF NOT EXISTS `ordered_cab` (
  `key_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `starting_point` text NOT NULL,
  `destination` text NOT NULL,
  `email` text NOT NULL,
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `phone` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ordered_cab`
--

INSERT INTO `ordered_cab` (`key_id`, `member_id`, `starting_point`, `destination`, `email`, `f_name`, `l_name`, `phone`, `status`) VALUES
(1, 1, 'Agargaon', 'Mirpur1', 'mashbu111@yahoo.com', 'Ruhul', 'Mashbu', '999836432', 'Approved'),
(4, 1, 'Uttara', 'Bashundhara', 'zakia@yahoo.com', 'Zakia', 'Tasneem', '87563924', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `ordered_cars`
--

CREATE TABLE IF NOT EXISTS `ordered_cars` (
  `key_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `car_id` text NOT NULL,
  `starting_point` text NOT NULL,
  `start_date` date NOT NULL,
  `duration` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ordered_cars`
--

INSERT INTO `ordered_cars` (`key_id`, `member_id`, `f_name`, `l_name`, `car_id`, `starting_point`, `start_date`, `duration`, `email`, `phone`) VALUES
(1, 1, 'Ruhul', 'Mashbu', '0001', 'Agargaon', '2016-04-04', '3days', 'mashbu111@gmail.com', '9385738'),
(2, 1, 'Zakia', 'Tasneem', '0002', 'Jahangir Gate', '2016-04-09', '5days', 'zakia@yahoo.com', '7563589'),
(3, 1, 'Mashbu', 'Dewan', '0001', 'Dhanmondi', '2016-04-04', '5days', 'mashbu111@gmail.com', '87756294'),
(4, 1, 'Nowshin', 'Tabassum', '0001', 'Agargaon', '2016-04-04', '2days', 'nowshin@tabassum.com', '777399243'),
(5, 1, 'Nowshin', 'Tabassum', '0001', 'Agargaon', '2016-04-04', '2days', 'nowshin@tabassum.com', '777399243');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `key_id` int(11) NOT NULL,
  `image_name` text NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `small` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`key_id`, `image_name`, `image`, `title`, `small`) VALUES
(1, '', '', 'Simplicity', 'Little Description Goes Here'),
(2, '', '', 'Perfection', 'Little Description Goes Here'),
(3, '', '', 'Experience', 'Little Description Goes Here');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`key_id`);

--
-- Indexes for table `cabs`
--
ALTER TABLE `cabs`
  ADD PRIMARY KEY (`cab_id`);

--
-- Indexes for table `cabs_provide_content`
--
ALTER TABLE `cabs_provide_content`
  ADD PRIMARY KEY (`key_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `cms_sct_content`
--
ALTER TABLE `cms_sct_content`
  ADD PRIMARY KEY (`key_id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`key_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`key_id`);

--
-- Indexes for table `fare_cost`
--
ALTER TABLE `fare_cost`
  ADD PRIMARY KEY (`key_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`key_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `member_account`
--
ALTER TABLE `member_account`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `member_log`
--
ALTER TABLE `member_log`
  ADD PRIMARY KEY (`key_id`);

--
-- Indexes for table `member_rent_car_log`
--
ALTER TABLE `member_rent_car_log`
  ADD PRIMARY KEY (`key_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`key_id`);

--
-- Indexes for table `ordered_cab`
--
ALTER TABLE `ordered_cab`
  ADD PRIMARY KEY (`key_id`);

--
-- Indexes for table `ordered_cars`
--
ALTER TABLE `ordered_cars`
  ADD PRIMARY KEY (`key_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`key_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `key_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cabs`
--
ALTER TABLE `cabs`
  MODIFY `cab_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cabs_provide_content`
--
ALTER TABLE `cabs_provide_content`
  MODIFY `key_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cms_sct_content`
--
ALTER TABLE `cms_sct_content`
  MODIFY `key_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `key_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `key_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `fare_cost`
--
ALTER TABLE `fare_cost`
  MODIFY `key_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `key_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `member_account`
--
ALTER TABLE `member_account`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `member_log`
--
ALTER TABLE `member_log`
  MODIFY `key_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `member_rent_car_log`
--
ALTER TABLE `member_rent_car_log`
  MODIFY `key_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `key_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ordered_cab`
--
ALTER TABLE `ordered_cab`
  MODIFY `key_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ordered_cars`
--
ALTER TABLE `ordered_cars`
  MODIFY `key_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `key_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
