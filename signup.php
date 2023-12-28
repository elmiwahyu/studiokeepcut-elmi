<?php
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = connectDB();

    // Ambil data dari formulir pendaftaran
    $username = $_POST['username'];
    $email = $_POST['email'];
    $passwordFromForm = $_POST['password'];

    // Hash password sebelum menyimpannya ke database
    $hashedPassword = password_hash($passwordFromForm, PASSWORD_DEFAULT);

    // Query untuk menyimpan data ke dalam tabel pengguna dengan password yang di-hash
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        // Redirect ke halaman sign-in setelah sign-up berhasil
        header("Location: sign_in.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

