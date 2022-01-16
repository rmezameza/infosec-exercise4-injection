-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2022 at 02:05 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infosec_exercise_injection`
--
CREATE DATABASE IF NOT EXISTS `infosec_exercise_injection` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `infosec_exercise_injection`;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(100) NOT NULL,
  `book_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `book_text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `book_cover` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_title`, `book_text`, `book_cover`) VALUES
(1, 'Aussichten auf den Oko-Leviathan?', 'Shakespeare, gewitzt wie er war, lässt Hamlet sagen: «Beware / Of entrance to a quarrel, but, being in, / Bear’t that th’ opposed may beware of thee», in etwa übersetzt mit: «Sorge Dich, nicht in einen Streit zu geraten; wenn Du aber aber einmal drinnen bist, dann führe ihn so, dass sich Dein Gegner vor Dir fürchtet». Ausgangspunkt dieser Polemik ist, dass sich vor denen, die vorgeben sich in den Streit um die Erhaltung unserer natürlichen Lebensgrundlagen einzumengen (vulgo: «Die Grünen»), niemand zu fürchten braucht – ganz im Gegenteil. Von dieser Erkenntnis aus entspannen Nikolaus Dimmel und Alfred J. Noll ein furioses und beklemmendes Manifest. Nicht nur für die Grünen, für die gesamte Gesellschaft ist es 5 nach 12, und es wird langsam Zeit dem passiven Begreifen aktiven Widerstand zur Seite zu stellen. ', 'aussichten_auf_den_oeko-leviathan_cover.jpg'),
(2, 'Muhammad Ali', '\"No Vietcong ever called me nigger\". Mit dieser Ansage verweigerte Muhammad Ali 1967 seine Einberufung zur US-Army. Strafe, die Aberkennung seines Weltmeistertitels und eine mehrjährige Sperre waren die Folge.\r\n\r\nAnfang der 1970er-Jahre startete Ali sein Comeback, welches 1974 mit dem Titelkampf gegen George Foreman seinen Höhepunkt fand. Dieser «Rumble in the Jungle» wurde vom umstrittenen Boxpromoter Don King nach Kinshasa (Zaire) verlegt. Ali kommt als Unterstützer der antikolonialen Befreiungskämpfe an und hat die Herzen des Publikums bald auf seiner Seite.\r\n\r\nEine Graphic Novel mit zahlreichen Originalfotografien, die der legendäre iranische Fotograf Abbas für die Agentur Magnum anfertigte.\r\n', 'muhammad_ali_cover.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(1, 'roberto', 'e86e65c83e67c4a81b63d0c1f47dd42d'),
(2, 'Anton', 'fe1fb72b022e61f3d2ed6859229a2e64');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
