-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 05, 2021 lúc 06:01 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `management`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pj_apply`
--

CREATE TABLE `pj_apply` (
  `apply_id` int(10) NOT NULL,
  `apply_pj` int(100) NOT NULL,
  `apply_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_noti`
--

CREATE TABLE `tb_noti` (
  `noti_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `noti_info` text NOT NULL,
  `noti_createddate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tb_noti`
--

INSERT INTO `tb_noti` (`noti_id`, `user_id`, `noti_info`, `noti_createddate`) VALUES
(1, 4, 'ABC', '2021-11-04 22:09:10'),
(2, 35, 'Bạn cần điền đầy đủ vào form', '2021-11-04 22:31:03'),
(3, 36, 'Bạn cần đẩy nhanh tiến độ làm việc', '2021-11-04 22:34:29'),
(4, 35, 'Bạn cần điền đầy đủ vào form', '2021-11-04 22:34:41'),
(5, 35, 'Bạn cần đẩy nhanh tiến độ làm việc', '2021-11-04 22:35:06'),
(6, 35, 'Bạn cần điền đầy đủ vào form', '2021-11-04 22:35:21'),
(7, 35, 'Bạn cần điền đầy đủ vào form', '2021-11-05 09:31:15'),
(8, 35, 'Alo gửi được không', '2021-11-05 09:38:18'),
(9, 35, 'Gửi đi', '2021-11-05 10:12:52'),
(10, 35, 'Gửi đi', '2021-11-05 10:13:24'),
(11, 35, 'Gửi đi', '2021-11-05 10:13:27'),
(12, 35, 'Gửi đi', '2021-11-05 10:18:25'),
(13, 35, 'Gửi đi', '2021-11-05 10:22:40'),
(14, 35, 'Gửi đi', '2021-11-05 10:22:44'),
(15, 35, 'Gửi đi', '2021-11-05 10:22:46'),
(16, 35, 'Gửi đi', '2021-11-05 10:25:07'),
(17, 35, 'Bạn cần đẩy nhanh tiến độ làm việc aaa', '2021-11-05 10:26:51'),
(18, 35, 'Can u hear me ????', '2021-11-05 10:28:14'),
(19, 35, 'Bạn cần đẩy nhanh tiến độ làm việc aaaaa', '2021-11-05 10:44:12'),
(20, 35, 'Bạn cần đẩy nhanh tiến độ làm việc aaa', '2021-11-05 10:55:09'),
(21, 35, 'Bạn cần đẩy nhanh tiến độ làm việc', '2021-11-05 10:58:50'),
(22, 0, '', '2021-11-05 10:59:08'),
(23, 35, 'Gửi đi', '2021-11-05 10:59:25'),
(24, 35, 'Gửi đi', '2021-11-05 10:59:39'),
(25, 35, 'Bạn cần đẩy nhanh tiến độ làm việc aaa', '2021-11-05 11:00:12'),
(26, 35, 'Bạn cần đẩy nhanh tiến độ làm việc aaa', '2021-11-05 11:01:54'),
(27, 35, 'Bạn cần đẩy nhanh tiến độ làm việc aaa', '2021-11-05 11:03:01'),
(28, 35, 'Bạn cần điền đầy đủ vào form', '2021-11-05 11:03:13'),
(29, 35, 'Bạn cần đẩy nhanh tiến độ làm việc aaa', '2021-11-05 11:03:53'),
(30, 35, 'Bạn cần điền đầy đủ vào form', '2021-11-05 11:06:44'),
(31, 35, 'Bạn cần đẩy nhanh tiến độ làm việc aaa', '2021-11-05 11:07:09'),
(32, 35, 'Bạn cần điền đầy đủ vào form', '2021-11-05 11:16:15'),
(33, 35, 'Bạn cần điền đầy đủ vào form', '2021-11-05 11:16:57'),
(34, 35, 'Bạn cần đẩy nhanh tiến độ làm việc', '2021-11-05 11:35:11'),
(35, 35, 'Bạn cần đẩy nhanh tiến độ làm việc', '2021-11-05 11:38:17'),
(36, 35, 'Bạn cần điền đầy đủ vào form', '2021-11-05 11:38:47'),
(37, 35, 'Bạn cần điền đầy đủ vào form', '2021-11-05 11:38:59'),
(38, 35, 'Bạn cần đẩy nhanh tiến độ làm việc', '2021-11-05 11:39:55'),
(39, 35, 'Bạn cần đẩy nhanh tiến độ làm việc', '2021-11-05 11:40:55'),
(40, 35, 'Bạn cần đẩy nhanh tiến độ làm việc', '2021-11-05 11:40:57'),
(41, 35, 'Bạn cần đẩy nhanh tiến độ làm việc', '2021-11-05 11:41:11'),
(42, 35, 'Bạn cần điền đầy đủ vào form', '2021-11-05 11:41:18'),
(43, 35, 'Bạn cần điền đầy đủ vào form', '2021-11-05 11:41:18'),
(44, 35, 'Bạn cần điền đầy đủ vào form', '2021-11-05 11:41:20'),
(45, 35, 'Bạn cần đẩy nhanh tiến độ làm việc aaa', '2021-11-05 11:42:14'),
(46, 36, 'Bạn cần đẩy nhanh tiến độ làm việc aaa', '2021-11-05 14:24:03'),
(47, 36, 'Bạn cần đẩy nhanh tiến độ làm việc aaa', '2021-11-05 14:24:26'),
(48, 39, 'Bạn cần đẩy nhanh tiến độ làm việc aaaaa', '2021-11-05 14:26:47'),
(49, 36, 'Bạn cần đẩy nhanh tiến độ làm việc aaa', '2021-11-05 14:28:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_project`
--

CREATE TABLE `tb_project` (
  `pj_id` int(100) UNSIGNED NOT NULL,
  `pj_name` varchar(100) NOT NULL,
  `pj_note` varchar(300) NOT NULL,
  `pj_start` date NOT NULL,
  `pj_end` date NOT NULL,
  `pj_status` tinyint(4) NOT NULL,
  `pj_manager` int(10) UNSIGNED NOT NULL,
  `pj_userids` text NOT NULL,
  `pj_createdtime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tb_project`
--

INSERT INTO `tb_project` (`pj_id`, `pj_name`, `pj_note`, `pj_start`, `pj_end`, `pj_status`, `pj_manager`, `pj_userids`, `pj_createdtime`) VALUES
(1, 'hiệp', 'ádasdasd', '2021-11-13', '2021-11-12', 1, 3, 'Array', '2021-11-05 15:50:08'),
(3, 'phong', 'avdgs', '2021-11-05', '2021-11-18', 2, 3, '', '2021-11-05 16:03:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_task`
--

CREATE TABLE `tb_task` (
  `task_id` int(100) UNSIGNED NOT NULL,
  `task_name` varchar(100) NOT NULL,
  `task_note` varchar(300) NOT NULL,
  `created_on` date NOT NULL DEFAULT current_timestamp(),
  `pj_id` int(100) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `task_start` date NOT NULL,
  `task_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tb_task`
--

INSERT INTO `tb_task` (`task_id`, `task_name`, `task_note`, `created_on`, `pj_id`, `user_id`, `task_start`, `task_end`) VALUES
(5, 'ádasđá', '', '2021-11-05', 1, 3, '2021-11-05', '2021-11-16'),
(6, 'làm việc 55555', 'ádadads', '2021-11-05', 3, 3, '2021-11-05', '2021-11-20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_nick` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_code` varchar(300) NOT NULL,
  `user_level` tinyint(1) NOT NULL DEFAULT 0,
  `user_regisdate` datetime NOT NULL DEFAULT current_timestamp(),
  `user_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_nick`, `user_name`, `user_pass`, `user_email`, `user_code`, `user_level`, `user_regisdate`, `user_status`) VALUES
(1, 'admin', 'admin', '$2y$10$gQJGn8QlRUy85yCP66EpHuARN2anX06ku5HSni51SxoGkwjP4511y', 'admin@admin.com', '', 1, '2021-11-01 16:54:46', 1),
(3, 'Hiep', 'hiep123', '$2y$10$gQJGn8QlRUy85yCP66EpHuARN2anX06ku5HSni51SxoGkwjP4511y', 'hiep123@gmail.com', '', 0, '2021-11-02 10:31:35', 1),
(4, 'Nam', 'Nam', '$2y$10$gQJGn8QlRUy85yCP66EpHuARN2anX06ku5HSni51SxoGkwjP4511y', 'Nam@gmail.com', '7c98b98cd2208314a6d82b3524e7d09b', 0, '2021-11-02 10:34:36', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_job` varchar(100) NOT NULL,
  `user_dob` date NOT NULL,
  `user_phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `pj_apply`
--
ALTER TABLE `pj_apply`
  ADD PRIMARY KEY (`apply_id`);

--
-- Chỉ mục cho bảng `tb_noti`
--
ALTER TABLE `tb_noti`
  ADD PRIMARY KEY (`noti_id`);

--
-- Chỉ mục cho bảng `tb_project`
--
ALTER TABLE `tb_project`
  ADD PRIMARY KEY (`pj_id`),
  ADD KEY `pj_manager` (`pj_manager`);

--
-- Chỉ mục cho bảng `tb_task`
--
ALTER TABLE `tb_task`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `pj_id` (`pj_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_nick` (`user_nick`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Chỉ mục cho bảng `user_info`
--
ALTER TABLE `user_info`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `pj_apply`
--
ALTER TABLE `pj_apply`
  MODIFY `apply_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_noti`
--
ALTER TABLE `tb_noti`
  MODIFY `noti_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `tb_project`
--
ALTER TABLE `tb_project`
  MODIFY `pj_id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tb_task`
--
ALTER TABLE `tb_task`
  MODIFY `task_id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tb_project`
--
ALTER TABLE `tb_project`
  ADD CONSTRAINT `tb_project_ibfk_1` FOREIGN KEY (`pj_manager`) REFERENCES `tb_user` (`user_id`);

--
-- Các ràng buộc cho bảng `tb_task`
--
ALTER TABLE `tb_task`
  ADD CONSTRAINT `tb_task_ibfk_1` FOREIGN KEY (`pj_id`) REFERENCES `tb_project` (`pj_id`),
  ADD CONSTRAINT `tb_task_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`user_id`);

--
-- Các ràng buộc cho bảng `user_info`
--
ALTER TABLE `user_info`
  ADD CONSTRAINT `user_info_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
