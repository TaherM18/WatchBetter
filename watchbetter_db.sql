-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2023 at 09:03 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `watchbetter_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `show_id` int(11) DEFAULT NULL,
  `seat_id` int(11) DEFAULT NULL,
  `booked_at` datetime DEFAULT current_timestamp(),
  `booking_status` char(1) DEFAULT 'D'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `city_master`
--

CREATE TABLE `city_master` (
  `city_id` int(11) NOT NULL,
  `state_code` char(2) DEFAULT NULL,
  `city_name` varchar(85) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city_master`
--

INSERT INTO `city_master` (`city_id`, `state_code`, `city_name`) VALUES
(1, 'AP', 'Adoni'),
(2, 'AP', 'Amaravati'),
(3, 'AP', 'Anantapur'),
(4, 'AP', 'Chandragiri'),
(5, 'AP', 'Chittoor'),
(6, 'AP', 'Dowlaiswaram'),
(7, 'AP', 'Eluru'),
(8, 'AP', 'Guntur'),
(9, 'AP', 'Kadapa'),
(10, 'AP', 'Kakinada'),
(11, 'AP', 'Kurnool'),
(12, 'AP', 'Machilipatnam'),
(13, 'AP', 'Nagarjanukonda'),
(14, 'AP', 'Rajahmundry'),
(15, 'AP', 'Srikakulam'),
(16, 'AP', 'Tirupati'),
(17, 'AP', 'Vijayawada'),
(18, 'AP', 'Visakhapatnam'),
(19, 'AP', 'Vizianagaram'),
(20, 'AP', 'Yemminagur'),
(21, 'AR', 'Itanagar'),
(22, 'AS', 'Dhuburi'),
(23, 'AS', 'Dibrugarh'),
(24, 'AS', 'Dispur'),
(25, 'AS', 'Guwahati'),
(26, 'AS', 'Jorhat'),
(27, 'AS', 'Nagaon'),
(28, 'AS', 'Sivasnagar'),
(29, 'AS', 'Silchar'),
(30, 'AS', 'Tezpur'),
(31, 'AS', 'Tinsukia'),
(32, 'BR', 'Ara'),
(33, 'BR', 'Barauni'),
(34, 'BR', 'Bettiah'),
(35, 'BR', 'Bhagalpur'),
(36, 'BR', 'Bihar Sharif'),
(37, 'BR', 'Bodh Gaya'),
(38, 'BR', 'Buxar'),
(39, 'BR', 'Chapra'),
(40, 'BR', 'Darbhanga'),
(41, 'BR', 'Dehri'),
(42, 'BR', 'Dinapur'),
(43, 'BR', 'Gaya'),
(44, 'BR', 'Hajipur'),
(45, 'BR', 'Jamalpur'),
(46, 'BR', 'Katihar'),
(47, 'BR', 'Madhubani'),
(48, 'BR', 'Motihari'),
(49, 'BR', 'Munger'),
(50, 'BR', 'Muzaffarpur'),
(51, 'BR', 'Patna'),
(52, 'BR', 'Pusa'),
(53, 'BR', 'Saharsa'),
(54, 'BR', 'Samastipur'),
(55, 'BR', 'Sasaram'),
(56, 'BR', 'Sitamarhi'),
(57, 'BR', 'Siwan'),
(58, 'CH', 'Chandigarh'),
(59, 'CT', 'Ambikapur'),
(60, 'CT', 'Bhilai'),
(61, 'CT', 'Bilaspur'),
(62, 'CT', 'Dhamtari'),
(63, 'CT', 'Durg'),
(64, 'CT', 'Jagdalpur'),
(65, 'CT', 'Raipur'),
(66, 'CT', 'Rajnandgaon'),
(67, 'DD', 'Daman'),
(68, 'DD', 'Diu'),
(69, 'DD', 'Silavassa'),
(70, 'DL', 'Delhi'),
(71, 'DL', 'New Delhi'),
(72, 'GA', 'Madgaon'),
(73, 'GA', 'Panaji'),
(74, 'GJ', 'Ahmedabad'),
(75, 'GJ', 'Amreli'),
(76, 'GJ', 'Anand'),
(77, 'GJ', 'Ankleshwar'),
(78, 'GJ', 'Balasinor'),
(79, 'GJ', 'Bharuch'),
(80, 'GJ', 'Bhavangadh'),
(81, 'GJ', 'Bhavnagar'),
(82, 'GJ', 'Bhuj'),
(83, 'GJ', 'Dwarka'),
(84, 'GJ', 'Gandhidham'),
(85, 'GJ', 'Gandhinagar'),
(86, 'GJ', 'Godhara'),
(87, 'GJ', 'Gondal'),
(88, 'GJ', 'Jamnagar'),
(89, 'GJ', 'Junagadh'),
(90, 'GJ', 'Kandla'),
(91, 'GJ', 'Khambhat'),
(92, 'GJ', 'Kheda'),
(93, 'GJ', 'Lothal'),
(94, 'GJ', 'Mahesana'),
(95, 'GJ', 'Mandavi'),
(96, 'GJ', 'Morbi'),
(97, 'GJ', 'Nadiad'),
(98, 'GJ', 'Navsari'),
(99, 'GJ', 'Okha'),
(100, 'GJ', 'Palanpur'),
(101, 'GJ', 'Palitana'),
(102, 'GJ', 'Patan'),
(103, 'GJ', 'Porbandar'),
(104, 'GJ', 'Rajkot'),
(105, 'GJ', 'Rajpipla'),
(106, 'GJ', 'Saputara'),
(107, 'GJ', 'Sasan Gir'),
(108, 'GJ', 'Surat'),
(109, 'GJ', 'Surendranagar'),
(110, 'GJ', 'Vadodara'),
(111, 'GJ', 'Valsad'),
(112, 'GJ', 'Vapi'),
(113, 'GJ', 'Veraval'),
(114, 'GJ', 'Wankaner');

