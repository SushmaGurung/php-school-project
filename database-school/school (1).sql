-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 28, 2023 at 10:11 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

DROP TABLE IF EXISTS `about_us`;
CREATE TABLE IF NOT EXISTS `about_us` (
  `id` int NOT NULL AUTO_INCREMENT,
  `top_title` varchar(100) NOT NULL,
  `top_desc` varchar(150) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(250) NOT NULL,
  `img` varchar(200) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `top_title`, `top_desc`, `title`, `description`, `img`, `status`, `created_at`, `updated_at`) VALUES
(31, 'About us', 'Our school is a Trust-run residential-cum-day english-medium co-ed institution. ', 'dfd', 'dfdf', 'download1678080430.jpg', 1, '2023-03-05 16:55:46', '2023-03-05 16:55:46');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `top_title` varchar(200) ,
  `top_desc` varchar(150) NOT NULL,
  `img` varchar(200) NOT NULL,
  `c_title` varchar(150) NOT NULL,
  `fee` varchar(50) NOT NULL,
  `description` varchar(250) ,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `top_title`, `top_desc`, `img`, `c_title`, `fee`, `description`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Education System', ' We provide holistic education from Pre-Primary to Higher secondary levels with the aim to achieve highest possible goals.', 'image11678030871.png', 'Primary', '$$$', 'English Language with Grammar, English Literature, Nepali Language with Byakaran, Compulsory Mathematics, Additional Mathematics, Science, General Knowledge, Social Studies, Health, Population and Environment, Office Practice and Accounting, Occupati', 1, '2023-03-06 02:12:46', '2023-03-06 02:12:46'),
(10, 'Education System', ' We provide holistic education from Pre-Primary to Higher secondary levels with the aim to achieve highest possible goals.', 'image11678030871.png', '10+2', '$$$', 'Science, Management, Humanities, Law Streams', 1, '2023-03-06 05:50:14', '2023-03-06 05:50:14'),
(11, 'Education System', ' We provide holistic education from Pre-Primary to Higher secondary levels with the aim to achieve highest possible goals.', 'image11678080348.png', 'Secondary', '$$$', 'English Language with Grammar, English Literature, Nepali Language with Byakaran, Compulsory Mathematics, Additional Mathematics, Science, General Knowledge, Social Studies, Health, Population and Environment, Office Practice and Accounting, Occupati', 1, '2023-03-06 05:51:54', '2023-03-06 05:51:54');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int NOT NULL AUTO_INCREMENT,
  `top_title` varchar(150) NOT NULL,
  `top_desc` varchar(250) NOT NULL,
  `img` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(250) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `create_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `top_title`, `top_desc`, `img`, `title`, `description`, `status`, `create_at`, `updated_at`) VALUES
(1, 'School Events ', 'Innovative and fun school events that will set your kids learning community at right learning ground ! ', 'images1678030860.jpg', 'Summer Camp- May 2023', 'A summer camp will be held to occupy your kids time for good and high benefit.', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'School Events ', 'Innovative and fun school events that will set your kids learning community at right learning ground ! ', 'images1678030860.jpg', 'Four Day Art Exhibition-2023', 'Art is not what you see, but what you make others see.', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `facts`
--

DROP TABLE IF EXISTS `facts`;
CREATE TABLE IF NOT EXISTS `facts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `number` varchar(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `facts`
--

INSERT INTO `facts` (`id`, `number`, `title`, `status`, `created_at`, `updated_at`) VALUES
(8, '45', 'Trainers', 1, '2023-03-04 06:58:14', '2023-03-04 06:58:14'),
(7, '450', 'Events', 1, '2023-03-04 06:58:01', '2023-03-04 06:58:01'),
(6, '89', 'Courses', 1, '2023-03-04 06:57:46', '2023-03-04 06:57:46'),
(5, '3000', 'Students', 1, '2023-03-04 06:57:28', '2023-03-04 06:57:28');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

DROP TABLE IF EXISTS `features`;
CREATE TABLE IF NOT EXISTS `features` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `img` varchar(200) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `title`, `icon`, `description`, `img`, `status`, `created_at`, `updated_at`) VALUES
(11, 'It imparts holistic education  with the following ...', 'bi-check-circle', ' Empowering every student rise beyond the average level of performance and ‘strive for excellence’.', 'logo11678030775.jpg', 1, '2023-03-05 16:33:03', '2023-03-05 16:33:03'),
(8, 'It imparts holistic education  with the following goals', 'bi-check-circle', 'Providing ‘world-class education’ to become a globalized citizen.', 'images1678030860.jpg', 1, '2023-03-05 16:31:51', '2023-03-05 16:31:51'),
(12, 'It imparts holistic education  with the following ...', 'bi-check-circle', 'Developing competent human resource capable of meeting the challenges of identity at national and international levels', 'image11678080348.png', 1, '2023-03-05 16:33:03', '2023-03-05 16:33:03'),
(10, 'It imparts holistic education  with the following ...', 'bi-check-circle', 'Offering a stimulating environment for the inherent talent in students get explored for their holistic development.', 'logo21678030831.jpg', 1, '2023-03-05 16:33:03', '2023-03-05 16:33:03');

