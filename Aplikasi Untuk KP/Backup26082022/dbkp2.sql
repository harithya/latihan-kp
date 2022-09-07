-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Agu 2022 pada 08.39
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkp2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_atasan`
--

CREATE TABLE `master_atasan` (
  `id_atasan` int(5) NOT NULL,
  `nama_atasan` varchar(50) NOT NULL,
  `nip_atasan` varchar(10) NOT NULL,
  `noreg_atasan` int(10) NOT NULL,
  `jabatan_atasan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_atasan`
--

INSERT INTO `master_atasan` (`id_atasan`, `nama_atasan`, `nip_atasan`, `noreg_atasan`, `jabatan_atasan`) VALUES
(1, 'Yuliani Alzam', '780007360', 7398011, 'Pemimpin Cabang Bandung'),
(2, 'Imas Iin Lasmawati', '067906026', 7906026, 'Wakil Pemimpin Cabang Bandung'),
(3, 'Teguh Ridho Zaman', '118811065', 8811065, 'Asman Operasional'),
(4, 'Anwar Husen', '179117004', 9117004, 'Asman Administrasi dan Keuangan'),
(5, 'Willma Adisty', '118711012', 8711012, 'Asman Akuntansi'),
(6, 'Angga Trenggana', '128712102', 8712102, 'Asman Penjualan Retail'),
(7, 'Dedy Suryadin', '087308666', 7308666, 'Asman Penjualan Distributor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_bahan`
--

