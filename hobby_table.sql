-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2020 年 12 朁E28 日 09:56
-- サーバのバージョン： 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gsacf_d07_19`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `hobby_table`
--

CREATE TABLE `hobby_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hobby` char(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `hobby_table`
--

INSERT INTO `hobby_table` (`id`, `name`, `sex`, `hobby`) VALUES
(24, '阿部　絵里', '女', '旅行'),
(25, '進藤 理恵', '男', '音楽'),
(26, '田中', '男', '読書'),
(27, '田中', '男', '読書'),
(28, '佐藤', '男', '仕事'),
(29, '佐藤', '男', '音楽'),
(30, '佐藤', '男', '音楽'),
(31, '', '女', '旅行'),
(32, 'シンドウリエ', '女', '旅行'),
(33, '近藤', '男', '映画'),
(34, 'タナベ', '男', '仕事'),
(35, 'タナベ', '男', '仕事'),
(36, 'タナベ', '男', '仕事'),
(37, 'シンドウリエ', '男', '旅行'),
(38, '栄えｒが絵ｒｇ', '女', '音楽'),
(39, '高橋', '男', '旅行'),
(40, '田中', '女', '音楽'),
(41, '進藤理恵', '男', '音楽'),
(42, '進藤 理恵', '女', '読書');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hobby_table`
--
ALTER TABLE `hobby_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hobby_table`
--
ALTER TABLE `hobby_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
