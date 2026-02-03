-- Buat Database
CREATE DATABASE IF NOT EXISTS sekolah_db;
USE sekolah_db;

-- Buat Tabel Guru
CREATE TABLE IF NOT EXISTS guru (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nip VARCHAR(20) NOT NULL UNIQUE,
    nama VARCHAR(100) NOT NULL,
    mata_pelajaran VARCHAR(50) NOT NULL,
    no_hp VARCHAR(20) NOT NULL
);

-- Buat Tabel Admin (Opsional untuk login)
CREATE TABLE IF NOT EXISTS admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL, -- Password harus di-hash di production
    nama_lengkap VARCHAR(100)
);

-- Insert Data Dummy Guru
INSERT INTO guru (nip, nama, mata_pelajaran, no_hp) VALUES
('19850101 201001 1 001', 'Budi Santoso, S.Pd', 'Matematika', '0812-3456-7890'),
('19900505 201502 2 003', 'Siti Aminah, M.Pd', 'Bahasa Indonesia', '0813-9876-5432'),
('19780312 200501 1 015', 'Drs. Ahmad Dahlan', 'Fisika', '0811-2233-4455'),
('20000101 202301 1 007', 'Rizky Pratama, S.Kom', 'TIK', '0857-1122-3344');

-- Insert Data Dummy Admin (Password: admin)
INSERT INTO admin (username, password, nama_lengkap) VALUES
('admin', 'admin', 'Sepa Administrator');
