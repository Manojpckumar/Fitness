-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2021 at 11:54 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad_senses`
--

CREATE TABLE `ad_senses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Display` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `Active` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `url` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `Content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) DEFAULT 1,
  `Title_ar` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Title_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Title_fr` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `Title_ar`, `Title_en`, `Title_fr`, `slug`, `color`, `created_at`, `updated_at`) VALUES
(79, 1, 1, 'يوجا', 'Yoga', 'Yoga', 'yoga', 'complete', '2020-08-31 06:22:03', '2020-08-31 06:22:03'),
(80, 2, 2, 'قوة', 'Strength', 'Strength', 'strength', 'info', '2020-08-31 06:23:09', '2020-08-31 06:23:09'),
(81, 3, 3, 'العلوي', 'Upper', 'Upper', 'upper', 'warning', '2020-08-31 06:24:17', '2020-08-31 06:24:17'),
(82, 4, 4, 'القلب', 'Cardio', 'Cardio', 'cardio', 'complete', '2020-08-31 06:24:54', '2020-08-31 06:24:54'),
(83, 2, 2, 'مدرب شخصي', 'Personal Trainer', NULL, 'personal-trainer', 'danger', '2021-12-20 00:53:39', '2021-12-20 00:53:39'),
(84, 4, 4, 'تمرين', 'Training', NULL, 'training', 'danger', '2021-12-20 00:54:26', '2021-12-20 00:54:26'),
(85, 5, 5, 'دورات لياقة بدنية', 'Fitness courses', NULL, 'fitness-courses', 'danger', '2021-12-20 01:12:31', '2021-12-20 01:12:31'),
(86, 7, 7, 'مدربين القلب', 'Cardio trainers', NULL, 'cardio-trainers', 'danger', '2021-12-20 01:13:29', '2021-12-20 01:13:29'),
(87, 7, 7, 'مراكز اللياقة البدنية', 'Fitness centers', NULL, 'fitness-centers', 'success', '2021-12-20 02:26:19', '2021-12-20 02:26:19');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title_ar` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Title_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Title_fr` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_ar` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_fr` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ImageUpload_id` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `Title_ar`, `Title_en`, `Title_fr`, `body_ar`, `body_en`, `body_fr`, `ImageUpload_id`, `slug`, `created_at`, `updated_at`) VALUES
(7, NULL, 'Young Women Doing Abdominal', NULL, NULL, 'Young Women Doing Abdominal Young Women Doing Abdominal Your Body Truly can Stand Almost Anything.', NULL, '752', 'young-women-doing-abdominal', '2021-12-20 18:35:18', '2021-12-28 06:38:53'),
(8, NULL, 'Training with Dumbell Fitness Zone.', NULL, NULL, 'Training with Dumbell It’s Only Your Mind that you Have to Convince.', NULL, '753', 'training-with-dumbell', '2021-12-20 18:36:31', '2021-12-28 06:39:02'),
(9, NULL, 'How to Eat for bulking you up?', NULL, NULL, 'How to Eat for bulking you up Tones the Spirit As You Conditions the Body At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis', NULL, '754', 'how-to-eat-for-bulking-you-up', '2021-12-20 18:38:03', '2021-12-28 06:39:15'),
(10, NULL, 'Your future is created by what you do today', NULL, NULL, 'Your future is created by what you do today Tones the Spirit As You Conditions the BodyAt vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis', NULL, '755', 'your-future-is-created-by-what-you-do-today', '2021-12-20 18:39:49', '2021-12-28 06:39:35'),
(11, NULL, 'Fitness Zone muscled modern.', NULL, NULL, 'How to Eat for bulking you up Tones the Spirit As You Conditions the Body At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis', NULL, '756', 'fitness-zone-muscled-modern', '2021-12-20 18:40:44', '2021-12-28 06:39:49'),
(12, NULL, 'Fitness muscled for modern.', NULL, NULL, 'How to Eat for bulking you up Tones the Spirit As You Conditions the Body At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis', NULL, '757', 'fitness-muscled-for-modern', '2021-12-20 18:41:32', '2021-12-28 06:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Post_id` int(11) DEFAULT 1,
  `User_id` int(11) DEFAULT 1,
  `Comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_id` int(11) DEFAULT NULL,
  `Client_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `Post_id`, `User_id`, `Comment`, `instagram_id`, `Client_id`, `created_at`, `updated_at`) VALUES
(44, NULL, 52, 'Young Women Doing Abdominal Young Women Doing Abdominal Your Body Truly can Stand Almost Anything.', 7, NULL, '2021-12-27 19:11:22', '2021-12-27 19:11:22'),
(46, NULL, 52, 'Your future is created by what you do today Tones the Spirit As You Conditions the BodyAt vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis', NULL, 10, '2021-12-28 04:27:54', '2021-12-28 04:27:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title_ar` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Title_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Title_fr` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_ar` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_fr` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ImageUpload_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `Title_ar`, `Title_en`, `Title_fr`, `body_ar`, `body_en`, `body_fr`, `ImageUpload_id`, `position`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'كاتي سيمز جونيور', 'Matie Simms Junior', 'Matie Simms Junior', 'كاتي سيمز جونيور', 'Matie Simms Junior', 'Matie Simms Junior', '758', 'Crossfit Coach', 'matie-simms-junior', '2021-12-21 00:52:30', '2021-12-28 06:40:56'),
(3, 'ماديسون فرونينج', 'Madison Froning', 'Madison Froning', 'ماديسون فرونينج', 'Madison Froning', 'Madison Froning', '759', 'Cardio & Conditioning', 'madison-froning', '2021-12-21 00:54:16', '2021-12-28 06:41:08'),
(4, 'جوشوا فرانكلين', 'Joshua Franklin', 'Joshua Franklin', 'جوشوا فرانكلين', 'Joshua Franklin', 'Bodybuilding Coach', '760', 'Bodybuilding Coach', 'joshua-franklin', '2021-12-21 00:55:29', '2021-12-28 06:41:17'),
(5, 'ميتشل دويل', 'Mitchell Doyle', 'Mitchell Doyle', 'ميتشل دويل', 'Mitchell Doyle', 'Yoga Instructor', '761', 'Yoga Instructor', 'mitchell-doyle', '2021-12-21 00:56:27', '2021-12-28 06:41:25'),
(6, 'تمارا ماجواير', 'Tamara McGuire', 'Tamara McGuire', 'تمارا ماجواير', 'Tamara McGuire', 'Tamara McGuire', '762', 'Crossfit Coach', 'tamara-mcguire', '2021-12-21 00:57:24', '2021-12-28 06:41:33'),
(7, 'جوشوا فرانكلين', 'Joshua Franklin', 'Joshua Franklin', 'جوشوا فرانكلين', 'Joshua Franklin', 'Joshua Franklin', '763', 'Yoga Instructor', 'joshua-franklin-2', '2021-12-21 00:58:16', '2021-12-28 06:41:41');

-- --------------------------------------------------------

--
-- Table structure for table `image_uploads`
--

CREATE TABLE `image_uploads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_uploads`
--

INSERT INTO `image_uploads` (`id`, `filename`, `created_at`, `updated_at`) VALUES
(403, 'images/logo.png', '2020-04-12 17:10:24', '2020-04-12 17:10:24'),
(694, 'images/61bf8e6aebd8e(30).png', '2021-12-20 03:56:26', '2021-12-20 03:56:26'),
(730, 'images/61c85feac6989fitt-chart.png', '2021-12-26 20:28:26', '2021-12-26 20:28:26'),
(731, 'images/61ca3eb94f79dindex.png', '2021-12-28 06:31:21', '2021-12-28 06:31:21'),
(732, 'images/61ca3ecd353ccindex.png', '2021-12-28 06:31:41', '2021-12-28 06:31:41'),
(733, 'images/61ca3eda4da98index.png', '2021-12-28 06:31:54', '2021-12-28 06:31:54'),
(734, 'images/61ca3ee423b1bindex.png', '2021-12-28 06:32:04', '2021-12-28 06:32:04'),
(735, 'images/61ca3eef77baeindex.png', '2021-12-28 06:32:15', '2021-12-28 06:32:15'),
(736, 'images/61ca3efb43871index.png', '2021-12-28 06:32:27', '2021-12-28 06:32:27'),
(737, 'images/61ca3f233fb73index.png', '2021-12-28 06:33:07', '2021-12-28 06:33:07'),
(738, 'images/61ca3f2e3371findex.png', '2021-12-28 06:33:18', '2021-12-28 06:33:18'),
(739, 'images/61ca3f3b6a90eindex.png', '2021-12-28 06:33:31', '2021-12-28 06:33:31'),
(740, 'images/61ca3f48c26f0index.png', '2021-12-28 06:33:44', '2021-12-28 06:33:44'),
(741, 'images/61ca3f55adfb2index.png', '2021-12-28 06:33:57', '2021-12-28 06:33:57'),
(742, 'images/61ca3f6bb613aindex.png', '2021-12-28 06:34:19', '2021-12-28 06:34:19'),
(743, 'images/61ca3f77871baindex.png', '2021-12-28 06:34:31', '2021-12-28 06:34:31'),
(744, 'images/61ca3f8278a7dindex.png', '2021-12-28 06:34:42', '2021-12-28 06:34:42'),
(745, 'images/61ca3fa846adaindex.png', '2021-12-28 06:35:20', '2021-12-28 06:35:20'),
(746, 'images/61ca3ff887928index.png', '2021-12-28 06:36:40', '2021-12-28 06:36:40'),
(747, 'images/61ca400c4fdfcindex.png', '2021-12-28 06:37:00', '2021-12-28 06:37:00'),
(748, 'images/61ca40249b9b8index.png', '2021-12-28 06:37:24', '2021-12-28 06:37:24'),
(749, 'images/61ca403e6b468index.png', '2021-12-28 06:37:50', '2021-12-28 06:37:50'),
(750, 'images/61ca404a8a4d8index.png', '2021-12-28 06:38:02', '2021-12-28 06:38:02'),
(751, 'images/61ca405a2b9a3index.png', '2021-12-28 06:38:18', '2021-12-28 06:38:18'),
(752, 'images/61ca407a78115index.png', '2021-12-28 06:38:50', '2021-12-28 06:38:50'),
(753, 'images/61ca408515f26index.png', '2021-12-28 06:39:01', '2021-12-28 06:39:01'),
(754, 'images/61ca408feb891index.png', '2021-12-28 06:39:11', '2021-12-28 06:39:11'),
(755, 'images/61ca40a345631index.png', '2021-12-28 06:39:31', '2021-12-28 06:39:31'),
(756, 'images/61ca40b23ee2bindex.png', '2021-12-28 06:39:46', '2021-12-28 06:39:46'),
(757, 'images/61ca40bd89dc3index.png', '2021-12-28 06:39:57', '2021-12-28 06:39:57'),
(758, 'images/61ca40f58af5findex.png', '2021-12-28 06:40:53', '2021-12-28 06:40:53'),
(759, 'images/61ca410235e28index.png', '2021-12-28 06:41:06', '2021-12-28 06:41:06'),
(760, 'images/61ca410b5a873index.png', '2021-12-28 06:41:15', '2021-12-28 06:41:15'),
(761, 'images/61ca411359db5index.png', '2021-12-28 06:41:23', '2021-12-28 06:41:23'),
(762, 'images/61ca411bc4e9eindex.png', '2021-12-28 06:41:31', '2021-12-28 06:41:31'),
(763, 'images/61ca4123f098aindex.png', '2021-12-28 06:41:39', '2021-12-28 06:41:39'),
(764, 'images/61ca41447ec4bindex.png', '2021-12-28 06:42:12', '2021-12-28 06:42:12'),
(765, 'images/61ca4298900c3index.png', '2021-12-28 06:47:52', '2021-12-28 06:47:52');

-- --------------------------------------------------------

--
-- Table structure for table `instagrams`
--

CREATE TABLE `instagrams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title_ar` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Title_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Title_fr` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_ar` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_fr` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ImageUpload_id` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instagrams`
--

INSERT INTO `instagrams` (`id`, `Title_ar`, `Title_en`, `Title_fr`, `body_ar`, `body_en`, `body_fr`, `ImageUpload_id`, `slug`, `sku`, `price`, `created_at`, `updated_at`) VALUES
(20, 'قمة ملونة', 'Colored Top.', 'Colored Top.', NULL, 'Colored Top ON is legendary for setting higher standards for ease of mixing, consistently great taste and uncompromising ingredient quality. This durable shaker cup makes those qualities even easier to appreciate.', NULL, '746', 'colored-top', NULL, NULL, '2021-12-25 19:45:19', '2021-12-28 06:36:42'),
(21, 'كوب شاكر للتغذية المثالية', 'OPTIMUM NUTRITION SHAKER CUP', 'OPTIMUM NUTRITION SHAKER CUP', NULL, 'OPTIMUM NUTRITION SHAKER CUP', NULL, '747', 'optimum-nutrition-shaker-cup', NULL, NULL, '2021-12-25 19:46:11', '2021-12-28 06:37:03'),
(22, 'توب أبيض اللون', 'White Colored Top.', 'White Colored Top.', NULL, 'White Colored Top.', NULL, '748', 'white-colored-top', NULL, NULL, '2021-12-25 19:47:20', '2021-12-28 06:37:26'),
(23, 'توب هوم جيم ملون', 'Home Gym Colored Top.', 'Home Gym Colored Top.', NULL, 'Home Gym Colored Top.', NULL, '749', 'home-gym-colored-top', NULL, NULL, '2021-12-25 19:48:10', '2021-12-28 06:37:53'),
(24, 'قمة البروتين الملونة', 'Protein Colored Top.', 'Protein Colored Top.', NULL, 'Protein Colored Top.', NULL, '750', 'protein-colored-top', NULL, NULL, '2021-12-25 19:49:21', '2021-12-28 06:38:07'),
(25, 'أمين أساسي طاقة', 'ESSENTIAL AMIN ENERGY', 'ESSENTIAL AMIN.O. ENERGY', NULL, 'ESSENTIAL AMIN.O. ENERGY', NULL, '751', 'essential-amin-energy', NULL, NULL, '2021-12-25 19:50:32', '2021-12-28 06:38:21');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `Title`, `created_at`, `updated_at`) VALUES
(1, 'Main-menu', '2020-01-02 11:39:50', '2020-01-02 11:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` int(11) DEFAULT 0,
  `order` int(11) DEFAULT 0,
  `Title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Title_fr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `order`, `Title_en`, `Title_ar`, `Title_fr`, `url`, `target`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Home', 'الصفحة الرئيسية', 'Accueil', '/', '_self', '2020-01-13 10:48:19', '2020-01-13 10:48:19'),
(24, 1, 1, 'About Us', 'معلومات عنا', 'About Us', 'About', '_self', '2021-12-20 04:43:25', '2021-12-20 04:43:25'),
(25, 1, 1, 'Workouts', 'التدريبات', 'Workouts', 'Fitness', '_self', '2021-12-20 04:44:20', '2021-12-20 04:44:20'),
(26, 1, 1, 'Shops', 'المنتجات', 'Shops', 'Shops', '_self', '2021-12-20 04:45:01', '2021-12-20 04:45:01'),
(27, 1, 1, 'OurTeams', 'المدربين', 'OurTeams', 'OurTeams', '_self', '2021-12-20 04:45:48', '2021-12-20 04:45:48'),
(28, 1, 1, 'Blogs', 'المدونات', 'Blogs', 'Blogs', '_self', '2021-12-20 04:46:12', '2021-12-20 04:46:12'),
(29, 1, 1, 'Contact Us', 'للتواصل معنا', 'Contact Us', 'Contact_us', '_self', '2021-12-21 01:32:43', '2021-12-21 01:32:43');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Subject` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `User_id` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_09_143619_create_permission_tables', 2),
(5, '2016_09_13_070520_add_verification_to_user_table', 3),
(6, '2014_10_12_000000_create_users_table', 4),
(7, '2019_12_29_153111_create_image_uploads_table', 5),
(8, '2019_12_30_141843_create_posts_table', 6),
(9, '2019_12_30_142016_create_categories_table', 7),
(10, '2019_12_30_142116_create_clients_table', 7),
(11, '2019_12_30_142137_create_ad_senses_table', 7),
(12, '2019_12_30_142156_create_menus_table', 7),
(13, '2019_12_30_142250_create_menu_items_table', 7),
(14, '2019_12_30_142326_create_galleries_table', 7),
(15, '2019_12_30_142339_create_instagrams_table', 7),
(16, '2019_12_30_142418_create_messages_table', 7),
(17, '2019_12_30_170524_create_comments_table', 8),
(18, '2019_12_30_171111_create_menu_items_table', 9),
(19, '2017_03_03_100000_create_options_table', 10),
(20, '2020_04_14_162242_create_audio_table', 11),
(21, '2020_05_23_143348_create_books_table', 12),
(22, '2020_06_02_161756_create_favourites_table', 13),
(23, '2014_10_12_200000_add_two_factor_columns_to_users_table', 14),
(24, '2019_12_14_000001_create_personal_access_tokens_table', 14),
(25, '2021_03_31_085137_create_sessions_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(31, 'App\\User', 50);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(30, 'App\\User', 50),
(30, 'App\\User', 52),
(34, 'App\\User', 50),
(34, 'App\\User', 51),
(34, 'App\\User', 61),
(34, 'App\\User', 64),
(34, 'App\\User', 65),
(34, 'App\\User', 66),
(34, 'App\\User', 67),
(34, 'App\\User', 68),
(35, 'App\\User', 61),
(35, 'App\\User', 64),
(35, 'App\\User', 65),
(35, 'App\\User', 66),
(35, 'App\\User', 67),
(35, 'App\\User', 68);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `key`, `value`) VALUES
(2, 'Home_fr', '\"Gym - Fitness Trainer and Gym Script Template is a champ in providing its users with absolutely everything a fitness or gym site needs.\"'),
(3, 'Home_ar', '\"المكان الرياضى المثالى للعب فى افضل الاماكن المميزه فى الجيم القالب كامل\"'),
(4, 'Home_en', '\"Gym - Fitness Trainer and Gym Script Template Gym - Fitness Trainer and Gym Script Template.\"'),
(5, 'Favicon', '\"images\\/61bf8e6aebd8e(30).png\"'),
(8, 'youtube', '\"www.youtube.com\"'),
(9, 'GitHub', '\"https:github.com\"'),
(10, 'Twitter', '\"https:twitter.com\"'),
(11, 'Pinterest', '\"www.facebook.com\"'),
(12, 'Tumblr', '\"www.tumblr.com\"'),
(13, 'Snapchat', '\"www.snapchat.com\"'),
(14, 'LinkedIn', '\"https:\\/\\/www.linkedin.com\"'),
(15, 'Instagram', '\"https:\\/\\/www.instagram.com\"'),
(16, 'Facebook', '\"https:\\/\\/www.facebook.com\"'),
(17, 'MetaKeyWords', '\"fitness theme for sports, Gym, Training, martial arts, multi martial arts MMA, bodybuilding, fitness courses, fitness trainers, cardio trainers.Ideal for promoting healthy living & active lifestyle, gym, personal trainers, fitness and health coaching, Fitness centers, indoor and outdoor exercise class, sports clubs, diet and nutrition.\"'),
(18, 'MetaDescription', '\"fitness theme for sports, Gym, Training, martial arts, multi martial arts MMA, bodybuilding, fitness courses, fitness trainers, cardio trainers.Ideal for promoting healthy living & active lifestyle, gym, personal trainers, fitness and health coaching, Fitness centers, indoor and outdoor exercise class, sports clubs, diet and nutrition.\"'),
(19, 'video', '\"video\"'),
(20, 'Googlemap', '\"Googlemap\"'),
(21, 'Email', '\"HelloFitness@gmail.com\"'),
(22, 'PhoneNumber', '\"002-99-88-541\"'),
(23, 'Address', '\"3891 Ranchview Dr. Richardson, California 62639\"'),
(24, 'SiteTitle', '\"Fitness\"'),
(25, 'Language', '\"on\"'),
(28, 'Metaauthor', '\"fitness theme for sports, Gym, Training, martial arts, multi martial arts MMA, bodybuilding, fitness courses, fitness trainers, cardio trainers.Ideal for promoting healthy living & active lifestyle, gym, personal trainers, fitness and health coaching, Fitness centers, indoor and outdoor exercise class, sports clubs, diet and nutrition.\"'),
(29, 'Metarobots', '\"fitness theme for sports, Gym, Training, martial arts, multi martial arts MMA, bodybuilding, fitness courses, fitness trainers, cardio trainers.Ideal for promoting healthy living & active lifestyle, gym, personal trainers, fitness and health coaching, Fitness centers, indoor and outdoor exercise class, sports clubs, diet and nutrition.\"'),
(30, 'coveruser', '\"images\\/61ca4298900c3index.png\"'),
(31, 'Server', '\"www.site.com:2082\"'),
(32, 'covernew', '\"images\\/61ca4298900c3index.png\"'),
(33, 'coverMessage', '\"images\\/61ca4298900c3index.png\"'),
(34, 'coverAdSense', '\"images\\/61ca4298900c3index.png\"'),
(35, 'coverInstagrams', '\"images\\/61ca4298900c3index.png\"'),
(36, 'coverSettings', '\"images\\/61ca4298900c3index.png\"'),
(37, 'logo', '\"images/logo.png\"'),
(39, 'Book_background', '\"images\\/61ca4298900c3index.png\"');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@admin.com', '$2y$10$bui5fl4azCrQhE2fjJQ6YOvAdyRJHXJVsJeAYuVLNWOGWCl9QFXM2', '2019-12-09 14:13:59');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(31, 'edit articles', 'web', '2020-01-04 14:37:28', '2020-01-04 14:37:28'),
(35, 'User', 'web', '2020-01-04 16:05:35', '2020-01-04 16:05:35'),
(36, 'Coaches', 'web', '2021-12-19 01:23:04', '2021-12-19 01:23:04');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `Title_ar` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Title_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Title_fr` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_ar` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_fr` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ImageUpload_id` int(11) DEFAULT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT 'out',
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `days` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `movements` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `liters` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tools` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `Title_ar`, `Title_en`, `Title_fr`, `body_ar`, `body_en`, `body_fr`, `ImageUpload_id`, `slug`, `meta_description`, `meta_keywords`, `featured`, `time`, `type`, `price`, `days`, `movements`, `liters`, `supplement`, `tools`, `pdf_file`, `video`, `created_at`, `updated_at`) VALUES
(157, 52, 80, 'قوة الجزء العلوي من الجسم', 'Strength Upper Body', 'Strength Upper Body', 'منطقة اللياقة البدنية وورد موضوع العضلات للاتجاه الحديث ، صالات رياضية ، نادي رياضي أو مراكز لياقة بدنية ومواقع مدرب شخصي! تصميم سريع الاستجابة يبدو رائعًا على الأجهزة المحمولة والأجهزة اللوحية.', 'Fitness Zone muscled for modern trend, gyms, sport club or fitness centres and personal trainer Websites! Fully responsive layout that looks great on mobile and tablet devices. Fitness theme comes with inbuilt drag and drop page builder you can make the website creation a whole lot easier.Functional Training, Yoga HIIT, Group Training, High-Intensity Interval Training. The best fitness theme for sports, Gym, Training, martial arts, multi martial arts MMA, bodybuilding, fitness courses, fitness trainers, cardio trainers.Ideal for promoting healthy living &amp; active lifestyle, gym, personal trainers, fitness and health coaching, Fitness centers, indoor and outdoor exercise class, sports clubs, diet and nutrition.', 'Fitness Zone muscled for modern trend, gyms, sport club or fitness centres and personal trainer Websites! Fully responsive layout that looks great on mobile and tablet devices.', 744, 'strength-upper-body', 'health coaching, Fitness', 'health coaching, Fitness centers, indoor', 'on', '20:30', 'health coaching', '$30', '20 Day', '504', '50 Liters', 'Protein + Energy + Weight gainers', 'Go Insta, get inspired', 'images/61c85feac6989fitt-chart.png', 'https://www.youtube.com/embed/XLExeeSi-vU', '2021-12-20 03:05:38', '2021-12-28 06:34:44'),
(158, 52, 80, 'فنون الدفاع عن النفس', 'Strength Upper Body Plus', 'Strength Upper Body Plus', 'تدريب وظيفي ، يوغا ، تدريب جماعي ، تدريب متقطع عالي الكثافة. أفضل موضوع للياقة البدنية للرياضة ، والجيم ، والتدريب ، وفنون الدفاع عن النفس ، وفنون القتال المتعددة ، وكمال الأجسام ، ودورات اللياقة البدنية ، ومدربي اللياقة البدنية ، ومدربين القلب. مثالية لتعزيز الحياة الصحية ونمط الحياة النشط ، وصالة الألعاب الرياضية ، والمدربين الشخصيين ، واللياقة البدنية والتدريب الصحي ، واللياقة البدنية مراكز ، وفصول تمارين داخلية وخارجية ، ونوادي رياضية  ونظام غذائي وتغذية.', 'Fitness Zone muscled for modern trend, gyms, sport club or fitness centres and personal trainer Websites! Fully responsive layout that looks great on mobile and tablet devices. Fitness theme comes with inbuilt drag and drop page builder you can make the website creation a whole lot easier.Functional Training, Yoga HIIT, Group Training, High-Intensity Interval Training. The best fitness theme for sports, Gym, Training, martial arts, multi martial arts MMA, bodybuilding, fitness courses, fitness trainers, cardio trainers.Ideal for promoting healthy living &amp; active lifestyle, gym, personal trainers, fitness and health coaching, Fitness centers, indoor and outdoor exercise class, sports clubs, diet and nutrition.', 'Fitness Zone theme muscled for modern trend, gyms, sport club or fitness centres and personal trainer Websites! Fully responsive layout that looks great on mobile and tablet devices. Fitness theme comes with inbuilt drag and drop page builder you can make the website creation a whole lot easier.', 743, 'strength-upper-body-plus', 'health coaching, Fitness', 'health coaching, Fitness centers, indoor', 'on', '20:30', 'health coaching', '$930', '20 Day', '504', '50 Liters', 'Protein + Energy + Weight gainers', 'Go Insta, get inspired', 'images/61c85feac6989fitt-chart.png', 'https://www.youtube.com/embed/XLExeeSi-vU', '2021-12-20 03:09:55', '2021-12-28 06:34:33'),
(159, 52, 81, 'مدربي اللياقة البدنية', 'Fitness Zone muscled for modern.', 'Fitness Zone muscled for modern.', 'تدريب وظيفي ، يوغا  تدريب جماعي ، تدريب متقطع عالي الكثافة. أفضل موضوع للياقة البدنية للرياضة ، والجيم ، والتدريب ، وفنون الدفاع عن النفس ، وفنون القتال المتعددة  وكمال الأجسام ، ودورات اللياقة البدنية ، ومدربي اللياقة البدنية ، ومدربين القلب. مثالية لتعزيز الحياة الصحية ونمط الحياة النشط ، وصالة الألعاب الرياضية ، والمدربين الشخصيين ، واللياقة البدنية والتدريب الصحي ، واللياقة البدنية مراكز ، وفصول تمارين داخلية وخارجية ، ونوادي رياضية  ونظام غذائي وتغذية.', 'Fitness Zone muscled for modern trend, gyms, sport club or fitness centres and personal trainer Websites! Fully responsive layout that looks great on mobile and tablet devices. Fitness theme comes with inbuilt drag and drop page builder you can make the website creation a whole lot easierFunctional Training, Yoga HIIT, Group Training, High-Intensity Interval Training. The best fitness theme for sports, Gym, Training, martial arts, multi martial arts MMA, bodybuilding, fitness courses, fitness trainers, cardio trainers.Ideal for promoting healthy living &amp; active lifestyle, gym, personal trainers, fitness and health coaching, Fitness centers, indoor and outdoor exercise class, sports clubs, diet and nutrition.Fitness features like BMI calculator, Class timetable, fitness appointments, Training programs and fitness equipment shop pages are provided. It also suits any fitness activity like aerobic, boxing, Cross fit, karate, dancing Websites.', 'Fitness Zone muscled for modern Functional Training, Yoga HIIT, Group Training, High-Intensity Interval Training. The best fitness theme for sports, Gym, Training, martial arts, multi martial arts MMA, bodybuilding, fitness courses, fitness trainers, cardio trainers.Ideal for promoting healthy living & active lifestyle, gym, personal trainers, fitness and health coaching, Fitness centers, indoor and outdoor exercise class, sports clubs, diet and nutrition.', 742, 'fitness-zone-muscled-for-modern', 'health coaching, Fitness', 'health coaching, Fitness centers, indoor', 'on', '20:30', 'health coaching', '$930', '20 Day', '504', '50 Liters', 'Protein + Energy + Weight gainers', 'Go Insta, get inspired', 'images/61c85feac6989fitt-chart.png', 'https://www.youtube.com/embed/XLExeeSi-vU', '2021-12-20 03:12:56', '2021-12-28 06:34:22'),
(160, 52, 81, 'الحياة الصحية ونمط الحياة النشط', 'Functional Training Programs', 'Functional Training Programs', 'مثالية لتعزيز الحياة الصحية ونمط الحياة النشط ، وصالة الألعاب الرياضية  والمدربين الشخصيين ، واللياقة البدنية والتدريب الصحي ، واللياقة البدنية مراكز ، وفصول تمارين داخلية وخارجية ، ونوادي رياضية ، ونظام غذائي وتغذية.', 'Fitness Zone muscled for modern trend, gyms, sport club or fitness centres and personal trainer Websites! Fully responsive layout that looks great on mobile and tablet devices. Fitness theme comes with inbuilt drag and drop page builder you can make the website creation a whole lot easier.Functional Training, Yoga HIIT, Group Training, High-Intensity Interval Training. The best fitness theme for sports, Gym, Training, martial arts, multi martial arts MMA, bodybuilding, fitness courses, fitness trainers, cardio trainers.Ideal for promoting healthy living &amp; active lifestyle, gym, personal trainers, fitness and health coaching, Fitness centers, indoor and outdoor exercise class, sports clubs, diet and nutrition.', 'Functional Training, Yoga Group Training, High-Intensity Interval Training. The best fitness theme for sports, Gym, Training, martial arts, multi martial arts bodybuilding, fitness courses, fitness trainers, cardio trainers.Ideal for promoting healthy living & active lifestyle, gym, personal trainers, fitness and health coaching, Fitness centers, indoor and outdoor exercise class, sports clubs, diet and nutrition.', 741, 'functional-training-programs', 'health coaching, Fitness', 'health coaching, Fitness centers, indoor', 'on', '10:30', 'health coaching', '$930', '120 Day', '504', '50 Liters', 'Protein + Energy + Weight gainers', 'Go Insta, get inspired', 'images/61c85feac6989fitt-chart.png', 'https://www.youtube.com/embed/XLExeeSi-vU', '2021-12-20 03:18:39', '2021-12-28 06:34:00'),
(161, 52, 82, 'متجر برامج التدريب ومعدات اللياقة البدنية', 'Training programs and fitness equipment shop.', 'Training programs and fitness equipment shop', 'وكمال الأجسام ، ودورات اللياقة البدنية ، ومدربي اللياقة البدنية ، ومدربين القلب. مثالية لتعزيز الحياة الصحية ونمط الحياة النشط ، وصالة الألعاب الرياضية ، والمدربين الشخصيين ، واللياقة البدنية والتدريب الصحي ، واللياقة البدنية مراكز ، ودروس تمارين داخلية وخارجية ، ونوادي رياضية ، ونظام غذائي وتغذية. يتم توفير ميزات اللياقة البدنية مثل حاسبة مؤشر كتلة الجسم ، وجدول الفصل الدراسي ، ومواعيد اللياقة البدنية ، وبرامج التدريب وصفحات متجر معدات اللياقة البدنية. كما أنه يناسب أي نشاط لياقة مثل مواقع الويب الهوائية والملاكمة وكروس اللياقة والكاراتيه والرقص', 'Fitness Zone muscled for modern trend, gyms, sport club or fitness centres and personal trainer Websites! Fully responsive layout that looks great on mobile and tablet devices. Fitness theme comes with inbuilt drag and drop page builder you can make the website creation a whole lot easier.Functional Training, Yoga HIIT, Group Training, High-Intensity Interval Training. The best fitness theme for sports, Gym, Training, martial arts, multi martial arts MMA, bodybuilding, fitness courses, fitness trainers, cardio trainers.Ideal for promoting healthy living &amp; active lifestyle, gym, personal trainers, fitness and health coaching, Fitness centers, indoor and outdoor exercise class, sports clubs, diet and nutrition.', 'Training programs and fitness equipment shop Functional Training, Yoga HIIT, Group Training, High-Intensity Interval Training. The best fitness theme for sports, Gym, Training, martial arts, multi martial arts MMA, bodybuilding, fitness courses, fitness trainers, cardio trainers.', 740, 'training-programs-and-fitness-equipment-shop', 'health coaching, Fitness', 'health coaching, Fitness centers, indoor', 'on', '30:30', 'Training programs', '$930', '60 Day (work Hard)', '504', '50 Liters', 'Protein + Energy + Weight gainers', 'Go Insta, get inspired', 'images/61c85feac6989fitt-chart.png', 'https://www.youtube.com/embed/XLExeeSi-vU', '2021-12-20 03:30:24', '2021-12-28 06:33:48'),
(162, 52, 86, NULL, 'Training programs and fitness shop.', 'Fitness cardio trainers', 'تدريب وظيفي  يوغا تدريب جماعي ، تدريب متقطع عالي الكثافة. أفضل موضوع للياقة البدنية للرياضة ، والجيم ، والتدريب ، وفنون الدفاع عن النفس ، وفنون القتال المتعددة  وكمال الأجسام  ودورات اللياقة البدنية ، ومدربي اللياقة البدنية ، ومدربين القلب.', 'Fitness Zone muscled for modern trend, gyms, sport club or fitness centres and personal trainer Websites! Fully responsive layout that looks great on mobile and tablet devices. Fitness theme comes with inbuilt drag and drop page builder you can make the website creation a whole lot easier.Functional Training, Yoga HIIT, Group Training, High-Intensity Interval Training. The best fitness theme for sports, Gym, Training, martial arts, multi martial arts MMA, bodybuilding, fitness courses, fitness trainers, cardio trainers.Ideal for promoting healthy living &amp; active lifestyle, gym, personal trainers, fitness and health coaching, Fitness centers, indoor and outdoor exercise class, sports clubs, diet and nutrition.', 'Functional Training, Yoga HIIT, Group Training, High-Intensity Interval Training. The best fitness theme for sports, Gym, Training, martial arts, multi martial arts MMA, bodybuilding, fitness courses, fitness trainers, cardio trainers.', 739, 'training-programs-and-fitness-shop', 'health coaching, Fitness', 'health coaching, Fitness centers, indoor', NULL, '60:30', 'health coaching', '$230', '60 Day (work Hard)', '504', '50 Liters', 'Protein + Energy + Weight gainers', 'Go Insta, get inspired', 'images/61c85feac6989fitt-chart.png', 'https://www.youtube.com/embed/XLExeeSi-vU', '2021-12-20 03:32:40', '2021-12-28 06:33:35'),
(163, 52, 82, 'دورات اللياقة البدنية', 'High-Intensity Interval Training.', 'High-Intensity Interval Training.', 'التدريب الوظيفي ، تدريب مجموعة اليوجا ، التدريب المتقطع عالي الكثافة. أفضل موضوع للياقة البدنية للرياضة ، والجيم ، والتدريب ، وفنون الدفاع عن النفس ، وكمال الأجسام متعدد الفنون القتالية ، ودورات اللياقة البدنية ، ومدربي اللياقة البدنية ، ومدربين القلب.', 'Fitness Zone muscled for modern trend, gyms, sport club or fitness centres and personal trainer Websites! Fully responsive layout that looks great on mobile and tablet devices. Fitness theme comes with inbuilt drag and drop page builder you can make the website creation a whole lot easier.Functional Training, Yoga HIIT, Group Training, High-Intensity Interval Training. The best fitness theme for sports, Gym, Training, martial arts, multi martial arts MMA, bodybuilding, fitness courses, fitness trainers, cardio trainers.Ideal for promoting healthy living &amp; active lifestyle, gym, personal trainers, fitness and health coaching, Fitness centers, indoor and outdoor exercise class, sports clubs, diet and nutrition.', 'Functional Training, Yoga Group Training, High-Intensity Interval Training. The best fitness theme for sports, Gym, Training, martial arts, multi martial arts bodybuilding, fitness courses, fitness trainers, cardio trainers.', 738, 'high-intensity-interval-training', 'health coaching, Fitness', 'health coaching, Fitness centers, indoor', NULL, '20:30', 'Training Programs', '$930', '60 Day (work Hard)', '504', '50 Liters', 'Protein + Energy + Weight gainers', 'Go Insta, get inspired', 'images/61c85feac6989fitt-chart.png', 'https://www.youtube.com/embed/XLExeeSi-vU', '2021-12-20 03:36:15', '2021-12-28 06:33:20'),
(164, 52, 86, 'مدربي اللياقة البدنية', 'indoor and outdoor exercise class.', 'indoor and outdoor exercise class', 'التدريب الوظيفي ، تدريب مجموعة اليوجا ، التدريب المتقطع عالي الكثافة. أفضل موضوع للياقة البدنية للرياضة ، والجيم ، والتدريب ، وفنون الدفاع عن النفس ، وكمال الأجسام متعدد الفنون القتالية ، ودورات اللياقة البدنية ، ومدربي اللياقة البدنية ، ومدربين القلب.', 'Fitness Zone muscled for modern trend, gyms, sport club or fitness centres and personal trainer Websites! Fully responsive layout that looks great on mobile and tablet devices. Fitness theme comes with inbuilt drag and drop page builder you can make the website creation a whole lot easier.Functional Training, Yoga HIIT, Group Training, High-Intensity Interval Training. The best fitness theme for sports, Gym, Training, martial arts, multi martial arts MMA, bodybuilding, fitness courses, fitness trainers, cardio trainers.Ideal for promoting healthy living &amp; active lifestyle, gym, personal trainers, fitness and health coaching, Fitness centers, indoor and outdoor exercise class, sports clubs, diet and nutrition.', 'indoor and outdoor exercise class Functional Training, Yoga Group Training, High-Intensity Interval Training. The best fitness theme for sports, Gym, Training, martial arts, multi martial arts bodybuilding, fitness courses, fitness trainers, cardio trainers.', 737, 'indoor-and-outdoor-exercise-class', 'health coaching, Fitness', 'health coaching, Fitness centers, indoor', NULL, '20:30', 'health coaching', '$930', '60 Day (work Hard)', '504', '50 Liters', 'Protein + Energy + Weight gainers', 'Go Insta, get inspired', 'images/61c85feac6989fitt-chart.png', 'https://www.youtube.com/embed/XLExeeSi-vU', '2021-12-20 03:38:35', '2021-12-28 06:33:10');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(30, 'Super-Admin', 'web', '2020-01-04 14:37:28', '2020-01-04 14:37:28'),
(34, 'User', 'web', '2020-01-04 16:05:35', '2020-01-04 16:05:35'),
(35, 'Coaches', 'web', '2021-12-19 01:23:03', '2021-12-19 01:23:03');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('XBgNhGoxtlXPrvP4fsS3fiNFx2F4cNVnc0OLV6Dd', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:96.0) Gecko/20100101 Firefox/96.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiT1k1c2JNcVlQN3ZxVUdMQW52ekVRdVMwRU1ieGV0NHpTRlJKOXh6eiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9lbiI7fXM6NjoibG9jYWxlIjtzOjI6ImVuIjt9', 1640645382);

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ImageUpload_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `ImageUpload_id`, `Phone`, `slug`, `remember_token`, `created_at`, `updated_at`) VALUES
(52, 'Fitness', 'Dashbourd@Fitness.com', NULL, '$2y$10$H8e2jZWncnLtYvmbLp9N6e8QNM68hDJn4JeFojy/FxCk4clYt.0P2', NULL, NULL, '764', '222-99-88', 'Fitness', 'kBFo2zPTn9KVfwAGRZMVUiKCTs5YQSpPbYXehG83pdggV8aSmuzDsm09LvgI', '2020-07-01 11:40:52', '2021-12-28 06:42:32'),
(61, 'Madison Froning', 'Froning@Fitness.com', NULL, '$2y$10$qwgJXM7A.EfUBgOe7h3yM.XBmymIBHnFRlaBaop3h136FVhtshmg2', NULL, NULL, '736', '666-88-721', 'Fitness2', NULL, '2021-12-19 21:58:31', '2021-12-28 06:32:30'),
(64, 'Madison Froning', 'Froning@Fitness.com', NULL, '$2y$10$JBocxNWYpUfhkn0qKFd8Ae/WCol9.E7h8B5Pc7Fl1OPEVGPWgNDbu', NULL, NULL, '735', '3434-879789', 'Fitness5', NULL, '2021-12-19 22:04:10', '2021-12-28 06:32:19'),
(65, 'McGuir', 'McGuirs@Fitness.com', NULL, '$2y$10$3erZFV6khBErwbLEVWnfXOJPe3kbgj.25l7CjLStn.MCwfnI7jIv.', NULL, NULL, '734', '666-88-721', 'Fitness6', NULL, '2021-12-19 22:05:25', '2021-12-28 06:32:07'),
(66, 'Madison Froning', 'Froning@Fitness.com', NULL, '$2y$10$65tteEt37XI0pbpw./7D9OZUeuqo12sueiGqb.eaYZRzSBJsMbqby', NULL, NULL, '733', '666-88-721', 'madison-froning', NULL, '2021-12-20 00:34:45', '2021-12-28 06:31:56'),
(67, 'Madison Froning', 'CrossfitMadison@Fitness.com', NULL, '$2y$10$JUNnImUEg0VKF5rmIe97G.B5IiWTGC5z.et2oD2N0RIZGjGNTHKCm', NULL, NULL, '732', '3434-879789', 'madison-froning-2', NULL, '2021-12-20 00:36:50', '2021-12-28 06:31:44'),
(68, 'McGuir adam', 'McGuiradam@Fitness.com', NULL, '$2y$10$4NO28A1MM44IqOFe6rVCXeSbiRsYuE8r1qKxKtDTYwPlngXqJ.P7a', NULL, NULL, '731', '85555-99902', 'mcguir-adam', NULL, '2021-12-20 00:37:38', '2021-12-28 06:31:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad_senses`
--
ALTER TABLE `ad_senses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_uploads`
--
ALTER TABLE `image_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instagrams`
--
ALTER TABLE `instagrams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `options_key_unique` (`key`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad_senses`
--
ALTER TABLE `ad_senses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `image_uploads`
--
ALTER TABLE `image_uploads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=766;

--
-- AUTO_INCREMENT for table `instagrams`
--
ALTER TABLE `instagrams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
