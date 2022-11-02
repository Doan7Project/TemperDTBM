-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 09:10 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furnituredb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `gender`, `email`, `password`, `phone`, `birthday`, `country`, `city`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Team', 'DTBM Furniture', 'Male', 'test@gmai.com', '123456', '0981137177', '2022-11-02', 'Vietnam', 'TPHCM', 'TPHCM', NULL, NULL),
(2, 'Team', 'DTBM Furniture', 'Male', 'test@gmai.com', '123456', '0981137177', '2022-11-02', 'Vietnam', 'TPHCM', 'TPHCM', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
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
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `order_detail_id` bigint(20) NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_06_082035_create_product_categories_table', 1),
(6, '2022_10_08_040344_create_products_table', 1),
(7, '2022_10_13_064900_create_product_images_table', 1),
(8, '2022_10_20_054657_create_customers_table', 1),
(9, '2022_10_20_055547_create_feedback_table', 1),
(10, '2022_10_20_055827_create_order_details_table', 1),
(11, '2022_10_20_055952_create_order_masters_table', 1),
(12, '2022_10_20_060605_create_slide_shows_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_master_id` bigint(20) NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_masters`
--

DROP TABLE IF EXISTS `order_masters`;
CREATE TABLE `order_masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `date_required` date NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `models` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `made_in` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_code`, `price`, `unit`, `quantity`, `status`, `models`, `made_in`, `category_id`, `images`, `content`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Upholstered fabric armchair', 'FNI-666596239', 250.00, 'Cai', 10, 'Active', 'Featured_1', 'Thailand', 1, '/storage/uploads/2022/10/24/h_ANTROPUS-Cassina-609954-rel55463373.webp', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda quibusdam quidem dolor ea quisquam fugit qui ratione. Ut eius sed perspiciatis labore eaque. Rerum sint quidem officiis sit soluta dolore?', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda quibusdam quidem dolor ea quisquam fugit qui ratione. Ut eius sed perspiciatis labore eaque. Rerum sint quidem officiis sit soluta dolore?', '2022-10-24 00:23:58', '2022-10-24 00:29:16'),
(2, 'Armchair desalto', 'FNI-666596548', 230.00, 'Cai', 10, 'Active', 'Featured_2', 'Japan', 1, '/storage/uploads/2022/10/24/h_armchair-desalto-599092-rel204b99e9.webp', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In sint nostrum deleniti ipsa sunt atque unde est sapiente odit accusamus, ipsam suscipit soluta a quam, recusandae corporis reprehenderit. Eos, esse!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In sint nostrum deleniti ipsa sunt atque unde est sapiente odit accusamus, ipsam suscipit soluta a quam, recusandae corporis reprehenderit. Eos, esse!', '2022-10-24 00:29:07', '2022-10-24 00:55:50'),
(3, 'Armchair meridiani', 'FNI-666596674', 520.00, 'Cai', 5, 'Active', 'Featured_1', 'Thailand', 1, '/storage/uploads/2022/10/24/h_armchair-meridiani-604919-relfee7703e.webp', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In sint nostrum deleniti ipsa sunt atque unde est sapiente odit accusamus, ipsam suscipit soluta a quam, recusandae corporis reprehenderit. Eos, esse!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In sint nostrum deleniti ipsa sunt atque unde est sapiente odit accusamus, ipsam suscipit soluta a quam, recusandae corporis reprehenderit. Eos, esse!', '2022-10-24 00:31:13', '2022-10-24 00:31:13'),
(4, 'Armchair Sicis', 'FNI-666596716', 230.00, 'Cai', 5, 'Active', 'Featured_1', 'China', 1, '/storage/uploads/2022/10/24/h_armchair-sicis-607673-relf97171dd.webp', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In sint nostrum deleniti ipsa sunt atque unde est sapiente odit accusamus, ipsam suscipit soluta a quam, recusandae corporis reprehenderit. Eos, esse!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In sint nostrum deleniti ipsa sunt atque unde est sapiente odit accusamus, ipsam suscipit soluta a quam, recusandae corporis reprehenderit. Eos, esse!', '2022-10-24 00:31:55', '2022-10-24 00:31:55'),
(5, 'Armchair DE PADOVA', 'FNI-666596851', 510.00, 'Cai', 5, 'Active', 'Trending', 'Thailand', 1, '/storage/uploads/2022/10/24/h_BLENDY-MOVIE-Armchair-DE-PADOVA-606182-rela946a98a.webp', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In sint nostrum deleniti ipsa sunt atque unde est sapiente odit accusamus, ipsam suscipit soluta a quam, recusandae corporis reprehenderit. Eos, esse!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In sint nostrum deleniti ipsa sunt atque unde est sapiente odit accusamus, ipsam suscipit soluta a quam, recusandae corporis reprehenderit. Eos, esse!', '2022-10-24 00:34:10', '2022-10-24 01:15:18'),
(6, 'Claire Lema', 'FNI-666596913', 120.00, 'Cai', 20, 'Active', 'New arrival', 'Thailand', 1, '/storage/uploads/2022/10/24/h_CLAIRE-Lema-592316-rel16291bd1.webp', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In sint nostrum deleniti ipsa sunt atque unde est sapiente odit accusamus, ipsam suscipit soluta a quam, recusandae corporis reprehenderit. Eos, esse!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In sint nostrum deleniti ipsa sunt atque unde est sapiente odit accusamus, ipsam suscipit soluta a quam, recusandae corporis reprehenderit. Eos, esse!', '2022-10-24 00:35:12', '2022-10-24 01:15:27'),
(7, 'EVAn Giorgetti', 'FNI-666596949', 360.00, 'Cai', 5, 'Active', 'Featured', 'Thailand', 1, '/storage/uploads/2022/10/24/h_EVA-Giorgetti-601847-rel38e789f5.webp', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In sint nostrum deleniti ipsa sunt atque unde est sapiente odit accusamus, ipsam suscipit soluta a quam, recusandae corporis reprehenderit. Eos, esse!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In sint nostrum deleniti ipsa sunt atque unde est sapiente odit accusamus, ipsam suscipit soluta a quam, recusandae corporis reprehenderit. Eos, esse!', '2022-10-24 00:35:48', '2022-10-24 01:15:48'),
(8, 'Fame Wittmann', 'FNI-666596989', 620.00, 'Cai', 10, 'Active', 'Featured_2', 'Singapore', 1, '/storage/uploads/2022/10/24/h_fame-wittmann-598154-rel119aa210.webp', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In sint nostrum deleniti ipsa sunt atque unde est sapiente odit accusamus, ipsam suscipit soluta a quam, recusandae corporis reprehenderit. Eos, esse!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In sint nostrum deleniti ipsa sunt atque unde est sapiente odit accusamus, ipsam suscipit soluta a quam, recusandae corporis reprehenderit. Eos, esse!', '2022-10-24 00:36:28', '2022-10-24 00:56:46'),
(9, 'Haven Calligaris', 'FNI-666597693', 320.00, 'Cai', 12, 'Active', 'Top', 'Viet Nam', 1, '/storage/uploads/2022/10/24/h_haven-calligaris-598483-relfb0965d1.webp', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In sint nostrum deleniti ipsa sunt atque unde est sapiente odit accusamus, ipsam suscipit soluta a quam, recusandae corporis reprehenderit. Eos, esse!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In sint nostrum deleniti ipsa sunt atque unde est sapiente odit accusamus, ipsam suscipit soluta a quam, recusandae corporis reprehenderit. Eos, esse!', '2022-10-24 00:48:12', '2022-10-24 01:16:00'),
(10, 'Kaori Leather', 'FNI-666597749', 120.00, 'Cai', 5, 'Active', 'Default', 'Thailand', 1, '/storage/uploads/2022/10/24/h_kaori-leather-armchair-poliform-596780-rel78489fb6.webp', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In sint nostrum deleniti ipsa sunt atque unde est sapiente odit accusamus, ipsam suscipit soluta a quam, recusandae corporis reprehenderit. Eos, esse!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In sint nostrum deleniti ipsa sunt atque unde est sapiente odit accusamus, ipsam suscipit soluta a quam, recusandae corporis reprehenderit. Eos, esse!', '2022-10-24 00:49:08', '2022-10-24 00:49:08'),
(11, 'Quilton Wide', 'FNI-666597807', 800.00, 'Cai', 20, 'Active', 'Featured_1', 'Thailand', 1, '/storage/uploads/2022/10/24/h_QUILTON-WIDE-Hay-606961-rel245744e1.webp', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In sint nostrum deleniti ipsa sunt atque unde est sapiente odit accusamus, ipsam suscipit soluta a quam, recusandae corporis reprehenderit. Eos, esse!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In sint nostrum deleniti ipsa sunt atque unde est sapiente odit accusamus, ipsam suscipit soluta a quam, recusandae corporis reprehenderit. Eos, esse!', '2022-10-24 00:50:06', '2022-10-24 00:56:37'),
(12, 'Erra Natuzzi', 'FNI-666597862', 254.00, 'Cai', 5, 'Active', 'popular_1', 'Thailand', 1, '/storage/uploads/2022/10/24/h_TERRA-Natuzzi-Italia-594288-relf00640a3.webp', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In sint nostrum deleniti ipsa sunt atque unde est sapiente odit accusamus, ipsam suscipit soluta a quam, recusandae corporis reprehenderit. Eos, esse!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In sint nostrum deleniti ipsa sunt atque unde est sapiente odit accusamus, ipsam suscipit soluta a quam, recusandae corporis reprehenderit. Eos, esse!', '2022-10-24 00:51:01', '2022-10-24 01:16:28'),
(13, 'Garden Armchair', 'FNI-666597907', 320.00, 'Cai', 5, 'Active', 'Featured_2', 'Singapore', 1, '/storage/uploads/2022/10/24/h_THE-FACTORY-Garden-armchair-VONDOM-604744-reld728f89e.webp', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In sint nostrum deleniti ipsa sunt atque unde est sapiente odit accusamus, ipsam suscipit soluta a quam, recusandae corporis reprehenderit. Eos, esse!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In sint nostrum deleniti ipsa sunt atque unde est sapiente odit accusamus, ipsam suscipit soluta a quam, recusandae corporis reprehenderit. Eos, esse!', '2022-10-24 00:51:46', '2022-10-24 00:56:56'),
(14, 'Vento Ditre', 'FNI-666597953', 105.00, 'Cai', 20, 'Active', 'popular_2', 'Viet Nam', 1, '/storage/uploads/2022/10/24/h_VENTO-Ditre-Italia-598904-rel5678f28e.webp', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In sint nostrum deleniti ipsa sunt atque unde est sapiente odit accusamus, ipsam suscipit soluta a quam, recusandae corporis reprehenderit. Eos, esse!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In sint nostrum deleniti ipsa sunt atque unde est sapiente odit accusamus, ipsam suscipit soluta a quam, recusandae corporis reprehenderit. Eos, esse!', '2022-10-24 00:52:32', '2022-10-24 01:16:38'),
(15, 'Yoell Molteni', 'FNI-666597990', 230.00, 'Cai', 10, 'Active', 'popular_3', 'Thailand', 1, '/storage/uploads/2022/10/24/h_YOELL-Molteni-C-596589-rel45cc11a8.webp', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In sint nostrum deleniti ipsa sunt atque unde est sapiente odit accusamus, ipsam suscipit soluta a quam, recusandae corporis reprehenderit. Eos, esse!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In sint nostrum deleniti ipsa sunt atque unde est sapiente odit accusamus, ipsam suscipit soluta a quam, recusandae corporis reprehenderit. Eos, esse!', '2022-10-24 00:53:09', '2022-10-24 01:16:45'),
(16, 'Chaise Longue Cassina', 'FNI-666598143', 1200.00, 'Cai', 20, 'Active', 'Featured_2', 'Thailand', 1, '/storage/uploads/2022/10/24/h_8-Sofa-with-chaise-longue-Cassina-610498-rel443e9b1.webp', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In sint nostrum deleniti ipsa sunt atque unde est sapiente odit accusamus, ipsam suscipit soluta a quam, recusandae corporis reprehenderit. Eos, esse!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In sint nostrum deleniti ipsa sunt atque unde est sapiente odit accusamus, ipsam suscipit soluta a quam, recusandae corporis reprehenderit. Eos, esse!', '2022-10-24 00:55:42', '2022-10-24 00:55:42');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

DROP TABLE IF EXISTS `product_categories`;
CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `CategoryName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Detail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `CategoryName`, `Description`, `Detail`, `created_at`, `updated_at`) VALUES
(1, 'Sofas and armchairs', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex deserunt explicabo doloribus recusandae. Libero aut rem est ea maxime. Enim laborum id nulla, vitae vel expedita', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex deserunt explicabo doloribus recusandae. Libero aut rem est ea maxime. Enim laborum id nulla, vitae vel expedita similique ab provident exercitationem!', '2022-10-24 00:07:57', '2022-10-24 00:07:57'),
(2, 'Tables and chairs', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex deserunt explicabo doloribus', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex deserunt explicabo doloribus recusandae. Libero aut rem est ea maxime. Enim laborum id nulla, vitae vel expedita similique ab provident exercitationem!', '2022-10-24 00:20:39', '2022-10-24 00:20:39'),
(3, 'Kids furnitures', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex deserunt explicabo doloribus', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex deserunt explicabo doloribus recusandae. Libero aut rem est ea maxime. Enim laborum id nulla, vitae vel expedita similique ab provident exercitationem!', '2022-10-24 00:20:53', '2022-10-24 00:20:53');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

DROP TABLE IF EXISTS `product_images`;
CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slide_shows`
--

DROP TABLE IF EXISTS `slide_shows`;
CREATE TABLE `slide_shows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slide_shows`
--

INSERT INTO `slide_shows` (`id`, `name`, `image`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Luxury Internal', '1666596297.jpg', 'Active', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt eaque nemo adipisci consequatur deleniti atque quis unde nulla nihil hic esse placeat voluptatibus voluptate, consequuntur labore sequi repellendus cupiditate ut.', '2022-10-24 00:24:57', '2022-10-24 00:24:57'),
(2, 'Cool Room', '1666596329.jpg', 'Active', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt eaque nemo adipisci consequatur deleniti atque quis unde nulla nihil hic esse placeat voluptatibus voluptate, consequuntur labore sequi repellendus cupiditate ut.', '2022-10-24 00:25:29', '2022-10-24 00:25:29'),
(3, 'Classical Room', '1666596344.jpg', 'Active', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt eaque nemo adipisci consequatur deleniti atque quis unde nulla nihil hic esse placeat voluptatibus voluptate, consequuntur labore sequi repellendus cupiditate ut.', '2022-10-24 00:25:44', '2022-10-24 00:25:44'),
(4, 'Family Room', '1666596368.jpg', 'Active', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt eaque nemo adipisci consequatur deleniti atque quis unde nulla nihil hic esse placeat voluptatibus voluptate, consequuntur labore sequi repellendus cupiditate ut.', '2022-10-24 00:26:08', '2022-10-24 00:26:08'),
(5, 'Green For Xmax', '1666596398.jpg', 'Active', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt eaque nemo adipisci consequatur deleniti atque quis unde nulla nihil hic esse placeat voluptatibus voluptate, consequuntur labore sequi repellendus cupiditate ut.', '2022-10-24 00:26:38', '2022-10-24 00:26:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$pN1GSSjezeVcwT.9/lExeOVeEXn5ujTTjgJSVbPMMN8euy9X9lt4K', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feedback_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `order_masters`
--
ALTER TABLE `order_masters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_masters_customer_id_foreign` (`customer_id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `slide_shows`
--
ALTER TABLE `slide_shows`
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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_masters`
--
ALTER TABLE `order_masters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slide_shows`
--
ALTER TABLE `slide_shows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `order_masters`
--
ALTER TABLE `order_masters`
  ADD CONSTRAINT `order_masters_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
