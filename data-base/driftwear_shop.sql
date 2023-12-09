-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2023 at 07:09 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `driftwear_shop`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `image_front` varchar(255) NOT NULL,
  `image_back` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image_front`, `image_back`) VALUES
(1, 'Basic Black Driftwear Hoodie', 150, '../images/products/hoodie_black_front.png', '../images/products/hoodie_black_back.png'),
(2, 'Basic White Driftwear Hoodie', 150, '../images/products/hoodie_white_front.png', '../images/products/hoodie_white_back.png'),
(3, 'Basic Blue Driftwear Hoodie', 160, '../images/products/hoodie_blue_front.png', '../images/products/hoodie_blue_back.png'),
(4, 'Basic Purple Driftwear Hoodie', 160, '../images/products/hoodie_purple_front.png', '../images/products/hoodie_purple_back.png'),
(5, 'Basic Orange Driftwear Hoodie', 170, '../images/products/hoodie_orange_front.png', '../images/products/hoodie_orange_back.png'),
(6, 'Basic Brown Driftwear Hoodie', 170, '../images/products/hoodie_brown_front.png', '../images/products/hoodie_brown_back.png'),
(7, 'Basic Navy Driftwear Hoodie', 150, '../images/products/hoodie_navy_front.png', '../images/products/hoodie_navy_back.png'),
(8, 'Basic Green Driftwear Hoodie', 150, '../images/products/hoodie_green_front.png', '../images/products/hoodie_green_back.png'),
(9, 'Basic Purple Driftwear Hoodie', 150, '../images/products/hoodie_purple_front.png', '../images/products/hoodie_purple_back.png'),
(10, 'Basic White Driftwear Hoodie', 150, '../images/products/hoodie_white_front.png', '../images/products/hoodie_white_back.png'),
(11, 'Basic Black Driftwear Hoodie', 150, '../images/products/hoodie_black_front.png', '../images/products/hoodie_black_back.png'),
(12, 'Basic Navy Driftwear Hoodie', 150, '../images/products/hoodie_navy_front.png', '../images/products/hoodie_navy_back.png');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(12, 'tomek_stas@onet.pl', '$2y$10$omkCLCXpLkLrlZ9JmbOjgOWh3Y6CY2hIF//TKCMRO3erEzavO165e');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