-- --------------------------------------------------------

--
-- Table structure for table `film_rating_master`
--

CREATE TABLE `film_rating_master` (
  `rating_code` char(5) NOT NULL,
  `meaning` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film_rating_master`
--

INSERT INTO `film_rating_master` (`rating_code`, `meaning`) VALUES
('G', 'General Audiences'),
('NC-17', 'Adults Only'),
('PG', 'Parental Guidance Suggested'),
('PG-13', 'Parents Strongly Cautioned'),
('R', 'Restricted');

-- --------------------------------------------------------

--
-- Table structure for table `genre_master`
--

CREATE TABLE `genre_master` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre_master`
--

INSERT INTO `genre_master` (`genre_id`, `genre_name`) VALUES
(1, 'Action'),
(2, 'Adventure'),
(3, 'Animation'),
(4, 'Comedy'),
(5, 'Crime'),
(6, 'Dark Comedy'),
(7, 'Documentary'),
(8, 'Drama'),
(9, 'Epic'),
(10, 'Experimental'),
(11, 'Fantasy'),
(12, 'Farce'),
(13, 'Fiction'),
(14, 'Gangster'),
(15, 'Hindi Cinema'),
(16, 'History'),
(17, 'Historical Drama'),
(18, 'Historical Fiction'),
(19, 'Horror'),
(20, 'Musical'),
(21, 'Mystery'),
(22, 'Narrative'),
(23, 'Noir'),
(24, 'Romance'),
(25, 'Romantic Comedy'),
(26, 'Science Fiction'),
(27, 'Sports'),
(28, 'Spy'),
(29, 'Teen'),
(30, 'Thriller'),
(31, 'War'),
(32, 'Western');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(11) NOT NULL,
  `film_rating_code` char(5) DEFAULT NULL,
  `movie_name` varchar(30) NOT NULL,
  `duration` time DEFAULT NULL,
  `description` varchar(120) NOT NULL,
  `poster_img` varchar(256) DEFAULT NULL,
  `background_cover_img` varchar(256) DEFAULT NULL,
  `trailer_video` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `film_rating_code`, `movie_name`, `duration`, `description`, `poster_img`, `background_cover_img`, `trailer_video`) VALUES
