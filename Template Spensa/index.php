<?php
require_once 'config.php';
require_once 'functions.php';

// Ambil 3 Berita Terbaru
$stmt_berita = $pdo->query("SELECT * FROM berita ORDER BY tanggal_post DESC LIMIT 3");
$berita_list = $stmt_berita->fetchAll();

// Ambil Daftar Prestasi
$stmt_prestasi = $pdo->query("SELECT * FROM prestasi ORDER BY tanggal DESC LIMIT 4");
$prestasi_list = $stmt_prestasi->fetchAll();

include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Hero Section -->
<section class="relative bg-navy h-[600px] flex items-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1596495578065-6e0763fa1178?ixlib=rb-1.2.1&auto=format&fit=crop&w=1951&q=80" alt="School Building" class="w-full h-full object-cover">
        <div class="absolute inset-0 hero-overlay"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10 text-center text-white">
        <h1 class="text-4xl md:text-6xl font-bold mb-4 animate-fade-in-up">Selamat Datang di <br> <span class="text-gold">SMP Negeri 1 Bogor</span></h1>
        <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto text-gray-200">Menjadi sekolah unggulan yang berwawasan lingkungan, berkarakter, dan berdaya saing global.</p>
        <div class="flex justify-center space-x-4">
            <a href="#" class="bg-gold text-navy font-bold py-3 px-8 rounded-full shadow-lg hover:bg-yellow-400 transition transform hover:scale-105">Profil Sekolah</a>
            <a href="#" class="bg-transparent border-2 border-white text-white font-bold py-3 px-8 rounded-full hover:bg-white hover:text-navy transition">Hubungi Kami</a>
        </div>
    </div>
</section>

<!-- Sambutan Kepala Sekolah (Optional) -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center gap-12">
            <div class="w-full md:w-1/3">
                <img src="https://via.placeholder.com/400x500" alt="Kepala Sekolah" class="rounded-lg shadow-xl w-full object-cover h-[400px]">
            </div>
            <div class="w-full md:w-2/3">
                <h2 class="text-3xl font-bold text-navy mb-4">Sambutan Kepala Sekolah</h2>
                <div class="w-20 h-1 bg-gold mb-6"></div>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    "Assalamu'alaikum Warahmatullahi Wabarakatuh. Puji syukur kita panjatkan ke hadirat Allah SWT. Website ini hadir sebagai media informasi dan komunikasi antara sekolah dengan masyarakat luas. Kami berkomitmen untuk terus meningkatkan kualitas pendidikan dan pelayanan kepada seluruh civitas akademika."
                </p>
                <p class="font-bold text-navy text-lg">H. Nama Kepala Sekolah, M.Pd.</p>
                <p class="text-gray-500">Kepala SMPN 1 Bogor</p>
            </div>
        </div>
    </div>
</section>

<!-- Berita Terbaru -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-navy mb-2">Berita Terbaru</h2>
            <div class="w-24 h-1 bg-gold mx-auto mb-4"></div>
            <p class="text-gray-600">Informasi terkini seputar kegiatan dan agenda sekolah.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php foreach($berita_list as $berita): ?>
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 news-card flex flex-col h-full">
                <div class="h-48 overflow-hidden relative">
                     <img src="assets/images/<?php echo $berita->foto ? $berita->foto : 'default-news.jpg'; ?>" 
                          alt="<?php echo htmlspecialchars($berita->judul); ?>" 
                          class="w-full h-full object-cover transform hover:scale-110 transition duration-500"
                          onerror="this.src='https://via.placeholder.com/400x250?text=No+Image'">
                    <div class="absolute top-0 right-0 bg-gold text-navy px-3 py-1 font-bold text-xs m-2 rounded">
                        <?php echo date('d M Y', strtotime($berita->tanggal_post)); ?>
                    </div>
                </div>
                <div class="p-6 flex-grow flex flex-col">
                    <h3 class="text-xl font-bold text-navy mb-3 line-clamp-2">
                        <a href="#" class="hover:text-gold transition"><?php echo htmlspecialchars($berita->judul); ?></a>
                    </h3>
                    <p class="text-gray-600 mb-4 line-clamp-3 text-sm flex-grow">
                        <?php echo excerpt($berita->isi, 15); ?>
                    </p>
                    <a href="#" class="text-navy font-semibold hover:text-gold transition text-sm flex items-center mt-auto">
                        Baca Selengkapnya <i class="fas fa-arrow-right ml-2 text-xs"></i>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-12">
            <a href="#" class="inline-block border-2 border-navy text-navy font-bold py-3 px-8 rounded-full hover:bg-navy hover:text-white transition">
                Lihat Semua Berita
            </a>
        </div>
    </div>
</section>

<!-- Prestasi Siswa -->
<section class="py-16 bg-navy text-white relative">
    <!-- Decorative element -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-10 pointer-events-none">
        <i class="fas fa-trophy absolute -bottom-10 -right-10 text-[300px]"></i>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="flex flex-col md:flex-row justify-between items-end mb-12">
            <div>
                <h2 class="text-3xl font-bold text-white mb-2">Prestasi Siswa</h2>
                <div class="w-24 h-1 bg-gold mb-4"></div>
                <p class="text-gray-300">Kebanggaan kami atas pencapaian siswa-siswi SMPN 1 Bogor.</p>
            </div>
            <a href="#" class="hidden md:inline-block text-gold hover:text-white transition font-semibold">
                Lihat Selengkapnya <i class="fas fa-arrow-right ml-1"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php foreach($prestasi_list as $prestasi): ?>
            <div class="bg-white/10 backdrop-blur-sm border border-white/20 p-6 rounded-lg hover:bg-white/20 transition duration-300">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-full bg-gold flex items-center justify-center text-navy text-xl font-bold">
                        <i class="fas fa-medal"></i>
                    </div>
                    <span class="text-xs font-mono bg-navy-dark px-2 py-1 rounded text-gold border border-gold/30">
                        <?php echo $prestasi->tingkat; ?>
                    </span>
                </div>
                <h4 class="text-lg font-bold text-white mb-1"><?php echo htmlspecialchars($prestasi->juara); ?></h4>
                <p class="text-gold text-sm font-semibold mb-2"><?php echo htmlspecialchars($prestasi->nama_lomba); ?></p>
                <div class="border-t border-white/20 my-3"></div>
                <div class="flex items-center text-sm text-gray-300">
                    <i class="fas fa-user-graduate mr-2"></i>
                    <span class="truncate"><?php echo htmlspecialchars($prestasi->nama_siswa); ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <div class="text-center mt-8 md:hidden">
            <a href="#" class="text-gold hover:text-white transition font-semibold">
                Lihat Selengkapnya <i class="fas fa-arrow-right ml-1"></i>
            </a>
        </div>
    </div>
</section>

<!-- Call to Action PPDB -->
<section class="py-20 bg-gold">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-navy mb-4">Ingin Menjadi Bagian dari Kami?</h2>
        <p class="text-navy-dark text-lg mb-8 max-w-2xl mx-auto">Penerimaan Peserta Didik Baru (PPDB) akan segera dibuka. Persiapkan diri Anda untuk bergabung dengan SMP Negeri 1 Bogor.</p>
        <a href="#" class="bg-navy text-white font-bold py-4 px-10 rounded-full shadow-lg hover:bg-navy-dark transition transform hover:scale-105 inline-flex items-center">
            <i class="fas fa-clipboard-check mr-2"></i> Informasi PPDB
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
