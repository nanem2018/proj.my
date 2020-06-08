-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Июн 08 2020 г., 20:48
-- Версия сервера: 8.0.12
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `geekbrains`
--
CREATE DATABASE IF NOT EXISTS `geekbrains` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `geekbrains`;

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `good_id` int(11) NOT NULL,
  `good_name` varchar(50) NOT NULL,
  `good_description` text NOT NULL,
  `good_price` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `id_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`good_id`, `good_name`, `good_description`, `good_price`, `is_active`, `id_img`) VALUES
(1, 'Смартфон Lenovo', 'Лучший смартфон на рынке', 10000, 1, '1'),
(2, 'Салфетки для монитора', 'Для поддержания чистоты вашего оборудования', 500, 1, '2'),
(3, 'Ноутбук Lenovo', 'Ноутбук для работы дома и в путешествиях!', 55000, 1, '3'),
(4, 'Мышь HP', 'Игровая мышь', 4500, 1, '4'),
(5, 'Планшет Prestigio Wize 3G (PMT4227)', 'Хорошый выбор!', 16000, 1, '5'),
(6, 'Смартфон Honor 8 lite', 'Смартфон для Вас!!!', 18000, 1, '6'),
(7, 'Смартфон Honor 8A', 'Смартфон для Вас!!!', 8000, 1, '7'),
(8, 'Планшет Lenovo', 'Хорошый выбор!', 11000, 0, '8');

-- --------------------------------------------------------

--
-- Структура таблицы `mess`
--

CREATE TABLE `mess` (
  `id_mess` int(11) NOT NULL,
  `mess_name` varchar(128) NOT NULL,
  `mess_desc` varchar(128) NOT NULL,
  `mess_mail` text NOT NULL,
  `mess_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `mess`
--

INSERT INTO `mess` (`id_mess`, `mess_name`, `mess_desc`, `mess_mail`, `mess_text`) VALUES
(1, 'мария', 'запрос', 'mariamail.ru', 'vbgnhnrsgser'),
(2, 'Vasya', 'problm', 'vasy@bk.ru', 'Добрый день. Прошу прислать прайс.'),
(3, 'мария', 'запрос', 'maria@mail.ru', 'Прошу со мной связаться для дальнейшего сотрудничества.'),
(4, 'изя', 'запрос', 'izzy@mail.ru', 'vfdbtgytuhmjh,kgk');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(54) NOT NULL,
  `user_login` varchar(54) NOT NULL,
  `user_password` varchar(128) NOT NULL,
  `user_email` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_login`, `user_password`, `user_email`) VALUES
(1, 'Мария', 'maria_13', '$2y$10$fSIGqfWEiYpxonFmNu.Qy.If5B3MQwxoJYvchkETM0xpTWMETGuzS', 'maria@mail.ru'),
(2, 'Василий Пупкин', 'v_pupkin', '$2y$10$hYNqZ1E9sQ8DJPXXNJwKje48KQHDbHS3UPQAA0vAOz5XmOyyx5gma', 'v.pupkin@mail.ru'),
(11, 'Иван', 'i_bukin', '$2y$10$JWciCxuoc1dxHXSJVFlHfe/F1yqoT0Gh5aE1dBjMjK8f89qfoT4uu', 'i.bukin@mail.ru'),
(12, 'Изя', 'izzy', '$2y$10$dXKA6axDQx7a1yJjCMiks.PEO99j3ze1v/d7M6fK2.3MdqSUNVLV6', 'izzy@mail.ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`good_id`);

--
-- Индексы таблицы `mess`
--
ALTER TABLE `mess`
  ADD PRIMARY KEY (`id_mess`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `good_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `mess`
--
ALTER TABLE `mess`
  MODIFY `id_mess` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