CREATE TABLE `master_bahan` (
  `id_bahan` int(5) NOT NULL,
  `jenis_bahan` varchar(50) NOT NULL,
  `nama_bahan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_bahan`
--

INSERT INTO `master_bahan` (`id_bahan`, `jenis_bahan`, `nama_bahan`) VALUES
(1, 'Beras Premium', 'Premium 5%'),
(2, 'Beras Premium', 'Premium 10%');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_cuti`
--

CREATE TABLE `master_cuti` (
  `id_pengajuancuti` int(5) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `nama_atasan` varchar(50) NOT NULL,
  `jumlah_hari` int(3) NOT NULL,
  `dari_tanggal` date NOT NULL,
  `sampai_tanggal` date NOT NULL,
  `tanggal_pengajuancuti` date NOT NULL,
  `alasan_cuti` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_cuti`
--

INSERT INTO `master_cuti` (`id_pengajuancuti`, `nama_pegawai`, `nama_atasan`, `jumlah_hari`, `dari_tanggal`, `sampai_tanggal`, `tanggal_pengajuancuti`, `alasan_cuti`) VALUES
(1, '11', '4', 2, '2022-08-29', '2022-08-30', '2022-08-22', 'keperluan keluarga'),
(2, '8', '6', 2, '2022-08-29', '2022-08-30', '2022-08-26', 'Ada Keperluan keluarga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_detailsampel`
--

CREATE TABLE `master_detailsampel` (
  `id_detailsampel` int(10) NOT NULL,
  `no_ni` int(5) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `kemasan_sampel` int(5) NOT NULL,
  `koli_sampel` int(9) NOT NULL,
  `kuantum_sampel` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_detailsampel`
--

INSERT INTO `master_detailsampel` (`id_detailsampel`, `no_ni`, `nama_produk`, `kemasan_sampel`, `koli_sampel`, `kuantum_sampel`) VALUES
(1, 0, '', 0, 0, 0),
(2, 0, 'Beras Premium CPPD Kabupaten Bandung', 15, 30, 450),
(3, 183, 'Beras Premium CPPD Kabupaten Bandung', 15, 3, 45),
(4, 184, 'Beras Premium CPPD Kota Bandung', 5, 20, 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_nirebag`
--

CREATE TABLE `master_nirebag` (
  `id_rebag` int(5) NOT NULL,
  `no_ni` int(5) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `tanggal_rebag` date NOT NULL,
  `gudang_rebag` varchar(50) NOT NULL,
  `koli_rebag` int(9) NOT NULL,
  `kuantum_rebag` int(9) NOT NULL,
  `bahan_rebag` varchar(50) NOT NULL,
  `nama_atasan` varchar(50) NOT NULL,
  `kemasansebelum_rebag` int(12) NOT NULL,
  `kemasansesudah_rebag` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_nirebag`
--

INSERT INTO `master_nirebag` (`id_rebag`, `no_ni`, `nama_produk`, `tanggal_rebag`, `gudang_rebag`, `koli_rebag`, `kuantum_rebag`, `bahan_rebag`, `nama_atasan`, `kemasansebelum_rebag`, `kemasansesudah_rebag`) VALUES
(1, 167, '1', '2022-08-26', 'Gudang Cisaranten Kidul', 10, 50, '2', '6', 25, 5),
(2, 168, '2', '2022-08-27', 'Gudang Cisaranten Kidul', 40, 400, '1', '7', 25, 10),
(3, 169, '2', '2022-08-27', 'Gudang Cisaranten Kidul', 43, 430, '1', '6', 25, 10),
(4, 170, '2', '2022-08-29', 'Gudang Cisaranten Kidul', 40, 400, '1', '6', 25, 10),
(5, 171, '1', '2022-08-29', 'Gudang Cisaranten Kidul', 40, 200, '1', '6', 25, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_nisampel`
--

CREATE TABLE `master_nisampel` (
  `id_sampel` int(5) NOT NULL,
  `no_ni` int(5) NOT NULL,
  `tanggal_sampel` date NOT NULL,
  `gudang_sampel` varchar(50) NOT NULL,
  `nama_atasan` int(5) NOT NULL,
  `hal_sampel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_nisampel`
--

INSERT INTO `master_nisampel` (`id_sampel`, `no_ni`, `tanggal_sampel`, `gudang_sampel`, `nama_atasan`, `hal_sampel`) VALUES
(1, 173, '2022-08-29', 'Gudang Cisaranten Kidul', 7, 'penjajakan kerjasama dengan bank bri'),
(2, 174, '2022-08-31', 'Gudang Utama', 5, 'penjajakan kerjasama dengan bank mandiri'),
(3, 175, '2022-08-20', 'Gudang Cisaranten Kidul', 5, 'penjajakan kerjasama dengan bank mandiri'),
(4, 176, '2022-08-24', 'Gudang Cisaranten Kidul', 2, 'penjajakan kerjasama dengan bank bukopin'),
(5, 177, '2022-08-25', 'Gudang Cisaranten Kidul', 3, 'penjajakan kerjasama dengan bank mandiri'),
(6, 178, '2022-08-25', 'Gudang Cisaranten Kidul', 5, 'penjajakan kerjasama dengan bank bpk'),
(7, 179, '2022-08-18', 'Gudang Cisaranten Kidul', 2, 'penjajakan kerjasama dengan bank bukopin'),
(8, 180, '2022-08-11', 'Gudang Cisaranten Kidul', 5, 'penjajakan kerjasama dengan bank bpk5'),
(9, 181, '2022-08-17', 'Gudang Cisaranten Kidul', 5, 'penjajakan kerjasama dengan bank bpk51'),
(10, 182, '2022-08-17', 'Gudang Cisaranten Kidul', 3, 'penjajakan kerjasama dengan bank bpk51'),
(11, 183, '2022-08-25', 'Gudang Cisaranten Kidul', 2, 'penjajakan kerjasama dengan bank bpk5'),
(12, 184, '2022-08-17', 'Gudang Cisaranten Kidul', 2, 'penjajakan kerjasama dengan bank bukopin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_noni`
--

CREATE TABLE `master_noni` (
  `id_noni` int(5) NOT NULL,
  `no_ni` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_noni`
--

INSERT INTO `master_noni` (`id_noni`, `no_ni`) VALUES
(1, 166),
(2, 167),
(3, 168),
(4, 169),
(5, 170),
(6, 171),
(7, 172),
(8, 173),
(9, 174),
(10, 175),
(11, 176),
(12, 177),
(13, 178),
(14, 179),
(15, 180),
(16, 181),
(17, 182),
(18, 183),
(19, 184);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_pegawai`
--

CREATE TABLE `master_pegawai` (
  `id_pegawai` int(5) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `nip` varchar(9) NOT NULL,
  `no_reg` int(9) NOT NULL,
  `golongan` varchar(5) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `jumlah_cuti` int(5) NOT NULL,
  `cuti_terpakai` int(5) NOT NULL,
  `sisa_cuti` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_pegawai`
--

INSERT INTO `master_pegawai` (`id_pegawai`, `nama_pegawai`, `nip`, `no_reg`, `golongan`, `jabatan`, `jumlah_cuti`, `cuti_terpakai`, `sisa_cuti`) VALUES
(1, 'Yuliani Alzam', '780007360', 7398011, 'X', 'Pemimpin Cabang Bandung', 12, 0, 0),
(2, 'Imas Iin Lasmawati', '67906026', 7906026, 'XII', 'Wakil Pemimpin Cabang Bandung', 12, 0, 0),
(3, 'Ni Nyoman Henny Dessyanti', '68106084', 8106084, 'XII', 'Auditor Muda Kancab Bandung SPI Regional V Bandung', 12, 0, 0),
(4, 'Teguh Ridho Zaman', '118811065', 8811065, 'XI', 'Asman Operasional', 12, 0, 0),
(5, 'Sucipta', '158415148', 8415148, 'VI', 'Manager DCMP', 12, 0, 0),
(6, 'Erlangga Surya', '96909199', 6909199, 'VII', 'Staf Seksi Operasional', 12, 0, 0),
(7, 'Anwar Husen', '179117004', 9117004, 'IX', 'Asman Administrasi dan Keuangan', 12, 0, 0),
(8, 'Yuki Yulyadin', '169216725', 9216725, 'VI', 'Staf Seksi Komersial', 12, 0, 0),
(9, 'Ahmad Ihlas Nurkarim', '199419203', 9419203, 'VII', 'Staf Seksi Komersial', 12, 0, 0),
(10, 'Doa Vega Adjie Pangestu', '199619241', 9619241, 'VI', 'Staf Seksi Komersial', 12, 0, 0),
(11, 'Cantika Gustiana', '169316297', 9316297, 'VIII', 'Kasir Minku Cabang Bandung', 12, 0, 0),
(12, 'Ende Raran', '198219679', 8219679, 'IX', 'Staf Seksi Administrasi dan Keuangan', 12, 0, 0),
(13, 'Willma Adisty', '118711012', 8711012, 'XI', 'Asman Akuntansi', 12, 0, 0),
(14, 'Mulia Lestari', '169216548', 9216548, 'X', 'Staf Seksi Administrasi dan Keuangan', 12, 0, 0),
(15, 'Edy Rustandi', '158315141', 8315141, 'VI', 'Jurtim GBB Cisaranten Kidul', 12, 0, 0),
(16, 'Zidan Fajar Ramadhan', '199919234', 9919234, 'V', 'Staf GBB Cisaranten Kidul', 12, 0, 0),
(17, 'Dindin', '158515152', 8515152, 'VI', 'Jurtim GBB Utama', 12, 0, 0),
(18, 'Renal Rizkiawan', '199819237', 9819237, 'V', 'Staf Seksi Operasional', 12, 0, 0),
(19, 'Ikhsan Arief', '087608669', 7608669, 'VIII', 'Kepala GBB Citeureup', 12, 0, 0),
(20, 'Asep Sudiana', '088308652', 883652, 'VIII', 'Kepala GBB Utama', 12, 0, 0),
(21, 'Hendri Rahmat Hidayat', '158315143', 8315143, 'V', 'Jurtim GBB Paseh', 12, 0, 0),
(22, 'Diva Diovani', '199719211', 9719211, 'VII', 'Staf Seksi Administrasi dan Keuangan', 12, 0, 0),
(23, 'Angga Trenggana', '128712102', 8712102, 'XI', 'Asman Penjualan Retail dan e-commerce', 12, 0, 0),
(24, 'Dedy Suryadin', '087308666', 7308666, 'VIII', 'Asman Penjualan Distributor', 12, 0, 0),
(25, 'Aditya Pratama', '168916217', 8916217, 'VIII', 'Staf Seksi Operasional', 12, 0, 0),
(26, 'Fajar Maully Prayama', '118711025', 8711025, 'XI', 'Asman Pengadaan', 12, 0, 0),
(27, 'Fryanti Rahmi', '169216389', 9216389, 'VIII', 'Staf Seksi Akuntansi', 12, 0, 0),
(28, 'Yohana Surya Citra', '169416724', 9416724, 'VIII', 'Staf Seksi Komersial', 12, 0, 0),
(29, 'Octa Satria Cakra Dwi P', '168916583', 8916583, 'VIII', 'Kepala GBB Cisaranten Kidul', 12, 0, 0),
(30, 'Delly Permana', '088108485', 8108485, 'VIII', 'Kepala GBB Paseh', 12, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_produk`
--

CREATE TABLE `master_produk` (
  `id_produk` int(5) NOT NULL,
  `jenis_produk` varchar(50) NOT NULL,
  `nama_produk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_produk`
--

INSERT INTO `master_produk` (`id_produk`, `jenis_produk`, `nama_produk`) VALUES
(1, 'Beras Premium', 'Beras Eunak Kemasan 5 Kg'),
(2, 'Beras Premium', 'Beras Premium CPPD Kota Bandung'),
(3, 'Beras Premium', 'Beras Premium CPPD Kabupaten Bandung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_user`
--

CREATE TABLE `master_user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_user`
--

INSERT INTO `master_user` (`id_user`, `username`, `password`) VALUES
(1, 'bulog', 202);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `master_atasan`
--
ALTER TABLE `master_atasan`
  ADD PRIMARY KEY (`id_atasan`);

--
-- Indeks untuk tabel `master_bahan`
--
ALTER TABLE `master_bahan`
  ADD PRIMARY KEY (`id_bahan`);

--
-- Indeks untuk tabel `master_cuti`
--
ALTER TABLE `master_cuti`
  ADD PRIMARY KEY (`id_pengajuancuti`);

--
-- Indeks untuk tabel `master_detailsampel`
--
ALTER TABLE `master_detailsampel`
  ADD PRIMARY KEY (`id_detailsampel`);

--
-- Indeks untuk tabel `master_nirebag`
--
ALTER TABLE `master_nirebag`
  ADD PRIMARY KEY (`id_rebag`);

--
-- Indeks untuk tabel `master_nisampel`
--
ALTER TABLE `master_nisampel`
  ADD PRIMARY KEY (`id_sampel`);

--
-- Indeks untuk tabel `master_noni`
--
ALTER TABLE `master_noni`
  ADD PRIMARY KEY (`id_noni`);

--
-- Indeks untuk tabel `master_pegawai`
--
ALTER TABLE `master_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `master_produk`
--
ALTER TABLE `master_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `master_user`
--
ALTER TABLE `master_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `master_atasan`
--
ALTER TABLE `master_atasan`
  MODIFY `id_atasan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `master_bahan`
--
ALTER TABLE `master_bahan`
  MODIFY `id_bahan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `master_cuti`
--
ALTER TABLE `master_cuti`
  MODIFY `id_pengajuancuti` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `master_detailsampel`
--
ALTER TABLE `master_detailsampel`
  MODIFY `id_detailsampel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `master_nirebag`
--
ALTER TABLE `master_nirebag`
  MODIFY `id_rebag` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `master_nisampel`
--
ALTER TABLE `master_nisampel`
  MODIFY `id_sampel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `master_noni`
--
ALTER TABLE `master_noni`
  MODIFY `id_noni` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `master_pegawai`
--
ALTER TABLE `master_pegawai`
  MODIFY `id_pegawai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `master_produk`
--
ALTER TABLE `master_produk`
  MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `master_user`
--
ALTER TABLE `master_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
