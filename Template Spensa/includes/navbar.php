<nav class="bg-navy text-white sticky top-0 z-50 shadow-lg">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-20">
            <!-- Logo Section -->
            <a href="index.php" class="flex items-center space-x-3">
                <!-- Ganti src dengan logo sekolah yang sebenarnya -->
                <img src="https://via.placeholder.com/50?text=Logo" alt="Logo SMPN 1 Bogor" class="h-10 w-10 rounded-full border-2 border-gold">
                <div class="flex flex-col">
                    <span class="text-lg font-bold leading-none">SMP NEGERI 1 BOGOR</span>
                    <span class="text-xs text-gold">Berprestasi, Berkarakter, Berbudaya</span>
                </div>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8 items-center">
                <a href="index.php" class="hover:text-gold transition duration-300 font-medium">Beranda</a>
                
                <!-- Dropdown Tentang Kami -->
                <div class="relative group">
                    <button class="flex items-center hover:text-gold transition duration-300 font-medium focus:outline-none">
                        Tentang Kami
                        <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </button>
                    <!-- Dropdown Menu -->
                    <div class="absolute left-0 mt-2 w-48 bg-white text-gray-800 rounded-md shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top-left">
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-navy">Profil Sekolah</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-navy">Visi & Misi</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-navy">Sejarah</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-navy">Guru & Staf</a>
                    </div>
                </div>

                <!-- Dropdown Kesiswaan -->
                <div class="relative group">
                    <button class="flex items-center hover:text-gold transition duration-300 font-medium focus:outline-none">
                        Kesiswaan
                        <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </button>
                    <div class="absolute left-0 mt-2 w-48 bg-white text-gray-800 rounded-md shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top-left">
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-navy">Ekstrakurikuler</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-navy">OSIS</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-navy">Prestasi Siswa</a>
                    </div>
                </div>

                <a href="#" class="hover:text-gold transition duration-300 font-medium">Berita</a>
                <a href="#" class="hover:text-gold transition duration-300 font-medium">Galeri</a>
                <a href="#" class="hover:text-gold transition duration-300 font-medium">Kontak</a>

                <!-- PPDB Button -->
                 <a href="#" class="bg-gold text-navy px-4 py-2 rounded-full font-bold hover:bg-yellow-400 transition transform hover:scale-105 shadow-md">
                    PPDB Online
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden focus:outline-none text-white hover:text-gold">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu (Hidden by default) -->
    <div id="mobile-menu" class="hidden md:hidden bg-navy-dark border-t border-navy-light">
        <a href="index.php" class="block px-4 py-3 hover:bg-navy-light border-b border-navy-light">Beranda</a>
        <a href="#" class="block px-4 py-3 hover:bg-navy-light border-b border-navy-light">Profil Sekolah</a>
        <a href="#" class="block px-4 py-3 hover:bg-navy-light border-b border-navy-light">Visi & Misi</a>
        <a href="#" class="block px-4 py-3 hover:bg-navy-light border-b border-navy-light">Ekstrakurikuler</a>
        <a href="#" class="block px-4 py-3 hover:bg-navy-light border-b border-navy-light">Berita</a>
        <a href="#" class="block px-4 py-3 hover:bg-navy-light text-gold font-bold">PPDB Online</a>
    </div>
</nav>

<script>
    // Simple script for mobile menu toggle
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
