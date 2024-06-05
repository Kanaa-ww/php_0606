-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- 生成日時: 2024 年 6 月 06 日 00:30
-- サーバのバージョン： 5.7.40-log
-- PHP のバージョン: 8.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `lifeee_book_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `book_table`
--

CREATE TABLE `book_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `memo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `book_table`
--

INSERT INTO `book_table` (`id`, `name`, `url`, `genre`, `memo`, `date`) VALUES
(10, 'JavaScript入門講座', 'https://www.amazon.co.jp/%E3%80%90Amazon-co-jp-%E9%99%90%E5%AE%9A%E3%80%911%E5%86%8A%E3%81%A7%E3%81%99%E3%81%B9%E3%81%A6%E8%BA%AB%E3%81%AB%E3%81%A4%E3%81%8FJavaScript%E5%85%A5%E9%96%80%E8%AC%9B%E5%BA%A7-DL%E7%89%B9%E5%85%B8-JavaScript%E3%83%81%E3%83%BC%E3%83%88%E3%82%B7%E3%83%BC%E3%83%88-%EF%BC%91%E5%86%8A%E3%81%A7%E3%81%99%E3%81%B9%E3%81%A6%E8%BA%AB%E3%81%AB%E3%81%A4%E3%81%8F/dp/4815615756?ref_=Oct_d_obs_d_525592_4&pd_rd_w=aCloB&content-id=amzn1.sym.03e92602-1bcb-4342-ae0e-abe8450b6d22&pf_rd_p=03e92602-1bcb-4342-ae0e-abe8450b6d22&pf_rd_r=CAXGAZ0NQSJVADABWXJG&pd_rd_wg=dLMlL&pd_rd_r=414b346b-3895-46d7-8623-aca9cd28b56d&pd_rd_i=4815615756', '0', '', '2024-06-05'),
(11, '覚悟の論理 戦略的に考えれば進む道はおのずと決まる', '', '0', '', '2024-06-05'),
(13, 'りんりん', '', '0', '', '2024-06-05'),
(14, 'かな', '', '0', '', '2024-06-05'),
(16, '泉', '', '0', '', '2024-06-05'),
(17, '高沢佳奈', '', '', '', '2024-06-05'),
(18, '高沢佳奈', '', '', '', '2024-06-05'),
(19, '佐藤', 'https://www.amazon.co.jp/%E8%A6%9A%E6%82%9F%E3%81%AE%E8%AB%96%E7%90%86-%E6%88%A6%E7%95%A5%E7%9A%84%E3%81%AB%E8%80%83%E3%81%88%E3%82%8C%E3%81%B0%E9%80%B2%E3%82%80%E9%81%93%E3%81%AF%E3%81%8A%E3%81%AE%E3%81%9A%E3%81%A8%E6%B1%BA%E3%81%BE%E3%82%8B-%E7%9F%B3%E4%B8%B8-%E4%BC%B8%E4%BA%8C/dp/479933042X/ref=zg_bs_g_466282_d_sccl_11/355-7638255-5793321?psc=1', '', '', '2024-06-05'),
(20, '佐藤', 'https://www.amazon.co.jp/%E8%A6%9A%E6%82%9F%E3%81%AE%E8%AB%96%E7%90%86-%E6%88%A6%E7%95%A5%E7%9A%84%E3%81%AB%E8%80%83%E3%81%88%E3%82%8C%E3%81%B0%E9%80%B2%E3%82%80%E9%81%93%E3%81%AF%E3%81%8A%E3%81%AE%E3%81%9A%E3%81%A8%E6%B1%BA%E3%81%BE%E3%82%8B-%E7%9F%B3%E4%B8%B8-%E4%BC%B8%E4%BA%8C/dp/479933042X/ref=zg_bs_g_466282_d_sccl_11/355-7638255-5793321?psc=1', '', '', '2024-06-05'),
(21, '', 'https://www.amazon.co.jp/%E8%A6%9A%E6%82%9F%E3%81%AE%E8%AB%96%E7%90%86-%E6%88%A6%E7%95%A5%E7%9A%84%E3%81%AB%E8%80%83%E3%81%88%E3%82%8C%E3%81%B0%E9%80%B2%E3%82%80%E9%81%93%E3%81%AF%E3%81%8A%E3%81%AE%E3%81%9A%E3%81%A8%E6%B1%BA%E3%81%BE%E3%82%8B-%E7%9F%B3%E4%B8%B8-%E4%BC%B8%E4%BA%8C/dp/479933042X/ref=zg_bs_g_466282_d_sccl_11/355-7638255-5793321?psc=1', '', '', '2024-06-05');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `book_table`
--
ALTER TABLE `book_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `book_table`
--
ALTER TABLE `book_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
