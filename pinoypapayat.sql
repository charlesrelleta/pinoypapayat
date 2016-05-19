-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2016 at 06:44 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pinoypapayat`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
`_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cms_about`
--

CREATE TABLE IF NOT EXISTS `cms_about` (
`_id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `path` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_about`
--

INSERT INTO `cms_about` (`_id`, `title`, `description`, `content`, `path`, `date`) VALUES
(1, '<p>PINOYPAPAYAT</p>\r\n', '<p>LOREM IPSUM DOLOR SIT AMET NULLAM CONSEQUAT INT</p>\r\n', '<p>LOREM IPSUM DOLOR SIT AMET NULLAM CONSEQUAT INTLOREM IPSUM DOLOR SIT AMET NULLAM CONSEQUAT INTLOREM IPSUM DOLOR SIT AMET NULLAM CONSEQUAT INTLOREM IPSUM DOLOR SIT AMET NULLAM CONSEQUAT INTLOREM IPSUM DOLOR SIT AMET NULLAM CONSEQUAT INTLOREM IPSUM DOLOR SIT AMET NULLAM CONSEQUAT INTLOREM IPSUM DOLOR SIT AMET NULLAM CONSEQUAT INTLOREM IPSUM DOLOR SIT AMET NULLAM CONSEQUAT INTLOREM IPSUM DOLOR SIT AMET NULLAM CONSEQUAT INT</p>\r\n', '', '2016-05-19 02:50:18');

-- --------------------------------------------------------

--
-- Table structure for table `cms_contact`
--

CREATE TABLE IF NOT EXISTS `cms_contact` (
`_id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `tel_title` varchar(1000) NOT NULL,
  `telephone` varchar(1000) NOT NULL,
  `cel_title` varchar(1000) NOT NULL,
  `cellphone` varchar(1000) NOT NULL,
  `email_title` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_contact`
--

INSERT INTO `cms_contact` (`_id`, `title`, `description`, `tel_title`, `telephone`, `cel_title`, `cellphone`, `email_title`, `email`) VALUES
(1, '<p>JUST CONTACT US</p>\r\n', '<p>ALOREM IPSUM DOLOR SIT AMET NULLAM ID EGESTAS URNA ALIQUAM</p>\r\n', '<p>TELEPHONE NUMBER :</p>\r\n', '<p>02 454 0111</p>\r\n', '<p>CELLPHONE NUMBER :</p>\r\n', '<p>0915 123 4567</p>\r\n', '<p>EMAIL ADDRESS :</p>\r\n', '<p>example@example.com</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `cms_home`
--

CREATE TABLE IF NOT EXISTS `cms_home` (
`_id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `post_title` varchar(1000) NOT NULL,
  `post_description` varchar(10000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_home`
--

INSERT INTO `cms_home` (`_id`, `title`, `description`, `post_title`, `post_description`) VALUES
(1, '<p>PINOYPAPAYAT</p>\r\n', '<p><span style="color:#A52A2A">LOREM IPSUM DOLOR SIT AMET NULLAM CONSEQUAT INTERDUM VIVAMUS DONCE SE </span></p>\r\n', '<p><span style="font-size:72px">GET YOURSELF FIT WITH THESE AMAZING AND FUN TIPS !!!</span></p>\r\n', '<p style="text-align:center"><span style="color:#A52A2A">LOREM IPSUM DOLOR SIT AMET NULLAM CONSEQUAT INTERDUM VIVAMUS DONCE SED LIBERO.<br />\r\n<br />\r\n<img alt="WORKOUT!" src="http://cf.ltkcdn.net/exercise/images/std/179963-293x380-Fun-Fitness-Facts-Have-the-Perfect-Workout-infographic-v3.jpg" style="height:380px; width:293px" />&nbsp;&nbsp;</span></p>\r\n\r\n<p style="text-align:center"><span style="color:#A52A2A"><strong><span style="font-size:48px">WORK WITH THIS!</span></strong></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="color:#A52A2A"><img alt="WARNING!" src="https://s-media-cache-ak0.pinimg.com/736x/2a/c9/93/2ac9930c8ed9c16e8c3008ba5c7191e0.jpg" style="float:left; height:600px; width:600px" /></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<h3>Max Heart Rate Definition</h3>\r\n\r\n<p>When determining your heart rate limits, you will want to use the max heart rate calculator to get an acceptable estimate of the rates that are right for your age. There are some important things to consider aside from age that can affect maximum heart rates, however. For example, consider the following:</p>\r\n\r\n<h3>How to Use the Max Heart Rate Calculator</h3>\r\n\r\n<p>To use this FREE&nbsp;online calculator, simply put your age into the Max Heart Rate Health Calculator and find out your max heart rate instantly!</p>\r\n\r\n<h3>Max Heart Rate Advice</h3>\r\n\r\n<p>Exercising, stress and many other events can raise your heart rate significantly. Learning your maximum heart rate using a Max Heart Rate Calculator can help you exercise safely, without damaging your heart. Age is the number one factor in determining your maximum heart rate per minute, but your overall health is also important to consider.</p>\r\n\r\n<ul>\r\n	<li>You cannot damage your heart through exercise unless you have a condition that already affects the heart. For example, a history of heart attack may lower the acceptable heart rate for you personally. Athletes and those that are very physically active may be able to push their heart rate higher than their age suggests, on the other hand.</li>\r\n	<li>If you live a very&nbsp;<a href="http://www.webmd.com/fitness-exercise/features/do-you-have-sitting-disease" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-decoration: none; color: rgb(51, 153, 204); background: transparent;">sedentary lifestyle</a>, your heart rate limits will be much lower than your age would suggest. Those who are just beginning to exercise after being sedentary for a long period of time will need to allow their heart rate to increase in smaller increments over time than those already living an active lifestyle.</li>\r\n	<li>Typically, a healthy adult cannot exceed their max heart rate. You will usually only be able to exert the amount of energy that your body is capable of, which in turn limits your heart rate to the number that you are able to achieve. Pushing yourself beyond capable limits is a difficult task to accomplish.</li>\r\n</ul>\r\n\r\n<p>Of course, using a Max Heart Rate Calculator is a good idea if you are just now beginning a workout plan and want to use a heart rate monitor during your routine. Checking your heart rate often and sticking to the number suggested by your doctor can also be very important if you have experienced heart trouble in the past, however. Some conditions that can affect your max heart rate include:</p>\r\n\r\n<ul>\r\n	<li>Previous history of heart attack, stroke, or other heart related illness.</li>\r\n	<li>Pregnant women may want to ask their doctor about max heart rates if they exercise on a regular basis.</li>\r\n	<li>If you begin to feel breathless during exercise, you should slow down regardless of age or suggested maximum heart rate.</li>\r\n</ul>\r\n\r\n<h3>Max Heart Rate Exercise Tips</h3>\r\n\r\n<p>Exercising based on a max heart rate calculators suggestions can be a great way to enhance your heart health. If you begin to feel out of breath, resting for a few moments can be a good way to allow your body to catch up and remove the waste that accumulates in the bloodstream as a result of exercising. Some suggestions to improve heart health include these three simple ideas.</p>\r\n\r\n<p>1. If you are living a sedentary lifestyle and want to get into shape, talk to your doctor about what kind of exercise would be ideal for you. Most doctors will suggest a brisk walk for thirty minutes a day and elevating your heart rate for at least a few moments of the walk to increase heart health.</p>\r\n\r\n<p>2. Aerobic exercise happens anytime your heart rate increases, and is one of the best types of exercise for heart health. Aerobic exercise can be any type of movement that increases the heart rate, whether you are energetically vacuuming the rug or going for a jog.</p>\r\n\r\n<p>3. Sticking to your max heart rate suggestions will allow you to build heart health safely. If you are worried about heart rate when exercising, speaking to your physician can help you alleviate your fears and concerns.</p>\r\n\r\n<p>You may also want to check out&nbsp;<a href="http://www.calculatorpro.com/calculator/target-heart-rate-calculator/" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-decoration: none; color: rgb(51, 153, 204); background: transparent;">Target Heart Rate calculator</a></p>\r\n\r\n<h3>How to Calculate Max Heart Rate</h3>\r\n\r\n<p>Let&#39;s be honest - sometimes the best max heart rate calculator is the one that is easy to use and doesn&#39;t require us to even know what the max heart rate formula is in the first place! But if you want to know the exact formula for calculating max heart rate then please check out the &quot;Formula&quot; box above.</p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
 ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `cms_about`
--
ALTER TABLE `cms_about`
 ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `cms_contact`
--
ALTER TABLE `cms_contact`
 ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `cms_home`
--
ALTER TABLE `cms_home`
 ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cms_about`
--
ALTER TABLE `cms_about`
MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cms_contact`
--
ALTER TABLE `cms_contact`
MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cms_home`
--
ALTER TABLE `cms_home`
MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
