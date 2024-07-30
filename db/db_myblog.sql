-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 21, 2017 at 05:39 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_myblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_us`
--

CREATE TABLE `tbl_contact_us` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Company_name` varchar(100) NOT NULL,
  `Subject` varchar(500) NOT NULL,
  `Message` varchar(20000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact_us`
--

INSERT INTO `tbl_contact_us` (`Name`, `Email`, `Phone`, `Company_name`, `Subject`, `Message`) VALUES
('Khalil', 'khalilshaikh1357@gmail.com', 9325501491, 'Google', 'Job', 'Applying for Web Developer'),
('Aves', 'avessayyed009@gmail.com',8983692406, 'Infosys', 'Coding', 'Excellent knowledge of coding'),
('naaz', 'naaz324@gmail.com', 9831520786, 'ACG Pharmatech', 'pharma', 'health is wealth'),
('PRITAM CHAVAN', 'chavan.pritam7777@gmail.com', 9875643201, 'TCS', 'Senior technician', 'great knowledge in this field');


-- --------------------------------------------------------

--
-- Table structure for table `tbl_my_blog_post`
--

CREATE TABLE `tbl_my_blog_post` (
  `Id` int(11) NOT NULL,
  `Title` varchar(500) NOT NULL,
  `Comment` varchar(30000) NOT NULL,
  `Image` text NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `is_approved` enum('Y','N') CHARACTER SET utf8 NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_my_blog_post`
--

INSERT INTO `tbl_my_blog_post` (`Id`, `Title`, `Comment`, `Image`, `parent_id`, `is_approved`) VALUES
(8, 'Varun Dhawan to turn director', 'Varun Dhawan seriously wants to follow in his father David Dhawan s and brother Rohit Dhawan s footsteps and has decided to direct films. According to a report in Mumbai Mirror, he has also written two screenplays for the same, which have been thrashed by both David and Rohit, who have advised him to work harder. The star has no complains though and mentions that while their opinion does matter, he wants to chalk his own path. He adds he wants to pursue a dark theme and not only direct but produce and act in the film as well. Thatâ€™s kind of cool, alright.', 'img/thu_2_1489145426.jpg', 0, 'N'),
(9, 'Salman Khan is very much doing film with Akshay Kumar, Akki confirms too', 'After actor Salman Khan clarified that his upcoming film with Akshay Kumar is not a rumour, the latter on Monday said that strong associations are made of commitment.\r\n\r\nAkshay is collaborating with Salman for a yet untitled project.\r\n\r\nOn Sunday night, Salman tweeted about his project with Akshay.\r\n\r\nDon t follow rumours. Follow me. Ek baar jo maine commitment kar di toh phir     Very much doing film with Akshay Kumar, Salman tweeted.\r\n\r\n', 'img/akshay-kumar-salman-khan-twitter-2.jpg', 0, 'N'),
(10, 'Dravid to join Daredevils preparatory camp  will not coach India U 23 in Emerging Trophy C', 'Rahul Dravid will not be rendering his services to the India Under 23 squad which will participate in the Asian Cricket Council s Emerging Trophy, to be played in Bangladesh from March 25 to April 5, as per PTI reports. Dravid, who is the coach of the India A and Under 19 sides, has been at the helm of all junior national teams, but the BCCI has given the former India batsman the leeway to go ahead and join his IPL franchise Delhi Daredevils this time, where he is the mentor.\r\n\r\nWith all the contracts handed out to the Indian support staff set to expire on March 31, Dravid is well within his right to skip the junior tournament, since it ends on April 5. The Daredevils unit are reportedly getting together for a preparatory camp from March 28 in the capital city.\r\n\r\nWith April and May being the two exclusive IPL months, the support staff of the national side join their respective franchises without any hindrance. However, the timing of the Emerging Trophy has taken away the biggest highlight of the competition, which allows four senior international players to be a part of the team, but understandably with the IPL around the corner, none of them would be able to be a part of it.\r\n\r\nOnly those players who do not have an IPL contract have been selected for the tournament. While Baba Aparajith will lead the side, the team comprises of the likes of Prithvi Shaw, Abhimanyu Easwaran, Hanuma Vihari, Mayank Dagar, Ankush Bains, Shubham Gill and a few more promising names, who have been doing well in recent times.\r\n\r\nThe last time when the competition was held in 2013, Suryakumar Yadav led India U 23 to victory by defeating Pakistan. ', 'img/prv_1489508091.jpeg', 0, 'N'),
(11, 'Status Image', 'This is my Status Image', 'img/Best-Online-Billing-and-Invoicing-Software-for-2017.jpg', 0, 'N'),
(12, 'Sehwag 200 Runs in ODI', 'Good Batsman', 'img/sehwaagspeciapic_630.jpg', 0, 'N'),
(13, 'Vedio DEmo', 'dfsfsdf ldfldsfjldfsl', 'img/DHEEVARA Bahubali Telugu Video Song PRABHAS TAMANNA BHATIADHEEVARA- Bahubali Telugu Video Song-PRABHAS,TAMANNA BHATIA_MobWon.Com.mp4.mp4', 0, 'N');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_comment`
--

CREATE TABLE `tbl_sub_comment` (
  `Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Comment` varchar(500) NOT NULL,
  `Blog_id` int(11) NOT NULL,
  `Status` varchar(15) NOT NULL DEFAULT 'Not Approved'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sub_comment`
--

INSERT INTO `tbl_sub_comment` (`Id`, `Name`, `Email`, `Comment`, `Blog_id`, `Status`) VALUES
(1, 'Khalil', 'khalilshaikh1357@gmail.com', 'good', 1, 'Approved'),
(2, 'Aves', 'avessayyed009@gmail.com', 'Brilliant', 12, 'Not Approved'),
(3, 'naaz', 'naaz324@gmail.com', 'Good', 10, 'Approved'),
(4, 'Saniraj Chavan', 'chavan.saniraj@gmail.com', 'Test Comment', 10, 'Approved'),
(5, 'vish', 'vish@gmail.com', 'good', 11, 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_reg`
--

CREATE TABLE `tbl_user_reg` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_reg`
--

INSERT INTO `tbl_user_reg` (`Id`, `Name`, `Address`, `Email`, `Password`) VALUES
(18, 'admin', 'pune', 'admin@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_my_blog_post`
--
ALTER TABLE `tbl_my_blog_post`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_sub_comment`
--
ALTER TABLE `tbl_sub_comment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_user_reg`
--
ALTER TABLE `tbl_user_reg`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_my_blog_post`
--
ALTER TABLE `tbl_my_blog_post`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_sub_comment`
--
ALTER TABLE `tbl_sub_comment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_user_reg`
--
ALTER TABLE `tbl_user_reg`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
