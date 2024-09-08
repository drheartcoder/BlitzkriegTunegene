-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 05, 2017 at 09:31 AM
-- Server version: 5.6.31
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blitz_tunegene`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `album_id` int(11) NOT NULL AUTO_INCREMENT,
  `album_name` varchar(255) NOT NULL,
  `member_id` int(11) NOT NULL,
  `about_album` longtext NOT NULL,
  `entry_date` datetime NOT NULL,
  `ip` varchar(255) NOT NULL,
  PRIMARY KEY (`album_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`album_id`, `album_name`, `member_id`, `about_album`, `entry_date`, `ip`) VALUES
(1, 'Birthday', 3, 'Birthday Album', '2016-12-20 00:00:00', '::1'),
(2, '', 3, 'about', '2016-12-22 00:00:00', '49.207.52.110');

-- --------------------------------------------------------

--
-- Table structure for table `album_content`
--

CREATE TABLE IF NOT EXISTS `album_content` (
  `album_content_id` int(11) NOT NULL AUTO_INCREMENT,
  `album_id` int(11) NOT NULL,
  `album_images` text NOT NULL,
  `entry_date` datetime NOT NULL,
  PRIMARY KEY (`album_content_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `album_content`
--

INSERT INTO `album_content` (`album_content_id`, `album_id`, `album_images`, `entry_date`) VALUES
(1, 0, 'images/post_images/3_2.jpg', '2016-12-20 00:00:00'),
(2, 0, 'images/post_images/3_3 (1).jpg', '2016-12-20 00:00:00'),
(3, 0, 'images/post_images/3_3 (1).jpg', '2016-12-20 00:00:00'),
(4, 0, 'images/post_images/3_2.jpg', '2016-12-20 00:00:00'),
(5, 1, 'images/post_images/3_2.jpg', '2016-12-20 00:00:00'),
(6, 1, 'images/post_images/3_3 (2).jpg', '2016-12-20 00:00:00'),
(7, 0, 'images/post_images/12_IMG_20161225_121806.jpeg', '2016-12-27 00:00:00'),
(8, 0, 'images/post_images/12_mahendra.jpg', '2016-12-27 00:00:00'),
(9, 1, 'images/post_images/3_3_2.jpg', '2017-01-05 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `chitter`
--

CREATE TABLE IF NOT EXISTS `chitter` (
  `chitter_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `chitter_date` datetime NOT NULL,
  `ip` varchar(255) NOT NULL,
  PRIMARY KEY (`chitter_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=97 ;

--
-- Dumping data for table `chitter`
--

INSERT INTO `chitter` (`chitter_id`, `member_id`, `friend_id`, `message`, `chitter_date`, `ip`) VALUES
(1, 3, 11, 'dsacxa', '2016-12-14 02:44:43', '::1'),
(2, 3, 11, 'saca', '2016-12-14 02:48:16', '::1'),
(3, 3, 10, 'sdcs', '2016-12-14 02:50:03', '::1'),
(4, 10, 3, 'Hi there, how are you', '2016-12-14 02:51:48', '::1'),
(5, 3, 10, 'it was a great time for me. we had a lot of fun', '2016-12-14 02:56:20', '::1'),
(6, 3, 10, 'Hi Dear', '2016-12-14 03:41:44', '::1'),
(7, 10, 3, 'Hello', '2016-12-14 03:43:14', '::1'),
(8, 10, 3, 'Hello', '2016-12-14 03:43:23', '::1'),
(9, 10, 3, 'H R U ??????', '2016-12-14 03:56:14', '::1'),
(10, 3, 10, 'Fine Say About U', '2016-12-14 03:56:49', '::1'),
(11, 3, 11, 'Test Message', '2016-12-14 04:21:38', '::1'),
(12, 3, 10, 'dfgsdsg', '2016-12-14 07:10:01', '::1'),
(13, 3, 10, 'Tyyyyyyyy', '2016-12-16 04:40:17', '::1'),
(14, 3, 10, 'hii', '2016-12-19 05:27:45', '::1'),
(15, 3, 10, ';lk;l;', '2016-12-19 05:35:36', '::1'),
(16, 3, 10, 'dcfwse', '2016-12-19 05:51:28', '::1'),
(17, 3, 10, 'asdxaqs', '2016-12-19 05:51:33', '::1'),
(18, 3, 10, 'asif', '2016-12-19 05:52:01', '::1'),
(19, 3, 10, 'tgtr', '2016-12-19 05:52:36', '::1'),
(20, 3, 10, 'vffsv', '2016-12-19 06:01:58', '::1'),
(21, 3, 10, 'd', '2016-12-19 06:02:49', '::1'),
(22, 3, 10, 'test', '2016-12-19 06:05:17', '::1'),
(23, 3, 10, 's', '2016-12-19 06:05:34', '::1'),
(24, 3, 10, 'a', '2016-12-19 06:10:04', '::1'),
(25, 3, 10, 'fvgbdf', '2016-12-19 06:19:03', '::1'),
(26, 3, 10, 'a', '2016-12-19 06:21:05', '::1'),
(27, 3, 10, 'as', '2016-12-19 06:21:14', '::1'),
(28, 3, 10, 'dc', '2016-12-19 06:23:02', '::1'),
(29, 3, 10, 'dcdscsd', '2016-12-19 06:23:06', '::1'),
(30, 3, 10, 'sdcsd', '2016-12-19 06:24:12', '::1'),
(31, 3, 10, 'dcds', '2016-12-19 06:24:14', '::1'),
(32, 3, 10, 'sdfcvsdfv', '2016-12-19 06:24:17', '::1'),
(33, 3, 10, 'fvds', '2016-12-19 06:25:33', '::1'),
(34, 3, 10, 'dscfds', '2016-12-19 06:25:35', '::1'),
(35, 3, 10, 'dcsw', '2016-12-19 06:25:37', '::1'),
(36, 3, 10, 'sdfcws', '2016-12-19 06:25:38', '::1'),
(37, 3, 10, 'dsacesaw', '2016-12-19 06:25:40', '::1'),
(38, 3, 10, 'dqeawd', '2016-12-19 06:25:42', '::1'),
(39, 3, 10, 'dewafcwe', '2016-12-19 06:25:44', '::1'),
(40, 3, 10, 'sdcfvswdvc', '2016-12-19 06:25:51', '::1'),
(41, 3, 10, 'wfcswfcw', '2016-12-19 06:25:55', '::1'),
(42, 3, 10, 'decewac', '2016-12-19 06:25:57', '::1'),
(43, 3, 10, 'dewfcewafc', '2016-12-19 06:25:59', '::1'),
(44, 3, 10, 'decfewfc', '2016-12-19 06:26:01', '::1'),
(45, 3, 10, 'dswfcswdfc', '2016-12-19 06:26:03', '::1'),
(46, 3, 10, 'new', '2016-12-19 06:26:07', '::1'),
(47, 10, 3, 'dcfsd', '2016-12-19 06:27:18', '::1'),
(48, 3, 10, 'dsfcdse', '2016-12-19 06:27:24', '::1'),
(49, 3, 10, 'hii', '2016-12-19 06:27:33', '::1'),
(50, 10, 3, 'dfvgd', '2016-12-19 06:27:51', '::1'),
(51, 3, 10, 'test1', '2016-12-19 06:29:35', '::1'),
(52, 3, 10, 'test man', '2016-12-19 06:32:13', '::1'),
(53, 10, 3, 'testsss', '2016-12-19 06:32:24', '::1'),
(54, 3, 10, 'sa', '2016-12-19 06:34:07', '::1'),
(55, 3, 10, 'dfgd', '2016-12-19 06:35:05', '::1'),
(56, 3, 10, 'sxdas', '2016-12-19 06:37:56', '::1'),
(57, 10, 3, 'sdxas', '2016-12-19 06:38:03', '::1'),
(58, 3, 10, 'sa', '2016-12-19 06:43:20', '::1'),
(59, 10, 3, 'sad', '2016-12-19 06:43:32', '::1'),
(60, 3, 10, 'as', '2016-12-19 06:43:58', '::1'),
(61, 10, 3, 'sc', '2016-12-19 06:44:05', '::1'),
(62, 3, 10, 'adfcsf', '2016-12-19 06:44:41', '::1'),
(63, 3, 10, 'vfdv', '2016-12-19 06:46:11', '::1'),
(64, 10, 3, 'fcgb', '2016-12-19 06:46:22', '::1'),
(65, 10, 3, 'dc', '2016-12-19 06:49:49', '::1'),
(66, 3, 10, 'sf', '2016-12-19 06:50:03', '::1'),
(67, 3, 10, 'thanx', '2016-12-19 06:52:11', '::1'),
(68, 10, 3, 'dfgg', '2016-12-19 06:52:22', '::1'),
(69, 3, 10, 'dsfv', '2016-12-19 06:53:19', '::1'),
(70, 3, 10, 'dsfcs', '2016-12-19 06:53:30', '::1'),
(71, 3, 10, 'thid', '2016-12-19 06:53:46', '::1'),
(72, 3, 10, 'dcd', '2016-12-19 07:31:19', '::1'),
(73, 10, 3, 'dcsafc', '2016-12-19 07:31:33', '::1'),
(74, 10, 3, 'test', '2016-12-19 07:33:56', '::1'),
(75, 3, 10, 'asdcxas', '2016-12-19 07:45:28', '::1'),
(76, 3, 10, 'daefcae', '2016-12-19 07:45:33', '::1'),
(77, 3, 10, 'dacfad', '2016-12-19 07:45:38', '::1'),
(78, 3, 10, 'rgwrewtg', '2016-12-19 07:50:07', '::1'),
(79, 10, 3, 'fcwsredf', '2016-12-19 07:50:21', '::1'),
(80, 10, 3, 'sacadsdc', '2016-12-19 07:57:09', '::1'),
(81, 3, 10, 'sadcxas', '2016-12-19 07:57:30', '::1'),
(82, 10, 3, 'test', '2016-12-19 08:00:21', '::1'),
(83, 3, 10, 'as', '2016-12-19 08:03:24', '::1'),
(84, 10, 3, 'hiiii', '2016-12-21 01:11:07', '::1'),
(85, 3, 10, 'fvgdfg', '2016-12-21 01:12:18', '::1'),
(86, 3, 10, 'j', '2016-12-21 01:22:20', '::1'),
(87, 10, 3, 'this', '2016-12-21 01:44:28', '::1'),
(88, 3, 10, 'sdce', '2016-12-21 01:46:07', '::1'),
(89, 10, 3, 'dcdeawfc', '2016-12-21 01:46:16', '::1'),
(90, 10, 3, 'test', '2016-12-21 02:24:42', '::1'),
(91, 3, 10, 'no', '2016-12-21 02:24:55', '::1'),
(92, 3, 10, 'this', '2016-12-21 02:28:58', '::1'),
(93, 3, 10, 'test', '2016-12-21 02:39:43', '::1'),
(94, 3, 10, 'test1', '2016-12-21 02:39:47', '::1'),
(95, 12, 3, 'hii', '2016-12-28 11:41:01', '106.51.18.198'),
(96, 3, 12, 'hello', '2016-12-28 11:41:38', '106.51.18.198');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(255) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE IF NOT EXISTS `club` (
  `club_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  PRIMARY KEY (`club_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(255) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cover_photo`
--

CREATE TABLE IF NOT EXISTS `cover_photo` (
  `cover_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  PRIMARY KEY (`cover_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE IF NOT EXISTS `genres` (
  `genres_id` int(11) NOT NULL AUTO_INCREMENT,
  `genres_name` varchar(255) NOT NULL,
  PRIMARY KEY (`genres_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`genres_id`, `genres_name`) VALUES
(1, 'Alternative'),
(2, 'Blues'),
(3, 'Childrenâ€™s Music'),
(4, 'Classical'),
(5, 'Comedy'),
(6, 'Commercial'),
(7, 'Country'),
(8, 'Dance (EDM â€“ Electronic Dance Music)'),
(9, 'Disney'),
(10, 'Easy Listening'),
(11, 'Electronic'),
(12, 'Enka'),
(13, 'French Pop'),
(14, 'German Folk'),
(15, 'German Pop'),
(16, 'Fitness & Workout'),
(17, 'Hip-Hop/Rap'),
(18, 'Holiday'),
(19, 'Indie Pop'),
(20, 'Industrial'),
(21, 'Inspirational â€“ Christian & Gospel'),
(22, 'Instrumental'),
(23, 'J-Pop'),
(24, 'Jazz'),
(25, 'K-Pop'),
(26, 'Karaoke'),
(27, 'Kayokyoku'),
(28, 'Latin'),
(29, 'New Age'),
(30, 'Opera'),
(31, 'Pop'),
(32, 'R&B/Soul'),
(33, 'Reggae'),
(34, 'Rock'),
(35, 'Singer/Songwriter'),
(36, 'Soundtrack'),
(37, 'Spoken Word'),
(38, 'Tex-Mex / Tejano'),
(39, 'Vocal'),
(40, 'World');

-- --------------------------------------------------------

--
-- Table structure for table `group_member`
--

CREATE TABLE IF NOT EXISTS `group_member` (
  `group_member_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `entry_date` datetime NOT NULL,
  PRIMARY KEY (`group_member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `group_member`
--

INSERT INTO `group_member` (`group_member_id`, `group_id`, `member_id`, `entry_date`) VALUES
(1, 1, 10, '2016-12-20 00:00:00'),
(2, 1, 11, '2016-12-20 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `group_name`
--

CREATE TABLE IF NOT EXISTS `group_name` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `about_group` longtext NOT NULL,
  `entry_date` datetime NOT NULL,
  `ip` varchar(255) NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `group_name`
--

INSERT INTO `group_name` (`group_id`, `member_id`, `group_name`, `about_group`, `entry_date`, `ip`) VALUES
(1, 3, 'My Club', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', '2016-12-20 00:00:00', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `group_post`
--

CREATE TABLE IF NOT EXISTS `group_post` (
  `group_post_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `group_content` longtext NOT NULL,
  `group_images` text NOT NULL,
  `group_media` text NOT NULL,
  `entry_date` datetime NOT NULL,
  `ip` varchar(255) NOT NULL,
  PRIMARY KEY (`group_post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `group_post`
--

INSERT INTO `group_post` (`group_post_id`, `group_id`, `member_id`, `group_content`, `group_images`, `group_media`, `entry_date`, `ip`) VALUES
(1, 1, 3, 'My First Group Post', 'images/group_images/3_3_cute-girly-cool-facebook-timeline-cover-photos-93.jpg', '', '2016-12-20 00:00:00', '::1'),
(2, 1, 3, 'My First Video Post', '', 'videos/group_video/3_1.mp4', '2016-12-20 00:00:00', '::1'),
(3, 1, 3, 'Text', '', '', '2016-12-20 00:00:00', '::1'),
(4, 1, 3, 'test', '', '', '2016-12-20 00:00:00', '::1'),
(5, 1, 3, '', '', 'videos/group_video/3_01 Aap Se Mausiiquii - Himesh - 190Kbps.mp3', '2016-12-21 00:00:00', '49.207.52.110'),
(6, 1, 3, '', '', 'videos/group_video/3_01 Aap Se Mausiiquii - Himesh - 190Kbps.mp3', '2016-12-21 00:00:00', '49.207.52.110'),
(7, 1, 3, '', '', 'videos/group_video/3_3_mov_bbb.mp4', '2016-12-21 00:00:00', '49.207.52.110'),
(8, 1, 3, '', '', 'videos/group_video/3_01 Aap Se Mausiiquii - Himesh - 190Kbps.mp3', '2016-12-21 00:00:00', '49.207.52.110'),
(9, 1, 3, '', '', 'videos/group_video/3_01 Aap Se Mausiiquii - Himesh - 190Kbps.mp3', '2016-12-21 00:00:00', '49.207.52.110'),
(10, 1, 3, '', '', 'videos/group_video/3_1.mp3', '2016-12-21 00:00:00', '49.207.52.110'),
(11, 1, 3, '', '', 'videos/post_video/3_01 Aap Se Mausiiquii - Himesh - 190Kbps.mp3', '2016-12-21 00:00:00', '49.207.52.110'),
(12, 1, 3, '', '', 'videos/group_video/3_01 Aap Se Mausiiquii - Himesh - 190Kbps.mp3', '2016-12-21 00:00:00', '49.207.52.110'),
(13, 1, 3, '', '', 'videos/group_video/3_01 Aap Se Mausiiquii - Himesh - 190Kbps.mp3', '2016-12-21 00:00:00', '49.207.52.110'),
(14, 1, 3, '', '', 'videos/group/3_01 Aap Se Mausiiquii - Himesh - 190Kbps.mp3', '2016-12-21 00:00:00', '49.207.52.110'),
(15, 1, 3, '', '', 'videos/post_video/group/3_01 Aap Se Mausiiquii - Himesh - 190Kbps.mp3', '2016-12-21 00:00:00', '49.207.52.110'),
(16, 1, 3, '', '', 'videos/post_video/3_1.mp3', '2016-12-21 00:00:00', '49.207.52.110'),
(17, 1, 3, '', '', 'videos/group_vedio/3_01 Ae Dil Hai Mushkil (Future Bass Remix By DJ Khushi) (1).mp3', '2016-12-21 00:00:00', '49.207.52.110'),
(18, 1, 3, '', '', 'videos/group_vedio/3_1.mp4', '2016-12-21 00:00:00', '49.207.52.110'),
(19, 1, 3, '', '', 'videos/group_vedio/3_1.mp4', '2016-12-21 00:00:00', '49.207.52.110'),
(20, 1, 3, '', '', 'videos/group_vedio/3_01 Aap Se Mausiiquii - Himesh - 190Kbps.mp3', '2016-12-21 00:00:00', '49.207.52.110'),
(21, 1, 3, '', '', 'videos/group_vedio/3_01 Ae Dil Hai Mushkil (Future Bass Remix By DJ Khushi) (1).mp3', '2016-12-21 00:00:00', '49.207.52.110'),
(22, 1, 3, 'dsfsdr', '', 'videos/group_vedio/3_3_.mp3', '2016-12-21 00:00:00', '49.207.52.110'),
(23, 1, 3, '', '', 'videos/group_vedio/3_01 Ae Dil Hai Mushkil (Future Bass Remix By DJ Khushi) (1).mp3', '2016-12-21 00:00:00', '49.207.52.110'),
(24, 1, 3, '', '', 'videos/group_vedio/3_01 Ae Dil Hai Mushkil (Future Bass Remix By DJ Khushi) (1).mp3', '2016-12-21 00:00:00', '49.207.52.110');

-- --------------------------------------------------------

--
-- Table structure for table `group_post_comment`
--

CREATE TABLE IF NOT EXISTS `group_post_comment` (
  `group_post_comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_post_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL,
  `ip` varchar(255) NOT NULL,
  PRIMARY KEY (`group_post_comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `group_post_comment`
--

INSERT INTO `group_post_comment` (`group_post_comment_id`, `group_post_id`, `member_id`, `comment`, `comment_date`, `ip`) VALUES
(1, 2, 3, 'test comment', '2016-12-20 00:00:00', ''),
(2, 1, 3, 'comment group', '2016-12-20 00:00:00', ''),
(3, 1, 3, 'test', '2016-12-20 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `group_post_dislike`
--

CREATE TABLE IF NOT EXISTS `group_post_dislike` (
  `group_post_dislike_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_post_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `dislike_date` datetime NOT NULL,
  `ip` varchar(255) NOT NULL,
  PRIMARY KEY (`group_post_dislike_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `group_post_dislike`
--

INSERT INTO `group_post_dislike` (`group_post_dislike_id`, `group_post_id`, `member_id`, `dislike_date`, `ip`) VALUES
(1, 2, 3, '2016-12-20 00:00:00', ''),
(2, 1, 3, '2016-12-20 00:00:00', ''),
(3, 4, 3, '2016-12-20 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `group_post_like`
--

CREATE TABLE IF NOT EXISTS `group_post_like` (
  `group_post_like_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_post_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `like_date` datetime NOT NULL,
  `ip` varchar(255) NOT NULL,
  PRIMARY KEY (`group_post_like_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `group_post_like`
--

INSERT INTO `group_post_like` (`group_post_like_id`, `group_post_id`, `member_id`, `like_date`, `ip`) VALUES
(1, 2, 3, '2016-12-20 00:00:00', ''),
(2, 1, 3, '2016-12-20 00:00:00', ''),
(3, 3, 3, '2016-12-20 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `account_status` int(11) NOT NULL,
  `islogin` int(11) NOT NULL,
  `login_time` datetime NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `member_id`, `email_id`, `password`, `account_status`, `islogin`, `login_time`) VALUES
(2, 3, 'asif@blitzkriegsolutions.com', 'asif@123', 0, 1, '2017-01-05 01:43:56'),
(3, 10, 'asif2nomani@gmail.com', 'asif@123', 0, 1, '2016-12-21 01:09:58'),
(4, 11, 'asif.dca@gmail.com', 'asif@123', 0, 0, '2016-12-19 10:49:44'),
(5, 12, 'shakib@gmail.com', 'asif@123', 0, 1, '2016-12-16 06:42:36'),
(6, 12, 'mahendra.blitzkriegsolutions@gmail.com', '9740091080', 0, 0, '2016-12-28 11:35:13'),
(7, 13, 'ashugaraul@yahoo.com', 'anis1204', 0, 1, '2016-12-23 08:47:48'),
(8, 14, 'shakib.nomani@gmail.com', '9835685210', 0, 1, '2016-12-23 09:16:52'),
(9, 15, 'danish.nomani@gmail.com', 'danish7863', 0, 0, '2016-12-23 09:24:30'),
(10, 16, 'deepak.blitzkrieg@gmail.com', 'deepak@blitzkrieg', 0, 1, '2016-12-27 04:39:27');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE IF NOT EXISTS `login_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `correct` varchar(255) NOT NULL,
  `login_time` datetime NOT NULL,
  `logout_time` datetime NOT NULL,
  `logout_ip` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`id`, `email_id`, `password`, `correct`, `login_time`, `logout_time`, `logout_ip`, `ip`) VALUES
(5, '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', ''),
(7, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-12 12:50:56', '0000-00-00 00:00:00', '0', '::1'),
(10, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-12 12:54:16', '0000-00-00 00:00:00', '0', '::1'),
(11, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-12 12:54:23', '0000-00-00 00:00:00', '0', '::1'),
(12, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-12 12:54:52', '0000-00-00 00:00:00', '0', '::1'),
(13, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-12 12:56:55', '0000-00-00 00:00:00', '0', '::1'),
(14, 'admin@g.com', 'admin', 'Wrong', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '::1'),
(15, 'admin@g.com', 'admin', 'Wrong', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '::1'),
(16, 'asif2nomani@gmail.com', 'asif@123', 'Wrong', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '::1'),
(17, 'asif2nomani@gmail.com', 'asif@123', 'Wrong', '2016-12-12 01:00:41', '0000-00-00 00:00:00', '0', '::1'),
(18, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-12 01:01:16', '0000-00-00 00:00:00', '0', '::1'),
(19, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-13 12:01:52', '0000-00-00 00:00:00', '0', '::1'),
(20, 'asif2nomani@gmail.com', 'asif@123', 'Correct', '2016-12-13 04:02:28', '0000-00-00 00:00:00', '0', '::1'),
(21, 'asif.dca@gmail.com', 'asif@123', 'Correct', '2016-12-13 04:10:52', '0000-00-00 00:00:00', '0', '::1'),
(22, 'asif2nomani@gmail.com', 'asif@123', 'Correct', '2016-12-14 11:03:27', '0000-00-00 00:00:00', '0', '::1'),
(23, 'asif.dca@gmail.com', 'asif@123', 'Correct', '2016-12-14 11:32:48', '0000-00-00 00:00:00', '0', '::1'),
(24, 'asif.dca@gmail.com', 'asif@123', 'Correct', '2016-12-14 11:54:52', '0000-00-00 00:00:00', '0', '::1'),
(25, 'asif.dca@gmail.com', 'asif@123', 'Correct', '2016-12-14 12:04:14', '0000-00-00 00:00:00', '0', '::1'),
(26, 'asif.dca@gmail.com', 'asif@123', 'Correct', '2016-12-14 12:05:18', '0000-00-00 00:00:00', '0', '::1'),
(27, 'asif.dca@gmail.com', 'asif@123', 'Correct', '2016-12-14 12:05:59', '0000-00-00 00:00:00', '0', '::1'),
(28, 'asif.dca@gmail.com', 'asif@123', 'Correct', '2016-12-14 12:06:49', '2016-12-14 12:06:51', '::1', '::1'),
(29, 'asif.dca@gmail.com', 'asif@123', 'Correct', '2016-12-14 12:12:13', '2016-12-14 12:12:21', '::1', '::1'),
(30, 'asif.dca@gmail.com', 'asif@123', 'Correct', '2016-12-14 12:24:56', '2016-12-14 12:25:07', '::1', '::1'),
(31, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-14 12:25:31', '0000-00-00 00:00:00', '', '::1'),
(32, 'asif.dca@gmail.com', 'asif@123', 'Correct', '2016-12-14 01:23:14', '2016-12-14 01:42:50', '::1', '::1'),
(33, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-14 01:43:00', '0000-00-00 00:00:00', '', '::1'),
(34, 'asif2nomani@gmail.com', 'asif@123', 'Correct', '2016-12-14 03:42:25', '0000-00-00 00:00:00', '', '::1'),
(35, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-15 11:07:31', '0000-00-00 00:00:00', '', '::1'),
(36, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-16 11:24:22', '0000-00-00 00:00:00', '', '::1'),
(37, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-16 04:52:34', '2016-12-16 06:41:29', '::1', '::1'),
(38, 'asif2nomani@gmail.com', 'asif@123', 'Correct', '2016-12-16 05:00:12', '0000-00-00 00:00:00', '', '::1'),
(39, 'asif2nomani@gmail.com', 'asif@123', 'Correct', '2016-12-16 06:41:39', '2016-12-16 06:41:45', '::1', '::1'),
(40, 'asif.dca@gmail.com', 'asif@123', 'Correct', '2016-12-16 06:41:57', '2016-12-16 06:42:06', '::1', '::1'),
(41, 'shakib@gmail.com', 'asif@123', 'Correct', '2016-12-16 06:42:36', '0000-00-00 00:00:00', '', '::1'),
(42, 'asif.dca@gmail.com', 'asif@123', 'Correct', '2016-12-19 10:49:44', '2016-12-19 04:13:30', '::1', '::1'),
(43, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-19 03:12:12', '2016-12-19 03:50:34', '::1', '::1'),
(44, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-19 03:51:19', '2016-12-19 04:08:50', '::1', '::1'),
(45, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-19 04:10:03', '0000-00-00 00:00:00', '', '::1'),
(46, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-19 04:13:48', '2016-12-19 06:27:06', '::1', '::1'),
(47, 'asif2nomani@gmail.com', 'asif@123', 'Correct', '2016-12-19 05:27:23', '0000-00-00 00:00:00', '', '::1'),
(48, 'asif2nomani@gmail.com', 'asif@123', 'Correct', '2016-12-19 06:26:37', '0000-00-00 00:00:00', '', '::1'),
(49, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-19 06:27:09', '0000-00-00 00:00:00', '', '::1'),
(50, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-20 10:55:18', '2016-12-20 03:32:01', '::1', '::1'),
(51, 'mahendra.blitzkriegsolutions@gmail.com', '9740091080', 'Correct', '2016-12-20 03:42:58', '0000-00-00 00:00:00', '', '::1'),
(52, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-20 03:57:01', '0000-00-00 00:00:00', '', '::1'),
(53, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-21 10:56:31', '0000-00-00 00:00:00', '', '::1'),
(54, 'asif2nomani@gmail.com', 'asif@123', 'Correct', '2016-12-21 01:09:58', '0000-00-00 00:00:00', '', '::1'),
(55, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-21 05:51:36', '0000-00-00 00:00:00', '', '49.207.52.110'),
(56, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-21 05:56:32', '0000-00-00 00:00:00', '', '49.207.52.110'),
(57, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-22 11:49:47', '2016-12-22 04:12:12', '49.207.52.110', '49.207.52.110'),
(58, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-22 04:15:06', '2016-12-22 05:38:47', '49.207.52.110', '49.207.52.110'),
(59, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-22 05:48:57', '0000-00-00 00:00:00', '', '49.207.52.110'),
(60, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-23 04:13:48', '0000-00-00 00:00:00', '', '49.207.52.110'),
(61, 'mahendra.blitzkriegsolutions@gmail.com', '9740091080', 'Correct', '2016-12-23 04:14:12', '0000-00-00 00:00:00', '', '61.12.65.46'),
(62, 'mahendra.blitzkriegsolutions@gmail.com', '9740091080', 'Correct', '2016-12-23 04:17:34', '0000-00-00 00:00:00', '', '61.12.65.46'),
(63, 'mahendra.blitzkriegsolutions@gmail.com', '9740091080', 'Correct', '2016-12-23 04:34:26', '0000-00-00 00:00:00', '', '61.12.65.46'),
(64, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-23 04:35:04', '2016-12-23 06:34:47', '61.12.65.46', '49.207.52.110'),
(65, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-23 06:53:47', '0000-00-00 00:00:00', '', '61.12.65.46'),
(66, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-23 06:55:32', '2016-12-23 07:30:38', '61.12.65.46', '61.12.65.46'),
(67, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-23 07:32:01', '2016-12-23 08:37:58', '66.249.82.73', '61.12.65.46'),
(68, 'ashugaraul@yahoo.com', 'anis1204', 'Correct', '2016-12-23 08:47:48', '0000-00-00 00:00:00', '', '106.51.240.81'),
(69, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-23 08:49:16', '0000-00-00 00:00:00', '', '106.51.240.81'),
(70, 'shakib.nomani@gmail.com', '9835685210', 'Correct', '2016-12-23 09:12:54', '0000-00-00 00:00:00', '', '47.29.66.224'),
(71, 'shakib.nomani@gmail.com', '9835685210', 'Correct', '2016-12-23 09:16:52', '0000-00-00 00:00:00', '', '47.29.66.224'),
(72, 'danish.nomani@gmail.com', 'danish7863', 'Correct', '2016-12-23 09:24:30', '2016-12-23 09:28:16', '64.233.173.132', '14.139.242.69'),
(73, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-26 12:31:36', '0000-00-00 00:00:00', '', '61.12.65.46'),
(74, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-26 06:41:00', '0000-00-00 00:00:00', '', '61.12.65.46'),
(75, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-27 11:02:32', '2016-12-27 12:47:06', '61.12.65.46', '61.12.65.46'),
(76, 'mahendra.blitzkriegsolutions@gmail.com', '9740091080', 'Correct', '2016-12-27 11:29:42', '0000-00-00 00:00:00', '', '61.12.65.46'),
(77, 'mahendra.blitzkriegsolutions@gmail.com', '9740091080', 'Correct', '2016-12-27 12:51:12', '0000-00-00 00:00:00', '', '61.12.65.46'),
(78, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-27 12:52:41', '2016-12-27 12:52:47', '61.12.65.46', '61.12.65.46'),
(79, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-27 12:53:00', '0000-00-00 00:00:00', '', '61.12.65.46'),
(80, 'mahendra.blitzkriegsolutions@gmail.com', '9740091080', 'Correct', '2016-12-27 02:50:07', '0000-00-00 00:00:00', '', '61.12.65.46'),
(81, 'mahendra.blitzkriegsolutions@gmail.com', '9740091080', 'Correct', '2016-12-27 02:55:07', '0000-00-00 00:00:00', '', '61.12.65.46'),
(82, 'deepak.blitzkrieg@gmail.com', 'blitzkrieg', 'Wrong', '2016-12-27 02:58:36', '0000-00-00 00:00:00', '', '61.12.65.46'),
(83, 'deepak.blitzkrieg@gmail.com', 'deepak@blitzkrieg', 'Correct', '2016-12-27 02:59:06', '0000-00-00 00:00:00', '', '61.12.65.46'),
(84, 'deepak.blitzkrieg@gmail.com', 'deepak@blitzkrieg', 'Correct', '2016-12-27 03:01:00', '0000-00-00 00:00:00', '', '61.12.65.46'),
(85, 'mahendra.blitzkriegsolutions@gmail.com', '9740091080', 'Correct', '2016-12-27 03:01:36', '0000-00-00 00:00:00', '', '61.12.65.46'),
(86, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-27 03:02:09', '0000-00-00 00:00:00', '', '61.12.65.46'),
(87, 'mahendra.blitzkriegsolutions@gmail.com', '9740091080', 'Correct', '2016-12-27 03:17:36', '2016-12-27 03:37:45', '49.207.50.248', '61.12.65.46'),
(88, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-27 03:38:09', '2016-12-27 03:51:50', '49.207.50.248', '49.207.50.248'),
(89, 'mahendra.blitzkriegsolutions@gmail.com', '9740091080', 'Correct', '2016-12-27 03:40:52', '0000-00-00 00:00:00', '', '49.207.50.248'),
(90, 'mahendra.blitzkriegsolutions@gmail.com', '9740091080', 'Correct', '2016-12-27 03:51:54', '0000-00-00 00:00:00', '', '49.207.50.248'),
(91, 'mahendra.blitzkriegsolutions@gmail.com', '9740091080', 'Correct', '2016-12-27 04:22:45', '0000-00-00 00:00:00', '', '49.207.50.248'),
(92, 'deepak.blitzkrieg@gmail.com', 'deepak@blitzkrieg', 'Correct', '2016-12-27 04:39:27', '0000-00-00 00:00:00', '', '49.207.50.248'),
(93, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-27 08:18:08', '0000-00-00 00:00:00', '', '157.49.194.188'),
(94, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-28 10:47:45', '2016-12-28 11:31:15', '106.51.18.198', '106.51.18.198'),
(95, 'mahendra.blitzkriegsolutions@gmail.com', '9740091080', 'Correct', '2016-12-28 11:31:36', '2016-12-28 11:33:02', '106.51.18.198', '106.51.18.198'),
(96, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-28 11:33:05', '2016-12-28 11:35:00', '106.51.18.198', '106.51.18.198'),
(97, 'mahendra.blitzkriegsolutions@gmail.com', '9740091080', 'Correct', '2016-12-28 11:35:13', '2016-12-28 11:41:08', '106.51.18.198', '106.51.18.198'),
(98, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-28 11:41:11', '0000-00-00 00:00:00', '', '106.51.18.198'),
(99, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-29 12:35:41', '0000-00-00 00:00:00', '', '61.12.65.46'),
(100, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2017-01-05 01:43:56', '0000-00-00 00:00:00', '', '61.12.65.46');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `profile_image` text NOT NULL,
  `timeline_images` text NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `pincode` int(11) NOT NULL,
  `dob` date NOT NULL,
  `field` varchar(255) NOT NULL,
  `sub_field` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `about` longtext NOT NULL,
  `subscriptions` int(11) NOT NULL,
  `uploaded_data` int(11) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_name`, `email_id`, `profile_image`, `timeline_images`, `country_name`, `city_name`, `pincode`, `dob`, `field`, `sub_field`, `experience`, `about`, `subscriptions`, `uploaded_data`, `entry_date`) VALUES
(3, 'Asif Nomani', 'asif@blitzkriegsolutions.com', 'images/profile_images/3_3_3 (1).jpg', 'images/timeline_images/3_cute-girly-cool-facebook-timeline-cover-photos-93.jpg', 'india', 'banglore', 847420, '1990-05-10', 'MUSICIAN', 'dj india', '5-8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur', 0, 0, '2017-01-05 05:56:19'),
(10, 'Asif', 'asif2nomani@gmail.com', 'images\\profile_images\\2.jpg', 'images/timeline_images/1.jpg', '', '', 0, '0000-00-00', '', '', '', '', 0, 0, '2017-01-05 05:56:19'),
(11, 'Danish Nomani', 'asif.dca@gmail.com', '', '', '', '', 0, '0000-00-00', '', '', '', '', 0, 0, '2017-01-05 05:56:19'),
(12, 'Mahendra', 'mahendra.blitzkriegsolutions@gmail.com', 'images/profile_images/12_2016-12-27.jpg', '', 'india', 'banglore', 583103, '1989-07-26', 'DJ', 'Hi this is your mahendra ', '3-5', 'Hi', 0, 0, '2017-01-05 05:56:19'),
(13, 'Anis Ahmad ', 'ashugaraul@yahoo.com', 'images/profile_images/13_IMG_0278.JPG', '', '', '', 0, '0000-00-00', '', '', '', '', 0, 0, '2017-01-05 05:56:19'),
(14, 'Shakib Nomani', 'shakib.nomani@gmail.com', 'images/profile_images/14_', '', '', '', 0, '0000-00-00', '', '', '', '', 0, 0, '2017-01-05 05:56:19'),
(15, 'Danish', 'danish.nomani@gmail.com', '', '', '', '', 0, '0000-00-00', '', '', '', '', 0, 0, '2017-01-05 05:56:19'),
(16, 'Deepak Salunke', 'deepak.blitzkrieg@gmail.com', 'images/profile_images/16_team_pic_1.jpg', '', 'india', 'banglore', 560037, '2010-02-14', '', '', '', '', 0, 0, '2017-01-05 05:56:19');

-- --------------------------------------------------------

--
-- Table structure for table `member_friend`
--

CREATE TABLE IF NOT EXISTS `member_friend` (
  `member_friend_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `friend_date` date NOT NULL,
  `islogin` int(11) NOT NULL,
  `account_status` int(11) NOT NULL,
  `friend_status` int(11) NOT NULL,
  `accept_date` date NOT NULL,
  PRIMARY KEY (`member_friend_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `member_friend`
--

INSERT INTO `member_friend` (`member_friend_id`, `member_id`, `friend_id`, `friend_date`, `islogin`, `account_status`, `friend_status`, `accept_date`) VALUES
(16, 3, 10, '2016-12-19', 0, 0, 1, '0000-00-00'),
(17, 10, 3, '2016-12-19', 0, 0, 1, '2016-12-19'),
(18, 3, 11, '2016-12-19', 0, 0, 1, '0000-00-00'),
(19, 11, 3, '2016-12-19', 0, 0, 0, '0000-00-00'),
(20, 12, 10, '2016-12-20', 0, 0, 1, '0000-00-00'),
(21, 10, 12, '2016-12-20', 0, 0, 0, '0000-00-00'),
(22, 3, 13, '2016-12-23', 0, 0, 1, '0000-00-00'),
(23, 13, 3, '2016-12-23', 0, 0, 1, '2016-12-23'),
(24, 14, 10, '2016-12-23', 0, 0, 1, '0000-00-00'),
(25, 10, 14, '2016-12-23', 0, 0, 0, '0000-00-00'),
(26, 3, 12, '2016-12-28', 0, 0, 1, '0000-00-00'),
(27, 12, 3, '2016-12-28', 0, 0, 1, '2016-12-28');

-- --------------------------------------------------------

--
-- Table structure for table `music_upload`
--

CREATE TABLE IF NOT EXISTS `music_upload` (
  `music_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  PRIMARY KEY (`music_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `pages_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `about_page` longtext NOT NULL,
  `page_logo` varchar(255) NOT NULL,
  `page_timeline` text NOT NULL,
  `entry_date` datetime NOT NULL,
  `ip` varchar(255) NOT NULL,
  PRIMARY KEY (`pages_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`pages_id`, `member_id`, `page_name`, `about_page`, `page_logo`, `page_timeline`, `entry_date`, `ip`) VALUES
(1, 3, 'My Pages', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'images/page_images/1_3_3 (1).jpg', 'images/page_images/1_3_1.jpg', '2016-12-22 00:00:00', '49.207.52.110');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `photos_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  PRIMARY KEY (`photos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `post_content` longtext NOT NULL,
  `post_images` varchar(255) NOT NULL,
  `post_media` varchar(255) NOT NULL,
  `timeline_post` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `entry_date` datetime NOT NULL,
  `ip` varchar(255) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `member_id`, `album_id`, `post_content`, `post_images`, `post_media`, `timeline_post`, `friend_id`, `entry_date`, `ip`) VALUES
(1, 3, 0, 'my first post', '', '', 0, 0, '2016-12-12 00:00:00', '::1'),
(2, 3, 0, 'My Second Post.', '', '', 0, 0, '2016-12-12 00:00:00', '::1'),
(3, 3, 0, 'dgrvdrfg', '', '', 0, 0, '2016-12-12 00:00:00', '::1'),
(4, 3, 0, 'fvdsvgdrs', '', '', 0, 0, '2016-12-12 00:00:00', '::1'),
(5, 3, 0, 'adcdsavc', '', '', 0, 0, '2016-12-12 00:00:00', '::1'),
(6, 3, 0, 'dsfcsf', '', '', 0, 0, '2016-12-12 00:00:00', '::1'),
(7, 3, 0, 'dafcewsafwes', '', '', 0, 0, '2016-12-12 00:00:00', '::1'),
(8, 3, 0, 'Today Last Post.', '', '', 0, 0, '2016-12-12 00:00:00', '::1'),
(9, 3, 0, 'New Post', '', '', 0, 0, '2016-12-13 00:00:00', '::1'),
(10, 10, 0, 'My Friend Post', '', '', 0, 0, '2016-12-13 00:00:00', '::1'),
(11, 3, 0, 'Test Post', '', '', 0, 0, '2016-12-14 00:00:00', '::1'),
(12, 3, 0, 'Test post', '', '', 0, 0, '2016-12-14 00:00:00', '::1'),
(13, 3, 0, 'Test New New Post', '', '', 0, 0, '2016-12-14 00:00:00', '::1'),
(14, 3, 0, 'My First Image Post', 'images/post_images/3_face-map.png', '', 0, 0, '2016-12-16 00:00:00', '::1'),
(15, 3, 0, 'My First Vedio Post', '', 'videos/post_video/3_1.mp4', 0, 0, '2016-12-16 00:00:00', '::1'),
(16, 3, 0, 'Contant Post', '', '', 0, 0, '2016-12-16 00:00:00', '::1'),
(17, 3, 0, 'It''s a bit weird to mark a future question as a duplicate of an older one. Will it set the precedence that re-asking questions and then closing the original ones is okay? Duplicates are already a big problem here. I do see the worth in re-asking a question where existing answers have gone stale, but it''s always possible to edit the question and add/edit new answers.', '', '', 0, 0, '2016-12-16 00:00:00', '::1'),
(18, 3, 0, 'sxsa', '', '', 0, 0, '2016-12-16 00:00:00', '::1'),
(19, 3, 0, '', 'images/post_images/3_app-store.png', '', 0, 0, '2016-12-16 00:00:00', '::1'),
(20, 3, 0, '', '', 'videos/post_video/3_1.mp4', 0, 0, '2016-12-16 00:00:00', '::1'),
(21, 3, 0, '', '', 'videos/post_video/3_01 Aap Se Mausiiquii - Himesh - 190Kbps.mp3', 0, 0, '2016-12-16 00:00:00', '::1'),
(22, 3, 0, '', '', 'videos/post_video/3_mov_bbb.mp4', 0, 0, '2016-12-16 00:00:00', '::1'),
(23, 3, 0, '', '', 'videos/post_video/3_01 Aap Se Mausiiquii - Himesh - 190Kbps.mp3', 0, 0, '2016-12-16 00:00:00', '::1'),
(24, 3, 0, '', '', 'videos/post_video/3_01 Ok Jaanu (Title Track) (SongsMp3.Com).mp3', 0, 0, '2016-12-16 00:00:00', '::1'),
(25, 3, 0, '', '', 'videos/post_video/3_01 Ae Dil Hai Mushkil (Future Bass Remix By DJ Khushi) (1).mp3', 0, 0, '2016-12-16 00:00:00', '::1'),
(26, 3, 0, '', '', 'videos/post_video/3_01 Ae Dil Hai Mushkil (Future Bass Remix By DJ Khushi).mp3', 0, 0, '2016-12-16 00:00:00', '::1'),
(27, 10, 0, 'My Post', 'images/post_images/10_3_cute-girly-cool-facebook-timeline-cover-photos-93.jpg', '', 0, 0, '2016-12-16 00:00:00', '::1'),
(28, 10, 0, 'My First Video', '', 'videos/post_video/10_3_mov_bbb.mp4', 0, 0, '2016-12-16 00:00:00', '::1'),
(29, 10, 0, 'Hiiii Asif', '', '', 1, 3, '2016-12-16 00:00:00', '::1'),
(30, 3, 0, 'Hiiiiii', '', '', 1, 10, '2016-12-16 00:00:00', '::1'),
(31, 12, 0, 'Hello', '', '', 0, 0, '2016-12-16 00:00:00', '::1'),
(32, 12, 0, '', 'images/post_images/12_12_3_cute-girly-cool-facebook-timeline-cover-photos-93.jpg', '', 0, 0, '2016-12-16 00:00:00', '::1'),
(33, 12, 0, '', '', 'videos/post_video/12_1.mp4', 0, 0, '2016-12-16 00:00:00', '::1'),
(34, 3, 0, 'hiiii', '', '', 0, 0, '2016-12-19 00:00:00', '::1'),
(35, 3, 0, 'Test Pic', 'images/post_images/3_1.jpg', '', 0, 0, '2016-12-19 00:00:00', '::1'),
(36, 3, 0, '', 'images/post_images/3_3 (3).jpg', '', 0, 0, '2016-12-20 00:00:00', '::1'),
(37, 3, 0, '', '', 'videos/post_video/3_01 Aap Se Mausiiquii - Himesh - 190Kbps.mp3', 0, 0, '2016-12-20 00:00:00', '::1'),
(38, 3, 0, '', '', 'videos/post_video/3_01 Aap Se Mausiiquii - Himesh - 190Kbps.mp3', 0, 0, '2016-12-20 00:00:00', '::1'),
(39, 3, 0, '', '', 'videos/post_video/3_01 Aap Se Mausiiquii - Himesh - 190Kbps.mp3', 0, 0, '2016-12-20 00:00:00', '::1'),
(40, 3, 0, '', '', 'videos/post_video/3_01 Aap Se Mausiiquii - Himesh - 190Kbps.mp3', 0, 0, '2016-12-20 00:00:00', '::1'),
(41, 3, 0, '', '', 'videos/post_video/3_01 Aap Se Mausiiquii - Himesh - 190Kbps.mp3', 0, 0, '2016-12-20 00:00:00', '::1'),
(42, 3, 0, '', '', 'videos/post_video/3_01 Aap Se Mausiiquii - Himesh - 190Kbps.mp3', 0, 0, '2016-12-20 00:00:00', '::1'),
(43, 3, 0, '', '', 'videos/post_video/3_01 Aap Se Mausiiquii - Himesh - 190Kbps.mp3', 0, 0, '2016-12-20 00:00:00', '::1'),
(44, 3, 0, '', '', 'videos/post_video/3_3_mov_bbb.mp4', 0, 0, '2016-12-20 00:00:00', '::1'),
(45, 3, 0, '', '', 'videos/post_video/3_01 Aap Se Mausiiquii - Himesh - 190Kbps.mp3', 0, 0, '2016-12-20 00:00:00', '::1'),
(46, 3, 0, '', '', 'videos/post_video/3_3_mov_bbb.mp4', 0, 0, '2016-12-20 00:00:00', '::1'),
(47, 3, 0, '', '', 'videos/post_video/3_3_mov_bbb.mp4', 0, 0, '2016-12-20 00:00:00', '::1'),
(48, 3, 0, '', '', 'videos/post_video/3_3_mov_bbb.mp4', 0, 0, '2016-12-21 00:00:00', '61.12.65.46'),
(49, 3, 0, '', '', 'videos/post_video/3_.mp3', 0, 0, '2016-12-21 00:00:00', '49.207.52.110'),
(50, 3, 0, '', '', 'videos/post_video/3_.mp3', 0, 0, '2016-12-21 00:00:00', '49.207.52.110'),
(51, 3, 0, '', '', 'videos/post_video/3_.mp3', 0, 0, '2016-12-21 00:00:00', '49.207.52.110'),
(52, 3, 0, '', '', 'videos/post_video/3_.mp3', 0, 0, '2016-12-21 00:00:00', '49.207.52.110'),
(53, 3, 0, '', '', 'videos/post_video/3_.mp3', 0, 0, '2016-12-21 00:00:00', '49.207.52.110'),
(54, 3, 0, '', '', 'videos/post_video/3_01 Aap Se Mausiiquii - Himesh - 190Kbps.mp3', 0, 0, '2016-12-21 00:00:00', '49.207.52.110'),
(55, 3, 0, '', '', 'videos/post_video/3_.mp3', 0, 0, '2016-12-21 00:00:00', '49.207.52.110'),
(56, 3, 0, '', '', 'videos/post_video/3_01 Aap Se Mausiiquii - Himesh - 190Kbps.mp3', 0, 0, '2016-12-21 00:00:00', '49.207.52.110'),
(57, 3, 0, '', '', 'videos/post_video/3_01 Ae Dil Hai Mushkil (Future Bass Remix By DJ Khushi) (1).mp3', 0, 0, '2016-12-21 00:00:00', '49.207.52.110'),
(58, 3, 0, '', '', 'videos/post_video/3_3_01 Ae Dil Hai Mushkil (Future Bass Remix By DJ Khushi) (1).mp3', 0, 0, '2016-12-21 00:00:00', '49.207.52.110'),
(59, 3, 0, '', '', 'videos/post_video/3_14357138_1579380815703620_474246720_n.mp4', 0, 0, '2016-12-23 00:00:00', '61.12.65.46'),
(60, 3, 0, 'Test Post', '', '', 0, 0, '2016-12-27 00:00:00', '49.207.50.248'),
(61, 3, 0, 'dsa', '', '', 0, 0, '2016-12-27 00:00:00', '49.207.50.248'),
(62, 3, 0, 'refg', '', '', 0, 0, '2016-12-27 00:00:00', '49.207.50.248'),
(63, 3, 0, 'taaaaa', '', '', 0, 0, '2016-12-27 11:53:22', '49.207.50.248');

-- --------------------------------------------------------

--
-- Table structure for table `post_comment`
--

CREATE TABLE IF NOT EXISTS `post_comment` (
  `post_comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL,
  `ip` varchar(255) NOT NULL,
  PRIMARY KEY (`post_comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `post_comment`
--

INSERT INTO `post_comment` (`post_comment_id`, `post_id`, `member_id`, `comment`, `comment_date`, `ip`) VALUES
(1, 8, 3, '', '2016-12-13 00:00:00', ''),
(2, 8, 3, 'first comment', '2016-12-13 00:00:00', ''),
(3, 7, 3, 'hiiii', '2016-12-13 00:00:00', ''),
(4, 7, 3, 'hello', '2016-12-13 00:00:00', ''),
(5, 7, 3, 'hello', '2016-12-13 00:00:00', ''),
(6, 8, 3, 'Hello', '2016-12-13 00:00:00', ''),
(7, 8, 3, '', '2016-12-13 00:00:00', ''),
(8, 8, 3, '', '2016-12-13 00:00:00', ''),
(9, 6, 3, 'bkjbkj', '2016-12-13 00:00:00', ''),
(10, 4, 3, 'test', '2016-12-13 00:00:00', ''),
(11, 1, 3, 'asif', '2016-12-13 00:00:00', ''),
(12, 5, 3, 'test comment', '2016-12-13 00:00:00', ''),
(13, 5, 3, 'dffghjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj ghfvjjjjjjjjk', '2016-12-13 00:00:00', ''),
(14, 5, 3, ':)', '2016-12-13 00:00:00', ''),
(15, 9, 3, 'My comment', '2016-12-13 00:00:00', ''),
(16, 10, 10, 'Nice', '2016-12-14 00:00:00', ''),
(17, 12, 3, 'Cool', '2016-12-14 00:00:00', ''),
(18, 13, 10, 'Nice Post', '2016-12-14 00:00:00', ''),
(19, 13, 3, 'nvhjgfvg', '2016-12-15 00:00:00', ''),
(20, 14, 3, 'Nice Images', '2016-12-16 00:00:00', ''),
(21, 19, 3, 'hiiiii', '2016-12-16 00:00:00', ''),
(22, 26, 3, 'Hiiiii Best Songs', '2016-12-16 00:00:00', ''),
(23, 28, 3, 'hiiiiii Asif', '2016-12-16 00:00:00', ''),
(24, 10, 3, 'ok', '2016-12-16 00:00:00', ''),
(25, 26, 10, 'Cooolllllll', '2016-12-16 00:00:00', ''),
(26, 29, 10, 'hello', '2016-12-16 00:00:00', ''),
(27, 29, 3, 'How Are You', '2016-12-16 00:00:00', ''),
(28, 29, 10, 'Fine Say About You.', '2016-12-16 00:00:00', ''),
(29, 30, 3, 'Hello.', '2016-12-16 00:00:00', ''),
(30, 30, 10, 'Wats Up', '2016-12-16 00:00:00', ''),
(31, 56, 3, 'test', '2016-12-21 00:00:00', ''),
(32, 53, 3, 'test comment', '2016-12-27 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `post_dislike`
--

CREATE TABLE IF NOT EXISTS `post_dislike` (
  `post_dislike_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `dislike_date` datetime NOT NULL,
  `ip` int(11) NOT NULL,
  PRIMARY KEY (`post_dislike_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `post_dislike`
--

INSERT INTO `post_dislike` (`post_dislike_id`, `post_id`, `member_id`, `dislike_date`, `ip`) VALUES
(18, 8, 3, '2016-12-13 00:00:00', 0),
(19, 6, 3, '2016-12-13 00:00:00', 0),
(20, 8, 3, '2016-12-13 00:00:00', 0),
(21, 8, 3, '2016-12-13 00:00:00', 0),
(22, 7, 3, '2016-12-13 00:00:00', 0),
(23, 7, 3, '2016-12-13 00:00:00', 0),
(24, 7, 3, '2016-12-13 00:00:00', 0),
(25, 8, 3, '2016-12-13 00:00:00', 0),
(26, 7, 3, '2016-12-13 00:00:00', 0),
(27, 8, 3, '2016-12-13 00:00:00', 0),
(28, 4, 3, '2016-12-13 00:00:00', 0),
(29, 2, 3, '2016-12-13 00:00:00', 0),
(30, 9, 3, '2016-12-13 00:00:00', 0),
(31, 10, 10, '2016-12-14 00:00:00', 0),
(32, 13, 3, '2016-12-14 00:00:00', 0),
(33, 13, 3, '2016-12-14 00:00:00', 0),
(34, 12, 3, '2016-12-14 00:00:00', 0),
(35, 11, 3, '2016-12-14 00:00:00', 0),
(36, 3, 3, '2016-12-14 00:00:00', 0),
(37, 1, 3, '2016-12-14 00:00:00', 0),
(38, 14, 3, '2016-12-16 00:00:00', 0),
(39, 19, 3, '2016-12-16 00:00:00', 0),
(40, 26, 3, '2016-12-16 00:00:00', 0),
(41, 28, 3, '2016-12-16 00:00:00', 0),
(42, 30, 11, '2016-12-19 00:00:00', 0),
(43, 35, 3, '2016-12-19 00:00:00', 0),
(44, 34, 3, '2016-12-19 00:00:00', 0),
(45, 50, 3, '2016-12-21 00:00:00', 0),
(46, 56, 3, '2016-12-21 00:00:00', 0),
(47, 32, 3, '2016-12-27 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post_like`
--

CREATE TABLE IF NOT EXISTS `post_like` (
  `post_like_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `like_date` datetime NOT NULL,
  `ip` int(11) NOT NULL,
  PRIMARY KEY (`post_like_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `post_like`
--

INSERT INTO `post_like` (`post_like_id`, `post_id`, `member_id`, `like_date`, `ip`) VALUES
(65, 35, 3, '2016-12-19 00:00:00', 0),
(66, 34, 3, '2016-12-19 00:00:00', 0),
(67, 47, 3, '2016-12-21 00:00:00', 0),
(68, 50, 3, '2016-12-21 00:00:00', 0),
(69, 59, 3, '2016-12-23 00:00:00', 0),
(70, 33, 3, '2016-12-27 00:00:00', 0),
(71, 63, 12, '2016-12-28 06:10:46', 0);

-- --------------------------------------------------------

--
-- Table structure for table `profile_photo`
--

CREATE TABLE IF NOT EXISTS `profile_photo` (
  `profile_photo_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `profile_image` text NOT NULL,
  `upload_date` datetime NOT NULL,
  `ip` int(11) NOT NULL,
  PRIMARY KEY (`profile_photo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `profile_photo`
--

INSERT INTO `profile_photo` (`profile_photo_id`, `member_id`, `profile_image`, `upload_date`, `ip`) VALUES
(1, 3, 'images\\profile_images\\1.jpg', '0000-00-00 00:00:00', 0),
(2, 10, 'images\\profile_images\\2.jpg', '0000-00-00 00:00:00', 0),
(3, 0, 'images/profile_images/3 (1).jpg', '2016-12-15 00:00:00', 0),
(4, 0, 'images/profile_images/3 (3).jpg', '2016-12-15 00:00:00', 0),
(5, 0, 'images/profile_images/3 (3).jpg', '2016-12-15 00:00:00', 0),
(6, 0, 'images/profile_images/3 (3).jpg', '2016-12-15 00:00:00', 0),
(7, 3, 'images/profile_images/3 (3).jpg', '2016-12-15 00:00:00', 0),
(8, 3, 'images/profile_images/3 (1).jpg', '2016-12-15 00:00:00', 0),
(9, 3, 'images/profile_images/3 (2).jpg', '2016-12-15 01:47:34', 0),
(10, 3, 'images/profile_images/3 (2).jpg', '2016-12-15 01:48:18', 0),
(11, 3, 'images/profile_images/3 (2).jpg', '2016-12-15 01:48:22', 0),
(12, 3, 'images/profile_images/3 (1).jpg', '2016-12-15 01:53:40', 0),
(13, 3, 'images/profile_images/3 (1).jpg', '2016-12-15 01:54:34', 0),
(14, 3, 'images/profile_images/3 (3).jpg', '2016-12-15 01:55:13', 0),
(15, 3, 'images/profile_images/3 (3).jpg', '2016-12-15 01:58:23', 0),
(16, 3, 'images/profile_images/3 (1).jpg', '2016-12-15 01:58:42', 0),
(17, 3, 'images/profile_images/3_3 (2).jpg', '2016-12-15 02:00:50', 0),
(18, 13, 'images/profile_images/13_IMG_0158.JPG', '2016-12-23 08:57:11', 10651),
(19, 13, 'images/profile_images/13_IMG_0158.JPG', '2016-12-23 08:57:12', 10651),
(20, 13, 'images/profile_images/13_IMG_0278.JPG', '2016-12-23 08:58:12', 10651),
(21, 14, 'images/profile_images/14_', '2016-12-23 09:14:32', 4729),
(22, 14, 'images/profile_images/14_', '2016-12-23 09:14:50', 4729),
(23, 14, 'images/profile_images/14_', '2016-12-23 09:15:28', 4729),
(24, 3, 'images/profile_images/3_3_2.jpg', '2016-12-27 12:01:45', 6112),
(25, 12, 'images/profile_images/12_IMG_20161225_121806.jpeg', '2016-12-27 02:53:43', 6112),
(26, 12, 'images/profile_images/12_IMG_20161225_121806.jpeg', '2016-12-27 02:54:22', 6112),
(27, 12, 'images/profile_images/12_IMG_20161225_121806.jpeg', '2016-12-27 02:56:48', 6112),
(28, 3, 'images/profile_images/3_3_3 (2).jpg', '2016-12-27 02:56:59', 6112),
(29, 16, 'images/profile_images/16_devs.jpg', '2016-12-27 02:59:47', 6112),
(30, 16, 'images/profile_images/16_team_pic_1.jpg', '2016-12-27 03:01:43', 6112),
(31, 12, 'images/profile_images/12_IMG_20161225_121806.jpeg', '2016-12-27 03:02:10', 6112),
(32, 3, 'images/profile_images/3_3_2.jpg', '2016-12-27 03:02:55', 6112),
(33, 12, 'images/profile_images/12_mahendra.jpg', '2016-12-27 03:05:20', 6112),
(34, 12, 'images/profile_images/12_IMG_20161225_121806.jpeg', '2016-12-27 03:09:07', 6112),
(35, 3, 'images/profile_images/3_3_2.jpg', '2016-12-27 03:13:45', 6112),
(36, 3, 'images/profile_images/3_2016-12-27.jpg', '2016-12-27 03:15:51', 6112),
(37, 3, 'images/profile_images/3_3_3 (3).jpg', '2016-12-27 03:16:29', 6112),
(38, 12, 'images/profile_images/12_ACDC_Blitz.png', '2016-12-27 03:17:07', 6112),
(39, 12, 'images/profile_images/12_mahendra.jpg', '2016-12-27 03:18:06', 6112),
(40, 3, 'images/profile_images/3_2016-12-27.jpg', '2016-12-27 03:18:29', 6112),
(41, 3, 'images/profile_images/3_3_3 (1).jpg', '2016-12-27 03:18:52', 6112),
(42, 12, 'images/profile_images/12_mahendra.jpg', '2016-12-27 03:19:06', 6112),
(43, 12, 'images/profile_images/12_mahendra.jpg', '2016-12-27 03:19:30', 6112),
(44, 12, 'images/profile_images/12_mahendra.jpg', '2016-12-27 04:23:01', 49207),
(45, 12, 'images/profile_images/12_2016-12-27.jpg', '2016-12-28 11:31:45', 10651);

-- --------------------------------------------------------

--
-- Table structure for table `sub_genres`
--

CREATE TABLE IF NOT EXISTS `sub_genres` (
  `sub_genres_id` int(11) NOT NULL AUTO_INCREMENT,
  `genres_id` int(11) NOT NULL,
  `sub_genres_name` varchar(255) NOT NULL,
  PRIMARY KEY (`sub_genres_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=315 ;

--
-- Dumping data for table `sub_genres`
--

INSERT INTO `sub_genres` (`sub_genres_id`, `genres_id`, `sub_genres_name`) VALUES
(1, 2, 'Acoustic Blues'),
(2, 2, 'Chicago Blues'),
(3, 2, 'Classic Blues'),
(4, 2, 'Contemporary Blues'),
(5, 2, 'Country Blues'),
(6, 2, 'Delta Blues'),
(7, 2, 'Electric Blues'),
(8, 3, 'Lullabies'),
(9, 3, 'Sing-Along'),
(10, 3, 'Stories'),
(11, 4, 'Avant-Garde'),
(12, 4, 'Baroque'),
(13, 1, 'Art Punk'),
(14, 1, 'Alternative Rock'),
(15, 1, 'College Rock'),
(16, 1, 'Experimental Rock'),
(17, 1, 'Goth / Gothic Rock'),
(18, 1, 'Grunge'),
(19, 1, 'Hardcore Punk'),
(20, 1, 'Hard Rock'),
(21, 1, 'Indie Rock'),
(22, 1, 'Lo-fi '),
(23, 1, 'New Wave'),
(24, 1, 'Progressive Rock'),
(25, 1, 'Punk'),
(26, 1, 'Shoegaze'),
(27, 1, 'Steampunk '),
(28, 4, 'Chamber Music'),
(29, 4, 'Chant'),
(30, 4, 'Choral'),
(31, 4, 'Classical Crossover'),
(32, 4, 'Early Music'),
(33, 4, 'High Classical'),
(34, 4, 'Impressionist'),
(35, 4, 'Medieval'),
(36, 4, 'Minimalism'),
(37, 4, 'Modern Composition'),
(38, 4, 'Opera'),
(39, 4, 'Orchestral'),
(40, 4, 'Renaissance'),
(41, 4, 'Romantic'),
(42, 4, 'Wedding Music'),
(43, 5, 'Novelty'),
(44, 5, 'Standup Comedy'),
(45, 5, 'Vaudeville '),
(46, 6, 'Jingles'),
(47, 6, 'TV Themes'),
(48, 7, 'Alternative Country'),
(49, 7, 'Americana'),
(50, 7, 'Bluegrass'),
(51, 7, 'Contemporary Bluegrass'),
(52, 7, 'Contemporary Country'),
(53, 7, 'Country Gospel'),
(54, 7, 'Country Pop '),
(55, 7, 'Honky Tonk'),
(56, 7, 'Outlaw Country'),
(57, 7, 'Traditional Bluegrass'),
(58, 7, 'Traditional Country'),
(59, 7, 'Urban Cowboy'),
(60, 8, 'Club / Club Dance'),
(61, 8, 'Breakbeat'),
(62, 8, 'Brostep '),
(63, 8, 'Deep House '),
(64, 8, 'Dubstep'),
(65, 8, 'Electro House '),
(66, 8, 'Exercise'),
(67, 8, 'Garage'),
(68, 8, 'Glitch Hop '),
(69, 8, 'Hardcore'),
(70, 8, 'Hard Dance'),
(71, 8, 'Hi-NRG / Eurodance'),
(72, 8, 'House'),
(73, 8, 'Jackin House '),
(74, 8, 'Jungle / Drumâ€™nâ€™bass'),
(75, 8, 'Regstep '),
(76, 8, 'Techno'),
(77, 8, 'Trance'),
(78, 8, 'Trap '),
(79, 10, 'Bop'),
(80, 10, 'Lounge'),
(81, 10, 'Swing'),
(82, 11, '8bit â€“ aka 8-bit, Bitpop and Chiptune '),
(83, 11, 'Ambient'),
(84, 11, 'Bassline'),
(85, 11, 'Chiptune '),
(86, 11, 'Crunk '),
(87, 11, 'Downtempo'),
(88, 11, 'Drum & Bass '),
(89, 11, 'Electro'),
(90, 11, 'Electro-swing '),
(91, 11, 'Electronica'),
(92, 11, 'Electronic Rock'),
(93, 11, 'Hardstyle '),
(94, 11, 'IDM/Experimental'),
(95, 11, 'Industrial'),
(96, 11, 'Trip Hop'),
(97, 17, 'Alternative Rap'),
(98, 17, 'Bounce'),
(99, 17, 'Dirty South'),
(100, 17, 'East Coast Rap'),
(101, 17, 'Gangsta Rap'),
(102, 17, 'Hardcore Rap'),
(103, 17, 'Hip-Hop'),
(104, 17, 'Latin Rap'),
(105, 17, 'Old School Rap'),
(106, 17, 'Rap'),
(107, 17, 'Turntablism '),
(108, 17, 'Underground Rap'),
(109, 17, 'West Coast Rap'),
(110, 18, 'Chanukah'),
(111, 18, 'Christmas'),
(112, 18, 'Christmas: Childrenâ€™s'),
(113, 18, 'Christmas: Classic'),
(114, 18, 'Christmas: Classical'),
(115, 18, 'Christmas: Jazz'),
(116, 18, 'Christmas: Modern'),
(117, 18, 'Christmas: Pop'),
(118, 18, 'Christmas: R&B'),
(119, 18, 'Christmas: Religious'),
(120, 18, 'Christmas: Rock'),
(121, 18, 'Easter'),
(122, 18, 'Halloween'),
(123, 18, 'Holiday: Other'),
(124, 18, 'Thanksgiving'),
(125, 21, 'CCM'),
(126, 21, 'Christian Metal'),
(127, 21, 'Christian Pop'),
(128, 21, 'Christian Rap'),
(129, 21, 'Christian Rock'),
(130, 21, 'Classic Christian'),
(131, 21, 'Contemporary Gospel'),
(132, 21, 'Gospel'),
(133, 21, 'Christian & Gospel'),
(134, 21, 'Praise & Worship'),
(135, 21, 'Qawwali '),
(136, 21, 'Southern Gospel'),
(137, 21, 'Traditional Gospel'),
(138, 22, 'March '),
(139, 23, 'J-Rock'),
(140, 23, 'J-Synth'),
(141, 23, 'J-Ska'),
(142, 23, 'J-Punk'),
(143, 24, 'Acid Jazz '),
(144, 24, 'Avant-Garde Jazz'),
(145, 24, 'Bebop '),
(146, 24, 'Big Band'),
(147, 24, 'Blue Note '),
(148, 24, 'Contemporary Jazz'),
(149, 24, 'Cool'),
(150, 24, 'Crossover Jazz'),
(151, 24, 'Dixieland'),
(152, 24, 'Ethio-jazz '),
(153, 24, 'Fusion'),
(154, 24, 'Gypsy Jazz '),
(155, 24, 'Hard Bop'),
(156, 24, 'Latin Jazz'),
(157, 24, 'Mainstream Jazz'),
(158, 24, 'Ragtime'),
(159, 24, 'Smooth Jazz'),
(160, 24, 'Trad Jazz'),
(161, 28, 'Alternativo & Rock Latino'),
(162, 28, 'Argentine tango '),
(163, 28, 'Baladas y Boleros'),
(164, 28, 'Bossa Nova '),
(165, 28, 'Brazilian'),
(166, 28, 'Contemporary Latin'),
(167, 28, 'Flamenco / Spanish Flamenco '),
(168, 28, 'Latin Jazz'),
(169, 28, 'Nuevo Flamenco '),
(170, 28, 'Pop Latino'),
(171, 28, 'Portuguese fado '),
(172, 28, 'RaÃ­ces'),
(173, 28, 'Reggaeton y Hip-Hop'),
(174, 28, 'Regional Mexicano'),
(175, 28, 'Salsa y Tropical'),
(176, 29, 'Environmenta'),
(177, 29, 'Healing'),
(178, 29, 'Meditation'),
(179, 29, 'Nature'),
(180, 28, 'Relaxation'),
(181, 28, 'Travel'),
(182, 31, 'Adult Contemporary'),
(183, 31, 'Britpop'),
(184, 31, 'Bubblegum Pop '),
(185, 31, 'Chamber Pop '),
(186, 31, 'Dance Pop'),
(187, 31, 'Dream Pop '),
(188, 31, 'Electro Pop '),
(189, 31, 'Orchestral Pop '),
(190, 31, 'Pop/Rock'),
(191, 31, 'Power Pop '),
(192, 31, 'Soft Rock'),
(193, 31, 'Synthpop '),
(194, 31, 'Teen Pop'),
(195, 32, 'Contemporary R&B'),
(196, 32, 'Disco '),
(197, 32, 'Doo Wop'),
(198, 32, 'Funk'),
(199, 32, 'Modern Soul '),
(200, 32, 'Motown'),
(201, 32, 'Neo-Soul'),
(202, 32, 'Northern Soul '),
(203, 32, 'Psychedelic Soul '),
(204, 32, 'Quiet Storm'),
(205, 32, 'Soul'),
(206, 32, 'Soul Blues '),
(207, 32, 'Southern Soul '),
(208, 33, 'Dancehall'),
(209, 33, 'Dub'),
(210, 33, 'Roots Reggae'),
(211, 33, 'Ska'),
(212, 34, 'Acid Rock '),
(213, 34, 'Adult-Oriented Rock '),
(214, 34, 'Afro Punk'),
(215, 34, 'Adult Alternative'),
(216, 34, 'Alternative Rock '),
(217, 34, 'American Trad Rock'),
(218, 34, 'Anatolian Rock'),
(219, 34, 'Arena Rock'),
(220, 34, 'Art Rock'),
(221, 34, 'Blues-Rock'),
(222, 34, 'British Invasion'),
(223, 34, 'Death Metal / Black Metal'),
(224, 34, 'Glam Rock'),
(225, 34, 'Gothic Metal '),
(226, 34, 'Hair Metal'),
(227, 34, 'Hard Rock'),
(228, 34, 'Metal'),
(229, 34, 'Noise Rock '),
(230, 34, 'Japanoise '),
(231, 34, 'Jam Bands'),
(232, 34, 'Post Punk '),
(233, 34, 'Prog-Rock/Art Rock'),
(234, 34, 'Psychedelic'),
(235, 34, 'Rock & Roll'),
(236, 34, 'Rockabilly '),
(237, 34, 'Roots Rock'),
(238, 34, 'Singer/Songwriter'),
(239, 34, 'Southern Rock'),
(240, 34, 'Surf'),
(241, 34, 'Tex-Mex'),
(242, 34, 'Time Lord Rock (Trock)'),
(243, 35, 'Alternative Folk'),
(244, 35, 'Contemporary Folk'),
(245, 35, 'Contemporary Singer/Songwriter'),
(246, 35, 'Indie Folk '),
(247, 35, 'Folk-Rock'),
(248, 35, 'Love Song '),
(249, 35, 'New Acoustic'),
(250, 35, 'Traditional Folk'),
(251, 36, 'Foreign Cinema'),
(252, 36, 'Musicals'),
(253, 36, 'Original Score'),
(254, 36, 'Soundtrack'),
(255, 36, 'TV Soundtrack'),
(256, 38, 'Chicano'),
(257, 38, 'Classic'),
(258, 38, 'Conjunto'),
(259, 38, 'Conjunto Progressive'),
(260, 38, 'New Mex'),
(261, 38, 'Tex-Mex'),
(262, 39, 'A cappella '),
(263, 39, 'Barbershop '),
(264, 39, 'Doo-wop '),
(265, 39, 'Gregorian Chant '),
(266, 39, 'Standards'),
(267, 39, 'Traditional Pop'),
(268, 39, 'Vocal Jazz'),
(269, 39, 'Vocal Pop'),
(270, 40, 'Africa'),
(271, 40, 'Afro-Beat'),
(272, 40, 'Afro-Pop'),
(273, 40, 'Asia'),
(274, 40, 'Australia'),
(275, 40, 'Cajun'),
(276, 40, 'Calypso '),
(277, 40, 'Caribbean'),
(278, 40, 'Celtic'),
(279, 40, 'Celtic Folk'),
(280, 40, 'Contemporary Celtic'),
(281, 40, 'Dangdut '),
(282, 40, 'Drinking Songs'),
(283, 40, 'Drone '),
(284, 40, 'Europe'),
(285, 40, 'France'),
(286, 40, 'Hawaii'),
(287, 40, 'Indian Ghazal '),
(288, 40, 'Indian Pop'),
(289, 40, 'Japan'),
(290, 40, 'Japanese Pop'),
(291, 40, 'Klezmer'),
(292, 40, 'Middle East'),
(293, 40, 'North America'),
(294, 40, 'Ode '),
(295, 40, 'Polka'),
(296, 40, 'Soca '),
(297, 40, 'South Africa'),
(298, 40, 'South America'),
(299, 40, 'Traditional Celtic'),
(300, 40, 'Worldbeat'),
(301, 40, 'Zydeco'),
(302, 9, 'Disney'),
(303, 12, 'Enka'),
(304, 13, 'French Pop'),
(305, 14, 'German Folk'),
(306, 15, 'German Pop'),
(307, 16, 'Fitness & Workout'),
(308, 19, 'Indie Pop'),
(309, 20, 'Industrial'),
(310, 25, 'K-Pop'),
(311, 26, 'Karaoke'),
(312, 27, 'Kayokyoku'),
(313, 30, 'Opera'),
(314, 37, 'Spoken Word');

-- --------------------------------------------------------

--
-- Table structure for table `timeline_photos`
--

CREATE TABLE IF NOT EXISTS `timeline_photos` (
  `timeline_photo_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `timeline_images` text NOT NULL,
  `upload_date` datetime NOT NULL,
  `ip` varchar(255) NOT NULL,
  PRIMARY KEY (`timeline_photo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `timeline_photos`
--

INSERT INTO `timeline_photos` (`timeline_photo_id`, `member_id`, `timeline_images`, `upload_date`, `ip`) VALUES
(1, 3, 'images/timeline_images/3_cute-girly-cool-facebook-timeline-cover-photos-93.jpg', '2016-12-15 05:36:48', '::1'),
(2, 12, 'images/timeline_images/12_3_cute-girly-cool-facebook-timeline-cover-photos-93.jpg', '2016-12-16 06:54:23', '::1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
