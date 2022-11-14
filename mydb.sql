-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 15 2022 г., 00:45
-- Версия сервера: 10.4.25-MariaDB
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mydb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `доставка`
--

CREATE TABLE `доставка` (
  `ID-Доставки` int(11) NOT NULL,
  `Назва сервісу` varchar(45) DEFAULT NULL,
  `Статус` varchar(45) NOT NULL DEFAULT 'Очікується товар'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `доставка`
--

INSERT INTO `доставка` (`ID-Доставки`, `Назва сервісу`, `Статус`) VALUES
(1, 'OLX-доставка', 'Очікується товар'),
(2, 'nova poshta', 'Очікується товар');

-- --------------------------------------------------------

--
-- Структура таблицы `категорія`
--

CREATE TABLE `категорія` (
  `ID-категорії` int(11) NOT NULL,
  `Назва` varchar(45) NOT NULL,
  `Батьківська категорія` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `категорія`
--

INSERT INTO `категорія` (`ID-категорії`, `Назва`, `Батьківська категорія`) VALUES
(1, 'Ноутбук', 'Комп`ютери та ноутбуки'),
(2, 'Комп`ютер', 'Комп`ютери та ноутбуки'),
(3, 'Машинка', 'Іграшки');

-- --------------------------------------------------------

--
-- Структура таблицы `категорія_has_товари`
--

CREATE TABLE `категорія_has_товари` (
  `ID-категорії` int(11) NOT NULL,
  `ID-товару` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `категорія_has_товари`
--

INSERT INTO `категорія_has_товари` (`ID-категорії`, `ID-товару`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `клієнти`
--

CREATE TABLE `клієнти` (
  `ID-Клієнта` int(11) NOT NULL,
  `Логін` varchar(45) NOT NULL,
  `Пароль` varchar(45) NOT NULL,
  `ПІБ` varchar(45) NOT NULL,
  `Телефон` int(14) NOT NULL,
  `Адреса` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `клієнти`
--

INSERT INTO `клієнти` (`ID-Клієнта`, `Логін`, `Пароль`, `ПІБ`, `Телефон`, `Адреса`) VALUES
(1, 'login', 'pasword', 'pib', 0, 'adr'),
(2, 'log', 'pdfg', 'dfgh', 0, 'dfg'),
(3, 'вапсм', 'смиа', 'аписм', 0, ' аии'),
(4, 'івавп', 'апрат', 'іваівп', 0, 'варимтапо'),
(5, 'віа', 'іваіва', 'іваіва', 0, 'чямвапв');

-- --------------------------------------------------------

--
-- Структура таблицы `клієнти_has_доставка`
--

CREATE TABLE `клієнти_has_доставка` (
  `ID-Клієнта` int(11) NOT NULL,
  `ID-Доставки` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `клієнти_has_доставка`
--

INSERT INTO `клієнти_has_доставка` (`ID-Клієнта`, `ID-Доставки`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `замовлення`
--

CREATE TABLE `замовлення` (
  `Номер` int(11) NOT NULL,
  `Назва` varchar(45) NOT NULL,
  `Дата` date NOT NULL,
  `Статус` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `замовлення`
--

INSERT INTO `замовлення` (`Номер`, `Назва`, `Дата`, `Статус`) VALUES
(23, 'Комп`ютер', '2022-11-11', 'Замовлено'),
(24, '', '2022-11-06', 'Замовлено');

-- --------------------------------------------------------

--
-- Структура таблицы `замовлення_has_клієнти`
--

CREATE TABLE `замовлення_has_клієнти` (
  `Номер Замовлення` int(11) NOT NULL,
  `ID-Клієнта` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `замовлення_has_клієнти`
--

INSERT INTO `замовлення_has_клієнти` (`Номер Замовлення`, `ID-Клієнта`) VALUES
(23, 1),
(24, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `товари`
--

CREATE TABLE `товари` (
  `ID-товару` int(11) NOT NULL,
  `Назва` varchar(45) NOT NULL,
  `Вартість` int(14) NOT NULL,
  `К-сть товару` int(14) NOT NULL,
  `Характеристика` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `товари`
--

INSERT INTO `товари` (`ID-товару`, `Назва`, `Вартість`, `К-сть товару`, `Характеристика`) VALUES
(1, 'Ноутбук', 30000, 88, 'Ноутбук Acer Aspire'),
(2, 'Комп`ютер', 35000, 44, 'Комп`ютер AIRLINE Gaming'),
(3, 'Машинка', 200, 21, 'Машинка hoatweels');

-- --------------------------------------------------------

--
-- Структура таблицы `товари_has_замовлення`
--

CREATE TABLE `товари_has_замовлення` (
  `ID-товару` int(11) NOT NULL,
  `Номер Замовлення` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `товари_has_замовлення`
--

INSERT INTO `товари_has_замовлення` (`ID-товару`, `Номер Замовлення`) VALUES
(1, 23),
(2, 24);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `доставка`
--
ALTER TABLE `доставка`
  ADD PRIMARY KEY (`ID-Доставки`);

--
-- Индексы таблицы `категорія`
--
ALTER TABLE `категорія`
  ADD PRIMARY KEY (`ID-категорії`);

--
-- Индексы таблицы `категорія_has_товари`
--
ALTER TABLE `категорія_has_товари`
  ADD PRIMARY KEY (`ID-категорії`,`ID-товару`),
  ADD KEY `fk_Категорія_has_Товари_Товари1` (`ID-товару`);

--
-- Индексы таблицы `клієнти`
--
ALTER TABLE `клієнти`
  ADD PRIMARY KEY (`ID-Клієнта`);

--
-- Индексы таблицы `клієнти_has_доставка`
--
ALTER TABLE `клієнти_has_доставка`
  ADD PRIMARY KEY (`ID-Клієнта`,`ID-Доставки`),
  ADD KEY `fk_Клієнти_has_Доставка_Доставка1` (`ID-Доставки`);

--
-- Индексы таблицы `замовлення`
--
ALTER TABLE `замовлення`
  ADD PRIMARY KEY (`Номер`);

--
-- Индексы таблицы `замовлення_has_клієнти`
--
ALTER TABLE `замовлення_has_клієнти`
  ADD PRIMARY KEY (`Номер Замовлення`,`ID-Клієнта`);

--
-- Индексы таблицы `товари`
--
ALTER TABLE `товари`
  ADD PRIMARY KEY (`ID-товару`);

--
-- Индексы таблицы `товари_has_замовлення`
--
ALTER TABLE `товари_has_замовлення`
  ADD PRIMARY KEY (`ID-товару`,`Номер Замовлення`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `категорія`
--
ALTER TABLE `категорія`
  MODIFY `ID-категорії` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `клієнти`
--
ALTER TABLE `клієнти`
  MODIFY `ID-Клієнта` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `замовлення`
--
ALTER TABLE `замовлення`
  MODIFY `Номер` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `товари`
--
ALTER TABLE `товари`
  MODIFY `ID-товару` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `категорія_has_товари`
--
ALTER TABLE `категорія_has_товари`
  ADD CONSTRAINT `fk_Категорія_has_Товари_Категорія1` FOREIGN KEY (`ID-категорії`) REFERENCES `категорія` (`ID-категорії`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Категорія_has_Товари_Товари1` FOREIGN KEY (`ID-товару`) REFERENCES `товари` (`ID-товару`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `клієнти_has_доставка`
--
ALTER TABLE `клієнти_has_доставка`
  ADD CONSTRAINT `fk_Клієнти_has_Доставка_Доставка1` FOREIGN KEY (`ID-Доставки`) REFERENCES `доставка` (`ID-Доставки`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Клієнти_has_Доставка_Клієнти1` FOREIGN KEY (`ID-Клієнта`) REFERENCES `клієнти` (`ID-Клієнта`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `товари_has_замовлення`
--
ALTER TABLE `товари_has_замовлення`
  ADD CONSTRAINT `fk_Товари_has_Замовлення_Товари1` FOREIGN KEY (`ID-товару`) REFERENCES `товари` (`ID-товару`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
