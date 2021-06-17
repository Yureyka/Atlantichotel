-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 17 2021 г., 18:09
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `atlantic`
--

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middlename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`id`, `firstname`, `middlename`, `lastname`, `passport`, `email`, `phone_number`, `created_at`, `updated_at`) VALUES
(1, 'Юрий', 'Волобуев', 'Сергеевич', '00 00 000000', 'gmail@gmail.com', '+797877777777', '2021-06-15 21:00:00', '2021-06-15 21:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
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
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_28_002238_create_clients_table', 1),
(5, '2021_05_28_002340_create_room_types_table', 1),
(6, '2021_05_28_002341_create_reservations_table', 1),
(7, '2021_05_28_002342_create_reservation_types_table', 1),
(8, '2021_05_28_002343_create_rooms_table', 1),
(9, '2021_05_28_002355_create_settlings_table', 1),
(10, '2021_05_28_002355_create_tickets_table', 1),
(11, '2021_06_07_213101_create_room_imgs_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_client` bigint(20) UNSIGNED NOT NULL,
  `persons_number` int(11) NOT NULL,
  `arrival_date` date NOT NULL,
  `departure_date` date NOT NULL,
  `transfer` tinyint(1) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `isAccepted` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `reservations`
--

INSERT INTO `reservations` (`id`, `id_client`, `persons_number`, `arrival_date`, `departure_date`, `transfer`, `comment`, `price`, `isAccepted`, `created_at`, `updated_at`) VALUES
(2, 1, 3, '2021-06-17', '2021-06-29', 1, '', 12000, 0, '2021-06-15 21:00:00', '2021-06-15 21:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `reservation_types`
--

CREATE TABLE `reservation_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_type` bigint(20) UNSIGNED NOT NULL,
  `id_reservation` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` int(11) NOT NULL,
  `id_room_type` bigint(20) UNSIGNED NOT NULL,
  `is_occupied` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `room_imgs`
--

CREATE TABLE `room_imgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_type` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `room_imgs`
--

INSERT INTO `room_imgs` (`id`, `id_type`, `url`, `created_at`, `updated_at`) VALUES
(1, 1, '/images/rooms/room1_1.jpg', NULL, NULL),
(2, 1, '/images/rooms/room1_2.jpg', NULL, NULL),
(3, 1, '/images/rooms/room1_3.jpg', NULL, NULL),
(4, 1, '/images/rooms/room1_4.jpg', NULL, NULL),
(5, 1, '/images/rooms/room1_5.jpg', NULL, NULL),
(6, 2, '/images/rooms/room2_1.jpg', NULL, NULL),
(7, 2, '/images/rooms/room2_2.jpg', NULL, NULL),
(8, 2, '/images/rooms/room2_3.jpg', NULL, NULL),
(9, 2, '/images/rooms/room2_4.jpg', NULL, NULL),
(10, 2, '/images/rooms/room2_5.jpg', NULL, NULL),
(11, 3, '/images/rooms/room3_1.jpg', NULL, NULL),
(12, 3, '/images/rooms/room3_2.jpg', NULL, NULL),
(13, 3, '/images/rooms/room3_3.jpg', NULL, NULL),
(14, 3, '/images/rooms/room3_4.jpg', NULL, NULL),
(15, 3, '/images/rooms/room3_5.jpg', NULL, NULL),
(16, 4, '/images/rooms/lux_1.jpg', NULL, NULL),
(17, 4, '/images/rooms/lux_2.jpg', NULL, NULL),
(18, 4, '/images/rooms/lux_3.jpg', NULL, NULL),
(19, 4, '/images/rooms/lux_4.jpg', NULL, NULL),
(20, 4, '/images/rooms/lux_5.jpg', NULL, NULL),
(21, 5, '/images/rooms/room1_1.jpg', NULL, NULL),
(22, 5, '/images/rooms/room1_2.jpg', NULL, NULL),
(23, 5, '/images/rooms/room1_3.jpg', NULL, NULL),
(24, 5, '/images/rooms/room1_4.jpg', NULL, NULL),
(25, 5, '/images/rooms/room1_5.jpg', NULL, NULL),
(26, 6, '/images/rooms/room2_1.jpg', NULL, NULL),
(27, 6, '/images/rooms/room2_2.jpg', NULL, NULL),
(28, 6, '/images/rooms/room2_3.jpg', NULL, NULL),
(29, 6, '/images/rooms/room2_4.jpg', NULL, NULL),
(30, 6, '/images/rooms/room2_5.jpg', NULL, NULL),
(31, 7, '/images/rooms/room3_1.jpg', NULL, NULL),
(32, 7, '/images/rooms/room3_2.jpg', NULL, NULL),
(33, 7, '/images/rooms/room3_3.jpg', NULL, NULL),
(34, 7, '/images/rooms/room3_4.jpg', NULL, NULL),
(35, 7, '/images/rooms/room3_5.jpg', NULL, NULL),
(36, 8, '/images/rooms/lux_1.jpg', NULL, NULL),
(37, 8, '/images/rooms/lux_2.jpg', NULL, NULL),
(38, 8, '/images/rooms/lux_3.jpg', NULL, NULL),
(39, 8, '/images/rooms/lux_4.jpg', NULL, NULL),
(40, 8, '/images/rooms/lux_5.jpg', NULL, NULL),
(41, 9, '/images/rooms/room1_1.jpg', NULL, NULL),
(42, 9, '/images/rooms/room1_2.jpg', NULL, NULL),
(43, 9, '/images/rooms/room1_3.jpg', NULL, NULL),
(44, 9, '/images/rooms/room1_4.jpg', NULL, NULL),
(45, 9, '/images/rooms/room1_5.jpg', NULL, NULL),
(46, 10, '/images/rooms/room2_1.jpg', NULL, NULL),
(47, 10, '/images/rooms/room2_2.jpg', NULL, NULL),
(48, 10, '/images/rooms/room2_3.jpg', NULL, NULL),
(49, 10, '/images/rooms/room2_4.jpg', NULL, NULL),
(50, 10, '/images/rooms/room2_5.jpg', NULL, NULL),
(51, 11, '/images/rooms/room3_1.jpg', NULL, NULL),
(52, 11, '/images/rooms/room3_2.jpg', NULL, NULL),
(53, 11, '/images/rooms/room3_3.jpg', NULL, NULL),
(54, 11, '/images/rooms/room3_4.jpg', NULL, NULL),
(55, 11, '/images/rooms/room3_5.jpg', NULL, NULL),
(56, 12, '/images/rooms/lux_1.jpg', NULL, NULL),
(57, 12, '/images/rooms/lux_2.jpg', NULL, NULL),
(58, 12, '/images/rooms/lux_3.jpg', NULL, NULL),
(59, 12, '/images/rooms/lux_4.jpg', NULL, NULL),
(60, 12, '/images/rooms/lux_5.jpg', NULL, NULL),
(61, 13, '/images/rooms/room1_1.jpg', NULL, NULL),
(62, 13, '/images/rooms/room1_2.jpg', NULL, NULL),
(63, 13, '/images/rooms/room1_3.jpg', NULL, NULL),
(64, 13, '/images/rooms/room1_4.jpg', NULL, NULL),
(65, 13, '/images/rooms/room1_5.jpg', NULL, NULL),
(66, 14, '/images/rooms/room2_1.jpg', NULL, NULL),
(67, 14, '/images/rooms/room2_2.jpg', NULL, NULL),
(68, 14, '/images/rooms/room2_3.jpg', NULL, NULL),
(69, 14, '/images/rooms/room2_4.jpg', NULL, NULL),
(70, 14, '/images/rooms/room2_5.jpg', NULL, NULL),
(71, 15, '/images/rooms/room3_1.jpg', NULL, NULL),
(72, 15, '/images/rooms/room3_2.jpg', NULL, NULL),
(73, 15, '/images/rooms/room3_3.jpg', NULL, NULL),
(74, 15, '/images/rooms/room3_4.jpg', NULL, NULL),
(75, 15, '/images/rooms/room3_5.jpg', NULL, NULL),
(76, 16, '/images/rooms/lux_1.jpg', NULL, NULL),
(77, 16, '/images/rooms/lux_2.jpg', NULL, NULL),
(78, 16, '/images/rooms/lux_3.jpg', NULL, NULL),
(79, 16, '/images/rooms/lux_4.jpg', NULL, NULL),
(80, 16, '/images/rooms/lux_5.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `room_types`
--

CREATE TABLE `room_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('Одноместный номер','Двухместный номер','Трехместный номер','Номер Люкс') COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `equipment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `includes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` enum('Феодосия','Симферополь','Севастополь','Саки') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `room_types`
--

INSERT INTO `room_types` (`id`, `type`, `description`, `equipment`, `includes`, `price`, `city`) VALUES
(1, 'Одноместный номер', 'Одноместный стандарт - это небольшой, но очень уютный номер для комфортного отдыха в Феодосии летом.', 'Кондиционер, Душ, Туалет+умывальник, Спутниковое телевидение, Холодильник, Телефон, Сейф', 'Трехразовое питание, Гладильная комната, Бесплатный WI-FI, Побудка к определенному времени', '3200', 'Феодосия'),
(2, 'Двухместный номер', 'Двухместный стандарт - это небольшой, но очень уютный номер для комфортного отдыха в Феодосии летом.', 'Кондиционер, Душ, Туалет+умывальник, Спутниковое телевидение, Холодильник, Телефон, Сейф', 'Кондиционер, Душ, Туалет+умывальник, Спутниковое телевидение, Холодильник, Телефон, Сейф', '5600', 'Феодосия'),
(3, 'Трехместный номер', 'Трехместный стандарт - это небольшой, но очень уютный номер для комфортного отдыха в Феодосии летом.', 'Кондиционер, Душ, Туалет+умывальник, Спутниковое телевидение, Холодильник, Телефон, Сейф', 'Трехразовое питание, Гладильная комната, Бесплатный WI-FI, Побудка к определенному времени', '8000', 'Феодосия'),
(4, 'Номер Люкс', 'Люкс - это роскошный дуплекс с четырьмя комнатами. Идеально подходит для отдыха летом большой семьей в Феодосии.', 'Кондиционер, Душ, Туалет+умывальник, Спутниковое телевидение, Холодильник, Телефон, Сейф', 'Трехразовое питание, Гладильная комната, Бесплатный WI-FI, Побудка к определенному времени', '15300', 'Феодосия'),
(5, 'Одноместный номер', 'Одноместный стандарт - это небольшой, но очень уютный номер для комфортного отдыха в Феодосии летом.', 'Кондиционер, Душ, Туалет+умывальник, Спутниковое телевидение, Холодильник, Телефон, Сейф', 'Трехразовое питание, Гладильная комната, Бесплатный WI-FI, Побудка к определенному времени', '3200', 'Симферополь'),
(6, 'Двухместный номер', 'Двухместный стандарт - это небольшой, но очень уютный номер для комфортного отдыха в Феодосии летом.', 'Кондиционер, Душ, Туалет+умывальник, Спутниковое телевидение, Холодильник, Телефон, Сейф', 'Кондиционер, Душ, Туалет+умывальник, Спутниковое телевидение, Холодильник, Телефон, Сейф', '5600', 'Симферополь'),
(7, 'Трехместный номер', 'Трехместный стандарт - это небольшой, но очень уютный номер для комфортного отдыха в Феодосии летом.', 'Кондиционер, Душ, Туалет+умывальник, Спутниковое телевидение, Холодильник, Телефон, Сейф', 'Трехразовое питание, Гладильная комната, Бесплатный WI-FI, Побудка к определенному времени', '8000', 'Симферополь'),
(8, 'Номер Люкс', 'Люкс - это роскошный дуплекс с четырьмя комнатами. Идеально подходит для отдыха летом большой семьей в Феодосии.', 'Кондиционер, Душ, Туалет+умывальник, Спутниковое телевидение, Холодильник, Телефон, Сейф', 'Трехразовое питание, Гладильная комната, Бесплатный WI-FI, Побудка к определенному времени', '15300', 'Симферополь'),
(9, 'Одноместный номер', 'Одноместный стандарт - это небольшой, но очень уютный номер для комфортного отдыха в Феодосии летом.', 'Кондиционер, Душ, Туалет+умывальник, Спутниковое телевидение, Холодильник, Телефон, Сейф', 'Трехразовое питание, Гладильная комната, Бесплатный WI-FI, Побудка к определенному времени', '3200', 'Севастополь'),
(10, 'Двухместный номер', 'Двухместный стандарт - это небольшой, но очень уютный номер для комфортного отдыха в Феодосии летом.', 'Кондиционер, Душ, Туалет+умывальник, Спутниковое телевидение, Холодильник, Телефон, Сейф', 'Кондиционер, Душ, Туалет+умывальник, Спутниковое телевидение, Холодильник, Телефон, Сейф', '5600', 'Севастополь'),
(11, 'Трехместный номер', 'Трехместный стандарт - это небольшой, но очень уютный номер для комфортного отдыха в Феодосии летом.', 'Кондиционер, Душ, Туалет+умывальник, Спутниковое телевидение, Холодильник, Телефон, Сейф', 'Трехразовое питание, Гладильная комната, Бесплатный WI-FI, Побудка к определенному времени', '8000', 'Севастополь'),
(12, 'Номер Люкс', 'Люкс - это роскошный дуплекс с четырьмя комнатами. Идеально подходит для отдыха летом большой семьей в Феодосии.', 'Кондиционер, Душ, Туалет+умывальник, Спутниковое телевидение, Холодильник, Телефон, Сейф', 'Трехразовое питание, Гладильная комната, Бесплатный WI-FI, Побудка к определенному времени', '15300', 'Севастополь'),
(13, 'Одноместный номер', 'Одноместный стандарт - это небольшой, но очень уютный номер для комфортного отдыха в Феодосии летом.', 'Кондиционер, Душ, Туалет+умывальник, Спутниковое телевидение, Холодильник, Телефон, Сейф', 'Трехразовое питание, Гладильная комната, Бесплатный WI-FI, Побудка к определенному времени', '3200', 'Саки'),
(14, 'Двухместный номер', 'Двухместный стандарт - это небольшой, но очень уютный номер для комфортного отдыха в Феодосии летом.', 'Кондиционер, Душ, Туалет+умывальник, Спутниковое телевидение, Холодильник, Телефон, Сейф', 'Кондиционер, Душ, Туалет+умывальник, Спутниковое телевидение, Холодильник, Телефон, Сейф', '5600', 'Саки'),
(15, 'Трехместный номер', 'Трехместный стандарт - это небольшой, но очень уютный номер для комфортного отдыха в Феодосии летом.', 'Кондиционер, Душ, Туалет+умывальник, Спутниковое телевидение, Холодильник, Телефон, Сейф', 'Трехразовое питание, Гладильная комната, Бесплатный WI-FI, Побудка к определенному времени', '8000', 'Саки'),
(16, 'Номер Люкс', 'Люкс - это роскошный дуплекс с четырьмя комнатами. Идеально подходит для отдыха летом большой семьей в Феодосии.', 'Кондиционер, Душ, Туалет+умывальник, Спутниковое телевидение, Холодильник, Телефон, Сейф', 'Трехразовое питание, Гладильная комната, Бесплатный WI-FI, Побудка к определенному времени', '15300', 'Саки');

-- --------------------------------------------------------

--
-- Структура таблицы `settlings`
--

CREATE TABLE `settlings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_reservation` bigint(20) UNSIGNED NOT NULL,
  `id_room` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` enum('Феодосия','Симферополь','Севастополь','Саки') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_id_client_foreign` (`id_client`);

--
-- Индексы таблицы `reservation_types`
--
ALTER TABLE `reservation_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservation_types_id_type_foreign` (`id_type`),
  ADD KEY `reservation_types_id_reservation_foreign` (`id_reservation`);

--
-- Индексы таблицы `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rooms_id_room_type_foreign` (`id_room_type`);

--
-- Индексы таблицы `room_imgs`
--
ALTER TABLE `room_imgs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_imgs_id_type_foreign` (`id_type`);

--
-- Индексы таблицы `room_types`
--
ALTER TABLE `room_types`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `settlings`
--
ALTER TABLE `settlings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settlings_id_reservation_foreign` (`id_reservation`),
  ADD KEY `settlings_id_room_foreign` (`id_room`);

--
-- Индексы таблицы `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `reservation_types`
--
ALTER TABLE `reservation_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `room_imgs`
--
ALTER TABLE `room_imgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT для таблицы `room_types`
--
ALTER TABLE `room_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `settlings`
--
ALTER TABLE `settlings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_id_client_foreign` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `reservation_types`
--
ALTER TABLE `reservation_types`
  ADD CONSTRAINT `reservation_types_id_reservation_foreign` FOREIGN KEY (`id_reservation`) REFERENCES `reservations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reservation_types_id_type_foreign` FOREIGN KEY (`id_type`) REFERENCES `room_types` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_id_room_type_foreign` FOREIGN KEY (`id_room_type`) REFERENCES `room_types` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `room_imgs`
--
ALTER TABLE `room_imgs`
  ADD CONSTRAINT `room_imgs_id_type_foreign` FOREIGN KEY (`id_type`) REFERENCES `room_types` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `settlings`
--
ALTER TABLE `settlings`
  ADD CONSTRAINT `settlings_id_reservation_foreign` FOREIGN KEY (`id_reservation`) REFERENCES `reservations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `settlings_id_room_foreign` FOREIGN KEY (`id_room`) REFERENCES `rooms` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
