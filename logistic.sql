-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2024 at 10:33 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logistic`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'uploads/sliders/aamar-alshrk-llastsharat-alhndsy-en-2024-10-27-07-10-02-8239.png', '2024-09-27 10:43:22', '2024-10-27 16:10:02');

-- --------------------------------------------------------

--
-- Table structure for table `about_translations`
--

CREATE TABLE `about_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_translations`
--

INSERT INTO `about_translations` (`id`, `about_id`, `locale`, `title`, `short_description`, `description`, `created_at`, `updated_at`, `sub_title`) VALUES
(1, 1, 'en', 'عمارة الشرق للاستشارات الهندسية en', 'لم تكن مسيرة شركة عمارة الشرق للتطوير والاستثمـار العقاري وليدة لحظة التــأسيس، بل هي ممتـدة عبــر زمن يتجاوز 40 عاماً من خـبرات مؤسسيهــا في مجــال العقار والاستثمـــار العقـاري وصولاً إلى التطــوير الذي واكب النهضة العمرانية التي تشهدها المملكة العربية السعـــودية، بقيــادة خادم الحرمين الشريفين وسمو ولي العهد تحقيقاً لأهداف رؤية 2030 en', '<table style=\"border-collapse: collapse; width: 100.384%; height: 159px; float: left;\" border=\"0\" cellpadding=\"3\">\r\n<tbody>\r\n<tr style=\"height: 47px;\">\r\n<td style=\"width: 8.78004%; text-align: left; height: 43px;\"><img src=\"https://cdn-icons-png.flaticon.com/128/14025/14025002.png\" alt=\"\" width=\"30\" height=\"30\" /></td>\r\n<td style=\"width: 91.22%; text-align: left; height: 43px;\">نواكب النهضة والتطور العمراني الذي تشهدها المملكة العربية السعـــودية.</td>\r\n</tr>\r\n<tr style=\"text-align: left;\">\r\n<td style=\"width: 8.78004%; text-align: left; height: 40px;\"><img src=\"https://cdn-icons-png.flaticon.com/128/14025/14025002.png\" alt=\"\" width=\"30\" height=\"30\" /></td>\r\n<td style=\"width: 91.22%; text-align: left; height: 40px;\">إيجاد فرص حقيقية للاستثمار العقاري.</td>\r\n</tr>\r\n<tr style=\"height: 33px;\">\r\n<td style=\"width: 8.78004%; text-align: left; height: 39px;\"><img src=\"https://cdn-icons-png.flaticon.com/128/14025/14025002.png\" alt=\"\" width=\"30\" height=\"30\" /></td>\r\n<td style=\"width: 91.22%; text-align: left; height: 39px;\">إيجاد فرص حقيقية للاستثمار العقاري.</td>\r\n</tr>\r\n<tr style=\"height: 35px;\">\r\n<td style=\"width: 8.78004%; text-align: left; height: 37px;\"><img src=\"https://cdn-icons-png.flaticon.com/128/14025/14025002.png\" alt=\"\" width=\"30\" height=\"30\" /></td>\r\n<td style=\"width: 91.22%; text-align: left; height: 37px;\">إيجاد فرص حقيقية للاستثمار العقاري.</td>\r\n</tr>\r\n</tbody>\r\n</table>', NULL, NULL, NULL),
(2, 1, 'ar', 'عمارة الشرق للاستشارات الهندسية', 'لم تكن مسيرة شركة عمارة الشرق للتطوير والاستثمـار العقاري وليدة لحظة التــأسيس، بل هي ممتـدة عبــر زمن يتجاوز 40 عاماً من خـبرات مؤسسيهــا في مجــال العقار والاستثمـــار العقـاري وصولاً إلى التطــوير الذي واكب النهضة العمرانية التي تشهدها المملكة العربية السعـــودية، بقيــادة خادم الحرمين الشريفين وسمو ولي العهد تحقيقاً لأهداف رؤية 2030', '<p>&nbsp;</p>\r\n<table style=\"border-collapse: collapse; width: 96.8954%; height: 162px;\" border=\"0\" cellpadding=\"3\">\r\n<tbody>\r\n<tr style=\"height: 46px;\">\r\n<td style=\"width: 5.47059%; text-align: right; height: 46px;\"><img src=\"https://cdn-icons-png.flaticon.com/128/14025/14025002.png\" alt=\"\" width=\"30\" height=\"30\" /></td>\r\n<td style=\"width: 84.825%; text-align: right; height: 46px;\">نواكب النهضة والتطور العمراني الذي تشهدها المملكة العربية السعـــودية.</td>\r\n</tr>\r\n<tr style=\"height: 36px;\">\r\n<td style=\"width: 5.47059%; text-align: right; height: 36px;\"><img src=\"https://cdn-icons-png.flaticon.com/128/14025/14025002.png\" alt=\"\" width=\"30\" height=\"30\" /></td>\r\n<td style=\"width: 84.825%; text-align: right; height: 36px;\">إيجاد فرص حقيقية للاستثمار العقاري.</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"width: 5.47059%; text-align: right; height: 39px;\"><img src=\"https://cdn-icons-png.flaticon.com/128/14025/14025002.png\" alt=\"\" width=\"30\" height=\"30\" /></td>\r\n<td style=\"width: 84.825%; text-align: right; height: 39px;\">إيجاد فرص حقيقية للاستثمار العقاري.</td>\r\n</tr>\r\n<tr style=\"height: 41px;\">\r\n<td style=\"width: 5.47059%; text-align: right; height: 41px;\"><img src=\"https://cdn-icons-png.flaticon.com/128/14025/14025002.png\" alt=\"\" width=\"30\" height=\"30\" /></td>\r\n<td style=\"width: 84.825%; text-align: right; height: 41px;\">إيجاد فرص حقيقية للاستثمار العقاري.</td>\r\n</tr>\r\n</tbody>\r\n</table>', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `phone`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '0123456789', '$2y$10$Dbb3iPYHRu2ayLag0qKKoufkMugnEIA.cBGWaBfRRg7jppxmQo3jG', NULL, '2024-09-23 17:03:13', '2024-09-23 17:03:13');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'uploads/blogs/sed-aspernatur-conse-2024-10-29-08-16-40-6522.png', '2024-10-29 17:16:40', '2024-10-29 17:16:40');

-- --------------------------------------------------------

--
-- Table structure for table `blog_translations`
--

CREATE TABLE `blog_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_translations`
--

INSERT INTO `blog_translations` (`id`, `blog_id`, `locale`, `title`, `short_description`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'تعمل المراكز اللوجستية على تمكين نمو الأعمال وتوسيع', 'تعمل المراكز اللوجستية على تمكين نمو الأعمال وتوسيع الاستثمارات و زيادة ضخ الإيرادات وتم ذلك بتدشين 59 منطقة لوجستية', '<p>تعمل المراكز اللوجستية على تمكين نمو الأعمال وتوسيع الاستثمارات و زيادة ضخ الإيرادات وتم ذلك بتدشين 59 منطقة لوجستية</p>', NULL, NULL),
(2, 1, 'ar', 'تعمل المراكز اللوجستية على تمكين نمو الأعمال وتوسيع', 'تعمل المراكز اللوجستية على تمكين نمو الأعمال وتوسيع الاستثمارات و زيادة ضخ الإيرادات وتم ذلك بتدشين 59 منطقة لوجستية', '<p>تعمل المراكز اللوجستية على تمكين نمو الأعمال وتوسيع الاستثمارات و زيادة ضخ الإيرادات وتم ذلك بتدشين 59 منطقة لوجستية</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countrs`
--

CREATE TABLE `countrs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countrs`
--

INSERT INTO `countrs` (`id`, `image`, `number`, `created_at`, `updated_at`) VALUES
(1, 'uploads/counters/aamyl-saayd-2024-09-24-12-38-56-8277.png', '+30000 K', '2024-09-24 09:38:56', '2024-09-27 10:17:26'),
(14, 'uploads/counters/ohd-skny-2024-09-27-01-21-39-1633.png', '+10000', '2024-09-27 10:21:39', '2024-09-27 10:21:39'),
(15, 'uploads/counters/khbr-balsok-2024-10-27-06-51-08-3154.png', '+300', '2024-09-27 10:22:18', '2024-10-27 15:51:08');

-- --------------------------------------------------------

--
-- Table structure for table `countr_translations`
--

CREATE TABLE `countr_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `countr_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countr_translations`
--

INSERT INTO `countr_translations` (`id`, `countr_id`, `locale`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'عميل سعيد', NULL, NULL),
(2, 1, 'ar', 'عميل سعيد', NULL, NULL),
(27, 14, 'en', 'وحدة سكنية', NULL, NULL),
(28, 14, 'ar', 'وحدة سكنية', NULL, NULL),
(29, 15, 'en', 'خبرة بالسوق', NULL, NULL),
(30, 15, 'ar', 'خبرة بالسوق', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_rates`
--

CREATE TABLE `customer_rates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rate` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_rates`
--

INSERT INTO `customer_rates` (`id`, `rate`, `image`, `created_at`, `updated_at`) VALUES
(1, 5, 'uploads/rates/bg-2024-09-29-02-16-42-7245.png', '2024-09-29 11:16:42', '2024-09-30 03:12:48'),
(5, 4, 'uploads/rates/bg-2024-09-30-06-12-08-2708.png', '2024-09-30 03:12:08', '2024-09-30 03:12:08'),
(6, 3, 'uploads/rates/bg-2024-09-30-06-12-22-9511.png', '2024-09-30 03:12:22', '2024-09-30 03:12:22'),
(7, 2, 'uploads/rates/bg-2024-09-30-06-12-43-1095.png', '2024-09-30 03:12:43', '2024-09-30 03:12:43');

-- --------------------------------------------------------

--
-- Table structure for table `customer_rate_translations`
--

CREATE TABLE `customer_rate_translations` (
  `customer_rate_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `comment` text DEFAULT NULL,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_rate_translations`
--

INSERT INTO `customer_rate_translations` (`customer_rate_id`, `locale`, `title`, `comment`, `id`) VALUES
(1, 'en', 'Ahmed Ramadan', 'العقار ليس فقط مكان للسكن لكن أيضاً أداة من أدوات الاستثمار، لذا تهتم المؤشر للتطوير العقاري بدراسة واختيار أفضل المواقع التي تناسب شريحة العملاء المستهدفة معتمدة في.en', 1),
(1, 'ar', 'Ahmed', 'العقار ليس فقط مكان للسكن لكن أيضاً أداة من أدوات الاستثمار، لذا تهتم المؤشر للتطوير العقاري بدراسة واختيار أفضل المواقع التي تناسب شريحة العملاء المستهدفة معتمدة في.', 2),
(5, 'en', 'Omer', 'العقار ليس فقط مكان للسكن لكن أيضاً أداة من أدوات الاستثمار، لذا تهتم المؤشر للتطوير العقاري بدراسة واختيار أفضل المواقع التي تناسب شريحة العملاء المستهدفة معتمدة في.en', 3),
(5, 'ar', 'Omer ali', 'العقار ليس فقط مكان للسكن لكن أيضاً أداة من أدوات الاستثمار، لذا تهتم المؤشر للتطوير العقاري بدراسة واختيار أفضل المواقع التي تناسب شريحة العملاء المستهدفة معتمدة في.', 4),
(6, 'en', 'Illum autem quis es', 'Illum eaque aute as', 5),
(6, 'ar', 'Irure voluptates nos', 'Sapiente libero at s', 6),
(7, 'en', 'Cum', 'Perferendis est dolo', 7),
(7, 'ar', 'Laborum', 'Non sint iure molli', 8);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `created_at`, `updated_at`) VALUES
(1, '2024-10-31 07:46:16', '2024-10-31 07:46:16'),
(3, '2024-10-31 07:47:38', '2024-10-31 07:47:38');

-- --------------------------------------------------------

--
-- Table structure for table `faq_translations`
--

CREATE TABLE `faq_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faq_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq_translations`
--

INSERT INTO `faq_translations` (`id`, `faq_id`, `locale`, `question`, `answer`) VALUES
(1, 1, 'en', 'لماذا تختارنا نحن؟en', 'تعمل المراكز اللوجستية على تمكين نمو الأعمال وتوسيع الاستثمارات و زيادة ضخ الإيرادات وتم ذلك بتدشين 59 منطقة لوجستيةen'),
(2, 1, 'ar', 'لماذا تختارنا نحن؟', 'تعمل المراكز اللوجستية على تمكين نمو الأعمال وتوسيع الاستثمارات و زيادة ضخ الإيرادات وتم ذلك بتدشين 59 منطقة لوجستية'),
(5, 3, 'en', 'Non ad labore eos qu', 'Reiciendis perspicia'),
(6, 3, 'ar', 'Quod voluptatem quod', 'Quo quas commodi sun');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `image`, `created_at`, `updated_at`, `type`) VALUES
(1, 'uploads/features/daam-alttor-alaamrany-en-2024-10-31-11-49-09-4999.png', '2024-10-01 08:02:53', '2024-10-31 08:49:09', 'values'),
(3, 'uploads/features/tlby-ahtyagat-mkhtlf-alshrayh-alagtmaaayen-2024-10-31-11-49-18-7475.png', '2024-10-01 08:04:07', '2024-10-31 08:49:18', 'values');

-- --------------------------------------------------------

--
-- Table structure for table `feature_translations`
--

CREATE TABLE `feature_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `feature_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feature_translations`
--

