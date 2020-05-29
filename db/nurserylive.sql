-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 22, 2020 at 05:26 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nurserylive`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about_us` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `about_us`, `created_at`, `updated_at`) VALUES
(1, '&nbsp;<p><strong>Introduction</strong></p> \r\n\r\n<hr>\r\n<p>By accessing or using our Website located at \r\nwww.tourarounds.com(“Website”) in any way or downloading, installing or \r\nusing our website server including but not limited to our products or \r\naccessing software supplied (collectively, the “Services”) by \r\nTourarounds or clicking on a button or taking similar action to signify \r\nyour affirmative acceptance of this Agreement, you hereby represent \r\nthat:</p>\r\n\r\n<ul><li>You have read, understood, and agree to be bound by this Agreement \r\nand any future amendments and additions to this Agreement as published \r\nfrom time to time at www.tourarounds.com.</li><li>You are of legal age in the jurisdiction in which you reside to form a binding contract with Tourarounds.</li></ul>\r\n\r\n<p>Services provided by Tourarounds.com shall be included but not \r\nlimited to technology platforms such as Website or that shall enable the\r\n users to submit their User data for getting consultancy on application \r\nof passport or any other services offered through the URL \r\nwww.tourarounds.com; wherein a user can provide their user data and \r\nrequest consultancy for applying a new passport or renewal of passport \r\nby paying our consultancy charges.</p>\r\n\r\n<p>The terms “you,” “user” and “users” refer to all individuals and \r\nother persons who access or use of our services, including, without \r\nlimitation, any companies, organizations, or other legal entities that \r\nregister accounts or otherwise access or use the services through their \r\nrespective employees, agents or representatives. Except as otherwise \r\nprovided herein,<strong>&nbsp;IF YOU DO NOT AGREE TO BE BOUND BY THE AGREEMENT, YOU MAY NOT ACCESS OR USE THE WEBSITE</strong></p>\r\n\r\n<p><strong>1. GEN Information</strong></p>\r\n\r\n<hr>\r\n<p>PLEASE READ THESE TERMS AND CONDITIONS OF USE (“Agreement”) \r\nCAREFULLY. BY USING THE SERVICES, YOU AGREE TO BE BOUND BY ALL OF THE \r\nTERMS AND CONDITIONS OF USE MENTIONED BELOW.</p>\r\n\r\n<p><strong>1.1</strong>&nbsp;These Terms &amp; Conditions of Use (“Terms,” \r\nincluding our Privacy Policy, Cookie Policy and all other policies on \r\nour Website) define the terms and conditions under which you are allowed\r\n to use our services, and how we will treat your account with us.</p>\r\n\r\n<p><strong>2. Definitions</strong></p>\r\n\r\n<hr>\r\n<p><strong>2.1</strong>&nbsp;Intellectual Property Rights mean and include \r\nwithout limitation all copyrights, patents, trademarks, trade secrets \r\nand other related documents and shall remain, the sole and exclusive \r\nproperty of Tourarounds.com</p>\r\n\r\n<p><strong>2.2</strong>&nbsp;Third parties include but are not limited to \r\ndeveloper, hosting, google analytics &amp; search engine providers, \r\npayment providers.</p>\r\n\r\n<p><strong>2.3</strong>&nbsp;“User(s)” (hereinafter collectively referred to as “You”, “Your”, “User”), means our user(s) who use our Services</p>\r\n\r\n<p><strong>2.4</strong>&nbsp;“User Content” means all electronic data, text, \r\nmessages or other materials, including personal data of Users, submitted\r\n to the Service(s) by You in connection with Your use of the Service(s).</p>\r\n\r\n<p><strong>2.5</strong>&nbsp;“Applicable Data Protection Law” means Information Technology Act 2008 (IT Act)</p>\r\n\r\n<p><strong>Scope:</strong></p>\r\n\r\n<p>This term of use covers the below mentioned:</p>\r\n\r\n<ul><li>Eligibility</li><li>Contractual Relationship</li><li>License Grant</li><li>Content Rights</li><li>Third Party Interaction</li><li>Prohibited Use</li><li>User Data Access</li><li>User Requirements &amp; Conduct</li><li>Payment and Commercial Terms</li><li>Intellectual Property Rights</li><li>Third Party Intellectual Property Rights</li><li>Notice of Copyright or Intellectual Property Infringement</li><li>Text Messaging &amp; Promotional Codes</li><li>Network Access &amp; Devices</li><li>Disclaimers &amp; Limitation of Liability</li><li>Indemnity</li><li>Severability</li><li>Changes to Terms &amp; Conditions</li><li>Entire Agreement</li><li>Governing Laws</li><li>Compliance with laws</li><li>Disputes</li><li>Binding Individual Arbitration</li><li>Other Provisions</li><li>Cookies</li><li>Updates to services</li><li>No Changes in Terms at your request</li><li>Contact Information</li></ul>\r\n\r\n<p><strong>3. Eligibility</strong></p>\r\n\r\n<hr>\r\n<p>To use our services, you must:</p>\r\n\r\n<p><strong>3.1</strong>&nbsp;be at least Eighteen (18) years old.</p>\r\n\r\n<p><strong>3.2</strong>&nbsp;complete the filling form process;</p>\r\n\r\n<p><strong>3.3</strong>&nbsp;agree to the Terms and</p>\r\n\r\n<p><strong>3.4</strong>&nbsp;provide true, complete and up to date contact \r\ninformation. By using our services, you represent and warrant that you \r\nmeet all the requirements listed above and that you won’t use our \r\nservices in a way that violates any laws or regulations. (Representing \r\nand warranting is like making a legally enforceable promise.) \r\nTourarounds.com may refuse service, close accounts of any users, and \r\nchange eligibility requirements at any time.</p>', '2020-01-03 06:26:19', '2020-01-03 01:35:18');

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
CREATE TABLE IF NOT EXISTS `addresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `alternate_phone` varchar(25) DEFAULT NULL,
  `address_line_one` varchar(255) DEFAULT NULL,
  `address_line_two` varchar(255) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `landmark` varchar(255) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `pin` varchar(20) DEFAULT NULL,
  `type_of_address` varchar(100) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `name`, `phone`, `alternate_phone`, `address_line_one`, `address_line_two`, `city`, `landmark`, `state`, `pin`, `type_of_address`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '875421', '8745120', 'Commercial Belt', 'Metro Station', 'Greater noida', 'Gaon', 'UP', '8520741', 'office', 1, '2020-01-09 06:43:49', '2020-01-09 06:43:49'),
(2, 'Admin', NULL, NULL, 'Alpha 1', 'Commercial Belt', 'Morena', 'dfgh', 'MP', '7410', 'home', 1, '2020-01-10 01:38:05', '2020-01-10 01:38:05');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(9, 1, 5, 4, '2020-01-06 03:27:05', '2020-01-06 03:27:32'),
(11, 1, 6, 1, '2020-01-09 06:45:27', '2020-01-09 06:45:27');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT NULL,
  `parent_category` varchar(150) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `parent_category`, `description`, `image`, `created_at`, `updated_at`) VALUES
(22, 'bulbs', NULL, NULL, 'assets/parent/parent1577096472.png', '2019-12-23 04:51:12', '2019-12-23 04:51:12'),
(23, 'pots & planters', NULL, NULL, 'assets/parent/parent1577096503.png', '2019-12-23 04:51:43', '2019-12-23 04:51:43'),
(24, 'pebbles', NULL, NULL, 'assets/parent/parent1577096532.png', '2019-12-23 04:52:12', '2019-12-23 04:52:12'),
(25, 'soil & fertilizers', NULL, NULL, 'assets/parent/parent1577096556.png', '2019-12-23 04:52:37', '2019-12-23 04:52:37'),
(26, 'gifts', NULL, NULL, 'assets/parent/parent1577096602.png', '2019-12-23 04:53:22', '2019-12-23 04:53:22'),
(27, 'garden accessories', NULL, NULL, 'assets/parent/parent1577096632.png', '2019-12-23 04:53:52', '2019-12-23 04:53:52'),
(28, 'air plants', 'plants', 'One touch of nature makes the whole world lovely. Make your world elegant and beautiful with the overwhelming tillandsia air plant.', 'assets/subcategory/subcategory1577096836.jpeg', '2019-12-23 04:57:17', '2019-12-23 05:00:16'),
(21, 'seeds', NULL, NULL, 'assets/parent/parent1577096326.jpeg', '2019-12-23 04:48:46', '2019-12-23 04:48:46'),
(20, 'plantscaping', NULL, NULL, 'assets/parent/parent1577096291.jpeg', '2019-12-23 04:48:11', '2019-12-23 04:48:11'),
(19, 'plants', NULL, NULL, 'assets/parent/parent1577096215.png', '2019-12-23 04:46:55', '2019-12-23 04:46:55'),
(29, 'creeper plants', 'plants', 'Morus, a genus of flowering plants commonly known as mulberries', 'assets/subcategory/subcategory1577097131.jpeg', '2019-12-23 05:02:11', '2019-12-24 05:19:29'),
(30, 'climber plants', 'plants', 'Mexican mint, Patharchur, Ajwain is with a pungent oregano-like flavor and odor.', 'assets/subcategory/subcategory1577097207.jpeg', '2019-12-23 05:03:27', '2019-12-24 05:19:11'),
(31, 'areca palm (small)', 'plants', 'This palm tree, with its long, graceful feather-shaped fronds, will add a tropical feel to your home and is especially well suited for screened patios and atrium.', 'assets/subcategory/subcategory1577097307.jpeg', '2019-12-23 05:05:07', '2019-12-23 05:05:07'),
(32, 'aquatic plants', 'plants', 'Kokedama is an crafted Japanese Hanging Moss Ball. It is a truly unique way of displaying your favorite plants and creating an indoor plant feature.', 'assets/subcategory/subcategory1577097438.jpeg', '2019-12-23 05:07:18', '2019-12-24 05:18:27'),
(33, 'monsoon special', 'plantscaping', 'This pack contains best 3 plants to grow in summer season + 3 Pots + Pebbles. Enjoy the beauty of plants that can also purify air and maintain humidity', 'assets/subcategory/subcategory1577097590.jpeg', '2019-12-23 05:09:50', '2019-12-24 05:17:29'),
(34, 'micro garden', 'plantscaping', 'This pack contains 3 different varieties of Money plant + 3 pots. An ideal pack that can be gifted in the hopes of bringing prosperity to our near and dear ones.', 'assets/subcategory/subcategory1577097658.jpeg', '2019-12-23 05:10:58', '2019-12-24 05:16:09'),
(35, 'flowering plants packs', 'plantscaping', 'This pack contains 5 plants + 5 colored pots. Enjoy Gardening in a healthy way with this special new year plants pack.', 'assets/subcategory/subcategory1577097737.jpeg', '2019-12-23 05:12:17', '2019-12-24 05:15:42'),
(36, 'cactus n succulents packs', 'plantscaping', 'This pack contains 3 air purifier plants + 3 colored pots.Luckily, there are a number of houseplants that act as efficient purifiers.', 'assets/subcategory/subcategory1577097858.jpeg', '2019-12-23 05:14:18', '2019-12-24 05:15:21'),
(37, 'air purifying plants packs', 'plantscaping', 'Perfect indoor plants while considering your air conditioned office environment.', 'assets/subcategory/subcategory1577097908.jpeg', '2019-12-23 05:15:08', '2019-12-24 05:14:58'),
(38, 'rainy sowing vegetable', 'seeds', 'Moringa oleifera (synonym: Moringa pterygosperma) is the most widely cultivated species of the genus Moringa, which is the only genus in the family Moringaceae.', 'assets/subcategory/subcategory1577098116.png', '2019-12-23 05:18:36', '2019-12-24 05:14:27'),
(39, 'indian vegetable seeds', 'seeds', 'Beetroot is able to provide you with anti-cancer and heart-protection properties thanks to its red pigments. Easy to grow,it is one of the top 10 vegetables grown in the home garden.', 'assets/subcategory/subcategory1577098168.png', '2019-12-23 05:19:28', '2019-12-24 05:11:42'),
(40, 'flowering plant seeds', 'seeds', 'Balsam flower resemble with mini roses thickly spaced petals and tones. The seed packet contains approx. 35 seeds', 'assets/subcategory/subcategory1577098231.jpeg', '2019-12-23 05:20:31', '2019-12-24 05:12:29'),
(41, 'flower', 'seeds', 'In India marigold is one of the most commonly grown flowers and used extensively on religious and social functions in different forms.', 'assets/subcategory/subcategory1577098579.jpeg', '2019-12-23 05:26:19', '2019-12-24 05:11:13'),
(42, 'fruits', 'seeds', 'Everyone seems to love juicy watermelon in the summertime.', 'assets/subcategory/subcategory1577098678.jpeg', '2019-12-23 05:27:58', '2019-12-24 05:10:42'),
(43, 'plastic miniature garden toys', 'garden accessories', 'Get creative and give an interesting look to your garden with these amazing miniature toys.', 'assets/subcategory/subcategory1577098799.jpeg', '2019-12-23 05:29:59', '2019-12-24 03:38:36'),
(44, 'garden toys', 'garden accessories', 'Get creative and give an interesting look to your garden with these amazing miniature toys.', 'assets/subcategory/subcategory1577098870.jpeg', '2019-12-23 05:31:10', '2019-12-24 03:38:13'),
(45, 'gardening tools', 'garden accessories', 'This special coir pole provides support to climbers, creepers, vines, small shrubs etc. They also retains water in them avoiding dessication in growing plant parts.', 'assets/subcategory/subcategory1577099001.jpeg', '2019-12-23 05:33:21', '2019-12-24 03:37:51'),
(46, 'miniature garden toys', 'garden accessories', 'Rivulite Aqua is a home garden do it yourself irrigation system with timer. Now forget about watering garden plants with this fit set forget pack.', 'assets/subcategory/subcategory1577099047.jpeg', '2019-12-23 05:34:07', '2019-12-24 03:36:58'),
(47, 'gifts for birthday', 'gifts', 'This single gift pack contains 1 Money plant (green) along with plastic pot, a greeting card, and a goody bag.', 'assets/subcategory/subcategory1577099180.png', '2019-12-23 05:36:20', '2019-12-24 03:36:14'),
(48, 'gifts for special days', 'gifts', 'Birthday special money plant contains money plant, birthday flag, and the colored pot.', 'assets/subcategory/subcategory1577099234.jpeg', '2019-12-23 05:37:14', '2019-12-24 03:35:49'),
(49, 'gifts for office', 'gifts', 'The pack of Peperomia plant with Thank you fag which you can gift for say thankfulness.', 'assets/subcategory/subcategory1577099278.jpeg', '2019-12-23 05:37:58', '2019-12-24 03:35:19'),
(50, 'gifts for festival', 'gifts', 'Wish good luck to your loved ones with Lucky bamboo plant in plastic pot with a laughing buddha idol.', 'assets/subcategory/subcategory1577099322.jpeg', '2019-12-23 05:38:42', '2019-12-24 03:34:59'),
(51, 'gifts for events', 'gifts', 'A real friend is one who walks in when the rest of the world walks out. Celebrate this eternal bond by gifting an air-purifying Syngonium in a best friend printed mug.', 'assets/subcategory/subcategory1577099373.jpeg', '2019-12-23 05:39:33', '2019-12-24 03:34:28'),
(52, 'succulent booster', 'soil & fertilizers', 'Plant O Boost overall growth booster is the best in class product for the growth of the palnt. It is easy to use and very effective.', 'assets/subcategory/subcategory1577099460.jpeg', '2019-12-23 05:41:00', '2019-12-24 03:33:46'),
(53, 'plant o boost', 'soil & fertilizers', 'Plant O Boost flower booster is the best in class product for the abundance of flowers. It is easy to use and very effective.', 'assets/subcategory/subcategory1577099504.jpeg', '2019-12-23 05:41:44', '2019-12-24 03:32:25'),
(54, 'toprose', 'soil & fertilizers', 'Toprose improves the Rose flower quality and quantity base. This is especially for Rose plants.', 'assets/subcategory/subcategory1577099551.jpeg', '2019-12-23 05:42:31', '2019-12-24 03:32:11'),
(55, 'biogrow', 'soil & fertilizers', 'Bio-Grow is a all purpose organic manure which helps to improve plant\'s vegetative growth and aids in enhancing flowering, and fruiting.', 'assets/subcategory/subcategory1577099626.jpeg', '2019-12-23 05:43:46', '2019-12-24 03:31:35'),
(56, 'super granite pebbles', 'pebbles', 'Simple gardens may be indoor or outdoor can be transformed into beautiful ones with these wonderful pebbles', 'assets/subcategory/subcategory1577099710.jpeg', '2019-12-23 05:45:10', '2019-12-24 03:31:16'),
(57, 'aquarium pebbles', 'pebbles', 'Simple gardens may be indoor or outdoor can be transformed into beautiful ones with these wonderful pebbles', 'assets/subcategory/subcategory1577099788.jpeg', '2019-12-23 05:46:28', '2019-12-24 03:30:56'),
(58, 'aquarium pebbles', 'pebbles', 'Simple gardens may be indoor or outdoor can be transformed into beautiful ones with these wonderful pebbles.', 'assets/subcategory/subcategory1577099861.jpeg', '2019-12-23 05:47:41', '2019-12-24 03:30:39'),
(59, 'aquarium pebbles', 'pebbles', 'Simple gardens may be indoor or outdoor can be transformed into beautiful ones with these wonderful pebbles', 'assets/subcategory/subcategory1577099926.jpeg', '2019-12-23 05:48:46', '2019-12-24 03:30:23'),
(60, 'pebbles', 'pebbles', 'Simple gardens may be indoor or outdoor can be transformed into beautiful ones with these wonderful pebbles', 'assets/subcategory/subcategory1577099997.jpeg', '2019-12-23 05:49:42', '2019-12-24 03:30:10'),
(61, 'ceramic pot', 'pots & planters', 'Decorative Ceramic pots can impart a natural and beautiful look to any garden. Use these classic pots which are suitable for your requirement and provides considerable durability.', 'assets/subcategory/subcategory1577100052.jpeg', '2019-12-23 05:50:52', '2019-12-24 03:29:55'),
(62, 'stack planters', 'pots & planters', 'Decorative Ceramic pots can impart a natural and beautiful look to any garden. Use these classic pots which are suitable for your requirement and provides considerable durability.', 'assets/subcategory/subcategory1577100108.jpeg', '2019-12-23 05:51:48', '2019-12-24 03:29:29'),
(63, 'grower planters', 'pots & planters', 'Decorative Ceramic pots can impart a natural and beautiful look to any garden. Use these classic pots which are suitable for your requirement and provides considerable durability.', 'assets/subcategory/subcategory1577100161.jpeg', '2019-12-23 05:52:41', '2019-12-24 03:28:37'),
(64, 'bonsai planters', 'pots & planters', 'Decorative Ceramic pots can impart a natural and beautiful look to any garden. Use these classic pots which are suitable for your requirement and provides considerable durability.', 'assets/subcategory/subcategory1577100224.jpeg', '2019-12-23 05:53:44', '2019-12-24 03:28:19'),
(65, 'anemone bulbs', 'bulbs', 'Anemone flower can beautify every place with its simplicity and beautiful scent.', 'assets/subcategory/subcategory1577100283.jpeg', '2019-12-23 05:54:43', '2019-12-24 03:25:18'),
(66, 'daffodil bulbs', 'bulbs', 'The pack contains Asiatic Lily, Amiga Lily (Orange)', 'assets/subcategory/subcategory1577100348.png', '2019-12-23 05:55:48', '2019-12-24 03:24:56'),
(67, 'caladium bulbs', 'bulbs', 'The pack contains Caladium (Red, Wine, Green)', 'assets/subcategory/subcategory1577100429.png', '2019-12-23 05:57:09', '2019-12-24 03:24:27'),
(68, 'anemone flower bulbs', 'bulbs', 'Showy plant with beautiful large long lasting flowers, ideal for growing in pots.', 'assets/subcategory/subcategory1577100470.jpeg', '2019-12-23 05:57:50', '2019-12-24 03:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) DEFAULT NULL,
  `address_one` varchar(255) DEFAULT NULL,
  `contact_number` varchar(255) DEFAULT NULL,
  `contact_number_one` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `address_one`, `contact_number`, `contact_number_one`, `email`, `fax`, `created_at`, `updated_at`) VALUES
(1, 'Pari-chowk Noida', 'Greater Noida', '1234567890', '1234567890', 'support@gmail.com', '123456789', '2020-01-03 06:15:22', '2020-01-03 05:45:45');

-- --------------------------------------------------------

--
-- Table structure for table `contact_forms`
--

DROP TABLE IF EXISTS `contact_forms`;
CREATE TABLE IF NOT EXISTS `contact_forms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) DEFAULT NULL,
  `lname` varchar(200) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `message` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
