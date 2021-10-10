-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 02:15 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `authorID` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `short_desc` text NOT NULL,
  `author_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`authorID`, `fullname`, `short_desc`, `author_image`) VALUES
(1, 'Dmitry Glukhovsky', 'Dmitry Glukhovsky writes romantic suspense and women sleuth mysteries, using London and Cambridge as settings. Brought up in the Midlands, she went on to read English at London University, ', 'assets/img/picture/Dmitry_Glukhovsky.jpg'),
(2, 'J.K.Rowling', 'J.K.Rowling writes romantic suspense and women sleuth mysteries, using London and Cambridge as settings. Brought up in the Midlands, she went on to read English at London University, ', 'assets/img/picture/JKROWLING.jpg'),
(3, 'Stephen Kotken', 'writes romantic suspense and women sleuth mysteries, using London and Cambridge as settings. Brought up in the Midlands, she went on to read English at London University, ', 'assets/img/picture/kotkin.jpg'),
(4, 'Jojo Moyes', 'writes romantic suspense and women sleuth mysteries, using London and Cambridge as settings. Brought up in the Midlands, she went on to read English at London University, ', 'assets/img/picture/jojo-moyes.jpg'),
(5, 'Yoval Noah Harari', 'writes romantic suspense and women sleuth mysteries, using London and Cambridge as settings. Brought up in the Midlands, she went on to read English at London University, ', 'assets/img/picture/HARARIjpg.jpg'),
(6, 'El james', 'el james  writes romantic suspense and women sleuth mysteries, using London and Cambridge as settings. Brought up in the Midlands, she went on to read English at London University, ', 'assets/img/picture/el james.jpg'),
(7, 'Bob Woodward', 'jane Austin writes romantic suspense and women sleuth mysteries, using London and Cambridge as settings. Brought up in the Midlands, she went on to read English at London University, ', 'assets/img/picture/bob_woodward.jpg'),
(8, 'Nikita Gill', 'Nikita Gill writes romantic suspense and women sleuth mysteries, using London and Cambridge as settings. Brought up in the Midlands, she went on to read English at London University, ', 'assets/img/picture/nikita_gill.jpg'),
(9, 'Dav Pilkey', 'writes romantic suspense and women sleuth mysteries, using London and Cambridge as settings. Brought up in the Midlands, she went on to read English at London University, ', 'assets/img/picture/about.jpg'),
(10, 'rutger Bregman', 'writes romantic suspense and women sleuth mysteries, using London and Cambridge as settings. Brought up in the Midlands, she went on to read English at London University, ', 'assets/img/picture/Rutger_Bregman.jpg'),
(11, 'Sabine von Dirke', 'writes romantic suspense and women sleuth mysteries, using London and Cambridge as settings. Brought up in the Midlands, she went on to read English at London University, ', 'assets/img/picture/Sabine_von_Dirke.jpg'),
(12, 'javier guerrero', 'writes romantic suspense and women sleuth mysteries, using London and Cambridge as settings. Brought up in the Midlands, she went on to read English at London University, ', 'assets/img/picture/javier_guerrero.jpg'),
(13, 'Donald trump', 'writes romantic suspense and women sleuth mysteries, using London and Cambridge as settings. Brought up in the Midlands, she went on to read English at London University, ', 'assets/img/picture/donaldtrump.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `booklist`
--

CREATE TABLE `booklist` (
  `bookID` int(255) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `book_writerID` int(10) NOT NULL,
  `book_image` text CHARACTER SET latin1 NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(255) NOT NULL DEFAULT 0,
  `book_categoryID` int(10) NOT NULL,
  `desc` text NOT NULL,
  `date` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booklist`
--

