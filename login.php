<?php 
    session_start();
    include 'koneksi.php';
    
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Line 9: Query langsung mencocokkan username DAN password
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($koneksi, $query);

        // Line 11: Cukup cek apakah ada 1 data yang cocok
        if (mysqli_num_rows($result) === 1) {
            $_SESSION['admin'] = true;
            $_SESSION['username'] = $username; // Opsional: buat nampilin nama di dashboard
            header("Location: admin_dashboard.php");
            exit;
        }
        $error = "Username atau password salah!";
    }
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #f0f2f5;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .login-card {
            max-width: 400px;
            width: 100%;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            background: #fff;
        }
    </style>
</head>
<body>

<div class="login-card">
    <div class="text-center mb-4">
        <h3 class="fw-bold text-primary">Login Admin</h3>
        <p class="text-muted">Silahkan masuk untuk mengelola website</p>
    </div>

    <?php if (isset($error)) : ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>

    <form action="" method="POST">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required autofocus>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" name="login" class="btn btn-primary w-100 py-2">Masuk</button>
    </form>
    <div class="text-center mt-3">
        <a href="index.php" class="text-decoration-none">Kembali ke Beranda</a>
    </div>
</div>

</body>
</html>
