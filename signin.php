<?php
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = connectDB();

    // Ambil data dari formulir login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memeriksa kredensial di database
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Data ditemukan, verifikasi password
        $row = $result->fetch_assoc();
        $hashedPasswordFromDB = $row['password'];

        // Memeriksa kecocokan password menggunakan password_verify()
        if (password_verify($password, $hashedPasswordFromDB)) {
            // Password cocok, arahkan ke halaman menusatu.html
            header("Location: menusatu.php");
            exit();
        } else {
            // Password tidak cocok
            echo '<script>alert("Invalid username or password. Please try again."); window.location.href = "sign_in.php";</script>';
            exit(); // Pastikan keluar dari skrip setelah menggunakan header()
        }
    }

    $conn->close();
}


// Cek apakah ada data yang dikirimkan melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Periksa username dan password yang diterima dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Username dan password yang diizinkan
    $allowed_username = 'adminkeepcutku';
    $allowed_password = 'keepyourcut123';

    // Periksa apakah username dan password sesuai
    if ($username === $allowed_username && $password === $allowed_password) {
        // Jika sesuai, redirect ke halaman menusatu.html
        header("Location: admin_page.php");
        exit();
    } else {
        // Jika tidak sesuai, bisa berikan pesan error atau tindakan lain
        echo "Username atau password salah. Silakan coba lagi.";
    }
}
?>


