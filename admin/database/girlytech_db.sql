-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 11, 2024 at 05:05 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `girlytech_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blogs`
--

CREATE TABLE `tbl_blogs` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `blog_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `blog_content` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `blog_content_short` text COLLATE utf8_unicode_ci NOT NULL,
  `blog_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `publisher` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total_view` int(11) NOT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keyword` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_blogs`
--

INSERT INTO `tbl_blogs` (`blog_id`, `blog_title`, `blog_slug`, `blog_content`, `blog_content_short`, `blog_date`, `photo`, `category_id`, `publisher`, `total_view`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(4, 'Digital eye strain', 'digital-eye-strain', '<p><span style=\"font-family: Times; font-size: medium;\">Understanding Digital Eye Strain: Tips for Optimal Eye Health in the Digital Age</span><br></p>', 'Understanding Digital Eye Strain: Tips for Optimal Eye Health in the Digital Age', '28-12-2023', 'blog-4.png', 7, 'Abdul', 0, '', '', ''),
(5, 'Dr Najiya Min', 'dr-nayiya', '<p><span style=\"font-family: Times; font-size: medium;\">Understanding Digital Eye Strain: Tips for Optimal Eye Health in the Digital Age</span><br></p>', 'Understanding Digital Eye Strain: Tips for Optimal Eye Health in the Digital Age', '28-12-2023', 'blog-5.png', 7, 'Abdul', 0, '', '', ''),
(6, 'Web Digital eye strain', 'digital-eye-strains', '<p style=\"margin-bottom: 15px; font-family: Roboto, sans-serif; font-size: 15px; color: rgb(80, 97, 114); line-height: 1.75;\">I could let you out, you know.\' It was, no doubt: only Alice did not come the same side of WHAT?\' thought Alice; \'I must be the best cat in the house of the ground--and I should frighten them out of a muchness\"--did you ever eat a bat?\' when suddenly, thump! thump! down she came upon a little of it?\' said the Mouse to tell you--all I know is, it would feel with all her life. Indeed, she had nothing else to do, and in despair she put it. She stretched herself up closer to Alice\'s side as she added, \'and the moral of that is--\"Oh, \'tis love, \'tis love, \'tis love, that makes the matter with it. There was nothing on it but tea. \'I don\'t know what they\'re about!\' \'Read them,\' said the King, and the baby--the fire-irons came first; then followed a shower of little pebbles came rattling in at all?\' said the Lory positively refused to tell him. \'A nice muddle their slates\'ll be in Bill\'s place for a minute or two, they began moving about again, and that\'s all I can kick a little!\' She drew.</p><p class=\"text-center\" style=\"margin-bottom: 15px; font-family: Roboto, sans-serif; font-size: 15px; color: rgb(80, 97, 114); line-height: 1.75;\"><img src=\"https://ultranews.thesky9.com/storage/news/news-2-600x421.jpg\" alt=\"news-2-600x421.jpg\" style=\"border-style: none; max-width: 100%;\"></p><p style=\"margin-bottom: 15px; font-family: Roboto, sans-serif; font-size: 15px; color: rgb(80, 97, 114); line-height: 1.75;\">Dormouse go on in a coaxing tone, and everybody else. \'Leave off that!\' screamed the Pigeon. \'I can see you\'re trying to fix on one, the cook and the fan, and skurried away into the darkness as hard as it could go, and broke to pieces against one of the thing at all. However, \'jury-men\' would have appeared to them to sell,\' the Hatter said, tossing his head sadly. \'Do I look like one, but the tops of the wood for fear of killing somebody, so managed to swallow a morsel of the edge with each.</p>', 'Understanding Digital Eye Strain: Tips for Optimal Eye Health in the Digital Age', '28-12-2023', 'blog-6.png', 7, 'Abdul', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keyword` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_slug`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(6, 'Events', 'events', '', '', ''),
(7, 'News', 'news', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_photo`
--

