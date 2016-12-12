-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2016 at 01:03 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `ID` int(65) NOT NULL,
  `ID` int(65) NOT NULL,
  `Age` int(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Profession` varchar(50) NOT NULL,
  `Apt_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`ID`, `ID`, `Age`, `Gender`, `Profession`, `Apt_type`) VALUES
(1, 1, 29, 'male', 'User Experience Designer', '3BHK'),
(27, 19, 26, 'male', 'Student', 'Studio'),
(29, 21, 25, 'male', 'Student', 'Studio'),
(32, 23, 27, 'male', 'User Experience Designer', '2BHK'),
(34, 24, 42, 'male', 'Cricketer', 'Studio'),
(37, 27, 34, 'male', 'Cricketer', '1BHK'),
(38, 28, 38, 'male', 'Cricketer', '3BHK'),
(40, 30, 29, 'male', 'Cricketer', '2BHK'),
(41, 31, 18, 'male', 'cricketer', '3BHK'),
(43, 32, 34, 'male', 'Senior User Experience Designer', 'Studio'),
(45, 33, 65, 'male', 'Politician', '3BHK'),
(47, 35, 25, 'male', 'Visual Designer&#039;s', '1BHK'),
(50, 38, 56, 'male', 'Chef&#039;s', '2BHK'),
(53, 46, 34, 'male', 'Student', '2BHK'),
(54, 47, 3, 'male', 'g', 'Studio'),
(55, 1, 29, 'male', 'User Experience Designer', '3BHK'),
(56, 52, 35, 'male', 'sgjfdgjdg', '1BHK'),
(57, 53, 50, 'male', 'None', '1BHK'),
(58, 39, 38, 'male', 'Entreprunar', '2BHK'),
(63, 59, 12, 'male', 'Tester', 'Studio'),
(64, 60, 12, 'male', 'Tester', 'Studio'),
(65, 60, 12, 'male', 'Tester', 'Studio'),
(66, 62, 23, 'male', 'Student', '1BHK'),
(67, 63, 1000, 'female', 'Goddess', '3BHK'),
(68, 64, 22, 'male', 'Student', 'Studio'),
(70, 66, 8, 'male', 'cricket team', '3BHK'),
(71, 67, 0, 'male', 'TESTER', 'Studio'),
(72, 68, 18, 'male', 'dancer', 'Studio'),
(73, 69, 45, 'male', 'Ser', '1BHK'),
(74, 70, 28, 'male', 'student', '3BHK'),
(75, 71, 34, 'female', 'Tester', '2BHK'),
(80, 75, 77777, 'female', '&#039;&#039;&#039;&#039;&#039;&#039;&#039;&#039;&#', 'Studio'),
(81, 76, 678, 'male', 'optyu', 'Studio'),
(83, 77, 1000, 'female', 'namaha', 'Studio');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(65) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `Username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `First_name`, `Last_name`, `Username`) VALUES
(1, 'Karthik', 'Adyapady Srikrishna Swami', 'ASK'),
(2, 'Suneet', 'Patil', 'SP'),
(3, 'Suneet', 'Patil', '23'),
(4, 'Suneet', 'Patil', 'SP'),
(5, 'Virat', 'Kohli', 'VK'),
(6, 'Mahendra Singh', 'Dhoni', 'MSD'),
(7, 'Ravichandran', 'Ashwin', 'RA'),
(8, 'Virendar', 'Sehwag', 'VS'),
(9, 'Gautham', 'Gambir', 'GG'),
(10, 'Star', 'Bucks', 'SB'),
(11, 'Sabrina', 'St eloi', 'SS'),
(12, 'Mohammad', 'Shami', 'MS'),
(13, 'Form', 'Testing', 'FT'),
(14, 'Php', 'Include', 'Testing'),
(15, 'Sundar', 'Yatil', 'SY'),
(17, '', '', ''),
(18, 'wow', 'working', 'ww'),
(19, 'Sambit&#039;s', 'Mohanty', 'SM'),
(21, 'Aditya', 'Siva', 'msaditya9'),
(22, 'Bannana', 'Minions', 'bm'),
(23, 'Dheraj', 'Sakpal', 'DS'),
(24, 'Chris', 'Gayle', 'CG'),
(25, 'Vino', 'Pablo', 'VP'),
(26, 'Suhas', 'Reddy', 'sr'),
(27, 'Rohit', 'Sharma', 'RS'),
(28, 'Hashim', 'Amla', 'HA'),
(29, 'Gautham', 'Gambhir', 'GG'),
(30, 'Gautham', 'Gambir', 'ggg'),
(31, 'Kapil', 'Dev', 'KD'),
(32, 'Jason', 'Prutny', 'JP'),
(33, 'Naredra', 'Modi', 'NM'),
(35, 'Krishna', 'Prasad', 'KP'),
(37, 'Is', 'IT', 'Working?'),
(38, 'Testing', 'in', 'Mozilla'),
(39, 'Neil', 'Harner', 'NH'),
(40, 'wat', 'the ', 'fuk'),
(41, 'is', 'it', 'working'),
(42, 'Testing', 'jghjglkhj', 'yuyuyu'),
(43, 'abd', 'sdf', 'rtrt'),
(45, 'Saif', 'Ali', 'SA'),
(46, 'new', 'styl', 'nss'),
(47, 'Wireframing', 'Testing', 'WIREFRAME'),
(48, 'abcd', 'efgh', 'xyz'),
(49, 'abcd', 'efgh', 'xyz'),
(50, 'steven', 'smith', 'ss48'),
(51, 'Jacob', 'Oram', 'jo'),
(52, 'New data', 'working?', 'ndw'),
(53, 'Rahul&#039;s', 'djaofn', 'fsvfs'),
(54, 'Neil', 'Harner', 'NH'),
(55, '', '', ''),
(56, '', '', ''),
(57, '', '', ''),
(58, '', '', ''),
(59, 'update', 'Update', 'UU'),
(60, 'updateyutuytu', 'Update', 'UUyuyuyuyu'),
(61, 'updateyutuytu', 'Update', 'UUyuyuyuyu'),
(62, 'abc123', 'xyz456', 'abcdef'),
(63, 'Kaala', 'Lakshmi', 'Namaha'),
(64, 'Harshavardhan', 'Murthy', 'HM'),
(66, 'royal', 'challengers', 'bangalore'),
(67, 'information', 'archieteture', 'IA'),
(68, 'dilon', 'traver', 'dt'),
(69, 'The', 'Great', 'Den'),
(70, 'Testing&#039;s', 'it', 'final'),
(71, 'Usability', 'Testig', 'UT'),
(75, '&#039;&#039;', '''''''''''', 'klkl'),
(76, '&#039;&#039;&#039;&#039;&#039;&#039;', '''''''''''''''''''''', ''''''''''''''''''''''''''''''''''),
(77, 'om', 'shree', 'kaala lakshmai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `ID` int(65) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(65) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD CONSTRAINT `userinfo_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `users` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
