<?php
include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM guru ORDER BY nama ASC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SD Negeri Laladon 3</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        /* Membuat background bulat pada panah agar terlihat seperti tombol */
.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: transparent; /* Transparan */
    background-size: 50% 50%;
    border-radius: 50%; /* Membuat jadi bulat */
    border: 2px solid white; /* Tambahan border agar terlihat */
    width: 50px;
    height: 50px;
    cursor: pointer;
    pointer-events: auto;
    transition: all 0.3s ease;
}

/* Container tombol panah */
.carousel-control-prev,
.carousel-control-next {
    position: absolute;
    top: 50%; /* Vertical center */
    bottom: auto; /* Reset bottom */
    width: 50px; /* Batasi lebar area klik */
    height: 50px; /* Batasi tinggi area klik */
    transform: translateY(-50%);
    background: none;
    opacity: 1;
    pointer-events: auto; /* Aktifkan klik pada tombol */
}

/* Posisi kedua tombol di kanan dan ditumpuk vertikal */
.carousel-control-next { 
    right: 20px; 
    top: calc(50% + 30px); /* Geser ke bawah 30px dari tengah */
}
.carousel-control-prev { 
    left: auto; /* Reset left default */
    right: 20px; /* Posisi sama rata di kanan */
    top: calc(50% - 30px); /* Geser ke atas 30px dari tengah */
}

/* Efek saat kursor diarahkan ke tombol panah */
.carousel-control-prev:hover .carousel-control-prev-icon,
.carousel-control-next:hover .carousel-control-next-icon {
    background-color: #facc15; /* Kuning cerah (yellow-400) */
    border-color: #facc15;
}
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        professional: '#374151',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-yellow-50 text-gray-800">

    <!-- Header / Navbar -->
    <nav class="bg-white shadow-md fixed top-0 left-0 w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center text-yellow-900 font-bold mr-3">
                        <img src="logo.jpeg" alt="Logo">
                    </div>
                    <span class="font-bold text-xl text-yellow-600">SD Negeri Laladon 3 </span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-gray-600 hover:text-yellow-600 font-medium transition">Beranda</a>
                    <a href="#about" class="text-gray-600 hover:text-yellow-600 font-medium transition">Profil</a>
                    <a href="#visimisi" class="text-gray-600 hover:text-yellow-600 font-medium transition">Visi & Misi</a>
                    <a href="#teachers" class="text-gray-600 hover:text-yellow-600 font-medium transition">Data Guru</a>
                    <a href="login.php" class="bg-yellow-500 text-white px-4 py-2 rounded-full font-bold hover:bg-yellow-600 transition">Login Admin</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div id="home" class="carousel slide" data-bs-ride="carousel" style="margin-top: 64px;">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#home" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#home" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#home" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/foto1.jpeg" class="d-block w-100" style="object-fit: cover; height: 500px;" alt="Slider 1">
        </div>
        <div class="carousel-item">
            <img src="img/foto2.jpeg" class="d-block w-100" style="object-fit: cover; height: 500px;" alt="Slider 2">
        </div>
        <div class="carousel-item">
            <img src="img/foto3.jpeg" class="d-block w-100" style="object-fit: cover; height: 500px;" alt="Slider 3">
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#home" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#home" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
    <!-- Content Grid: About & Visi Misi -->
    <section id="about" class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">
            <!-- Left: About -->
            <div class="space-y-6">
                <div class="flex items-center space-x-2">
                    <span class="h-1 w-12 bg-yellow-400"></span>
                    <h2 class="text-sm font-bold text-yellow-600 uppercase tracking-wider">Tentang Sekolah</h2>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 leading-tight">Membangun Masa Depan Sejak 1990</h3>
                <p class="text-gray-600 leading-relaxed">
                    SD Negeri Laladon 3 berdedikasi untuk memberikan pendidikan berkualitas tinggi dengan fasilitas modern dan tenaga pengajar profesional.
                </p>
                <div class="grid grid-cols-2 gap-4 mt-8">
                    <img src="perpustakaan.png" alt="Library" class="rounded-lg shadow-md hover:shadow-xl transition duration-300">
                </div>
            </div>

            <!-- Right: Visi & Misi -->
            <div id="visimisi" class="bg-yellow-500 text-white p-8 md:p-12 rounded-2xl shadow-xl relative overflow-hidden">
                <div class="absolute top-0 right-0 -mr-16 -mt-16 w-64 h-64 rounded-full bg-yellow-400 opacity-50"></div>
                <div class="relative z-10">
                    <h3 class="text-2xl font-bold mb-6 border-b border-yellow-300 pb-4">Visi & Misi</h3>
                    <div class="mb-8">
                        <h4 class="font-bold text-yellow-100 mb-2">Visi</h4>
                        <p class="italic">TERWUJUDNYA PESERTA DIDIK YANG BERIMAN DAN BERTAKWA, BERKARAKTER MULIA, CERDAS, SEHAT, MANDIRI, PEDULI LINGKUNGAN BERWAWASAN KEBANGSAAN DAN BERPRESTASI."</p>
                    </div>
                    <div>
                        <h4 class="font-bold text-yellow-100 mb-4">Misi</h4>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <span class="mr-2">&bull;</span>
                                <span>Melaksanakan pembelajaran aktif, inovatif, dan menyenangkan.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="mr-2">&bull;</span>
                                <span>Mengembangkan potensi siswa di bidang akademik dan non-akademik.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Data Guru Section -->
    <section id="teachers" class="py-20 bg-yellow-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-yellow-600">Data Guru Pengajar</h2>
                <p class="mt-2 text-gray-600">Daftar tenaga pendidik profesional SD Negeri Laladon 3</p>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full whitespace-nowrap">
                        <thead>
                            <tr class="bg-yellow-100/50 border-b border-gray-200 text-left">
                                <th class="px-6 py-4 font-bold text-gray-500 uppercase tracking-wider text-xs">No</th>
                                <th class="px-6 py-4 font-bold text-gray-500 uppercase tracking-wider text-xs">Nama Guru</th>
                                <th class="px-6 py-4 font-bold text-gray-500 uppercase tracking-wider text-xs">NIP</th>
                                <th class="px-6 py-4 font-bold text-gray-500 uppercase tracking-wider text-xs">Mata Pelajaran</th>
                                <th class="px-6 py-4 font-bold text-gray-500 uppercase tracking-wider text-xs">No HP</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <?php 
                            $no = 1;
                            while($row = mysqli_fetch_assoc($query)) { 
                            ?>
                            <tr class="hover:bg-yellow-50 transition">
                                <td class="px-6 py-4 text-gray-500"><?php echo $no++; ?></td>
                                <td class="px-6 py-4 font-medium text-gray-900"><?php echo htmlspecialchars($row['nama']); ?></td>
                                <td class="px-6 py-4 text-gray-500"><?php echo htmlspecialchars($row['nip']); ?></td>
                                <td class="px-6 py-4 text-gray-500"><?php echo htmlspecialchars($row['mata_pelajaran']); ?></td>
                                <td class="px-6 py-4 text-gray-500"><?php echo htmlspecialchars($row['no_hp']); ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center md:text-left">
            <p class="font-bold text-lg">SD Negeri Laladon 3</p>
            <p class="text-gray-400 text-sm mt-1"> Gg. Amil No.1, Laladon, Kec. Ciomas, Kabupaten Bogor, Jawa Barat 16610</p>
            <div class="text-gray-400 text-sm mt-4">
                &copy; <?php echo date('Y'); ?> SD Negeri Laladon 3. All rights reserved.
            </div>
        </div>
    </footer>

</body>
</html>
