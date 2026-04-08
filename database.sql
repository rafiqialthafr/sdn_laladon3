

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS teachers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    position VARCHAR(100) NOT NULL,
    photo VARCHAR(255) DEFAULT 'default_teacher.jpg',
    bio TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS blog (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    image VARCHAR(255) DEFAULT 'default_blog.jpg',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Dummy Data for Teachers
INSERT INTO teachers (name, position, photo, bio) VALUES
('Budi Santoso', 'Kepala Sekolah', 'https://placehold.co/400x400/2c3e50/ffffff?text=Kepsek', 'Berpengalaman 20 tahun di dunia pendidikan.'),
('Siti Aminah', 'Wakil Kurikulum', 'https://placehold.co/400x400/e74c3c/ffffff?text=Guru+1', 'Ahli dalam pengembangan kurikulum merdeka.'),
('Agus Pratama', 'Guru Matematika', 'https://placehold.co/400x400/3498db/ffffff?text=Guru+2', 'Juara Olimpiade Matematika Nasional 2010.'),
('Dewi Lestari', 'Guru Bahasa Inggris', 'https://placehold.co/400x400/9b59b6/ffffff?text=Guru+3', 'Lulusan Sastra Inggris UI.');

-- Dummy Data for Blog
INSERT INTO blog (title, content, image) VALUES
('Kegiatan Pramuka Wajib', 'Kegiatan pramuka dilaksanakan setiap hari Sabtu...', 'https://placehold.co/600x400/f1c40f/ffffff?text=Pramuka'),
('Juara 1 Lomba Cerdas Cermat', 'Selamat kepada tim cerdas cermat sekolah...', 'https://placehold.co/600x400/2ecc71/ffffff?text=Juara'),
('Penerimaan Siswa Baru 2024', 'Segera daftarkan putra-putri anda...', 'https://placehold.co/600x400/e67e22/ffffff?text=PPDB');

-- Dummy Admin (password: admin123)
INSERT INTO users (username, password) VALUES
('admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');
