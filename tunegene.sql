-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2016 at 03:18 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tunegene`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `album_id` int(11) NOT NULL,
  `album_name` varchar(255) NOT NULL,
  `member_id` int(11) NOT NULL,
  `entry_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chitter`
--

CREATE TABLE `chitter` (
  `chitter_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `chitter_date` datetime NOT NULL,
  `ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(77, 3, 10, 'dacfad', '2016-12-19 07:45:38', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `club_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cover_photo`
--

CREATE TABLE `cover_photo` (
  `cover_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `account_status` int(11) NOT NULL,
  `islogin` int(11) NOT NULL,
  `login_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `member_id`, `email_id`, `password`, `account_status`, `islogin`, `login_time`) VALUES
(2, 3, 'asif@blitzkriegsolutions.com', 'asif@123', 0, 1, '2016-12-19 06:27:09'),
(3, 10, 'asif2nomani@gmail.com', 'asif@123', 0, 1, '2016-12-19 06:26:37'),
(4, 11, 'asif.dca@gmail.com', 'asif@123', 0, 0, '2016-12-19 10:49:44'),
(5, 12, 'shakib@gmail.com', 'asif@123', 0, 1, '2016-12-16 06:42:36');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `id` int(11) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `correct` varchar(255) NOT NULL,
  `login_time` datetime NOT NULL,
  `logout_time` datetime NOT NULL,
  `logout_ip` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(49, 'asif@blitzkriegsolutions.com', 'asif@123', 'Correct', '2016-12-19 06:27:09', '0000-00-00 00:00:00', '', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `member_name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `profile_image` text NOT NULL,
  `timeline_images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_name`, `email_id`, `profile_image`, `timeline_images`) VALUES
