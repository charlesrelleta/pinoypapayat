-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2016 at 10:14 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pinoypapayat`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name_first` varchar(50) NOT NULL,
  `name_middle` varchar(50) NOT NULL,
  `name_last` varchar(50) NOT NULL,
  `number_license` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`_id`, `username`, `password`, `timestamp`, `name_first`, `name_middle`, `name_last`, `number_license`, `gender`, `birthdate`, `email`, `profession`, `status`) VALUES
(1, 'asd', 'asd', '2016-05-29 13:49:10', 'asd', 'asd', 'asd', 'asd', 'male', '2016-05-29', 'ASD@ASD.COM', 'asd', 1),
(2, 'QWE', 'qwe', '2016-05-29 14:26:02', 'QWE', 'QWE', 'QWE', 'QWE', 'male', '2016-05-29', 'ASD@ASD.COM', 'QWE', 1),
(3, 'zxc', 'zxc', '2016-05-29 14:27:55', 'ZXC', 'ZXC', 'zxc', 'zxc', 'male', '2016-05-29', 'ASD@ASD.COM', 'zxc', 2),
(4, 'charles', '244f7c500c0bfa02719c5a3f78bb1d2ee291de51', '2016-05-29 15:00:24', 'charles', 'charles', 'charles', 'charles', 'male', '1995-04-21', 'charlesrelleta@gmail.com', 'IT', 1),
(9, 'qwe', 'qwe', '2016-05-30 18:26:11', 'asd', 'asd', 'asd', 'asd', 'male', '2016-05-31', 'ASD@ASD.COM', 'asd', 2),
(10, 'fghfgh', 'fghfgh', '2016-05-30 18:29:58', 'asd', 'asd', 'asd', 'asd', 'male', '2016-05-31', 'ASD@ASD.COM', 'asd', 1),
(11, 'charlesrelleta', 'password123', '2016-05-30 18:33:40', 'charles', 'charles', 'charles', '123456', 'male', '1995-04-21', 'ASD@ASD.COM', 'charles', 1),
(12, 'admin', 'password', '2016-05-30 18:47:06', 'admin', 'admin', 'admin', '12345678', 'Male', '2016-05-31', 'admin@admin.com', 'admin', 2),
(13, 'charles', '55c3b5386c486feb662a0785f340938f518d547f', '2016-05-31 03:13:19', 'charles', 'mendoza', 'relleta', '12345678', 'male', '2016-05-03', 'ASD@ASD.COM', 'asd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bmi_results`
--

CREATE TABLE `bmi_results` (
  `_id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `tips` varchar(5000) NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `indicator` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bmi_results`
--

INSERT INTO `bmi_results` (`_id`, `title`, `description`, `tips`, `date_posted`, `date_updated`, `indicator`) VALUES
(1, 'BMI is equal to or less than 18.5 (Underweight)', 'A lean BMI can indicate that your weight maybe too low. You should consult your physician to determine if you should gain weight, as low body mass can decrease your body''s immune system, which could lead to ilness such as disappearance of periods (women), bone loss, malnutrition and other conditions. The lower your BMI the greater these risks become.\r\n\r\nNote: Since Body Fat Percentage calculations use total body weight and not estimates of lean muscle mass and fat, BMI can not determine between the overweight and the more muscular. Use our Body Fat Calculator and Waist to Hip Ratio Calculator in combination with our BMI Calculator for a more accurate view of your body fat.', 'The best way to add weight is to increase your intake of complex carbohydrates, particularly whole grain ones. Foods like whole wheat bread, muffins, pasta, crackers, and bagels are good to include. Also, legumes and fruits would be wise choices.\r\n\r\nIn order to gain weight, you will have to eat more calories. You will need to include regular exercise and strength training into your lifestyle in order to prevent gaining too much weight as fat. And, as I mentioned, those extra calories should come mainly from additional carbohydrate.\r\n\r\nTo start, set up a realistic goal weight for yourself. You may need to resign yourself to a less than (what you may consider) an ideal weight. Make good nutrition your priority, and weight gain the second.\r\n\r\n\r\n \r\nIt is best to gain weight slowly and steadily. This will help to ensure that your weight gain is in the form of lean body mass and not excessive fat. Don''t try to gain more than 1/2 pound a week.\r\n\r\nSome more tips\r\nDrink 6-8 glasses of distilled water a day.\r\nEat frequent but small meals.\r\nEat lots of raw fruits and vegetables (green leafy vegetables are great)\r\nDo not drink coffee, alcohol, soda pop,...\r\nDo not eat processed foods; white sugar, white flower,...\r\nAvoid red meat and animal fats.\r\nReduce intake of dairy products.\r\nDo not smoke and avoid second hand smoke.', '2016-05-30 23:38:52', '2016-05-31 01:11:29', 'UNDER_WEIGHT'),
(2, '                                                                  BMI is between 18.5 and 24.9 (Normal Weight)', '                                                                  People whose BMI is within 18.5 to 24.9 possess the ideal amount of body weight, associated with living longest, the lowest incidence\r\n									of serious ilness, as well as being perceived as more physically attractive than people with BMI in higher or lower ranges. However, it\r\n									may be a good idea to check your Waist Circumference and keep it within the recommended limits.                                                                ', '                                                                  Keep it Up!               !!!!!!                                                 ', '2016-05-30 23:39:42', '2016-05-31 01:11:41', 'NORMAL_WEIGHT'),
(3, '                                                                  BMI is between 25 and 29.9 (Over weight)', '                                                                  People falling in this BMI range are considered overweight and would benefit from finding healthy ways to lower their weight, such as diet and\r\n									 exercise. Individuals who fall in this range are at increased risk for a variety of ilnesses. If your BMI is 27-29.99 your risk of health\r\n									 problems becomes higher. In a recent study an increased rate of blood pressure, diabetes and heart disease was recorded at 27.3 for women and\r\n									 27.8 for men. It may be a good idea to check your Waist Circumference and compare it with the recommended limits.                                                                ', '                                                                   Your body weight is controlled by the number of calories you eat and the number of calories you use each day. So, if you\r\n										consume fewer calories than you burn, you will lose weight. You can do this by becoming more physically active or by eating less.\r\n										You didn''t put on extra weight overnight so it is equally unrealistic to take it off quickly. Record a goal that you can reach in one month\r\n										that is 4 to 8 pounds less than you weigh now. Set a goal you know you can achieve.\r\n										Here are some very simple changes that you can start today that will greatly improve your chances of weight loss success:\r\n										Eliminate Red Meat\r\n										If foods like burgers are basic to your current diet, cutting out red meat can go a long way in helping you make healthier meal choices.\r\n										Build your meals around fish or poultry.\r\n										Cut out fried foods\r\n										Grill, bake, roast, broil or boil your food. This also means doing without French Fries and snack foods like Potato Strings, Chips,...\r\n										Start with a soup or a salad\r\n										By starting dinner with a soup or salad, you will curb your hunger, which will in turn help you keep portion sizes in check and prevent you\r\n										from overeating.\r\n										Stop Cola consumption\r\n										For every 20 ounces of Coca-Cola you drink, you''re consuming 250 calories. If you''re trying to consume around 1500 calories a day in order to\r\n										lose weight, you can blow your entire calorie budget on soda!\r\n										Drink water\r\n										Reach for the goal of eight glasses a day. Even if you don''t drink eight, you''re drinking more than usual.                                                                ', '2016-05-30 23:39:42', '2016-05-31 01:11:52', 'OVER_WEIGHT'),
(4, '                                                                  BMI is between 30-34.99 (Obese Class 1)', '                                                                  Individuals with a BMI of 30-34.99 are in a physically unhealthy condition, which puts them at risk for serious ilnesses such as heart disease,\r\n									 diabetes, high blood pressure, gall bladder disease, and some cancers. This holds especially true if you have a larger than recommended Waist Size.\r\n									 These people would benefit greatly by modifying their lifestyle. Ideally, see your doctor and consider reducing your weight by 5-10 percent.\r\n									 Such a weight reduction will result in considerable health improvements.                                                                ', '                                                                  The method of treatment depends on your level of obesity, overall health condition, and motivation to lose weight.\r\n										Treatment includes a combination of diet, exercise, behavior modification, and sometimes weightloss drugs. In some cases of severe obesity,\r\n										gastrointestinal surgery may be recommended.\r\n										If you are overweight, losing as little as 7-10 percent of your body weight may improve many of the problems linked to being overweight,\r\n										such as high blood pressure and diabetes.\r\n										Slow and steady weight loss of no more than 1-2 pounds per week is the safest way to lose weight. Too rapid weight loss can cause you to\r\n										lose muscle rather than fat. It also increases your chances of developing other problems, such as gallstones and nutrient deficiencies.\r\n										Making long-term changes in your eating and physical activity habits is the only way to lose weight and keep it off!\r\n										Whether you are trying to lose weight or maintain your weight, you must improve your eating habits. Eat a variety of foods, especially pasta,\r\n										rice, wholemeal bread, and other whole-grain foods. Reduce your fat-intake. You should also eat lots of fruits and vegetables.\r\n										Making physical activity a part of your daily life is an important way to help control your weight. Try to do at least 30 minutes of physical\r\n										activity a day on most days of the week. The activity does not have to be done all at once. It can be done in stages: 10 minutes here,\r\n										20 minutes there, providing it adds up to 30 minutes a day.                                                                ', '2016-05-30 23:40:34', '2016-05-31 01:12:00', 'OBESE_CLASS1'),
(5, '                                                                  BMI is between 35-39.99 (Obese Class 2)', '                                                                  If you have a BMI of 35-39.99 your risk of weight-related health problems and even death, is severe. See your doctor and reduce your weight to a\r\n							lower BMI.                                                                ', '                                                                  The method of treatment depends on your level of obesity, overall health condition, and motivation to lose weight.\r\n	 						Treatment includes a combination of diet, exercise, behavior modification, and sometimes weightloss drugs. In some cases of severe obesity,\r\n							gastrointestinal surgery may be recommended.\r\n							If you are overweight, losing as little as 7-10 percent of your body weight may improve many of the problems linked to being overweight,\r\n							such as high blood pressure and diabetes.\r\n							Slow and steady weight loss of no more than 1-2 pounds per week is the safest way to lose weight. Too rapid weight loss can cause you to lose\r\n							muscle rather than fat. It also increases your chances of developing other problems, such as gallstones and nutrient deficiencies. Making long-term\r\n							changes in your eating and physical activity habits is the only way to lose weight and keep it off!\r\n							Whether you are trying to lose weight or maintain your weight, you must improve your eating habits. Eat a variety of foods, especially pasta, rice,\r\n							wholemeal bread, and other whole-grain foods. Reduce your fat-intake. You should also eat lots of fruits and vegetables.\r\n							Making physical activity a part of your daily life is an important way to help control your weight. Try to do at least 30 minutes of physical\r\n							activity a day on most days of the week. The activity does not have to be done all at once. It can be done in stages: 10 minutes here, 20 minutes\r\n							there, providing it adds up to 30 minutes a day.                                                                ', '2016-05-30 23:40:34', '2016-05-31 01:12:10', 'OBESE_CLASS2'),
(6, 'BMI is over 40 (Obese Class 3 : Morbid Obesity)', '                                                                                                                                    With a BMI of 40+ you have an extremely high risk of weight-related disease and premature death.\r\n									Indeed, you may have already been suffering from a weight-related condition. For the sake of your health it is very important to see your doctor\r\n									and get specialists help for your condition.                                                                                                                                ', '                                                                                                                                    The method of treatment depends on your level of obesity, overall health condition, and motivation to lose weight.\r\n									Treatment includes a combination of diet, exercise, behavior modification, and sometimes weightloss drugs. In some cases of severe obesity,\r\n									gastrointestinal surgery may be recommended.\r\n									If you are overweight, losing as little as 7-10 percent of your body weight may improve many of the problems linked to being overweight, such as high blood pressure and diabetes.\r\n									Slow and steady weight loss of no more than 1-2 pounds per week is the safest way to lose weight. Too rapid weight loss can cause you to lose muscle rather than fat. It also increases your chances of developing other problems, such as gallstones and nutrient deficiencies. Making long-term changes in your eating and physical activity habits is the only way to lose weight and keep it off!\r\n									Whether you are trying to lose weight or maintain your weight, you must improve your eating habits. Eat a variety of foods, especially pasta, rice, wholemeal bread, and other whole-grain foods. Reduce your fat-intake. You should also eat lots of fruits and vegetables.\r\n									Making physical activity a part of your daily life is an important way to help control your weight. Try to do at least 30 minutes of physical\r\n									activity a day on most days of the week. The activity does not have to be done all at once. It can be done in stages: 10 minutes here, 20 minutes\r\n									there, providing it adds up to 30 minutes a day.                                                                                                                                ', '2016-05-30 23:41:00', '2016-05-31 02:13:00', 'MORBID_OBESITY');

-- --------------------------------------------------------

--
-- Table structure for table `cms_about`
--

CREATE TABLE `cms_about` (
  `_id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `path` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_about`
--

INSERT INTO `cms_about` (`_id`, `title`, `description`, `content`, `path`, `date`) VALUES
(1, 'Why weight management is important to Filipinos                                                                                                                                                                                              ', '                                                                                                                                                                                                                                                                                                                                     Reaching and maintaining a healthy weight is important for overall health and can help you prevent and control many diseases and conditions. If you are overweight or obese, you are at higher risk of developing serious health problems. That is why maintaining a healthy weight is so important: It helps you lower your risk for developing these problems, helps you feel good about yourself, and gives you more energy to enjoy life.                                                                                                                                                                                          ', '                                                                                                                                                                                                      While there are people who are famished, there is an alarming increase rate of obesity from all the parts of the world. The prevalence of obesity in the Philippines has rose from 16.6% in 1993 to 33.9% in 2013 according to the National Nutrition Survey. Last year, the 2015 Nutrition Month campaign, “Timbang iwasto sa tamang nutrisyon at ehersisyo,” (Correct weight through right nutrition and exercise) aimed to raise awareness on how people can prevent obesity through providing them with adequate information. Obesity has not only affected adults but also children. NNS also found that overweight and obesity prevalence among children is 5%, while for Filipino teenagers, it is 8.3%.The alarming increase rate of obesity has led the proponents to create a project which will help people be informed on the right nutrition they need to have in order to maintain a healthy mind and body. The project is entitled Pinoy Papayat which aims to raise awareness to people especially to Filipino youth to watch their weight and the food they eat.                                                                                                                                                                                                ', '', '2016-05-19 02:50:18');

-- --------------------------------------------------------

--
-- Table structure for table `cms_contact`
--

CREATE TABLE `cms_contact` (
  `_id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `telephone` varchar(1000) NOT NULL,
  `cellphone` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_contact`
--

INSERT INTO `cms_contact` (`_id`, `title`, `description`, `telephone`, `cellphone`, `email`) VALUES
(2, 'Contact Us', 'Description Here', '12345677', '12345677', 'Email@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `cms_home`
--

CREATE TABLE `cms_home` (
  `_id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `post_title` varchar(1000) NOT NULL,
  `post_description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_home`
--

INSERT INTO `cms_home` (`_id`, `title`, `description`, `post_title`, `post_description`) VALUES
(1, '                                                                        Pinoy Papayat                                                       ', 'Pinoy Papayat, a project of Fitness First, aims to raise awareness to people especially to Filipino youth to watch their weight and the food they eat.                                                                ', '', 'The Pinoy Papayat project aims to promote awareness on how important weight management is to people through the BMI Calculator we will include in the web site.');

-- --------------------------------------------------------

--
-- Table structure for table `cms_posts`
--

CREATE TABLE `cms_posts` (
  `_id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `category` int(11) NOT NULL,
  `img_path` varchar(500) NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_posts`
--

INSERT INTO `cms_posts` (`_id`, `title`, `description`, `content`, `category`, `img_path`, `date_posted`, `date_updated`) VALUES
(8, 'FILIPINO , INDONESIAN AND MALAYSIAN FOOD: TASTE SIMILAR?', 'Doreen Fernandez\r\nfood expert', '"We have the least spicy except in one or two provinces. The big colonial mixture has diluted our cuisine."\r\nFilipino food (known locally as "native" food and abroad sometimes as pinoy cooking ) is somewhat similar to Indonesian and Malaysian food but often has a distinctive sour taste. Chinese- and Spanish- influenced food are featured most prominently during ', 3, '', '2016-06-03 00:46:09', '2016-06-03 00:46:09'),
(9, 'Filipino Food Serving', 'Source: everyculture.com', 'Three crops a year are harvested to provide enough rice for the population, and the government keeps surpluses stored for times of drought. Salt water and freshwater of fish and shellfish are eaten daily, served either fresh or salted. Fish, chicken and pork are usually fried, although people are becoming more health-conscious and often choose alternative methods of cooking. Garlic is added to food because it is considered healthful. Filipino food is not spicy. All food is cooked on gas burners or wood or charcoal fires and is allowed to get cold before it is eaten. Rice is cooked first, since it takes longer. When it is ready, rice will be placed on the table while the next items of the meal are prepared and served. ', 1, '', '2016-06-03 00:46:30', '2016-06-03 00:46:30'),
(10, 'Typical Filipino Breakfast', 'Mike Lininger etiquettescholar.com', 'Filipinos tend to rise early and breakfast is usually eaten between 6:30am and 8:00am. A typical Filipino breakfast is comprised of daggit (dried fish), rice, fruit and ensair mada (sugar buns), or eggs, sausage and pan de sal (sourdough bread). In some places Spam is a popular breakfast treat. In other places breakfast is simply tea or coffee with rice or food left over from the night before that is not reheated. Rice is served either as a porridge-type cereal that can be flavored with any number of ingredients (nasi gorang), with eggs in a variety of styles, or with pickled vegetables. Tea may be drunk plain or with lemon, cream, milk, or sugar. Eggs and sausage are served on special occasions. Small buns called pan de sol may be purchased from vendors early in the morning. Bread often refers to toast.', 3, '', '2016-06-03 00:47:30', '2016-06-03 00:47:30'),
(11, 'Filipina White House Executive Chef', 'Elizabeth Williamson, Wall Street Journal, February 26, 2011', 'Cristeta Pasia Comerford (born 1962) is the White House Executive Chef since 2005. She is the first woman to be selected for the post, and also the first of Filipino descent. Elizabeth Williamson wrote in the Wall Street Journal, “Ms. Comerford, 47, attended the food-technology program at the University of the Philippines. She got her start in Chicago-area hotels, including the Sheraton and Hyatt Regency near O''Hare airport. In Washington, she did a stint at Le Grande Bistro in the Westin Hotel before she was recruited by former White House chef Walter Scheib III to work at the presidential residence in 1995. Laura Bush appointed her to the top job in 2005, making Ms. Comerford the first female, and the first ethnic minority, to hold the position. ', 1, '', '2016-06-03 00:48:33', '2016-06-03 00:48:33'),
(12, 'Typical Philippine Diet', 'Source: etiquettescholar.com', 'The typical Philippine diet revolves mainly around the local foods, especially vegetables. pork and seafood, and rice and noodles. Filipinos are also very familiar with Western foods, especially fast foods, and the diet of most today is a mixture of all these influences. Westerners familiar with Spanish-influenced cuisine will recognize the Latin-based menudo-type stews, the Cuban-style pork dishes, the tapa-like appetizers, but all with native ingredients of Asian and Polynesian origin. On top of this, add the American hamburger, and other types of fast food (which, in all fairness, are found most everywhere around the world), and you have a sense of Filipino cooking.', 2, '', '2016-06-03 00:48:59', '2016-06-03 00:48:59'),
(13, 'Eating with Your Hands in the Philippines', 'SOURCE: factsanddetails.com', 'According to etiquettescholar.com: “Food you eat with your hands is known as "banana-leaf" food. “It includes wonderful vegetarian or meat curries, served with rice and sauce on a large banana leaf. No plates, no forks, no spoons, no chopsticks. You reach into the rice, take some with your fingers, gently roll it between your index and middle fingers and thumb (not your palm!) into a kind of self-sticking ball, dip it into the sauce on the banana leaf, mix it with a vegetable or a piece of chicken, then pop the whole thing in your mouth. Here are some other things to note about eating in such restaurants.” [Source: Mike Lininger etiquettescholar.com <*>]\r\n\r\n “Wash your hands before you sit down to eat. Many banana-leaf restaurants have washrooms and sinks out in the open specifically for this purpose. (However, you may want to wash your hands with bottled water at the hotel first, since the water at the restaurant may be more hazardous to your health than the germs already on your hands!) You will also need to wash you hands again at the end of the meal, especially after eating the saucy dishes, since you''ve probably got a good bit of it running down your arm. Don''t worry, it''s to be expected: don''t dress up if you''re eating banana-leaf style. <*>\r\n\r\n “Dining etiquette for using your hands. Use your right hand when picking up and eating food. Keep your left hand at your side. Do not place your left hand on the table, and do not pass food with your left hand, as the left hand typically is considered the "unclean" hand in Muslim tradition, and many banana-leaf restaurants are Muslim establishments. If you absolutely cannot eat without some kind of utensil, it''s usually all right to ask for spoons in such establishments. The proprietors are more than pleased to accommodate Westerners. <*>', 2, '', '2016-06-03 01:18:16', '2016-06-03 01:18:16'),
(14, 'BMI For Filipinos', 'SOURCE: http://www.newyou.com.ph/', 'Filipinos have a proud culinary tradition and hearty appetites to go with it. However, coupled with the fast-paced lifestyle of today and the tendency to do things in excess, it can lead to serious health problems.', 1, '', '2016-06-03 01:24:39', '2016-06-03 01:24:39'),
(15, 'Why are we obese and overweight?', 'Source: Tolentino, Dr. Rodolfo. “Updates on PASOO Supported Studies.”', ' the same study, the eating behavior of the sample population was also reviewed. The results show that poor eating habits such as frequency of snacking, skipping breakfast, consuming energy-dense foods, and eating fast food have a significant impact on our numbers for obesity or overweight.\r\n\r\nWith these factors identified, we can begin to understand how we can correct these eating habits and form healthy ones so that obesity and overweight can be managed and prevented.', 2, '', '2016-06-03 01:26:47', '2016-06-03 01:26:47'),
(16, 'Table Manners in the Philippines', 'SOURCE: http://factsanddetails.com/', ' According to etiquettescholar.com: The most honored position is at the head of the table, as in the western European style, with the honored guest(s) sitting to the right of the host (and hostess): If there are couples, the honored man sits next to the hostess, and the honored woman sits next to the host. (Spouses are usually not invited to business meals, though, and most formal meals in restaurants are business meals: do not ask if your spouse can join you; it will embarrass your Filipino colleague into doing something that is uncomfortable for him.) The honored guest sits on the side of the table farthest from the door if possible. [Source: Mike Lininger etiquettescholar.com <*>]\r\n\r\n You will always be offered more food. Leave a bit on your plate if you do not want more food. You will be implored to take more two or three times, in the form of a little ritual. The game is as follows: first you refuse, then the host insists, then you refuse again, then the host insists again, and then you finally give in and take a little more. If you really don''t want more, take very little and leave it on your plate. You may always have additional beverages; drink enough to cause your cup or glass to be less than half full, and it will generally be refilled. A reminder: never refill your own glass; always refill your neighbor''s glass, and he or she will refill yours. <*>\r\n\r\n If the meal is served help-yourself style, be sure not to be the first person to take food; let the host or hostess begin. At the end of the meal, you may be given pabaon. a doggie bag with the leftover food in it. This is a common expression of hospitality; make an effort to reject it, but ultimately take it. If you invite someone to an event, you will rarely be turned down directly-people will say things like "Yes, I think I can make it" but this is no guarantee that they will actually come. Do not take the last bit of food from a central serving plate if there is one (more often than not, Philippine meals will be individually served); that means there will be none left in case someone else wants more. Also, a sauce may be mixed with the rice, and the main dish may be eaten with the rice.<*>\r\n\r\n Toothpicks are often used at the end of the meal. The best way to handle a toothpick is to work away with one hand, while keeping the other hand in front of it over the mouth, as a sort of mask. If you cover the working hand this way, you can join in the toothpick session in public at the end of the meal with the best of them! Just never do it walking down the street: that''s simply not done. Smoking is ubiquitous throughout the Philippines. Usually, you do not smoke at the table until the meal is over. <*>', 2, '', '2016-06-03 01:32:14', '2016-06-03 01:32:14'),
(17, 'Facts on Food & Beverage in the Philippines', 'Source: http://traveltips.usatoday.com/', 'Food and culture are virtually indistinguishable in the Philippines, where the average person eats five meals daily. Eating is an important time for Filipinos to come together over a table full of food, whether home-cooked or at one of the country&amp;rsquo;s many eateries. Visitors to the Philippines will rarely be at a loss for an eclectic mix of food and beverages, including local dishes that can only be found on the islands.\r\nCultural Influences\r\n\r\nThe Philippines&amp;rsquo; multi-ethnic past makes Filipino cuisine a unique blend of Eastern and Western food, drawing from Spanish, Chinese and Malay recipes. Filipino chefs adopted Spanish ways of cooking during three centuries of Spanish colonization. Perhaps the most important method garnered from traditional Spanish cuisine was making savory marinades to flavor dishes. According to the New York Times, some food experts estimate that about 80 percent of Filipino dishes are derived from Spanish cooking. Food in the Philippines also relies heavily on ingredients used by the islands&amp;lsquo; original inhabitants, the Malays, including coconut, hot chilies and mango. Early Chinese colonists introduced pansit noodles and bean curds to the islands, which are still widely served across the Philippines today.\r\n\r\nDietary Staples\r\n\r\nMuch like their mainland Asian counterparts, Filipinos use rice as a foundation for most dishes. Several different varieties of rice are used in Filipino cooking and often molded into fried cakes and rice noodles, which are widely served in restaurants and roadside stands. Fresh seafood is another staple of Filipino cooking, and both fish and shellfish have long been a mainstay on tables across the nation. Likewise, vegetables are a major part of many recipes, and are generally used more often than meat, which is more expensive. Coconut milk is a natural Filipino ingredient used to cook meat and veggie dishes called guinatan.\r\n\r\nDesserts\r\n\r\nMeals in the Philippines are capped off with desserts either using fresh, local produce or modeled after Western treats. There&amp;rsquo;s a large repertoire of coconut desserts, including a thick jam called macapuno, and bibingka, a baked coconut rice pudding topped with duck eggs. Drawing inspiration from their Spanish heritage, Filipinos also frequently serve leche flan for dessert. American-style desserts, such as pies and cake, can also be found at restaurants throughout the Phillipines.\r\n\r\nBeverages\r\n\r\nDrinks in the Phillipines are not only a necessary complement to meals, but also help beat the tropical heat. As with their food, Filipinos often incorporate local produce into beverages to create tasty and refreshing concoctions. A few examples include blended mango shakes, coconut juice and pandan leaf iced tea. Filipinos also enjoy the coconut-infused hard liquor known as lambing and gin cocktails mixed with pineapple juice or citrus fruit juice.\r\n\r\nFood Custom\r\n\r\nThe Philippines are teeming with restaurants and food vendors, and it&amp;rsquo;s little wonder since most residents eat five meals each day. Generally, these are small meals by Western standards, including breakfast, a morning snack, lunch, afternoon snack and dinner. Filipinos prefer to eat communally, with many meals served buffet-style. Regardless of socioeconomic status, Filipino families place a high premium on meals, considering them an important time to socialize with friends and family and as a gesture to welcome guests.', 0, '', '2016-06-03 03:01:25', '2016-06-03 03:01:25'),
(18, 'Unappreciated Pinoy Food', 'Source: http://factsanddetails.com/', ' Norma O. Chikiamco wrote in the Philippine Daily Inquirer, “I feel disheartened every time I hear people extol the virtues of Asian cuisine. Most likely they''d be referring to Japanese, Thai, Vietnamese, Indonesian or Chinese food; just as likely there won''t be any mention of Filipino food. As if it isn''t hard enough being called the Sad Sack of Asia, they have to snub our cuisine too. Is Filipino food meant to be loved by no one else but us? [Source: Norma O. Chikiamco, Philippine Daily Inquirer, July 6, 2008 *-*]\r\n\r\n “Maybe it''s because our food is indistinguishable. Being an aggregation of Spanish, Chinese, Malay, and American influences, it''s neither East nor West, neither here nor there. Ours is probably the only country in Asia where American hamburger is seasoned with Chinese soy sauce, “Italian” spaghetti is cooked with hot dogs, and Chinese dishes are called by Spanish names (as in camaron rebosado, morisqueta tostada). And where else but in the Philippines can one find a dish called Arroz a la Cubana which doesn''t exist at all in Cuba? All these alongside our own homegrown favorites such as dinuguan, sinigang, pakbet and tinola. Being accustomed to all these, we probably take them for granted. But a foreigner trying our cuisine for the first time would probably be scratching his head, wondering what culinary circus he has stumbled into. *-*\r\n\r\n “That is why it''s so gratifying when, once in a rare while, we get a bit of unsolicited publicity. I almost jumped with pride and joy when I saw Martha Stewart featuring Filipino cuisine in her highly-rated TV shows. With Martha by his side, Filipino chef Romy Dorotan demonstrated how to cook lumpia and adobo. The doyen of domesticity even had some favorable words to say about our cuisine and pronounced Romy''s cooking delicious. Likewise, in an issue of Gourmet Magazine a few years ago, halo-halo was included among the featured Asian ices. And in the reality show “Fear Factor” (and later, in “The Amazing Race Asia”), one of the challenges contestants had to hurdle was eating balut, the dark, forbidding unhatched duck embryo that''s a unique Filipino delicacy. As expected, it had some contestants gagging, and while this might have given Filipino cuisine some notoriety, it at least brought our much overlooked cuisine its 15 minutes of fame. *-*\r\n\r\n “With more and more young Filipinos now going into culinary arts, is our cuisine then next to be launched into international stardom? Is a renaissance of Filipino food soon in the offing? I wish the answer could be “yes,” but I think it''s more of “not yet.” True, there has been so much renewed interest in dining out, and options for the dinner crowd have expanded tremendously. And yet, what I see is young chefs opening Greek restaurants and French bistros, working in international ocean liners and developing recipes for American food imports. Few are those who have ventured into Filipino cuisine, or who''ve championed the cause of Pinoy food. Maybe it''s because other endeavors are more lucrative. Maybe chefs feel (with reason, I believe) that their countrymen wouldn''t pay restaurant prices for dishes they can cook at home. Maybe it''s just a reflection of the diversity of our culture that our chefs can adapt so easily to foreign cooking. *-*\r\n\r\n Recently someone said something about Filipino food being the best kept secret of Asia. And there perhaps we''ve found our squeeze, our rightful position in the global community. Filipino food as the ultimate culinary secret, a hidden treasure whose bewildering ways are understandable only to a chosen few. Never mind being snubbed and being obscure. While others are unaware of this last frontier, it''s ours to savor and ours to enjoy. After all where else can one find pitisu, a derivative of the French petite choux, side by side with pancit Canton (which isn''t really from Canton) or lumpiang Shanghai (which isn''t really from Shanghai either).', 0, '', '2016-06-03 03:07:52', '2016-06-03 03:07:52'),
(19, 'Healthy Recipe: Lemon Chicken for Dinner!', '', 'Looking for a recipe that can turn any day into a special one without the extra calories? You’re in luck! If you just love all things chicken, prepare this lemon chicken recipe for dinner. Don’t worry! Unlike the lemon chicken recipes you’ll find in Chinese restaurants, the chicken is sautéed instead of being battered and deep fried.\r\n\r\nClub-New-You-Healthy-Recipe-Lemon-Chicken-For-Dinner\r\n\r\nWith this light and nutritious recipe, get your kitchen gear ready and start cooking!\r\n\r\nIngredients\r\n¼ red capsicum, sliced\r\n\r\n½ onion, diced\r\n\r\n1 carrot, diced\r\n\r\n1 chicken breast, sliced\r\n\r\n1 cup broccoli, cut into florets\r\n\r\n1 cup cauliflower cut in florets\r\n\r\n1 cup cooked rice\r\n\r\n1 tbsp. olive oil\r\n\r\nSauce\r\n\r\n1-2 lemons freshly squeezed (¼ cup juice)\r\n\r\n1 tbsp. mirin\r\n\r\n1 tbsp. brown sugar\r\n\r\n2 tbsp. soy sauce\r\n\r\n1 tbsp. corn flour mixed with ¼ cup cold water in a cup\r\n\r\n \r\n\r\nPreparation\r\nMix lemon juice, sugar, soy sauce and mirin in a bowl. Make sure it doesn’t taste sour.\r\nHeat frying pan on medium heat and add olive oil, capsicum and onion. Stir fry until softened. Toss in chicken breast and stir fry until it’s cooked 3 quarters through. Then take off heat, place the mixture onto a plate and cover with foil.\r\nAdd broccoli, cauliflower and carrot to pan and stir fry. To help steam vegetables, add water and cover with a lid. Once you’re satisfied, place chicken and onion back to pan and then add sauce mix.\r\nToss in corn flour and water mixture to thicken.\r\nServe with steamed rice.', 3, '', '2016-06-03 03:14:52', '2016-06-03 03:14:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `bmi_results`
--
ALTER TABLE `bmi_results`
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
-- Indexes for table `cms_posts`
--
ALTER TABLE `cms_posts`
  ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `bmi_results`
--
ALTER TABLE `bmi_results`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cms_about`
--
ALTER TABLE `cms_about`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cms_contact`
--
ALTER TABLE `cms_contact`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cms_home`
--
ALTER TABLE `cms_home`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cms_posts`
--
ALTER TABLE `cms_posts`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
