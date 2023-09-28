-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 28, 2023 at 05:43 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(16) NOT NULL,
  `name` varchar(64) NOT NULL,
  `img` varchar(16) NOT NULL,
  `price` int(16) NOT NULL,
  `description` text NOT NULL,
  `rating` int(16) NOT NULL,
  `count` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `img`, `price`, `description`, `rating`, `count`) VALUES
(6, 'TECNO Смартфон Camon 20 8+256 Гб', '1', 12000, 'Смартфон TECNO Camon 20 дарит новые возможности для фото и видеосъемки. Основная камера 64 Мп с продвинутым модулем RGBW Pro создает превосходные фотографии в темное время суток, а еще помогает снимать яркие видео в высоком разрешении. Фронтальная камера 32 Мп', 4, 9),
(7, 'iPhone Смартфон iPhone XR 64GB', '2', 26000, 'Чехол и бронестекло в подарок при заказе сегодня! Apple Айфон iPhone XR 64GB. Только оригинальная продукция Apple. Юридическая чистота. Приобретая у нас, Вы обезопасите себя от мошенников, продающих не оригинальную технику, краденные телефоны, и получите дополнительную гарантию', 5, 3),
(8, 'INOI Смартфон A72 4/128 GB NFC Space Gray', '3', 7400, 'Смартфон Inoi А170 Black обладает оперативной памятью объемом 4 Гб и встроенным хранилищем емкостью 128 Гб. За производительность отвечает четырехъядерный процессор Unisoc Tiger T310. Корпус выполнен из пластика.', 2, 2),
(9, 'Ноутбук Tecno MEGABOOK T1/ i3 12/256GB/15.6\"/Lunix', '4', 33000, 'Компьютер отличается тонким корпусом 14,8 мм и легким весом 1,48 кг. При этом в MEGABOOK T1 установлена продвинутая энергосистема. Аккумулятор на 60% меньше стандартной батареи. С ним ноутбук способен работать в автономном режиме до 17,5 часов.', 5, 100),
(10, 'Ноутбук Acer Aspire 3 A315-R433 [NX.HVTER.01X]', '5', 20000, 'Acer Aspire A315-23 [NX.HVTER.01X]/Athlon 3050U/DDR4 4Gb/HDD 1Tb/AMD Radeon Graphics/15,6 FHD/NoOS', 2, 10),
(18, '23', '8', 999, '', 0, 999);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'email@gmail', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
