-- phpMyAdmin SQL Dump
-- version 4.4.15.8
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2017 at 01:07 PM
-- Server version: 5.6.31
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `AddTutors`
--

CREATE TABLE IF NOT EXISTS `AddTutors` (
  `Id` int(11) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Course` varchar(40) NOT NULL,
  `CDescription` varchar(50) NOT NULL,
  `Folder` varchar(80) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `AddTutors`
--

INSERT INTO `AddTutors` (`Id`, `Username`, `Course`, `CDescription`, `Folder`) VALUES
(1, 'Vijayteja30', 'C Language', 'C Language Programming', 'Vijayteja30_C Language'),
(9, 'saddam69', 'oracle', 'Oracle database Software to handle the Data', 'saddam69_oracle'),
(10, 'Vijayteja30', 'WebDevelopment', 'Web Development tutors.......', 'Vijayteja30_WebDevelopment'),
(11, 'saddam69', 'Php Scripting', 'I have One year of experience in php programming a', 'saddam69_Php Scripting'),
(13, 'vishnu13', 'HTMLScript Programming', 'I have Experience in HTML nearly about two years .', 'vishnu13_HTMLScript Programming'),
(14, 'vishnu13', 'HTMLScript Programming', 'videos', 'vishnu13_HTMLScript Programming'),
(15, 'vishnu13', 'Php Scripting', 'php videos', 'vishnu13_Php Scripting'),
(16, '', 'python Programming', 'jdfkjdskfsdf', '_python Programming'),
(17, 'Vijayteja30', 'aa', 'aa', 'Vijayteja30_aa'),
(18, 'Vijayteja30', 'bb', 'dksdsfl', 'Vijayteja30_bb'),
(19, 'Vijayteja30', 'aa', 'bb', 'Vijayteja30_aa'),
(20, 'Vijayteja30', 'Operating systems', 'kjdjd', 'Vijayteja30_Operating systems');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Id` int(11) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Username`, `Password`) VALUES
(1, 'vijayteja30', 'password143');

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE IF NOT EXISTS `instructors` (
  `Id` int(10) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(35) NOT NULL,
  `Dob` date NOT NULL,
  `Gender` char(5) NOT NULL,
  `Mobile` bigint(13) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`Id`, `Name`, `Email`, `Username`, `Password`, `Dob`, `Gender`, `Mobile`) VALUES
(1, 'Veera Vijay Teja', 'Vijayteja30@gmail.com', 'Vijayteja30', 'password', '2017-03-30', 'm', 8341841937),
(6, 'saddam', 'Saddamhussain@gmail.com', 'saddam69', 'password', '2017-03-05', 'm', 9966548577);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `Name` varchar(35) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(35) NOT NULL,
  `Dob` date NOT NULL,
  `Gender` char(5) NOT NULL,
  `Mobile` bigint(13) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`Name`, `Email`, `Username`, `Password`, `Dob`, `Gender`, `Mobile`, `id`) VALUES
('Saddam', 'SaddamHussain@gmail.com', 'Saddam69', 'password', '2017-03-14', 'm', 919966548577, 1),
('vijay', 'vijay@gmail.com', 'vijayteja30@gmail.com', 'pass', '2017-03-01', 'm', 8855664422, 3),
('Richi Richards', 'richirichards2@gmail.com', 'richirichard2', '1234', '1995-12-30', 'm', 9908925239, 6);

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `id` int(10) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Firstname` varchar(20) NOT NULL,
  `Lastname` varchar(20) DEFAULT NULL,
  `Surname` varchar(20) DEFAULT NULL,
  `Emailid` varchar(40) NOT NULL,
  `Dob` date NOT NULL,
  `Mobile` bigint(13) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `Username`, `Password`, `Firstname`, `Lastname`, `Surname`, `Emailid`, `Dob`, `Mobile`) VALUES
(1, 'Vijayteja30', '8341841937', 'Veera', 'VijayaTeja', 'Muthyala', 'Vijayteja30@gmail.com', '1995-06-30', 8341841937),
(2, 'vishnu13', '1234', 'vishnu', 'vardhan', 'madduri', 'maddurivishnuvardhan@gmail.com', '2017-02-08', 8519884617);

-- --------------------------------------------------------

--
-- Table structure for table `VideoLinks`
--

