-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Сен 18 2023 г., 18:28
-- Версия сервера: 5.7.24
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `store`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(16) NOT NULL,
  `name` varchar(64) NOT NULL,
  `img` int(16) NOT NULL,
  `price` int(16) NOT NULL,
  `description` text NOT NULL,
  `rating` int(16) NOT NULL,
  `count` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `img`, `price`, `description`, `rating`, `count`) VALUES
(6, 'TECNO Смартфон Camon 20 8+256 Гб', 1, 12000, 'Смартфон TECNO Camon 20 дарит новые возможности для фото и видеосъемки. Основная камера 64 Мп с продвинутым модулем RGBW Pro создает превосходные фотографии в темное время суток, а еще помогает снимать яркие видео в высоком разрешении. Фронтальная камера 32 Мп', 4, 10),
(7, 'iPhone Смартфон iPhone XR 64GB', 2, 26000, 'Чехол и бронестекло в подарок при заказе сегодня! Apple Айфон iPhone XR 64GB. Только оригинальная продукция Apple. Юридическая чистота. Приобретая у нас, Вы обезопасите себя от мошенников, продающих не оригинальную технику, краденные телефоны, и получите дополнительную гарантию', 5, 1),
(8, 'INOI Смартфон A72 4/128 GB NFC Space Gray', 3, 7400, 'Смартфон Inoi А170 Black обладает оперативной памятью объемом 4 Гб и встроенным хранилищем емкостью 128 Гб. За производительность отвечает четырехъядерный процессор Unisoc Tiger T310. Корпус выполнен из пластика.', 2, 0),
(9, 'Ноутбук Tecno MEGABOOK T1/ i3 12/256GB/15.6\"/Lunix', 4, 33000, 'Компьютер отличается тонким корпусом 14,8 мм и легким весом 1,48 кг. При этом в MEGABOOK T1 установлена продвинутая энергосистема. Аккумулятор на 60% меньше стандартной батареи. С ним ноутбук способен работать в автономном режиме до 17,5 часов.', 5, 100),
(10, 'Ноутбук Acer Aspire 3 A315-R433 [NX.HVTER.01X]', 5, 20000, 'Acer Aspire A315-23 [NX.HVTER.01X]/Athlon 3050U/DDR4 4Gb/HDD 1Tb/AMD Radeon Graphics/15,6 FHD/NoOS', 2, 10);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
