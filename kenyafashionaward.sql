-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2019 at 03:32 PM
-- Server version: 10.1.36-MariaDB
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
-- Database: `kenyafashionaward`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bio` mediumtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `name`, `company`, `email`, `phone_number`, `created_at`, `updated_at`, `bio`) VALUES
(9, 'Clark Kent', 'Smallville Superhero Limited', 'johngachihi3@gmail.com', '+254 111 111111', '2019-04-28 06:09:00', '2019-04-28 06:09:00', NULL),
(10, 'Oliver Queen', 'Starling City Industries', 'johngachihi3@gmail.com', '+254 723 444888', '2019-04-28 15:10:20', '2019-04-28 15:10:20', NULL),
(11, 'Bruce Wayne', 'Wayne Enterprises', 'johngachihi3@gmail.com', '+254 723 456 789', '2019-04-28 15:13:07', '2019-04-28 15:13:07', NULL),
(12, 'Hal Jordan', 'Green Lantern Corp', 'johngachihi3@gmail.com', '+254 722 345 567', '2019-04-28 15:17:12', '2019-04-28 15:17:12', NULL),
(13, 'Diana Prince', 'Themyscira Limited', 'johngachihi3@gmail.com', '+254 722 345 567', '2019-04-28 15:21:25', '2019-04-28 15:21:25', NULL),
(14, 'Author Joseph Curry', 'Atlantis Area', 'johngachihi3@gmail.com', '+254 722 345 567', '2019-04-28 15:26:24', '2019-04-28 15:26:24', NULL),
(15, 'Oliver Queen', 'Starling City Company', 'johngachihi3@gmail.com', '+254 722 345 567', '2019-04-28 15:32:05', '2019-04-28 15:32:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `applicant_id` bigint(20) NOT NULL,
  `award_category_id` int(11) NOT NULL,
  `decision` enum('approved','rejected') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `applicant_id`, `award_category_id`, `decision`, `created_at`, `updated_at`) VALUES
(9, 11, 22, 'rejected', '2019-04-28 15:13:07', '2019-05-04 16:41:55'),
(10, 12, 23, 'rejected', '2019-04-28 15:17:12', '2019-05-04 17:05:38'),
(11, 13, 24, 'rejected', '2019-04-28 15:21:25', '2019-05-04 17:07:32'),
(12, 14, 23, 'approved', '2019-04-28 15:26:24', '2019-05-05 06:29:25'),
(13, 15, 23, NULL, '2019-04-28 15:32:05', '2019-05-04 16:38:48');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(11) NOT NULL,
  `cover_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `created_at`, `updated_at`, `user_id`, `cover_image`) VALUES