(3, 'Blitzkrieg Solutions', 'asif@blitzkriegsolutions.com', 'images/profile_images/3_3 (2).jpg', 'images/timeline_images/3_cute-girly-cool-facebook-timeline-cover-photos-93.jpg'),
(10, 'Asif Nomani', 'asif2nomani@gmail.com', 'images\\profile_images\\2.jpg', 'images/timeline_images/1.jpg'),
(11, 'Danish Nomani', 'asif.dca@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `member_friend`
--

CREATE TABLE `member_friend` (
  `member_friend_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `friend_date` date NOT NULL,
  `islogin` int(11) NOT NULL,
  `account_status` int(11) NOT NULL,
  `friend_status` int(11) NOT NULL,
  `accept_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_friend`
--

INSERT INTO `member_friend` (`member_friend_id`, `member_id`, `friend_id`, `friend_date`, `islogin`, `account_status`, `friend_status`, `accept_date`) VALUES
(16, 3, 10, '2016-12-19', 0, 0, 1, '0000-00-00'),
(17, 10, 3, '2016-12-19', 0, 0, 1, '2016-12-19'),
(18, 3, 11, '2016-12-19', 0, 0, 1, '0000-00-00'),
(19, 11, 3, '2016-12-19', 0, 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `music_upload`
--

CREATE TABLE `music_upload` (
  `music_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `pages_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `photos_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `post_content` longtext NOT NULL,
  `post_images` varchar(255) NOT NULL,
  `post_media` varchar(255) NOT NULL,
  `timeline_post` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `entry_date` date NOT NULL,
  `ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `member_id`, `album_id`, `post_content`, `post_images`, `post_media`, `timeline_post`, `friend_id`, `entry_date`, `ip`) VALUES
(1, 3, 0, 'my first post', '', '', 0, 0, '2016-12-12', '::1'),
(2, 3, 0, 'My Second Post.', '', '', 0, 0, '2016-12-12', '::1'),
(3, 3, 0, 'dgrvdrfg', '', '', 0, 0, '2016-12-12', '::1'),
(4, 3, 0, 'fvdsvgdrs', '', '', 0, 0, '2016-12-12', '::1'),
(5, 3, 0, 'adcdsavc', '', '', 0, 0, '2016-12-12', '::1'),
(6, 3, 0, 'dsfcsf', '', '', 0, 0, '2016-12-12', '::1'),
(7, 3, 0, 'dafcewsafwes', '', '', 0, 0, '2016-12-12', '::1'),
(8, 3, 0, 'Today Last Post.', '', '', 0, 0, '2016-12-12', '::1'),
(9, 3, 0, 'New Post', '', '', 0, 0, '2016-12-13', '::1'),
(10, 10, 0, 'My Friend Post', '', '', 0, 0, '2016-12-13', '::1'),
(11, 3, 0, 'Test Post', '', '', 0, 0, '2016-12-14', '::1'),
(12, 3, 0, 'Test post', '', '', 0, 0, '2016-12-14', '::1'),
(13, 3, 0, 'Test New New Post', '', '', 0, 0, '2016-12-14', '::1'),
(14, 3, 0, 'My First Image Post', 'images/post_images/3_face-map.png', '', 0, 0, '2016-12-16', '::1'),
(15, 3, 0, 'My First Vedio Post', '', 'videos/post_video/3_1.mp4', 0, 0, '2016-12-16', '::1'),
(16, 3, 0, 'Contant Post', '', '', 0, 0, '2016-12-16', '::1'),
(17, 3, 0, 'It''s a bit weird to mark a future question as a duplicate of an older one. Will it set the precedence that re-asking questions and then closing the original ones is okay? Duplicates are already a big problem here. I do see the worth in re-asking a question where existing answers have gone stale, but it''s always possible to edit the question and add/edit new answers.', '', '', 0, 0, '2016-12-16', '::1'),
(18, 3, 0, 'sxsa', '', '', 0, 0, '2016-12-16', '::1'),
(19, 3, 0, '', 'images/post_images/3_app-store.png', '', 0, 0, '2016-12-16', '::1'),
(20, 3, 0, '', '', 'videos/post_video/3_1.mp4', 0, 0, '2016-12-16', '::1'),
(21, 3, 0, '', '', 'videos/post_video/3_01 Aap Se Mausiiquii - Himesh - 190Kbps.mp3', 0, 0, '2016-12-16', '::1'),
(22, 3, 0, '', '', 'videos/post_video/3_mov_bbb.mp4', 0, 0, '2016-12-16', '::1'),
(23, 3, 0, '', '', 'videos/post_video/3_01 Aap Se Mausiiquii - Himesh - 190Kbps.mp3', 0, 0, '2016-12-16', '::1'),
(24, 3, 0, '', '', 'videos/post_video/3_01 Ok Jaanu (Title Track) (SongsMp3.Com).mp3', 0, 0, '2016-12-16', '::1'),
(25, 3, 0, '', '', 'videos/post_video/3_01 Ae Dil Hai Mushkil (Future Bass Remix By DJ Khushi) (1).mp3', 0, 0, '2016-12-16', '::1'),
(26, 3, 0, '', '', 'videos/post_video/3_01 Ae Dil Hai Mushkil (Future Bass Remix By DJ Khushi).mp3', 0, 0, '2016-12-16', '::1'),
(27, 10, 0, 'My Post', 'images/post_images/10_3_cute-girly-cool-facebook-timeline-cover-photos-93.jpg', '', 0, 0, '2016-12-16', '::1'),
(28, 10, 0, 'My First Video', '', 'videos/post_video/10_3_mov_bbb.mp4', 0, 0, '2016-12-16', '::1'),
(29, 10, 0, 'Hiiii Asif', '', '', 1, 3, '2016-12-16', '::1'),
(30, 3, 0, 'Hiiiiii', '', '', 1, 10, '2016-12-16', '::1'),
(31, 12, 0, 'Hello', '', '', 0, 0, '2016-12-16', '::1'),
(32, 12, 0, '', 'images/post_images/12_12_3_cute-girly-cool-facebook-timeline-cover-photos-93.jpg', '', 0, 0, '2016-12-16', '::1'),
(33, 12, 0, '', '', 'videos/post_video/12_1.mp4', 0, 0, '2016-12-16', '::1'),
(34, 3, 0, 'hiiii', '', '', 0, 0, '2016-12-19', '::1'),
(35, 3, 0, 'Test Pic', 'images/post_images/3_1.jpg', '', 0, 0, '2016-12-19', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `post_comment`
--

CREATE TABLE `post_comment` (
  `post_comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` date NOT NULL,
  `ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_comment`
--

INSERT INTO `post_comment` (`post_comment_id`, `post_id`, `member_id`, `comment`, `comment_date`, `ip`) VALUES
(1, 8, 3, '', '2016-12-13', ''),
(2, 8, 3, 'first comment', '2016-12-13', ''),
(3, 7, 3, 'hiiii', '2016-12-13', ''),
(4, 7, 3, 'hello', '2016-12-13', ''),
(5, 7, 3, 'hello', '2016-12-13', ''),
(6, 8, 3, 'Hello', '2016-12-13', ''),
(7, 8, 3, '', '2016-12-13', ''),
(8, 8, 3, '', '2016-12-13', ''),
(9, 6, 3, 'bkjbkj', '2016-12-13', ''),
(10, 4, 3, 'test', '2016-12-13', ''),
(11, 1, 3, 'asif', '2016-12-13', ''),
(12, 5, 3, 'test comment', '2016-12-13', ''),
(13, 5, 3, 'dffghjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj ghfvjjjjjjjjk', '2016-12-13', ''),
(14, 5, 3, ':)', '2016-12-13', ''),
(15, 9, 3, 'My comment', '2016-12-13', ''),
(16, 10, 10, 'Nice', '2016-12-14', ''),
(17, 12, 3, 'Cool', '2016-12-14', ''),
(18, 13, 10, 'Nice Post', '2016-12-14', ''),
(19, 13, 3, 'nvhjgfvg', '2016-12-15', ''),
(20, 14, 3, 'Nice Images', '2016-12-16', ''),
(21, 19, 3, 'hiiiii', '2016-12-16', ''),
(22, 26, 3, 'Hiiiii Best Songs', '2016-12-16', ''),
(23, 28, 3, 'hiiiiii Asif', '2016-12-16', ''),
(24, 10, 3, 'ok', '2016-12-16', ''),
(25, 26, 10, 'Cooolllllll', '2016-12-16', ''),
(26, 29, 10, 'hello', '2016-12-16', ''),
(27, 29, 3, 'How Are You', '2016-12-16', ''),
(28, 29, 10, 'Fine Say About You.', '2016-12-16', ''),
(29, 30, 3, 'Hello.', '2016-12-16', ''),
(30, 30, 10, 'Wats Up', '2016-12-16', '');

-- --------------------------------------------------------

--
-- Table structure for table `post_dislike`
--

CREATE TABLE `post_dislike` (
  `post_dislike_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `dislike_date` date NOT NULL,
  `ip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_dislike`
--

INSERT INTO `post_dislike` (`post_dislike_id`, `post_id`, `member_id`, `dislike_date`, `ip`) VALUES
(18, 8, 3, '2016-12-13', 0),
(19, 6, 3, '2016-12-13', 0),
(20, 8, 3, '2016-12-13', 0),
(21, 8, 3, '2016-12-13', 0),
(22, 7, 3, '2016-12-13', 0),
(23, 7, 3, '2016-12-13', 0),
(24, 7, 3, '2016-12-13', 0),
(25, 8, 3, '2016-12-13', 0),
(26, 7, 3, '2016-12-13', 0),
(27, 8, 3, '2016-12-13', 0),
(28, 4, 3, '2016-12-13', 0),
(29, 2, 3, '2016-12-13', 0),
(30, 9, 3, '2016-12-13', 0),
(31, 10, 10, '2016-12-14', 0),
(32, 13, 3, '2016-12-14', 0),
(33, 13, 3, '2016-12-14', 0),
(34, 12, 3, '2016-12-14', 0),
(35, 11, 3, '2016-12-14', 0),
(36, 3, 3, '2016-12-14', 0),
(37, 1, 3, '2016-12-14', 0),
(38, 14, 3, '2016-12-16', 0),
(39, 19, 3, '2016-12-16', 0),
(40, 26, 3, '2016-12-16', 0),
(41, 28, 3, '2016-12-16', 0),
(42, 30, 11, '2016-12-19', 0),
(43, 35, 3, '2016-12-19', 0),
(44, 34, 3, '2016-12-19', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post_like`
--

CREATE TABLE `post_like` (
  `post_like_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `like_date` date NOT NULL,
  `ip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_like`
--

INSERT INTO `post_like` (`post_like_id`, `post_id`, `member_id`, `like_date`, `ip`) VALUES
(65, 35, 3, '2016-12-19', 0),
(66, 34, 3, '2016-12-19', 0);

-- --------------------------------------------------------

--
-- Table structure for table `profile_photo`
--

CREATE TABLE `profile_photo` (
  `profile_photo_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `profile_image` text NOT NULL,
  `upload_date` datetime NOT NULL,
  `ip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(17, 3, 'images/profile_images/3_3 (2).jpg', '2016-12-15 02:00:50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `timeline_photos`
--

CREATE TABLE `timeline_photos` (
  `timeline_photo_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `timeline_images` text NOT NULL,
  `upload_date` datetime NOT NULL,
  `ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeline_photos`
--

INSERT INTO `timeline_photos` (`timeline_photo_id`, `member_id`, `timeline_images`, `upload_date`, `ip`) VALUES
(1, 3, 'images/timeline_images/3_cute-girly-cool-facebook-timeline-cover-photos-93.jpg', '2016-12-15 05:36:48', '::1'),
(2, 12, 'images/timeline_images/12_3_cute-girly-cool-facebook-timeline-cover-photos-93.jpg', '2016-12-16 06:54:23', '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `chitter`
--
ALTER TABLE `chitter`
  ADD PRIMARY KEY (`chitter_id`);

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`club_id`);

--
-- Indexes for table `cover_photo`
--
ALTER TABLE `cover_photo`
  ADD PRIMARY KEY (`cover_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `member_friend`
--
ALTER TABLE `member_friend`
  ADD PRIMARY KEY (`member_friend_id`);

--
-- Indexes for table `music_upload`
--
ALTER TABLE `music_upload`
  ADD PRIMARY KEY (`music_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`pages_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photos_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_comment`
--
ALTER TABLE `post_comment`
  ADD PRIMARY KEY (`post_comment_id`);

--
-- Indexes for table `post_dislike`
--
ALTER TABLE `post_dislike`
  ADD PRIMARY KEY (`post_dislike_id`);

--
-- Indexes for table `post_like`
--
ALTER TABLE `post_like`
  ADD PRIMARY KEY (`post_like_id`);

--
-- Indexes for table `profile_photo`
--
ALTER TABLE `profile_photo`
  ADD PRIMARY KEY (`profile_photo_id`);

--
-- Indexes for table `timeline_photos`
--
ALTER TABLE `timeline_photos`
  ADD PRIMARY KEY (`timeline_photo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `chitter`
--
ALTER TABLE `chitter`
  MODIFY `chitter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `club_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cover_photo`
--
ALTER TABLE `cover_photo`
  MODIFY `cover_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `login_info`
--
ALTER TABLE `login_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `member_friend`
--
ALTER TABLE `member_friend`
  MODIFY `member_friend_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `music_upload`
--
ALTER TABLE `music_upload`
  MODIFY `music_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `pages_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `photos_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `post_comment`
--
ALTER TABLE `post_comment`
  MODIFY `post_comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `post_dislike`
--
ALTER TABLE `post_dislike`
  MODIFY `post_dislike_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `post_like`
--
ALTER TABLE `post_like`
  MODIFY `post_like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `profile_photo`
--
ALTER TABLE `profile_photo`
  MODIFY `profile_photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `timeline_photos`
--
ALTER TABLE `timeline_photos`
  MODIFY `timeline_photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