CREATE TABLE IF NOT EXISTS `faqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `active` int(11) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `active`, `created_at`, `updated_at`) VALUES
(5, 'qwsdfg', 'qwedffg', 0, '2020-01-02 07:04:15', '2020-01-06 01:21:55'),
(4, 'qwd', 'qwedsdfgv', 0, '2020-01-02 06:52:06', '2020-01-03 05:45:26');

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

DROP TABLE IF EXISTS `footers`;
CREATE TABLE IF NOT EXISTS `footers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `gmail` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `pinterest` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `content`, `facebook`, `gmail`, `twitter`, `instagram`, `pinterest`, `created_at`, `updated_at`) VALUES
(1, 'Contrary to popular belief, Lorem Ipsumsw is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,', 'www.facebook.com', 'www.gmail.com', 'www.twitter.com', 'www.instagram.com', 'www.pinerest.com', '2020-01-03 05:52:54', '2020-01-06 01:18:50');

-- --------------------------------------------------------

--
-- Table structure for table `header_menus`
--

DROP TABLE IF EXISTS `header_menus`;
CREATE TABLE IF NOT EXISTS `header_menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `dropdown` varchar(50) NOT NULL,
  `layout` varchar(50) DEFAULT NULL,
  `subcategory` json DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header_menus`
