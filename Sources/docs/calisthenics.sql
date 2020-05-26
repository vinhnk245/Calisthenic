-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 03:46 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calisthenics`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID` int(11) NOT NULL,
  `Name` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `Name`) VALUES
(1, 'bicep'),
(2, 'tricep'),
(3, 'forearms'),
(4, 'shoulder'),
(5, 'abs'),
(6, 'cardio'),
(7, 'chest'),
(8, 'back'),
(9, 'leg'),
(10, 'nutrition');

-- --------------------------------------------------------

--
-- Table structure for table `exercise`
--

CREATE TABLE `exercise` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `UrlYT` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exercise`
--

INSERT INTO `exercise` (`ID`, `Name`, `UrlYT`) VALUES
(1, 'Jumping Jacks', 'iSSAk4XCsRA'),
(2, 'Push-Up', 'wxhNoKZlfY8'),
(3, 'Diamond Push-Up', 'J0DnG1_S92I'),
(4, 'Clapping Push-Up', 'EYwWCgM198U'),
(5, 'Pull-Up', 'XB_7En-zf_M'),
(6, 'Chin-Up', 'b-ztMQpj8yc'),
(7, 'Wide Grip Chin-Up', 'w_PxgjPlU6s'),
(8, 'Wide Grip Pull-Up', 'iywjqUo5nmU'),
(9, 'Close Grip Pull-Up', 'j--ftfgTL5I'),
(10, 'Close Grip Chin-up', '6bTcFTRoqcw'),
(11, 'Superman Push-up', '6iam4u23zuM'),
(12, 'High Knee', 'oDdkytliOqE'),
(13, 'Archer Push-Up', 'h_1-gJEaksI'),
(14, 'Hindu Push-Up', 'I-KWxLXWBN0'),
(15, 'Planche', 'UZ-1jwG7aQ4'),
(16, 'One Arm Push-Up', 'JiHkxqbhNuw'),
(17, 'Crunches', 'Xyd_fa5zoEU'),
(18, 'Cross Arm Crunches', 'wgaIH-0rvQw'),
(19, 'Russian Twist', 'wkD8rjkodUI'),
(20, 'Mountain Climber', 'nmwgirgXLYM'),
(21, 'Plank', 'pSHjTRCQxIw'),
(22, 'Flutter Kicks', 'ANVdMDaYRts'),
(23, 'Clapping Crunches', 'moaZFyRi0sM'),
(24, 'Triple Clap Push-Up', '0hfmJaydq4o'),
(25, 'Butt Bridge', '8bbE64NuDTU'),
(26, 'V-Up', 'iP2fjvG0g3w'),
(27, 'Reverse Crunches', 'hyv14e2QDq0');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`ID`) VALUES
(1),
(2),
(3);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `ID` int(11) NOT NULL,
  `Title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci,
  `Content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci,
  `ShortContent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci,
  `LinkYoutube` text,
  `Image` text,
  `CategoryID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`ID`, `Title`, `Content`, `ShortContent`, `LinkYoutube`, `Image`, `CategoryID`) VALUES
(2, 'TAY TRƯỚC VỚI 2 CHIẾC GHẾ? ', '- Dụng cụ đơn giản: \r\n  2 chiếc ghế\r\n- Để 2 tay lên ghế \r\n bắt đầu tập', 'Bài tập cho tay trước TẠI NHÀ (và KHÔNG DỄ!)', '4Vg4Pai-XYI', 'bicep1', 1),
(3, 'TAY TRƯỚC VỚI 3 CHIẾC GHẾ? ', '- Dụng cụ đơn giản: \r\n  2 chiếc ghế\r\n- Để 2 tay lên ghế \r\n bắt đầu tập', 'Bài tập cho tay trước TẠI NHÀ (và KHÔNG DỄ!)', '4Vg4Pai-XYI', 'bicep2', 1),
(4, 'TAY TRƯỚC VỚI 4 CHIẾC GHẾ? ', '- Dụng cụ đơn giản: \r\n  2 chiếc ghế\r\n- Để 2 tay lên ghế \r\n bắt đầu tập', 'Bài tập cho tay trước TẠI NHÀ (và KHÔNG DỄ!)', '4Vg4Pai-XYI', 'bicep3', 1),
(5, 'TAY TRƯỚC VỚI 0 CHIẾC GHẾ? ', '- Dụng cụ đơn giản: \r\n  2 chiếc ghế\r\n- Để 2 tay lên ghế \r\n bắt đầu tập', 'Bài tập cho tay trước TẠI NHÀ (và KHÔNG DỄ!)', '4Vg4Pai-XYI', 'bicep4', 1),
(6, 'tại sao', 'contentttttttttttttt', 'shorrt content', 'test', 'bicep1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `progress_training`
--

CREATE TABLE `progress_training` (
  `UserID` int(11) NOT NULL,
  `LevelID` int(11) NOT NULL,
  `DayTrained` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progress_training`
