-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Окт 27 2017 г., 17:13
-- Версия сервера: 5.6.36-cll-lve
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dtnqaexg_people`
--

-- --------------------------------------------------------

--
-- Структура таблицы `logins`
--

CREATE TABLE `logins` (
  `id` int(2) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `logins`
--

INSERT INTO `logins` (`id`, `login`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'user', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Структура таблицы `phones`
--

CREATE TABLE `phones` (
  `id` int(11) UNSIGNED NOT NULL,
  `surname` varchar(30) NOT NULL,
  `name` varchar(20) NOT NULL,
  `patronymic` varchar(30) NOT NULL,
  `telephone` varchar(23) NOT NULL,
  `added` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `phones`
--

INSERT INTO `phones` (`id`, `surname`, `name`, `patronymic`, `telephone`) VALUES
(1, 'Козицкий', 'Вадим', 'Дмитриевич', '0632184119'),
(2, 'Васильчиков', 'Антон', 'Эдуардович', '0634614209'),
(3, 'Иваненко', 'Максим', 'Романович', '0936938475'),
(4, 'Ткаченко', 'Никита', 'Андреевич', '0958281756'),
(5, 'Охрименко', 'Карина', 'Вадимовна', '0938754621'),
(6, 'Охрименко', 'Виктория', 'Вадимовна', '0930381015'),
(7, 'Софиенко', 'Оксана', 'Анатолиевна', '0939405191'),
(8, 'Локтев', 'Александр', 'Васильевич', '0632616353'),
(9, 'Савко', 'Влад', '', '0932000091'),
(10, 'Становых', 'Максим', '', '0931497220'),
(11, 'Рябев', 'Антон', 'Анатольевич', '0632124471'),
(12, 'Рюмшин', 'Никита', '', '0637577027'),
(13, 'Ростовцева', 'Анастасия', 'Олеговна', '0638362717'),
(14, 'Радченко', 'Яна', '', '0957884401'),
(15, 'Ольшенецкий', 'Степан', '', '0686000050'),
(16, 'Мирошниченко', 'Игорь', '', '0732290239'),
(17, 'Козицкий', 'Дмитрий', 'Владимирович', '0662963042'),
(18, 'Нефедов', 'Владислав', 'Владимирович', '0992757479'),
(19, 'Таран', 'Ярослав', '', '0639434902'),
(20, 'Эчкенко', 'Алина', 'Вадимовна', '0932316966'),
(21, 'Галампета', 'София', '', '0509234342'),
(22, 'Ващенко', 'Виталий', '', '0930962520'),
(23, 'Буханова', 'Катерина', 'Сергеевна', '0639557630'),
(24, 'Борисенко', 'Наталия', '', '0931598366'),
(25, 'Прохоров', 'Богдан', '', '0669640650'),
(26, 'Глушак', 'Владислав', '', '0633755762'),
(27, 'Козицкая', 'Елена', 'Владимировна', '0968671110'),
(28, 'Кульчицкий', 'Александр', 'Иванович', '0636262336'),
(29, 'Лихобаба', 'Дарья', 'Владимировна', '0994553070'),
(30, 'Маданцян', 'Николай', '', '0932959362'),
(31, 'Малыхин', 'Владимир', 'Игоревич', '0935743373'),
(32, 'Леонов', 'Алексей', 'Сергеевич', '0950788963'),
(33, 'Куцына', 'Валерия', '', '0639920412'),
(34, 'Мельник', 'Владислав', '', '0990329520'),
(35, 'Калашников', 'Николай', '', '0671004422'),
(36, 'Козлов', 'Владислав', '', '0934774937');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Индексы таблицы `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `telephone` (`telephone`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `phones`
--
ALTER TABLE `phones`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
