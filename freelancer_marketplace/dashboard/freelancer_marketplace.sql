-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 11:08 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freelancer_marketplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `application ID` int(50) NOT NULL,
  `jobTitle` varchar(50) NOT NULL,
  `joblocation` varchar(50) NOT NULL,
  `jobProposal` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  `paymentMethod` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`application ID`, `jobTitle`, `joblocation`, `jobProposal`, `file`, `paymentMethod`) VALUES
(0, 'nyanza', 'xcvkmnbv', '%PDF-1.7\r\n%????\r\n1 0 obj\r\n<</Type/Catalog/Pages 2 ', 'Bank Transfer', '0'),
(0, '%PDF-1.7\r\n%????\r\n1 0 obj\r\n<</Type/Catalog/Pages 2 ', 'Bank Transfer', '0', '', '0'),
(0, '%PDF-1.7\r\n%????\r\n1 0 obj\r\n<</Type/Catalog/Pages 2 ', 'Bank Transfer', '0', '', '0'),
(0, '%PDF-1.7\r\n%????\r\n1 0 obj\r\n<</Type/Catalog/Pages 2 ', 'Credit Card', '0', '', '0'),
(0, 'masonary', 'nyaruguru', 'i would like to work here ', '%PDF-1.7\r\n%????\r\n1 0 obj\r\n<</Type/Catalog/Pages 2 ', 'Credit Card'),
(0, 'masonary', 'nyaruguru', 'i would like to work here ', '%PDF-1.7\r\n%????\r\n1 0 obj\r\n<</Type/Catalog/Pages 2 ', 'Credit Card'),
(0, 'teaching', 'nyanza', 'fghjkjhgf', '%PDF-1.7\r\n%????\r\n1 0 obj\r\n<</Type/Catalog/Pages 2 ', 'Bank Transfer'),
(0, 'PLUMBING', 'GAKENKE', 'nbvcxsSdfghjjmnhbgvfcdx', '%PDF-1.7\r\n%????\r\n1 0 obj\r\n<</Type/Catalog/Pages 2 ', 'Credit Card');

-- --------------------------------------------------------

--
-- Table structure for table `freelancers`
--

CREATE TABLE `freelancers` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `hourly_rate` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `freelancers`
--

INSERT INTO `freelancers` (`id`, `name`, `skills`, `hourly_rate`) VALUES
(0, 'habimana ngumire', 'WEB DEVEROPER', 2),
(0, 'habimana ngumire', 'WEB DEVEROPER', 5),
(0, 'habimana ngumire', 'WEB DEVEROPER', 6),
(0, 'christian rugemana', 'content creator', 24),
(0, 'ANNET ', 'DOCTOR', 24);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobID` int(50) NOT NULL,
  `jobTitle` varchar(50) NOT NULL,
  `jobLocation` varchar(50) NOT NULL,
  `jobFile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobID`, `jobTitle`, `jobLocation`, `jobFile`) VALUES
(0, 'cooking', 'gisagara', 'Business Statistics  Assignment HUYE Campus.pdf'),
(27, 'teaching', 'nyanza', 'Business Statistics  Assignment HUYE Campus.pdf'),
(28, 'masonary', 'nyaruguru', 'Business Statistics  Assignment HUYE Campus.pdf'),
(29, 'nursing', 'kamonyi', 'Business Statistics  Assignment HUYE Campus.pdf'),
(30, 'PLUMBING', 'GAKENKE', 'Business Statistics  Assignment HUYE Campus.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(50) NOT NULL,
  `date` int(50) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `body` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `date`, `sender`, `receiver`, `subject`, `body`, `status`) VALUES
(0, 2024, 'ngumire', 'habimana ngumire', 'disicution', 'sfdghjtyrtuyghj', 'doctor'),
(0, 2024, 'ngumire', 'habimana ngumire', 'disicution', 'dfghjkcvbn', 'doctor'),
(0, 2024, 'ngumire', 'habimana ngumire', 'disicution', 'sfdghj', 'doctor');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `freelancer` varchar(50) NOT NULL,
  `client` varchar(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `date`, `freelancer`, `client`, `amount`, `status`) VALUES
(0, '2024-05-18', 'habimana', 'yves', 2000, 'Pending'),
(0, '2024-05-18', 'habimana', 'yves', 2000, 'Pending'),
(0, '2024-05-03', 'habimana', 'yves', 45999, 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `budget` varchar(50) NOT NULL,
  `deadline` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `budget`, `deadline`) VALUES
(0, 'online workibg', 'dfghkbjnl m', '4500', 2024),
(0, 'online workibg', 'dfghkbjnl m', '4500', 2024),
(0, 'online workibg', 'dgfhgjhkjbn', '4500', 2024),
(0, 'online workibg', 'dgfhgjhkjbn', '4500', 2024),
(0, 'online working', 'sdfgjhkhlj,kjhb', '4500', 2024),
(0, 'online working', 'sdfgjhkhlj,kjhb', '4500', 2024),
(0, 'web desgning', 'time mangement first of all', '1000000', 2024);

-- --------------------------------------------------------

--
-- Table structure for table `propasals`
--

CREATE TABLE `propasals` (
  `id` int(50) NOT NULL,
  `freelancer` varchar(50) NOT NULL,
  `project` varchar(50) NOT NULL,
  `cover_letter` varchar(50) NOT NULL,
  `bid_amount` int(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `propasals`
--

INSERT INTO `propasals` (`id`, `freelancer`, `project`, `cover_letter`, `bid_amount`, `status`) VALUES
(0, 'habimana', 'designing a project', 'dgfhjkgfhjkl', 1100, 'Pending'),
(0, 'habimana', 'designing a project', 'dfghjknl.bk,mn b', 1100, 'Accepted'),
(0, 'habimana', 'designing a project', 'tfyguhij', 1100, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(50) NOT NULL,
  `date` int(50) NOT NULL,
  `project` varchar(50) NOT NULL,
  `reviewer` varchar(50) NOT NULL,
  `rating` int(50) NOT NULL,
  `comment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `date`, `project`, `reviewer`, `rating`, `comment`) VALUES
(0, 2024, 'designing a project', 'mr tesser', 4, 'sdfghjkvbnm'),
(0, 2024, 'designing a project', 'mr tesser', 4, 'jachddfghjkgfyxcv'),
(0, 2024, 'freelancer marketplaxe', 'tesler', 4, 'ertyuicvgbnm');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(50) NOT NULL,
  `skill_name` varchar(50) NOT NULL,
  `proficiency` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill_name`, `proficiency`, `description`) VALUES
(0, 'web programmer', 'hjkjhg', 'fdghjkrty'),
(0, 'web ', 'below', 'am a masters graduate'),
(0, 'hyut', 'dfgh', 'dghgcvbnbkjhygf'),
(0, 'dfgh', 'fgyhu', 'sesrdtfgh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `email`, `password`) VALUES
(46, 'habimana', 'habimanangumire@gmail.com', '12123'),
(49, 'habimana', 'habimanangumire@gmail.com', '12123'),
(50, 'habimana', 'habimanangumire@gmail.com', '12123'),
(51, 'habimana', 'habimanangumire@gmail.com', '12123'),
(52, 'habimana', 'habimanangumire@gmail.com', '12123'),
(53, 'habimana', 'habimanangumire@gmail.com', '12123'),
(54, 'yves', 'habimanangumire@gmail.com', '12123'),
(55, 'habimana', 'habimanangumire@gmail.com', '12123'),
(56, 'habimana', 'habimanangumire@gmail.com', '12123'),
(57, 'habimana', 'habimanangumire@gmail.com', '12123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