INSERT INTO `booklist` (`bookID`, `book_name`, `book_writerID`, `book_image`, `price`, `quantity`, `book_categoryID`, `desc`, `date`) VALUES
(1, 'Great again', 13, 'assets/img/picture/Great_again.jpg', 20, 9, 3, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, ad iure ducimus error laborum possimus doloribus tempora alias cumque aspernatur a omnis maxime cupiditate accusantium vero rem aliquam quos corrupti..', ' 2020 09 29 - 23:11 '),
(2, 'Still Me', 12, 'assets/img/picture/still_me.jpg', 20, 9, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, ad iure ducimus error laborum possimus doloribus tempora alias cumque aspernatur a omnis maxime cupiditate accusantium vero rem aliquam quos corrupti..', ' 2020 09 29 - 23:47 '),
(3, 'Dog Man: Grime & Punishment', 11, 'assets/img/picture/dogman.jpg', 30, 10, 5, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, ad iure ducimus error laborum possimus doloribus tempora alias cumque aspernatur a omnis maxime cupiditate accusantium vero rem aliquam quos corrupti..', ' 2020 09 29 - 23:51 '),
(4, 'Dog Man: For the balls', 10, 'assets/img/picture/dogman2.jpg', 58, 100, 5, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, ad iure ducimus error laborum possimus doloribus tempora alias cumque aspernatur a omnis maxime cupiditate accusantium vero rem aliquam quos corrupti..', ' 2020 09 29 - 23:52 '),
(5, 'Metro 2033', 9, 'assets/img/picture/metro.jpg', 110, 100, 4, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, ad iure ducimus error laborum possimus doloribus tempora alias cumque aspernatur a omnis maxime cupiditate accusantium vero rem aliquam quos corrupti..', ' 2020 09 29 - 23:53 '),
(6, 'Harry Potter :1', 1, 'assets/img/picture/harry1.jpg', 100, 12, 6, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, ad iure ducimus error laborum possimus doloribus tempora alias cumque aspernatur a omnis maxime cupiditate accusantium vero rem aliquam quos corrupti..', ' 2020 09 29 - 23:54 '),
(7, 'Harry Potter :2', 1, 'assets/img/picture/harry2.jpg', 110, 20, 6, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, ad iure ducimus error laborum possimus doloribus tempora alias cumque aspernatur a omnis maxime cupiditate accusantium vero rem aliquam quos corrupti..', ' 2020 09 29 - 23:55 '),
(8, '\0Fifty Shades Darker', 8, 'assets/img/picture/darker.jpg', 58, 100, 5, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, ad iure ducimus error laborum possimus doloribus tempora alias cumque aspernatur a omnis maxime cupiditate accusantium vero rem aliquam quos corrupti..', ' 2020 09 29 - 23:56 '),
(9, '\0Dog Man: Brawl & Wild', 10, 'assets/img/picture/dogman3.jpg', 41, 20, 4, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, ad iure ducimus error laborum possimus doloribus tempora alias cumque aspernatur a omnis maxime cupiditate accusantium vero rem aliquam quos corrupti..', ' 2020 09 29 - 23:57 '),
(10, '\0Harry Potter :3', 1, 'assets/img/picture/harry3.jpg', 41, 9, 6, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, ad iure ducimus error laborum possimus doloribus tempora alias cumque aspernatur a omnis maxime cupiditate accusantium vero rem aliquam quos corrupti..', ' 2020 09 29 - 23:59 '),
(11, 'sapiens ', 7, 'assets/img/picture/sapiens.jpg', 120, 100, 4, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, ad iure ducimus error laborum possimus doloribus tempora alias cumque aspernatur a omnis maxime cupiditate accusantium vero rem aliquam quos corrupti..', ' 2020 09 30 - 00:02 '),
(12, 'Stalin', 6, 'assets/img/picture/stalin.jpg', 80, 20, 4, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, ad iure ducimus error laborum possimus doloribus tempora alias cumque aspernatur a omnis maxime cupiditate accusantium vero rem aliquam quos corrupti..', ' 2020 09 30 - 00:03 '),
(13, 'Melania & Me', 6, 'assets/img/picture/me&melania.jpg', 70, 12, 5, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, ad iure ducimus error laborum possimus doloribus tempora alias cumque aspernatur a omnis maxime cupiditate accusantium vero rem aliquam quos corrupti..', ' 2020 09 30 - 00:04 '),
(14, 'Mister', 5, 'assets/img/picture/mister.jpg', 44, 33, 3, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, ad iure ducimus error laborum possimus doloribus tempora alias cumque aspernatur a omnis maxime cupiditate accusantium vero rem aliquam quos corrupti..', ' 2020 09 30 - 00:05 '),
(15, '\0Homo Deus', 6, 'assets/img/picture/homo_deus.jpg', 205, 4, 2, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, ad iure ducimus error laborum possimus doloribus tempora alias cumque aspernatur a omnis maxime cupiditate accusantium vero rem aliquam quos corrupti..', ' 2020 09 30 - 00:08 '),
(16, '\0Harry Potter :4', 1, 'assets/img/picture/harry4.jpg', 133, 10, 6, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, ad iure ducimus error laborum possimus doloribus tempora alias cumque aspernatur a omnis maxime cupiditate accusantium vero rem aliquam quos corrupti..', ' 2020 09 30 - 00:09 '),
(17, 'Grey', 5, 'assets/img/picture/grey.jpg', 122, 12, 5, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, ad iure ducimus error laborum possimus doloribus tempora alias cumque aspernatur a omnis maxime cupiditate accusantium vero rem aliquam quos corrupti..', ' 2020 09 30 - 00:10 '),
(18, 'Dog Man: Lord of the Fleas', 4, 'assets/img/picture/dogman5.jpg', 99, 22, 3, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, ad iure ducimus error laborum possimus doloribus tempora alias cumque aspernatur a omnis maxime cupiditate accusantium vero rem aliquam quos corrupti..', ' 2020 09 30 - 00:12 '),
(19, 'Khrushchev', 3, 'assets/img/picture/khrushchev.jpg', 122, 10, 2, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, ad iure ducimus error laborum possimus doloribus tempora alias cumque aspernatur a omnis maxime cupiditate accusantium vero rem aliquam quos corrupti..', ' 2020 09 30 - 00:13 '),
(20, '\0Night Music', 11, 'assets/img/picture/night_music.jpg', 41, 2, 4, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, ad iure ducimus error laborum possimus doloribus tempora alias cumque aspernatur a omnis maxime cupiditate accusantium vero rem aliquam quos corrupti..', ' 2020 09 30 - 00:14 '),
(21, 'Ship of the brides', 11, 'assets/img/picture/ship_of_brides.jpg', 98, 33, 4, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, ad iure ducimus error laborum possimus doloribus tempora alias cumque aspernatur a omnis maxime cupiditate accusantium vero rem aliquam quos corrupti..', ' 2020 09 30 - 00:15 '),
(22, '\0Harry Potter :5', 1, 'assets/img/picture/harry5.jpg', 19, 11, 5, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, ad iure ducimus error laborum possimus doloribus tempora alias cumque aspernatur a omnis maxime cupiditate accusantium vero rem aliquam quos corrupti..', ' 2020 09 30 - 00:15 '),
(23, '\0Harry Potter :7', 1, 'assets/img/picture/harry7.jpg', 45, 10, 3, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, ad iure ducimus error laborum possimus doloribus tempora alias cumque aspernatur a omnis maxime cupiditate accusantium vero rem aliquam quos corrupti..', ' 2020 09 30 - 00:16 '),
(24, '\0Death Comes to Call', 2, 'assets/img/picture/death_comes.jpg', 77, 4, 4, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, ad iure ducimus error laborum possimus doloribus tempora alias cumque aspernatur a omnis maxime cupiditate accusantium vero rem aliquam quos corrupti..', ' 2020 09 30 - 00:17 '),
(25, 'Human kind', 2, 'assets/img/picture/human_kind.jpg', 130, 33, 3, '', '2020 09 30 - 00:18'),
(26, 'All power to the imagination', 3, 'assets/img/picture/All_power_to_the_imagination.jpg', 90, 32, 2, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, ad iure ducimus error laborum possimus doloribus tempora alias cumque aspernatur a omnis maxime cupiditate accusantium vero rem aliquam quos corrupti..', '2020 09 30 - 00:19'),
(27, 'CarterAdministration and the Fall...', 3, 'assets/img/picture/the_Carter_Administration_Dynasty.jpg', 33, 12, 2, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, ad iure ducimus error laborum possimus doloribus tempora alias cumque aspernatur a omnis maxime cupiditate accusantium vero rem aliquam quos corrupti..', '2020 09 30 - 00:20');

-- --------------------------------------------------------

--
-- Table structure for table `book_category`
--

CREATE TABLE `book_category` (
  `bookcategoryID` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book_category`
--

INSERT INTO `book_category` (`bookcategoryID`, `category_name`) VALUES
(1, 'comic'),
(2, 'novel'),
(3, 'litrature'),
(4, 'fashion MAG'),
(5, 'science'),
(6, 'fiction');

-- --------------------------------------------------------

--
-- Table structure for table `user's_favorite`
--

CREATE TABLE `user's_favorite` (
  `favID` int(255) NOT NULL,
  `userid` int(255) NOT NULL,
  `bookid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`authorID`);

--
-- Indexes for table `booklist`
--
ALTER TABLE `booklist`
  ADD PRIMARY KEY (`bookID`);

--
-- Indexes for table `book_category`
--
ALTER TABLE `book_category`
  ADD PRIMARY KEY (`bookcategoryID`);

--
-- Indexes for table `user's_favorite`
--
ALTER TABLE `user's_favorite`
  ADD PRIMARY KEY (`favID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `authorID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `booklist`
--
ALTER TABLE `booklist`
  MODIFY `bookID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `book_category`
--
ALTER TABLE `book_category`
  MODIFY `bookcategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user's_favorite`
--
ALTER TABLE `user's_favorite`
  MODIFY `favID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
