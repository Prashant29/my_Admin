-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 08, 2017 at 05:23 PM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_prashant`
--
CREATE DATABASE IF NOT EXISTS `db_prashant` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_prashant`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about_me`
--

CREATE TABLE IF NOT EXISTS `tbl_about_me` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about_title` varchar(200) NOT NULL,
  `Description` text NOT NULL,
  `backup` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_about_me`
--

INSERT INTO `tbl_about_me` (`id`, `about_title`, `Description`, `backup`) VALUES
(1, 'UI Design', 'UI Design.txt', '<h1 style="text-align: center;">\r\n	<span style="font-family:verdana,geneva,sans-serif;"><b>User interface design</b> (<b>UI</b>)</span></h1>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p style="text-align: center;">\r\n	<span style="font-family:verdana,geneva,sans-serif;"><img alt="" src="https://udemy-images.udemy.com/course/750x422/381524_7136_15.jpg" style="width: 750px; height: 422px;" /></span></p>\r\n<p style="text-align: center;">\r\n	&nbsp;</p>\r\n<p>\r\n	<span style="font-family:verdana,geneva,sans-serif;">User interface design requires a good understanding of user needs. There are several phases and processes in the user interface design, some of which are more demanded upon than others, depending on the project.</span></p>\r\n<h3>\r\n	<span style="font-family:verdana,geneva,sans-serif;">User Experience Designers</span></h3>\r\n<p>\r\n	<span style="font-family:verdana,geneva,sans-serif;">We have delivered innovative user experiences as a digital partner to some of the world&rsquo;s leading brands, including ABB, Johnson Controls, Intact, PNC Bank, RSA, and AAA, Hatch, Scotia Bank and more.</span></p>\r\n<h3>\r\n	<span style="font-family:verdana,geneva,sans-serif;">Usability Consultants</span></h3>\r\n<p>\r\n	<span style="font-family:verdana,geneva,sans-serif;">Rossul&rsquo;s User-Centered Design (UCD) methodology involves the user as a stakeholder throughout the creation process, making certain that your online products are both usable and useful.</span></p>\r\n<h3>\r\n	<span style="font-family:verdana,geneva,sans-serif;">User Interface Designers</span></h3>\r\n<p>\r\n	<span style="font-family:verdana,geneva,sans-serif;">Driven by our passion for compelling and usable designs, we specialize in user interfaces for desktop, mobile and tablets across a wide range of markets.</span></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p style="text-align: center;">\r\n	<span style="font-family:verdana,geneva,sans-serif;"><img alt="" src="http://media02.hongkiat.com/ui-designer-portfolios/3-creative-UI-designers-portfolios-2.jpg" style="width: 600px; height: 402px;" /></span></p>\r\n<p>\r\n	&nbsp;</p>\r\n<div class="webconsult center-title">\r\n	<div class="container">\r\n		<h2 style="text-align: center;">\r\n			<span style="font-family:verdana,geneva,sans-serif;">Our website designs are creative,user-friendly, functional &amp; affordable.</span></h2>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p style="margin: 22px 0 35px;">\r\n			<span style="font-family:verdana,geneva,sans-serif;">There&#39;s more to good web design than a website that looks great. It also needs to be coded in such a way that it&#39;s easy for search engines to find and crawl your website. Greater search engine visibility leads to more traffic and more business!</span></p>\r\n		<p style="margin: 22px 0 35px;">\r\n			<br />\r\n			<span style="font-family:verdana,geneva,sans-serif;"><strong>Please feel free to discuss your custom website development requirements. We will be glad to get back to you immediately for a prompt discussion. We are sure that you will like our portfolio of UI Design services.</strong></span></p>\r\n		<p style="margin: 22px 0 35px;">\r\n			&nbsp;</p>\r\n		<p style="margin: 22px 0 35px;">\r\n			&nbsp;</p>\r\n	</div>\r\n</div>\r\n'),
(2, 'Frontend development', 'Frontend development.txt', '<h1 style="text-align: center;">\r\n	<span style="font-family:verdana,geneva,sans-serif;"><b>Front-end web development</b></span></h1>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p style="text-align: center;">\r\n	<b><img alt="" src="https://d13yacurqjgara.cloudfront.net/users/751348/screenshots/2329465/open-position-frontend-developer-dribbble-2-preview_1x.png" style="width: 400px; height: 300px;" /></b></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	The objective of designing a site is to ensure that when the users open up the site they see the information in a format that is easy to read and relevant. This is further complicated by the fact that users now use a large variety of devices with varying screen sizes and resolutions thus forcing the designer to take into consideration these aspects when designing the site.</p>\r\n<p>\r\n	There are several tools available that can be used to develop the front end of a website, and understanding which tools are best fit for specific tasks marks the difference between developing a hacked site and a well designed, scalable site.</p>\r\n<h3>\r\n	<strong>HTML5 , CSS3, JAVASCRIPT.</strong></h3>\r\n<p>\r\n	&nbsp;</p>\r\n<p style="text-align: center;">\r\n	<img alt="" height="295" src="https://www.frontendhandbook.com/images/web-tech-employed.jpg" width="630" /></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<strong>Website development</strong> is necessary&nbsp;when you want to empower your business it with dynamic&nbsp;opportunities and worldwide success. The&nbsp;features can be as simple as sending an email from a contact form or doing an online hotel booking. No matter what the needs of your website, we have experienced web development and web programming teams who are always ready to take challenge.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	For us website development is not just writing a snippet of a programming code. Instead, it is about building a bespoke online web application that works in real time and that can be browsed by website users without any difficulties. Our development team at Lead Infosoft Surat is updating the knowledge on a daily basis in order to make sure that the in-house website developed applications make the most of the new technologies.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<h2>\r\n	Templates and CMS, web frameworks</h2>\r\n<p>\r\n	The technical flesh and bones of dynamically generated websites as part of an MVC or an MVT or some other software architecture. Whether it&#39;s a php backend with Drupal or Magento or Python and Django, front-end developers build and maintain this files and their objects and methods, variables, loops, boolean and conditional statements.</p>\r\n<p>\r\n	A surprisingly little-discussed area of front-end development, the flexibility and maintenance of these make a site what it is and what it will become as more powerful functionality is added to it.</p>\r\n'),
(3, 'Back End Development', 'Back End Development.txt', '<h1 style="text-align: center;">\r\n	<strong><span style="font-family:verdana,geneva,sans-serif;">Back-End Web Development</span></strong></h1>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<header class="page-header"> </header></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<h1 class="page-title">\r\n	Lorem ipsum dolor sit amet, consectetur.</h1>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente.</p>\r\n<h3>\r\n	Necessitatibus</h3>\r\n<p>\r\n	Velit, odit, eius, libero unde impedit quaerat dolorem assumenda alias consequuntur optio quae maiores ratione tempore sit aliquid architecto eligendi pariatur ab soluta doloremque dicta aspernatur labore quibusdam dolore corrupti quod inventore. Maiores, repellat, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>\r\n<blockquote>\r\n	Velit, odit, eius, libero unde impedit quaerat dolorem assumenda alias consequuntur optio quae maiores ratione tempore sit aliquid architecto eligendi pariatur ab soluta doloremque dicta aspernatur labore quibusdam dolore corrupti quod inventore. Maiores, repellat, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</blockquote>\r\n<p>\r\n	Velit, odit, eius, libero unde impedit quaerat dolorem assumenda alias consequuntur optio quae maiores ratione tempore sit aliquid architecto eligendi pariatur ab soluta doloremque dicta aspernatur labore quibusdam dolore corrupti quod inventore. Maiores, repellat, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>\r\n'),
(4, 'Side Projects', 'Side Projects.txt', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente.</p>\r\n<h3>\r\n	Necessitatibus</h3>\r\n<p>\r\n	Velit, odit, eius, libero unde impedit quaerat dolorem assumenda alias consequuntur optio quae maiores ratione tempore sit aliquid architecto eligendi pariatur ab soluta doloremque dicta aspernatur labore quibusdam dolore corrupti quod inventore. Maiores, repellat, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>\r\n<blockquote>\r\n	<img alt="" height="149" src="http://localhost/practice/templates/Initio/assets/images/s2.jpg" style="float: right;" width="243" />Velit, odit, eius, libero unde impedit quaerat dolorem assumenda alias consequuntur optio quae maiores ratione tempore sit aliquid architecto eligendi pariatur ab soluta doloremque dicta aspernatur labore quibusdam dolore corrupti quod inventore. Maiores, repellat, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</blockquote>\r\n<p>\r\n	Velit, odit, eius, libero unde impedit quaerat dolorem assumenda alias consequuntur optio quae maiores ratione tempore sit aliquid architecto eligendi pariatur ab soluta doloremque dicta aspernatur labore quibusdam dolore corrupti quod inventore. Maiores, repellat, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>\r\n<ul>\r\n	<li>\r\n		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus!</li>\r\n	<li>\r\n		Laboriosam, aliquam totam asperiores nam velit voluptatum non quidem.</li>\r\n	<li>\r\n		Voluptatem, libero quia voluptatum ab modi facere dolore assumenda?</li>\r\n	<li>\r\n		Expedita, officia tenetur doloremque nulla temporibus ab voluptates adipisci.</li>\r\n	<li>\r\n		Nostrum, nesciunt, inventore amet temporibus officia perferendis doloremque nulla.</li>\r\n	<li>\r\n		Dolorum, ex earum maiores perspiciatis modi sequi odit mollitia.</li>\r\n</ul>\r\n'),
(5, 'Mobile Application', 'Mobile Application.txt', '<div class="one-third">\r\n	&nbsp;</div>\r\n<h1 style="text-align: center;">\r\n	<strong><span style="font-family:verdana,geneva,sans-serif;">Mobile App Development</span></strong></h1>\r\n<div class="one-third">\r\n	&nbsp;</div>\r\n<div class="one-third">\r\n	&nbsp;</div>\r\n<div class="one-third" style="text-align: center;">\r\n	&nbsp;</div>\r\n<div class="one-third">\r\n	&nbsp;</div>\r\n<div class="one-third" style="text-align: center;">\r\n	<img alt="http://www.vastedge.com/vastedge/images/banner_img2_0.png" class="transparent" src="http://www.vastedge.com/vastedge/images/banner_img2_0.png" /></div>\r\n<div class="one-third">\r\n	&nbsp;</div>\r\n<h1 style="text-align: center;">\r\n	<span style="font-family:arial,helvetica,sans-serif;">iOS App Development</span></h1>\r\n<p>\r\n	<img alt="https://lh4.googleusercontent.com/-kxntzFMuwSU/AAAAAAAAAAI/AAAAAAAAAAc/wB-gY2fIOk4/photo.jpg" class="transparent" height="131" src="https://lh4.googleusercontent.com/-kxntzFMuwSU/AAAAAAAAAAI/AAAAAAAAAAc/wB-gY2fIOk4/photo.jpg" style="float: left;" width="131" /></p>\r\n<p>\r\n	<span style="font-family:comic sans ms,cursive;">From iPhone to iPad to Apple Watch - we&#39;ve built a boatload of iOS apps. A very large, powerful boat. Can your app say, &quot;I&#39;m on a boat!&#39;? Ours can. Sourcebits made our mark developing iOS apps. </span></p>\r\n<p>\r\n	<span style="font-family:comic sans ms,cursive;">Several hundred iPhone and iPad apps later, we&rsquo;ve achieved success in almost every category for just about every industry. We&rsquo;re also experienced in Swift, and have the best team of C and Objective-C coders.</span></p>\r\n<p>\r\n	<span style="font-family:comic sans ms,cursive;">Tap into our iOS development talent-pool to build beautiful apps, enterprise-grade mobile solutions, or engaging games. </span></p>\r\n<p>\r\n	With the advent of iOS technological advancements, we build elegant and engaging iPhone applications that will not only make your business lucrative but also performance oriented. Our professional iPhone application developers always design and develop user-friendly and easy-to-use mobile apps.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<div class="two-thirds two-thirds-line">\r\n	<div class="one-third">\r\n		&nbsp;</div>\r\n	<h1 style="text-align: center;">\r\n		<span style="font-family:arial,helvetica,sans-serif;">Android Development</span></h1>\r\n	<h1 style="text-align: center;">\r\n		<span style="font-family:comic sans ms,cursive;"><img alt="http://www.nyns4.com/wp-content/uploads/2015/05/url.png" class="transparent" src="http://www.nyns4.com/wp-content/uploads/2015/05/url.png" style="float: right; width: 131px; height: 131px;" /></span></h1>\r\n	<p>\r\n		<span style="font-family:comic sans ms,cursive;">Android apps live in a highly fragmented multi-device world. The API rules are less strict, but quality assurance testing is more intensive. We handle it. We&rsquo;ve developed hundreds of cool Android apps on releases from 2.X to 5.X. From Gingerbread to Lollipop, simple phones to custom devices to Android wearables &mdash; we&rsquo;ve done it all.</span></p>\r\n	<p>\r\n		<span style="font-family:comic sans ms,cursive;">Develop powerful, highly usable Android apps that solve business problems, attract users, and reinforce your brand.&nbsp;</span></p>\r\n</div>\r\n<div class="today-at">\r\n	<p>\r\n		Today, at least 70% of Smartphone users across the globe are using Android OS. Therefore, Android application development is crucial to any business, particularly bespoke Android app development. At least 800 million individuals use Android apps worldwide, thus having a result-focused Android app development tactic is a way to business success.</p>\r\n	<p>\r\n		Mindinventory, a leading <span class="all_taq_link">Android App Development Company</span> that use quality tools, professionalism and experience in Android app programming, Android app testing, Android app designing to enhance the best usability, easy usage and user experiences. We ensure a greatly responsive and responsible setting for Android app development by using updated project management software and novel communication technologies.</p>\r\n	<p>\r\n		MindInventory has a team of <span class="all_taq_link">Android app developers</span> who address quickly changing technology and business needs by developing Android applications customized to convene strategic business objectives. Therefore, if you have a good idea of an Android app, we will work together to turn your inspiration into reality. No matter the goal or use of your app we have the skills and expertise to create a top standard Android app.</p>\r\n	<p>\r\n		&nbsp;</p>\r\n	<p>\r\n		&nbsp;</p>\r\n</div>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_users`
--

