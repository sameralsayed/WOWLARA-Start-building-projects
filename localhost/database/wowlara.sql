
-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2021 at 03:10 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qrflip`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `local` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adult` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iconsvg` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_color` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` int(11) DEFAULT 0,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `route` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general`
--

CREATE TABLE `general` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `local` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` int(11) DEFAULT 0,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `user_id` int(11) DEFAULT NULL,
  `adult` text COLLATE utf8mb4_unicode_ci DEFAULT 'No',
  `ads_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ads_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ads_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ads_sponsored` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ads_image_promo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ads_start_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ads_end_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ads_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_age` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_gender` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noti_cookies_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noti_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noti_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noti_message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noti_start_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noti_end_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noti_seconds` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noti_color` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noti_background_color` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noti_position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noti_icon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noti_user` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `noti_guest` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `code_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_code` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faq_question` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faq_answer` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analytic_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analytic_code` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `design_color` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_seo_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_seo_keywords` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_seo_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `help_title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `help_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_client_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_client_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_link_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_link_icon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_link_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `theme_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `theme_version` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `theme_auther` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `theme_to` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `theme_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `theme_image` text COLLATE utf8mb4_unicode_ci DEFAULT 'no-img.png',
  `isChrome` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `isFirefox` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `isOpera` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `isSafari` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `isIE` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `isEdge` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `isInApp` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `isDesktop` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `isMobile` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `isTablet` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `isWindows` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `isLinux` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `isMac` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `isAndroid` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general`
--

