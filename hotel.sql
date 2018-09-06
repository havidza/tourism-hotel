-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 05:39 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'havid zaeni a.m', 'freezy', 'okeoce123'),
(2, 'ada disini', 'havidz', 'ganteng123'),
(3, 'okee', 'lol', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `judul`, `isi`, `gambar`) VALUES
(1, 'Events Lounge', 'Visit our newly-transformed Events Lounge and let our dedicated Events Managers assist you in creating celebrations that will bring a lifetime of memories.', 'events2.jpg'),
(2, 'Events Lounge Offers', 'All-inclusive range of services and it is the perfect place to meet as well as plan for any occasion whether it is a wedding, debut, birthday or other milestones.   The stylish lounge showcases a display of  table set-ups, wide selection of linens, 110-inch LED television to present styling themes, and a creation by a top couturier. Another innovation is a tasting room so guests can experience the culinary expertise of our chefs.\r\n\r\n', 'events3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `gambar`, `link`) VALUES
(1, 'events.jpg', 'event.php'),
(2, 'health.jpg', 'health.php'),
(3, 'kolam.jpg', 'kolam.php');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `room` varchar(50) NOT NULL,
  `start` date NOT NULL,
  `finish` date NOT NULL,
  `capacity` int(20) NOT NULL,
  `Kode` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `nama`, `phone`, `room`, `start`, `finish`, `capacity`, `Kode`) VALUES
(1, 'joko mulyono', '085710801212', 'Presidential Suite', '2017-11-21', '2017-11-22', 2, 'OQW12'),
(2, 'joko santosa', '085712392723', 'Celebrity Suite', '2017-11-29', '2017-11-30', 2, 'ZX12C');

-- --------------------------------------------------------

--
-- Table structure for table `health`
--

CREATE TABLE `health` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `health`
--

INSERT INTO `health` (`id`, `judul`, `isi`, `gambar`) VALUES
(1, 'Health Club and Spa', 'Merlin Hotel’s exclusive Health Club and Spa offers the perfect recreation and relaxation facilities for guests. The gym features equipment for cardiovascular and strength exercises, and can offer personalized fitness programs. In-house guests may avail of complimentary use of the exercise room. For therapy and skin cleansing, the sauna, steam room and jacuzzi as a soothing finish to a strenuous day. De-stress with a rejuvenating massage, or take a refreshing plunge at the swimming pool and outdoor jacuzzi. Located at the second floor, the Health Club exercise room is open 24 hours daily for in-house guests while the sauna, steam room and jacuzzi are open from 6:00 am to 11:00 pm daily. ', 'health2.jpg'),
(2, 'Gym', 'Give your body its much needed pampering at Health Club and Spa. Whether you choose to relax with a really good massage or get your heart pumping at the gym, we guarantee that you''ll walk out feeling totally refreshed, energized, and stress-free!\r\n<br><br>\r\nBe a member to regularly enjoy our Health Club and Spa facilities. If you prefer to have an exercise buddy, take advantage of our reasonable couple or corporate packages. Members and guests have exclusive use of the exercise facilities, swimming pool, steam room, whirlpool and sauna.', 'health3.jpg'),
(3, 'Lifespan Reflexology', 'Step into a zone of total well-being. Visit Lifespan Reflexology and enjoy a one-of-a-king wellness experience. \r\n<br><br>\r\nLifeSpan Reflexology offers more than the traditional foot massage. Our therapists are professionally trained to simultaneously enhance your blood circulation, reduce body tension, and induce relaxation with just one treatment. \r\n<br><br>\r\nLifeSpan Reflexology is located at the 6th floor of Merlin Hotel Thailand . For inquiries, please call (632) 528-3000 ext. 81000.', 'health4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(3) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `judul`, `isi`, `gambar`) VALUES
(1, 'Magnificent Golden Sunset of the Manila Bay', '<p align="justify">Set against the magnificent golden sunset of the Manila Bay is Merlin Hotel , a 5-star hotel minutes away from the airport, convention centers, cultural sites, historical landmarks and shopping destinations.</p>\r\n\r\n<p align="justify">Merlin Hotel has a variety of restaurants and bars specializing in different cuisines, offering guests a delightful experience. Luxurious function rooms are available for corporate events, meetings, weddings and parties. The Health Club and Spa, swimming pool, outdoor whirlpool, tennis court, LifeSpan Reflexology, and gym are all perfect for a holiday filled with recreational and fitness activities.</p>\r\n\r\n<p align="justify">Guests are guaranteed a wonderful experience of comfort, luxury and impeccable service at Merlin Hotel. Stay and experience the renowned Diamond Service by the hotel''s gracious associates.</p>', '');

-- --------------------------------------------------------

--
-- Table structure for table `kolam`
--

CREATE TABLE `kolam` (
  `id` int(5) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kolam`
--

INSERT INTO `kolam` (`id`, `judul`, `isi`, `gambar`) VALUES
(1, 'Swimming Pools & Outdoor Whirlpool', 'Have a rejuvenating plunge in Merlin Hotel''s swimming pool and outdoor whirlpool. Refreshing beverages and sumptuous snacks are also available at the Poolside Bar for that ultimate relaxation.', 'kolam2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `id` int(2) NOT NULL,
  `gambar` text NOT NULL,
  `caption` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`id`, `gambar`, `caption`) VALUES
(1, 'image.jpg', 'Imaginative Select Service Hotels'),
(2, 'image2.jpg', 'Where the Journey is Always More Important		'),
(3, 'image3.jpg', 'Designed for Those Who Are Chasing Excellence'),
(4, 'images4.jpg', 'Create Beautiful Memories With Your Family			');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(3) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `nama`, `isi`) VALUES
(1, 'Sophita Martin, Traveled on Bussiness', '"The rooms are big but the suite rooms are very large and spacious with separate living room and dining room and plush bath room with a tub. Stayed for 3 nights and the breakfast buffet is typical of Asian Hotels with a combination of Asian and Continental and American choices. Robinson''s is a 5 minutes walk from hotel where you can shop and dine and the seedy part of Ermita is just an 8 minutes walk away."'),
(2, 'Donald Trump, President of USA', '<center>"Staff are really professional, friendly and great place for a staycation. The foods are great and the facilities are clean. Great room for a reasonable price and they go an extra mile to help their client. Real food, real place and real people."</center> ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `health`
--
ALTER TABLE `health`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kolam`
--
ALTER TABLE `kolam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `health`
--
ALTER TABLE `health`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kolam`
--
ALTER TABLE `kolam`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
