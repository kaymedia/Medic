-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 08, 2020 at 05:00 PM
-- Server version: 8.0.20-0ubuntu0.19.10.1
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `tbl_alergi`
--

CREATE TABLE `tbl_alergi` (
  `id_pasien` int NOT NULL,
  `statusalergi` varchar(10) NOT NULL,
  `alergi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bahan_habis_pakai`
--

CREATE TABLE `tbl_bahan_habis_pakai` (
  `id_bahan` int NOT NULL,
  `nama_bahan` varchar(100) DEFAULT NULL,
  `id_jenisobat` int DEFAULT NULL,
  `stok_bahan` int DEFAULT NULL,
  `id_satuanobat` int DEFAULT NULL,
  `harga_bahan` int DEFAULT NULL,
  `id_suplier` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_beliobat`
--

CREATE TABLE `tbl_beliobat` (
  `id_beliobat` int NOT NULL,
  `id_obat` int DEFAULT NULL,
  `namaobat` varchar(50) DEFAULT NULL,
  `jumlahbeli` int DEFAULT NULL,
  `satuan` varchar(20) DEFAULT NULL,
  `jumlahpersatuan` int DEFAULT NULL,
  `hargabeli` int DEFAULT NULL,
  `kadaluarsa` varchar(30) DEFAULT NULL,
  `id_suplier` int DEFAULT NULL,
  `tanggalbeli` date DEFAULT NULL,
  `id_satuanobat` int NOT NULL,
  `id_jenisobat` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokter`
--

CREATE TABLE `tbl_dokter` (
  `id_dokter` int NOT NULL,
  `namadokter` varchar(50) NOT NULL,
  `statusdokter` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id_jadwal` int NOT NULL,
  `id_pasien` int NOT NULL,
  `tanggal` date NOT NULL,
  `tgl_buat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenisobat`
--

CREATE TABLE `tbl_jenisobat` (
  `id_jenisobat` int NOT NULL,
  `jenisobat` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_obat`
--

CREATE TABLE `tbl_obat` (
  `id_obat` int NOT NULL,
  `namaobat` varchar(50) NOT NULL,
  `hargaobat` int NOT NULL,
  `id_satuanobat` int DEFAULT NULL,
  `kadaluarsa` varchar(25) NOT NULL,
  `stok` int NOT NULL,
  `id_jenisobat` int DEFAULT NULL,
  `id_suplier` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `id_pasien` int NOT NULL,
  `nomorkartu` varchar(30) NOT NULL,
  `namapasien` varchar(50) DEFAULT NULL,
  `ttl` varchar(25) DEFAULT NULL,
  `umur` int DEFAULT NULL,
  `pekerjaan` varchar(30) DEFAULT NULL,
  `kelamin` varchar(20) DEFAULT NULL,
  `alamat` text,
  `nohp` varchar(15) DEFAULT NULL,
  `tanggal` varchar(20) DEFAULT NULL,
  `namaortu` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemasukan`
--

CREATE TABLE `tbl_pemasukan` (
  `kode` bigint NOT NULL,
  `jumlah` int NOT NULL,
  `tanggal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemeriksaan`
--

CREATE TABLE `tbl_pemeriksaan` (
  `id_pemeriksaan` int NOT NULL,
  `id_pasien` int NOT NULL,
  `kode` bigint NOT NULL,
  `tindakan` varchar(50) DEFAULT NULL,
  `biaya` int DEFAULT NULL,
  `keterangan` text,
  `id_obat` int DEFAULT NULL,
  `dosis` varchar(20) DEFAULT NULL,
  `tinggi` int DEFAULT NULL,
  `berat` int DEFAULT NULL,
  `suhu` int DEFAULT NULL,
  `tekanandarah` int DEFAULT NULL,
  `keluhan` varchar(50) DEFAULT NULL,
  `diagnosa` text,
  `id_ruangan` int DEFAULT NULL,
  `tanggal` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL,
  `keadaanumum` varchar(20) DEFAULT NULL,
  `kesadaran` varchar(20) DEFAULT NULL,
  `kepala` varchar(20) DEFAULT NULL,
  `textkepala` text,
  `mata` varchar(20) DEFAULT NULL,
  `textmata` text,
  `hidung` varchar(20) DEFAULT NULL,
  `texthidung` text,
  `gigimulut` varchar(20) DEFAULT NULL,
  `textgigimulut` text,
  `tenggorokan` varchar(20) DEFAULT NULL,
  `texttenggorokan` text,
  `telinga` varchar(20) DEFAULT NULL,
  `texttelinga` text,
  `leher` varchar(20) DEFAULT NULL,
  `textleher` text,
  `thoraks` varchar(20) DEFAULT NULL,
  `textthoraks` text,
  `jantung` varchar(20) DEFAULT NULL,
  `textjantung` text,
  `paru` varchar(20) DEFAULT NULL,
  `textparu` text,
  `abdomen` varchar(20) DEFAULT NULL,
  `textabdomen` text,
  `genetalia` varchar(20) DEFAULT NULL,
  `textgenetalia` text,
  `extrimitas` varchar(20) DEFAULT NULL,
  `textextrimitas` text,
  `kulit` varchar(20) DEFAULT NULL,
  `textkulit` text,
  `jumlahobat` int DEFAULT NULL,
  `id_dokter` tinyint DEFAULT NULL,
  `id_tindakan` tinyint DEFAULT NULL,
  `id_bahan` smallint DEFAULT NULL,
  `jml_bahan` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ruangan`
--

CREATE TABLE `tbl_ruangan` (
  `id_ruangan` int NOT NULL,
  `namaruangan` varchar(50) NOT NULL,
  `statusruangan` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_satuanobat`
--

CREATE TABLE `tbl_satuanobat` (
  `id_satuanobat` int NOT NULL,
  `satuanobat` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_situs`
--

CREATE TABLE `tbl_situs` (
  `id_situs` int NOT NULL,
  `namaklinik` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `pendapatan_obat` int NOT NULL,
  `pendapatan_periksa` int NOT NULL,
  `logo` varchar(50) NOT NULL,
  `limitstok` int NOT NULL,
  `limitkadaluarsa` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_situs`
--

INSERT INTO `tbl_situs` (`id_situs`, `namaklinik`, `alamat`, `nohp`, `pendapatan_obat`, `pendapatan_periksa`, `logo`, `limitstok`, `limitkadaluarsa`) VALUES
(1, 'Klinik Utama Saibumi', 'Jl. P. Tirtayasa No.12, Sukabumi Indah, Kec. Sukabumi, Kota Bandar Lampung, Lampung 35122', '(0721) 5642445', 20, 25, 'logo_1585139829.png', 10, 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sms`
--

CREATE TABLE `tbl_sms` (
  `id_sms` int NOT NULL,
  `kode` varchar(12) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_suplier`
--

CREATE TABLE `tbl_suplier` (
  `id_suplier` int NOT NULL,
  `namasuplier` varchar(50) DEFAULT NULL,
  `alamatsuplier` text,
  `nohpsuplier` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tindakan`
--

CREATE TABLE `tbl_tindakan` (
  `id_tindakan` int NOT NULL,
  `nama_tindakan` varchar(100) DEFAULT NULL,
  `biaya_tindakan` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama`, `alamat`, `nohp`) VALUES
(1, 'admin', 'bf78e393cf3b5054dd5861c0fb4b3ef9', 'Administrator', 'Bandar Lampung', '08117999188'),
(2, 'galih', '027dc74f0bbf09a61a36ec7f0d9e08ca', 'Shu Galih', 'Bandar Lampung', '082177549990');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_alergi`
--
ALTER TABLE `tbl_alergi`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tbl_bahan_habis_pakai`
--
ALTER TABLE `tbl_bahan_habis_pakai`
  ADD PRIMARY KEY (`id_bahan`),
  ADD KEY `id_jenisobat` (`id_jenisobat`),
  ADD KEY `id_satuanobat` (`id_satuanobat`),
  ADD KEY `id_suplier` (`id_suplier`);

--
-- Indexes for table `tbl_beliobat`
--
ALTER TABLE `tbl_beliobat`
  ADD PRIMARY KEY (`id_beliobat`),
  ADD KEY `id_obat` (`id_obat`),
  ADD KEY `id_suplier` (`id_suplier`),
  ADD KEY `id_satuanobat` (`id_satuanobat`),
  ADD KEY `id_jenisobat` (`id_jenisobat`);

--
-- Indexes for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tbl_jenisobat`
--
ALTER TABLE `tbl_jenisobat`
  ADD PRIMARY KEY (`id_jenisobat`);

--
-- Indexes for table `tbl_obat`
--
ALTER TABLE `tbl_obat`
  ADD PRIMARY KEY (`id_obat`),
  ADD KEY `id_satuanobat` (`id_satuanobat`);

--
-- Indexes for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tbl_pemasukan`
--
ALTER TABLE `tbl_pemasukan`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_pemeriksaan`
--
ALTER TABLE `tbl_pemeriksaan`
  ADD PRIMARY KEY (`id_pemeriksaan`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indexes for table `tbl_ruangan`
--
ALTER TABLE `tbl_ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indexes for table `tbl_satuanobat`
--
ALTER TABLE `tbl_satuanobat`
  ADD PRIMARY KEY (`id_satuanobat`);

--
-- Indexes for table `tbl_situs`
--
ALTER TABLE `tbl_situs`
  ADD PRIMARY KEY (`id_situs`);

--
-- Indexes for table `tbl_sms`
--
ALTER TABLE `tbl_sms`
  ADD PRIMARY KEY (`id_sms`);

--
-- Indexes for table `tbl_suplier`
--
ALTER TABLE `tbl_suplier`
  ADD PRIMARY KEY (`id_suplier`);

--
-- Indexes for table `tbl_tindakan`
--
ALTER TABLE `tbl_tindakan`
  ADD PRIMARY KEY (`id_tindakan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bahan_habis_pakai`
--
ALTER TABLE `tbl_bahan_habis_pakai`
  MODIFY `id_bahan` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_beliobat`
--
ALTER TABLE `tbl_beliobat`
  MODIFY `id_beliobat` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  MODIFY `id_dokter` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id_jadwal` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_jenisobat`
--
ALTER TABLE `tbl_jenisobat`
  MODIFY `id_jenisobat` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_obat`
--
ALTER TABLE `tbl_obat`
  MODIFY `id_obat` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  MODIFY `id_pasien` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pemeriksaan`
--
ALTER TABLE `tbl_pemeriksaan`
  MODIFY `id_pemeriksaan` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_ruangan`
--
ALTER TABLE `tbl_ruangan`
  MODIFY `id_ruangan` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_satuanobat`
--
ALTER TABLE `tbl_satuanobat`
  MODIFY `id_satuanobat` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_situs`
--
ALTER TABLE `tbl_situs`
  MODIFY `id_situs` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_sms`
--
ALTER TABLE `tbl_sms`
  MODIFY `id_sms` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_suplier`
--
ALTER TABLE `tbl_suplier`
  MODIFY `id_suplier` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tindakan`
--
ALTER TABLE `tbl_tindakan`
  MODIFY `id_tindakan` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_bahan_habis_pakai`
--
ALTER TABLE `tbl_bahan_habis_pakai`
  ADD CONSTRAINT `tbl_bahan_habis_pakai_ibfk_1` FOREIGN KEY (`id_jenisobat`) REFERENCES `tbl_jenisobat` (`id_jenisobat`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `tbl_pemeriksaan`
--
ALTER TABLE `tbl_pemeriksaan`
  ADD CONSTRAINT `tbl_pemeriksaan_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `tbl_pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
