-- Database: `sekolah_db`

CREATE TABLE IF NOT EXISTS `prestasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_siswa` varchar(100) NOT NULL,
  `nama_lomba` varchar(150) NOT NULL,
  `juara` varchar(50) NOT NULL,
  `tingkat` enum('Kecamatan','Kabupaten/Kota','Provinsi','Nasional','Internasional') NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal_post` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumy Data untuk Prestasi
INSERT INTO `prestasi` (`nama_siswa`, `nama_lomba`, `juara`, `tingkat`, `tanggal`) VALUES
('Ahmad Zulkarnain', 'Olimpiade Matematika', 'Juara 1', 'Kabupaten/Kota', '2025-10-15'),
('Siti Aminah', 'Lomba Baca Puisi', 'Juara 2', 'Provinsi', '2025-11-20'),
('Budi Santoso', 'Kejuaraan Karate', 'Juara 1', 'Nasional', '2025-12-05');

-- Dummy Data untuk Berita
INSERT INTO `berita` (`judul`, `isi`, `foto`, `tanggal_post`) VALUES
('Penerimaan Peserta Didik Baru (PPDB) 2026', 'SMPN 1 Bogor membuka pendaftaran peserta didik baru untuk tahun ajaran 2026/2027. Segera daftarkan putra-putri Anda melalui website resmi kami atau datang langsung ke sekolah.', 'ppdb-2026.jpg', '2026-01-05 08:00:00'),
('Kegiatan Tengah Semester Genap Berjalan Lancar', 'Kegiatan Tengah Semester (KTS) genap tahun ini diisi dengan berbagai lomba antar kelas yang seru dan mendidik. Seluruh siswa sangat antusias mengikuti kegiatan ini.', 'kts-genap.jpg', '2026-02-10 09:30:00'),
('Tim Basket Sekolah Raih Juara Tingkat Kota', 'Selamat kepada tim basket putra SMPN 1 Bogor yang telah berhasil meraih juara 1 dalam turnamen basket antar pelajar tingkat kota Bogor.', 'basket-juara.jpg', '2026-02-15 14:00:00');
