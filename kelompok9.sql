-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Okt 2022 pada 16.08
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelompok9`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `penulis` char(250) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `penerbit` varchar(50) DEFAULT NULL,
  `cover` varchar(200) DEFAULT NULL,
  `sinopsis` text DEFAULT NULL,
  `stok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `penulis`, `tahun`, `judul`, `kota`, `penerbit`, `cover`, `sinopsis`, `stok`) VALUES
(32, '4fdsdf', 2022, 'bukuu', 'fdzs', 'zdf', '1.png', 'aaaa', 32),
(324, 'dsa', 2022, 'sadfd', 'f', 'f', '3.png', 'sdfad', 21),
(32413, 'dfsafd', 2022, 'xcvzc', 'xzvc', 'xvz', '1.png', 'sdafsdf', 12),
(32443, 'dsvds', 2022, 'dsfsd', 'sadfasdf', 'sadfd', '4.png', 'sdfsadf', 231),
(155101, 'Pramoedya Ananta Toer', 2010, 'Rumah Kaca', 'Jakarta', 'Lentera Dipantera', '1.png', 'Lentera Dipantera', 4),
(155102, '?Andrea Hirata', 2010, '?Laskar Pelangi', 'Jakarta', 'Bentang Pustaka', '2.png', 'Laskar pelangi merupakan?novel fiksi?yang ditulis oleh Andrea Hirata.?Novel?tersebut mengisahkan tentang kehidupan 10 anak di Pulau Belitung,', 5),
(155103, 'Tere Liye', 2010, 'Tentang Kamu', 'Jakarta', 'Republika Penerbit', '1.png', 'Tentang Kamu, merupakan novel karya Tere Liye. Novel tersebut menceritakan kisah hidup wanita dari keluarga miskin yang tinggal di Pulau Bungin,', 6),
(155104, 'Dhonny Dhirgantoro', 2010, '5 Cm', 'Jakarta', 'PT. Grasindo', '2.png', '5 Cm, merupakan novel yang mengisahkan tentang lima sahabat bernama Zafran, Arial, Ian, Genta dan seorang wanita bernama Riani.', 7),
(155105, 'Himawan Pratists', 2011, 'Memahami Film', 'Bandung', 'Homerian Pustaka', '1.png', 'Masih banyak orang yang melihat film sebagai sesuatu yang mustahil untuk dijalankan. Film bisa dibuat oleh siapa saja dan banyak yang berminat untuk belajar membuat film.', 8),
(155106, 'Yuliadi Soekardi', 2011, 'Sangkuriang', 'Bandung', 'CV. Putaka Setia', '2.png', 'Buku ini mengisahkan tentang seorang anak yang mencintai ibunya. Namun, cinta tersebut berwujud cinta antara pria kepada seorang wanita.?', 9),
(155107, 'Andrea Hirata', 2011, 'Ayah', 'Bandung', 'Bentang Pustaka', '1.png', 'Novel karya Andrea Hirata ini merupakan trilogi dari novel karya beliau yang berjudul Laskar Pelangi.', 10),
(155108, 'Darwis Tere Liye', 2011, 'Rindu', 'Bandung', 'Republika', '2.png', 'Novel Karya Darwis Tere Liye ini mengisahkan tentang perjalanan panjang kerinduan yang membebani hati.', 11),
(155109, 'Windry Ramadhina', 2011, 'London', 'Bandung', 'PT. Gramedia Pustaka Utama', '1.png', 'Novel berjudul London ini mengisahkan tentang kehidupan seorang penulis novel romance bernama Gilang.', 12),
(155110, 'Agnes Davonar', 2015, 'Surat Kecil untuk Tuhan', 'Surabaya', 'Inandra Published', '2.png', 'Novel ini mengisahkan tentang perjuangan seorang gadis untuk melawan kanker ganas.', 13),
(155111, 'Andrea Hirata', 2016, 'Sang Pemimpi', 'Surabaya', 'Bentang Pustaka', '1.png', 'Novel karya Andrea Hirata ini mengisahkan tentang kehidupan tiga anak Melayu Belitong bernama Arai, Ikal dan Jimbron', 14),
(155112, 'Ahmad Fuadi', 2017, 'Negeri 5 Menara', 'Surabaya', 'PT. Gramedia Pustaka Utama', '2.png', 'Novel karya Ahmad Fuadi ini sudah difilmkan. Tokoh utama di dalam novel ini adalah Alif. Ia lahir di Minangkabau.', 15),
(155113, 'Pramoedya Ananta Toer', 2018, 'Rumah Kaca', 'Yogyakarta', 'Lentera Dipantera', '1.png', 'Lentera Dipantera', 16),
(155114, 'Himawan Pratists', 2011, 'Memahami Film', 'Bandung', 'Homerian Pustaka', '2.png', 'Masih banyak orang yang melihat film sebagai sesuatu yang mustahil untuk dijalankan. Film bisa dibuat oleh siapa saja dan banyak yang berminat untuk belajar membuat film.', 17),
(234143, 'dsfafav', 2112, 'vcxzvvfds', 'vsvadvavdvsa', 'vdsfadsf', '3.png', 'xcvzcvxzv', 32),
(322413, 'sdfadsfa', 2022, 'd', 'd', 'dfadsf', '4.png', 'zxvcxzcv', 4332),
(324134, 'dsfadf', 2004, 'fdsafdsgd', 'fvds', 'zdsvfd', '4.png', 'czxvcxvz', 223),
(4322134, 'safsafdaf', 0000, 'sadfsadfssfasf', 'asdfad', 'fasfasfd', '1.png', 'xzvczvc', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_peminjaman`
--

CREATE TABLE `detail_peminjaman` (
  `id_detail_peminjaman` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `kuantitas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_peminjaman`
--

INSERT INTO `detail_peminjaman` (`id_detail_peminjaman`, `id_buku`, `id_peminjaman`, `kuantitas`) VALUES
(4, 32, 7, 1),
(6, 32413, 9, 1),
(7, 32413, 10, 1),
(8, 32443, 11, 1),
(9, 322413, 12, 1),
(13, 32, 16, 1),
(14, 32443, 17, 1),
(15, 324, 18, 1),
(16, 32443, 19, 1),
(17, 322413, 20, 1),
(18, 324, 21, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pengembalian`
--

CREATE TABLE `detail_pengembalian` (
  `id_detail_pengembalian` int(11) NOT NULL,
  `id_pengembalian` int(11) NOT NULL,
  `ada` int(11) DEFAULT NULL,
  `hilang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'X A'),
(2, 'X B'),
(3, 'XI A'),
(4, 'XI B'),
(5, 'XII A'),
(6, 'XII B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_siswa`, `id_petugas`, `tanggal_peminjaman`, `tanggal_pengembalian`) VALUES
(7, 4255432, 7, '2022-10-02', '2022-10-16'),
(9, 4255432, 7, '2022-10-02', '2022-10-16'),
(10, 2314231, 7, '2022-10-02', '2022-10-16'),
(11, 2323323, 1, '2022-10-02', '2022-10-16'),
(12, 2323323, 1, '2022-10-02', '2022-10-16'),
(16, 2323323, 7, '2022-10-03', '2022-10-17'),
(17, 3214234, 7, '2022-10-03', '2022-10-17'),
(18, 2323323, 7, '2022-10-03', '2022-10-17'),
(19, 2323323, 1, '2022-10-03', '2022-10-17'),
(20, 2323323, 1, '2022-10-03', '2022-10-17'),
(21, 3214234, 1, '2022-10-03', '2022-10-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_pengembalian` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `tanggal_pengembalian` date DEFAULT NULL,
  `denda` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `nip` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama` char(100) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`nip`, `username`, `nama`, `jenis_kelamin`, `alamat`, `password`) VALUES
(1, 'adi', 'adi nugroho', 'L', 'cangkringmalang, beji, pasuruan', 'adi123'),
(7, 'ibnu', 'ibnu hajar', 'L', 'wonokoyo, beji, pasuruan', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(11) NOT NULL,
  `nama` char(100) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `jenis_kelamin`, `alamat`, `id_kelas`) VALUES
(2314231, 'budi', 'L', 'safsdaf', 1),
(2323323, 'weedfs', 'P', 'asdsadas', 5),
(3214234, 'dsafsadf', 'L', 'sdafdsfsafdfas', 6),
(3223232, 'dsacsz', 'L', 'xczcz', 4),
(4255432, 'werfads', 'L', 'asfdasfd', 5),
(16650101, 'Maulana Alif Anugrah', 'L', 'Lowokwaru', 1),
(16650102, 'Nadya Saphira', 'P', 'Dau', 1),
(16650103, 'Feggy Rizkiana Herman?', 'L', 'Batu', 1),
(16650104, 'Armelia nur asyiffa?', 'P', 'Ketawanggede', 2),
(16650105, 'Feggy Rizkiana Herman?', 'L', 'Karang Ploso', 2),
(16650106, 'Hazana Delfani?', 'P', 'Blimbing', 2),
(16650107, 'Lucky Wiratama Suganda?', 'L', 'Kepanjen', 3),
(16650108, 'ristami annisa?', 'P', 'Sukun', 3),
(16650109, 'Yolanda Novitri Setiawan', 'L', 'Wagir', 3),
(16650110, 'Aulia Rahmawaty?', 'P', 'Dieng', 4),
(16650111, 'Denis Muhammad Irfan?', 'L', 'Lowokwaru', 4),
(16650112, 'Rida Himyati Hasna', 'P', 'Dau', 4),
(16650113, 'Ichsan nurmansyah', 'L', 'Batu', 5),
(16650114, 'sinta komara?', 'P', 'Ketawanggede', 5),
(16650115, 'muhammad yusuf?', 'L', 'Karang Ploso', 5),
(16650116, 'Widi Dwi Adhawati?', 'P', 'Blimbing', 6),
(16650117, 'Dwi Putri Januari?', 'L', 'Kepanjen', 6),
(16650118, 'Meisa damayanti', 'P', 'Sukun', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `userr`
--

CREATE TABLE `userr` (
  `id_user` int(11) NOT NULL,
  `level` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `userr`
--

INSERT INTO `userr` (`id_user`, `level`) VALUES
(1, 'admin'),
(2, 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  ADD PRIMARY KEY (`id_detail_peminjaman`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `detail_peminjaman_ibfk_2` (`id_peminjaman`);

--
-- Indeks untuk tabel `detail_pengembalian`
--
ALTER TABLE `detail_pengembalian`
  ADD PRIMARY KEY (`id_detail_pengembalian`),
  ADD KEY `id_pengembalian` (`id_pengembalian`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `peminjaman_ibfk_2` (`id_petugas`),
  ADD KEY `peminjaman_ibfk_1` (`id_siswa`);

--
-- Indeks untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`),
  ADD KEY `fk_peminjaman` (`id_peminjaman`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `kelas_ibfk_1` (`id_kelas`);

--
-- Indeks untuk tabel `userr`
--
ALTER TABLE `userr`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  MODIFY `id_detail_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `detail_pengembalian`
--
ALTER TABLE `detail_pengembalian`
  MODIFY `id_detail_pengembalian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `nip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `nis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  ADD CONSTRAINT `detail_peminjaman_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
  ADD CONSTRAINT `detail_peminjaman_ibfk_2` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjaman` (`id_peminjaman`);

--
-- Ketidakleluasaan untuk tabel `detail_pengembalian`
--
ALTER TABLE `detail_pengembalian`
  ADD CONSTRAINT `detail_pengembalian_ibfk_1` FOREIGN KEY (`id_pengembalian`) REFERENCES `pengembalian` (`id_pengembalian`);

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`nis`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`nip`);

--
-- Ketidakleluasaan untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `fk_peminjaman` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjaman` (`id_peminjaman`);

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
