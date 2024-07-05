-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-07-2024 a las 15:51:52
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sube-imagen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `games`
--

CREATE TABLE `games` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `registroAbkc` varchar(80) NOT NULL,
  `nombrePerro` varchar(80) NOT NULL,
  `fnac` date NOT NULL,
  `sexo` varchar(80) NOT NULL,
  `nomDueno` varchar(80) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `ciudad` varchar(80) NOT NULL,
  `estado` varchar(80) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `otraRaza` varchar(80) NOT NULL,
  `estandar` varchar(80) NOT NULL,
  `sg` varchar(80) NOT NULL,
  `bolsillo` varchar(80) NOT NULL,
  `clasico` varchar(80) NOT NULL,
  `muestraraza` varchar(80) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `games`
--

INSERT INTO `games` (`id`, `registroAbkc`, `nombrePerro`, `fnac`, `sexo`, `nomDueno`, `direccion`, `ciudad`, `estado`, `correo`, `telefono`, `otraRaza`, `estandar`, `sg`, `bolsillo`, `clasico`, `muestraraza`, `image`, `created_at`, `updated_at`) VALUES
(2, 'velit', 'sint', '2003-07-07', 'macho', 'Warren', '4661', 'Kathleenside', 'Ziemebury', 'celia98@example.com', '+1', '4', '2', '6', '1', '2', 'consequatur', '/img/2.jpeg', '2024-06-22 08:30:09', '2024-06-24 07:09:17'),
(4, 'id', 'repellat', '2001-08-18', 'macho', 'Adaline', '538', 'Waltonhaven', 'New', 'vhickle@example.org', '9337478432', '1', '3', '3', '3', '2', 'officiis', '/img/4.jpeg', '2024-06-22 08:30:09', '2024-06-24 07:01:55'),
(8, 'cum', 'id', '2023-03-07', 'beatae', 'Prof.', '208', 'Watersside', 'Davinland', 'haskell.sipes@example.org', '484.705.4945', '1', '1', '3', '1', '4', 'eos', '/img/8.jpeg', '2024-06-22 08:30:09', '2024-06-24 06:59:25'),
(9, 'ut', 'tempore', '1970-08-30', 'vel', 'Mr.', '7047', 'North', 'Elinorport', 'qturner@example.org', '+1-283-972-5341', '2', '5', '4', '3', '2', 'minus', '/img/9.jpeg', '2024-06-22 08:30:09', '2024-06-24 08:43:47'),
(10, 'eum', 'qui', '2020-05-03', 'sequi', 'Guy', '41203', 'Lake', 'Coralieberg', 'kovacek.dorthy@example.com', '+1-678-444-8965', '3', '2', '2', '2', '3', 'est', '/img/10.jpeg', '2024-06-22 08:30:09', '2024-06-24 07:10:40'),
(11, 'bully', 'perrito', '2024-05-28', 'macho', 'perritin', 'AMERICO', 'santago', 'rm', 'a@a.cl', '992349324', '3', '3', '5', '1', '1', 're2r23r23r', '/img/11.jpeg', '2024-06-22 08:30:58', '2024-06-24 07:11:02'),
(12, 'bully', 'rocky', '2024-06-22', 'Hembra', 'Tony', 'AMERICO', 'SANTIAGO', 'Región', 'bully@abkcregistros.cl', '992349324', '1', '4', '3', '3', '4', 'registro', '/img/12.jpeg', '2024-06-24 05:56:26', '2024-06-24 06:26:33'),
(14, 'bully final', 'perrito', '2024-06-30', 'Hembra', 'perritin', 'grg 132', 'Renca', 'Región de Valparaiso', 'bully@abkcregistros.cl', '992349324', '4', '3', '4', '1', '3', 'registro 035446668', '/img/14.jpeg', '2024-06-24 08:26:04', '2024-06-24 08:26:04'),
(15, 'bully final', 'perrito', '2024-06-30', 'Hembra', 'perritin', 'grg 132', 'Renca', 'Región de Valparaiso', 'bully@abkcregistros.cl', '992349324', '4', '3', '4', '1', '3', 'registro 035446668', '/img/15.jpeg', '2024-06-24 08:26:55', '2024-06-24 08:26:55'),
(22, 'bully', 'rocky', '2024-06-14', 'Hembra', 'Tony Montana', 'AMERICO VESPUCIO NORTE 0760', 'Renca', 'Región de Valparaiso', 'a@a.cl', '992349324', '5', '2', '1', '2', '3', 're2r23r23r', '/img/22.jpeg', '2024-06-24 09:01:57', '2024-06-24 09:01:57'),
(23, 'bully', 'rocky', '2024-06-14', 'Hembra', 'Tony Montana', 'AMERICO VESPUCIO NORTE 0760', 'Renca', 'Región de Valparaiso', 'a@a.cl', '992349324', '5', '2', '1', '2', '3', 're2r23r23r', '/img/23.jpeg', '2024-06-24 09:02:28', '2024-06-24 09:02:28'),
(24, 'bully final', 'perrito', '2024-06-28', 'macho', 'Tony Montana', 'AMERICO VESPUCIO NORTE 0760,', 'santago', 'Región Metropolitana', 'bull22y@abkcregistros.cl', '936905206', '3', '3', '2', '3', '4', 're2r23r23r', '/img/24.jpeg', '2024-06-24 09:03:25', '2024-06-24 09:03:25'),
(25, 'bully', 'rocky', '2024-05-31', 'macho', 'perritin', 'AMERICO VESPUCIO NORTE 0760,', 'Renca', 'Región de Valparaiso', 'bully@abkcregistrows.cl', '9337478432', '4', '3', '3', '4', '1', 'registro 035446668', '/img/25.jpeg', '2024-06-24 09:06:21', '2024-06-24 09:06:21'),
(26, 'bully', 'rocky', '2024-06-26', 'macho', 'perritin', 'grg 132', 'Renca', 'rm', 'a@a.cl', '936905206', '3', '3', '2', '2', '2', 'registro 035446668', '/img/26.jpeg', '2024-06-24 09:08:15', '2024-06-24 09:08:15'),
(27, 'super bully', 'kaiser', '2024-03-05', 'macho', 'Tony Montana', 'AMERICO VESPUCIO NORTE 0760', 'Renca', 'Región Metropolitana', 'bull22y@abkcregistros.cl', '992349324', '4', '2', '2', '1', '3', 'APTB', '/img/27.jpeg', '2024-06-25 00:51:34', '2024-06-25 00:51:35'),
(28, 'ffefwef.weweef', 'rocky', '2024-06-19', 'Hembra', 'Tony Montana', 'AMERICO VESPUCIO NORTE 0760', 'Renca', 'Región de Valparaiso', 'bull22y@abkcregistros.cl', '992349324', '5', '4', '2', '2', '1', 'APTB', '/img/28.jpeg', '2024-06-26 04:07:08', '2024-06-26 04:07:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
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
-- Estructura de tabla para la tabla `job_batches`
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
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_09_034926_create_games_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
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
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('jDbgXDj7310Dv3Vt9beQLpVYrFx0PBdRtmZtloaI', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidHdJZzI2TWtJTzdQUzRWYzZueXVMN213MVRFWkM3eU9ZblFoNm5iRiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9nYW1lcyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzE5MzY3Mjg2O319', 1719373418),
('KBOlNutmC14gwhYEI3DtxsFEIFtVatCde196LgUp', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUk1kVGFRN3NsNWxpMkEzR3piV25IN3N0dmM3RFNGVkV0U2l3OWo5QyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9nYW1lcy8yOC9leHBvcnQtcGRmIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjQ6ImF1dGgiO2E6MTp7czoyMToicGFzc3dvcmRfY29uZmlybWVkX2F0IjtpOjE3MjAxODc0MDE7fX0=', 1720187439);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
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

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$12$BbuFDZVcX63gKT96/3aLTuzxUmu7nx4BhYHMfnRF8MDFlg9xV9yVS', NULL, '2024-06-24 07:36:57', '2024-06-24 07:36:57');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `games`
--
ALTER TABLE `games`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