--

INSERT INTO `progress_training` (`UserID`, `LevelID`, `DayTrained`) VALUES
(2, 1, '0'),
(2, 2, '0'),
(2, 3, '0'),
(3, 1, '7'),
(3, 2, '0'),
(3, 3, '0'),
(4, 1, '1,2'),
(4, 2, '0'),
(4, 3, '0'),
(5, 1, '0,1,2,3'),
(5, 2, '0'),
(5, 3, '0'),
(6, 1, '0'),
(6, 2, '0'),
(6, 3, '0'),
(7, 1, '0'),
(7, 2, '0'),
(7, 3, '0'),
(8, 1, '0'),
(8, 2, '0'),
(8, 3, '0'),
(9, 1, '0'),
(9, 2, '0'),
(9, 3, '0'),
(10, 1, '0'),
(10, 2, '0'),
(10, 3, '0'),
(11, 1, '0'),
(11, 2, '0'),
(11, 3, '0'),
(12, 1, '0'),
(12, 2, '0'),
(12, 3, '0'),
(13, 1, '0'),
(13, 2, '0'),
(13, 3, '0'),
(14, 1, '0'),
(14, 2, '0'),
(14, 3, '0'),
(15, 1, '0'),
(15, 2, '0'),
(15, 3, '0'),
(16, 1, '0,1,2'),
(16, 2, '0'),
(16, 3, '0'),
(17, 1, '0'),
(17, 2, '0'),
(17, 3, '0'),
(18, 1, '0'),
(18, 2, '0'),
(18, 3, '0'),
(19, 1, '0'),
(19, 2, '0'),
(19, 3, '0'),
(20, 1, '0'),
(20, 2, '0'),
(20, 3, '0'),
(21, 1, '0'),
(21, 2, '0'),
(21, 3, '0'),
(22, 1, '0'),
(22, 2, '0'),
(22, 3, '0'),
(23, 1, '0'),
(23, 2, '0'),
(23, 3, '0'),
(24, 1, '0'),
(24, 2, '0'),
(24, 3, '0'),
(25, 1, '0'),
(25, 2, '0'),
(25, 3, '0'),
(26, 1, '0'),
(26, 2, '0'),
(26, 3, '0'),
(27, 1, '0'),
(27, 2, '0'),
(27, 3, '0');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `LevelID` int(11) NOT NULL,
  `Day` int(11) NOT NULL,
  `ExerciseID` int(11) NOT NULL,
  `Set` int(11) DEFAULT NULL,
  `Rep` int(11) DEFAULT NULL,
  `BreakTime` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`LevelID`, `Day`, `ExerciseID`, `Set`, `Rep`, `BreakTime`) VALUES
