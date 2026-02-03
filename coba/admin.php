<?php
session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
    header("location:login.php?pesan=belum_login");
    exit;
}
include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM guru ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Data Guru</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
    <script>
        tailwind.config = {
            theme: {
                extend: { colors: { professional: '#374151' } }
            }
        }
    </script>
</head>
<body class="bg-gray-100">

    <div class="flex h-screen overflow-hidden">
        
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-white flex-shrink-0 hidden md:flex flex-col">
            <div class="h-16 flex items-center justify-center border-b border-gray-800">
                <span class="font-bold text-xl">Admin Panel</span>
            </div>
            <nav class="flex-1 py-4">
                <a href="#" class="block py-3 px-6 bg-red-900 text-white font-medium border-l-4 border-red-400">Data Guru</a>
                <a href="index.php" target="_blank" class="block py-3 px-6 text-gray-400 hover:bg-gray-800 transition">Lihat Website</a>
            </nav>
            <div class="p-4 border-t border-gray-800">
                <a href="logout.php" class="flex items-center text-red-400 hover:text-red-300">Logout</a>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col w-full">
            <header class="bg-white shadow h-16 flex justify-between items-center px-6">
                <h1 class="text-xl font-bold text-gray-800">Kelola Data Guru</h1>
                <div class="flex items-center">
                    <div class="mr-4 text-right hidden sm:block">
                        <p class="text-sm font-bold text-gray-700"><?php echo $_SESSION['username'] ?? 'Admin'; ?></p>
                        <p class="text-xs text-gray-500">Administrator</p>
                    </div>
                </div>
            </header>

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-lg font-semibold text-gray-700">Daftar Guru</h2>
                        <a href="tambah_guru.php" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow transition">
                            + Tambah Guru
                        </a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama / NIP</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Mapel</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No HP</th>
                                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <?php 
                                $no = 1;
                                while($d = mysqli_fetch_assoc($query)){
                                ?>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo $no++; ?></td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm font-medium text-gray-900"><?php echo htmlspecialchars($d['nama']); ?></div>
                                        <div class="text-xs text-gray-500"><?php echo htmlspecialchars($d['nip']); ?></div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo htmlspecialchars($d['mata_pelajaran']); ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo htmlspecialchars($d['no_hp']); ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                        <a href="edit_guru.php?id=<?php echo $d['id']; ?>" class="text-yellow-600 hover:text-yellow-900 mx-2 font-bold">Edit</a>
                                        <a href="hapus_guru.php?id=<?php echo $d['id']; ?>" class="text-red-600 hover:text-red-900 mx-2 font-bold" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
