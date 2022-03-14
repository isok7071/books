-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 27 2022 г., 12:22
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Books`
--

-- --------------------------------------------------------

--
-- Структура таблицы `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `otchestvo` varchar(255) DEFAULT NULL,
  `psevdonim` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `author`
--

INSERT INTO `author` (`id`, `name`, `surname`, `otchestvo`, `psevdonim`) VALUES
(1, 'Кэрролл', 'Льюис', NULL, NULL),
(2, 'Лев', 'Николаевич', 'Толстой', '');

-- --------------------------------------------------------

--
-- Структура таблицы `authorstvo`
--

CREATE TABLE `authorstvo` (
  `id` int(11) NOT NULL,
  `id_author` int(11) NOT NULL,
  `id_book` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `authorstvo`
--

INSERT INTO `authorstvo` (`id`, `id_author`, `id_book`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `oblojka` varchar(500) DEFAULT NULL,
  `parent_book_id` int(11) DEFAULT NULL,
  `id_lang` int(11) NOT NULL,
  `id_izd` int(11) NOT NULL,
  `id_format` int(11) NOT NULL,
  `kolvoStr` int(10) UNSIGNED NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `ISBN13` varchar(17) NOT NULL,
  `id_pereplet` int(11) NOT NULL,
  `god_izdaniya` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `name`, `oblojka`, `parent_book_id`, `id_lang`, `id_izd`, `id_format`, `kolvoStr`, `price`, `ISBN13`, `id_pereplet`, `god_izdaniya`) VALUES
(1, 'Алиса в Стране чудес. Алиса в Зазеркалье', 'stockholm.jpeg', NULL, 1, 1, 1, 224, 175, '978-5-8475-1266-4', 1, '2020'),
(2, 'Война и мир', 'pexels-moose-photos-1587009.jpg', NULL, 1, 1, 1, 5000, 300, '21331231231231231', 1, '2002');

-- --------------------------------------------------------

--
-- Структура таблицы `book_genres`
--

CREATE TABLE `book_genres` (
  `id` int(11) NOT NULL,
  `id_genre` int(11) NOT NULL,
  `id_book` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `book_genres`
--

INSERT INTO `book_genres` (`id`, `id_genre`, `id_book`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `format`
--

CREATE TABLE `format` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `format`
--

INSERT INTO `format` (`id`, `name`) VALUES
(1, '60х90/16');

-- --------------------------------------------------------

--
-- Структура таблицы `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `genres`
--

INSERT INTO `genres` (`id`, `name`) VALUES
(1, 'Фэнтези');

-- --------------------------------------------------------

--
-- Структура таблицы `goroda_otdeleniy`
--

CREATE TABLE `goroda_otdeleniy` (
  `id` int(11) NOT NULL,
  `gorod_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goroda_otdeleniy`
--

INSERT INTO `goroda_otdeleniy` (`id`, `gorod_name`) VALUES
(1, 'Санкт-Петербург'),
(2, 'Москва');

-- --------------------------------------------------------

--
-- Структура таблицы `izdatelstva`
--

CREATE TABLE `izdatelstva` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fiz_addr` varchar(255) NOT NULL,
  `uridich_addr` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `izdatelstva`
--

INSERT INTO `izdatelstva` (`id`, `name`, `fiz_addr`, `uridich_addr`) VALUES
(1, 'Мартин', 'Санкт-Петербург, м. Московская, ул. Ленина, д.5', 'Санкт-Петербург, м. Московская, ул. Ленина, д.5');

-- --------------------------------------------------------

--
-- Структура таблицы `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `languages`
--

INSERT INTO `languages` (`id`, `name`) VALUES
(1, 'Русский'),
(2, 'Английский');

-- --------------------------------------------------------

--
-- Структура таблицы `nalichie_knig`
--

CREATE TABLE `nalichie_knig` (
  `id` int(11) NOT NULL,
  `id_otdel` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `kolichestvo` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `nalichie_knig`
--

INSERT INTO `nalichie_knig` (`id`, `id_otdel`, `id_book`, `kolichestvo`) VALUES
(1, 1, 1, 12);

-- --------------------------------------------------------

--
-- Структура таблицы `otdel`
--

CREATE TABLE `otdel` (
  `id` int(11) NOT NULL,
  `name_otdeleniya` varchar(255) NOT NULL,
  `addres` varchar(255) NOT NULL,
  `id_gorod` int(11) NOT NULL,
  `tel` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `otdel`
--

INSERT INTO `otdel` (`id`, `name_otdeleniya`, `addres`, `id_gorod`, `tel`) VALUES
(1, 'Отделение у метро Нарвская', 'м. Нарвская, пр. Стачек, д.52, к.3', 1, '+79112845487'),
(2, 'абоба', 'Ул. пушкина, д. Колотушкина', 2, '+88325834534');

-- --------------------------------------------------------

--
-- Структура таблицы `pereplet`
--

CREATE TABLE `pereplet` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pereplet`
--

INSERT INTO `pereplet` (`id`, `name`) VALUES
(1, 'Твердый'),
(2, 'Мягкий');

-- --------------------------------------------------------

--
-- Структура таблицы `samovivoz`
--

CREATE TABLE `samovivoz` (
  `id` int(11) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `samovivoz`
--

INSERT INTO `samovivoz` (`id`, `address`) VALUES
(1, 'Санкт-Петербург, м. Чкаловская, ул. Пушкинская, д. 23');

-- --------------------------------------------------------

--
-- Структура таблицы `spisok_books_zakaza`
--

CREATE TABLE `spisok_books_zakaza` (
  `id` int(11) NOT NULL,
  `id_zakaz` int(11) NOT NULL,
  `id_book` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `spisok_books_zakaza`
--

INSERT INTO `spisok_books_zakaza` (`id`, `id_zakaz`, `id_book`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `sposob_oplati`
--

CREATE TABLE `sposob_oplati` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sposob_oplati`
--

INSERT INTO `sposob_oplati` (`id`, `name`) VALUES
(1, 'Наличными'),
(2, 'По карте');

-- --------------------------------------------------------

--
-- Структура таблицы `sposob_polucheniya`
--

CREATE TABLE `sposob_polucheniya` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sposob_polucheniya`
--

INSERT INTO `sposob_polucheniya` (`id`, `name`) VALUES
(1, 'Самовывоз'),
(2, 'Доставка');

-- --------------------------------------------------------

--
-- Структура таблицы `status_zakaza`
--

CREATE TABLE `status_zakaza` (
  `id` int(11) NOT NULL,
  `status_name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `status_zakaza`
--

INSERT INTO `status_zakaza` (`id`, `status_name`) VALUES
(1, 'Завершен'),
(2, 'Отменен'),
(3, 'В сборке'),
(4, 'Создан');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `surname` varchar(80) NOT NULL,
  `otchestvo` varchar(80) NOT NULL,
  `username` varchar(100) NOT NULL,
  `auth_key` varchar(500) DEFAULT NULL,
  `accessToken` varchar(500) DEFAULT NULL,
  `password_hash` varchar(120) NOT NULL,
  `addr_dostavki` varchar(500) DEFAULT NULL,
  `tel` varchar(12) NOT NULL,
  `email` varchar(80) NOT NULL,
  `status` tinyint(1) DEFAULT '10'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `otchestvo`, `username`, `auth_key`, `accessToken`, `password_hash`, `addr_dostavki`, `tel`, `email`, `status`) VALUES
(1, 'Иван', 'Иванов', 'Иванович', 'ivanzolo2004', '', '', 'ivanzolo2004', 'Санкт-Петербург, м. Парнас, ул. Карла - Маркса, д.4', '+79112845483', 'ivanzolo@yandex.ru', 10),
(2, 'Олег', 'Газманов', 'Газмановичччч', 'olegtinkoff@gmail.com', '', '', 'oleg', 'Санкт-Петербург, ул. Пушкина, д. 2, кв.1', '89118235758', 'olegtinkoff@gmail.com', 10),
(3, 'erewrewrewrew', 'erewrewrewrew', 'erewrewrewrew', 'erewrewrewrew', 'hAP_KY3Eqij4JR8CgJWH3DABhwNTXFVN', NULL, '$2y$13$xf4vZwFvmSTn.WOsN891FefeIzZXVXcPK95GLvNXNbsteA6lzVOqG', NULL, '12', 'rdfrds@fdsf.ru', 10),
(4, 'oleg', 'oleg', 'oleg', 'oleg', '1pYZ8kcXFf6W6Bi6Slk5AFRdqDKXlxtr', NULL, '$2y$13$.NI5KcWT.FumTy8pSAkqn.ZuaVajGG9oSBP5rJ0uQIJJZcWigfC8m', NULL, '12', 'oleg@mail.ru', 10),
(5, 'sdefasdf', 'sdefasdf', 'sdefasdf', 'sdefasdf', 'qXsNtDnGg97yoRuRyeE_7mLAAYVdtyq0', NULL, '$2y$13$30iW9KUSc8i6JMuIjjUgieRCvGFfaontIS/omy6hJ1QZsV8O/pFfi', NULL, '12', 'assdf@dasg.c', 10),
(6, 'qwerty', 'qwerty', 'qwerty', 'qwerty', 'saDvInZSCY7Qiu14_ILLXOM5dpacPV_j', NULL, '$2y$13$i3OdTTSSw0AFJmv1S8fJyuurecqytNUtmhu7f8D3UFDO2vP9GAWHa', NULL, '12', 'qwerty@q.c', 10),
(7, 'sdfaasdf', 'sdfaasdf', 'sdfaasdf', 'sdfaasdf', 'KPm4AuxEmmZSowQQimwydYTAUIgUS09S', NULL, '$2y$13$GwJpQccVGJqSEqzjqHLW9udzUcMrOEr/8FVWU0Us.I9p/qCvRCVH6', NULL, '12', 'assdf@dasg.c', 10),
(8, 'oleg', 'oleg', 'oleg', 'olegka', '20Fi9XM-gfM4L9b8I9U_8wckRQlJLJ6j', NULL, '$2y$13$iDx3NMWJtBxwGIy9wU6g5epKVQFBgPF8yDJjKHJvUtGNQNINjlGum', NULL, '4584849646', 'oleg@ol.leg', 10),
(9, 'oleg', 'oleg', 'oleg', 'olegich', 'I5_E32v5jGQlbMpcgPeUJgftZr1CQugd', NULL, '$2y$13$kLlGaNzCc1X075lnOls2Z.sJWxdUM3iRlKSLeHNb3aldSsxLIAFri', 'egafgar wrzasdbhssdfgb', '4584849646', 'oleg@ol.leg', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `zakaz`
--

CREATE TABLE `zakaz` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_spisok_books` int(11) NOT NULL,
  `adress_dostavki` int(11) DEFAULT NULL,
  `id_samovivoza` int(11) DEFAULT NULL,
  `data_zakaza` datetime NOT NULL,
  `data_predpolag_dostavki` datetime NOT NULL,
  `id_sposob_polucheniya` int(11) NOT NULL,
  `id_sposob_oplati` int(11) NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `id_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `zakaz`
--

INSERT INTO `zakaz` (`id`, `id_user`, `id_spisok_books`, `adress_dostavki`, `id_samovivoza`, `data_zakaza`, `data_predpolag_dostavki`, `id_sposob_polucheniya`, `id_sposob_oplati`, `price`, `id_status`) VALUES
(1, 1, 1, 1, NULL, '2022-01-13 09:53:00', '2022-02-04 09:53:00', 1, 1, 175, 4);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `authorstvo`
--
ALTER TABLE `authorstvo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_author` (`id_author`),
  ADD KEY `id_book` (`id_book`);

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_format` (`id_format`),
  ADD KEY `id_lang` (`id_lang`),
  ADD KEY `id_izd` (`id_izd`),
  ADD KEY `id_pereplet` (`id_pereplet`),
  ADD KEY `parent_book_id` (`parent_book_id`);

--
-- Индексы таблицы `book_genres`
--
ALTER TABLE `book_genres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_genre` (`id_genre`),
  ADD KEY `id_book` (`id_book`);

--
-- Индексы таблицы `format`
--
ALTER TABLE `format`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_format` (`id`);

--
-- Индексы таблицы `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goroda_otdeleniy`
--
ALTER TABLE `goroda_otdeleniy`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `izdatelstva`
--
ALTER TABLE `izdatelstva`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `nalichie_knig`
--
ALTER TABLE `nalichie_knig`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_otdel` (`id_otdel`),
  ADD KEY `id_book` (`id_book`);

--
-- Индексы таблицы `otdel`
--
ALTER TABLE `otdel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gorod` (`id_gorod`);

--
-- Индексы таблицы `pereplet`
--
ALTER TABLE `pereplet`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `samovivoz`
--
ALTER TABLE `samovivoz`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `spisok_books_zakaza`
--
ALTER TABLE `spisok_books_zakaza`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_book` (`id_book`),
  ADD KEY `id_zakaz` (`id_zakaz`);

--
-- Индексы таблицы `sposob_oplati`
--
ALTER TABLE `sposob_oplati`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sposob_polucheniya`
--
ALTER TABLE `sposob_polucheniya`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `status_zakaza`
--
ALTER TABLE `status_zakaza`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zakaz`
--
ALTER TABLE `zakaz`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_spisok_books` (`id_spisok_books`),
  ADD KEY `id_sposob_polucheniya` (`id_sposob_polucheniya`),
  ADD KEY `id_sposob_oplati` (`id_sposob_oplati`),
  ADD KEY `adress_dostavki` (`adress_dostavki`),
  ADD KEY `id_samovivoza` (`id_samovivoza`),
  ADD KEY `id_status` (`id_status`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `authorstvo`
--
ALTER TABLE `authorstvo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `book_genres`
--
ALTER TABLE `book_genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `format`
--
ALTER TABLE `format`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `goroda_otdeleniy`
--
ALTER TABLE `goroda_otdeleniy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `izdatelstva`
--
ALTER TABLE `izdatelstva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `nalichie_knig`
--
ALTER TABLE `nalichie_knig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `otdel`
--
ALTER TABLE `otdel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `pereplet`
--
ALTER TABLE `pereplet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `samovivoz`
--
ALTER TABLE `samovivoz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `spisok_books_zakaza`
--
ALTER TABLE `spisok_books_zakaza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `sposob_oplati`
--
ALTER TABLE `sposob_oplati`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `sposob_polucheniya`
--
ALTER TABLE `sposob_polucheniya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `status_zakaza`
--
ALTER TABLE `status_zakaza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `zakaz`
--
ALTER TABLE `zakaz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `authorstvo`
--
ALTER TABLE `authorstvo`
  ADD CONSTRAINT `authorstvo_ibfk_1` FOREIGN KEY (`id_author`) REFERENCES `author` (`id`),
  ADD CONSTRAINT `authorstvo_ibfk_2` FOREIGN KEY (`id_book`) REFERENCES `books` (`id`);

--
-- Ограничения внешнего ключа таблицы `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`id_format`) REFERENCES `format` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`id_izd`) REFERENCES `izdatelstva` (`id`),
  ADD CONSTRAINT `books_ibfk_3` FOREIGN KEY (`id_lang`) REFERENCES `languages` (`id`),
  ADD CONSTRAINT `books_ibfk_4` FOREIGN KEY (`id_pereplet`) REFERENCES `pereplet` (`id`),
  ADD CONSTRAINT `books_ibfk_5` FOREIGN KEY (`parent_book_id`) REFERENCES `books` (`id`);

--
-- Ограничения внешнего ключа таблицы `book_genres`
--
ALTER TABLE `book_genres`
  ADD CONSTRAINT `book_genres_ibfk_1` FOREIGN KEY (`id_genre`) REFERENCES `genres` (`id`),
  ADD CONSTRAINT `book_genres_ibfk_2` FOREIGN KEY (`id_book`) REFERENCES `books` (`id`);

--
-- Ограничения внешнего ключа таблицы `nalichie_knig`
--
ALTER TABLE `nalichie_knig`
  ADD CONSTRAINT `nalichie_knig_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `nalichie_knig_ibfk_2` FOREIGN KEY (`id_otdel`) REFERENCES `otdel` (`id`);

--
-- Ограничения внешнего ключа таблицы `otdel`
--
ALTER TABLE `otdel`
  ADD CONSTRAINT `otdel_ibfk_1` FOREIGN KEY (`id_gorod`) REFERENCES `goroda_otdeleniy` (`id`);

--
-- Ограничения внешнего ключа таблицы `spisok_books_zakaza`
--
ALTER TABLE `spisok_books_zakaza`
  ADD CONSTRAINT `spisok_books_zakaza_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `spisok_books_zakaza_ibfk_2` FOREIGN KEY (`id_zakaz`) REFERENCES `zakaz` (`id`);

--
-- Ограничения внешнего ключа таблицы `zakaz`
--
ALTER TABLE `zakaz`
  ADD CONSTRAINT `zakaz_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `zakaz_ibfk_2` FOREIGN KEY (`id_spisok_books`) REFERENCES `spisok_books_zakaza` (`id`),
  ADD CONSTRAINT `zakaz_ibfk_3` FOREIGN KEY (`id_sposob_polucheniya`) REFERENCES `sposob_polucheniya` (`id`),
  ADD CONSTRAINT `zakaz_ibfk_4` FOREIGN KEY (`id_sposob_oplati`) REFERENCES `sposob_oplati` (`id`),
  ADD CONSTRAINT `zakaz_ibfk_6` FOREIGN KEY (`id_samovivoza`) REFERENCES `samovivoz` (`id`),
  ADD CONSTRAINT `zakaz_ibfk_7` FOREIGN KEY (`id_status`) REFERENCES `status_zakaza` (`id`),
  ADD CONSTRAINT `zakaz_ibfk_8` FOREIGN KEY (`adress_dostavki`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