INSERT INTO `general` (`id`, `local`, `group`, `views`, `status`, `user_id`, `adult`, `ads_name`, `ads_title`, `ads_description`, `ads_sponsored`, `ads_image_promo`, `ads_start_date`, `ads_end_date`, `ads_link`, `user_age`, `user_gender`, `noti_cookies_name`, `noti_title`, `noti_link`, `noti_message`, `noti_start_date`, `noti_end_date`, `noti_seconds`, `noti_color`, `noti_background_color`, `noti_position`, `noti_icon`, `noti_user`, `noti_guest`, `code_name`, `code_type`, `code_code`, `faq_question`, `faq_answer`, `analytic_name`, `analytic_code`, `design_color`, `page_name`, `page_content`, `page_seo_title`, `page_seo_keywords`, `page_seo_description`, `help_title`, `help_content`, `login_name`, `login_client_id`, `login_client_secret`, `social_link_name`, `social_link_icon`, `social_link_link`, `theme_name`, `theme_version`, `theme_auther`, `theme_to`, `theme_description`, `theme_image`, `isChrome`, `isFirefox`, `isOpera`, `isSafari`, `isIE`, `isEdge`, `isInApp`, `isDesktop`, `isMobile`, `isTablet`, `isWindows`, `isLinux`, `isMac`, `isAndroid`, `created_at`, `updated_at`) VALUES
(1, 'en', 'genders', 0, 'Active', 1, 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', 'Active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'no-img.png', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', '2021-05-01 10:32:16', '2021-05-01 10:32:16'),
(2, 'en', 'genders', 0, 'Active', 1, 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', 'Active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'no-img.png', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', '2021-05-01 10:32:30', '2021-05-01 10:32:30'),
(3, 'en', 'ages', 0, 'Active', 1, 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', 'Active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'no-img.png', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', '2021-05-01 10:34:14', '2021-05-01 10:34:14'),
(4, 'en', 'ages', 0, 'Active', 1, 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', 'Active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'no-img.png', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', '2021-05-01 10:34:26', '2021-05-01 10:34:26'),
(5, 'en', 'ages', 0, 'Active', 1, 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', 'Active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'no-img.png', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', '2021-05-01 10:34:37', '2021-05-01 10:34:37'),
(6, 'en', 'themes', 0, 'Active', 1, 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', 'Active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default', '1.0', 'samer alsayed', 'Admin', 'default Theme', 'admin.png', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', '2021-05-01 11:22:04', '2021-05-01 11:22:04'),
(7, 'en', 'themes', 0, 'Active', 1, 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', 'Active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default', '1.0', 'samer alsayed', 'User', 'default Theme', 'user.png', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', '2021-05-01 11:24:54', '2021-05-01 11:24:54');

-- --------------------------------------------------------

--
-- Table structure for table `icon_svg`
--

CREATE TABLE `icon_svg` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'English',
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `rtl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'No',
  `flag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'english.svg',
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_name` text COLLATE utf8mb4_unicode_ci DEFAULT '',
  `site_logo` text COLLATE utf8mb4_unicode_ci DEFAULT 'logo.png',
  `site_favicon` text COLLATE utf8mb4_unicode_ci DEFAULT 'favicon.png',
  `seo_title` text COLLATE utf8mb4_unicode_ci DEFAULT '',
  `seo_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT '',
  `seo_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '',
  `font` text COLLATE utf8mb4_unicode_ci DEFAULT '',
  `loading` text COLLATE utf8mb4_unicode_ci DEFAULT 'load3',
  `style` text COLLATE utf8mb4_unicode_ci DEFAULT '#000',
  `load_style` text COLLATE utf8mb4_unicode_ci DEFAULT '#000',
  `reload_page` text COLLATE utf8mb4_unicode_ci DEFAULT '900',
  `blocked_user` longtext COLLATE utf8mb4_unicode_ci DEFAULT '',
  `terms_of_service` longtext COLLATE utf8mb4_unicode_ci DEFAULT '',
  `privacy_policy` longtext COLLATE utf8mb4_unicode_ci DEFAULT '',
  `GDPR` longtext COLLATE utf8mb4_unicode_ci DEFAULT '',
  `DMCA` longtext COLLATE utf8mb4_unicode_ci DEFAULT '',
  `login` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `can_login` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `can_register` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `my_feedBacks` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `verification` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `profile_information` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `update_password` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `two_factor` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `browser_sessions` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `delete_account` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `design` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `sidepar` text COLLATE utf8mb4_unicode_ci DEFAULT 'inActive',
  `maxFilesize` text COLLATE utf8mb4_unicode_ci DEFAULT '100',
  `maxFiles` text COLLATE utf8mb4_unicode_ci DEFAULT '1000',
  `retryChunksLimit` text COLLATE utf8mb4_unicode_ci DEFAULT '5',
  `forceChunking` text COLLATE utf8mb4_unicode_ci DEFAULT 'true',
  `retryChunks` text COLLATE utf8mb4_unicode_ci DEFAULT 'true',
  `theme_admin` text COLLATE utf8mb4_unicode_ci DEFAULT 'default',
  `theme_user` text COLLATE utf8mb4_unicode_ci DEFAULT 'default',
  `maintenances_title` text COLLATE utf8mb4_unicode_ci DEFAULT '',
  `maintenances_message` longtext COLLATE utf8mb4_unicode_ci DEFAULT '',
  `maintenances_opens` text COLLATE utf8mb4_unicode_ci DEFAULT '',
  `cookies_name` text COLLATE utf8mb4_unicode_ci DEFAULT '',
  `cookies_title` text COLLATE utf8mb4_unicode_ci DEFAULT '',
  `cookies_message` longtext COLLATE utf8mb4_unicode_ci DEFAULT '',
  `comments_facebook` longtext COLLATE utf8mb4_unicode_ci DEFAULT '',
  `comments_disqus` longtext COLLATE utf8mb4_unicode_ci DEFAULT '',
  `contact_mail` text COLLATE utf8mb4_unicode_ci DEFAULT '',
  `contact_noti` longtext COLLATE utf8mb4_unicode_ci DEFAULT '',
  `company_address` longtext COLLATE utf8mb4_unicode_ci DEFAULT '',
  `company_email` longtext COLLATE utf8mb4_unicode_ci DEFAULT '',
  `company_phone` longtext COLLATE utf8mb4_unicode_ci DEFAULT '',
  `company_zip_code` longtext COLLATE utf8mb4_unicode_ci DEFAULT '',
  `company_city` longtext COLLATE utf8mb4_unicode_ci DEFAULT '',
  `company_state` longtext COLLATE utf8mb4_unicode_ci DEFAULT '',
  `company_country` longtext COLLATE utf8mb4_unicode_ci DEFAULT '',
  `company_registration` longtext COLLATE utf8mb4_unicode_ci DEFAULT '',
  `company_tax_number` longtext COLLATE utf8mb4_unicode_ci DEFAULT '',
  `company_about` longtext COLLATE utf8mb4_unicode_ci DEFAULT '',
  `company_noti` longtext COLLATE utf8mb4_unicode_ci DEFAULT '',
  `company_copyright` longtext COLLATE utf8mb4_unicode_ci DEFAULT '',
  `error_400` longtext COLLATE utf8mb4_unicode_ci DEFAULT 'ERROR: 400 PAGE NOT FOUND !',
  `error_403` longtext COLLATE utf8mb4_unicode_ci DEFAULT 'ERROR: 403 FORBIDDEN',
  `error_404` longtext COLLATE utf8mb4_unicode_ci DEFAULT 'ERROR: 404 PAGE NOT FOUND',
  `error_500` longtext COLLATE utf8mb4_unicode_ci DEFAULT 'ERROR: 500 UNEXPECTED ERROR',
  `error_503` longtext COLLATE utf8mb4_unicode_ci DEFAULT 'THIS SITE IS GETTING UP IN FEW MINUTES.',
  `not_found_title` longtext COLLATE utf8mb4_unicode_ci DEFAULT '',
  `not_found_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '',
  `not_found_icon` text COLLATE utf8mb4_unicode_ci DEFAULT 'not-found.svg',
  `advertise_mail` text COLLATE utf8mb4_unicode_ci DEFAULT '',
  `advertise_price` text COLLATE utf8mb4_unicode_ci DEFAULT '',
  `advertise_title` longtext COLLATE utf8mb4_unicode_ci DEFAULT '',
  `advertise_message` longtext COLLATE utf8mb4_unicode_ci DEFAULT '',
  `login_title` longtext COLLATE utf8mb4_unicode_ci DEFAULT '',
  `login_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '',
  `login_keywords` longtext COLLATE utf8mb4_unicode_ci DEFAULT '',
  `login_image` longtext COLLATE utf8mb4_unicode_ci DEFAULT 'login.jpg',
  `register_title` text COLLATE utf8mb4_unicode_ci DEFAULT '',
  `register_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '',
  `register_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT '',
  `register_image` text COLLATE utf8mb4_unicode_ci DEFAULT 'register.jpg',
  `Bot` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `isChrome` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `isFirefox` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `isOpera` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `isSafari` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `isIE` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `isEdge` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `isInApp` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `isDesktop` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `isMobile` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `isTablet` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `isWindows` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `isLinux` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `isMac` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `isAndroid` text COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `language`, `status`, `rtl`, `flag`, `user_id`, `site_name`, `site_logo`, `site_favicon`, `seo_title`, `seo_keywords`, `seo_description`, `font`, `loading`, `style`, `load_style`, `reload_page`, `blocked_user`, `terms_of_service`, `privacy_policy`, `GDPR`, `DMCA`, `login`, `can_login`, `can_register`, `my_feedBacks`, `verification`, `profile_information`, `update_password`, `two_factor`, `browser_sessions`, `delete_account`, `design`, `sidepar`, `maxFilesize`, `maxFiles`, `retryChunksLimit`, `forceChunking`, `retryChunks`, `theme_admin`, `theme_user`, `maintenances_title`, `maintenances_message`, `maintenances_opens`, `cookies_name`, `cookies_title`, `cookies_message`, `comments_facebook`, `comments_disqus`, `contact_mail`, `contact_noti`, `company_address`, `company_email`, `company_phone`, `company_zip_code`, `company_city`, `company_state`, `company_country`, `company_registration`, `company_tax_number`, `company_about`, `company_noti`, `company_copyright`, `error_400`, `error_403`, `error_404`, `error_500`, `error_503`, `not_found_title`, `not_found_description`, `not_found_icon`, `advertise_mail`, `advertise_price`, `advertise_title`, `advertise_message`, `login_title`, `login_description`, `login_keywords`, `login_image`, `register_title`, `register_description`, `register_keywords`, `register_image`, `Bot`, `isChrome`, `isFirefox`, `isOpera`, `isSafari`, `isIE`, `isEdge`, `isInApp`, `isDesktop`, `isMobile`, `isTablet`, `isWindows`, `isLinux`, `isMac`, `isAndroid`, `created_at`, `updated_at`) VALUES
(1, 'English', 'en', 'Active', 'No', 'english.svg', NULL, '', 'logo.png', 'favicon.png', '', '', '', '', 'load3', '#000', '#000', '900', '', '', '', '', '', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'inActive', '100', '1000', '5', 'true', 'true', 'default', 'default', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ERROR: 400 PAGE NOT FOUND !', 'ERROR: 403 FORBIDDEN', 'ERROR: 404 PAGE NOT FOUND', 'ERROR: 500 UNEXPECTED ERROR', 'THIS SITE IS GETTING UP IN FEW MINUTES.', '', '', 'not-found.svg', '', '', '', '', '', '', '', 'login.jpg', '', '', '', 'register.jpg', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', '2021-05-01 10:19:07', '2021-05-01 10:19:07'),
(2, 'عربي', 'ar', 'Active', 'Yes', 'english.svg', '1', '', 'logo.png', 'favicon.png', '', '', '', '', 'load3', '#000', '#000', '900', '', '', '', '', '', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'inActive', '100', '1000', '5', 'true', 'true', 'default', 'default', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ERROR: 400 PAGE NOT FOUND !', 'ERROR: 403 FORBIDDEN', 'ERROR: 404 PAGE NOT FOUND', 'ERROR: 500 UNEXPECTED ERROR', 'THIS SITE IS GETTING UP IN FEW MINUTES.', '', '', 'not-found.svg', '', '', '', '', '', '', '', 'login.jpg', '', '', '', 'register.jpg', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', '2021-05-02 07:12:49', '2021-05-02 07:12:49'),
(3, '中国人', 'zh-Hans', 'Active', 'No', 'chinese.svg', '1', '', 'logo.png', 'favicon.png', '', '', '', '', 'load3', '#000', '#000', '900', '', '', '', '', '', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'inActive', '100', '1000', '5', 'true', 'true', 'default', 'default', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ERROR: 400 PAGE NOT FOUND !', 'ERROR: 403 FORBIDDEN', 'ERROR: 404 PAGE NOT FOUND', 'ERROR: 500 UNEXPECTED ERROR', 'THIS SITE IS GETTING UP IN FEW MINUTES.', '', '', 'not-found.svg', '', '', '', '', '', '', '', 'login.jpg', '', '', '', 'register.jpg', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', '2021-05-02 07:40:07', '2021-05-02 07:57:43'),
(4, 'Deutsche', 'de', 'Active', 'No', 'english.svg', '1', '', 'logo.png', 'favicon.png', '', '', '', '', 'load3', '#000', '#000', '900', '', '', '', '', '', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'inActive', '100', '1000', '5', 'true', 'true', 'default', 'default', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ERROR: 400 PAGE NOT FOUND !', 'ERROR: 403 FORBIDDEN', 'ERROR: 404 PAGE NOT FOUND', 'ERROR: 500 UNEXPECTED ERROR', 'THIS SITE IS GETTING UP IN FEW MINUTES.', '', '', 'not-found.svg', '', '', '', '', '', '', '', 'login.jpg', '', '', '', 'register.jpg', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', '2021-05-02 07:42:26', '2021-05-02 07:59:42'),
(5, 'Ελληνικά', 'el', 'Active', 'No', 'english.svg', '1', '', 'logo.png', 'favicon.png', '', '', '', '', 'load3', '#000', '#000', '900', '', '', '', '', '', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'inActive', '100', '1000', '5', 'true', 'true', 'default', 'default', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ERROR: 400 PAGE NOT FOUND !', 'ERROR: 403 FORBIDDEN', 'ERROR: 404 PAGE NOT FOUND', 'ERROR: 500 UNEXPECTED ERROR', 'THIS SITE IS GETTING UP IN FEW MINUTES.', '', '', 'not-found.svg', '', '', '', '', '', '', '', 'login.jpg', '', '', '', 'register.jpg', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', '2021-05-02 07:42:44', '2021-05-02 08:00:27'),
(6, 'Español', 'es', 'Active', 'No', 'english.svg', '1', '', 'logo.png', 'favicon.png', '', '', '', '', 'load3', '#000', '#000', '900', '', '', '', '', '', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'inActive', '100', '1000', '5', 'true', 'true', 'default', 'default', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ERROR: 400 PAGE NOT FOUND !', 'ERROR: 403 FORBIDDEN', 'ERROR: 404 PAGE NOT FOUND', 'ERROR: 500 UNEXPECTED ERROR', 'THIS SITE IS GETTING UP IN FEW MINUTES.', '', '', 'not-found.svg', '', '', '', '', '', '', '', 'login.jpg', '', '', '', 'register.jpg', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', '2021-05-02 07:43:12', '2021-05-02 08:05:09'),
(7, 'français', 'fr', 'Active', 'No', 'english.svg', '1', '', 'logo.png', 'favicon.png', '', '', '', '', 'load3', '#000', '#000', '900', '', '', '', '', '', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'inActive', '100', '1000', '5', 'true', 'true', 'default', 'default', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ERROR: 400 PAGE NOT FOUND !', 'ERROR: 403 FORBIDDEN', 'ERROR: 404 PAGE NOT FOUND', 'ERROR: 500 UNEXPECTED ERROR', 'THIS SITE IS GETTING UP IN FEW MINUTES.', '', '', 'not-found.svg', '', '', '', '', '', '', '', 'login.jpg', '', '', '', 'register.jpg', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', '2021-05-02 07:43:31', '2021-05-02 07:59:12'),
(8, 'हिंदी', 'hi', 'Active', 'No', 'english.svg', '1', '', 'logo.png', 'favicon.png', '', '', '', '', 'load3', '#000', '#000', '900', '', '', '', '', '', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'inActive', '100', '1000', '5', 'true', 'true', 'default', 'default', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ERROR: 400 PAGE NOT FOUND !', 'ERROR: 403 FORBIDDEN', 'ERROR: 404 PAGE NOT FOUND', 'ERROR: 500 UNEXPECTED ERROR', 'THIS SITE IS GETTING UP IN FEW MINUTES.', '', '', 'not-found.svg', '', '', '', '', '', '', '', 'login.jpg', '', '', '', 'register.jpg', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', '2021-05-02 07:43:46', '2021-05-02 08:00:55'),
(9, 'Italiana', 'it', 'Active', 'No', 'english.svg', '1', '', 'logo.png', 'favicon.png', '', '', '', '', 'load3', '#000', '#000', '900', '', '', '', '', '', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'inActive', '100', '1000', '5', 'true', 'true', 'default', 'default', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ERROR: 400 PAGE NOT FOUND !', 'ERROR: 403 FORBIDDEN', 'ERROR: 404 PAGE NOT FOUND', 'ERROR: 500 UNEXPECTED ERROR', 'THIS SITE IS GETTING UP IN FEW MINUTES.', '', '', 'not-found.svg', '', '', '', '', '', '', '', 'login.jpg', '', '', '', 'register.jpg', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', '2021-05-02 07:44:05', '2021-05-02 08:01:27'),
(10, '日本語', 'ja', 'Active', 'No', 'english.svg', '1', '', 'logo.png', 'favicon.png', '', '', '', '', 'load3', '#000', '#000', '900', '', '', '', '', '', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'inActive', '100', '1000', '5', 'true', 'true', 'default', 'default', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ERROR: 400 PAGE NOT FOUND !', 'ERROR: 403 FORBIDDEN', 'ERROR: 404 PAGE NOT FOUND', 'ERROR: 500 UNEXPECTED ERROR', 'THIS SITE IS GETTING UP IN FEW MINUTES.', '', '', 'not-found.svg', '', '', '', '', '', '', '', 'login.jpg', '', '', '', 'register.jpg', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', '2021-05-02 07:44:28', '2021-05-02 08:01:58'),
(11, '한국어', 'ko', 'Active', 'No', 'english.svg', '1', '', 'logo.png', 'favicon.png', '', '', '', '', 'load3', '#000', '#000', '900', '', '', '', '', '', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'inActive', '100', '1000', '5', 'true', 'true', 'default', 'default', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ERROR: 400 PAGE NOT FOUND !', 'ERROR: 403 FORBIDDEN', 'ERROR: 404 PAGE NOT FOUND', 'ERROR: 500 UNEXPECTED ERROR', 'THIS SITE IS GETTING UP IN FEW MINUTES.', '', '', 'not-found.svg', '', '', '', '', '', '', '', 'login.jpg', '', '', '', 'register.jpg', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', '2021-05-02 07:44:45', '2021-05-02 08:02:24'),
(12, 'Nederlands', 'nl', 'Active', 'No', 'english.svg', '1', '', 'logo.png', 'favicon.png', '', '', '', '', 'load3', '#000', '#000', '900', '', '', '', '', '', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'inActive', '100', '1000', '5', 'true', 'true', 'default', 'default', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ERROR: 400 PAGE NOT FOUND !', 'ERROR: 403 FORBIDDEN', 'ERROR: 404 PAGE NOT FOUND', 'ERROR: 500 UNEXPECTED ERROR', 'THIS SITE IS GETTING UP IN FEW MINUTES.', '', '', 'not-found.svg', '', '', '', '', '', '', '', 'login.jpg', '', '', '', 'register.jpg', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', '2021-05-02 07:45:03', '2021-05-02 07:58:42'),
(13, 'Polskie', 'pl', 'Active', 'No', 'english.svg', '1', '', 'logo.png', 'favicon.png', '', '', '', '', 'load3', '#000', '#000', '900', '', '', '', '', '', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'inActive', '100', '1000', '5', 'true', 'true', 'default', 'default', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ERROR: 400 PAGE NOT FOUND !', 'ERROR: 403 FORBIDDEN', 'ERROR: 404 PAGE NOT FOUND', 'ERROR: 500 UNEXPECTED ERROR', 'THIS SITE IS GETTING UP IN FEW MINUTES.', '', '', 'not-found.svg', '', '', '', '', '', '', '', 'login.jpg', '', '', '', 'register.jpg', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', '2021-05-02 07:45:23', '2021-05-02 08:03:20'),
(14, 'português', 'pt', 'Active', 'No', 'english.svg', '1', '', 'logo.png', 'favicon.png', '', '', '', '', 'load3', '#000', '#000', '900', '', '', '', '', '', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'inActive', '100', '1000', '5', 'true', 'true', 'default', 'default', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ERROR: 400 PAGE NOT FOUND !', 'ERROR: 403 FORBIDDEN', 'ERROR: 404 PAGE NOT FOUND', 'ERROR: 500 UNEXPECTED ERROR', 'THIS SITE IS GETTING UP IN FEW MINUTES.', '', '', 'not-found.svg', '', '', '', '', '', '', '', 'login.jpg', '', '', '', 'register.jpg', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', '2021-05-02 07:46:24', '2021-05-02 08:03:49'),
(15, 'Romanian', 'ro', 'Active', 'No', 'english.svg', '1', '', 'logo.png', 'favicon.png', '', '', '', '', 'load3', '#000', '#000', '900', '', '', '', '', '', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'inActive', '100', '1000', '5', 'true', 'true', 'default', 'default', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ERROR: 400 PAGE NOT FOUND !', 'ERROR: 403 FORBIDDEN', 'ERROR: 404 PAGE NOT FOUND', 'ERROR: 500 UNEXPECTED ERROR', 'THIS SITE IS GETTING UP IN FEW MINUTES.', '', '', 'not-found.svg', '', '', '', '', '', '', '', 'login.jpg', '', '', '', 'register.jpg', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', '2021-05-02 07:46:41', '2021-05-02 07:46:41'),
(16, 'русский', 'ru', 'Active', 'No', 'english.svg', '1', '', 'logo.png', 'favicon.png', '', '', '', '', 'load3', '#000', '#000', '900', '', '', '', '', '', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'inActive', '100', '1000', '5', 'true', 'true', 'default', 'default', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ERROR: 400 PAGE NOT FOUND !', 'ERROR: 403 FORBIDDEN', 'ERROR: 404 PAGE NOT FOUND', 'ERROR: 500 UNEXPECTED ERROR', 'THIS SITE IS GETTING UP IN FEW MINUTES.', '', '', 'not-found.svg', '', '', '', '', '', '', '', 'login.jpg', '', '', '', 'register.jpg', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', '2021-05-02 07:46:59', '2021-05-02 08:04:19'),
(17, 'svenska', 'sv', 'Active', 'No', 'english.svg', '1', '', 'logo.png', 'favicon.png', '', '', '', '', 'load3', '#000', '#000', '900', '', '', '', '', '', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'inActive', '100', '1000', '5', 'true', 'true', 'default', 'default', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ERROR: 400 PAGE NOT FOUND !', 'ERROR: 403 FORBIDDEN', 'ERROR: 404 PAGE NOT FOUND', 'ERROR: 500 UNEXPECTED ERROR', 'THIS SITE IS GETTING UP IN FEW MINUTES.', '', '', 'not-found.svg', '', '', '', '', '', '', '', 'login.jpg', '', '', '', 'register.jpg', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', '2021-05-02 07:47:16', '2021-05-02 08:05:48'),
(18, 'Turkish', 'tr', 'Active', 'No', 'english.svg', '1', '', 'logo.png', 'favicon.png', '', '', '', '', 'load3', '#000', '#000', '900', '', '', '', '', '', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'inActive', '100', '1000', '5', 'true', 'true', 'default', 'default', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ERROR: 400 PAGE NOT FOUND !', 'ERROR: 403 FORBIDDEN', 'ERROR: 404 PAGE NOT FOUND', 'ERROR: 500 UNEXPECTED ERROR', 'THIS SITE IS GETTING UP IN FEW MINUTES.', '', '', 'not-found.svg', '', '', '', '', '', '', '', 'login.jpg', '', '', '', 'register.jpg', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', '2021-05-02 07:47:33', '2021-05-02 07:47:33'),
(19, 'Український', 'uk', 'Active', 'No', 'english.svg', '1', '', 'logo.png', 'favicon.png', '', '', '', '', 'load3', '#000', '#000', '900', '', '', '', '', '', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'inActive', '100', '1000', '5', 'true', 'true', 'default', 'default', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ERROR: 400 PAGE NOT FOUND !', 'ERROR: 403 FORBIDDEN', 'ERROR: 404 PAGE NOT FOUND', 'ERROR: 500 UNEXPECTED ERROR', 'THIS SITE IS GETTING UP IN FEW MINUTES.', '', '', 'not-found.svg', '', '', '', '', '', '', '', 'login.jpg', '', '', '', 'register.jpg', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', '2021-05-02 07:47:51', '2021-05-02 08:07:41'),
(20, 'Tiếng Việt', 'vi', 'Active', 'No', 'english.svg', '1', '', 'logo.png', 'favicon.png', '', '', '', '', 'load3', '#000', '#000', '900', '', '', '', '', '', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'inActive', '100', '1000', '5', 'true', 'true', 'default', 'default', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ERROR: 400 PAGE NOT FOUND !', 'ERROR: 403 FORBIDDEN', 'ERROR: 404 PAGE NOT FOUND', 'ERROR: 500 UNEXPECTED ERROR', 'THIS SITE IS GETTING UP IN FEW MINUTES.', '', '', 'not-found.svg', '', '', '', '', '', '', '', 'login.jpg', '', '', '', 'register.jpg', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', 'Active', '2021-05-02 07:48:08', '2021-05-02 08:06:58');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2018_08_29_200844_create_languages_table', 1),
(5, '2018_08_29_205156_create_translations_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(8, '2021_01_12_072313_create_save_table', 1),
(9, '2021_01_12_072425_create_report_table', 1),
(10, '2021_01_14_015354_create_sessions_table', 1),
(11, '2021_01_26_075523_create_general_table', 1),
(12, '2021_02_21_130623_create_category_table', 1),
(13, '2021_02_21_130720_create_sub_category_table', 1),
(14, '2021_02_28_221333_create_comments_table', 1),
(15, '2021_02_28_221339_create_likes_table', 1),
(16, '2021_03_02_002238_create_download_table', 1),
(17, '2021_03_02_144601_create_share_table', 1),
(18, '2021_03_14_235820_create_verify_table', 1),
(19, '2021_03_31_110150_create_route_table', 1),
(20, '2021_04_04_002638_create_crud_table', 1),
(21, '2021_04_08_000625_create_page_route_table', 1),
(22, '2021_04_23_003849_create_plan_table', 1),
(23, '2021_04_27_095334_create_payment_table', 1),
(24, '2021_04_30_143200_create_icon_svg_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `page_route`
--

CREATE TABLE `page_route` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `plan_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `limit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Admin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `User` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `routes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `for` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `name`, `path`, `Admin`, `User`, `routes`, `for`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'documentation', 'documentation', 'default', 'default', NULL, 'Admin', '<span class=\"micon dw dw-information\"></span>', '2021-05-01 10:21:00', '2021-05-01 10:21:00'),
(2, 'routes', 'settings/routes', 'default', 'default', NULL, 'Admin', '<span class=\"micon dw dw-file\"></span>', '2021-05-01 10:21:00', '2021-05-01 10:21:00'),
(3, 'to_routes', 'settings/routes', 'default', 'default', NULL, 'Admin', '<span class=\"micon dw dw-analytics-20\"></span>', '2021-05-01 10:21:00', '2021-05-01 10:21:00'),
(4, 'icons', 'icons', 'default', 'default', NULL, 'Admin', '<span class=\"micon dw dw-flag\"></span>', '2021-05-01 10:21:00', '2021-05-01 10:21:00'),
(5, 'categorys', 'categorys', 'default', 'default', NULL, 'Admin', '<span class=\"micon dw dw-header1\"></span>', '2021-05-01 10:21:00', '2021-05-01 10:21:00'),
(6, 'sub_categorys', 'sub-categorys', 'default', 'default', NULL, 'Admin', '<span class=\"micon dw dw-grid\"></span>', '2021-05-01 10:21:00', '2021-05-01 10:21:00'),
(7, 'languages', 'settings/languages', 'default', 'default', NULL, 'Admin', '<span class=\"micon dw dw-worldwide-1\"></span>', '2021-05-01 10:21:00', '2021-05-01 10:21:00'),
(8, 'users', 'users', 'default', 'default', NULL, 'Admin', '<span class=\"micon dw dw-user-11\"></span>', '2021-05-01 10:21:00', '2021-05-01 10:21:00'),
(9, 'genders', 'settings/general', 'default', 'default', NULL, 'Admin', '<span class=\"micon dw dw-human-resources\"></span>', '2021-05-01 10:21:00', '2021-05-01 10:21:00'),
(10, 'themes', 'settings/themes', 'default', 'default', NULL, 'Admin', '<span class=\"micon dw dw-polaroids\"></span>', '2021-05-01 10:21:00', '2021-05-01 10:21:00'),
(11, 'designs', 'settings/general', 'default', 'default', NULL, 'Admin', '<span class=\"micon dw dw-paint-palette\"></span>', '2021-05-01 10:21:00', '2021-05-01 10:21:00'),
(12, 'siteicons', 'settings/general', 'default', 'default', NULL, 'Admin', '<span class=\"micon dw dw-image\"></span>', '2021-05-01 10:21:00', '2021-05-01 10:21:00'),
(13, 'ages', 'settings/general', 'default', 'default', NULL, 'Admin', '<span class=\"micon dw dw-agenda1\"></span>', '2021-05-01 10:21:00', '2021-05-01 10:21:00'),
(14, 'faqs', 'settings/general', 'default', 'default', NULL, 'Admin', '<span class=\"micon dw dw-exchange\"></span>', '2021-05-01 10:21:00', '2021-05-01 10:21:00'),
(15, 'notifications', 'settings/general', 'default', 'default', NULL, 'Admin', '<span class=\"micon dw dw-notification\"></span>', '2021-05-01 10:21:00', '2021-05-01 10:21:00'),
(16, 'pages', 'settings/general', 'default', 'default', NULL, 'Admin', '<span class=\"micon dw dw-page\"></span>', '2021-05-01 10:21:00', '2021-05-01 10:21:00'),
(17, 'analytics', 'settings/general', 'default', 'default', NULL, 'Admin', '<span class=\"micon dw dw-analytics-11\"></span>', '2021-05-01 10:21:00', '2021-05-01 10:21:00'),
(18, 'custom_codes', 'settings/general', 'default', 'default', NULL, 'Admin', '<span class=\"micon dw dw-coding\"></span>', '2021-05-01 10:21:00', '2021-05-01 10:21:00'),
(19, 'social_logins', 'settings/social-login', 'default', 'default', NULL, 'Admin', '<span class=\"micon dw dw-login\"></span>', '2021-05-01 10:21:00', '2021-05-01 10:21:00'),
(20, 'social_links', 'settings/general', 'default', 'default', NULL, 'Admin', '<span class=\"micon dw dw-link-2\"></span>', '2021-05-01 10:21:00', '2021-05-01 10:21:00'),
(21, 'mail', 'settings/mail', 'default', 'default', NULL, 'Admin', '<span class=\"micon dw dw-email\"></span>', '2021-05-01 10:21:00', '2021-05-01 10:21:00'),
(22, 'ads', 'settings/general', 'default', 'default', NULL, 'Admin', '<span class=\"micon dw dw-money-1\"></span>', '2021-05-01 10:21:00', '2021-05-01 10:21:00'),
(23, 'site-settings', 'settings/general', 'default', 'default', NULL, 'Admin', '<span class=\"micon dw dw-settings2\"></span>', '2021-05-01 10:21:00', '2021-05-01 10:21:00'),
(24, 'help_page', 'settings/general', 'default', 'default', NULL, 'Admin', '<span class=\"micon dw dw-help\"></span>', '2021-05-01 10:21:00', '2021-05-01 10:21:00'),
(25, 'feedbacks', 'settings/feedbaks', 'default', 'default', NULL, 'Admin', '<span class=\"micon dw dw-shuffle1\"></span>', '2021-05-01 10:21:00', '2021-05-01 10:21:00'),
(26, 'payments', 'settings/payments', 'default', 'default', NULL, 'Admin', '<span class=\"micon dw dw-money-2\"></span>', '2021-05-01 10:21:00', '2021-05-01 10:21:00'),
(27, 'verification', 'settings/verification', 'default', 'default', NULL, 'Admin', '<span class=\"micon dw dw-name\"></span>', '2021-05-01 10:21:00', '2021-05-01 10:21:00'),
(28, 'latest_updates', 'settings/general', 'default', 'default', NULL, 'Admin', '<span class=\"micon dw dw-inbox-2\"></span>', '2021-05-01 10:21:00', '2021-05-01 10:21:00'),
(29, 'storage', 'settings/storage', 'default', 'default', NULL, 'Admin', '<span class=\"micon dw dw-analytics-13\"></span>', '2021-05-01 10:21:00', '2021-05-01 10:21:00'),
(30, 'sitemap', 'settings/sitemap', 'default', 'default', NULL, 'Admin', '<span class=\"micon dw dw-broken-link\"></span>', '2021-05-01 10:21:00', '2021-05-01 10:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `save`
--

CREATE TABLE `save` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
('CLx72WAlmK953DALFB4IzIEpFIeLrH43PByUZ9Bh', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.10 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiRXNpRmRHOUpTQklNY3BVWlQ5Snd0cmFHNnc3dXdKUWxlSFUxT3dlaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kZXNpZ25zIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJEs2T1N3SmUzVEZCSC9GUE5WaDdqTE9obE9uRGVzVzZub0VTMWJMLjJPUVhvU3ptL0wuN1FtIjtzOjQ6ImxhbmciO3M6MjoiZW4iO30=', 1619917718),
('vpoBVLiz9IHkgegZaxaNKOqm5sLp7gYuN7zKFRvc', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.10 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoibWNNY2NuelJDc0xkSGhneW0xYVlKYjdZM2ZMYk92QWJqM2pBS2pORiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9sYW5ndWFnZXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJEs2T1N3SmUzVEZCSC9GUE5WaDdqTE9obE9uRGVzVzZub0VTMWJMLjJPUVhvU3ptL0wuN1FtIjt9', 1619843259);

-- --------------------------------------------------------

--
-- Table structure for table `share`
--

CREATE TABLE `share` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `local` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adult` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iconsvg` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_color` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` int(11) DEFAULT 0,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT 'no-img.png',
  `background` text COLLATE utf8mb4_unicode_ci DEFAULT 'no-background.png',
  `role` text COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `local` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favorite_design` text COLLATE utf8mb4_unicode_ci DEFAULT '#000',
  `views` int(11) DEFAULT 0,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `verified` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `facebook` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiktok` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_id` int(11) DEFAULT NULL,
  `google_id` int(11) DEFAULT NULL,
  `microsoft_id` int(11) DEFAULT NULL,
  `apple_id` int(11) DEFAULT NULL,
  `dailymotion_id` int(11) DEFAULT NULL,
  `deviantart_id` int(11) DEFAULT NULL,
  `dribbble_id` int(11) DEFAULT NULL,
  `flattr_id` int(11) DEFAULT NULL,
  `flickr_id` int(11) DEFAULT NULL,
  `foursquare_id` int(11) DEFAULT NULL,
  `github_id` int(11) DEFAULT NULL,
  `imgur_id` int(11) DEFAULT NULL,
  `instagram_id` int(11) DEFAULT NULL,
  `kakao_id` int(11) DEFAULT NULL,
  `line_id` int(11) DEFAULT NULL,
  `medium_id` int(11) DEFAULT NULL,
  `meetup_id` int(11) DEFAULT NULL,
  `azure_id` int(11) DEFAULT NULL,
  `naver_id` int(11) DEFAULT NULL,
  `odnoklassniki_id` int(11) DEFAULT NULL,
  `pinterest_id` int(11) DEFAULT NULL,
  `pixnet_id` int(11) DEFAULT NULL,
  `pushbullet_id` int(11) DEFAULT NULL,
  `reddit_id` int(11) DEFAULT NULL,
  `snapchat_id` int(11) DEFAULT NULL,
  `stackexchange_id` int(11) DEFAULT NULL,
  `tumblr_id` int(11) DEFAULT NULL,
  `vimeo_id` int(11) DEFAULT NULL,
  `vkontakte_id` int(11) DEFAULT NULL,
  `weibo_id` int(11) DEFAULT NULL,
  `wordpress_id` int(11) DEFAULT NULL,
  `yahoo_id` int(11) DEFAULT NULL,
  `yammer_id` int(11) DEFAULT NULL,
  `yandex_id` int(11) DEFAULT NULL,
  `youtube_id` int(11) DEFAULT NULL,
  `battlenet_id` int(11) DEFAULT NULL,
  `discord_id` int(11) DEFAULT NULL,
  `smashcast_id` int(11) DEFAULT NULL,
  `steam_id` int(11) DEFAULT NULL,
  `twitch_id` int(11) DEFAULT NULL,
  `coursera_id` int(11) DEFAULT NULL,
  `goodreads_id` int(11) DEFAULT NULL,
  `headhunter_id` int(11) DEFAULT NULL,
  `stocktwits_id` int(11) DEFAULT NULL,
  `xing_id` int(11) DEFAULT NULL,
  `asana_id` int(11) DEFAULT NULL,
  `aweber_id` int(11) DEFAULT NULL,
  `bitly_id` int(11) DEFAULT NULL,
  `bitbucket_id` int(11) DEFAULT NULL,
  `box_id` int(11) DEFAULT NULL,
  `cheddar_id` int(11) DEFAULT NULL,
  `constantcontact_id` int(11) DEFAULT NULL,
  `digitalocean_id` int(11) DEFAULT NULL,
  `disqus_id` int(11) DEFAULT NULL,
  `dropbox_id` int(11) DEFAULT NULL,
  `envato_id` int(11) DEFAULT NULL,
  `etsy_id` int(11) DEFAULT NULL,
  `eventbrite_id` int(11) DEFAULT NULL,
  `eyeem_id` int(11) DEFAULT NULL,
  `harvest_id` int(11) DEFAULT NULL,
  `heroku_id` int(11) DEFAULT NULL,
  `hubspot_id` int(11) DEFAULT NULL,
  `linkedin_id` int(11) DEFAULT NULL,
  `mailchimp_id` int(11) DEFAULT NULL,
  `mailru_id` int(11) DEFAULT NULL,
  `mattermost_id` int(11) DEFAULT NULL,
  `podio_id` int(11) DEFAULT NULL,
  `quickbooks_id` int(11) DEFAULT NULL,
  `readability_id` int(11) DEFAULT NULL,
  `SalesForce_id` int(11) DEFAULT NULL,
  `sharepoint_id` int(11) DEFAULT NULL,
  `shopify_id` int(11) DEFAULT NULL,
  `teamleader_id` int(11) DEFAULT NULL,
  `teamweek_id` int(11) DEFAULT NULL,
  `trello_id` int(11) DEFAULT NULL,
  `unsplash_id` int(11) DEFAULT NULL,
  `versionone_id` int(11) DEFAULT NULL,
  `whmcs_id` int(11) DEFAULT NULL,
  `zendesk_id` int(11) DEFAULT NULL,
  `zoho_id` int(11) DEFAULT NULL,
  `zoom_id` int(11) DEFAULT NULL,
  `uclapi_id` int(11) DEFAULT NULL,
  `binance_id` int(11) DEFAULT NULL,
  `coinbase_id` int(11) DEFAULT NULL,
  `gumroad_id` int(11) DEFAULT NULL,
  `mollie_id` int(11) DEFAULT NULL,
  `patreon_id` int(11) DEFAULT NULL,
  `paypal_id` int(11) DEFAULT NULL,
  `redbooth_id` int(11) DEFAULT NULL,
  `stripe_id` int(11) DEFAULT NULL,
  `venmo_id` int(11) DEFAULT NULL,
  `deezer_id` int(11) DEFAULT NULL,
  `discogs_id` int(11) DEFAULT NULL,
  `mixcloud_id` int(11) DEFAULT NULL,
  `soundcloud_id` int(11) DEFAULT NULL,
  `spotify_id` int(11) DEFAULT NULL,
  `admitad_id` int(11) DEFAULT NULL,
  `angellist_id` int(11) DEFAULT NULL,
  `douban_id` int(11) DEFAULT NULL,
  `fablabs_id` int(11) DEFAULT NULL,
  `fitbit_id` int(11) DEFAULT NULL,
  `flexkids_id` int(11) DEFAULT NULL,
  `strava_id` int(11) DEFAULT NULL,
  `trakt_id` int(11) DEFAULT NULL,
  `tvshowtime_id` int(11) DEFAULT NULL,
  `uber_id` int(11) DEFAULT NULL,
  `getIP` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `getCity` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `getRegion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `getRegionCode` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `getCountry` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `getCountryCode` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `getContinent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `getContinentCode` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `getPostalCode` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `getLatitude` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `getLongitude` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `getCurrencyCode` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `getCurrencySymbol` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `getCurrencyExchangeRate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `getLocation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `username`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `about`, `photo`, `background`, `role`, `local`, `age`, `gender`, `favorite_design`, `views`, `status`, `verified`, `facebook`, `instagram`, `pinterest`, `tiktok`, `twitter`, `youtube`, `facebook_id`, `google_id`, `microsoft_id`, `apple_id`, `dailymotion_id`, `deviantart_id`, `dribbble_id`, `flattr_id`, `flickr_id`, `foursquare_id`, `github_id`, `imgur_id`, `instagram_id`, `kakao_id`, `line_id`, `medium_id`, `meetup_id`, `azure_id`, `naver_id`, `odnoklassniki_id`, `pinterest_id`, `pixnet_id`, `pushbullet_id`, `reddit_id`, `snapchat_id`, `stackexchange_id`, `tumblr_id`, `vimeo_id`, `vkontakte_id`, `weibo_id`, `wordpress_id`, `yahoo_id`, `yammer_id`, `yandex_id`, `youtube_id`, `battlenet_id`, `discord_id`, `smashcast_id`, `steam_id`, `twitch_id`, `coursera_id`, `goodreads_id`, `headhunter_id`, `stocktwits_id`, `xing_id`, `asana_id`, `aweber_id`, `bitly_id`, `bitbucket_id`, `box_id`, `cheddar_id`, `constantcontact_id`, `digitalocean_id`, `disqus_id`, `dropbox_id`, `envato_id`, `etsy_id`, `eventbrite_id`, `eyeem_id`, `harvest_id`, `heroku_id`, `hubspot_id`, `linkedin_id`, `mailchimp_id`, `mailru_id`, `mattermost_id`, `podio_id`, `quickbooks_id`, `readability_id`, `SalesForce_id`, `sharepoint_id`, `shopify_id`, `teamleader_id`, `teamweek_id`, `trello_id`, `unsplash_id`, `versionone_id`, `whmcs_id`, `zendesk_id`, `zoho_id`, `zoom_id`, `uclapi_id`, `binance_id`, `coinbase_id`, `gumroad_id`, `mollie_id`, `patreon_id`, `paypal_id`, `redbooth_id`, `stripe_id`, `venmo_id`, `deezer_id`, `discogs_id`, `mixcloud_id`, `soundcloud_id`, `spotify_id`, `admitad_id`, `angellist_id`, `douban_id`, `fablabs_id`, `fitbit_id`, `flexkids_id`, `strava_id`, `trakt_id`, `tvshowtime_id`, `uber_id`, `getIP`, `getCity`, `getRegion`, `getRegionCode`, `getCountry`, `getCountryCode`, `getContinent`, `getContinentCode`, `getPostalCode`, `getLatitude`, `getLongitude`, `getCurrencyCode`, `getCurrencySymbol`, `getCurrencyExchangeRate`, `getLocation`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, 'adminpanel', 'admin@gmail.com', NULL, '$2y$10$K6OSwJe3TFBH/FPNVh7jLOhlOnDesW6noES1bL.2OQXoSzm/L.7Qm', NULL, NULL, NULL, NULL, 'no-img.png', 'no-background.png', 'Admin', 'en', NULL, NULL, '#000', 0, 'Active', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '169.159.82.111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-01 10:28:40', '2021-05-01 10:28:40');

-- --------------------------------------------------------

--
-- Table structure for table `verify`
--

CREATE TABLE `verify` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `general`
--
ALTER TABLE `general`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icon_svg`
--
ALTER TABLE `icon_svg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_route`
--
ALTER TABLE `page_route`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `save`
--
ALTER TABLE `save`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `share`
--
ALTER TABLE `share`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `translations_language_id_foreign` (`language_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `verify`
--
ALTER TABLE `verify`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general`
--
ALTER TABLE `general`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `icon_svg`
--
ALTER TABLE `icon_svg`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `page_route`
--
ALTER TABLE `page_route`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `save`
--
ALTER TABLE `save`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `share`
--
ALTER TABLE `share`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `verify`
--
ALTER TABLE `verify`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `translations`
--
ALTER TABLE `translations`
  ADD CONSTRAINT `translations_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
