-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2022 at 10:56 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `highwaycargo`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(255) NOT NULL,
  `aboutname` varchar(255) NOT NULL,
  `aboutdes` longtext NOT NULL,
  `homeabouttil` varchar(255) NOT NULL,
  `homeaboutdes` longtext NOT NULL,
  `detailsone` longtext NOT NULL,
  `detailstwo` longtext NOT NULL,
  `detailsthree` longtext NOT NULL,
  `detailsfour` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `aboutname`, `aboutdes`, `homeabouttil`, `homeaboutdes`, `detailsone`, `detailstwo`, `detailsthree`, `detailsfour`) VALUES
(7, '<h2><strong>&quot;LOREM IPSUM DOLOR SIT AMET&quot;</strong></h2>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.<br />\r\nLorem ipsum dolor sit amet</p>\r\n', '<h3><strong>Lorem ipsum dolor</strong></h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>\r\n', '<p><b><spna style=\"color:#00254a;\">Some words</span> <span style=\"color:#ff9900;\">about us</span></b></p>\r\n', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', '<p><strong>Lorem ipsum</strong></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>\r\n', '<p><strong>Lorem ipsum</strong></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>\r\n', '<p><strong>Lorem ipsum</strong></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>\r\n', '<p><strong>Lorem ipsum</strong></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `announcement_des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `announcement_des`) VALUES
(3, '<p><span style=\"color:#ff0000;\">►</span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and ty</p>\r\n'),
(4, '<p><span style=\"color:#ff0000;\">►</span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesett'),
(5, '<p><span style=\"color:#ff0000;\">►</span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry.&nbsp;Lorem Ipsum is simply dummy text of the printing and ty');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `bnrtil` varchar(255) NOT NULL,
  `bannerdes` longtext NOT NULL,
  `bnrimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `bnrtil`, `bannerdes`, `bnrimg`) VALUES