--

INSERT INTO `header_menus` (`id`, `item_name`, `category`, `dropdown`, `layout`, `subcategory`, `image`, `created_at`, `updated_at`) VALUES
(4, 'blah2', 'Flower', 'enable', 'four', '[{\"title\": \"asd\", \"sub_cat\": [{\"link\": \"http://www.godawariecom.com/category/Flower\", \"name\": \"Sun Flower\"}]}, {\"title\": \"asdf\", \"sub_cat\": [{\"link\": \"http://www.godawariecom.com/category/Flower\", \"name\": \"Water Lili\"}]}, {\"title\": \"safcasdf\", \"sub_cat\": [{\"link\": \"http://www.godawariecom.com/category/Flower\", \"name\": \"Rose\"}]}, {\"title\": \"asdc\", \"sub_cat\": [{\"link\": \"http://www.godawariecom.com/category/Flower\", \"name\": \"Water Lili\"}]}]', 'assets/header/header1576741518.png', '2019-12-19 02:15:18', '2019-12-19 02:15:18'),
(5, 'Trees1', 'Flower', 'enable', 'six', '[{\"title\": \"Neem tree\", \"sub_cat\": [{\"link\": \"http://www.godawariecom.com/category/Flower\", \"name\": \"Sun Flower\"}]}, {\"title\": \"Peeple\", \"sub_cat\": [{\"link\": \"http://www.godawariecom.com/category/Flower\", \"name\": \"Water Lili\"}]}, {\"title\": \"Banana\", \"sub_cat\": [{\"link\": \"http://www.godawariecom.com/category/Flower\", \"name\": \"Rose\"}]}, {\"title\": \"mango\", \"sub_cat\": [{\"link\": \"http://www.godawariecom.com/category/Flower\", \"name\": \"Sun Flower\"}, {\"link\": \"http://www.godawariecom.com/category/Flower\", \"name\": \"Water Lili\"}]}, {\"title\": \"Bargad\", \"sub_cat\": [{\"link\": \"http://www.godawariecom.com/category/Flower\", \"name\": \"Water Lili\"}, {\"link\": \"http://www.godawariecom.com/category/Flower\", \"name\": \"Rose\"}]}, {\"title\": \"Banyan\", \"sub_cat\": [{\"link\": \"http://www.godawariecom.com/category/Flower\", \"name\": \"Sun Flower\"}, {\"link\": \"http://www.godawariecom.com/category/Flower\", \"name\": \"Water Lili\"}, {\"link\": \"http://www.godawariecom.com/category/Flower\", \"name\": \"Rose\"}]}]', 'assets/header/header157674526211.jpeg,assets/header/header157674526321.jpeg', '2019-12-19 03:17:43', '2019-12-19 03:17:43'),
(6, 'plants one', 'Flower', 'enable', 'four', '[{\"title\": \"rtyu\", \"sub_cat\": [{\"link\": \"http://www.godawariecom.com/category/Flower\", \"name\": \"Sun Flower\"}]}, {\"title\": \"rk\", \"sub_cat\": [{\"link\": \"http://www.godawariecom.com/category/Flower\", \"name\": \"Water Lili\"}]}, {\"title\": \"rohit\", \"sub_cat\": [{\"link\": \"http://www.godawariecom.com/category/Flower\", \"name\": \"Rose\"}]}, {\"title\": \"vinod\", \"sub_cat\": [{\"link\": \"http://www.godawariecom.com/category/Flower\", \"name\": \"Sun Flower\"}]}]', 'assets/header/header1576747629.jpeg', '2019-12-19 03:57:09', '2019-12-19 03:57:09'),
(8, 'plants one2', 'Flower', 'disable', NULL, NULL, NULL, '2019-12-19 04:01:39', '2019-12-19 04:01:39'),
(9, 'Home', 'pebbles', 'disable', NULL, NULL, NULL, '2019-12-26 01:07:35', '2019-12-26 01:07:35'),
(10, 'plants one3', 'plants', 'enable', 'single', '{\"sub_cat\": [{\"link\": \"show-product/air+plants\", \"name\": \"air plants\"}, {\"link\": \"show-product/creeper+plants\", \"name\": \"creeper plants\"}]}', '', '2020-01-11 06:06:33', '2020-01-11 06:06:33'),
(13, 'hkk', 'plantscaping', 'enable', 'single', '{\"sub_cat\": [{\"link\": \"show-product/monsoon+special\", \"name\": \"monsoon special\"}, {\"link\": \"show-product/micro+garden\", \"name\": \"micro garden\"}, {\"link\": \"show-product/cactus+n+succulents+packs\", \"name\": \"cactus n succulents packs\"}]}', '', '2020-01-13 00:22:24', '2020-01-14 01:37:03'),
(14, 'ssk', 'plants', 'enable', 'six', '[{\"title\": \"tt1\", \"sub_cat\": [{\"link\": \"show-product/air+plants\", \"name\": \"air plants\"}, {\"link\": \"show-product/creeper+plants\", \"name\": \"creeper plants\"}]}, {\"title\": \"tt2\", \"sub_cat\": [{\"link\": \"show-product/air+plants\", \"name\": \"air plants\"}, {\"link\": \"show-product/climber+plants\", \"name\": \"climber plants\"}]}, {\"title\": \"tt3\", \"sub_cat\": [{\"link\": \"show-product/air+plants\", \"name\": \"air plants\"}, {\"link\": \"show-product/aquatic+plants\", \"name\": \"aquatic plants\"}]}, {\"title\": \"tt4\", \"sub_cat\": [{\"link\": \"show-product/air+plants\", \"name\": \"air plants\"}, {\"link\": \"show-product/aquatic+plants\", \"name\": \"aquatic plants\"}]}, {\"title\": \"tt5\", \"sub_cat\": [{\"link\": \"show-product/creeper+plants\", \"name\": \"creeper plants\"}, {\"link\": \"show-product/climber+plants\", \"name\": \"climber plants\"}, {\"link\": \"show-product/areca+palm+%28small%29\", \"name\": \"areca palm (small)\"}]}, {\"title\": \"tt6\", \"sub_cat\": [{\"link\": \"show-product/air+plants\", \"name\": \"air plants\"}, {\"link\": \"show-product/creeper+plants\", \"name\": \"creeper plants\"}]}]', 'assets/header/header1578943565-01.jpeg,assets/header/header1578943575-01.jpeg', '2020-01-13 05:52:29', '2020-01-13 13:56:15'),
(12, 'toes', 'seeds', 'enable', 'four', '[{\"title\": \"himanshu1\", \"sub_cat\": [{\"link\": \"show-product/creeper+plants\", \"name\": \"creeper plants\"}, {\"link\": \"show-product/climber+plants\", \"name\": \"climber plants\"}]}, {\"title\": \"ritik2\", \"sub_cat\": [{\"link\": \"show-product/air+plants\", \"name\": \"air plants\"}, {\"link\": \"show-product/creeper+plants\", \"name\": \"creeper plants\"}, {\"link\": \"show-product/climber+plants\", \"name\": \"climber plants\"}]}, {\"title\": \"rohit1\", \"sub_cat\": [{\"link\": \"show-product/air+plants\", \"name\": \"air plants\"}, {\"link\": \"show-product/areca+palm+%28small%29\", \"name\": \"areca palm (small)\"}, {\"link\": \"show-product/aquatic+plants\", \"name\": \"aquatic plants\"}]}, {\"title\": \"vinod\", \"sub_cat\": [{\"link\": \"show-product/creeper+plants\", \"name\": \"creeper plants\"}, {\"link\": \"show-product/aquatic+plants\", \"name\": \"aquatic plants\"}]}]', 'assets/header/header1578945145.jpeg', '2020-01-12 05:18:15', '2020-01-13 14:22:25');

-- --------------------------------------------------------

--
-- Table structure for table `home_sections`
--

DROP TABLE IF EXISTS `home_sections`;
CREATE TABLE IF NOT EXISTS `home_sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `layout_name` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `image5` varchar(255) DEFAULT NULL,
  `image6` varchar(255) DEFAULT NULL,
  `image7` varchar(255) DEFAULT NULL,
  `image8` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_sections`
--

