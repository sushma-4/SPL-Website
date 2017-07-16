-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2017 at 03:00 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spl`
--

-- --------------------------------------------------------

--
-- Table structure for table `achieve`
--

CREATE TABLE `achieve` (
  `achieve_id` int(10) NOT NULL,
  `heading` varchar(50) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `achievement` varchar(200) DEFAULT NULL,
  `display` int(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achieve`
--

INSERT INTO `achieve` (`achieve_id`, `heading`, `name`, `email`, `achievement`, `display`) VALUES
(1, 'abc', 'asdasd', 'a@gmail.com', 'nothing', 1),
(2, 'new one', 'asdf', 'a@gmail.com', 'asdadafaf', 1),
(4, 'hhhhhh', 'abc', 'a@gmail.com', 'aasdadadasdadadafsfsawrqet dvbxvz vasfawdfcwarwqaafwafgFzsdgvxzgv', 1),
(5, NULL, 'non', 'n@gmail.com', 'asqwerrttyuuiopasddffghjllzxccvbnmmqwertyuuiioasdffgfhhjkklzxxcvvbnm\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `coming_event`
--

CREATE TABLE `coming_event` (
  `coming_event_id` int(10) NOT NULL,
  `heading` varchar(200) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `applied_by` varchar(500) DEFAULT '0,'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coming_event`
--

INSERT INTO `coming_event` (`coming_event_id`, `heading`, `description`, `applied_by`) VALUES
(1, 'Title1 of the upcoming event', 'Description1 of the event open/closes on click of title only!!!! includes organizers names at end of description as ', 'lakshay,lakshay7696,'),
(2, 'Title2 of the upcoming event', 'Description2 of the event open/closes on click of title only!!!! includes organizer names at end of description as ', 'Rohit,lakshay7696,'),
(6, 'heading1', 'asasasdasbasdnadka eq eqmjweasm d;almd adn ladn landlnln adslnd;\n', '0,lakshay7696,lakshay7696,varunk,lakshay7696,lakshay7696,'),
(9, 'heading7', 'qweerewfeanoi snfvhaeifleizulsgd;vohs ois; fhasfosi;fo', '0,lakshay7696,');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `message_id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`message_id`, `name`, `email`, `message`) VALUES
(1, 'hhh', 'ffgq@jkji.jij', 'gghiuhiuhiuhiuhiuiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `name`, `email`, `description`) VALUES
(3, 'myname', 'no@reply.com', 'describeasdasdasdadasdfasfasgsdgdsfhbsqwrwerwetgergyrstthfxdbvffxb');

-- --------------------------------------------------------

--
-- Table structure for table `past_event`
--

CREATE TABLE `past_event` (
  `past_event_id` int(10) NOT NULL,
  `heading` varchar(200) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `winners` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `past_event`
--

INSERT INTO `past_event` (`past_event_id`, `heading`, `description`, `winners`) VALUES
(1, 'Title1 of the past event', 'Description1 of the event open/closes on click of title only!!!! includes winner names at end of description as ', 'abc,def'),
(2, 'Title2 of the past event', 'Description2 of the event open/closes on click of title only!!!! includes winner names at end of description as ', 'xyz,def');

-- --------------------------------------------------------

--
-- Table structure for table `resource`
--

CREATE TABLE `resource` (
  `resource_id` int(10) NOT NULL,
  `heading` varchar(200) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `firstname`, `lastname`, `email`, `phone`, `password`, `admin`) VALUES
(1, 'lakshay7696', 'lakshay', 'chaudhary', 'lakshay14csu105@ncuindia.edu', '8130219717', '$2y$10$qTOxxBjNw09CSm7lMtcS5uXeh5VVwMBz.l4VhwZ5uwCKXGKCbkh7a', 1),
(3, 'varunk', 'varun', 'kumar', 'vk@gmail.com', '8130219717', '$2y$10$dfgT9t3KNxE8ExBGIQ.7R.JY3gXrfUeYUDQAVphre/vcSfeQTewge', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achieve`
--
ALTER TABLE `achieve`
  ADD PRIMARY KEY (`achieve_id`);

--
-- Indexes for table `coming_event`
--
ALTER TABLE `coming_event`
  ADD PRIMARY KEY (`coming_event_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `past_event`
--
ALTER TABLE `past_event`
  ADD PRIMARY KEY (`past_event_id`);

--
-- Indexes for table `resource`
--
ALTER TABLE `resource`
  ADD PRIMARY KEY (`resource_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achieve`
--
ALTER TABLE `achieve`
  MODIFY `achieve_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `coming_event`
--
ALTER TABLE `coming_event`
  MODIFY `coming_event_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `message_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `past_event`
--
ALTER TABLE `past_event`
  MODIFY `past_event_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `resource`
--
ALTER TABLE `resource`
  MODIFY `resource_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
