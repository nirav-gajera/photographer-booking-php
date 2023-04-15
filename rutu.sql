-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2023 at 07:11 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rutu`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(240) NOT NULL,
  `user_id` int(240) NOT NULL,
  `booking_date` date NOT NULL,
  `payment_status` varchar(240) NOT NULL,
  `photog_id` int(20) NOT NULL,
  `pack_id` int(20) NOT NULL,
  `booking_status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `user_id`, `booking_date`, `payment_status`, `photog_id`, `pack_id`, `booking_status`) VALUES
(214, 19, '2022-02-17', '', 1, 7, '1'),
(215, 20, '2022-01-29', '', 1, 8, '1'),
(216, 21, '2022-06-03', '2', 1, 9, '1'),
(217, 22, '2022-01-20', '', 1, 12, '1'),
(218, 23, '2022-02-04', '', 1, 1, '1'),
(219, 26, '2022-02-18', '', 1, 8, '1'),
(220, 0, '2022-02-24', '', 7, 7, ''),
(222, 35, '2022-02-26', '', 4, 1, '1'),
(223, 21, '2022-02-28', '2', 4, 7, '1'),
(224, 33, '2022-03-30', '', 1, 2, '1'),
(229, 34, '2022-02-26', '', 4, 2, ''),
(230, 36, '2022-03-02', '2', 1, 1, '1'),
(231, 38, '2022-05-07', '', 8, 1, '1'),
(232, 29, '2022-04-30', '', 8, 2, '1'),
(233, 39, '2022-04-30', '', 5, 2, '1'),
(234, 31, '2023-02-22', '', 5, 2, '1');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(50) NOT NULL,
  `categories_name` varchar(30) NOT NULL,
  `categories_description` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_name`, `categories_description`) VALUES
(1, 'wedding-photography', 'Wedding photography is a specialty in photography that is primarily focused on the photography of events and activities relating to weddings. It may include other types of portrait photography of the couple before the official wedding day'),
(2, 'engagement', 'An engagement photography session is when a professional photographer takes pictures of you and your fiance in a casual setting, to capture your love and happiness genuinely.'),
(3, 'pre-wedding-photography', 'A pre-shoot is a short photo session with your wedding photographer approximately three to six months before your wedding.'),
(4, 'wildlife-photography', 'Wildlife photography is a genre of photography concerned with documenting various forms of wildlife in their natural habitat.'),
(6, 'fashion-photography', 'Fashion photography is a genre of photography which is devoted to displaying clothing and other fashion items.'),
(8, 'sports-photography', 'Sports photography refers to the genre of photography that covers all types of sports.'),
(10, 'event-photography', 'Event photography is the practice of photographing guests and occurrences at any Event or occasion where one may hire a photographer for.'),
(11, 'birthday-photography', ' To relive this wonderful birthday experience, there is always a desire to capture them in the form of photo or video.it\'s help  preserve beautiful moments spent with friends and family.'),
(12, 'jewellery-photography', ' jewellry consists of decorative items worn for personal adornment, such as brooches, rings, necklaces, earrings, pendants, bracelets, and cufflinks.'),
(13, 'Kids-photography', 'kids contain define to all photography of baby boy or baby girl.');

-- --------------------------------------------------------

--
-- Table structure for table `contact-us`
--

CREATE TABLE `contact-us` (
  `contact_id` int(20) NOT NULL,
  `photog_id` int(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `message` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact-us`
--

INSERT INTO `contact-us` (`contact_id`, `photog_id`, `firstname`, `lastname`, `email`, `phone`, `message`) VALUES
(1, 4, 'krunal', 'patel', 'krunal221299@gmail.c', '8398393290', 'i want wedding photography'),
(5, 5, 'digal', '', 'digalpatel@gmail.com', '9409929179', 'birthdat date is near but the next week celebration.');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `feedback` varchar(200) NOT NULL,
  `feedback_date` date NOT NULL,
  `photog_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `user_id`, `feedback`, `feedback_date`, `photog_id`) VALUES
(36, 35, 'nice photography in your studio', '2022-02-14', 4),
(37, 21, 'Nice working for you', '2022-02-18', 5),
(38, 29, 'super performance your webside', '2022-02-18', 5);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(245) NOT NULL,
  `photog_id` int(50) NOT NULL,
  `categories_id` int(100) NOT NULL,
  `gallery_img` varchar(240) NOT NULL,
  `gallery_description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `photog_id`, `categories_id`, `gallery_img`, `gallery_description`) VALUES