(1, 1, 1, 30, 1, '30s'),
(1, 1, 2, 2, 10, '30s'),
(1, 1, 3, 3, 5, '30s'),
(1, 1, 12, 1, 50, '30s'),
(1, 2, 1, 1, 30, '30s'),
(1, 2, 12, 50, 1, '30s'),
(1, 2, 17, 2, 10, '30s'),
(1, 2, 21, 1, 60, '30s'),
(1, 2, 23, 2, 6, '30s'),
(1, 3, 5, 20, 1, '30s'),
(1, 3, 6, 10, 2, '10s'),
(1, 3, 8, 25, 2, '35s'),
(1, 4, 3, 30, 1, '0s'),
(1, 4, 5, 20, 1, '30s'),
(1, 4, 7, 18, 2, '40s'),
(1, 4, 9, 15, 3, '30s'),
(1, 5, 20, 30, 1, '0s'),
(1, 5, 23, 20, 1, '10s'),
(1, 5, 24, 15, 3, '25s'),
(1, 5, 25, 15, 3, '30s'),
(1, 6, 4, 20, 1, '10s'),
(1, 6, 10, 15, 3, '30s'),
(1, 6, 11, 30, 1, '0s'),
(1, 6, 12, 15, 3, '25s'),
(1, 6, 13, 40, 1, '0s'),
(1, 6, 14, 15, 3, '10s'),
(1, 7, 5, 15, 3, '30s'),
(1, 7, 8, 15, 3, '25s'),
(1, 7, 13, 40, 1, '0s'),
(1, 7, 14, 20, 1, '10s'),
(1, 7, 20, 30, 1, '0s'),
(1, 7, 25, 15, 3, '10s'),
(1, 8, 2, 20, 1, '10s'),
(1, 8, 6, 15, 3, '30s'),
(1, 8, 10, 15, 3, '10s'),
(1, 8, 17, 15, 3, '25s'),
(1, 8, 18, 30, 1, '0s'),
(1, 8, 24, 40, 1, '0s'),
(1, 9, 1, 20, 1, '10s'),
(1, 9, 5, 15, 3, '30s'),
(1, 9, 8, 30, 1, '0s'),
(1, 9, 11, 40, 1, '0s'),
(1, 9, 20, 15, 3, '10s'),
(1, 9, 23, 15, 3, '25s'),
(1, 10, 7, 15, 3, '10s'),
(1, 10, 8, 30, 1, '0s'),
(1, 10, 10, 40, 1, '0s'),
(1, 10, 15, 15, 3, '30s'),
(1, 10, 22, 20, 1, '10s'),
(1, 10, 23, 15, 3, '25s'),
(1, 11, 6, 15, 3, '25s'),
(1, 11, 8, 20, 1, '10s'),
(1, 11, 11, 30, 1, '0s'),
(1, 11, 12, 15, 3, '10s'),
(1, 11, 19, 40, 1, '0s'),
(1, 11, 20, 15, 3, '30s'),
(1, 12, 4, 20, 1, '10s'),
(1, 12, 10, 15, 3, '30s'),
(1, 12, 11, 30, 1, '0s'),
(1, 12, 12, 15, 3, '25s'),
(1, 12, 13, 40, 1, '0s'),
(1, 12, 14, 15, 3, '10s'),
(2, 1, 1, 20, 1, '10s'),
(2, 1, 2, 15, 3, '30s'),
(2, 1, 3, 30, 1, '0s'),
(2, 1, 4, 15, 3, '25s'),
(2, 1, 5, 40, 1, '0s'),
(2, 1, 6, 15, 3, '10s'),
(2, 2, 7, 20, 1, '10s'),
(2, 2, 8, 15, 3, '30s'),
(2, 2, 9, 30, 1, '0s'),
(2, 2, 10, 15, 3, '25s'),
(2, 2, 11, 40, 1, '0s'),
(2, 2, 12, 15, 3, '10s'),
(2, 3, 13, 20, 1, '10s'),
(2, 3, 14, 15, 3, '30s'),
(2, 3, 15, 30, 1, '0s'),
(2, 3, 16, 15, 3, '25s'),
(2, 3, 17, 40, 1, '0s'),
(2, 3, 18, 15, 3, '10s'),
(2, 4, 19, 20, 1, '10s'),
(2, 4, 20, 15, 3, '30s'),
(2, 4, 21, 30, 1, '0s'),
(2, 4, 22, 15, 3, '25s'),
(2, 4, 23, 40, 1, '0s'),
(2, 4, 24, 15, 3, '10s'),
(2, 5, 1, 20, 1, '10s'),
(2, 5, 2, 15, 3, '30s'),
(2, 5, 3, 30, 1, '0s'),
(2, 5, 4, 15, 3, '25s'),
(2, 5, 5, 40, 1, '0s'),
(2, 5, 6, 15, 3, '10s'),
(2, 6, 1, 20, 1, '10s'),
(2, 6, 2, 15, 3, '30s'),
(2, 6, 3, 30, 1, '0s'),
(2, 6, 4, 15, 3, '25s'),
(2, 6, 5, 40, 1, '0s'),
(2, 6, 6, 15, 3, '10s'),
(2, 7, 7, 20, 1, '10s'),
(2, 7, 8, 15, 3, '30s'),
(2, 7, 9, 30, 1, '0s'),
(2, 7, 10, 15, 3, '25s'),
(2, 7, 11, 40, 1, '0s'),
(2, 7, 12, 15, 3, '10s'),
(2, 8, 13, 20, 1, '10s'),
(2, 8, 14, 15, 3, '30s'),
(2, 8, 15, 30, 1, '0s'),
(2, 8, 16, 15, 3, '25s'),
(2, 8, 17, 40, 1, '0s'),
(2, 8, 18, 15, 3, '10s'),
(2, 9, 19, 20, 1, '10s'),
(2, 9, 20, 15, 3, '30s'),
(2, 9, 21, 30, 1, '0s'),
(2, 9, 22, 15, 3, '25s'),
(2, 9, 23, 40, 1, '0s'),
(2, 9, 24, 15, 3, '10s'),
(2, 10, 1, 20, 1, '10s'),
(2, 10, 2, 15, 3, '30s'),
(2, 10, 3, 30, 1, '0s'),
(2, 10, 4, 15, 3, '25s'),
(2, 10, 5, 40, 1, '0s'),
(2, 10, 6, 15, 3, '10s'),
(2, 11, 7, 15, 3, '10s'),
(2, 11, 8, 40, 1, '0s'),
(2, 11, 9, 15, 3, '25s'),
(2, 11, 10, 30, 1, '0s'),
(2, 11, 11, 15, 3, '30s'),
(2, 11, 12, 20, 1, '10s'),
(2, 12, 20, 15, 3, '10s'),
(2, 12, 21, 40, 1, '0s'),
(2, 12, 22, 15, 3, '25s'),
(2, 12, 23, 30, 1, '0s'),
(2, 12, 24, 15, 3, '30s'),
(2, 12, 25, 20, 1, '10s'),
(3, 1, 1, 20, 1, '10s'),
(3, 1, 2, 15, 3, '30s'),
(3, 1, 3, 30, 1, '0s'),
(3, 1, 4, 15, 3, '25s'),
(3, 1, 5, 40, 1, '0s'),
(3, 1, 6, 15, 3, '10s'),
(3, 2, 7, 15, 3, '10s'),
(3, 2, 8, 40, 1, '0s'),
(3, 2, 9, 15, 3, '25s'),
(3, 2, 10, 30, 1, '0s'),
(3, 2, 11, 15, 3, '30s'),
(3, 2, 12, 20, 1, '10s'),
(3, 3, 13, 15, 3, '10s'),
(3, 3, 14, 40, 1, '0s'),
(3, 3, 15, 15, 3, '25s'),
(3, 3, 16, 30, 1, '0s'),
(3, 3, 17, 15, 3, '30s'),
(3, 3, 18, 20, 1, '10s'),
(3, 4, 19, 15, 3, '10s'),
(3, 4, 20, 40, 1, '0s'),
(3, 4, 21, 15, 3, '25s'),
(3, 4, 22, 30, 1, '0s'),
(3, 4, 23, 15, 3, '30s'),
(3, 4, 24, 20, 1, '10s'),
(3, 5, 1, 20, 1, '10s'),
(3, 5, 2, 15, 3, '30s'),
(3, 5, 3, 30, 1, '0s'),
(3, 5, 4, 15, 3, '25s'),
(3, 5, 5, 40, 1, '0s'),
(3, 5, 6, 15, 3, '10s'),
(3, 6, 1, 20, 1, '10s'),
(3, 6, 2, 15, 3, '30s'),
(3, 6, 3, 30, 1, '0s'),
(3, 6, 4, 15, 3, '25s'),
(3, 6, 5, 40, 1, '0s'),
(3, 6, 6, 15, 3, '10s'),
(3, 7, 7, 15, 3, '10s'),
(3, 7, 8, 40, 1, '0s'),
(3, 7, 9, 15, 3, '25s'),
(3, 7, 10, 30, 1, '0s'),
(3, 7, 11, 15, 3, '30s'),
(3, 7, 12, 20, 1, '10s'),
(3, 8, 13, 15, 3, '10s'),
(3, 8, 14, 40, 1, '0s'),
(3, 8, 15, 15, 3, '25s'),
(3, 8, 16, 30, 1, '0s'),
(3, 8, 17, 15, 3, '30s'),
(3, 8, 18, 20, 1, '10s'),
(3, 9, 19, 15, 3, '10s'),
(3, 9, 20, 40, 1, '0s'),
(3, 9, 21, 15, 3, '25s'),
(3, 9, 22, 30, 1, '0s'),
(3, 9, 23, 15, 3, '30s'),
(3, 9, 24, 20, 1, '10s'),
(3, 10, 1, 20, 1, '10s'),
(3, 10, 2, 15, 3, '30s'),
(3, 10, 3, 30, 1, '0s'),
(3, 10, 4, 15, 3, '25s'),
(3, 10, 5, 40, 1, '0s'),
(3, 10, 6, 15, 3, '10s'),
(3, 11, 7, 20, 1, '10s'),
(3, 11, 8, 15, 3, '30s'),
(3, 11, 9, 30, 1, '0s'),
(3, 11, 10, 15, 3, '25s'),
(3, 11, 11, 40, 1, '0s'),
(3, 11, 12, 15, 3, '10s'),
(3, 12, 16, 15, 3, '10s'),
(3, 12, 21, 20, 1, '10s'),
(3, 12, 22, 15, 3, '30s'),
(3, 12, 23, 30, 1, '0s'),
(3, 12, 24, 15, 3, '25s'),
(3, 12, 25, 40, 1, '0s');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Account` text,
  `Pass` text,
  `Username` text,
  `Email` text,
  `Type` int(11) DEFAULT NULL,
  `CreateDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Account`, `Pass`, `Username`, `Email`, `Type`, `CreateDate`) VALUES
(1, 'hnim', '123456', '123456', 'hnim@gmail.com', 1, '0000-00-00'),
(2, 'hnim2', '$2y$10$raWiP/e5hS9M6B8R2etCbOQ/jQlBp5MwMbB/gRrjg9nru209DXwu.', 'minh', NULL, 2, '0000-00-00'),
(3, 'hnim3', '$2y$10$Xw4Ql2nBM.16rLuHu7qZYOKYm4mf83WAjLfxbEq9EBa/cKjPBPh3S', 'minh', 'daylaemail@gmail.com', 2, '0000-00-00'),
(4, '1', '$2y$10$UwXjyLD8TDSWO/KIR6g6De3r7d03zt0WNxKOYJlIlj5XGeki7lfk2', 'Khac Vinh', 'fg.sdge.mail@gmail.com', 1, '0000-00-00'),
(5, '2', '$2y$10$x9J6jAkbKrl/tc1rRsnioOt81MogoQXKIovGAPFH6dmN5EHrXcF3.', 'Nguoi dung nè', 'vinh.nk@gmail.com', 2, '0000-00-00'),
(6, 'th', '$2y$10$v30aNknOTXVj.2/tu/tDje.wRfnAw.BIhyt5nTtk4ciH24QlcVlWu', 'th', 'fsdf.dfsd.sd@sdsdfd.sdff', 2, '2018-12-10'),
(7, 'tre', '$2y$10$h3ePaDhqOfGNHPPrnnCYv.fjM1tDlkPSWthH0zjpbXMJRDjz8m8Hm', 'mmmmmmmmmmmmmmmmmmmm', 'bvbvbvbvb.s@gmail.com', 2, '2018-12-11'),
(8, 'mvtech', '$2y$10$ML3hbCVg.kQaqHQk.v0gvOCRjCVGWSyxB0xPKPaZEi96FDssI7ER2', 'vinh nguyen', 'v21.official@gmail.com', 2, '2018-12-11'),
(9, 'hjhjhj', '$2y$10$EaafyR4kCKdVxK7/FhsM5.B4NxliSqklsWBfKjLZpSMDLOeqOseAi', 'hjhjhj', 'jgfhg.dfd@asfss.sds', 2, '2018-12-11'),
(10, 'huhu', '$2y$10$nrmMJLw/FDmCtdMv6xRYPe5j6/UgBbkxkTScXBrgbh6KFLzu295n2', '11111222223333344444', 'jhjhjhjhjhj@hjjhj.sds', 2, '2018-12-11'),
(11, 'ghgh', '$2y$10$aVj/suRosRm0k/q00XN5O.qslpj.y5yv0mLEnWA9c53SOEdlcDI3m', 'ghgh', 'dfdsfsdf.sd@asdaa.sad', 2, '2018-12-11'),
(12, 'ggg', '$2y$10$9P3X1izQp6iSVSqtNG.3FubMyKn9QA1pmU7TLdvLe1bSftt25BvH2', 'ggg', 'gggggggggg.gggg@dsfsd.dfs', 2, '0000-00-00'),
(13, 'hhh', '$2y$10$VE0.8pj30gG4BBk8grm2J.Jjt.LtQVI35SgjaY4S7LGqC/aNSaOby', 'hhh', 'hhh.h.h.h@dsfss.dfs', 2, '2018-12-11'),
(14, 'yyy', '$2y$10$ZQCaxkop1Kip/WfXLAg95OiizlFoea2vScTPXpF2yldkfhio.sTw6', 'yyy', 'yyyy.yyy@yyyyy.yyy', 2, '0000-00-00'),
(15, 'vv', '$2y$10$2.Vily7U3UV9SCt8XZi8COZE7VoUV2qLGdEA5DzNLZgrTVjuz7T2.', 'vv', 'vvvvvv.vvvvv@vvvvvvv.vvv', 2, '0000-00-00'),
(16, 'lk', '$2y$10$oa/3YaXoDAv2O4IooH0r.uJkheosjSwKHJWW.19EIw6J4Hy2FKgTu', 'nghi choi', 'sdfsdsd.ww@fdsds.sdf', 2, '2018-12-11'),
(17, 'tt', '$2y$10$ZS3TAIbmp7IK0RtcC7u.RuAkEk0l9yF69RkfM.RgscoikF7H50542', 'tt', 'ssadads.fg@ads.asd', 2, '0000-00-00'),
(18, 'yy', '$2y$10$trf7Y9Bxkr4x3rh8VEFqgOvRZb8okMbXUGiMHMQwA7V4hd.9FOsAG', 'yy', 'df.sdf.ssd@sddsf.sdf', 2, '0000-00-00'),
(19, 'ui', '$2y$10$3T2hRj0AOSQR2u.QQ8f.i.DADtV5gqgE8miF4lqwEFrwfjbR7pwD6', 'vinnhh', 'llllll.lll@ghjgh.gjg', 2, '0000-00-00'),
(20, 'dfgfddfsdsf', '$2y$10$k.TdovQ4WY1T.S.rL3yE2eaZb7AL1Ty7uWAcHlae2Je8MtRf5mgHO', 'dfgdfhf', 'fdgdfgfg.dfg@fdggf.dfdf', 2, '0000-00-00'),
(21, 'egfsdsd', '$2y$10$GTPkrqBxs2f3Z33G4XDIyeC58FBxrxF3v02H.PquPTOsOX1ukeQC6', 'fghfgg', 'dfgfd.dfg@fgjhg.fgj', 2, '0000-00-00'),
(22, 'dfggdfgd', '$2y$10$2Bk4YMR4tw7j9lUKRGTnHe74A9Jzs5tw7XzgqAfKFRuzf7MyNlx5u', 'dfgdfdfg', 'fghgfhgf@dfhgd.dfgf', 2, '0000-00-00'),
(23, 'ghjgjgg', '$2y$10$QooE78h8F/0wwEX27hZ7eeA89rnYzAyprZdBJF9tmVIOmdORRlSaC', 'ghjghjh', 'jfhghjgjhg.ghjgh@fgjgh.ghjgh', 2, '0000-00-00'),
(24, 'fghfghgf', '$2y$10$Efx4gNTApULGdEkokxuzVe5rM7SGdCgSHEzSRHI98CHdtCtblqYAa', 'dfdfgdfg', 'fgfgfghj.dfgf@ghgfhf.fghf', 2, '0000-00-00'),
(25, 'ghhgjhjg', '$2y$10$nXOAB17SK.TbJ1uYbokSme4cHQcyvFPoDFQrRMTnlyDFaCbipBaNS', 'hgjghjghj', 'fghfg.fghfg.fgh@fghgf.fgjfg', 2, '0000-00-00'),
(26, 'ghjghjhgjh', '$2y$10$MfMor8H9Ze2SWeGUzauMueBB9TV8Ag2BQUE6OKD8F7DuHrQ81NxGq', 'ghhgjghj', 'sfdfg..dfdfg@hjhgj.ghjh', 2, '0000-00-00'),
(27, 'hgjghjghj!', '$2y$10$8o10jj1nO9WbAFE1mKHzc.mLu93LSSzguUO7gHAM5kn5DA1WO6o4C', 'ghjhgjghjg!', 'jghjghjgh.jghjghjg@ghjghj.ghj', 2, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `exercise`
--
ALTER TABLE `exercise`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- Indexes for table `progress_training`
--
ALTER TABLE `progress_training`
  ADD PRIMARY KEY (`UserID`,`LevelID`),
  ADD KEY `LevelID` (`LevelID`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`LevelID`,`Day`,`ExerciseID`),
  ADD KEY `ExerciseID` (`ExerciseID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `exercise`
--
ALTER TABLE `exercise`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`CategoryID`) REFERENCES `category` (`ID`);

--
-- Constraints for table `progress_training`
--
ALTER TABLE `progress_training`
  ADD CONSTRAINT `progress_training_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `progress_training_ibfk_2` FOREIGN KEY (`LevelID`) REFERENCES `level` (`ID`);

--
-- Constraints for table `training`
--
ALTER TABLE `training`
  ADD CONSTRAINT `training_ibfk_1` FOREIGN KEY (`ExerciseID`) REFERENCES `exercise` (`ID`),
  ADD CONSTRAINT `training_ibfk_2` FOREIGN KEY (`LevelID`) REFERENCES `level` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
