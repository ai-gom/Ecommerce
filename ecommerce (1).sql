-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2024 at 01:13 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('1b6453892473a467d07372d45eb05abc2031647a', 'i:1;', 1717665798),
('1b6453892473a467d07372d45eb05abc2031647a:timer', 'i:1717665798;', 1717665798),
('77de68daecd823babbb58edb1c8e14d7106e83bb', 'i:1;', 1717635418),
('77de68daecd823babbb58edb1c8e14d7106e83bb:timer', 'i:1717635418;', 1717635418),
('gomercabubas12@gmail.com|127.0.0.1', 'i:4;', 1717665088),
('gomercabubas12@gmail.com|127.0.0.1:timer', 'i:1717665088;', 1717665088);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(27, 3, 9, '2024-06-06 02:09:50', '2024-06-06 02:09:50');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(4, 'Women', '2024-05-29 08:25:12', '2024-05-31 22:56:09'),
(6, 'Kids(men)', '2024-05-29 08:59:19', '2024-05-31 22:56:31'),
(16, 'Men', '2024-05-29 10:32:51', '2024-05-31 22:56:42'),
(18, 'Kids(women)', '2024-05-31 22:57:00', '2024-05-31 22:57:00');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_29_160421_create_categories_table', 2),
(5, '2024_05_30_235344_create_proudcts_table', 3),
(6, '2024_05_31_152326_create_products_table', 4),
(7, '2024_06_01_235130_create_carts_table', 5),
(8, '2024_06_02_080215_create_orders_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `rec_address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'in progress',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `rec_address`, `phone`, `status`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(5, 'user', 'alaminos', '0921214444', 'Delivered', 1, 8, '2024-06-02 02:57:01', '2024-06-05 17:35:18'),
(6, 'user', 'alaminos', '0921214444', 'On the way', 1, 8, '2024-06-02 02:57:01', '2024-06-02 09:50:09'),
(7, 'user', 'alaminos', '0921214444', 'in progress', 1, 13, '2024-06-02 02:57:01', '2024-06-02 02:57:01'),
(8, 'user', 'alaminos', '0921214444', 'in progress', 1, 18, '2024-06-02 02:57:01', '2024-06-02 02:57:01'),
(9, 'user', 'alaminos', '0921214444', 'in progress', 1, 17, '2024-06-02 03:03:48', '2024-06-02 03:03:48'),
(10, 'user', 'alaminos', '0921214444', 'in progress', 1, 22, '2024-06-02 03:03:48', '2024-06-02 03:03:48'),
(11, 'joey mae', 'alaminos city', '0921214444', 'in progress', 1, 14, '2024-06-02 03:06:37', '2024-06-02 03:06:37'),
(12, 'miko', 'alaminos', '0921214444', 'in progress', 1, 22, '2024-06-04 19:42:59', '2024-06-04 19:42:59'),
(13, 'miko', 'alaminos', '0921214444', 'in progress', 1, 15, '2024-06-04 19:42:59', '2024-06-04 19:42:59'),
(14, 'miko', 'alaminos', '0921214444', 'in progress', 1, 9, '2024-06-04 19:42:59', '2024-06-04 19:42:59'),
(15, 'miko', 'alaminos', '0921214444', 'in progress', 1, 8, '2024-06-04 19:42:59', '2024-06-04 19:42:59'),
(16, 'miko', 'alaminos', '0921214444', 'in progress', 1, 13, '2024-06-04 19:42:59', '2024-06-04 19:42:59'),
(17, 'miko', 'alaminos', '0921214444', 'in progress', 1, 8, '2024-06-04 19:42:59', '2024-06-04 19:42:59'),
(18, 'miko', 'alaminos', '0921214444', 'in progress', 1, 9, '2024-06-04 19:42:59', '2024-06-04 19:42:59'),
(19, 'miko', 'alaminos', '0921214444', 'in progress', 1, 9, '2024-06-04 19:42:59', '2024-06-04 19:42:59'),
(20, 'Gomer Cabubas', 'Alaminos Pangasinan', '09341256784', 'in progress', 3, 8, '2024-06-05 17:15:32', '2024-06-05 17:15:32'),
(21, 'Gomer Cabubas', 'Alaminos Pangasinan', '09341256784', 'in progress', 3, 8, '2024-06-06 01:26:47', '2024-06-06 01:26:47'),
(22, 'Gomer Cabubas', 'Alaminos Pangasinan', '09341256784', 'in progress', 3, 9, '2024-06-06 01:26:47', '2024-06-06 01:26:47');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `price`, `category`, `quantity`, `created_at`, `updated_at`) VALUES
(8, 'High-Waisted Bikini Set', 'Embrace vintage vibes with our High-Waisted Bikini Set. The retro-inspired design offers tummy control and full coverage, while the supportive underwire top enhances your natural shape. Crafted from a blend of spandex and nylon, this bikini is both stretchy and soft, providing a snug yet comfortable fit for all-day wear.\r\nSize: XS-XXL', '1717238956.jpg', '4500', 'Women', '5', '2024-06-01 02:49:16', '2024-06-01 02:49:51'),
(9, 'Strappy Back One-Piece', 'Product Description: Show off your back with our Strappy Back One-Piece Swimsuit. The striking strappy design adds a modern twist to the classic one-piece, while the scoop neckline and moderate coverage provide a flattering fit. Perfect for making a statement at the pool or on the sand.\r\nSize: XS-XXL', '1717239075.jpg', '5000', 'Women', '4', '2024-06-01 02:51:15', '2024-06-01 02:51:15'),
(10, 'Tie-Dye Triangle Bikini', 'Product Description: Add a splash of color to your beach day with our Tie-Dye Triangle Bikini. The vibrant tie-dye pattern is perfect for summer fun, while the adjustable triangle top and side-tie bottoms offer a customizable fit. Made from a soft, stretchy material, this bikini ensures both comfort and style.\r\nSize: XS-XXL', '1717239178.jpg', '6000', 'Women', '7', '2024-06-01 02:52:58', '2024-06-01 02:52:58'),
(11, 'Retro Trunks', ': Embrace vintage vibes with these classic swim trunks featuring a retro pattern and a comfortable fit\r\n sizes S-XXL.', '1717239283.jpg', '3500', 'Men', '4', '2024-06-01 02:54:43', '2024-06-01 02:54:43'),
(12, 'Patterned Swim Trunks', 'Add some flair to your swimwear collection with these patterned swim trunks, available in a variety of fun prints and colors. \r\nsizes 28-36.', '1717239368.jpg', '2500', 'Men', '10', '2024-06-01 02:56:08', '2024-06-01 02:56:08'),
(13, 'Performance Swim Jammers', 'Designed for serious swimmers, these sleek jammers provide compression and support for enhanced performance. \r\nsizes 26-38.', '1717239433.jpg', '1500', 'Men', '3', '2024-06-01 02:57:13', '2024-06-01 02:57:13'),
(14, 'Mid-Length Leaf Swim Shorts', 'Dive into summer style with these mid-length swim shorts adorned with a tropical leaf print. Crafted for comfort and durability, these shorts feature a mid-length cut that perfectly balances coverage and mobility.\r\nsizes XS-XXL.', '1717239488.jpg', '2600', 'Men', '2', '2024-06-01 02:58:08', '2024-06-01 02:58:08'),
(15, 'Tropical Print Swim Shorts', 'Get into vacation mode with these vibrant swim shorts featuring a tropical print and a relaxed, beach-ready style. \r\nsizes XS-XXXL.', '1717239546.jpg', '2900', 'Men', '4', '2024-06-01 02:59:06', '2024-06-01 02:59:06'),
(16, 'Color Block Swim Trunks', 'Make a statement by the pool in these stylish color block swim trunks, combining bold colors with a modern design. \r\nsizes 30-42.', '1717239583.jpg', '1300', 'Men', '12', '2024-06-01 02:59:43', '2024-06-01 02:59:43'),
(17, 'Reversible Bikini Set', 'Get two looks in one with our Reversible Bikini Set. This versatile swimsuit features a reversible design, allowing you to switch up your style with ease. The triangle top and cheeky bottoms are both adjustable, ensuring a perfect fit every time. Made from high-quality fabric, this bikini is as durable as it is fashionable.\r\nSize: XS-XXL', '1717239681.jpg', '4500', 'Women', '23', '2024-06-01 03:01:21', '2024-06-01 03:01:21'),
(18, 'Halter Neck Bikini with Crochet Detail', 'Product Description: Channel boho-chic vibes with our Halter Neck Bikini featuring Crochet Detail. The halter top offers excellent support and adjustable coverage, while the crochet detailing adds a unique, handmade touch. The matching bottoms are designed for a comfortable, secure fit, ensuring you feel confident and stylish all day long.\r\nSize: XS-XXL', '1717239730.jpg', '2300', 'Women', '12', '2024-06-01 03:02:10', '2024-06-01 03:02:10'),
(19, 'Hybrid Swim Shorts', 'Transition seamlessly from the beach to the boardwalk in these versatile hybrid swim shorts, featuring quick-dry fabric and a casual style. \r\nsizes 30-40.', '1717239803.jpg', '1200', 'Men', '34', '2024-06-01 03:03:23', '2024-06-01 03:03:23'),
(20, 'Classic One-Piece Swimsuit', 'Dive into timeless elegance with our Classic One-Piece Swimsuit. Designed to flatter every body type, this suit features a high neckline and full back coverage for a sophisticated look. Made from high-quality, quick-drying fabric, it ensures maximum comfort and durability, perfect for lounging by the pool or catching waves at the beach.\r\nSize: XS-XXL', '1717239875.jpg', '2450', 'Women', '12', '2024-06-01 03:04:35', '2024-06-01 03:04:35'),
(21, 'Sporty Zip-Front Swimsuit', ': For the active swimmer, our Sporty Zip-Front Swimsuit is a must-have. The sleek, athletic design includes a front zipper for easy on and off, along with a racerback for enhanced movement. Made from chlorine-resistant fabric, this suit maintains its shape and color, swim after swim.\r\nSize: XS-XXL', '1717239923.jpg', '3456', 'Women', '3', '2024-06-01 03:05:23', '2024-06-01 03:05:23'),
(22, 'Mesh Insert Monokini', ': Sophistication meets allure in our Mesh Insert Monokini. This one-piece wonder features strategically placed mesh panels that create a flattering silhouette and add a hint of seduction. The halter neck and open back design enhance the overall appeal, making it a standout choice for any swim occasion.\r\nSize: XS-XXL', '1717239968.jpg', '1230', 'Women', '23', '2024-06-01 03:06:08', '2024-06-01 03:06:08'),
(23, 'Long-Length Boardshorts', ': For those who prefer extra coverage, these long-length boardshorts offer both style and function with a longer inseam and a secure fit. \r\nsizes 28-38.', '1717240027.jpg', '1234', 'Men', '1', '2024-06-01 03:07:07', '2024-06-01 03:07:07'),
(24, 'Quick-Dry Boardshorts', 'Ideal for active days at the beach or pool, these boardshorts offer quick-drying fabric and a secure fit. \r\nSizes 28-40.', '1717240071.jpg', '2145', 'Men', '12', '2024-06-01 03:07:51', '2024-06-01 03:07:51'),
(25, 'Swim Briefs', 'swim briefs with cross front detail in bright pink Product Details Swim\r\nsizes S-XXL.', '1717240130.jpg', '1000', 'Men', '3', '2024-06-01 03:08:50', '2024-06-01 03:08:50'),
(26, 'Ruffled Off-Shoulder Swimsuit', 'Turn heads with our Ruffled Off-Shoulder Swimsuit. Featuring flirty ruffles and a chic off-the-shoulder neckline, this suit adds a touch of romance to your swimwear collection. The built-in padded bra provides extra support, and the adjustable straps ensure a perfect fit. Ideal for tropical vacations and poolside parties.\r\nSize: XS-XXL', '1717240177.jpg', '1237', 'Women', '12', '2024-06-01 03:09:37', '2024-06-01 03:09:37'),
(27, 'Floral Print Tankini', 'Stay stylish and covered with our Floral Print Tankini. The two-piece set includes a flowy tank top with a beautiful floral pattern and matching high-waisted bottoms. The tankini offers modest coverage without sacrificing style, making it ideal for family beach outings and water park adventures.\r\nSize: XS-XXL', '1717240214.jpg', '4532', 'Women', '12', '2024-06-01 03:10:14', '2024-06-01 03:10:14');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('9VAKhOKNp3dfmbtKu2eKwHMyFd0IMRHsqlFoeNFk', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRGM5ZXNDQzNWV2hBSlVFcTNRUm5maUdaYlJyaHdlU0ZhVU9kTnd5QiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2Rhc2hib2FyZCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7fQ==', 1717670917),
('VTHAQSxq2oZjNWk3oyhsgBYMrnw4ToXaE8URH5Zg', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRWlzWHFvekNya0pPNWVwRVRjbWtaS0p2NFZaNlM1SnRFSzlJd056cyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMDoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3JlZ2lzdGVyIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NDt9', 1717665650);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user',
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `phone`, `address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@gmail.com', 'user', '0921214444', 'alaminos', NULL, '$2y$12$ZGUD9v55i0Mk7iqmW0uh7unJ9lQTdMWTHjH8XxNURRxsZPy8hoUY6', NULL, '2024-05-26 09:31:15', '2024-05-26 09:31:15'),
(2, 'admin', 'admin@gmail.com', 'admin', '12343', 'bani', NULL, '$2y$12$ATsqi5X1Rs/DRdAyW0lnveB/enX.FH.5SbwpK9oJ0j/EV44ssP5iK', NULL, '2024-05-26 09:33:14', '2024-05-26 09:33:14'),
(3, 'Gomer Cabubas', 'arthur021031@gmail.com', 'user', '09341256784', 'Alaminos Pangasinan', '2024-06-05 16:55:58', '$2y$12$LJk1qgjB4AMXPYcwhgtAie5yEZ8CCCOmbob/3Cn8fA9vAlJvC5ose', NULL, '2024-06-05 16:54:02', '2024-06-05 16:55:58'),
(4, 'Arthur Leywin', 'keishirogane79@gmail.com', 'user', '09212344441', 'Poblacion Bani Pangasinan', '2024-06-06 01:22:18', '$2y$12$tUKXvNsquwgtvwJKjdhfNOBya66C4noi2I3nvkAGkRPiZuXdRdd36', NULL, '2024-06-06 01:20:37', '2024-06-06 01:22:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
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
  ADD KEY `orders_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
