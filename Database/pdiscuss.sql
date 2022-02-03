-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 12:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdiscuss`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(7) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `dt`) VALUES
(1, 'C Language', 'C is a general-purpose, procedural computer programming language supporting structured programming, ', '2021-11-24 07:32:25'),
(2, 'C++', 'C++ is a general-purpose programming language created by Bjarne Stroustrup as an extension of the C programming language, or \"C with Classes\".', '2021-11-24 07:33:03'),
(3, 'PHP', 'PHP is a general-purpose scripting language geared towards web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994.', '2021-11-24 07:33:37'),
(4, 'Python', 'This is a peer to peer forums.No Spam / Advertising / Self-promote in the forums Do not post copyright-infringing material.Do not post “offensive” posts, links or images.Do not cross post questions. Do not PM users asking for help.Remain respectful of other members at all times.', '2021-11-25 12:59:55');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(8) NOT NULL,
  `comment_content` text NOT NULL,
  `thread_id` int(8) NOT NULL,
  `comment_by` int(8) NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES
(1, 'this is a comment', 1, 1, '2021-11-24 11:45:20'),
(2, 'next comment for c++', 2, 3, '2021-11-24 12:44:00'),
(3, 'next2 c ', 3, 9, '2021-11-24 12:47:05'),
(4, 'dfdf', 1, 3, '2021-11-25 12:15:04'),
(5, 'sdf', 1, 5, '2021-11-25 12:15:40'),
(6, 'fdfd', 1, 9, '2021-11-25 12:16:34'),
(7, 'hello solve it', 1, 10, '2021-11-25 12:45:55'),
(8, 'solve it', 10, 5, '2021-11-25 12:51:37'),
(9, 'new problem:\r\nThis is a peer to peer forums.No Spam / Advertising / Self-promote in the forums Do not post copyright-infringing material.Do not post “offensive” posts, links or images.Do not cross post questions. Do not PM users asking for help.Remain respectful of other members at all times.', 5, 8, '2021-11-25 12:54:47'),
(10, 'please help to learn python', 11, 9, '2021-11-25 13:01:14'),
(11, 'hh', 3, 1, '2021-11-26 08:07:59'),
(12, 'help', 12, 5, '2021-11-26 08:47:37'),
(13, 'This is a peer to peer forums.No Spam / Advertising / Self-promote in the forums Do not post copyright-infringing material.', 5, 1, '2021-11-27 08:07:07'),
(14, 'sds', 7, 7, '2021-12-07 10:44:44'),
(15, 'help', 8, 1, '2021-12-13 19:19:17');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `thread_id` int(7) NOT NULL,
  `thread_title` varchar(255) NOT NULL,
  `thread_desc` text NOT NULL,
  `thread_cat_id` int(7) NOT NULL,
  `thread_user_id` int(7) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`thread_id`, `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES
(1, 'C', 'What is C language?', 1, 1, '2021-12-14 04:18:24'),
(2, 'C', 'What is basic of C language?\r\n', 1, 2, '2021-12-14 04:18:38'),
(3, 'C++', 'Is C++ a hard language?\r\n', 2, 3, '2021-12-18 22:56:20'),
(4, 'C++', 'Is C++ a high level language?\r\n', 2, 5, '2021-12-18 22:56:30'),
(5, 'PHP', 'What is PHP?', 3, 1, '2021-12-18 22:56:38'),
(6, 'PHP', 'How it work?', 3, 4, '2021-12-18 22:56:44'),
(7, 'pro', 'have problem', 2, 6, '2021-12-18 22:56:50'),
(8, 'How PHP', 'How work PHP?', 3, 2, '2021-12-18 22:57:01'),
(9, 'c setup', 'how get c', 1, 1, '2021-12-18 22:57:08'),
(10, 'new problem', 'C language problem', 1, 9, '2021-12-18 22:57:11'),
(11, 'python problem', 'what is python?', 4, 10, '2021-12-18 22:57:17'),
(12, 'lop', 'pro', 2, 8, '2021-12-18 22:57:22'),
(13, 'Start Python', 'How can start python?', 4, 1, '2021-12-18 22:57:27'),
(14, 'C++ Exe problem', 'Please resolve C++ Exe founding problem', 2, 3, '2021-12-18 22:57:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(7) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `dt`) VALUES
(1, 'Rekha', '123', '2021-12-13 19:27:30'),
(2, 'mk9', '$2y$10$pTIaoU5LXxJlqjfqDY7KrefJUqCiSb5cMvVAf4lJ4qqRLGJoQuCLu', '2021-12-13 19:30:42'),
(3, 'as', '$2y$10$3DEntUckQvG6l/Oz36PIuO0QqWeDgb9kyCqPVty4EaPnyJqyCccoa', '2021-12-13 20:57:18'),
(4, 'hj', '$2y$10$FUIkCHGyfXBHssvDnR947O.7wdKptRdOPp5.orwxDnknRvk9GJJ5K', '2021-12-13 21:02:48'),
(5, 'mk', '$2y$10$LXNWP5hhIIcM2DAYiR59P.pETgKnCJ2o.0b9PqaFpwRMCVvUpcor6', '2021-12-13 21:08:25'),
(6, 'mw', '$2y$10$rDyP6/IVrEN0OZet0FvCeONjU3I5Z05FRZ9MIkbkxxRzI/kk3K1rG', '2021-12-13 21:09:07'),
(7, 'am', '$2y$10$h3Rkm2lyPbzmAIaoBEdWV.9cUeEgHRBaBsnSDi.BqICROQDQVgYzu', '2021-12-14 10:03:53'),
(8, 'mkl', '$2y$10$I7Kf8DpPX/g4gOG2RcahBOwwG2nLofkGOx5DlLW4//mZ30ikIjGzK', '2021-12-14 10:32:03'),
(9, 'cd', '$2y$10$yBLFeOQENxaM5JlOyNJidOupQ5Fg/q4Wxs4rEmNiKt5KRicay2aD2', '2021-12-14 14:29:55'),
(10, 'nh', '$2y$10$s50DqeGHo1LHbKhHXJvtbOTklY4AU0riGNKS1zpJZb9x5GR9UA5eK', '2021-12-15 10:51:29'),
(11, 'rt', '$2y$10$1/0v9XtXKHtj/4gxdxLzIOykDNAIqsKbdX4DGD.SOl2RZjKbS3V6G', '2021-12-18 14:59:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`thread_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `thread_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