INSERT INTO `home_sections` (`id`, `layout_name`, `title`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`, `created_at`, `updated_at`) VALUES
(1, 'three', 'Beautiful Flowering Plants', '{\"image\":\"assets/section/section15785540921.png\",\"img_title\":\"Dahlia\",\"link\":\"show-product/flower\"}', '{\"image\":\"assets/section/section15785540932.png\",\"img_title\":\"Rose\",\"link\":\"show-category/plants\"}', '{\"image\":\"assets/section/section15785540933.png\",\"img_title\":\"Flowering\",\"link\":\"show-product/flowering+plants+packs\"}', NULL, NULL, NULL, NULL, NULL, '2020-01-09 01:44:53', '2020-01-09 01:44:53'),
(2, 'four', 'Top Searched Plant Categories', '{\"image\":\"assets/section/section15785542191.jpeg\",\"img_title\":\"Table Tops\",\"link\":\"show-category/soil+%26+fertilizers\"}', '{\"image\":\"assets/section/section15785542192.jpeg\",\"img_title\":\"Succulents\",\"link\":\"show-product/stack+planters\"}', '{\"image\":\"assets/section/section15785542193.jpeg\",\"img_title\":\"Lily\",\"link\":\"show-product/air+plants\"}', '{\"image\":\"assets/section/section15785542194.jpeg\",\"img_title\":\"Frgnant\",\"link\":\"show-category/garden+accessories\"}', NULL, NULL, NULL, NULL, '2020-01-09 01:46:59', '2020-01-09 01:46:59'),
(3, 'six', 'What Our Store Offers', '{\"image\":\"assets/section/section15785543161.png\",\"img_title\":\"Table Tops\",\"link\":\"show-category/pebbles\"}', '{\"image\":\"assets/section/section15785543162.png\",\"img_title\":\"Succulents\",\"link\":\"show-category/pots+%26+planters\"}', '{\"image\":\"assets/section/section15785543163.png\",\"img_title\":\"Lily\",\"link\":\"show-product/caladium+bulbs\"}', '{\"image\":\"assets/section/section15785543161.png\",\"img_title\":\"Table Tops\",\"link\":\"show-category/pebbles\"}', '{\"image\":\"assets/section/section15785543165.png\",\"img_title\":\"Good Luck\",\"link\":\"show-product/air+plants\"}', '{\"image\":\"assets/section/section15785543166.png\",\"img_title\":\"Browse More\",\"link\":\"show-category/plantscaping\"}', NULL, NULL, '2020-01-09 01:48:36', '2020-01-09 01:48:36'),
(4, 'six', 'Beautiful Flowering Plants', '{\"image\":\"assets/section/section15785545441.png\",\"img_title\":\"Table Tops\",\"link\":\"show-product/aquarium+pebbles\"}', '{\"image\":\"assets/section/section15785545442.png\",\"img_title\":\"Rose\",\"link\":\"show-category/gifts\"}', '{\"image\":\"assets/section/section15785545443.png\",\"img_title\":\"Flowering\",\"link\":\"show-category/pots+%26+planters\"}', '{\"image\":\"assets/section/section15785545444.png\",\"img_title\":\"Frgnant\",\"link\":\"show-product/gifts+for+birthday\"}', '{\"image\":\"assets/section/section15785545445.png\",\"img_title\":\"Good Luck\",\"link\":\"show-category/bulbs\"}', '{\"image\":\"assets/section/section15785545446.png\",\"img_title\":\"Zinnia\",\"link\":\"show-category/pebbles\"}', NULL, NULL, '2020-01-09 01:52:24', '2020-01-09 01:52:24'),
(5, 'three', 'Beautiful Flowering Plants', '{\"image\":\"assets/section/section15792398561.jpeg\",\"img_title\":\"Table Tops\",\"category\":\"grower planters\",\"link\":\"show-product/grower+planters\"}', '{\"image\":\"assets/section/section15792398562.jpeg\",\"img_title\":\"Rose\",\"category\":\"bonsai planters\",\"link\":\"show-product/bonsai+planters\"}', '{\"image\":\"assets/section/section15792398563.jpeg\",\"img_title\":\"Lily\",\"category\":\"stack planters\",\"link\":\"show-product/stack+planters\"}', NULL, NULL, NULL, NULL, NULL, '2020-01-16 23:51:30', '2020-01-17 00:14:16');

-- --------------------------------------------------------

--
-- Table structure for table `layouts`
--

DROP TABLE IF EXISTS `layouts`;
CREATE TABLE IF NOT EXISTS `layouts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `layout_name` varchar(200) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `image5` varchar(255) DEFAULT NULL,
  `image6` varchar(255) DEFAULT NULL,
  `image7` varchar(255) DEFAULT NULL,
  `image8` varchar(255) DEFAULT NULL,
  `image9` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layouts`
--

INSERT INTO `layouts` (`id`, `layout_name`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`, `image9`, `created_at`, `updated_at`) VALUES
(1, 'slider_layout', '{\"name\":\"assets/home/slider15785143091.png\",\"link\":\"show-category/plants\"}', '{\"name\":\"assets/home/slider15785143092.png\",\"link\":\"show-product/air+plants\"}', NULL, '{\"name\":\"assets/home/slider15785143094.png\",\"link\":\"show-category/soil+%26+fertilizers\"}', NULL, '{\"name\":\"assets/home/slider15785143096.png\",\"link\":\"show-category/pebbles\"}', NULL, NULL, '{\"name\":\"assets/home/slider15785143099.png\",\"link\":\"show-category/\"}', '2020-01-08 14:41:49', '2020-01-08 14:41:49'),
(2, 'layout_one', '{\"name\":\"assets/home/layout15785460741.png\",\"link\":\"show-category/plants\"}', '{\"name\":\"assets/home/layout15785460752.png\",\"link\":\"show-product/air+plants\"}', '{\"name\":\"assets/home/layout15785460753.png\",\"link\":\"show-product/stack+planters\"}', '{\"name\":\"assets/home/layout15785460754.png\",\"link\":\"show-product/succulent+booster\"}', '{\"name\":\"assets/home/layout15785460755.png\",\"link\":\"show-category/plantscaping\"}', '{\"name\":\"assets/home/layout15785460756.png\",\"link\":\"show-category/pebbles\"}', '{\"name\":\"assets/home/layout15785460757.png\",\"link\":\"show-product/bonsai+planters\"}', '{\"name\":\"assets/home/layout15785460758.png\",\"link\":\"show-category/bulbs\"}', '{\"name\":\"assets/home/layout15785460759.png\",\"link\":\"show-product/air+plants\"}', '2020-01-08 23:31:15', '2020-01-08 23:31:15');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) DEFAULT NULL,
  `product_price` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `address_id` varchar(50) DEFAULT NULL,
  `order_id` varchar(50) DEFAULT NULL,
  `sub_order_id` varchar(50) DEFAULT NULL,
  `payment_mode` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `vendor_id` varchar(50) DEFAULT NULL,
  `reason` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_name`, `product_price`, `price`, `quantity`, `user_id`, `address_id`, `order_id`, `sub_order_id`, `payment_mode`, `status`, `vendor_id`, `reason`, `created_at`, `updated_at`) VALUES
(1, 'plants  corporate gifts', '159', '318', '2', '1', '1', '15782895631', '157828956311', 'cod', 'Packed', '1', NULL, '2020-01-06 00:16:03', '2020-01-06 00:16:03');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `sidevar_category` varchar(255) NOT NULL,
  `image1` json DEFAULT NULL,
  `image2` json DEFAULT NULL,
  `image3` json DEFAULT NULL,
  `image4` json DEFAULT NULL,
  `image5` json DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `sidevar_category`, `image1`, `image2`, `image3`, `image4`, `image5`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'garden accessories,seeds,plantscaping,plants', NULL, NULL, NULL, NULL, NULL, '2019-12-24 05:53:53', '2020-01-09 23:56:09'),
(2, 'Mobile-View', 'fghj', '{\"link\": \"plants\", \"image\": \"assets/mobile/mobile1578657487.png\", \"title\": \"plant\"}', '{\"link\": \"seeds\", \"image\": \"assets/mobile/mobile15786574872.png\", \"title\": \"seed\"}', '{\"link\": \"pots+%26+planters\", \"image\": \"assets/mobile/mobile15786574873.png\", \"title\": \"flower\"}', '{\"link\": \"gifts\", \"image\": \"assets/mobile/mobile15786574874.png\", \"title\": \"pebbles\"}', '{\"link\": \"plantscaping\", \"image\": \"assets/mobile/mobile15786574875.png\", \"title\": \"plannscapping\"}', '2020-01-10 11:35:38', '2020-01-10 06:28:07');

-- --------------------------------------------------------

--
-- Table structure for table `policy_page`
--

DROP TABLE IF EXISTS `policy_page`;
CREATE TABLE IF NOT EXISTS `policy_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `term_condition` text,
  `privacy_policy` text,
  `return_policy` text,
  `refund_policy` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policy_page`
--

INSERT INTO `policy_page` (`id`, `term_condition`, `privacy_policy`, `return_policy`, `refund_policy`, `created_at`, `updated_at`) VALUES
(1, '<p><strong>Introduction</strong></p><p>Services provided by Tourarounds.com shall be included but not \r\nlimited to technology platforms such as Website or that shall enable the\r\n users to submit their User data for getting consultancy on application \r\nof passport or any other services offered through the URL \r\nwww.tourarounds.com; wherein a user can provide their user data and \r\nrequest consultancy for applying a new passport or renewal of passport \r\nby paying our consultancy charges.</p>\r\n\r\n<p>The terms “you,” “user” and “users” refer to all individuals and \r\nother persons who access or use of our services, including, without \r\nlimitation, any companies, organizations, or other legal entities that \r\nregister accounts or otherwise access or use the services through their \r\nrespective employees, agents or representatives. Except as otherwise \r\nprovided herein,<strong>&nbsp;IF YOU DO NOT AGREE TO BE BOUND BY THE AGREEMENT, YOU MAY NOT ACCESS OR USE THE WEBSITE</strong></p>\r\n\r\n<p><strong>1. GEN Information</strong></p>\r\n\r\n<hr>\r\n<p>PLEASE READ THESE TERMS AND CONDITIONS OF USE (“Agreement”) \r\nCAREFULLY. BY USING THE SERVICES, YOU AGREE TO BE BOUND BY ALL OF THE \r\nTERMS AND CONDITIONS OF USE MENTIONED BELOW.</p>\r\n\r\n<p><strong>1.1</strong>&nbsp;These Terms &amp; Conditions of Use (“Terms,” \r\nincluding our Privacy Policy, Cookie Policy and all other policies on \r\nour Website) define the terms and conditions under which you are allowed\r\n to use our services, and how we will treat your account with us.</p>\r\n\r\n<p><strong>2. Definitions</strong></p>\r\n\r\n<hr>\r\n<p><strong>2.1</strong>&nbsp;Intellectual Property Rights mean and include \r\nwithout limitation all copyrights, patents, trademarks, trade secrets \r\nand other related documents and shall remain, the sole and exclusive \r\nproperty of Tourarounds.com</p>\r\n\r\n<p><strong>2.2</strong>&nbsp;Third parties include but are not limited to \r\ndeveloper, hosting, google analytics &amp; search engine providers, \r\npayment providers.</p>\r\n\r\n<p><strong>2.3</strong>&nbsp;“User(s)” (hereinafter collectively referred to as “You”, “Your”, “User”), means our user(s) who use our Services</p>\r\n\r\n<p><strong>2.4</strong>&nbsp;“User Content” means all electronic data, text, \r\nmessages or other materials, including personal data of Users, submitted\r\n to the Service(s) by You in connection with Your use of the Service(s).</p>\r\n\r\n<p><strong>2.5</strong>&nbsp;“Applicable Data Protection Law” means Information Technology Act 2008 (IT Act)</p>\r\n\r\n<p><strong>Scope:</strong></p>\r\n\r\n<p>This term of use covers the below mentioned:</p>\r\n\r\n<ul><li>Eligibility</li><li>Contractual Relationship</li><li>License Grant</li><li>Content Rights</li><li>Third Party Interaction</li><li>Prohibited Use</li><li>User Data Access</li><li>User Requirements &amp; Conduct</li><li>Payment and Commercial Terms</li><li>Intellectual Property Rights</li><li>Third Party Intellectual Property Rights</li><li>Notice of Copyright or Intellectual Property Infringement</li><li>Text Messaging &amp; Promotional Codes</li><li>Network Access &amp; Devices</li><li>Disclaimers &amp; Limitation of Liability</li><li>Indemnity</li><li>Severability</li><li>Changes to Terms &amp; Conditions</li><li>Entire Agreement</li><li>Governing Laws</li><li>Compliance with laws</li><li>Disputes</li><li>Binding Individual Arbitration</li><li>Other Provisions</li><li>Cookies</li><li>Updates to services</li><li>No Changes in Terms at your request</li><li>Contact Information</li></ul>\r\n\r\n<p><strong>3. Eligibility</strong></p>\r\n\r\n<hr>\r\n<p>To use our services, you must:</p>\r\n\r\n<p><strong>3.1</strong>&nbsp;be at least Eighteen (18) years old.</p>\r\n\r\n<p><strong>3.2</strong>&nbsp;complete the filling form process;</p>\r\n\r\n<p><strong>3.3</strong>&nbsp;agree to the Terms and</p>\r\n\r\n<p><strong>3.4</strong>&nbsp;provide true, complete and up to date contact \r\ninformation. By using our services, you represent and warrant that you \r\nmeet all the requirements listed above and that you won’t use our \r\nservices in a way that violates any laws or regulations. (Representing \r\nand warranting is like making a legally enforceable promise.) \r\nTourarounds.com may refuse service, close accounts of any users, and \r\nchange eligibility requirements at any time.</p>', '<p><strong>Introduction</strong></p> \r\n\r\n<hr>\r\n<p>By accessing or using our Website located at \r\nwww.tourarounds.com(“Website”) in any way or downloading, installing or \r\nusing our website server including but not limited to our products or \r\naccessing software supplied (collectively, the “Services”) by \r\nTourarounds or clicking on a button or taking similar action to signify \r\nyour affirmative acceptance of this Agreement, you hereby represent \r\nthat:</p>\r\n\r\n<ul><li>You have read, understood, and agree to be bound by this Agreement \r\nand any future amendments and additions to this Agreement as published \r\nfrom time to time at www.tourarounds.com.</li><li>You are of legal age in the jurisdiction in which you reside to form a binding contract with Tourarounds.</li></ul>\r\n\r\n<p>Services provided by Tourarounds.com shall be included but not \r\nlimited to technology platforms such as Website or that shall enable the\r\n users to submit their User data for getting consultancy on application \r\nof passport or any other services offered through the URL \r\nwww.tourarounds.com; wherein a user can provide their user data and \r\nrequest consultancy for applying a new passport or renewal of passport \r\nby paying our consultancy charges.</p>\r\n\r\n<p>The terms “you,” “user” and “users” refer to all individuals and \r\nother persons who access or use of our services, including, without \r\nlimitation, any companies, organizations, or other legal entities that \r\nregister accounts or otherwise access or use the services through their \r\nrespective employees, agents or representatives. Except as otherwise \r\nprovided herein,<strong>&nbsp;IF YOU DO NOT AGREE TO BE BOUND BY THE AGREEMENT, YOU MAY NOT ACCESS OR USE THE WEBSITE</strong></p>\r\n\r\n<p><strong>1. GEN Information</strong></p>\r\n\r\n<hr>\r\n<p>PLEASE READ THESE TERMS AND CONDITIONS OF USE (“Agreement”) \r\nCAREFULLY. BY USING THE SERVICES, YOU AGREE TO BE BOUND BY ALL OF THE \r\nTERMS AND CONDITIONS OF USE MENTIONED BELOW.</p>\r\n\r\n<p><strong>1.1</strong>&nbsp;These Terms &amp; Conditions of Use (“Terms,” \r\nincluding our Privacy Policy, Cookie Policy and all other policies on \r\nour Website) define the terms and conditions under which you are allowed\r\n to use our services, and how we will treat your account with us.</p>\r\n\r\n<p><strong>2. Definitions</strong></p>\r\n\r\n<hr>\r\n<p><strong>2.1</strong>&nbsp;Intellectual Property Rights mean and include \r\nwithout limitation all copyrights, patents, trademarks, trade secrets \r\nand other related documents and shall remain, the sole and exclusive \r\nproperty of Tourarounds.com</p>\r\n\r\n<p><strong>2.2</strong>&nbsp;Third parties include but are not limited to \r\ndeveloper, hosting, google analytics &amp; search engine providers, \r\npayment providers.</p>\r\n\r\n<p><strong>2.3</strong>&nbsp;“User(s)” (hereinafter collectively referred to as “You”, “Your”, “User”), means our user(s) who use our Services</p>\r\n\r\n<p><strong>2.4</strong>&nbsp;“User Content” means all electronic data, text, \r\nmessages or other materials, including personal data of Users, submitted\r\n to the Service(s) by You in connection with Your use of the Service(s).</p>\r\n\r\n<p><strong>2.5</strong>&nbsp;“Applicable Data Protection Law” means Information Technology Act 2008 (IT Act)</p>\r\n\r\n<p><strong>Scope:</strong></p>\r\n\r\n<p>This term of use covers the below mentioned:</p>\r\n\r\n<ul><li>Eligibility</li><li>Contractual Relationship</li><li>License Grant</li><li>Content Rights</li><li>Third Party Interaction</li><li>Prohibited Use</li><li>User Data Access</li><li>User Requirements &amp; Conduct</li><li>Payment and Commercial Terms</li><li>Intellectual Property Rights</li><li>Third Party Intellectual Property Rights</li><li>Notice of Copyright or Intellectual Property Infringement</li><li>Text Messaging &amp; Promotional Codes</li><li>Network Access &amp; Devices</li><li>Disclaimers &amp; Limitation of Liability</li><li>Indemnity</li><li>Severability</li><li>Changes to Terms &amp; Conditions</li><li>Entire Agreement</li><li>Governing Laws</li><li>Compliance with laws</li><li>Disputes</li><li>Binding Individual Arbitration</li><li>Other Provisions</li><li>Cookies</li><li>Updates to services</li><li>No Changes in Terms at your request</li><li>Contact Information</li></ul>\r\n\r\n<p><strong>3. Eligibility</strong></p>\r\n\r\n<hr>\r\n<p>To use our services, you must:</p>\r\n\r\n<p><strong>3.1</strong>&nbsp;be at least Eighteen (18) years old.</p>\r\n\r\n<p><strong>3.2</strong>&nbsp;complete the filling form process;</p>\r\n\r\n<p><strong>3.3</strong>&nbsp;agree to the Terms and</p>\r\n\r\n<p><strong>3.4</strong>&nbsp;provide true, complete and up to date contact \r\ninformation. By using our services, you represent and warrant that you \r\nmeet all the requirements listed above and that you won’t use our \r\nservices in a way that violates any laws or regulations. (Representing \r\nand warranting is like making a legally enforceable promise.) \r\nTourarounds.com may refuse service, close accounts of any users, and \r\nchange eligibility requirements at any time.</p>', '<p><strong>Introduction</strong></p> \r\n\r\n<hr>\r\n<p>By accessing or using our Website located at \r\nwww.tourarounds.com(“Website”) in any way or downloading, installing or \r\nusing our website server including but not limited to our products or \r\naccessing software supplied (collectively, the “Services”) by \r\nTourarounds or clicking on a button or taking similar action to signify \r\nyour affirmative acceptance of this Agreement, you hereby represent \r\nthat:</p>\r\n\r\n<ul><li>You have read, understood, and agree to be bound by this Agreement \r\nand any future amendments and additions to this Agreement as published \r\nfrom time to time at www.tourarounds.com.</li><li>You are of legal age in the jurisdiction in which you reside to form a binding contract with Tourarounds.</li></ul>\r\n\r\n<p>Services provided by Tourarounds.com shall be included but not \r\nlimited to technology platforms such as Website or that shall enable the\r\n users to submit their User data for getting consultancy on application \r\nof passport or any other services offered through the URL \r\nwww.tourarounds.com; wherein a user can provide their user data and \r\nrequest consultancy for applying a new passport or renewal of passport \r\nby paying our consultancy charges.</p>\r\n\r\n<p>The terms “you,” “user” and “users” refer to all individuals and \r\nother persons who access or use of our services, including, without \r\nlimitation, any companies, organizations, or other legal entities that \r\nregister accounts or otherwise access or use the services through their \r\nrespective employees, agents or representatives. Except as otherwise \r\nprovided herein,<strong>&nbsp;IF YOU DO NOT AGREE TO BE BOUND BY THE AGREEMENT, YOU MAY NOT ACCESS OR USE THE WEBSITE</strong></p>\r\n\r\n<p><strong>1. GEN Information</strong></p>\r\n\r\n<hr>\r\n<p>PLEASE READ THESE TERMS AND CONDITIONS OF USE (“Agreement”) \r\nCAREFULLY. BY USING THE SERVICES, YOU AGREE TO BE BOUND BY ALL OF THE \r\nTERMS AND CONDITIONS OF USE MENTIONED BELOW.</p>\r\n\r\n<p><strong>1.1</strong>&nbsp;These Terms &amp; Conditions of Use (“Terms,” \r\nincluding our Privacy Policy, Cookie Policy and all other policies on \r\nour Website) define the terms and conditions under which you are allowed\r\n to use our services, and how we will treat your account with us.</p>\r\n\r\n<p><strong>2. Definitions</strong></p>\r\n\r\n<hr>\r\n<p><strong>2.1</strong>&nbsp;Intellectual Property Rights mean and include \r\nwithout limitation all copyrights, patents, trademarks, trade secrets \r\nand other related documents and shall remain, the sole and exclusive \r\nproperty of Tourarounds.com</p>\r\n\r\n<p><strong>2.2</strong>&nbsp;Third parties include but are not limited to \r\ndeveloper, hosting, google analytics &amp; search engine providers, \r\npayment providers.</p>\r\n\r\n<p><strong>2.3</strong>&nbsp;“User(s)” (hereinafter collectively referred to as “You”, “Your”, “User”), means our user(s) who use our Services</p>\r\n\r\n<p><strong>2.4</strong>&nbsp;“User Content” means all electronic data, text, \r\nmessages or other materials, including personal data of Users, submitted\r\n to the Service(s) by You in connection with Your use of the Service(s).</p>\r\n\r\n<p><strong>2.5</strong>&nbsp;“Applicable Data Protection Law” means Information Technology Act 2008 (IT Act)</p>\r\n\r\n<p><strong>Scope:</strong></p>\r\n\r\n<p>This term of use covers the below mentioned:</p>\r\n\r\n<ul><li>Eligibility</li><li>Contractual Relationship</li><li>License Grant</li><li>Content Rights</li><li>Third Party Interaction</li><li>Prohibited Use</li><li>User Data Access</li><li>User Requirements &amp; Conduct</li><li>Payment and Commercial Terms</li><li>Intellectual Property Rights</li><li>Third Party Intellectual Property Rights</li><li>Notice of Copyright or Intellectual Property Infringement</li><li>Text Messaging &amp; Promotional Codes</li><li>Network Access &amp; Devices</li><li>Disclaimers &amp; Limitation of Liability</li><li>Indemnity</li><li>Severability</li><li>Changes to Terms &amp; Conditions</li><li>Entire Agreement</li><li>Governing Laws</li><li>Compliance with laws</li><li>Disputes</li><li>Binding Individual Arbitration</li><li>Other Provisions</li><li>Cookies</li><li>Updates to services</li><li>No Changes in Terms at your request</li><li>Contact Information</li></ul>\r\n\r\n<p><strong>3. Eligibility</strong></p>\r\n\r\n<hr>\r\n<p>To use our services, you must:</p>\r\n\r\n<p><strong>3.1</strong>&nbsp;be at least Eighteen (18) years old.</p>\r\n\r\n<p><strong>3.2</strong>&nbsp;complete the filling form process;</p>\r\n\r\n<p><strong>3.3</strong>&nbsp;agree to the Terms and</p>\r\n\r\n<p><strong>3.4</strong>&nbsp;provide true, complete and up to date contact \r\ninformation. By using our services, you represent and warrant that you \r\nmeet all the requirements listed above and that you won’t use our \r\nservices in a way that violates any laws or regulations. (Representing \r\nand warranting is like making a legally enforceable promise.) \r\nTourarounds.com may refuse service, close accounts of any users, and \r\nchange eligibility requirements at any time.</p>', '<p><strong>Introduction</strong></p> \r\n\r\n<hr>\r\n<p>By accessing or using our Website located at \r\nwww.tourarounds.com(“Website”) in any way or downloading, installing or \r\nusing our website server including but not limited to our products or \r\naccessing software supplied (collectively, the “Services”) by \r\nTourarounds or clicking on a button or taking similar action to signify \r\nyour affirmative acceptance of this Agreement, you hereby represent \r\nthat:</p>\r\n\r\n<ul><li>You have read, understood, and agree to be bound by this Agreement \r\nand any future amendments and additions to this Agreement as published \r\nfrom time to time at www.tourarounds.com.</li><li>You are of legal age in the jurisdiction in which you reside to form a binding contract with Tourarounds.</li></ul>\r\n\r\n<p>Services provided by Tourarounds.com shall be included but not \r\nlimited to technology platforms such as Website or that shall enable the\r\n users to submit their User data for getting consultancy on application \r\nof passport or any other services offered through the URL \r\nwww.tourarounds.com; wherein a user can provide their user data and \r\nrequest consultancy for applying a new passport or renewal of passport \r\nby paying our consultancy charges.</p>\r\n\r\n<p>The terms “you,” “user” and “users” refer to all individuals and \r\nother persons who access or use of our services, including, without \r\nlimitation, any companies, organizations, or other legal entities that \r\nregister accounts or otherwise access or use the services through their \r\nrespective employees, agents or representatives. Except as otherwise \r\nprovided herein,<strong>&nbsp;IF YOU DO NOT AGREE TO BE BOUND BY THE AGREEMENT, YOU MAY NOT ACCESS OR USE THE WEBSITE</strong></p>\r\n\r\n<p><strong>1. GEN Information</strong></p>\r\n\r\n<hr>\r\n<p>PLEASE READ THESE TERMS AND CONDITIONS OF USE (“Agreement”) \r\nCAREFULLY. BY USING THE SERVICES, YOU AGREE TO BE BOUND BY ALL OF THE \r\nTERMS AND CONDITIONS OF USE MENTIONED BELOW.</p>\r\n\r\n<p><strong>1.1</strong>&nbsp;These Terms &amp; Conditions of Use (“Terms,” \r\nincluding our Privacy Policy, Cookie Policy and all other policies on \r\nour Website) define the terms and conditions under which you are allowed\r\n to use our services, and how we will treat your account with us.</p>\r\n\r\n<p><strong>2. Definitions</strong></p>\r\n\r\n<hr>\r\n<p><strong>2.1</strong>&nbsp;Intellectual Property Rights mean and include \r\nwithout limitation all copyrights, patents, trademarks, trade secrets \r\nand other related documents and shall remain, the sole and exclusive \r\nproperty of Tourarounds.com</p>\r\n\r\n<p><strong>2.2</strong>&nbsp;Third parties include but are not limited to \r\ndeveloper, hosting, google analytics &amp; search engine providers, \r\npayment providers.</p>\r\n\r\n<p><strong>2.3</strong>&nbsp;“User(s)” (hereinafter collectively referred to as “You”, “Your”, “User”), means our user(s) who use our Services</p>\r\n\r\n<p><strong>2.4</strong>&nbsp;“User Content” means all electronic data, text, \r\nmessages or other materials, including personal data of Users, submitted\r\n to the Service(s) by You in connection with Your use of the Service(s).</p>\r\n\r\n<p><strong>2.5</strong>&nbsp;“Applicable Data Protection Law” means Information Technology Act 2008 (IT Act)</p>\r\n\r\n<p><strong>Scope:</strong></p>\r\n\r\n<p>This term of use covers the below mentioned:</p>\r\n\r\n<ul><li>Eligibility</li><li>Contractual Relationship</li><li>License Grant</li><li>Content Rights</li><li>Third Party Interaction</li><li>Prohibited Use</li><li>User Data Access</li><li>User Requirements &amp; Conduct</li><li>Payment and Commercial Terms</li><li>Intellectual Property Rights</li><li>Third Party Intellectual Property Rights</li><li>Notice of Copyright or Intellectual Property Infringement</li><li>Text Messaging &amp; Promotional Codes</li><li>Network Access &amp; Devices</li><li>Disclaimers &amp; Limitation of Liability</li><li>Indemnity</li><li>Severability</li><li>Changes to Terms &amp; Conditions</li><li>Entire Agreement</li><li>Governing Laws</li><li>Compliance with laws</li><li>Disputes</li><li>Binding Individual Arbitration</li><li>Other Provisions</li><li>Cookies</li><li>Updates to services</li><li>No Changes in Terms at your request</li><li>Contact Information</li></ul>\r\n\r\n<p><strong>3. Eligibility</strong></p>\r\n\r\n<hr>\r\n<p>To use our services, you must:</p>\r\n\r\n<p><strong>3.1</strong>&nbsp;be at least Eighteen (18) years old.</p>\r\n\r\n<p><strong>3.2</strong>&nbsp;complete the filling form process;</p>\r\n\r\n<p><strong>3.3</strong>&nbsp;agree to the Terms and</p>\r\n\r\n<p><strong>3.4</strong>&nbsp;provide true, complete and up to date contact \r\ninformation. By using our services, you represent and warrant that you \r\nmeet all the requirements listed above and that you won’t use our \r\nservices in a way that violates any laws or regulations. (Representing \r\nand warranting is like making a legally enforceable promise.) \r\nTourarounds.com may refuse service, close accounts of any users, and \r\nchange eligibility requirements at any time.</p>', '2019-12-27 18:30:00', '2020-01-06 01:09:43');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `sold` varchar(100) DEFAULT NULL,
  `price` int(50) NOT NULL,
  `product_quantity` varchar(100) DEFAULT NULL,
  `type_of_product` varchar(50) DEFAULT NULL,
  `category` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `about_product_details` text,
  `image` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `sold`, `price`, `product_quantity`, `type_of_product`, `category`, `description`, `about_product_details`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 'living lantern', '100', 1999, NULL, NULL, 'air plants', '<p>Make your world elegant and beautiful with the Living Lantern air plant \r\nproduct which contains the copper accented metal wire holder with hardy \r\nIonantha and Brachycaulos tillandsia air plants</p>', '<b>Ionantha:</b>It is an extra adorable air plant features layers of the\r\n softest, fuzziest leaves. Absolutely unlike any other air plant. The \r\nsilvery-white colored \"fuzz\", also known as trichomes, naturally \r\nreflects sunlight, which essentially shields the plant from direct \r\nsunlight to help it from drying out.<br><br> <b>Brachycaulos:</b>This \r\nair plant is wide, thick with strong leaves that are an incredible and \r\nvibrant green, the Tillandsia Brachycaulos resembles like a pineapple \r\nfrom the top portion. It will produce many layers of strong leaves that \r\nchange their color as it grows. It will also develop luscious red and \r\npink hues when the plant blooms. The flowers themselves are a beautiful \r\npurple with slight yellow coloring. It is also one of the few varieties \r\nof Air Plants that can manage the strong rays of the sun, and develop \r\nnew colors when exposed to direct, natural light.  <br>', 'assets/product/product1577179672-01.jpeg', 1, '2019-12-24 03:57:52', '2020-01-06 00:54:34'),
(6, 'plants  corporate gifts', '22', 159, NULL, NULL, 'air plants', '<p>The single gift pack contains 1 Jade Plant along with colored pot, plate & goody bag. </p>', '<ul><li>The Jade plant is the ultimate symbol of prosperity and can be used to gift your friends, family and office colleagues.</li><li>It is hardy in nature and can survive in adverse conditions in outdoor location.</li><li>Jades are evergreen plants with thick branches with rounded and attractive leaves which resembles like coin.</li><li>This succulent can be used to decorate bright light areas in your home or office locations.</li></ul>', 'assets/product/product1577358895-01.png', 1, '2019-12-24 04:13:20', '2019-12-26 05:44:56'),
(7, 'portulaca, 9 o clock (any color) - plant', '100', 200, NULL, NULL, 'creeper plants', '<p>Portulaca is a truly beautiful low growing ground cover type plant. It is also best for hanging purpose. </p>', '<h2 class=\"nl-h2\" title=\"Description for Portulaca, 9 O Clock (Any Color) \">Description for Portulaca, 9 O Clock (Any Color) </h2><div class=\"nl-prod-desc-table\" style=\"text-align:left; margin-top:8px;\"><div><div class=\"nl-heading\" style=\"padding:4px 0px;\" title=\"Shipped plant height of Portulaca, 9 O Clock (Any Color) \"><span style=\"font-weight:bold;\">Plant height</span>: <span class=\"nl-value\">0.7 - 1.2 inches (1 - 4 cm)</span></div><div class=\"nl-heading\" style=\"padding:4px 0px;\" title=\"Shipped plant spread of Portulaca, 9 O Clock (Any Color) \"><span style=\"font-weight:bold;\">Plant spread</span>: <span class=\"nl-value\">3 - 5 inches (7 - 13 cm)</span></div></div></div><p style=\"font-size:100%; text-align:justify; margin-top:8px;\"><b>Interesting\r\n Fact: Portulaca is also known as 9 O clock plant as it blooms \r\napproximately at 9 O clock in the morning in India, making it a very \r\ninteresting plant!!</b><br><br>\r\nThis product does not have the flowers at the time of shipping. \r\nAfterward, the plant will bloom and it could be of any colored flower. <br> <br>Portulaca\r\n flowers are truly beautiful in various garden and landscape settings \r\nand have been used to beautify old structures and stone walkways.\r\n<br> <br> Portulaca is another clue to the wonderful drought tolerance \r\nof a perennial succulent flowering plant. Many varieties of portulaca \r\nhave semi-double to fully double flowers that resemble miniature roses. \r\nFlowers blooms in bright colors, like yellow, orange, red, and bright \r\npink, white, cream, and variegated flower colors are also available.\r\n</p><div class=\"nl-prod-desc-table\" style=\"padding:4px 0px; text-align:left; margin-top:8px;\"><div style=\"padding:4px 0px;\"><div class=\"nl-heading\" style=\"padding:4px 0px;\" title=\"Common name(s) of Portulaca, 9 O Clock (Any Color) \"><span style=\"font-weight:bold;\">Common name(s)</span>: <span class=\"nl-value\">Eleven O Clock, Purslane, and Sun Plant</span></div><div class=\"nl-heading\" style=\"padding:4px 0px;\" title=\"Common colour(s) of Portulaca, 9 O Clock (Any Color) \"><span style=\"font-weight:bold;\">Flower colours</span>: <span class=\"nl-value\">Any color</span></div><div class=\"nl-heading\" style=\"padding:4px 0px;\" title=\"Typical blooming season for Portulaca, 9 O Clock (Any Color) \"><span style=\"font-weight:bold;\">Bloom time</span>: <span class=\"nl-value\">Summer season</span></div><div class=\"nl-heading\" style=\"padding:4px 0px;\" title=\"Average height of Portulaca, 9 O Clock (Any Color) \"><span style=\"font-weight:bold;\">Max reachable height</span>: <span class=\"nl-value\">Up to 50 cm</span></div><div class=\"nl-heading\" style=\"padding:4px 0px;\" title=\"Difficulty level for growing Portulaca, 9 O Clock (Any Color) \"><span style=\"font-weight:bold;\">Difficulty to grow</span>: <span class=\"nl-value\">Easy to grow</span></div></div></div>', 'assets/product/product1577184681-01.jpeg', 1, '2019-12-24 05:21:21', '2019-12-24 05:21:21'),
(8, 'passiflora incarnata (purple), krishana kamal', '120', 149, NULL, NULL, 'climber plants', '<p>Passionflower is best for trellises, arbors, walls, or fences. It has a unique flower shape and fragrant. </p>', '<div role=\"tabpanel-1\" class=\"tab-pane clearfix active\" id=\"home\"><div class=\"product-description\" title=\"complete description of  buy passiflora incarnata (purple), krishana kamal - plant online\"><div style=\"font-family: arial; -webkit-font-smoothing: antialiased;\"><div class=\"nl-div\" style=\"text-align:left; margin-bottom:10px;\"><h2 class=\"nl-h2\">With this purchase you will get:</h2><div class=\"nl-div\" title=\"Contents of this purchase\"><div style=\"margin-bottom:4px;\"><div style=\"float:left; width:20px; margin-right:4px;\">01</div><div style=\"float:left;\">Passiflora incarnata (Purple), Krishana Kamal Plant</div></div><div style=\"margin-bottom:4px;\"><div style=\"float:left; width:20px; margin-right:4px;\">01</div><div style=\"float:left;\">5 inch Grower Round Plastic Pot (Black)</div></div></div></div><h2 class=\"nl-h2\" title=\"Description for Passiflora incarnata (Purple), Krishana Kamal \">Description for Passiflora incarnata (Purple), Krishana Kamal </h2><div class=\"nl-prod-desc-table\" style=\"text-align:left; margin-top:8px;\"><div><div class=\"nl-heading\" style=\"padding:4px 0px;\" title=\"Shipped plant height of Passiflora incarnata (Purple), Krishana Kamal \"><span style=\"font-weight:bold;\">Plant height</span>: <span class=\"nl-value\">5 - 9 inches (12 - 23 cm)</span></div><div class=\"nl-heading\" style=\"padding:4px 0px;\" title=\"Shipped plant spread of Passiflora incarnata (Purple), Krishana Kamal \"><span style=\"font-weight:bold;\">Plant spread</span>: <span class=\"nl-value\">4 - 6 inches (10 - 16 cm)</span></div></div></div><p style=\"font-size:100%; text-align:justify; margin-top:8px;\"><b>Interesting Fact: The interesting thing about this plant is that<br> <br>It is believed with reference of Hindu epic Mahabharata that :<br><br> There are about 100 of blue petals - one for each of the Kauravas.<br>\r\n\r\n5 of the yellow ones in the centre - one for each of the Pandavas.<br> The green bulb in the centre symbolises Draupadi, the queen of Pandava.<br><br></b>\r\n The three filaments are for the holy trinity of Brahma-Vishnu-Shiv and \r\nthe radial in the centre is the Sudarshan chakra of Lord Krishna.\r\nPassiflora incarnata is a rapid-growing, tendril-climbing vine which is \r\nwoody in warm winter climates and herbaceous (dies to the ground) in \r\ncold winter climates. Features three-lobed, dark green leaves and showy,\r\n 2.5\" diameter, fringed flowers having white or purple petals and sepals\r\n and a central crown of pinkish-purple filaments. Flowers bloom in \r\nsummer and are fragrant. Fleshy, egg-shaped, edible fruits called \r\nmaypops appear in July and mature to a yellowish color in fall. </p><div class=\"nl-prod-desc-table\" style=\"padding:4px 0px; text-align:left; margin-top:8px;\"><div style=\"padding:4px 0px;\"><div class=\"nl-heading\" style=\"padding:4px 0px;\" title=\"Common name(s) of Passiflora incarnata (Purple), Krishana Kamal \"><span style=\"font-weight:bold;\">Common name(s)</span>: <span class=\"nl-value\">Passion Flower, Purple passionflower, Apricot Vine, Maypop, Wild Passion Flower, Purple Pa</span></div><div class=\"nl-heading\" style=\"padding:4px 0px;\" title=\"Common colour(s) of Passiflora incarnata (Purple), Krishana Kamal \"><span style=\"font-weight:bold;\">Flower colours</span>: <span class=\"nl-value\">Purple</span></div><div class=\"nl-heading\" style=\"padding:4px 0px;\" title=\"Typical blooming season for Passiflora incarnata (Purple), Krishana Kamal \"><span style=\"font-weight:bold;\">Bloom time</span>: <span class=\"nl-value\">Summer</span></div><div class=\"nl-heading\" style=\"padding:4px 0px;\" title=\"Average height of Passiflora incarnata (Purple), Krishana Kamal \"><span style=\"font-weight:bold;\">Max reachable height</span>: <span class=\"nl-value\">Up to 8 feet</span></div><div class=\"nl-heading\" style=\"padding:4px 0px;\" title=\"Difficulty level for growing Passiflora incarnata (Purple), Krishana Kamal \"><span style=\"font-weight:bold;\">Difficulty to grow</span>: <span class=\"nl-value\">Easy to grow</span></div></div></div><div style=\"padding:4px 0px; margin-top:8px;\"><h2 class=\"nl-h2\" title=\"Planting environment for Passiflora incarnata (Purple), Krishana Kamal \"> Planting and care </h2><p>Passion\r\n flowers plant can be propagated by softwood cuttings and seeds. Seeds \r\nand cutting can plant in the early monsoon and spring season. Mature \r\nseedling should transplant in the pot or ground. </p><div class=\"nl-prod-desc-table\" style=\"padding:4px 0px; text-align:left;\"><div class=\"nl-heading\" style=\"padding:4px 0px;\" title=\"Sunlight requirement for Passiflora incarnata (Purple), Krishana Kamal \"><span style=\"font-weight:bold;\">Sunlight</span>: <span class=\"nl-value\">Full sun to part shade</span></div><div class=\"nl-heading\" style=\"padding:4px 0px;\" title=\"Soil requirement for Passiflora incarnata (Purple), Krishana Kamal \"><span style=\"font-weight:bold;\">Soil</span>: <span class=\"nl-value\">Well-drained soil</span></div><div class=\"nl-heading\" style=\"padding:4px 0px;\" title=\"Watering requiement/schedule for Passiflora incarnata (Purple), Krishana Kamal \"><span style=\"font-weight:bold;\">Water</span>: <span class=\"nl-value\">Moderately</span></div><div class=\"nl-heading\" style=\"padding:4px 0px;\" title=\"Ideal temperature for growing Passiflora incarnata (Purple), Krishana Kamal \"><span style=\"font-weight:bold;\">Temperature</span>: <span class=\"nl-value\">20 to 35 degrees C</span></div><div class=\"nl-heading\" style=\"padding:4px 0px;\" title=\"Best fertilizer options for healthy Passiflora incarnata (Purple), Krishana Kamal \"><span style=\"font-weight:bold;\">Fertilizer</span>: <span class=\"nl-value\">Apply any organic fertilizer</span></div></div><h3 class=\"nl-h3\" title=\"Care instructions for Passiflora incarnata (Purple), Krishana Kamal \" style=\"margin-top:8px;\">Caring for Passiflora incarnata </h3><ul><li>Water\r\n a plant when the soil feels dry to touch. Water thoroughly in the \r\nsummer and reduce watering for the winter &amp; rainy season.\r\n</li><li>Try to water the plants in the morning around 8-10am.\r\n</li><li>You should remove dead, infected or damaged plant parts and throw in the garbage collector.\r\n</li><li>You should prune and fertilize a plant mostly in the spring season.\r\n</li><li>When a plant grows beyond its limit and pot size not providing \r\nenough space for the spread of roots, re-pot with fresh soil and some \r\nfertilizer.\r\n</li><li>While re-potting, try not to disturb the roots. Avoid any \r\ndrastic change in the provided environment otherwise, the plants may get\r\n stress/shock.\r\n</li><li>For any insect attack or disease, you can use Neem oil, Eucalyptus oil or Citrus oil spray for primary treatment.</li></ul></div><div style=\"margin-top:8px;\"><h2 class=\"nl-h2\" title=\"Passiflora incarnata (Purple), Krishana Kamal \">Typical uses of Passiflora incarnata </h2><p><b title=\"Passiflora incarnata (Purple), Krishana Kamal \">Special features: </b>May be used on trellises, arbors, walls or fences. </p><p><b title=\"Passiflora incarnata (Purple), Krishana Kamal \">Ornamental use: </b>The plant is used for an ornamental purpose. It is best for trellises, arbors, walls or fences. </p></div><div style=\"margin-top:8px;\"><h2 class=\"nl-h2\" title=\"Passiflora incarnata (Purple), Krishana Kamal \">References</h2><ul><li>https://www.thespruce.com/passion-flowers-1403114\r\n</li><li>https://pfaf.org/user/Plant.aspx?LatinName=Passiflora+incarnata\r\n</li><li>http://www.thegardenhelper.com/passion.html</li></ul></div></div></div></div>', 'assets/product/product1577184780-01.jpeg', 1, '2019-12-24 05:23:00', '2019-12-24 05:23:00'),
(9, 'roystonea regia, royal palm', '100', 200, NULL, NULL, 'areca palm (small)', '<p>The royal palm tree is perfect for giving your yard that little slice of\r\n paradise It is one of the most prestigious looking and most \r\nrecognizable of all the palms in the world.</p>', '<div class=\"nl-div\" style=\"text-align:left; margin-bottom:10px;\"><h2 class=\"nl-h2\">With this purchase you will get:</h2><div class=\"nl-div\" title=\"Contents of this purchase\"><div style=\"margin-bottom:4px;\"><div style=\"float:left; width:20px; margin-right:4px;\">01</div><div style=\"float:left;\">Roystonea Regia, Royal Palm Plant</div></div></div></div><h2 class=\"nl-h2\" title=\"Description for Roystonea Regia, Royal Palm \">Description for Roystonea Regia, Royal Palm </h2><div class=\"nl-prod-desc-table\" style=\"text-align:left; margin-top:8px;\"><div><div class=\"nl-heading\" style=\"padding:4px 0px;\" title=\"Shipped plant height of Roystonea Regia, Royal Palm \"><span style=\"font-weight:bold;\">Plant height</span>: <span class=\"nl-value\">14 - 22 inches (35 - 56 cm)</span></div><div class=\"nl-heading\" style=\"padding:4px 0px;\" title=\"Shipped plant spread of Roystonea Regia, Royal Palm \"><span style=\"font-weight:bold;\">Plant spread</span>: <span class=\"nl-value\">3 - 5 inches (7 - 13 cm)</span></div></div></div><p style=\"font-size:100%; text-align:justify; margin-top:8px;\">Royal\r\n palm has large and attractive palm, it has been planted throughout the \r\ntropics and subtropics as an ornamental tree. The trunk is stout, very \r\nsmooth and grey-white in color with a characteristic bulge below a \r\ndistinctive green crownshaft. <br>They are green when immature, turning \r\nred and eventually purplish-black as they mature. They are often chosen \r\nby tropical resorts, hotels, and communities to line the streets and \r\ndriveways because their roots won\'t break through roads or sidewalks. </p><div class=\"nl-prod-desc-table\" style=\"padding:4px 0px; text-align:left; margin-top:8px;\"><div style=\"padding:4px 0px;\"><div class=\"nl-heading\" style=\"padding:4px 0px;\" title=\"Common name(s) of Roystonea Regia, Royal Palm \"><span style=\"font-weight:bold;\">Common name(s)</span>: <span class=\"nl-value\">Roystonea Regia, Royal palm, Cuban Royal Palm	</span></div><div class=\"nl-heading\" style=\"padding:4px 0px;\" title=\"Common colour(s) of Roystonea Regia, Royal Palm \"><span style=\"font-weight:bold;\">Flower colours</span>: <span class=\"nl-value\">Cream-colored</span></div><div class=\"nl-heading\" style=\"padding:4px 0px;\" title=\"Typical blooming season for Roystonea Regia, Royal Palm \"><span style=\"font-weight:bold;\">Bloom time</span>: <span class=\"nl-value\">Late summer	</span></div><div class=\"nl-heading\" style=\"padding:4px 0px;\" title=\"Average height of Roystonea Regia, Royal Palm \"><span style=\"font-weight:bold;\">Max reachable height</span>: <span class=\"nl-value\">Up to 80 feet</span></div><div class=\"nl-heading\" style=\"padding:4px 0px;\" title=\"Difficulty level for growing Roystonea Regia, Royal Palm \"><span style=\"font-weight:bold;\">Difficulty to grow</span>: <span class=\"nl-value\">Medium</span></div></div></div><div style=\"padding:4px 0px; margin-top:8px;\"><h2 class=\"nl-h2\" title=\"Planting environment for Roystonea Regia, Royal Palm \"> Planting and care </h2><p>Plant\r\n royals no closer to the house than 8 feet to allow room for the fronds \r\nto spread out and not be damaged by touching walls. You want to come out\r\n with enough distance that falling fronds don t damage anything \r\n(including people) underneath. <br>Space these palms 8 to 10 feet apart when planting in a row. This palm is too big for growing in a container.</p><div class=\"nl-prod-desc-table\" style=\"padding:4px 0px; text-align:left;\"><div class=\"nl-heading\" style=\"padding:4px 0px;\" title=\"Sunlight requirement for Roystonea Regia, Royal Palm \"><span style=\"font-weight:bold;\">Sunlight</span>: <span class=\"nl-value\">It will take partial shade but is happiest in full sun.</span></div><div class=\"nl-heading\" style=\"padding:4px 0px;\" title=\"Soil requirement for Roystonea Regia, Royal Palm \"><span style=\"font-weight:bold;\">Soil</span>: <span class=\"nl-value\">Topsoil or organic peat moss as a soil.</span></div><div class=\"nl-heading\" style=\"padding:4px 0px;\" title=\"Watering requiement/schedule for Roystonea Regia, Royal Palm \"><span style=\"font-weight:bold;\">Water</span>: <span class=\"nl-value\">Medium</span></div><div class=\"nl-heading\" style=\"padding:4px 0px;\" title=\"Ideal temperature for growing Roystonea Regia, Royal Palm \"><span style=\"font-weight:bold;\">Temperature</span>: <span class=\"nl-value\">30 to 40 degrees Celsius\r\n</span></div><div class=\"nl-heading\" style=\"padding:4px 0px;\" title=\"Best fertilizer options for healthy Roystonea Regia, Royal Palm \"><span style=\"font-weight:bold;\">Fertilizer</span>: <span class=\"nl-value\">Apply organic fertilizers</span></div></div><h3 class=\"nl-h3\" title=\"Care instructions for Roystonea Regia, Royal Palm \" style=\"margin-top:8px;\">Caring for Roystonea Regia</h3><ul><li>Give royal palms fertilizer specially formulated for palm trees.</li><li>It should have a ratio of 8-2-12-4Mg with micronutrients.</li><li>The nitrogen should be in the form of resin-coated urea or ammonium salts, urea-formaldehyde or sulfur-coated urea.</li><li>The potassium should be in the form of sulfur-coated potassium sulfate and the magnesium should be prilled kieserite.</li><li>The micronutrients should be manganese sulfate, iron chelate, and slow-release boron.</li></ul></div><div style=\"margin-top:8px;\"><h2 class=\"nl-h2\" title=\"Roystonea Regia, Royal Palm \">Typical uses of Roystonea Regia</h2><p><b title=\"Roystonea Regia, Royal Palm \">Special features: </b>The seed is used as a source of oil and for livestock feed. Leaves are used for thatching and the wood for construction.</p><p><b title=\"Roystonea Regia, Royal Palm \">Ornamental use: </b>Royal palm is one the best avenue tree mainly used to decorate the roadside, highways, and pathway.</p></div>', 'assets/product/product1577184945-01.jpeg', 2, '2019-12-24 05:25:45', '2019-12-24 05:25:45'),
(10, 'Bamboo Plants', '10', 150, NULL, NULL, 'air plants', '<p>this is the product short description.<br></p>', '<p>This is the product long description.</p>', 'assets/product/product1578309227-01.jpeg,assets/product/product1578309227-11.jpeg,assets/product/product1578309227-21.jpeg,assets/product/product1578309227-31.jpeg', NULL, '2020-01-06 05:43:47', '2020-01-06 05:43:47');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'base_url', 'http://lsne.in/godawari/', '2020-02-06 06:15:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `user_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@nurserylive.com', NULL, '$2y$10$rUjHV8JnldxipTjk3gpG7uqAKT/2Etpr7/BtEom01/RvP/HKYa27m', 1, 'xRslDYxfsOAKkOoirDbpI7EHlVIUzVpCCNpFc2cOKLUoxJXcjmKq315mNdAB', '2019-12-16 00:20:44', '2019-12-16 00:20:44'),
(2, 'ritik', 'ritikb001@gmail.com', NULL, '$2y$10$4LCKiX/nLSY2Uu.EWqU7CONZWkJfUfkG6Nt1mblLFrKSHGSocGtXO', 2, NULL, '2019-12-24 00:04:05', '2019-12-24 00:04:05'),
(3, 'Rahul', 'rahul@test.com', NULL, '$2y$10$pthM4oTe1GSlM92C72LTO.xEUhyuRcMvmXRL/ALF/jSHJ9tnTyJpO', NULL, NULL, '2019-12-24 00:50:50', '2019-12-24 00:50:50');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

DROP TABLE IF EXISTS `wishlists`;
CREATE TABLE IF NOT EXISTS `wishlists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(5, 1, 5, '2020-01-07 01:52:04', '2020-01-07 01:52:04');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
