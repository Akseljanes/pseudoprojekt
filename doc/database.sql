-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3307
-- Generation Time: Oct 15, 2015 at 02:00 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `cleanblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
CREATE TABLE `authors` (
    `author_id` int(11) unsigned NOT NULL,
    `author_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `author_name`) VALUES
    (1, 'Klaabu\n'),
    (2, 'Sipsik');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
    `post_id` int(11) unsigned NOT NULL,
    `author_id` int(10) unsigned NOT NULL,
    `post_title` varchar(255) NOT NULL,
    `post_description` varchar(255) NOT NULL,
    `post_text` text NOT NULL,
    `post_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `author_id`, `post_title`, `post_description`, `post_text`, `post_created`) VALUES
    (1, 1, 'asdasd', 'asdasdasd', 'asdasdasd', '2015-02-02 10:12:12'),
    (2, 2, 'jaaa', 'jaaa', 'jaa', '2014-01-01 10:12:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
ADD PRIMARY KEY (`post_id`),
ADD KEY `author_id` (`author_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
MODIFY `author_id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `post_id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`author_id`);
SET FOREIGN_KEY_CHECKS=1;
