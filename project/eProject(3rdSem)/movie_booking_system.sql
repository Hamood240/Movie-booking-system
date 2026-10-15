-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 02:33 PM
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
-- Database: `movie_booking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_user`
--

CREATE TABLE `auth_user` (
  `user_id` int(11) NOT NULL,
  `password` varchar(128) NOT NULL,
  `username` varchar(150) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `date_joined` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_user`
--

INSERT INTO `auth_user` (`user_id`, `password`, `username`, `first_name`, `last_name`, `date_joined`) VALUES
(1, '123', 'user1', 'user', 'user1', '2022-04-29 23:55:28.000000'),
(3, '321', 'user3', 'user3', 'user3', '2022-04-30 09:03:50.000000'),
(5, '$2y$10$MuKANgFLbeaGAJ4x3YpoHuZVEfEjR5v/jWzxRw9FTKOXzIv688DAy', 'junaidghani@gmail.com', 'Junaid', 'Ghani', '0000-00-00 00:00:00.000000'),
(6, '$2y$10$BkaDRgrfpHstxHGYumQkvulMsbe4WB0IqvVIVnwOubpkelLAq2nx2', 'hassan@gmail.com', 'Hassan', 'Ali', '2022-05-08 10:00:19.491003'),
(7, '$2y$10$enT.E4CxRhkkNau2wAHWgeEK8sKzRp9Y2Zclr1qdXGrhJBSfMo7B6', 'irfan@gmail.com', 'Irfan', 'Azad', '2022-05-08 10:05:28.505595'),
(8, '$2y$10$3w7k9Qeg7aykYacO3qND/Oz7sRu6YIRmqXKgQVJML2SpAcc7v8SlG', 'Junaid@gmail.com', 'Junaid', 'Ghani', '2022-05-11 14:26:35.896441'),
(9, '$2y$10$TXGDGaWET6bGw6hLuZi4z.j7jt2dTXPvw0CK5zWlUgKE5sD8Tjv0m', 'Hamza@gmail.com', 'Hamza', 'Sidd', '2022-05-13 12:15:01.321394'),
(10, 'admin123', 'admin123', 'admin', '123', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `online_movie_sys_genre`
--

CREATE TABLE `online_movie_sys_genre` (
  `genre_id` bigint(20) NOT NULL,
  `genre_name` varchar(25) NOT NULL,
  `created` date NOT NULL DEFAULT current_timestamp(),
  `updated` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online_movie_sys_genre`
--

INSERT INTO `online_movie_sys_genre` (`genre_id`, `genre_name`, `created`, `updated`) VALUES
(1, 'Horror', '2022-04-14', '2022-04-14'),
(2, 'Action', '2022-04-14', '2022-04-14'),
(3, 'Comedy', '2022-04-14', '2022-04-14'),
(4, 'Animation', '2022-04-14', '2022-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `online_movie_sys_movie`
--

CREATE TABLE `online_movie_sys_movie` (
  `movie_id` bigint(20) NOT NULL,
  `movie_name` varchar(25) NOT NULL,
  `Mov_img` varchar(250) NOT NULL,
  `release_date` date NOT NULL,
  `trailer` varchar(1000) NOT NULL,
  `descrpt` varchar(1000) NOT NULL,
  `created` date NOT NULL DEFAULT current_timestamp(),
  `updated` date NOT NULL DEFAULT current_timestamp(),
  `genre_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online_movie_sys_movie`
--

INSERT INTO `online_movie_sys_movie` (`movie_id`, `movie_name`, `Mov_img`, `release_date`, `trailer`, `descrpt`, `created`, `updated`, `genre_id`) VALUES
(7, 'Spider Man No Way Home', 'pos1.jpg', '2022-04-30', 'https://www.youtube.com/watch?v=JfVOs4VSpmA', 'When a spell goes wrong, dangerous foes from other worlds start to appear, forcing Peter to discover ', '2022-04-17', '2022-04-17', 2),
(9, 'The Privilege', 'movie03.jpg', '2022-05-25', 'https://www.youtube.com/watch?v=BpSZQEwL_yE', 'A wealthy teen and his friends attending an elite private school uncover a dark conspiracy while looking into a  \r\nseries of strange supernatural events.', '2022-05-11', '2022-05-11', 1),
(10, 'Mars', 'movie02.jpg', '2022-05-30', 'https://www.youtube.com/watch?v=4tIXHLC24aY', 'The first manned mission to Mars in 2020 ends in disaster when three of the crew are seemingly killed and the fourth, Luke Graham (Don Cheadle), is stranded with no way to contact Earth. Jim McConnell (Gary Sinise), Woody Blake (Tim Robbins), Phil Ohlmyer (Jerry O\'Connell) and Terri Fisher (Connie Nielsen) are sent on a rescue mission to rescue any survivors and find out what happened. The team uncovers startling evidence that Mars may not be a dead planet after all.', '2022-05-11', '2022-05-11', 2),
(11, 'On watch', 'movie04.jpg', '2022-05-30', 'https://www.youtube.com/watch?v=twguSiMOTvc', 'The first manned mission to Mars in 2020 ends in disaster when three of the crew are seemingly killed and the fourth, Luke Graham Don Cheadle is stranded with no way to contact Earth. Jim McConnell Gary Sinise, Woody Blake Tim Robbins, Phil Ohlmyer Jerry O\'Connell and Terri Fisher Connie Nielsen are sent on a rescue mission to rescue any survivors and find out what happened. The team uncovers startling evidence that Mars may not be a dead planet after all.', '2022-05-12', '2022-05-12', 3),
(12, 'Fury', 'movie05.jpg', '2022-05-28', 'https://www.youtube.com/watch?v=DNHuK1rteF4', 'The first manned mission to Mars in 2020 ends in disaster when three of the crew are seemingly killed and the fourth, Luke Graham Don Cheadle is stranded with no way to contact Earth. Jim McConnell Gary Sinise, Woody Blake Tim Robbins, Phil Ohlmyer Jerry O\'Connell and Terri Fisher Connie Nielsen are sent on a rescue mission to rescue any survivors and find out what happened. The team uncovers startling evidence that Mars may not be a dead planet after all.', '2022-05-12', '2022-05-12', 2),
(13, 'Trooper', 'movie06.jpg', '2022-06-02', 'https://www.youtube.com/watch?v=zPYuV_jGk7M', 'The first manned mission to Mars in 2020 ends in disaster when three of the crew are seemingly killed and the fourth, Luke Graham Don Cheadle is stranded with no way to contact Earth. Jim McConnell Gary Sinise, Woody Blake Tim Robbins, Phil Ohlmyer Jerry O\'Connell and Terri Fisher Connie Nielsen are sent on a rescue mission to rescue any survivors and find out what happened. The team uncovers startling evidence that Mars may not be a dead planet after all.', '2022-05-12', '2022-05-12', 4),
(14, 'Horror Night', 'movie07.jpg', '2022-05-28', 'https://www.youtube.com/watch?v=2Tshycci2ZA', 'The first manned mission to Mars in 2020 ends in disaster when three of the crew are seemingly killed and the fourth, Luke Graham Don Cheadle is stranded with no way to contact Earth. Jim McConnell Gary Sinise, Woody Blake Tim Robbins, Phil Ohlmyer Jerry O\'Connell and Terri Fisher Connie Nielsen are sent on a rescue mission to rescue any survivors and find out what happened. The team uncovers startling evidence that Mars may not be a dead planet after all.                                                        ', '2022-05-12', '2022-05-12', 1),
(15, 'The Lost Name', 'movie08.jpg', '2022-05-28', 'https://www.youtube.com/watch?v=nfKO9rYDmE8', 'The first manned mission to Mars in 2020 ends in disaster when three of the crew are seemingly killed and the fourth, Luke Graham Don Cheadle is stranded with no way to contact Earth. Jim McConnell Gary Sinise, Woody Blake Tim Robbins, Phil Ohlmyer Jerry O\'Connell and Terri Fisher Connie Nielsen are sent on a rescue mission to rescue any survivors and find out what happened. The team uncovers startling evidence that Mars may not be a dead planet after all.                                                                                                                ', '2022-05-12', '2022-05-12', 3),
(16, 'Calm stedfast', 'movie09.jpg', '2022-05-20', 'https://www.youtube.com/watch?v=MZZHohrzgwc', 'The First manned mission to Mars in 2020 ends in disaster when three of the crew are seemingly killed and the fourth, Luke Graham Don Cheadle is stranded with no way to contact Earth. Jim McConnell Gary Sinise, Woody Blake Tim Robbins, \r\nPhil Jerry O\'Connell and Terri Fisher Connie Nielsen are sent on a rescue mission to rescue any survivors and find out what happened. The team uncovers startling evidence that Mars may not be a dead planet after all.                                                        ', '2022-05-12', '2022-05-12', 3),
(17, 'Criminal on party', 'movie10.jpg', '2022-05-25', 'https://www.youtube.com/watch?v=3bvnoqsvY-M', 'The first manned mission to Mars in 2020 ends in disaster when three of the crew are seemingly killed and the fourth, Luke Graham Don Cheadle is stranded with no way to contact Earth. Jim McConnell Gary Sinise, Woody Blake Tim Robbins, Phil Ohlmyer Jerry O\'Connell and Terri Fisher Connie Nielsen are sent on a rescue mission to rescue any survivors and find out what happened. The team uncovers startling evidence that Mars may not be a dead planet after all.', '2022-05-12', '2022-05-12', 4),
(18, 'Halloween party', 'movie11.jpg', '2022-05-23', 'https://www.youtube.com/watch?v=IExxpVPQ_ww', 'The first manned mission to Mars in 2020 ends in disaster when three of the crew are seemingly killed and the fourth, Luke Graham Don Cheadle is stranded with no way to contact Earth. Jim McConnell Gary Sinise, Woody Blake Tim Robbins, Phil Ohlmyer Jerry O\'Connell and Terri Fisher Connie Nielsen are sent on a rescue mission to rescue any survivors and find out what happened. The team uncovers startling evidence that Mars may not be a dead planet after all.', '2022-05-12', '2022-05-12', 4),
(19, 'The most wanted', 'movie12.jpg', '2022-05-27', 'https://www.youtube.com/watch?v=DDB1Bw2sZvU', 'The first manned mission to Mars in 2020 ends in disaster when three of the crew are seemingly killed and the fourth, Luke Graham Don Cheadle is stranded with no way to contact Earth. Jim McConnell Gary Sinise, Woody Blake Tim Robbins, Phil Ohlmyer Jerry O\'Connell and Terri Fisher Connie Nielsen are sent on a rescue mission to rescue any survivors and find out what happened. The team uncovers startling evidence that Mars may not be a dead planet after all.', '2022-05-12', '2022-05-12', 2),
(21, 'Alone', 'movie01.jpg', '2022-05-17', 'https://www.youtube.com/watch?v=RQNL2x4wK1s', 'The first manned mission to Mars in 2020 ends in disaster when three of the crew are seemingly killed and the fourth, Luke Graham Don Cheadle is stranded with no way to contact Earth. Jim McConnell Gary Sinise, Woody Blake Tim Robbins, Phil Ohlmyer Jerry O\'Connell and Terri Fisher Connie Nielsen are sent on a rescue mission to rescue any survivors and find out what happened. The team uncovers startling evidence that Mars may not be a dead planet after all.', '2022-05-12', '2022-05-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `online_movie_sys_reviewrating`
--

CREATE TABLE `online_movie_sys_reviewrating` (
  `r_r_id` bigint(20) NOT NULL,
  `visitor_name` varchar(225) NOT NULL,
  `review` varchar(225) NOT NULL,
  `rating` int(11) NOT NULL,
  `created` date NOT NULL DEFAULT current_timestamp(),
  `updated` date NOT NULL DEFAULT current_timestamp(),
  `movie_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `online_movie_sys_theater`
--

CREATE TABLE `online_movie_sys_theater` (
  `theater_id` bigint(20) NOT NULL,
  `theater_name` varchar(225) NOT NULL,
  `theater_loc` varchar(225) NOT NULL,
  `created` date NOT NULL DEFAULT current_timestamp(),
  `updated` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online_movie_sys_theater`
--

INSERT INTO `online_movie_sys_theater` (`theater_id`, `theater_name`, `theater_loc`, `created`, `updated`) VALUES
(1, 'Atrium Cinema', 'Atrium Mall 3rd Floor, 249 Staff Lines, Zaib-un-Nissa Street, Saddar, Karachi.', '2022-04-16', '2022-04-16'),
(2, 'Nueplex Cinema', 'Nueplex Cinemas DHA', '2022-04-16', '2022-04-16'),
(3, 'Mega Multiplex Cinema', 'Millennium Mall, Rashid Minhas Rd, Gulistan-e-Johar, Karachi', '2022-04-16', '2022-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `online_movie_sys_theater_movie`
--

CREATE TABLE `online_movie_sys_theater_movie` (
  `movie_theater_id` bigint(20) NOT NULL,
  `created` date NOT NULL DEFAULT current_timestamp(),
  `updated` date NOT NULL DEFAULT current_timestamp(),
  `movie_id` bigint(20) NOT NULL,
  `theater_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online_movie_sys_theater_movie`
--

INSERT INTO `online_movie_sys_theater_movie` (`movie_theater_id`, `created`, `updated`, `movie_id`, `theater_id`) VALUES
(7, '2022-05-07', '2022-05-07', 7, 1),
(9, '2022-05-13', '2022-05-13', 9, 2),
(10, '2022-05-16', '2022-05-16', 21, 2),
(11, '2022-05-16', '2022-05-16', 11, 3);

-- --------------------------------------------------------

--
-- Table structure for table `online_movie_sys_tickets`
--

CREATE TABLE `online_movie_sys_tickets` (
  `ticket_id` bigint(20) NOT NULL,
  `no_of_tickets` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `created` date NOT NULL DEFAULT current_timestamp(),
  `updated` date NOT NULL DEFAULT current_timestamp(),
  `movie_theater_id` bigint(20) NOT NULL,
  `theater` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `seat_cat` varchar(250) NOT NULL,
  `timing_id` bigint(20) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online_movie_sys_tickets`
--

INSERT INTO `online_movie_sys_tickets` (`ticket_id`, `no_of_tickets`, `total_price`, `created`, `updated`, `movie_theater_id`, `theater`, `date`, `seat_cat`, `timing_id`, `user_id`) VALUES
(26, 2, 100, '2022-05-07', '2022-05-07', 7, '', '', '', 26, 3),
(27, 1, 100, '2022-05-09', '2022-05-09', 7, '7', '26', '26', 26, 5),
(61, 3, 100, '2022-05-11', '2022-05-11', 7, '7', '26', '500', 26, 5),
(62, 3, 100, '2022-05-11', '2022-05-11', 7, '7', '26', '1000', 26, 5),
(63, 3, 100, '2022-05-11', '2022-05-11', 7, '7', '26', '1500', 26, 6),
(64, 3, 100, '2022-05-11', '2022-05-11', 7, '7', '26', '500', 26, 5),
(65, 2, 100, '2022-05-11', '2022-05-11', 7, '7', '26', '500', 26, 5),
(66, 3, 1500, '2022-05-11', '2022-05-11', 7, '7', '26', '500', 26, 6),
(67, 3, 1500, '2022-05-11', '2022-05-11', 7, '7', '26', '500', 26, 6),
(68, 3, 1500, '2022-05-11', '2022-05-11', 7, '7', '26', '500', 26, 6),
(69, 3, 1500, '2022-05-11', '2022-05-11', 7, '7', '26', '500', 26, 6),
(70, 3, 1500, '2022-05-11', '2022-05-11', 7, '7', '26', '500', 26, 6),
(71, 3, 1500, '2022-05-11', '2022-05-11', 7, '7', '26', '500', 26, 6),
(72, 3, 1500, '2022-05-11', '2022-05-11', 7, '7', '26', '500', 26, 6),
(73, 3, 1500, '2022-05-11', '2022-05-11', 7, '7', '26', '500', 26, 8),
(74, 3, 3000, '2022-05-11', '2022-05-11', 7, '7', '26', '1000', 26, 8),
(75, 2, 100, '2022-05-13', '2022-05-13', 9, '9', '27', '27', 27, 5),
(76, 4, 4000, '2022-05-13', '2022-05-13', 9, '9', '27', '1000', 27, 8),
(77, 3, 1500, '2022-05-13', '2022-05-13', 9, '9', '27', '500', 27, 8),
(78, 3, 1500, '2022-05-13', '2022-05-13', 9, '9', '27', '500', 27, 8),
(79, 3, 1500, '2022-05-13', '2022-05-13', 9, '9', '27', '500', 27, 8),
(80, 3, 1500, '2022-05-13', '2022-05-13', 9, '9', '27', '500', 27, 8),
(81, 3, 1500, '2022-05-13', '2022-05-13', 9, '9', '27', '500', 27, 8),
(82, 3, 1500, '2022-05-13', '2022-05-13', 9, '9', '27', '500', 27, 8),
(83, 3, 1500, '2022-05-13', '2022-05-13', 9, '9', '27', '500', 27, 8),
(84, 3, 1500, '2022-05-13', '2022-05-13', 9, '9', '27', '500', 27, 8),
(85, 3, 1500, '2022-05-13', '2022-05-13', 9, '9', '27', '500', 27, 8),
(86, 3, 1500, '2022-05-13', '2022-05-13', 9, '9', '27', '500', 27, 8),
(87, 4, 4000, '2022-05-13', '2022-05-13', 9, '9', '27', '1000', 27, 9),
(88, 3, 4500, '2022-05-13', '2022-05-13', 9, '9', '27', '1500', 27, 6),
(90, 3, 1500, '2022-05-16', '2022-05-16', 9, '9', '27', '500', 27, 6),
(91, 3, 3000, '2022-05-16', '2022-05-16', 11, '11', '29', '1000', 29, 6),
(92, 1, 500, '2022-05-16', '2022-05-16', 11, '11', '29', '500', 29, 6);

-- --------------------------------------------------------

--
-- Table structure for table `online_movie_sys_timing`
--

CREATE TABLE `online_movie_sys_timing` (
  `timing_id` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `gold_no_seats` int(11) NOT NULL,
  `gold_seat_prce` int(11) NOT NULL,
  `platinum_no_seats` int(11) NOT NULL,
  `platinum_seat_prce` int(11) NOT NULL,
  `box_class_no_seats` int(11) NOT NULL,
  `box_class_seat_prce` int(11) NOT NULL,
  `created` date NOT NULL DEFAULT current_timestamp(),
  `updated` date NOT NULL DEFAULT current_timestamp(),
  `movie_theater_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online_movie_sys_timing`
--

INSERT INTO `online_movie_sys_timing` (`timing_id`, `date`, `start_time`, `end_time`, `gold_no_seats`, `gold_seat_prce`, `platinum_no_seats`, `platinum_seat_prce`, `box_class_no_seats`, `box_class_seat_prce`, `created`, `updated`, `movie_theater_id`) VALUES
(26, '2022-05-10', '04:16:00', '06:16:00', 20, 500, 20, 1000, 10, 1500, '2022-05-07', '2022-05-07', 7),
(27, '2022-05-20', '01:22:00', '03:22:00', 20, 500, 20, 1000, 20, 1500, '2022-05-13', '2022-05-13', 9),
(28, '2022-05-19', '11:17:00', '00:17:00', 50, 500, 50, 1000, 50, 1500, '2022-05-16', '2022-05-16', 10),
(29, '2022-05-11', '11:24:00', '01:24:00', 20, 500, 10, 1000, 10, 1500, '2022-05-16', '2022-05-16', 11);

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(15, 'Irfan', 4, 'Best Movie In My Life', 1652789162),
(16, 'Hassan', 5, 'Nice Movie', 1652789192),
(17, 'Wahaj Mehboba', 5, 'I Like It', 1652789217);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_user`
--
ALTER TABLE `auth_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `online_movie_sys_genre`
--
ALTER TABLE `online_movie_sys_genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `online_movie_sys_movie`
--
ALTER TABLE `online_movie_sys_movie`
  ADD PRIMARY KEY (`movie_id`),
  ADD KEY `online_movie_sys_mov_genre_id_f7fa9732_fk_online_mo` (`genre_id`);

--
-- Indexes for table `online_movie_sys_reviewrating`
--
ALTER TABLE `online_movie_sys_reviewrating`
  ADD PRIMARY KEY (`r_r_id`),
  ADD KEY `online_movie_sys_rev_movie_id_8a7d846e_fk_online_mo` (`movie_id`);

--
-- Indexes for table `online_movie_sys_theater`
--
ALTER TABLE `online_movie_sys_theater`
  ADD PRIMARY KEY (`theater_id`);

--
-- Indexes for table `online_movie_sys_theater_movie`
--
ALTER TABLE `online_movie_sys_theater_movie`
  ADD PRIMARY KEY (`movie_theater_id`),
  ADD KEY `online_movie_sys_the_movie_id_1263dd17_fk_online_mo` (`movie_id`),
  ADD KEY `online_movie_sys_the_theater_id_ae9db13d_fk_online_mo` (`theater_id`);

--
-- Indexes for table `online_movie_sys_tickets`
--
ALTER TABLE `online_movie_sys_tickets`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `online_movie_sys_tic_timing_id_db9a2a34_fk_online_mo` (`timing_id`),
  ADD KEY `online_movie_sys_tickets_user_id_4717bf00_fk_auth_user_id` (`user_id`),
  ADD KEY `online_movie_sys_tic_movie_id_49eaa562_fk_online_mo` (`movie_theater_id`);

--
-- Indexes for table `online_movie_sys_timing`
--
ALTER TABLE `online_movie_sys_timing`
  ADD PRIMARY KEY (`timing_id`),
  ADD KEY `movie_id` (`movie_theater_id`);

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_user`
--
ALTER TABLE `auth_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `online_movie_sys_genre`
--
ALTER TABLE `online_movie_sys_genre`
  MODIFY `genre_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `online_movie_sys_movie`
--
ALTER TABLE `online_movie_sys_movie`
  MODIFY `movie_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `online_movie_sys_reviewrating`
--
ALTER TABLE `online_movie_sys_reviewrating`
  MODIFY `r_r_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `online_movie_sys_theater`
--
ALTER TABLE `online_movie_sys_theater`
  MODIFY `theater_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `online_movie_sys_theater_movie`
--
ALTER TABLE `online_movie_sys_theater_movie`
  MODIFY `movie_theater_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `online_movie_sys_tickets`
--
ALTER TABLE `online_movie_sys_tickets`
  MODIFY `ticket_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `online_movie_sys_timing`
--
ALTER TABLE `online_movie_sys_timing`
  MODIFY `timing_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `online_movie_sys_movie`
--
ALTER TABLE `online_movie_sys_movie`
  ADD CONSTRAINT `online_movie_sys_mov_genre_id_f7fa9732_fk_online_mo` FOREIGN KEY (`genre_id`) REFERENCES `online_movie_sys_genre` (`genre_id`);

--
-- Constraints for table `online_movie_sys_reviewrating`
--
ALTER TABLE `online_movie_sys_reviewrating`
  ADD CONSTRAINT `online_movie_sys_rev_movie_id_8a7d846e_fk_online_mo` FOREIGN KEY (`movie_id`) REFERENCES `online_movie_sys_movie` (`movie_id`);

--
-- Constraints for table `online_movie_sys_theater_movie`
--
ALTER TABLE `online_movie_sys_theater_movie`
  ADD CONSTRAINT `online_movie_sys_the_movie_id_1263dd17_fk_online_mo` FOREIGN KEY (`movie_id`) REFERENCES `online_movie_sys_movie` (`movie_id`),
  ADD CONSTRAINT `online_movie_sys_the_theater_id_ae9db13d_fk_online_mo` FOREIGN KEY (`theater_id`) REFERENCES `online_movie_sys_theater` (`theater_id`);

--
-- Constraints for table `online_movie_sys_tickets`
--
ALTER TABLE `online_movie_sys_tickets`
  ADD CONSTRAINT `online_movie_sys_tic_movie_id_49eaa562_fk_online_mo` FOREIGN KEY (`movie_theater_id`) REFERENCES `online_movie_sys_theater_movie` (`movie_theater_id`),
  ADD CONSTRAINT `online_movie_sys_tic_timing_id_db9a2a34_fk_online_mo` FOREIGN KEY (`timing_id`) REFERENCES `online_movie_sys_timing` (`timing_id`),
  ADD CONSTRAINT `online_movie_sys_tickets_user_id_4717bf00_fk_auth_user_id` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`user_id`);

--
-- Constraints for table `online_movie_sys_timing`
--
ALTER TABLE `online_movie_sys_timing`
  ADD CONSTRAINT `online_movie_sys_timing_ibfk_1` FOREIGN KEY (`movie_theater_id`) REFERENCES `online_movie_sys_theater_movie` (`movie_theater_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
