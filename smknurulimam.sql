-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2020 at 08:06 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smknurulimam`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `no_certificate` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`id`, `teacher_id`, `no_certificate`, `created_at`, `updated_at`) VALUES
(1, 1, 1929382391, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `class_name`, `created_at`, `updated_at`) VALUES
(1, '7', NULL, NULL),
(2, '8', NULL, NULL),
(3, '9', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `company_name`, `created_at`, `updated_at`) VALUES
(2, 'PT KAMUU Wong Tuwo', NULL, '2020-07-09 11:37:54'),
(3, 'PT Asuransi Jiwa', '2020-07-04 13:06:55', '2020-07-04 13:06:55'),
(4, 'PT Prima Logic', '2020-07-04 13:07:22', '2020-07-04 13:07:22'),
(5, 'PT ABC', '2020-07-04 14:16:16', '2020-07-04 14:16:16'),
(6, 'PT Saya OKE', '2020-07-04 14:16:34', '2020-07-04 14:16:34'),
(7, 'PT NUTRISARI', '2020-07-04 14:16:51', '2020-07-04 14:16:51'),
(8, 'PT AA', '2020-07-09 12:15:29', '2020-07-09 12:15:29');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `education_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `ktp`
--

CREATE TABLE `ktp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `nomor_ktp` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ktp`
--

