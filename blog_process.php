<?php
include 'koneksi.php';

if (isset($_POST['save'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image_url = "https://placehold.co/600x400/34495e/ffffff?text=" . urlencode($title);

    if (!empty($_FILES['image']['name'])) {
        $target_dir = "uploads/";
        if (!is_dir($target_dir)) mkdir($target_dir);
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $image_url = $target_file;
    }

    $query = "INSERT INTO blog (title, content, image) VALUES ('$title', '$content', '$image_url')";
    if (mysqli_query($koneksi, $query)) {
        header("Location: admin_dashboard.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image_url = $_POST['existing_image'];

    if (!empty($_FILES['image']['name'])) {
        $target_dir = "uploads/";
        if (!is_dir($target_dir)) mkdir($target_dir);
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $image_url = $target_file;
    }

    $query = "UPDATE blog SET title='$title', content='$content', image='$image_url' WHERE id='$id'";
    if (mysqli_query($koneksi, $query)) {
        header("Location: admin_dashboard.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $query = "DELETE FROM blog WHERE id='$id'";
    if (mysqli_query($koneksi, $query)) {
        header("Location: admin_dashboard.php");
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
