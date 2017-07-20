-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2016 at 06:42 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prochesta`
--

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `volunteed_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `sex` varchar(15) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `presentAddress` text NOT NULL,
  `parmanentAddress` text NOT NULL,
  `nationalId` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `facebook` text NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `organization` varchar(50) NOT NULL,
  `why` text NOT NULL,
  `which` varchar(15) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`volunteed_id`, `name`, `birthday`, `sex`, `bloodgroup`, `presentAddress`, `parmanentAddress`, `nationalId`, `phone`, `mail`, `facebook`, `occupation`, `organization`, `why`, `which`, `pic`) VALUES
(1, 'tanvir', '0000-00-00', 'male', '.01', 'dsfdsgdg', 'sadgsdgdg', 'sdagdsgd', '0013213', 'deadf@gmail.com', 'jkjkdsjkdjsk', 'dksda', 'kjfdkjg', 'gfkgjlksdjfg', '.help', '1472135864_vector_65_01.png'),
(2, 'tanvir', '2016-06-09', 'male', '.01', 'dsfdsgdg', 'sadgsdgdg', 'sdagdsgd', '0013213', 'deadf@gmail.com', 'jkjkdsjkdjsk', 'dksda', 'kjfdkjg', 'gfkgjlksdjfg', '.help', '1472135864_vector_65_01.png'),
(3, 'tanvir', '2016-06-09', 'male', '.01', 'dsfdsgdg', 'sadgsdgdg', 'sdagdsgd', '0013213', 'deadf@gmail.com', 'jkjkdsjkdjsk', 'dksda', 'kjfdkjg', 'gfkgjlksdjfg', '.help', '1472135864_vector_65_01.png'),
(4, 'anik', '2016-03-09', 'male', '.04', 'dfdsagds', 'dsgdsg', 'dgdg', '0121231', 'dsgd@gmaill.com', 'dsgdsg', 'sdgdsg', 'sdgds', 'dsgdsg', '.Charity', '1472135682_vector_65_04.png'),
(5, 'dgdsagdsg', '2016-10-09', 'male', '.01', 'dgsdgds', 'sdgsdgd', 'sdgdsgds', '2121213', 'dsgdsgsd@d.com', 'sdfgdsg', 'dgds', 'dgdsgds', 'sdgdg', '.ceremony', 'Screenshot (1).png'),
(6, 'dgdg', '2018-06-09', 'male', '.06', 'dsgdsg', 'sdgdsg', 'sdgdsgdg', '142121213', 'sdgdgdg@a.cm', 'dfgdsg', 'sdgsdg', 'dsgd', 'dsgdg', '.Charity', 'Screenshot (1).png'),
(7, 'sdgsdgsd', '2016-08-09', 'male', '.01', 'gdsg', 'sdgdsg', 'dsgdsg', '12512121', 'ss@dsfgsd.com', 'dgsdag', 'sdgdg', 'sdgdsg', 'sdgdsgds', '.smile', 'Screenshot (1).png'),
(8, 'sdgsdg', '2016-09-09', 'male', '.04', 'dgd', 'gsdgd', 'dsgdg', '313213', 'deadf@gmail.com', 'tanvirjdk', 'nothng', 'kjfdkjg', 'dgdsg', '.ceremony', 'Screenshot (1).png'),
(9, 'Deshi', '2016-08-09', 'male', '.01', 'fsdfg', 'dgdsg', 'sdgds', '1211212', 'dfd@ga.com', 'kdsjgsaqjfdskl', 'qjdfkgj', 'jkfdj', 'jk', '.fund', '13244171_254404774949851_5661940253717023753_o.jpg'),
(10, 'dsgdsg', '2016-06-09', 'female', '.03', 'dgfsadg', 'sdgds', 'dgd', '23313', 'ds@gmail.com', 'kdsjksdaj', 'sdgdsg', 'sdgsdg', 'sdgsdg', '.smile', '13244171_254404774949851_5661940253717023753_o.jpg'),
(11, 'dsgdsgdsg', '2016-08-09', 'male', '.04', 'dgdsgd', 'sdgdg', 'sdgds', '121332', 'd@gmail.com', 'kldjfksdaj', 'kdjgkaj', 'kjdsfkgj', 'dgdgd', '.fund', '13244171_254404774949851_5661940253717023753_o.jpg'),
(12, 'dsgdsgdsg', '2016-08-09', 'male', '.04', 'dgdsgd', 'sdgdg', 'sdgds', '121332', 'd@gmail.com', 'kldjfksdaj', 'kdjgkaj', 'kjdsfkgj', 'dgdgd', '.fund', '13244171_254404774949851_5661940253717023753_o.jpg'),
(13, 'dsgdsgdsg', '2016-08-09', 'male', '.04', 'dgdsgd', 'sdgdg', 'sdgds', '121332', 'd@gmail.com', 'kldjfksdaj', 'kdjgkaj', 'kjdsfkgj', 'dgdgd', '.fund', '13244171_254404774949851_5661940253717023753_o.jpg'),
(14, 'Deshi', '2016-09-09', 'male', '.07', 'gdsaghsdg', 'sdgdgsd', 'dsgdsgd', '1212121', 'tanv@gfma.com', 'fggsgfds', 'dgdgds', 'sdgdg', 'sdgdsg', '.fund', ''),
(15, 'Deshi', '2016-09-09', 'male', '.07', 'gdsaghsdg', 'sdgdgsd', 'dsgdsgd', '1212121', 'tanv@gfma.com', 'fggsgfds', 'dgdgds', 'sdgdg', 'sdgdsg', '.fund', '13244171_254404774949851_5661940253717023753_o.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`volunteed_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `volunteed_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
