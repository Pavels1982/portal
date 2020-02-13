-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 13 2020 г., 09:56
-- Версия сервера: 5.5.62
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
-- База данных: `remotion`
--

-- --------------------------------------------------------

--
-- Структура таблицы `exoskeleton`
--

CREATE TABLE `exoskeleton` (
  `id` int(11) NOT NULL,
  `serial_number` int(11) NOT NULL,
  `sale_date` date DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `company_location` varchar(255) DEFAULT NULL,
  `company_website` varchar(255) DEFAULT NULL,
  `company_email` varchar(255) DEFAULT NULL,
  `company_phone` varchar(255) DEFAULT NULL,
  `contact_name` varchar(255) DEFAULT NULL COMMENT 'ФИО Контактного лица (специалист по работе с экзоскелетом)',
  `contact_phone` varchar(50) DEFAULT NULL COMMENT 'Номер телефона контактного лица',
  `contact_email` varchar(255) DEFAULT NULL,
  `ssid` varchar(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  `worked_hours` int(11) NOT NULL,
  `errors_count` int(11) NOT NULL,
  `steps_done` int(11) NOT NULL,
  `squats` int(11) NOT NULL,
  `rising` int(11) NOT NULL,
  `turn_left` int(11) NOT NULL,
  `turn_right` int(11) NOT NULL,
  `log_file` varchar(255) NOT NULL,
  `document_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `exoskeleton`
--

INSERT INTO `exoskeleton` (`id`, `serial_number`, `sale_date`, `company`, `company_location`, `company_website`, `company_email`, `company_phone`, `contact_name`, `contact_phone`, `contact_email`, `ssid`, `type`, `worked_hours`, `errors_count`, `steps_done`, `squats`, `rising`, `turn_left`, `turn_right`, `log_file`, `document_file`) VALUES
(1, 2147483647, '2020-10-08', 'ООО \"Интежер\"', 'Йошкар-Ола Кутузовский проспект', 'www.yo-exo.ru', 'yo-exo@mail.ru', '9003-0032', 'Иван', '231-3212', 'pavel@mail.ru', 'EXOF10FT', 'Детский', 54, 3, 78, 4, 7, 32, 11, '323.log', '232.pdf');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `access_token` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `auth_key`, `access_token`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `exoskeleton`
--
ALTER TABLE `exoskeleton`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `auth_key` (`auth_key`),
  ADD UNIQUE KEY `acess_token` (`access_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `exoskeleton`
--
ALTER TABLE `exoskeleton`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
