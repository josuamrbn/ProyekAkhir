-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2022 pada 06.15
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sangkarnihutadb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `halaman`
--

CREATE TABLE `halaman` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Username` int(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `Username`, `password`) VALUES
(3, 0, '$2y$10$PCFs/rmQ31DBxmg/myt00u3sjpYXaunuzfTW.fxQ0YwNJeg2ErhzK'),
(4, 0, '$2y$10$odYjuW/EDPDzAwRvy1PqN.aRj2K6X.tgd97tfC4.USnHBb2ZzIBRK'),
(5, 0, '$2y$10$KIk68AnAXu9O5MpkahGpP.J9daGIhz3YjW.CnhYjS9WW6dfRJkRFK'),
(6, 0, '$2y$10$7u13qVcTdU6jD1dEl.tnJuFf48I3Wd/2i8mkIcxuDRqUX9GhIVcO.'),
(7, 0, '$2y$10$yD6VA0ZSVbstpm4AATo69ec3ZBrs.Il8X7jbjPP6AJGBjc4IL3nne'),
(8, 0, '$2y$10$tNdi0P8B8Qqzl/u/pTU8nu8QXAwb3bv7nx/Lh6odMi5Mqzp9/cEhW'),
(9, 0, '$2y$10$PnnfaxI9Z/nKen0oHx623OnVOSgVLLPa39B1BX173IS2qyVqzUgmm'),
(10, 0, '$2y$10$jsNhi8VrpmGU5SJJb7HIzOP1H//7WFUEDvkKFvs.FxFQAErezIZgO'),
(11, 0, '$2y$10$U6RCBAGkp.CM.5rEESEHsuBb3.Eqrqfy7svnCzJv9XvbJQyLLwWDK'),
(12, 0, '$2y$10$QpU0O7SI.vMOgySCzIH60.YZTBTs636.pupF1ltMQj5XvzXYCi2pa'),
(13, 0, '$2y$10$nJxnjWxrlxepbhkROiyX0.Js.zsKoXGUzGUy5giakiY2PR2HwzZfa'),
(14, 0, '$2y$10$qJqsadZ25MgLmVXTBW/gkuXlNFqlMR5wmnij7UT4gKS9MNISs8ww6'),
(15, 0, '$2y$10$r/Tcfi.ecinM8uAUiLlbzeB2M6uuQGPS9oSE/mRJiImbRgo2V2/5K'),
(16, 0, '$2y$10$1ME4Pbfx65sRwWUpkn7KBeXKrr2BeM8G7W2BZK/qDZhzQcayVkqne'),
(17, 0, '$2y$10$wLUT8aYztITW2RwFc5uIiOhkIsQyzUfBuLBUlCllUkWQvl0sFiTZW'),
(18, 0, '$2y$10$1XlxU.oW2RneuBJTAcmjcufYlZRQlE60LKZT8Pxl0jjsSgQScCgHu'),
(19, 0, '$2y$10$KK4Fb9hpGsTTk1Zm6fJBHe//N4dxgBCKKg6T1TX0CnTFknBMoZP5G'),
(20, 0, '$2y$10$6I8Ap3czPlxYTT7qoI4ovOT.0v4oun9xVcqYZN.dsjPsgPvij3KaG'),
(21, 0, '$2y$10$.knGxhF7EXkdopJ/9rf4LeO4Bt/drnPskbH3i4hORu9PgYKST1jie'),
(22, 0, '$2y$10$1L1BGtlUHmHeTHL/iqD1wOHdq1lHmFPpgnVDozqIvYBQa6Wxi1m4C'),
(23, 0, '$2y$10$2A7jeB91kyOwqgN/JaE4O.iU03xVONfPpFeU4Ga7sOaCx1opZ7ip.'),
(24, 0, ''),
(25, 0, '$2y$10$SCwyz.lzcRNXrWktknkW6u4EaxPDdUlL74BabCFNIvwakJ5w.WC3S'),
(26, 0, '$2y$10$BvZbqVQBMatwGYIPzwsVweNHS1WiJoc.A/QTLPtmzbaI27FyYHP.S');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `halaman`
--
ALTER TABLE `halaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
