-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 18, 2019 at 02:40 PM
-- Server version: 10.1.41-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 5.6.40-8+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsdb_archive`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `password`, `email`, `type`, `status`) VALUES
(1, 'admin', 'MTIzNDU=', 'sukumar.mitra@rediffmail.com', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `advertisemng`
--

CREATE TABLE `advertisemng` (
  `id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `advertisepage`
--

CREATE TABLE `advertisepage` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `advertisepage`
--

INSERT INTO `advertisepage` (`id`, `title`, `text`, `image`) VALUES
(1, 'Advertisement Tariff of BENGAL UPDATE\r\na complete bengali web news from Kolkata', '<p class=\"MsoNormal\"><strong><span style=\"font-size: 18.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\';\">Revised Tariff</span></strong></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 18.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-weight: bold;\">Type of Tariff: Fixed Display / Scrolling&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt;\"><strong><em><span style=\"font-size: 14.0pt; mso-bidi-font-size: 11.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\';\">Bengali &nbsp;Web news &nbsp;for the Bengali by the Bengali of the Bengali</span></em></strong></p>\r\n<p class=\"MsoNormal\"><em><span style=\"font-size: 14.0pt; mso-bidi-font-size: 11.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\';\">Enriched with updated news in political, educational, cultural, health, agricultural, sports, entertainment and exclusive features.</span></em></p>\r\n<p class=\"MsoNormal\" style=\"mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: 14.25pt;\"><span style=\"font-size: 12.0pt; font-family: \'Georgia\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #0070c0;\">Bengal Update&nbsp;is first dedicated online Bengali and English news&nbsp;which offers the latest&nbsp;national and international news&nbsp;and Views of the Global progressive thinkers. Bengal Update Cover vast area of Politics, Peoples initiative, Education, Health, Science&amp;Technology, Culture, Folk Culture, Sports, Entertainment, Environment, Agriculture, Industry, Economy, Food, Labour Issues, Tourism-Travel, Adventure etc. both in Bengali and Englsih Portal Bengal Update (www.bengalupdate.com/www.bengalupdatenews.com)</span></p>\r\n<p class=\"MsoNormal\" style=\"mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: 14.25pt;\"><span style=\"font-size: 12.0pt; font-family: \'Georgia\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #0070c0;\">Back Ground Of Online News Portals</span></p>\r\n<p class=\"MsoNormal\" style=\"mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: 14.25pt;\"><span style=\"font-size: 12.0pt; font-family: \'Georgia\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #0070c0;\">This website was launched in organized way on January 26, 2014 is an&nbsp;online Bengali news&nbsp;i.e www.bengalupdate.com which is committed to providing the masses with the&nbsp;latest news around the World. Here you can read updates from current affairs, politics, sports, entertainment, and globally. Launching a news portal in the most-spoken language of Bengal was an initiative to connect the large masses of the city. And simultaneously we feel need of a English news portal for worldwide relationship with each other. So We started a Enlish online news on 25<sup>th</sup>&nbsp;November, 2014. &nbsp;In the last few months the readership has grown humongous thus, making it one of the&nbsp;leading and exceptional Bengali and Englsih news portals. In the short time that this flourishing news website has been around, it has numerous breaking news stories to its credit.&nbsp;Bengal Update&nbsp;is not only read by readers situated nationally but, also reaches a large section of readers in rest of world.</span></p>\r\n<p class=\"MsoNormal\" style=\"mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: 14.25pt;\"><span style=\"font-size: 12.0pt; font-family: \'Georgia\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #0070c0;\">This&nbsp;online One in Bengali and One English news&nbsp;portals regularly updates the news stories, which includes&nbsp;breaking news&nbsp;and developments of&nbsp;state, national news&nbsp;and&nbsp;international news and events. Thus, one does not have to wait for the next day&rsquo;s news papers or for the news hour on television to get updated about the current affairs;&nbsp;Bengal Update&nbsp;provides you with fresh, authentic and reliable news around the clock. The search bar on the page allows a person to get to their topic of interest within a few seconds. There is no need to skim through pages of unwanted stories and advertisements just to find what a person is looking for.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt;\"><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: #0070c0;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt;\"><span style=\"font-size: 18.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: red;\">Web Sponsor</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt;\"><span style=\"font-size: 14.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\';\">&nbsp;for One year Rs. 5 lacs, Sectional Sponsor for one year Rs.1 lacs each.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt;\"><span style=\"font-size: 14.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\';\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt;\"><span style=\"font-size: 18.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: red;\">Home Page (Video Advt.)</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt;\"><span style=\"font-size: 14.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\';\">scroll 30 Sec every 5 minutes for one Months Rs. 10,000/- for 6 months Rs. 30,000/- 1Year Rs. 50,000/-</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt;\"><span style=\"font-size: 18.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\';\">&nbsp;<span style=\"color: red;\">Scroll Home Page</span></span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt;\"><span style=\"font-size: 14.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\';\">Home Page scroll 30 Sec every 5 minutes for one Months Rs. 5,000/- for for 6 months Rs. 20,000/- 1Year Rs. 30,000/-</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt;\"><span style=\"font-size: 18.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\';\">&nbsp;</span><span style=\"font-size: 14.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\';\">-349x200 Pixels &nbsp;Scroling Add Resulation</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt;\"><span style=\"font-size: 14.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\';\">Home striff banner upper Rs. 10,000/- p.m and 40,000/- for 6 months and 60,000/- per annum</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt;\"><span style=\"font-size: 18.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\';\">-&nbsp;</span><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\';\">1142x100 Pixels &nbsp;-- Strip Add Resulation</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt;\"><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\';\">Inside Page striff banner upper Rs. 5,000/- p.m and 20,000/- for 6 months and 50,000/- per annum</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt;\"><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\';\">1142x100 Pixels &nbsp;-- Strip Add Resulation</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt;\"><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\';\">Advertisment in Botton right side fixed and scroll</span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\';\">300x253 Pixels Our Sopncer Add Resulation</span></p>\r\n<p class=\"MsoNormal\"><strong><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: #c00000;\">Terms &amp; Conditions</span></strong></p>\r\n<p class=\"MsoNormal\"><strong><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: #00b0f0;\">1. Advt matter will be received via mail before two days of processing.&nbsp;</span></strong></p>\r\n<p class=\"MsoNormal\"><strong><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: #00b0f0;\">2. Advt Release Order should be addressed to marketing manager of &nbsp;BENGAL UPDATE.</span></strong></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 12pt;\"><strong><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: #00b0f0;\">3. Special Discount Facilities available for monthly, quarterly, half yearly and annually&nbsp;contract</span></strong><strong><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\';\">.</span></strong></p>\r\n<p class=\"MsoNormal\"><strong><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\';\">4. 1142x100 Pixels &nbsp;-- Strip Add Resulation/349x200 Pixels &nbsp;Scroling Add Resulation /300x253 Pixels Our &nbsp;Sopncer Add Resulation</span></strong></p>\r\n<p class=\"MsoNormal\"><strong><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\';\">5. All payments to be made by cheque only in favour of </span></strong></p>\r\n<p class=\"MsoNormal\"><strong><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\';\"><span style=\"color: #00b050;\">BENGAL UPDATE</span>.</span></strong></p>\r\n<p class=\"MsoNormal\"><strong><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\';\">Contact</span></strong><span style=\"text-decoration: underline;\"><span style=\"font-size: 14.0pt; mso-bidi-font-size: 11.0pt; font-family: \'Verdana\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #1155cc;\">- bengalupdate@gmail.com</span></span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\';\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>', '1435129429bu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `advimg`
--

CREATE TABLE `advimg` (
  `id` int(11) NOT NULL,
  `pos` tinyint(1) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `advimg`
--

INSERT INTO `advimg` (`id`, `pos`, `img`, `status`, `date`) VALUES
(54, 1, '1411206869Purobi.jpg', 0, '1559821175'),
(23, 4, '1411206869Purobi.jpg', 0, '1421593860'),
(36, 3, '1411206869Purobi.jpg', 0, '1456867933'),
(53, 1, '1411206869Purobi.jpg', 0, '1498708387'),
(51, 1, '1411206869Purobi.jpg', 0, '1498707830'),
(52, 1, '1498707681advertising.jpeg', 0, '1498707681'),
(18, 1, '1421591623Bengalupdate achievement.jpg', 0, '1498706897'),
(22, 1, '1424667152dulung fff.jpg', 0, '1568120515'),
(0, 1, '1568120439IMG-20190909-WA0026.jpg', 0, '1568120439');

-- --------------------------------------------------------

--
-- Table structure for table `angana`
--

CREATE TABLE `angana` (
  `id` int(11) NOT NULL,
  `smallimg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `topicimg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `key` text COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `now` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `angana_hit_count`
--

CREATE TABLE `angana_hit_count` (
  `pge_name` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `views` bigint(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `cat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caption` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `cat`, `caption`, `image`, `text`, `title`, `status`, `order`) VALUES
(1699, 'entertainment', 'যে শর্তে সাইফকে বিয়ে করেছেন কারিনা', '1457706844karina.jpg', '', '', 0, 0),
(1700, 'entertainment', 'এবার সোহমের বিপরীতে অভিনয় করবেন বাংলাদেশের তিশা\r\n', '1457706800soham.png', '', '', 0, 0),
(1709, 'sports', 'ডার্বি ম্যাচে রিজার্ভ বেঞ্চে অনিশ্চিত মোহনবাগান কোচ সজ্ঞয় সেন', '1457682995mb.jpg', '', '', 0, 0),
(1775, 'sports', 'ভারতের অনূর্দ্ধ-১৪ মহিলা ফুটবল টিম এ এফ সি কাপের ফাইনালে', '1462077922mahila.jpg', '', '', 0, 0),
(1797, 'general', '', '1463893857online.jpg', '', 'কলেজে অনলাইনে ভর্তির ভিড়, ছবি- বাপন ঘোষ', 0, 0),
(1804, 'general', '', '1464275363gate.jpg', '', '', 0, 0),
(1805, 'general', 'মেদিনীপুরের গোপালনিতে আরএসএস প্রশিক্ষ‌ণ শিবিরের সমাপ্তি অনুষ্ঠান, ছবি- বাপন ঘোষ', '1464624332RSS.jpg', '', '', 0, 0),
(1806, 'general', 'নারায়নগড়ে তৃণমূলের বিজয় মিছিল, ছবি- বাপন ঘোষ', '1464624419ng.jpg', '', '', 0, 0),
(1807, 'general', 'ডায়মন্ডহারবারে রবীন্দ্র-নজরুল স্মরণ সন্ধা, ছবি- দেবাশীষ মালিক', '1464759799RN.jpg', '', '', 0, 0),
(1809, 'general', 'প্রয়াত কিংবদন্তী বক্সার মোহম্মদ আলি', '1465142100ali.jpg', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bidhansabha_constituency`
--

CREATE TABLE `bidhansabha_constituency` (
  `id` int(10) NOT NULL,
  `constituency` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bidhansabha_constituency`
--

INSERT INTO `bidhansabha_constituency` (`id`, `constituency`, `state`, `district`, `status`, `date`) VALUES
(1, 'কাশীপুর বেলগাছিয়া', '2', '1', 0, '2017-06-16'),
(2, 'বাগদা', '2', '4', 0, '2017-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `bidhansabha_result`
--

CREATE TABLE `bidhansabha_result` (
  `id` int(255) NOT NULL,
  `state` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `kendro` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ca_dol_1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vo_dol_1` int(100) NOT NULL,
  `ca_dol_2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vo_dol_2` int(100) NOT NULL,
  `ca_dol_3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vo_dol_3` int(100) NOT NULL,
  `ca_dol_4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vo_dol_4` int(100) NOT NULL,
  `ca_dol_5` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vo_dol_5` int(100) NOT NULL,
  `round` int(10) NOT NULL,
  `difference` int(100) NOT NULL,
  `result` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` varchar(400) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bidhansabha_result`
--

INSERT INTO `bidhansabha_result` (`id`, `state`, `district`, `kendro`, `ca_dol_1`, `vo_dol_1`, `ca_dol_2`, `vo_dol_2`, `ca_dol_3`, `vo_dol_3`, `ca_dol_4`, `vo_dol_4`, `ca_dol_5`, `vo_dol_5`, `round`, `difference`, `result`, `status`, `date`) VALUES
(1, '2', '1', '1', 'vvvvv', 123, 'wwwww', 456, 'xxxxx', 789, 'yyyyy', 876, 'zzzzz', 654, 1, 102, 'Not Yet Said', 0, '2017');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `small_text` text COLLATE utf8_unicode_ci NOT NULL,
  `author_name` text COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(155) COLLATE utf8_unicode_ci NOT NULL,
  `comment_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `keyword` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `small_text`, `author_name`, `text`, `image`, `comment_id`, `status`, `keyword`, `description`, `date`) VALUES
(67, 'মন্দির ওহি বনায়েঙ্গে', '', 'চপল ভট্টাচার্য', '<p class=\"MsoNormal\"><span style=\"font-size: 14pt;\">সাংসদ নির্বাচনের আগের উত্তরপ্রদেশের মির্জাপুরের পটভূমি। গণহত্যা বিধ্বস্ত মির্জাপুর। গণহত্যার নায়ক যারা তারাই কয়েকজন সংসদে নির্বাচিত। সবাই জানে গণহত্যার তাণ্ডবে সংসদে এদের নির্বাচন সুগম হয়েছিল। এরা সব ভয়ের ফেরিওয়ালা। পশ্চিমবাংলার বিগত ৩৪ বছরেও যেকটি সংসদীয় নির্বাচন হত তাতে রেকর্ডবারের নির্বাচিত সাংসদরা ঠিক এমনিভাবেই নির্বাচিত হত। সেখানেও ওই গণহত্যার ভয়। অন্যতম উদাহরণ হুগলি কেন্দ্রে অনিল বসুষ তাঁর মুখনিঃসৃত বাণী তো আজ এখনও কেউ ভোলেনি। ঠিক একই কায়দায় উত্তরপ্রদেশের মির্জাপুরের গণহত্যার প্রধান নায়ক নমোজি ঘনিষ্ট বিজেপির সর্বভারতীয় সভাপতি। তিনি ভিক্টোরিয়া হাউসের রাস্তায় অনিল বসুর মত একই কায়দায় আরও কদর্যভাবে স্লোগান তুলেছে &lsquo;ভাগ মমতা ভাগ।&rsquo; এই রুচি বিগর্হিত স্লোগানের জবাব বাংলার জাগ্রত জনতা ২০১৬ তে দেবে। একটি রাজ্যের নির্বাচিত মুখ্যমন্ত্রীকে এরকম ভাষায় ভারতের সংস্কৃতির রাজধানীতে দাঁড়িয়ে স্লোগান তোলা হল। অথচ বাংলার সংস্কৃতির আড়তদার &lsquo;বাজারী কাগজ&rsquo; ফলাও করে প্রভুভক্তির নির্দশনস্বরূপ তাদের কাগজে &lsquo;দেহিপদপল্লবে&rsquo;র বক্তব্য ছাপার অক্ষ&zwnj;রে ছাপল। আর বাংলার বুদ্ধিজীবীরা ব্যস্ত রইলেন এদেশের রবীন্দ্রনাথ-সহ মহান ব্যক্তিদের আশীর্বাদধন্য জাতীয় শিক্ষ&zwnj;া আন্দোলনের পীঠস্থানকে তথাকথিত গণতন্ত্র রক্ষ&zwnj;ার নাম করে কলরবে কলংকিত করতে। আজ যখন &lsquo;শাহেনশাহর&rsquo; উদাহরণে উৎসাহিত হয়ে দুধকুমার নামক &lsquo;ফ্র্যাংকেনস্টাইন&rsquo; আরও বিপ্লবী কায়দায় &lsquo;তৃণমূল দেখলেই হাত কেটে&rsquo; নেওয়ার ফতোয়া দেয় তখন হাওড়ার কান্দুয়া গ্রামের কংগ্রেসের কর্মীদের সিপিএম-এর দুধকুমারদের হাত কেটে নেওয়ার কথা মনে পড়িয়ে দেয়। মনে পড়িয়ে দেয় গড়বেতার ছোট আঙ্গারিয়ার বক্তার মণ্ডলের বাড়ি পুড়িয়ে দেয়। মনে করিয়ে দেয় সিঙ্গুরের তাপসী মালিকের ধর্ষণের পর ধর্ষণকারীর নামের সাথে তার অসহায় পিতার নাম জড়িয়ে দিয়ে পদলেহি সিনেমা তৈরি করার নাট্যকারের কথা। মনে করিয়ে দিয়ে মঙ্গলকোট, দিনহাটা, জঙ্গলমহল, নন্দীগ্রাম তৈরি করার নাট্যকারের কথা। তারই পথ বেয়ে আরও দ্বিগুণ উৎসাহে ছয় মাসের রাজত্বে ধর্মধ্বজী সিংঘল, তোগাড়িয়া, ভাগবত বাহিনী জাতির জনকের হত্যাকারীকে হিন্দুদের ভগবান বানানোর জন্য ভারতের জাতীয় স্বাধীনতা সংগ্রামের চিহ্নিত আত্মত্যাগের পবিত্র দিন ৩০ জানুয়ারিতে নাথুরাম গডসের মূর্তি বানানোর দিন হিসাবে পৈশাচিক উল্লাসে লিপ্ত হয়েছে। তথাকথিত &lsquo;হিন্দুত্বের&rsquo; ধ্বজাধারীরা ঐক্যবদ্ধ ভারতে দাঙ্গার পরিবেশ সৃষ্টিতে লিপ্ত। ২০২১কে চিহ্নিত করে সমগ্র ভারতে হিন্দুত্বে রূপান্তরিত করার রণধ্বনিতে সোচ্চার। যাতে একদিন &lsquo;জয়হিন্দ&rsquo; &ndash;এর মত পবিত্র ধ্বনি &lsquo;জয় হিন্দু&rsquo;তে রূপান্তরিত হয়। আশা করি বাবরি মসজিদ ধ্বংসকারীদের সেই রণধ্বনি মনে আছে।</span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 14pt;\"><span lang=\"BN-BD\" style=\"line-height: 115%; font-family: Vrinda;\">&lsquo;মন্দির ওহি বনায়েঙ্গে&rsquo;</span></span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 14pt;\"><span lang=\"BN-BD\" style=\"line-height: 115%; font-family: Vrinda;\">&lsquo;ইয়ে সির্ফ এক ঝাঁকি হ্যায়।</span></span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 14pt;\"><span lang=\"BN-BD\" style=\"line-height: 115%; font-family: Vrinda;\">কাশি মথুরা আভি বাকি হ্যায়।&rsquo;</span></span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 14pt;\"><span lang=\"BN-BD\" style=\"line-height: 115%; font-family: Vrinda;\">গীতা মাহাত্ম, গডসকে বীর ও ভগবান বানানো দিয়ে আবারও আওয়াজ উঠেছে।</span></span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 14pt;\"><span lang=\"BN-BD\" style=\"line-height: 115%; font-family: Vrinda;\">&lsquo;ইয়ে তো সির্ফ এক ট্রেলার হ্যায়।</span></span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 14pt;\"><span lang=\"BN-BD\" style=\"line-height: 115%; font-family: Vrinda;\">পুরো পিকচার তো আভি বাকি হ্যায়।&rsquo;</span></span></p>\r\n<p>&nbsp;</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><span lang=\"BN-BD\" style=\"font-size: 14.0pt; line-height: 115%; font-family: Vrinda; mso-ascii-font-family: Calibri; mso-hansi-font-family: Calibri; mso-bidi-language: BN-BD;\">তৃণমূল নেত্রীর হাত থেকে বাঁচার জন্য না সারদার হাত থেকে বাঁচার জন্য জানা নেই। তবে সিপিএম নেতারা নমোজির শরনাপন্ন হয়ে দিল্লি দৌঁড়েছেন। এবার ওরাই দেখবেন আসল ফ্যাসিবাদ কাকে বলে। ভোট, সাংসদ, বিধায়ক, দল, সব মোদিজির কৃপায় বাঁচবে তো?</span></p>', '1419957926bajrang.jpg', 0, 0, '', '', '2014-12-30'),
(68, '২০১৪: কত মানুষ মারা গেল সিরিয়ায়?', '', 'শাহাদাত হুসাইন', '<p style=\"margin: 0px 0px 6px; outline: 0px; padding: 0px; font-size: 16px; border: 0px; vertical-align: top; line-height: 24px; text-align: justify; font-family: SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><span style=\"font-size: 14pt;\">২০১৪ সালে সিরিয়ায় বিদেশি মদদপুষ্ট সন্ত্রাসীদের বর্বর সহিংসতায় ৭৬,০০০ মানুষ মারা গেছে। দেশটিতে প্রায় চার বছরের সংঘর্ষ-সহিংসতায় গত বছরই</span></p>\r\n<p style=\"margin: 0px 0px 6px; outline: 0px; padding: 0px; font-size: 16px; border: 0px; vertical-align: top; line-height: 24px; text-align: justify; font-family: SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><span style=\"font-size: 14pt;\">সবচেয়ে বেশি মানুষ নিহত হয়েছে। সে কারণে বিদায়ী বছরকে সিরিয়ার সহিংসতায় সবচেয়ে রক্তক্ষয়ী বছর হিসেবে গণ্য করা হচ্ছে।</span><br style=\"margin: 0px; outline: none 0px; padding: 0px;\" /><br style=\"margin: 0px; outline: none 0px; padding: 0px;\" /><span style=\"font-size: 14pt;\">নিহত ৭৬,০০০ মানুষের মধ্যে হাজার হাজার শিশু রয়েছে। ব্রিটেনভিত্তিক কথিত মানবাধিকার সংস্থা সিরিয়ান অবজারভেটরি ফর হিউম্যান রাইটস (বৃহস্পতিবার) এ তথ্য প্রকাশ করেছে।</span><br style=\"margin: 0px; outline: none 0px; padding: 0px;\" /><br style=\"margin: 0px; outline: none 0px; padding: 0px;\" /><span style=\"font-size: 14pt;\">লন্ডনভিত্তিক বিরোধী গ্রুপটি বলেছে, গত বছরের সহিংসতায় ১৮,০০০ বেসামরিক লোক মারা গেছে যার মধ্যে ৩,৫০১টি শিশু রয়েছে। সিরিয়ান অবজারভেটরি ফর হিউম্যান রাইটসের&nbsp;</span></p>\r\n<p style=\"margin: 0px 0px 6px; outline: 0px; padding: 0px; font-size: 16px; border: 0px; vertical-align: top; line-height: 24px; text-align: justify; font-family: SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><span style=\"font-size: 14pt;\">রিপোর্টে আরো বলা হয়েছে, ২০১৪ সালে সিরিয়ার প্রেসিডেন্ট বাশার আল-আসাদ সরকারের বিরুদ্ধে সহিংসতায় লিপ্ত বিদেশি মদদপুষ্ট অন্তত ৩২,৭০০ সন্ত্রাসী নিহত হয়েছে। এছাড়া,</span></p>\r\n<p style=\"margin: 0px 0px 6px; outline: 0px; padding: 0px; font-size: 16px; border: 0px; vertical-align: top; line-height: 24px; text-align: justify; font-family: SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><span style=\"font-size: 14pt;\">সংঘর্ষে মারা গেছে প্রায় ২২,৬০০ সেনা।</span><br style=\"margin: 0px; outline: none 0px; padding: 0px;\" /><br style=\"margin: 0px; outline: none 0px; padding: 0px;\" /><span style=\"font-size: 14pt;\">২০১১ সালের মার্চ মাসে সিরিয়ায় বিদেশি মদদপুষ্ট সন্ত্রাসীদের সহিংসতা শুরুর পর এ পর্যন্ত দুই লাখের বেশি মানুষ মারা গেছে বলে জাতিসংঘ কিছুদিন আগে ঘোষণা করেছে।</span><br style=\"margin: 0px; outline: none 0px; padding: 0px;\" /><br style=\"margin: 0px; outline: none 0px; padding: 0px;\" /><br style=\"margin: 0px; outline: none 0px; padding: 0px;\" /><br /></p>\r\n<p>&nbsp;</p>', '1420270631siria 2014.jpg', 0, 0, '', '', '2015-01-03'),
(69, 'সোস্যাল মিডিয়া কতদিন সামাজিক থাকবে?', '', 'তহমীনা খাতুন', '<p><span style=\"font-size: 14pt;\">প্রতিদিন সংবাদ মাধ্যমে নানা অনুষ্ঠানে আমরা নিজেদের ঋদ্ধ করার চেষ্টা করি। কতটা তারা পূরণ করে তা আজ বলা দায়। কারণ সামাজিক দায়িত্ব না, কর্পোরেটের স্বার্থবাহী দালাল হিসেবে আজ তারা চিহ্নিত। তাই হাঁফ ছাড়তে আমরা কাউন্টার মিডিয়া হিসেবে সোস্যাল মিডিয়া প্লাটফর্ম তৈরি করেছি। যা ক্রমশ জনপ্রিয় হচ্ছে বিশ্বজুড়ে। কিন্তু সেই সুযোগকে অসত অশ্লীলভাবে কিছু মানুষ ব্যবহার করছে দেখলে হতাশ হই। তাহলে বিকল্প মিডিয়াতেও সেই কর্পোরেট সংস্কৃতির থাবা। এখন এমন অনেক কথা ভারতে বিশেষ করে পশ্চিমবাংলায় সাম্প্রদায়িক বিদ্বেষমূলক পোস্ট যা কিনা দাঙ্গা বাঁধিয়ে দেওয়ার পক্ষ&zwnj;ে যথেষ্ট। রাজনৈতিক বিষয় লিখতে গিয়ে অশ্লীলতা ছাড়া তাদের কলমে অন্য কোনও ভাষা নেই। সত্যি যদি এটা চলতে দেওয়া হয় তাহলে সোস্যাল মিডিয়া অ্যান্টি সোস্যাল মিডিয়ায় পরিণত হতে বাধ্য। এটা হতে দেওয়া যায় না। সকলেই সতর্ক হোন।</span></p>', '1424012071social media.jpg', 0, 0, '', '', '2015-02-15'),
(70, 'কেমন আছো জঙ্গলমহল, কেমন আছে অন্ধ ছিতামনি?', '', 'বচ্চন গিরি,ঝাড়গ্রাম ', '<p dir=\"ltr\" style=\"color: #222222; font-family: arial, sans-serif; font-size: 13px;\"><span style=\"font-size: 14pt;\">&nbsp;সময়টা ছিল ২০০৮-২০০৯ সাল| ভালোই ছিল জঙ্গলমহল| দিন গুজরানে বেশ চলে যাচ্ছিল ছিতামনিদের| সময়ের করাল গ্রাসে নিমেষে বদলে দিল সবকিছুই| কেড়ে নিল ছিতামনির এক চোখের রস্মি| বহু আন্দোলন বহু ঘটনার সাক্ষ্য আজও বহন করে চলেছে জঙ্গলমহল| এখনো জঙ্গলমহলের মানুষদের স্মৃতিতে দগদগে সেই সব দিনের ঘটনা| দিনটা ছিল ২০০৮ সালের | পশ্চিম মেদিনীপুর জেলার শালবনিতে জিন্দাল গোষ্ঠীর কারখানার উদ্বোধন করতে আসছিলেন ততকালীন মুখমন্ত্রী&nbsp;&nbsp;&nbsp; বুদ্ধদেব ভট্টাচার্য্য সঙ্গে ছিলেন কেন্দ্রীয় মন্ত্রী রামবিলাস পাসোয়ান| মুখমন্ত্রীর কনভয় যখন মেদিনীপুর শহর ছাড়িয়ে দুর্বার গতিতে শালবনির উদ্দেশ্য ছুটছে&nbsp; ৬ নম্বর জাতীয় সড়কের উপর দিয়ে শহরের অদূরে ভাদুতলার কলাইচনডী পোলের উপর হটাৎ. মুখমন্ত্রীর কনভয় বিকট শব্দে উড়ে যায়| কিছু বুঝে ওঠার আগেই এলাকা ঘিরে ফেলে পুলিশ| পরে জানা যায় মাওবাদীরা মাইন বিস্ফোরণ ঘটিয়েছে| কোনও রকমে রক্ষা পেয়েছেন বুদ্ধদেব বাবু| শুরু হয় পুলিশি তোলপাড়| সেই বিস্ফোরণের রেশ এসে পড়ে ঘটনাস্থল থেকে ৩৮ কিলোমিটার দুরে লালগড় থানার ছোটপেলিয়া গ্রামে| বাড়ীতে ঢুকে মহিলা, বাচ্চা ও পুরুষদের বিবস্ত্র করে লাঠিপেটা করে পুলিশ| পুলিশের দাবী মাইন বিস্ফোরণে ছোটপেলিয়ার বাসিন্দারাও জড়িত| গ্রেফতারও করে অনেককে| ক্ষোভে,অভিমানে ফেটে পড়ে গোটা জঙ্গলমহল| শুরু হয় অরুন্ধন, বনধ, অবরোধ, গিরা বন্ধন| ছএধর মাহাতোর নেতৃত্বে শুরু তৈরী হয় পুলিশ সন্ত্রাস বিরোধী জনসাধারনের কমিটি|&nbsp; প্রথম দিকে আন্দোলনের পথটা ঠিকই ছিল পরবর্তীকালে যখন মাওবাদীদের অনুপ্রবেশে ঘটলো আন্দোলনের প্রকৃতি বদলে গেল| শুরু হল খুন, অগ্নিসংযোগ, রাস্তা কাটা| বিরোধীদলের নেএী থাকাকালীন মমতা বন্ধোপাধায় বহুবার জঙ্গলমহলে এসেছেন, নিযার্তিত মানুষদের পাশে দাঁড়িয়েছেন| তার পর কেটে গেছে ছয় বছর বদলে গেছে রাজনৈতিক, অথনৈতিক,সামাজিক প্রেক্ষাপট সাথে সাথে বদলে গেছে অনেক কিছুই| আজ বিংশ শতাব্দীতে দাঁড়িয়েও ছিতামনির সেই আর্তনাদ শোনা যায়, \"আমার চোখের আলো ফিরিয়ে দাও|\"নেতাই গ্রামে হার্মাদের গুলিতে নিহত লাশগুলো যেন এখনও কংসাবতীর পাড় থেকে বুক ঠুকরে বলে দোষীদের শাস্তি চাই, আত্মার শান্তি চাই| ২০১১ সালের বিধানসভা নিবার্চনে রাজ্যে আমূল পরিবর্তনের পর বাংলার মুক্ষমন্ত্রী মমতা বন্ধোপাধ্যায়ের সরকার ক্ষমতায় আসার পর রাজ্যে উন্নয়নের জোওয়ার বইছে| স্বাস্থ্যকেন্দ্র,&nbsp; কলেজ, বিদ্যালয়, রাস্তা,পানীয় জলের বাবস্থা হয়েছে| কিন্তু বিরোধীদের কুতসার লাগাম নেই| একের পর এক বিরুপ মন্তব্যে উন্নয়ন কে রুখে দিতে চাইছে তারা বলেই রাজনৈতিক মহলের মত| তবে বিরোধীরা যতোই কুৎসা রটাক না কেন মমতাও যে ছেড়ে দেওয়ার পাত্রী নন তা হাড়ে হাড়ে টের পেয়েছেন বিরোধীরা| মমতা বন্ধোপাধ্যায়ের কথায়, \" জঙ্গলমহল হাসছে, পাহাড় হাসছে, উন্নয়ন হচ্ছে|\" এসব কিছুর মাঝেও যেন হতাশার ছাপ,একদিকে সারদা কেলেংকারীতে&nbsp; যেভাবে রাজ্যের তাবড় তাবড় নেতা মন্ত্রীদের তলব করে গ্রেফতার করছে সি.বি.আই অপর দিকে এ&nbsp; রাজ্যে বিজেপি ক্রমশ শক্তিশালী হচ্ছে তাই যে কোনও পট পরিবর্তন হতে পারে বলেই আশঙ্কায় মুক্ষমন্ত্রী সহ গোটা তৃণমূল দল| বিরোধীদের দাবী সি.পি.এমের সময়ে অনুন্নয়ন অনুন্নয়ন বলে চিৎকার করতেন মমতা, যে মমতা সি.পি.আই.এমের সময়ে মাওবাদী খুঁজে পেতেন না আজ তিনিই বলছেন&nbsp; মাওবাদীরা উন্নয়ন করতে দিচ্ছে না| এটাকি &nbsp;নিছক ছেলেমানুষী নয়?</span></p>', '1424011869jungle.jpg', 0, 0, '', '', '2015-02-15'),
(72, 'নেওড়া নদীর উপত্যকাঃ একটু হাঁটলাম, অল্প জানলাম-পর্ব/১', '', 'মনিরুল হক, ক্লাইম্বার্স সার্কেল', '<p class=\"MsoNormal\"><em><span style=\"font-size: 14pt;\">&lsquo;\'প্রকাণ্ড বন প্রকাণ্ড গাছ</span></em></p>\r\n<p class=\"MsoNormal\"><em><span style=\"font-size: 14pt;\"><span lang=\"BN-BD\" style=\"line-height: 115%; font-family: Vrinda;\">ভিতরে কত লক্ষ&zwnj; কথা, পাতা পাতায়, শাখা শাখায়</span></span></em></p>\r\n<p class=\"MsoNormal\"><em><span style=\"font-size: 14pt;\"><span lang=\"BN-BD\" style=\"line-height: 115%; font-family: Vrinda;\">সবুজ অন্ধকার\'\'</span></span></em></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 14pt;\"><span lang=\"BN-BD\" style=\"line-height: 115%; font-family: Vrinda;\">ভ্রমণের অনেক ধরন। তার মধ্যে একটা হল জঙ্গলে জঙ্গলে ঘুরে বেড়ান। জঙ্গলের গভীরে, আরও গভীরে ঘুরে বেড়ানোর মজাই আলাদা। তবে গাড়ি চড়ে নয়, পায়ে হেঁটে। ভারত জুড়ে এরকম বেড়ানোর জায়গা অনেক আছে। তার মধ্যে একটা হল নেওড়া ভ্যালি- নেওড়া নদীর ঘন সবুজ উপত্যকা।</span></span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 14pt;\"><span lang=\"BN-BD\" style=\"line-height: 115%; font-family: Vrinda;\">আমাদের কালিম্পং মহকুমার উত্তর দিকে ১০৩০০ফুট উঁচু রেচেলা টপের কাছাকাছি জায়গা থেকে উৎপন্ন হয়ে দক্ষ&zwnj;িণ দিকে ৪০ কিলোমিটারের বেশী প্রবাহিত হয়েছে এই নেওড়া নদী। এই নদী উপত্যকার পূর্ব দিকে আছে তোদে-তাংতা আর পশ্চিম দিকে আছে লাভা শহর। গোটা এলাকা গভীর জঙ্গলে ভরা। তাই সেখানে নির্ভয়ে বাস করে বিভিন্ন বন্যপ্রাণী। ভল্লুক, গাউর, শুকর বিভিন্ন প্রজাতির চিতা, থর, হরিণ, বড় কাঠবিড়ালি এবং বিভিন্ন প্রজাতির সাপ। এসবের সাথে রেডপান্ডারও আস্তানা এই জঙ্গল। শতশত প্রজাতির পাখি ও প্রজাপতির অবাধ বিচরণ ভূমি এই বন। বহু প্রকারের মাছ ও অন্যান্য জলজ প্রাণীরও দেখা মেলে নেওড়া নদীতে। তবুও এর মধ্যে খাপছাড়া ভাবে বসতি গড়ে তুলেছিল অল্প কিছু মানুষ। তারপর ১৯৮৬ সালে এই জঙ্গলের ৮৮ বর্গ কিলোমিটার এলাকাকে ন্যাশনাল পার্ক হিসেবে ঘোষণা করা হয়েছে। </span></span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 14pt;\"><span lang=\"BN-BD\" style=\"line-height: 115%; font-family: Vrinda;\">ভ্রমণ পাগলদের নজরে আসবার পর থেকে আজ পর্যন্ত অনেক মানুষ পায়ে হেঁটে ঘুরে বেড়িয়েছেন এই জঙ্গলের গহীনে। তবুও এর অনেকটা অংশ এখনও অদেখা, অচেনা রয়ে গেছে মানুষের কাছে। হ্যাঁ, ভয় পাওয়ার মতই গভীরতা এই জঙ্গলের। এই জঙ্গলে প্রথম অভিযান হয় ১৯৮২ সালে। ভারতীয় সেনাবাহিনী, জুলজিক্যাল সার্ভে অফ ইন্ডিয়া, কলকাতা বিশ্ববিদ্যালয় ও আরও দু-একটি সংস্থার মিলিত দল নভেম্বর ডিসেম্বর মাসে পর্বতারোহী কমল গুহ-র নেতৃত্ব এই অভিযান সংঘটিত করে। কয়েক সপ্তাহের প্রচেষ্টায় অমানুষিক পরিশ্রম ও চরম বিপদের ঝুঁকি নিয়ে তাঁরা বেশ খানিকটা অঞ্চল জুড়ে অনুসন্ধান কাজ করতে সক্ষ&zwnj;ম হয়েছিলেন। তারপরেও অনেক অভিযান হয়েছে। তখন ধরাবাঁধা কোনো পথ ছিল না, থাকার জায়গা ছিল না। পথে জল পাওয়া যেত না। তাবু লাগানোর জায়গা পেতে অসুবিধা হত। জঙ্গল থেকে ফিরে অনেকেই অসুখে পড়তেন। </span></span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size: 14pt;\"><span lang=\"BN-BD\" style=\"line-height: 115%; font-family: Vrinda;\">তবে সেসব অসুবিধা এখন আর নেই। এ জঙ্গলে সব চেয়ে বিপদসঙ্কুল তথা মজার পথ হল- লাভা থেকে আলুবাড়ি হয়ে রেচেলা টপ আর তারপর রেচেলা থেকে নদী বরাবর থুসুম, ভোটেখড়ক, মৌচুকি হয়ে সামসিং পৌঁছে যাওয়া। কিন্তু জঙ্গলের উদ্ভিদ আর প্রাণীদের কথা ভেবে বনদফতর নদীর সমান্তরালে এই হাঁটাপথের ওপর নিষেধাজ্ঞা জারি করেছে। এখন যে পথে হাঁটার অনুমতি আছে তা হল, লাভা-চৌদাফেরি-পিএইচই ক্যাম্প-আলুবাড়ি-হাতিদাণ্ডা-রেচেলা। ফেরা যায় একই পথে অথবা রেচেলা-হাতিদাণ্ডা-মূলখড়কা-আরিতার অথবা রেচেলা-রুকা ক্যাম্প-তাংতা-তোদে। রেচেলা থেকে টাইগার ক্যাম্প-ভুজেলগাঁও-সামসিং এই পথের কথা কেউ কেউ বললেও, বনদফতরের কর্তাদের সঙ্গে কথা বলে জেনেছি এ পথে হাঁটার অনুমতি এখন আর দেওয়া হয় না।</span></span></p>\r\n<p class=\"MsoNormal\"><span lang=\"BN-BD\" style=\"font-size: 14pt; line-height: 115%; font-family: Vrinda;\">নেওড়া নদীতে মাছধরা বারণ। জঙ্গলের প্রাণীরা আমাদের দেখা দিতে পছন্দ করে না। তবে হ্যাঁ, হরেকরকম পাখি আপনার জন্য পোজ্ দিয়ে যাবে যদি আপনি আগ্রহ দেখান। পাঁচ দিনের মধ্যে জঙ্গলের এপার থেকে ওপার হেঁটে নেওয়া যায়। সেই হেঁটে বেড়ানোর গল্প আমি আপনাদের সঙ্গে ভাগ করে নেওয়ার চেষ্টা করব পরবর্তী পর্বগুলিতে। </span></p>\r\n<p>&nbsp;</p>\r\n<p class=\"MsoNormal\"><span lang=\"BN-BD\" style=\"line-height: 115%; font-family: Vrinda; font-size: 14pt;\">&nbsp;</span></p>', '1424011889neora.jpg', 0, 0, '', '', '2015-02-15'),
(73, '৯৭ ভাগ মুসলমান যা চায় না', '', 'গ্লোবাল নিউজ', '<p style=\"margin: 0px 0px 6px; outline: 0px; padding: 0px; font-size: 16px; border: 0px; vertical-align: top; line-height: 24px; text-align: justify; font-family: SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><span style=\"font-size: 14pt;\">পবিত্র দ্বীন ইসলাম উনার দৃষ্টিতে হিংস্র প্রাণী বা পতঙ্গকেও আগুন দিয়ে পোড়ানো নিষেধ।তারপরেও শতকরা ৯৭ ভাগ মুসলমান উনাদের দেশে হরতাল ও অবরোধের নামে আশরাফুলমাখলুকাত মানুষকে নির্বিচারে আগুন দিয়ে পোড়ানো হয় কি করে?</span></p>\r\n<p style=\"margin: 0px 0px 6px; outline: 0px; padding: 0px; font-size: 16px; border: 0px; vertical-align: top; line-height: 24px; text-align: justify; font-family: SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><span style=\"font-size: 14pt;\">হাজার হাজার বাসে আগুন লাগানো হয় কি করে?</span></p>\r\n<p style=\"margin: 0px 0px 6px; outline: 0px; padding: 0px; font-size: 16px; border: 0px; vertical-align: top; line-height: 24px; text-align: justify; font-family: SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><span style=\"font-size: 14pt;\">আবারো অগ্নিসংযোগ। আবারো অগ্নিদগ্ধ। রাজধানীতে একের পর এক বাসে অগ্নিসংযোগ করছে হরতাল-অবরোধকারীরা। দৈনিক আল ইহসান শরীফ উনার অনুসন্ধানে জানা গেছে,এবারের হরতাল অবরোধে শতাধিক গাড়িতে অগ্নিসংযোগ করা হয়েছে এবং অগ্নিদগ্ধ হয়েছে ৪ জন চালক।</span></p>\r\n<p style=\"margin: 0px 0px 6px; outline: 0px; padding: 0px; font-size: 16px; border: 0px; vertical-align: top; line-height: 24px; text-align: justify; font-family: SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><span style=\"font-size: 14pt;\">২০১৪ সালের শুরুতেই ২ জানুয়ারি গাজীপুরের কালিয়াকৈর উপজেলার সফিপুর এলাকায় একটি গরুবাহী ট্রাকে পেট্রোল বোমা হামলা চালায় বিএনপি-জামাতের অবরোধকারীরা। এতেঅগ্নিদগ্ধ হয় চালকসহ দুই সবজি ব্যবসায়ী।</span></p>\r\n<p style=\"margin: 0px 0px 6px; outline: 0px; padding: 0px; font-size: 16px; border: 0px; vertical-align: top; line-height: 24px; text-align: justify; font-family: SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><span style=\"font-size: 14pt;\">২০১৪ সালটি ছিল আগুনে ঝলসে মৃত্যুবরণ করার বছর। ২০১৪ সালে দেশের বিভিন্ন জেলা-উপজেলায় বিএনপি-জামাতের পেট্রোল বোমা হামলায় অগ্নিদগ্ধ হয়ে প্রাণ হারিয়েছে বহু লোক।</span></p>\r\n<p style=\"margin: 0px 0px 6px; outline: 0px; padding: 0px; font-size: 16px; border: 0px; vertical-align: top; line-height: 24px; text-align: justify; font-family: SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><span style=\"font-size: 14pt;\">২০১৪ সালের শেষের দিকে গত ২৮ ডিসেম্বর বিএনপি&rsquo;র ডাকা হরতালের আগের দিন রাজধানীর মিরপুর কাজীপাড়া এলাকায় দুর্বৃত্তদের পেট্রোল বোমায় একই পরিবারের তিনজন অগ্নিদগ্ধহয়।</span></p>\r\n<p style=\"margin: 0px 0px 6px; outline: 0px; padding: 0px; font-size: 16px; border: 0px; vertical-align: top; line-height: 24px; text-align: justify; font-family: SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><span style=\"font-size: 14pt;\">আর আন্দোলনের নামে ২০১৩ সালের হাঙ্গামায় ৯৪ জন আগুনে পুড়ে দেশের বিভিন্ন হাসপাতালে ভর্তি হয়, তাদের মধ্যে ২১ জন মারা গেছে। অপরদিকে ফায়ার সার্ভিস ও সিভিলডিফেন্সের তথ্যানুসারে, ২০১৩ সালের প্রথম ১০ মাসে সারা দেশে হরতাল ও বিভিন্ন সহিংস কর্মসূচি চলাকালে যানবাহনে অগ্নিসংযোগের ঘটনায় শতাধিক কোটি টাকা মূল্যের আর্থিকক্ষয়ক্ষতি হয়েছে। জানুয়ারি থেকে ১০ নভেম্বর পর্যন্ত আগুনে পুড়েছে মোট ১০৭৪টি যানবাহন।</span></p>\r\n<p style=\"margin: 0px 0px 6px; outline: 0px; padding: 0px; font-size: 16px; border: 0px; vertical-align: top; line-height: 24px; text-align: justify; font-family: SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><span style=\"font-size: 14pt;\">লেখাবাহুল্য, মাটি, পানি, বাতাসের মতো পরিচিত একটি বস্তু হলো আগুন। আগুনকে মহান আল্লাহ পাক তিনি পৃথিবীর মানুষের উপকার সাধনের লক্ষ্যে এবং পরপারে মানুষকে শাস্তিপ্রদানের লক্ষ্যে সৃষ্টি করেছেন। পৃথিবীর আগুন আর পরকালের আগুনের মধ্যে যথেষ্ট পার্থক্যও রয়েছে। যেমন, পৃথিবীর আগুন অপেক্ষা পরকালের আগুন ৭০গুণ বেশি শক্তিশালী এবং সেআগুনের রঙ ভয়ানক কালো।</span></p>\r\n<p style=\"margin: 0px 0px 6px; outline: 0px; padding: 0px; font-size: 16px; border: 0px; vertical-align: top; line-height: 24px; text-align: justify; font-family: SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><span style=\"font-size: 14pt;\">পবিত্র কুরআন শরীফ উনার ১৪৫ জায়গায় মহান আল্লাহ পাক তিনি আগুনের কথা উল্লেখ করেন। এর অধিকাংশ বক্তব্যই পরপারের আগুনকে ঘিরে। সেই আগুনের উত্তপ্ততা স্পষ্টভাবেআঁচ করা পৃথিবীর মানুষের পক্ষে সম্ভব নয়।</span></p>\r\n<p style=\"margin: 0px 0px 6px; outline: 0px; padding: 0px; font-size: 16px; border: 0px; vertical-align: top; line-height: 24px; text-align: justify; font-family: SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><span style=\"font-size: 14pt;\">পৃথিবীতে আগুনকে মহান আল্লাহ পাক তিনি নিয়ামত হিসেবে সৃষ্টি করেছেন, মানুষ তাদের প্রয়োজনে এ আগুন ব্যবহার করবে; কিন্তু মানুষের নীতি ও নৈতিকতার অবক্ষয় সীমা ছাড়িয়েগেছে। শক্রতামূলকভাবে দোকানে বা ফ্যাক্টরীতে আগুন ধরিয়ে দেয়। তাতে অসহায় মানুষ পুড়ে মরে। মাঝে মাঝে এমন সংবাদও পাওয়া যায় যে, দোকানের মালিক ইন্স্যুরেন্সের টাকারলোভে কারখানায় আগুন ধরিয়ে দেয়। শত শত নিরীহ মানুষকে এভাবে আগুনে জ্বালিয়ে দেয়ার পদ্ধতিটি জাহিলিয়া যুগ তথা সভ্যতা-পূর্ব যুগের মানুষের কাছেও অপরিচিত। যারা নিরীহমানুষকে পৃথিবীর লাল আগুনে পোড়াচ্ছে, তাদেরকে মহান আল্লাহ পাক তিনি পরকালে অবশ্যই সেই কালো আগুনে নিক্ষেপ করবেন।</span></p>\r\n<p style=\"margin: 0px 0px 6px; outline: 0px; padding: 0px; font-size: 16px; border: 0px; vertical-align: top; line-height: 24px; text-align: justify; font-family: SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><span style=\"font-size: 14pt;\">আগুনে পুড়িয়ে মারা বা মারার চেষ্টা অতি নির্মম ও মহা পৈশাচিক। এতে শিরকের বিষয়টি সংযুক্ত হয়। নূরে মুজাসসাম হাবীবুল্লাহ হুযূর পাক ছল্লাল্লাহু আলাইহি ওয়া সাল্লাম তিনি কোনোমানুষ, জীব-জন্তু বা কোনো ফসল-গাছ-পালা আগুনে পোড়াতে নিষেধ করেন। তিনি ইরশাদ মুবারক করেন, &aelig;আগুন দ্বারা কেবল মহান আল্লাহ পাক তিনিই শাস্তি দেবেন। মহান আল্লাহপাক তিনি ছাড়া আর কারো আগুনের দ্বারা শাস্তি দেয়া উচিত নয়।&rdquo; (বুখারী শরীফ, আবু দাউদ শরীফ)</span></p>\r\n<p style=\"margin: 0px 0px 6px; outline: 0px; padding: 0px; font-size: 16px; border: 0px; vertical-align: top; line-height: 24px; text-align: justify; font-family: SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><span style=\"font-size: 14pt;\">নূরে মুজাসসাম হাবীবুল্লাহ হুযূর পাক ছল্লাল্লাহু আলাইহি ওয়া সাল্লাম তিনি কাফির-মুশরিকদের বিরুদ্ধেও কোনো যুদ্ধে কাউকে আগুনে পোড়ানোর অনুমতি দেননি। কারণ জাহান্নামে মহানআল্লাহ পাক তিনি অপরাধীদের জন্য আগুনের শাস্তি প্রস্তুত রেখেছেন। জাহান্নামকে আরবীতে &lsquo;নার&rsquo; বা আগুন বলা হয়েছে। তাই এ শাস্তি কোনো মানুষ দিতে চাইলে এতে মহান আল্লাহ পাকতিনি বিশেষ শাস্তি প্রয়োগের ক্ষমতায় যেন উনার সমাসীন হওয়ার দাবি চলে আসে।</span></p>\r\n<p style=\"margin: 0px 0px 6px; outline: 0px; padding: 0px; font-size: 16px; border: 0px; vertical-align: top; line-height: 24px; text-align: justify; font-family: SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><span style=\"font-size: 14pt;\">অথচ এখন আমাদের মুসলিম ভাই-বোনদেরকে অহরহ আগুনে পোড়ানো হচ্ছে। জীবন্ত মানুষের গায়ে পেট্রোল ঢালা হচ্ছে, আগুন জ্বালানো হচ্ছে।</span></p>\r\n<p style=\"margin: 0px 0px 6px; outline: 0px; padding: 0px; font-size: 16px; border: 0px; vertical-align: top; line-height: 24px; text-align: justify; font-family: SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><span style=\"font-size: 14pt;\">মূলত, মানুষ হচ্ছে আশরাফুল মাখলুকাত। মানুষ তো অনেক উপরের বিষয়; এমনকি কুকুর-শৃগালও যাতে কষ্ট না পায় সেটাই হলো পবিত্র দ্বীন ইসলাম উনার শিক্ষা। এ জন্যই খলীফাতুলমুসলিমীন আমিরুল মু&rsquo;মিনীন হযরত ফরূক্বে আ&rsquo;যম আলাইহিস সালাম তিনি ইরশাদ মুবারক করেছেন, &aelig;ফোরাতের তীরে যদি একটা কুকুরও না খেয়ে মারা যায়, তবে আমি হযরত ইবনেখাত্তাব আলাইহিস সালাম উনাকে তার জন্য জবাবদিহি করতে হবে।&rdquo; সুবহানাল্লাহ!</span></p>\r\n<p style=\"margin: 0px 0px 6px; outline: 0px; padding: 0px; font-size: 16px; border: 0px; vertical-align: top; line-height: 24px; text-align: justify; font-family: SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><span style=\"font-size: 14pt;\">এই যদি হয় সম্মানিত ইসলামিক মূল্যবোধ, তবে কোথায় আজ মুসলমান? শতকরা ৯৭ ভাগ মুসলমান অধ্যুষিত এদেশে এক মুসলমান কী করে নির্বিচারে অপর মুসলমানের শরীরে আগুনধরিয়ে দিতে পারে? মূলত, এদেশের ৯৭ ভাগ জনগোষ্ঠী মুসলমান উনারা অপর মুসলমান দ্বারাই এত বর্বরতা, নির্মমতা, বীভৎসতার শিকার হচ্ছে এ কারণেই যে, এদেশের মুসলমানরা নামমাত্রই মুসলমান। রাষ্ট্রীয় পৃষ্ঠপোষকতায় তাদের সম্মানিত ইসলামী শিক্ষা দেয়া হয়নি। সম্মানিত ইসলামী আদর্শের প্রচার করা হয়নি।</span></p>\r\n<p style=\"margin: 0px 0px 6px; outline: 0px; padding: 0px; font-size: 16px; border: 0px; vertical-align: top; line-height: 24px; text-align: justify; font-family: SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><span style=\"font-size: 14pt;\">সঙ্গতকারণেই তাই বলতে হয়, বর্তমান গণতান্ত্রিক রাজনীতির ধারাবাহিকতায় রাজনৈতিক দলগুলোর কোন্দল, সহিংসতা, হরতাল, অবরোধ ইত্যাদির নামে অগ্নিসংযোগ, পুড়িয়ে মানুষহত্যা থেকে বাঁচতে হলে আমাদেরকে অনন্তকালব্যাপী সাইয়্যিদুল আ&rsquo;ইয়াদ শরীফ পালন করতে হবে। সাইয়্যিদুল মুরসালীন, ইমামুল মুরসালীন, নূরে মুজাসসাম, হাবীবুল্লাহ হুযূর পাকছল্লাল্লাহু আলাইহি ওয়া সাল্লাম উনার মহিমান্বিত জীবনী মুবারক আলোচনা ও অনুসরণ করতে হবে। আগুন দিয়ে মানুষকে জ্বালানো এবং সম্পদ পোড়ানোর সম্পর্কে সচেতনতা সম্বলিতসম্মানিত হাদীছ শরীফ এবং উনার শিক্ষা সর্বত্র ছড়িয়ে দিতে হবে।</span></p>\r\n<p style=\"margin: 0px 0px 6px; outline: 0px; padding: 0px; font-size: 16px; border: 0px; vertical-align: top; line-height: 24px; text-align: justify; font-family: SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><span style=\"font-size: 14pt;\">মূলত, এসব অনুভূতি ও দায়িত্ববোধ আসে পবিত্র ঈমান ও পবিত্র দ্বীন ইসলাম উনাদের অনুভূতি ও প্রজ্ঞায়।</span></p>', '1424011903Neora National Park.jpg', 0, 0, '', '', '2015-02-15'),
(74, 'নেওড়া নদীর উপত্যকাঃ একটু হাঁটলাম, অল্প জানলাম-পর্ব/২', '', 'মণিরুল হক, ক্লাইম্বার্স সার্কেল\r\nছবি- ডাঃ আমিনুল ইসলাম, ক্লাইম্বার্স সার্কেল\r\n', '<p class=\"MsoNormal\"><em><span style=\"font-size: 14.0pt; line-height: 115%; font-family: Vrinda; color: red; mso-bidi-language: BN-BD;\">&ldquo;<span lang=\"BN-BD\">ঘরে দাঁড়িয়ে মন বলে শুধু,যাই</span></span></em></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 1.5in; text-indent: .5in;\"><span style=\"font-size: 14.0pt; line-height: 115%; font-family: Vrinda; color: red; mso-bidi-language: BN-BD;\"><em><span lang=\"BN-BD\">যাই</span>&rdquo;</em></span></p>\r\n<p class=\"MsoNormal\"><span lang=\"BN-BD\" style=\"font-size: 14pt; line-height: 115%; font-family: Vrinda;\">ঘরে থাকতে খারাপ তো লাগে না। ঘরে বসে খেতে, ঘুমোতে কী আরাম! তবু পিঠে ব্যাগ নিয়ে রাস্তায় দাঁড়ালেই দেখি শিরদাঁড়া সোজা হয়ে যায়। হাঁটুর ব্যথা কমে যায়। পথকে মনে হয় কত সোজা। অচেনা অনেক কিছুই চেনা, কতকালের চেনা মনে হয়। এই যেমন গুড্ডুর মুখটা। স্টেশনের গেটের বাইরে তাকাতেই অত লোকের মাঝে যে অচেনা লোকটার ওপর চোখ আটকে গেল সেই গুড্ডু। আমাদের গাইড। চলে এসেছে গাড়ি নিয়ে। গাড়িতে বসলাম, ওদলাবাড়ির হাট থেকে কেনাকাটা করে চা খেয়ে চললাম লাভার দিকে। একটু পরে গাড়ি ঢুকল চা বাগানে। পথে পড়ল অনেক ছোট বড় গ্রাম। গরুবাথান হয়ে গাড়ি এসে থামল পাপরখেতিতে। একটু নেমে হাতপা ছাড়ালাম, ছবি তুললাম। চেল নদীর ব্রিজ পেরিয়ে গাড়ি এসে থামল লাভা বাজারে বিকেল তিনটে নাগাদ। বন দফতরের অনুমতি নিয়ে, পেট পুরে খেয়ে গাড়ির কাছে আসতে পাইলট একজনকে দেখিয়ে বললেন, এই আমার মালিক। মালিক বললেন, এই গাড়ি কমজোরি উপরে যাবে না। অন্য গাড়ি নিতে হবে, আর তার জন্য লাগবে আরও পাঁচশো টাকা বেশী। নিজেদের মধ্যে মুখ চাওয়া-চাওয়ি করা যেত, মালিকের সঙ্গে তর্ক করা যেত, গুড্ডুকে ধমকানো যেত। তাতে কাজ হত না কিছুই। আর এখন দরকার তাড়াতাড়ি বেরনো। চারটের সময় বেরিয়ে জিরো পয়েন্ট পৌঁছতে এক ঘন্টার মতো লাগবে। তারপর হেঁটে পিএইচই পৌঁছেতে আরও দেড় ঘন্টার পথ। অতএব, মালপত্র আর নিজেদের তাড়াতাড়ি শিফট করলাম নতুন গাড়িতে। চলা শুরু করল গাড়ি। </span></p>\r\n<p class=\"MsoNormal\"><span lang=\"BN-BD\" style=\"font-size: 14pt; line-height: 115%; font-family: Vrinda;\">গাড়িতে আমরা পাঁচজন আর গড্ডুর সঙ্গে আরও তিনজন নিয়ে ওরা। ঘুরে ঘুরে উঁচুতে ওঠা নির্জন রাস্তা, শুনশান জঙ্গল আর সেই জঙ্গলের মধ্য থেকে উঠে আসা পোকা-পাখিদের সংগীতে এক মনোরম পরিবেশের আবহ। মনে হবে, সবাই যার যার মত উপভোগ করছি পরিবেশটা, চেটেপুটে নিচ্ছি বাইরের রং রূপ। কিন্তু আসলে তা নয়, আকাশ ভারি হয়ে এসেছে। মেঘেরা জমাট হয়ে দাঁড়িয়ে পড়েছে রাস্তার ওপর। ভার না কমালে সে আর নড়তে পারবে না। একটু পরেই ঝিমঝিম করে বৃষ্টি নামল। নামল এবং চলল, থামার লক্ষ&zwnj;ণ নেই। চৌদাফেরি চেকপোস্ট আসতে গুড্ডু নেমে দৌড় দিল। জানি, এখানে কাগজপত্র দেখালে তবেই অনুমতি মিলবে এগিয়ে যাওয়ার।</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"BN-BD\" style=\"font-size: 14pt; line-height: 115%; font-family: Vrinda;\">ভাবছি, এই বৃষ্টিতে কিভাবে পিএইচই পৌছব। এই দুর্যোগ, এই অন্ধকারে পাতা নাতা মাড়িয়ে কাদা ঘেটে হাঁটাটা যাচ্ছে তাই রকমের বাজে একটা অভিজ্ঞতা হবে। একটু পিছনে একটা বন্ধ ঘর দেখে এসেছি। ওখানে কী রাতটা কাটানো যাবে, গুড্ডুকে জিজ্ঞাসা করতে হবে। যদি ব্যাটারা না বলে, তাহলে কিছু টাকা দিতে হবে। আচ্ছা, ওরা যদি টাকা না নিতে চায় তাহলে তো দুর্ভোগ। ফোনে বারবার গুড্ডুকে জিজ্ঞেস করেছিলাম, প্রথম দিন পিএইচই পৌছনো যাবে তো। উত্তর ছিল একটাই-আরামসে। আহা, কি আরামসেই না পৌছবো!</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"BN-BD\" style=\"font-size: 14pt; line-height: 115%; font-family: Vrinda;\">বন্ধ কাঁচের জানালায় টকটক শব্দ। কাঁচ নামাতে গুড্ডু বলল, নামুন। কি ফ্যাসাদ, পারমিশনে কি কোনও গোলমাল। কথা না বলে বাইরে পা বাড়ালাম। ও বলল, আজ এখানে থাকার ব্যবস্থা হয়েছে। ওই উপরে একটা বাংলো আছে, ওখানেই থাকা যাবে। রান্নাটা ওদের কিচেনেই হবে। ভুল নয়, ঠিকই শুনেছি। ছাতা ফেলে দু&rsquo;পাক নেচে নিলাম চৈতন্যের ভঙ্গিতে। </span></p>\r\n<p class=\"MsoNormal\"><span lang=\"BN-BD\" style=\"font-size: 14pt; line-height: 115%; font-family: Vrinda;\">সন্ধ্যার পর বৃষ্টি থেমেছিল, আকাশে চাঁদ উঠেছিল, বেশ ঠাণ্ডা পড়েছিল, খিচুড়ি খাওয়ার জন্য গুড্ডু আমাদের ডেকেও নিয়েছিল।</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 1.5in; text-indent: .5in;\"><span lang=\"BN-BD\" style=\"font-size: 14.0pt; line-height: 115%; font-family: Vrinda; color: red; mso-bidi-language: BN-BD;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"BN-BD\" style=\"mso-ansi-font-size: 14.0pt; line-height: 115%; font-family: Vrinda; mso-ascii-font-family: Calibri; mso-hansi-font-family: Calibri; mso-bidi-language: BN-BD;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><span lang=\"BN-BD\" style=\"mso-ansi-font-size: 14.0pt; line-height: 115%; font-family: Vrinda; mso-ascii-font-family: Calibri; mso-hansi-font-family: Calibri; mso-bidi-language: BN-BD;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\">&nbsp;</p>', '1424011930Neora National Park.jpg', 0, 0, '', '', '2015-02-15'),
(75, 'নেওড়া নদীর উপত্যকাঃ একটু হাঁটলাম, অল্প জানলাম-পর্ব/৩', '', 'মনিরুল হক, ক্লাইম্বার্স সার্কেল\r\nছবি- ডাঃ আমিনুল ইসলাম, ক্লাইম্বার্স সার্কেল', '<p class=\"MsoNormal\"><strong><em><span style=\"font-size: 12.0pt; line-height: 115%; font-family: Vrinda; color: red; mso-bidi-language: BN-BD;\">&ldquo;<span lang=\"BN-BD\">শত শতাব্দীর</span></span></em></strong></p>\r\n<p class=\"MsoNormal\"><strong><em><span lang=\"BN-BD\" style=\"font-size: 12.0pt; line-height: 115%; font-family: Vrinda; color: red; mso-bidi-language: BN-BD;\">&nbsp;তরু-বনশ্রীর</span></em></strong></p>\r\n<p class=\"MsoNormal\"><strong><em><span style=\"font-size: 12.0pt; line-height: 115%; font-family: Vrinda; color: red; mso-bidi-language: BN-BD;\">&nbsp;<span lang=\"BN-BD\">নির্জন মনশ্রীরঃ </span></span></em></strong></p>\r\n<p class=\"MsoNormal\"><strong><em><span lang=\"BN-BD\" style=\"font-size: 12.0pt; line-height: 115%; font-family: Vrinda; color: red; mso-bidi-language: BN-BD;\">তোমাকে শোনাই।</span></em></strong><strong><em><span style=\"font-size: 12.0pt; line-height: 115%; font-family: Vrinda; color: red; mso-bidi-language: BN-BD;\">&rdquo;</span></em></strong></p>\r\n<p class=\"MsoNormal\"><span lang=\"BN-BD\" style=\"font-size: 14.0pt; line-height: 115%; font-family: Vrinda; mso-bidi-language: BN-BD;\">ওহ, কালকের রাতটা বড় শান্ত ছিল। নিরাপদ নিশ্চিন্ত ঘেরা টোপে বসে থাকলে ঝড়-ঝঞ্জা তো কাবু করতে পারে না। তখন কাঁচের জানালা দিয়ে ওদের কেরামতি দেখতে খারাপ লাগে না। কিন্তু সারা রাতে বৃষ্টি বা ঝড়ের কোনও খবর পাইনি। কেন, রজনীগন্ধা না থাকলে ঝড়ের কি আসতে ইচ্ছে করে না! </span></p>\r\n<p class=\"MsoNormal\"><span lang=\"BN-BD\" style=\"font-size: 14.0pt; line-height: 115%; font-family: Vrinda; mso-bidi-language: BN-BD;\">সকালটাও শান্ত, রোদহীন। পোঁটলা গুছিয়ে পিঠে বেঁধে নেমে এলাম। চেক পোস্টের কর্মীদের বিদায় জানিয়ে হাঁটা শুরু করলাম। এখান থেকে উপর দিকের একটা পথ দিয়েও আলুবাড়ি যাওয়া যায়। আমরা নিলাম অন্য পথটি। পথটা বেশ চওড়া আর ভদ্র, তাই মনোরম। পাঁচ জনই যে যার মত হাঁটছি। যে যার পায়ে, যে যার মনে। সবাই তো চেনা পরস্পরের কাছে। তাই পুরানো। এখন তো চারদিকেই নতুন। নতুন পথ, নতুন গাছ, নতুন পাতা, নতুন বাতাস, নতুন আকাশ, নতুন পোকা, নতুন পাখি। তাই নতুন নতুন ডাক। নতুন কথা জানা, নতুন কথা বলা আর নতুন কথা শোনা। পুরনো বন্ধুরা তাই ছাড়াছাড়া। যে যার মত দেখছে, ছবি তুলছে, এগোচ্ছে। </span></p>\r\n<p class=\"MsoNormal\"><span lang=\"BN-BD\" style=\"font-size: 14.0pt; line-height: 115%; font-family: Vrinda; mso-bidi-language: BN-BD;\">এগোতে এগোতে জিরো পয়েন্ট। মানে চওড়া গাড়ির রাস্তা শেষ। সেখানে একটা ছোট কুঁড়ে। ভিতরে বাঁশের মাচা। আগুন জ্বালাবারও একটা জায়গা আছে। আজকে, এখনই দিনের বেলায় এখানে ঢোকার প্রশ্ন নেই। কিন্তু কি হত, যদি গতকাল গাড়ি এই পর্যন্ত আসত। তখন তো এই কুড়েটিই হত আমাদের প্রাসাদ। </span></p>\r\n<p class=\"MsoNormal\"><span lang=\"BN-BD\" style=\"font-size: 14.0pt; line-height: 115%; font-family: Vrinda; mso-bidi-language: BN-BD;\">এবার পথ সরু, কাঁদাময়, পিচ্ছিল। পায়ে জড়িয়ে যাচ্ছে লতা, মাথায় চেপে বসছে ডাল। একটু গিয়েই পথ যাচ্ছে বেঁকে। মনে হচ্ছে যেন সে পথ ঢুকে যাচ্ছে কোনও গাছের কোটরে বা হারিয়ে যাচ্ছে গুঁড়ির অন্দরে। জলের শব্দ পেয়ে বুঝলাম পিএইচই পয়েন্ট কাছেই। পরে দেখলাম নেওড়া নদীর জল মোটা পাইপে ভরে নিয়ে যাওয়া হচ্ছে শহরে, লোকালয়ে। পাইপ ছেড়ে জলে নামলাম আবার জঙ্গলের পথে উঠলাম। নদীর উপরে একটা সাঁকো পেরিয়ে অনেকটা পথ হাঁটলাম বড় বড় গাছের গভীর জঙ্গলের মধ্য দিয়ে। হাঁটছি প্রায় সমতল পথে, প্রায় অন্ধকারে, নির্জনে। </span></p>\r\n<p class=\"MsoNormal\"><span lang=\"BN-BD\" style=\"font-size: 14.0pt; line-height: 115%; font-family: Vrinda; mso-bidi-language: BN-BD;\">হঠাৎই চোখের সামনে একটা ওয়াচ টাওয়ার। বুঝলাম, এটাই জড়িবুটি। চারদিকে কোনও বড় গাছ নেই। এর এক পাশে নদী নেওড়ার নাচগান, অপরদিকে বড় ঘাস আর লতাগুল্মের আড্ডা। আড্ডাবাজ পাখিরাও তার মাঝে আড্ডা দিচ্ছে মনের সুখে। একটা নীলকণ্ঠ পাখি আমাদের জন্য অপেক্ষ&zwnj;া করছিল। টাওয়ারের চারপাশ ঘুরে ঘুরে সে আমাদের দেখতে লাগল। স্যাক নামিয়ে উঠলাম টাওয়ারের মাচায়। মাচা তো মাচা নয় যেন পার্থিব স্বর্গের বারান্দা। চোখ-মন-সবুজ-নীল মিলে নির্জনতা কিংবা একাকীত্বের আকাঙ্খা এমন প্রকট করে তুলল যে সবাই তাকিয়ে রইলাম ফ্যালফ্যাল করে। এমন যে বকাউল্লো গুড্ডু, তারও বাত বনধ। তবুও সেই প্রথম মুখ খুলল, এখানে থাকবেন নাকি দাদা? তুমি আগে বলনি কেন গুড্ডু, পরিকল্পনা সেভাবেই করতাম। এখানে থাকলে কালকের পথ অনেকটা লম্বা হয়ে যাবে তো। হ্যাঁ, দাদা হবে না।&nbsp;<span style=\"line-height: 21.4666652679443px;\">থাকা হবে কি হবে &nbsp;না, হলে কি দেখতাম, না দেখতাম পরে আর আসা &nbsp;হবে কিনা</span>&nbsp;এসব কথা&nbsp;হল, কিন্তু নড়াচড়ার কোনও ইচ্ছে কারুরই নেই। ধ্যাত যাব না, মন বলছে। </span></p>\r\n<p class=\"MsoNormal\"><span lang=\"BN-BD\" style=\"font-size: 14.0pt; line-height: 115%; font-family: Vrinda; mso-bidi-language: BN-BD;\">যেন পরাজিত, সবাই। নিঃশব্দে নেমে এলাম টাওয়ার থেকেই। কথা দিলাম সবাইকেই আবার এ পথে যখন আসব, এখানে থাকব, থাকবই। আবার চলছি। নেওড়ার ধার ধরে। বড় জঙ্গল, ছোট জঙ্গল, ঘাস জঙ্গল, বাঁশ&nbsp; জঙ্গলে ঘুরে ঘুরে। আবার পেরোলাম নেওড়াকে। এবার চড়াই। নদী পেরিয়ে ঘণ্টা খানেক লাগল চড়াই শেষ করতে। এলাম আলুবাড়ি ওয়াচ টাওয়ারের নীচে। বেলা বাড়ছে। মেঘ জমছে, গাঢ় হচ্ছে। আরও আধ ঘণ্টার পথ পেরিয়ে এলাম আলুবাড়ি ক্যাম্পে। শুরু হল বৃষ্টি। হবি, হ। যত পারিস ঢাল আমরা তো নিরাপদে, তোর ছোঁওয়া বাঁচিয়ে। লোয়ার কটেজের একটা ঘরে আমাদের থাকার ব্যবস্থা করে নিয়েছি। রান্না খাবার জায়গা আপার কটেজে। বিকেল থেকে রাত পর্যন্ত শুধু আপার আর লোয়ার, লোয়ার আর আপার। শুনলাম, কাল সকালে শুধু আপার আর আপার। সে দেখা যাবে, এখন তো যাই অপার ঘুমে। &nbsp;</span></p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>', '1424011952WT fff.jpg', 0, 0, '', '', '2015-02-15'),
(76, 'নেওড়া নদীর উপত্যকাঃ একটু হাঁটলাম, অল্প জানলাম-পর্ব/৪', '', 'মণিরুল হক, ক্লাইম্বার্স সার্কেল\r\nছবিঃ তাপস গাঙ্গুলি, ক্লাইম্বার্স সার্কেল', '<p class=\"MsoNormal\"><strong><em><span style=\"font-size: 12.0pt; line-height: 115%; font-family: Vrinda; color: red; mso-bidi-language: BN-BD;\">&ldquo;<span lang=\"BN-BD\">রক্তে কোন প্রাচীন যৌবন নিয়ে চলি...</span></span></em></strong></p>\r\n<p class=\"MsoNormal\"><strong><em><span lang=\"BN-BD\" style=\"font-size: 12.0pt; line-height: 115%; font-family: Vrinda; color: red; mso-bidi-language: BN-BD;\">বনের আনন্দে ঘুরি, ভয়ে লোভে, দুর্বার স্মৃতিতে</span></em></strong></p>\r\n<p class=\"MsoNormal\"><strong><em><span lang=\"BN-BD\" style=\"font-size: 12.0pt; line-height: 115%; font-family: Vrinda; color: red; mso-bidi-language: BN-BD;\">জঙ্গলে পেয়েছি প্রাণ, দু-ঘণ্টা ভদ্রতা ভুলে থাকি।</span></em></strong><strong><em><span style=\"font-size: 12.0pt; line-height: 115%; font-family: Vrinda; color: red; mso-bidi-language: BN-BD;\">&rdquo;</span></em></strong></p>\r\n<p class=\"MsoNormal\"><span lang=\"BN-BD\" style=\"font-size: 14.0pt; line-height: 115%; font-family: Vrinda; mso-ascii-font-family: Calibri; mso-hansi-font-family: Calibri; mso-bidi-language: BN-BD;\">আলুবাড়ি হাট-এর পিছন দিক দিয়ে পথ গেছে রেচেলার দিকে। খাড়া, বৃষ্টি ভেজা পথ। পায়ের তলায় কাদা আর ভিজে পচা পাতা। পাশের গাছের ডালে পাতায় জল। লেগে যাচ্ছে গায়ের জামায়, ভিজে যাচ্ছে। খাড়া উঠে এলাম মিনিট কুড়ি। পথ এখন খানিকটা চওড়া আর সহজ। শুরু হল বাঁশবন। ফাঁপা লম্বা বাঁশের ঘন বন। গুড্ডু হঠাৎ চলে গেল সেই বাঁশ বনের মধ্যে। ব্যাপার কি! এগিয়ে গিয়ে দেখি, সে পকেট থেকে বার করেছে সেল ফোন। একটু উপরে একটা ফাঁকা জায়গায় গেলে পাওয়া যাবে নেটওয়ার্ক। সুড়সুড় করে সবাই হাজির হলাম সেখানে। সবারই সেল ফোনের চার্জ কমল। কিন্তু চার্জড হল সবাই। আবার হাঁটা। জল খাওয়া, লজেন্স খাওয়া, টুকটাক কথা বলা। সবাই হাঁটছি আপন ছন্দে। তবে সামনের জন আর তার পিছনের জন পরস্পরকে চোখে চোখে রাখছে। পথ একটাই, ভুল করার কোনও সুযোগ নেই। তবে যে কোনও অসুবিধা যে কারও হতে পারে। ঘটতে পারে আচমকা কোনও আঘাত। আসতে পারে কোনও বিপদ। তক্ষ&zwnj;ুনি দরকার পড়তে পারে সাহায্যের। তাই পরস্পরকে চোখে রেখে চলাই নিয়ম।</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"BN-BD\" style=\"font-size: 14.0pt; line-height: 115%; font-family: Vrinda; mso-ascii-font-family: Calibri; mso-hansi-font-family: Calibri; mso-bidi-language: BN-BD;\">পথের দু&rsquo;দিকে জঙ্গল আমাদের চোখে ঠুলি পরিয়ে দিয়েছে। কখনও কখনও পথ চলে গিয়েছে খাদের মধ্য দিয়ে। দু&rsquo;দিকে তার উঁচু দেওয়াল। সেই দেওয়ালের, মানে দোতলার বারান্দা থেকে আমাদের হাঁটাচলার ধরন-ধারন পরখ করছে গাছবাবুরা। আমরাই বা কম যাই কিসে, সেখান থেকেই ফাঁকফোঁকর খুঁজে আকাশ দেখার চেষ্টা করছি।</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"BN-BD\" style=\"font-size: 14.0pt; line-height: 115%; font-family: Vrinda; mso-ascii-font-family: Calibri; mso-hansi-font-family: Calibri; mso-bidi-language: BN-BD;\">ঘণ্টা তিনেক হেঁটে চড়াইটা প্রায় শেষ করে এনেছি। বাঁশবন শেষ। আবার পড়লাম বড় বড় গাছের মধ্যে। তার বেশির ভাগই রডোডেনড্রন। অবশ্য ফুল কম ছিল। আর একটু হেঁটেই পৌঁছে গেলাম জোড়পোখরির বড় পোখরিটার ধারে। তিন দিকে উঁচু জঙ্গলের ঢিপি, একপাশে আল দেওয়া। বদ্ধ একটা জলাশয়। গভীরতা তিন ফুটের বেশী নয়। পিপাসা পেয়েছে। জল তুলে জিওলিন মেশাতে গিয়ে দেখা গেল শিশি ফাঁকা। গুড্ডু বলল- দরকার নেই, এ জল পবিত্র, নিশ্চিন্তে খান। শুধু জলে নামবেন না, জল নোংরা করবেন না। </span></p>\r\n<p class=\"MsoNormal\"><span lang=\"BN-BD\" style=\"font-size: 14.0pt; line-height: 115%; font-family: Vrinda; mso-ascii-font-family: Calibri; mso-hansi-font-family: Calibri; mso-bidi-language: BN-BD;\">রেচেলার ট্রেকার্স হাট-এ এসে হাতে চা নিয়ে দাঁড়িয়েছি, শুরু হল শিলাবৃষ্টি। আমাদের ডাক্তারবাবু শৈশবে চলে গেলেন। নেমে গেলেন মাঠে। বুকে পিঠে শিলার আঘাত সইছেন, শিলা ধরছেন, শিলা মুখে ঘষছেন, শিলা খাচ্ছেন, শিলা ছুঁড়ে মারছেন এদিক ওদিক। </span></p>\r\n<p class=\"MsoNormal\"><span lang=\"BN-BD\" style=\"font-size: 14.0pt; line-height: 115%; font-family: Vrinda; mso-ascii-font-family: Calibri; mso-hansi-font-family: Calibri; mso-bidi-language: BN-BD;\">গুড্ডুর কিন্তু মুখ ভার। এই রেচেলা, এই পোখরি নিশ্চয় কেউ অপবিত্র করে গেছে আগে, তাই এই দুর্যোগ। ওকে বললাম,তা হবে হয়তো। তবে একটু পরেই দেখো সব ঠিক হয়ে যাবে। একটু পরে রোদ উঠল, আমাদের ওরা কাঠ নিয়ে ফিরল জঙ্গলের দিক থেকে। সে কাঠে রান্না হবে, সে কাঠ জ্বলে আমাদের শরীর গরম করে রাখবে। </span></p>\r\n<p class=\"MsoNormal\"><span lang=\"BN-BD\" style=\"font-size: 14.0pt; line-height: 115%; font-family: Vrinda; mso-ascii-font-family: Calibri; mso-hansi-font-family: Calibri; mso-bidi-language: BN-BD;\">বিকেলের দিকে আবার এলাম পোখরির ধারে। হলুদ আলোয় ভরে গেছে বন। গোল হয়ে তার ছায়া পড়েছে পোখরির জলে। উপরের নীল আকাশ আর সবুজ গাছপালা জলের মধ্যে নিজেদের দেখছে আর মিটিমিটি হাসছে। আমারও নিজেকে দেখার লোভ হল। মুখ বাড়ালাম জলে। একবার, দুবার, বারবার কিন্তু কিছুতেই দেখতে পেলাম না নিজেকে। কি হল, আমি তো জল নোংরা করিনি! জলে তো ঢেউও নেই! কি জঙ্গুলে নিয়ম রে বাবা! আমি সভ্য ভদ্র মানুষ। আমি কি নিজেকে দেখতে পাব না এখানে? </span></p>\r\n<p>&nbsp;</p>\r\n<p class=\"MsoNormal\"><span lang=\"BN-BD\" style=\"mso-ansi-font-size: 14.0pt; line-height: 115%; font-family: Vrinda; mso-ascii-font-family: Calibri; mso-hansi-font-family: Calibri;\">&nbsp;</span></p>', '1424011973WT.jpg', 0, 0, '', '', '2015-02-15'),
(77, 'নেওড়া নদীর উপত্যকাঃ একটু হাঁটলাম, অল্প জানলাম-পর্ব/৫', '', 'মনিরুল হক, ক্লাইম্বার্স সার্কেল\r\nছবিঃ তাপস গাঙ্গুলি', '<p class=\"MsoNormal\"><strong><em><span style=\"font-size: 12.0pt; line-height: 115%; font-family: Vrinda; color: red; mso-bidi-language: BN-BD;\">&ldquo;<span lang=\"BN-BD\">আদিম ক্ষ&zwnj;ুধিত ভোরে</span></span></em></strong></p>\r\n<p class=\"MsoNormal\"><strong><em><span lang=\"BN-BD\" style=\"font-size: 12.0pt; line-height: 115%; font-family: Vrinda; color: red; mso-bidi-language: BN-BD;\">রোদ নামে ঝাঁকে ঝাঁকে</span></em></strong></p>\r\n<p class=\"MsoNormal\"><strong><em><span lang=\"BN-BD\" style=\"font-size: 12.0pt; line-height: 115%; font-family: Vrinda; color: red; mso-bidi-language: BN-BD;\">পুলকিত ঘনছায়ে ত্রস্ত পাতা...</span></em></strong><strong><em><span style=\"font-size: 12.0pt; line-height: 115%; font-family: Vrinda; color: red; mso-bidi-language: BN-BD;\">&rdquo;</span></em></strong></p>\r\n<p class=\"MsoNormal\"><span lang=\"BN-BD\" style=\"font-size: 14.0pt; line-height: 115%; font-family: Vrinda; mso-bidi-language: BN-BD;\">মাঝরাতে ঘুম ভেঙ্গে গেল। আর ঘুমোতে ভরসা পাচ্ছি না। যদি ঘরেই সকাল হয়ে যায়। বারবার সময় দেখতে দেখতে চারটে নাগাদ উঠে পড়লাম। গুড্ডুদের ডেকে চা বানাতে বললাম। সাড়ে চারটেতে রওনা হলাম সাইনরাইজ পয়েন্টের দিকে। পোখরির পরে একটা সমতল জমি। তারপর খানিকটা চড়াই। পাঁচটার আগেই উঠে এলাম রেচেলা টপ-এ। উপরে অনেকটা সমতল জায়গা। নীচের দিকে জোড়পোখরির দ্বিতীয়টিকে দেখা যাচ্ছে জঙ্গলের কোলে, প্রায় জলহীন। অনেক দূরে কাঞ্চনজঙ্ঘা আর অন্যান্য শৃঙ্গের আভাস। সিকিম থেকে ভুটানের দিকে চলে গেছে লম্বা পর্বত শ্রেণি। তার নীচেয় ধাপে ধাপে দেখা যাচ্ছে জঙ্গলময় পার্বত্যভূমি। সবই ছায়ায় ঢাকা। চারদিকের কালচে সবুজ উপত্যকার মাঝে দাঁড়িয়ে আছি আমরা। বেশ ঠাণ্ডা অল্প অল্প হাওয়া দিচ্ছে। মনোরম একটা ভোর। একটা শান্তির ভোর। </span></p>\r\n<p class=\"MsoNormal\"><span lang=\"BN-BD\" style=\"font-size: 14.0pt; line-height: 115%; font-family: Vrinda; mso-bidi-language: BN-BD;\">একটু পরেই আমাদের গাবলুটা ফিক করে হেসে উঠল পূবদিক থেকে। আহা! কি মিষ্টি হাসি। সবাই হাঁ হয়ে তাকিয়ে আছি ওর রংবাহারি হাসির দিকে। ওই হাসির পরশ লাগল আমাদের শরীরে, পাখিদের ডানায়, গাছেদের প্রাণে। আস্তে আস্তে সে হাসি লম্বা হল, সে হাসি চওড়া হল। চারদিক হাসিতে মাখামাখি। হাসি মেখে এগিয়ে গেলাম সামনের দিকে। জঙ্গলের এই সিন্ধুতে আছে একটা বিন্দু। যে বিন্দুতে মিলে আছে বাংলা, সিকিম আর ভুটানের সীমানা। পৌঁছলাম। গুড্ডুকে বললাম চিনব কী করে কোন দিকে কার সীমানা। পাঁচিল নেই, কাঁটা তারের বেড়া নেই, পাইক পেয়াদা নেই। হেসে বলে গুড্ডু, ওসব মানুষের রাজত্বে হয়, জঙ্গলিদের রাজত্বে নয়।</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"BN-BD\" style=\"font-size: 14.0pt; line-height: 115%; font-family: Vrinda; mso-bidi-language: BN-BD;\">ফিরে এসে ব্রেকফাস্ট। তারপর বেরুতে যাব, দেখি রান্না ঘরের পিছনে একটা ট্রাগোপান। বিশ্বাসই হচ্ছিল না ওকে ওভাবে দেখতে পেয়েছি। </span></p>\r\n<p class=\"MsoNormal\"><span lang=\"BN-BD\" style=\"font-size: 14.0pt; line-height: 115%; font-family: Vrinda; mso-bidi-language: BN-BD;\">এবার নামার পালা, পূবদিকে। উঠে এসেছিলাম পশ্চিম দিক থেকে। এখন শুধুই উৎরাই। কালকের পড়া শিলা কোথাও কোথাও জমে আছে। রাস্তায় কোথাও কাদা, কোথাও জল, কোথাওবা বিছানো আছে রডোডেনড্রনের পাপড়ির মাদুর। রাস্তার পাশে এক জায়গায় দেখলাম একটা পরিত্যক্ত চালাঘর। আগে এটা ছিল গরু পালনের জায়গা। এখন সেটা বন্ধ। মাঝে মাঝেই দেখছি, নীচের দিক থেকে উঠে আসছে অনেকে। জিজ্ঞেস করে জানলাম তাংতা বা আরও দূরে ভুটানের কোনও গ্রাম থেকে আসছে। যাবে লাভার দিকে অথবা সিকিমের মূল খড়কার দিকে। ওদিকে ওদের আত্মীয়রা আছেন। সমতল রাস্তায় ঘুরে যেতে অনেক টাকা লাগবে। ওরা এভাবেই যাতায়াতে অভ্যস্থ। যুবকদের একটা দলকে দেখলাম, হাতে ফুটবল নিয়ে গান গাইতে গাইতে যাচ্ছে। রেচেলাতে হবে পিকনিক আর ফুটবল খেলা।</span></p>\r\n<p class=\"MsoNormal\"><span lang=\"BN-BD\" style=\"font-size: 14.0pt; line-height: 115%; font-family: Vrinda; mso-bidi-language: BN-BD;\">ক্রমাগত নামতে নামতে দুটো নাগাদ এসে গেলাম রুকা ফরেস্ট ক্যাম্পে। ক্যাম্পবাবুরা ছিলেন। তাঁদের সঙ্গে গল্প হল, রান্না হল ওঁদেরই রান্না ঘরে। ঘুমালাম ওঁদের একটা এড়ো ঘরে।&nbsp; </span></p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>', '1424012003neora.jpg', 0, 0, '', '', '2015-02-15');
INSERT INTO `blog` (`id`, `title`, `small_text`, `author_name`, `text`, `image`, `comment_id`, `status`, `keyword`, `description`, `date`) VALUES
(78, 'ভারতের জমিনীতি সংস্কার\r\n', '', 'মৈত্রীশ ঘটক\r\ncourtsey: guruchandali', '<p style=\"margin: 0px 0px 6px; color: #141823; font-family: Helvetica, Arial, \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 19.3199996948242px;\"><span style=\"font-size: 14pt;\">এই নিবন্ধটি যখন লেখা শেষ হয়েছে, তার পরে বিজেপির নেতৃত্বে নতুন সরকার গঠিত হয়েছে। প্রাথমিকভাবে সংবাদসূত্র (&nbsp;<a style=\"color: #3b5998; cursor: pointer; text-decoration: none;\" href=\"http://www.dnaindia.com/analysis/column-consequences-of-a-pro-industry-land-acquisition-act-2011149\" target=\"_blank\" rel=\"nofollow\">http://www.dnaindia.com/&hellip;/column-consequences-of-a-pro-indu&hellip;</a>&nbsp;) অনুযায়ী, এই আইনের কিছু অংশ বদলানো হচ্ছে; যার ফলে জমি অধিগ্রহণ করা কম ঝামেলার হবে। এই বদলের মধ্যে দিয়ে সরকারি-বেসরকারি যৌথ প্রকল্পগুলোর জন্য সম্মতির নিয়মটি সহজীকরণ করে দেওয়া হচ্ছে, বড়মাপের প্রকল্প বাদ দিয়ে বাকি সমস্ত প্রকল্পে সামাজিক প্রভাবের খতিয়ান নেওয়া বন্ধ করে দেওয়া হচ্ছে, এবং বহুফসলী জমি অধিগ্রহণের ক্ষেত্রে যে নিষেধাজ্ঞা ছিল, তা তুলে নেওয়া হচ্ছে। বেশির ভাগ ক্ষেত্রেই এইসব পরিবর্তনগুলো লাগু করা খুবই কঠিন হয়ে দাঁড়াবে, বিকল্প হিসেবে, যে সমস্ত প্রকল্প এই আইনের মূল নিয়মগুলোর বাইরে আছে, সেই প্রকল্পের তালিকাটি আরও লম্বা করার পরিকল্পনা চলছে।</span></p>\r\n<p style=\"margin: 6px 0px; color: #141823; font-family: Helvetica, Arial, \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 19.3199996948242px;\">&nbsp;</p>\r\n<p style=\"margin: 6px 0px; color: #141823; font-family: Helvetica, Arial, \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 19.3199996948242px;\"><span style=\"font-size: 14pt;\">ভারতের জমিনীতি সংস্কার</span></p>\r\n<p style=\"margin: 6px 0px; color: #141823; font-family: Helvetica, Arial, \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 19.3199996948242px;\"><span style=\"font-size: 14pt;\">প্রায় একদশকের টানা দ্রুতগতির অর্থনৈতিক উন্নয়নের চাকা ক্রমশ মন্থর হওয়া থেকে বাঁচতে যে যে সমস্যার সমাধান আশু প্রয়োজন, জমি সমস্যা তার মধ্যে অন্যতম। মূলত এর দুটো কারণ আছে।</span></p>\r\n<p style=\"margin: 6px 0px; color: #141823; font-family: Helvetica, Arial, \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 19.3199996948242px;\"><span style=\"font-size: 14pt;\">কৃষি থেকে শিল্প ও পরিষেবা খাতে সম্পদ পুনর্নিয়োগ করা হল উন্নয়নের একদম গোড়ার কথা। যতক্ষণ না কৃষি জমিতে উৎপাদনশীলতা বৃদ্ধি পাচ্ছে এবং তার ফলে উদ্বৃত্ত শ্রম শিল্পে নিয়োজিত হচ্ছে, ততক্ষণ এই মূলগত পরিবর্তন সম্ভব নয়। ভারতে কৃষির উৎপাদনশীলতা কম হবার কারণ অনেক &ndash; অসাম্য, খন্ডিত জমি, বিশ্বাসযোগ্য জমি নথির অভাব, অসুরক্ষিত ও অনির্দিষ্ট সম্পত্তি আইন, জমি ভাড়ার সীমিত আয় ও জমি বন্ধক রেখে ঋণ পাওয়ার অসুবিধে। সুতরাং বোঝাই যাচ্ছে জমির উৎপাদন বাড়ানোর কোনো ব্যবস্থা না নিলে, খাদ্য যোগানও অসুবিধের হয়ে দাঁড়াবে।</span></p>\r\n<p style=\"margin: 6px 0px; color: #141823; font-family: Helvetica, Arial, \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 19.3199996948242px;\"><span style=\"font-size: 14pt;\">দ্বিতীয় কারণ হল, আমাদের দেশের বিশাল জনসংখ্যার এক বড় অংশ নির্ভর করে উর্বর জমির ওপর। অকৃষিজনিত উৎপাদনের জমিও আসে কৃষি ক্ষেত্র থেকেই, আমরা বিগত দশকে এও দেখেছি নর্মদা বাঁচাও আন্দোলন থেকে সিঙ্গুর, জমি অধিগ্রহণের বিরুদ্ধে মানুষের স্বতস্ফূর্ত আন্দোলন। অবশ্যই এটা এক পরিণত গণতন্ত্রের উদাহরণ, যেখানে উন্নয়নের নাম যথেচ্ছভাবে গরীবদের উৎখাত করা যায় না।</span></p>\r\n<p style=\"margin: 6px 0px; color: #141823; font-family: Helvetica, Arial, \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 19.3199996948242px;\"><span style=\"font-size: 14pt;\">তবে এমন নয়, যে এই সমস্যার কথা কেউ জানে না বা সুরাহার ব্যাপারে কোনো পদক্ষেপ নেওয়া হয়নি। এ ব্যাপারে খাদ্য সুরক্ষা আইন ও জমি অধিগ্রহণ বিষয়ক আইন প্রণয়নের দৃষ্টান্ত দেওয়া যায়। জমি সংস্কারের একটি বিল ও বিবেচনাধীন। দুর্ভাগ্যজনক যে, এই আইনগুলোর উদ্দেশ্য শুভ হলেও জনমানসে বাজারের শক্তির ভূমিকা বা সীমাবদ্ধতার ব্যপারে এরা বিশেষ মাথা ঘামায় নি। সিদ্ধান্ত নেবার উপযুক্ত তথ্যের অভাব ও নীতিগত জটিলতার ফলে জমি অধিগ্রহণের ফলে ক্ষতিগ্রস্ত বিভিন্ন পক্ষের স্বার্থরক্ষা করা সম্ভব হয়নি।</span></p>\r\n<p style=\"margin: 6px 0px; color: #141823; font-family: Helvetica, Arial, \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 19.3199996948242px;\"><span style=\"font-size: 14pt;\">জমি অধিগ্রহণ আইন</span></p>\r\n<p style=\"margin: 6px 0px; color: #141823; font-family: Helvetica, Arial, \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 19.3199996948242px;\"><span style=\"font-size: 14pt;\">১৮৯৪ সলের আইনের ওপর ভিত্তি করেই এখনো পর্যন্ত পণ্ডিতমহলের আলোচনা গড়ে উঠেছে, এই আইনানুযায়ী ক্ষতিপূরণ দেওয়া হয় বিক্রির সময়কালে ওই অঞ্চলের জমির দাম ও অন্যান্য বিক্রীত জমির লেনদেনের হিসেবের উপর ভর করে। নতুন আইনে এতে তিনটে গুরুত্বপূর্ণ পরিবর্তন হয়। ১) ক্ষতিপূরণের পরিমাণ এক্ষেত্রে ধার্য্য হয়েছে অনেক বেশি &ndash; বাজার দরের দ্বিগুণ (শহর), চতুর্গুণ (গ্রামে) ২) জমির মালিক ও অন্য যাঁরা জীবিকা হারালেন (ভাগচাষি/ অন্যান্য কৃষি শ্রমিক যাঁরা চাষের জমির ওপর নির্ভরশীল), তাঁরাও এই ক্ষতিপূরণের দাবিদার হবেন ৩) জমি অধিগ্রহণের প্রশাসনিক দিকে আরো দৃঢ়তা আনা যাতে সরকারি অধিগ্রহণের ক্ষেত্রে আরো বেশি কমিটির ছাড়পত্র লাগবে ও যেখানে বেসরকারি প্রতিষ্ঠান থাকবে সেখানে অধিগ্রহণের ফলে ক্ষতিগ্রস্তদের কমপক্ষে ৭০%এর সম্মতি বাধ্যতামূলক।</span></p>\r\n<p style=\"margin: 6px 0px; color: #141823; font-family: Helvetica, Arial, \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 19.3199996948242px;\"><span style=\"font-size: 14pt;\">নতুন আইনের মূল্যায়ন করার আগে পুরনো আইনের ফাঁকফোকর গুলো একবার দেখা যাক। বাজারদরের হিসেবে ক্ষতিপূরণ যে ন্যায্য নয় এটা সহজবোধ্য ব্যাপার কারণ বাজার দর আর জমির মালিকের কাছে মূল্য সমান নয়।</span></p>\r\n<p style=\"margin: 6px 0px; color: #141823; font-family: Helvetica, Arial, \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 19.3199996948242px;\"><span style=\"font-size: 14pt;\">দ্বিতীয় ক্ষেত্রে মূল্য নির্ধারিত হয় ফসল উৎপাদন, খাদ্য সুরক্ষা, বন্ধকী সম্পদ হিসেবে গুরুত্ব, মূল্যবৃদ্ধির প্রতিষেধক, সামাজিক মর্যাদা ইত্যাদির ওপর। জমির দাম এবং যে দামে মালিক বিক্রি করতে ইচ্ছুক হবেন সেটা অত্যন্ত ব্যক্তিগত এবং একজনের থেকে আরেকজনের ক্ষেত্রে অনেকটাই আলাদা। আমরা যদি এটা ধরেও নিই যে দেশে দক্ষ জমি বাজার আছে ও লেনদেন স্বচ্ছ, সেখানেও অনেক মালিকই জমির এমন মূল্য ধার্য করবেন যা বাজার দরের চেয়ে অনেক বেশি। এই কারণেই তাঁরা এখনো পর্যন্ত জমি বিক্রি করেন নি।</span></p>\r\n<p style=\"margin: 6px 0px; color: #141823; font-family: Helvetica, Arial, \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 19.3199996948242px;\"><span style=\"font-size: 14pt;\">বাজার দরের হিসেবে ক্ষতিপূরণ তখনি কার্যকরী হত যদি এক নিখুঁত বাজারে (perfect market) যে পরিমাণ পার্থিব সম্পদ (physical asset) যে দামে বিক্রি হচ্ছে সেই দামেই কেনা যেত। নীচের উদাহরণ দুটো দেখলে ব্যাপারটা স্পষ্ট হবে।</span></p>\r\n<p style=\"margin: 6px 0px; color: #141823; font-family: Helvetica, Arial, \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 19.3199996948242px;\"><span style=\"font-size: 14pt;\">১) সরকারের প্রয়োজনবশত কিছু নাগরিকের থেকে গাড়ি অধিগ্রহণ করা ২) আপৎকালীন সময়ে কিছু নাগরিকের বাধ্যতামূলক শ্রম দান। আমরা যদি স্বাধীনতা / সম্পত্তি আইন ইত্যাদি দূরে রাখি কিছুক্ষণের জন্য, তাহলে দেখব প্রথম ক্ষেত্রে বাজার দরে ক্ষতিপূরণ ন্যায্য মনে হলেও, দ্বিতীয় ক্ষেত্রে একেবারেই নয়। কারণ প্রথম ক্ষেত্রে ইচ্ছে করলেই ক্ষতিপূরণের অঙ্কে ওই গাড়ি আবার কেনা সম্ভব, কিন্তু দ্বিতীয় ক্ষেত্রে সেই একই সময় তাঁদের পক্ষে কিনে নেওয়া সম্ভব হবে না।</span></p>\r\n<p style=\"margin: 6px 0px; color: #141823; font-family: Helvetica, Arial, \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 19.3199996948242px;\"><span style=\"font-size: 14pt;\">দ্বিতীয় ক্ষেত্রে তাই শ্রমিকদের সময়ের সঠিক মূল্যায়ন করতে হবে। ধরুন কোনো স্বনিয়োজিত (self employed) উকিল, ডাক্তার, বা ব্যবসায়ীকে জোর করে কোনো সরকারি প্রকল্পে কাজ করিয়ে বাজারের বর্তমান শ্রমমূল্য অনুযায়ী ক্ষতিপূরণ দেওয়া যদি ন্যায্য হত, তাহলে আমরা কি এটাই আশা করতাম না যে ওঁরা নিজেদের ব্যক্তিগত পেশা ছেড়ে চাকরি করবেন? ঠিক একইভাবে স্বেছায় জমি বিক্রি করতে চাওয়া বা চাকরি করা মানুষদের স্বীকৃত দামে কাউকে জমি বিক্রি করতে বা চাকরি করতে বাধ্য করা যায় না। জমি অধিগ্রহণ অনেকটা গাড়ির উদাহরণ মনে হয়, কিন্তু আমরা যদি বাস্তবের দিকে তাকাই তাহলে দেখব, প্রকৃতপক্ষে উদাহরণটা বাধ্যতামূলক শ্রম দানের মত। জমি বাজারের অপ্রতুলতা উন্নয়নশীল দেশের একটা বড় সমস্যা (Deininger and Feder,2001 and Deininger,Jin and Nagarjan, 2009)। জমির বাজার দরের কোনো গুরুত্ব নেই, যদি না সেই দামে একই সমপরিমাণ জমি একই অঞ্চলে কেনা সম্ভব। একই ভাবে বেকারত্ব ও সংঘাতপূর্ণ শ্রম বাজারে বর্তমান শ্রমমূল্যে চাকরি পাওয়া কঠিন।</span></p>\r\n<p style=\"margin: 6px 0px; color: #141823; font-family: Helvetica, Arial, \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 19.3199996948242px;\"><span style=\"font-size: 14pt;\">বাজারদরের হিসেবে ক্ষতিপূরণ না দেওয়ার আরো অনেক যুক্তি আছে &ndash; প্রচুর পরিমাণে কৃষিজমি অধিগ্রহণ এলাকার কৃষিভিত্তিক অর্থনীতির যোগানের ওপর প্রচুর চাপ সৃষ্টি করে। যোগান ও চাহিদার নিয়ম মেনেই এলাকার জমির মূল্য ও ভাড়া দুই ই বেড়ে যায়, ফলে যেখানে জমির দাম এতই বেড়ে গেহে যে বিক্রির দামে সমপরিমাণ কৃষিজমি কেনা অসম্ভব, সেখানে ঐতিহাসিক জমির দামের ওপর ভিত্তি করা সম্ভব হবে না। নতুন প্রকল্পের আশেপাশে উদ্বৃত্ত অর্থনৈতিক উন্নতি আরো সহকারী শিল্প গড়ে তুলতে সাহায্য করে, এলাকায় জমির দাম আরো বাড়িয়ে তোলে অনেক ক্ষেত্রে। এছাড়াও অতীত লেনদেনের ওপর ভরসা করাও অসুবিধে এজন্য, বেশির ভাগ সময়েই স্ট্যাম্প ডিউটি এড়ানোর জন্য জমির বিক্রয়মূল্য কম করে দেখানো হয়। এ আলোচনা থেকে বোঝা যায় যে বাজার দরে ক্ষতিপূরণ, যথেষ্ট নয়।এটা কতটা বাড়ানো হবে তা আঞ্চলিক জটিলতার ওপর নির্ভর করে, যা একেক জায়গায় একেক রকম। ক্ষতিপূরণ নির্ধারিত হয় জমির বাজার কতটা নিখুঁত, কতটা অধিগৃহীত এলাকার ওপর প্রকল্প গড়ে উঠবে, যেসব চাষি জমি হারাবেন তাঁদের বিশেষত্ব কী, এসব আলোচনার ওপর ভিত্তি করে। জরিপ করে দেখা গেছে, এ ব্যাপারে বৈচিত্র্য প্রচুর।</span></p>\r\n<p style=\"margin: 6px 0px; color: #141823; font-family: Helvetica, Arial, \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 19.3199996948242px;\"><span style=\"font-size: 14pt;\">সিঙ্গুরে এটাই দেখা গেছে যে চাষের জমির বৈচিত্র্য হিসেবে না ধরে ক্ষতিপূরণ ঠিক করায় বিক্ষোভ আরো দানা বাঁধে (Ghatak, Mitra, Mookherjee, and Nath, 2013)। ক্ষতিপূরণের অঙ্ক মোটামুটি সে অঞ্চলে জমির গড় দামের কাছাকাছিই ছিল তবুও ১/৩ অংশ জমি বেচতে অস্বীকার করেন। এই ক্ষতিপূরণ প্যাকেজ জমিতে সেচের প্রয়োজন, বহুফসলী বা যানবাহনের নৈকট্য ইত্যাদি ব্যপার হিসেব করে নি, যা নিঃসন্দেহে ব্যর্থতা ডেকে এনেছিল। এমনকি যাঁদের ঘরে অধিকাংশ কৃষি জমির ওপর নির্ভরশীল বা মূল আয়ের অধিকাংশ কৃষি ভিত্তিক তাঁরাও বিরোধিতা করেন। আর্থিক সুরক্ষা এজন্যেই জমি অধিগ্রহণের ক্ষতিপূরণের সাথে অঙ্গাঙ্গীভাবে জড়িত, বিশেষ করে চাষের মত দক্ষতানির্ভর জীবিকার ক্ষেত্রে, যা একজনের থেকে আরেকজনের কাছে জমির মত হস্তান্তর করা যায় না। যাদের কাছে জমির মূল্য একমাত্র বৈষযিক (যাঁরা জমি উত্তরাধিকার সূত্রে পাননি, বরঞ্চ কিনেছেন বা জমি রক্ষণাবেক্ষণ করতে না পারা জমির মালিক সম্প্রদায়) তাঁরাও এ প্যাকেজে বিশেষ আগ্রহী হবেন না।</span></p>\r\n<p style=\"margin: 6px 0px; color: #141823; font-family: Helvetica, Arial, \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 19.3199996948242px;\"><span style=\"font-size: 14pt;\">নতুন আইনে যে স্থির গুণিতক (দ্বিগুণ/ চারগুণ) কথা বলা হয়েছে তার মধ্যে একমাত্র শহর বা গ্রাম বাদে আর কোনো পার্থক্য স্বীকার করা হয়নি। সঠিক গুণিতক এক্ষেত্রে বের করা বেশ সমস্যার, যদি খুব কম বেশি দাম হয়ে যায় তাহলে শিল্পের পক্ষে অলাভজনক ও তাদের অনীহার ফলে ইচ্ছুক চাষিরা মোটা লাভ থেকে বঞ্চিত হবেন, কম দাম হলে সিঙ্গুরের মত ঘটনা ঘটবে। এই দুই বা চার কিভাবে হবে তার কোনো যুক্তিও পেশ করা হয়নি, তাই গড় করে নিলেও সমস্যা মিটবে না।</span></p>\r\n<p style=\"margin: 6px 0px; color: #141823; font-family: Helvetica, Arial, \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 19.3199996948242px;\"><span style=\"font-size: 14pt;\">বিকল্প ব্যবস্থা &ndash;জমি নিলাম</span></p>\r\n<p style=\"margin: 6px 0px; color: #141823; font-family: Helvetica, Arial, \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 19.3199996948242px;\"><span style=\"font-size: 14pt;\">(Ghatak and Ghosh, 2011) মতে নিলামভিত্তিক দাম নির্ধারণ কোনো গুণিতকভিত্তিক হিসেবের থেকে বেশি বাস্তবসম্মত। প্রথম ধাপে সরকার যেখানে প্রকল্প গড়ে তুলছে সেই এলাকায় মোটামুটি সমান মাপের জমি নিলাম করে কিনবে, তারপর প্রকল্প এলাকার মধ্যে যাঁরা জমি বেচেন নি তাদেরকে জমির বদলে জমি হিসেবে ক্ষতিপূরণ দেওয়া হবে।এভাবে প্রকল্পের জন্য জমিও এক জায়গায় সহজে করা যাবে।</span></p>\r\n<p style=\"margin: 6px 0px; color: #141823; font-family: Helvetica, Arial, \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 19.3199996948242px;\"><span style=\"font-size: 14pt;\">এ ব্যবস্থায় সর্বপ্রথম দাম নির্ধারণ দুর্নীতিগ্রস্ত সরকারি কর্মচারীদের হাত থেকে নিয়ে সরাসরি নিলামের মাধ্যমে সরাসরি কৃষকের নির্ধারিত মূল্য অনুযায়ী করা হয়েছে। ফলে পণ্ডিতদের জোরাজুরি না থাকায় রাজনৈতিক জমি আন্দোলনের সম্ভাবনাও কম থাকবে। দ্বিতীয়ত উদ্বৃত্ত্ জমি তাঁদের মধ্যেই ভাগ করে দেওয়া হবে যে চাষিরা জমির ওপর সর্বাধিক দাম রেখেছেন। ধরা যেতেই পারে যে নিলামে এঁরাই সবথেকে বেশি দর হাঁকবেন ও শেষ পর্যন্ত নগদ নয় বরং জমির বিনিময়ে জমি হিসেবে ক্ষতিপূরণ পাবেন। এভাবে জমির বাজার না থাকার সমস্যাও দূর করা যাবে।</span></p>\r\n<p style=\"margin: 6px 0px; color: #141823; font-family: Helvetica, Arial, \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 19.3199996948242px;\"><span style=\"font-size: 14pt;\">এই নিলাম পদ্ধতি আরো অনেক ক্ষেত্রে ব্যবহার করা যায়। কোন জায়গায় শিল্প প্রকল্প চালু হবে তাও বহুস্তরী নিলাম ব্যবস্থায় ঠিক করা যায়। প্রথমত সরকার ন্যূনতম প্রয়োজনীয় জমি ও তার রিজার্ভ দাম ঠিক করবে। এরপরে বিভিন্ন সমিতি তাদের এলাকায় শিল্প স্থাপনের জমির জন্য দর দিতে পারবে। সমস্ত দরই ঠিক হবে ন্যুনতম ধার্য জমি মূল্যের হিসেবে, যা দিয়ে তারা তাদের এলাকায় ইচ্ছুক জমি মালিকদের থেকে প্রয়োজনীয় জমি কিনতে পারবে।</span></p>\r\n<p style=\"margin: 6px 0px; color: #141823; font-family: Helvetica, Arial, \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 19.3199996948242px;\"><span style=\"font-size: 14pt;\">এই নিলাম পদ্ধতি বিকেন্দ্রীকরণের মাধ্যমে স্থানীয় পঞ্চায়েতকে দিলে তা জনমানসে সরকার থেকে চাপিয়ে দেওয়া অধিগ্রহণ হিসেবে প্রতিফলিত হবে না। শুধু পঞ্চায়েতকর্মীদের উপযুক্ত প্রশিক্ষণ নিতে হবে সরকারি আধিকারিকদের থেকে, কিভাবে নিলাম করতে হয়। এর ফলে পঞ্চায়েত তার নিজ এলাকায় শিল্প স্থাপনের ক্ষেত্রে আরো বেশি ইতিবাচক ভূমিকা নিতে পারবে।</span></p>\r\n<p style=\"margin: 6px 0px; color: #141823; font-family: Helvetica, Arial, \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 19.3199996948242px;\"><span style=\"font-size: 14pt;\">প্রাক্তন গ্রামোন্নয়ন মন্ত্রী জয়রাম রমেশ ও তাঁর সঙ্গী মোহাম্মদ খান জমি অধিগ্রহণে সরকারের প্রত্যক্ষ ও কেন্দ্রীয় ভূমিকায় বিশ্বাসী। তাঁদের মতে ভারতে জমির বাজার নিখুঁত নয় এবং ক্রেতা ও বিক্রেতার মধ্যে প্রচুর ক্ষমতা ও তথ্যের পার্থক্য আছে।</span></p>\r\n<p style=\"margin: 6px 0px; color: #141823; font-family: Helvetica, Arial, \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 19.3199996948242px;\"><span style=\"font-size: 14pt;\">বাজার না থাকলে যা প্রয়োজন তা হলো ১) এমন দাম স্থির করা যেটা বাজার গড়ে উঠলেও থাকে এবং প্রকল্প জনিত সমস্ত তথ্য ও অর্থনৈতিক ভূমিকা সবার কাছে পৌছে যায় সহজে; ২) প্রকল্প চালু হলে, চাষিদের বিকল্প অর্থনৈতিক ব্যবস্থা রাখা।</span></p>\r\n<p style=\"margin: 6px 0px; color: #141823; font-family: Helvetica, Arial, \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 19.3199996948242px;\"><span style=\"font-size: 14pt;\">আমাদের এই বিকল্প ব্যবস্থায় ঠিক এইগুলোর কথাই বলা হয়েছে যেখানে নতুন আইনে এর কোনো উল্লেখ পাওয়া যায় না, বরঞ্চ আনুমানিক ভিত্তিতে সমস্যার সমাধান করার চেষ্টা করা হয়।</span></p>\r\n<p style=\"margin: 6px 0px; color: #141823; font-family: Helvetica, Arial, \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 19.3199996948242px;\"><span style=\"font-size: 14pt;\">গ্রামীণ জমির বাজার সংস্কার</span></p>\r\n<p style=\"margin: 6px 0px; color: #141823; font-family: Helvetica, Arial, \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 19.3199996948242px;\"><span style=\"font-size: 14pt;\">আমরা এতক্ষণ যা দেখলাম, বহু জায়গায় জমি বাজারের অস্তিত্ব না থাকা অধিগ্রহণের মূল সমস্যা।</span></p>\r\n<p style=\"margin: 6px 0px; color: #141823; font-family: Helvetica, Arial, \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 19.3199996948242px;\"><span style=\"font-size: 14pt;\">গ্রামে এরকম ছিন্নবিচ্ছিন্ন জমি বাজারের অবস্থানের কারণ অনেক &ndash; অস্বচ্ছ জমির হিসেব ফলে হস্তান্তরে অসুবিধা, জমির উর্ধ্বসীমা আইনের ফলে মালিকানা গোপন, বিক্রির জটিলতা, বিক্রেতাদের বেশিদূর যেতে না চাওয়া, দালালির সুযোগ না থাকা, ব্যাঙ্কের হাত সীমাবদ্ধ হওয়ায় উপযুক্ত ঋণের অভাব।</span></p>\r\n<p>&nbsp;</p>\r\n<p style=\"margin: 6px 0px 0px; display: inline; color: #141823; font-family: Helvetica, Arial, \'lucida grande\', tahoma, verdana, arial, sans-serif; font-size: 14px; line-height: 19.3199996948242px;\"><span style=\"font-size: 14pt;\">অন্য দিকে জমিই যেখানে বীমা, সঞ্চয়, আয়ের উৎস সেখানে জমির বাজার ঠিক হলেও গরীব চাষিরা নিছক লাভ দেখে জমি বিক্রি করবেন না। যেহেতু জমি সহজে বিক্রি করা যায় না, সেহেতু জমি বন্ধক রেখে ঋণও পাওয়া শক্ত। ঋণ বাজারও নিখুঁত না হবার ফলে কম উৎপাদনশীল চাষির থেকে বেশি উৎপাদনশীল চাষির হাতে জমির হস্তান্তর কঠিন। ঋণ বাজার নিখুঁত না হবার ফলে মালিক চাষির পক্ষে নতুন প্রযুক্তির চাষ, উচ্চ ফলনশীল বীজ, সেচ, কীটনাশক ইত্যাদি আধুনিক চাষ ব্যবস্থার জন্য প্রয়োজনীয় অর্থ ঋণ নেওয়া অসম্ভব। শুধু বৈষম্য কমানোর জন্য নয়, আমরা যদি জমির উৎপাদনশীলতা বাড়ানোর কথা ভাবি যার ফলে উদ্বৃত্ত শ্রম শিল্প ও পরিষেবার জন্য ব্যবহার করা যাবে, জমি সংস্কারের কোনো বিকল্প নেই। সম্পত্তি অধিকার আইনের সুষ্ঠু ব্যবহার শুধুমাত্র যে ব্যক্তিগত জমির মালিকানা চূড়ান্ত (optimum holding) করে তাই না, অপ্রত্যক্ষ ভাবে ঋণ বাজার সংগঠিত করে উৎপাদনশীলতা বহুগুনে বাড়িয়ে তোলে। সরকার অধিগৃহীত জমি থেকে ক্ষতিপূরণের অধিকার নির্দিষ্ট করার প্রয়োজনীয়তাও অনস্বীকার্য, কারণ সিঙ্গুর থেকে আমরা দেখেছি ১/৩ অংশের বিরোধিতার মূল কারণ মেয়াদ উত্তীর্ণ জমির রেকর্ড। শেষ আয়যোগ্য জমির পরিমাপ জানতে জরিপ হয়েছিল ব্রিটিশ আমলে, তারপরে সেই রেকর্ড কতটা ঠিকঠাক করা হয়েছে তা পুরোটাই জমির মালিক কতবার দুর্নীতিপ্রবণ জমি প্রবন্ধন দফতরে নিজের জমি হিসেব সংশোধন করতে গেছেন তার ওপর নির্ভরশীল। অনেকেই স্ট্যাম্প ডিউটি দেওয়ার ভয়ে সংশোধন করেন নি ও পরবর্তীকালে এর ফলে ভুল জমি ভাগ হয়েছে ও ক্ষতিপূরণ সঠিক মালিকের কাছে পৌঁছায় নি। সেচযোগ্য জমির সঠিক হিসেব না থাকায় জমির শ্রেণীবিভাগ ঠিক মত হয়নি ও অসেচযোগ্য জমির হিসেব?', '1424012211land.jpg', 0, 0, '', '', '2015-02-15');

-- --------------------------------------------------------

--
-- Table structure for table `blog_hit_count`
--

CREATE TABLE `blog_hit_count` (
  `pge_name` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `views` bigint(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog_hit_count`
--

INSERT INTO `blog_hit_count` (`pge_name`, `views`) VALUES
('id=77', 1),
('id=78', 1);

-- --------------------------------------------------------

--
-- Table structure for table `boiwala`
--

CREATE TABLE `boiwala` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `smalltext` text COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `publisher` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `published_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `offer` tinyint(1) NOT NULL,
  `offer_rate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desc` text COLLATE utf8_unicode_ci NOT NULL,
  `our_review` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `boiwala`
--

INSERT INTO `boiwala` (`id`, `name`, `img`, `smalltext`, `author`, `author_desc`, `publisher`, `price`, `published_date`, `offer`, `offer_rate`, `desc`, `our_review`, `status`) VALUES
(1, 'ভগত সিং জেল নোটবুক ও অন্যান্য রচনা', '1393866312CAM00559.jpg', 'জীবিত ভগত সিংয়ের থেকে মৃত ভগত সিং ব্রিটিশ শোষকদের কাছে আরও বেশি বিপজ্ঝনক হবে। এমনটাই মনে করতেন ভগত সিং।', 'সংসকলন ও ভূমিকা- চমন লাল', '<p><strong><span style=\"font-size: 14pt;\">লেখক জওহরলাল নেহরু বিশ্ববিদ্যালয়ের হিন্দি বিভাগের অধ্যাপক। বর্তমানে ত্রিনিদাদ ও টোবাগোতে ওয়েস্ট ইনিডজ বিশ্ববিদ্যালয়ে অধ&zwnj;্যাপনা করছেন।</span></strong></p>', 'ল‌্যাশনাল বুক এজন্সি', 150, 'জানুয়ারি, ২০১২', 0, '', '<p>জীবিত ভগত সিংয়ের থেকে মৃত ভগত সিং ব্রিটিশ শোষকদের কাছে আরও বেশি বিপজ্ঝনক হবে। এমনটাই মনে করতেন ভগত সিং। তাঁর জীবন, কর্ম ও চিন্তা সম্পর্কে আরও ব্যাপক চর্চার প্রয়োজন অনুভূত হচ্ছে। সেই তাগিদ থেকেই চমন লালের এই বই।</p>', '', 0),
(2, 'নিশানের নাম তাপসী মালিক', '1393866240CAM00564.jpg', 'কে যে কখন কার সম্পর্কে কোন মিথ্যে বা অতিরঞ্জিত কথা কার কাছে গিয়ে বলবে তার কোনও ঠিক নেই। মিথ্যে কথা রটিয়ে বেড়ানো ও সত‌ গোপন করার মোচ্ছব চলছে চারিদিকে। এর ঘটা ক্রমশ বাড়বে বৈ কমবে না। এই সেই কারণেও আমার দিক থেকে ২০০৬-২০১০ সালের মার্চ মাস অবধি সময়ের একটি আলেখ্য লিখে যাওয়া জরুরি ছিল।-', 'কবীর সুমন', '<p>কবীর সুমনেন কোনও পরিচয় লাগে না। তিনি একাধারে শিল্পী, গীতিকার,সুরকার, কবি, সাংবাদিক, সংগ্রামের পথে বিশ্বস্ত সৈনিক। তাঁর কাজের মূল্যায়ণ বাঙালি করবে বহু যুগ পরে। সমালোচনা উপভোগ করেন কবীর। কাজ করেন নিভৃতে।</p>', 'মিত্র ও ঘোষ', 180, 'ডিসেম্বর, ২০১০', 0, '', '<p>কে যে কখন কার সম্পর্কে কোন মিথ্যে বা অতিরঞ্জিত কথা কার কাছে গিয়ে বলবে তার কোনও ঠিক নেই। মিথ্যে কথা রটিয়ে বেড়ানো ও সত&zwnj; গোপন করার মোচ্ছব চলছে চারিদিকে। এর ঘটা ক্রমশ বাড়বে বৈ কমবে না। এই সেই কারণেও আমার দিক থেকে ২০০৬-২০১০ সালের মার্চ মাস অবধি সময়ের একটি আলেখ্য লিখে যাওয়া জরুরি ছিল।----- কবীর সুমন</p>', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `by_election_bidhansabha_result`
--

CREATE TABLE `by_election_bidhansabha_result` (
  `id` int(255) NOT NULL,
  `state` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `kendro` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ca_dol_1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vo_dol_1` int(100) NOT NULL,
  `ca_dol_2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vo_dol_2` int(100) NOT NULL,
  `ca_dol_3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vo_dol_3` int(100) NOT NULL,
  `ca_dol_4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vo_dol_4` int(100) NOT NULL,
  `ca_dol_5` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vo_dol_5` int(100) NOT NULL,
  `round` int(10) NOT NULL,
  `difference` int(100) NOT NULL,
  `result` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` varchar(400) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `by_election_loksabha_result`
--

CREATE TABLE `by_election_loksabha_result` (
  `id` int(255) NOT NULL,
  `state` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `kendro` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ca_dol_1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vo_dol_1` int(100) NOT NULL,
  `ca_dol_2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vo_dol_2` int(100) NOT NULL,
  `ca_dol_3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vo_dol_3` int(100) NOT NULL,
  `ca_dol_4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vo_dol_4` int(100) NOT NULL,
  `ca_dol_5` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vo_dol_5` int(100) NOT NULL,
  `round` int(10) NOT NULL,
  `difference` int(100) NOT NULL,
  `result` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` varchar(400) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `pid`, `name`, `slug`, `order`, `status`) VALUES
(1, 0, 'রাজনীতি', 'Politics', 1, 0),
(2, 0, 'আমার দুনিয়া', 'amar_dunia', 2, 0),
(3, 0, 'English News(Not in Use 25.05.2017)', 'metro', 2, 0),
(4, 2, 'রাজ্য', 'State', 3, 0),
(5, 2, 'দেশ', 'National', 4, 0),
(6, 2, 'আন্তর্জাতিক', 'International', 5, 0),
(7, 0, 'সংস্কৃতি (rename as Binodon)', 'Culture', 3, 0),
(8, 0, 'শিক্ষা', 'Education', 4, 0),
(9, 0, 'স্বাস্থ্য', 'Health', 5, 0),
(10, 0, 'বিজ্ঞান ও পরিবেশ', 'Science-and-Environment', 6, 0),
(11, 0, 'ভ্রমণ ও ঐতিহ্য', 'Travel-Heritage', 7, 0),
(12, 0, 'কৃষি-শিল্প-স্বনিযুক্তি', 'Agriculture-Industry-Self Employment', 8, 0),
(17, 0, 'খেলা', 'Sports', 13, 0),
(15, 12, 'খেত-খামার', 'khet-khamar', 1, 0),
(16, 12, 'শিল্পের দুনিয়া', 'Shilper-Duniya', 2, 0),
(18, 7, 'বক্সঅফিস', 'Box-Office', 1, 0),
(19, 7, 'ড্রামাবাজি', 'Dramabaji', 2, 0),
(20, 7, 'সুরদরিয়া', 'surdoria', 3, 0),
(21, 7, 'সাহিত্য-সময়', 'sahityo-samai', 4, 0),
(22, 10, 'জ্ঞান-বিজ্ঞান', 'Knowledge-science', 1, 0),
(23, 10, 'সবুজ পৃথিবী', 'sabuj-prithibi', 2, 0),
(24, 11, 'ভবঘুরে', 'Bhaboghure', 1, 0),
(25, 11, 'ট্র্যাডিশন', 'Tradition', 2, 0),
(27, 7, 'ধুসর অ্যালবাম', 'Little_Magazine', 4, 0),
(28, 2, 'বাংলাদেশ (Not in Use 24.05.2017)', 'Gram_bangla', 1, 0),
(29, 12, 'স্বরোজগারি', 'swarojgari', 3, 0),
(30, 1, 'রাজ্য-রাজনীতি', 'state_politics', 1, 0),
(31, 1, 'জাতীয় রাজনীতি', 'National-Politics', 2, 0),
(32, 1, 'আন্তর্জাতিক রাজনীতি', 'International_politics', 3, 0),
(34, 0, 'আইন-আদালত (Not in Use 25.05.2017)', 'Law-Court', 11, 0),
(35, 0, 'ক্রেতা সুরক্ষা (Not in Use 25.05.2017)', 'consumer', 12, 0),
(36, 0, ' নির্বাচন (Not in Use 25.05.2017)', 'Election', 14, 0),
(37, 0, 'কলকাতার গুলতানি (Not in Use 25.05.2017)', 'Gultani', 5, 0),
(38, 0, 'ফিচার', 'Feature', 1, 0),
(42, 0, 'কলকাতা বলছি (Not in Use 25.05.2017)', 'Kolkata-Speaks', 2, 0),
(41, 0, 'ছিন্নমূল(Bangladesh)', 'Refugee', 7, 0),
(43, 42, 'আজকে (Not in Use 25.05.2017)', 'Today-Kolkata', 1, 0),
(48, 17, 'ক্রিকেট', 'Cricket', 2, 0),
(46, 0, 'কলকাতা নোটবুক (Not in Use 25.05.2017)', 'Kolkata Notebook', 8, 0),
(47, 17, 'কলকাতা ময়দান', 'Kolkata-Maidan', 6, 0),
(49, 17, 'ব্যাডমিনটন', 'Badminton', 1, 0),
(50, 17, 'ফুটবল', 'Football', 3, 0),
(51, 17, 'টেনিস', 'Tennis', 4, 0),
(52, 17, 'আরও খেলা', 'Aro-Khela', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(10) NOT NULL,
  `state` int(10) NOT NULL,
  `district` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seats` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `state`, `district`, `seats`, `status`, `date`) VALUES
(1, 2, 'কলকাতা', '২০', 0, '2017-06-15'),
(2, 2, 'হাওড়া', '18', 0, '2017-06-15'),
(3, 2, 'নদীয়া', '15', 0, '2017-06-15'),
(4, 2, 'উত্তর ২৪ পরগনা', '22', 0, '2017-06-15'),
(5, 2, 'দক্ষিণ ২৪ পরগনা', '23', 0, '2017-06-15');

-- --------------------------------------------------------

--
-- Table structure for table `dol`
--

CREATE TABLE `dol` (
  `id` int(10) NOT NULL,
  `dol_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dol`
--

INSERT INTO `dol` (`id`, `dol_name`, `flag`, `status`, `date`) VALUES
(1, 'CPI(M)', '1496758324cpim.png', 0, '2017-06-06'),
(2, 'TMC', '1496758437tmc.png', 0, '2017-06-06'),
(3, 'BJP', '1496758571bjp.png', 0, '2017-06-06'),
(4, 'INC', '1496758745inc.png', 0, '2017-06-06');

-- --------------------------------------------------------

--
-- Table structure for table `election_seats`
--

CREATE TABLE `election_seats` (
  `id` int(10) NOT NULL,
  `loksabha` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `bidhansabha` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `election_seats`
--

INSERT INTO `election_seats` (`id`, `loksabha`, `bidhansabha`) VALUES
(1, '৫৪৩', '২৯৫');

-- --------------------------------------------------------

--
-- Table structure for table `epaper`
--

CREATE TABLE `epaper` (
  `id` int(11) NOT NULL,
  `paperlocation` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `epaper`
--

INSERT INTO `epaper` (`id`, `paperlocation`) VALUES
(1, 'admin/epaper/epaper.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `exclusive`
--

CREATE TABLE `exclusive` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desc` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galcat`
--

CREATE TABLE `galcat` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `galcat`
--

INSERT INTO `galcat` (`id`, `name`, `status`, `date`) VALUES
(31, 'শারদ-উৎসবের প্রস্তুতি নানা দিকে', 0, '1568734892'),
(32, 'শারদ-উৎসবের প্রস্তুতি নানা দিকে', 0, '1568734918');

-- --------------------------------------------------------

--
-- Table structure for table `gallerys`
--

CREATE TABLE `gallerys` (
  `id` int(11) NOT NULL,
  `cat` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cap` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gallerys`
--

INSERT INTO `gallerys` (`id`, `cat`, `img`, `cap`, `status`, `date`) VALUES
(890, 30, '1426699035lake.jpg', 'লেক থানার এএসআই শ্যামল সর্দারকে বারুইপুর বাইপাসে মারধর, ছিনতাই, ছবি- দেবাশীস মালিক ', 0, '2015-03-18'),
(889, 30, '1426698361dipakhalder.jpg', 'ডায়মন্ড হারবারে হাসপাতালে দুটি অ্যাম্বুলেন্স তুলে দিলেন বিধায়ক দীপক হালদার, ছবি- দেবাশীষ মালিক', 0, '2015-03-18'),
(888, 30, '1426698249aborodh.jpg', 'বর্ধমান শহরে রানাঘাট কাণ্ডের প্রতিবাদে নাগরিক মিছিল, ছবি- সুপ্রকাস চৌধুরী', 0, '1426698249'),
(887, 30, '1426698154ranaghat.jpg', 'রানাঘাট ধর্ষণ কাণ্ডে জড়িতদের গ্রেফতারের দাবীতে বর্ধমানে বিজেপি-র মিছিল, ছবি সুপ্রকাশ চৌধুরী', 0, '1426698154'),
(886, 30, '1426698066aalu.jpg', 'আলু চাষিদের আত্মঘাতী হওয়ার ঘটনার প্রতিবাদে এবং আলু নিয়ে উদ্ভুত পরিস্থিতিতে প্রশাসনিক হতক্ষেপের দাবিতে এসইউসি- এর মিছিল', 0, '1426698066'),
(885, 30, '1426697981sudiptosen.jpg', 'বর্ধমান আদালতে সারদা কর্তা সুদীপ্ত সেন, বেলবন্ড দিতে না পারার জন্য বিচারক তার জামিন না মঞ্জুর করে, ছবি- সুপ্রকাশ চৌধুরী', 0, '1426697981'),
(884, 30, '1426613309Pathar.jpg', 'পাথরপ্রতিমা থানার ওসির বিরুদ্ধে তোলাবাজির অভিযোগ, ছবি- দেবাশীষ মালিক', 0, '1426613309'),
(883, 30, '1426595671canningffffffffff.jpg', 'ক্যানিং-এ উচ্ছেদ প্রতিরোধ কমিটির বাধায় ফিরতে হল পুলিশকে, ছবি- দেবাশীষ মালিক', 0, '1426595671'),
(881, 30, '1426595389falta.jpg', 'সুন্দরবন উন্নয়ন মন্ত্রী মন্টুরাম পাখিরা ফলতায় নদী বাঁধ ঘুরে দেখছেন, ছবি- দেবাশীষ মালিক', 0, '1426595389'),
(882, 30, '1426595481cannig.jpg', 'উচ্ছেদ প্রতিরোধ কমিটির বাধায় ক্যানিং-এ পুলিশকে ফিরে আসতে হল, ছবি- দেবাশীষ মালিক', 0, '1426595481'),
(879, 30, '1426578645airport.jpg', 'পশ্চিমবঙ্গে কাজী নজরুল বিমানবন্দর', 0, '1426578645'),
(880, 30, '1426578758pak.jpg', 'কলকাতা সফরে যাচ্ছেন পাক দূত', 0, '1426578758'),
(878, 30, '1426578571convoy.jpg', 'রানাঘাটে অবরুদ্ধ মমতার কনভয়', 0, '1426578571'),
(877, 30, '1426524542BharatRatna.jpg', 'ভারতরত্ন বিজ্ঞানী সিএনআর রাওকে বর্ধমান বিশ্ববিদ্যালয়ের পক্ষ থেকে\r\nসম্মান জানানো হল', 0, '1426524542'),
(876, 30, '1426524454AIKMS.jpg', 'আলুর ন্যায্যমূল্যর দাবীকে সামনে রেখে সারা ভারত কৃষক ও খেতমজুর সংগঠনের বর্ধমানে  বিক্ষোভ, ছবি- সুপ্রকাশ চৌধুরী', 0, '1426524454'),
(874, 30, '1426524343DM.jpg', 'আসন্ন পৌরসভা নির্বাচন নিয়ে জেলাশাসকের দপ্তরে সর্বদলীয় বৈঠক, ছবি- সুপ্রকাশ চৌধুরী, বর্ধমান', 0, '1426524343'),
(871, 30, '1426495527student.jpg', 'কাকদ্বীপে আহত ছাত্র, ছবি- দেবাশীষ মালিক', 0, '1426495527'),
(872, 30, '1426509863Hadudu.jpg', 'ঢোলাহাটে হাডুডু প্রতিযোগিতা, ছবি- দেবাশীষ মালিক', 0, '1426509863'),
(870, 30, '1426494675court.jpg', 'সাত মাস ধরে ডায়মন্ডহারবারে সিভিল জজ জুনিয়র ডিভিশন অতিরিক্ত আদালতে বয়কট চলছে, ছবি- দেবাশীষ মালিক', 0, '1426494712'),
(869, 30, '1426494533boicot.jpg', 'সাত মাস ধরে ডায়মন্ডহারবারে সিভিল জজ জুনিয়র ডিভিশন অতিরিক্ত আদালতে বয়কট চলছে, ছবি- দেবাশীষ মালিক', 0, '1426494701'),
(868, 30, '1426439355diamondharbour.jpg', 'ডায়মন্ড হারবার হাইস্কুলে অভিভাবক সমিতির নির্বাচনে সব আসনে তৃণমূল জয়ী, ছবি- দেবাশীষ মালিক', 0, '1426439355'),
(811, 30, '1424514510silet.jpg', 'সিলেটে উদাযাপিত হল ভাষা শহিদ দিবস', 0, '1424514510'),
(812, 30, '1424515792lokdebata.jpg', 'লৌকিক দেবতা, ছবি- সুবীর সরকার', 0, '1424515792'),
(813, 30, '1424582102JPM.jpg', 'মন্তেশ্বরে গ্রামবাসীদের সঙ্গে কথা বলছেন খাদ্যমন্ত্রী জ্যোতিপ্রিয় মল্লিক, ছবি- অভিষেক চৌধুরী, কালনা', 0, '1424582102'),
(894, 30, '1426744043cricket.jpg', 'ধাওয়ান-কোহলি আউট.২২.৩ ওভার শেষে ভারতের রান ২ উইকেটে ৯৩', 0, '1426744043'),
(893, 30, '1426702273ranaghat.jpg', 'প্রতিবাদ রানাঘাটের বর্বরতার', 0, '1426702273'),
(892, 30, '1426699261bridge.jpg', 'নামখানায় হাতানিয়া - দোয়ানিয়া নদীতে ব্রিজের কাজ শুরু, ছবি- দেবাশীষ মালিক', 0, '1426699262'),
(891, 30, '1426699185Marathan.jpg', 'ম্যারাথন দৌড়, বজবজ থানা সম্মিলিনীর উদ্যোগে, ছবি- দেবাশীষ মালিক ', 0, '1426699185'),
(867, 30, '1426439280auditorium.jpg', 'সোনারপুরে অডিটোরিয়ামের উদ্বোধন করছেন মন্ত্রী সুব্রত মুখোপাধ্যায়, ছবি- দেবাশীষ মালিক', 0, '1426439280'),
(866, 30, '1426439190protest.jpg', 'রানাঘাটে বৃদ্ধা শিক্ষিকা গণধর্ষণ কাণ্ডের প্রতিবাদে বর্ধমানে গনতান্ত্রিক মহিলা সমিতির প্রতিবাদ মিছিল', 0, '1426439190'),
(865, 30, '1426421982manas.jpg', 'খড়গপুরে কংগ্রেস নেতা মানস ভুইঞা, ছবি- বাপন ঘোষ', 0, '1426421982'),
(863, 30, '1426421264pak.jpg', 'অযোধ্যা পাহাড়ের পাকদন্ডী, ছবি- অপূর্ব সাহা', 0, '1426421264'),
(864, 30, '1426421383fatal.jpg', 'শিয়ালদা দক্ষ‌িণ শাখায় চম্পাহাটিতে রেললাইনে ফাটল, ছবি- দেবাশীষ মালিক', 0, '1426421383'),
(862, 30, '1426408862a.jpg', 'পুরুলিয়ায় পলাশ রয়েছে দোলের পরেও, ছবি : অপূর্ব সাহা', 0, '1426408862'),
(833, 30, '1425538802holi.jpg', 'লাগল যে দোল, ছবি- অপূর্ব সাহা', 0, '1425538802'),
(834, 30, '1425538821holi1.jpg', 'সবার রঙে রঙ মেলাতে, ছবি- অপূর্ব সাহা', 0, '1425538821'),
(835, 30, '1425564076cpm.jpg', 'সিপিআইএম-এর রাজ্য সম্মেলন উপলক্ষ্যে বর্ধমানে প্রচার মিছিল ', 0, '1425574609'),
(836, 30, '1425632902DM_SP.jpg', ' রঙের আনন্দে মাতলেন বর্ধমানের জেলাশাসক সৌমিত্র মোহন, জেলা পুলিস সুপার কুনাল আগ্রবাল, সুপ্রকাশ চৌধুরী', 0, '1425632903'),
(837, 30, '1425636874PBKMS.jpg', 'কর্নাটকের রায়চুড়ে গণবন্টন ব্যবস্থা চালু ও ১০০ দিনের কাজের প্রকল্পের দাবিতে জেল ভরো আন্দোলনে সামিল  ', 0, '1425636918'),
(838, 30, '1425642291jhargram.jpg', 'ঝাড়গ্রামে বসন্তোৎসব, ছবি- বাপন ঘোষ', 0, '1425642292'),
(839, 30, '1425660885LF.jpg', 'বামফ্রন্টের প্রতিবাদ মিছিল মেদিনীপুরে, ছবি- বাপন ঘোষ', 0, '1425660885'),
(840, 30, '1425661141holi.jpg', 'রাঙল রে ভুবন, ছবি- বাপন ঘোষ', 0, '1425661141'),
(841, 30, '1425736370MUKUL.jpg', 'কাঁচরাপাড়ায় মুকুল রায়ের সমর্থনে পোস্টার ব্যানার টাঙানো শুরু হয়েছে, ছবি- অপূর্ব সাহা', 0, '1425736370'),
(842, 30, '1425802062antorjatikdibas.jpg', 'বর্ধমান জেলা প্রশাসনের উদ্যোগে পালিত হল বিশ্ব নারী দিবস', 0, '1425802062'),
(844, 30, '1425829473bwn.jpg', 'বসন্ত উৎসব, ছবি- সুপ্রকাশ চৌধুরী, বর্ধমান', 0, '1425829473'),
(845, 30, '1426009278BD.jpg', 'ব্রিটিশদের ১৫ রানে বধ করলো বাংলাদেশ', 0, '1426009278'),
(846, 30, '1426061544samesex.jpg', 'সমলিঙ্গে বিয়ে', 0, '1426061544'),
(847, 30, '1426065133palash.jpg', 'রাঢ বাংলার মাঠে পলাশের হাতছানি, ছবি- আব্দুল জালাল, পুরুলিয়া', 0, '1426065133'),
(848, 30, '1426065790srilanka.jpg', 'সাঙ্গাকারার বিশ্বরেকর্ডে শ্রীলঙ্কা তুঙ্গে', 0, '1426065790'),
(850, 30, '1426138189afridi.jpg', 'বিশ্বকাপ থেকে বাদ পড়ছেন আফ্রিদি', 0, '1426138189'),
(852, 30, '1426156014viliards.jpg', 'বিশ্বকাপে ২০টি ছক্কার রেকর্ড ভিলিয়ার্সের', 0, '1426156014'),
(853, 30, '1426182042congress.jpg', 'মহেশতলায় কংগ্রেসের দেওয়াল লিখন, ছবি- দেবাশীষ মালিক', 0, '1426182042'),
(854, 30, '1426182158bhatar.jpg', 'ভাতারের  বলগোনা গুসকরা রাস্তায় আলু ফেলে অবরোধ-\r\nঅবস্থান, ছবি- সুপ্রকাশ চৌধুরী', 0, '1426182158'),
(855, 30, '1426186245poth.jpg', 'গ্রামছাড়া ওই রাঙার মাটির পথ..., ছবি- রঘুনন্দন মল্লিক, তমলুক', 0, '1426186245'),
(856, 30, '1426362901swimmingclub.jpg', 'অশোকনগরে চালু হল সুইমিং ক্লাব, ছবি- পঙ্কজ বিশ্বাস', 0, '1426362901'),
(857, 30, '1426365586sahabas.jpg', 'কুলপি থানায় সহবাসকান্ডে ক্ষ‌তিগ্রস্ত মহিলাকে নিয়ে এপিডিআরের প্রতিনিধি দল, ছবি-দেবাশীষ মালিক ', 0, '1426365586'),
(858, 30, '1426365714sonarpur.jpg', 'সোনারপুর থানার পুলিশের উদ্যোগে কামালগাজিতে সাঁতার প্রতিযোগিতা, ছবি- দেবাশীষ মালিক ', 0, '1426365714'),
(859, 30, '1426366885handi.jpg', 'পাথরপ্রতিমাল লক্ষ‌ীজনার্দনপুরে লেখক নিয়ে দৃষ্টিহীন ছাত্র উচ্চমাধ্যমিক পরীক্ষ‌ায়, ছবি- দেবাশীষ মালিক ', 0, '1426366885'),
(860, 30, '1426367120HS.jpg', 'উচ্চ-মাধ্যমিক ২০১৫, পরীক্ষা শেষে পরীক্ষার্থীরা, ছবি- সুপ্রকাশ চৌধুরী, বর্ধমান', 0, '1426367120'),
(861, 30, '1426367537dumdum.jpg', 'দমদম পুরসভার বহুমুখী প্রকল্পের উদ্বোধনে দুই মন্ত্রী ফিরহাদ হাকিম, ব্রাত্য বসু, ছবি- পঙ্কজ বিশ্বাস', 0, '1426367537');

-- --------------------------------------------------------

--
-- Table structure for table `headline`
--

CREATE TABLE `headline` (
  `id` int(11) NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `headline`
--

INSERT INTO `headline` (`id`, `link`, `text`, `status`, `date`) VALUES
(917, 'http://www.thehindu.com/news/national/indobangladesh-border-will-be-fenced-by-dec-sadananda-gowda/article8686938.ece', 'Indo-Bangladesh border will be fenced by Dec: Sadananda Gowda\r\n', 0, '1465017009'),
(918, 'http://www.thehindu.com/news/national/amritsars-town-hall-is-site-of-new-partition-museum/article8686932.ece?ref=topnavwidget&utm_source=topnavdd&utm_medium=topnavdropdownwidget&utm_campaign=topnavdropdown', 'Amritsar’s Town Hall is site of new Partition Museum', 0, '1465017058'),
(914, 'http://www.thehindu.com/news/national/pm-modis-fivenation-tour/article8689923.ece?homepage=true', 'What to expect from PM Modi’s five-nation tour', 0, '1465016747'),
(915, 'http://www.thehindu.com/news/national/citizens-have-right-to-safe-water-say-draft-legislation/article8687492.ece', 'Citizens have right to safe water, say draft legislation', 0, '1465016781'),
(916, 'http://www.thehindu.com/news/national/other-states/mathura-anticroachment-opposition-parties-demand-judicial-probe-as-police-recovers-heavy-cache-of-arms/article8686374.ece', 'Day after clash, huge arms cache seized in Mathura', 0, '1465016955');

-- --------------------------------------------------------

--
-- Table structure for table `hit_count`
--

CREATE TABLE `hit_count` (
  `pge_name` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `views` bigint(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hit_count`
--

INSERT INTO `hit_count` (`pge_name`, `views`) VALUES
('', 0),
('id=3000', 2),
('id=3004', 3),
('id=3011', 3),
('id=3013', 3),
('id=3020', 4),
('id=3021', 1),
('id=3092', 2),
('id=3250', 1),
('id=3275', 1),
('id=3276', 2),
('id=3293', 2),
('id=3299', 1),
('id=3305', 1),
('id=3307', 5);

-- --------------------------------------------------------

--
-- Table structure for table `keyword`
--

CREATE TABLE `keyword` (
  `id` int(255) NOT NULL,
  `name` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `keyword`
--

INSERT INTO `keyword` (`id`, `name`, `status`) VALUES
(2, 'প্রধান মন্ত্রী নরেন্দ্র মোদী  ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loksabha_constituency`
--

CREATE TABLE `loksabha_constituency` (
  `id` int(10) NOT NULL,
  `constituency` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loksabha_constituency`
--

INSERT INTO `loksabha_constituency` (`id`, `constituency`, `state`, `status`, `date`) VALUES
(1, 'কলকাতা উত্তর', '2', 0, '2017-06-08'),
(2, 'কলকাতা দক্ষিণ', '2', 0, '2017-06-09'),
(3, 'চন্দ্রপুর', '3', 0, '2017-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `loksabha_result`
--

CREATE TABLE `loksabha_result` (
  `id` int(255) NOT NULL,
  `state` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `kendro` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ca_dol_1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vo_dol_1` int(100) NOT NULL,
  `ca_dol_2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vo_dol_2` int(100) NOT NULL,
  `ca_dol_3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vo_dol_3` int(100) NOT NULL,
  `ca_dol_4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vo_dol_4` int(100) NOT NULL,
  `ca_dol_5` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vo_dol_5` int(100) NOT NULL,
  `round` int(10) NOT NULL,
  `difference` int(100) NOT NULL,
  `result` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` varchar(400) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loksova`
--

CREATE TABLE `loksova` (
  `id` int(11) NOT NULL,
  `kendro` text COLLATE utf8_unicode_ci NOT NULL,
  `first` text COLLATE utf8_unicode_ci NOT NULL,
  `second` text COLLATE utf8_unicode_ci NOT NULL,
  `diff` int(11) NOT NULL,
  `round` text COLLATE utf8_unicode_ci NOT NULL,
  `fol` text COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loksova`
--

INSERT INTO `loksova` (`id`, `kendro`, `first`, `second`, `diff`, `round`, `fol`, `date`) VALUES
(21, 'তমলুক', 'শুভেন্দু অধিকারী(TMC)', 'ইব্রাহিম আলি(LF)', 246481, '', 'তৃণমূল জয়ী', '1400312164'),
(25, 'বীরভুম', 'শতাব্দী রায়(TMC)', 'এলাহি কামরে মহম্মদ(LF)', 367263, '', 'তৃণমূল জয়ী', '1400309237'),
(26, 'বিষ্ণুপুর', 'সৌমিত্র খান(TMC)', 'সুস্মিতা বাউরি(LF)', 169685, '', 'তৃণমূল জয়ী', '1400309307'),
(28, 'কাঁথি', 'শিশির অধিকারী(TMC)', 'তাপস সিনহা(LF)', 229490, '', 'তৃণমূল জয়ী', '1400311125'),
(29, 'বহরমপুর', 'অধীররঞ্জন চৌধুরী(INC)', 'প্রমথেশ মুখোপাধ্যায়(LF)', 365667, '', 'কংগ্রেস জয়ী', '1400308675'),
(30, 'রায়গঞ্জ', 'মহম্মদ সেলিম(LF)  ', 'দীপা দাশমুন্সি(INC) ', 2634, '', 'জয়ী বামফ্রন্ট', '1400311940'),
(32, 'জলপাইগুড়ি', 'বিজয় বর্মন(MC)', 'মহেন্দ্র রায়(LF)', 69606, '', 'তৃণমূল জয়ী', '1400310469'),
(33, 'ঝাড়গ্রাম', 'উমা সরেন(TMC)', 'পুলিনবিহারী বাস্কে(LF)', 347883, '', 'তৃণমূল জয়ী', '1400310396'),
(34, 'হুগলি', 'রত্না দে নাগ(TMC)', 'প্রদীপ সাহা(LF)', 289084, '', 'তৃণমূল জয়ী', '1400310022'),
(36, 'মালদহ(উ)', 'মৌসম নূর(INC)', 'খগেন মুর্মু(LF)', 65705, '', 'কংগ্রেস এগিয়ে', '1400311499'),
(37, 'মালদহ(দ)', 'আবু হাসনাত চৌধিরী(INC)', 'মহঃ মোয়াজ্জেম হোসেন(TMC)', 164111, '', 'কংগ্রেস জয়ী', '1400311424'),
(40, 'দমদম', 'সৌগত রায়(TMC)', 'অসীম দাশগুপ্ত', 154934, '', 'তৃণমূল জয়ী', '1400309807'),
(41, 'রাণাঘাট', 'তাপস মণ্ডল(TMC)', 'অর্চনা বিশ্বাস(LF)', 211767, '', 'তৃণমূল জয়ী', '1400312017'),
(44, 'যাদবপুর', 'সুগত বসু(TMC)', 'সুজন চক্রবর্তী(LF)', 125203, '', 'তৃণমূল জয়ী', '1400310311'),
(45, 'কোচবিহার', 'রেণুকা সিনহা(TMC)', 'দীপক রায়(LF)', 87107, '', 'তৃণমূল জয়ী', '1400309544'),
(47, 'বসিরহাট', 'ইদ্রিস আলি(TMC)', 'নুরুল হুদা(LF)', 109659, '', 'তৃণমূল জয়ী', '1400309171'),
(49, 'পুরুলিয়া', 'মৃগাঙ্গ মাহাতো(TMC)', 'নরহরি মাহাতো(LF)', 153877, '', 'তৃণমূল জয়ী', '1400311794'),
(50, 'বর্ধমান-দুর্গাপুর', 'মমতাজ সংঘমিত্রা(TMC)', 'শেখ সাহিদুল হক(LF)', 107331, '', 'তৃণমূল জয়ী', '1400309475'),
(51, 'আরামবাগ', 'আফরিন আলি(TMC)', 'শক্তিমোহন মালি(LF)', 346845, '', 'তৃণমূল জয়ী', '1400308097'),
(53, 'বাঁকুড়া', 'মুনমুন সেন(TMC) ', 'বাসুদেব আচারিয়া(LF) ', 78506, '', 'তৃণমূল জয়ী', '1400308947'),
(54, 'হাওড়া', 'প্রসুন বন্দ্যোপাধ্যায়(TMC)', 'শ্রীদীপ ভট্টাচার্য(LF)', 196956, '', 'তৃণমূল জয়ী', '1400310100'),
(55, 'বোলপুর', 'অনুপম হাজরা(TMC)', 'রামচন্দ্র ডোম(LF)', 236112, '', 'তৃণমূল জয়ী', '1400309415'),
(56, 'ডায়মণ্ডহারবার', 'অভিষেক বন্দ্যোপাধ্যায়(TMC)', 'আবু হাসনাত(LF)', 71288, '', 'তৃণমূল জয়ী', '1400309691'),
(57, 'মথুরাপুর', 'সিএম জাটুয়া(TMC)', 'রিঙ্কু নস্কর(CPM)', 138436, '', 'তৃণমূল জয়ী', '1400311571'),
(58, 'মেদিনীপুর', 'সন্দ্যা রায়(TMC)', 'প্রবোধ পাণ্ডা(LF)', 184666, '', 'তৃণমূল এগিয়ে', '1400311626'),
(59, 'দার্জিলিং', 'এসএস আলুওয়ালিয়া(BJP)', 'বাইচুং ভুটিয়া(TMC)', 197239, '', 'বিজেপি জয়ী', '1400309609'),
(60, 'বালুরঘাট', 'অর্পিতা ঘোষ(TMC)', 'বিমল ঘোষ(LF)', 107064, '', 'তৃনমূল জয়ী', '1400308736'),
(61, 'বারাসত', 'কাকলী ঘোষদস্তিদার(TMC)', 'মোর্তজা হোসেন(LF)', 203141, '', 'তৃণমূল জয়ী', '1400309052'),
(62, 'উলুবেড়িয়া', 'সুলতান আহমেদ(TMC)', 'সাবিরুদ্দিন মোল্লা', 201222, '', 'তৃণমূল জয়ী', '1400312219'),
(63, 'আলিপুরদুয়ার', 'দশরথ তিরকে (TMC)', 'মনোহর তিরকে(LF)', 21447, '', 'তৃণমূল জয়ী', '1400307960'),
(64, 'আসানসোল', 'বাবুল সুপ্রিয়(BJP)', 'দোলা সেন(TMC)\r\n', 70480, '', 'বিজেপি জয়ী', '1400308599'),
(65, 'কৃষ্ণনগর', 'তাপস পাল(TMC)', 'শান্তুনু ঝা(LF)', 71255, '', 'তৃণমূল জয়ী', '1400311349'),
(66, 'কলকাতা দক্ষিণ', 'সুব্রত বক্সী(TMC)', 'তথাগত রায়(BJP)', 136339, '', 'তৃণমূল জয়ী', '1400311224'),
(67, 'শ্রীরামপুর', 'কল্যাণ বন্দ্যোপাধ্যায়(TMC)', 'বাপি লাহিড়ি(BJP)', 152526, '', 'তৃণমূল জয়ী ', '1400312085'),
(68, 'জঙ্গিপুর', 'অভিজিত মুখার্জি(INC)', 'মোজাফ্ফার হোসেন(LF)', 8161, '', 'কংগ্রেস জয়ী', '1400310529'),
(69, 'কলকাতা উত্তর', 'সুদীপ ব্যানার্জি(TMC)', 'রূপা বাগচি', 96226, '', 'তৃণমূল জয়ী ', '1400311279'),
(71, 'মুর্শিদাবাদ', 'বদরুদ্দোজা খান(LF)', 'আব্দুল মান্নান(INC)', 18453, '', 'বামফ্রন্ট জয়ী', '1400311734'),
(72, 'বারাকপুর', 'দীনেশ ত্রিবেদী(TMC)', 'সুভাষিণী আলি(LF)', 206773, '', 'তৃণমূল জয়ী', '1400309114'),
(73, 'জয়নগর', 'প্রতিমা মণ্ডল(TMC)', 'সুভাষ নস্কর(LF)', 108384, '', 'তৃণমূল জয়ী', '1400310621'),
(74, 'বনগাঁ', 'কপিলকৃষ্ণ ঠাকুর(TMC)', 'দেবেশ দাস(LF)', 146601, '', 'তৃণণূল জয়ী', '1400312327'),
(75, 'ঘাটাল', 'দীপক অধিকারী-দেব(TMC)', 'সন্তাষ রাণা(LF)', 260891, '', 'তৃণমূল জয়ী', '1400309860'),
(77, 'বর্ধমান-পূর্ব', 'সুনীল মণ্ডল(TMC)', 'ঈশ্বরকুমার দাস', 114000, '', 'তৃণমূল জয়ী', '1400307852');

-- --------------------------------------------------------

--
-- Table structure for table `municipality`
--

CREATE TABLE `municipality` (
  `id` int(10) NOT NULL,
  `municipality` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `seats` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `municipality`
--

INSERT INTO `municipality` (`id`, `municipality`, `seats`, `state`, `district`, `status`, `date`) VALUES
(1, 'উত্তর দমদম', '২৭', '2', '4', 0, '2017-06-16'),
(2, 'বারাসাত', '৩৫', '2', '4', 0, '2017-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `municipality_result`
--

CREATE TABLE `municipality_result` (
  `id` int(255) NOT NULL,
  `state` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `kendro` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ward` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ca_dol_1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vo_dol_1` int(100) NOT NULL,
  `ca_dol_2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vo_dol_2` int(100) NOT NULL,
  `ca_dol_3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vo_dol_3` int(100) NOT NULL,
  `ca_dol_4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vo_dol_4` int(100) NOT NULL,
  `ca_dol_5` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vo_dol_5` int(100) NOT NULL,
  `round` int(10) NOT NULL,
  `difference` int(100) NOT NULL,
  `result` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` varchar(400) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `option`
--

CREATE TABLE `option` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `option`
--

INSERT INTO `option` (`id`, `name`, `value`, `status`) VALUES
(1, 'facebook', 'https://www.facebook.com/mainak.banerjee.587/', 0),
(2, 'twitter', 'https://twitter.com/BengalUpdate?ref_src=twsrc%5Etfw&ref_url=http%3A%2F%2Flocalhost%2Fsumitra%2F', 0),
(3, 'youtube', 'https://www.youtube.com/channel/UCR9_YXAbU_HTtKM4X8NKExQ?view_as=subscriber', 0),
(4, 'googleplus', '', 0),
(5, 'rss', '', 0),
(6, 'instagram', '', 0),
(7, 'phone', '+91 943 31 25020', 0),
(8, 'email', 'bengalupdate@gmail.com', 0),
(9, 'address', '<p><strong>Editorial:</strong> 43 Kazipara Main Road(East), Kazipara, Barasat, Kolkata 700125, WB, India.<br/>\r\n<strong>Office:</strong> Majherait, Khasbalanda, Haroa, North 24Parganas, W.B.PIN-743425 India.</p>\r\n\r\n', 0),
(10, 'team', 'সুকুমার মিত্র- প্রধান সম্পাদক, সুকুমার মণ্ডল- সহযোগী সম্পাদক, বিপ্লব ঘোষ-নিউজ কো-্র্ডিনেটর,মিঠু ব্যানার্জি- বিশেষ সংবাদদাতা, শর্মিলা ঘোষ- বিশেষ প্রতিনিধি,গুরুপ্রসাদ ভাণ্ডারি- পশ্চিম মেদিনীপুর, সৌমেন চৌধুরী-নাট্য সমালোচক, পিনাকী কর- মার্কেটিং ম্যানেজার\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `our_team`
--

CREATE TABLE `our_team` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `desc` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `our_team`
--

INSERT INTO `our_team` (`id`, `name`, `desc`, `status`) VALUES
(1, 'এডিটর- ইন- চিফ', 'সুকুমার মিত্র', 0),
(2, 'অ্যাসোসিয়েট এডিটর', 'মণিরুল হক, তুষার ভট্টাচার্য, হীরক বন্দ্যোপাধ্যায়, সুব্রত সরকার  (দিল্লি)  ', 0),
(8, 'আন্তর্জাতিক সদস্য', ' তাপস মজুমদার (রিয়াধ-মধ্যপ্রাচ্য),আহানা নিবেদিতা গাঙ্গুলি(নিউ জার্সি), সুরেন কুমার (নিউ জার্সি)', 0),
(9, 'ওয়েব ম্যানেজমেন্ট', 'সুরেন কুমার, আহানা নিবেদিতা গাঙ্গুলী( নিউ জার্সি)', 0);

-- --------------------------------------------------------

--
-- Table structure for table `page_manager`
--

CREATE TABLE `page_manager` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `keyword` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `page_manager`
--

INSERT INTO `page_manager` (`id`, `name`, `title`, `keyword`, `description`, `status`) VALUES
(1, 's', 's', 's', 's', 0),
(2, 'index.php', 'test Title', 'this, is, test, key, words', 'this, is, test, Description', 0);

-- --------------------------------------------------------

--
-- Table structure for table `panchayat`
--

CREATE TABLE `panchayat` (
  `id` int(10) NOT NULL,
  `panchayat` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `zseats` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ps_seats` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gpseats` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `panchayat`
--

INSERT INTO `panchayat` (`id`, `panchayat`, `zseats`, `ps_seats`, `gpseats`, `state`, `district`, `status`, `date`) VALUES
(1, 'উত্তর ২৪ পরগনা', '৫৬', '২২', '২০০', '2', '4', 0, '2017-06-22'),
(2, 'হাওড়া', '৫২', '৩৬', '১৯৮', '2', '2', 0, '2017-06-22');

-- --------------------------------------------------------

--
-- Table structure for table `panchayat_result`
--

CREATE TABLE `panchayat_result` (
  `id` int(255) NOT NULL,
  `state` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `kendro` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `result_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vo_dol_1` int(100) NOT NULL,
  `vo_dol_2` int(100) NOT NULL,
  `vo_dol_3` int(100) NOT NULL,
  `vo_dol_4` int(100) NOT NULL,
  `vo_dol_5` int(100) NOT NULL,
  `seats` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` varchar(400) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `panchayat_result`
--

INSERT INTO `panchayat_result` (`id`, `state`, `district`, `kendro`, `result_type`, `vo_dol_1`, `vo_dol_2`, `vo_dol_3`, `vo_dol_4`, `vo_dol_5`, `seats`, `status`, `date`) VALUES
(2, '2', '2', '2', 'ps_seats', 10, 10, 10, 3, 3, 36, 0, '2017');

-- --------------------------------------------------------

--
-- Table structure for table `poll`
--

CREATE TABLE `poll` (
  `id` int(11) NOT NULL,
  `topic` text COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `cat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `yes` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `not_known` int(11) NOT NULL,
  `startdate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `poll`
--

INSERT INTO `poll` (`id`, `topic`, `name`, `cat`, `yes`, `no`, `not_known`, `startdate`, `date`, `status`) VALUES
(76, 'সিপিএম ক্রমশ পিছিয়ে পড়বে', 'ব্যালট বক্স', 'general', 7, 8, 5, '1455295411', '2017-06-04', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `pagecat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `topnews` tinyint(1) NOT NULL,
  `dinersera` tinyint(1) NOT NULL,
  `khoborkholok` tinyint(1) NOT NULL,
  `khelarjholok` tinyint(1) NOT NULL,
  `exclusive` tinyint(1) NOT NULL,
  `lead` tinyint(1) NOT NULL,
  `lead_text` text COLLATE utf8_unicode_ci NOT NULL,
  `smalltext` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author_name` text COLLATE utf8_unicode_ci NOT NULL,
  `key` text COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `now` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `admin_id` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `pagecat`, `cat`, `topnews`, `dinersera`, `khoborkholok`, `khelarjholok`, `exclusive`, `lead`, `lead_text`, `smalltext`, `title`, `text`, `image`, `author_image`, `author_name`, `key`, `date`, `time`, `now`, `order`, `status`, `admin_id`) VALUES
(3303, 'bangalikothai', '41', 1, 1, 0, 0, 1, 1, '২১শে ফেব্রুয়ারি আন্তর্জাতিক মাতৃভাষা দিবসকে যুক্তরাষ্ট্রে যথাযথভাবে পালনের জন্য কংগ্রেসে একটি বিল উত্থাপন করা হবে। এ কথা বলেছেন কংগ্রেসওম্যান ও যুক্তরাষ্ট্রে বাংলাদেশ ককাসের মেম্বার গ্রেস মেং। শুক্রবার নিউইয়র্কে বাংলাদেশ সোসাইটির উদ্যোগে, মহান একুশে ফ্রেব্রুয়ারি উদযাপন উপলক্ষে এক অনুষ্ঠানে প্রধান অতিথির বক্তব্যে এ কথা বলেন তিনি। বাংলাদেশের সাম্প্রতিক রাজনৈতিক পরিস্থিতি নিয়ে গ্রেস মেং বলেন, বিষয়টি নিয়ে যুক্তরাষ্ট্রের স্টেট ডিপার্টমেন্ট ও বাংলাদেশে নিযুক্ত মার্কিন রাষ্ট্রদূতের সঙ্গে যোগাযোগ রক্ষা করে চলেছি। ইউএস কংগ্রেসের ফরেন রিলেশন কমিটির সদস্য কংগ্রেসওম্যান গ্রেস মেং এর কাছে বাংলাদেশের বর্তমান রাজনৈতিক পরিস্থিতি নিয়ে যুক্তরাষ্ট্রের অবস্থান জানতে চান উপস্থিত সাংবাদিকরা। জবাবে তিনি জানান, বাংলাদেশের সাম্প্রতিক রাজনৈতিক পরিস্থিতিতে আমরা উদ্বিগ্ন। বিষয়টি যুক্তরাষ্ট্র সরকার গভীরভাবে পর্যবেক্ষণ করছে। ইতোমধ্যে আমাদের ফরেন অ্যাফেয়ার্স বিভাগ এ বিষয়ে পদক্ষেপ গ্রহণ করেছে। আমরা চাই বাংলাদেশের মানুষ নিরাপদে থাকবে। এ ছাড়াও শান্তিপূর্ণ আন্দোলন এবং সবার গণতান্ত্রিক অধিকার প্রতিষ্ঠার জন্য আমরা কাজ করে যাব।', '', 'একুশে পালনে কংগ্রেসে বিল উত্থাপন হবে : কংগ্রেসওমান গ্রেস ম্যাং', '<p style=\"margin: 0px 0px 6px; outline: 0px; padding: 0px; font-size: 16px; border: 0px; vertical-align: top; line-height: 24px; text-align: justify; font-family: SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><span style=\"font-size: 14pt;\">২১শে ফেব্রুয়ারি আন্তর্জাতিক মাতৃভাষা দিবসকে যুক্তরাষ্ট্রে যথাযথভাবে পালনের জন্য কংগ্রেসে একটি বিল উত্থাপন করা হবে। এ কথা বলেছেন কংগ্রেসওম্যান ও যুক্তরাষ্ট্রে বাংলাদেশ ককাসের মেম্বার গ্রেস মেং। শুক্রবার নিউইয়র্কে বাংলাদেশ সোসাইটির উদ্যোগে, মহান একুশে ফ্রেব্রুয়ারি উদযাপন উপলক্ষে এক অনুষ্ঠানে প্রধান অতিথির বক্তব্যে এ কথা বলেন তিনি। বাংলাদেশের সাম্প্রতিক রাজনৈতিক পরিস্থিতি নিয়ে গ্রেস মেং বলেন, বিষয়টি নিয়ে যুক্তরাষ্ট্রের স্টেট ডিপার্টমেন্ট ও বাংলাদেশে নিযুক্ত মার্কিন রাষ্ট্রদূতের সঙ্গে যোগাযোগ রক্ষা করে চলেছি। ইউএস কংগ্রেসের ফরেন রিলেশন কমিটির সদস্য কংগ্রেসওম্যান গ্রেস মেং এর কাছে বাংলাদেশের বর্তমান রাজনৈতিক পরিস্থিতি নিয়ে যুক্তরাষ্ট্রের অবস্থান জানতে চান উপস্থিত সাংবাদিকরা। জবাবে তিনি জানান, বাংলাদেশের সাম্প্রতিক রাজনৈতিক পরিস্থিতিতে আমরা উদ্বিগ্ন। বিষয়টি যুক্তরাষ্ট্র সরকার গভীরভাবে পর্যবেক্ষণ করছে। ইতোমধ্যে আমাদের ফরেন অ্যাফেয়ার্স বিভাগ এ বিষয়ে পদক্ষেপ গ্রহণ করেছে। আমরা চাই বাংলাদেশের মানুষ নিরাপদে থাকবে। এ ছাড়াও শান্তিপূর্ণ আন্দোলন এবং সবার গণতান্ত্রিক অধিকার প্রতিষ্ঠার জন্য আমরা কাজ করে যাব।</span></p>\r\n<p style=\"margin: 0px 0px 6px; outline: 0px; padding: 0px; font-size: 16px; border: 0px; vertical-align: top; line-height: 24px; text-align: justify; font-family: SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><span style=\"font-size: 14pt;\">মহান মাতৃভাষা উপলক্ষে নিউইয়র্কে বাংলাদেশ সোসাইটির উদ্যোগে আয়োজন করা হয়েছিলো এ অনুষ্ঠানের। এতে সোসাইটির কর্মকর্তা ছাড়াও প্রধান অতিথি হিসেবে উপস্থিত ছিলেন কংগ্রেস ওম্যান গ্রেস মেং। এ ছাড়াও ছিলেন ডিস্ট্রিক্ট ২২ এর কাউন্সিল ম্যান কোস্টা কনস্টানটিনিডেস। ভাষা শহীদদের স্মরণে আয়োজিত এ আলোচনা সভা শেষে শুক্রবার তথা একুশের প্রথম প্রহরে স্থানীয় সময় ১২টা ১ মিনিটে অস্থায়ী শহীদ মিনারে ফুল দিয়ে শ্রদ্ধা জানানো হয়। বাংলাদেশ সোসাইটি, বাংলাদেশ আওয়ামী লীগ যুক্তরাষ্ট্র শাখা, জাতীয়তাবাদী দল বিএনপি যুক্তরাষ্ট্র শাখা, জাতীয় পার্টি যুক্তরাষ্ট্র শাখা&rsquo;সহ বাংলাদেশ সরকারের পক্ষে নিউইয়র্ক বাংলাদেশ কনস্যুলেট&rsquo;সহ বাংলাদেশী প্রায় ১শ ৫০টি সামাজিক ও সাংস্কৃতিক সংগঠনের ব্যানারে ভাষা শহীদদের ফুল দিয়ে শ্রদ্ধা জানানো হয়। বাংলাদেশ সোসাইটির সভাপতি আজমল হোসেন কুনু&rsquo;র সভাপতিত্বে পুরো অনুষ্ঠান সঞ্চলনা করেন সোসাইটির সাধারণ সম্পাদক আবদুর রহীম হাওলাদার।</span></p>\r\n<p style=\"margin: 0px 0px 6px; outline: 0px; padding: 0px; font-size: 16px; border: 0px; vertical-align: top; line-height: 24px; text-align: justify; font-family: SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><span style=\"font-size: 14pt;\">এছাড়াও বাংলাদেশী অধ্যুষিত জ্যাকসন হাইটস ডাইভার সিটি প্লাজায় বৃহত্তর সিলেটের সংগঠন জালালাবাদ অ্যাসোসিয়েশনের পক্ষে অস্থায়ী শহীদ মিনারে ফুল দিয়ে শ্রদ্ধা নিবেদন করে বেশ কয়েকটি সংগঠন। তবে, জায়গা সঙ্কুলান ও মতের অমিল থাকায় ব্রুকলীন&rsquo;সহ নিউইয়র্কের বিভিন্ন সিটিতে আলাদা আলাদা শহীদ মিনার স্থাপন করে ভাষা শহীদদের শ্রদ্ধা জানান প্রবাসী বাংলাদেশীরা। অনেকে বলছেন ঐক্যবদ্ধ থাকলে একই মাঠে পুরো আমেরিকাকে দেখিয়ে দেওয়া যেতো বাংলাদেশীরা ভাষার জন্য কতটা ত্যাগী।</span></p>\r\n<p style=\"margin: 0px 0px 6px; outline: 0px; padding: 0px; font-size: 16px; border: 0px; vertical-align: top; line-height: 24px; text-align: justify; font-family: SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\"><span style=\"font-size: 14pt;\">&nbsp;</span></p>', '142458761321.jpg', '', 'গ্লোবাল নিউজ -এর সৌজন্যে', 'Bangladeshte', '2017-07-19', '', '1500486412', 0, 0, 1),
(3304, 'offbeat', '4', 1, 1, 0, 0, 1, 0, '', '', 'পর্যটক সেজে গাড়ী ছিনতাইর চেষ্টা,ধৃত-২,উদ্ধার গাড়ি', '<p><span style=\"font-size: 14pt;\">একেবারে হিন্দি সিনেমার চিত্রনাট্য।পর্যটক পরিচয়ে বেড়াতে যাওয়ার নাম করে গাড়ী ছিনতাইর প্রচেষ্টা।জানতে&nbsp;পেরে পুলিশের ছিনতাই হওয়া গাড়ীর পিছন ধাওয়া।পুলিশের তাড়া খেয়ে চলন্ত গাড়ী থেকে লাফিয়ে পালানো চার দুষ্কৃতীর।এই দলের বাকী&nbsp;দুই সদস্যের পুলিশের হাত থেকে বাঁচতে অচেনা গ্রামে ঢুকে পড়া।এই দুই দুষ্কৃতী কে চোর সন্দেহে ঘিরে ধরে গ্রামবাসীর প্রহার।প্রতি মুর্হুত&nbsp;টান টান উত্তেজনায় মোড়া।আর এই ঘটনা কে ঘিরে চাঞ্চল্য পুর্ব মেদিনীপুর জেলা জুড়ে।&nbsp;জানা গেছে ধৃত দুই দুষ্কৃতী বিজয় নাগ ও মহম্মদ সৌকদ আলি সহ মোট ছয় জন শনিবার নিউ দিঘা ট্যাক্সি স্ট্যান্ডে মান্দারমনি যাওয়ার জন্য&nbsp;একটি স্করপিও গাড়ী ভাড়া নেয়।গাড়ীর চালক শান্তি গোপাল দাস রামনগর থানার মাধবপুরের বাসিন্দা।শান্তি গোপাল জানিয়েছে মান্দারমনিতে&nbsp;সারা দিন থাকার পর দিঘার উদ্দ্যেশে রওনা দেয় দুষ্কৃতীরা।রাস্তায় অন্ধকার-নির্জন এলাকায় গাড়ী থামাতে বলে এক জন।গাড়ী থেকে নীচে নেমে&nbsp;মাথায় বন্দুক ঠেকিয়ে তকে মারধর করে দুষ্কৃতীরা।পরে তাকে হাত-পা বেঁধে সীটের নীচে ফেলে গাড়ী নিয়ে কোলকাতার দিকে রওনা দেয়।আরো&nbsp;জানা গেছে রাত্রি ৯টা-সাড়ে ৯টা নাগাদ হেঁড়িয়ায় ট্রাফিক সিগন্যাল না পালানোর চেষ্টা করলে পুলিশ স্করপিও-র পিছু ধাওয়া করে।সুযোগ বুঝে&nbsp;শান্তি গোপালও চিৎকার শুরু করে।বিপদ বুঝে দুষ্কৃতী দলের চার সদস্য চলন্ত গাড়ী থেকে লাফ দিয়ে পালিয়ে যায়।বাকী দুজন হাত-পা বাঁধা শান্তি&nbsp;গোপাল কে রাস্তায় ফেলে দিয়ে গাড়ী নিয়ে ভগবানপুরে দিকে চম্পট দেয়।পুলিশ শান্তি গোপালের কাছ থেকে সব জেনে ছিনতাই হওয়া গাড়ীর পিছু&nbsp;নেয়।এই বিষয়ে ভগবানপুর থানাকেও জানানো হয়।পুলিশের হাত থেকে বাঁচতে দুই দুষ্কৃতী ছিনতাই করা গাড়ী ভগবানপুরের বাজাবেড়িয়া টোল গেটের&nbsp;কাছে রেখে স্থানীয় ঠাকুরচক গ্রামে ঢুকে পড়ে।গভীর রাত্রে দুই অচেনা ব্যাক্তি কে গ্রামে উদ্দ্যেশহীন ভাবে ঘুরতে দেখে সন্দেহ হয় গ্রামবাসীর।তারা এই&nbsp;দুই জনকে ধরে মারধর শুরু করে।খবর পেয়ে পুলিশ ঘটনাস্থলে গিয়ে বিজয় নাগ ও মহম্মদ সৌকদ আলি নামের দুই গাড়ী ছিনতাইবাজ কে গ্রেফতার&nbsp;করে।পুর্ব মেদিনীপুর জেলার অতিরিক্ত পুলিশ সুপার অমিত রাঠোর জানিয়েছেন ঘটনার সুত্রপাত দিঘায় হয়েছে।তাই দিঘা থানাকে ঘটনার তদন্তের নির্দেশ&nbsp;দেওয়া হয়েছে।ধৃতদের বাড়ী পশ্চিম মেদিনীপুরের খড়্গপুরে বলে পুলিশ প্রাথমিক তদন্তে জেনেছে বলে জানান &nbsp;অতিরিক্ত পুলিশ সুপার।ধৃতদের এদিন কাঁথি&nbsp;আদালতে হাজির করা হলে বিচারক ৭ মার্চ অবধি জেল হেফাজতের নির্দেশ দিয়েছেন। &nbsp; &nbsp;&nbsp;<br /></span></p>', '1424608095snatcher.jpg', '', 'নিজস্ব প্রতিবেদন,দিঘা', 'TEST', '2017-07-19', '', '1500483559', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rajjo`
--

CREATE TABLE `rajjo` (
  `id` int(10) NOT NULL,
  `rajjo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `l_seat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rajjo`
--

INSERT INTO `rajjo` (`id`, `rajjo`, `img`, `l_seat`, `date`, `status`) VALUES
(2, 'পশ্চিমবঙ্গ', '1496679369west_bengal_map_s.jpg', '23', '2017-06-06', 0),
(3, 'মহারাষ্ট্র', '1497017992maharashtra.jpg', '251', '2017-06-09', 0),
(4, 'গুজরাট', '1497454229gujrath.jpg', '15', '2017-06-14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `scrooltext`
--

CREATE TABLE `scrooltext` (
  `id` int(11) NOT NULL,
  `cat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `scrooltext`
--

INSERT INTO `scrooltext` (`id`, `cat`, `text`, `date`, `order`, `status`) VALUES
(6366, 'general', 'ডেঙ্গুতে আক্রান্তের সংখ্যা ৬ হাজার ৪শ ৮৬, মৃত ৮', '2017-06-01', 0, 0),
(6342, 'sports', 'নিরাপত্তার কারণ দেখিয়ে বাংলাদেশ সফর আপাতত স্থগিত করেছে অস্ট্রেলিয়া', '2017-06-01', 0, 0),
(6348, 'entertainment', 'অভিনেত্রী শ্রীলেখা মিত্রকে ইভটিজিং ধৃত কামালগাজির অমিত সিং', '2017-06-01', 0, 0),
(6365, 'general', 'পুরভোটে বোমা, গুলি, আসানসোলে গুলিবিদ্ধ ৩, দুইজনের অবস্থা আশঙ্কাজনক, ৯-১০ রাউন্ড গুলি চলে রাজারহাটে হলদিরামের সামনে', '2017-06-01', 0, 0),
(6364, 'general', 'জামুরিয়ায় আক্রান্ত তৃণমূল কংগ্রেস প্রার্থী', '2017-06-01', 0, 0),
(6367, 'general', 'এবার বাংলাদেশের রংপুরে ওসি কনিও নামে এক জাপানি নাগরিককে গুলি করে হত্যা করেছে ', '2017-06-01', 0, 0),
(6353, 'offbeat', 'বেঙ্গল আপডেটের খবরের জের, মুখ্যমন্ত্রীর হস্তক্ষ‌েপে বাতিলের পথে বক্সায় জয়ন্তীর কটেজ', '2017-06-01', 0, 0),
(6304, 'offbeat', 'কলেজে আর নতুন করে পার্শ্ব শিক্ষক নিয়োগ হবে না, বিধানসভায় জানালেন শিক্ষামন্ত্রী', '2017-06-01', 0, 0),
(6166, 'entertainment', 'সানি লিওনকে ঢাকায় ঢুকতে দেবে না হেফাজত!\r\n', '2017-06-01', 0, 0),
(6306, 'offbeat', 'মহিলা পরিচালিত পুজোকে দশ হাজার টাকা করে অনুদানের ঘোষণা কলকাতা পুরসভার মেয়রের', '2017-06-01', 0, 0),
(6371, 'general', 'মুর্শিদাবাদের হরিহরপাড়ায় গুলিবিদ্ধ ২ কংগ্রেস কর্মী', '2017-06-01', 0, 0),
(6332, 'sports', 'সিএবি-র প্রেসিডেন্ট হলেন সৌরভ গাঙ্গুলী', '2017-06-01', 0, 0),
(6368, 'general', 'আসানসোলের তৃণমূল নেতা মলয় ঘটক ঘনিষ্ট বৈজু ঠাকুর সিপিএম ও বিজেপির যৌথ হামলায় আক্রান্ত', '2017-06-01', 0, 0),
(6372, 'general', 'চলে গেলেন কবি উৎপল বসু', '2017-06-01', 0, 0),
(6328, 'rajnity', 'আরএসএস হল বিজেপির সুপ্রিম কোর্ট, নীতীশের খোঁচা', '2017-06-01', 0, 0),
(6362, 'rajnity', 'মোদীর ডিজিটাল ইন্ডিয়া সুপার ফ্লপ, বাম মোর্চা দেশ গড়বে মথুরাপুরে সীতারাম ইয়েচুরি', '2017-06-01', 0, 0),
(6369, 'general', ' হাওড়ায় ৪৩.৭৭%, আসানসোলে ৫০%, বিধাননগরে ৫০%, শিলিগুড়িতে ৪৩%', '2017-06-01', 0, 0),
(6370, 'general', 'সংবাদমাধ্যমের কর্মী আক্রান্তের নিন্দায় সরব তৃণমূলের মহাসচিব পার্থ চট্টোপাধ্যায়', '2017-06-01', 0, 0),
(6357, 'rajnity', 'বর্ধমানে সিপিএমের সশস্ত্র মিছিল ঘিরে চাঞ্চল্য', '2017-06-01', 0, 0),
(6358, 'sports', 'শুক্রবার এসএফআই-এর ৩৫ তম রাজ্য সম্মেলনে মথুরাপুরে যাচ্ছেন সীতারাম ইয়েচুরি', '2017-06-01', 0, 0),
(6635, 'general', 'উত্তর 24 পরগনার প্রশাসনিক বৈঠকে 26 জুলাই মধ্যমগ্রামে যাচ্ছেন  মুখ্যমন্ত্রী \r\n', '2019-07-23', 0, 0),
(6833, 'general', 'দুর্গাপুজো কমিটিগুলিকে ২৫ হাজার টাকা, বিদ্যুৎ বিলে ২৫% ছাড় দিচ্ছে রাজ্য সরকার', '2019-08-30', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sompadokio`
--

CREATE TABLE `sompadokio` (
  `id` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `topicimg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `key` text COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `now` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sompadokio`
--

INSERT INTO `sompadokio` (`id`, `text`, `topicimg`, `title`, `key`, `author`, `date`, `now`, `status`) VALUES
(0, '', '', '', '', '', '', '', 0),
(5, 'জয় শ্রীরাম স্লোগান নিয়ে এবার মুখ খুললেন নোবেল জয়ী অর্থনীতিবিদ অমর্ত্য সেন। তিনি বলেন, মানুষকে নির্দয়ভাবে পিটিয়ে হত্যা করার মন্ত্রে পরিণত হয়েছে ‘জয় শ্রীরাম’। অমর্ত্য সেন বলেন, পশ্চিমবঙ্গে এ বর্বরতা স¤প্রতি আমদানি হয়েছে। বঙ্গ সংস্কৃতিতে কোনো কালেই এ ধরনের স্লোগানের কোনো জায়গা ছিল না।যাদবপুর বিশ্ববিদ্যালয়ে শুক্রবার বিকালে ‘স্বাধীনতা পরবর্তী সময়ে তার স্মৃতিতে কলকাতা’ শীর্ষক এক বক্তৃতায় অমর্ত্য সেন এসব কথা বলেন। এ দিন সকালে শিশির মঞ্চে আরেকটি অনুষ্ঠানে যোগ দিয়েছিলেন তিনি। সেখানেও বঙ্গ সংস্কৃতি এবং হিন্দুত্ববাদের ‘আস্ফালন’ নিয়ে মন্তব্য করেছিলেন অমর্ত্য সেন। সেখানেও নোবেলজয়ী এ অর্থনীতিবিদ বলেছেন, ‘যখন শুনি কাউকে রিকশা থেকে নামিয়ে কিছু একটা বুলি আওড়াতে বলা হচ্ছে এবং তিনি বলেননি বলে মাথায় লাঠি মারা হচ্ছে, তখন শঙ্কা হয়। বিভিন্ন জাত, বিভিন্ন ধর্ম, বিভিন্ন গোষ্ঠীর মধ্যে পার্থক্য আমরা রাখতে দিতে চাই না। ইদানীং এটা বেড়েছে।বক্তৃতা শেষে প্রশ্নোত্তর পর্বে তিনি বলেন, জয় শ্রীরাম, রাম নবমী- এসব কোনো কিছুর সঙ্গেই বাঙালির কোনো যোগ নেই। তার মতে, এক সময় হিন্দু মহাসভা এ ধরনের সংস্কৃতির আমদানি ঘটানোর চেষ্টা করেছিল বাংলায়। বিভেদের রাজনীতির পরিবেশ তৈরি করার চেষ্টা করেছিল। এখন বিজেপি ঠিক সেই একই উদ্দেশ্যে বাংলায় ‘জয় শ্রীরাম’ সংস্কৃতির আমদানি ঘটানোর চেষ্টা করছে।আমরা মনে করি এই ধরনের অপ- সংস্কৃতি যারা আমাদানি করছে, তারা আর যাই হোক না কেন বাংলার কৃষ্টি, সংস্কৃতির প্রতি তাদের কোনও দুর্বলতা তো নেই বরং তা ধ্বংস করে সংঘ পরিবারের হিন্দু, হিন্দি, হিন্দুস্তান স্লোগানকে জোরালো করে সাম্প্রদায়িক সম্প্রীতির পরিবেশকে ধ্বংস করতে চাইছে। আমরা এটা কোনও মতে হতে দিতে পারি না।\r\n\r\n', '1562484872vhp_ram-navmi-759.jpg', 'গণধোলাইয়ের মন্ত্র এখন জয় শ্রীরাম', '', 'সুকুমার মিত্র\r\nছবি- ফাইল চিত্র', '2019-07-31', '1564567392', 0),
(6, 'আমরা গভীর বেদনা ও উদ্বেগের সঙ্গে সংবাদ পত্রে দেখলাম যে কলকাতার একশ বছরের পুরানো ও বর্তমানে কেন্দ্রীয় সরকারের পরিচালিত  সংস্থা \" বেঙ্গল কেমিকেল ও ফার্মাসিউটিক্যাল \" কে সরকার বিলগ্নিকারণ করার বা বেসরকারি মালিকদের কাছে বিক্রি করে দেবার সিদ্ধান্ত নিয়েছে । বাঙালি তথা ভারতবাসী মাত্রেই জানেন যে ভারতীয় রসায়নের প্রাণপুরুষ আচার্য প্রফুল্ল চন্দ্র রায় ও তাঁর সহযোগীরা এই সংগঠনটি গড়ে তোলেন ১৯০১ সালে । এটি শুধু একটি বাণিজ্যিক উদ্যোগ ছিল না, পরাধীন ভারতবর্ষে জনগণের  স্বনির্ভরতা ও স্বাধীনতার অভীপ্সার দোতক ও ছিল। বাঙালির বিজ্ঞানবীক্ষা , উদ্ভাবনী ক্ষমতা ও বাণিজ্যিক প্রতিভার পরিচয় ও এই সংস্থা , যা সারা দেশে প্রথম ও অনন্য।\r\nএই ঐতিহ্য দেশে অন্য কোনো উৎপাদন শিল্পের নেই ।\r\nঅতীতে লাভজনক না হলেও বিগত বছরগুলোতে কর্মচারীদের কঠোর পরিশ্রম ও উদ্যোগে বেঙ্গল কেমিকেল একটি লাভজনক সংস্থায় পরিণত হয়েছে। ২০১৭ -১৮ সালে লাভ হয়েছে ৪ কোটি টাকা ও ২০১৮ - ১৯ সালে ২৫ কোটি টাকা । এই বছর ওই কারখানার মিনিরত্ন খেতাব পাওয়ারও কথা ।\r\nএমতাবস্থায় কোনো আপাত কারণ ছাড়াই কেন্দ্রের বি জে পি সরকার ভারতবাসী তথা বাঙালির গর্ব লাভজনক কোম্পানীটিকে বিক্রি করে দিয়ে দেশের সাথে বিশ্বাস ঘাতকতা করছে ও দক্ষ কর্মচারীদের ছাঁটাই ও অনিশ্চয়তার দিকে ঠেলে দিচ্ছে । অতীতে এই কারখানার জমি প্রতিবাদ সত্বেও প্রায় বিনামূল্যে একটি শপিং মল কে দিয়ে দেওয়া হয়েছিল ।\r\nসাথীরা , এই বিলগ্নিকারণ আচার্য প্রফুল্লচন্দ্রের স্মৃতির প্রতি ভয়ঙ্কর অপমান ও বটে ।\r\nআসুন আগামী ২ অগাস্ট আচার্য প্রফুল্লচন্দ্রের জন্মদিনে কাঁকুরগাছি র মোড়ে ও কারখানার মূল ফটকে আমরা এক প্রতিবাদ সভায় সমবেত হই। আচার্যের মূর্তিতে মাল্যদান ,পদযাত্রা , প্রচারপত্র বিলি ও কতৃপক্ষের কাছে বিলগ্নিকারণের বিরুদ্ধে প্রতিবাদ পাত্র দিয়ে সরকারকে বাধ্য করি দেশ ধংসের এই ভয়ানক চক্রান্ত যাতে তারা রূপায়িত করতে না পারে । \r\nএর মাধ্যমে সমস্ত সরকারি উদ্যোগের বিলগ্নিকারণের আমরা বিরোধিতা করছি ।\r\n\r\n', '1563591510bengal_chemical_maniktala_sm_thumb.jpg', 'ঐতিহ্যের বেঙ্গল কেমিক্যাল বিলগ্নিকরণের ষড়যন্ত্র', '', 'বেঙ্গল আপডেট ডেস্ক', '2019-07-20', '1563591510', 0),
(0, '', '', '', '', '', '', '', 0),
(0, '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sompadokio_hit_count`
--

CREATE TABLE `sompadokio_hit_count` (
  `pge_name` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `views` bigint(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sompadokio_hit_count`
--

INSERT INTO `sompadokio_hit_count` (`pge_name`, `views`) VALUES
('', 0),
('id=5', 170),
('id=6', 11),
('', 0),
('', 0);

-- --------------------------------------------------------

--
-- Table structure for table `state_wise_dol`
--

CREATE TABLE `state_wise_dol` (
  `id` int(10) NOT NULL,
  `state` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `party_1` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `party_2` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `party_3` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `party_4` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `state_wise_dol`
--

INSERT INTO `state_wise_dol` (`id`, `state`, `party_1`, `party_2`, `party_3`, `party_4`, `status`, `date`) VALUES
(1, '2', '1', '2', '3', '4', 0, '2017-06-08'),
(2, '3', '1', '4', '2', '3', 0, '2017-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `tickertext`
--

CREATE TABLE `tickertext` (
  `id` int(11) NOT NULL,
  `cat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tickertext`
--

INSERT INTO `tickertext` (`id`, `cat`, `text`, `date`, `order`, `status`) VALUES
(333, 'general', 'ফোটো গ্যালারি বিভাগে দেখুন বেঙ্গল আপডেট-হোয়াটস অ্যাপ রিপোর্টারের পাঠানো ছবি ও সংক্ষ‌িপ্ত সংবাদ', '2017-06-01', 0, 0),
(338, 'general', 'সোশ্যাল মিডিয়া ওয়েবসাইট ও অ্যাপ্লিকেশন ন্যাশনাল এনক্রিপশন পলিসির আওতায় পড়বে না, জানাল ডিপার্টমেন্ট অফ ইলেকট্রনিক অ্যান্ড ইনফরমেশন টেকনোলজি', '2017-06-01', 0, 0),
(334, 'general', 'ফোটো গ্যালারি বিভাগে দেখুন সুরজিৎ মালিকের মজার সব কার্টুন', '2017-06-01', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `cat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `now` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `cat`, `title`, `text`, `date`, `now`, `status`) VALUES
(1148, 'sports', '', 'r7XsJrwg4tw', '2015-09-04', '1441396406', 0),
(1149, 'offbeat', '', '5j6XzW5OmUM', '2015-09-04', '1441396747', 0),
(1154, 'entertainment', '', 'pm-tnmMFE0s', '2015-09-06', '1441551107', 0),
(1155, 'entertainment', '', 'gkYbFMcOydk', '2015-09-09', '1441776027', 0),
(1157, 'sports', '', 'FqRgdE7l0-I', '2015-09-09', '1441776358', 0),
(1164, 'sports', '', 'FX9t-Av8EiA', '2015-09-13', '1442117937', 0),
(1168, 'prasongik', '', 'OuZXRN6Rct0', '2015-09-19', '1442638024', 0),
(1189, 'rajnity', '', 'vVXo7nS29bE', '2015-10-03', '1443859168', 0),
(1190, 'general', '', 'Q6oWHcWvgUI', '2017-05-31', '1443869625', 0),
(1263, 'general', 'তহমীনা খাতুনের চেনা মুখ, অচেনা মানুষ গ্রন্থের উদ্বোধনী অনুষ্ঠানে আলোচক অধ্যাপক সব্যসাচী চট্টোপাধ্যায়', 'MFqul1mONtw', '2019-09-02', '1567439070', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advertisemng`
--
ALTER TABLE `advertisemng`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advimg`
--
ALTER TABLE `advimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `angana`
--
ALTER TABLE `angana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
