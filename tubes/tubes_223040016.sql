-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2023 at 02:11 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_223040016`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `admin` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('user','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `status`) VALUES
(9, 'davin', '$2y$10$3JvEk0r6QKYbIib55JcPb.Y4FH3BSJijaMNroxuhLzI5qxJMeuYmW', 'user'),
(10, 'samu', '$2y$10$DFD.jk0zJ.aa0lQZx1KaN.awsytYOEqWF1N6U/aINB3XKSpOxQNqC', 'user'),
(11, 'dav', '$2y$10$wyA7UvbNTrP7M0BIgbUBnuCOdajpw0gW3x6kdN7cMZ5Cllw6eEHBe', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` int NOT NULL,
  `wisata` varchar(250) NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `wisata`, `gambar`, `deskripsi`, `harga`) VALUES
(1, 'Maribaya', 'maribaya.jpg', 'The Lodge Maribaya adalah salah satu tempat wisata di Lembang yang menawarkan berbagai hal pada pengunjung. Disini kita bisa melakukan berbagai akitivitas seperti camping, trekking mengelilingi area hutan pinus yang indah dll.', 'Tiket Masuk Rp 18.000/orang'),
(2, 'Kawah Putih', 'kawah putih.jpg', 'Tempat wisata Kawah Putih Ciwidey Bandung merupakan salah satu tempat wisata di Bandung Selatan yang populer banget. Terletak di kaki Gunung Patuha.', 'Tiket masuk Rp 20.000 - 35.000/orang'),
(3, 'Dago Dream Park', 'dago.jpg', 'Area Dago Dream Park cukup luas, dengan kontur berbukit. Suasana alami di tempat ini terjaga sehingga terasa lebih fresh. Banyaknya pilihan wahana, spot berfoto, dan juga fasilitas yang ada tentunya bakal bisa memanjakan liburan anda sekeluarga.', 'Tiket masuk Rp 20.000/orang'),
(5, ' Orchid Forest Cikole', 'orchid.jpg', 'Orchid Forest Cikole adalah hutan anggrek terbesar di Indonesia. Enggak main-main, jumlah anggrek di sini mencapai 20.000 tanaman! Selain anggrek, barisan pohon pinus yang ada di sana juga membuat pemandangan menjadi sangat indah.', 'Tiket masuk Rp 40.000/orang'),
(6, 'The Great Asia Africa Lembang', 'asia.jpeg', 'The Great Asia Africa adalah objek wisata yang menyajikan pesona keindahan arsitektur, dan budaya yang ada di kawasan Asia dan Africa dalam satu kawasan.', 'Tiket masuk Rp 50.000/orang'),
(7, 'Jendela Alam', 'jendela.jpeg', 'Konsep wisata edukasi di tempat ini kental sekali. Ngga heran kalau menjadi destinasi field trip dari berbagai sekolah. Ngga cuma wisata belaka, anak anda bisa mengikuti berbagai kegiatan edukatif yang disiapkan disini.', 'Tiket masuk Rp 20.000/orang'),
(8, 'Farm House', 'house.jpeg', 'Dengan desain atmosfer eropa, banyak spot unik yang pastinya bakal menarik untuk swafoto/selfie, dan di posting di media sosial. memang, Farmhouse Lembang sejauh ini menawarkan wisata foto sebagai daya tarik utamanya.', 'Tiket masuk Rp 25.000/orang'),
(9, 'Bukit Moko', 'moko.jpeg', 'Bukit Moko adalah salah satu spot paling populer di Bandung untuk melihat sunset atau cahaya kota Bandung di malam hari dari ketinggian! Bisa dikunjungi dengan melakukan perjalanan dengan kendaraan bermotor melalui Jalan Padasuka dan Jalan Cimenyan.', 'Tiket masuk Rp 15.000/orang'),
(10, 'Tangkuban Perahu', 'tangkuban.jpeg', 'Gunung Tangkuban Perahu, gunung stratovolcano yang masih aktif dan menjadi tempat wisata populer di Bandung sejak lama. Pengunjung bisa berkunjung sampai ke bibir kawah, dan melihat langsung isi kawah seperti apa.', 'Tiket masuk Rp 22.000 - 31.000/orang'),
(11, 'Sanghyang Heuleut', 'sanghyang.jpeg', 'Sanghyang Heuleut merupakan tempat wisata Bandung yang cocok untuk mandi dan berfoto. Bagi yang hobi menguji nyali, silakan melompat dari salah satu batu yang tingginya lebih dari 5 meter. Hati-hati buat yang kurang jago berenang.', 'Tiket masuk Rp 10.000/orang'),
(17, 'Dusun Bambu', 'bambu.jpeg', 'Kawasan Dusun Bambu merupakan salah satu tempat wisata di Lembang yang lagi hits. Lokasi ini menawarkan wisata alam dan kuliner yang dilengkapi berbagai wahana permainan. Tak ketinggalan spot-spot cantik untuk penggila selfie maupun fotografi.', 'Tiket masuk Rp 15.000/orang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
