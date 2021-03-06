-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 08, 2019 at 07:16 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geolocation`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cityId` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state_id` varchar(255) NOT NULL,
  `city_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cityId`, `city`, `state_id`, `city_id`) VALUES
('LOCATION:126', ' Tangkak', '12', '141'),
('LOCATION:124', ' Johor Bahru', '12', '193'),
('LOCATION:439', 'Kulai', '12', '4'),
('LOCATION:135', 'Segamat', '12', '140'),
('LOCATION:123', 'Batu Pahat', '12', '1'),
('LOCATION:131', 'Mersing', '12', '178'),
('LOCATION:130', 'Kota Tinggi', '12', '138'),
('LOCATION:134', 'Pontian', '12', '138'),
('LOCATION:129', 'Kluang', '12', '233'),
('LOCATION:140', 'Baling', '3', '116'),
('LOCATION:141', 'Jitra', '3', '110'),
('LOCATION:142', 'Kuala Nerang', '3', '111'),
('LOCATION:143', 'Kulim', '3', '8'),
('LOCATION:144', 'Langkawi', '3', '112'),
('LOCATION:145', 'Pendang', '3', '113'),
('LOCATION:147', 'Sik', '3', '115'),
('LOCATION:148', 'Sungai Petani', '3', '9'),
('LOCATION:153', 'Kota Bharu', '13', '10'),
('LOCATION:150', 'Bachok', '13', '133'),
('LOCATION:151', 'Gua Musang', '13', '135'),
('LOCATION:152', 'Jeli', '13', '136'),
('LOCATION:154', 'Kuala Krai', '13', '129'),
('LOCATION:156', 'Machang', '13', '134'),
('LOCATION:158', 'Pasir Puteh', '13', '132'),
('LOCATION:160', 'Tanah Merah', '13', '11'),
('LOCATION:161', 'Tumpat', '13', '131'),
('LOCATION:157', 'Pasir Mas', '13', '130'),
('LOCATION:165', 'Cheras', '6', '86'),
('LOCATION:340', 'Kuala Lumpur', '10', '34'),
('LOCATION:628', 'Labuan', '14', '0'),
('LOCATION:172', 'Alor Gajah', '7', '102'),
('LOCATION:174', 'Bandaraya Melaka', '7', '37'),
('LOCATION:176', 'Jasin', '7', '104'),
('LOCATION:178', 'Merlimau', '7', '103'),
('LOCATION:177', 'Masjid Tanah', '7', '101'),
('LOCATION:188', 'Seremban', '11', '13'),
('LOCATION:180', 'Gemas', '11', '162'),
('LOCATION:183', 'Kuala Klawang', '11', '163'),
('LOCATION:184', 'Kuala Pilah', '11', '12'),
('LOCATION:185', 'Nilai', '11', '383'),
('LOCATION:186', 'Port Dickson', '11', '158'),
('LOCATION:187', 'Rembau', '11', '161'),
('LOCATION:189', 'Tampin', '11', '160'),
('LOCATION:202', 'Triang', '8', '149'),
('LOCATION:199', 'Pekan', '8', '143'),
('LOCATION:200', 'Raub', '8', '152'),
('LOCATION:190', 'Bentong', '8', '14'),
('LOCATION:192', 'Jerantut', '8', '148'),
('LOCATION:193', 'Kuantan', '8', '231'),
('LOCATION:194', 'Kuala Lipis', '8', '153'),
('LOCATION:195', 'Kuala Rompin', '8', '144'),
('LOCATION:196', 'Maran', '8', '151'),
('LOCATION:201', 'Temerloh', '8', '16'),
('LOCATION:198', 'Muadzam Shah', '8', '147'),
('LOCATION:212', ' Nibong Tebal', '4', '154'),
('LOCATION:213', ' Perai', '4', '40'),
('LOCATION:225', ' Sungai Siput', '5', '122'),
('LOCATION:227', ' Taiping', '5', '22'),
('LOCATION:230', ' Teluk Intan', '5', '23'),
('LOCATION:221', ' Kuala Kangsar', '5', '19'),
('LOCATION:220', ' Kampar', '5', '68'),
('LOCATION:219', ' Ipoh', '5', '189'),
('LOCATION:217', ' Gerik', '5', '121'),
('LOCATION:216', ' Batu Gajah', '5', '119'),
('LOCATION:215', ' Bagan Serai', '5', '123'),
('LOCATION:424', ' Perlis', '2', '2'),
('LOCATION:237', ' Putrajaya', '1', '1'),
('LOCATION:607', ' Kota Kinabalu', '15', '0'),
('LOCATION:606', ' Sandakan', '15', '0'),
('LOCATION:608', ' Tawau', '15', '0'),
('LOCATION:609', ' Kudat', '15', '0'),
('LOCATION:610', ' Semporna', '15', '0'),
('LOCATION:611', ' Tenom', '15', '0'),
('LOCATION:612', ' Papar', '15', '0'),
('LOCATION:613', ' Beluran', '15', '0'),
('LOCATION:614', ' Tambunan', '15', '0'),
('LOCATION:615', ' Kota Belud', '15', '0'),
('LOCATION:616', ' Kinabatangan', '15', '0'),
('LOCATION:617', ' Telupid', '15', '0'),
('LOCATION:618', ' Tongod', '15', '0'),
('LOCATION:619', ' Putatan', '15', '0'),
('LOCATION:620', ' Tuaran', '15', '0'),
('LOCATION:621', ' Kota Marudu', '15', '0'),
('LOCATION:622', ' Penampang', '15', '0'),
('LOCATION:623', ' Sipitang', '15', '0'),
('LOCATION:624', ' Pitas', '15', '0'),
('LOCATION:625', ' Ranau', '15', '0'),
('LOCATION:626', ' Kunak', '15', '0'),
('LOCATION:627', ' Nabawan', '15', '0'),
('LOCATION:629', ' Keningau', '15', '0'),
('LOCATION:630', ' Kuala Penyu', '15', '0'),
('LOCATION:631', ' Lahad Datu', '15', '0'),
('LOCATION:632', ' Beaufort', '15', '0'),
('LOCATION:634', ' Tebedu', '16', '0'),
('LOCATION:263', ' Kanowit', '16', '0'),
('LOCATION:266', ' Kuching', '16', '0'),
('LOCATION:267', ' Limbang', '16', '0'),
('LOCATION:641', ' Selangau', '16', '0'),
('LOCATION:265', ' Kota Samarahan', '16', '0'),
('LOCATION:264', ' Kapit', '16', '0'),
('LOCATION:642', ' Daro', '16', '0'),
('LOCATION:262', ' Bintulu', '16', '0'),
('LOCATION:643', ' Matu', '16', '0'),
('LOCATION:644', ' Dalat', '16', '0'),
('LOCATION:645', ' Song', '16', '0'),
('LOCATION:647', ' Beluru', '16', '0'),
('LOCATION:648', ' Bukit Mabong', '16', '0'),
('LOCATION:649', ' Kabong', '16', '0'),
('LOCATION:261', ' Bintagor', '16', '0'),
('LOCATION:260', ' Betong', '16', '0'),
('LOCATION:650', ' Sebauh', '16', '0'),
('LOCATION:651', ' Simunjan', '16', '0'),
('LOCATION:652', ' Tanjung Manis', '16', '0'),
('LOCATION:653', ' Long Lama', '16', '0'),
('LOCATION:269', ' Lubok Antu', '16', '0'),
('LOCATION:633', ' Lundu', '16', '0'),
('LOCATION:635', ' Belaga', '16', '0'),
('LOCATION:636', ' Pusa', '16', '0'),
('LOCATION:637', ' Pakan', '16', '0'),
('LOCATION:638', ' Bau', '16', '0'),
('LOCATION:639', ' Asajaya', '16', '0'),
('LOCATION:640', ' Julau', '16', '0'),
('LOCATION:281', ' Sri Aman', '16', '0'),
('LOCATION:279', ' Serian', '16', '0'),
('LOCATION:282', ' Tatau', '16', '0'),
('LOCATION:280', ' Sibu', '16', '0'),
('LOCATION:277', ' Saratok', '16', '0'),
('LOCATION:278', ' Sarikei', '16', '0'),
('LOCATION:276', ' Santubong', '16', '0'),
('LOCATION:275', ' Mulu', '16', '0'),
('LOCATION:274', ' Mukah', '16', '0'),
('LOCATION:273', ' Miri', '16', '0'),
('LOCATION:272', ' Matu Daro', '16', '0'),
('LOCATION:268', ' Lawas', '16', '0'),
('LOCATION:295', ' Shah Alam', '6', '31'),
('LOCATION:298', ' Sepang', '6', '117'),
('LOCATION:300', ' Subang Jaya', '6', '53'),
('LOCATION:291', ' Rawang', '6', '30'),
('LOCATION:283', ' Bangi', '6', '26'),
('LOCATION:293', ' Petaling Jaya', '6', '29'),
('LOCATION:284', ' Banting', '6', '27'),
('LOCATION:537', ' Pelabuhan Klang', '6', '83'),
('LOCATION:286', ' Cyberjaya', '1', '1'),
('LOCATION:302', ' Besut', '9', '166'),
('LOCATION:303', ' Dungun', '9', '165'),
('LOCATION:305', ' Kemaman', '9', '24'),
('LOCATION:306', ' Kertih', '9', '167'),
('LOCATION:307', ' Kuala Terengganu', '9', '25'),
('LOCATION:309', ' Setiu', '9', '168');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
