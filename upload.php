<?php
require('koneksi.php');

// Tangani permintaan upload
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $artistName = $_POST["artistName"];
    $priceRange = $_POST["priceRange"];
    
    $artistImage = $_FILES["artistImage"]["name"];
    $targetDir = "uploads/"; // Direktori penyimpanan file
    $targetFilePath = $targetDir . basename($artistImage);
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Izinkan hanya jenis file gambar tertentu
    $allowedTypes = array('jpg', 'png', 'jpeg', 'gif');
    if (in_array($fileType, $allowedTypes)) {
        // Pindahkan file yang diunggah ke direktori target
        if (move_uploaded_file($_FILES["artistImage"]["tmp_name"], $targetFilePath)) {
            // Masukkan data ke dalam tabel
            $sql = "INSERT INTO hair_artists (artist_name, price_range, artist_image) VALUES ('$artistName', '$priceRange', '$artistImage')";
            if ($conn->query($sql) === TRUE) {
                echo "Unggahan berhasil dan data disimpan ke database.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Maaf, terjadi kesalahan saat mengunggah file.";
        }
    } else {
        echo "Maaf, hanya file gambar yang diizinkan untuk diunggah.";
    }
}

$conn->close();
?>
