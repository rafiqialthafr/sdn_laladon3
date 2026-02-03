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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
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
<body class="bg-gray-50 text-gray-800">

    <!-- Header / Navbar -->
    <nav class="bg-white shadow-md fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-red-900 rounded-full flex items-center justify-center text-white font-bold mr-3">
                        SD
                    </div>
                    <span class="font-bold text-xl text-red-900">SD Negeri Laladon 3 </span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-gray-600 hover:text-red-900 font-medium transition">Beranda</a>
                    <a href="#about" class="text-gray-600 hover:text-red-900 font-medium transition">Profil</a>
                    <a href="#visimisi" class="text-gray-600 hover:text-red-900 font-medium transition">Visi & Misi</a>
                    <a href="#teachers" class="text-gray-600 hover:text-red-900 font-medium transition">Data Guru</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative bg-gray-900 h-screen flex items-center justify-center">
        <div class="absolute inset-0 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="School Building" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-red-900/70"></div>
        </div>
        <div class="relative z-10 text-center px-4">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-4 tracking-tight">
                Selamat Datang di <br><span class="text-red-200">SD Negeri Laladon 3</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
                Mencetak Generasi Cerdas, Berkarakter, dan Berdaya Saing Global.
            </p>
            <a href="#about" class="inline-block px-8 py-3 bg-white text-red-900 font-bold rounded-lg shadow-lg hover:bg-gray-100 transition transform hover:-translate-y-1">
                Lihat Profil
            </a>
        </div>
    </section>

    <!-- Content Grid: About & Visi Misi -->
    <section id="about" class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">
            <!-- Left: About -->
            <div class="space-y-6">
                <div class="flex items-center space-x-2">
                    <span class="h-1 w-12 bg-red-900"></span>
                    <h2 class="text-sm font-bold text-red-900 uppercase tracking-wider">Tentang Sekolah</h2>
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
            <div id="visimisi" class="bg-red-900 text-white p-8 md:p-12 rounded-2xl shadow-xl relative overflow-hidden">
                <div class="absolute top-0 right-0 -mr-16 -mt-16 w-64 h-64 rounded-full bg-red-800 opacity-50"></div>
                <div class="relative z-10">
                    <h3 class="text-2xl font-bold mb-6 border-b border-red-700 pb-4">Visi & Misi</h3>
                    <div class="mb-8">
                        <h4 class="font-bold text-red-200 mb-2">Visi</h4>
                        <p class="italic">"Menjadi sekolah unggulan yang berlandaskan iman, ilmu, dan budi pekerti luhur."</p>
                    </div>
                    <div>
                        <h4 class="font-bold text-red-200 mb-4">Misi</h4>
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
    <section id="teachers" class="py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-red-900">Data Guru Pengajar</h2>
                <p class="mt-2 text-gray-600">Daftar tenaga pendidik profesional SD Negeri Laladon 3</p>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full whitespace-nowrap">
                        <thead>
                            <tr class="bg-gray-50 border-b border-gray-200 text-left">
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
                            <tr class="hover:bg-gray-50 transition">
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
