-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 05 2019 г., 16:33
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `phpdev`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`id`, `name`, `img`) VALUES
(1, 'Лев Николаевич Толстой\r\n', 'leo.jpg'),
(2, 'Александр Сергеевич Пушкин', 'pushkin.jpg'),
(3, 'Фёдор Михайлович Достоевский', 'dostoevski.jpg'),
(4, 'Антон Павлович Чехов', 'chehov.jpg'),
(5, 'Николай Васильевич Гоголь', 'gogol.jpg'),
(6, 'Иван Алексеевич Бунин', 'bunin.jpg'),
(7, 'Иван Сергеевич Тургенев', 'turgenev.jpg\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `authors` varchar(100) NOT NULL,
  `img` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `id_post`, `name`, `authors`, `img`) VALUES
(1, 1, 'Война и мир', 'Лев Николаевич Толстой', 'war.jpg'),
(2, 1, 'Детство', 'Лев Николаевич Толстой', 'youth.jpg'),
(3, 1, 'Анна Каренина', 'Лев Николаевич Толстой', 'anna.jpg'),
(4, 1, 'Воскресенье', 'Лев Николаевич Толстой', 'voskr.jpg'),
(5, 1, 'Исповедь', 'Лев Николаевич Толстой', 'ispov.jpg'),
(6, 2, 'Капитанская дочка ', 'Александр Сергеевич Пушкин', 'captain.jpg'),
(7, 2, 'Пиковая дама', 'Александр Сергеевич Пушкин', 'dama.jpg'),
(8, 2, 'Дубровский', 'Александр Сергеевич Пушкин', 'dubrovski.jpg'),
(9, 2, 'Медный всадник', 'Александр Сергеевич Пушкин', 'vsadnik.jpg'),
(10, 2, 'Повести покойного Ивана Петровича Белкина', 'Александр Сергеевич Пушкин', 'belkin.jpg'),
(11, 3, 'Преступление и наказание ', 'Фёдор Михайлович Достоевский', 'prestup.jpg'),
(12, 3, 'Идиот', 'Фёдор Михайлович Достоевский', 'idiot.jpg'),
(13, 3, 'Братья Карамазовы', 'Фёдор Михайлович Достоевский', 'karamaz.jpg'),
(14, 3, 'Бесы', 'Фёдор Михайлович Достоевский', 'besi.jpg'),
(15, 3, 'Белые ночи', 'Фёдор Михайлович Достоевский', 'night.jpg'),
(16, 4, 'Крыжовник ', 'Антон Павлович Чехов', 'kryzhovnik.jpg'),
(17, 4, 'Человек в футляре', 'Антон Павлович Чехов', 'futlar.jpg'),
(18, 4, 'Хамелеон', 'Антон Павлович Чехов', 'hamel.jpg'),
(19, 4, 'Дама с собачкой', 'Антон Павлович Чехов', 'dama_s_sob.jpg'),
(20, 4, 'Попрыгунья', 'Антон Павлович Чехов', 'popr.jpg'),
(21, 5, 'Мертвые души', 'Николай Васильевич Гоголь', 'dushi.jpg'),
(22, 5, 'Шинель', 'Николай Васильевич Гоголь', 'shinel.jpg'),
(23, 5, 'Нос', 'Николай Васильевич Гоголь', 'nos.jpg'),
(24, 5, 'Портрет', 'Николай Васильевич Гоголь', 'portr.jpg'),
(25, 5, 'Тарас Бульба', 'Николай Васильевич Гоголь', 'taras.jpg'),
(26, 6, 'Тёмные аллеи', 'Иван Алексеевич Бунин', 'allei.jpg'),
(27, 6, 'Господин из Сан-Франциско', 'Иван Алексеевич Бунин', 'sanfran.jpg'),
(28, 6, 'Окаянные дни', 'Иван Алексеевич Бунин', 'dni.jpg'),
(29, 6, 'Лёгкое дыхание', 'Иван Алексеевич Бунин', 'dihanie.jpg'),
(30, 6, 'Жизнь Арсеньева', 'Иван Алексеевич Бунин', 'arsen.jpg'),
(31, 7, 'Отцы и дети', 'Иван Сергеевич Тургенев', 'otci.jpg'),
(32, 7, 'Первая любовь', 'Иван Сергеевич Тургенев', 'love.jpg'),
(33, 7, 'Муму', 'Иван Сергеевич Тургенев', 'mumu.jpg'),
(34, 7, 'Записки охотника', 'Иван Сергеевич Тургенев', 'hunt.jpg'),
(35, 7, 'Рудин', 'Иван Сергеевич Тургенев', 'rud.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_post` (`id_post`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `authors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