(14, '<h1>LOREM IPSUM</h1>\r\n', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', 'Home_Banner-min1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog-db`
--

CREATE TABLE `blog-db` (
  `id` int(11) NOT NULL,
  `blog_name` varchar(255) NOT NULL,
  `blog_short_des` varchar(190) NOT NULL,
  `blog_description` longtext NOT NULL,
  `blog_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog-db`
--

INSERT INTO `blog-db` (`id`, `blog_name`, `blog_short_des`, `blog_description`, `blog_img`) VALUES
(4, 'Blog 1', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit,', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>\r\n', 'blog-3.jpg'),
(5, 'Blog 2', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit,', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>\r\n', 'blog-31.jpg'),
(6, 'Blog 3', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit,', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>\r\n', 'blog-32.jpg'),
(7, 'Blog 4', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit,', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>\r\n', 'blog-33.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `body_type`
--

CREATE TABLE `body_type` (
  `id` int(11) NOT NULL,
  `body_title` varchar(255) NOT NULL,
  `body_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `body_type`
--

INSERT INTO `body_type` (`id`, `body_title`, `body_file`) VALUES
(7, 'Container', 'Container2.png'),
(8, 'Hyva', 'Hyva.png'),
(9, 'LCV', 'LCV.png'),
(10, 'Trailor', 'Trailor.png'),
(11, 'Truck', 'Truck.png');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `directory_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `directory_id`, `name`, `email`, `phone`, `message`, `time`) VALUES
(1, '28', 'test', 'test@gmail.com', '54879858745', 'zdsfsdfgdrsg', ''),
(2, '27', 'TEST2', 'test2@gmail.com', '8798545874', 'demo test', '2022-05-13'),
(3, '28', 'test', 'subhajit@gmail.com', '8785987587', 'demo', '2022-05-13'),
(4, '28', 'demo test', 'subhajit@gmail.com', '6294112205', 'example', '2022-05-13'),
(5, '27', 'test', 'subhajit@gmail.com', '8785987587', 'testsss', '2022-05-13'),
(6, '27', 'aefdsdrf', 'subhajit@gmail.com', '6294112205', 'frdsdg', '2022-05-13'),
(7, '27', 'demo ufx', 'kaustab@gmail.com', '8785987587', 'demo ufx.com', '2022-05-13'),
(8, '28', 'kolkata', 'subhajit@gmail.com', '8785987587', 'dghsdffdsgh', '2022-05-13'),
(9, '28', 'subhajit', 'subhajit@', '8785987587', '', '2022-05-14'),
(10, '28', '', '', '', '', '2022-05-14'),
(11, '28', 'test4', 'test4@gmail.com', '8798546587', 'new post ', '2022-05-18'),
(12, '27', 'subhajit', 'subhajit@gmail.com', '8785987587', 'good work', '2022-05-19'),
(13, '27', 'test', 'subhajit@gmail.com', '6294112205', 'huy', '2022-05-19'),
(14, '28', 'sefrsr', 'subhajit@gmail.com', '8785987587', 'sdggdsfg', '2022-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `contactusdb`
--

CREATE TABLE `contactusdb` (
  `id` int(255) NOT NULL,
  `contacttitle` varchar(255) NOT NULL,
  `contactnum` varchar(255) NOT NULL,
  `contactemail` varchar(255) NOT NULL,
  `contactadres` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactusdb`
--

INSERT INTO `contactusdb` (`id`, `contacttitle`, `contactnum`, `contactemail`, `contactadres`) VALUES
(4, 'Contact', '<p>+91 123 456 7891</p>\r\n', '<p>info@highwaycargo.com</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name_contact` varchar(255) NOT NULL,
  `email_contact` varchar(255) NOT NULL,
  `phone_contact` varchar(255) NOT NULL,
  `message_contact` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name_contact`, `email_contact`, `phone_contact`, `message_contact`) VALUES
(10, 'demo', 'demo@gmail.com', '8798584587', 'asfdrsgheasreasr'),
(13, 'test2', 'test@gmail.com', '8798569874', 'asfdsetwer'),
(14, 'dsfghd', 'gsdfg@gmail.com', '8798587458', 'oihokijnsdfg');

-- --------------------------------------------------------

--
-- Table structure for table `copy_right`
--

CREATE TABLE `copy_right` (
  `id` int(11) NOT NULL,
  `copyright_title` varchar(255) NOT NULL,
  `copyright_details` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `copy_right`
--

INSERT INTO `copy_right` (`id`, `copyright_title`, `copyright_details`) VALUES
(1, 'Lorem Ipsum is simply', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `customer_advertisement`
--

CREATE TABLE `customer_advertisement` (
  `id` int(11) NOT NULL,
  `customer_ads_name` varchar(255) NOT NULL,
  `customer_ads_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_advertisement`
--

INSERT INTO `customer_advertisement` (`id`, `customer_ads_name`, `customer_ads_file`) VALUES
(1, 'Advertisement', 'service-ads1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details_for_vendor_deasboard`
--

CREATE TABLE `customer_details_for_vendor_deasboard` (
  `id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `vendor_id` int(100) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_details_for_vendor_deasboard`
--

INSERT INTO `customer_details_for_vendor_deasboard` (`id`, `user_id`, `vendor_id`, `time`) VALUES
(1, 13, 27, ''),
(2, 13, 27, ''),
(3, 13, 27, ''),
(4, 13, 27, ''),
(5, 13, 27, ''),
(6, 13, 27, ''),
(7, 13, 27, ''),
(8, 13, 27, ''),
(9, 13, 27, ''),
(10, 13, 28, ''),
(11, 13, 28, ''),
(12, 13, 28, ''),
(13, 13, 28, ''),
(14, 13, 28, ''),
(15, 13, 28, ''),
(16, 13, 27, ''),
(17, 13, 27, ''),
(18, 13, 27, ''),
(19, 13, 28, ''),
(20, 13, 27, ''),
(21, 13, 27, ''),
(22, 13, 28, ''),
(23, 13, 28, ''),
(24, 13, 28, ''),
(25, 13, 28, ''),
(26, 13, 28, ''),
(27, 13, 28, ''),
(28, 13, 27, ''),
(29, 13, 28, ''),
(30, 13, 28, ''),
(31, 13, 27, ''),
(32, 13, 27, ''),
(33, 13, 28, ''),
(34, 13, 28, ''),
(35, 13, 27, ''),
(36, 31, 28, ''),
(37, 8, 27, ''),
(38, 8, 27, ''),
(39, 8, 28, '');

-- --------------------------------------------------------

--
-- Table structure for table `customer_post_add`
--

CREATE TABLE `customer_post_add` (
  `id` int(11) NOT NULL,
  `customer_id` int(100) NOT NULL,
  `date` varchar(255) NOT NULL,
  `mobile_number` varchar(100) NOT NULL,
  `source_city` varchar(255) NOT NULL,
  `destination_name` varchar(255) NOT NULL,
  `total_weight` varchar(255) NOT NULL,
  `material_type` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_post_add`
--

INSERT INTO `customer_post_add` (`id`, `customer_id`, `date`, `mobile_number`, `source_city`, `destination_name`, `total_weight`, `material_type`, `description`, `status`) VALUES
(1, 8, '2022-05-12', '8798584758', 'kolkata', 'delhi', '876', 'cement', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum is simply dummy text of the printing', 1),
(2, 8, '2022-05-21', '8798587458', 'murshidabad', 'delhi', '876', 'steel', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum is simply dummy text of the printing', 1),
(3, 8, '2022-05-27', '6298221105', 'kolkata', 'murshidabad', '200', 'chemical', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum is simply dummy text of the printing', 0),
(4, 13, '2022-05-31', '8758458759', 'chennai', 'delhi', '25444', 'cement', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum is simply dummy text of the printing', 1),
(6, 13, '20-05-2022', '8798545874', 'kolkata', 'murshidabad', '876', 'food', 'demo text', 1),
(7, 13, '05-2022-25', '875845874', 'chennai', 'murshidabad', '200', 'wood', 'demo text', 1);

-- --------------------------------------------------------

--
-- Table structure for table `directory-advirtiesment`
--

CREATE TABLE `directory-advirtiesment` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `directory-advirtiesment`
--

INSERT INTO `directory-advirtiesment` (`id`, `title`, `image`) VALUES
(2, 'tests', 'truck-hdtc1-min-min3.jpg'),
(3, 'testsedbiju', 'truck-hdtc1-min-min2.jpg'),
(4, 'testsedbiju', 'truck-hdtc1-min-min.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `directory_details_ads`
--

CREATE TABLE `directory_details_ads` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `directory_details_ads`
--

INSERT INTO `directory_details_ads` (`id`, `title`, `image`) VALUES
(1, 'testbijusubhjait', 'adds4.png'),
(3, 'test', 'adds2.png'),
(4, 'testsed', 'adds3.png');

-- --------------------------------------------------------

--
-- Table structure for table `directory_top_ads`
--

CREATE TABLE `directory_top_ads` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `directory_top_ads`
--

INSERT INTO `directory_top_ads` (`id`, `title`, `image`) VALUES
(2, 'testd', 'images.jpg'),
(3, 'test', 'images1.jpg'),
(4, 'test', 'images2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `disclaimer`
--

CREATE TABLE `disclaimer` (
  `id` int(11) NOT NULL,
  `disclaimer_name` varchar(255) NOT NULL,
  `disclaimer_details` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disclaimer`
--

INSERT INTO `disclaimer` (`id`, `disclaimer_name`, `disclaimer_details`) VALUES
(1, 'Lorem Ipsum is simply', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `eventsdb`
--

CREATE TABLE `eventsdb` (
  `id` int(255) NOT NULL,
  `eventname` varchar(255) NOT NULL,
  `eventdes` longtext NOT NULL,
  `event_short_des` varchar(190) NOT NULL,
  `directory_number` varchar(100) NOT NULL,
  `eventimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eventsdb`
--

INSERT INTO `eventsdb` (`id`, `eventname`, `eventdes`, `event_short_des`, `directory_number`, `eventimg`) VALUES
(14, 'XYZ companys', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley</p>\r\n', '<h4><span style=\"color: #5A78AD;\">Company Name:</span> XYZ company</h3>\r\n<p>From Location:&nbsp;Kolkata<br />\r\nServed to Location:&nbsp;Kolkata, Chennai</p>\r\n', '4589678547', 'accessories_1.jpg'),
(15, 'directory', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley</p>\r\n', '<h4><span style=\"color: #5A78AD;\">Company Name:</span> XYZ company</h4>\r\n<p>From Location:&nbsp;Kolkata<br />\r\nServed to Location:&nbsp;Kolkata, Chennai</p>\r\n', '8798587487', 'accessories_1.jpg'),
(17, 'Lorem Ipsum is simply dummy', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley</p>\r\n', '<h4><span style=\"color:#5A78BF;\">Company Name:</span>&nbsp;XYZ company</h4>\r\n\r\n<p>From Location:&nbsp;Kolkata<br />\r\nServed to Location:&nbsp;Kolkata, Chennai</p>\r\n', '87985648754', 'accessories_11.jpg'),
(18, 'Test', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley</p>\r\n', '<h4><span style=\"color:#5A78BF;\">Company Name:</span>&nbsp;XYZ company</h4>\r\n<p>From Location:&nbsp;Kolkata<br />\r\nServed to Location:&nbsp;Kolkata, Chennai</p>\r\n', '8958745875', 'accessories_12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `howitwork_db`
--

CREATE TABLE `howitwork_db` (
  `id` int(11) NOT NULL,
  `howitwork_title` varchar(255) NOT NULL,
  `howitwork_details` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `howitwork_db`
--

INSERT INTO `howitwork_db` (`id`, `howitwork_title`, `howitwork_details`) VALUES
(1, 'Lorem Ipsum is simply', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `login_db`
--

CREATE TABLE `login_db` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_db`
--

INSERT INTO `login_db` (`id`, `name`, `email_id`, `password`) VALUES
(2, 'Highway Cargo', 'highwaycargo@gmail.com', 'highwaycargo123@');

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE `mission` (
  `id` int(11) NOT NULL,
  `mission_title` varchar(255) NOT NULL,
  `mission_description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`id`, `mission_title`, `mission_description`) VALUES
(4, '<p style=\"color:#00254a;\">Mission</p>\r\n', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n\r\n<ul style=\"color:#ffc877;\">\r\n	<li><strong>Lorem Ipsum is simply dummy</strong></li>\r\n	<li><strong>Lorem Ipsum is simply dummy</strong></li>\r\n	<li><strong>Lorem Ipsum is simply dummy</strong></li>\r\n	<li><strong>Lorem Ipsum is simply dummy</strong></li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `policy_db`
--

CREATE TABLE `policy_db` (
  `id` int(11) NOT NULL,
  `policy_name` varchar(255) NOT NULL,
  `policy_description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `policy_db`
--

INSERT INTO `policy_db` (`id`, `policy_name`, `policy_description`) VALUES
(2, 'Lorem Ipsum is simply simply simply', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pop_up_data`
--

CREATE TABLE `pop_up_data` (
  `id` int(11) NOT NULL,
  `pop_up_title` varchar(255) NOT NULL,
  `pop_up_description` varchar(255) NOT NULL,
  `pop_up_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pop_up_data`
--

INSERT INTO `pop_up_data` (`id`, `pop_up_title`, `pop_up_description`, `pop_up_image`) VALUES
(1, 'HIGHWAY CARGO', '<p style=\"color:white;\">Lorem Ipsum is simply dummy text of the printing and typesetting</p>\r\n', 'pop-up.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reating`
--

CREATE TABLE `reating` (
  `id` int(11) NOT NULL,
  `reating` int(100) NOT NULL,
  `directory_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(1, 'test', 2, 'good', 1653304719),
(2, 'admin', 2, 'sfer', 1653375663),
(3, 'gty', 3, 'effer', 1653541684),
(4, 'gty', 3, 'effer', 1653541685),
(5, 'gty', 3, 'effer', 1653541686),
(6, 'gty', 3, 'effer', 1653541689);

-- --------------------------------------------------------

--
-- Table structure for table `servicetab`
--

CREATE TABLE `servicetab` (
  `id` int(255) NOT NULL,
  `svname` varchar(255) NOT NULL,
  `seotitle` varchar(255) NOT NULL,
  `svdescrb` longtext NOT NULL,
  `svshortdes` varchar(120) NOT NULL,
  `svimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servicetab`
--

INSERT INTO `servicetab` (`id`, `svname`, `seotitle`, `svdescrb`, `svshortdes`, `svimg`) VALUES
(30, 'Lorem Ipsum', 'lorem-Ipsums', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n\r\n<p>Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley</p>\r\n', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s</p', 'accessories_1.jpg'),
(31, 'Lorem Ipsum', 'lorem-Ipsumes', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley</p>\r\n', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s</p', 'accessories_11.jpg'),
(32, 'Lorem Ipsum', 'lorem-Ipsumus', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley</p>\r\n', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s</p', 'accessories_12.jpg'),
(33, 'Lorem Ipsum', 'lorem-Ipsumys', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley</p>\r\n', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s</p', 'accessories_13.jpg'),
(34, 'Lorem Ipsum', 'lorem-Ipsum', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been', 'accessories_111.jpg'),
(35, 'Lorem Ipsum', 'lorem-Ipsum', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been', 'accessories_112.jpg'),
(36, 'Lorem Ipsum', 'lorem-Ipsum', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been', 'accessories_14.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service_advertisement`
--

CREATE TABLE `service_advertisement` (
  `id` int(11) NOT NULL,
  `advertisement_name` varchar(255) NOT NULL,
  `advertisement_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_advertisement`
--

INSERT INTO `service_advertisement` (`id`, `advertisement_name`, `advertisement_image`) VALUES
(1, 'Advertisement', 'service-ads1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state_name`) VALUES
(1, 'Assam'),
(2, 'Andhra Pradesh'),
(3, 'Bihar'),
(4, 'Chhattisgarh'),
(5, 'Goa'),
(6, 'Gujarat'),
(7, 'Haryana'),
(8, 'Himachal Pradesh'),
(9, 'Arunachal Pradesh'),
(10, 'Jharkhand'),
(11, 'Karnataka'),
(12, 'Kerala'),
(13, 'Madhya Pradesh'),
(14, 'Maharashtra'),
(15, 'Manipur'),
(16, 'Meghalaya'),
(17, 'Mizoram'),
(18, 'Nagaland'),
(19, 'Odisha'),
(20, 'Punjab'),
(21, 'Rajasthan'),
(22, 'Sikkim'),
(23, 'Tamil Nadu'),
(24, 'Telangana'),
(25, 'Tripura'),
(26, 'Uttar Pradesh'),
(27, 'Uttarakhand'),
(28, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `select_issue` varchar(255) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `user_id`, `select_issue`, `description`) VALUES
(2, 8, 'car', 'sgedthh'),
(3, 8, 'other', 'test'),
(4, 13, 'vendor', 'help me'),
(5, 13, 'car', 'lorem some'),
(6, 13, 'other', 'mobile number');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(2, 'aefdsdrf', 'yuksombreweries30@gmail.com', '8798563254', 'sdgdfg', 'dghgfgh');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_db`
--

CREATE TABLE `vehicle_db` (
  `id` int(11) NOT NULL,
  `vendor_login_id` int(11) NOT NULL,
  `vehicle_name` varchar(255) NOT NULL,
  `vendor_body` varchar(255) NOT NULL,
  `vehicle_number` varchar(255) NOT NULL,
  `aadhaarfile` varchar(255) NOT NULL,
  `driverfile` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_db`
--

INSERT INTO `vehicle_db` (`id`, `vendor_login_id`, `vehicle_name`, `vendor_body`, `vehicle_number`, `aadhaarfile`, `driverfile`, `status`) VALUES
(27, 28, 'test', 'Hyva', '78dfgrgsfg', 'Aadhaar-card-sample-300x212.png', 'f89784e25a22ae76455edfa0c09f7a84.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_advertisement`
--

CREATE TABLE `vendor_advertisement` (
  `id` int(11) NOT NULL,
  `advertisement_name` varchar(255) NOT NULL,
  `advertisement_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_advertisement`
--

INSERT INTO `vendor_advertisement` (`id`, `advertisement_name`, `advertisement_image`) VALUES
(1, 'Advertisements', 'service-ads1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_registers_db`
--

CREATE TABLE `vendor_registers_db` (
  `id` int(11) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `postal_code` varchar(100) NOT NULL,
  `delivery_state` longtext NOT NULL,
  `pan_number` varchar(100) NOT NULL,
  `pan_file` varchar(100) NOT NULL,
  `aahaar_number` varchar(100) NOT NULL,
  `aadhaar_file` varchar(100) NOT NULL,
  `password_quote` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `descriptions` longtext NOT NULL,
  `nulls` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_registers_db`
--

INSERT INTO `vendor_registers_db` (`id`, `user_type`, `first_name`, `last_name`, `profile_picture`, `email`, `phone`, `company_name`, `city`, `street`, `state`, `postal_code`, `delivery_state`, `pan_number`, `pan_file`, `aahaar_number`, `aadhaar_file`, `password_quote`, `status`, `descriptions`, `nulls`) VALUES
(8, 'user', 'user1', 'abcd@12345', '', 'subhajit@gmail.com', '6294112205', '', 'berhampure', 'bagbazer', 'west bengal', '742263', '', '', '', '', '', 'abcd@12345', '', '', ''),
(13, 'user', 'user2', 'test', '', 'poddarsubhajitufxstudio@gmail.com', '87985522554', '', 'kolkata', 'chingrighta', 'west bengal', '742263', '', '', '', '', '', 'subhajit@123', '', '', ''),
(27, 'vendor', 'test', 'vendor', 'Top_Transport_b-min2.jpg', 'test@gmail.com', '6294112205', 'test company', 'kolkata', 'nabapally', 'West Bengal', '742135', 'assam, bihar, haryana, himachal, madhya, maharashtra, odisha', 'wDFWETR', 'Top_Transport_b-min1.jpg', 'sdgfg5741', 'Top_Transport_c-min.jpg', 'abcd@1234', '1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '0'),
(28, 'vendor', 'test 2', 'demo', '', 'tests@gmail.com', '6525487589', 'vendor 2', 'kolkata', 'dumdum', 'Bihar', '87985487', 'assam, haryana, madhya, odisha, tripura', 'wDFWETR', 'pan_660_0114170216433.jpg', 'WETRERTG', 'compressjpg613b1f91b195318100f7d27e_aadhar_card@2x-min3.jpg', 'abcd@12345', '1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', ''),
(29, 'vendor', 'demo', 'test', '', 'demo@gmail', '8542154698', '', 'kolkata', 'aefsef', 'Chhattisgarh', '742135', 'arunachal', 'wDFWETR', 'pan_660_0114170216434.jpg', '87985487844585', 'compressjpg613b1f91b195318100f7d27e_aadhar_card@2x-min_(1).jpg', 'abcd@1234', '0', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', ''),
(30, 'user', 'subhajit', 'poddar', '', 'subahjit@gmail.com', '8798568748', '', 'aedaedff', 'asdfedsaf', 'west bengal', '7422478', '', '', '', '', '', 'abcd@1234', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_support`
--

CREATE TABLE `vendor_support` (
  `id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `select_issue` varchar(255) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_support`
--

INSERT INTO `vendor_support` (`id`, `login_id`, `select_issue`, `description`) VALUES
(2, 18, 'vendor', 'aesfgersdsghetrhyeyer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog-db`
--
ALTER TABLE `blog-db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `body_type`
--
ALTER TABLE `body_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactusdb`
--
ALTER TABLE `contactusdb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `copy_right`
--
ALTER TABLE `copy_right`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_advertisement`
--
ALTER TABLE `customer_advertisement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_details_for_vendor_deasboard`
--
ALTER TABLE `customer_details_for_vendor_deasboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_post_add`
--
ALTER TABLE `customer_post_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `directory-advirtiesment`
--
ALTER TABLE `directory-advirtiesment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `directory_details_ads`
--
ALTER TABLE `directory_details_ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `directory_top_ads`
--
ALTER TABLE `directory_top_ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disclaimer`
--
ALTER TABLE `disclaimer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventsdb`
--
ALTER TABLE `eventsdb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `howitwork_db`
--
ALTER TABLE `howitwork_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_db`
--
ALTER TABLE `login_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policy_db`
--
ALTER TABLE `policy_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pop_up_data`
--
ALTER TABLE `pop_up_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reating`
--
ALTER TABLE `reating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `servicetab`
--
ALTER TABLE `servicetab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_advertisement`
--
ALTER TABLE `service_advertisement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_db`
--
ALTER TABLE `vehicle_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_advertisement`
--
ALTER TABLE `vendor_advertisement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_registers_db`
--
ALTER TABLE `vendor_registers_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_support`
--
ALTER TABLE `vendor_support`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `blog-db`
--
ALTER TABLE `blog-db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `body_type`
--
ALTER TABLE `body_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contactusdb`
--
ALTER TABLE `contactusdb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `copy_right`
--
ALTER TABLE `copy_right`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_advertisement`
--
ALTER TABLE `customer_advertisement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_details_for_vendor_deasboard`
--
ALTER TABLE `customer_details_for_vendor_deasboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `customer_post_add`
--
ALTER TABLE `customer_post_add`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `directory-advirtiesment`
--
ALTER TABLE `directory-advirtiesment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `directory_details_ads`
--
ALTER TABLE `directory_details_ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `directory_top_ads`
--
ALTER TABLE `directory_top_ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `disclaimer`
--
ALTER TABLE `disclaimer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `eventsdb`
--
ALTER TABLE `eventsdb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `howitwork_db`
--
ALTER TABLE `howitwork_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_db`
--
ALTER TABLE `login_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mission`
--
ALTER TABLE `mission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `policy_db`
--
ALTER TABLE `policy_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pop_up_data`
--
ALTER TABLE `pop_up_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reating`
--
ALTER TABLE `reating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `servicetab`
--
ALTER TABLE `servicetab`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `service_advertisement`
--
ALTER TABLE `service_advertisement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vehicle_db`
--
ALTER TABLE `vehicle_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `vendor_advertisement`
--
ALTER TABLE `vendor_advertisement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vendor_registers_db`
--
ALTER TABLE `vendor_registers_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `vendor_support`
--
ALTER TABLE `vendor_support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
