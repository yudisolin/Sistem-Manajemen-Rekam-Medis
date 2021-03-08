-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11 Feb 2021 pada 08.34
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekammedis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `idAkun` int(11) NOT NULL,
  `nip` bigint(20) NOT NULL,
  `kataSandi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`idAkun`, `nip`, `kataSandi`) VALUES
(1, 198004122003101001, 'andi123'),
(2, 198004122003101002, 'siti123'),
(3, 198004122003101003, 'caca123'),
(4, 198004122003101004, 'denisa123'),
(5, 198004122003101005, 'budi123'),
(6, 198004122003101006, 'andre123'),
(7, 198004122003101007, 'jack123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anamnesis_rawatinap`
--

CREATE TABLE `anamnesis_rawatinap` (
  `idAnamnesis` int(11) NOT NULL,
  `idRawatInap` int(11) NOT NULL,
  `nomorRekamMedis` int(6) UNSIGNED ZEROFILL NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `keluhanUtama` text NOT NULL,
  `riwayatPenyakitSekarang` varchar(255) NOT NULL,
  `riwayatPenyakitTerdahulu` varchar(255) NOT NULL,
  `pemeriksaanFisik` text NOT NULL,
  `nip` bigint(20) NOT NULL,
  `status` enum('Menunggu','Setuju','Tolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `anamnesis_rawatinap`
--

INSERT INTO `anamnesis_rawatinap` (`idAnamnesis`, `idRawatInap`, `nomorRekamMedis`, `tanggal`, `jam`, `keluhanUtama`, `riwayatPenyakitSekarang`, `riwayatPenyakitTerdahulu`, `pemeriksaanFisik`, `nip`, `status`) VALUES
(1, 1, 000001, '2021-01-15', '15:40:00', '-', '-', '-', '-', 198004122003101001, 'Menunggu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatanterintegrasi_rawatinap`
--

CREATE TABLE `catatanterintegrasi_rawatinap` (
  `idCatatanTerintegrasi` int(11) NOT NULL,
  `idRawatInap` int(11) NOT NULL,
  `nomorRekamMedis` int(6) UNSIGNED ZEROFILL NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `profesi` enum('Dokter','Perawat') NOT NULL,
  `catatan` text NOT NULL,
  `nip` bigint(20) NOT NULL,
  `status` enum('Menunggu','Setuju','Tolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `catatanterintegrasi_rawatinap`
--

INSERT INTO `catatanterintegrasi_rawatinap` (`idCatatanTerintegrasi`, `idRawatInap`, `nomorRekamMedis`, `tanggal`, `jam`, `profesi`, `catatan`, `nip`, `status`) VALUES
(1, 1, 000001, '2021-01-15', '17:35:00', 'Dokter', '-', 198004122003101001, 'Menunggu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasillaboratorium_darah`
--

CREATE TABLE `hasillaboratorium_darah` (
  `idLabDarah` int(11) NOT NULL,
  `idRawatInap` int(11) NOT NULL,
  `nomorRekamMedis` int(6) UNSIGNED ZEROFILL NOT NULL,
  `tanggal` date NOT NULL,
  `hemoglobin` double NOT NULL,
  `eritrosit` double NOT NULL,
  `leukosit` double NOT NULL,
  `hematokrit` double NOT NULL,
  `mcv` double NOT NULL,
  `mch` double NOT NULL,
  `mchc` double NOT NULL,
  `trombosit` double NOT NULL,
  `nip` bigint(20) NOT NULL,
  `namaPetugas` varchar(50) NOT NULL,
  `status` enum('Menunggu','Setuju','Tolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasillaboratorium_faeces`
--

CREATE TABLE `hasillaboratorium_faeces` (
  `idLabFaeces` int(11) NOT NULL,
  `idRawatInap` int(11) NOT NULL,
  `nomorRekamMedis` int(6) UNSIGNED ZEROFILL NOT NULL,
  `tanggal` date NOT NULL,
  `warna` varchar(20) NOT NULL,
  `konsistensi` varchar(50) NOT NULL,
  `darah` enum('Ada','Tidak ada') NOT NULL,
  `lendir` enum('Ada','Tidak ada') NOT NULL,
  `telurCacing` int(11) NOT NULL,
  `eritrosit` int(11) NOT NULL,
  `leukosit` int(11) NOT NULL,
  `amoeba` int(11) NOT NULL,
  `namaTenagaMedis` varchar(50) NOT NULL,
  `nip` bigint(20) NOT NULL,
  `namaPetugas` varchar(50) NOT NULL,
  `status` enum('Menunggu','Setuju','Tolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasillaboratorium_sputum`
--

CREATE TABLE `hasillaboratorium_sputum` (
  `idLabSputum` int(11) NOT NULL,
  `idRawatInap` int(11) NOT NULL,
  `nomorRekamMedis` int(6) UNSIGNED ZEROFILL NOT NULL,
  `tanggal` date NOT NULL,
  `paru` varchar(50) NOT NULL,
  `ekstraParu` varchar(50) NOT NULL,
  `nanahBerlendir` enum('Ada','Tidak ada') NOT NULL,
  `bercakDarah` enum('Ada','Tidak ada') NOT NULL,
  `air` enum('Ada','Tidak ada') NOT NULL,
  `namaTenagaMedis` varchar(50) NOT NULL,
  `nip` bigint(20) NOT NULL,
  `namaPetugas` varchar(50) NOT NULL,
  `status` enum('Menunggu','Setuju','Tolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasillaboratorium_urine`
--

CREATE TABLE `hasillaboratorium_urine` (
  `idLabUrine` int(11) NOT NULL,
  `idRawatInap` int(11) NOT NULL,
  `nomorRekamMedis` int(6) UNSIGNED ZEROFILL NOT NULL,
  `tanggal` date NOT NULL,
  `warna` varchar(20) NOT NULL,
  `glukosa` double NOT NULL,
  `protein` double NOT NULL,
  `bilirubin` double NOT NULL,
  `urobilinogen` double NOT NULL,
  `pH` double NOT NULL,
  `beratJenis` double NOT NULL,
  `darah` double NOT NULL,
  `namaPetugas` varchar(50) NOT NULL,
  `nip` bigint(20) NOT NULL,
  `status` enum('Menunggu','Setuju','Tolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasilradiodiagnostik`
--

CREATE TABLE `hasilradiodiagnostik` (
  `idRadio` int(11) NOT NULL,
  `idRawatInap` int(11) NOT NULL,
  `nomorRekamMedis` int(6) UNSIGNED ZEROFILL NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `namaPetugas` varchar(50) NOT NULL,
  `nip` bigint(20) NOT NULL,
  `status` enum('Menunggu','Setuju','Tolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kumpulan_penyakit`
--

CREATE TABLE `kumpulan_penyakit` (
  `kodePenyakit` varchar(10) NOT NULL,
  `namaPenyakit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `kumpulan_penyakit`
--

INSERT INTO `kumpulan_penyakit` (`kodePenyakit`, `namaPenyakit`) VALUES
('A03.9', 'Disentri basiler'),
('A36', 'Difteria'),
('A75', 'Demam tipus'),
('A90', 'Demam dengue'),
('E06', 'Dehidrasi'),
('G81.9', 'Hemiparesis'),
('H33.2', 'Ablasio retina / Cornea'),
('H53', 'Gangguan daya lihat'),
('J11.1', 'Flu'),
('J40', 'Bronchitis'),
('J45', 'Asma akibat kerja'),
('K29.7', 'Gastritis'),
('K65.0', 'Abses perut'),
('N45.9', 'Epididimitis'),
('N80', 'Endometriosis'),
('P21.1', 'Asfiksia ringan'),
('R10.4', 'Colic abdomen'),
('R31', 'Hematuria'),
('T14.3', 'Dislokasi'),
('T78.4', 'Alergi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obatdandiet_rawatinap`
--

CREATE TABLE `obatdandiet_rawatinap` (
  `idObatDanDiet` int(11) NOT NULL,
  `idRawatInap` int(11) NOT NULL,
  `nomorRekamMedis` int(6) UNSIGNED ZEROFILL NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `obat` text NOT NULL,
  `diet` text NOT NULL,
  `status` enum('Menunggu','Setuju') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `nomorRekamMedis` int(6) UNSIGNED ZEROFILL NOT NULL,
  `namaLengkap` varchar(50) NOT NULL,
  `jenisKelamin` varchar(10) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `suku` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `nomorTelepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`nomorRekamMedis`, `namaLengkap`, `jenisKelamin`, `tanggalLahir`, `pekerjaan`, `alamat`, `suku`, `agama`, `nomorTelepon`) VALUES
(000001, 'Adit Chandra', 'Laki-laki', '1999-01-14', 'Pelajar', 'Jl. Bunga Terompet No. 56', 'Jawa', 'Islam', '081223455889'),
(000002, 'Ojak Simanungkalit', 'Laki-laki', '2010-01-15', 'Pelajar', 'Jl. Timur Tengah No.210', 'Batak', 'Kristen', '081573594891'),
(000003, 'Boby Bob', 'Laki-laki', '2002-06-04', 'Pelajar', 'Jl. Bunga Terompet No. 10', 'Jawa', 'Islam', '081573594891');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekammedisrawatinap`
--

CREATE TABLE `rekammedisrawatinap` (
  `idRawatInap` int(11) NOT NULL,
  `nomorRekamMedis` int(6) UNSIGNED ZEROFILL NOT NULL,
  `namaLengkap` varchar(50) NOT NULL,
  `ruangan` varchar(20) NOT NULL,
  `namaTenagaMedis` varchar(50) NOT NULL,
  `nip` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `rekammedisrawatinap`
--

INSERT INTO `rekammedisrawatinap` (`idRawatInap`, `nomorRekamMedis`, `namaLengkap`, `ruangan`, `namaTenagaMedis`, `nip`) VALUES
(1, 000001, 'Adit Chandra', 'Melati', 'Andi Laksana', 198004122003101001),
(2, 000002, 'Ojak Simanungkalit', 'Melati', 'Budi Simatupang', 198004122003101005),
(3, 000003, 'Boby Bob', 'Mawar', 'Andi Laksana', 198004122003101001),
(4, 000003, 'Boby Bob', '', 'Andi Laksana', 198004122003101001);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekammedisrawatjalan`
--

CREATE TABLE `rekammedisrawatjalan` (
  `idRawatJalan` int(11) NOT NULL,
  `nomorRekamMedis` int(6) UNSIGNED ZEROFILL NOT NULL,
  `namaLengkap` varchar(50) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `jenisKelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `nomorTelepon` varchar(50) NOT NULL,
  `agama` enum('Islam','Kristen','Katolik','Hindu','Buddha','Konghucu') NOT NULL,
  `suku` varchar(20) NOT NULL,
  `statusPerkawinan` enum('Belum menikah','Menikah','Janda','Duda') NOT NULL,
  `umur` int(2) NOT NULL,
  `nomorKTP` varchar(20) NOT NULL,
  `namaPemegangKTP` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `diagnosis` varchar(50) DEFAULT NULL,
  `pengobatan` text NOT NULL,
  `namaTenagaMedis` varchar(50) NOT NULL,
  `nip` bigint(20) NOT NULL,
  `status` enum('Menunggu','Setuju','Tolak') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `rekammedisrawatjalan`
--

INSERT INTO `rekammedisrawatjalan` (`idRawatJalan`, `nomorRekamMedis`, `namaLengkap`, `tanggalLahir`, `jenisKelamin`, `alamat`, `pekerjaan`, `nomorTelepon`, `agama`, `suku`, `statusPerkawinan`, `umur`, `nomorKTP`, `namaPemegangKTP`, `tanggal`, `jam`, `diagnosis`, `pengobatan`, `namaTenagaMedis`, `nip`, `status`) VALUES
(1, 000001, 'Adit Chandra', '1999-01-14', 'Laki-laki', 'Jl. Bunga Terompet No. 56', 'Pelajar', '081223455889', 'Islam', 'Jawa', 'Belum menikah', 22, '1234567890', 'Adit Chandra', '2021-01-14', '16:03:00', 'Alergi', 'Cetrizin 3 x 1', 'Andi Laksana', 198004122003101001, 'Setuju'),
(3, 000002, 'Ojak Simanungkalit', '2010-01-15', 'Laki-laki', 'Jl. Timur Tengah No.210', 'Pelajar', '081573594891', 'Kristen', 'Batak', 'Belum menikah', 11, '1123456789', 'Baris Simanungkalit', '2021-01-15', '10:05:00', 'Alergi', '-', 'Budi Simatupang', 198004122003101005, 'Menunggu'),
(4, 000003, 'Boby Bob', '2002-06-04', 'Laki-laki', 'Jl. Bunga Terompet No. 10', 'Pelajar', '081573594891', 'Islam', 'Jawa', 'Belum menikah', 18, '1223456789', 'Jamal Malik', '2021-01-15', '07:10:00', 'Demam tipus', '-', 'Andi Laksana', 198004122003101001, 'Setuju'),
(5, 000001, 'Adit Chandra', '1999-01-14', 'Laki-laki', 'Jl. Bunga Terompet No. 56', 'Pelajar', '081223455889', 'Islam', 'Jawa', 'Belum menikah', 22, '1234567891', 'Adit Chandra', '2021-02-03', '10:10:00', 'Dehidrasi', 'Minum oralit', 'Andi Laksana', 198004122003101001, 'Menunggu'),
(6, 000002, 'Ojak Simanungkalit', '2010-01-15', 'Laki-laki', 'Jl. Timur Tengah No.210', 'Pelajar', '081573594891', 'Kristen', 'Batak', 'Belum menikah', 11, '1234567891', 'Baris Simanungkalit', '2021-02-03', '00:00:00', NULL, '', 'Andi Laksana', 198004122003101001, 'Menunggu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ringkasankeluar_rawatinap`
--

CREATE TABLE `ringkasankeluar_rawatinap` (
  `idRingkasanKeluar` int(11) NOT NULL,
  `idRawatInap` int(11) NOT NULL,
  `nomorRekamMedis` int(6) UNSIGNED ZEROFILL NOT NULL,
  `tanggalKeluar` date NOT NULL,
  `jamKeluar` time NOT NULL,
  `ruanganKeluar` enum('Melati','Anggrek','Mawar','Melur','Flamboyan','Dahlia','Nusa Indah','ICU') NOT NULL,
  `statusPulang` enum('Rawat jalan','Permintaan sendiri','Meninggal','Lari') NOT NULL,
  `keadaanPulang` enum('Sembuh','Belum sembuh','Meninggal') NOT NULL,
  `diagnosisPenyakitKeluar` enum('Penyakit mata','Penyakit telinga','Penyakit sistem sirkulasi','Penyakit sistem pernapasan','Penyakit sistem pencernaan','Sembuh') NOT NULL,
  `nip` bigint(20) NOT NULL,
  `status` enum('Menunggu','Setuju','Tolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ringkasankeluar_rawatinap`
--

INSERT INTO `ringkasankeluar_rawatinap` (`idRingkasanKeluar`, `idRawatInap`, `nomorRekamMedis`, `tanggalKeluar`, `jamKeluar`, `ruanganKeluar`, `statusPulang`, `keadaanPulang`, `diagnosisPenyakitKeluar`, `nip`, `status`) VALUES
(1, 1, 000001, '2021-01-15', '18:35:00', 'Mawar', 'Permintaan sendiri', 'Sembuh', 'Sembuh', 198004122003101001, 'Menunggu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ringkasanmasuk_rawatinap`
--

CREATE TABLE `ringkasanmasuk_rawatinap` (
  `idRingkasanMasuk` int(6) NOT NULL,
  `idRawatInap` int(11) NOT NULL,
  `nomorRekamMedis` int(6) UNSIGNED ZEROFILL NOT NULL,
  `tanggalLahir` date NOT NULL,
  `jenisKelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `nomorTelepon` varchar(50) NOT NULL,
  `namaKeluargaDekat` varchar(50) NOT NULL,
  `agama` enum('Islam','Kristen','Katolik','Hindu','Buddha','Konghucu') NOT NULL,
  `suku` varchar(20) NOT NULL,
  `statusPerkawinan` enum('Belum menikah','Menikah','Janda','Duda') NOT NULL,
  `statusAsuransi` enum('Ada','Tidak ada') NOT NULL,
  `namaAsuransi` varchar(50) NOT NULL,
  `caraPenerimaan` enum('Datang sendiri','Rujukan') NOT NULL,
  `dikirimOleh` enum('Diri sendiri','Puskesmas Parongil','Puskesmas Sitinjo','Puskesmas Sumbul','RSUD Pakpak Bharat') NOT NULL,
  `ruangan` enum('Melati','Anggrek','Mawar','Melur','Flamboyan','Dahlia','Nusa Indah','ICU') DEFAULT NULL,
  `tanggalMasuk` date NOT NULL,
  `jamMasuk` time NOT NULL,
  `diagnosisPenyakitMasuk` varchar(50) DEFAULT NULL,
  `dirawatDiBagian` enum('Anak','Bayi','Bedah','ICU','Kandungan','Paru','Penyakit dalam') DEFAULT NULL,
  `nip` bigint(20) NOT NULL,
  `status` enum('Menunggu','Setuju','Tolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `ringkasanmasuk_rawatinap`
--

INSERT INTO `ringkasanmasuk_rawatinap` (`idRingkasanMasuk`, `idRawatInap`, `nomorRekamMedis`, `tanggalLahir`, `jenisKelamin`, `alamat`, `pekerjaan`, `nomorTelepon`, `namaKeluargaDekat`, `agama`, `suku`, `statusPerkawinan`, `statusAsuransi`, `namaAsuransi`, `caraPenerimaan`, `dikirimOleh`, `ruangan`, `tanggalMasuk`, `jamMasuk`, `diagnosisPenyakitMasuk`, `dirawatDiBagian`, `nip`, `status`) VALUES
(1, 1, 000001, '1999-01-14', 'Laki-laki', 'Jl. Bunga Terompet No. 56', 'Pelajar', '081223455889', 'Meri Sipayung', 'Islam', 'Jawa', 'Belum menikah', 'Tidak ada', '-', 'Datang sendiri', 'Diri sendiri', 'Melati', '2021-02-01', '07:05:00', 'Abses perut', 'Penyakit dalam', 198004122003101001, 'Menunggu'),
(2, 2, 000002, '2010-01-15', 'Laki-laki', 'Jl. Timur Tengah No.210', 'Pelajar', '081223455889', 'Robert Silaen', 'Kristen', 'Batak', 'Belum menikah', 'Ada', 'BPJS', 'Datang sendiri', 'Diri sendiri', 'Melati', '2021-01-15', '15:00:00', 'Demam tipus', 'Anak', 198004122003101005, 'Menunggu'),
(3, 3, 000003, '2002-06-04', 'Laki-laki', 'Jl. Bunga Terompet No. 10', 'Pelajar', '081573594891', 'Siti Sarah', 'Islam', 'Jawa', 'Belum menikah', 'Tidak ada', '-', 'Datang sendiri', 'Diri sendiri', 'Mawar', '2021-02-03', '10:00:00', 'Alergi', 'Penyakit dalam', 198004122003101001, 'Menunggu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tenaga_medis`
--

CREATE TABLE `tenaga_medis` (
  `nip` bigint(20) NOT NULL,
  `namaLengkap` varchar(50) NOT NULL,
  `profesi` enum('Dokter','Perawat','Petugas Diagnostik','Petugas Pendaftaran') NOT NULL,
  `ruangan` enum('Anak','Kandungan','Penyakit Dalam','Melati','Anggrek','Mawar','Melur','Flamboyan','Dahlia','Nusa Indah','ICU','Laboratorium Darah','Laboratorium Faeces','Laboratorium Sputum','Laboratorium Urine','Radio Diagnostik','Tidak ada') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tenaga_medis`
--

INSERT INTO `tenaga_medis` (`nip`, `namaLengkap`, `profesi`, `ruangan`) VALUES
(198004122003101001, 'Andi Laksana', 'Dokter', 'Penyakit Dalam'),
(198004122003101002, 'Siti Sumiyati', 'Perawat', 'Mawar'),
(198004122003101003, 'Caca Putri', 'Petugas Diagnostik', 'Laboratorium Darah'),
(198004122003101004, 'Denisa Sastro', 'Petugas Pendaftaran', 'Tidak ada'),
(198004122003101005, 'Budi Simatupang', 'Dokter', 'Anak'),
(198004122003101006, 'Andre Silaen', 'Perawat', 'Melati'),
(198004122003101007, 'Jack Sirait', 'Petugas Diagnostik', 'Laboratorium Faeces');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`idAkun`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `anamnesis_rawatinap`
--
ALTER TABLE `anamnesis_rawatinap`
  ADD PRIMARY KEY (`idAnamnesis`),
  ADD KEY `idRawatInap` (`idRawatInap`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `catatanterintegrasi_rawatinap`
--
ALTER TABLE `catatanterintegrasi_rawatinap`
  ADD PRIMARY KEY (`idCatatanTerintegrasi`),
  ADD KEY `nip` (`nip`),
  ADD KEY `idRawatInap` (`idRawatInap`);

--
-- Indexes for table `hasillaboratorium_darah`
--
ALTER TABLE `hasillaboratorium_darah`
  ADD PRIMARY KEY (`idLabDarah`),
  ADD KEY `idRawatInap` (`idRawatInap`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `hasillaboratorium_faeces`
--
ALTER TABLE `hasillaboratorium_faeces`
  ADD PRIMARY KEY (`idLabFaeces`),
  ADD KEY `idRawatInap` (`idRawatInap`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `hasillaboratorium_sputum`
--
ALTER TABLE `hasillaboratorium_sputum`
  ADD PRIMARY KEY (`idLabSputum`),
  ADD KEY `idRawatInap` (`idRawatInap`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `hasillaboratorium_urine`
--
ALTER TABLE `hasillaboratorium_urine`
  ADD PRIMARY KEY (`idLabUrine`),
  ADD KEY `idRawatInap` (`idRawatInap`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `hasilradiodiagnostik`
--
ALTER TABLE `hasilradiodiagnostik`
  ADD PRIMARY KEY (`idRadio`),
  ADD KEY `nip` (`nip`),
  ADD KEY `idRawatInap` (`idRawatInap`);

--
-- Indexes for table `kumpulan_penyakit`
--
ALTER TABLE `kumpulan_penyakit`
  ADD PRIMARY KEY (`kodePenyakit`);

--
-- Indexes for table `obatdandiet_rawatinap`
--
ALTER TABLE `obatdandiet_rawatinap`
  ADD PRIMARY KEY (`idObatDanDiet`),
  ADD KEY `idRawatInap` (`idRawatInap`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`nomorRekamMedis`),
  ADD KEY `nomorRekamMedis` (`nomorRekamMedis`);

--
-- Indexes for table `rekammedisrawatinap`
--
ALTER TABLE `rekammedisrawatinap`
  ADD PRIMARY KEY (`idRawatInap`),
  ADD KEY `nomoRekamMedis` (`nomorRekamMedis`);

--
-- Indexes for table `rekammedisrawatjalan`
--
ALTER TABLE `rekammedisrawatjalan`
  ADD PRIMARY KEY (`idRawatJalan`),
  ADD KEY `nomorRekamMedis` (`nomorRekamMedis`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `ringkasankeluar_rawatinap`
--
ALTER TABLE `ringkasankeluar_rawatinap`
  ADD PRIMARY KEY (`idRingkasanKeluar`),
  ADD KEY `idRawatInap` (`idRawatInap`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `ringkasanmasuk_rawatinap`
--
ALTER TABLE `ringkasanmasuk_rawatinap`
  ADD PRIMARY KEY (`idRingkasanMasuk`),
  ADD KEY `nip` (`nip`),
  ADD KEY `idRawatInap` (`idRawatInap`);

--
-- Indexes for table `tenaga_medis`
--
ALTER TABLE `tenaga_medis`
  ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `idAkun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `anamnesis_rawatinap`
--
ALTER TABLE `anamnesis_rawatinap`
  MODIFY `idAnamnesis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `catatanterintegrasi_rawatinap`
--
ALTER TABLE `catatanterintegrasi_rawatinap`
  MODIFY `idCatatanTerintegrasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hasillaboratorium_darah`
--
ALTER TABLE `hasillaboratorium_darah`
  MODIFY `idLabDarah` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hasillaboratorium_faeces`
--
ALTER TABLE `hasillaboratorium_faeces`
  MODIFY `idLabFaeces` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hasillaboratorium_sputum`
--
ALTER TABLE `hasillaboratorium_sputum`
  MODIFY `idLabSputum` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hasillaboratorium_urine`
--
ALTER TABLE `hasillaboratorium_urine`
  MODIFY `idLabUrine` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hasilradiodiagnostik`
--
ALTER TABLE `hasilradiodiagnostik`
  MODIFY `idRadio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `obatdandiet_rawatinap`
--
ALTER TABLE `obatdandiet_rawatinap`
  MODIFY `idObatDanDiet` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `nomorRekamMedis` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `rekammedisrawatinap`
--
ALTER TABLE `rekammedisrawatinap`
  MODIFY `idRawatInap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rekammedisrawatjalan`
--
ALTER TABLE `rekammedisrawatjalan`
  MODIFY `idRawatJalan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ringkasankeluar_rawatinap`
--
ALTER TABLE `ringkasankeluar_rawatinap`
  MODIFY `idRingkasanKeluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ringkasanmasuk_rawatinap`
--
ALTER TABLE `ringkasanmasuk_rawatinap`
  MODIFY `idRingkasanMasuk` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `akun_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tenaga_medis` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `anamnesis_rawatinap`
--
ALTER TABLE `anamnesis_rawatinap`
  ADD CONSTRAINT `anamnesis_rawatinap_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tenaga_medis` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `anamnesis_rawatinap_ibfk_2` FOREIGN KEY (`idRawatInap`) REFERENCES `rekammedisrawatinap` (`idRawatInap`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `catatanterintegrasi_rawatinap`
--
ALTER TABLE `catatanterintegrasi_rawatinap`
  ADD CONSTRAINT `catatanterintegrasi_rawatinap_ibfk_1` FOREIGN KEY (`idRawatInap`) REFERENCES `rekammedisrawatinap` (`idRawatInap`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `catatanterintegrasi_rawatinap_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `tenaga_medis` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `hasillaboratorium_darah`
--
ALTER TABLE `hasillaboratorium_darah`
  ADD CONSTRAINT `hasillaboratorium_darah_ibfk_1` FOREIGN KEY (`idRawatInap`) REFERENCES `rekammedisrawatinap` (`idRawatInap`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hasillaboratorium_darah_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `tenaga_medis` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `hasillaboratorium_faeces`
--
ALTER TABLE `hasillaboratorium_faeces`
  ADD CONSTRAINT `hasillaboratorium_faeces_ibfk_1` FOREIGN KEY (`idRawatInap`) REFERENCES `rekammedisrawatinap` (`idRawatInap`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hasillaboratorium_faeces_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `tenaga_medis` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `hasillaboratorium_sputum`
--
ALTER TABLE `hasillaboratorium_sputum`
  ADD CONSTRAINT `hasillaboratorium_sputum_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tenaga_medis` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hasillaboratorium_sputum_ibfk_2` FOREIGN KEY (`idRawatInap`) REFERENCES `rekammedisrawatinap` (`idRawatInap`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `hasillaboratorium_urine`
--
ALTER TABLE `hasillaboratorium_urine`
  ADD CONSTRAINT `hasillaboratorium_urine_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tenaga_medis` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hasillaboratorium_urine_ibfk_2` FOREIGN KEY (`idRawatInap`) REFERENCES `rekammedisrawatinap` (`idRawatInap`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `hasilradiodiagnostik`
--
ALTER TABLE `hasilradiodiagnostik`
  ADD CONSTRAINT `hasilradiodiagnostik_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tenaga_medis` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hasilradiodiagnostik_ibfk_2` FOREIGN KEY (`idRawatInap`) REFERENCES `rekammedisrawatinap` (`idRawatInap`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `obatdandiet_rawatinap`
--
ALTER TABLE `obatdandiet_rawatinap`
  ADD CONSTRAINT `obatdandiet_rawatinap_ibfk_1` FOREIGN KEY (`idRawatInap`) REFERENCES `rekammedisrawatinap` (`idRawatInap`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rekammedisrawatinap`
--
ALTER TABLE `rekammedisrawatinap`
  ADD CONSTRAINT `rekammedisrawatinap_ibfk_1` FOREIGN KEY (`nomorRekamMedis`) REFERENCES `pasien` (`nomorRekamMedis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rekammedisrawatjalan`
--
ALTER TABLE `rekammedisrawatjalan`
  ADD CONSTRAINT `rekammedisrawatjalan_ibfk_1` FOREIGN KEY (`nomorRekamMedis`) REFERENCES `pasien` (`nomorRekamMedis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rekammedisrawatjalan_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `tenaga_medis` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ringkasankeluar_rawatinap`
--
ALTER TABLE `ringkasankeluar_rawatinap`
  ADD CONSTRAINT `ringkasankeluar_rawatinap_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tenaga_medis` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ringkasankeluar_rawatinap_ibfk_2` FOREIGN KEY (`idRawatInap`) REFERENCES `rekammedisrawatinap` (`idRawatInap`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ringkasanmasuk_rawatinap`
--
ALTER TABLE `ringkasanmasuk_rawatinap`
  ADD CONSTRAINT `ringkasanmasuk_rawatinap_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tenaga_medis` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ringkasanmasuk_rawatinap_ibfk_2` FOREIGN KEY (`idRawatInap`) REFERENCES `rekammedisrawatinap` (`idRawatInap`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
