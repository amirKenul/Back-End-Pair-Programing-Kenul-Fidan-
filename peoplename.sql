-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Авг 29 2016 г., 16:26
-- Версия сервера: 10.1.13-MariaDB
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `registration`
--

-- --------------------------------------------------------

--
-- Структура таблицы `peoplename`
--

CREATE TABLE `peoplename` (
  `id` int(5) NOT NULL,
  `nikname` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `peoplename`
--

INSERT INTO `peoplename` (`id`, `nikname`, `email`, `password`) VALUES
(1, '', '', NULL),
(2, 'Konul', 'rhdw94@mail.ru', NULL),
(3, 'Konul', 'rhdw94@mail.ru', NULL),
(4, 'Konul', 'konul.e@code.edu.az', NULL),
(5, 'lol', 'rhdw94@mail.ru', ''),
(6, 'lol', 'rhdw94@mail.ru', 'cvbnjmk,l.;'),
(7, 'lol', 'rhdw94@mail.ru', 'cvbnjmk,l.;'),
(8, 'gog', 'rhdw94@mail.ru', 'sdcfvgbhnjmk,l'),
(9, 'gog', 'rhdw94@mail.ru', 'sdcfvgbhnjmk,l'),
(10, 'lol', 'rhdw94@mail.ru', 'cvbnjmk,l.;'),
(11, 'Konul', 'konul.e@code.edu.az', '123456789'),
(12, 'Konul', 'rhdw94@mail.ru', '34567'),
(13, 'Konul', 'rhdw94@mail.ru', '34567'),
(14, 'Samir', 'Dadashev@gmail.com', 'cvbnhjmk,l.;'),
(15, 'Ferid', 'konul.e@code.edu.az', 'xcvbnm,./'),
(16, 'Meryam', 'konul.e@code.edu.az', 'dfghjkl;'),
(17, 'Meryam', 'konul.e@code.edu.az', 'cvbnmj,kl.;/'),
(18, 'Maryam', 'konul.e@code.edu.az', 'sdfghjkl');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `peoplename`
--
ALTER TABLE `peoplename`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `peoplename`
--
ALTER TABLE `peoplename`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
