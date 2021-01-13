-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2019 at 05:53 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommarce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'super admin',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `phone_no`, `avatar`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'minhazul', 'minhazul234@gmail.com', '$2y$10$tLI66B.CCEdwf5P2jQn8W.9LBoxnxF4lZcq4/uU6Tx9GdTOAB04cK', '01751337061', NULL, 'super admin', 'WRo3JslPq46GCsyb5BHnNwJgKUdK8ZeDabxSZXzBwsUnrnf0DOA45xFnGOOi', '2019-07-14 01:25:09', '2019-07-14 06:11:10');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(7, 'Apple', 'Apple Inc., incorporated on January 3, 1977, designs, manufactures and markets mobile communication and media devices, personal computers and portable digital music players. The Company sells a range of related software, services, accessories, networking solutions and third-party digital content and applications.', '1566561737.jpg', '2019-08-23 06:02:17', '2019-08-23 06:02:17'),
(8, 'xiaomi', 'Xiaomi is currently the world\'s fourth-largest smartphone brand, and has established the world\'s largest consumer IoT platform, with more than 150.9 million smart devices (excluding smartphones and laptops) connected to its platform', '1566561892.png', '2019-08-23 06:04:52', '2019-08-23 06:04:52'),
(9, 'Samsung', 'Samsung. Samsung, South Korean company that is one of the world\'s largest producers of electronic devices. Samsung specializes in the production of a wide variety of consumer and industry electronics, including appliances, digital media devices, semiconductors, memory chips, and integrated systems.', '1566561968.png', '2019-08-23 06:06:08', '2019-08-23 06:06:08'),
(10, 'Sony', 'Best Brand in world', '1566641635.jpg', '2019-08-24 04:13:55', '2019-08-24 04:13:55'),
(11, 'Other Brands', 'Unknown', '1566661400.jpg', '2019-08-24 09:43:20', '2019-08-24 09:43:20'),
(12, 'Panjabi', 'best', '1566664134.jpeg', '2019-08-24 10:28:54', '2019-08-24 10:28:54'),
(13, 'T-shirt', 'best', '1566664269.jpg', '2019-08-24 10:31:09', '2019-08-24 10:31:09'),
(14, 'Shirt', 'Bangladeshi Products', '1566664384.jpg', '2019-08-24 10:33:04', '2019-08-24 10:33:04'),
(15, 'Weeding', 'Bangladeshi Brands', '1566664540.jpg', '2019-08-24 10:35:40', '2019-08-24 10:35:40'),
(16, 'Women Begs', 'Made in Bangladeshi', '1566664713.jpg', '2019-08-24 10:38:33', '2019-08-24 10:38:33'),
(17, 'bed', 'best', '1566665151.jpg', '2019-08-24 10:45:51', '2019-08-24 10:45:51'),
(18, 'LG', 'best Brands', '1566665498.png', '2019-08-24 10:51:38', '2019-08-24 10:51:38'),
(19, 'Sports', 'Best', '1566665869.jpg', '2019-08-24 10:57:49', '2019-08-24 10:57:49'),
(20, 'Juilary', 'best', '1566666149.jpg', '2019-08-24 11:02:30', '2019-08-24 11:02:30'),
(21, 'Nivea', 'indian brans', '1566666651.jpg', '2019-08-24 11:10:51', '2019-08-24 11:10:51');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_quantity` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `user_id`, `order_id`, `ip_address`, `product_quantity`, `created_at`, `updated_at`) VALUES
(2, 46, NULL, 9, '::1', 2, '2019-08-24 05:39:17', '2019-08-24 05:42:23'),
(3, 45, NULL, 9, '::1', 1, '2019-08-24 05:39:17', '2019-08-24 05:42:23'),
(6, 47, NULL, 1, '::1', 1, '2019-08-25 02:23:21', '2019-08-25 07:32:57'),
(8, 41, NULL, 1, '::1', 1, '2019-08-25 05:43:13', '2019-08-25 07:32:57'),
(18, 60, NULL, 4, '::1', 1, '2019-08-26 20:40:41', '2019-08-26 21:30:15'),
(19, 59, NULL, 4, '::1', 1, '2019-08-26 20:40:54', '2019-08-26 21:30:15'),
(20, 61, NULL, 4, '::1', 1, '2019-08-26 21:26:36', '2019-08-26 21:30:15');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `parent_id`, `created_at`, `updated_at`) VALUES
(33, 'Electronic Accessories', 'An essential or useful auxiliary item that can be attached to or removed from a product without damaging either it or the product to which it can be attached. Many cell phone and electronic device manufacturers benefit considerably from the extensive market for accessory equipment for the items they produce.', '1566560732.jpg', NULL, '2019-08-23 05:45:33', '2019-08-23 05:45:33'),
(34, 'Audio', 'Audio Device', '1566561089.jpg', 33, '2019-08-23 05:51:29', '2019-08-23 05:51:29'),
(35, 'Electronic Devices', 'All the best Electronic Device in here.\r\nyou can buy  your favorite product', '1566565703.jpg', NULL, '2019-08-23 07:08:23', '2019-08-23 07:08:23'),
(36, 'Mobile Phone', 'All Mobile Phone you can buy in your website.', '1566565895.jpg', 35, '2019-08-23 07:11:35', '2019-08-23 07:11:35'),
(37, 'Laptops', 'All laptop you can buy our website', '1566566041.jpg', 35, '2019-08-23 07:14:01', '2019-08-23 07:14:01'),
(38, 'Desktop', 'your can buy your favorite Desktop in your website', '1566566385.jpeg', 35, '2019-08-23 07:19:45', '2019-08-23 07:19:45'),
(39, 'DSLR', 'YOU CAN BUY A BEST DSLR FROM OUR WEBSITE', '1566566549.jpg', 35, '2019-08-23 07:22:29', '2019-08-23 07:22:29'),
(40, 'TV & Home Appliances', 'you can buy your TV and other product by this website', '1566566825.jpg', NULL, '2019-08-23 07:27:05', '2019-08-23 07:27:05'),
(41, 'Televisions', 'All Televisions Brands you can buy our website', '1566567061.jpg', 40, '2019-08-23 07:31:01', '2019-08-23 07:31:01'),
(42, 'Cooling & Heating', 'you can buy this product in our website', '1566567566.jpg', 40, '2019-08-23 07:39:26', '2019-08-23 07:39:26'),
(43, 'Health & Beauty', '(Health & Beauty ) you can buy our product by website', '1566567743.jpg', NULL, '2019-08-23 07:42:23', '2019-08-23 07:42:23'),
(44, 'Hair Care', 'that is the best website', '1566567903.jpg', 43, '2019-08-23 07:45:03', '2019-08-23 07:45:03'),
(45, 'Skin Care', 'that is the best', '1566568063.jpg', 43, '2019-08-23 07:47:43', '2019-08-23 07:47:43'),
(46, 'Makeup', 'this is the best', '1566569487.jpg', 43, '2019-08-23 08:11:27', '2019-08-23 08:11:27'),
(47, 'Babies & Toys', 'this is the best', '1566569653.jpg', NULL, '2019-08-23 08:14:13', '2019-08-23 08:14:13'),
(48, 'Mother & Baby', 'it is important for mother and baby', '1566570143.jpg', 47, '2019-08-23 08:22:23', '2019-08-23 08:22:23'),
(49, 'Diapering & Potty', 'this is the best', '1566570295.jpg', 43, '2019-08-23 08:24:55', '2019-08-23 08:24:55'),
(50, 'Baby Care', 'that is the best', '1566570417.jpg', 47, '2019-08-23 08:26:57', '2019-08-24 04:06:12'),
(51, 'Baby Personal Care', 'baby caree', '1566572789.jpg', 47, '2019-08-23 09:06:29', '2019-08-23 09:06:29'),
(52, 'Clothing & Accessories', 'Clothing & Accessories is best product quality', '1566572877.jpg', 47, '2019-08-23 09:07:57', '2019-08-23 09:07:57'),
(53, 'Home & Lifestyle', 'we are provide best product for your home', '1566573288.jpg', NULL, '2019-08-23 09:14:49', '2019-08-23 09:14:49'),
(54, 'Furniture', 'that is the best for home', '1566573376.png', 53, '2019-08-23 09:16:16', '2019-08-23 09:16:16'),
(55, 'Bedding', 'we are provide best service', '1566573468.jpg', 53, '2019-08-23 09:17:48', '2019-08-23 09:17:48'),
(56, 'Laundry & Cleaning', 'best quality', '1566573589.jpg', 53, '2019-08-23 09:19:49', '2019-08-23 09:19:49'),
(57, 'Women\'s Fashion', 'best quality for you', '1566573838.jpg', NULL, '2019-08-23 09:23:58', '2019-08-23 09:23:58'),
(58, 'Traditional Clothing', 'this is for girls', '1566574089.jpg', 57, '2019-08-23 09:28:10', '2019-08-23 09:28:10'),
(59, 'Women Bags', 'for woman', '1566574711.jpg', 57, '2019-08-23 09:38:31', '2019-08-23 09:38:31'),
(60, 'Shalwar Kameez', 'best product for woman', '1566575017.jpg', 57, '2019-08-23 09:43:37', '2019-08-23 09:43:37'),
(61, 'Wedding Wear', 'best product', '1566575164.jpg', 57, '2019-08-23 09:46:05', '2019-08-23 09:46:05'),
(62, 'Men\'s Fashion', 'best product for mans', '1566575429.jpg', NULL, '2019-08-23 09:50:29', '2019-08-23 09:50:29'),
(63, 'T-Shirts', 'Best T-Shirts for man', '1566575559.jpg', 62, '2019-08-23 09:52:39', '2019-08-23 09:52:39'),
(65, 'Shirts', 'best Quality', '1566575790.jpg', 62, '2019-08-23 09:56:30', '2019-08-23 09:56:30'),
(66, 'Mens Panjabi', 'Best Quality Mens Panjabi', '1566575897.jpeg', 62, '2019-08-23 09:58:17', '2019-08-23 09:58:17'),
(67, 'Jeans', 'Best for Man Jeans', '1566575981.jpg', 62, '2019-08-23 09:59:41', '2019-08-23 09:59:41'),
(68, 'Watches & Accessories', 'Best Watches & Accessories', '1566576156.jpg', NULL, '2019-08-23 10:02:36', '2019-08-23 10:02:36'),
(69, 'Men\'s Watches', 'Best Men\'s Watches', '1566576296.jpg', 68, '2019-08-23 10:04:56', '2019-08-23 10:04:56'),
(70, 'Ladies Watches', 'Best Ladies Watches', '1566576379.jpg', 68, '2019-08-23 10:06:19', '2019-08-23 10:06:19'),
(71, 'Women\'s Jewellery', 'Best Women\'s Jewellery', '1566576447.jpg', 68, '2019-08-23 10:07:27', '2019-08-23 10:07:27'),
(72, 'mens sunglasses', 'Best mens sunglasses', '1566576521.jpg', 68, '2019-08-23 10:08:41', '2019-08-23 10:08:41'),
(73, 'Sports & Outdoor', 'best Sports & Outdoor', '1566576860.jpg', NULL, '2019-08-23 10:14:20', '2019-08-23 10:14:20'),
(74, 'Mens Sports', 'best Mens Sports', '1566577042.jpg', 73, '2019-08-23 10:17:22', '2019-08-23 10:17:22'),
(75, 'Exercise & Fitness', 'Best for Exercise & Fitness', '1566577285.jpg', 73, '2019-08-23 10:21:25', '2019-08-23 10:21:25'),
(76, 'Team Sports', 'Best Quality Team Sports', '1566577420.jpg', 73, '2019-08-23 10:23:40', '2019-08-23 10:23:40');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `division_id`, `created_at`, `updated_at`) VALUES
(4, 'Dhaka', 1, '2019-07-04 05:03:27', '2019-07-04 05:03:27'),
(5, 'DINAJPUR', 3, '2019-07-08 13:09:12', '2019-07-08 13:09:12'),
(6, 'JOYPURHAT', 2, '2019-07-16 05:24:01', '2019-07-16 05:24:01'),
(7, 'RANGPUR', 3, '2019-07-16 05:24:31', '2019-07-16 05:24:31'),
(8, 'Thakurgaon', 3, '2019-07-16 05:26:46', '2019-07-16 05:26:46'),
(9, 'Gaibandha', 3, '2019-07-16 05:27:18', '2019-07-16 05:27:18');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `priority`, `created_at`, `updated_at`) VALUES
(1, 'DHAKA', 1, '2019-07-04 03:30:57', '2019-07-16 05:09:09'),
(2, 'RAJSHAHI', 2, '2019-07-04 03:32:44', '2019-07-08 13:03:46'),
(3, 'RANGPUR', 3, '2019-07-04 03:33:02', '2019-07-08 13:03:57'),
(4, 'kHULNA', 7, '2019-07-04 03:33:50', '2019-07-08 13:04:12'),
(5, 'SYLHET', 4, '2019-07-08 13:03:03', '2019-07-08 13:03:03'),
(6, 'COMILLA', 5, '2019-07-08 13:05:09', '2019-07-08 13:05:09'),
(7, 'MYMENSINGH', 8, '2019-07-08 13:07:00', '2019-07-08 13:08:42'),
(8, 'CHIiTTAGONG', 6, '2019-07-08 13:08:27', '2019-07-08 13:08:27');

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
(5, '2019_06_18_054811_create_products_table', 2),
(6, '2019_06_23_080457_create_categories_table', 2),
(7, '2019_06_23_080844_create_brands_table', 2),
(9, '2019_06_23_091036_create_product_images_table', 2),
(15, '2019_07_04_063535_create_divisions_table', 4),
(16, '2019_07_04_063722_create_districts_table', 4),
(19, '2014_10_12_000000_create_users_table', 5),
(21, '2019_07_10_051652_create_carts_table', 6),
(22, '2019_07_10_114355_create_settings_table', 7),
(23, '2019_07_11_051701_create_payments_table', 8),
(26, '2019_06_23_081006_create_admins_table', 10),
(28, '2019_07_17_051315_create_sliders_table', 11),
(30, '2019_07_10_051530_create_orders_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `payment_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `is_paid` tinyint(1) NOT NULL DEFAULT '0',
  `is_completed` tinyint(1) NOT NULL DEFAULT '0',
  `is_seen_by_admin` tinyint(1) NOT NULL DEFAULT '0',
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_charge` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '50',
  `custom_discount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `payment_id`, `ip_address`, `name`, `phone_no`, `total_price`, `shipping_address`, `email`, `message`, `is_paid`, `is_completed`, `is_seen_by_admin`, `transaction_id`, `shipping_charge`, `custom_discount`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, '::1', 'min', '01751337061', '140099', 'mmm', 'minhazul234@gmail.com', 'test', 1, 1, 1, NULL, '50', '0', '2019-08-25 07:32:57', '2019-08-26 00:16:34'),
