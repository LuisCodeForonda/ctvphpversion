-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 02-05-2023 a las 12:02:36
-- Versión del servidor: 5.7.23-23
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ctvboliv_dbctv`
--
CREATE DATABASE IF NOT EXISTS `ctvboliv_dbctv` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `ctvboliv_dbctv`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `banners`
--

INSERT INTO `banners` (`id`, `nombre`, `logo`, `hora`, `created_at`, `updated_at`) VALUES
(1, 'Adoracion al Santicimo', 'uploads/gAV0OZMAXzhAiPTAp4uFPjqWTFhaa4RFMF9zjlOj.png', '06:00:00', NULL, NULL),
(2, 'Santa misa', 'uploads/YBAJi0ntASfWVBSgxQ8sVG7ctSvMxdHwxLkNHZvS.png', '06:30:00', NULL, NULL),
(3, 'Muy buenos dias', 'uploads/A45Z9L43C3pMymt2xTD5mKEoWV6NusbupbEttTv6.png', '07:00:00', NULL, NULL),
(4, 'Dxtv', 'uploads/uE2yli6cqaN4qzgyaAPYaVmFxe9GXZVnMnEhWdi7.png', '12:00:00', NULL, NULL),
(5, 'NOTICIAS', 'uploads/TOhsdsVJtn1t9aofKnJy0lXOd8sEvit59epR6ul6.png', '12:30:00', NULL, '2023-03-21 00:39:20'),
(6, 'PROTAGONISTAS', 'uploads/q45b4OBAlIACt1cDjG85xmR3yH5ZLESmHQeBseRM.png', '13:30:00', NULL, NULL),
(7, 'SERIES', 'uploads/3pOb4G7tGXeHh68onEocSsHPdWvcGhHZI3cfVNHr.png', '15:00:00', NULL, NULL),
(8, 'NOTICIAS', 'uploads/3h2MMKXo9xI3m9Yyuraqp0grgFj9CptweVPzmEtA.png', '20:00:00', NULL, NULL),
(10, 'DORAMAS', 'uploads/An36DzdfxbN7qNYrZiSzdHnCX3GWbQNF1zodRf55.png', '22:00:00', NULL, NULL),
(11, 'DXTV', 'uploads/sN1Fyk52Hi9qS68YTKljyyyDdIm9b73hvsKUHmli.png', '23:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_22_203145_create_programacions_table', 1),
(6, '2023_02_22_224801_create_programas_table', 1),
(7, '2023_02_23_222951_create_noticias_table', 1),
(8, '2023_02_23_230517_create_banners_table', 1),
(9, '2023_02_24_194140_create_miniaturas_table', 1),
(10, '2023_03_02_201033_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `miniaturas`
--

CREATE TABLE `miniaturas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `miniaturas`
--

