-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2020 at 06:09 PM
-- Server version: 10.1.36-MariaDB
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
-- Database: `db_panganmuba`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id_activity` int(1) NOT NULL,
  `activity` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id_activity`, `activity`) VALUES
(0, 'keluar'),
(1, 'masuk');

-- --------------------------------------------------------

--
-- Table structure for table `dim_alsin`
--

CREATE TABLE `dim_alsin` (
  `id_alsin` varchar(5) NOT NULL,
  `alsin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dim_alsin`
--

INSERT INTO `dim_alsin` (`id_alsin`, `alsin`) VALUES
('ALS01', 'Pompa Air'),
('ALS02', 'Traktor Roda 4'),
('ALS03', 'Traktor Roda 2'),
('ALS04', 'Rice Tranplanter'),
('ALS05', 'Cultivator'),
('ALS06', 'Cornplanter'),
('ALS07', 'Nurseritray'),
('ALS08', 'Hand Sprayer');

-- --------------------------------------------------------

--
-- Table structure for table `dim_bulan`
--

CREATE TABLE `dim_bulan` (
  `id_bulan` varchar(5) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `ordinal_tanam` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dim_bulan`
--

INSERT INTO `dim_bulan` (`id_bulan`, `bulan`, `ordinal_tanam`) VALUES
('BLN01', 'Januari', 4),
('BLN02', 'Februari', 5),
('BLN03', 'Maret', 6),
('BLN04', 'April', 7),
('BLN05', 'Mei', 8),
('BLN06', 'Juni', 9),
('BLN07', 'Juli', 10),
('BLN08', 'Agustus', 11),
('BLN09', 'September', 12),
('BLN10', 'Oktober', 1),
('BLN11', 'November', 2),
('BLN12', 'Desember', 3);

-- --------------------------------------------------------

--
-- Table structure for table `dim_caturwulan`
--

CREATE TABLE `dim_caturwulan` (
  `id_caturwulan` varchar(5) NOT NULL,
  `caturwulan` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dim_caturwulan`
--

INSERT INTO `dim_caturwulan` (`id_caturwulan`, `caturwulan`) VALUES
('CT01', '1'),
('CT02', '2'),
('CT03', '3');

-- --------------------------------------------------------

--
-- Table structure for table `dim_kecamatan`
--

CREATE TABLE `dim_kecamatan` (
  `id_kecamatan` varchar(5) NOT NULL,
  `kecamatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dim_kecamatan`
--

INSERT INTO `dim_kecamatan` (`id_kecamatan`, `kecamatan`) VALUES
('KEC01', 'Babat Supat'),
('KEC02', 'Babat Toman'),
('KEC03', 'Batang Hari Leko'),
('KEC04', 'Bayung Lencir'),
('KEC05', 'Jirak Jaya'),
('KEC06', 'Keluang'),
('KEC07', 'Lais'),
('KEC08', 'Lalan'),
('KEC09', 'Lawang Wetan'),
('KEC10', 'Plakat Tinggi'),
('KEC11', 'Sanga Desa'),
('KEC12', 'Sekayu'),
('KEC13', 'Sungai Keruh'),
('KEC14', 'Sungai Lilin'),
('KEC15', 'Tungkal Jaya');

-- --------------------------------------------------------

--
-- Table structure for table `dim_komoditas`
--

CREATE TABLE `dim_komoditas` (
  `id_komoditas` varchar(5) NOT NULL,
  `komoditas` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dim_komoditas`
--

INSERT INTO `dim_komoditas` (`id_komoditas`, `komoditas`) VALUES
('KOM01', 'Padi'),
('KOM02', 'Jagung'),
('KOM03', 'Kedelai'),
('KOM04', 'Kacang Tanah'),
('KOM05', 'Kacang Hijau'),
('KOM06', 'Ubi Kayu'),
('KOM07', 'Ubi Jalar');

-- --------------------------------------------------------

--
-- Table structure for table `dim_lahan`
--

CREATE TABLE `dim_lahan` (
  `id_lahan` varchar(5) NOT NULL,
  `lahan` varchar(15) NOT NULL,
  `jenis` varchar(45) NOT NULL,
  `subjenis` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dim_lahan`
--

INSERT INTO `dim_lahan` (`id_lahan`, `lahan`, `jenis`, `subjenis`) VALUES
('LH01', 'Bukan Pertanian', 'Jalan, Pemukiman, Perkantoran, Sungai, dll**', '-'),
('LH02', 'Pertanian', 'Bukan Sawah', 'Ditanami Pohon/Hutan Rakyat'),
('LH03', 'Pertanian', 'Bukan Sawah', 'Ladang/Huma'),
('LH04', 'Pertanian', 'Bukan Sawah', 'Lainnya + Hutan Negara'),
('LH05', 'Pertanian', 'Bukan Sawah', 'Padang Pengembalaan/Padang Rumput'),
('LH06', 'Pertanian', 'Bukan Sawah', 'Perkebunan'),
('LH07', 'Pertanian', 'Bukan Sawah', 'Sementara tidak diusahakan'),
('LH08', 'Pertanian', 'Bukan Sawah', 'Tegal/Kebun'),
('LH09', 'Pertanian', 'Sawah', 'Irigasi'),
('LH10', 'Pertanian', 'Sawah', 'Rawa Lebak'),
('LH11', 'Pertanian', 'Sawah', 'Rawa Pasang Surut'),
('LH12', 'Pertanian', 'Sawah', 'Tadah Hujan');

-- --------------------------------------------------------

--
-- Table structure for table `dim_masa_tanam`
--

CREATE TABLE `dim_masa_tanam` (
  `id_masa_tanam` varchar(5) NOT NULL,
  `masa_tanam` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dim_masa_tanam`
--

INSERT INTO `dim_masa_tanam` (`id_masa_tanam`, `masa_tanam`) VALUES
('MT01', 'MT. 2014/2015'),
('MT02', 'MT. 2015'),
('MT03', 'MT. 2015/2016'),
('MT04', 'MT. 2016'),
('MT05', 'MT. 2016/2017'),
('MT06', 'MT. 2017'),
('MT07', 'MT. 2017/2018'),
('MT08', 'MT. 2018'),
('MT09', 'MT. 2018/2019');

-- --------------------------------------------------------

--
-- Table structure for table `dim_penanaman`
--

CREATE TABLE `dim_penanaman` (
  `id_penanaman` varchar(5) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `penanaman` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dim_penanaman`
--

INSERT INTO `dim_penanaman` (`id_penanaman`, `keterangan`, `penanaman`) VALUES
('PNN01', '-', '-'),
('PNN02', 'Ditanami Padi', '1 Kali'),
('PNN03', 'Ditanami Padi', '2 Kali'),
('PNN04', 'Ditanami Padi', '3 Kali'),
('PNN05', 'Tidak Ditanami Padi', 'Ditanami Tanaman Lain'),
('PNN06', 'Tidak Ditanami Padi', 'Tidak Ditanami Apapun');

-- --------------------------------------------------------

--
-- Table structure for table `dim_pupuk`
--

CREATE TABLE `dim_pupuk` (
  `id_pupuk` varchar(5) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `pupuk` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dim_pupuk`
--

INSERT INTO `dim_pupuk` (`id_pupuk`, `jenis`, `pupuk`) VALUES
('PUP01', 'Bersubsidi', 'Pupuk NPK'),
('PUP02', 'Bersubsidi', 'Pupuk Organik'),
('PUP03', 'Bersubsidi', 'Pupuk SP-36'),
('PUP04', 'Bersubsidi', 'Pupuk Urea'),
('PUP05', 'Bersubsidi', 'Pupuk ZA');

-- --------------------------------------------------------

--
-- Table structure for table `dim_tahun`
--

CREATE TABLE `dim_tahun` (
  `id_tahun` varchar(5) NOT NULL,
  `tahun` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dim_tahun`
--

INSERT INTO `dim_tahun` (`id_tahun`, `tahun`) VALUES
('TH01', '2014'),
('TH02', '2015'),
('TH03', '2016'),
('TH04', '2017'),
('TH05', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `dim_triwulan`
--

CREATE TABLE `dim_triwulan` (
  `id_triwulan` varchar(5) NOT NULL,
  `triwulan` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dim_triwulan`
--

INSERT INTO `dim_triwulan` (`id_triwulan`, `triwulan`) VALUES
('TW01', '1'),
('TW02', '2'),
('TW03', '3'),
('TW04', '4');

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(2) NOT NULL,
  `divisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `divisi`) VALUES
(1, ''),
(2, 'Tanaman Pangan dan Hortikultura'),
(3, 'Perencanaan, Evaluasi dan Pelaporan');

-- --------------------------------------------------------

--
-- Table structure for table `dm_produktivitas_pangan_testing`
--

CREATE TABLE `dm_produktivitas_pangan_testing` (
  `id_kecamatan` varchar(5) NOT NULL,
  `produktivitas_padi` decimal(7,2) NOT NULL,
  `produktivitas_jagung` decimal(7,2) NOT NULL,
  `produktivitas_kedelai` decimal(7,2) NOT NULL,
  `produktivitas_kacang_tanah` decimal(7,2) NOT NULL,
  `produktivitas_kacang_hijau` decimal(7,2) NOT NULL,
  `produktivitas_ubi_kayu` decimal(7,2) NOT NULL,
  `produktivitas_ubi_jalar` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dm_produktivitas_pangan_testing_result`
--

CREATE TABLE `dm_produktivitas_pangan_testing_result` (
  `id_kecamatan` varchar(5) NOT NULL,
  `produktivitas_padi` decimal(7,2) NOT NULL,
  `produktivitas_jagung` decimal(7,2) NOT NULL,
  `produktivitas_kedelai` decimal(7,2) NOT NULL,
  `produktivitas_kacang_tanah` decimal(7,2) NOT NULL,
  `produktivitas_kacang_hijau` decimal(7,2) NOT NULL,
  `produktivitas_ubi_kayu` decimal(7,2) NOT NULL,
  `produktivitas_ubi_jalar` decimal(7,2) NOT NULL,
  `cluster` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dm_produktivitas_pangan_training`
--

CREATE TABLE `dm_produktivitas_pangan_training` (
  `id_kecamatan` varchar(5) NOT NULL,
  `produktivitas_padi` decimal(7,2) NOT NULL,
  `produktivitas_jagung` decimal(7,2) NOT NULL,
  `produktivitas_kedelai` decimal(7,2) NOT NULL,
  `produktivitas_kacang_tanah` decimal(7,2) NOT NULL,
  `produktivitas_kacang_hijau` decimal(7,2) NOT NULL,
  `produktivitas_ubi_kayu` decimal(7,2) NOT NULL,
  `produktivitas_ubi_jalar` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dm_produktivitas_pangan_training_result`
--

CREATE TABLE `dm_produktivitas_pangan_training_result` (
  `id_kecamatan` varchar(5) NOT NULL,
  `produktivitas_padi` decimal(7,2) NOT NULL,
  `produktivitas_jagung` decimal(7,2) NOT NULL,
  `produktivitas_kedelai` decimal(7,2) NOT NULL,
  `produktivitas_kacang_tanah` decimal(7,2) NOT NULL,
  `produktivitas_kacang_hijau` decimal(7,2) NOT NULL,
  `produktivitas_ubi_kayu` decimal(7,2) NOT NULL,
  `produktivitas_ubi_jalar` decimal(7,2) NOT NULL,
  `cluster` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fact_capaian_panen`
--

CREATE TABLE `fact_capaian_panen` (
  `id_fact_capaian_panen` varchar(10) NOT NULL,
  `id_tahun` varchar(5) NOT NULL,
  `id_caturwulan` varchar(5) NOT NULL,
  `id_triwulan` varchar(5) NOT NULL,
  `id_bulan` varchar(5) NOT NULL,
  `id_kecamatan` varchar(5) NOT NULL,
  `id_komoditas` varchar(5) NOT NULL,
  `luas_panen_target` double NOT NULL,
  `luas_panen_tercapai` double NOT NULL,
  `persentase_ketercapaian` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fact_capaian_produksi`
--

CREATE TABLE `fact_capaian_produksi` (
  `id_fact_capaian_produksi` varchar(10) NOT NULL,
  `id_tahun` varchar(5) NOT NULL,
  `id_kecamatan` varchar(5) NOT NULL,
  `id_komoditas` varchar(5) NOT NULL,
  `jumlah_produksi_target` double NOT NULL,
  `jumlah_produksi_tercapai` double NOT NULL,
  `persentase_ketercapaian` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fact_capaian_tanam`
--

CREATE TABLE `fact_capaian_tanam` (
  `id_fact_capaian_tanam` varchar(10) NOT NULL,
  `id_tahun` varchar(5) NOT NULL,
  `id_masa_tanam` varchar(5) NOT NULL,
  `id_caturwulan` varchar(5) NOT NULL,
  `id_triwulan` varchar(5) NOT NULL,
  `id_bulan` varchar(5) NOT NULL,
  `id_kecamatan` varchar(5) NOT NULL,
  `id_komoditas` varchar(5) NOT NULL,
  `luas_tanam_target` double NOT NULL,
  `luas_tanam_tercapai` double NOT NULL,
  `persentase_ketercapaian` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fact_kondisi_iklim`
--

CREATE TABLE `fact_kondisi_iklim` (
  `id_fact_iklim` varchar(10) NOT NULL,
  `id_tahun` varchar(5) NOT NULL,
  `id_caturwulan` varchar(5) NOT NULL,
  `id_triwulan` varchar(5) NOT NULL,
  `id_bulan` varchar(5) NOT NULL,
  `id_kecamatan` varchar(5) NOT NULL,
  `jumlah_curah_hujan` double NOT NULL,
  `jumlah_hari_hujan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fact_penggunaan_lahan`
--

CREATE TABLE `fact_penggunaan_lahan` (
  `id_fact_lahan` varchar(10) NOT NULL,
  `id_tahun` varchar(5) NOT NULL,
  `id_kecamatan` varchar(5) NOT NULL,
  `id_lahan` varchar(5) NOT NULL,
  `id_penanaman` varchar(5) NOT NULL,
  `jumlah_lahan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fact_penyaluran_alsin`
--

CREATE TABLE `fact_penyaluran_alsin` (
  `id_fact_alsin` varchar(10) NOT NULL,
  `id_tahun` varchar(5) NOT NULL,
  `id_kecamatan` varchar(5) NOT NULL,
  `id_alsin` varchar(5) NOT NULL,
  `jumlah_alsin` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fact_penyaluran_pupuk`
--

CREATE TABLE `fact_penyaluran_pupuk` (
  `id_fact_pupuk` varchar(10) NOT NULL,
  `id_tahun` varchar(5) NOT NULL,
  `id_caturwulan` varchar(5) NOT NULL,
  `id_triwulan` varchar(5) NOT NULL,
  `id_bulan` varchar(5) NOT NULL,
  `id_kecamatan` varchar(5) NOT NULL,
  `id_pupuk` varchar(5) NOT NULL,
  `jumlah_pupuk` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fact_produktivitas`
--

CREATE TABLE `fact_produktivitas` (
  `id_fact_produktivitas` varchar(10) NOT NULL,
  `id_tahun` varchar(5) NOT NULL,
  `id_kecamatan` varchar(5) NOT NULL,
  `id_komoditas` varchar(5) NOT NULL,
  `id_lahan` varchar(5) NOT NULL,
  `luas_panen` double NOT NULL,
  `jumlah_produksi` double NOT NULL,
  `produktivitas` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(1) NOT NULL,
  `jabatan` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `jabatan`) VALUES
(1, 'Administrator'),
(2, 'Kepala Dinas'),
(3, 'Sekretaris Dinas'),
(4, 'Kepala Bidang'),
(5, 'Kepala Subbagian');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id_log` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `id_role` int(1) NOT NULL,
  `id_activity` int(1) NOT NULL,
  `date_time_activity` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(1) NOT NULL,
  `role` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `id_jabatan` int(1) NOT NULL,
  `id_divisi` int(2) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `id_role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `id_jabatan`, `id_divisi`, `nama`, `id_role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 1, 'Fadilah Nur Imani', 1),
(2, 'kadin', '42a11f457bc190506c3055f9aa7a72a1', 2, 1, 'Ir. A. Thamrin', 2),
(3, 'kasubbagpep', 'bd39f002edbff3781979ad00dd7539ad', 5, 3, 'Rini Amirin', 2),
(4, 'sekretaris', '5daf5cbbcfc3adc57e1524a1f384800c', 3, 1, 'Ir. Misvery', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id_activity`);

--
-- Indexes for table `dim_alsin`
--
ALTER TABLE `dim_alsin`
  ADD PRIMARY KEY (`id_alsin`);

--
-- Indexes for table `dim_bulan`
--
ALTER TABLE `dim_bulan`
  ADD PRIMARY KEY (`id_bulan`);

--
-- Indexes for table `dim_caturwulan`
--
ALTER TABLE `dim_caturwulan`
  ADD PRIMARY KEY (`id_caturwulan`);

--
-- Indexes for table `dim_kecamatan`
--
ALTER TABLE `dim_kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `dim_komoditas`
--
ALTER TABLE `dim_komoditas`
  ADD PRIMARY KEY (`id_komoditas`);

--
-- Indexes for table `dim_lahan`
--
ALTER TABLE `dim_lahan`
  ADD PRIMARY KEY (`id_lahan`);

--
-- Indexes for table `dim_masa_tanam`
--
ALTER TABLE `dim_masa_tanam`
  ADD PRIMARY KEY (`id_masa_tanam`);

--
-- Indexes for table `dim_penanaman`
--
ALTER TABLE `dim_penanaman`
  ADD PRIMARY KEY (`id_penanaman`);

--
-- Indexes for table `dim_pupuk`
--
ALTER TABLE `dim_pupuk`
  ADD PRIMARY KEY (`id_pupuk`);

--
-- Indexes for table `dim_tahun`
--
ALTER TABLE `dim_tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indexes for table `dim_triwulan`
--
ALTER TABLE `dim_triwulan`
  ADD PRIMARY KEY (`id_triwulan`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `dm_produktivitas_pangan_testing`
--
ALTER TABLE `dm_produktivitas_pangan_testing`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `dm_produktivitas_pangan_testing_result`
--
ALTER TABLE `dm_produktivitas_pangan_testing_result`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `dm_produktivitas_pangan_training`
--
ALTER TABLE `dm_produktivitas_pangan_training`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `dm_produktivitas_pangan_training_result`
--
ALTER TABLE `dm_produktivitas_pangan_training_result`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `fact_capaian_panen`
--
ALTER TABLE `fact_capaian_panen`
  ADD PRIMARY KEY (`id_fact_capaian_panen`),
  ADD KEY `fk_tahun6` (`id_tahun`),
  ADD KEY `fk_caturwulan4` (`id_caturwulan`),
  ADD KEY `fk_triwulan4` (`id_triwulan`),
  ADD KEY `fk_bulan4` (`id_bulan`),
  ADD KEY `fk_kecamatan6` (`id_kecamatan`),
  ADD KEY `fk_komoditas2` (`id_komoditas`);

--
-- Indexes for table `fact_capaian_produksi`
--
ALTER TABLE `fact_capaian_produksi`
  ADD PRIMARY KEY (`id_fact_capaian_produksi`),
  ADD KEY `fk_tahun7` (`id_tahun`),
  ADD KEY `fk_kecamatan7` (`id_kecamatan`),
  ADD KEY `fk_komoditas3` (`id_komoditas`);

--
-- Indexes for table `fact_capaian_tanam`
--
ALTER TABLE `fact_capaian_tanam`
  ADD PRIMARY KEY (`id_fact_capaian_tanam`),
  ADD KEY `fk_tahun5` (`id_tahun`),
  ADD KEY `fk_masa_tanam` (`id_masa_tanam`),
  ADD KEY `fk_caturwulan3` (`id_caturwulan`),
  ADD KEY `fk_triwulan3` (`id_triwulan`),
  ADD KEY `fk_bulan3` (`id_bulan`),
  ADD KEY `fk_kecamatan5` (`id_kecamatan`),
  ADD KEY `fk_komoditas` (`id_komoditas`);

--
-- Indexes for table `fact_kondisi_iklim`
--
ALTER TABLE `fact_kondisi_iklim`
  ADD PRIMARY KEY (`id_fact_iklim`),
  ADD KEY `fk_tahun4` (`id_tahun`),
  ADD KEY `fk_caturwulan2` (`id_caturwulan`),
  ADD KEY `fk_triwulan2` (`id_triwulan`),
  ADD KEY `fk_bulan2` (`id_bulan`),
  ADD KEY `fk_kecamatan4` (`id_kecamatan`);

--
-- Indexes for table `fact_penggunaan_lahan`
--
ALTER TABLE `fact_penggunaan_lahan`
  ADD PRIMARY KEY (`id_fact_lahan`),
  ADD KEY `fk_tahun3` (`id_tahun`),
  ADD KEY `fk_kecamatan3` (`id_kecamatan`),
  ADD KEY `fk_lahan` (`id_lahan`),
  ADD KEY `fk_penanaman` (`id_penanaman`);

--
-- Indexes for table `fact_penyaluran_alsin`
--
ALTER TABLE `fact_penyaluran_alsin`
  ADD PRIMARY KEY (`id_fact_alsin`),
  ADD KEY `fk_tahun` (`id_tahun`),
  ADD KEY `fk_kecamatan` (`id_kecamatan`),
  ADD KEY `fk_alsin` (`id_alsin`);

--
-- Indexes for table `fact_penyaluran_pupuk`
--
ALTER TABLE `fact_penyaluran_pupuk`
  ADD PRIMARY KEY (`id_fact_pupuk`),
  ADD KEY `fk_tahun2` (`id_tahun`),
  ADD KEY `fk_caturwulan` (`id_caturwulan`),
  ADD KEY `fk_triwulan` (`id_triwulan`),
  ADD KEY `fk_bulan` (`id_bulan`),
  ADD KEY `fk_kecamatan2` (`id_kecamatan`),
  ADD KEY `fk_pupuk` (`id_pupuk`);

--
-- Indexes for table `fact_produktivitas`
--
ALTER TABLE `fact_produktivitas`
  ADD PRIMARY KEY (`id_fact_produktivitas`),
  ADD KEY `fk_tahun8` (`id_tahun`),
  ADD KEY `fk_kecamatan8` (`id_kecamatan`),
  ADD KEY `fk_komoditas4` (`id_komoditas`),
  ADD KEY `fk_lahan2` (`id_lahan`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `id_role` (`id_role`),
  ADD KEY `id_activity` (`id_activity`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_divisi` (`id_divisi`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dm_produktivitas_pangan_testing`
--
ALTER TABLE `dm_produktivitas_pangan_testing`
  ADD CONSTRAINT `fk_kecamatan11` FOREIGN KEY (`id_kecamatan`) REFERENCES `dim_kecamatan` (`id_kecamatan`);

--
-- Constraints for table `dm_produktivitas_pangan_testing_result`
--
ALTER TABLE `dm_produktivitas_pangan_testing_result`
  ADD CONSTRAINT `fk_kecamatan12` FOREIGN KEY (`id_kecamatan`) REFERENCES `dim_kecamatan` (`id_kecamatan`);

--
-- Constraints for table `dm_produktivitas_pangan_training`
--
ALTER TABLE `dm_produktivitas_pangan_training`
  ADD CONSTRAINT `fk_kecamatan13` FOREIGN KEY (`id_kecamatan`) REFERENCES `dim_kecamatan` (`id_kecamatan`);

--
-- Constraints for table `dm_produktivitas_pangan_training_result`
--
ALTER TABLE `dm_produktivitas_pangan_training_result`
  ADD CONSTRAINT `fk_kecamatan14` FOREIGN KEY (`id_kecamatan`) REFERENCES `dim_kecamatan` (`id_kecamatan`);

--
-- Constraints for table `fact_capaian_panen`
--
ALTER TABLE `fact_capaian_panen`
  ADD CONSTRAINT `fk_bulan4` FOREIGN KEY (`id_bulan`) REFERENCES `dim_bulan` (`id_bulan`),
  ADD CONSTRAINT `fk_caturwulan4` FOREIGN KEY (`id_caturwulan`) REFERENCES `dim_caturwulan` (`id_caturwulan`),
  ADD CONSTRAINT `fk_kecamatan6` FOREIGN KEY (`id_kecamatan`) REFERENCES `dim_kecamatan` (`id_kecamatan`),
  ADD CONSTRAINT `fk_komoditas2` FOREIGN KEY (`id_komoditas`) REFERENCES `dim_komoditas` (`id_komoditas`),
  ADD CONSTRAINT `fk_tahun6` FOREIGN KEY (`id_tahun`) REFERENCES `dim_tahun` (`id_tahun`),
  ADD CONSTRAINT `fk_triwulan4` FOREIGN KEY (`id_triwulan`) REFERENCES `dim_triwulan` (`id_triwulan`);

--
-- Constraints for table `fact_capaian_produksi`
--
ALTER TABLE `fact_capaian_produksi`
  ADD CONSTRAINT `fk_kecamatan7` FOREIGN KEY (`id_kecamatan`) REFERENCES `dim_kecamatan` (`id_kecamatan`),
  ADD CONSTRAINT `fk_komoditas3` FOREIGN KEY (`id_komoditas`) REFERENCES `dim_komoditas` (`id_komoditas`),
  ADD CONSTRAINT `fk_tahun7` FOREIGN KEY (`id_tahun`) REFERENCES `dim_tahun` (`id_tahun`);

--
-- Constraints for table `fact_capaian_tanam`
--
ALTER TABLE `fact_capaian_tanam`
  ADD CONSTRAINT `fk_bulan3` FOREIGN KEY (`id_bulan`) REFERENCES `dim_bulan` (`id_bulan`),
  ADD CONSTRAINT `fk_caturwulan3` FOREIGN KEY (`id_caturwulan`) REFERENCES `dim_caturwulan` (`id_caturwulan`),
  ADD CONSTRAINT `fk_kecamatan5` FOREIGN KEY (`id_kecamatan`) REFERENCES `dim_kecamatan` (`id_kecamatan`),
  ADD CONSTRAINT `fk_komoditas` FOREIGN KEY (`id_komoditas`) REFERENCES `dim_komoditas` (`id_komoditas`),
  ADD CONSTRAINT `fk_masa_tanam` FOREIGN KEY (`id_masa_tanam`) REFERENCES `dim_masa_tanam` (`id_masa_tanam`),
  ADD CONSTRAINT `fk_tahun5` FOREIGN KEY (`id_tahun`) REFERENCES `dim_tahun` (`id_tahun`),
  ADD CONSTRAINT `fk_triwulan3` FOREIGN KEY (`id_triwulan`) REFERENCES `dim_triwulan` (`id_triwulan`);

--
-- Constraints for table `fact_kondisi_iklim`
--
ALTER TABLE `fact_kondisi_iklim`
  ADD CONSTRAINT `fk_bulan2` FOREIGN KEY (`id_bulan`) REFERENCES `dim_bulan` (`id_bulan`),
  ADD CONSTRAINT `fk_caturwulan2` FOREIGN KEY (`id_caturwulan`) REFERENCES `dim_caturwulan` (`id_caturwulan`),
  ADD CONSTRAINT `fk_kecamatan4` FOREIGN KEY (`id_kecamatan`) REFERENCES `dim_kecamatan` (`id_kecamatan`),
  ADD CONSTRAINT `fk_tahun4` FOREIGN KEY (`id_tahun`) REFERENCES `dim_tahun` (`id_tahun`),
  ADD CONSTRAINT `fk_triwulan2` FOREIGN KEY (`id_triwulan`) REFERENCES `dim_triwulan` (`id_triwulan`);

--
-- Constraints for table `fact_penggunaan_lahan`
--
ALTER TABLE `fact_penggunaan_lahan`
  ADD CONSTRAINT `fk_kecamatan3` FOREIGN KEY (`id_kecamatan`) REFERENCES `dim_kecamatan` (`id_kecamatan`),
  ADD CONSTRAINT `fk_lahan` FOREIGN KEY (`id_lahan`) REFERENCES `dim_lahan` (`id_lahan`),
  ADD CONSTRAINT `fk_penanaman` FOREIGN KEY (`id_penanaman`) REFERENCES `dim_penanaman` (`id_penanaman`),
  ADD CONSTRAINT `fk_tahun3` FOREIGN KEY (`id_tahun`) REFERENCES `dim_tahun` (`id_tahun`);

--
-- Constraints for table `fact_penyaluran_alsin`
--
ALTER TABLE `fact_penyaluran_alsin`
  ADD CONSTRAINT `fk_alsin` FOREIGN KEY (`id_alsin`) REFERENCES `dim_alsin` (`id_alsin`),
  ADD CONSTRAINT `fk_kecamatan` FOREIGN KEY (`id_kecamatan`) REFERENCES `dim_kecamatan` (`id_kecamatan`),
  ADD CONSTRAINT `fk_tahun` FOREIGN KEY (`id_tahun`) REFERENCES `dim_tahun` (`id_tahun`);

--
-- Constraints for table `fact_penyaluran_pupuk`
--
ALTER TABLE `fact_penyaluran_pupuk`
  ADD CONSTRAINT `fk_bulan` FOREIGN KEY (`id_bulan`) REFERENCES `dim_bulan` (`id_bulan`),
  ADD CONSTRAINT `fk_caturwulan` FOREIGN KEY (`id_caturwulan`) REFERENCES `dim_caturwulan` (`id_caturwulan`),
  ADD CONSTRAINT `fk_kecamatan2` FOREIGN KEY (`id_kecamatan`) REFERENCES `dim_kecamatan` (`id_kecamatan`),
  ADD CONSTRAINT `fk_pupuk` FOREIGN KEY (`id_pupuk`) REFERENCES `dim_pupuk` (`id_pupuk`),
  ADD CONSTRAINT `fk_tahun2` FOREIGN KEY (`id_tahun`) REFERENCES `dim_tahun` (`id_tahun`),
  ADD CONSTRAINT `fk_triwulan` FOREIGN KEY (`id_triwulan`) REFERENCES `dim_triwulan` (`id_triwulan`);

--
-- Constraints for table `fact_produktivitas`
--
ALTER TABLE `fact_produktivitas`
  ADD CONSTRAINT `fk_kecamatan8` FOREIGN KEY (`id_kecamatan`) REFERENCES `dim_kecamatan` (`id_kecamatan`),
  ADD CONSTRAINT `fk_komoditas4` FOREIGN KEY (`id_komoditas`) REFERENCES `dim_komoditas` (`id_komoditas`),
  ADD CONSTRAINT `fk_lahan2` FOREIGN KEY (`id_lahan`) REFERENCES `dim_lahan` (`id_lahan`),
  ADD CONSTRAINT `fk_tahun8` FOREIGN KEY (`id_tahun`) REFERENCES `dim_tahun` (`id_tahun`);

--
-- Constraints for table `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `log_ibfk_2` FOREIGN KEY (`id_activity`) REFERENCES `activity` (`id_activity`),
  ADD CONSTRAINT `log_ibfk_3` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`),
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id_divisi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
