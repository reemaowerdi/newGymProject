-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 29, 2022 at 02:36 AM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doit`
--

-- --------------------------------------------------------

--
-- Table structure for table `gym_info`
--

CREATE TABLE `gym_info` (
  `id` int(1) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `subscribe` text,
  `photo` text,
  `location` text,
  `loc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gym_info`
--

INSERT INTO `gym_info` (`id`, `name`, `description`, `subscribe`, `photo`, `location`, `loc`) VALUES
(1, 'FitnessTime', 'Enjoy The Fitness Membership That Fits Around Your Lifestyle And Your Wellness Goals. We Offer A World-Class Fitness Experience Powered By The Biggest Sports Center Network In The MENA Region. Take Advantage Of State-Of-The-Art Equipment With Industry Leading Fitness Instructors And Sports Coaches.\r\nCall Us: 9200 03131', 'https://www.fitnesstime.com.sa/en-us', 'images/FitnessTime.png', 'https://www.google.com/maps/embed?origin=mfe&pb=!1m3!2m1!1sFitness+Time+-+Sahafa+Pro!6i13', 'AL-shefa'),
(2, 'Vida fit', '      Vidafit is an exclusive female fitness Center expanding throughout the kingdom. Vidafit provides its members with an array of healthy fitness with a safe environment at competitive prices. Vidafit takes pride in giving all its members an opportunity to achieve their individual goals, from general to a high-level competitive fitness.\r\n\r\n                        <br />\r\n                        Vidafit’s objective is to give the community access to a club where all its members can avail the best in class equipment facilities which are unique in their own sphere. Members at Vidafit can achieve their fitness aspirations with fun and determination.\r\n\r\n                        </br> call us: 011 834 3007', 'https://vidafit.com.au', 'images/vidafitlogo.png', 'https://maps.google.com/maps?q=Vidafit%20%7C%20Alwan%20Center&t=&z=13&ie=UTF8&iwloc=&output=embed', 'AL-sahafa'),
(3, '9Round', 'At typical gyms, your workout relies on a class time or your trainer’s schedule. We think it\'s about time that changed. We provide members with fun,\r\n                        trainer-guided, kickboxing-style workouts in a circuit format. That means our workouts begin whenever you show up.\r\n                        Because it’s all about YOU. Getting stronger. On YOUR time.\r\n                        </br> call us: 9200 19910', 'https://sa.9round.com', 'images/9round.png', 'https://maps.google.com/maps?q=9round&t=&z=13&ie=UTF8&iwloc=&output=embed', 'AL-yarmouk'),
(4, 'Diva', 'professional laides gym in riyadh </br> call us: 0554960222', 'https://www.diva.sa', 'images/diva.png', 'https://www.google.com/maps?q=Diva+Fitness+AlMughrizat&ftid=0x3e2f0271c8377f71:0x6c8f0f4ef05b2767&t=&z=13&ie=UTF8&iwloc=&output=embed', ' AL-yasmeen'),
(5, 'FitForever', 'In FIT FOREVER FITNESS, we combine the highest standards of physical fitness training with the highest attention to the smallest details, offering you a luxurious experience and uncompromising quality that keeps you motivated.\r\n\r\n                        Our passion is all about enriching the lives of our members and creating a classy community of like-minded people who love being healthy, strong and happy.\r\n                        </br> call us: 011 488 1069', 'https://www.fitforeverfitness.com', 'images/fitfor.png', 'https://maps.google.com/maps?q=FIT%20FOREVER%20FITNESS&t=&z=13&ie=UTF8&iwloc=&output=embed', 'AL-rawdah'),
(6, 'AL-manahil', '  Al Manahil Entertainment Co. is one of the leading company in Beauty, Fitness and Sports sectors in Riyadh. Our aim is to offer best services to all women located at one place.\r\n                        <br />\r\n                        Al Manahil Entertainment Co. is a NON-PROFIT company outlined with its distinct support of Princess Madawi Fund for Women Entrepreneurship Development \"Deem Al Manahil\".\r\n\r\n                        </br> call us: 011 488 1069', 'https://www.almanahil.com.sa', 'images/manahil.jpg', 'https://maps.google.com/maps?q=%D9%85%D8%B1%D9%83%D8%B2%20%D8%A7%D9%84%D9%85%D9%86%D8%A7%D9%87%D9%84&t=&z=13&ie=UTF8&iwloc=&output=embed', ' Al Safarat، Diplomatic Square');

-- --------------------------------------------------------

--
-- Table structure for table `rev`
--

CREATE TABLE `rev` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_rating` int(6) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rev`
--

INSERT INTO `rev` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(1, 'a', 3, 'aaa', '1651199784');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gym_info`
--
ALTER TABLE `gym_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rev`
--
ALTER TABLE `rev`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gym_info`
--
ALTER TABLE `gym_info`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rev`
--
ALTER TABLE `rev`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
