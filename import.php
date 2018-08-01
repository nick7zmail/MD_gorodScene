<?php

SQLExec('
-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Авг 01 2018 г., 17:05
-- Версия сервера: 10.1.23-MariaDB-9+deb9u1
-- Версия PHP: 7.0.27-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_terminal`
--

-- --------------------------------------------------------

--
-- Структура таблицы `sys_date_format`
--

CREATE TABLE IF NOT EXISTS `sys_date_format` (
  `ID` int(10) UNSIGNED NOT NULL,
  `TITLE` varchar(100) NOT NULL DEFAULT \'\',
  `FORMAT` varchar(255) NOT NULL DEFAULT \'\',
  `LINKED_OBJECT` varchar(100) NOT NULL DEFAULT \'\',
  `LINKED_PROPERTY` varchar(100) NOT NULL DEFAULT \'\'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sys_date_format`
--

INSERT INTO `sys_date_format` (`TITLE`, `FORMAT`, `LINKED_OBJECT`, `LINKED_PROPERTY`) VALUES
(\'Часы\', \'H\', \'ThisComputer\', \'timeNowH\'),
(\'Минуты\', \'i\', \'ThisComputer\', \'timeNowM\'),
(\'Время\', \'H:i\', \'ThisComputer\', \'timeNow\'),
(\'Дата\', \'d1\', \'ThisComputer\', \'dateNow\'),
(\'День недели\', \'n1\', \'ThisComputer\', \'DayOfWeek\');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `sys_date_format`
--
ALTER TABLE `sys_date_format`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `sys_date_format`
--
ALTER TABLE `sys_date_format`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
');
  
?>