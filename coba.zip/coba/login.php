<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Login Admin</h2>
        
        <?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "<div class='bg-red-100 text-red-700 p-3 rounded mb-4 text-sm'>Login gagal! Username dan password salah!</div>";
            }else if($_GET['pesan'] == "logout"){
                echo "<div class='bg-green-100 text-green-700 p-3 rounded mb-4 text-sm'>Anda telah berhasil logout</div>";
            }else if($_GET['pesan'] == "belum_login"){
                echo "<div class='bg-yellow-100 text-yellow-700 p-3 rounded mb-4 text-sm'>Anda harus login untuk mengakses admin panel</div>";
            }
        }
        ?>

        <form action="cek_login.php" method="post">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Masukkan Username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-red-900 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full" type="submit">
                    Masuk
                </button>
            </div>
        </form>
        <p class="mt-4 text-center text-sm text-gray-500"><a href="index.php" class="text-red-500">Kembali ke Beranda</a></p>
    </div>
</body>
</html>