CREATE TABLE IF NOT EXISTS `tbl_admin_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_admin_users`
--

INSERT INTO `tbl_admin_users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'prashant', 'prashant');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE IF NOT EXISTS `tbl_client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_image` varchar(200) NOT NULL,
  `client_link` varchar(200) NOT NULL,
  `client_name` varchar(200) NOT NULL,
  `about_client` varchar(200) NOT NULL,
  `client_address` varchar(500) NOT NULL,
  `client_phone` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`id`, `client_image`, `client_link`, `client_name`, `about_client`, `client_address`, `client_phone`) VALUES
(1, 'apple2.png', '#', 'Apple Inc.', 'Apple  Company is Computer Making Company and  U.S.A. based Company', 'N Z', '+1-123-456-7890'),
(2, 'google.png', '#', 'Google Inc.', 'Google is Search Engine and U.S.A. based Company.', 'U.S.A.', '+1-123-456-7890'),
(3, 'facebook.png', '#', 'Facebook Inc.', 'Facebook is Social Networking Website and U.S.A. based company. His Owner is Mark Zuckerberg.\r\n', 'U.S.A.', '+1-234-567-1890'),
(4, 'microsoft-.png', '#', 'Microsoft', 'Microsoft is U.S.A. base company and it Makes computers  and Operating System', 'U.S.A.', '+1-123-456-7890'),
(6, 'intel.png', '#', 'Intel', 'Intel is Motherboard making Company .\r\nIt is U.S.A. based Company', 'U.S.A.', '+1-123-456-7890'),
(7, 'yahoo.png', '#', 'Yahoo', 'Yahoo is Second Best Search Engine Comany.', 'U.S.A.', '+1-123-456-7890'),
(8, 'stripe.png', '#', 'Stripe', 'Stripe is Well known Company for Website Design.', 'India', '+1-123-456-7890'),
(9, 'linkedin.png', '#', 'Liked IN', 'LinkedIn is Business Social Website.', 'U.S.A.', '+1-123-456-7890');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer_2`
--