(1, 'G', 'Bhool Bhulaiyaa', '02:25:00', 'The film was made based on the assassination of Kochu Kunju channar of Alummoottil, a prominent ezhava family in Kerala.', NULL, NULL, NULL),
(2, 'PG-13', 'Heart of Stone', '02:02:00', 'International intelligence agent Rachel Stone must embark on a dangerous mission to protect the mysterious artificial in', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `movie_genre`
--

CREATE TABLE `movie_genre` (
  `movie_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie_genre`
--

INSERT INTO `movie_genre` (`movie_id`, `genre_id`) VALUES
(1, 4),
(1, 6),
(2, 28),
(2, 30);

-- --------------------------------------------------------

--
-- Table structure for table `movie_rating`
--

CREATE TABLE `movie_rating` (
  `customer_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `rating` tinyint(4) DEFAULT NULL,
  `rated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `seat_id` int(11) NOT NULL,
  `seat_code` char(3) NOT NULL,
  `theatre_id` int(11) NOT NULL,
  `seat_type` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `show_id` int(11) NOT NULL,
  `theatre_id` int(11) DEFAULT NULL,
  `movie_id` int(11) DEFAULT NULL,
  `show_price` decimal(5,2) DEFAULT NULL,
  `hosted_at` datetime DEFAULT NULL,
  `show_status` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `state_master`
--

CREATE TABLE `state_master` (
  `state_code` char(2) NOT NULL,
  `state_name` varchar(53) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `state_master`
--

INSERT INTO `state_master` (`state_code`, `state_name`) VALUES
('AP', 'Andhra Pradesh'),
('AR', 'Arunachal Pradesh'),
('AS', 'Assam'),
('BR', 'Bihar'),
('CH', 'Chandigarh'),
('CT', 'Chhattisgarh'),
('DD', 'Daman and Diu'),
('DL', 'Delhi'),
('DN', 'Dadra and Nagar Haveli'),
('GA', 'Goa'),
('GJ', 'Gujarat'),
('HP', 'Himachal Pradesh'),
('HR', 'Haryana'),
('JH', 'Jharkhand'),
('JK', 'Jammu and Kashmir'),
('KA', 'Karnataka'),
('KL', 'Kerala'),
('LD', 'Lakshadweep'),
('MH', 'Maharastra'),
('ML', 'Meghalaya'),
('MN', 'Manipur'),
('MP', 'Madhya Pradesh'),
('MZ', 'Mizoram'),
('NL', 'Nagaland'),
('OR', 'Odisha'),
('PJ', 'Punjab'),
('PY', 'Puducherry'),
('RJ', 'Rajasthan'),
('SK', 'Sikkim'),
('TG', 'Telangana'),
('TN', 'Tamil Nadu'),
('TR', 'Tripura'),
('UP', 'Uttar Pradesh'),
('UT', 'Uttarakhand'),
('WB', 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `theatre`
--

CREATE TABLE `theatre` (
  `theatre_id` int(11) NOT NULL,
  `manager_id` int(11) DEFAULT NULL,
  `theatre_name` varchar(12) NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `theatre_address` varchar(100) NOT NULL,
  `row_count` tinyint(4) DEFAULT 10,
  `col_count` tinyint(4) DEFAULT 3,
  `seats_per_col` tinyint(4) DEFAULT 4,
  `total_seats` smallint(6) DEFAULT NULL,
  `regular_seat_fee` decimal(5,2) DEFAULT NULL,
  `luxury_seat_fee` decimal(5,2) DEFAULT NULL,
  `theatre_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `theatre_rating`
--

CREATE TABLE `theatre_rating` (
  `customer_id` int(11) NOT NULL,
  `theatre_id` int(11) NOT NULL,
  `rating` tinyint(4) DEFAULT NULL,
  `rated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `user_type` char(1) NOT NULL,
  `contact` char(10) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` char(32) NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `user_status` char(1) DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `user_type`, `contact`, `email_id`, `password`, `city_id`, `address`, `created_at`, `user_status`) VALUES
(1, 'Zeenal', 'Bhalodiya', 'M', '1234567890', 'zeenal_12@gmail.com', 'pass#123', 108, '2105, D B Gupta Road, Karol Bagh', '2023-08-19 17:15:08', 'A'),
(2, 'Alex', 'Mercer', 'A', '1212121212', 'alex007@yahoo.com', 'p@ss_123', 108, '6, Yamuna Soc, Waghodia Road, Nr. Zavernagar, Waghodia Road', '2023-08-19 17:15:08', 'A'),
(3, 'Bhumika', 'Desai', 'C', '9090876568', 'bDesai22@utu.ac.in', 'pa$$_321', 108, '27, Royal Tower, Ic Colony, Borivali(w)', '2023-08-19 17:15:08', 'A'),
(4, 'Chutki', 'Acharya', 'C', '9898763428', 'chutki_19@gmail.com', 'pASS%55', 108, '1 Jay Vijay, Siddharth Nagar 2, Goregaon (west)', '2023-08-19 17:15:08', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `show_id` (`show_id`),
  ADD KEY `seat_id` (`seat_id`);

--
-- Indexes for table `city_master`
--
ALTER TABLE `city_master`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `state_code` (`state_code`);

--
-- Indexes for table `film_rating_master`
--
ALTER TABLE `film_rating_master`
  ADD PRIMARY KEY (`rating_code`);

--
-- Indexes for table `genre_master`
--
ALTER TABLE `genre_master`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`),
  ADD KEY `film_rating_code` (`film_rating_code`);

--
-- Indexes for table `movie_genre`
--
ALTER TABLE `movie_genre`
  ADD PRIMARY KEY (`movie_id`,`genre_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `movie_rating`
--
ALTER TABLE `movie_rating`
  ADD PRIMARY KEY (`customer_id`,`movie_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`seat_id`),
  ADD KEY `theatre_id` (`theatre_id`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`show_id`);

--
-- Indexes for table `state_master`
--
ALTER TABLE `state_master`
  ADD PRIMARY KEY (`state_code`);

--
-- Indexes for table `theatre`
--
ALTER TABLE `theatre`
  ADD PRIMARY KEY (`theatre_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `manager_id` (`manager_id`);

--
-- Indexes for table `theatre_rating`
--
ALTER TABLE `theatre_rating`
  ADD PRIMARY KEY (`customer_id`,`theatre_id`),
  ADD KEY `theatre_id` (`theatre_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `city_id` (`city_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `city_master`
--
ALTER TABLE `city_master`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `genre_master`
--
ALTER TABLE `genre_master`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `seat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `show_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `theatre`
--
ALTER TABLE `theatre`
  MODIFY `theatre_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `users` (`user_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`show_id`) REFERENCES `shows` (`show_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`seat_id`) REFERENCES `seat` (`seat_id`) ON DELETE SET NULL;

--
-- Constraints for table `city_master`
--
ALTER TABLE `city_master`
  ADD CONSTRAINT `city_master_ibfk_1` FOREIGN KEY (`state_code`) REFERENCES `state_master` (`state_code`);

--
-- Constraints for table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_ibfk_1` FOREIGN KEY (`film_rating_code`) REFERENCES `film_rating_master` (`rating_code`) ON DELETE SET NULL;

--
-- Constraints for table `movie_genre`
--
ALTER TABLE `movie_genre`
  ADD CONSTRAINT `movie_genre_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`),
  ADD CONSTRAINT `movie_genre_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genre_master` (`genre_id`);

--
-- Constraints for table `movie_rating`
--
ALTER TABLE `movie_rating`
  ADD CONSTRAINT `movie_rating_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `movie_rating_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`);

--
-- Constraints for table `seat`
--
ALTER TABLE `seat`
  ADD CONSTRAINT `seat_ibfk_1` FOREIGN KEY (`theatre_id`) REFERENCES `theatre` (`theatre_id`);

--
-- Constraints for table `theatre`
--
ALTER TABLE `theatre`
  ADD CONSTRAINT `theatre_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city_master` (`city_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `theatre_ibfk_2` FOREIGN KEY (`manager_id`) REFERENCES `users` (`user_id`) ON DELETE SET NULL;

--
-- Constraints for table `theatre_rating`
--
ALTER TABLE `theatre_rating`
  ADD CONSTRAINT `theatre_rating_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `theatre_rating_ibfk_2` FOREIGN KEY (`theatre_id`) REFERENCES `theatre` (`theatre_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city_master` (`city_id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
