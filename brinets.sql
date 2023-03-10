-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2023 at 09:29 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brinets`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `num_of_posts` int(11) NOT NULL DEFAULT 0,
  `date_joined` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `username`, `password`, `num_of_posts`, `date_joined`, `status`) VALUES
(22, 'google@gmail.com', 'Google', '$2y$10$tueoIO2nLyYlcrFwRZSOWu/VdE9AA.6mOOEI05AVn5Xh.hD0QbLH2', 4, '2019-03-16 15:59:07', '1'),
(24, 'Old@user.com', 'OldUser', '$2y$10$OHAunR0MjV2tp4cToEWnQuSkkvx/KTo/PhBLgeC8wRWHfQXoL59.a', 2, '2017-01-01 16:33:53', '1'),
(25, 'beta@beta.beta', 'betabeta', '$2y$10$h1bnVn7s3TMme19JRvxWGep/MVaUzHAH8jxCLgj08BFt8P.Sdv15e', 1, '2019-03-17 01:54:09', '1'),
(26, 'email@gmai.com', 'TonyStark', '$2y$10$iR3abChorjCykqEiBKAUs.eRbeIEjCu81vu6nGLDl80HJhm4Jfthe', 0, '2019-03-17 16:08:55', '1'),
(27, 'bongcenchoi@gmail.com', 'MrBong', '$2y$10$JFlDju4t8rxBKtI1WrisrOWKdlvpL7Ra/Y4OxzoUyLdC8r.RrxRoO', 1, '2019-03-18 13:30:56', '1'),
(28, 'GabrielDejan@gmail.com', 'Garziel', '$2y$10$KcYtmij7rWdmTEJTpHlAjeTllTZykRVFSFRnzWfHX7jAm805JL7lu', 0, '2019-03-18 13:31:23', '1'),
(30, 'nky22112002@gmail.com', 'ky123', '$2y$10$ADesfkxoceT5IVWrzcgOCOIzi2f.cqjOkdZCJemKNxMhx1I7n1RhG', 0, '2023-03-08 23:49:13', '1'),
(31, 'nky123@gmail.com', 'abcde', '$2y$10$YF0bGn8cKZhzp08jVM2Kz.6Y9IemNzoXfI6QZKfx8Pwc5O2I/oWu2', 0, '2023-03-09 00:11:14', '1'),
(32, 'nky123@gmail.com', 'abcdef', '$2y$10$D2CoajjqwOIQuRI9NMRIzuUV3fws4VnDBevjiN2WxQ9poQnrl8t8K', 0, '2023-03-09 09:53:12', '1'),
(33, 'nky22112002@gmail.com', 'abcdefg', '$2y$10$URcU6rRdz3Ss2ebcBC5U/OCwvCNmvzwIxJh68T7Nq79c9sG0sWlVK', 0, '2023-03-10 09:27:56', '2'),
(34, 'dienlk456@gmail.com', 'qwert', '$2y$10$WF1lG6WPbJvyC2i9EYDKceuVPUhpG/cH49kDjZZ05CjCECG2.CpSK', 0, '2023-03-10 10:33:48', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