CREATE TABLE IF NOT EXISTS `tbl_footer_2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_footer_2`
--

INSERT INTO `tbl_footer_2` (`id`, `company_name`, `year`) VALUES
(1, 'Prashant Desani', '2016');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer_about_me`
--

CREATE TABLE IF NOT EXISTS `tbl_footer_about_me` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about_title` varchar(200) NOT NULL,
  `about_me` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_footer_about_me`
--

INSERT INTO `tbl_footer_about_me` (`id`, `about_title`, `about_me`) VALUES
(1, 'About Me', 'I''m a Web Developer and build a custom websites in PHP and also Magento.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_footer_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_title` varchar(200) NOT NULL,
  `street_name` varchar(200) NOT NULL,
  `city_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `address_title` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_footer_contact`
--

INSERT INTO `tbl_footer_contact` (`id`, `contact_title`, `street_name`, `city_name`, `email`, `phone_no`, `address_title`) VALUES
(1, 'Contact Us', '234 Hidden Pond Road', 'Ashland City,TN 37015 ', 'desaniprashant@gmail.com', '+91 98247-57440', 'Office Address');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer_follow_me`
--

CREATE TABLE IF NOT EXISTS `tbl_footer_follow_me` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `social_icon_color` varchar(200) NOT NULL,
  `social_icon_white` varchar(100) NOT NULL,
  `icon_link` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_footer_follow_me`
