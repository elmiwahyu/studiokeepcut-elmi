<?php
require('koneksi.php'); // Menggunakan file koneksi.php yang sudah dibuat sebelumnya

// Query untuk mengambil data dari tabel hair_artists
$sql = "SELECT * FROM hair_artists";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Jika data ditemukan, tampilkan dalam bentuk tabel
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nama Artist</th>
                <th>Rentang Harga</th>
                <th>Gambar</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["artist_name"] . "</td>
                <td>" . $row["price_range"] . "</td>
                <td><img src='uploads/" . $row["artist_image"] . "' width='100' height='100'></td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data yang ditemukan.";
}

$conn->close();
?>