-- --------------------------------------------------------

--
-- Table structure for table `filemanagers`
--

DROP TABLE IF EXISTS `filemanagers`;
CREATE TABLE IF NOT EXISTS `filemanagers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `filelink` varchar(200) NOT NULL,
  `type` varchar(30) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `filemanagers`
--

INSERT INTO `filemanagers` (`id`, `name`, `filelink`, `type`, `status`) VALUES
(20, 'image4', 'image31678080388.png', 'png', 1),
(19, 'sushma2', 'image11678080348.png', 'png', 1),
(18, 'Barrett Watts', 'images1678030860.jpg', 'jpg', 1),
(27, 'back', 'back1678100910.jpg', 'jpg', 1),
(16, 'sushma2', 'logo11678030775.jpg', 'jpg', 1),
(17, 'image2', 'logo21678030831.jpg', 'jpg', 1),
(22, 'image2', 'download1678080430.jpg', 'jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

DROP TABLE IF EXISTS `forms`;
CREATE TABLE IF NOT EXISTS `forms` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `name`, `email`, `message`, `subject`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Elizabeth Alvarado', 'xyduxo@mailinator.com', 'Laborum Ullam quia ', 'Veritatis inventore ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
CREATE TABLE IF NOT EXISTS `partners` (
  `id` int NOT NULL AUTO_INCREMENT,
  `icon` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `icon`, `title`, `status`, `created_at`, `updated_at`) VALUES
(4, 'fa-regular fa-clipboard', 'Global Bank', 1, '2023-03-06 10:10:55', '2023-03-06 10:10:55'),
(5, 'fa-regular fa-address-book', 'Ximeki Cooperative Ltd.', 1, '2023-03-06 10:12:33', '2023-03-06 10:12:33'),
(6, 'fa-regular fa-sun', 'Sunrise Hotel Ltd', 1, '2023-03-06 10:13:06', '2023-03-06 10:13:06'),
(7, 'fa-regular fa-lemon', 'Green Lemonade Fresh Juice Shop', 1, '2023-03-06 10:13:48', '2023-03-06 10:13:48');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `site_key` varchar(100) NOT NULL,
  `site_value` text ,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_key`, `site_value`, `status`, `created_at`, `updated_at`) VALUES
(25, 'logo', 'image31678080388.png', 1, '2023-03-06 06:23:58', '2023-03-06 06:23:58'),
(10, 'address', '6X84+3JQ, Lakeside Rd, पोखरा 33700', 1, '2023-03-05 11:51:46', '2023-03-05 11:51:46'),
(6, 'youtube', 'https://www.youtube.com/', 1, '2023-03-05 09:24:39', '2023-03-05 09:24:39'),
(7, 'map', 'https://www.google.com/maps/d/embed?mid=1cnDXDVAJ2bHDKhpcLlMZHHj-Dzo&ehbc=2E312F', 1, '2023-03-05 11:17:41', '2023-03-05 11:17:41'),
(11, 'phone', '981-6108209', 1, '2023-03-05 11:53:21', '2023-03-05 11:53:21'),
(15, 'twitter', 'https://twitter.com/', 1, '2023-03-05 12:43:09', '2023-03-05 12:43:09'),
(16, 'linkedin', 'https://www.linkedin.com/', 1, '2023-03-05 12:43:33', '2023-03-05 12:43:33'),
(17, 'skype', 'https://www.skype.com/en/', 1, '2023-03-05 12:44:04', '2023-03-05 12:44:04'),
(18, 'instagram', 'https://www.instagram.com/', 1, '2023-03-05 12:49:24', '2023-03-05 12:49:24'),
(19, 'facebook', 'https://www.facebook.com/', 1, '2023-03-05 12:50:03', '2023-03-05 12:50:03'),
(20, 'newsletter', 'Join our Email list to enjoy lots of courses!', 1, '2023-03-05 12:55:50', '2023-03-05 12:55:50'),
(23, 'mail', 'https://www.google.com/intl/ne/gmail/about/', 1, '2023-03-06 03:41:47', '2023-03-06 03:41:47');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `img` varchar(200) NOT NULL,
  `title` varchar(100) NOT NULL,
  `sub_title` varchar(150) NOT NULL,
  `btn` varchar(15) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `img`, `title`, `sub_title`, `btn`, `status`, `created_at`, `updated_at`) VALUES