INSERT INTO `miniaturas` (`id`, `nombre`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Protagonistas', 'uploads/fItr1jJmr45CimtjXnfUUKMFFnbCdgtbLRscFlgh.jpg', NULL, NULL),
(2, 'Dxtv', 'uploads/zlhUUlCTiHzJ6SiClULpSU4aMHEYdtbgRM1L1l2E.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuerpo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin.home', 'web', '2023-03-08 00:08:23', '2023-03-08 00:08:23'),
(2, 'users.index', 'web', '2023-03-08 00:08:23', '2023-03-08 00:08:23'),
(3, 'users.create', 'web', '2023-03-08 00:08:23', '2023-03-08 00:08:23'),
(4, 'users.edit', 'web', '2023-03-08 00:08:23', '2023-03-08 00:08:23'),
(5, 'users.destroy', 'web', '2023-03-08 00:08:23', '2023-03-08 00:08:23'),
(6, 'programacion.index', 'web', '2023-03-08 00:08:23', '2023-03-08 00:08:23'),
(7, 'programacion.create', 'web', '2023-03-08 00:08:23', '2023-03-08 00:08:23'),
(8, 'programacion.edit', 'web', '2023-03-08 00:08:23', '2023-03-08 00:08:23'),
(9, 'programacion.destroy', 'web', '2023-03-08 00:08:23', '2023-03-08 00:08:23'),
(10, 'programas.index', 'web', '2023-03-08 00:08:23', '2023-03-08 00:08:23'),
(11, 'programas.create', 'web', '2023-03-08 00:08:23', '2023-03-08 00:08:23'),
(12, 'programas.edit', 'web', '2023-03-08 00:08:23', '2023-03-08 00:08:23'),
(13, 'programas.destroy', 'web', '2023-03-08 00:08:23', '2023-03-08 00:08:23'),
(14, 'noticias.index', 'web', '2023-03-08 00:08:23', '2023-03-08 00:08:23'),
(15, 'noticias.create', 'web', '2023-03-08 00:08:23', '2023-03-08 00:08:23'),
(16, 'noticias.edit', 'web', '2023-03-08 00:08:23', '2023-03-08 00:08:23'),
(17, 'noticias.destroy', 'web', '2023-03-08 00:08:23', '2023-03-08 00:08:23'),
(18, 'banners.index', 'web', '2023-03-08 00:08:23', '2023-03-08 00:08:23'),
(19, 'banners.create', 'web', '2023-03-08 00:08:23', '2023-03-08 00:08:23'),
(20, 'banners.edit', 'web', '2023-03-08 00:08:23', '2023-03-08 00:08:23'),
(21, 'banners.destroy', 'web', '2023-03-08 00:08:23', '2023-03-08 00:08:23'),
(22, 'miniaturas.index', 'web', '2023-03-08 00:08:23', '2023-03-08 00:08:23'),
(23, 'miniaturas.create', 'web', '2023-03-08 00:08:23', '2023-03-08 00:08:23'),
(24, 'miniaturas.edit', 'web', '2023-03-08 00:08:23', '2023-03-08 00:08:23'),
(25, 'miniaturas.destroy', 'web', '2023-03-08 00:08:23', '2023-03-08 00:08:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programacions`
--

CREATE TABLE `programacions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora` time NOT NULL,
  `dia` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `programacions`
--

INSERT INTO `programacions` (`id`, `nombre`, `hora`, `dia`, `created_at`, `updated_at`) VALUES
(1, 'APERTURA DE EMISIÓN', '05:55:00', '0', NULL, '2023-03-23 02:48:30'),
(2, 'ADORACIÓN AL SANTÍSIMO', '06:30:00', '0', NULL, '2023-03-23 02:49:59'),
(3, 'REVISTA BUENOS DÍAS', '07:00:00', '0', NULL, NULL),
(4, 'TRANSFORMERS', '09:00:00', '0', NULL, NULL),
(5, 'MAC GYVER', '10:30:00', '0', NULL, NULL),
(6, 'SLEDGE HAMMER', '11:30:00', '0', NULL, NULL),
(7, 'DXTV', '12:00:00', '0', NULL, NULL),
(8, 'CTV NOTICIAS MERIDIANO', '12:30:00', '0', NULL, NULL),
(9, 'PROTAGONISTAS', '13:30:00', '0', NULL, NULL),
(10, 'BREVE STARR', '15:00:00', '0', NULL, NULL),
(11, 'MARCO', '15:30:00', '0', NULL, NULL),
(12, 'APRENDIENDO A VIVIR', '16:00:00', '0', NULL, NULL),
(13, 'QUIEN MANDA A QUIEN', '16:30:00', '0', NULL, NULL),
(14, 'MUSICA NACIONAL', '17:00:00', '0', NULL, NULL),
(15, 'EL INCREIBLE HULK', '18:00:00', '0', NULL, NULL),
(16, 'CTV NOTICIAS CENTRAL', '20:00:00', '0', NULL, NULL),
(18, 'DORAMA', '22:00:00', '0', NULL, NULL),
(19, 'DXTV', '23:00:00', '0', NULL, NULL),
(21, 'CAMINO AL CIELO', '06:00:00', '1', NULL, '2023-03-24 05:54:21'),
(22, 'BRAVESTARR', '07:00:00', '1', NULL, NULL),
(23, 'CONDE PATULA', '07:30:00', '1', NULL, NULL),
(24, 'HAMTARO', '08:00:00', '1', NULL, NULL),
(25, 'CHIP Y DALE', '08:30:00', '1', NULL, NULL),
(26, 'LOS CAZAFANTASMAS NUEVA GENERACIÓN', '09:00:00', '1', NULL, NULL),
(27, 'HEATHCLIFF', '09:30:00', '1', NULL, NULL),
(28, 'TRANSFORMERS', '10:00:00', '1', NULL, '2023-03-23 03:35:28'),
(29, 'HE - MAN MASTERS', '11:00:00', '1', NULL, NULL),
(30, 'SHE- RA PRINCESA DEL PODER', '11:30:00', '1', NULL, '2023-03-23 03:38:24'),
(31, 'RAMBO', '12:00:00', '1', NULL, NULL),
(32, 'ROBOTECH', '13:00:00', '1', NULL, NULL),
(33, 'JIBAN', '13:30:00', '1', NULL, NULL),
(34, 'G.I. JOE', '14:30:00', '1', NULL, '2023-03-23 04:33:50'),
(35, 'CINE ANIME PELICULA', '15:30:00', '1', NULL, '2023-03-23 04:37:28'),
(36, 'KUNG FU', '17:00:00', '1', NULL, NULL),
(37, 'EL AUTO FANTASTICO', '18:00:00', '1', NULL, NULL),
(38, 'SUPER AGENTE 86', '19:00:00', '1', NULL, NULL),
(39, 'LOS MAGNIFICOS', '20:00:00', '1', NULL, NULL),
(40, 'MACGYVER', '21:00:00', '1', NULL, NULL),
(41, 'MIAMI VICE', '22:00:00', '1', NULL, NULL),
(42, 'LOBO DEL AIRE', '23:00:00', '1', NULL, NULL),
(43, 'CAMINO AL CIELO', '06:00:00', '2', NULL, NULL),
(44, 'SANTA MISA', '07:00:00', '2', NULL, NULL),
(45, 'SUPER LIBRO', '08:00:00', '2', NULL, NULL),
(46, 'LAS AVENTURAS DE LOS OSOS GUMMI', '08:30:00', '2', NULL, NULL),
(47, 'AVENTUREROS EN EL AIRE', '09:00:00', '2', NULL, NULL),
(48, 'TRANSFORMERS', '09:30:00', '2', NULL, NULL),
(49, 'SANTA MISA', '10:30:00', '2', NULL, NULL),
(50, 'LA PEQUEÑA LU LU', '11:30:00', '2', NULL, NULL),
(51, 'CINE FAMILIAR', '12:00:00', '2', NULL, NULL),
(52, 'SABRINA', '13:30:00', '2', NULL, NULL),
(53, 'DINOSAURIOS', '14:00:00', '2', NULL, NULL),
(54, 'CINE AVENTURA', '15:00:00', '2', NULL, NULL),
(55, 'ALF', '16:30:00', '2', NULL, NULL),
(56, 'LA BELLA Y LA BESTIA', '17:00:00', '2', NULL, NULL),
(57, 'EL DIARIO DEL DESTINO', '18:00:00', '2', NULL, NULL),
(58, 'WALKER RANGER DE TEXAS', '19:00:00', '2', NULL, NULL),
(59, 'LOS MAGNIFICOS', '20:00:00', '2', NULL, NULL),
(60, 'MISION IMPOSIBLE', '21:00:00', '2', NULL, '2023-03-23 05:46:13'),
(61, 'DXTV', '22:00:00', '2', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas`
--

CREATE TABLE `programas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiktok` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `programas`
--

INSERT INTO `programas` (`id`, `nombre`, `foto`, `hora_inicio`, `hora_fin`, `descripcion`, `categoria`, `facebook`, `twitter`, `instagram`, `tiktok`, `youtube`, `created_at`, `updated_at`) VALUES
(2, 'REVISTA BUENOS DÍAS', 'uploads/vg8O5UeKdtASUuVltc7F3wimIZV0G2nEhkHtSlmC.png', '07:00:00', '09:00:00', 'REVISTA BUENOS DÍAS', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2023-03-08 00:08:23', '2023-03-08 00:08:23'),
(2, 'Programacion', 'web', '2023-03-08 00:08:23', '2023-03-08 00:08:23'),
(3, 'Programas', 'web', '2023-03-08 00:08:23', '2023-03-08 00:08:23'),
(4, 'Noticias', 'web', '2023-03-08 00:08:23', '2023-03-08 00:08:23'),
(5, 'Banners', 'web', '2023-03-08 00:08:23', '2023-03-08 00:08:23'),
(6, 'Miniaturas', 'web', '2023-03-08 00:08:23', '2023-03-08 00:08:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(1, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(1, 3),
(10, 3),
(11, 3),
(12, 3),
(13, 3),
(1, 4),
(14, 4),
(15, 4),
(16, 4),
(17, 4),
(1, 5),
(18, 5),
(19, 5),
(20, 5),
(21, 5),
(1, 6),
(22, 6),
(23, 6),
(24, 6),
(25, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

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
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'luis alberto foronda condori', 'slushiiforonda@gmail.com', '2023-03-08 00:08:24', '$2y$10$bi3VRbdcn4I4mGuLOOzy..kuXY7GckXbZqE08EBMzkN3p3f1rSr.O', '98ryHezrSFgNLUEdsPIEQadFWfZgTbymCQarJKqGYojNQd6I7P7SPEaXoSJ4', '2023-03-08 00:08:24', '2023-03-08 00:08:24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `miniaturas`
--
ALTER TABLE `miniaturas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `noticias_slug_unique` (`slug`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `programacions`
--
ALTER TABLE `programacions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `programas`
--
ALTER TABLE `programas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT de la tabla `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `miniaturas`
--
ALTER TABLE `miniaturas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `programacions`
--
ALTER TABLE `programacions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de la tabla `programas`
--
ALTER TABLE `programas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
