-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Апр 03 2023 г., 10:59
-- Версия сервера: 5.7.21-20-beget-5.7.21-20-1-log
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `o92867ev_oncode`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--
-- Создание: Апр 01 2023 г., 21:46
-- Последнее обновление: Апр 03 2023 г., 07:35
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `price`) VALUES
(1, 'Верстальщик', 'Освойте необходимые инструменты современной верстки сайтов и начните работать в сфере веб-разработки', 'https://beonmax.com/img//cover/verstalschik.jpg', '10.00'),
(2, 'ВЕБ-разработчик', 'Курс соответствует современным трендам и стандартам. Основные технологии: HTML5, CSS3, Bootstrap 4-5', 'https://beonmax.com/img//cover/web-razrabotchik.jpg', '200.00'),
(3, 'JavaScript', 'Основная цель курса - практика изучения JavaScript на реальных примерах для frontend-разработчиков. ', 'https://beonmax.com/img//cover/javascript.jpg', '30.00'),
(4, 'React', 'Курс позволит освоить React от азов до создания полноценного SPA(single page application)-приложения', 'https://beonmax.com/img//cover/react.jpg', '40.00'),
(5, 'Программирование на C#', 'Полный курс Программирование на C# покрывает все основные возможности C# и даёт рекомендации по напи', 'https://beonmax.com/img//cover/csharp.jpg', '50.00'),
(6, 'Python для начинающих', 'Полное руководство по Python 3 - от новичка до специалиста — Изучи Python с нуля и стань востребован', 'https://beonmax.com/img//cover/python.jpg', '100.00');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--
-- Создание: Ноя 19 2022 г., 06:32
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `created`) VALUES
(1, 'Даниилов Артем Александрович', 'yaya23', 'tytyty@mail.ru', '0', '2022-11-18 22:44:09'),
(3, 'Иван', 'arae', 'test12night@mail.ru', '0', '2022-11-18 22:46:58'),
(4, 'Дроздов Игорь Михайлович', 'drozdic', 'drozd@gmail.com', '0', '2022-11-18 22:54:12'),
(5, 'Иван', 'dvsdvs', 'test4ight@mail.ru', '0', '2022-11-18 23:05:11'),
(6, 'Аушевое', 'dscsdc', 'test5night@mail.ru', '0', '2022-11-18 23:09:54'),
(7, 'Иван', 'dscs', 'test9night@mail.ru', '0', '2022-11-18 23:17:40'),
(8, 'иван', 'ifidf', 'test02night@mail.ru', '0', '2022-11-18 23:21:47'),
(9, 'игорь777', 'rtyy22', 'rty@mail.ru', '0', '2022-11-18 23:29:11'),
(10, 'Игорь', 'y6u', 'acaaxa@mail.ru', '0', '2022-11-18 23:45:45'),
(11, 'пмвмвм', 'dscsc', 'mamma@ya.ru', '0', '2022-11-18 23:49:46'),
(12, 'Иван', 'dcdc', 'test001night@mail.ru', '123', '2022-11-18 23:51:43'),
(13, 'Иван', 'dcdccdc', 'test000ight@mail.ru', '123', '2022-11-18 23:52:24'),
(14, 'Иван', 'Artishokok222', 'test1222night@mail.ru', '123', '2022-11-18 23:54:36'),
(15, 'Последняя рабочая версия ура', 'yes', 'yes@gmail.com', '0', '2022-11-18 23:56:28'),
(16, 'Последняя рабочая версия 2', 'yes2', 'yes2@gmail.com', '0', '2022-11-18 23:57:39'),
(17, 'Последняя версия 3', 'Artishokok3', 'test01001night@mail.ru', '0', '2022-11-19 00:00:16'),
(18, 'Последний раз и спать', 'Artishokok222', 'test11111night@mail.ru', '123', '2022-11-19 00:01:24'),
(19, 'последний раз и спать 2', 'Artishokok222', 'test9992night@mail.ru', '0', '2022-11-19 00:03:02'),
(20, 'Игорь7777', 'Artishokokfefe', 'testcec12night@mail.ru', '0', '2022-11-19 00:03:49'),
(21, 'Игорь555', 'loty', 'typopo@mail.ru', '123', '2022-11-19 05:58:07'),
(22, 'Последний 3', 'Last', 'lastver@ya.ru', '123', '2022-11-19 06:18:29'),
(23, 'Бреус Артём Д', 'BBArtem', 'errorprog2004@gmail.com', 'qwert12345qwert', '2022-11-19 06:29:17'),
(24, 'АРтем Б Д', 'bb', 'bb@gmail.com', '123456', '2022-11-19 15:44:41'),
(25, 'б а д', 'test', 'test@gmail.com', '123', '2022-11-21 10:01:10'),
(26, 'Петров Иван Васильевич', 'Aaron', 'mamma123@ya.ru', '123qwerty', '2022-11-23 19:40:58'),
(27, 'FHNTV qwe rew', 'qwert', 'qwert@gmail.com', 'qwert', '2023-03-11 06:36:56'),
(28, 'BBArtem', 'admin', 'admin@admin.com', 'admin', '2023-03-31 09:37:10');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