(23, 'back1678100910.jpg', 'An investment in knowledge pays the best interest. ', 'Everything has a purpose and we have it in meeting each student’s innocent needs and genuine expecta', 'Learn more..', 1, '2023-03-06 11:17:31', '2023-03-06 11:17:31');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) ,
  `message` varchar(200) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `title`, `img`, `name`, `position`, `message`, `status`, `created_at`, `updated_at`) VALUES
(9, 'Their Sayings...', 'logo21678030831.jpg', 'John Lennon', 'Student Leader', 'Children are not a distraction from more inportant work. They are the most important work', 1, '2023-03-05 17:14:40', '2023-03-05 17:14:40'),
(10, 'Their Sayings...', 'images1678030860.jpg', 'Ammy Watson', 'Principal', 'A school is a wonderful institution which can bring to fruition the latent talents of its wards.', 1, '2023-03-05 17:16:39', '2023-03-05 17:16:39'),
(11, 'Their Sayings...', 'image11678030871.png', 'James Drak', 'School Coordinator', 'Luck is the sense to recognize an opportunity and the ability to take advantage of it.', 1, '2023-03-05 17:17:59', '2023-03-05 17:17:59');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

DROP TABLE IF EXISTS `trainers`;
CREATE TABLE IF NOT EXISTS `trainers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `top_title` varchar(100) NOT NULL,
  `top_desc` varchar(150) NOT NULL,
  `img` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `description` varchar(150) NOT NULL,
  `fb_link` varchar(200) NOT NULL,
  `t_link` varchar(200) NOT NULL,
  `y_link` varchar(200) NOT NULL,
  `i_link` varchar(200) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `top_title`, `top_desc`, `img`, `name`, `position`, `description`, `fb_link`, `t_link`, `y_link`, `i_link`, `status`, `created_at`, `updated_at`) VALUES
(14, 'Faculties', 'We have best and experienced faculty members at your service.', 'logo11678030775.jpg', 'Dr. Samya Rax', 'Trustee', 'Welcome to ABC. Away from the clatters and clamors of the city area, ABC School. Education Trust is located in close proximity of blissful natural amb', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.linkedin.com', 'https://www.instagram.com', 1, '2023-03-05 16:04:27', '2023-03-05 16:04:27'),
(16, 'Faculties', 'We have best and experienced faculty members at your service.', 'image11678030871.png', 'John Miller', 'CEO', 'We work round-the-clock to enhance the worth of all that we do and all that we make our students do for their wholesome grooming.', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.linkedin.com', 'https://www.instagram.com', 1, '2023-03-05 16:07:13', '2023-03-05 16:07:13'),
(15, 'Faculties', 'We have best and experienced faculty members at your service.', 'logo21678030831.jpg', 'Barrett Watts', 'Teacher Representative', 'I am honored and feel privileged using this page as platform to convey our commitment to serve, promote, and raise the boundless potentiality of your', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.linkedin.com', 'https://www.instagram.com', 1, '2023-03-05 16:05:41', '2023-03-05 16:05:41'),
(13, 'Faculties', 'We have best and experienced faculty members at your service.', 'image11678030871.png', 'Ammy Watson', 'Principal', 'Welcome to ABC. Away from the clatters and clamors of the city area, ABC School. Education Trust is located in close proximity of blissful natural amb', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.linkedin.com', 'https://www.instagram.com', 1, '2023-03-05 16:02:41', '2023-03-05 16:02:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `address`, `email`, `password`, `status`) VALUES
(22, 'solady@mailinator.com', 'dinoxumyfy@mail', 'wivixav@mailinator.com', 'fihu', 'jixuza@mailinator.co', 1),
(14, 'sushma', '9837348526', 'pokhara', 'sushma@gmail.com', '1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `whychoose_us`
--

DROP TABLE IF EXISTS `whychoose_us`;
CREATE TABLE IF NOT EXISTS `whychoose_us` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` longtext ,
  `btn` varchar(200) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `whychoose_us`
--

INSERT INTO `whychoose_us` (`id`, `title`, `description`, `btn`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Contact us directly !', 'We can help. Our team of experts is on hand to answer your questions.', 'Subscribe us!', 1, '2023-03-05 13:04:33', '2023-03-05 13:04:33'),
(8, 'Why Choose Us?', 'It is the most prestigious award amongst all the prizes given away by School, and is presented in the form of a Gold Medal along with a ‘Certificate of Excellence’ to such students of Grade-Ten who perform extra-ordinarily well in the S.E.E. exam by securing a position in the Board merit list. ', 'Learn More..', 1, '2023-03-05 17:35:42', '2023-03-05 17:35:42'),
(9, 'Why Choose Us?', 'It is the most prestigious award amongst all the prizes given away by School, and is presented in the form of a Gold Medal along with a ‘Certificate of Excellence’ to such students of Grade-Ten who perform extra-ordinarily well in the S.E.E. exam by securing a position in the Board merit list. ', 'Read More..', 1, '2023-03-06 02:03:58', '2023-03-06 02:03:58');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
