-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-05-2021 a las 16:15:18
-- Versión del servidor: 5.6.45-log
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `my000825_panace`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ads`
--

CREATE TABLE `ads` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ads`
--

INSERT INTO `ads` (`id`, `title`, `description`, `img`, `created_at`, `updated_at`) VALUES
(4, 'PROMOCIONES FEBRERO Y MARZO', '<h1><p style=\"margin-right: 0px; margin-bottom: 6px; margin-left: 0px; font-family: Helvetica, Arial, sans-serif; font-size: 14px;\" class=\"dropdown-item\"></p></h1><h4><span style=\"font-weight: bold; color: rgb(255, 255, 255);\"><span style=\"font-family: Arial; caret-color: rgb(28, 30, 33);\">Semana santa en el</span><span class=\"Apple-converted-space\" style=\"font-family: Arial; caret-color: rgb(28, 30, 33);\">&nbsp;</span><span class=\"_5mfr\" style=\"font-family: inherit; caret-color: rgb(28, 30, 33); margin: 0px 1px;\"><span class=\"_6qdm\" style=\"background-size: contain; display: inline-block; text-shadow: none; vertical-align: text-bottom; font-family: Arial; height: 16px; width: 16px; font-size: 16px; background-image: url(&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/t6c/1/16/2764.png?_nc_eui2=AeF_qgQV7f9IAoSWW-Q7CuuC6FhIS5IVaK2Z-hLvbqBbVXhcBTZvEh_ffPQjl6sMJ-gt3YG4w33Mdu1tShlv84ADKqynAuaKKUk8QW8kk1140Q&quot;); background-repeat: no-repeat;\">❤</span></span><span class=\"Apple-converted-space\" style=\"font-family: Arial; caret-color: rgb(28, 30, 33);\">&nbsp;</span><span style=\"font-family: Arial; caret-color: rgb(28, 30, 33);\">de Villa General Belgrano.</span></span></h4><p></p><h3 style=\"margin-right: 0px; margin-bottom: 6px; margin-left: 0px; font-family: Helvetica, Arial, sans-serif; font-size: 20px;\"><span style=\"font-family: system-ui, -apple-system, BlinkMacSystemFont, &quot;.SFNSText-Regular&quot;, sans-serif; caret-color: rgb(28, 30, 33);\"><span style=\"font-family: Arial; font-weight: bold; color: rgb(255, 255, 255);\">Mínimo 4 noches</span></span></h3><h5><span class=\"text_exposed_show\" style=\"display: inline; font-family: inherit;\"><span style=\"font-family: Arial; color: rgb(255, 255, 255);\">Pagá con ahora 3, 6, 12 y 18</span></span></h5><h5><span class=\"text_exposed_show\" style=\"display: inline; font-family: inherit;\"><span style=\"font-family: Arial; color: rgb(255, 255, 255);\"><br></span></span></h5><h2 style=\"margin: 6px 0px; caret-color: rgb(28, 30, 33); font-size: 14px; text-size-adjust: auto;\"><span style=\"font-family: Arial; font-weight: bold; color: rgb(255, 255, 255);\">¿RESERVAS?</span></h2><p style=\"margin: 6px 0px; caret-color: rgb(28, 30, 33); font-size: 14px; text-size-adjust: auto;\"><span style=\"color: rgb(255, 255, 255);\"><span style=\"white-space: nowrap; font-family: Arial;\">Whatsapp:&nbsp;</span><span style=\"white-space: nowrap; font-family: Arial;\">3571667455</span><font style=\"font-family: inherit; font-size: 0.8125rem; white-space: nowrap;\"><span style=\"font-size: 14px; font-family: Arial;\">&nbsp;</span></font></span></p><p style=\"margin: 6px 0px; caret-color: rgb(28, 30, 33); font-size: 14px; text-size-adjust: auto;\"><font style=\"font-family: inherit; font-size: 0.8125rem; white-space: nowrap;\"><span style=\"font-size: 14px; font-family: Arial; color: rgb(255, 255, 255);\"><br></span></font></p><p style=\"margin: 6px 0px; caret-color: rgb(28, 30, 33); font-size: 14px; text-size-adjust: auto;\"><font style=\"font-family: inherit; font-size: 0.8125rem; white-space: nowrap;\"><span style=\"font-size: 14px; font-family: Arial; color: rgb(255, 255, 255);\">______________________________________________________________</span></font></p><p style=\"margin: 6px 0px; caret-color: rgb(28, 30, 33); font-size: 14px; text-size-adjust: auto;\"><font style=\"font-family: inherit; font-size: 0.8125rem; white-space: nowrap;\"><span style=\"font-size: 14px; font-family: Arial; color: rgb(255, 255, 255);\"><br></span></font></p><p style=\"margin: 6px 0px; caret-color: rgb(28, 30, 33); font-size: 14px; text-size-adjust: auto;\"><font style=\"font-family: inherit; font-size: 0.8125rem; white-space: nowrap;\"><span style=\"font-size: 14px; font-family: Arial; color: rgb(255, 255, 255);\"><br></span></font></p><h4><span style=\"font-family: Arial; font-weight: bold; color: rgb(255, 255, 255);\">FEBRERO 15%OFF</span></h4><h6><span style=\"color: rgb(255, 255, 255);\">(Del 16/02 al 28/02)<br><br></span></h6><h4 style=\"font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\"><span style=\"font-family: Arial; font-weight: bold; color: rgb(255, 255, 255);\">MARZO 20%OFF</span></h4><h6><span style=\"font-family: Arial; color: rgb(255, 255, 255);\">Cupo limitado | Sujeto a disponibilidad</span></h6><h6><span style=\"font-family: Arial; color: rgb(255, 255, 255);\"><br></span></h6><h6><span style=\"font-family: Arial; color: rgb(255, 255, 255);\">____________________________________________________________</span></h6><h6><span style=\"font-family: Arial; color: rgb(255, 255, 255);\"><br></span></h6><h4 style=\"font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\"><span style=\"font-family: Arial; font-weight: bold; color: rgb(255, 255, 255);\">MARZO EN PANACEA HOTEL</span></h4><h5 style=\"font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\"><span style=\"color: rgb(255, 255, 255);\">Escapadas de fin de semana&nbsp;<span style=\"font-size: 1.0625rem; letter-spacing: -0.015em; font-weight: bold;\">15% OFF</span></span></h5><h5 style=\"font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\"><span style=\"color: rgb(255, 255, 255);\">(Viernes a Domingo)</span><br><span style=\"color: rgb(0, 0, 0); font-weight: bold;\"><br></span><span style=\"color: rgb(255, 255, 255);\">Días de semana&nbsp;<span style=\"font-weight: bold;\">20% OFF<br></span></span></h5><h5 style=\"font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\"><span style=\"color: rgb(255, 255, 255);\">(de Lunes a Jueves)</span></h5><h5 style=\"font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\"><span style=\"color: rgb(0, 0, 0);\"><br></span></h5><div><h2 style=\"margin: 6px 0px; font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; color: rgb(51, 51, 51); font-size: 14px; caret-color: rgb(28, 30, 33); text-size-adjust: auto;\"><span style=\"font-family: Arial; font-weight: bold; color: rgb(255, 255, 255);\">¿RESERVAS?</span></h2><p style=\"margin: 6px 0px; caret-color: rgb(28, 30, 33); font-size: 14px; text-size-adjust: auto;\"><span style=\"color: rgb(255, 255, 255);\"><span style=\"white-space: nowrap; font-family: Arial;\">Whatsapp:&nbsp;</span><span style=\"white-space: nowrap; font-family: Arial;\">3571667455</span><font style=\"font-family: inherit; font-size: 0.8125rem; white-space: nowrap;\"><span style=\"font-size: 14px; font-family: Arial;\">&nbsp;</span></font></span></p></div><div><span style=\"color: rgb(255, 255, 255);\"><font style=\"font-family: inherit; font-size: 0.8125rem; white-space: nowrap;\"><span style=\"font-size: 14px; font-family: Arial;\"><br></span></font></span></div><span style=\"font-family: Arial; font-size: 15px; letter-spacing: -0.225px; color: rgb(255, 255, 255);\">Cupo limitado | Sujeto a disponibilidad</span><br><p></p>', 'img_ads/32YRfiYVUy7kvyK3HG4dOQECebB3tPIxZxeoWPxt.jpeg', '2019-05-13 01:56:23', '2021-02-22 15:18:58');

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
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_02_12_191848_create_ads_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('rahernande96@gmail.com', '$2y$10$J43px1UzbE/MmN.fjHfAOO3fFbFd5Y7I/g272VpzTEQ1YjTJ6jcbG', '2019-02-21 15:38:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mariana', 'info@panaceahotel.com', '$2y$10$cpu6m8cCbwHpgsEeaUKbEOnVlS.8HBNdvJsyKCZcJatlrENHCmATS', 'FniebGoraN6pN35QCvSYbRHRBQEOP0trnqXQTTdpo8GvKl2tOIv3sbQPnuvj', '2019-02-15 00:45:35', '2019-02-15 00:45:35');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

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
-- AUTO_INCREMENT de la tabla `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
