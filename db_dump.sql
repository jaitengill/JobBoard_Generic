-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 07, 2018 at 04:27 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `jobskee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` tinyint(4) NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@example.com', '13ca1c6fd59c90ab75f2b6b9f49a1f34f6acb9ea');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `cover_letter` text COLLATE utf8_unicode_ci,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `websites` text COLLATE utf8_unicode_ci,
  `attachment` text COLLATE utf8_unicode_ci,
  `token` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banlist`
--

CREATE TABLE `banlist` (
  `id` int(11) NOT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE `blocks` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blocks`
--

INSERT INTO `blocks` (`id`, `name`, `url`, `content`) VALUES
(1, 'AddThis', 'addthis', '<script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-541e6f810d78ec0c\"></script>\n<div class=\"addthis_sharing_toolbox\"></div>');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(160) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `url`, `sort`) VALUES
(7, 'Healthcare Public Relations', 'People working within Healthcare Public Relations, specialise in the handling of internal and external communications for healthcare companies.', 'healthcarepr', 1),
(8, 'Medical Communications', 'Medical communications provides consultancy services to the pharmaceutical industry to help raise awareness of medicines via education and promotion', 'medicalcommunciations', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(160) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `description`, `url`, `sort`) VALUES
(1, 'Greater London West', 'Find the best jobs here!', 'anywhere', 1),
(2, 'Greater London South', 'Find the best Manila jobs here!', 'manila', 2),
(3, 'Greater London North', 'Find the best Madrid jobs here!', 'madrid', 3),
(4, 'Frankfurt', 'Find the best Frankfurt jobs here!', 'frankfurt', 4),
(5, 'Beijing', 'Find the best Beijing jobs here!', 'beijing', 5),
(6, 'New York', 'Find the best New York jobs here!', 'new-york', 6);

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `website` text COLLATE utf8_unicode_ci,
  `ip` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category` tinyint(4) DEFAULT NULL,
  `city` tinyint(4) DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `perks` text COLLATE utf8_unicode_ci,
  `how_to_apply` text COLLATE utf8_unicode_ci,
  `company_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` text COLLATE utf8_unicode_ci,
  `url` text COLLATE utf8_unicode_ci,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT NULL,
  `token` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `category`, `city`, `description`, `perks`, `how_to_apply`, `company_name`, `logo`, `url`, `email`, `is_featured`, `token`, `status`, `created`) VALUES
(1, 'PR Account Coordinator', 7, 1, 'Richmond Public Relations is an established public relations firm located in downtown Seattle. Our specialties include both consumer and B2B clients in the Food & Beverage, Travel Tourism, Consumer Product, Real Estate, Healthcare, Sports & Entertainment and Technology sectors. We have worldwide connections as the Seattle area partner agency of the Worldcom Public Relations Group, the largest consortium of independently owned and operated agencies around the world.\r\n\r\nThe Richmond Public Relations Seattle office has an opening for an Account Coordinator .\r\n\r\nWe are expanding our team of ambitious, creative, success-minded individuals. We take pride in our people, value the contributions made by all, and offer a competitive salary and benefits. We are a group who work hard to achieve great results.\r\n\r\nACCOUNT COORDINATOR Duties:\r\n\r\nProvide support for multiple account teams\r\nManage and develop media database and editorial calendars\r\nMaintain account press materials, media clipping reports and monthly account reports\r\nAssist in proofreading/editing, writing press releases, conducting research, media outreach including coordinating press trips\r\nDevelop story ideas on behalf of clients in print, broadcast and social media outlets\r\nProvide administrative support to account teams\r\nSkills & Qualifications:\r\n\r\nBachelor\'s degree in public relations, communications, or related field\r\nPrevious internship(s) and/or experience in public relations agency\r\nHigh level of professionalism with strong writing and problem solving skills\r\nExcellent oral communications and time management skills\r\nAbility to work in a results-driven, team-oriented environment\r\nCapability to multi-task and see projects through to completion\r\nStrong social media experience preferred\r\nEqual Opportunity Employer', '100,000+', 'If interested please email us your resume, cover letter and two writing samples (AP style).', 'Richmond Public Relations', '1528073887_8dfa1c_2a3aec1cecc442989312cc2ce60c8233_mv2.png', 'https://www.richmondpublicrelations.com/', 'info@richmondpublicrelations.com', 0, '3275c6f5065c367c3487f923e66cdb30', 1, '2018-06-04 08:58:07'),
(2, 'PR Account Coordinator Test', 7, 1, 'id=\"title\" name=\"title\" id=\"title\" name=\"title\" id=\"title\" name=\"title\" id=\"title\" name=\"title\"', '1000000', 'me@jaiten.com', 'GillTech', '1531237783_Jaiten Gill.jpg', 'https://www.richmondpublicrelations.com/', 'me@jaiten.com', 0, 'caac267999dc6fe3c6bcd4deef0c5539', 0, '2018-07-10 23:49:43'),
(3, 'klkllklk', 7, 1, 'klkllklk', 'klkllklk', 'klkllklk', 'klkllklk', '', 'http://jaiten.com', 'klkllklkklkllklk@jaiten.com', 0, 'c7ad70998e635bbf1443ec1aa83268c3', 0, '2018-10-07 17:36:35'),
(4, ')', 7, 1, ')', ')', ')', ')', '', 'http://jaiten.com', 'me@jaiten.com', 0, 'f6cd827bcd8e3ec7713a834a4da4a8ff', 0, '2018-10-07 17:39:05'),
(5, 'HealthCare Job', 7, 1, '\r\n        \r\n            \r\n                \r\n                    \r\n                    \r\n                        )\r\n                    ', '10K', 'please send to me', 'HMRC', '', 'http://jaiten.com', 'me@jaiten.com', 0, 'c2b8faa7d300c06ac0d01ef72e135869', 0, '2018-10-07 19:11:40'),
(6, 'Healthcare PR Job', 7, 1, '### *This Job is Really Really Cool*', '100,000 Yearly', 'Please send your resume here.', 'HMRC', '', 'http://jaiten.com', 'me@jaiten.com', 1, 'c4b8cb9c58eb64576b3763cc6d0ad9dd', 0, '2018-10-07 20:09:51'),
(7, 'Healthcare PR JOB LONDON', 7, 1, '  current step: 1. Create2. Review3. Payment4. Publish    \r\n', '1000000', 'jdkjdkssjkddsjkdsjkjksd', 'MCU', '', 'http://jaiten.com', 'me@jaiten.com', 1, '7e114ab88035c479e2b59eb91002b11a', 1, '2018-10-07 21:42:23'),
(8, 'Healthcare Pr Jobs London Test Job', 7, 1, 'if (version_compare(PHP_VERSION, \'5.3.0\', \'>=\')) {\r\n        spl_autoload_register(\'PHPMailerAutoload\', true, true);\r\n    } else {\r\n        spl_autoload_register(\'PHPMailerAutoload\');\r\n    }', '1000000 GPB YEARLY', 'please send your resume here.', 'Meridius', '', 'http://jaiten.com', 'me@jaiten.com', 0, '9c4ec72f258ef6ce70027e823173680d', 0, '2018-10-07 21:53:10'),
(9, 'Healthcare Pr Jobs London Test Job', 7, 1, 'if (version_compare(PHP_VERSION, \'5.3.0\', \'>=\')) {\r\n        spl_autoload_register(\'PHPMailerAutoload\', true, true);\r\n    } else {\r\n        spl_autoload_register(\'PHPMailerAutoload\');\r\n    }', '1000000 GPB YEARLY', 'please send your resume here.', 'Meridius', '1538920571_logo-dark.png', 'http://jaiten.com', 'me@jaiten.com', 0, '04a334111f6b39bc69eb4f34e8227a0d', 0, '2018-10-07 21:56:11'),
(10, 'Healthcare Pr Jobs London Test Job', 7, 1, 'if (version_compare(PHP_VERSION, \'5.3.0\', \'>=\')) {\r\n        spl_autoload_register(\'PHPMailerAutoload\', true, true);\r\n    } else {\r\n        spl_autoload_register(\'PHPMailerAutoload\');\r\n    }', '1000000 GPB YEARLY', 'please send your resume here.', 'Meridius', '1538920598_home-bg.jpg', 'http://jaiten.com', 'me@jaiten.com', 1, '8142063e0ef5d226549ce022703793d8', 1, '2018-10-07 21:56:38'),
(11, 'sdkdksddsjk', 7, 1, ' \r\n        global $lang;\r\n\r\n        $j = new Jobs($id);\r\n        $job = $j->getJobFromToken($token);\r\n        \r\n        $title = $j->getSlugTitle();\r\n        $city = $j->getJobCity($job->city);\r\n        $category = $j->getJobCategory($job->category);\r\n        \r\n        if (isset($job) && $job->id) {\r\n            \r\n            $seo_title = clean($job->title) .\' | \'. APP_NAME;\r\n            $seo_desc = excerpt($job->description);\r\n            $seo_url = BASE_URL .\"jobs/{$id}/{$title}\";\r\n            \r\n            $app->render(THEME_PATH . \'job.publish.php\', \r\n                        array(\'lang\' => $lang,\r\n                            \'seo_url\'=>$seo_url, \r\n                            \'seo_title\'=>$seo_title, \r\n                            \'seo_desc\'=>$seo_desc, \r\n                            \'job\'=>$job, \r\n                            \'city\'=>$city, \r\n                            \'category\'=>$category));\r\n        } else {\r\n            $app->flash(\'danger\', $lang->t(\'alert|error_encountered\'));\r\n            $app->redirect(BASE_URL . \"jobs/{$id}/{$title}\");\r\n        }   ', '1000000 gbp', 'me@jaitne.comaakdsjksd', 'Meridius', '1538921178_logo-light.png', 'me.com', 'me@jaiten.com', 1, '9d726ab98ebd0ef239a1f06dd4a5d65f', 0, '2018-10-07 22:06:18'),
(12, 'healthcare pr job 448348734', 7, 1, '$title = $j->getSlugTitle();\r\n        $city = $j->getJobCity($job->city);\r\n        $category = $j->getJobCategory($job->category);\r\n        \r\n        if (isset($job) && $job->id) {\r\n            \r\n            $seo_title = clean($job->title) .\' | \'. APP_NAME;\r\n            $seo_desc = excerpt($job->description);\r\n            $seo_url = BASE_URL .\"jobs/{$id}/{$title}\";\r\n            \r\n            $app->render(THEME_PATH . \'job.publish.php\', \r\n                        array(\'lang\' => $lang,\r\n                            \'seo_url\'=>$seo_url, \r\n                            \'seo_title\'=>$seo_title, \r\n                            \'seo_desc\'=>$seo_desc, \r\n                            \'job\'=>$job, \r\n                            \'city\'=>$city, \r\n                            \'category\'=>$category));\r\n        } else {\r\n            $app->flash(\'danger\', $lang->t(\'alert|error_encountered\'));\r\n            $app->redirect(BASE_URL . \"jobs/{$id}/{$title}\");\r\n        }   ', '100000', 'me@jaiten.com', 'kjsjksjksdjkds', '1538921434_logo-dark.png', 'www.jaiten.com', 'me@jaiten.com', 1, '9778c750f9069f8fcc91048eb7f3b35e', 0, '2018-10-07 22:10:34');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(160) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `description`, `url`, `content`) VALUES
(1, 'About', 'About', 'about', 'about'),
(2, 'Contact', 'Contact us', 'contact', 'contact us'),
(3, 'Terms', 'Terms', 'terms', 'terms'),
(13, 'Conditions', 'Conditions', 'conditions', 'conditions');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(10) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` tinyint(4) NOT NULL,
  `city_id` tinyint(4) NOT NULL,
  `token` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_sent` datetime DEFAULT NULL,
  `is_confirmed` tinyint(4) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banlist`
--
ALTER TABLE `banlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banlist`
--
ALTER TABLE `banlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blocks`
--
ALTER TABLE `blocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
