-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2021 at 04:43 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hlbcyhi2012`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminID` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletedAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentID` int(11) NOT NULL,
  `message` longtext,
  `userID` int(11) DEFAULT NULL,
  `organizerID` int(11) DEFAULT NULL,
  `socialFeedID` int(11) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletedAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courseorganizers`
--

CREATE TABLE `courseorganizers` (
  `organizerID` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletedAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courseID` int(11) NOT NULL,
  `courseName` varchar(255) DEFAULT NULL,
  `courseDescription` longtext,
  `courseFee` double(10,2) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `organizerID` int(11) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletedAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gamehistories`
--

CREATE TABLE `gamehistories` (
  `gameHistoryID` int(11) NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `setID` int(11) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletedAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gamerecords`
--

CREATE TABLE `gamerecords` (
  `gameRecordID` int(11) NOT NULL,
  `isCorrect` varchar(255) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `questionID` int(11) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletedAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `questionID` int(11) NOT NULL,
  `questionContent` varchar(255) DEFAULT NULL,
  `firstOption` varchar(255) DEFAULT NULL,
  `secondOption` varchar(255) DEFAULT NULL,
  `thirdOption` varchar(255) DEFAULT NULL,
  `fourthOption` varchar(255) DEFAULT NULL,
  `correctAnswer` varchar(255) DEFAULT NULL,
  `setID` int(11) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletedAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questionsets`
--

CREATE TABLE `questionsets` (
  `setID` int(11) NOT NULL,
  `setName` varchar(255) DEFAULT NULL,
  `setCategory` varchar(255) DEFAULT NULL,
  `adminID` int(11) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletedAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `socialfeeds`
--

CREATE TABLE `socialfeeds` (
  `socialFeedID` int(11) NOT NULL,
  `content` longtext,
  `title` varchar(255) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `organizerID` int(11) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletedAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `virtualMoney` int(10) DEFAULT NULL,
  `category1` varchar(255) DEFAULT NULL,
  `category2` varchar(255) DEFAULT NULL,
  `category3` varchar(255) DEFAULT NULL,
  `category4` varchar(255) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletedAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `socialFeedID` (`socialFeedID`),
  ADD KEY `organizerID` (`organizerID`);

--
-- Indexes for table `courseorganizers`
--
ALTER TABLE `courseorganizers`
  ADD PRIMARY KEY (`organizerID`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courseID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `organizerID` (`organizerID`);

--
-- Indexes for table `gamehistories`
--
ALTER TABLE `gamehistories`
  ADD PRIMARY KEY (`gameHistoryID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `setID` (`setID`);

--
-- Indexes for table `gamerecords`
--
ALTER TABLE `gamerecords`
  ADD PRIMARY KEY (`gameRecordID`),
  ADD KEY `questionID` (`questionID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`questionID`),
  ADD KEY `setID` (`setID`);

--
-- Indexes for table `questionsets`
--
ALTER TABLE `questionsets`
  ADD PRIMARY KEY (`setID`),
  ADD KEY `adminID` (`adminID`);

--
-- Indexes for table `socialfeeds`
--
ALTER TABLE `socialfeeds`
  ADD PRIMARY KEY (`socialFeedID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `organizerID` (`organizerID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courseorganizers`
--
ALTER TABLE `courseorganizers`
  MODIFY `organizerID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `courseID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gamehistories`
--
ALTER TABLE `gamehistories`
  MODIFY `gameHistoryID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gamerecords`
--
ALTER TABLE `gamerecords`
  MODIFY `gameRecordID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `questionID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questionsets`
--
ALTER TABLE `questionsets`
  MODIFY `setID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `socialfeeds`
--
ALTER TABLE `socialfeeds`
  MODIFY `socialFeedID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`socialFeedID`) REFERENCES `socialfeeds` (`socialFeedID`),
  ADD CONSTRAINT `comments_ibfk_3` FOREIGN KEY (`organizerID`) REFERENCES `courseorganizers` (`organizerID`);

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`),
  ADD CONSTRAINT `courses_ibfk_2` FOREIGN KEY (`organizerID`) REFERENCES `courseorganizers` (`organizerID`);

--
-- Constraints for table `gamehistories`
--
ALTER TABLE `gamehistories`
  ADD CONSTRAINT `gamehistories_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`),
  ADD CONSTRAINT `gamehistories_ibfk_2` FOREIGN KEY (`setID`) REFERENCES `questionsets` (`setID`);

--
-- Constraints for table `gamerecords`
--
ALTER TABLE `gamerecords`
  ADD CONSTRAINT `gamerecords_ibfk_1` FOREIGN KEY (`questionID`) REFERENCES `questions` (`questionID`),
  ADD CONSTRAINT `gamerecords_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`setID`) REFERENCES `questionsets` (`setID`);

--
-- Constraints for table `questionsets`
--
ALTER TABLE `questionsets`
  ADD CONSTRAINT `questionsets_ibfk_1` FOREIGN KEY (`adminID`) REFERENCES `admins` (`adminID`);

--
-- Constraints for table `socialfeeds`
--
ALTER TABLE `socialfeeds`
  ADD CONSTRAINT `socialfeeds_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`),
  ADD CONSTRAINT `socialfeeds_ibfk_2` FOREIGN KEY (`organizerID`) REFERENCES `courseorganizers` (`organizerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
