<?php
include 'koneksi.php'; // Sertakan file koneksi.php

$conn = connectDB(); // Koneksi ke database

// Mengambil data yang dikirim dari JavaScript
$data = json_decode(file_get_contents("php://input"));

// Menyiapkan query untuk memasukkan informasi ke dalam tabel
$sql = "INSERT INTO tb_booking (service, artist, price, date, time, name, gender, phone) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
  "ssssssss",
  $data->service,
  $data->artist,
  $data->price,
  $data->date,
  $data->time,
  $data->name,
  $data->gender,
  $data->phone
);

// Eksekusi query
if ($stmt->execute()) {
  echo "Booking successful!"; // Berhasil memasukkan data
} else {
  echo "Error: " . $sql . "<br>" . $conn->error; // Gagal memasukkan data
}

$stmt->close();
$conn->close();
?>
