-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2017 at 03:47 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easy_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `easy_admin`
--

CREATE TABLE `easy_admin` (
  `admin_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `easy_admin`
--

INSERT INTO `easy_admin` (`admin_id`, `user_name`, `user_email`, `user_password`) VALUES
(1, 'rana', 'rana@easytravel.com', '4a7d1ed414474e4033ac29ccb8653d9b');

-- --------------------------------------------------------

--
-- Table structure for table `easy_booking`
--

CREATE TABLE `easy_booking` (
  `booking_id` int(11) NOT NULL,
  `bo_hotel_id` int(11) NOT NULL,
  `bo_room_id` int(11) NOT NULL,
  `bo_checkin` date NOT NULL,
  `bo_checkout` date NOT NULL,
  `bo_room_type` int(11) NOT NULL,
  `bo_city` varchar(50) NOT NULL,
  `bo_adult` int(11) NOT NULL,
  `bo_children` int(11) NOT NULL,
  `bo_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `easy_booking`
--

INSERT INTO `easy_booking` (`booking_id`, `bo_hotel_id`, `bo_room_id`, `bo_checkin`, `bo_checkout`, `bo_room_type`, `bo_city`, `bo_adult`, `bo_children`, `bo_status`) VALUES
(1, 2, 12, '2017-09-28', '2017-09-30', 1, 'Sylhet', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `easy_contact_us`
--

CREATE TABLE `easy_contact_us` (
  `cont_us_id` int(11) NOT NULL,
  `cont_us_first_name` varchar(256) NOT NULL,
  `cont_us_last_name` varchar(256) NOT NULL,
  `cont_us_email` varchar(256) NOT NULL,
  `cont_us_message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `easy_hotel_gallery`
--

CREATE TABLE `easy_hotel_gallery` (
  `gallery_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `hotel_image_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `easy_hotel_gallery`
--

INSERT INTO `easy_hotel_gallery` (`gallery_id`, `hotel_id`, `hotel_image_path`) VALUES
(1, 1, '1/0o02.jpg'),
(2, 4, '4/2016-08-02_15_13_29.jpg'),
(3, 4, '4/20160414_155125.jpg'),
(4, 5, '5/2016-08-02_15_13_29.jpg'),
(5, 5, '5/20160413_145549.jpg'),
(6, 5, '5/20160414_155125.jpg'),
(7, 6, '6/0o02.jpg'),
(8, 8, '8/1_5star.png'),
(9, 8, '8/2star.png'),
(10, 8, '8/3star.png'),
(11, 8, '8/4star.png'),
(12, 8, '8/5star.png'),
(13, 9, '9/0o02.jpg'),
(14, 10, '10/thumb-02.jpg'),
(15, 10, '10/thumb-03.jpg'),
(16, 10, '10/thumb-04.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `easy_hotel_ratings`
--

CREATE TABLE `easy_hotel_ratings` (
  `rating_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `rating_value` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `easy_hotel_registration`
--

CREATE TABLE `easy_hotel_registration` (
  `hotel_id` int(11) NOT NULL,
  `hotel_name` varchar(100) NOT NULL,
  `hotel_address` varchar(256) NOT NULL,
  `hotel_email` varchar(50) NOT NULL,
  `hotel_website` varchar(50) NOT NULL,
  `hotel_password` varchar(256) NOT NULL,
  `hotel_city` varchar(20) NOT NULL,
  `hotel_division` varchar(20) NOT NULL,
  `hotel_country` varchar(20) NOT NULL,
  `hotel_zip` varchar(20) NOT NULL,
  `hotel_mobile` varchar(20) NOT NULL,
  `hotel_telephone` varchar(20) NOT NULL,
  `hotel_stars` tinyint(4) NOT NULL,
  `hotel_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `easy_hotel_registration`
--

INSERT INTO `easy_hotel_registration` (`hotel_id`, `hotel_name`, `hotel_address`, `hotel_email`, `hotel_website`, `hotel_password`, `hotel_city`, `hotel_division`, `hotel_country`, `hotel_zip`, `hotel_mobile`, `hotel_telephone`, `hotel_stars`, `hotel_status`) VALUES
(1, 'Ruposhi bangla', 'Polton, dhaka', 'ruposhi@gamil.com', 'www.ruposhibangla.com', '4a7d1ed414474e4033ac29ccb8653d9b', 'dhaka', 'dhaka', 'country', '3200', '01633505045', '0821345876', 5, 2),
(2, 'Rose View', 'Uposhohor', 'roseview@gmail.com', 'www.roseview.com', '4a7d1ed414474e4033ac29ccb8653d9b', 'SYlhet', 'Sylhet', 'Bangladesh', 'SYL-3100', '809518290', '35123531', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `easy_hotel_rooms`
--

CREATE TABLE `easy_hotel_rooms` (
  `rooms_id` int(11) NOT NULL,
  `hotel_id` int(50) NOT NULL,
  `room_name` varchar(25) NOT NULL,
  `room_capacity` int(11) NOT NULL,
  `room_ac` tinyint(4) NOT NULL,
  `room_type` varchar(100) NOT NULL,
  `bed_type` varchar(100) NOT NULL,
  `room_information` text NOT NULL,
  `room_option` text NOT NULL,
  `room_rate` double NOT NULL,
  `total_room` int(11) NOT NULL,
  `available_rooms` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `easy_hotel_rooms`
--

INSERT INTO `easy_hotel_rooms` (`rooms_id`, `hotel_id`, `room_name`, `room_capacity`, `room_ac`, `room_type`, `bed_type`, `room_information`, `room_option`, `room_rate`, `total_room`, `available_rooms`) VALUES
(1, 1, 'Deluxe Room', 3, 2, '1', '2', 'Sleeps 3 people (including up to 1 child),  1 Double Bed  Extra beds available, Rollaway bed', 'Free WiFi, Breakfast for 2', 100, 10, 10),
(2, 1, 'Deluxe Room', 3, 2, '1', '2', 'Sleeps 3 people (including up to 1 child),  1 Double Bed  Extra beds available, Rollaway bed', 'Free WiFi, Breakfast for 2', 100, 10, 10),
(3, 10, 'Executive Suite ', 4, 2, '2', '5', '2 Double Bed, Non Smoking, City View', 'Free WiFi, Breakfast for 4,  Free parking', 200, 10, 10),
(4, 10, 'Executive Suite ', 4, 2, '2', '5', '2 Double Bed, Non Smoking, City View', 'Free WiFi, Breakfast for 4,  Free parking', 200, 10, 10),
(5, 10, 'Family Suite', 5, 2, '2', '5', '2 Bedrooms, City View', 'Free WiFi Breakfast for 2', 100, 14, 14),
(6, 10, 'Family Suite', 5, 2, '2', '5', '2 Bedrooms, City View', 'Free WiFi Breakfast for 2', 100, 14, 14);

-- --------------------------------------------------------

--
-- Table structure for table `easy_room_gallery`
--

CREATE TABLE `easy_room_gallery` (
  `r_gallery_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `image_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `easy_room_gallery`
--

INSERT INTO `easy_room_gallery` (`r_gallery_id`, `hotel_id`, `room_id`, `image_path`) VALUES
(1, 1, 1, 'RoomGallery/1/bed_1.jpg'),
(2, 1, 1, 'RoomGallery/1/bed_2.jpg'),
(3, 1, 1, 'RoomGallery/1/bed_3.jpg'),
(4, 10, 3, 'RoomGallery/3/05.jpg'),
(5, 10, 3, 'RoomGallery/3/6_1.jpg'),
(6, 10, 3, 'RoomGallery/3/08.jpg'),
(7, 10, 5, 'RoomGallery/5/07.jpg'),
(8, 10, 5, 'RoomGallery/5/08.jpg'),
(9, 10, 5, 'RoomGallery/5/10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `easy_user`
--

CREATE TABLE `easy_user` (
  `user_id` int(11) NOT NULL,
  `user_first_name` varchar(256) NOT NULL,
  `user_last_name` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_password` varchar(256) NOT NULL,
  `user_mobile` varchar(15) NOT NULL,
  `user_address` varchar(256) NOT NULL,
  `user_country` varchar(30) NOT NULL,
  `user_gender` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `easy_user`
--

INSERT INTO `easy_user` (`user_id`, `user_first_name`, `user_last_name`, `user_email`, `user_password`, `user_mobile`, `user_address`, `user_country`, `user_gender`) VALUES
(1, 'Minhaj', 'Rana', 'rana@hhhs.com', '81dc9bdb52d04dc20036dbd8313ed055', '026974169', 'gbd tdh sfjtsf', '', 1),
(2, 'Shuhed', 'Ahmed', 'shuhed@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '9723986789', 'n vjsdivikvvojfd', '', 1),
(3, 'rubel', 'rahman', 'rubel@easy.com', '4a7d1ed414474e4033ac29ccb8653d9b', '01723874949', 'vhgjksa', '', 1),
(4, 'Nasim', 'Buiyan', 'nasim@gmail.com', 'dcddb75469b4b4875094e14561e573d8', '642385787915', 'bvkhsbavhakjvbh', '', 1),
(5, 'Shuhed', 'Ah', 'shuhed12@gmail.com', 'dcddb75469b4b4875094e14561e573d8', '5274389', 'ghjkjlnlsv', '', 1),
(6, 'ashikl', 'ahmed', 'ashil@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '01721234256', 'mojumdari, sylhet', 'bangladesh', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `easy_admin`
--
ALTER TABLE `easy_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `easy_booking`
--
ALTER TABLE `easy_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `easy_contact_us`
--
ALTER TABLE `easy_contact_us`
  ADD PRIMARY KEY (`cont_us_id`);

--
-- Indexes for table `easy_hotel_gallery`
--
ALTER TABLE `easy_hotel_gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `easy_hotel_ratings`
--
ALTER TABLE `easy_hotel_ratings`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `easy_hotel_registration`
--
ALTER TABLE `easy_hotel_registration`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `easy_hotel_rooms`
--
ALTER TABLE `easy_hotel_rooms`
  ADD PRIMARY KEY (`rooms_id`);

--
-- Indexes for table `easy_room_gallery`
--
ALTER TABLE `easy_room_gallery`
  ADD PRIMARY KEY (`r_gallery_id`);

--
-- Indexes for table `easy_user`
--
ALTER TABLE `easy_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `easy_admin`
--
ALTER TABLE `easy_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `easy_booking`
--
ALTER TABLE `easy_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `easy_contact_us`
--
ALTER TABLE `easy_contact_us`
  MODIFY `cont_us_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `easy_hotel_gallery`
--
ALTER TABLE `easy_hotel_gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `easy_hotel_ratings`
--
ALTER TABLE `easy_hotel_ratings`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `easy_hotel_registration`
--
ALTER TABLE `easy_hotel_registration`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `easy_hotel_rooms`
--
ALTER TABLE `easy_hotel_rooms`
  MODIFY `rooms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `easy_room_gallery`
--
ALTER TABLE `easy_room_gallery`
  MODIFY `r_gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `easy_user`
--
ALTER TABLE `easy_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