CREATE TABLE IF NOT EXISTS `VideoLinks` (
  `Id` int(10) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Course` varchar(40) NOT NULL,
  `VideoName` varchar(50) NOT NULL,
  `VideoLink` varchar(400) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `VideoLinks`
--

INSERT INTO `VideoLinks` (`Id`, `Username`, `Course`, `VideoName`, `VideoLink`) VALUES
(27, 'Vijayteja30', 'C Language', 'Java FIlters Concept', 'http://localhost/Project/uploads/Adv Java Filters Part 1 - 45th video.mp4'),
(28, 'Vijayteja30', 'C Language', 'context and config Params', 'http://localhost/Project/uploads/Adv Java Context and Config Params Part 2 - 36th video.mp4'),
(30, 'Vijayteja30', 'C Language', 'context and config Params Part2', 'http://localhost/Project/uploads/Adv Java Context and Config Params Part 3 - 37th video.mp4'),
(31, 'saddam69', 'Php Scripting', 'Php Beginner Video..', 'http://localhost/Project/uploads/Beginner PHP Tutorial - 1 - Introduction to PHP.mp4'),
(32, 'saddam69', 'Php Scripting', 'Installing Xampp Server Part-1', 'http://localhost/Project/uploads/Beginner PHP Tutorial - 2 - Installing XAMPP Part 1.mp4'),
(33, 'saddam69', 'Php Scripting', 'Installing Xampp Server Part-2', 'http://localhost/Project/uploads/Beginner PHP Tutorial - 3 - Installing XAMPP Part 2.mp4'),
(34, 'vishnu13', 'HTMLScript Programming', 'Creating the first Html Page', 'http://localhost/Project/uploads/HTML Tutorial for Beginners - 01 - Creating the first web page.mp4'),
(35, 'vishnu13', 'HTMLScript Programming', 'Line breaks. Spacing and Comments', 'http://localhost/Project/uploads/HTML Tutorial for Beginners - 02 - Line breaks, spacing, and comments.mp4'),
(36, 'vishnu13', 'HTMLScript Programming', 'Ordered and Unordered Lists', 'http://localhost/Project/uploads/HTML Tutorial for Beginners - 03 - Ordered and Unordered lists.mp4'),
(37, 'vishnu13', 'HTMLScript Programming', 'Creating a Table in HTML', 'http://localhost/Project/uploads/HTML Tutorial for Beginners - 04 - Creating a table.mp4'),
(38, 'Vijayteja30', 'WebDevelopment', 'Creating A Table', 'http://localhost/Project/uploads/HTML Tutorial for Beginners - 05 - Creating a web link.mp4'),
(39, 'Vijayteja30', 'WebDevelopment', ' Creating links within same web page', 'http://localhost/Project/uploads/HTML Tutorial for Beginners - 06 - Creating links within same web page.mp4'),
(40, 'Vijayteja30', 'WebDevelopment', 'Adding a image to a web page', 'http://localhost/Project/uploads/HTML Tutorial for Beginners - 07 - Adding a image to a web page.mp4'),
(41, 'Vijayteja30', 'WebDevelopment', 'Resizing and sizing images', 'http://localhost/Project/uploads/HTML Tutorial for Beginners - 08 - Resizing and sizing images.mp4'),
(42, 'saddam69', 'oracle', 'One-line text box', 'http://localhost/Project/uploads/HTML Tutorial for Beginners - 10 - One-line text box.mp4'),
(43, 'saddam69', 'oracle', 'Multi-line text box', 'http://localhost/Project/uploads/HTML Tutorial for Beginners - 12 - Multi-line text box.mp4'),
(44, 'saddam69', 'oracle', 'Radio buttons', 'http://localhost/Project/uploads/HTML Tutorial for Beginners - 13 - Radio buttons.mp4'),
(45, 'saddam69', 'oracle', 'Checkbox', 'http://localhost/Project/uploads/HTML Tutorial for Beginners - 14 - Checkbox.mp4'),
(46, 'vishnu13', 'Php Scripting', 'print', 'http://localhost/Project/uploads/Beginner PHP Tutorial - 10 - print.mp4'),
(47, 'vishnu13', 'Php Scripting', ' Output HTML Using echoâ„print', 'http://localhost/Project/uploads/Beginner PHP Tutorial - 11 - Output HTML Using echoâ„print.mp4'),
(48, 'vishnu13', 'Php Scripting', '- Indentation', 'http://localhost/Project/uploads/Beginner PHP Tutorial - 8 - Indentation.mp4'),
(49, 'vishnu13', 'Php Scripting', 'Embedding PHP Inside HTML', 'http://localhost/Project/uploads/Beginner PHP Tutorial - 12 - Embedding PHP Inside HTML.mp4'),
(50, 'Vijayteja30', 'Operating systems', 'Data structures', 'http://localhost/Project/uploads/ANIL unit 2 A.wmv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AddTutors`
--
ALTER TABLE `AddTutors`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Mobile` (`Mobile`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Emailid` (`Emailid`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Mobile` (`Mobile`);

--
-- Indexes for table `VideoLinks`
--
ALTER TABLE `VideoLinks`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `VideoLink` (`VideoLink`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `AddTutors`
--
ALTER TABLE `AddTutors`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `VideoLinks`
--
ALTER TABLE `VideoLinks`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
