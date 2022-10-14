-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 10 2022 г., 14:56
-- Версия сервера: 5.5.62
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `new_base`
--

-- --------------------------------------------------------

--
-- Структура таблицы `exam_marks`
--

CREATE TABLE `exam_marks` (
  `exam_id` int(5) NOT NULL,
  `stud_id` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `subj_id` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `mark` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `exam_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `exam_marks`
--

INSERT INTO `exam_marks` (`exam_id`, `stud_id`, `subj_id`, `mark`, `exam_date`) VALUES
(34, '32', '10', '4', '2000-01-23'),
(43, '6', '22', '4', '2000-01-18'),
(75, '55', '10', '5', '2000-01-05'),
(145, '12', '10', '5', '2000-01-12'),
(238, '12', '22', '3', '1999-06-17'),
(639, '55', '22', '0', '2000-06-22');

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE `students` (
  `stud_id` int(5) NOT NULL,
  `surname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `stipend` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `kurs` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `univ_id` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`stud_id`, `surname`, `name`, `stipend`, `kurs`, `city`, `birthday`, `univ_id`) VALUES
(1, 'Иванов', 'Иван', '150', '1', 'Орел', '03/12/1982', '10'),
(2, 'Петров', 'Петр', '200', '3', 'Курск', '01/10/1980', '10'),
(3, 'Сидоров', 'Вадим', '150', '4', 'Москва', '07/06/1979', '22'),
(4, 'Кузнецов', 'Борис', '0', '2', 'Брянск', '08/12/1981', '10'),
(5, 'Зайцева', 'Ольга', '250', '2', 'Липецк', '01/05/1999', '10'),
(6, 'Павлов', 'Андрей', '0 ', '3', 'Воронеж', '05/11/1979', '10'),
(7, 'Котов', 'Павел', '150', '5', 'Белгород', '02/09/1980', '14');

-- --------------------------------------------------------

--
-- Структура таблицы `subjects`
--

CREATE TABLE `subjects` (
  `SUBJ_ID` int(5) NOT NULL,
  `SUBJ_NAME` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `HOUR` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SEMESTER` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `subjects`
--

INSERT INTO `subjects` (`SUBJ_ID`, `SUBJ_NAME`, `HOUR`, `SEMESTER`) VALUES
(1, 'Информатика', '56', '1'),
(2, 'Физика', '34', '1'),
(3, 'Математика', '56', '2'),
(4, 'История', '34', '4'),
(5, 'Анлгийский', '56', '3'),
(6, 'Физкультура', '34', '5');

-- --------------------------------------------------------

--
-- Структура таблицы `university`
--

CREATE TABLE `university` (
  `UNIV_ID` int(5) NOT NULL,
  `UNIV_NAME` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `RATING` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CITY` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `university`
--

INSERT INTO `university` (`UNIV_ID`, `UNIV_NAME`, `RATING`, `CITY`) VALUES
(1, 'МГУ', '606', 'Москва'),
(2, 'ВГУ', '296', 'Воронеж'),
(3, 'НГУ', '345', 'Новосибирск'),
(4, 'РГУ', '416', 'Ростов'),
(5, 'БГУ', '326', 'Белгород');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `exam_marks`
--
ALTER TABLE `exam_marks`
  ADD PRIMARY KEY (`exam_id`);

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stud_id`);

--
-- Индексы таблицы `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`SUBJ_ID`);

--
-- Индексы таблицы `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`UNIV_ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
  MODIFY `stud_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `subjects`
--
ALTER TABLE `subjects`
  MODIFY `SUBJ_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `university`
--
ALTER TABLE `university`
  MODIFY `UNIV_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