--

INSERT INTO `tbl_footer_follow_me` (`id`, `social_icon_color`, `social_icon_white`, `icon_link`) VALUES
(1, 'fb_color.png', 'fb.png', 'https://www.facebook.com/prashant.desani'),
(2, 'twitter-128.png', 'twitter.png', '#'),
(11, 'linkedIN.png', '', '#'),
(12, 'social_media_logo_github-128.png', '', '#');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer_follow_title`
--

CREATE TABLE IF NOT EXISTS `tbl_footer_follow_title` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `follow_title` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_footer_follow_title`
--

INSERT INTO `tbl_footer_follow_title` (`id`, `follow_title`) VALUES
(1, 'FOLLOW US');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images`
--

CREATE TABLE IF NOT EXISTS `tbl_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login_data`
--

CREATE TABLE IF NOT EXISTS `tbl_login_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `25-Dec` varchar(100) NOT NULL,
  `26-Dec` varchar(100) NOT NULL,
  `27-Dec` varchar(100) NOT NULL,
  `28-Dec` varchar(100) NOT NULL,
  `02-Jan` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_login_data`
--

INSERT INTO `tbl_login_data` (`id`, `25-Dec`, `26-Dec`, `27-Dec`, `28-Dec`, `02-Jan`) VALUES
(1, '1', '598', '147', '63', '39');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_main_header`
--