CREATE TABLE `tbl_category_photo` (
  `p_category_id` int(11) NOT NULL,
  `p_category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_category_photo`
--

INSERT INTO `tbl_category_photo` (`p_category_id`, `p_category_name`, `status`) VALUES
(4, 'Event', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `id` int(11) NOT NULL,
  `code_body` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `code_main` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_designation`
--

CREATE TABLE `tbl_designation` (
  `designation_id` int(11) NOT NULL,
  `designation_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_designation`
--

INSERT INTO `tbl_designation` (`designation_id`, `designation_name`) VALUES
(2, 'CEO'),
(5, 'Founder'),
(6, 'Technical Lead');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_content` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `event_content_short` text COLLATE utf8_unicode_ci NOT NULL,
  `event_venue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `event_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_category_id` int(11) NOT NULL,
  `event_status_id` int(199) NOT NULL,
  `total_view` int(11) NOT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keyword` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`event_id`, `event_title`, `event_slug`, `event_content`, `event_content_short`, `event_venue`, `event_date`, `event_link`, `photo`, `event_category_id`, `event_status_id`, `total_view`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
INSERT INTO `tbl_events` (`event_id`, `event_title`, `event_slug`, `event_content`, `event_content_short`, `event_venue`, `event_date`, `event_link`, `photo`, `event_category_id`, `event_status_id`, `total_view`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(2, 'Trial event', 'trial-event', '<p>event content</p>', 'event content short', 'venue', '08-11-2023', 'http://www.google.com', 'event-2.png', 7, 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event_category`
--

CREATE TABLE `tbl_event_category` (
  `event_category_id` int(11) NOT NULL,
  `event_category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_category_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keyword` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_event_category`
--

INSERT INTO `tbl_event_category` (`event_category_id`, `event_category_name`, `event_category_slug`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(7, 'Motor Sports', 'motorsports', '', '', ''),
(8, 'Technology', 'technology', '', '', ''),
(9, 'Innovation', 'innovation', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq_category`
--

CREATE TABLE `tbl_faq_category` (
  `faq_category_id` int(11) NOT NULL,
  `faq_category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_faq_category`
--

INSERT INTO `tbl_faq_category` (`faq_category_id`, `faq_category_name`) VALUES
(1, 'General Questions'),
(2, 'Client Query'),
(3, 'Technical Questions');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file`
--

CREATE TABLE `tbl_file` (
  `file_id` int(11) NOT NULL,
  `file_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_language`
--

CREATE TABLE `tbl_language` (
  `id` int(11) NOT NULL,
  `name` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_language`
--

INSERT INTO `tbl_language` (`id`, `name`, `value`) VALUES
(1, 'ABOUT_US', 'About Us'),
(2, 'LATEST_NEWS', 'Latest News'),
(3, 'POPULAR_NEWS', 'Popular News'),
(4, 'CONTACT_US', 'Contact Us'),
(5, 'CONTACT_FORM', 'Contact Form'),
(6, 'FULL_NAME', 'Full Name'),
(7, 'EMAIL_ADDRESS', 'Email Address'),
(8, 'PHONE_NUMBER', 'Phone Number'),
(9, 'MESSAGE', 'Message'),
(10, 'SEND_MESSAGE', 'Send Message'),
(11, 'CATEGORY', 'Category'),
(12, 'POSTED_ON', 'Posted on'),
(13, 'READ_MORE', 'Read More'),
(14, 'CATEGORIES', 'Categories'),
(15, 'SEARCH', 'Search'),
(16, 'SEARCH_BY_COLON', 'Search By:'),
(17, 'DATE', 'Date'),
(18, 'SHARE_THIS', 'Share This'),
(19, 'COMMENTS', 'Comments'),
(20, 'ENTER_YOUR_EMAIL', 'Enter Your Email'),
(21, 'SUBMIT', 'Submit'),
(22, 'CATEGORY_COLON', 'Category:'),
(23, 'SERVICE_COLON', 'Service:'),
(24, 'SERVICES', 'Services'),
(26, 'EMAIL_VALID_CHECK', 'Email Address must be valid'),
(27, 'SUBSCRIPTION_SUCCESS_MESSAGE', 'Please check your email and confirm your subscription.'),
(28, 'FULL_NAME_EMPTY_CHECK', 'Name can not be empty'),
(29, 'PHONE_EMPTY_CHECK', 'Phone Number can not be empty'),
(30, 'EMAIL_EMPTY_CHECK', 'Email Address can not be empty'),
(31, 'COMMENT_EMPTY_CHECK', 'Comment can not be empty'),
(33, 'ADDRESS', 'Address'),
(34, 'WEBSITE', 'Website'),
(35, 'ABOUT', 'About'),
(36, 'CONTACT', 'Contact'),
(37, 'SOCIAL_MEDIA_HEADLINE', 'Social Media Activities'),
(38, 'SEE_FULL_PROFILE', 'See Full Profile'),
(39, 'TEAM_MEMBER_COLON', 'Team Member:'),
(40, 'NEWS_EMPTY_CHECK', 'Sorry! No News is found.'),
(41, 'PREVIOUS', 'Previous'),
(42, 'NEXT', 'Next'),
(43, 'EMAIL_EXIST_CHECK', 'Email Address already exists'),
(44, 'CONTACT_FORM_MESSAGE', 'Contact Form Message'),
(45, 'CONTACT_FORM_SUCCESS_MESSAGE', 'Email is sent successfully. '),
(46, 'SUBSCRIPTION_SUBJECT', 'Subscriber Email Confirmation');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_messages`
--

CREATE TABLE `tbl_messages` (
  `id` int(9) NOT NULL,
  `name` varchar(19) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_messages`
--

INSERT INTO `tbl_messages` (`id`, `name`, `email`, `message`) VALUES
(6, 'Ghaf', 'adul@gmail.com', 'Hello'),
(10, 'Test name', 'a@b.com', 'this is a test message'),
(11, 'Abdul', 'a@b.com', 'this a trial message');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` int(9) NOT NULL,
  `api_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`id`, `api_key`) VALUES
(1, 'pk_test_c9f464005defec9a9cf86e9b6e6f8d7ed90ed5f9');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photo`
--

CREATE TABLE `tbl_photo` (
  `photo_id` int(11) NOT NULL,
  `photo_caption` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_photo`
--

INSERT INTO `tbl_photo` (`photo_id`, `photo_caption`, `photo_name`, `p_category_id`) VALUES
(20, 'g1', 'photo-20.png', 4),
(21, 'g2', 'photo-21.png', 4),
(22, 'g3', 'photo-22.png', 4),
(23, 'g4', 'photo-23.png', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE `tbl_settings` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `footer_about` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `footer_copyright` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `contact_address` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `contact_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_fax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_map_iframe` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `total_recent_news_footer` int(10) NOT NULL,
  `total_popular_news_footer` int(10) NOT NULL,
  `total_recent_news_sidebar` int(11) NOT NULL,
  `total_popular_news_sidebar` int(11) NOT NULL,
  `total_recent_news_home_page` int(11) NOT NULL,
  `meta_title_home` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `meta_keyword_home` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `meta_description_home` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `home_title_service` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_subtitle_service` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_status_service` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `home_title_team_member` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_subtitle_team_member` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_status_team_member` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `home_title_testimonial` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_subtitle_testimonial` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_status_testimonial` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `home_photo_testimonial` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_title_news` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_subtitle_news` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_status_news` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `home_title_partner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_subtitle_partner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_status_partner` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mod_rewrite` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `newsletter_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `newsletter_text` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `newsletter_photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `newsletter_status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `banner_search` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banner_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `counter_1_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `counter_1_value` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `counter_2_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `counter_2_value` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `counter_3_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `counter_3_value` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `counter_4_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `counter_4_value` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `counter_photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `counter_status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `preloader` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `active_editor` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `website_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_about_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `home_about_img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `home_about_content` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `home_mission_title` varchar(199) COLLATE utf8_unicode_ci NOT NULL,
  `home_mission_content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_vision_title` varchar(199) COLLATE utf8_unicode_ci NOT NULL,
  `home_vision_content` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_settings`
--

INSERT INTO `tbl_settings` (`id`, `logo`, `favicon`, `footer_about`, `footer_copyright`, `contact_address`, `contact_email`, `contact_phone`, `contact_fax`, `contact_map_iframe`, `total_recent_news_footer`, `total_popular_news_footer`, `total_recent_news_sidebar`, `total_popular_news_sidebar`, `total_recent_news_home_page`, `meta_title_home`, `meta_keyword_home`, `meta_description_home`, `home_title_service`, `home_subtitle_service`, `home_status_service`, `home_title_team_member`, `home_subtitle_team_member`, `home_status_team_member`, `home_title_testimonial`, `home_subtitle_testimonial`, `home_status_testimonial`, `home_photo_testimonial`, `home_title_news`, `home_subtitle_news`, `home_status_news`, `home_title_partner`, `home_subtitle_partner`, `home_status_partner`, `mod_rewrite`, `newsletter_title`, `newsletter_text`, `newsletter_photo`, `newsletter_status`, `banner_search`, `banner_category`, `counter_1_title`, `counter_1_value`, `counter_2_title`, `counter_2_value`, `counter_3_title`, `counter_3_value`, `counter_4_title`, `counter_4_value`, `counter_photo`, `counter_status`, `color`, `preloader`, `active_editor`, `website_name`, `home_about_title`, `home_about_img`, `home_about_content`, `home_mission_title`, `home_mission_content`, `home_vision_title`, `home_vision_content`) VALUES
(1, 'logo.png', 'favicon.png', '<p>Creating unforgettable experiences that celebrate African culture and bring people together.</p>\r\n', 'Copyright 2023. All Rights Reserved.', 'ABC Steet, ABC', 'info.girlytech@gmail.com', '+2338096542356', '', '', 3, 3, 4, 4, 7, 'Transforming Africa through entertainment, storytelling, and talent development.', 'transforming, africa, entertainment, storytelling, talent, development.', 'We are a production company dedicated to transforming Africa through exceptional events, storytelling, and talent development, showcasing the beauty and richness of the African culture to the world.', 'Our Services', 'Check Out All Our Consulting Services', 'Show', 'Team Members', 'Meet with All Our Qualified Team Members', 'Show', 'Testimonial', 'Our Happy Clients Tell About Us', 'Show', 'testimonial.jpg', 'Latest News', 'See All Our Updated and Latest News', 'Show', 'Our Partners', 'All Our Company Partners are Listed Below', 'Show', 'On', 'Newsletter', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid fugit expedita, iure ullam cum vero ex sint aperiam maxime.', 'newsletter.jpg', 'Show', 'banner_search.jpg', 'banner_category.jpg', 'Years of Experience', '8', 'Events Organized', '100', 'Team Members', '50', '', '', 'counter.jpg', '', '2795D0', 'Off', 'Summernote', 'GirlyTech', 'About', 'home_about_img.png', '<h4 style=\"margin: 0px 0px 0.5rem; padding: 0px; font-size: 19.2px; color: rgb(0, 0, 0); font-family: Times;\">About US</h4><p style=\"margin-bottom: 0.5rem; padding: 0px; font-size: 19.2px; font-family: Times;\">GirlyTech is a forward-thinking foundation established with the goal of revolutionising the tech landscape by promoting gender diversity and inclusivity. We recognize the immense potential and talent that women bring to the tech industry and are committed to providing the resources, support, and opportunities necessary for their success.</p>', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting_email`
--

CREATE TABLE `tbl_setting_email` (
  `id` int(11) NOT NULL,
  `send_email_from` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `receive_email_to` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `smtp_host` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `smtp_port` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `smtp_username` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `smtp_password` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_setting_email`
--

INSERT INTO `tbl_setting_email` (`id`, `send_email_from`, `receive_email_to`, `smtp_host`, `smtp_port`, `smtp_username`, `smtp_password`) VALUES
(1, 'abdulgafurshaattir@gmail.com', 'abdulgafurshaattir@gmail.com', 'smtp.gmail.com', '587', 'jobid@ubids.edu.gh', 'b7ye6z9h1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social`
--

CREATE TABLE `tbl_social` (
  `social_id` int(11) NOT NULL,
  `social_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `social_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `social_icon` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_social`
--

INSERT INTO `tbl_social` (`social_id`, `social_name`, `social_url`, `social_icon`) VALUES
(1, 'Facebook', '#', 'fab fa-facebook'),
(2, 'Twitter', '#', 'fab fa-twitter'),
(3, 'LinkedIn', '#', 'fab fa-linkedin'),
(4, 'Google Plus', '#', 'fab fa-google-plus'),
(5, 'Pinterest', '#', 'fab fa-pinterest'),
(6, 'YouTube', '', 'fab fa-youtube'),
(7, 'Instagram', '', 'fab fa-instagram'),
(8, 'Tumblr', '', 'fab fa-tumblr'),
(9, 'Flickr', '', 'fab fa-flickr'),
(10, 'Reddit', '', 'fab fa-reddit'),
(11, 'Snapchat', '', 'fab fa-snapchat'),
(12, 'WhatsApp', '', 'fab fa-whatsapp'),
(13, 'Quora', '', 'fab fa-quora'),
(14, 'StumbleUpon', '', 'fab fa-stumbleupon'),
(15, 'Delicious', '', 'fab fa-delicious'),
(16, 'Digg', '', 'fab fa-digg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscriber`
--

CREATE TABLE `tbl_subscriber` (
  `subs_id` int(11) NOT NULL,
  `subs_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subs_date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `subs_date_time` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `subs_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subs_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_subscriber`
--

INSERT INTO `tbl_subscriber` (`subs_id`, `subs_email`, `subs_date`, `subs_date_time`, `subs_hash`, `subs_active`) VALUES
(10, 'test2@gmail.com', '2022-08-23', '2022-08-23 13:48:09', '', 1),
(17, 'kdk@kd.com', '2024-01-11', '2024-01-11 10:57:36', '', 1),
(19, 'info@namibra.io', '2024-01-11', '2024-01-11 17:49:36', '', 1),
(20, 'ghaf@gmail.com', '2024-01-11', '2024-01-11 17:54:10', '', 1),
(21, 'info@namibra.io', '2024-01-11', '2024-01-11 19:21:51', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team_member`
--

CREATE TABLE `tbl_team_member` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation_id` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `degree` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `google_plus` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flickr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `practice_location` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keyword` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_team_member`
--

INSERT INTO `tbl_team_member` (`id`, `name`, `slug`, `designation_id`, `photo`, `banner`, `degree`, `detail`, `facebook`, `twitter`, `linkedin`, `youtube`, `google_plus`, `instagram`, `flickr`, `address`, `practice_location`, `phone`, `email`, `website`, `status`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(7, 'Abdul', 'abdul', 2, 'team-member-7.png', 'team-member-banner-7.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Active', '', '', ''),
(8, 'Moses Asamoah', 'moses-asamoah', 5, 'team-member-8.png', 'team-member-banner-8.png', '', '', '#', '#', '', '', '', '', '', '', '', '', '', '', 'Active', '', '', ''),
(9, 'Kelvin Yaboah', 'kelvin', 6, 'team-member-9.png', 'team-member-banner-9.png', '', '', '#', '#', '#', '', '', '', '', '', '', '', '', '', 'Active', '', '', ''),
(10, 'Dr Najiya Min', 'dr-najiya-min', 5, 'team-member-10.png', 'team-member-banner-10.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Active', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `email`, `password`, `photo`, `role`, `status`) VALUES
(1, 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user-1.jpeg', 'Admin', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_blogs`
--
ALTER TABLE `tbl_blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_category_photo`
--
ALTER TABLE `tbl_category_photo`
  ADD PRIMARY KEY (`p_category_id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_designation`
--
ALTER TABLE `tbl_designation`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `tbl_event_category`
--
ALTER TABLE `tbl_event_category`
  ADD PRIMARY KEY (`event_category_id`);

--
-- Indexes for table `tbl_faq_category`
--
ALTER TABLE `tbl_faq_category`
  ADD PRIMARY KEY (`faq_category_id`);

--
-- Indexes for table `tbl_file`
--
ALTER TABLE `tbl_file`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `tbl_language`
--
ALTER TABLE `tbl_language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_messages`
--
ALTER TABLE `tbl_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_photo`
--
ALTER TABLE `tbl_photo`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_setting_email`
--
ALTER TABLE `tbl_setting_email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`social_id`);

--
-- Indexes for table `tbl_subscriber`
--
ALTER TABLE `tbl_subscriber`
  ADD PRIMARY KEY (`subs_id`);

--
-- Indexes for table `tbl_team_member`
--
ALTER TABLE `tbl_team_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_blogs`
--
ALTER TABLE `tbl_blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_category_photo`
--
ALTER TABLE `tbl_category_photo`
  MODIFY `p_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_designation`
--
ALTER TABLE `tbl_designation`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_event_category`
--
ALTER TABLE `tbl_event_category`
  MODIFY `event_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_faq_category`
--
ALTER TABLE `tbl_faq_category`
  MODIFY `faq_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_file`
--
ALTER TABLE `tbl_file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_language`
--
ALTER TABLE `tbl_language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbl_messages`
--
ALTER TABLE `tbl_messages`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_photo`
--
ALTER TABLE `tbl_photo`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_setting_email`
--
ALTER TABLE `tbl_setting_email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `social_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_subscriber`
--
ALTER TABLE `tbl_subscriber`
  MODIFY `subs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_team_member`
--
ALTER TABLE `tbl_team_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;