(1, 'Article One', 'Together', '2019-04-22 12:08:54', '2019-04-10 11:59:31', 1, ''),
(2, 'Article Two', 'This better make this thing work', '2019-04-22 12:09:00', '0000-00-00 00:00:00', 1, ''),
(4, 'Article Four', 'I seriously need to do this stuff.', '2019-04-22 12:09:08', '0000-00-00 00:00:00', 2, ''),
(7, 'Post Janet', 'Thus the people of Njedavelir were massacred by Thanos. Only one was left, he who made the gauntlet. A worse fate than death', '2019-04-22 12:09:12', '2019-04-22 08:58:58', 2, ''),
(9, 'Post Three', 'Let us see if Jane is gonna be number 3.', '2019-04-22 09:31:54', '2019-04-22 09:31:54', 3, ''),
(10, 'File Uploading', 'This is to test the file uploading function here. To infinity and beyond.', '2019-05-24 03:51:16', '2019-05-24 03:51:16', 2, 'noimage.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `award_categories`
--

CREATE TABLE `award_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `Category_Title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `richCategory_Requirements` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `award_categories`
--

INSERT INTO `award_categories` (`id`, `Category_Title`, `created_at`, `updated_at`, `richCategory_Requirements`) VALUES
(1, 'Fashion Designer Men’s/Women’s', NULL, '2019-04-28 15:03:06', 0x5048412b50476b2b50484e30636d39755a7a355561476c7a49476c7a49476c3049547776633352796232356e506a7776615434674a6d35696333413750433977506a78316244343862476b2b5357356b61585a705a48566862434233614738676333426c59326c6862476c365a584d676157346759334a6c59585270626d6367636d56685a486b7464473874643256686369393059576c73623349765933567a644739744c335679596d467549476468636d316c626e527a49475a76636942745a5734675957356b4c32397949486476625756754c6942535a57466b65533130627931335a57467949474e736233526f6157356e49476c7a4947526c5a6d6c755a57516759584d675932787664476870626d636762574679613256305a575167615734675953426d615735706332686c5a43426a6232356b6158527062323473494731685a4755676157346763335268626d5268636d516763326c365a584d75504339736154343862476b2b5357356b61585a705a4856686243423361473867625746725a584d675933567a644739744c57526c63326c6e626d566b49476468636d316c626e527a494731685a475567644738676447686c49474e7361575675644f4b416d584d6762575668633356795a54736750484e30636d39755a7a356c6333426c59326c686247783549484e316158527a5043397a64484a76626d632b4c434138633352796232356e506e52796233567a5a584a7a5043397a64484a76626d632b494746755a44787a64484a76626d632b494770685932746c64484d755043397a64484a76626d632b504339736154343862476b2b5357356b61585a705a48566862434233614738676333426c59326c6862476c365a584d67615734676447686c49474e795a574630615739754947396d4948647662575675346f435a63794276636942745a573769674a6c7a49485679596d46754948646c595849754a6d35696333413749465679596d467549474e736233526f6157356e49476c7a49474e76626e4e705a4756795a5751675932467a6457467349474e736233526f6157356e4948526f59585167593246305a584a7a494852764948526f5a5342356233563061434268626d516761584d676157357a63476c795a575167596e6b676447686c49447870506a787a64484a76626d632b61476c774c57687663447776633352796232356e506a77766154346759335673644856795a54777662476b2b504339316244343d),
(2, 'Fashion Photographer (Up-coming/Established)', NULL, '2019-04-28 15:04:27', 0x5048412b5458567a6443427a6347566a615746736158706c49476c754948526f5a53426e5a5735795a5342765a694138633352796232356e506d5a6863326870623234384c334e30636d39755a7a34734944787a64484a76626d632b593239746257567959326c68624341384c334e30636d39755a7a3576636942795a5778686447566b4948426f623352765a334a68634768355043397750673d3d),
(18, 'Accessorizes/Jewelry Designer (Up-coming/Established)', '2019-04-19 11:40:26', '2019-04-19 11:40:26', 0x5048412b50484e30636d39755a7a354a626d5270646d6c6b645746735043397a64484a76626d632b4c434138633352796232356e506d4a76645852706358566c49447776633352796232356e506d39794944787a64484a76626d632b5a334a76645841675043397a64484a76626d632b643268764947526c63326c6e626e4d675957356b49474e795a5746305a584d6759574e6a5a584e7a62334a705a584d675a6d39794947316c62694276636942336232316c626977675a6d39794948567a5a53427062694138633352796232356e506e426f623352765a334a68634768355043397a64484a76626d632b4c434138633352796232356e506e4a31626e646865534277636d567a5a573530595852706232357a5043397a64484a76626d632b494746755a43397663694138633352796232356e506d5a766369427a5957786c494852764948526f5a53426e5a57356c636d467349484231596d7870597a7776633352796232356e506a77766344343d),
(22, 'Clothing Stylist (Up-coming/Established)', '2019-04-28 15:05:21', '2019-04-28 15:05:21', 0x5048412b5357356b61585a705a485668624342336147386759323976636d5270626d46305a584d676447686c49484e3065577870626d636762325967643239745a573769674a6c7a494746755a433976636942745a573769674a6c7a49474e736233526f6157356e494746755a43426859324e6c63334e76636d6c6c637942316332566b49476c754948426f623352765a334a6863476835494746755a433976636942796457353359586b6763484a6c633256756447463061573975637934674a6d35696333413750476b2b564768706379426a5958526c5a3239796553426b6232567a4947357664434270626d4e736457526c49474e736233526f6157356e4947526c63326c6e62694268626d517662334967633256336157356e4c6a7776615434384c33412b),
(23, 'Male Model', '2019-04-28 15:16:41', '2019-04-28 15:16:41', 0x5048412b5357356b61585a705a485668624342745957786c49486470644767364a6d35696333413750433977506a78316244343862476b2b595752325957356a5a575167636e567564324635494746755a43397663694277636d6c756443426c6548426c636d6c6c626d4e6c494746755a434277636d567a5a57356a5a5334384c327870506a78736154355162334e7a5a584e7a4948526f5a53427a61326c7362484d675957356b4948526f5a5342736232397249485276494731686132556761585167644738676447686c494852766343427459584a725a58527a494746755a43427459577076636942796457353359586b676332687664334d7649484279615735304947466b637934384c327870506a77766457772b),
(24, 'Female Runway Model', '2019-04-28 15:21:11', '2019-04-28 15:21:11', 0x5048412b5357356b61585a705a4856686243426d5a5731686247556764326c30614342685a485a68626d4e6c5a4342796457353359586b675a5868775a584a705a57356a5a534268626d516763484a6c63325675593255734948427663334e6c63334d676447686c49484e726157787363794268626d51676447686c494778766232736764473867625746725a5342706443423062794230614755676447397749473168636d746c64484d675957356b49473168616d397949484a31626e64686553427a614739336379346750484e30636d39755a7a354e64584e3049474a6c49474a6c6448646c5a5734674e654b416d5463675957356b49446269674a6b775043397a64484a76626d632b4c6a77766344343d),
(25, 'Fashion Model', '2019-04-29 03:53:07', '2019-04-29 03:53:07', 0x50485673506a78736154357a5957526d5a4759384c327870506a78736154356b63325a7a5954777662476b2b504339316244343d);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blogger_id` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `body` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `Category` enum('Model','Designer','Photography') NOT NULL,
  `Group` enum('Upcoming','Established') NOT NULL,
  `Ppicture` varchar(255) NOT NULL,
  `Description` longtext NOT NULL,
  `Weblink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_04_11_053005_create__award_categories_table', 2),
(9, '2019_04_13_090146_add_role_to_users_table', 3),
(12, '2019_04_17_171105_add_rich_category_requirements_to__award_categories_table', 4),
(14, '2019_04_19_150906_drop_plaintext_category_requirements_column_from_award_categories', 5),
(15, '2019_04_27_180719_create_applicants_table', 6),
(16, '2019_04_27_181226_create_applications_table', 7),
(18, '2019_04_28_085430_add_bio_to_applicants_table', 8),
(21, '2019_05_05_142314_create_votes_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `polls`
--

CREATE TABLE `polls` (
  `id` int(11) NOT NULL,
  `award` varchar(40) NOT NULL,
  `option_count` int(11) NOT NULL,
  `vote_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `category` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `fname`, `lname`, `category`, `description`, `updated_at`, `created_at`) VALUES
(2, 'Milan', 'Paris', 'Photographer', 'This is the second time I am adding this paragraph.I am so tired. HELP ME!!!. Hangul is not working.', '2019-06-16 07:47:01', '0000-00-00 00:00:00'),
(4, 'Milan', 'London', 'Designer', 'This is the first one after hours of procrastination. This really sucks but work must be done.', '2019-06-01 10:34:05', '2019-06-01 10:34:05'),
(5, 'London', 'Paris', 'Photographer', 'The hangul is wrong string value. Why?????\\\r\noh, well!!!!!', '2019-06-16 07:46:26', '2019-06-16 07:46:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('normal_user','admin','blog_admin') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Peter Kelly', 'peter@test.com', NULL, '$2y$10$4oBgn4baammAK05sX2jLgOSU5dfGIpmg8/Z8gdxpwpwq1oueqd/Vu', NULL, '2019-04-13 06:13:40', '2019-04-13 06:13:40', 'normal_user'),
(2, 'Hassan Lami', 'hassan@lami.com', NULL, '$2y$10$4VMNcVYJXIYTRSI1afA7/uN.0HfWuTNWCz.bsRM79YvyrVN6cP6pG', NULL, '2019-04-13 06:15:08', '2019-04-13 06:15:08', 'admin'),
(3, 'Janet Kai', 'janice4@gmail.com', NULL, '$2y$10$uLwNqc8Me5egbxyYxKtSSuEZglMdTv3.t0tbaDHrOj.wpwveBG81u', NULL, '2019-05-27 03:48:24', '2019-05-27 03:48:24', 'admin'),
(4, 'Janet Kai', 'janice@gmail.com', NULL, '$2y$10$Z9FD0GEZr5yDDZuGzIO2l.hcpW5YZcSBDYBHnGxNMin3nlqQHVxXS', NULL, '2019-06-16 03:57:58', '2019-06-16 03:57:58', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `award_category_id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `award_category_id`, `applicant_id`, `created_at`, `updated_at`) VALUES
(1, 1, 9, '2019-05-05 11:53:30', '2019-05-05 11:53:30'),
(2, 1, 9, '2019-05-05 11:54:04', '2019-05-05 11:54:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `award_categories`
--
ALTER TABLE `award_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `polls`
--
ALTER TABLE `polls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `award_categories`
--
ALTER TABLE `award_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `polls`
--
ALTER TABLE `polls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
