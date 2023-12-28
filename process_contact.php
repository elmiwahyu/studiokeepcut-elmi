<?php
require 'koneksi.php';

if (isset($_POST['submit'])) {
    $conn = connectDB(); // Hubungkan ke database di sini

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Memeriksa apakah ada data yang kosong
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Menyimpan data ke dalam tabel 'contacts'
        $sql = "INSERT INTO contacts (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

        if ($conn->query($sql) === TRUE) {
            // Pesan berhasil terkirim
            echo "<script>alert('Pesan berhasil terkirim!');window.location.href='index.html';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "<script>alert('Field kosong, pesan tidak terkirim!');window.location.href='index.html'</script>";
    }

    $conn->close(); // Tutup koneksi setelah selesai
}
?>
