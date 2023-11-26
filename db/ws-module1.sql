-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 26 2023 г., 15:43
-- Версия сервера: 5.6.43
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
-- База данных: `ws-module1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` set('new','processing','completed') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `requests`
--

INSERT INTO `requests` (`id`, `uid`, `name`, `img1`, `status`) VALUES
(3, 1, 'Бобик', 'uploads/img_11-26-2023_0330pm.jpg', 'completed'),
(6, 1, 'Тузик', 'uploads/5 (2).jpg', 'new'),
(7, 2, 'Анатолик', 'uploads/myfile_11-26-2023_0310pm.jpg', 'completed'),
(8, 1, 'Барсик', 'uploads/cat-2245922_1280.jpg', 'new'),
(9, 2, 'Патриция', 'uploads/2 (1).jpg', 'new'),
(10, 8, 'Афанасий', 'uploads/myfile_11-26-2023_0311pm.jpg', 'completed'),
(11, 1, 'img_11-26-2023_0331pm47', 'uploads/img_11-26-2023_0331pm47.jpg', 'new'),
(12, 1, 'img_11-26-2023_0331pm56', 'uploads/img_11-26-2023_0331pm56.jpg', 'new'),
(13, 1, 'img_11-26-2023_0332pm53', 'uploads/img_11-26-2023_0332pm53.jpg', 'new');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fio` varchar(535) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` set('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `fio`, `role`) VALUES
(1, 'admin', 'a8b3fcda42f979d5a85f6f99064fb9b3', 'admin', 'admin', 'admin'),
(2, 'petr', '1a1dc91c907325c69271ddf0c944bc72', 'petr@gmail.com', 'Петров Пётр Петрович', 'user'),
(7, 'serg', 'd947f2def6d2f32c2fc7df910ed00600', 'serg@gmail.com', 'Сергеев Сергей Сергеевич', 'user'),
(8, 'vasya', 'f9bf655da7a80704fea8d473f6517c82', 'vasya@yandex.ru', 'ВасильевВасилий Васильевич', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
