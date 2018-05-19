-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 20 2016 г., 18:16
-- Версия сервера: 10.1.8-MariaDB
-- Версия PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hogwarts`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`, `type`) VALUES
(1, 'wizard@admin.com', 'magicworld', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE `students` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `faculty` varchar(100) NOT NULL,
  `head` varchar(100) NOT NULL,
  `blood` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`id`, `name`, `surname`, `login`, `password`, `birthday`, `faculty`, `head`, `blood`, `image`) VALUES
(57, 'dasdsa', 'dsadsa', 'sasad', 'asdsad', '2015-10-29', 'Gryffindor', 'Minerva McGonagall', 'Half-blood', 'UserImages/Desert.jpg'),
(58, 'asdasdsad', 'asdasdsa', 'asdasd', 'asdsad', '2014-10-30', 'Gryffindor', 'Minerva McGonagall', 'Half-blood', 'UserImages/Koala.jpg'),
(60, 'dwq', 'wqeq', 'hhj', 'hjhj', '2016-12-31', 'Gryffindor', 'Minerva McGonagall', 'Half-blood', 'UserImages/Tulips.jpg'),
(61, 'dwq', 'wqeq', 'hhj', 'fwefwef', '2016-12-31', 'Gryffindor', 'Minerva McGonagall', 'Half-blood', 'UserImages/Tulips.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `subjects`
--

CREATE TABLE `subjects` (
  `id` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `sub1` int(100) NOT NULL,
  `sub2` int(100) NOT NULL,
  `sub3` int(100) NOT NULL,
  `sub4` int(100) NOT NULL,
  `sub5` int(100) NOT NULL,
  `sub6` int(100) NOT NULL,
  `sub7` int(100) NOT NULL,
  `sub8` int(100) NOT NULL,
  `sub9` int(100) NOT NULL,
  `sub10` int(100) NOT NULL,
  `sub11` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `subjects`
--

INSERT INTO `subjects` (`id`, `uid`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `sub7`, `sub8`, `sub9`, `sub10`, `sub11`) VALUES
(34, 57, 6, 6, 6, 6, 6, 6, 6, 6, 6, 8, 0),
(35, 58, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, 61, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT для таблицы `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
