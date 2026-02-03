CREATE DATABASE IF NOT EXISTS db_sekolah;
USE db_sekolah;

-- Table structure for table `admin`
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
);

-- Dumping data for table `admin` (Default password: admin)
INSERT INTO `admin` (`username`, `password`, `nama_lengkap`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Sepa');

-- Table structure for table `guru`
CREATE TABLE IF NOT EXISTS `guru` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(20) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `mata_pelajaran` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
);

-- Dumping data for table `guru`
INSERT INTO `guru` (`nip`, `nama_guru`, `mata_pelajaran`, `no_hp`) VALUES
('198501012010011001', 'Budi Santoso, S.Pd', 'Matematika', '081234567890'),
('199002022015022002', 'Siti Aminah, M.Pd', 'Bahasa Indonesia', '081298765432');
