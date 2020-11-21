-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-11-21 09:48:52
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
  `status` int(10) NOT NULL,
  `t_content` text NOT NULL,
  `t_sign` text NOT NULL,
  `s_result` int(100) NOT NULL,
  `s_sign` text NOT NULL,
  `p_sign` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `form`
--

INSERT INTO `form` (`id`, `name`, `dad`, `mom`, `species`, `status`, `t_content`, `t_sign`, `s_result`, `s_sign`, `p_sign`) VALUES
(2, 'c', 'd', 'd', '中低收入戶', 0, '', '', 0, '', ''),
(3, 'c', 'd', 'd', '家庭突發因素', 0, '', '', 0, '', ''),
(4, 'c', 'd', 'd', '家庭突發因素', 0, '', '', 0, '', ''),
(9, 'q', 's', 's', '中低收入戶', 0, '', '', 0, '', ''),
(8, 'q', 's', 's', '中低收入戶', 0, '', '', 0, '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
