-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 23 2022 г., 21:08
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
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `item_id` int(5) NOT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(5) NOT NULL,
  `code` int(5) NOT NULL,
  `price` float NOT NULL,
  `availabillity` int(5) NOT NULL,
  `brand` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_new` int(5) DEFAULT '0',
  `is_recommended` int(5) DEFAULT '0',
  `status` int(5) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`item_id`, `item_name`, `category_id`, `code`, `price`, `availabillity`, `brand`, `item_image`, `description`, `is_new`, `is_recommended`, `status`) VALUES
(1, 'СТАХАНОВЕЦ 9.00', 0, 0, 11550, 0, 'СТАХАНОВЕЦ 9.00 - 25.11.21', 'stah.jpg', 'Создан новый многофункциональный аналитический отчет «Аналитика»\r\nСоздан поисковый движок по содержимому файлов на клиентских машинах (онлайн и оффлайн-версии)\r\nПоддержка PostgreSQL\r\nВозможность накладывать скрытые «водяные знаки» на PrintScreen-изображения с целью дальнейшей идентификации\r\nСущественно расширен список и наполнение словарей анализатора рисков по умолчанию\r\nВозможность импорта данных из предустановленных словарей в собственные\r\nТеперь в словарях анализатора рисков можно также указывать exe-файлы без путей для программ\r\nВозможность неявного добавления в словарь списка запрещенных правительством сайтов\r\nВ отчете «Лента активности» теперь также выводится суммарная усредненная информация за весь период построения\r\nДобавлены форматы для DLP-анализатора: .doc, .xls, .ppt, .rtf\r\nТеперь DLP-анализатор в документе может находить более одного совпадения (вкладка «DLP»)\r\nВозможность не генерировать DLP-событие если в документе найдено менее N-совпадений (вкладка «DLP»)\r\nВозможность не передавать теневые копии документов если не сработал DLP-анализ (вкладка «DLP»)\r\nСнижена нагрузка на CPU и потребление RAM в сервере при больших нагрузках\r\nВстроенный Apache Web Server обновлен до 2.4.51 (только для новых установок)\r\nУменьшено кол-во ложноположительных срабатываний при неточном (морфологическом) сравнении слов\r\nДобавлен параметр -nostart при установке клиента с командной строки (для установки без запуска)\r\nТеперь можно мониторить или не мониторить активность/текст для экрана блокировки (Lock) (вкладка «Программы/сайты»)\r\nИсправлен ряд проблем при перехвате посещенных URL в браузере Yandex\r\nИсправлена редкая проблема при перехвате сообщений Skype: приложение Skype не могло подключиться к серверу', 0, 0, 1),
(2, 'СТАХАНОВЕЦ 9.01', 0, 0, 12280, 0, 'СТАХАНОВЕЦ 9.01 - 10.12.21', 'stah.jpg', 'Снижена нагрузка на CPU в сервере при большом кол-ве подключений\r\nСнижена нагрузка на БД при большом кол-ве подключений (могла возникать ошибка «deadlocked transaction»)\r\nВозможность аутентификации для прокси по имени пользователя в домене на клиентских машинах (компьютер — «Общие настройки»)\r\nСобытие «Изображение в буфере обмена» расширено информацией: размер в пикселях и приложение-инициатор копирования\r\nРяд поправок в отчете «Аналитика»', 0, 0, 1),
(3, 'СТАХАНОВЕЦ 9.03', 0, 0, 13650, 0, 'СТАХАНОВЕЦ 9.03 - 17.01.22', 'stah.jpg', 'Поддержка MacOS Monterey (64-bit Intel / 64-bit ARM) для клиентской части\r\nПри синхронизации с AD профилей клиентских настроек можно указывать исключения для сохранения их в БД\r\nУскорена генерация отчетов «Письма (e-mail)», «Буфер обмена», «Анализатор рисков»\r\nТеперь встроенный SQL Server Express используется в 64-битной редакции\r\nПерехват отправляемых файлов в Zoom\r\nВозможность указывать макс. длину clipboard-paste операции для перехвата кейлоггером\r\nВозможность не перехватывать встречи из календаря Outlook\r\nНедокументированные поправки при перехвате почты Outlook\r\nНедокументированные поправки при очистке папки ShadowCopy на сервере и активном использовании отложенного мониторинга\r\nРяд поправок в отчете «Аналитика»', 0, 0, 1),
(4, 'СТАХАНОВЕЦ 9.10', 0, 0, 14128, 0, 'СТАХАНОВЕЦ 9.10 - 04.02.22', 'stah.jpg', 'Теперь серверная часть комплекса может быть запущена в среде Linux\r\nСинхронизация с AD: поддержка PostgreSQL (все режимы кроме синхронизации прав)\r\nСинхронизация с AD: возможность использовать любые атрибуты AD для построения связи руководитель-сотрудник\r\nСинхронизация с AD: поддержка ситуации «более одного руководителя для сотрудника»\r\nСинхронизация с AD: возможность устанавливать любые базовые права по умолчанию для ролей при синхронизации прав\r\nВ установщике обновлены драйверы ODBC для PostgreSQL до последней версии\r\nТеперь событие «Вход пользователя в систему» расширено информацией о типе сессии: RDP или Console\r\nРяд поправок совместимости с MySQL 8\r\nРяд поправок в отчете «Аналитика»\r\nНедокументированные поправки', 0, 0, 1),
(5, 'СТАХАНОВЕЦ 8.86', 0, 0, 10350.5, 0, 'СТАХАНОВЕЦ 8.86 - 29.10.21', 'stah.jpg', 'Уточнен расчет активности пользователя при разблокировке экрана, гибернации и подключении к терминальной сессии\r\nИсправлена проблема: события могли не приходить при неактивной вкладке БОСС-Онлайн в Chrome/Edge\r\nРяд поправок в сетевом драйвере\r\nНедокументированные поправки в серверной части', 0, 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(355) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `avatar` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES
(2, 'Иванов Иван Иванович', 'test', 'test@local.ru', '202cb962ac59075b964b07152d234b70', 'uploads/15698233144.png'),
(3, 'Irene Britskaya', 'essdes', 'essdes.zeras@gmail.com', 'b68868688281fe805caa86bec90b5b0b', 'uploads/1646915059baa414cf2087b981e81ee8809fc7d42e--tehran-iran-old-cameras.jpg'),
(4, 'Irene Britskaya', 'essdes', 'essdes.zeras@gmail.com', '60e0f36950b250f28e4ac83591736a1e', 'uploads/1646916264baa414cf2087b981e81ee8809fc7d42e--tehran-iran-old-cameras.jpg'),
(5, 'Irene Britskaya', 'TRR', 'essdes.zeras@gmail.com', '202cb962ac59075b964b07152d234b70', 'uploads/1646918438'),
(6, 'Ирен Брицкая', 'essdes', 'unevi@mail.ru', '96e79218965eb72c92a549dd5a330112', 'uploads/16469224407dac46496d4453fddbf6a5f091d0a120.jpg'),
(7, 'Alla Amirbegyan', 'Amir', 'amirbegyanas@gmail.com', 'b68868688281fe805caa86bec90b5b0b', 'uploads/1647005232УПАПА.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