CREATE TABLE IF NOT EXISTS `tbl_main_header` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profile_pic` varchar(200) NOT NULL,
  `background_pic` varchar(200) NOT NULL,
  `profile_name` varchar(200) NOT NULL,
  `tag_line` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `name_color` varchar(10) NOT NULL,
  `tag_line_color` varchar(10) NOT NULL,
  `email_color` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_main_header`
--

INSERT INTO `tbl_main_header` (`id`, `profile_pic`, `background_pic`, `profile_name`, `tag_line`, `email`, `description`, `name_color`, `tag_line_color`, `email_color`) VALUES
(1, 'logo.jpg', 'BG.jpg', 'Prashant Desani', 'A Web Developer', 'desaniprashant@gmail.com', 'Imagination is more important than knowledge.\r\n\r\nThe important thing is not to stop questioning. Curiosity has its own reason for existing.\r\n\r\nTry not to become a man of success, but rather try to become a man of value.\r\n\r\n\r\n-Albert Einstein\r\n\r\n', '#000', '#2c3e50', '#000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE IF NOT EXISTS `tbl_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_title` varchar(200) NOT NULL,
  `service_description` varchar(500) NOT NULL,
  `link_button` varchar(200) NOT NULL,
  `title_color` varchar(200) NOT NULL,
  `background_color` varchar(200) NOT NULL,
  `foreground_color` varchar(200) NOT NULL,
  `button_text` varchar(200) NOT NULL,
  `button_color` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`id`, `service_title`, `service_description`, `link_button`, `title_color`, `background_color`, `foreground_color`, `button_text`, `button_color`) VALUES
