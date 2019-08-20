-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2019 at 07:53 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountinfo`
--

CREATE TABLE `accountinfo` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `card_number` varchar(50) NOT NULL DEFAULT '0',
  `balance` int(11) NOT NULL DEFAULT '0',
  `status` varchar(50) NOT NULL DEFAULT 'active',
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accountinfo`
--

INSERT INTO `accountinfo` (`id`, `username`, `card_number`, `balance`, `status`, `type`) VALUES
(1, 'investor', '1122345', 743045, 'active', 'investor'),
(5, 'new', '0', 700, 'active', 'investor'),
(6, 'awer', '0', 0, 'active', 'supportadmin'),
(7, 'awer', '0', 0, 'active', 'supportadmin');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `amount`) VALUES
(2, 'investor', 10),
(3, 'investor', 10),
(4, 'new', 10),
(5, 'new', 10),
(6, 'new', 10);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `investor_name` varchar(50) NOT NULL,
  `representor_name` varchar(50) NOT NULL,
  `ammount` int(11) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `investor_name`, `representor_name`, `ammount`, `date`) VALUES
(1, 'investor', 'idea11', 1000, '2019-08-17'),
(3, 'investor', 'idea22', 500, '2019-08-17'),
(4, 'investor', 'idea11', 5000, '2019-05-19'),
(5, 'investor', 'idea11', 4500, '2019-08-17'),
(6, 'investor', 'idea11', 9000, '2019-08-17'),
(25, 'investor', 'idea11', 24500, '2019-05-19'),
(26, 'investor', 'idea11', 24500, '2019-08-19'),
(27, 'investor', 'idea11', 24500, '2019-08-18'),
(28, 'investor', 'idea11', 25500, '2019-08-18'),
(29, 'investor', 'idea11', 26500, '2019-08-05'),
(30, 'investor', 'idea22', 525, '2019-08-18'),
(31, 'investor', 'idea22', 10, '2019-08-18'),
(32, 'investor', 'idea22', 100, '2019-08-18'),
(33, 'investor', 'idea22', 100, '2019-08-18'),
(34, 'investor', 'idea22', 100, '2019-08-18'),
(35, 'investor', 'idea22', 100, '2019-08-18'),
(36, 'new', 'idea22', 100, '2019-08-18'),
(37, 'new', 'idea22', 100, '2019-08-18'),
(38, 'new', 'idea22', 100, '2019-08-05');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `details` varchar(3000) NOT NULL,
  `date` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `details`, `date`) VALUES
(1, 'Eid', 'Bonus event for all..', '2019-08-08'),
(3, 'Eid', 'Bonus event for all..', '2019-08-09'),
(4, 'Eid ul', 'Bonus event for all..', '2019-08-31');

-- --------------------------------------------------------

--
-- Table structure for table `idea`
--

CREATE TABLE `idea` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `title` varchar(300) NOT NULL,
  `details` varchar(5000) NOT NULL,
  `projected_amount` int(11) NOT NULL,
  `donated_amount` int(11) NOT NULL DEFAULT '0',
  `status` varchar(50) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idea`
--

INSERT INTO `idea` (`id`, `username`, `title`, `details`, `projected_amount`, `donated_amount`, `status`) VALUES
(1, 'idea11', 'RFID Based Door Access Control', 'The conception of entrance control is brought about by mean of a card, a parallel card reader and a control board is amalgamated with the server. This is a proximity card with a unique ID number incorporated in it. The card reader interprets the data and sends it to the control board, which is a microcontroller. This microcontroller tests the legality of the data with the incorporated server, which abides the database. The attached server is uploaded with the details of the worker for that unique ID number.', 500000, 26500, 'accepted'),
(2, 'idea22', 'Automatic Solar Tracker', 'Automatic solar tracker begins to follow the SUN exactly from sunrise, all through the day, till sunset, and begins the work all over again from sunrise next day. On hazy weather day, it lingers motionless and grasps the SUN yet again as it peeps out of clouds. It does all this mechanically, by employing inexpensive and economical constituents, and is extremely accurate. Let us make out how all this is done.', 100000, 1185, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `idearepresentor`
--

CREATE TABLE `idearepresentor` (
  `id` int(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `School` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  `University` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `Address` text NOT NULL,
  `age` varchar(5) NOT NULL,
  `type` varchar(30) NOT NULL DEFAULT 'idearepresentor'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idearepresentor`
--

INSERT INTO `idearepresentor` (`id`, `name`, `School`, `college`, `University`, `email`, `phone`, `Address`, `age`, `type`) VALUES
(1, 'siyam01', 'zilla school', 'govt clg', 'aiub', 'sohanshovik@gmail.com', '015', 'nikuja dhaka', '222', 'idearepresentor');

-- --------------------------------------------------------

--
-- Table structure for table `idea_review`
--

CREATE TABLE `idea_review` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `idea_id` int(11) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idea_review`
--

INSERT INTO `idea_review` (`id`, `username`, `idea_id`, `comment`) VALUES
(1, 'investor', 1, 'this is a good project');

-- --------------------------------------------------------

--
-- Table structure for table `mseized`
--

CREATE TABLE `mseized` (
  `id` int(11) NOT NULL,
  `supportadmin` varchar(50) NOT NULL,
  `investor` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `complain` varchar(500) NOT NULL,
  `type` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'not checked'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `username`, `complain`, `type`, `status`) VALUES
(1, 'investor', 'my funding is not working..', 'investor', 'not checked'),
(2, 'any', 'sdadadadeda', 'supportadmin', 'check');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `type`, `name`, `email`, `phone`, `status`) VALUES
(2, 'investor', '123', 'investor', 'sarker', 'souravsarkersrv@gmail.com', '01683135468', 'active'),
(3, 'fahim', '123', 'investor', 'Sourav Sarker', 'souravsarkersrv@gmail.com', '1683135468', 'active'),
(9, 'shovik', '123', 'supportadmin', 'Shovik Abdullah', 'dadwee', '066355633', 'active'),
(11, 'any', '123', 'investor', 'adsad', 'sdsadsad', '132131', 'active'),
(13, 'any', '123', 'investor', 'adsad', 'sdsadsad', '132131', 'active'),
(14, 'any', '123', 'investor', 'adsad', 'sdsadsad', '132131', 'active'),
(15, 'new', '123', 'investor', 'new', 'wfew,wdwe', '021256163', 'active'),
(16, 'admin', '123', 'superadmin', 'sadsd', 'dadadads', '01356896', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user_login_time`
--

CREATE TABLE `user_login_time` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountinfo`
--
ALTER TABLE `accountinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idea`
--
ALTER TABLE `idea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idearepresentor`
--
ALTER TABLE `idearepresentor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idea_review`
--
ALTER TABLE `idea_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mseized`
--
ALTER TABLE `mseized`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login_time`
--
ALTER TABLE `user_login_time`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountinfo`
--
ALTER TABLE `accountinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `idea`
--
ALTER TABLE `idea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `idearepresentor`
--
ALTER TABLE `idearepresentor`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `idea_review`
--
ALTER TABLE `idea_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mseized`
--
ALTER TABLE `mseized`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_login_time`
--
ALTER TABLE `user_login_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
