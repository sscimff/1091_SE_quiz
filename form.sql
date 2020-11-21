-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-11-21 16:06:50
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `apply`
--

-- --------------------------------------------------------

--
-- 資料表結構 `form`
--

CREATE TABLE `form` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `dad` text NOT NULL,
  `mom` text NOT NULL,
  `species` text NOT NULL,
  `t_content` text NOT NULL,
  `t_sign` text NOT NULL,
  `s_result` int(100) DEFAULT NULL,
  `s_content` text NOT NULL,
  `s_sign` text NOT NULL,
  `p_sign` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `form`
--

INSERT INTO `form` (`id`, `name`, `dad`, `mom`, `species`, `t_content`, `t_sign`, `s_result`, `s_content`, `s_sign`, `p_sign`, `status`) VALUES
(1, 'a', 'a', 'a', '低收入戶', 'a', 'a', 123, 'a', 'a', 'a', '決行(結案)');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
