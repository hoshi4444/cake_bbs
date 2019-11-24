
## DB
-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 2019 年 11 月 24 日 19:54
-- サーバのバージョン： 5.7.26
-- PHP のバージョン: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `cakebbs`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `postId` int(11) NOT NULL,
  `resId` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `name` varchar(64) NOT NULL,
  `content` text NOT NULL,
  `img_name` varchar(255) DEFAULT NULL,
  `img_ext` varchar(255) DEFAULT NULL,
  `img_size` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `posts`
--

INSERT INTO `posts` (`id`, `postId`, `resId`, `title`, `name`, `content`, `img_name`, `img_ext`, `img_size`, `created`, `modified`) VALUES
(1, 1, 0, 'aaaa', 'aaaa', 'aaaaaa', NULL, NULL, NULL, '2019-11-24 12:30:21', '2019-11-24 12:30:21'),
(2, 2, 0, 'aaaa', 'hoshi', 'hoshino', NULL, NULL, NULL, '2019-11-24 12:30:42', '2019-11-24 12:30:42'),
(3, 3, 0, 'aaaa', '星野', 'bhvkjnlm;,:', NULL, NULL, NULL, '2019-11-24 12:32:53', '2019-11-24 12:32:53'),
(4, 4, 0, 'aaaa', 'neko', 'bbbnm', NULL, NULL, NULL, '2019-11-24 17:28:15', '2019-11-24 17:28:15'),
(5, 5, 0, 'aaaa', 'neko', 'aasdfg', NULL, NULL, NULL, '2019-11-24 17:49:40', '2019-11-24 17:49:40'),
(6, 6, 0, 'aaaa', 'tanuki', 'restdyfughkj', NULL, NULL, NULL, '2019-11-24 18:04:26', '2019-11-24 18:04:26'),
(7, 7, 0, 'aaaa', 'neko', 'segrdhfv', NULL, NULL, NULL, '2019-11-24 18:52:36', '2019-11-24 18:52:36'),
(8, 8, 0, 'aaaa', 'neko', 'segrdhfv', NULL, NULL, NULL, '2019-11-24 18:52:37', '2019-11-24 18:52:37');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