(2, 'Custom website design', 'Web design encompasses many different skills and disciplines in the production and maintenance of websites. The different areas of web design include web graphic design , interface design.', '#', '#000', '#2ecc71', 'black', 'More Info', '#333'),
(3, 'Core PHP & Frameworks', 'I don''t think they tried to market it to the billionaire, spelunking, base-jumping crowd. i did the same thing to gandhi, he didn''t eat for three weeks. i once heard a wise man say there are no perfect men.', '#', '#fff', '#34495e', 'white', 'Read More', 'white'),
(4, 'Application development', '\r\n\r\nI don''t think they tried to market it to the billionaire, spelunking, base-jumping crowd. i did the same thing to gandhi, he didn''t eat for three weeks. i once heard a wise man say there are no perfect men.', '#', '#333333', '#3498db', '#34495e', 'Read More', 'black'),
(5, 'SEO & SEM services', 'I don''t think they tried to market it to the billionaire, spelunking, base-jumping crowd. i did the same thing to gandhi, he didn''t eat for three weeks. i once heard a wise man say there are no perfect men.', '#', 'white', '#c0392b', 'white', 'Read More', 'white');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `last_login` varchar(200) NOT NULL,
  `profile_pic` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `user_id`, `first_name`, `last_name`, `email`, `last_login`, `profile_pic`) VALUES
(1, 1, 'Admin', '', 'me@admin.com', '09:49', 'user.png'),
(2, 2, 'Prashant', 'Desani', 'desaniprashant@gmail.com', '10:53', 'pd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_work`
--

CREATE TABLE IF NOT EXISTS `tbl_work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `work_image` varchar(500) NOT NULL,
  `image_link` varchar(200) NOT NULL,
  `work_title` varchar(200) NOT NULL,
  `work_type` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_work`
--

INSERT INTO `tbl_work` (`id`, `work_image`, `image_link`, `work_title`, `work_type`) VALUES
(1, 'lamborghini-sesto-elemento.jpg', '#', 'Sample Title', 'Core PHP | WordPress | E-Commerce'),
(4, 'IMG_260347.jpg', '#', 'Joker', 'E-Commerce | Template Design'),
(5, '17370_iron_man.jpg', '#', 'J.A.R.V.I.S.', 'Core PHP | Template Design'),
(6, 'Iron-Man-Wallpapers-HD.jpg', '#', 'Iron Man', 'Core PHP | WordPress | E-Commerce | Template Design'),
(7, 'W_2013_109_BATMAN.jpg', '#', 'Batman', 'Core PHP'),
(8, 'W_2013_110.jpg', '#', 'Superman', 'Core PHP | WordPress | Template Design');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `admin_user_id` FOREIGN KEY (`user_id`) REFERENCES `tbl_admin_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
