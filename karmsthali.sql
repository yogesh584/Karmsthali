-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 09:12 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karmsthali`
--

-- --------------------------------------------------------

--
-- Table structure for table `teachersdata`
--

CREATE TABLE `teachersdata` (
  `id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `quality` text NOT NULL,
  `phoneNo` int(13) NOT NULL,
  `Address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachersdata`
--

INSERT INTO `teachersdata` (`id`, `name`, `quality`, `phoneNo`, `Address`) VALUES
(10000, 'harry', 'Best Programmer in this entire world.\r\nkjakfjkasj askfj skajdfk', 987654321, ' sajdhfsa jashdf sajkhf dsfgsdfdga'),
(10001, 'Yogesh', 'Best Faculty of Hacking, Coding and Programing', 827646233, 'Near ksdfk asfldk  sdfks fka ksajf;lks asdjfks aflksajdf ajfkasj alksjfkljs akljsa fksajfdkj '),
(10002, 'Krishna', 'klsdaf ksdfk kjsdakjfk sum jdskf ks fjsjsd fo', 238278273, 'ksjdfjk sadkjfksa dk;sdajfh sdifusda sde fioueio dksf sdif eiou'),
(10003, 'Parnil', 'asjdkf ksadjfkj ousedmrfoi sdaiurtf sdakfi sdufrio eifh isdfids f', 273826328, 'ksdjfak fkasdjif iofsaiojfsduf skajdf sioduf sdufr dsfuids foiuisdjtrf difjaosduf'),
(10004, 'Manish Rawat', 'sdja fkodskf askdjf sdaif saodf soiduf sd s fsdf sdifio  dsfiosdu fsidauf iosdu foioi', 381273871, 'sdaiufi sadiufsa deufr ieauri eiuriwueirfu sdufusdaifiodsuiu'),
(10005, 'Kunal', 'dfkgjdklfjgdsf gkjdf gkd sdklfj sdo sdfjf dsfksdjf sd kfjd sf', 238728738, 'sdkjfs da sdkfjksd sd fkjsdk jfsdfk dsjf sdkjf sdkfjs d'),
(10006, 'Dheeraj', 'sdlkjfksd fdskjfks dsd fkj sdlkfj sdlkfj sdklfj sdfkjs fjasasdf;lkj asdf;lkjasdf;ljk; asdf;ljksdajsajfsdj;a', 827348972, 'fjsdkjkajf dskjfkds dksjgfkdsj kds jfgkjdsafk lksadjf sljf sdlkfjsadj '),
(10007, 'Siddharth', 'kasjdfk lkasjfk sdfjskadjf lksd fksajfkjdas', 283728738, 'sdkjfaj fj fasjdf kasjdf sdakjfkljsakdjfksjafk jksaj'),
(10008, 'Prayag', 'sadkjfdksa fksajkf klsaj skdjflk sdlkjf sdjfkdsj gfdlkgjkd glkdfj', 823827832, 'skdjafk sadjf jsdkajf sdkfjaks fksjdakj fjasjf jsklfj sjadfj kasjk'),
(10009, 'Nikki', 'dksjkf alkjfsd afajf sjfksdjajfklasj fkliewr', 287387283, 'djfkjasf sakdjfklsda fklsdajfk ksadjf sdfkljskdjfkjaskjfksd sdjf sadfklsaj'),
(10010, 'Deepu', 'lksjdakf sadkf ksdljfklds afkjskl fksdj ksjdfk ', 273872873, 'sdkjf sakdjfksad fkjsk fskdjfkl safjj fk'),
(10011, 'Hacker', 'ksjdf askjfk sasakdjfk ', 273828378, 'sfhjksahd fjksadhf sjadhf sdjhfjsad fsdjkfhj');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_no` int(13) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_no`, `password`) VALUES
(10000, 'harry', 'harry@codewithharry.com', 987654321, '123'),
(10001, 'Yogesh', 'yjangid584@gmail.com', 123456789, '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teachersdata`
--
ALTER TABLE `teachersdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teachersdata`
--
ALTER TABLE `teachersdata`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10012;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10002;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
