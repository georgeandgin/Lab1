-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 08, 2021 at 05:54 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `Author`
--

CREATE TABLE `Author` (
  `AuthorID` int(4) NOT NULL,
  `FirstName` varchar(15) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Website` varchar(2083) NOT NULL,
  `SSN` int(9) DEFAULT NULL,
  `BirthYear` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Author`
--

INSERT INTO `Author` (`AuthorID`, `FirstName`, `LastName`, `Website`, `SSN`, `BirthYear`) VALUES
(1, 'William', 'Shakespeare', 'https://en.wikipedia.org/wiki/William_Shakespeare', NULL, 1564),
(2, 'George', 'Orwell', 'https://en.wikipedia.org/wiki/George_Orwell', NULL, 1903),
(3, 'Albert', 'Camus', 'https://en.wikipedia.org/wiki/Albert_Camus', NULL, 1913),
(4, 'Kevin', 'Young', 'https://en.wikipedia.org/wiki/Kevin_Young_(poet)', NULL, 1970),
(5, 'Ernest', 'Hemingway', 'https://en.wikipedia.org/wiki/Ernest_Hemingway', NULL, 1899),
(6, 'Leo', 'Tolstoy', 'https://en.wikipedia.org/wiki/Leo_Tolstoy', NULL, 1828),
(7, 'James', 'Joyce', 'https://en.wikipedia.org/wiki/James_Joyce', NULL, 1882),
(8, 'Jesse', 'Ball', 'https://en.wikipedia.org/wiki/Jesse_Ball', NULL, 1978),
(9, 'John', 'Jodzio', 'http://johnjodzio.net/', NULL, NULL),
(10, 'Victor', 'Hugo', 'https://en.wikipedia.org/wiki/Victor_Hugo', NULL, 1802);

-- --------------------------------------------------------

--
-- Table structure for table `Book`
--

CREATE TABLE `Book` (
  `ISBN` varchar(10) NOT NULL,
  `Title` varchar(2083) NOT NULL,
  `NoPages` int(4) NOT NULL,
  `NoEdition` int(2) NOT NULL,
  `NoCopies` int(2) DEFAULT NULL,
  `PubYear` int(4) NOT NULL,
  `Publisher` varchar(2083) NOT NULL,
  `AuthorID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Book`
--

INSERT INTO `Book` (`ISBN`, `Title`, `NoPages`, `NoEdition`, `NoCopies`, `PubYear`, `Publisher`, `AuthorID`) VALUES
('0062676156', 'Census', 232, 1, 1, 2018, 'Ecco', 8),
('0099910101', 'A Farewell to Arms', 239, 2, 2, 2004, 'Arrow Books', 5),
('0140447938', 'War and Peace', 1440, 4, 2, 2009, 'Oxford University Press', 6),
('0141182709', 'Animal Farm', 141, 1, 2, 1996, 'Signet Classics', 2),
('0143035008', 'Anna Karenina', 864, 3, 2, 2004, 'Penguin Classics', 6),
('0307278581', 'Exile and the Kingdom', 166, 4, 2, 2007, 'Vintage', 3),
('0307908488', 'Silence Once Begun', 232, 1, 1, 2014, 'Pantheon', 8),
('0449300021', 'Les Misérables', 334, 2, 3, 1982, 'Random House Publishing Group', 10),
('0451527887', 'The Hunchback of Notre-Dame', 510, 3, 2, 2001, 'Signet Classics', 10),
('0553213008', 'A Midsummer Night\'s Dream', 240, 1, 2, 2016, 'Simon & Schuster', 1),
('0679720201', 'The Stranger', 123, 1, 2, 1989, 'Vintage', 3),
('0679720218', 'The Plague', 320, 1, 2, 1991, 'Vintage', 3),
('0679720225', 'The Fall', 147, 1, 2, 1991, 'Vintage', 3),
('0679722762', 'Ulysses', 783, 2, 2, 1990, 'Vintage', 7),
('0684804522', 'The Garden of Eden', 248, 2, 2, 2003, 'Scribner', 5),
('0684830493', 'The Old Man and the Sea', 96, 3, 2, 1996, 'Scribner', 5),
('0743297334', 'The Sun Also Rises', 320, 3, 2, 2006, 'Simon & Schuster', 5),
('0743477123', 'Hamlet', 289, 1, 2, 2005, 'Cambridge University Press', 1),
('1410122930', 'King Lear', 338, 2, 2, 2005, 'Penguin Books', 1),
('1411820082', 'The Myth of Sisyphus', 192, 3, 2, 2000, 'Penguin Classics', 3),
('1421808307', 'Burmese Days', 276, 1, 2, 2005, '1st World Library', 2),
('1443434973', '1984', 416, 1, 2, 2014, 'Harper Perennial', 2),
('1451694725', 'Macbeth', 249, 2, 2, 2013, 'Simon Schuster', 1),
('1524732540', 'Brown: Poems', 161, 1, 2, 2018, 'Knopf Publishing Group', 4),
('1580491650', 'Dubliners', 190, 3, 2, 2006, 'Prestwick House', 7),
('1580495788', 'Romeo and Juliet', 301, 2, 2, 2004, 'Simon Schuster', 1),
('1593766351', 'Knockout', 205, 1, 2, 2016, 'Soft Skull Press', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Author`
--
ALTER TABLE `Author`
  ADD PRIMARY KEY (`AuthorID`);

--
-- Indexes for table `Book`
--
ALTER TABLE `Book`
  ADD PRIMARY KEY (`ISBN`),
  ADD KEY `AuthorID` (`AuthorID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Author`
--
ALTER TABLE `Author`
  MODIFY `AuthorID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
