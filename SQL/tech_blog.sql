-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2022 at 03:53 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tech_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `username` varchar(30) NOT NULL,
  `pro_pic` varchar(100) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `company` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `github` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `linkedin` varchar(50) DEFAULT NULL,
  `bio` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`username`, `pro_pic`, `title`, `company`, `address`, `phone`, `facebook`, `github`, `twitter`, `linkedin`, `bio`) VALUES
('smsaikat', 'uploads/pro_pic-1662403282-propic.jpg', 'Web Developer', 'Personal', 'Dhaka Bangladesh', '01740730667', 'smsaikat99', 'sm-saikat', 'sm-saikat', 'sm-saikat', 'I am nothing....'),
('john', 'uploads/pro_pic-1662405294-young-man-avatar-cartoon-character-profile-picture-TC2FPE.jpg', 'Developer', '', '', '', '', '', '', '', ''),
('arian', 'uploads/pro_pic-1662405274-young-man-avatar-cartoon-character-profile-picture-TC2FPE.jpg', 'Designer', '', '', '', '', '', '', '', ''),
('arian', 'uploads/pro_pic-1662405274-young-man-avatar-cartoon-character-profile-picture-TC2FPE.jpg', 'Designer', '', '', '', '', '', '', '', ''),
('arian', 'uploads/pro_pic-1662405274-young-man-avatar-cartoon-character-profile-picture-TC2FPE.jpg', 'Designer', '', '', '', '', '', '', '', ''),
('arian', 'uploads/pro_pic-1662405274-young-man-avatar-cartoon-character-profile-picture-TC2FPE.jpg', 'Designer', '', '', '', '', '', '', '', ''),
('nayeem', 'uploads/pro_pic-1662423038-960-9609689_red-question-mark-png.png', 'Html Developer', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `title` text NOT NULL,
  `body` longtext NOT NULL,
  `thumbnail` varchar(500) NOT NULL,
  `category` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `username`, `title`, `body`, `thumbnail`, `category`, `created_at`) VALUES