(1, 1, 3, 'p14.jpg', 'collection of pre-wedding images'),
(2, 1, 2, 'e2.jpg', 'collection of engagment pictures'),
(3, 4, 2, 'k11.jpg', 'collection of engagment pictures'),
(4, 1, 1, 'kk26.jpg', 'collection of wedding pictures'),
(5, 5, 2, 'k8.jpg', 'collection of engagment pictures'),
(6, 6, 2, 'k9.jpg', 'collection of engagment pictures'),
(7, 8, 2, 'k3.jpg', 'collection of engagment pictures'),
(8, 7, 2, 'k2.jpg', 'collection of engagment pictures'),
(9, 4, 1, 'kk21.jpg', 'collection of wedding pictures'),
(10, 5, 1, 'kk29.jpg', 'collection of wedding pictures'),
(11, 6, 1, 'kk33.jpg', 'collection of wedding pictures'),
(12, 6, 3, 'p10.jpg', 'collection of pre-wedding images'),
(13, 7, 3, 'p11.jpg', 'collection of pre-wedding images'),
(14, 8, 3, 'p6.jpg', 'collection of pre-wedding images'),
(15, 10, 3, 'p5.jpg', 'collection of pre-wedding images'),
(16, 6, 3, 'p4.jpg', 'collection of pre-wedding images'),
(17, 1, 4, 'w5.jfif', 'collection of wild-life images'),
(18, 4, 4, 'w4.jfif', 'collection of wild-life images'),
(19, 10, 4, 'w7.jfif', 'collection of wild-life images'),
(20, 10, 4, 'w2.jfif', 'collection of wild-life images'),
(21, 8, 4, 'w1.jfif', 'collection of wild-life images'),
(22, 6, 4, 'w6.jfif', 'collection of wild-life images'),
(23, 1, 6, 'ff1.jpg', 'collection of fashion-photography images'),
(24, 4, 6, 'ff4.jpg', 'collection of fashion-photography images'),
(25, 7, 6, 'ff3.jpg', 'collection of fashion-photography images'),
(26, 8, 6, 'ff2.jpg', 'collection of fashion-photography images'),
(27, 10, 6, 'ff5.jpg', 'collection of fashion-photography images'),
(28, 0, 6, 'ff6.jpg', 'collection of fashion-photography images'),
(30, 1, 8, 's1.webp', 'collection of sport-photography images.'),
(31, 4, 8, 's2.webp', 'collection of sport-photography images.'),
(32, 10, 8, 's3.webp', 'collection of sport-photography images.'),
(33, 1, 8, 's4.webp', 'collection of sport-photography images.'),
(34, 0, 8, 's5.webp', 'collection of sport-photography images.'),
(35, 0, 8, 's6.webp', 'collection of sport-photography images.'),
(36, 10, 10, 'ev4.jpeg', 'collection of event-photography images.'),
(37, 0, 10, 'ev5.jpeg', 'collection of event-photography images.\r\n'),
(38, 0, 10, 'ev6.jpeg', 'collection of event-photography images.\r\n'),
(39, 0, 10, 'ev3.webp', 'collection of event-photography images.\r\n'),
(42, 4, 11, 'b1.webp', 'collection of birthday-photography images.'),
(43, 0, 11, 'b2.webp', 'collection of birthday-photography images.'),
(44, 0, 11, 'b3.webp', 'collection of birthday-photography images.'),
(45, 7, 11, 'b4.webp', 'collection of birthday-photography images.'),
(46, 0, 11, 'b5.webp', 'collection of birthday-photography images.'),
(47, 0, 11, 'b6.webp', 'collection of birthday-photography images.'),
(48, 0, 1, 'kk23.jpg', 'collection of wedding pictures.'),
(49, 7, 1, 'kk28.jpg', 'collection of wedding pictures.'),
(50, 0, 1, 'kk30.jpg', 'collection of wedding pictures.'),
(51, 0, 1, 'kk24.jpg', 'collection of wedding pictures.'),
(52, 0, 1, 'kk25.jpg', 'collection of wedding pictures.'),
(53, 0, 2, 'k1.jpg', 'collection of engagment pictures.'),
(54, 0, 2, 'k10.jpg', 'collection of engagment pictures.'),
(55, 0, 2, 'k6.jpg', 'collection of engagment pictures.'),
(56, 0, 3, 'p3.jpg', 'collection of pre-wedding images'),
(57, 0, 3, 'p12.jpg', 'collection of pre-wedding images'),
(58, 0, 3, 'p9.jpg', 'collection of pre-wedding images'),
(59, 0, 10, 'ev2.webp', 'collection of event-photography images.'),
(60, 0, 10, 'ev1.webp', 'collection of event-photography images.'),
(75, 8, 13, 'baby2.jpg', 'collection of kids images.'),
(76, 6, 13, 'baby9.jpg', 'collection of kids images.'),
(77, 5, 13, 'baby6.jpg', 'collection of kids images.'),
(78, 1, 12, 'j6.jpg', 'collection of jewellary image.'),
(79, 0, 12, 'j5.jpg', 'collection of jewellary image'),
(80, 10, 12, 'j4.jpg', 'collection of jewellary image.'),
(81, 8, 12, 'j2.jpg', 'collection of jewellary image'),
(82, 7, 12, 'h9.jpg', 'collection of jewellary image.'),
(83, 6, 12, 'j10.jpg', 'collection of jewellary image'),
(114, 0, 0, '15.jpg', 'collection of pre wedding photographer'),
(115, 0, 0, 'vendor-6.jpg', 'collection of birthday photography'),
(116, 0, 11, 'vendor-total-thumb-2.jpg', 'collection of birthday photography'),
(118, 0, 4, 'sa11.jpg', 'collection of wildlife photography image'),
(120, 4, 12, '', 'collection of jewellery photography');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `pack_id` int(50) NOT NULL,
  `pack_name` varchar(50) NOT NULL,
  `pack_des` varchar(240) NOT NULL,
  `pack_img` varchar(240) NOT NULL,
  `pack_price` int(11) NOT NULL,
  `photog_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pack_id`, `pack_name`, `pack_des`, `pack_img`, `pack_price`, `photog_id`) VALUES