INSERT INTO `feature_translations` (`id`, `feature_id`, `locale`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'دعم التطور العمراني en', 'المشاركة في دعم التطور العمراني وتحسين المـظهر الحضــاري للـمــــــدن وتوظيــفه في المنتجــات السكنية en', NULL, NULL),
(2, 1, 'ar', 'دعم التطور العمراني', 'المشاركة في دعم التطور العمراني وتحسين المـظهر الحضــاري للـمــــــدن وتوظيــفه في المنتجــات السكنية', NULL, NULL),
(5, 3, 'en', 'نقل الشحنة', 'بناء فلل وشقق سـكــنية لــــعدد من المدن والمحافظــات في أرجاء المملكة لتلبية احتياجــــات مختلــف الشرائح الاجتماعيةen', NULL, NULL),
(6, 3, 'ar', 'نقل الشحنة', 'بناء فلل وشقق سـكــنية لــــعدد من المدن والمحافظــات في أرجاء المملكة لتلبية احتياجــــات مختلــف الشرائح الاجتماعية', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `how_works`
--

CREATE TABLE `how_works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `how_works`
--

INSERT INTO `how_works` (`id`, `image`, `created_at`, `updated_at`) VALUES
(4, 'uploads/how-works/-2024-10-01-12-51-44-9352.png', '2024-10-01 09:51:44', '2024-10-01 09:51:44'),
(5, 'uploads/how-works/-2024-10-28-04-53-40-7689.png', '2024-10-01 09:52:29', '2024-10-28 13:53:40');

-- --------------------------------------------------------

--
-- Table structure for table `how_works_translations`
--

CREATE TABLE `how_works_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `how_work_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `how_works_translations`
--

INSERT INTO `how_works_translations` (`id`, `how_work_id`, `locale`, `title`, `description`) VALUES
(1, 4, 'en', 'البحث المعمقen', 'بعد دراسة جميع المشاريع المقدمة ، يتم اتخاذ القرار بناءاً على معاييــر  دقيقــــة جداً ترجع لمميـــــزات المشروع وموقعه ومدى أهميتــــه بالنسبــــة للمشاريــــع التجاريـــــة ليكون محط أنظار لكل الشركــات التي تبحــث عن  واجهة مميزة لها .en'),
(2, 4, 'ar', 'البحث المعمق', 'بعد دراسة جميع المشاريع المقدمة ، يتم اتخاذ القرار بناءاً على معاييــر  دقيقــــة جداً ترجع لمميـــــزات المشروع وموقعه ومدى أهميتــــه بالنسبــــة للمشاريــــع التجاريـــــة ليكون محط أنظار لكل الشركــات التي تبحــث عن  واجهة مميزة لها .'),
(3, 5, 'en', 'التحليلen', 'يقوم فريق عمارة الشرق بتحليل المشاريع بشكل مفصل ، من حيث الموقـع  وأهميتـــه ومدى قرب المرافــق الحيويـــة منه ، ويطلــب وثائـــق متعلقة بالمشروع  وتفاصيـل دقيقة عنه .en'),
(4, 5, 'ar', 'التحليل', 'يقوم فريق عمارة الشرق بتحليل المشاريع بشكل مفصل ، من حيث الموقـع  وأهميتـــه ومدى قرب المرافــق الحيويـــة منه ، ويطلــب وثائـــق متعلقة بالمشروع  وتفاصيـل دقيقة عنه .');

-- --------------------------------------------------------

--
-- Table structure for table `langs`
--

CREATE TABLE `langs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` text NOT NULL,
  `locale` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `langs`
--

INSERT INTO `langs` (`id`, `image`, `name`, `locale`, `created_at`, `updated_at`) VALUES
(1, NULL, 'English', 'en', '2024-09-23 17:03:13', '2024-09-23 17:03:13'),
(2, NULL, 'Arabic', 'ar', '2024-09-23 17:03:13', '2024-09-23 17:05:02');

-- --------------------------------------------------------

--
-- Table structure for table `meta_tag_banners`
--

CREATE TABLE `meta_tag_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page` varchar(255) NOT NULL COMMENT 'this column will be enum',
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meta_tag_banners`
--

INSERT INTO `meta_tag_banners` (`id`, `page`, `image`, `created_at`, `updated_at`) VALUES
(1, 'home', NULL, '2024-09-23 17:19:22', '2024-09-23 17:19:22'),
(2, 'about', 'uploads/metatags/cxampptmpphp5408tmp-2024-10-29-09-24-49-1656.png', '2024-09-30 08:58:21', '2024-10-29 18:24:49'),
(3, 'project', 'uploads/metatags/cxampptmpphpb9btmp-2024-09-30-01-20-29-7613.png', '2024-09-30 10:20:29', '2024-09-30 10:20:29'),
(4, 'service', 'uploads/metatags/cxampptmpphpbad8tmp-2024-10-31-01-40-14-5524.png', '2024-09-30 10:28:41', '2024-10-31 10:40:14'),
(5, 'contact', 'uploads/metatags/cxampptmpphp4d14tmp-2024-09-30-01-51-21-8196.png', '2024-09-30 10:51:21', '2024-09-30 10:51:21'),
(6, 'blog', 'uploads/metatags/cxampptmpphpe02tmp-2024-10-31-02-22-06-4956.png', '2024-10-31 11:22:06', '2024-10-31 11:22:06');

-- --------------------------------------------------------

--
-- Table structure for table `meta_tag_banner_translations`
--

CREATE TABLE `meta_tag_banner_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `locale` varchar(255) NOT NULL,
  `meta_tag_banner_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meta_tag_banner_translations`
--

INSERT INTO `meta_tag_banner_translations` (`id`, `title`, `keywords`, `description`, `locale`, `meta_tag_banner_id`, `created_at`, `updated_at`) VALUES
(1, 'Voluptas eos maiores', 'Iusto aut quas tempo', 'Molestiae sunt dolo', 'en', 1, NULL, NULL),
(2, 'Id et fugiat dolor', 'Reiciendis neque dol', 'Excepturi temporibus', 'ar', 1, NULL, NULL),
(3, 'About Us', 'من نحن', 'من نحن', 'en', 2, NULL, NULL),
(4, 'من نحن', 'من نحن', 'من نحن', 'ar', 2, NULL, NULL),
(5, 'Projects Images', 'Projects Images', 'Projects Images', 'en', 3, NULL, NULL),
(6, 'Projects Images', 'Projects Images', 'Projects Images', 'ar', 3, NULL, NULL),
(7, 'Services', 'Services', 'Services', 'en', 4, NULL, NULL),
(8, 'Services', 'Services', 'Services', 'ar', 4, NULL, NULL),
(9, 'Contact Us', 'Contact Us', 'Contact Us', 'en', 5, NULL, NULL),
(10, 'Contact Us', 'Contact Us', 'Contact Us', 'ar', 5, NULL, NULL),
(11, 'Minus sequi sit nos', 'Officiis autem solut', 'Pariatur Vitae tene', 'en', 6, NULL, NULL),
(12, 'Et ut voluptatem vol', 'Dolorum officia dolo', 'Et pariatur Eius co', 'ar', 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_01_134511_create_langs_table', 1),
(6, '2023_10_01_134539_create_words_table', 1),
(7, '2023_10_01_134557_create_word_translations_table', 1),
(8, '2023_11_27_163450_create_admins_table', 1),
(9, '2023_11_28_005105_create_sliders_table', 1),
(10, '2023_11_28_005122_create_slider_translations_table', 1),
(11, '2023_11_28_005417_create_meta_tag_banners_table', 1),
(12, '2023_11_28_035602_create_abouts_table', 1),
(13, '2023_11_28_035616_create_about_translations_table', 1),
(14, '2023_11_28_045816_create_parteners_table', 1),
(15, '2023_11_28_054923_create_service_categories_table', 1),
(16, '2023_11_28_054933_create_service_category_translations_table', 1),
(17, '2023_11_28_054942_create_services_table', 1),
(18, '2023_11_28_054952_create_service_translations_table', 1),
(19, '2023_11_28_055527_create_service_images_table', 1),
(20, '2023_11_28_114315_create_projects_table', 1),
(21, '2023_11_28_114334_create_project_translations_table', 1),
(22, '2023_11_28_121000_create_brands_table', 1),
(23, '2023_11_28_121019_create_brand_translations_table', 1),
(24, '2023_11_28_121032_create_categories_table', 1),
(25, '2023_11_28_121043_create_category_translations_table', 1),
(26, '2023_11_28_121103_create_products_table', 1),
(27, '2023_11_28_121114_create_product_translations_table', 1),
(28, '2023_11_28_121124_create_product_images_table', 1),
(29, '2023_11_28_130445_create_settings_table', 1),
(30, '2023_11_30_083456_create_countrs_table', 1),
(31, '2023_11_30_083535_create_countr_translations_table', 1),
(32, '2023_11_30_083555_create_features_table', 1),
(33, '2023_11_30_083606_create_feature_translations_table', 1),
(34, '2023_12_03_095804_add_type_column_to_sliders_table', 1),
(35, '2024_02_08_121256_create_blogs_table', 1),
(36, '2024_02_08_121306_create_blog_translations_table', 1),
(37, '2024_02_12_122120_create_certifications_table', 1),
(40, '2024_02_12_140302_add_type_to_categories_table', 1),
(41, '2024_02_12_141751_add_category_id_to_projects_table', 1),
(42, '2024_02_25_220634_add_type_column_to_features_table', 1),
(43, '2024_07_24_090348_add_sub_title_to_sliders_table', 1),
(44, '2024_07_24_090550_add_sub_title_to_slider_translations_table', 1),
(45, '2024_07_24_091348_add_sub_title_to_about_translations_table', 1),
(46, '2024_08_04_091513_create_news_table', 1),
(47, '2024_08_05_135532_add_category_id_to_blogs_table', 1),
(48, '2024_08_06_075911_create_social_media_table', 1),
(49, '2024_08_07_090106_create_subscriptions_table', 1),
(50, '2024_08_07_102302_create_profile_infos_table', 1),
(51, '2024_09_29_125914_create_customer_rates_table', 2),
(53, '2024_09_30_070443_create_teams_table', 3),
(54, '2024_09_30_094918_create_projects_table', 4),
(55, '2024_10_01_092034_create_values_table', 5),
(56, '2024_10_01_124055_create_how_works_table', 6),
(57, '2024_10_07_121949_add_id_to_customer_rate_translations_table', 7),
(58, '2024_10_15_102752_create_blogs_table', 7),
(59, '2024_10_31_102904_create_faqs_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `parteners`
--

CREATE TABLE `parteners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parteners`
--

INSERT INTO `parteners` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'uploads/partener/1-2024-09-30-08-09-41-7329.png', '2024-09-30 05:09:41', '2024-09-30 05:09:41'),
(3, 'uploads/partener/2-2024-09-30-08-09-52-9836.png', '2024-09-30 05:09:52', '2024-09-30 05:09:52'),
(4, 'uploads/partener/4-2024-09-30-08-13-06-6485.png', '2024-09-30 05:13:06', '2024-09-30 05:13:06');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'uploads/projects/image-2024-09-30-10-33-59-9683.png', '2024-09-30 07:33:59', '2024-09-30 07:33:59'),
(2, 'uploads/projects/image-2024-09-30-10-36-10-3000.png', '2024-09-30 07:36:02', '2024-09-30 07:36:10');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'uploads/services/astshar-hndsy-en-2024-10-28-06-45-44-9614.png', '2024-09-29 09:08:38', '2024-10-28 15:45:44'),
(2, 'uploads/services/ut-inventore-laborum-2024-10-28-06-47-02-6531.png', '2024-09-30 10:46:13', '2024-10-28 15:47:02'),
(3, 'uploads/services/voluptas-amet-velit-2024-10-29-08-41-19-1373.png', '2024-10-29 05:41:19', '2024-10-29 05:41:19'),
(4, 'uploads/services/vel-repellendus-tot-2024-10-29-08-41-50-5781.png', '2024-10-29 05:41:50', '2024-10-29 05:41:50'),
(5, 'uploads/services/dolorum-adipisicing-2024-10-29-10-14-35-7724.png', '2024-10-29 07:14:35', '2024-10-29 07:14:35');

-- --------------------------------------------------------

--
-- Table structure for table `service_translations`
--

CREATE TABLE `service_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_translations`
--

INSERT INTO `service_translations` (`id`, `service_id`, `locale`, `title`, `short_description`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'استشارة هندسية en', 'العقار ليس فقط مكان للسكن لكن أيضاً أداة من أدوات الاستثمار، لذا تهتم المؤشر للتطوير العقاري بدراسة واختيار أفضل المواقع التي en', '<p>لم تكن مسيرة شركة عمارة الشرق للتطوير والاستثمـار العقاري وليدة لحظة التــأسيس، بل هي ممتـدة عبــر زمن يتجاوز 40 عاماً من خـبرات مؤسسيهــا في مجــال العقار والاستثمـــار العقـاري وصولاً إلى التطــوير الذي واكب النهضة العمرانية التي تشهدها المملكة العربية السعـــودية، بقيــادة خادم الحرمين الشريفين وسمو ولي العهد تحقيقاً لأهداف رؤية 2030 لم تكن مسيرة شركة عمارة الشرق للتطوير والاستثمـار العقاري وليدة لحظة التــأسيس، بل هي ممتـدة عبــر زمن يتجاوز 40 عاماً من خـبرات مؤسسيهــا في مجــال العقار والاستثمـــار العقـاري وصولاً إلى التطــوير الذي واكب النهضة العمرانية التي تشهدها المملكة العربية السعـــودية، بقيــادة خادم الحرمين الشريفين وسمو ولي العهد تحقيقاً لأهداف رؤية 2030 en</p>', NULL, NULL),
(2, 1, 'ar', 'استشارة هندسية', 'العقار ليس فقط مكان للسكن لكن أيضاً أداة من أدوات الاستثمار، لذا تهتم المؤشر للتطوير العقاري بدراسة واختيار أفضل المواقع التي', '<p>لم تكن مسيرة شركة عمارة الشرق للتطوير والاستثمـار العقاري وليدة لحظة التــأسيس، بل هي ممتـدة عبــر زمن يتجاوز 40 عاماً من خـبرات مؤسسيهــا في مجــال العقار والاستثمـــار العقـاري وصولاً إلى التطــوير الذي واكب النهضة العمرانية التي تشهدها المملكة العربية السعـــودية، بقيــادة خادم الحرمين الشريفين وسمو ولي العهد تحقيقاً لأهداف رؤية 2030 لم تكن مسيرة شركة عمارة الشرق للتطوير والاستثمـار العقاري وليدة لحظة التــأسيس، بل هي ممتـدة عبــر زمن يتجاوز 40 عاماً من خـبرات مؤسسيهــا في مجــال العقار والاستثمـــار العقـاري وصولاً إلى التطــوير الذي واكب النهضة العمرانية التي تشهدها المملكة العربية السعـــودية، بقيــادة خادم الحرمين الشريفين وسمو ولي العهد تحقيقاً لأهداف رؤية 2030</p>', NULL, NULL),
(3, 2, 'en', 'خدمات التخزين والتوزيع', 'Laborum Voluptatem', '<p>fdsfdf</p>', NULL, NULL),
(4, 2, 'ar', 'خدمات التخزين والتوزيع', 'Cillum eos aut iust', '<p>dfdfdfdfd</p>', NULL, NULL),
(5, 3, 'en', 'Voluptas amet velit', 'Est dolore ex unde d', '<p>dsds</p>', NULL, NULL),
(6, 3, 'ar', 'Itaque ea non labore', 'Consectetur voluptat', '<p>dsds</p>', NULL, NULL),
(7, 4, 'en', 'Vel repellendus Tot', 'Vel praesentium vita', '<p>ffdfd</p>', NULL, NULL),
(8, 4, 'ar', 'Est ratione exercit', 'Duis ut at nobis nes', '<p>dfdfd</p>', NULL, NULL),
(9, 5, 'en', 'Dolorum adipisicing', 'Amet libero laborum', '<p>jhjkhk</p>', NULL, NULL),
(10, 5, 'ar', 'Illo nobis minima qu', 'Est assumenda aliqui', '<ul>\r\n<li>توفير أعداد كبيرة من العمالة المؤهلة والمدربة جيدًا لتهسيل عمليات الدعم اللوجيستي للأفراد والشركات بمختلف أنواعها</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>توفير أعداد كبيرة من العمالة المؤهلة والمدربة جيدًا لتهسيل عمليات الدعم اللوجيستي للأفراد والشركات بمختلف أنواعها</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>توفير أعداد كبيرة من العمالة المؤهلة والمدربة جيدًا لتهسيل عمليات الدعم اللوجيستي للأفراد والشركات بمختلف أنواعها</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'logo', 'uploads/settings/logo-2024-10-27-05-58-21-2014.png', '2024-09-23 17:17:05', '2024-10-27 14:58:21'),
(2, 'phone', '01270122393', '2024-09-24 06:24:26', '2024-09-24 06:28:50'),
(3, 'email_1', 'ramadaba29@gmail.com', '2024-09-24 06:24:26', '2024-09-24 06:24:26'),
(4, 'email_2', 'ramadaba29@gmail.com', '2024-09-24 06:24:26', '2024-09-24 06:24:26'),
(5, 'site_name_en', 'عمارة الشرق', '2024-09-24 09:17:49', '2024-09-24 09:17:49'),
(6, 'site_name_ar', 'عمارة الشرق', '2024-09-24 09:17:49', '2024-09-24 09:17:49'),
(7, 'barcode_image', 'uploads/settings/-2024-09-30-11-29-56-7369.png', '2024-09-30 08:29:56', '2024-09-30 08:29:56'),
(9, 'description_ar', '<p>dsdsds</p>', '2024-09-30 08:37:59', '2024-09-30 08:37:59'),
(10, 'location_ifram', '<div style=\"width: 100%\"><iframe width=\"100%\" height=\"600\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?width=100%25&height=600&hl=en&q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed\"><a href=\"https://www.gps.ie/\">gps vehicle tracker</a></iframe></div>', '2024-09-30 08:45:36', '2024-09-30 09:28:57'),
(11, 'bg_footer', 'uploads/settings/bg-footer-2024-10-29-09-13-20-1047.png', '2024-09-30 09:28:57', '2024-10-29 18:13:20'),
(12, 'logo_white', 'uploads/settings/logo-white-2024-10-29-09-14-48-2770.png', '2024-09-30 09:30:15', '2024-10-29 18:14:48'),
(13, 'short_description_en', 'تملك حصصًا استثمارية في أضخم العقارات المدرة للدخل بالمملكة بمبالغ بسيطة وانتفع بعوائدها بشكل دوري', '2024-09-30 09:31:07', '2024-09-30 09:31:07'),
(14, 'short_description_ar', 'تملك حصصًا استثمارية في أضخم العقارات المدرة للدخل بالمملكة بمبالغ بسيطة وانتفع بعوائدها بشكل دوري', '2024-09-30 09:31:07', '2024-09-30 09:31:07'),
(15, 'address_en', 'المملكة العربية السعودية - مكة - الجروشي مول - الدور الثاني - حي الرصيفة', '2024-09-30 09:33:56', '2024-09-30 09:33:56'),
(16, 'address_ar', 'المملكة العربية السعودية - مكة - الجروشي مول - الدور الثاني - حي الرصيفة', '2024-09-30 09:33:56', '2024-09-30 09:33:56'),
(17, 'whatsapp', '201270122393', '2024-09-30 10:47:14', '2024-09-30 10:47:14'),
(18, 'vision_en', 'أن نكون المظلـة التنظيمـية والمرجعـية الوطنيــة الموثوقة للمـدن والمناطق الاقتصادية الخاصة بمعايير عالمية.en', '2024-10-01 06:15:58', '2024-10-01 06:15:58'),
(19, 'vision_ar', 'أن نكون المظلـة التنظيمـية والمرجعـية الوطنيــة الموثوقة للمـدن والمناطق الاقتصادية الخاصة بمعايير عالمية.', '2024-10-01 06:15:58', '2024-10-01 06:15:58'),
(20, 'message_en', '<p>تعزيز تنافسية المملكة عالمـيًا من خلال إطلاق وتمـكين منظومة المدن الحديثة والمناطق الاقتصادية الخاصة en</p>', '2024-10-01 06:15:58', '2024-10-28 14:33:51'),
(21, 'message_ar', '<p>نسعى إلى أن نكون الخيار الأول في قطاع الخدمات اللوجستية في المملكة من خلال تقديم خدمات نوعية تلبي احتياجات السوق المحلي والدولي.</p>', '2024-10-01 06:15:58', '2024-10-28 14:49:26'),
(22, 'goals_title_en', 'en المساهمة في تحقيق رؤية المملكة 2030v', '2024-10-01 08:18:20', '2024-10-01 08:18:20'),
(23, 'goals_title_ar', 'المساهمة في تحقيق رؤية المملكة 2030', '2024-10-01 08:18:20', '2024-10-01 08:18:20'),
(24, 'goals_desc_en', 'المساهمة في تحقيق رؤية المملكة 2030 من خــلال دعــــم قطاع السـكن بخدمات ومنتجات عقارية رائــدة.', '2024-10-01 08:18:20', '2024-10-01 08:18:20'),
(25, 'goals_desc_ar', 'المساهمة في تحقيق رؤية المملكة 2030 من خــلال دعــــم قطاع السـكن بخدمات ومنتجات عقارية رائــدة.', '2024-10-01 08:18:20', '2024-10-01 08:18:20'),
(26, 'goals_logo', 'uploads/settings/-2024-10-01-11-19-25-9535.png', '2024-10-01 08:18:20', '2024-10-01 08:19:25'),
(27, 'another_location_phone', '01125603998', '2024-10-02 07:33:57', '2024-10-02 07:33:57'),
(28, 'another_location_en', 'الرياض - جدة - المدينة - تبوك - رابغ en', '2024-10-02 07:33:57', '2024-10-02 07:33:57'),
(29, 'another_location_ar', 'الرياض - جدة - المدينة - تبوك - رابغ', '2024-10-02 07:33:57', '2024-10-02 07:33:57'),
(31, 'description_en', NULL, '2024-10-02 07:36:45', '2024-10-02 07:36:45'),
(32, 'google_analytics', NULL, '2024-10-02 07:36:45', '2024-10-02 07:36:52'),
(33, 'contact_title_en', NULL, '2024-10-02 07:36:45', '2024-10-02 07:36:45'),
(34, 'contact_title_ar', NULL, '2024-10-02 07:36:45', '2024-10-02 07:36:45'),
(35, 'contact_description_en', NULL, '2024-10-02 07:36:45', '2024-10-02 07:36:45'),
(36, 'contact_description_ar', NULL, '2024-10-02 07:36:45', '2024-10-02 07:36:45'),
(37, 'facebook_link', NULL, '2024-10-02 07:36:45', '2024-10-02 07:36:45'),
(38, 'youtube_link', NULL, '2024-10-02 07:36:45', '2024-10-02 07:36:45'),
(39, 'twitter', NULL, '2024-10-02 07:36:45', '2024-10-02 07:36:45'),
(40, 'instagram', NULL, '2024-10-02 07:36:45', '2024-10-02 07:36:45'),
(41, 'snapchat', NULL, '2024-10-02 07:36:45', '2024-10-02 07:36:45'),
(42, 'telegram', NULL, '2024-10-02 07:36:45', '2024-10-02 07:36:45'),
(43, 'linkedin', NULL, '2024-10-02 07:36:45', '2024-10-02 07:36:45'),
(44, 'tiktok', NULL, '2024-10-02 07:36:45', '2024-10-02 07:36:45'),
(45, 'location_url', NULL, '2024-10-27 14:58:21', '2024-10-27 14:58:21'),
(46, 'favicon', 'uploads/settings/favicon-2024-10-27-05-58-21-5605.png', '2024-10-27 14:58:21', '2024-10-27 14:58:21'),
(47, 'our_goal_en', '<p>تعزيز تنافسية المملكة عالمـيًا من خلال إطلاق وتمـكين منظومة المدن الحديثة والمناطق الاقتصادية الخاصة en</p>', '2024-10-28 14:33:51', '2024-10-28 14:33:51'),
(48, 'our_goal_ar', '<p>نهدف إلى توفيــر كامــل الحلــول اللوجســتية الذكيــة للمتاجــر الإلكترونيـة والمنشـئات التجاريـة من خلال تقديم خدمات لوجستية متكاملة تشمل النقل، التخزين، التوزيع، التصدير. كما نلتزم بتوفير حلول تتسم بالموثوقية وتفوق توقعات عملائنا.</p>', '2024-10-28 14:33:51', '2024-10-28 14:49:26'),
(49, 'our_value_en', '<p>تعزيز تنافسية المملكة عالمـيًا من خلال إطلاق وتمـكين منظومة المدن الحديثة والمناطق الاقتصادية الخاصة en</p>', '2024-10-28 14:33:51', '2024-10-28 14:33:51'),
(50, 'our_value_ar', '<p>إن قيمنا هي كل ما يمكننا من الاستمرار في العطاء، وذلك يتمثل في:<br />- التكامل في تقديم الخدمات اللوجستية<br />- الاعتزاز بالهوية الوطنية.<br />- النزاهة في التعاملات.<br />- الجودة الشاملة في الأداء.<br />- التزام أخلاقيات المهنة.</p>', '2024-10-28 14:33:51', '2024-10-28 14:49:26'),
(51, 'value_image', 'uploads/settings/-2024-10-28-05-38-26-6580.png', '2024-10-28 14:38:26', '2024-10-28 14:38:26'),
(52, 'goals_image', 'uploads/settings/-2024-10-28-05-38-26-9338.png', '2024-10-28 14:38:26', '2024-10-28 14:38:26'),
(53, 'message_image', 'uploads/settings/-2024-10-28-05-38-26-7573.png', '2024-10-28 14:38:26', '2024-10-28 14:38:26');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `status`, `link`, `created_at`, `updated_at`, `type`) VALUES
(1, 'uploads/sliders/-2024-10-28-04-12-40-1359.png', 1, NULL, '2024-09-24 05:18:56', '2024-10-28 13:12:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider_translations`
--

CREATE TABLE `slider_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_translations`
--

INSERT INTO `slider_translations` (`id`, `slider_id`, `locale`, `title`, `description`, `created_at`, `updated_at`, `sub_title`) VALUES
(1, 1, 'en', 'الاستشارات الهندسية في بعدها الجديد حيث تتحقق النجاحات', '<p>نعتبر إحدى الشركات الرائدة في مجال الخدمات اللوجستية في المملكة العربية السعودية. نسعى لتلبية احتياجات عملائنا من خلال تقديم حلول متكاملة ومبتكرة</p>', NULL, NULL, NULL),
(2, 1, 'ar', 'الحلول اللوجستية المتطورة', '<p><span style=\"font-size: 18pt;\">نعتبر إحدى الشركات الرائدة في مجال الخدمات اللوجستية في المملكة العربية السعودية. نسعى لتلبية احتياجات عملائنا من خلال تقديم حلول متكاملة ومبتكرة</span></p>', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` text NOT NULL,
  `icon` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `url`, `icon`, `sort`, `status`, `created_at`, `updated_at`) VALUES
(1, 'https://ness-blog.000webhostapp.com/admin-panel', 'uploads/social-media/icon-2024-09-24-09-38-27-1982.png', 1, 1, '2024-09-24 06:38:27', '2024-09-24 06:38:27'),
(2, 'http://lawskw.com/', 'uploads/social-media/icon-2024-09-24-09-48-49-3953.png', 3, 1, '2024-09-24 06:48:49', '2024-09-24 06:49:37'),
(3, 'https://cashexb.com/', 'uploads/social-media/icon-2024-09-24-09-49-06-3275.png', 2, 1, '2024-09-24 06:49:06', '2024-09-24 06:49:41');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `image`, `created_at`, `updated_at`) VALUES
(2, NULL, '2024-09-30 04:21:25', '2024-09-30 04:21:25'),
(3, NULL, '2024-09-30 04:22:29', '2024-09-30 04:22:29'),
(4, NULL, '2024-09-30 04:22:50', '2024-09-30 04:22:50'),
(6, NULL, '2024-09-30 04:34:25', '2024-09-30 04:34:25'),
(7, NULL, '2024-09-30 04:55:31', '2024-09-30 04:55:31');

-- --------------------------------------------------------

--
-- Table structure for table `team_translations`
--

CREATE TABLE `team_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_translations`
--

INSERT INTO `team_translations` (`id`, `team_id`, `locale`, `title`, `job`, `degree`) VALUES
(1, 2, 'en', 'Ahmed Ramadan', 'Php Developer', 'Fullstack'),
(2, 2, 'ar', 'أحمد رمضان', 'Php Developer', 'Fullstack'),
(3, 3, 'en', 'Omer', 'Php Developer', 'Fullstack'),
(4, 3, 'ar', 'Omer ali', 'Php Developer', 'Fullstack'),
(5, 4, 'en', 'Ahmed', 'Php Developer', 'Backend'),
(6, 4, 'ar', 'Ahmed Ali', 'Php Developer', 'Backend'),
(9, 6, 'en', 'Aut culpa labore su', 'Consequatur amet ad', 'Ipsum consequatur c'),
(10, 6, 'ar', 'Temporibus consequun', 'Quo sunt consequat', 'Quo vel voluptatem'),
(11, 7, 'en', 'Ahmed Ramadan', 'Php Developer', 'Fullstack'),
(12, 7, 'ar', 'Ahmed', 'Php Developer', 'Fullstack');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `values`
--

CREATE TABLE `values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `values`
--

INSERT INTO `values` (`id`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'uploads/values/bg-2024-10-01-09-43-31-5772.png', '2024-10-01 06:43:31', '2024-10-01 06:43:31'),
(2, 'uploads/values/bg-2024-10-01-09-46-48-4638.png', '2024-10-01 06:46:48', '2024-10-01 06:46:48'),
(4, 'uploads/values/-2024-10-01-09-48-05-6796.png', '2024-10-01 06:47:34', '2024-10-01 06:48:05'),
(5, 'uploads/values/bg-2024-10-01-10-19-50-2816.png', '2024-10-01 07:19:50', '2024-10-01 07:19:50'),
(6, 'uploads/values/bg-2024-10-01-10-19-58-2121.png', '2024-10-01 07:19:58', '2024-10-01 07:19:58');

-- --------------------------------------------------------

--
-- Table structure for table `value_translations`
--

CREATE TABLE `value_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `value_translations`
--

INSERT INTO `value_translations` (`id`, `value_id`, `locale`, `title`) VALUES
(1, 1, 'en', 'المصداقية'),
(2, 1, 'ar', 'المصداقية'),
(3, 2, 'en', 'المسؤليةen'),
(4, 2, 'ar', 'المسؤلية'),
(7, 4, 'en', 'الريادةen'),
(8, 4, 'ar', 'الريادة'),
(9, 5, 'en', 'الشراكة'),
(10, 5, 'ar', 'الشراكة'),
(11, 6, 'en', 'Labore fugiat sed do'),
(12, 6, 'ar', 'Nostrum reprehenderi');

-- --------------------------------------------------------

--
-- Table structure for table `words`
--

CREATE TABLE `words` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `words`
--

INSERT INTO `words` (`id`, `key`, `created_at`, `updated_at`) VALUES
(3, 'key', '2024-09-24 07:27:17', '2024-09-24 07:27:17'),
(4, 'trans_en', '2024-09-24 07:27:17', '2024-09-24 07:27:17'),
(5, 'trans_ar', '2024-09-24 07:27:17', '2024-09-24 07:27:17'),
(8, 'Dashboard', '2024-09-24 07:27:17', '2024-09-24 07:27:17'),
(9, 'Home', '2024-09-24 07:27:17', '2024-09-24 07:27:17'),
(10, 'Sliders', '2024-09-24 07:27:17', '2024-09-24 07:27:17'),
(11, 'Metatag', '2024-09-24 07:27:17', '2024-09-24 07:27:17'),
(12, 'About', '2024-09-24 07:27:17', '2024-09-24 07:27:17'),
(13, 'About Us', '2024-09-24 07:27:17', '2024-09-24 07:27:17'),
(14, 'Services', '2024-09-24 07:27:17', '2024-09-24 07:27:17'),
(15, 'Feature', '2024-09-24 07:27:17', '2024-09-24 07:27:17'),
(16, 'Social Media', '2024-09-24 07:27:17', '2024-09-24 07:27:17'),
(17, 'Counters', '2024-09-24 07:27:17', '2024-09-24 07:27:17'),
(18, 'Settings', '2024-09-24 07:27:17', '2024-09-24 07:27:17'),
(19, 'Languages', '2024-09-24 07:27:17', '2024-09-24 07:27:17'),
(20, 'Contact Metatag', '2024-09-24 07:27:17', '2024-09-24 07:27:17'),
(21, 'profile', '2024-09-24 07:27:17', '2024-09-24 07:27:17'),
(22, 'logout', '2024-09-24 07:27:17', '2024-09-24 07:27:17'),
(23, 'Not Found', '2024-09-24 07:27:17', '2024-09-24 07:27:17'),
(33, 'contact_us', '2024-09-24 07:27:17', '2024-09-24 07:27:17'),
(36, 'Contact Us', '2024-09-24 07:27:17', '2024-09-24 07:27:17'),
(40, 'Privacy Policy', '2024-09-24 07:27:17', '2024-09-24 07:27:17'),
(41, 'Terms and Conditions', '2024-09-24 07:27:17', '2024-09-24 07:27:17'),
(43, 'OK', '2024-09-24 07:27:32', '2024-09-24 07:27:32'),
(44, 'Cancel', '2024-09-24 07:27:32', '2024-09-24 07:27:32'),
(45, 'Projects', '2024-09-24 07:49:51', '2024-09-24 07:49:51'),
(46, 'Request Consultation', '2024-09-24 08:58:22', '2024-09-24 08:58:22'),
(49, 'images', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(50, 'Terms of Use', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(51, 'site_name_en', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(52, 'site_name_ar', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(53, 'address_en', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(54, 'address_ar', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(55, 'short_description_en', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(56, 'short_description_ar', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(57, 'description_en', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(58, 'description_ar', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(59, 'logo', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(60, 'best_size', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(61, 'logo_white', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(62, 'fav_icon', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(63, 'Subscribe image', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(64, 'fqa image', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(65, 'footer image', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(66, 'logo sub footer image', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(67, 'barcode image', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(68, 'contant_image', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(69, 'contact_title_en', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(70, 'contact_title_ar', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(71, 'contact_description_en', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(72, 'contact_description_ar', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(73, 'phone', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(74, 'whatsapp', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(75, 'enter_country_code', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(76, 'email', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(77, 'facebook_link', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(78, 'youtube_link', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(79, 'twitter', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(80, 'instagram', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(81, 'snapchat', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(82, 'telegram', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(83, 'linkedin', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(84, 'tiktok', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(85, 'title_en', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(86, 'title_ar', '2024-09-24 09:17:21', '2024-09-24 09:17:21'),
(87, 'delete_item', '2024-09-24 09:26:03', '2024-09-24 09:26:03'),
(88, 'are_you_sure', '2024-09-24 09:26:03', '2024-09-24 09:26:03'),
(89, 'Edit', '2024-09-24 09:26:03', '2024-09-24 09:26:03'),
(90, 'Slider', '2024-09-24 09:26:03', '2024-09-24 09:26:03'),
(91, 'Video', '2024-09-24 09:26:03', '2024-09-24 09:26:03'),
(92, 'Title en', '2024-09-24 09:26:03', '2024-09-24 09:26:03'),
(93, 'Title ar', '2024-09-24 09:26:03', '2024-09-24 09:26:03'),
(94, 'Description en', '2024-09-24 09:26:03', '2024-09-24 09:26:03'),
(95, 'Description ar', '2024-09-24 09:26:03', '2024-09-24 09:26:03'),
(96, 'yes', '2024-09-24 09:26:03', '2024-09-24 09:26:03'),
(97, 'no', '2024-09-24 09:26:03', '2024-09-24 09:26:03'),
(98, 'Data saved successfully', '2024-09-24 09:26:09', '2024-09-24 09:26:09'),
(99, 'add', '2024-09-24 09:35:46', '2024-09-24 09:35:46'),
(100, 'name', '2024-09-24 09:35:46', '2024-09-24 09:35:46'),
(101, 'number', '2024-09-24 09:35:46', '2024-09-24 09:35:46'),
(102, 'actions', '2024-09-24 09:35:46', '2024-09-24 09:35:46'),
(103, 'image', '2024-09-24 09:36:09', '2024-09-24 09:36:09'),
(104, 'en.title', '2024-09-24 09:36:09', '2024-09-24 09:36:09'),
(105, 'ar.title', '2024-09-24 09:36:09', '2024-09-24 09:36:09'),
(106, 'created', '2024-09-24 09:38:56', '2024-09-24 09:38:56'),
(107, 'login', '2024-09-27 09:29:43', '2024-09-27 09:29:43'),
(108, 'password', '2024-09-27 09:29:43', '2024-09-27 09:29:43'),
(109, 'api.login_successfull', '2024-09-27 09:29:51', '2024-09-27 09:29:51'),
(110, 'products', '2024-09-27 09:29:51', '2024-09-27 09:29:51'),
(111, 'features', '2024-09-27 09:29:51', '2024-09-27 09:29:51'),
(112, 'parteners', '2024-09-27 09:29:51', '2024-09-27 09:29:51'),
(113, 'deleted', '2024-09-27 09:52:35', '2024-09-27 09:52:35'),
(114, 'Data Deleted successfully', '2024-09-27 10:05:01', '2024-09-27 10:05:01'),
(115, 'abouts', '2024-09-27 10:34:33', '2024-09-27 10:34:33'),
(116, 'sub_title', '2024-09-27 10:34:33', '2024-09-27 10:34:33'),
(117, 'sub_title en', '2024-09-27 10:37:01', '2024-09-27 10:37:01'),
(118, 'sub_title ar', '2024-09-27 10:37:01', '2024-09-27 10:37:01'),
(119, 'short_description en', '2024-09-27 10:37:01', '2024-09-27 10:37:01'),
(120, 'short_description ar', '2024-09-27 10:37:01', '2024-09-27 10:37:01'),
(121, 'Short Description en', '2024-09-27 10:39:29', '2024-09-27 10:39:29'),
(122, 'Short Description ar', '2024-09-27 10:39:29', '2024-09-27 10:39:29'),
(123, 'More', '2024-09-29 08:41:26', '2024-09-29 08:41:26'),
(124, 'Explore our services now', '2024-09-29 08:59:16', '2024-09-29 08:59:16'),
(125, 'api.email_or_password_error', '2024-09-29 09:00:04', '2024-09-29 09:00:04'),
(126, 'service', '2024-09-29 09:04:59', '2024-09-29 09:04:59'),
(127, 'en.short_description', '2024-09-29 09:05:01', '2024-09-29 09:05:01'),
(128, 'ar.short_description', '2024-09-29 09:05:01', '2024-09-29 09:05:01'),
(129, 'en.description', '2024-09-29 09:05:01', '2024-09-29 09:05:01'),
(130, 'ar.description', '2024-09-29 09:05:01', '2024-09-29 09:05:01'),
(131, 'Details', '2024-09-29 09:21:04', '2024-09-29 09:21:04'),
(132, 'Service request', '2024-09-29 09:36:13', '2024-09-29 09:36:13'),
(133, 'Customer Rates', '2024-09-29 10:17:21', '2024-09-29 10:17:21'),
(134, 'Rate', '2024-09-29 10:18:19', '2024-09-29 10:18:19'),
(135, 'Comment', '2024-09-29 10:18:19', '2024-09-29 10:18:19'),
(136, 'Comment en', '2024-09-29 11:10:14', '2024-09-29 11:10:14'),
(137, 'Comment ar', '2024-09-29 11:10:14', '2024-09-29 11:10:14'),
(138, 'Login Successfully', '2024-09-30 03:11:21', '2024-09-30 03:11:21'),
(139, 'Our customers\' opinions', '2024-09-30 03:17:14', '2024-09-30 03:17:14'),
(140, 'Customers', '2024-09-30 03:18:19', '2024-09-30 03:18:19'),
(141, 'Our Team', '2024-09-30 04:13:06', '2024-09-30 04:13:06'),
(144, 'Job', '2024-09-30 04:16:51', '2024-09-30 04:16:51'),
(145, 'Job en', '2024-09-30 04:16:54', '2024-09-30 04:16:54'),
(146, 'Job ar', '2024-09-30 04:16:54', '2024-09-30 04:16:54'),
(147, 'Degree en', '2024-09-30 04:16:54', '2024-09-30 04:16:54'),
(148, 'Degree ar', '2024-09-30 04:16:54', '2024-09-30 04:16:54'),
(149, 'Data Created Successfully', '2024-09-30 04:21:25', '2024-09-30 04:21:25'),
(150, 'Degree', '2024-09-30 04:22:08', '2024-09-30 04:22:08'),
(151, 'Delete Item', '2024-09-30 04:25:20', '2024-09-30 04:25:20'),
(152, 'Are you sure?', '2024-09-30 04:25:20', '2024-09-30 04:25:20'),
(153, 'Data Updated Successfully', '2024-09-30 04:25:48', '2024-09-30 04:25:48'),
(154, 'Meet The Team', '2024-09-30 04:29:09', '2024-09-30 04:29:09'),
(155, 'language', '2024-09-30 04:29:32', '2024-09-30 04:29:32'),
(156, 'Our Partners', '2024-09-30 05:03:37', '2024-09-30 05:03:37'),
(157, 'Partners of Success', '2024-09-30 05:03:37', '2024-09-30 05:03:37'),
(158, 'Translations', '2024-09-30 05:50:49', '2024-09-30 05:50:49'),
(159, 'Search', '2024-09-30 05:50:53', '2024-09-30 05:50:53'),
(160, 'save', '2024-09-30 05:51:22', '2024-09-30 05:51:22'),
(161, 'updated', '2024-09-30 05:56:02', '2024-09-30 05:56:02'),
(162, 'description', '2024-09-30 06:44:55', '2024-09-30 06:44:55'),
(163, 'Project', '2024-09-30 07:29:08', '2024-09-30 07:29:08'),
(164, 'Our Projects', '2024-09-30 07:43:07', '2024-09-30 07:43:07'),
(165, 'Write your description here', '2024-09-30 07:43:07', '2024-09-30 07:43:07'),
(166, 'Gallery', '2024-09-30 08:21:28', '2024-09-30 08:21:28'),
(167, 'Your opinion matters to us', '2024-09-30 08:27:59', '2024-09-30 08:27:59'),
(168, 'Write description of qrcode section', '2024-09-30 08:27:59', '2024-09-30 08:27:59'),
(169, 'main_info', '2024-09-30 08:29:22', '2024-09-30 08:29:22'),
(170, 'Subscribe', '2024-09-30 08:29:22', '2024-09-30 08:29:22'),
(171, 'Main Info', '2024-09-30 08:33:19', '2024-09-30 08:33:19'),
(172, 'Location Ifram', '2024-09-30 08:37:14', '2024-09-30 08:37:14'),
(173, 'quick_links', '2024-09-30 08:48:04', '2024-09-30 08:48:04'),
(174, 'Meet Dr. Helen Dion', '2024-09-30 08:48:04', '2024-09-30 08:48:04'),
(175, 'Clinic Location', '2024-09-30 08:48:04', '2024-09-30 08:48:04'),
(176, 'Blogs', '2024-09-30 08:48:04', '2024-09-30 08:48:04'),
(177, 'opening_hours', '2024-09-30 08:48:04', '2024-09-30 08:48:04'),
(179, 'MetaTags', '2024-09-30 08:57:11', '2024-09-30 08:57:11'),
(180, 'Page Title en', '2024-09-30 08:57:11', '2024-09-30 08:57:11'),
(181, 'Page Title ar', '2024-09-30 08:57:11', '2024-09-30 08:57:11'),
(182, 'keywordsen', '2024-09-30 08:57:11', '2024-09-30 08:57:11'),
(183, 'keywordsar', '2024-09-30 08:57:11', '2024-09-30 08:57:11'),
(184, 'Home Page', '2024-09-30 09:18:14', '2024-09-30 09:18:14'),
(185, 'bg_footer', '2024-09-30 09:26:03', '2024-09-30 09:26:03'),
(186, 'Important links', '2024-09-30 09:38:08', '2024-09-30 09:38:08'),
(187, 'Projects Images', '2024-09-30 09:40:50', '2024-09-30 09:40:50'),
(188, 'Copyright', '2024-09-30 09:43:04', '2024-09-30 09:43:04'),
(189, 'Cobyright', '2024-09-30 09:43:30', '2024-09-30 09:43:30'),
(190, 'Tarseya', '2024-09-30 09:44:18', '2024-09-30 09:44:18'),
(191, 'all', '2024-09-30 10:21:08', '2024-09-30 10:21:08'),
(192, 'Oue Services', '2024-09-30 10:30:41', '2024-09-30 10:30:41'),
(193, 'contact', '2024-09-30 10:50:40', '2024-09-30 10:50:40'),
(194, 'Get in touch with us', '2024-09-30 10:51:25', '2024-09-30 10:51:25'),
(195, 'Leave a Messages', '2024-09-30 10:51:25', '2024-09-30 10:51:25'),
(196, 'enter_your_message', '2024-09-30 10:51:25', '2024-09-30 10:51:25'),
(198, 'Send', '2024-09-30 10:51:25', '2024-09-30 10:51:25'),
(199, 'Location', '2024-09-30 10:59:38', '2024-09-30 10:59:38'),
(200, 'Get Direction', '2024-09-30 11:02:42', '2024-09-30 11:02:42'),
(201, 'Call Now', '2024-09-30 11:06:28', '2024-09-30 11:06:28'),
(202, 'Send Email', '2024-09-30 11:07:43', '2024-09-30 11:07:43'),
(203, 'Notes', '2024-09-30 11:15:34', '2024-09-30 11:15:34'),
(204, 'Vision & Message', '2024-10-01 06:15:19', '2024-10-01 06:15:19'),
(205, 'Vision', '2024-10-01 06:15:19', '2024-10-01 06:15:19'),
(206, 'Values', '2024-10-01 06:18:48', '2024-10-01 06:18:48'),
(207, 'no_data_found', '2024-10-01 06:18:48', '2024-10-01 06:18:48'),
(208, 'No Data Found', '2024-10-01 06:19:29', '2024-10-01 06:19:29'),
(209, 'Icon', '2024-10-01 06:34:03', '2024-10-01 06:34:03'),
(210, 'Data has been created', '2024-10-01 06:43:31', '2024-10-01 06:43:31'),
(211, 'Goals', '2024-10-01 07:52:00', '2024-10-01 07:52:00'),
(212, 'Write description of goals', '2024-10-01 07:53:28', '2024-10-01 07:53:28'),
(213, 'brands', '2024-10-01 07:57:12', '2024-10-01 07:57:12'),
(214, 'goals_title_en', '2024-10-01 08:06:37', '2024-10-01 08:06:37'),
(215, 'goals_title_ar', '2024-10-01 08:07:04', '2024-10-01 08:07:04'),
(216, 'Goals Title en', '2024-10-01 08:07:31', '2024-10-01 08:07:31'),
(217, 'Goals Title ar', '2024-10-01 08:07:31', '2024-10-01 08:07:31'),
(218, 'Goals Description en', '2024-10-01 08:08:06', '2024-10-01 08:08:06'),
(219, 'Goals Description ar', '2024-10-01 08:08:06', '2024-10-01 08:08:06'),
(220, 'goals_logo', '2024-10-01 08:09:09', '2024-10-01 08:09:09'),
(221, 'Goals Logo', '2024-10-01 08:10:16', '2024-10-01 08:10:16'),
(222, 'Goals Details', '2024-10-01 08:15:28', '2024-10-01 08:15:28'),
(223, 'sort', '2024-10-01 08:15:35', '2024-10-01 08:15:35'),
(224, 'url', '2024-10-01 08:15:35', '2024-10-01 08:15:35'),
(225, 'status', '2024-10-01 08:15:35', '2024-10-01 08:15:35'),
(226, 'change_status', '2024-10-01 08:15:35', '2024-10-01 08:15:35'),
(227, 'Message', '2024-10-01 08:36:47', '2024-10-01 08:36:47'),
(228, 'Ready to work and build the future together', '2024-10-01 09:12:03', '2024-10-01 09:12:03'),
(229, 'Do not hesitate to contact us', '2024-10-01 09:12:03', '2024-10-01 09:12:03'),
(230, 'How Works', '2024-10-01 09:46:07', '2024-10-01 09:46:07'),
(231, 'Company strategy', '2024-10-01 10:03:44', '2024-10-01 10:03:44'),
(232, 'Another Locations', '2024-10-02 07:33:34', '2024-10-02 07:33:34'),
(233, 'Google Analytics', '2024-10-02 07:33:34', '2024-10-02 07:33:34'),
(234, 'Another Location Phone', '2024-10-02 07:33:34', '2024-10-02 07:33:34'),
(235, 'Another Location', '2024-10-02 07:41:33', '2024-10-02 07:41:33'),
(236, 'Read More', '2024-10-31 12:11:49', '2024-10-31 12:11:49'),
(237, 'Our Message', '2024-10-31 12:11:49', '2024-10-31 12:11:49'),
(238, 'Our Golas', '2024-10-31 12:11:49', '2024-10-31 12:11:49'),
(239, 'Our Value', '2024-10-31 12:11:49', '2024-10-31 12:11:49'),
(240, 'Our Services', '2024-10-31 12:11:49', '2024-10-31 12:11:49'),
(241, 'Write description of services in homepage', '2024-10-31 12:11:49', '2024-10-31 12:11:49'),
(242, 'write blog description here', '2024-10-31 12:11:49', '2024-10-31 12:11:49'),
(243, 'View More', '2024-10-31 12:11:49', '2024-10-31 12:11:49'),
(244, 'Trading Questions', '2024-10-31 12:11:49', '2024-10-31 12:11:49'),
(245, 'Write your questions here of your trading faq', '2024-10-31 12:11:49', '2024-10-31 12:11:49'),
(246, 'Want help?', '2024-10-31 12:11:49', '2024-10-31 12:11:49'),
(247, 'Trading Faq2', '2024-10-31 12:11:49', '2024-10-31 12:11:49'),
(248, 'Fill out the information and we will contact you as soon as possible', '2024-11-03 06:39:51', '2024-11-03 06:39:51'),
(249, 'Send Message', '2024-11-03 06:39:51', '2024-11-03 06:39:51'),
(250, 'Call Us Now', '2024-11-03 06:40:28', '2024-11-03 06:40:28'),
(251, 'How do we work?', '2024-11-03 07:03:29', '2024-11-03 07:03:29');

-- --------------------------------------------------------

--
-- Table structure for table `word_translations`
--

CREATE TABLE `word_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `word_id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `word_translations`
--

INSERT INTO `word_translations` (`id`, `locale`, `word_id`, `value`, `created_at`, `updated_at`) VALUES
(3, 'en', 8, 'Dashboard', '2024-09-24 07:27:32', '2024-09-24 07:27:32'),
(4, 'ar', 8, 'لوحة التحكم', '2024-09-24 07:27:32', '2024-09-30 05:54:02'),
(5, 'en', 9, 'Home', '2024-09-24 07:27:32', '2024-09-24 07:27:32'),
(6, 'ar', 9, 'الرئـيسية', '2024-09-24 07:27:32', '2024-09-24 07:27:32'),
(15, 'en', 3, 'key', '2024-09-24 07:50:52', '2024-09-24 07:50:52'),
(16, 'ar', 3, 'key', '2024-09-24 07:50:52', '2024-09-24 07:50:52'),
(17, 'en', 4, 'trans_en', '2024-09-24 07:50:52', '2024-09-24 07:50:52'),
(18, 'ar', 4, 'trans_en', '2024-09-24 07:50:52', '2024-09-24 07:50:52'),
(19, 'en', 5, 'trans_ar', '2024-09-24 07:50:52', '2024-09-24 07:50:52'),
(20, 'ar', 5, 'trans_ar', '2024-09-24 07:50:52', '2024-09-24 07:50:52'),
(25, 'en', 10, 'Sliders', '2024-09-24 07:50:52', '2024-09-24 07:50:52'),
(26, 'ar', 10, 'السلايدر', '2024-09-24 07:50:52', '2024-09-30 05:54:02'),
(27, 'en', 11, 'Metatag', '2024-09-24 07:50:52', '2024-09-24 07:50:52'),
(28, 'ar', 11, 'ميتا تاج', '2024-09-24 07:50:52', '2024-09-30 05:54:02'),
(29, 'en', 12, 'About', '2024-09-24 07:50:52', '2024-09-24 07:50:52'),
(30, 'ar', 12, 'من نحن', '2024-09-24 07:50:52', '2024-09-30 05:54:02'),
(31, 'en', 13, 'About Us', '2024-09-24 07:50:52', '2024-09-24 07:50:52'),
(32, 'ar', 13, 'عن الشركة', '2024-09-24 07:50:52', '2024-09-24 07:50:52'),
(33, 'en', 14, 'Services', '2024-09-24 07:50:52', '2024-09-24 07:50:52'),
(34, 'ar', 14, 'خدماتنا', '2024-09-24 07:50:52', '2024-09-24 07:50:52'),
(35, 'en', 15, 'Feature', '2024-09-24 07:50:52', '2024-09-24 07:50:52'),
(36, 'ar', 15, 'المميزات', '2024-09-24 07:50:52', '2024-09-30 05:54:02'),
(37, 'en', 16, 'Social Media', '2024-09-24 07:50:52', '2024-09-24 07:50:52'),
(38, 'ar', 16, 'وسائل التواصل', '2024-09-24 07:50:52', '2024-09-30 05:54:02'),
(39, 'en', 17, 'Counters', '2024-09-24 07:50:52', '2024-09-24 07:50:52'),
(40, 'ar', 17, 'العدادات', '2024-09-24 07:50:52', '2024-09-30 05:54:02'),
(41, 'en', 18, 'Settings', '2024-09-24 07:50:52', '2024-09-24 07:50:52'),
(42, 'ar', 18, 'الاعدادات', '2024-09-24 07:50:52', '2024-09-30 05:54:02'),
(43, 'en', 19, 'Languages', '2024-09-24 07:50:52', '2024-09-24 07:50:52'),
(44, 'ar', 19, 'الغات', '2024-09-24 07:50:52', '2024-09-30 05:54:02'),
(45, 'en', 20, 'Contact Metatag', '2024-09-24 07:50:52', '2024-09-24 07:50:52'),
(46, 'ar', 20, 'تواصل معنا Metatag', '2024-09-24 07:50:52', '2024-09-24 07:52:02'),
(47, 'en', 41, 'Terms and Conditions', '2024-09-24 07:51:31', '2024-09-24 07:51:31'),
(48, 'ar', 41, 'Terms and Conditions', '2024-09-24 07:51:31', '2024-09-24 07:51:31'),
(51, 'en', 43, 'OK', '2024-09-24 07:51:31', '2024-09-24 07:51:31'),
(52, 'ar', 43, 'OK', '2024-09-24 07:51:31', '2024-09-24 07:51:31'),
(53, 'en', 44, 'Cancel', '2024-09-24 07:51:31', '2024-09-24 07:51:31'),
(54, 'ar', 44, 'الغاء', '2024-09-24 07:51:31', '2024-09-30 05:56:01'),
(55, 'en', 45, 'Projects', '2024-09-24 07:51:31', '2024-09-24 07:51:31'),
(56, 'ar', 45, 'مشاريعنا', '2024-09-24 07:51:31', '2024-09-24 07:51:31'),
(57, 'en', 33, 'contact_us', '2024-09-24 07:51:49', '2024-09-24 07:51:49'),
(58, 'ar', 33, 'تواصل معنا', '2024-09-24 07:51:49', '2024-09-30 05:55:16'),
(59, 'en', 36, 'Contact Us', '2024-09-24 07:51:49', '2024-09-24 07:51:49'),
(60, 'ar', 36, 'تواصل معنا', '2024-09-24 07:51:49', '2024-09-24 07:51:49'),
(63, 'en', 46, 'Consultation', '2024-09-24 08:58:59', '2024-10-01 11:06:55'),
(64, 'ar', 46, 'طلب استشارة', '2024-09-24 08:58:59', '2024-09-24 08:58:59'),
(65, 'en', 123, 'More', '2024-09-29 08:42:27', '2024-09-29 08:42:27'),
(66, 'ar', 123, 'المزيد', '2024-09-29 08:42:27', '2024-09-29 08:42:27'),
(67, 'en', 124, 'Explore our services now', '2024-09-29 09:00:40', '2024-09-29 09:00:40'),
(68, 'ar', 124, 'استكشف خدماتنا الان', '2024-09-29 09:00:40', '2024-09-29 09:00:40'),
(69, 'en', 131, 'Details', '2024-09-29 09:21:39', '2024-09-29 09:21:39'),
(70, 'ar', 131, 'التفاصيل', '2024-09-29 09:21:39', '2024-09-29 09:21:39'),
(71, 'en', 132, 'Service request', '2024-09-29 09:36:40', '2024-09-29 09:36:40'),
(72, 'ar', 132, 'طلب الخدمة', '2024-09-29 09:36:40', '2024-09-29 09:36:40'),
(73, 'en', 133, 'Customer Rates', '2024-09-30 03:18:41', '2024-09-30 03:18:41'),
(74, 'ar', 133, 'أراء عملائنا', '2024-09-30 03:18:41', '2024-09-30 06:44:18'),
(75, 'en', 139, 'Our customers\' opinions', '2024-09-30 03:18:41', '2024-09-30 03:18:41'),
(76, 'ar', 139, 'أراء عملائنا', '2024-09-30 03:18:41', '2024-09-30 03:18:41'),
(77, 'en', 140, 'Customers', '2024-09-30 03:18:41', '2024-09-30 03:18:41'),
(78, 'ar', 140, 'عملائنا', '2024-09-30 03:18:41', '2024-09-30 03:18:41'),
(79, 'en', 141, 'Our Team', '2024-09-30 04:30:05', '2024-09-30 04:30:05'),
(80, 'ar', 141, 'فريقنا', '2024-09-30 04:30:05', '2024-09-30 04:30:05'),
(83, 'en', 154, 'Meet The Team', '2024-09-30 04:30:05', '2024-09-30 04:30:05'),
(84, 'ar', 154, 'قابل فريق العمل', '2024-09-30 04:30:05', '2024-09-30 04:30:05'),
(85, 'en', 144, 'Job', '2024-09-30 04:40:47', '2024-09-30 04:40:47'),
(86, 'ar', 144, 'الوظيفة', '2024-09-30 04:40:47', '2024-09-30 04:40:47'),
(87, 'en', 145, 'Job en', '2024-09-30 04:40:47', '2024-09-30 04:40:47'),
(88, 'ar', 145, 'Job en', '2024-09-30 04:40:47', '2024-09-30 04:40:47'),
(89, 'en', 146, 'Job ar', '2024-09-30 04:40:47', '2024-09-30 04:40:47'),
(90, 'ar', 146, 'Job ar', '2024-09-30 04:40:47', '2024-09-30 04:40:47'),
(91, 'en', 21, 'profile', '2024-09-30 05:54:02', '2024-09-30 05:54:02'),
(92, 'ar', 21, 'البروفيل', '2024-09-30 05:54:02', '2024-09-30 05:54:02'),
(93, 'en', 22, 'logout', '2024-09-30 05:54:02', '2024-09-30 05:54:02'),
(94, 'ar', 22, 'تسجيل خروج', '2024-09-30 05:54:02', '2024-09-30 05:54:02'),
(95, 'en', 23, 'Not Found', '2024-09-30 05:54:02', '2024-09-30 05:54:02'),
(96, 'ar', 23, 'لم يتم العثور علي محتوي', '2024-09-30 05:54:02', '2024-09-30 05:54:02'),
(99, 'en', 40, 'Privacy Policy', '2024-09-30 05:56:01', '2024-09-30 05:56:01'),
(100, 'ar', 40, 'Privacy Policy', '2024-09-30 05:56:01', '2024-09-30 05:56:01'),
(105, 'en', 49, 'images', '2024-09-30 05:56:01', '2024-09-30 05:56:01'),
(106, 'ar', 49, 'images', '2024-09-30 05:56:01', '2024-09-30 05:56:01'),
(107, 'en', 50, 'Terms of Use', '2024-09-30 05:56:01', '2024-09-30 05:56:01'),
(108, 'ar', 50, 'Terms of Use', '2024-09-30 05:56:01', '2024-09-30 05:56:01'),
(109, 'en', 51, 'site_name_en', '2024-09-30 05:56:01', '2024-09-30 05:56:01'),
(110, 'ar', 51, 'site_name_en', '2024-09-30 05:56:02', '2024-09-30 05:56:02'),
(111, 'en', 52, 'site_name_ar', '2024-09-30 05:56:02', '2024-09-30 05:56:02'),
(112, 'ar', 52, 'site_name_ar', '2024-09-30 05:56:02', '2024-09-30 05:56:02'),
(113, 'en', 53, 'address_en', '2024-09-30 05:56:02', '2024-09-30 05:56:02'),
(114, 'ar', 53, 'address_en', '2024-09-30 05:56:02', '2024-09-30 05:56:02'),
(115, 'en', 54, 'address_ar', '2024-09-30 05:56:02', '2024-09-30 05:56:02'),
(116, 'ar', 54, 'address_ar', '2024-09-30 05:56:02', '2024-09-30 05:56:02'),
(117, 'en', 55, 'short_description_en', '2024-09-30 05:56:02', '2024-09-30 05:56:02'),
(118, 'ar', 55, 'short_description_en', '2024-09-30 05:56:02', '2024-09-30 05:56:02'),
(119, 'en', 56, 'short_description_ar', '2024-09-30 05:56:02', '2024-09-30 05:56:02'),
(120, 'ar', 56, 'short_description_ar', '2024-09-30 05:56:02', '2024-09-30 05:56:02'),
(121, 'en', 57, 'description_en', '2024-09-30 05:56:02', '2024-09-30 05:56:02'),
(122, 'ar', 57, 'description_en', '2024-09-30 05:56:02', '2024-09-30 05:56:02'),
(123, 'en', 58, 'description_ar', '2024-09-30 05:56:02', '2024-09-30 05:56:02'),
(124, 'ar', 58, 'description_ar', '2024-09-30 05:56:02', '2024-09-30 05:56:02'),
(125, 'en', 59, 'logo', '2024-09-30 05:56:02', '2024-09-30 05:56:02'),
(126, 'ar', 59, 'logo', '2024-09-30 05:56:02', '2024-09-30 05:56:02'),
(127, 'en', 147, 'Degree en', '2024-09-30 06:00:12', '2024-09-30 06:00:12'),
(128, 'ar', 147, 'Degree en', '2024-09-30 06:00:12', '2024-09-30 06:00:12'),
(129, 'en', 148, 'Degree ar', '2024-09-30 06:00:12', '2024-09-30 06:00:12'),
(130, 'ar', 148, 'Degree ar', '2024-09-30 06:00:12', '2024-09-30 06:00:12'),
(131, 'en', 149, 'Data Created Successfully', '2024-09-30 06:00:12', '2024-09-30 06:00:12'),
(132, 'ar', 149, 'Data Created Successfully', '2024-09-30 06:00:12', '2024-09-30 06:00:12'),
(133, 'en', 150, 'Degree', '2024-09-30 06:00:12', '2024-09-30 06:00:12'),
(134, 'ar', 150, 'Degree', '2024-09-30 06:00:12', '2024-09-30 06:00:12'),
(135, 'en', 151, 'Delete Item', '2024-09-30 06:00:12', '2024-09-30 06:00:12'),
(136, 'ar', 151, 'Delete Item', '2024-09-30 06:00:12', '2024-09-30 06:00:12'),
(137, 'en', 152, 'Are you sure?', '2024-09-30 06:00:12', '2024-09-30 06:00:12'),
(138, 'ar', 152, 'Are you sure?', '2024-09-30 06:00:12', '2024-09-30 06:00:12'),
(139, 'en', 153, 'Data Updated Successfully', '2024-09-30 06:00:12', '2024-09-30 06:00:12'),
(140, 'ar', 153, 'Data Updated Successfully', '2024-09-30 06:00:12', '2024-09-30 06:00:12'),
(141, 'en', 155, 'language', '2024-09-30 06:00:12', '2024-09-30 06:00:12'),
(142, 'ar', 155, 'language', '2024-09-30 06:00:12', '2024-09-30 06:00:12'),
(143, 'en', 156, 'Our Partners', '2024-09-30 06:00:12', '2024-09-30 06:00:12'),
(144, 'ar', 156, 'شركاؤنا', '2024-09-30 06:00:12', '2024-09-30 06:00:12'),
(145, 'en', 157, 'Partners of Success', '2024-09-30 06:00:12', '2024-09-30 06:00:12'),
(146, 'ar', 157, 'Partners of Success', '2024-09-30 06:00:12', '2024-09-30 06:00:12'),
(147, 'en', 158, 'Translations', '2024-09-30 06:00:12', '2024-09-30 06:00:12'),
(148, 'ar', 158, 'الترجمة', '2024-09-30 06:00:12', '2024-09-30 06:44:42'),
(149, 'en', 159, 'Search', '2024-09-30 06:00:12', '2024-09-30 06:00:12'),
(150, 'ar', 159, 'Search', '2024-09-30 06:00:12', '2024-09-30 06:00:12'),
(151, 'en', 160, 'save', '2024-09-30 06:00:12', '2024-09-30 06:00:12'),
(152, 'ar', 160, 'save', '2024-09-30 06:00:12', '2024-09-30 06:00:12'),
(153, 'en', 161, 'updated', '2024-09-30 06:00:12', '2024-09-30 06:00:12'),
(154, 'ar', 161, 'updated', '2024-09-30 06:00:12', '2024-09-30 06:00:12'),
(155, 'en', 165, 'Write your description here', '2024-09-30 07:43:30', '2024-09-30 07:43:30'),
(156, 'ar', 165, 'صور أحدث مشاريعنا', '2024-09-30 07:43:30', '2024-09-30 07:43:30'),
(157, 'en', 164, 'Our Projects', '2024-09-30 07:43:53', '2024-09-30 07:43:53'),
(158, 'ar', 164, 'مشاريعنا', '2024-09-30 07:43:53', '2024-09-30 07:43:53'),
(161, 'en', 187, 'Projects Images', '2024-09-30 09:41:06', '2024-09-30 09:41:06'),
(162, 'ar', 187, 'صور المشاريع', '2024-09-30 09:41:06', '2024-09-30 09:41:06'),
(163, 'en', 205, 'Vision', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(164, 'ar', 205, 'الرؤية', '2024-10-01 08:35:11', '2024-10-01 08:35:45'),
(165, 'en', 206, 'Values', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(166, 'ar', 206, 'القيم', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(167, 'en', 207, 'no_data_found', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(168, 'ar', 207, 'no_data_found', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(169, 'en', 208, 'No Data Found', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(170, 'ar', 208, 'No Data Found', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(171, 'en', 209, 'Icon', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(172, 'ar', 209, 'Icon', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(173, 'en', 210, 'Data has been created', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(174, 'ar', 210, 'Data has been created', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(175, 'en', 211, 'Goals', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(176, 'ar', 211, 'الاهداف', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(177, 'en', 212, 'Write description of goals', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(178, 'ar', 212, 'Write description of goals', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(179, 'en', 213, 'brands', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(180, 'ar', 213, 'brands', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(181, 'en', 214, 'goals_title_en', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(182, 'ar', 214, 'goals_title_en', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(183, 'en', 215, 'goals_title_ar', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(184, 'ar', 215, 'goals_title_ar', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(185, 'en', 216, 'Goals Title en', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(186, 'ar', 216, 'Goals Title en', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(187, 'en', 217, 'Goals Title ar', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(188, 'ar', 217, 'Goals Title ar', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(189, 'en', 218, 'Goals Description en', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(190, 'ar', 218, 'Goals Description en', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(191, 'en', 219, 'Goals Description ar', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(192, 'ar', 219, 'Goals Description ar', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(193, 'en', 220, 'goals_logo', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(194, 'ar', 220, 'goals_logo', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(195, 'en', 221, 'Goals Logo', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(196, 'ar', 221, 'Goals Logo', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(197, 'en', 222, 'Goals Details', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(198, 'ar', 222, 'Goals Details', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(199, 'en', 223, 'sort', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(200, 'ar', 223, 'sort', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(201, 'en', 224, 'url', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(202, 'ar', 224, 'url', '2024-10-01 08:35:11', '2024-10-01 08:35:11'),
(203, 'en', 195, 'Leave a Messages', '2024-10-01 08:37:57', '2024-10-01 08:37:57'),
(204, 'ar', 195, 'Leave a Messages', '2024-10-01 08:37:57', '2024-10-01 08:37:57'),
(205, 'en', 196, 'enter_your_message', '2024-10-01 08:37:57', '2024-10-01 08:37:57'),
(206, 'ar', 196, 'enter_your_message', '2024-10-01 08:37:57', '2024-10-01 08:37:57'),
(207, 'en', 204, 'Vision & Message', '2024-10-01 08:37:57', '2024-10-01 08:37:57'),
(208, 'ar', 204, 'Vision & Message', '2024-10-01 08:37:57', '2024-10-01 08:37:57'),
(209, 'en', 227, 'Message', '2024-10-01 08:37:57', '2024-10-01 08:37:57'),
(210, 'ar', 227, 'الرسالة', '2024-10-01 08:37:57', '2024-10-01 08:37:57'),
(211, 'en', 184, 'Home Page', '2024-10-01 08:39:21', '2024-10-01 08:39:21'),
(212, 'ar', 184, 'الصفحه الرئـيسية', '2024-10-01 08:39:21', '2024-10-01 08:39:21'),
(213, 'en', 228, 'Ready to work and build the future together', '2024-10-01 09:12:23', '2024-10-01 09:12:23'),
(214, 'ar', 228, 'جاهزون للعمل وبناء المستقبل معا', '2024-10-01 09:12:23', '2024-10-01 09:12:23'),
(215, 'en', 229, 'Do not hesitate to contact us', '2024-10-01 09:12:39', '2024-10-01 09:12:39'),
(216, 'ar', 229, 'لا تتردد بالتواصل معنا', '2024-10-01 09:12:39', '2024-10-01 09:12:39'),
(217, 'en', 230, 'How Works', '2024-10-01 09:47:13', '2024-10-01 09:47:13'),
(218, 'ar', 230, 'كيف نعمل', '2024-10-01 09:47:13', '2024-10-01 09:47:13'),
(219, 'en', 186, 'Important links', '2024-10-02 07:27:59', '2024-10-02 07:27:59'),
(220, 'ar', 186, 'روابط مهمة', '2024-10-02 07:27:59', '2024-10-02 07:27:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_translations`
--
ALTER TABLE `about_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `about_translations_about_id_foreign` (`about_id`),
  ADD KEY `about_translations_locale_index` (`locale`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_phone_unique` (`phone`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_translations`
--
ALTER TABLE `blog_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_translations_blog_id_foreign` (`blog_id`),
  ADD KEY `blog_translations_locale_index` (`locale`);

--
-- Indexes for table `countrs`
--
ALTER TABLE `countrs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countr_translations`
--
ALTER TABLE `countr_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `countr_translations_countr_id_foreign` (`countr_id`),
  ADD KEY `countr_translations_locale_index` (`locale`);

--
-- Indexes for table `customer_rates`
--
ALTER TABLE `customer_rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_rate_translations`
--
ALTER TABLE `customer_rate_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_rate_translations_customer_rate_id_foreign` (`customer_rate_id`),
  ADD KEY `customer_rate_translations_locale_index` (`locale`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_translations`
--
ALTER TABLE `faq_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faq_translations_faq_id_foreign` (`faq_id`),
  ADD KEY `faq_translations_locale_index` (`locale`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_translations`
--
ALTER TABLE `feature_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feature_translations_feature_id_foreign` (`feature_id`),
  ADD KEY `feature_translations_locale_index` (`locale`);

--
-- Indexes for table `how_works`
--
ALTER TABLE `how_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `how_works_translations`
--
ALTER TABLE `how_works_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `how_works_translations_how_work_id_foreign` (`how_work_id`),
  ADD KEY `how_works_translations_locale_index` (`locale`);

--
-- Indexes for table `langs`
--
ALTER TABLE `langs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_tag_banners`
--
ALTER TABLE `meta_tag_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_tag_banner_translations`
--
ALTER TABLE `meta_tag_banner_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `meta_tag_banner_translations_meta_tag_banner_id_foreign` (`meta_tag_banner_id`),
  ADD KEY `meta_tag_banner_translations_locale_index` (`locale`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parteners`
--
ALTER TABLE `parteners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_translations`
--
ALTER TABLE `service_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_translations_service_id_foreign` (`service_id`),
  ADD KEY `service_translations_locale_index` (`locale`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_translations`
--
ALTER TABLE `slider_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slider_translations_slider_id_foreign` (`slider_id`),
  ADD KEY `slider_translations_locale_index` (`locale`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_translations`
--
ALTER TABLE `team_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_translations_team_id_foreign` (`team_id`),
  ADD KEY `team_translations_locale_index` (`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `values`
--
ALTER TABLE `values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `value_translations`
--
ALTER TABLE `value_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `value_translations_value_id_foreign` (`value_id`),
  ADD KEY `value_translations_locale_index` (`locale`);

--
-- Indexes for table `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `word_translations`
--
ALTER TABLE `word_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `word_translations_word_id_foreign` (`word_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_translations`
--
ALTER TABLE `about_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_translations`
--
ALTER TABLE `blog_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `countrs`
--
ALTER TABLE `countrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `countr_translations`
--
ALTER TABLE `countr_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `customer_rates`
--
ALTER TABLE `customer_rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer_rate_translations`
--
ALTER TABLE `customer_rate_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faq_translations`
--
ALTER TABLE `faq_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feature_translations`
--
ALTER TABLE `feature_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `how_works`
--
ALTER TABLE `how_works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `how_works_translations`
--
ALTER TABLE `how_works_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `langs`
--
ALTER TABLE `langs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `meta_tag_banners`
--
ALTER TABLE `meta_tag_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `meta_tag_banner_translations`
--
ALTER TABLE `meta_tag_banner_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `parteners`
--
ALTER TABLE `parteners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service_translations`
--
ALTER TABLE `service_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider_translations`
--
ALTER TABLE `slider_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `team_translations`
--
ALTER TABLE `team_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `values`
--
ALTER TABLE `values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `value_translations`
--
ALTER TABLE `value_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `words`
--
ALTER TABLE `words`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;

--
-- AUTO_INCREMENT for table `word_translations`
--
ALTER TABLE `word_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `about_translations`
--
ALTER TABLE `about_translations`
  ADD CONSTRAINT `about_translations_about_id_foreign` FOREIGN KEY (`about_id`) REFERENCES `abouts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_translations`
--
ALTER TABLE `blog_translations`
  ADD CONSTRAINT `blog_translations_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `countr_translations`
--
ALTER TABLE `countr_translations`
  ADD CONSTRAINT `countr_translations_countr_id_foreign` FOREIGN KEY (`countr_id`) REFERENCES `countrs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customer_rate_translations`
--
ALTER TABLE `customer_rate_translations`
  ADD CONSTRAINT `customer_rate_translations_customer_rate_id_foreign` FOREIGN KEY (`customer_rate_id`) REFERENCES `customer_rates` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `faq_translations`
--
ALTER TABLE `faq_translations`
  ADD CONSTRAINT `faq_translations_faq_id_foreign` FOREIGN KEY (`faq_id`) REFERENCES `faqs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `feature_translations`
--
ALTER TABLE `feature_translations`
  ADD CONSTRAINT `feature_translations_feature_id_foreign` FOREIGN KEY (`feature_id`) REFERENCES `features` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `how_works_translations`
--
ALTER TABLE `how_works_translations`
  ADD CONSTRAINT `how_works_translations_how_work_id_foreign` FOREIGN KEY (`how_work_id`) REFERENCES `how_works` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `meta_tag_banner_translations`
--
ALTER TABLE `meta_tag_banner_translations`
  ADD CONSTRAINT `meta_tag_banner_translations_meta_tag_banner_id_foreign` FOREIGN KEY (`meta_tag_banner_id`) REFERENCES `meta_tag_banners` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `service_translations`
--
ALTER TABLE `service_translations`
  ADD CONSTRAINT `service_translations_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `slider_translations`
--
ALTER TABLE `slider_translations`
  ADD CONSTRAINT `slider_translations_slider_id_foreign` FOREIGN KEY (`slider_id`) REFERENCES `sliders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `team_translations`
--
ALTER TABLE `team_translations`
  ADD CONSTRAINT `team_translations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `value_translations`
--
ALTER TABLE `value_translations`
  ADD CONSTRAINT `value_translations_value_id_foreign` FOREIGN KEY (`value_id`) REFERENCES `values` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `word_translations`
--
ALTER TABLE `word_translations`
  ADD CONSTRAINT `word_translations_word_id_foreign` FOREIGN KEY (`word_id`) REFERENCES `words` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
