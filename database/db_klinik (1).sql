-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Apr 2020 pada 10.30
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_klinik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_alergi`
--

CREATE TABLE `tbl_alergi` (
  `id_pasien` int(11) NOT NULL,
  `statusalergi` varchar(10) NOT NULL,
  `alergi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_alergi`
--

INSERT INTO `tbl_alergi` (`id_pasien`, `statusalergi`, `alergi`) VALUES
(2, 'Tidak', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bahan_habis_pakai`
--

CREATE TABLE `tbl_bahan_habis_pakai` (
  `id_bahan` int(11) NOT NULL,
  `nama_bahan` varchar(100) DEFAULT NULL,
  `id_jenisobat` int(11) DEFAULT NULL,
  `stok_bahan` int(11) DEFAULT NULL,
  `id_satuanobat` int(11) DEFAULT NULL,
  `harga_bahan` int(11) DEFAULT NULL,
  `id_suplier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_bahan_habis_pakai`
--

INSERT INTO `tbl_bahan_habis_pakai` (`id_bahan`, `nama_bahan`, `id_jenisobat`, `stok_bahan`, `id_satuanobat`, `harga_bahan`, `id_suplier`) VALUES
(1, 's', 1, 11, 1, 10000000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_beliobat`
--

CREATE TABLE `tbl_beliobat` (
  `id_beliobat` int(11) NOT NULL,
  `id_obat` int(11) DEFAULT NULL,
  `namaobat` varchar(50) DEFAULT NULL,
  `jumlahbeli` int(11) DEFAULT NULL,
  `satuan` varchar(20) DEFAULT NULL,
  `jumlahpersatuan` int(11) DEFAULT NULL,
  `hargabeli` int(11) DEFAULT NULL,
  `kadaluarsa` varchar(30) DEFAULT NULL,
  `id_suplier` int(11) DEFAULT NULL,
  `tanggalbeli` date DEFAULT NULL,
  `id_satuanobat` int(11) NOT NULL,
  `id_jenisobat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_beliobat`
--

INSERT INTO `tbl_beliobat` (`id_beliobat`, `id_obat`, `namaobat`, `jumlahbeli`, `satuan`, `jumlahpersatuan`, `hargabeli`, `kadaluarsa`, `id_suplier`, `tanggalbeli`, `id_satuanobat`, `id_jenisobat`) VALUES
(3, 8, 'Amoxilin', 100, 'Dus', 997, 10000, '2020-04-23', 1, '2020-04-22', 1, 0),
(4, 9, 'Amoxilin', 100, 'Dus', 997, 10000, '2020-04-23', 1, '2020-04-22', 1, 0),
(5, 10, 'Amoxilin', 1, 'Dus', 100, 100000, '2020-04-23', 1, '2020-04-22', 1, 0),
(6, 11, 'Amoxilin 23', 1, 'Box', 50, 100000, '2020-04-12', 1, '2020-04-12', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `tgl_buat` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id_jadwal`, `id_pasien`, `tanggal`, `tgl_buat`, `status`) VALUES
(2, 2, '2020-03-26', '2020-03-25 17:18:43', 'Belum Periksa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jenisobat`
--

CREATE TABLE `tbl_jenisobat` (
  `id_jenisobat` int(11) NOT NULL,
  `jenisobat` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jenisobat`
--

INSERT INTO `tbl_jenisobat` (`id_jenisobat`, `jenisobat`) VALUES
(1, 'Cair');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_obat`
--

CREATE TABLE `tbl_obat` (
  `id_obat` int(11) NOT NULL,
  `namaobat` varchar(50) NOT NULL,
  `hargaobat` int(11) NOT NULL,
  `id_satuanobat` int(11) DEFAULT NULL,
  `kadaluarsa` varchar(25) NOT NULL,
  `stok` int(11) NOT NULL,
  `id_jenisobat` int(11) DEFAULT NULL,
  `id_suplier` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_obat`
--

INSERT INTO `tbl_obat` (`id_obat`, `namaobat`, `hargaobat`, `id_satuanobat`, `kadaluarsa`, `stok`, `id_jenisobat`, `id_suplier`) VALUES
(5, 'Contoh Obat 1', 2000, 1, '2022-03-15', 140, 1, 1),
(6, 'Contoh Obat 2', 1500, 1, '2022-03-15', 240, 1, 1),
(7, 'Amoxilin', 1, 1, '2020-04-23', 99700, 1, 1),
(8, 'Amoxilin', 1, 1, '2020-04-23', 99700, 1, 1),
(9, 'Amoxilin', 12, 1, '2020-04-23', 99700, 1, 1),
(10, 'Amoxilin', 1200, 1, '2020-04-23', 100, 1, 1),
(11, 'Amoxilin 23', 2400, 1, '2020-04-12', 50, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `id_pasien` int(11) NOT NULL,
  `nomorkartu` varchar(30) NOT NULL,
  `namapasien` varchar(50) DEFAULT NULL,
  `ttl` varchar(25) DEFAULT NULL,
  `umur` int(11) DEFAULT NULL,
  `pekerjaan` varchar(30) DEFAULT NULL,
  `kelamin` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `nohp` varchar(15) DEFAULT NULL,
  `tanggal` varchar(20) DEFAULT NULL,
  `namaortu` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`id_pasien`, `nomorkartu`, `namapasien`, `ttl`, `umur`, `pekerjaan`, `kelamin`, `alamat`, `nohp`, `tanggal`, `namaortu`) VALUES
(2, '01-0000-2', 'Yadi', '2020-03-15', 30, 'Wiraswasta', 'Laki-Laki', 'Bandar Lampung', '082177549990', '2020-03-15', 'Ortu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pemasukan`
--

CREATE TABLE `tbl_pemasukan` (
  `kode` bigint(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pemasukan`
--

INSERT INTO `tbl_pemasukan` (`kode`, `jumlah`, `tanggal`) VALUES
(692958189, 85000, '2020-03-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pemeriksaan`
--

CREATE TABLE `tbl_pemeriksaan` (
  `id_pemeriksaan` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `kode` bigint(20) NOT NULL,
  `tindakan` varchar(50) DEFAULT NULL,
  `biaya` int(11) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `id_obat` int(11) DEFAULT NULL,
  `dosis` varchar(20) DEFAULT NULL,
  `tinggi` int(11) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `suhu` int(11) DEFAULT NULL,
  `tekanandarah` int(10) DEFAULT NULL,
  `keluhan` varchar(50) DEFAULT NULL,
  `diagnosa` text DEFAULT NULL,
  `id_ruangan` int(11) DEFAULT NULL,
  `tanggal` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL,
  `keadaanumum` varchar(20) DEFAULT NULL,
  `kesadaran` varchar(20) DEFAULT NULL,
  `kepala` varchar(20) DEFAULT NULL,
  `textkepala` text DEFAULT NULL,
  `mata` varchar(20) DEFAULT NULL,
  `textmata` text DEFAULT NULL,
  `hidung` varchar(20) DEFAULT NULL,
  `texthidung` text DEFAULT NULL,
  `gigimulut` varchar(20) DEFAULT NULL,
  `textgigimulut` text DEFAULT NULL,
  `tenggorokan` varchar(20) DEFAULT NULL,
  `texttenggorokan` text DEFAULT NULL,
  `telinga` varchar(20) DEFAULT NULL,
  `texttelinga` text DEFAULT NULL,
  `leher` varchar(20) DEFAULT NULL,
  `textleher` text DEFAULT NULL,
  `thoraks` varchar(20) DEFAULT NULL,
  `textthoraks` text DEFAULT NULL,
  `jantung` varchar(20) DEFAULT NULL,
  `textjantung` text DEFAULT NULL,
  `paru` varchar(20) DEFAULT NULL,
  `textparu` text DEFAULT NULL,
  `abdomen` varchar(20) DEFAULT NULL,
  `textabdomen` text DEFAULT NULL,
  `genetalia` varchar(20) DEFAULT NULL,
  `textgenetalia` text DEFAULT NULL,
  `extrimitas` varchar(20) DEFAULT NULL,
  `textextrimitas` text DEFAULT NULL,
  `kulit` varchar(20) DEFAULT NULL,
  `textkulit` text DEFAULT NULL,
  `jumlahobat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pemeriksaan`
--

INSERT INTO `tbl_pemeriksaan` (`id_pemeriksaan`, `id_pasien`, `kode`, `tindakan`, `biaya`, `keterangan`, `id_obat`, `dosis`, `tinggi`, `berat`, `suhu`, `tekanandarah`, `keluhan`, `diagnosa`, `id_ruangan`, `tanggal`, `status`, `keadaanumum`, `kesadaran`, `kepala`, `textkepala`, `mata`, `textmata`, `hidung`, `texthidung`, `gigimulut`, `textgigimulut`, `tenggorokan`, `texttenggorokan`, `telinga`, `texttelinga`, `leher`, `textleher`, `thoraks`, `textthoraks`, `jantung`, `textjantung`, `paru`, `textparu`, `abdomen`, `textabdomen`, `genetalia`, `textgenetalia`, `extrimitas`, `textextrimitas`, `kulit`, `textkulit`, `jumlahobat`) VALUES
(4, 2, 692958189, 'Pemeriksaan Tekanan Darah', 50000, 'Jika 2 Hari masih demam dilanjutkan dengan Cek Darah', 6, '3 x 1', 165, 56, 38, 120, 'Panas Tinggi', 'DBD', 3, '2020-03-15', 'Pulang', 'Sakit Sedang', 'CM', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 10),
(5, 2, 692958189, NULL, NULL, 'Jika 2 Hari masih demam dilanjutkan dengan Cek Darah', 5, '3 x 1', 165, 56, 38, 120, 'Demam', 'Radang Tenggorokan', 3, '2020-03-15', 'Pulang', 'Sakit Sedang', 'CM', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ruangan`
--

CREATE TABLE `tbl_ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `namaruangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_ruangan`
--

INSERT INTO `tbl_ruangan` (`id_ruangan`, `namaruangan`) VALUES
(3, 'Ruang Rawat Inap A'),
(4, 'Ruang Rawat Inap B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_satuanobat`
--

CREATE TABLE `tbl_satuanobat` (
  `id_satuanobat` int(11) NOT NULL,
  `satuanobat` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_satuanobat`
--

INSERT INTO `tbl_satuanobat` (`id_satuanobat`, `satuanobat`) VALUES
(1, 'km');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_situs`
--

CREATE TABLE `tbl_situs` (
  `id_situs` int(11) NOT NULL,
  `namaklinik` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `pendapatan_obat` int(11) NOT NULL,
  `pendapatan_periksa` int(11) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `limitstok` int(11) NOT NULL,
  `limitkadaluarsa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_situs`
--

INSERT INTO `tbl_situs` (`id_situs`, `namaklinik`, `alamat`, `nohp`, `pendapatan_obat`, `pendapatan_periksa`, `logo`, `limitstok`, `limitkadaluarsa`) VALUES
(1, 'Klinik Utama Saibumi', 'Jl. P. Tirtayasa No.12, Sukabumi Indah, Kec. Sukabumi, Kota Bandar Lampung, Lampung 35122', '(0721) 5642445', 20, 25, 'logo_1585139829.png', 10, 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sms`
--

CREATE TABLE `tbl_sms` (
  `id_sms` int(11) NOT NULL,
  `kode` varchar(12) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_suplier`
--

CREATE TABLE `tbl_suplier` (
  `id_suplier` int(11) NOT NULL,
  `namasuplier` varchar(50) DEFAULT NULL,
  `alamatsuplier` text DEFAULT NULL,
  `nohpsuplier` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_suplier`
--

INSERT INTO `tbl_suplier` (`id_suplier`, `namasuplier`, `alamatsuplier`, `nohpsuplier`) VALUES
(1, 'Kimia Farma', 'Jalan Imam Bonjol No 1 Bandar Lmapung 1', '085783170507');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tindakan`
--

CREATE TABLE `tbl_tindakan` (
  `id_tindakan` int(11) NOT NULL,
  `nama_tindakan` varchar(100) DEFAULT NULL,
  `biaya_tindakan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_tindakan`
--

INSERT INTO `tbl_tindakan` (`id_tindakan`, `nama_tindakan`, `biaya_tindakan`) VALUES
(1, 'Suntik', 10000001),
(2, 'suntik mati', 1000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama`, `alamat`, `nohp`) VALUES
(1, 'admin', 'bf78e393cf3b5054dd5861c0fb4b3ef9', 'Administrator', 'Bandar Lampung', '08117999188'),
(2, 'galih', '027dc74f0bbf09a61a36ec7f0d9e08ca', 'Shu Galih', 'Bandar Lampung', '082177549990');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_alergi`
--
ALTER TABLE `tbl_alergi`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `tbl_bahan_habis_pakai`
--
ALTER TABLE `tbl_bahan_habis_pakai`
  ADD PRIMARY KEY (`id_bahan`),
  ADD KEY `id_jenisobat` (`id_jenisobat`),
  ADD KEY `id_satuanobat` (`id_satuanobat`),
  ADD KEY `id_suplier` (`id_suplier`);

--
-- Indeks untuk tabel `tbl_beliobat`
--
ALTER TABLE `tbl_beliobat`
  ADD PRIMARY KEY (`id_beliobat`),
  ADD KEY `id_obat` (`id_obat`),
  ADD KEY `id_suplier` (`id_suplier`),
  ADD KEY `id_satuanobat` (`id_satuanobat`),
  ADD KEY `id_jenisobat` (`id_jenisobat`);

--
-- Indeks untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `tbl_jenisobat`
--
ALTER TABLE `tbl_jenisobat`
  ADD PRIMARY KEY (`id_jenisobat`);

--
-- Indeks untuk tabel `tbl_obat`
--
ALTER TABLE `tbl_obat`
  ADD PRIMARY KEY (`id_obat`),
  ADD KEY `id_satuanobat` (`id_satuanobat`);

--
-- Indeks untuk tabel `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `tbl_pemasukan`
--
ALTER TABLE `tbl_pemasukan`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `tbl_pemeriksaan`
--
ALTER TABLE `tbl_pemeriksaan`
  ADD PRIMARY KEY (`id_pemeriksaan`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indeks untuk tabel `tbl_ruangan`
--
ALTER TABLE `tbl_ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indeks untuk tabel `tbl_satuanobat`
--
ALTER TABLE `tbl_satuanobat`
  ADD PRIMARY KEY (`id_satuanobat`);

--
-- Indeks untuk tabel `tbl_situs`
--
ALTER TABLE `tbl_situs`
  ADD PRIMARY KEY (`id_situs`);

--
-- Indeks untuk tabel `tbl_sms`
--
ALTER TABLE `tbl_sms`
  ADD PRIMARY KEY (`id_sms`);

--
-- Indeks untuk tabel `tbl_suplier`
--
ALTER TABLE `tbl_suplier`
  ADD PRIMARY KEY (`id_suplier`);

--
-- Indeks untuk tabel `tbl_tindakan`
--
ALTER TABLE `tbl_tindakan`
  ADD PRIMARY KEY (`id_tindakan`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_bahan_habis_pakai`
--
ALTER TABLE `tbl_bahan_habis_pakai`
  MODIFY `id_bahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_beliobat`
--
ALTER TABLE `tbl_beliobat`
  MODIFY `id_beliobat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_jenisobat`
--
ALTER TABLE `tbl_jenisobat`
  MODIFY `id_jenisobat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_obat`
--
ALTER TABLE `tbl_obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_pemeriksaan`
--
ALTER TABLE `tbl_pemeriksaan`
  MODIFY `id_pemeriksaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_ruangan`
--
ALTER TABLE `tbl_ruangan`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tbl_satuanobat`
--
ALTER TABLE `tbl_satuanobat`
  MODIFY `id_satuanobat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_situs`
--
ALTER TABLE `tbl_situs`
  MODIFY `id_situs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_sms`
--
ALTER TABLE `tbl_sms`
  MODIFY `id_sms` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_suplier`
--
ALTER TABLE `tbl_suplier`
  MODIFY `id_suplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_tindakan`
--
ALTER TABLE `tbl_tindakan`
  MODIFY `id_tindakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_bahan_habis_pakai`
--
ALTER TABLE `tbl_bahan_habis_pakai`
  ADD CONSTRAINT `tbl_bahan_habis_pakai_ibfk_1` FOREIGN KEY (`id_jenisobat`) REFERENCES `tbl_jenisobat` (`id_jenisobat`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_pemeriksaan`
--
ALTER TABLE `tbl_pemeriksaan`
  ADD CONSTRAINT `tbl_pemeriksaan_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `tbl_pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
