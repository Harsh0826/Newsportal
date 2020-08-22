-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 18, 2020 at 12:19 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(100) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(10000) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Business'),
(2, 'Sports'),
(3, 'LifeStyle'),
(4, 'Entertainment'),
(5, 'Technology');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(10000) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `message`) VALUES
(1, 'harsh', '18ce090@charusat.edu.in', 'asdasd'),
(2, 'Varshil', '18ce090@charusat.edu.in', 'hello how are you ?');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(100) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(10000) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `subcat_id` int(100) NOT NULL,
  `subcat` varchar(100) NOT NULL,
  `news_desc` longtext NOT NULL,
  `news_images` varchar(100) NOT NULL,
  `posting_date` date NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `cat_id`, `cat_name`, `subcat_id`, `subcat`, `news_desc`, `news_images`, `posting_date`) VALUES
(19, 'Modi Meets Ministers to Finalize Steps to Revive Indian pm', 1, 'Business', 1, 'Economy', 'hello', 'crash-865638.jpg', '2020-05-06'),
(2, ' Six income tax slabs in, 70 exemptions out: Impact on taxpayers', 1, 'Business', 4, 'Budget', 'Salaried taxpayers who opt for the new regime will have to forgo the standard deduction as well as exemptions under chapter', 'budget.jpg', '2020-05-03'),
(3, 'We forget that flu once plagued the economy as coronavirus ...', 1, 'Business', 1, 'Economy', 'Business Today: sign up for a morning shot of financial news. Read more. In drawing attention to the parallels between the economic ', 'economy37.jpg', '2020-05-03'),
(4, 'Modi Meets Ministers to Finalize Steps to Revive Indian ', 1, 'Business', 2, 'Market', 'infrastructure and farming sectors to restart Asia\'s third-largest economy, which is reeling under the impact of the world\'s toughest lockdown.', 'crash-865638.jpg', '2020-05-03'),
(5, 'Mohammed Shami Reveals He Considered Ending His Life Thrice Due To severe Stress', 2, 'Sports', 6, 'Cricket', 'World Cup 2019: India defeated Afghanistan by 11 runs in Southampton thriller as Mohammed Shami took a hat-trick in the last over', 'cricket.jpg', '2020-05-03'),
(6, 'East Bengalâ€™s Mario Rivera - The 3+1 foreigners rule will benefit Indian football', 2, 'Sports', 7, 'Football', 'East Bengal head coach Mario Rivera believes that the Indian Super League (ISL) must consider reducing the number of foreign players in each team as it will be beneficial to the Indian national team and Indian football overall.', 'foot.jpg', '2020-05-03'),
(7, 'You just cannot get over this lovely caricature of Anushka Sharma and Virat Kohli', 4, 'Entertainment', 18, 'Celebrities', 'Anushka Sharma recently celebrated her 32nd birthday on May 1. While wishes and messages poured in for the actress on social media from all sides, a special birthday wish caught our attention and it has been going viral on the internet ever since. A fan made a caricature of Anushka and Virat where birthday girl Anushka is seen sipping on her hot cup of coffee while her darling husband Virat Kohli is seen baking chocolate cake for his wifey on her special day. Not to mention their fur buddy who is always a part of their caricatures.', 'Untitled_1.jpg', '2020-05-03'),
(8, 'Try a cup of this coffee mug cake; here’s the recipe', 3, 'LifeStyle', 11, 'Food', 'Apart from adding flavours to our day, it also gives your cup of coffee a yummy twist.', 'food.jpg', '2020-05-04'),
(9, 'These pics of Kareena Kapoor in Manish Malhotra creations will brighten up your Monday', 3, 'LifeStyle', 13, 'Fashion', 'The Veere Di Wedding actor always manages to impress with her ethnic choices. And it only gets better when she steps out in a Manish Malhotra creation.', 'karina.jpg', '2020-05-04'),
(10, 'ABC for health: Why apple, beetroot and carrot juice is good for immunity', 3, 'LifeStyle', 12, 'Health & Fitness', 'Time to learn the importance of this ABC to boost immunity.', 'beet.jpg', '2020-05-04'),
(11, 'Venice women are using gondolas to reach the elderly', 3, 'LifeStyle', 14, 'Travel', 'They are extremely responsible and cautious in their approach, as the social media posts show they cover their mouth and nose, and also wear gloves.', 'travel.jpg', '2020-05-04'),
(12, 'Mi Browsers get option to turn off data collection in incognito mode', 5, 'Technology', 20, 'Technology', 'Last week, a report from Forbes stated that cybersecurity researcher Gabi Cirlig accused the Chinese smartphone manufacturer of collecting user data and recording their behaviour including websites visited and search queries in Google. Soon after Xiaomi released an official statement and called the claims â€œuntrueâ€.', 'mobile.jpg', '2020-05-04'),
(13, 'Tired of Twitter? Follow these steps to delete your account', 5, 'Technology', 20, 'Technology', 'Twitter is a fun medium to interact with your followers, read funny memes, follow journalists for breaking news and updates, and so on. However, at times, the micro-blogging medium becomes really toxic because of internet tolls and abusive tweets. Thankfully, there is a way to delete your Twitter account.', 'twitter.jpg', '2020-05-04'),
(14, 'E-commerce platforms start accepting orders for non-essential products in Green, Orange zone', 5, 'Technology', 20, 'Technology', 'As lockdown 3.0 comes into action beginning May 4 midnight, e-commerce platforms such as Amazon, Flipkart start accepting orders for non-essential products. At the time of announcing the lockdown 3.0 guidelines last week, the Ministry of Home Affairs (MHA) clarified that e-commerce platforms will be able to sell essential as well as non-essential products starting May 4. But the catch here is, not everyone will be able to order these non-essential items.', 'amazon-flipkart.jpg', '2020-05-04'),
(15, 'Uber, Ola resume services in these cities: Check the list', 5, 'Technology', 20, 'Technology', 'The latest lockdown (3.0) guidelines provided by the Ministry of Home Affairs (MHA) bring some relief for the ride-hailing services such as Uber, Ola, and others. Starting May 4 midnight, Uber and Ola have resumed services since the first lockdown was announced back in March.', 'ola.jpg', '2020-05-04'),
(16, 'Delhi HC declines to pass orders to curb DDCA ombudsmanâ€™s authority', 2, 'Sports', 10, 'Others', 'The Delhi High Court has decided not to pass any interim order to either remove the DDCA ombudsman or curtail his authority regarding affairs of the state cricket unit or its members.', 'motera.jpg', '2020-05-04'),
(17, 'NBA Academy Indiaâ€™s Jagshaanbir Singh picked by Point Park University', 2, 'Sports', 8, 'Basketball', 'Itâ€™s tough for giants to take baby steps, at the best of times. But the coronavirus crisis has forced a rather tall, young Indian â€“ Jagshaanbir Singh â€“ to carefully calibrate his dream of playing in the NBA and take it one small step at a time.', 'LeBron-Jame.jpg', '2020-05-04'),
(74, 'Vizag gas leak live updates: Toll rises to 11; NHRC sends notice to Andhra Pradesh govt, Centre', 3, 'LifeStyle', 12, 'Health & Fitness', 'Even as the authorities continue the repair and sanitisation works at chemical plant, the chorus for action against the LG Polymers grew louder on Friday with locals demanding to shut down the unit permanently. Eleven persons have been confirmed dead in the tragic incident. Stay with TOI for more updates:', 'gasleakage.jpg', '2020-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

DROP TABLE IF EXISTS `subcategory`;
CREATE TABLE IF NOT EXISTS `subcategory` (
  `subcat_id` int(100) NOT NULL AUTO_INCREMENT,
  `cat_id` int(100) NOT NULL,
  `subcat` varchar(10000) NOT NULL,
  PRIMARY KEY (`subcat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcat_id`, `cat_id`, `subcat`) VALUES
(1, 1, 'Economy'),
(2, 1, 'Market'),
(3, 1, 'Real Estate'),
(4, 1, 'Budget'),
(5, 1, 'sensex'),
(6, 2, 'Cricket'),
(7, 2, 'Football'),
(8, 2, 'Basketball'),
(9, 2, 'Badminton'),
(10, 2, 'Others'),
(11, 3, 'Food'),
(12, 3, 'Health & Fitness'),
(13, 3, 'Fashion'),
(14, 3, 'Travel'),
(15, 3, 'Beauty'),
(16, 4, 'Movies'),
(17, 4, 'Music'),
(18, 4, 'Celebrities'),
(19, 4, 'Tv'),
(20, 5, 'Technology');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `fullname`, `username`, `password`, `email`) VALUES
(1, 'varshil2020', 'varshil20', '2020', 'aad@gmail.com'),
(2, 'varshil2020', 'varshil20', '7080', 'asd@gmail.com'),
(4, 'Varshil Patel', 'varshil0107', 'varshil', '18ce090@charusat.edu.in');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