(5, 'smsaikat', 'শাওমি অফিশিয়ালি রিলিজ করলো বিশাল ক্যামেরা যুক্ত রেডমি সিরিজের আরও একটি স্মার্টফোন', '<p><span id=\"isPasted\" style=\"color: rgb(33, 37, 41); font-family: SolaimanLipi, Arial, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">জনপ্রিয় চীনাভিত্তিক স্মার্টফোন নির্মাতা প্রতিষ্ঠান শাওমি স্মার্টফোনের বাজারে একের পর এক চমক দিয়ে যাচ্ছে। সেই চমকের অংশ হিসাবে তারা বাজারে নিয়ে এলো রেডমি সিরিজের আরও একটি স্মার্টফোন। তারা এই ফোনটির নাম দিয়েছে Redmi Note 8 Pro. বিশাল অাকৃতির ডিসপ্লের সাথে ফোনটিতে পেছনে যুক্ত করা হয়েছে 64 মেগাপিক্সেলের ক্যামেরা, সাথে 8, 2 ও 2 মেগাপিক্সেলের আরো তিনটি সেন্সর। যা দিয়ে wide, ultra wide, bokeh সহ বিভিন্ন মোড এ ছবি তুলতে পারবেন। আর ফোনটির সামনে রয়েছে 20 মেগাপিক্সেলের এর সেলফি ক্যামেরা। তাই যারা ছবি তুলতে ভালবাসেন তারা নিঃসন্দেহে ফোনটি কিনতে পারেন। তাছাড়া ফোনটিতে রয়েছে ৪৫০০ মিলি অ্যাম্পিয়ার ব্যাটারি। যার সাথে রয়েছে Quick Charging System। ফলে ব্যাটারি ব্যাকআপ নিয়ে আপনাকে কোনো চিন্তা করতে হবে না। এই ফোনটিতে দেওয়া হয়েছে 6, 8 জিবি RAM, সাথে 64, 128 জিবি ROM। ফোনটিতে ব্যবহার করা হয়েছে Octa-core (2x2.05 GHz Cortex-A76 &amp; 6x2.0 GHz Cortex-A55) প্রসেসর ও Mediatek Helio G90T চিপসেট। যার ফলে আপনি পাবেন দুর্দান্ত গেমিং অভিজ্ঞতা।</span></p>', 'uploads/thumbnail-1662423483-techtunes_b27127b8bfa1fb40cd1c4ad5db31d9da-640x360.jpg', 'android', '2022-09-06 00:18:03'),
(6, 'smsaikat', 'অ্যান্ড্রয়েড ফোনে সময় সেট করে ফাইল ডাউনলোড করুন', '<p id=\"isPasted\" style=\"box-sizing: border-box; font-family: SolaimanLipi, Arial, sans-serif; margin-top: 0px; margin-bottom: 1rem; color: rgb(33, 37, 41); font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">কেমন হতো যদি একটি নির্দিষ্ট সময়ে আপনার ফোন টি আপনার কাঙ্ক্ষিত ফাইলটি ডাউনলোড করত। যখন আপনি কোন কাজে ব্যস্ত। এর অনেক সুবিধা আছে! যেমন মনে করুন,&nbsp;<i style=\"box-sizing: border-box;\">আপনার বাসার ওয়াইফাই নষ্ট হযে গেছে। এখন আপনার ফোনেও লিমিটেড মোবাইল ডাটা আছে। আরার কাজের কোনো বড় ফাইল ডাউনলোড করা দরকার। যেটা আপনার লিমিটেড মোবাইল ডাটা দিয়ে সম্ভব না।</i><br style=\"box-sizing: border-box;\"><i style=\"box-sizing: border-box;\"><br style=\"box-sizing: border-box;\"></i><i style=\"box-sizing: border-box;\">দিনের বেলা ওয়াইফাই মেরামতের লোক আসবে। এরং সারাদিন আপনি বড়ির বাইরে থাকবেন। এমন আরো অনেক কারন হতে পারে।&nbsp;</i> এখন আপনি জাস্ট &nbsp;ডাউনলোড প্রসেসটির সময় সেট করে দিলেন, সময় হলে ডাউনলোড শুরু হয়ে যাবে।</p><div bis_skin_checked=\"1\" style=\"box-sizing: border-box; font-family: SolaimanLipi, Arial, sans-serif; display: flex !important; justify-content: center !important; margin-bottom: 1rem !important; padding-top: 1rem !important; padding-bottom: 1rem !important; background-color: rgb(250, 250, 250) !important; color: rgb(33, 37, 41); font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><br></div><h2 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: SolaimanLipi, Arial, sans-serif; font-weight: 500; line-height: 1.2; color: rgb(33, 37, 41); font-size: 2rem; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">অ্যান্ড্রয়েড ফোনে কিভাবে সময় নির্ধারণ করে ডাউনলোড করতে হয়?</h2><p style=\"box-sizing: border-box; font-family: SolaimanLipi, Arial, sans-serif; margin-top: 0px; margin-bottom: 1rem; color: rgb(33, 37, 41); font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">এটা করার জন্য আমি Advanced Download Manager সংক্ষেপে ADM ব্যবহার করব। তার আগে জানা ভালো হবে ADM হলো অ্যান্ড্রয়েড ফোনের জন্য অনেক শক্তিশালী একটি ডাউনলোড ম্যানেজার। এর যেমন একাধিক ফিচার আছে, তেমনি সাইজ ও অনেক কম।</p><p style=\"box-sizing: border-box; font-family: SolaimanLipi, Arial, sans-serif; margin-top: 0px; margin-bottom: 1rem; color: rgb(33, 37, 41); font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><b style=\"box-sizing: border-box;\">নিচে স্টেপ বাই স্টেপ বর্ণনা করা হলো। তাই মনোযোগ সহকারে পড়ার জন্য অনুরোধ করতেছি।&nbsp;</b><br style=\"box-sizing: border-box;\">স্টেপ ১: সবার আগে ADM অ্যাপসটি&nbsp;<a href=\"https://play.google.com/store/apps/details?id=com.dv.adm\" rel=\"noopener\" style=\"box-sizing: border-box; font-family: SolaimanLipi, Arial, sans-serif; color: rgb(0, 123, 255); text-decoration: none; background-color: transparent;\" target=\"_blank\">ডাউনলোড</a> করে নিন। ডাউনলোড করতে প্লে স্টোরে অ্যাপ টির নাম লিখে সার্চ করুন। &nbsp;ইতিমধ্যে ডাউনলোড করে থাকলে পরবর্তী স্টেপ গুলো ফলো করুন।</p><p style=\"box-sizing: border-box; font-family: SolaimanLipi, Arial, sans-serif; margin-top: 0px; margin-bottom: 1rem; color: rgb(33, 37, 41); font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">স্টেপ ২: নিচে ডান পাশের সবুজ প্লাস বাটনেটিতে ক্লিক করে একটি ডাউনলোড লিঙ্ক &nbsp;অ্যাড করুন। এবং ডাউনলোড পজ করুন।</p>', 'uploads/thumbnail-1662423518-techtunes_d2a8409cb5a54ee85795e3c3b8b0634b-640x360.jpg', 'android', '2022-09-06 00:18:38'),
(7, 'smsaikat', 'Basic Tutorial of C++ Programming', '<p>This is a basic tutorial of c++ programming.</p>', 'uploads/thumbnail-1662423526-programming.jpeg', 'programming', '2022-09-06 00:18:46'),
(8, 'john', 'What Is A Quantum Computer?', '<p>What is Quantum Computing ?</p>', 'uploads/thumbnail-1662423555-0_juPpwvGEsj0xky-d.jpeg', 'computer', '2022-09-06 00:19:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `pro_pic` varchar(100) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `full_name`, `email`, `password`, `pro_pic`, `reg_date`) VALUES
('', '', NULL, NULL, 'uploads/pro_pic-1662409709-young-man-avatar-cartoon-character-profile-picture-TC2FPE.jpg', '2022-09-05 20:28:29'),
('arian', 'Arian Khan', 'ariankhan7007@gmail.com', '1234', 'uploads/pro_pic-1662405274-young-man-avatar-cartoon-character-profile-picture-TC2FPE.jpg', '2022-09-05 19:14:34'),
('john', 'John Kobir', 'johnkobir@gmail.com', '1234', 'uploads/pro_pic-1662405294-young-man-avatar-cartoon-character-profile-picture-TC2FPE.jpg', '2022-09-05 19:14:54'),
('nayeem', 'Nayeem', 'nayeem@gmail.com', '1234', 'uploads/pro_pic-1662423038-960-9609689_red-question-mark-png.png', '2022-09-06 00:10:38'),
('smsaikat', 'sm saikat', 'smsaikat99@gmail.com', '1234', 'uploads/pro_pic-1662403282-propic.jpg', '2022-09-05 18:41:22'),
('test', 'Test User', 'test@gmail.com', '1234', '/img/avatar.png', '2022-09-05 23:30:45'),
('test2', 'Test User 2', 'test2@gmail.com', '1234', '/img/avatar.png', '2022-09-05 23:33:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD KEY `username` (`username`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `details_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
