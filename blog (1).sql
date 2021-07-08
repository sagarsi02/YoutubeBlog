-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 04:40 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sno` int(20) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sno`, `username`, `password`, `date`) VALUES
(1, 'Sagarsi786', '$2y$10$6NhG8Via9nMY5S.EfopfIu7H9EymhaRx8hu8uc6GgGWqKB7M3GZ.q', '2021-07-03 15:33:10');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_sno` int(100) NOT NULL,
  `comment_name` text NOT NULL,
  `comment_email` varchar(25) NOT NULL,
  `comment_msg` text NOT NULL,
  `comment_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `user_sno` int(100) NOT NULL,
  `user_name` text NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_subject` text NOT NULL,
  `user_msg` text NOT NULL,
  `user_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`user_sno`, `user_name`, `user_email`, `user_subject`, `user_msg`, `user_date`) VALUES
(1, 'Sagar Singh', 'sagar@singh.com', 'collaborate', 'hey kaise ho or btao kya haal chal hai  apke.', '2021-07-03 16:56:31'),
(2, 'Sagar Singh', 'Sagarsi0202@gmail.com', 'python forum not secure', '<button type=\"submit\" class=\"btn btn-primary\">Connect with iDiscuss</button><button type=\"submit\" class=\"btn btn-primary\">Connect with iDiscuss</button><button type=\"submit\" class=\"btn btn-primary\">Connect with iDiscuss</button>', '2021-07-03 17:11:37'),
(3, 'Nilesh Singh', 'ns2835@gmail.com', 'Sutta leke aana ', 'Sale harami sutta leke aana', '2021-07-03 17:17:16');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_sno` int(100) NOT NULL,
  `post_img1` varchar(45) NOT NULL,
  `post_category` text NOT NULL,
  `post_title` text NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp(),
  `post_content1` varchar(250) NOT NULL,
  `post_content2` text NOT NULL,
  `post_heading` varchar(100) NOT NULL,
  `post_content3` text NOT NULL,
  `post_img2` varchar(45) NOT NULL,
  `post_highlight` text NOT NULL,
  `post_content4` text NOT NULL,
  `post_video` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_sno`, `post_img1`, `post_category`, `post_title`, `post_date`, `post_content1`, `post_content2`, `post_heading`, `post_content3`, `post_img2`, `post_highlight`, `post_content4`, `post_video`, `alias`) VALUES
(12, 'post3.jfif', 'sdcnsdn', 'naaslkcsln python', '2021-07-02 21:25:02', 'aaslkcnalfn', 'akancnnckn', 'knksadncans', 'askancalsnfj', 'post2.jfif', 'kdnvlksnvdn', 'akndonasvh', 'NXANVDJNOdsnavjkndv', 'LXNLKSVNLD'),
(13, 'post5.jfiF', 'lsclckdnvsdc', 'aakmncnjdvsdc', '2021-07-02 21:25:28', 'zxcbkjabcsdc', 'jnaojcnadjnvbobsdc', 'nasncjsnjcsdc', 'ajncjdknsdc', 'post2.jfiF', 'kzxklkdvnsdcw', 'kalkscslkansdcsd', 'kanscnskcnosdcwd', 'kansclaknskcnsdcd'),
(22, 'post1.jfif', 'sdvksdnjk', 'adnvldnlvjl', '2021-07-03 16:03:49', 'ldsnvkwdnv', 'lkdknqnoj', 'lakdnvlknk', 'ladknlvkdno', 'post2.jfif', 'alakdknvon', 'kskmqejif', 'akdnoviahj', 'lkcopqeij'),
(23, 'post1.jfif', 'dkvmmkdov', 'qekoiwej python', '2021-07-03 16:04:06', 'dklvqwoei', 'lsdknwkodnv', 'dklnvonw', 'lknopvwpe', 'post5.jfif', 'aaskvwvije', 'qkdcpokije', 'lknvoqke', 'lqkekoq'),
(24, 'post3.jfif', 'lknknkn', 'hfgu', '2021-07-03 16:49:06', 'gdgdxdx', 'fdfdfy', 'rdryfdyr', 'yrdyrdr', 'post5.jfif', 'tcugcfugt', 'ufvgufcgu', 'gvfguvgy', 'utfutfu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `username` (`username`) USING HASH;

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_sno`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`user_sno`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_sno`);
ALTER TABLE `post` ADD FULLTEXT KEY `post_title` (`post_title`,`post_content1`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_sno` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `user_sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
