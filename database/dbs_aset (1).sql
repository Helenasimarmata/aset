-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Agu 2023 pada 10.11
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbs_aset`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alat`
--

CREATE TABLE `alat` (
  `id_alat` int(5) NOT NULL,
  `nama_alat` varchar(40) NOT NULL,
  `no_seri` varchar(20) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `tahun` int(4) NOT NULL,
  `status_barang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alat`
--

INSERT INTO `alat` (`id_alat`, `nama_alat`, `no_seri`, `merk`, `tahun`, `status_barang`) VALUES
(1, 'Proyektor', 'Mk-0001', 'Thosiba', 2020, 'Dipinjam'),
(2, 'Blower Thosiba A-34', 'Mk-00012222', 'Thosiba', 2021, 'Dipinjam'),
(3, 'Contoh', '32323', 'Honda', 2018, 'Ada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bagian`
--

CREATE TABLE `bagian` (
  `id_bagian` int(5) NOT NULL,
  `nama_bagian` varchar(50) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bagian`
--

INSERT INTO `bagian` (`id_bagian`, `nama_bagian`, `id_user`) VALUES
(2, 'Selatan', 5),
(3, 'Utara', 6),
(4, 'timur', 7),
(6, 'Operasional', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_konseling`
--

CREATE TABLE `detail_konseling` (
  `id_detail` int(5) NOT NULL,
  `id_konseling` int(5) NOT NULL,
  `id_pertanyaan` int(5) NOT NULL,
  `nilai` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_konseling`
--

INSERT INTO `detail_konseling` (`id_detail`, `id_konseling`, `id_pertanyaan`, `nilai`) VALUES
(1, 3, 1, 2),
(2, 3, 2, 2),
(3, 3, 3, 1),
(4, 3, 4, 3),
(5, 3, 5, 2),
(6, 3, 6, 1),
(7, 3, 7, 3),
(8, 3, 8, 1),
(9, 3, 9, 2),
(10, 3, 10, 0),
(11, 3, 11, 1),
(12, 3, 12, 3),
(13, 3, 13, 0),
(14, 3, 14, 0),
(15, 3, 15, 1),
(16, 3, 16, 3),
(17, 3, 17, 2),
(18, 3, 18, 0),
(19, 3, 19, 2),
(20, 3, 20, 0),
(21, 3, 21, 0),
(22, 3, 22, 2),
(23, 3, 23, 2),
(24, 3, 24, 0),
(25, 3, 25, 0),
(26, 3, 26, 0),
(27, 3, 27, 1),
(28, 3, 28, 0),
(29, 3, 29, 0),
(30, 3, 30, 1),
(31, 3, 31, 0),
(32, 3, 32, 2),
(33, 3, 33, 1),
(34, 3, 34, 1),
(35, 3, 35, 2),
(36, 3, 36, 0),
(37, 3, 37, 2),
(38, 3, 38, 2),
(39, 3, 39, 3),
(40, 3, 40, 0),
(41, 3, 41, 2),
(42, 3, 42, 0),
(43, 4, 1, 1),
(44, 4, 2, 0),
(45, 4, 3, 0),
(46, 4, 4, 0),
(47, 4, 5, 0),
(48, 4, 6, 0),
(49, 4, 7, 0),
(50, 4, 8, 0),
(51, 4, 9, 0),
(52, 4, 10, 0),
(53, 4, 11, 0),
(54, 4, 12, 0),
(55, 4, 13, 0),
(56, 4, 14, 0),
(57, 4, 15, 0),
(58, 4, 16, 0),
(59, 4, 17, 0),
(60, 4, 18, 0),
(61, 4, 19, 0),
(62, 4, 20, 0),
(63, 4, 21, 0),
(64, 4, 22, 0),
(65, 4, 23, 0),
(66, 4, 24, 0),
(67, 4, 25, 0),
(68, 4, 26, 0),
(69, 4, 27, 0),
(70, 4, 28, 0),
(71, 4, 29, 0),
(72, 4, 30, 0),
(73, 4, 31, 0),
(74, 4, 32, 2),
(75, 4, 33, 0),
(76, 4, 34, 0),
(77, 4, 35, 0),
(78, 4, 36, 0),
(79, 4, 37, 0),
(80, 4, 38, 0),
(81, 4, 39, 0),
(82, 4, 40, 0),
(83, 4, 41, 2),
(84, 4, 42, 0),
(85, 5, 1, 0),
(86, 5, 2, 0),
(87, 5, 3, 0),
(88, 5, 4, 0),
(89, 5, 5, 0),
(90, 5, 6, 0),
(91, 5, 7, 0),
(92, 5, 8, 0),
(93, 5, 9, 0),
(94, 5, 10, 0),
(95, 5, 11, 0),
(96, 5, 12, 0),
(97, 5, 13, 0),
(98, 5, 14, 0),
(99, 5, 15, 0),
(100, 5, 16, 0),
(101, 5, 17, 0),
(102, 5, 18, 0),
(103, 5, 19, 0),
(104, 5, 20, 0),
(105, 5, 21, 0),
(106, 5, 22, 0),
(107, 5, 23, 0),
(108, 5, 24, 0),
(109, 5, 25, 0),
(110, 5, 26, 0),
(111, 5, 27, 0),
(112, 5, 28, 0),
(113, 5, 29, 0),
(114, 5, 30, 0),
(115, 5, 31, 0),
(116, 5, 32, 0),
(117, 5, 33, 0),
(118, 5, 34, 0),
(119, 5, 35, 0),
(120, 5, 36, 0),
(121, 5, 37, 0),
(122, 5, 38, 0),
(123, 5, 39, 0),
(124, 5, 40, 0),
(125, 5, 41, 0),
(126, 5, 42, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(5) NOT NULL,
  `nama_jenis` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`) VALUES
(7, 'Depresi'),
(8, 'Kecemasan'),
(9, 'Stress');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konseling`
--

CREATE TABLE `konseling` (
  `id_konseling` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `tanggal_konsul` date NOT NULL,
  `baca` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konseling`
--

INSERT INTO `konseling` (`id_konseling`, `username`, `tanggal_konsul`, `baca`) VALUES
(3, 'eren', '2023-08-03', 'R'),
(4, 'eren', '2023-08-04', 'R'),
(5, 'helena.123', '2023-08-04', 'R');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuisioner`
--

CREATE TABLE `kuisioner` (
  `id_kuisioner` int(5) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jurusan` varchar(60) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `pendidikan_terakhir` varchar(12) NOT NULL,
  `rekomendasi` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `status_perkawinan` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_layanan` varchar(100) NOT NULL,
  `bentuk_layanan` varchar(20) NOT NULL,
  `soal1` text NOT NULL,
  `soal2` text NOT NULL,
  `soal3` text NOT NULL,
  `soal4` text NOT NULL,
  `soal5` text NOT NULL,
  `soal6` text NOT NULL,
  `jadwal` varchar(50) NOT NULL,
  `hal_lain` varchar(100) NOT NULL,
  `ppsdm` varchar(60) NOT NULL,
  `media` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kuisioner`
--

INSERT INTO `kuisioner` (`id_kuisioner`, `username`, `email`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `jurusan`, `prodi`, `semester`, `pendidikan_terakhir`, `rekomendasi`, `status`, `no_hp`, `status_perkawinan`, `alamat`, `jenis_layanan`, `bentuk_layanan`, `soal1`, `soal2`, `soal3`, `soal4`, `soal5`, `soal6`, `jadwal`, `hal_lain`, `ppsdm`, `media`) VALUES
(1, 'eren', '1@gmail.com', 'Eren Spautra', 'Baradatu', '0001-01-01', 'Sistem Informasi', 'Ilmu Komputer', '1', 'SMA', 'Jurusan/Prodi/Unit', 'Dosen', '1', 'Belum Menikah', '1', 'Konsultasi Anak', '1', '1', 'Sedikit mengganggu', '1', 'Sakit Kepala', '1', 'Pernah', 'Senin Pagi (jam sesuai kesepakatan)', '1', 'Teman', 'Offline (Gedung E)'),
(2, 'helena.123', 'helena@gmail.com', 'helena', 'lampung', '2001-12-04', 'jtpui', 'informatika', '7', 'SMA', 'Jurusan/Prodi/Unit', 'Dosen', '6541762458', 'Belum Menikah', 'belwis', 'Konsultasi Dewasa', '3 bln', '3 bln', 'Cukup berat', 'teman', 'Sakit Kepala', 'relaxing ', 'Belum Pernah', 'Selasa Pagi (jam sesuai kesepakatan)', 'bisa mengikuti dengan baik ', 'Dosen Wali', 'Offline (Gedung E)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `npm` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `npm`, `username`, `nama_mahasiswa`, `fakultas`, `jurusan`, `jk`, `no_hp`, `email`) VALUES
(1, '1819637263', '', 'Maulana Islami', 'Ilmu Komputer', 'Sistem Informasi', 'Laki-laki', '082121212', 'maulana@gmail.com'),
(2, '111', 'novan', 'Arya novan skom', 'Ilmu Komputer', 'Siste Informasi', 'Laki-laki', '081313207749', 'novanone.an@gmail.com'),
(3, '222222', 'eren', 'Eren', 'Ilmu Komputer', 'Teknik Informatika', 'Laki-laki', '081313207749', '1@gmail.com'),
(4, '777', 'putri', 'Putri Yulia', 'Ilmu Komputer', 'Sistem Informasi', 'Perempuan', '0832635623', 'putri@gmail.com'),
(6, '1223', 'helena.123', 'helena', 'fakultas teknik inforrmatika', 'jtpi', 'Perempuan', '125664865', 'helena@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `id_alat` int(5) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `tanggal_peminjaman` varchar(20) NOT NULL,
  `tanggal_kembali` varchar(20) NOT NULL,
  `alasan` varchar(100) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `baca` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `username`, `id_alat`, `tanggal_pengajuan`, `tanggal_peminjaman`, `tanggal_kembali`, `alasan`, `keterangan`, `baca`) VALUES
(2, 'novan', 1, '2023-07-24', '2023-07-25', '2023-07-25', 'ada aja', 'Ditolak', 'R'),
(3, 'eren', 2, '2023-07-25', '', '', 'Acara seminar', 'Ditolak', 'R'),
(4, 'putri', 2, '2023-07-27', '2023-07-27', '2023-07-27', 'Acara seminar HIMA SI', 'Dikembalikan', 'R'),
(5, 'helena.123', 1, '2023-08-04', '2023-08-04', '', 'presentasi sidang', 'Disetujui', 'R'),
(6, 'novan', 3, '2023-08-18', '', '', 'Acara Wisuda', 'Validasi', 'R');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman_ruang`
--

CREATE TABLE `peminjaman_ruang` (
  `id_peminjaman` int(5) NOT NULL,
  `username` varchar(40) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `tanggal_peminjaman` varchar(12) NOT NULL,
  `tanggal_kembali` varchar(12) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `ruangan` varchar(40) NOT NULL,
  `keterangan` varchar(60) NOT NULL,
  `baca` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman_ruang`
--

INSERT INTO `peminjaman_ruang` (`id_peminjaman`, `username`, `tanggal_pengajuan`, `tanggal_peminjaman`, `tanggal_kembali`, `tujuan`, `ruangan`, `keterangan`, `baca`) VALUES
(1, 'novan', '2023-08-01', '2023-08-01', '2023-08-01', 'Acara Pelantikan HIMA', 'G-A2', 'Dikembalikan', 'R'),
(2, 'eren', '2023-08-03', '', '', 'Acara Wisuda', '', 'Ditolak', 'R'),
(3, 'helena.123', '2023-08-04', '2023-08-04', '', 'rapat hmif', 'e202', 'Disetujui', 'R'),
(4, 'novan', '2023-08-29', '', '', 'Acara Gladi', '', 'Validasi', 'R');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id_pertanyaan` int(5) NOT NULL,
  `id_jenis` int(5) NOT NULL,
  `nama_pertanyaan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pertanyaan`
--

INSERT INTO `pertanyaan` (`id_pertanyaan`, `id_jenis`, `nama_pertanyaan`) VALUES
(1, 9, 'Menjadi marah karena hal-hal kecil/sepele'),
(2, 8, 'Mulut terasa kering'),
(3, 7, 'P3'),
(4, 8, 'P4'),
(5, 7, 'P5'),
(6, 9, 'P6'),
(7, 8, 'P7'),
(8, 9, 'P8'),
(9, 8, 'P9'),
(10, 7, 'P10'),
(11, 9, 'P11'),
(12, 9, 'P12'),
(13, 7, 'P13'),
(14, 9, 'P14'),
(15, 8, 'P15'),
(16, 7, 'P16'),
(17, 7, 'P17'),
(18, 9, 'P18'),
(19, 8, 'P19'),
(20, 8, 'P20'),
(21, 7, 'P21'),
(22, 9, 'P22'),
(23, 8, 'P23'),
(24, 7, 'P24'),
(25, 8, 'P25'),
(26, 7, 'P26'),
(27, 9, 'P27'),
(28, 8, 'P28'),
(29, 9, 'P29'),
(30, 8, 'P30'),
(31, 7, 'P31'),
(32, 9, 'P32'),
(33, 9, 'P33'),
(34, 7, 'P34'),
(35, 9, 'P35'),
(36, 8, 'P36'),
(37, 7, 'P37'),
(38, 7, 'P38'),
(39, 9, 'P39'),
(40, 8, 'P40'),
(41, 8, 'P41'),
(42, 7, 'P42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(60) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(2, 'admin', '202cb962ac59075b964b07152d234b70', 'admin'),
(3, 'novan', '202cb962ac59075b964b07152d234b70', 'Mahasiswa'),
(4, 'eren', '202cb962ac59075b964b07152d234b70', 'Mahasiswa'),
(5, 'putri', '202cb962ac59075b964b07152d234b70', 'Mahasiswa'),
(7, 'helena.123', '202cb962ac59075b964b07152d234b70', 'Mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat`
--
ALTER TABLE `alat`
  ADD PRIMARY KEY (`id_alat`);

--
-- Indexes for table `bagian`
--
ALTER TABLE `bagian`
  ADD PRIMARY KEY (`id_bagian`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `detail_konseling`
--
ALTER TABLE `detail_konseling`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `konseling`
--
ALTER TABLE `konseling`
  ADD PRIMARY KEY (`id_konseling`);

--
-- Indexes for table `kuisioner`
--
ALTER TABLE `kuisioner`
  ADD PRIMARY KEY (`id_kuisioner`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indexes for table `peminjaman_ruang`
--
ALTER TABLE `peminjaman_ruang`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alat`
--
ALTER TABLE `alat`
  MODIFY `id_alat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `bagian`
--
ALTER TABLE `bagian`
  MODIFY `id_bagian` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `detail_konseling`
--
ALTER TABLE `detail_konseling`
  MODIFY `id_detail` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `konseling`
--
ALTER TABLE `konseling`
  MODIFY `id_konseling` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kuisioner`
--
ALTER TABLE `kuisioner`
  MODIFY `id_kuisioner` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `peminjaman_ruang`
--
ALTER TABLE `peminjaman_ruang`
  MODIFY `id_peminjaman` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_pertanyaan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