(1, 'wedding-photography', 'photography which done at wedding time.', 'sa13.jpg', 100000, 1),
(2, 'engagement-photography', 'photography which done at engagementtime.', 'sa14.jpg', 60000, 4),
(7, 'pre-wedding-photography', 'photography which done at pre-wedding time.', 'sa6.jpg', 150000, 7),
(8, 'wildlife-photography', 'photography which done at wildlife time.', 'sa10.jpg', 50000, 6),
(9, 'fashion-photography', 'photography which is done at fashion show.', 'sa8.jpg', 40000, 8),
(10, 'sports-photography', 'photography which done at sports time.', 'saa1.jpg', 40000, 5),
(11, 'event-photography', 'photography which done at event time.', 'sa9.jpg', 20000, 5),
(12, 'birthday-photography', 'photography which done at birthday time.', 'sa3.jpg', 7000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `photographer_page`
--

CREATE TABLE `photographer_page` (
  `photog_id` int(50) NOT NULL,
  `photog_name` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `contact_no` varchar(13) NOT NULL,
  `img` varchar(240) NOT NULL,
  `about` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `otpused` varchar(200) NOT NULL,
  `otp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photographer_page`
--

INSERT INTO `photographer_page` (`photog_id`, `photog_name`, `address`, `email_id`, `contact_no`, `img`, `about`, `password`, `otpused`, `otp`) VALUES
(1, 'Digal patel', '7,mira park,toran park,botad', 'digalpatel2000@gmail.com', '9409929179', '80.jpg', 'i am good at wedding photography', '123', '0', '389066'),
(4, 'Abhi patel', '5,dhatlodiya,Ahemadabad.', 'abhipatel3907@gmail.com', '9409929179', '81.jpg', 'i am good at birth date photography', 'p22', '', ''),
(5, 'jay patel', '6,samarpan tower,ghatlodia,ahmedabad.', 'jaypatel846963@gmail.com', '9898402235', '82.jpg', 'i am good at fashion photography', 'p3', '1', '839940'),
(6, 'jimmy patel', '8,samarpan tower,ghatlodia,ahmedabad.', 'jimmypatel1785@gmail.com', '9898452235', '85.jpg', 'i am good at pre-wedding photography', 'p4', '', ''),
(7, 'Mayuri sagathiya', 'post office salangpur road botad ', 'Mayurisagathiya1999@gmail.com', '9798452235', '86.jpg', 'expert in shutter speed...!', 'p5', '', ''),
(8, 'Kuldeep patel', '10,amul deri near,Aanand.', 'Kuldeeppatel1785@gmail.com', '9797452235', '87.jpg', 'i\'m stop your time...!', 'p6', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `sub_cat_id` int(50) NOT NULL,
  `categories_id` int(50) NOT NULL,
  `sub_cat_name` varchar(50) NOT NULL,
  `sub_cat_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`sub_cat_id`, `categories_id`, `sub_cat_name`, `sub_cat_description`) VALUES
(9, 1, 'black & white', 'all pictures included the black and white filter'),
(11, 3, 'black & white', 'all pictures included the black and white filter.'),
(12, 4, 'black & white', 'all pictures included the black and white filter.'),
(13, 4, 'matte paper', 'all pictures included the mate type of photo-paper.'),
(14, 4, 'glossy paper', 'all pictures included the glossy type of photo-paper.'),
(15, 6, 'black & white', 'all pictures included the black and white filter.'),
(16, 6, 'matte paper', 'all pictures included the mate type of photo-paper.'),
(17, 6, 'glossy paper', 'all pictures included the glossy type of photo-paper.'),
(18, 8, 'on ground,candid ', 'all pictures are taken at run-time.'),
(19, 8, 'shutter speed', 'all pictures are taken as type of shutter photography.'),
(20, 10, 'potrait or landscape.', 'all pictures included the special size of potrait or landscape.'),
(21, 11, 'black & white', 'all pictures included the black and white filter.'),
(22, 11, 'glossy paper', 'all pictures included the glossy type of photo-paper.'),
(24, 1, 'glossy paper', 'All pictures include glossy paper'),
(25, 12, 'Black & White', 'All pictures include glossy paper in photo paper'),
(26, 13, 'glossy paper', 'All pictures include glossy paper in photo paper'),
(27, 13, 'Black & White', 'All pictures include black & white paper in photo paper'),
(36, 2, 'matter papaer', 'All pictures include matter paper in photo paper');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact_no` varchar(13) NOT NULL,
  `is_admin` varchar(10) NOT NULL,
  `regidate` date NOT NULL,
  `otp` int(10) NOT NULL,
  `otpused` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `address`, `email_id`, `password`, `contact_no`, `is_admin`, `regidate`, `otp`, `otpused`) VALUES
(2, 'krunalpatel', '3,prabhat chowk,ghatlodia,ahmedabad.', 'krunalpatel221299@gmail.com', 'user2', '1234567989', '1', '2020-01-03', 222886, 1),
(3, 'digalpatel', '07,mira park,botad,botad', 'digalpatel2000@gmail.com', '123456', '9409929179', '1', '2021-12-20', 269004, 1),
(21, 'Aarti Patel', '25 b umiyanagar society', 'aartipatel1836@gmail.com', 'aarti1836', '9963322588', '', '2022-01-17', 866314, 0),
(29, 'digal', 'botad', 'digalpatel2000@gmail.com', '123456', '9409929179', '', '2022-02-01', 269004, 1),
(31, 'abhi patel', 'botad', 'abhipatel3907@gmail.com', '123456789', '6356969194', '', '2022-02-02', 826414, 0),
(35, 'Drashti', '01,haveli chok,botad', 'drashtipatel@gmail.com', 'ddddd', '9963322588', '', '2022-02-25', 0, 0),
(36, 'digal', '07,mirapark pachapada , botad', 'digalpatel6600@gmail.com', '6600digal', '9409929179', '', '2022-02-28', 0, 0),
(38, 'denisha patel', '01,haveli chok,botad', 'digalpatel2000@gmail.com', '123456', '9987742233', '', '2022-04-08', 269004, 1),
(39, 'mayuri', 'adsafjf', 'Mayurisagathiya1999@gmail.com', '123', '3369988522', '', '2022-04-09', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `pack_id` (`pack_id`),
  ADD KEY `photog_id` (`photog_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `contact-us`
--
ALTER TABLE `contact-us`
  ADD PRIMARY KEY (`contact_id`),
  ADD KEY `photog_id` (`photog_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `photog_id` (`photog_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`),
  ADD KEY `categories_id` (`categories_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pack_id`),
  ADD KEY `photog_id` (`photog_id`);

--
-- Indexes for table `photographer_page`
--
ALTER TABLE `photographer_page`
  ADD PRIMARY KEY (`photog_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`sub_cat_id`),
  ADD KEY `sub-categories_ibfk_1` (`categories_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(240) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact-us`
--
ALTER TABLE `contact-us`
  MODIFY `contact_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(245) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pack_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `photographer_page`
--
ALTER TABLE `photographer_page`
  MODIFY `photog_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `sub_cat_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact-us`
--
ALTER TABLE `contact-us`
  ADD CONSTRAINT `contact-us_ibfk_1` FOREIGN KEY (`photog_id`) REFERENCES `photographer_page` (`photog_id`);

--
-- Constraints for table `package`
--
ALTER TABLE `package`
  ADD CONSTRAINT `package_ibfk_1` FOREIGN KEY (`photog_id`) REFERENCES `photographer_page` (`photog_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