(4, NULL, 2, '::1', 'minhazul min', '01751337061', '1700', 'uttara Dhaka', 'minhazul234@gmail.com', 'test', 0, 0, 1, '12345', '50', '0', '2019-08-26 21:30:15', '2019-11-13 06:39:27');

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
('munna@gmail.com', '$2y$10$e6WEjoLKDbd3PT4.iVdo7u59TMWWI2FH1VPgtCCbyTETSF8ZcgpbK', '2019-07-06 23:22:41');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` tinyint(4) NOT NULL DEFAULT '1',
  `short_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'payment No',
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'agent | personal',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `name`, `image`, `priority`, `short_name`, `no`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Cash In', 'cash_in.jpg', 1, 'cash_in', NULL, NULL, '2019-07-11 05:35:12', '2019-07-11 05:35:12'),
(2, 'Bkash', '1564474998.png', 2, 'bkash', '01751337061', 'personal', '2019-07-10 18:00:00', '2019-07-30 02:23:18'),
(3, 'Rocket', '1564475009.png', 3, 'rockect', '01626296979-1', 'personal', '2019-07-10 18:00:00', '2019-07-30 02:23:29'),
(5, 'ucash', '1564474961.png', 4, 'ucash', '01722671342', 'personal', '2019-07-30 02:22:41', '2019-07-30 02:22:41');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `price` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `offer_price` int(11) DEFAULT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `title`, `description`, `slug`, `quantity`, `price`, `status`, `offer_price`, `admin_id`, `created_at`, `updated_at`) VALUES
(41, 36, 7, 'IPhone X', 'Announced	2017, September\r\nStatus	Available. Released 2017, October\r\nBODY	Dimensions	143.6 x 70.9 x 7.7 mm (5.65 x 2.79 x 0.30 in)\r\nWeight	174 g (6.14 oz)\r\nBuild	Front/back glass, stainless steel frame\r\nSIM	Nano-SIM\r\n 	IP67 dust/water resistant (up to 1m for 30 mins)\r\nApple Pay (Visa, MasterCard, AMEX certified)\r\nDISPLAY	Type	OLED capacitive touchscreen, 16M colors\r\nSize	5.8 inches, 84.4 cm2 (~82.9% screen-to-body ratio)\r\nResolution	1125 x 2436 pixels, 19.5:9 ratio (~458 ppi density)\r\nProtection	Scratch-resistant glass, oleophobic coating\r\n 	Dolby Vision\r\nHDR10\r\nWide color gamut\r\n3D Touch\r\nTrue-tone\r\n120 Hz touch-sensing\r\nPLATFORM	OS	iOS 11.1.1, upgradable to iOS 12.4\r\nChipset	Apple A11 Bionic (10 nm)\r\nCPU	Hexa-core 2.39 GHz (2x Monsoon + 4x Mistral)\r\nGPU	Apple GPU (three-core graphics)\r\nMEMORY	Card slot	No\r\nInternal	64GB 3GB RAM, 256GB 3GB RAM\r\nMAIN CAMERA	Dual	12 MP, f/1.8, 28mm (wide), 1/3\", 1.22µm, PDAF, OIS\r\n12 MP, f/2.4, 52mm (telephoto), 1/3.4\", 1.0µm, PDAF, OIS, 2x optical zoom\r\nFeatures	Quad-LED dual-tone flash, HDR (photo/panorama), panorama, HDR\r\nVideo	2160p@24/30/60fps, 1080p@30/60/120/240fps\r\nSELFIE CAMERA	Dual	7 MP, f/2.2, 32mm (standard)\r\nTOF 3D camera\r\nFeatures	HDR\r\nVideo	1080p@30fps', 'iphone-x', 10, 89999, 0, NULL, 1, '2019-08-24 04:35:41', '2019-08-24 04:35:41'),
(42, 34, 7, 'Speaker', 'This purposefully designed speaker creates rich, nuanced sound that defies its size. HomePod combines custom Apple-engineered audio technology and advanced software to deliver precision sound that fills the room. And at just under seven inches tall, HomePod fits anywhere in your home', 'speaker', 10, 10000, 0, NULL, 1, '2019-08-24 04:45:10', '2019-08-24 04:45:10'),
(43, 34, 7, 'Headphone', 'AirPods will forever change the way you use headphones. Whenever you pull your AirPods out of the charging case, they instantly turn on and connect to your iPhone, Apple Watch, iPad, or Mac.1 Audio automatically plays as soon as you put them in your ears and pauses when you take them out. To adjust the volume, change the song, make a call, or even get directions, just double-tap to activate Siri.\r\n\r\nDriven by the custom Apple W1 chip, AirPods use optical sensors and a motion accelerometer to detect when they’re in your ears. Whether you’re using both AirPods or just one, the W1 chip automatically routes the audio and engages the microphone. And when you’re on a call or talking to Siri, an additional accelerometer works with beamforming microphones to filter out background noise and focus on the sound of your voice. Because the ultralow-power W1 chip manages battery life so well, AirPods deliver an incredible 5 hours of listening time on one charge.2 And they’re made to keep up with you, thanks to a charging case that holds multiple additional charges for more than 24 hours of listening time.3 Need a quick charge? Just 15 minutes in the case gives you 3 hours of listening time.4\r\n\r\nHighlights\r\nDesigned by Apple\r\nAutomatically on, automatically connected\r\nOne-tap setup for all your Apple devices1\r\nQuick access to Siri with a double-tap\r\nMore than 24-hour battery life with Charging Case2\r\nCharges quickly in the case\r\nRich, high-quality audio and voice\r\nSeamless switching between devices\r\nWhat’s in the Box\r\nAirPods\r\nCharging Case\r\nLightning to USB Cable\r\nAccessibility\r\nLive Listen audio8\r\nAssistive Switch Control\r\nWeight\r\nAirPods (each): 0.14 ounce (4 g)\r\nCharging Case: 1.34 ounces (38 g)\r\nDimensions\r\nAirPods (each): 0.65 by 0.71 by 1.59 inches (16.5 by 18.0 by 40.5 mm)\r\nCharging Case: 1.74 by 0.84 by 2.11 inches (44.3 by 21.3 by 53.5 mm)\r\nConnections\r\nAirPods: Bluetooth\r\nCharging Case: Lightning connector\r\nAirPods Sensors (each):\r\nDual beamforming microphones\r\nDual optical sensors\r\nMotion-detecting accelerometer\r\nSpeech-detecting accelerometer\r\nPower and Battery\r\nAirPods with Charging Case: More than 24 hours listening time,3 up to 11 hours talk time6\r\nAirPods (single charge): Up to 5 hours listening time,2 up to 2 hours talk time5\r\n15 minutes in the case equals 3 hours listening time4 or over an hour of talk time7', 'headphone', 10, 20000, 0, NULL, 1, '2019-08-24 04:50:41', '2019-08-24 04:50:41'),
(44, 36, 7, 'IPhone XI', 'APPLE IPHONE 11 PRICE, LAUNCH DATE\r\nExpected Price:	Rs. 101,990\r\nRelease Date:	Sep 18, 2019 (Unofficial)\r\nVariant:	4 GB RAM / 64 GB internal storage\r\nPhone Status:	Rumoured\r\nAPPLE IPHONE 11 DETAILS\r\nBuy For\r\nGreat configurationExcellent set of cameraWaterproof and dustproof\r\nBeware of\r\nNon-expandable storageNo fingerprint scanner\r\nVerdict\r\nThe Apple iPhone XI is a great smartphone, which was loaded with a lot of quality features. It comes with a waterproof and dustproof body which is the key attraction of the device. The excellent set of cameras offer excellent images as well as capable of recording crisp videos. However, expandable storage and a fingerprint scanner would have made it a perfect option to go for around this price range.\r\n\r\nTriple snapper from Apple\r\nDisplay and Battery\r\nThe Apple iPhone XI sports a 5.8-inch OLED display, which exhibits a screen resolution 1,125 x 2,436 pixels. It carries a bezel-less display with screen protection to avoid scratches. It comes with a waterproof and dustproof body. The screen carries a pixel density of 463 PPI. It is assisted by a 4,000mAh Li-ion battery that can provide the required power backup to keep it alive for long hours.\r\nCamera and Storage\r\nThe Apple iPhone XI is armed with triple primary cameras - 14MP + 12MP + 12MP lenses. The lenses are assisted by a Back-illuminated sensor (BSI) that helps to click crisp and clear images. The setup is also capable of recording high-definition videos. There is a 10MP front camera accompanied by a Retina Flash. The front snapper does well, which capturing excellent selfies and also assists to facilitate video calling. The device houses non-expandable storage of 64GB, which can save a lot of files and documents in it.\r\nConfiguration and Connectivity\r\nThe device is powered by two processors - a 2.49GHz Vortex dual-core and a 1.52GHz Tempest quad-core. The processors are placed on an Apple A12 Bionic chipset and are coupled with a 4GB RAM and Apple GPU. Hence, the smartphone offers a lag-free performance while running multiple tasks simultaneously.\r\nThe A', 'iphone-xi', 10, 100000, 0, NULL, 1, '2019-08-24 04:54:13', '2019-08-24 04:54:13'),
(45, 36, 8, 'Redmi Note 8', 'Network Type\r\nGSM / CDMA / HSPA / LTE\r\nNetwork 2G\r\nGSM 850 / 900 / 1800 / 1900 - SIM 1 & SIM 2\r\nCDMA 800 & TD-SCDMA\r\nNetwork 3G\r\nHSDPA 850 / 900 / 1700(AWS) / 1900 / 2100\r\nNetwork 4G\r\nLTE band 1(2100), 2(1900), 3(1800), 4(1700/2100), 5(850), 7(2600), 8(900), 12(700), 17(700), 20(800), 34(2000), 38(2600), 39(1900), 40(2300), 41(2500)\r\nSpeed\r\nHSPA 42.2/5.76 Mbps, LTE-A (4CA) Cat16 1024/150 Mbps\r\nGPRS\r\nYes\r\nEDGE\r\nYes\r\n\r\nLaunch\r\nLaunch Announcement\r\n2018, May\r\nLaunch Date\r\nAvailable. Released 2018, June\r\n\r\nBody\r\nBody Dimensions\r\n154.9 x 74.8 x 7.6 mm (6.10 x 2.94 x 0.30 in)\r\nBody Weight\r\n175 g (6.17 oz)\r\nBuild\r\nFront/back glass (Gorilla Glass 5), aluminum frame (7000 series)\r\nNetwork Sim\r\nDual SIM (Nano-SIM, dual stand-by)\r\n\r\nDisplay\r\nDisplay Type\r\nSuper AMOLED capacitive touchscreen, 16M Colors\r\nDisplay Size\r\n6.21 inches, 97.1 cm2 (~83.8% screen-to-body ratio)\r\nDisplay Resolution\r\n1080 x 2248 pixels\r\nDisplay Multitouch\r\nYes\r\nDisplay Density\r\n402 ppi density\r\nDisplay Screen Protection\r\nCorning Gorilla Glass 5\r\n- HDR10 display\r\n- DCI-P3\r\n- MIUI 9.5', 'xiaomi-redmi-note-8', 10, 25000, 0, NULL, 1, '2019-08-24 05:00:20', '2019-08-24 05:01:12'),
(46, 36, 9, 'samsung', 'The Note 8 is powered by an Exynos 8895 or Snapdragon 835 processor, depending on geographic region, along with 6 GB of RAM. It has a 6.3-inch 1440p Super AMOLED display with curved edges similar to the Galaxy S8, but with a slightly more flat surface area.\r\nCPU: Exynos: Octa-core (4×2.3 GHz M2 Mong...\r\nRear camera: Dual 12 MP (Wide-angle f/1.7 + ...\r\nOperating system: Original: Android 7.1.1 \"Nou...\r\nFront camera: 8 MP, f/1.7, autofocus, 1/3.6\" se...', 'samsung', 10, 20000, 0, NULL, 1, '2019-08-24 05:25:03', '2019-08-24 05:25:03'),
(47, 37, 9, 'Samsung laptop', 'CPU: 2.3GHz Intel Core i5-6200U (dual-core, 3MB cache, up to 2.8GHz with Turbo Boost) Graphics: Intel HD Graphics 520. RAM: 8GB DDR3 1866. Screen: 13.3-inch, FHD (1,920 x 1,080) LED anti-reflective display.', 'laptop', 6, 50000, 0, NULL, 1, '2019-08-24 05:30:09', '2019-08-24 09:49:34'),
(48, 60, 11, 'Shalwar Kameez', 'Made in Bangladeshi', 'shalwar-kameez', 10, 1200, 0, NULL, 1, '2019-08-24 09:44:47', '2019-08-24 09:44:47'),
(49, 69, 11, 'Men\'s Watches', 'riginal Men\'s Watches for All Budgets at Pickaboo.', 'mens-watches', 10, 200, 0, NULL, 1, '2019-08-24 10:25:35', '2019-08-24 10:25:35'),
(50, 66, 12, 'Men\'s Panjabi', 'this is the best collection', 'mens-panjabi', 10, 1200, 0, NULL, 1, '2019-08-24 10:30:09', '2019-08-24 10:30:09'),
(51, 63, 13, 'T-shirt', 'Made in Bangladesh', 't-shirt', 10, 150, 0, NULL, 1, '2019-08-24 10:32:11', '2019-08-24 10:32:11'),
(52, 65, 14, 'Shirt', 'Made in Bangladesh', 'shirt', 10, 1200, 0, NULL, 1, '2019-08-24 10:34:07', '2019-08-24 10:34:07'),
(53, 61, 15, 'Wedding', 'Made in Bangladeshi', 'wedding', 11, 20000, 0, NULL, 1, '2019-08-24 10:37:39', '2019-08-24 10:37:39'),
(54, 59, 16, 'women begs', 'Made in Bangladeshi', 'women-begs', 12, 600, 0, NULL, 1, '2019-08-24 10:41:40', '2019-08-24 10:41:40'),
(55, 55, 17, 'Casablanca Solid Wood', 'Available in King bed, Queen bed, Night stand, Dresser with mirror & 4 Door wardrobe. Cutwork Design on Headboard & Footboard Upto 8\" spring mattress', 'casablanca-solid-wood', 10, 15000, 0, NULL, 1, '2019-08-24 10:46:48', '2019-08-24 10:46:48'),
(56, 41, 18, 'Smart TV', 'best Quality super', 'smart-tv', 10, 20000, 0, NULL, 1, '2019-08-24 10:54:06', '2019-08-24 10:54:06'),
(57, 74, 19, 'Mens Sports', 'bangladeshi products', 'mens-sports', 10, 500, 0, NULL, 1, '2019-08-24 10:58:53', '2019-08-24 10:58:53'),
(58, 71, 20, 'Juilary', 'Made in Bangladeshi', 'juilary', 10, 100000, 0, NULL, 1, '2019-08-24 11:03:35', '2019-08-24 11:03:35'),
(59, 45, 21, 'Nivea Skin Care', 'indian Best', 'nivea-skin-care', 10, 300, 0, NULL, 1, '2019-08-24 11:11:48', '2019-08-24 11:11:48'),
(60, 50, 11, 'Baby Care', 'Made in Bangladeshi', 'baby-care', 10, 300, 0, NULL, 1, '2019-08-26 20:37:23', '2019-08-26 20:37:23'),
(61, 74, 11, 'Sports & Outdoor', 'Made in bangladeshi', 'sports-outdoor', 10, 1000, 0, NULL, 1, '2019-08-26 20:39:44', '2019-08-26 20:39:44');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(66, 41, '1566642941.jpg', '2019-08-24 04:35:41', '2019-08-24 04:35:41'),
(67, 41, '1566642941.jpg', '2019-08-24 04:35:41', '2019-08-24 04:35:41'),
(68, 41, '1566642941.jpg', '2019-08-24 04:35:41', '2019-08-24 04:35:41'),
(69, 42, '1566643510.jpg', '2019-08-24 04:45:10', '2019-08-24 04:45:10'),
(70, 42, '1566643511.jpg', '2019-08-24 04:45:11', '2019-08-24 04:45:11'),
(71, 42, '1566643511.jpg', '2019-08-24 04:45:11', '2019-08-24 04:45:11'),
(72, 42, '1566643511.jpg', '2019-08-24 04:45:11', '2019-08-24 04:45:11'),
(73, 42, '1566643511.jpg', '2019-08-24 04:45:11', '2019-08-24 04:45:11'),
(74, 43, '1566643841.jpg', '2019-08-24 04:50:41', '2019-08-24 04:50:41'),
(75, 43, '1566643841.jpg', '2019-08-24 04:50:41', '2019-08-24 04:50:41'),
(76, 43, '1566643841.jpg', '2019-08-24 04:50:41', '2019-08-24 04:50:41'),
(77, 43, '1566643841.jpg', '2019-08-24 04:50:41', '2019-08-24 04:50:41'),
(78, 43, '1566643841.jpg', '2019-08-24 04:50:41', '2019-08-24 04:50:41'),
(79, 44, '1566644053.jpg', '2019-08-24 04:54:13', '2019-08-24 04:54:13'),
(80, 44, '1566644053.jpg', '2019-08-24 04:54:13', '2019-08-24 04:54:13'),
(81, 44, '1566644053.jpg', '2019-08-24 04:54:13', '2019-08-24 04:54:13'),
(82, 44, '1566644053.jpg', '2019-08-24 04:54:13', '2019-08-24 04:54:13'),
(83, 45, '1566644420.jpg', '2019-08-24 05:00:21', '2019-08-24 05:00:21'),
(84, 45, '1566644421.jpg', '2019-08-24 05:00:21', '2019-08-24 05:00:21'),
(85, 45, '1566644421.jpg', '2019-08-24 05:00:21', '2019-08-24 05:00:21'),
(86, 45, '1566644421.jpg', '2019-08-24 05:00:21', '2019-08-24 05:00:21'),
(87, 46, '1566645903.jpg', '2019-08-24 05:25:03', '2019-08-24 05:25:03'),
(88, 46, '1566645903.png', '2019-08-24 05:25:03', '2019-08-24 05:25:03'),
(89, 46, '1566645904.jpg', '2019-08-24 05:25:04', '2019-08-24 05:25:04'),
(90, 47, '1566646209.jpg', '2019-08-24 05:30:10', '2019-08-24 05:30:10'),
(91, 47, '1566646210.jpg', '2019-08-24 05:30:10', '2019-08-24 05:30:10'),
(92, 48, '1566661487.jpg', '2019-08-24 09:44:47', '2019-08-24 09:44:47'),
(93, 49, '1566663935.jpg', '2019-08-24 10:25:35', '2019-08-24 10:25:35'),
(94, 50, '1566664209.jpeg', '2019-08-24 10:30:10', '2019-08-24 10:30:10'),
(95, 51, '1566664331.jpg', '2019-08-24 10:32:11', '2019-08-24 10:32:11'),
(96, 52, '1566664447.jpg', '2019-08-24 10:34:07', '2019-08-24 10:34:07'),
(97, 53, '1566664659.jpg', '2019-08-24 10:37:39', '2019-08-24 10:37:39'),
(98, 54, '1566664900.jpg', '2019-08-24 10:41:40', '2019-08-24 10:41:40'),
(99, 55, '1566665208.jpg', '2019-08-24 10:46:48', '2019-08-24 10:46:48'),
(100, 56, '1566665646.jpg', '2019-08-24 10:54:06', '2019-08-24 10:54:06'),
(101, 57, '1566665933.jpg', '2019-08-24 10:58:53', '2019-08-24 10:58:53'),
(102, 58, '1566666215.jpeg', '2019-08-24 11:03:36', '2019-08-24 11:03:36'),
(103, 59, '1566666708.jpg', '2019-08-24 11:11:48', '2019-08-24 11:11:48'),
(104, 60, '1566873443.jpg', '2019-08-26 20:37:24', '2019-08-26 20:37:24'),
(105, 61, '1566873584.jpg', '2019-08-26 20:39:44', '2019-08-26 20:39:44');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_cost` int(10) UNSIGNED NOT NULL DEFAULT '100',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `email`, `phone`, `address`, `shipping_cost`, `created_at`, `updated_at`) VALUES
(1, 'minhazul234@gmail.com', '01751337061', 'uttara,Dhaka', 100, '2019-07-10 11:52:14', '2019-07-10 11:52:14');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` tinyint(3) UNSIGNED NOT NULL DEFAULT '10',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `button_text`, `button_link`, `priority`, `created_at`, `updated_at`) VALUES
(8, 'Iphone', '1563354539.jpg', 'buy now', 'https://www.apple.com/', 1, '2019-07-17 03:08:59', '2019-07-17 03:08:59'),
(12, 'MOBILE PHONE', '1566580128.jpg', 'You will get Free Delivery', 'https://chaldal.com/', 2, '2019-08-23 11:08:48', '2019-08-23 11:08:48'),
(13, 'Furniture', '1566580172.jpg', 'You will get Free Delivery', 'https://chaldal.com/', 3, '2019-08-23 11:09:32', '2019-08-23 11:09:32'),
(14, 'Mens Panjabi', '1566580197.jpg', 'You will get Free Delivery', 'https://chaldal.com/', 4, '2019-08-23 11:09:57', '2019-08-23 11:09:57'),
(15, 'Refrigerators', '1566580259.jpg', 'You will get Free Delivery', 'https://chaldal.com/', 5, '2019-08-23 11:10:59', '2019-08-23 11:10:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division_id` int(10) UNSIGNED NOT NULL COMMENT 'Division table ID',
  `district_id` int(10) UNSIGNED NOT NULL COMMENT 'DiStrict table ID',
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '0' COMMENT '0 = inactive|1 = active| 2 = Band ',
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `phone_no`, `email`, `password`, `street_address`, `division_id`, `district_id`, `status`, `ip_address`, `avatar`, `shipping_address`, `remember_token`, `created_at`, `updated_at`) VALUES
(16, 'minhazul', 'min', 'minhazulmin', '01751337061', 'minhazul234@gmail.com', '$2y$10$a9riANtyMg3EXvQ1pwasPeO/REbX5xJTg9Vu9f8/nNdvF3KcV9ZbC', 'Uttara', 1, 4, 1, '::1', NULL, NULL, 'l5Hhkk0AwDzeJPQ8oFKo4xXadEWIaZANlgNNUyw59KhLLNEvDP7oRkAFPyKD', '2019-07-29 02:03:43', '2019-08-22 11:21:19'),
(17, 'Jahid', 'Munna', 'jahidmunna', '01722671342', 'easylearnbd61@gmail.com', '$2y$10$hVQ0/MMZ5t.SPjLqsLNXRugA01PiB3BjBakXxBlhdd5S1fmce6.E2', 'Birampur', 3, 8, 1, '::1', NULL, NULL, NULL, '2019-07-29 02:15:27', '2019-07-29 02:15:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`),
  ADD KEY `carts_order_id_foreign` (`order_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_payment_id_foreign` (`payment_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payments_short_name_unique` (`short_name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_phone_no_unique` (`phone_no`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