INSERT INTO `ktp` (`id`, `teacher_id`, `nomor_ktp`, `created_at`, `updated_at`) VALUES
(1, 1, 1231212, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `user_id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(6, 5, 'notification', 'isi notification', '2020-06-28 00:05:50', '2020-06-28 00:05:50'),
(7, 1, 'notification', 'isi notification', '2020-06-28 00:06:23', '2020-06-28 00:06:23'),
(8, 1, 'notification', 'isi notification', '2020-06-28 00:06:43', '2020-06-28 00:06:43'),
(9, 5, 'notification', 'isi notification', '2020-06-28 00:07:29', '2020-06-28 00:07:29'),
(10, 5, 'Hello', 'Hello', '2020-06-28 00:35:13', '2020-06-28 00:35:13'),
(11, 1, 'Hello To', 'Hello To', '2020-06-28 00:37:22', '2020-06-28 00:37:22');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_06_22_032957_create_posts_table', 1),
(5, '2020_06_22_121555_create_student_table', 1),
(6, '2020_06_23_011250_create_nisn_table', 1),
(7, '2020_06_23_040752_create_nik_table', 1),
(8, '2020_06_23_040814_create_phone_table', 1),
(9, '2020_06_23_040837_create_teachers_table', 1),
(10, '2020_06_23_112948_create_ktp_table', 1),
(11, '2020_06_23_113155_create_tmt_table', 1),
(12, '2020_06_23_113250_create_nuptk_table', 1),
(13, '2020_06_23_113343_create_programstudy_table', 1),
(14, '2020_06_23_113706_create_certificate_table', 1),
(15, '2020_06_23_120854_create_education_table', 1),
(16, '2020_06_24_011255_create_status_table', 1),
(17, '2020_06_25_061755_create_rpp_table', 2),
(18, '2020_06_25_063700_create_study_table', 2),
(19, '2020_06_25_063713_create_class_table', 2),
(20, '2020_06_27_074246_create_subject_table', 3),
(21, '2020_06_27_112943_create_status_student_table', 4),
(22, '2020_06_28_063923_create_notifications_table', 5),
(23, '2020_06_28_064211_create_lessons_table', 5),
(24, '2020_06_28_124751_create_status_account_table', 6),
(25, '2020_06_29_014259_create_programs_table', 7),
(26, '2020_06_29_022425_laratrust_setup_tables', 8),
(27, '2020_06_29_041851_create_nik_student_table', 9),
(28, '2020_06_29_041916_create_nisn_student_table', 9),
(29, '2020_06_29_041247_create_students_table', 10),
(30, '2020_07_01_071445_create_programs_excellent_table', 11),
(31, '2020_07_04_192118_create_company_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `nik`
--

CREATE TABLE `nik` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nik`
--

INSERT INTO `nik` (`id`, `teacher_id`, `nik`, `created_at`, `updated_at`) VALUES
(6, 1, 2019, '2020-06-24 22:29:36', '2020-06-24 22:29:36'),
(15, 2, 2010, '2020-06-24 22:43:51', '2020-06-24 22:43:51'),
(33, 3, 2011, '2020-06-24 23:10:49', '2020-06-24 23:10:49'),
(35, 4, 2012, '2020-06-24 23:12:13', '2020-06-24 23:12:13'),
(36, 5, 1133412, '2020-06-24 23:16:53', '2020-06-24 23:16:53'),
(38, 6, 20101, '2020-06-26 02:51:51', '2020-06-26 02:51:51'),
(40, 7, 2010123, '2020-07-01 12:19:14', '2020-07-01 12:19:14'),
(41, 10, 40559, '2020-07-02 06:39:50', '2020-07-02 06:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `nik_student`
--

CREATE TABLE `nik_student` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nik_student`
--

INSERT INTO `nik_student` (`id`, `nik`, `created_at`, `updated_at`) VALUES
(1, 234234, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nisn_student`
--

CREATE TABLE `nisn_student` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nisn` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nisn_student`
--

INSERT INTO `nisn_student` (`id`, `nisn`, `created_at`, `updated_at`) VALUES
(1, 123331112, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('19e05ae9-5be3-469c-9aba-94471bedb0f6', 'App\\Notifications\\NewLessonNotification', 'App\\User', 6, '{\"lesson\":{\"id\":6,\"user_id\":5,\"title\":\"notification\",\"body\":\"isi notification\",\"created_at\":\"2020-06-28T07:05:50.000000Z\",\"updated_at\":\"2020-06-28T07:05:50.000000Z\"}}', NULL, '2020-06-28 00:05:50', '2020-06-28 00:05:50'),
('4451d460-f8a2-4cd5-921b-3fa0b011812f', 'App\\Notifications\\NewLessonNotification', 'App\\User', 5, '{\"lesson\":{\"id\":8,\"user_id\":1,\"title\":\"notification\",\"body\":\"isi notification\",\"created_at\":\"2020-06-28T07:06:43.000000Z\",\"updated_at\":\"2020-06-28T07:06:43.000000Z\"}}', NULL, '2020-06-28 00:06:44', '2020-06-28 00:06:44'),
('4adf5de1-1917-417b-b17e-7791bcdd0dc6', 'App\\Notifications\\NewLessonNotification', 'App\\User', 6, '{\"lesson\":{\"id\":11,\"user_id\":1,\"title\":\"Hello To\",\"body\":\"Hello To\",\"created_at\":\"2020-06-28T07:37:22.000000Z\",\"updated_at\":\"2020-06-28T07:37:22.000000Z\"}}', NULL, '2020-06-28 00:37:22', '2020-06-28 00:37:22'),
('990ebbef-c217-442a-9399-96d9c990c6b3', 'App\\Notifications\\NewLessonNotification', 'App\\User', 6, '{\"lesson\":{\"id\":10,\"user_id\":5,\"title\":\"Hello\",\"body\":\"Hello\",\"created_at\":\"2020-06-28T07:35:13.000000Z\",\"updated_at\":\"2020-06-28T07:35:13.000000Z\"}}', NULL, '2020-06-28 00:35:13', '2020-06-28 00:35:13'),
('d62db653-8a46-453b-806c-ec9373e14552', 'App\\Notifications\\NewLessonNotification', 'App\\User', 6, '{\"lesson\":{\"id\":8,\"user_id\":1,\"title\":\"notification\",\"body\":\"isi notification\",\"created_at\":\"2020-06-28T07:06:43.000000Z\",\"updated_at\":\"2020-06-28T07:06:43.000000Z\"}}', NULL, '2020-06-28 00:06:44', '2020-06-28 00:06:44'),
('de47754d-0042-449d-af3d-8d7e7a4f9c1a', 'App\\Notifications\\NewLessonNotification', 'App\\User', 6, '{\"lesson\":{\"id\":7,\"user_id\":1,\"title\":\"notification\",\"body\":\"isi notification\",\"created_at\":\"2020-06-28T07:06:23.000000Z\",\"updated_at\":\"2020-06-28T07:06:23.000000Z\"}}', NULL, '2020-06-28 00:06:23', '2020-06-28 00:06:23'),
('dfd8bcdd-ae7e-49e5-ada9-de591bc8efe8', 'App\\Notifications\\NewLessonNotification', 'App\\User', 1, '{\"lesson\":{\"id\":6,\"user_id\":5,\"title\":\"notification\",\"body\":\"isi notification\",\"created_at\":\"2020-06-28T07:05:50.000000Z\",\"updated_at\":\"2020-06-28T07:05:50.000000Z\"}}', NULL, '2020-06-28 00:05:50', '2020-06-28 00:05:50'),
('e7785bc6-bd05-4889-83ea-b17c4e9e39da', 'App\\Notifications\\NewLessonNotification', 'App\\User', 1, '{\"lesson\":{\"id\":10,\"user_id\":5,\"title\":\"Hello\",\"body\":\"Hello\",\"created_at\":\"2020-06-28T07:35:13.000000Z\",\"updated_at\":\"2020-06-28T07:35:13.000000Z\"}}', NULL, '2020-06-28 00:35:13', '2020-06-28 00:35:13'),
('eb74f241-76e4-40db-91cd-7f41007cfac5', 'App\\Notifications\\NewLessonNotification', 'App\\User', 5, '{\"lesson\":{\"id\":7,\"user_id\":1,\"title\":\"notification\",\"body\":\"isi notification\",\"created_at\":\"2020-06-28T07:06:23.000000Z\",\"updated_at\":\"2020-06-28T07:06:23.000000Z\"}}', NULL, '2020-06-28 00:06:23', '2020-06-28 00:06:23'),
('faa20ab9-7953-4ed5-8c35-b3e65fda6ad2', 'App\\Notifications\\NewLessonNotification', 'App\\User', 5, '{\"lesson\":{\"id\":11,\"user_id\":1,\"title\":\"Hello To\",\"body\":\"Hello To\",\"created_at\":\"2020-06-28T07:37:22.000000Z\",\"updated_at\":\"2020-06-28T07:37:22.000000Z\"}}', NULL, '2020-06-28 00:37:22', '2020-06-28 00:37:22');

-- --------------------------------------------------------

--
-- Table structure for table `nuptk`
--

CREATE TABLE `nuptk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `no_nuptk` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nuptk`
--

INSERT INTO `nuptk` (`id`, `teacher_id`, `no_nuptk`, `created_at`, `updated_at`) VALUES
(1, 1, 139283923, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'apps-register', 'Create Users', 'create new blog posts', '2020-06-30 00:08:18', '2020-06-30 00:08:18'),
(2, 'edit-user', 'Edit Users', 'edit existing users', '2020-06-30 00:08:18', '2020-06-30 00:08:18');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 6),
(2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_user`
--

INSERT INTO `permission_user` (`permission_id`, `user_id`, `user_type`) VALUES
(1, 7, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(7, 7, 'test', 'test', '2020-07-10 09:26:48', '2020-07-10 09:26:48'),
(8, 7, 'token', 'token', '2020-07-10 09:29:38', '2020-07-10 09:29:38'),
(10, 6, 'asdadsasd', 'asdasda', '2020-07-10 09:44:46', '2020-07-10 09:44:46'),
(11, 7, 'test5', 'test5', '2020-07-10 09:48:36', '2020-07-10 09:48:36'),
(12, 7, 'hshshe', 'hshshs', '2020-07-10 11:19:39', '2020-07-10 11:19:39'),
(13, 7, 'heloo', 'hello', '2020-07-10 11:20:15', '2020-07-10 11:20:15');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `time_programs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `person_charge` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_activitie` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `evaluation_activitie` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `time_programs`, `time`, `person_charge`, `desc_activitie`, `evaluation_activitie`, `created_at`, `updated_at`) VALUES
(10, '2020-07-10', '11:18', 'Ruri Susanti', 'Lorem ipsum dolor sit amet consectetur, ad', 'Lorem ipsum dolor sit amet consectet', '2020-07-01 04:18:40', '2020-07-01 04:18:40'),
(16, '2020-07-02', '11:44', 'Lorem ipsum dolor sit amet consectetur, ad', 'Lorem ipsum dolor sit amet consectetur, ad', 'Lorem ipsum dolor sit amet consectetur, ad', '2020-07-01 04:44:41', '2020-07-01 04:44:41'),
(17, '2020-07-02', '11:44', 'Lorem ipsum dolor sit amet consectetur, ad', 'Lorem ipsum dolor sit amet consectetur, ad', 'Lorem ipsum dolor sit amet consectetur, ad', '2020-07-01 04:44:48', '2020-07-01 04:44:48'),
(18, '2020-07-04', '11:44', 'Lorem ipsum dolor sit amet consectetur, ad', 'Lorem ipsum dolor sit amet consectetur, ad', 'Lorem ipsum dolor sit amet consectetur, ad', '2020-07-01 04:44:59', '2020-07-01 04:44:59'),
(19, '2020-07-03', '11:45', 'Lorem ipsum dolor sit amet consectetur, ad', 'Lorem ipsum dolor sit amet consectetur, ad', 'Lorem ipsum dolor sit amet consectetur, ad', '2020-07-01 04:45:12', '2020-07-01 04:45:12'),
(20, '2020-07-10', '11:45', 'Lorem ipsum dolor sit amet consectetur, ad', 'Lorem ipsum dolor sit amet consectetur, ad', 'Lorem ipsum dolor sit amet consectetur, ad', '2020-07-01 04:45:20', '2020-07-01 04:45:20'),
(21, '2020-06-30', '11:45', 'Lorem ipsum dolor sit amet consectetur, ad', 'Lorem ipsum dolor sit amet consectetur, ad', 'Lorem ipsum dolor sit amet consectetur, ad', '2020-07-01 04:45:36', '2020-07-01 04:45:36'),
(22, '2020-06-30', '12:01', 'Lorem ipsum dolor sit amet consectetur, ad', 'Lorem update mu', 'Lorem ipsum dolor sit amet consectetur, ad', '2020-07-02 04:50:00', '2020-07-04 12:17:41'),
(27, '2020-06-30', '12:10', 'Lorem ipsum dolor sit amet consectetur, ad', 'Lorem lorem', 'Lorem ipsum dolor sit amet consectetur, ad', '2020-07-02 05:00:59', '2020-07-02 05:11:19');

-- --------------------------------------------------------

--
-- Table structure for table `program_study`
--

CREATE TABLE `program_study` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_program_study` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_program_study` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `program_study`
--

INSERT INTO `program_study` (`id`, `name_program_study`, `desc_program_study`, `created_at`, `updated_at`) VALUES
(1, 'Tataboga', 'Memasak', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(6, 'admin', 'Admin', NULL, '2020-06-28 19:39:40', '2020-06-28 19:39:40'),
(8, 'member', 'Member', NULL, '2020-06-28 19:41:31', '2020-06-28 19:41:31');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(6, 7, 'App\\User'),
(8, 8, 'App\\User'),
(8, 15, 'App\\User'),
(6, 31, 'App\\User'),
(8, 32, 'App\\User'),
(8, 33, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `rpp`
--

CREATE TABLE `rpp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `study_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_ajaran` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kompentensi_dasat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ipk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendekatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alat_media` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber_belajar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penilaian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pertemuan` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alokasi_waktu` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rpp`
--

INSERT INTO `rpp` (`id`, `user_id`, `study_id`, `class_id`, `semester`, `tahun_ajaran`, `kompentensi_dasat`, `ipk`, `tujuan`, `materi`, `pendekatan`, `model`, `alat_media`, `sumber_belajar`, `penilaian`, `tanggal`, `created_at`, `updated_at`, `pertemuan`, `alokasi_waktu`) VALUES
(17, 7, 0, 0, 'Ganjil', '2019', 'Dasar', NULL, 'Tujuan', 'Materi', 'pendekatan', 'Model', 'Alat', 'Belajar', 'Penialian', '20', '2020-07-05 10:25:39', '2020-07-05 10:25:39', '1', '2 Jam'),
(18, 7, 1, 0, 'Ganjil', '123', 'Tqyqy', NULL, 'Iwisiw', 'Hshsh', 'jsjsjjsj', 'Jsjsj', 'Hshsh', 'Hshsh', 'Hsbsh', '646', '2020-07-05 10:37:18', '2020-07-05 10:37:18', '1', '2 Jam');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status_name`, `created_at`, `updated_at`) VALUES
(1, 'Murid', NULL, NULL),
(2, 'Guru', NULL, NULL),
(3, 'Super Admin', NULL, NULL),
(4, 'Kepala Sekolah', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status_account`
--

CREATE TABLE `status_account` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status_account`
--

INSERT INTO `status_account` (`id`, `status_name`, `status_code`, `created_at`, `updated_at`) VALUES
(1, 'Super Users', 'SU', NULL, NULL),
(2, 'Teachers', 'TCH', NULL, NULL),
(3, 'Head Master', 'HM', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status_student`
--

CREATE TABLE `status_student` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_student_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status_student`
--

INSERT INTO `status_student` (`id`, `status_student_name`, `created_at`, `updated_at`) VALUES
(1, 'Reguler', NULL, NULL),
(2, 'inklusi', NULL, NULL),
(3, 'Beasiswa', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn_student_id` bigint(20) UNSIGNED NOT NULL,
  `schoo_origin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_student_id` bigint(20) UNSIGNED NOT NULL,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_student_id` bigint(11) UNSIGNED NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobs_parents` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `full_name`, `genre`, `nisn_student_id`, `schoo_origin`, `address`, `nik_student_id`, `height`, `weight`, `status_student_id`, `note`, `father_name`, `mother_name`, `jobs_parents`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Alian hakim', 'Laki-Laki', 1, 'smk insan mandiri', 'ciwaruga', 1, '155', '54', 1, 'tidak ada', 'surya', 'eulis', 'wirasuwasta', 12312, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `study`
--

CREATE TABLE `study` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `study_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `study_desc` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `study`
--

INSERT INTO `study` (`id`, `study_name`, `study_desc`, `created_at`, `updated_at`) VALUES
(1, 'Indonesia', 'Bahasa Indonesia', NULL, NULL),
(2, 'Inggris', 'Bahasa Inggris', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Productif', 'Productif', NULL, NULL),
(4, 'Sunda', 'Bahasa Sunda', NULL, NULL),
(7, 'english', 'english', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subject_list`
--

CREATE TABLE `subject_list` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `times` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `study_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count_times` int(11) NOT NULL,
  `study_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subject_list`
--

INSERT INTO `subject_list` (`id`, `times`, `study_time`, `count_times`, `study_id`, `created_at`, `updated_at`) VALUES
(1, '10', '09.00', 2, 6, NULL, NULL),
(2, '20', '10', 20, 6, '2020-06-27 01:23:18', '2020-06-27 01:23:18'),
(3, '20', '30', 10, 7, '2020-06-27 01:28:03', '2020-06-27 01:28:03'),
(4, '10', '20', 10, 6, '2020-06-27 04:28:11', '2020-06-27 04:28:11');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `programstudy_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `first_name`, `last_name`, `full_name`, `date_of_birth`, `address`, `programstudy_id`, `created_at`, `updated_at`) VALUES
(1, 'Ruri', 'Susanti', 'Ruri Susanti', '2020-10-01', 'Jalan Ciwaruga', 1, NULL, '2020-07-02 13:15:22'),
(2, 'Alian', 'Hakim', 'Alian Hakim', '2020-10-10', 'Jlan ciwaruga 2 Bandung', 1, '2020-06-24 17:27:52', '2020-06-24 17:28:18'),
(3, 'Alian', 'Hakim', 'Alian Hakim', '2001-01-07', 'Bandung', 1, '2020-06-24 18:25:13', '2020-06-24 18:25:13'),
(4, 'A', 'a', 'A a', '4447-09-13', 'Jalan Ciwaruga 2 Bandung', 1, '2020-06-24 18:26:47', '2020-06-24 23:15:57'),
(5, 'Alian1', 'Hakim1', 'Alian1 Hakim1', '2020-10-10', 'Kp Parigilame No.53 RT/03 Rw/07 Kecamatan Parongpong', 1, '2020-06-24 20:02:44', '2020-06-24 22:23:55'),
(6, 'Alian1', 'Hakim1', 'Alian1 Hakim1', '2020-10-10', 'KP Parongpong No .53', 1, '2020-06-24 20:04:46', '2020-06-27 22:25:56'),
(7, 'Alian', 'Hakim', 'Alian Hakim', '6469-06-03', 'najananannw', 1, '2020-06-24 20:35:49', '2020-06-24 20:35:49'),
(8, 'Alian', 'Hakim', 'Alian Hakim', '6469-06-04', 'djdjsksowjdpq', 1, '2020-06-24 20:37:25', '2020-06-24 20:37:25'),
(9, 'Alian', 'Hakim', 'Alian Hakim', '5670-06-05', 'tggggggy', 1, '2020-06-24 20:38:28', '2020-06-24 20:38:28'),
(10, 'Alian', 'Hakim', 'Alian Hakim', '5559-08-24', 'ggygugg', 1, '2020-06-24 20:42:31', '2020-06-24 20:42:31'),
(11, 'Alian', 'Hakim', 'Alian Hakim', '9007-02-04', 'bbhkhjihn.', 1, '2020-06-24 20:43:56', '2020-06-24 20:43:56'),
(12, 'Alian', 'Hakim', 'Alian Hakim', '6570-06-04', 'vxfiyifoyoyiyo', 1, '2020-06-24 20:45:54', '2020-06-24 20:45:54'),
(13, 'Alian', 'Hakim', 'Alian Hakim', '3133-08-02', 'uwhwuwuiww', 1, '2020-06-24 20:49:45', '2020-06-24 20:49:45'),
(14, 'Alian', 'Hakim', 'Alian Hakim', '3540-10-07', 'jxhxhfuf8d7', 1, '2020-06-24 20:53:44', '2020-06-24 20:53:44'),
(15, 'Fayola', 'hayra', 'Fayola hayra', '1888-01-23', 'Bandung', 1, '2020-06-24 21:15:10', '2020-06-24 21:15:10'),
(16, 'Keysha', 'hayra', 'Keysha hayra', '1888-01-23', 'Cimahi', 1, '2020-06-24 21:17:31', '2020-06-24 21:17:31');

-- --------------------------------------------------------

--
-- Table structure for table `tmt`
--

CREATE TABLE `tmt` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `no_tmt` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tmt`
--

INSERT INTO `tmt` (`id`, `teacher_id`, `no_tmt`, `created_at`, `updated_at`) VALUES
(1, 1, 12323212, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` int(1) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_token` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_account_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `status_id`, `email_verified_at`, `password`, `remember_token`, `_token`, `status_account_id`, `created_at`, `updated_at`) VALUES
(7, 'example', 'example@gmail.com', 1, NULL, '$2y$10$gQ9cEu//br3Z05yQMniYneTy/ohNj83M8mNQSlti4E6v7l915L2hG', NULL, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xOTIuMTY4LjEwMC40ODo4MDAwXC9hcGlcL3YxXC9kYXRhXC9sb2dpbiIsImlhdCI6MTU5NDM4NDcxNywiZXhwIjoxNTk0Mzg4MzE3LCJuYmYiOjE1OTQzODQ3MTcsImp0aSI6Imkya01PeURyempJRGtTQVEiLCJzdWIiOjcsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.3xvKQVPsyXEywsv8kBv5gw61mqTGQPvewQaRrtFwoLQ', 1, '2020-06-24 05:25:09', '2020-07-10 12:38:37'),
(8, 'Member', 'member@gmail.com', NULL, NULL, '$2y$10$biklO.4Yatr8HrzQziarRuPbCx6F41LUYVanDzzXMUrBw990H2zKe', NULL, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xOTIuMTY4LjEwMC40ODo4MDAwXC9sb2dpbiIsImlhdCI6MTU5Mzg3MjMyOSwiZXhwIjoxNTkzODc1OTI5LCJuYmYiOjE1OTM4NzIzMjksImp0aSI6IlRXQTR5SnNsTThFWHpSTEUiLCJzdWIiOjgsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.B-_th60adSPhyrM60dD4gKZeJsvf9yQIQNqTkSajf78', 1, '2020-06-28 19:41:31', '2020-07-04 14:18:49'),
(31, 'example3', 'example3@gmail.com', NULL, NULL, '$2y$10$CKxzJF4X6n3QzcMipIbfNO8r4BtRMno5VR/YMPlNWPckY05XQ2WWq', NULL, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xOTIuMTY4LjEwMC40ODo4MDAwXC9sb2dpbiIsImlhdCI6MTU5MzQ5Mzc4NywiZXhwIjoxNTkzNDk3Mzg3LCJuYmYiOjE1OTM0OTM3ODcsImp0aSI6IkFTY0hFT0pLTlR5c2VTNDUiLCJzdWIiOjMxLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.kknBGuiAnSdd_mTn4eHNQOijTi5fKWApuGSbrIJ0Uq4', NULL, '2020-06-29 22:05:40', '2020-06-29 22:09:47'),
(32, 'example4', 'example4@gmail.com', NULL, NULL, '$2y$10$VhZpQ3hp3Gd.X2W1NVQ6Quhrmw.jOcUcpT/yumGcMZMNr2VOJxwRW', NULL, NULL, NULL, '2020-06-29 22:52:18', '2020-06-29 22:52:18'),
(33, 'aa', 'aa@gmail.com', NULL, NULL, '$2y$10$p3uUGiyPdZzeHckvQVWCYuhHiaKI/cVyL0YeEvn5kyy3fRhtPZ.py', NULL, NULL, NULL, '2020-06-30 00:31:47', '2020-06-30 00:31:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ktp`
--
ALTER TABLE `ktp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ktp_nomor_ktp_unique` (`nomor_ktp`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nik`
--
ALTER TABLE `nik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `nik_student`
--
ALTER TABLE `nik_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nisn_student`
--
ALTER TABLE `nisn_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `nuptk`
--
ALTER TABLE `nuptk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_title_unique` (`title`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_study`
--
ALTER TABLE `program_study`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `rpp`
--
ALTER TABLE `rpp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_account`
--
ALTER TABLE `status_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_student`
--
ALTER TABLE `status_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_nisn_id_foreign` (`nisn_student_id`),
  ADD KEY `student_nik_id_foreign` (`nik_student_id`),
  ADD KEY `status_account_foreign` (`status_student_id`);

--
-- Indexes for table `study`
--
ALTER TABLE `study`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_list`
--
ALTER TABLE `subject_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tmt`
--
ALTER TABLE `tmt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ktp`
--
ALTER TABLE `ktp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `nik`
--
ALTER TABLE `nik`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `nik_student`
--
ALTER TABLE `nik_student`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nisn_student`
--
ALTER TABLE `nisn_student`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nuptk`
--
ALTER TABLE `nuptk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `program_study`
--
ALTER TABLE `program_study`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rpp`
--
ALTER TABLE `rpp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status_account`
--
ALTER TABLE `status_account`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status_student`
--
ALTER TABLE `status_student`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `study`
--
ALTER TABLE `study`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subject_list`
--
ALTER TABLE `subject_list`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tmt`
--
ALTER TABLE `tmt`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `status_account_foreign` FOREIGN KEY (`status_student_id`) REFERENCES `status_account` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_nik_id_foreign` FOREIGN KEY (`nik_student_id`) REFERENCES `nik_student` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_nisn_id_foreign` FOREIGN KEY (`nisn_student_id`) REFERENCES `nisn_student` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
