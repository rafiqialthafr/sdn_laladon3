<CREATE TABLE guru (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nama_guru VARCHAR(100) NOT NULL,
    nip VARCHAR(20) NOT NULL,
    mata_pelajaran VARCHAR(50) NOT NULL,
    no_hp VARCHAR(15) NOT NULL
);

-- Masukkan data contoh agar tabel tidak kosong
INSERT INTO guru (nama_guru, nip, mata_pelajaran, no_hp) VALUES
('Budi Santoso', '1987654321', 'Matematika', '081234567890'),
('Siti Rahmawati', '1976543210', 'Bahasa Inggris', '082345678901'),
('Ahmad Subari', '1965432109', 'IPA', '083456789012'),
('Dewi Lestari', '1965321098', 'Sejarah', '084567890123');